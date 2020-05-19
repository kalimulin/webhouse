<?php require("partials/cookies.php") ?>

<?php require("partials/variables.php") ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <title>WebHouse.pro</title>
    <?php include "partials/headerPartial.php" ?>

</head>
<body class="index">
<?php

if(isset($ref)){
    echo '<div id="ref">ID партнера: '.$ref.'</div>';
} else {
    if (isset($_COOKIE["PartnerID"])){
        $ref = $_COOKIE["PartnerID"];
        echo '<div id="ref">ID партнера: '.$ref.'</div>';
    }
}
?>
    <a name="top"></a>
    <div class="fixedTop">
        <div class="row">
            <a href="index.php"><div class="logo"></div></a>
            <?php require("partials/topmenuPartial.php") ?>
            <div class="phoneTop">
                <div id="phoneTop2"><span>+7 (495)</span> 666-56-67</div>
                <div id="callbackTop2"><a href="">Заказать звонок</a></div>
            </div>
        </div>
    </div>
    <div class="fixedTabs">
        <div id="fixedTabs">
            <label class="blue" for="tab1" title="Вкладка 1">
                <p>Сайт<br>для компании</p>
            </label>
            <label class="red" for="tab2" title="Вкладка 2">
                <p>Landing page</p>
            </label>
            <label class="violet" for="tab3" title="Вкладка 3">
                <p>Интернет<br>магазин</p>
            </label>
            <label class="green" for="tab4" title="Вкладка 4">
                <p>Индивидуальное<br>решение</p>
            </label>
        </div>
    </div>
    <div class="containerFullBig top">
        <div class="row" id="top">
            <a href=""><div class="logo"></div></a>
            <?php require("partials/topmenuPartial.php") ?>
            <div class="phoneTop">
                <div id="phoneTop"><span>+7 (495)</span> 666-56-67</div>
                <div id="callbackTop"><a href="">Заказать звонок</a></div>
            </div>
        </div>
        <div class="ctaTop">
            <h1>Создаем сайты за 3 дня – от 9990 руб</h1>
            <a href=""><div class="button">Заказать сайт</div></a>
            <img id="imgToDown" src="images/layout/v.png">
        </div>
    </div>
    <a name="prices"></a>
    <div class="containerFullBig">
        <div class="choosePacket">
            <h2>Выбери свой пакет</h2>
        </div>
        <div class="tabs">
            <input id="tab1" type="radio" name="tabs" checked>
            <label class="blue" for="tab1" title="Вкладка 1">
                <h2>Сайт<br>&nbsp;</h2>
                <hr>
                <h3>от 9990р.</h3>
                <p>от 3 дней</p>
            </label>

            <input id="tab2" type="radio" name="tabs">
            <label class="red" for="tab2" title="Вкладка 2">
                <h2>Landing page<br>&nbsp;</h2>
                <hr>
                <h3>от 9990р.</h3>
                <p>от 4 дней</p>
            </label>

            <input id="tab3" type="radio" name="tabs">
            <label class="violet" for="tab3" title="Вкладка 3">
                <h2>Интернет<br>магазин</h2>
                <hr>
                <h3>от 19990р.</h3>
                <p>от 5 дней</p>
            </label>

            <input id="tab4" type="radio" name="tabs">
            <label class="green" for="tab4" title="Вкладка 4">
                <h2>Индивидуальное<br>решение</h2>
                <hr>
                <h3>&nbsp;</h3>
                <p>&nbsp;</p>
            </label>

            <section id="content1" class="blue">
                <hr>
                <div class="triangle-down"></div>
                <div class="container">
                    <div class="packet packetLeft">
                        <h2>Сайт визитка</h2>
                        <ul>
                            <li>Хостинг на 1 месяц (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Готовый дизайн сайта</li>
<!--                            <li>Логотип</li>-->
                            <li>Система управления структурой<br>и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>9990 руб.</h3>
                            <p>от 3 дней</p>
                            <a href=""><div class="button">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetCenter">
                        <h2>Сайт + контент</h2>
                        <ul>
                            <li>Хостинг на 3 месяца (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Почтовые ящики на домене (подарок)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['fill'] ?>">Наполнение сайта текстом</li>
                            <li>Индивидуальный дизайн сайта</li>
<!--                            <li>Логотип</li>-->
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>14990 руб.</h3>
                            <p>от 4 дней</p>
                            <a href=""><div class="button">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetRight">
                        <h2>Малый бизнес</h2>
                        <ul>
                            <li>Хостинг на 3 месяца (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Почтовые ящики на домене (подарок)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['direct'] ?>">Настройка Яндекс.Директ (до 300 ключевых слов)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['adwords'] ?>">Настройка ADWords (до 300 ключевых слов)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['metrika'] ?>">Подключение Яндекс.Метрики + настройка целей</li>
                            <li class="tooltip" data-title="<?php print $tooltips['analytics'] ?>">Подключение Google Analytics + настройка целей</li>
                            <li class="tooltip" data-title="<?php print $tooltips['fill'] ?>">Наполнение сайта текстом</li>
                            <li>Индивидуальный дизайн сайта</li>
<!--                            <li>Логотип</li>-->
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>19990 руб.</h3>
                            <p>от 5 дней</p>
                            <a href=""><div class="button">Заказать</div></a>
                        </div>
                    </div>
                </div>

<?/*
                <div class="container">
                    <a href=""><div class="button blue CMSPrice">Узнать стоимость на другие cms</div></a>
                </div>

                    <div class="selectCMS">
                        <div class="packet packetLeft">
                            <h2>Сайт визитка</h2>
                            <ul>
                                <li>
                                    <input type="radio" name="CMS1-1" value="DLE" id="CMS1-1-1" checked>
                                    <label for="CMS1-1-1">DataLife Engine</label>
                                    <p class="priceCMS">5180 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-1" value="BitrixStart" id="CMS1-1-2">
                                    <label for="CMS1-1-2">1С Битрикс Старт</label>
                                    <p class="priceCMS">6890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-1" value="UMIlight" id="CMS1-1-3">
                                    <label for="CMS1-1-3">UMI.CMS Lite</label>
                                    <p class="priceCMS">5890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-1" value="NetCatStandart" id="CMS1-1-4">
                                    <label for="CMS1-1-4">NetCat Standard</label>
                                    <p class="priceCMS">7890 <span>руб.</span></p>
                                </li>
                            </ul>
                            <div class="packetPrice">
                                <hr>
                                <a href=""><div class="button customCMS">Заказать</div></a>
                            </div>
                        </div>
                        <div class="packet packetCenter">
                            <h2>Сайт + контент</h2>
                            <ul>
                                <li>
                                    <input type="radio" name="CMS1-2" value="DLE" id="CMS1-2-1" checked>
                                    <label for="CMS1-2-1">DataLife Engine</label>
                                    <p class="priceCMS">9810 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="BitrixStart" id="CMS1-2-2">
                                    <label for="CMS1-2-2">1С Битрикс Старт</label>
                                    <p class="priceCMS">10890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="BitrixStart" id="CMS1-2-3">
                                    <label for="CMS1-2-3">1С Битрикс Стандарт</label>
                                    <p class="priceCMS">20890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="BitrixStart" id="CMS1-2-4">
                                    <label for="CMS1-2-4">1С Битрикс Эксперт</label>
                                    <p class="priceCMS">53890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="UMIlight" id="CMS1-2-5">
                                    <label for="CMS1-2-5">UMI.CMS Lite</label>
                                    <p class="priceCMS">9890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="UMIlight" id="CMS1-2-6">
                                    <label for="CMS1-2-6">UMI.CMS Corporate</label>
                                    <p class="priceCMS">15890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="NetCatStandart" id="CMS1-2-7">
                                    <label for="CMS1-2-7">NetCat Standard</label>
                                    <p class="priceCMS">11890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="NetCatStandart" id="CMS1-2-8">
                                    <label for="CMS1-2-8">NetCat Business</label>
                                    <p class="priceCMS">15890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-2" value="NetCatStandart" id="CMS1-2-9">
                                    <label for="CMS1-2-9">NetCat Corporate</label>
                                    <p class="priceCMS">20890 <span>руб.</span></p>
                                </li>
                            </ul>
                            <div class="packetPrice">
                                <hr>
                                <a href=""><div class="button customCMS">Заказать</div></a>
                            </div>
                        </div>
                        <div class="packet packetRight">
                            <h2>Малый бизнес</h2>
                            <ul>
                                <li>
                                    <input type="radio" name="CMS1-3" value="DLE" id="CMS1-3-1" checked>
                                    <label for="CMS1-3-1">DataLife Engine</label>
                                    <p class="priceCMS">13180 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="BitrixStart" id="CMS1-3-2">
                                    <label for="CMS1-3-2">1С Битрикс Старт</label>
                                    <p class="priceCMS">14890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="BitrixStart" id="CMS1-3-3">
                                    <label for="CMS1-3-3">1С Битрикс Стандарт</label>
                                    <p class="priceCMS">24890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="BitrixStart" id="CMS1-3-4">
                                    <label for="CMS1-3-4">1С Битрикс Эксперт</label>
                                    <p class="priceCMS">57890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="UMIlight" id="CMS1-3-5">
                                    <label for="CMS1-3-5">UMI.CMS Lite</label>
                                    <p class="priceCMS">13890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="UMIlight" id="CMS1-3-6">
                                    <label for="CMS1-3-6">UMI.CMS Corporate</label>
                                    <p class="priceCMS">19890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="NetCatStandart" id="CMS1-3-7">
                                    <label for="CMS1-3-7">NetCat Standard</label>
                                    <p class="priceCMS">19890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="NetCatStandart" id="CMS1-3-8">
                                    <label for="CMS1-3-8">NetCat Business</label>
                                    <p class="priceCMS">24890 <span>руб.</span></p>
                                </li>
                                <li>
                                    <input type="radio" name="CMS1-3" value="NetCatStandart" id="CMS1-3-9">
                                    <label for="CMS1-3-9">NetCat Corporate</label>
                                    <p class="priceCMS">20890 <span>руб.</span></p>
                                </li>
                            </ul>
                            <div class="packetPrice">
                                <hr>
                                <a href=""><div class="button customCMS">Заказать</div></a>
                            </div>
                        </div>
                    </div>
                    */?>
            </section>
            
            <section id="content2" class="red">
                <hr>
                <div class="triangle-down"></div>
                <div class="container">
                    <div class="packet packetLeft">
                        <h2>Старт</h2>
                        <ul>
                            <li>Хостинг на 1 месяц (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Формы заказа/заявки с сайта</li>
                            <li>Готовый дизайн сайта</li>
<!--                            <li>Логотип</li>-->
                            <li>Система управления структурой<br>и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>9990 руб.</h3>
                            <p>от 4 дней</p>
                            <a href=""><div class="button">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetCenter">
                        <h2>Landing + контент</h2>
                        <ul>
                            <li>Хостинг на 3 месяца (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Почтовые ящики на домене (подарок)</li>
                            <li>Триггеры продаж</li>
                            <li>Слайдер, Карусель, Лайтбокс</li>
                            <li>Корректное отображение на мобильных устройствах</li>
                            <li>Формы заказа/заявки с сайта</li>
                            <li>Разработка удобной структуры</li>
                            <li class="tooltip" data-title="<?php print $tooltips['fill'] ?>">Наполнение сайта материалами</li>
                            <li>Индивидуальная проработка дизайна</li>
<!--                            <li>Уникальный Логотип</li>-->
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>14990 руб.</h3>
                            <p>от 5 дней</p>
                            <a href=""><div class="button">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetRight">
                        <h2>LP Маркетинг</h2>
                        <ul>
                            <li>Хостинг на 3 месяца (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Почтовые ящики на домене (подарок)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['direct'] ?>">Настройка Яндекс.Директ (до 300 ключевых слов)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['adwords'] ?>">Настройка ADWords (до 300 ключевых слов)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['metrika'] ?>">Подключение Яндекс.Метрики + настройка целей</li>
                            <li class="tooltip" data-title="<?php print $tooltips['analytics'] ?>">Подключение Google Analytics + настройка целей</li>
                            <li>Триггеры продаж</li>
                            <li>Слайдер, Карусель, Лайтбокс</li>
                            <li>Корректное отображение на мобильных устройствах</li>
                            <li>Формы заказа/заявки с сайта</li>
                            <li>Разработка удобной структуры</li>
                            <li class="tooltip" data-title="<?php print $tooltips['fill'] ?>">Наполнение сайта материалами</li>
                            <li>Индивидуальная проработка дизайна</li>
<!--                            <li>Уникальный Логотип</li>-->
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>19990 руб.</h3>
                            <p>от 6 дней</p>
                            <a href=""><div class="button">Заказать</div></a>
                        </div>
                    </div>
                </div>
<?/*
                <div class="container">
                    <a href=""><div class="button CMSPrice">Узнать стоимость на другие cms</div></a>
                </div>


                <div class="selectCMS">
                    <div class="packet packetLeft">
                        <h2>Сайт визитка</h2>
                        <ul>
                            <li>
                                <input type="radio" name="CMS2-1" value="DLE" id="CMS2-1-1" checked>
                                <label for="CMS2-2-1-1">DataLife Engine</label>
                                <p class="priceCMS">5180 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-1" value="BitrixStart" id="CMS2-1-2">
                                <label for="CMS2-1-2">1С Битрикс Старт</label>
                                <p class="priceCMS">6890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-1" value="UMIlight" id="CMS2-1-3">
                                <label for="CMS2-1-3">UMI.CMS Lite</label>
                                <p class="priceCMS">5890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-1" value="NetCatStandart" id="CMS2-1-4">
                                <label for="CMS2-1-4">NetCat Standard</label>
                                <p class="priceCMS">7890 <span>руб.</span></p>
                            </li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <a href=""><div class="button customCMS">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetCenter">
                        <h2>Сайт + контент</h2>
                        <ul>
                            <li>
                                <input type="radio" name="CMS2-2" value="DLE" id="CMS2-2-1" checked>
                                <label for="CMS2-2-1">DataLife Engine</label>
                                <p class="priceCMS">9810 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="BitrixStart" id="CMS2-2-2">
                                <label for="CMS2-2-2">1С Битрикс Старт</label>
                                <p class="priceCMS">10890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="BitrixStart" id="CMS2-2-3">
                                <label for="CMS2-2-3">1С Битрикс Стандарт</label>
                                <p class="priceCMS">20890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="BitrixStart" id="CMS2-2-4">
                                <label for="CMS2-2-4">1С Битрикс Эксперт</label>
                                <p class="priceCMS">53890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="UMIlight" id="CMS2-2-5">
                                <label for="CMS2-2-5">UMI.CMS Lite</label>
                                <p class="priceCMS">9890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="UMIlight" id="CMS2-2-6">
                                <label for="CMS2-2-6">UMI.CMS Corporate</label>
                                <p class="priceCMS">15890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="NetCatStandart" id="CMS2-2-7">
                                <label for="CMS2-2-7">NetCat Standard</label>
                                <p class="priceCMS">11890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="NetCatStandart" id="CMS2-2-8">
                                <label for="CMS2-2-8">NetCat Business</label>
                                <p class="priceCMS">15890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-2" value="NetCatStandart" id="CMS2-2-9">
                                <label for="CMS2-2-9">NetCat Corporate</label>
                                <p class="priceCMS">20890 <span>руб.</span></p>
                            </li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <a href=""><div class="button customCMS">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetRight">
                        <h2>Малый бизнес</h2>
                        <ul>
                            <li>
                                <input type="radio" name="CMS2-3" value="DLE" id="CMS2-3-1" checked>
                                <label for="CMS2-3-1">DataLife Engine</label>
                                <p class="priceCMS">13180 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="BitrixStart" id="CMS2-3-2">
                                <label for="CMS2-3-2">1С Битрикс Старт</label>
                                <p class="priceCMS">14890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="BitrixStart" id="CMS2-3-3">
                                <label for="CMS2-3-3">1С Битрикс Стандарт</label>
                                <p class="priceCMS">24890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="BitrixStart" id="CMS2-3-4">
                                <label for="CMS2-3-4">1С Битрикс Эксперт</label>
                                <p class="priceCMS">57890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="UMIlight" id="CMS2-3-5">
                                <label for="CMS2-3-5">UMI.CMS Lite</label>
                                <p class="priceCMS">13890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="UMIlight" id="CMS2-3-6">
                                <label for="CMS2-3-6">UMI.CMS Corporate</label>
                                <p class="priceCMS">19890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="NetCatStandart" id="CMS2-3-7">
                                <label for="CMS2-3-7">NetCat Standard</label>
                                <p class="priceCMS">19890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="NetCatStandart" id="CMS2-3-8">
                                <label for="CMS2-3-8">NetCat Business</label>
                                <p class="priceCMS">24890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS2-3" value="NetCatStandart" id="CMS2-3-9">
                                <label for="CMS2-3-9">NetCat Corporate</label>
                                <p class="priceCMS">20890 <span>руб.</span></p>
                            </li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <a href=""><div class="button customCMS">Заказать</div></a>
                        </div>
                    </div>
                </div>
*/?>
            </section>
            

            
            <section id="content3" class="violet">
                <hr>
                <div class="triangle-down"></div>
                <div class="container">
                    <div class="packet packetLeft">
                        <h2>Сайт каталог</h2>
                        <ul>
                            <li>Хостинг на 1 месяц (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Готовый дизайн сайта</li>
<!--                            <li>Логотип</li>-->
                            <li>Каталог продукции</li>
                            <li>Акции/новинки/хиты продаж</li>
                            <li>Корзина покупателя</li>
                            <li>Оформление заказа</li>
                            <li>Выбор способа доставки</li>
                            <li>Форма обратной связи</li>
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>19990 руб.</h3>
                            <p>от 5 дней</p>
                            <a href=""><div class="button green">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetCenter">
                        <h2>Магазин + контент</h2>
                        <ul>
                            <li>Хостинг на 3 месяца (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Почтовые ящики на домене (подарок)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['fillMarket'] ?>">Наполнение магазина товаром</li>
                            <li>Каталог продукции</li>
                            <li>Акции/новинки/хиты продаж</li>
                            <li>Корзина покупателя</li>
                            <li>Оформление заказа</li>
                            <li>Выбор способа доставки</li>
                            <li>Форма обратной связи</li>
                            <li>Подключение платёжных систем</li>
                            <li>Индивидуальный дизайн сайта</li>
<!--                            <li>Уникальный Логотип</li>-->
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>24990 руб.</h3>
                            <p>от 6 дней</p>
                            <a href=""><div class="button green">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetRight">
                        <h2>Магазин Маркетинг</h2>
                        <ul>
                            <li>Хостинг на 3 месяца (подарок)</li>
                            <li>Регистрация домена RU, РФ<br>на 1 год (подарок)</li>
                            <li>Почтовые ящики на домене (подарок)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['direct'] ?>">Настройка Яндекс.Директ (до 300 ключевых слов)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['adwords'] ?>">Настройка ADWords (до 300 ключевых слов)</li>
                            <li class="tooltip" data-title="<?php print $tooltips['metrika'] ?>">Подключение Яндекс.Метрики + настройка целей</li>
                            <li class="tooltip" data-title="<?php print $tooltips['analytics'] ?>">Подключение Google Analytics + настройка целей</li>
                            <li class="tooltip" data-title="<?php print $tooltips['fillMarket'] ?>">Наполнение магазина товаром</li>
                            <li>Каталог продукции</li>
                            <li>Акции/новинки/хиты продаж</li>
                            <li>Корзина покупателя</li>
                            <li>Оформление заказа</li>
                            <li>Выбор способа доставки</li>
                            <li>Форма обратной связи</li>
                            <li>Подключение платёжных систем</li>
                            <li>Индивидуальный дизайн сайта</li>
<!--                            <li>Уникальный Логотип</li>-->
                            <li>Система управления структурой и контентом (cms)</li>
                            <li>Полные инструкции по cms, консультации</li>
                            <li>Регистрация в поисковых системах</li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <h3>29990 руб.</h3>
                            <p>от 7 дней</p>
                            <a href=""><div class="button green">Заказать</div></a>
                        </div>
                    </div>
                </div>


<?/*
                <div class="container">
                    <a href=""><div class="button violet CMSPrice">Узнать стоимость на другие cms</div></a>
                </div>


                <div class="selectCMS">
                    <div class="packet packetLeft">
                        <h2>Сайт визитка</h2>
                        <ul>
                            <li>
                                <input type="radio" name="CMS3-1" value="DLE" id="CMS3-1-1" checked>
                                <label for="CMS3-1-1">DataLife Engine</label>
                                <p class="priceCMS">5180 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-1" value="BitrixStart" id="CMS3-1-2">
                                <label for="CMS3-1-2">1С Битрикс Старт</label>
                                <p class="priceCMS">6890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-1" value="UMIlight" id="CMS3-1-3">
                                <label for="CMS3-1-3">UMI.CMS Lite</label>
                                <p class="priceCMS">5890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-1" value="NetCatStandart" id="CMS3-1-4">
                                <label for="CMS3-1-4">NetCat Standard</label>
                                <p class="priceCMS">7890 <span>руб.</span></p>
                            </li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <a href=""><div class="button customCMS">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetCenter">
                        <h2>Сайт + контент</h2>
                        <ul>
                            <li>
                                <input type="radio" name="CMS3-2" value="DLE" id="CMS3-2-1" checked>
                                <label for="CMS3-2-1">DataLife Engine</label>
                                <p class="priceCMS">9810 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="BitrixStart" id="CMS3-2-2">
                                <label for="CMS3-2-2">1С Битрикс Старт</label>
                                <p class="priceCMS">10890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="BitrixStart" id="CMS3-2-3">
                                <label for="CMS3-2-3">1С Битрикс Стандарт</label>
                                <p class="priceCMS">20890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="BitrixStart" id="CMS3-2-4">
                                <label for="CMS3-2-4">1С Битрикс Эксперт</label>
                                <p class="priceCMS">53890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="UMIlight" id="CMS3-2-5">
                                <label for="CMS3-2-5">UMI.CMS Lite</label>
                                <p class="priceCMS">9890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="UMIlight" id="CMS3-2-6">
                                <label for="CMS3-2-6">UMI.CMS Corporate</label>
                                <p class="priceCMS">15890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="NetCatStandart" id="CMS3-2-7">
                                <label for="CMS3-2-7">NetCat Standard</label>
                                <p class="priceCMS">11890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="NetCatStandart" id="CMS3-2-8">
                                <label for="CMS3-2-8">NetCat Business</label>
                                <p class="priceCMS">15890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-2" value="NetCatStandart" id="CMS3-2-9">
                                <label for="CMS3-2-9">NetCat Corporate</label>
                                <p class="priceCMS">20890 <span>руб.</span></p>
                            </li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <a href=""><div class="button customCMS">Заказать</div></a>
                        </div>
                    </div>
                    <div class="packet packetRight">
                        <h2>Малый бизнес</h2>
                        <ul>
                            <li>
                                <input type="radio" name="CMS3-3" value="DLE" id="CMS3-3-1" checked>
                                <label for="CMS3-3-1">DataLife Engine</label>
                                <p class="priceCMS">13180 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="BitrixStart" id="CMS3-3-2">
                                <label for="CMS3-3-2">1С Битрикс Старт</label>
                                <p class="priceCMS">14890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="BitrixStart" id="CMS3-3-3">
                                <label for="CMS3-3-3">1С Битрикс Стандарт</label>
                                <p class="priceCMS">24890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="BitrixStart" id="CMS3-3-4">
                                <label for="CMS3-3-4">1С Битрикс Эксперт</label>
                                <p class="priceCMS">57890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="UMIlight" id="CMS3-3-5">
                                <label for="CMS3-3-5">UMI.CMS Lite</label>
                                <p class="priceCMS">13890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="UMIlight" id="CMS3-3-6">
                                <label for="CMS3-3-6">UMI.CMS Corporate</label>
                                <p class="priceCMS">19890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="NetCatStandart" id="CMS3-3-7">
                                <label for="CMS3-3-7">NetCat Standard</label>
                                <p class="priceCMS">19890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="NetCatStandart" id="CMS3-3-8">
                                <label for="CMS3-3-8">NetCat Business</label>
                                <p class="priceCMS">24890 <span>руб.</span></p>
                            </li>
                            <li>
                                <input type="radio" name="CMS3-3" value="NetCatStandart" id="CMS3-3-9">
                                <label for="CMS3-3-9">NetCat Corporate</label>
                                <p class="priceCMS">20890 <span>руб.</span></p>
                            </li>
                        </ul>
                        <div class="packetPrice">
                            <hr>
                            <a href=""><div class="button customCMS">Заказать</div></a>
                        </div>
                    </div>
                </div>

*/?>
            </section>
            

            
            <section id="content4" class="green">
                <hr>
                <div class="triangle-down"></div>
                <div class="container">
                    <div class="packet">
                        <h2>Индивидуальное решение</h2>
                        <p>Цели и задачи бизнеса у всех разные и зачастую типовые решения, предлагаемые компаниями-разработчиками web-сайтов не подходят Вам и Вашему бизнесу. Вы хотите выделиться из толпы? Хотите, чтоб Ваш сайт производил неизгладимое впечатление на потенциального клиента, выгодно отличаясь от сайтов конкурентов? Значит, Вам нужен индивидуальный сайт!</p>
                        <p>Специалисты компании WebHOUSE.pro ценят Вашу индивидуальность и помогут воплотить в индивидуальном проекте самые смелые Ваши замыслы!</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

<div class="containerFullBig">
    <div class="weAreAwesome">
        <a name="about"></a>
        <h1>Почему мы крутые?</h1>
        <ul>
            <li>
                <div class="circle"></div>
                <h3>Четкие сроки</h3>
                <p>Мы всегда соблюдаем строго обозначенные сроки изготовления сайтов</p>
            </li>
            <li>
                <div class="circle"></div>
                <h3>Фиксированные цены</h3>
                <p>Наши цены никогда не разочаруют вас своей внезапностью</p>
            </li>
            <li>
                <div class="circle"></div>
                <h3>Команда<br>профессионалов</h3>
                <p>Для вашего проекта выделяется команда талантливых дизайнеров, разработчиков</p>
            </li>
            <li>
                <div class="circle"></div>
                <h3>Поддержка</h3>
                <p>После создания сайта  мы бесплатно консультируем вас по любым возникающим вопросам</p>
            </li>
            <li>
                <div class="circle"></div>
                <h3>Все включено</h3>
                <p>В стоимость создания всех сайтов входит: домен, хостинг, первичная seo оптимизация,
                    система управления сайтом, бесплатные консультации по развитию проекта</p>
            </li>
            <li>
                <div class="circle"></div>
                <h3>Результат</h3>
                <p>Мы создаем только эффективные сайты для клиентов</p>
            </li>
        </ul>
    </div>
</div>

<div class="containerFullBig">
    <div class="questions">
        <h2>У вас еще остались вопросы?</h2>
        <a href=""><div class="button yellow">Получить консультацию</div></a>
    </div>
</div>

<!--    <a name="services"></a>-->
<!--<div class="container services">-->
<!--    <h1>Наши услуги</h1>-->
<!--    <div class="vertical-tabs">-->
<!--        <input id="vertical-tab1" type="radio" name="vertical-tabs" checked>-->
<!--        <label class="blue" for="vertical-tab1" title="Вкладка 1">-->
<!--            <h2>Делаем сайты</h2>-->
<!--            <hr>-->
<!--            <h3>от 1900р.</h3>-->
<!--        </label>-->
<!---->
<!--        <input id="vertical-tab2" type="radio" name="vertical-tabs">-->
<!--        <label class="blue" for="vertical-tab2" title="Вкладка 2">-->
<!--            <h2>Раскручиваем<br>в поисковых системах</h2>-->
<!--            <hr>-->
<!--            <h3>от 9000р.</h3>-->
<!--        </label>-->
<!---->
<!--        <input id="vertical-tab3" type="radio" name="vertical-tabs">-->
<!--        <label class="blue" for="vertical-tab3" title="Вкладка 3">-->
<!--            <h2>Делаем<br>контекстную рекламу</h2>-->
<!--            <hr>-->
<!--            <h3>от 18900р.</h3>-->
<!--        </label>-->
<!---->
<!---->
<!---->
<!--        <section id="vertical-content1" class="blue">-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <p class="big">Мы — небольшая команда талантливых, молодых, амбициозных людей, любящих своё дело и искренне верящих, что наша работа сделает кого-то счастливым. Мы не терпим разгильдяйства и всегда вкалываем по-полной, применяя в работе самые передовые технологии. Мы любим каждого нашего клиента, всегда готовы выслушать, помочь советом, предложить свои идеи.</p>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </section>-->
<!---->
<!--        <section id="vertical-content2" class="blue">-->
<!--	        <ul>-->
<!--	        	<li>-->
<!--	        		<h2>SEO – Поисковое продвижение сайтов</h2>-->
<!--					<p class="big">Продвижение сайта – отдельная услуга, направленная на улучшение видимости ресурса в результатах поиска. В нашей компании вы можете заказать SEO продвижение в рамках предложенных нами тарифов для быстрого и эффективного достижения топовых позиций в выдаче по выбранным вами коммерческим запросам.</p>-->
<!--					<p class="big">Для каждого из наших клиентов мы предлагаем индивидуальный план действий – продвижение по высокочастотным или низкочастотным запросам – в зависимости от выделенного на SEO бюджета и особенностей вашего бизнеса.</p>-->
<!--	        	</li>-->
<!--	        </ul>-->
<!--        </section>-->
<!---->
<!--        <section id="vertical-content3" class="blue">-->
<!--        	<ul>-->
<!--        		<li>-->
<!--			        <h2>Рекламная кампания:</h2>-->
<!--		-->
<!--					<p>Рекламная кампания Яндекс.Директ 4 990 руб./мес.</p>-->
<!--					<p>Рекламная кампания Google AdWords 4 990 руб./мес.</p>-->
<!--					<p>Рекламная кампания Вконтакте 4 990 руб./мес.</p>-->
<!--        		</li>-->
<!--					-->
<!--				<li>-->
<!--					<h2>Услуга включает:</h2>-->
<!--					-->
<!--					<p>Настройка и запуск рекламной кампании - 1 день</p>-->
<!--					<p>Подбор качественных “продающих” ключевых запросов</p>-->
<!--					<p>Аналитика, отчетность, рекомендации</p>-->
<!--					<p>Сопровождение рекламной кампании</p>-->
<!--				</li>-->
<!--					-->
<!--				<li>-->
<!--					<h2>Преимущества услуги:</h2>-->
<!--					-->
<!--					<p>Оплата только за клики.</p>-->
<!--					<p>Вы не платите за показы. Оплачиваются только переходы на сайт посетителей, заинтересовавшихся Вашим объявлением.</p>-->
<!--					<p>Моментальный результат.</p>-->
<!--					<p>Рекламная контекстная кампания начинает работать и привлекать клиентов с момента её запуска.</p>-->
<!--				</li>-->
<!--					-->
<!--				<li>-->
<!--					<h2>Гибкие настройки:</h2>-->
<!--					-->
<!--					<p>Геотаргетинг (ограничение региона показа) повышает адресность рекламного послания.</p>-->
<!--					<p>За счет временного таргетинга Ваше объявление показывается в четко заданное время.</p>-->
<!--				</li>-->
<!--        	</ul>-->
<!--        </section>-->
<!---->
<!--        <section id="vertical-content4" class="blue">4</section>-->
<!---->
<!--        <div class="vertical-hr"></div>-->
<!--        <div class="triangle-right"></div>-->
<!--    </div>-->
<!--</div>-->

<?php include 'partials/portfolio.php'; ?>


<div class="containerFull stages">
    <h1>Этапы создания сайта</h1>
    <img src="images/stages.png">
</div>

    <a name="contacts"></a>

<div class="containerFullBig">
    <div class="questions">
        <h2>У вас еще остались вопросы?</h2>
        <a href=""><div class="button yellow">Получить консультацию</div></a>
    </div>
</div>

<div class="containerFullBig">
    <div id="YMapsID" style="width:100%;height:450px"></div>
    <!--<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=DxJbBcN2k1a9DzPUG8eEnsBLR3U5OoI_&height=450"></script>-->
</div>

<?php include('partials/footer.php'); ?>