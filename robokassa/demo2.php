<?php

// регистрационная информация (логин, пароль #1)
// registration info (login, password #1)
$mrh_login = "Webhouse";
$mrh_pass1 = "yE1CLKFWddRX";
// номер заказа
// number of order
if ($_REQUEST['id']){
    $inv_id = $_REQUEST['id']*1;
} else {
    $inv_id = 0;
}
// описание заказа
// order description
$inv_desc = "Техническая документация по ROBOKASSA";
// сумма заказа
// sum of order
if($_REQUEST['summ']){
    $out_summ = $_REQUEST['summ'];
} else {
    $out_summ = "14990";
}
// тип товара
// code of goods
$shp_item = "2";
// предлагаемая валюта платежа
// default payment e-currency
$in_curr = "";
// язык
// language
$culture = "ru";
// формирование подписи
// generate signature

// кодировка
// encoding
$encoding = "utf-8";

$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");
// форма оплаты товара
// payment form
print
    "<html>".
    "<form action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".
    "<input type=hidden name=MrchLogin value=$mrh_login>".
    "CMS: ".$_REQUEST['name']." <input type=text id=OutSum name=OutSum value=$out_summ> ".
    "<input type=hidden name=InvId value=$inv_id>".
    "<input type=hidden name=Desc value='$inv_desc'>".
    "<input type=hidden name=SignatureValue value=$crc>".
    "<input type=hidden name=Shp_item value='$shp_item'>".
    "<input type=hidden name=IncCurrLabel value=$in_curr>".
    "<input type=hidden name=Culture value=$culture>".
    "<input class='button' type='submit' value='Оплатить'>".
    "</form></html>";

?>