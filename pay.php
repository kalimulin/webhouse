<!DOCTYPE html>
<html>
<head lang="en">
    <title>WebHouse.pro</title>
    <?php include "partials/headerPartial.php" ?>
    <script src="js/pay.js"></script>
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

<h1>Страница оплаты</h1>
<p align="center">Оплата производится через процессинговый центр Robokassa. Сумма указывается в рублях</p>

<div id="robokassa">
    <?php require_once("robokassa/demo1.php"); ?>
    <br>
<!--    <img src="images/robokassa.png" width="150px" alt=""/>-->
</div>

<?php include('partials/footer.php'); ?>