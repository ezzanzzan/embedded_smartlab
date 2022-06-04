<?php
include_once "lib.php";

$db = new db();

$t = $_GET['t'];
$h = $_GET['h'];

$db->act("insert into dht set temperature='$t', humidity='$h' ");

$db->finish();
