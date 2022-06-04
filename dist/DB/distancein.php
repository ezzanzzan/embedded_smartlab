<?php
include_once "lib.php";

$db = new db();

$distance = $_GET['v'];
$buzzer = $_GET['b'];

$db->act("insert into distance set distance='$distance', buzzer='$buzzer' ");

$db->finish();
