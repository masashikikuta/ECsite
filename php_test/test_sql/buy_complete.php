<?php

require "pdo_connect.php";
session_start();

$prepare = $dbh->prepare("SELECT * FROM Product_Info");
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

foreach($_SESSION["ROWS"] as $r){
    $stock = $result[$r['Product_ID'] - 1]["Product_Stock"];
    $stock -= $r['num'];
    $prepare = $dbh->prepare("UPDATE Product_Info SET Product_Stock = ? WHERE Product_ID = ?");
    $prepare->execute([$stock, $r['Product_ID']]);
}


$_SESSION["CART"] = null;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>購入完了</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/buy_complete.css">
</head>
<body>
	<?php require "nav.php"; ?>
	<?php require 'search_area.php'; ?>

	<div class="container">
    	<h1>購入ありがとうございました</h1>
    	<div>
    		<a href="product_list.php">トップに戻る</a>
    	</div>
    </div>

	<?php require "footer.php"; ?>
	<script src="js/common.js"></script>
</body>
</html>