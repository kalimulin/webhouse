<?php

// регистрационная информация (пароль #1)
// registration info (password #1)
$mrh_pass1 = "yE1CLKFWddRX";

// чтение параметров
// read parameters
$out_summ = $_REQUEST["OutSum"];
$inv_id = $_REQUEST["InvId"];
$shp_item = $_REQUEST["Shp_item"];
$crc = $_REQUEST["SignatureValue"];

$crc = strtoupper($crc);

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item"));

// проверка корректности подписи
// check signature
if ($my_crc != $crc)
{
    echo "bad sign\n";
    exit();
}

// проверка наличия номера счета в истории операций
// check of number of the order info in history of operations
$f=@fopen("order.txt","r+") or die("error");

while(!feof($f))
{
    $str=fgets($f);

    $str_exp = explode(";", $str);
    if ($str_exp[0]=="order_num :$inv_id")
    {
        $result =  "Операция прошла успешно\n";
    }
}
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

<p align="center"><?php echo $result; ?></p>


</body>
</html>
