<?php

$dsn = "mysql:dbname=test;host=127.0.0.1;charset=utf8";
$user = "root";
$password = "";

try {
    $dbh = new PDO($dsn, $user, $password);
//     echo "<p>接続成功</p>";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
