<?php

// регистрационная информация (пароль #2)
// registration info (password #2)
$mrh_pass2 = "r9iyUkXAByVq";

//установка текущего времени
//current date
$tm=getdate(time()+9*3600);
$date="$tm[year]-$tm[mon]-$tm[mday] $tm[hours]:$tm[minutes]:$tm[seconds]";

// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];

$crc = strtoupper($crc);

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass2:Shp_item=$shp_item"));

// проверка корректности подписи
// check signature
if ($my_crc !=$crc)
{
    echo "bad sign\n";
    exit();
}

// признак успешно проведенной операции
// success
$result =  "OK$inv_id\n";

// запись в файл информации о проведенной операции
// save order info to file
$f=@fopen("order.txt","a+") or
    die("error");
fputs($f,"order_num :$inv_id;Summ :$out_summ;Date :$date\n");
fclose($f);

?>




<!DOCTYPE html>
<html>
<head lang="en">
    <title>WebHouse.pro</title>
    <?php include "partials/headerPartial.php" ?>

</head>

<div class="containerFullBig top">
    <div class="row" id="top">
        <a href="index.php"><div class="logo"></div></a>
        <?php require("partials/topmenuPartial.php") ?>
        <div class="phoneTop">
            <div id="phoneTop"><span>+7 (495)</span> 666-56-67</div>
            <div id="callbackTop"><a href="">Заказать звонок</a></div>
        </div>
    </div>
</div>


<body id="payPage">

<p align="center"><?php  echo $result; ?></php></p>


</body>
</html>
