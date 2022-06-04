<?php
include_once "lib.php";

$db = new db();

$lightvalue = $_GET['v'];
$ledvalue = $_GET['l'];

$db->act("insert into light set light='$lightvalue', led='$ledvalue' ");

$db->finish();
