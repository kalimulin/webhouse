<div class="breef">
    <div class="close"></div>

    <h1>Заполните бриф<br /><small>(достаточно одного контакта)</small></h1>
    <form class="breefform" enctype="multipart/form-data" action="index.php" method="POST">

        <?php  if(isset($_GET['r']) or isset($_COOKIE["PartnerID"])){
            print '<input type="hidden" name="partnerID" value="'.$ref.'"/>';
        } ?>

        <div class="form-group" style="width: 843px;">
            <label for="contactPhone"><sup>*</sup>Контактный телефон</label>
            <input type="text" class="form-control" name="contactPhone" id="contactPhone" placeholder="">
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
        <div id="consult" class="button" style="width: 500px;" onclick="yaCounter31207936.reachGoal('konsult'); return true;">Получить бесплатную консультацию</div>
        <br /><br /><br />
        <hr />
        <br />
        <h1>Бриф<br /><small>(все поля необязательны)</small></h1>
        <div class="form-group">
            <label for="nameCMS">Выбранная CMS</label>
            <input type="text" class="form-control" name="nameCMS" id="nameCMS" placeholder="">
        </div>
        <div class="form-group">
            <label for="companyName">Полное название компании</label>
            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="">
        </div>
        <div class="form-group">
            <label for="oldSite">Адрес текущего сайта</label>
            <input type="text" class="form-control" name="oldSite" id="oldSite" placeholder="">
        </div>
        <div class="form-group">
            <label for="contactName">ФИО контактного лица</label>
            <input type="text" class="form-control" name="contactName" id="contactName" placeholder="">
        </div>
        <div class="form-group">
            <label for="budget">Планируемый бюджет</label>
            <input type="text" class="form-control" name="budget" id="budget" placeholder="">
        </div>
        <div class="form-group">
            <label for="time">Каковы планируемые сроки проекта</label>
            <input type="text" class="form-control" name="time" id="time" placeholder="">
        </div>
        <div class="form-group">
            <label for="company-services">Вид деятельности компании, какие товары или услуги предлагаете</label>
            <input type="text" class="form-control" name="company-services" id="company-services" placeholder="">
        </div>
        <div class="form-group">
            <label for="specials">Какие есть ключевые отличия от конкурентов, которые надо выделить: </label>
            <input type="text" class="form-control" name="specials" id="specials" placeholder="">
        </div>
        <div class="form-group">
            <label for="concurents">Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их сайты, укажите что вам на них нравится, а что нет (обязательно)</label>
            <textarea  class="form-control" name="concurents" id="concurents" placeholder=""></textarea>
        </div>
        <div class="form-group">
            <label for="mainmenu">Укажите основные разделы сайта (пункты главного меню): </label>
            <textarea  class="form-control" name="mainmenu" id="mainmenu" placeholder=""></textarea>
        </div>
        <div class="form-group">
            <label  for="logo">Есть ли логотип и/или фирменный стиль, которые надо использовать? Если нет, требуется ли их разработка</label>
            <input type="text" class="form-control" name="logo" id="logo" placeholder="">
        </div>
        <div class="form-group">
            <label  for="style">Надо ли придерживаться текущей стилистики дизайна (в случае редизайна): </label>
            <input type="text" class="form-control" name="style" id="style" placeholder="">
        </div>
        <div class="form-group">
            <label for="sites">Укажите адреса сайтов, дизайн которых вам нравятся (не обязательно компаний из вашей индустрии):</label>
            <textarea  class="form-control" name="sites" id="sites" placeholder=""></textarea>
        </div>
        <div class="form-group">
            <label for="design">Укажите ваши другие уточнения и пожелания по дизайну:</label>
            <textarea  class="form-control" name="design" id="design" placeholder=""></textarea>
        </div>
        <div class="form-group">
            <label  for="content">Будет ли перенос информационных материалов с действующего сайта, или требуется написание текстов с нуля?</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="">
        </div>
        <div class="form-group">
            <label  for="other">Нужно ли будет наполнение сайта другими материалами (например наполнение товарами интернет-магазин):</label>
            <input type="text" class="form-control" name="other" id="other" placeholder="">
        </div>
        <!--<div class="form-group">-->
        <!--<label for="packetSelect">Какой пакет Вас больше всего заинтересовал?</label>-->
        <!--<select class="form-control" id="packetSelect" name="packetSelect">-->
        <!--<option value="1">Сайт визитка</option>-->
        <!--<option value="2">Сайт + контент</option>-->
        <!--<option value="3">Малый бизнес</option>-->
        <!--</select>-->
        <!--</div>-->
        <input type="hidden" name="formname" value="breef">
        <input type="hidden" name="id" value="<?php print $_GET['id'] ?>">
        <br>
        <div class="choosenCMS"><input name="nameCMS" class="nameCMS" readonly><div class="priceCMS"></div></div>


        <div id="form-msg"></div>
    </form>
    <div class="button" style="width: 220px;" onclick="yaCounter31207936.reachGoal('brif'); return true;">Отправить бриф</div>
    <br /><br /><br /><br /><br /><br /><br /><br />
</div>
