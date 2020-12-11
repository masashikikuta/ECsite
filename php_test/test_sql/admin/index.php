<?php
require 'admin.php';
require '../pdo_connect.php';
$st = $dbh->query("SELECT * FROM ProDuct_Info");
$goods = $st->fetchAll();
require 't_index.php';
?>