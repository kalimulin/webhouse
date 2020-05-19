<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <title>WebHouse.pro</title>
    <link rel="stylesheet" href="less/normalize.css">
    <link rel="stylesheet" href="less/styles.css">
    <link rel="stylesheet" href="less/jquery-confirm.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.muslider-2.0.min.js"></script>
    <script src="js/jquery-confirm.min.js"></script>
    <script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
    <script src="js/common.js"></script>
    <script>
        $(function(){
            loadItem();

            function loadItem(){
                $.ajax({
                    url: 'mysql.php?act=loaditem&id='+$('input[name=id]').val(),
                    dataType: 'json',
                    success: function(data){
                        for (var prop in data[0]){
                            $('input[name='+prop+']').val(data[0][prop]);
                            $('textarea[name='+prop+']').val(data[0][prop]);
                        }
                    }
                })
            }


        })

    </script>
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


<body id="breefPage">

<?php

    if (isset($_REQUEST['id']) and $_REQUEST['id'] > 0){
        if(isset($_REQUEST['pass']) and $_REQUEST['pass'] === 'xCx7wv5y') {
            require_once('partials/breefPartial.php');
        } else {
            echo "<h1>В доступе отказано</h1>";
        }
    } else {
        require_once('partials/breefPartial.php');
    }



?>


</body>
</html>