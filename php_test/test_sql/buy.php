<?php

require "pdo_connect.php";
session_start();

$sum = 0;

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>購入確認</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<h1>購入確認</h1>
<table>
  <tr><th>商品名</th><th>単価</th><th>数量</th><th>小計</th></tr>
  <?php foreach($_SESSION["ROWS"] as $r) { ?>
    <tr>
      <td><?php echo $r['Product_Name'] ?></td>
      <td><?php echo $r['Product_Price'] ?></td>
      <td><?php echo $r['num'] ?></td>
      <td><?php echo $r['Product_Price'] * $r['num'] ?> 円</td>
      <?php $sum += $r['Product_Price'] * $r['num'] ?>
    </tr>
  <?php } ?>
  <tr><td colspan='2'> </td><td><strong>合計</strong></td><td><?php echo $sum ?> 円</td></tr>
</table>
<div class="base">
  <a href="buy_complete.php">購入を確定する</a>
</div>
</body>
</html>