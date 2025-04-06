<?php
session_start(); // Начало сессии

// Параметры подключения к базе данных
$host = 'MySQL-8.2'; // Хост
$db = 'xacaton'; // Имя базы данных
$user = 'root'; // Имя пользователя
$pass = ''; // Пароль

try {
    // Создание подключения к базе данных с использованием PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Установка режима ошибок PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Обработка ошибок подключения
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}

// Обработка регистрации
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $inn = $_POST['inn'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Хеширование пароля

    // Проверка, существует ли уже пользователь с таким email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $existingUser   = $stmt->fetch();

    if ($existingUser ) {
        echo "Пользователь с таким email уже существует!";
    } else {
        // Вставка данных в таблицу
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, inn, password) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$full_name, $email, $inn, $password])) {
            echo "Регистрация прошла успешно!";
        } else {
            echo "Ошибка регистрации!";
        }
    }
}

// Обработка авторизации
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    // Проверка существования ключей в массиве $_POST
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Получение пользователя из базы данных
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Проверка пароля
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Авторизация прошла успешно!";
            // Перенаправление на защищенную страницу
            header("Location: protected_page.php");
            exit();
        } else {
            echo "Неверный логин или пароль!";
        }
    } else {
        echo "Пожалуйста, заполните все поля для авторизации.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles112542.css">
    <title>ТСЖ</title>
    <style>
        /* Основные стили */
   
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: white;
            max-width: 100%;
            overflow-x: hidden;

        }

        header {
            height: 80px;
            width: 100vw;
            padding: 0 30px;
            background-color:rgb(255, 255, 255);
            position: fixed;
            z-index: 100;
            box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .LLogo {
            height: 70px;
            width: 170px;
        }
        /* Навигационное меню */
.nav {
    min-height: 100%; /* Минимальная высота навигации */
    width: 250px; /* Ширина навигации */
    background-color: var(--background-color2); /* Фон навигации */
    position: absolute; /* Абсолютное позиционирование */
    top: 0px; /* Сдвиг вверх */
    left: 0; /* Сдвиг влево */
    box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825); /* Тень навигации */
    display: flex; /* Использование flexbox */
    flex-direction: column; /* Вертикальное расположение элементов */
    justify-content: space-between; /* Расположение элементов по краям */
    overflow: hidden; /* Скрытие переполнения */
    padding: 30px 0 20px 10px; /* Отступы */
    transition: transform 0.5s ease-in-out; /* Плавный переход */
}

/* Контейнер для навигации */
.navcontainer {
    width: 250px; /* Фиксированная ширина для навигации */
    height: calc(100vh - 70px); /* Высота с учетом заголовка */
    overflow-y: scroll; /* Вертикальная прокрутка */
    overflow-x: hidden; /* Скрытие горизонтальной прокрутки */
    transition: all 0.5s ease-in-out; /* Плавный переход */
}

/* Стили для скрытия полосы прокрутки */
.navcontainer::-webkit-scrollbar {
    display: none; /* Скрыть полосу прокрутки */
}


/* Стили для опций навигации */
.nav-option {
    width: 250px; /* Ширина опции */
    height: 60px; /* Высота опции */
    display: flex; /* Использование flexbox */
    align-items: center; /* Выравнивание по вертикали */
    padding: 0 20px; /* Отступы */
    gap: 20px; /* Промежуток между элементами */
    transition: all 0.1s ease-in-out; /* Плавный переход */
}

/* Выравнивание текста в опциях навигации */
.nav-option h3 {
    text-align: left; /* Выравнивание текста по левому краю */
}

/* Эффект при наведении на опции навигации */
.nav-option:hover {
    border-left: 5px solid #a2a2a2; /* Левый бордер при наведении */
    background-color: #dadada; /* Фон при наведении */
    cursor: pointer; /* Указатель при наведении */
}

/* Размеры иконок в навигации */
.nav-img {
    width: 30px; /* Ширина иконок */
    height: 30px; /* Высота иконок */
}

/* Стили для ссылок в опциях навигации */
.nav-option a {
    text-decoration: none; /* Убираем подчеркивание */
    color: inherit; /* Установите цвет текста по умолчанию */
}

/* Верхние опции навигации */
.nav-upper-options {
    display: flex; /* Использование flexbox */
    flex-direction: column; /* Вертикальное расположение элементов */
    align-items: center; /* Выравнивание по центру */
    gap: 10px; /* Промежуток между элементами */
}

/* Кнопка выхода */
.logout button {
    display: flex; /* Использование flexbox */
    align-items: center; /* Выравнивание по вертикали */
    width: 100%; /* Ширина на всю ширину контейнера */
    padding: 10px; /* Внутренние отступы */
    background: none; /* Убираем фон */
    border: none; /* Убираем границу */
    cursor: pointer; /* Указатель при наведении */
    color: rgb(1, 0, 0); /* Цвет текста */
}

