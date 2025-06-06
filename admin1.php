<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style11.css">
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

/* Цвет выделения для всех опций навигации */
:root {
    --highlight-color: #6aae95; /* Серый цвет для выделения */
}

/* Стили для опции "Заседания" */
#ecoanalyze {
    border-left: 5px solid var(--highlight-color); /* Левый бордер */
    background-color: var(--highlight-color); /* Серый фон */
    color: black; /* Черный текст */
    cursor: pointer; /* Указатель при наведении */
}

/* Эффект при наведении на опцию "Заседания" */
#ecoanalyze:hover {
    background-color: #b2b2b2; /* Более светлый серый фон при наведении */
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

/* Эффект при наведении на опции навигации */
.nav-option:hover {
    border-left: 5px solid var(--highlight-color); /* Левый бордер при наведении */
    background-color: rgba(162, 162, 162, 0.5); /* Полупрозрачный серый фон при наведении */
    cursor: pointer; /* Указатель при наведении */
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
    color: black; /* Цвет текста кнопки выхода */
}

/* Эффект при наведении на кнопку выхода */
.logout button:hover {
    background-color: rgba(162, 162, 162, 0.5); /* Полупрозрачный серый фон при наведении */
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

/* Стили для опции "Заседания" */
#ecoanalyze {
    border-left: 5px solid #6aae95; /* Левый бордер */
    background-color: #1a315e; /* Синий фон */
    color: white; /* Белый текст */
    cursor: pointer; /* Указатель при наведении */
}

/* Эффект при наведении на опцию "Заседания" */
#ecoanalyze:hover {
    border-left: 5px solid #6aae95; /* Левый бордер при наведении */
    background-color: #2a4a8a; /* Более светлый синий фон при наведении */
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
    border-left: 5px solidrgb(71, 84, 110); /* Левый бордер при наведении */
    background-color:( #6aae95); /* Фон при наведении */
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
    border-left: 5px solidrgb(255, 255, 255); /* Левый бордер */
    background-color:rgb(255, 255, 255); /* Фон */
    color: black; /* Цвет текста */
    cursor: pointer; /* Указатель при наведении */
}

