<?php
if(isset($_GET['r'])){
    $r = $_GET['r'];
    setcookie("PartnerID", $r, time() + (86400 * 30), "/", "webhouse.pro");
}
?>