/* Отступ между изображением и текстом в кнопке выхода */
.logout button img {
    margin-right: 10px; /* Отступ справа */
}

/* Стили для первой опции навигации */
.option1 {
    border-left: 5px solid #6aae95; /* Левый бордер */
    background-color: #1a315e; /* Фон */
    color: white; /* Цвет текста */
    cursor: pointer; /* Указатель при наведении */
}

/* Эффект при наведении на первую опцию */
.option1:hover {
    border-left: 5px solid #6aae95; /* Левый бордер при наведении */
    background-color:rgb(30, 65, 135); /* Фон при наведении */
}


.icn {
    height: 30px;
}

.menuicn {
    cursor: pointer;
}

.searchbar,
.message,
.logosec {
    display: flex;
    align-items: center;
    justify-content: center;
}

.searchbar2 {
    display: none;
}


.searchbar input {
    width: 250px;
    height: 42px;
    border-radius: 50px 0 0 50px;
    background-color: var(--background-color3);
    padding: 0 20px;
    font-size: 15px;
    outline: none;
    border: none;
}

.searchbtn {
    width: 50px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0px 50px 50px 0px;
    background-color: var(--secondary-color);
    cursor: pointer;
}

.message {
    gap: 40px;
    position: relative;
    cursor: pointer;
}

.circle {
    height: 7px;
    width: 7px;
    position: absolute;
    background-color: #fa7bb4;
    border-radius: 50%;
    left: 19px;
    top: 8px;
}

.dp {
    height: 40px;
    width: 40px;
    background-color: #626262;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.main-container {
    display: flex; /* Используем Flexbox для расположения элементов */
    width: 100vw;
    position: relative;
    top: 70px; /* Сдвигаем вниз под header */
    z-index: 1;
}
       
.navcontainer::-webkit-scrollbar {
    display: none;
}

button {
            background-color: #1a315e;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

 .calendar-container {
    flex: 1; /* Занимает оставшееся пространство */
    display: flex;
    flex-direction: column;
    padding: 50px;

}
        #calendar { display: grid; grid-template-columns: repeat(7, 1fr); gap: 10px; position: relative; }
        .day { width: 100%; height: 100%; line-height: 100px; text-align: center; border: 1px solid #ccc; cursor: pointer; transition: background-color 0.3s; }
        .day:hover { background-color: #3e8bbe; }
        .today { border: 4px solid rgb(194, 23, 23) ; }
        .kana { display: grid; grid-template-columns: repeat(7, 1fr); text-align: center; font-weight: bold; margin-bottom: 5px; font-size: 18px; }
        .kana div { padding: 30px 60px;}
        .month-header { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 10px 20px; }
        .arrow { cursor: pointer; font-size: 24px; }
        footer { background-color: #4CAF50; color: white; text-align: center; padding: 10px 20px; position: relative; bottom: 0; width: 100%; }
        
        .has-meeting {
    background-color:#6aae95; /* Светло-красный цвет для дней с заседаниями */
}

        /* Стили для модального окна */
        .modal {
            display: none; /* Скрыто по умолчанию */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        footer {
            background-color: #1a315e;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
            height: 60px; /* Высота подвала */
            margin-top: 75px; /* Отодвигает подвал вниз */
        }
</style>
<body>

    <header>
        <img src="1540771.png" class="LLogo">
        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png" class="icn" alt="">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" class="dpicn" alt="dp">
            </div>
        </div>
    </header>

    <div class="main-container">
    <div class="navcontainer">  <!-- Убрали класс navclose -->
    <nav class="nav">
    <div class="nav-upper-options">

    <div class="nav-option option1">              
        <h3><a href="index.php">Главная</a></h3>
    </div>

    <div class="nav-option option2" id="ecoanalyze">
        <h3><a href="admin1.php">Заседания</a></h3>
    </div>
    <div class="nav-option option5">
        <h3><a href="admin2.php">Жильцы</a></h3>
    </div>
    <div class="nav-option option3">
        <h3><a href="admin3.php">Штрафы и нарушения</a></h3>
    </div>
    <div class="nav-option option3">
        <h3><a href="admin4.php">Админы</a></h3>
    </div>
    <div class="nav-option option3">
        <h3><a href="admin5.php">Интеграция с системами</a></h3>
    </div>
    <div class="nav-option logout">
        <form action="logout.php" method="post">
            <button type="submit" style="background: none; border: none; cursor: pointer; display: flex; align-items: center; width: 100%;">
                <h3 style="margin-left: 10px;">Выход</h3>
            </button>
        </form>
    </div>
</div>
    </nav>
        </div>
        
        
        

</body>
</html>