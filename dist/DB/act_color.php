<?php
include_once "lib.php";

$db=new db();

// $color = $_GET['sensor'];
$db->get("select rgbcolor from rgb order by seq desc limit 1",$rs,$rn);

echo $rs[0]['rgbcolor'];

$db->finish();
?>
