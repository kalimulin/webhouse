<!DOCTYPE html>
<html>
<head lang="en">
    <?php include('partials/headerPartial.php') ?>
</head>


<body id="breefPage">

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

<div class="breef">
    <div class="close"></div>

    <h1>Заполните форму<br /><small>(достаточно одного контакта)</small></h1>
    <form class="breefform" enctype="multipart/form-data" action="index.php" method="POST">
        <div class="form-group" style="width: 843px;">
            <label for="contactName"><sup>*</sup>Ваше имя</label>
            <input type="text" class="form-control" name="contactName" id="contactName" placeholder="">
        </div>
        <br />
        <div class="form-group" style="width: 843px;">
            <label for="contactEmail"><sup>*</sup>Email</label>
            <input type="text" class="form-control" name="contactEmail" id="contactEmail" placeholder="">
        </div>
        <br />
        <div class="form-group" style="width: 843px;">
            <label for="contactSkype"><sup>*</sup>Skype или Telegram</label>
            <input type="text" class="form-control" name="contactSkype" id="contactSkype" placeholder="">
        </div>
        <br /><br />
        <input type="hidden" name="refferal" value="refferal">
        <div id="refferal" class="button" style="width: 500px;">Сгенерировать реферальную ссылку</div>
        <br /><br /><br />
        <hr />
        <br />
    </form>
    <br /><br /><br /><br /><br /><br /><br /><br />
</div>

<?php include('partials/footer.php') ?>
