<div class="containerFullBig copyright">
    <div id="copyright">
        <a class="logo"  href=""><img src="images/layout/logo.png"></a>
        <div class="rq">
            <p>ООО «Вебхост», ИНН: 7724877536, </p>
            <p>КПП: 772401001, ОГРН: 1137746459135</p>
            <!--            <a href=""><img src="images/social-icons/vk.png"></a>-->
            <!--            <a href=""><img src="images/social-icons/facebook.png"></a>-->
            <!--            <a href=""><img src="images/social-icons/instagramm.png"></a>-->
        </div>
        <a href="mailto:info@webhouse.pro" class="email">info@webhouse.pro</a>
        <p class="phoneBottom">+7 (495) 666-56-67</p>
        <a class="callbackBottom" href="">Заказать звонок</a>
    </div>
</div>

<div id="overlay">
    <div class="window">
        <div class="close"></div>
        <h1>Получить бесплатную консультацию</h1>
        <h2></h2>
        <form>
            <?php  if(isset($_GET['r']) or isset($_COOKIE["PartnerID"])){
                print '<input type="hidden" name="partnerID" value="'.$ref.'"/>';
            } ?>
            <div class="choosenCMS"><input name="nameCMS" class="nameCMS" readonly><input name="priceCMS" class="priceCMS" readonly></div>
            <input type="text" name="contactName" placeholder="Имя">
            <input type="tel" name="contactPhone" placeholder="Телефон">
            <input type="email" name="contactEmail" placeholder="E-mail">
            <input type="hidden" name="formname" value="callback">
        </form>
        <div class="button" onclick="yaCounter31207936.reachGoal('konsult'); return true;">Заказать</div>
        <h3>Все поля необязательны</h3>
    </div>

    <div class="bigWindow">
        <div class="close"></div>
        <div style="overflow: auto; height: 530px; margin-top: 20px">
            <h1></h1>
            <h2></h2>
            <a href="http://www.gazprom.ru">www.gazprom.ru</a>
            <p></p>
            <br/>
            <img src="" align="center" width="100%">
        </div>
    </div>

    <?php include 'partials/breefPartial.php';   ?>

</div>
<div class="label"></div>

<?php include 'partials/metrika.php';   ?>

<?php include 'partials/chat.php';   ?>


</body>



<link rel="stylesheet" href="less/font-awesome.min.css">
<link rel="stylesheet" href="less/jquery-confirm.css">
<link rel="stylesheet" href="less/tooltipster.css">
<script src="js/jquery.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.muslider-2.0.min.js"></script>
<script src="js/jquery-confirm.min.js"></script>
<script src="js/jquery.tooltipster.min.js"></script>
<script src="js/device.js"></script>
<script src="js/common.js"></script>
<script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
<script src="js/ymaps.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67305550-1', 'auto');
    ga('send', 'pageview');

</script>

</html>