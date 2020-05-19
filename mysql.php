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

if($_REQUEST['act'] == 'load'){
    if ($result = mysqli_query($link, 'SELECT * FROM forms')) {

        /* Выборка результатов запроса */
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        print json_encode($rows);
    } else {
        print json_encode($result);
    }
}

if($_REQUEST['act'] == 'loaditem'){
    $id = $_GET['id'];
    if ($result = mysqli_query($link, 'SELECT * FROM forms WHERE id='.$id)) {

        /* Выборка результатов запроса */
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        print json_encode($rows);
    } else {
        print json_encode($result);
    }
}

if($_POST['formname'] == 'callback' and ($_POST['contactEmail'] or $_POST['contactPhone'])){
    $name = $_POST['contactName'];
    $phone =  $_POST['contactPhone'];
    $email = $_POST['contactEmail'];
    $partnerID = $_POST['partnerID'];
    if ($_POST['nameCMS']){
        $nameCMS = $_POST['nameCMS'];
    } else {
        $nameCMS = '';
    }
    $query = "INSERT INTO forms VALUES (NULL, '".$name."', '".$email."', '".$phone."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '".$nameCMS."', '".$partnerID."', '".date("Y-m-d H:i:s")."' )";
    $result = mysqli_query($link, $query);
    print mysqli_insert_id($link);
}

if($_POST['formname'] == 'breef' and ($_POST['contactEmail'] or $_POST['contactPhone'] or $_POST['contactSkype'])){
    $contactName = $_POST['contactName'];
    $contactEmail = $_POST['contactEmail'];
    $contactPhone = $_POST['contactPhone'];
    $companyName = $_POST['companyName'];
    $contactSkype = $_POST['contactSkype'];
    $budget = $_POST['budget'];
    $time = $_POST['time'];
    $companyservices = $_POST['company-services'];
    $specials = $_POST['specials'];
    $oldSite = $_POST['oldSite'];
    $concurents = $_POST['concurents'];
    $mainmenu = $_POST['mainmenu'];
    $logo = $_POST['logo'];
    $style = $_POST['style'];
    $sites = $_POST['sites'];
    $design = $_POST['design'];
    $content = $_POST['content'];
    $other = $_POST['other'];
    $nameCMS = $_POST['nameCMS'];
    $partnerID = $_POST['partnerID'];


    $query = "INSERT INTO forms VALUES (NULL, '".$contactName."', '".$contactEmail."', '".$contactPhone."', '".$companyName."', '".$contactSkype."', '".$budget."', '".$time."', '".$companyservices."', '".$specials."', '".$oldSite."', '".$concurents."', '".$mainmenu."', '".$logo."', '".$style."', '".$sites."', '".$design."', '".$content."', '".$other."', '".$nameCMS."', '".$partnerID."', '".date("Y-m-d H:i:s")."')";
    $result = mysqli_query($link, $query);

    echo mysqli_insert_id($link);
}

if($_POST['refferal'] == 'refferal'){
    $name = $_POST['contactName'];
    $skype =  $_POST['contactSkype'];
    $email = $_POST['contactEmail'];
    $query = "INSERT INTO partners VALUES (NULL, '".$name."', '".$email."', '".$skype."', 0)";
    $result = mysqli_query($link, $query);
    print mysqli_insert_id($link);
}


/* закрываем соединение */
mysqli_close($link);

?>