<?php
include_once "lib.php";

$db=new db();

$color = $_GET['color'];
echo $color;

$db->act("insert into rgb set rgbcolor='$color' ");

$db->finish();
?>
