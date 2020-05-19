<?php
if($_POST['contactPhone'] > 5 || strlen($_POST['contactEmail']) > 5){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'info@webhouse.pro'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $toUser = $_POST['contactEmail'];
    $subject = 'Форма на сайте Webhouse.pro'; //Заголовок сообщения
    $id = $_POST['id'];
    if($_POST['formname'] == 'callback'){
        $message = '
                <html>
                    <head>
                        <title>Форма обратного звонка</title>
                    </head>
                    <body>
                        <h1>Форма обратного звонка</h1>
                        <p><strong>Были указаны следующие данные:</strong></p>
                        <p>Имя: '.$_POST['contactName'].'</p>
                        <p>Телефон: '.$_POST['contactPhone'].'</p>
                        <p>Email: '.$_POST['contactEmail'].'</p>
                        <hr>
                        <a href="http://webhouse.pro/breef.php">Заполнить бриф</a><br>
                        <a href="http://webhouse.pro/pay.php">Перейти к оплате</a>
                    </body>
                </html>';

    }

    if($_POST['formname'] == 'breef'){
        $message = '
                <html>
                    <head>
                        <title>Бриф</title>
                    </head>
                    <body>
                    <h1>Бриф</h1>
                        <p><strong>Были указаны следующие данные:</strong></p><hr>
                        <p>Имя: '.$_POST['contactName'].'</p><hr>
                        <p>Телефон: '.$_POST['contactPhone'].'</p><hr>
                        <p>Телефон: '.$_POST['contactEmail'].'</p><hr>
                        <p>Название компании: '.$_POST['companyName'].'</p><hr>
                        <p>Адрес текущего сайта: '.$_POST['oldSite'].'</p><hr>
                        <p>Skype или Telegram: '.$_POST['contactSkype'].'</p><hr>
                        <p>Планируемый бюджет: '.$_POST['budget'].'</p><hr>
                        <p>Сроки проекта: '.$_POST['time'].'</p><hr>
                        <p>Деятельность компании, товары или услуги: '.$_POST['company-services'].'</p><hr>
                        <p>Ключевые отличия от конкурентов: '.$_POST['specials'].'</p><hr>
                        <p>Сайты конкурентов: '.$_POST['concurents'].'</p><hr>
                        <p>Основные разделы сайта: '.$_POST['mainmenu'].'</p><hr>
                        <p>Есть ли логотип?: '.$_POST['mainmenu'].'</p><hr>
                        <p>Придерживаться текущей стилистики?: '.$_POST['style'].'</p><hr>
                        <p>Сайты, которые нравятся: '.$_POST['sites'].'</p><hr>
                        <p>Уточнения и пожелания по дизайну: '.$_POST['sites'].'</p><hr>
                        <p>Перенос контента со старого сайта?: '.$_POST['content'].'</p><hr>
                        <p>Наполнение сайта другими материалами?: '.$_POST['other'].'</p><hr>
                    </body>
                </html>';

    }


    if($_POST['refferal'] == 'refferal'){
        $message = '
                <html>
                    <head>
                        <title>Регистрация партнера</title>
                    </head>
                    <body>
                    <h1>Данные партнера</h1>
                        <p>ID партера: '.$_POST['id'].'</p><hr>
                        <p>Имя: '.$_POST['contactName'].'</p><hr>
                        <p>Email: '.$_POST['contactEmail'].'</p><hr>
                        <p>Skype или Telegram: '.$_POST['contactSkype'].'</p><hr>

                        <p>Ваша рефферальная ссылка: <a href="http://webhouse.pro/?r='.$_POST['id'].'">http://webhouse.pro/?r='.$_POST['id'].'</a> </p><hr>
                    </body>
                </html>';

    }

    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Webhouse.pro <noreply@webhouse.pro>\r\n"; //Наименование и почта отправителя
    $send = mail($to, $subject, $message, $headers);
    $sendToUser = mail($toUser, $subject, $message, $headers);
    if($send && $sendToUser){
        echo "ok";
    } else {
        echo "error";
    }; //Отправка письма с помощью функции mail
}

?>