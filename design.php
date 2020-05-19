<!DOCTYPE html>
<html>
<head lang="en">
    <title>WebHouse.pro</title>
    <?php include "partials/headerPartial.php" ?>
</head>

<script>
    $(function(){
        $('li').on('click', function(){
            var li = $(this);
            console.log(li.height());
            if (li.height() < 1000){
                li.animate({maxHeight: 10000}, 800);
            } else {
                li.animate({maxHeight: 500}, 800);
            }
        })
    })
</script>

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


<body id="designPage">

<ul class="design">
    <li class="min">
        <h1>Градусник</h1>
        <img src="images/design/gradusnik.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>СанвитАвто</h1>
        <img src="images/design/sanvitavto.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>LenDiz</h1>
        <img src="images/design/lendiz.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>ToolsLife</h1>
        <img src="images/design/toolslife.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>Compilisto</h1>
        <img src="images/design/compilisto.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>ProfiGroup</h1>
        <img src="images/design/profigroup.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>ShopEmpire</h1>
        <img src="images/design/shopempire.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>Calpe</h1>
        <img src="images/design/calpe.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>Oros</h1>
        <img src="images/design/oros.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>Top Secret</h1>
        <img src="images/design/topsecret.jpg" alt=""/>
    </li>
    <li class="min">
        <h1>Летучая рыба</h1>
        <img src="images/design/fish.jpg" alt=""/>
    </li>
</ul>

</body>
</html>
</html>