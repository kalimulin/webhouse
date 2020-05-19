
<?

$inv_id = $_REQUEST["InvId"];
$result = "Вы отказались от оплаты. Заказ# $inv_id\n";

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

<p align="center"><?php  echo $result; ?></p>


</body>
</html>