/* Эффект при наведении на первую опцию */
.option1:hover {
    border-left: 5px solid #6aae95; /* Левый бордер при наведении */
    background-color:rgb(204, 203, 203); /* Фон при наведении */
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
    <div class="navcontainer">  
        <nav class="nav">
            <div class="nav-upper-options">
                <div class="nav-option option1">              
                    <h3><a href="index1.php">Главная</a></h3>
                </div>
                <div class="nav-option option2" id="ecoanalyze">
                    <h3><a href="admin1.php">Заседания</a></h3>
                </div>
                <div class="nav-option option5">
                    <h3><a href="admin2.php">Опросы</a></h3>
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
    <div class="calendar-container">
        <div class="month-header">
            <span class="arrow" onclick="changeMonth(-1)">&#9664;</span>
            <h1 id="month" style="margin: 0;"></h1>
            <span class="arrow" onclick="changeMonth(1)">&#9654;</span>
        </div>
        <div class="kana">
            <div>Пн</div>
            <div>Вт</div>
            <div>Ср</div>
            <div>Чт</div>
            <div>Пт</div>
            <div>Сб</div>
            <div>Вс</div>
        </div>
        <div id="calendar">
            <!-- Здесь будут дни месяца -->
        </div>
    </div>
    
</div>
<footer>
        <p>&copy; 2023 Ваша Компания. Все права защищены.</p>
    </footer>

<!-- Модальное окно -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Выберите действие</h2>
        <div id="meetingInfo"></div> <!-- Здесь будет отображаться информация о заседаниях -->
        <button onclick="redirectToAddMeeting()">Создать заседание</button>

    </div>
</div>

<script>

    let meetings = {
            "2023-10-15": { title: "Заседание по проекту A", topic: "Обсуждение деталей проекта A", time: "10:00", participants: ["Иван", "Мария"]},
            "2023-10-20": { title: "Обсуждение бюджета", topic: "Бюджет на 2024 год", time: "14:00", participants: ["Петр", "Светлана"]}
        }; // Пример данных заседаний

    fetch(`get_meetings.php`, {method: "GET"})
        .then(response => response.json())
        .then(meetings_resp => {
            
            for (let index = 0; index < meetings_resp.length; index++) {
                dateKey=meetings_resp[index]['date'].toString()
                delete meetings_resp[index].Date
                if (dateKey in Object.keys(meetings)) {
                    
                } else {
                    meetings[dateKey] = meetings_resp[index]
                }
            }
            displayCalendar()

        })
        .catch(error => {
            console.error('Ошибка:', error);
            document.getElementById('meetingInfo').innerText = 'Ошибка при получении данных.';
        });
        
    let currentDate = new Date();
    let displayedMonth = new Date();
    
    function displayCalendar() {
        const month = displayedMonth.getMonth();
        const year = displayedMonth.getFullYear();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const firstDay = new Date(year, month, 1).getDay();

        const monthNames = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
        document.getElementById('month').innerText = `${monthNames[month]} ${year}`;

        let calendar = '';
        const emptyDays = (firstDay === 0 ? 6 : firstDay - 1);

        // Заполнение пустых ячеек до первого дня месяца
        for (let i = 0; i < emptyDays; i++) {
            calendar += '<div class="day"></div>';
        }

        
        // Заполнение ячеек с днями месяца
        for (let day = 1; day <= daysInMonth; day++) {
            // Устанавливаем дату для текущего дня
            calendar_date = new Date(year, month, day); // Убедитесь, что calendar_date инициализирована с началом месяца

            const isToday = displayedMonth.getFullYear() === currentDate.getFullYear() &&
                            displayedMonth.getMonth() === currentDate.getMonth() &&
                            day === currentDate.getDate();

            // Формируем строку даты в формате "YYYY-MM-DD"
            let dateKey = `${calendar_date.getFullYear()}-${(calendar_date.getMonth() + 1).toString().padStart(2, '0')}-${calendar_date.getDate().toString().padStart(2, '0')}`;
            
            // Получаем встречи для этой даты
            
            let meeting = meetings[dateKey];
            
            console.log(meetings, dateKey)

            // Проверяем, есть ли встречи в этот день
            // if (meeting !== undefined) { // Получаем первую встречу, если она есть
            //     console.log(`Встреча на ${dateKey}:`, meeting); // Выводим информацию о встрече
            // } else {
            //     console.log(`Нет встреч на ${dateKey}`); // Если встреч нет
            // }

            // Дополнительная логика для отображения дня, если это "сегодня"
            // if (isToday) {
            //     console.log(`${dateKey} - Сегодня!`); // Например, можно выделить сегодня
            // }
        

            
            // let keys = Object.keys(meetings)
            // keys.forEach(element => {
            //     console.log(typeof keys)
            //     console.log(keys)

            // });
            
        

            const meetingInfo = meeting ? ` (${meeting.title})` : '';
            const meetingClass = meeting ? 'has-meeting' : '';

            calendar += `<div class="day ${isToday ? 'today' : ''} ${meetingClass}" onclick="openModal('${dateKey}')">${day}${meetingInfo}</div>`;
        }

        document.getElementById('calendar').innerHTML = calendar;
    }

    function changeMonth(direction) {
        displayedMonth.setMonth(displayedMonth.getMonth() + direction);
        displayCalendar();
    }

    function openModal(dateKey) {
    document.getElementById('myModal').style.display = "block";
    window.selectedDate = dateKey;

    // AJAX-запрос для получения информации о заседаниях
    fetch(`get_meetings.php?date=${dateKey}`, {method: "GET"})
        .then(response => response.json())
        .then(meetings_resp => {
            const meetingInfoDiv = document.getElementById('meetingInfo');
            if (meetings_resp.length > 0) {
                const meeting = meetings_resp[0]; // Предполагаем, что на одну дату может быть несколько заседаний
                meetingInfoDiv.innerHTML = `
                    <strong>Дата:</strong> ${dateKey}<br>
                    <strong>Запланировано:</strong> ${meeting.title}<br>
                    <strong>Тема:</strong> ${meeting.topic}<br>
                    <strong>Время:</strong> ${meeting.time}<br>
                    <strong>Участники:</strong> ${meeting.participants}
                `
                // meetings[dateKey] = { title: meeting.title, topic: meeting.topic, time: meeting.time, participants: meeting.participants}
                displayCalendar()
            } else {
                meetingInfoDiv.innerText = 'Нет запланированных заседаний.';
            }
        })
        .catch(error => {
            console.error('Ошибка:', error);
            document.getElementById('meetingInfo').innerText = 'Ошибка при получении данных.';
        });
}

    
            function closeModal() {
                // Закрытие модального окна
                document.getElementById('myModal').style.display = "none";
            }
    
            function redirectToAddMeeting() {
                // Перенаправление на страницу добавления заседания с выбранной датой
                window.location.href = `add_meeting.html?date=${selectedDate}`;
            }
    
            // Инициализация календаря при загрузке страницы
            window.onload = function() {
                displayCalendar();
            };
        </script>
    </body>
    </html>
