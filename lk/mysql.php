<?php

/* Переменные для соединения с базой данных */
$hostname = "localhost";
$username = "webhouse_breefs";
$password = "peqof0xX";
$dbName = "webhouse_breefs";

/* Подключение к серверу MySQL */
$link = mysqli_connect(
    $hostname,  /* Хост, к которому мы подключаемся */
    $username,       /* Имя пользователя */
    $password,   /* Используемый пароль */
    $dbName);     /* База данных для запросов по умолчанию */

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if($_REQUEST['data'] == 'all'){
    if ($result = mysqli_query($link, 'SELECT * FROM partners')) {

        /* Выборка результатов запроса */
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        print json_encode($rows);
    } else {
        print json_encode($result);
    }
}

if($_REQUEST['action'] == 'addbonus'){
    $id = $_REQUEST['id'];
    $summ = $_REQUEST['summ'];
    $query = "UPDATE partners SET summ = summ + ".$summ." WHERE partner_id = ".$id;
    $result = mysqli_query($link, $query);
    print $result;
}

if($_REQUEST['action'] == 'editpartner'){
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $skype = $_REQUEST['skype'];
    $query = "UPDATE partners SET contactName = '".$name."', contactEmail = '".$email."', contactSkype = '".$skype."' WHERE partner_id = ".$id;
    $result = mysqli_query($link, $query);
    print $result;
}



/* закрываем соединение */
mysqli_close($link);

?>