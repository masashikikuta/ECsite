<?php

require "pdo_connect.php";

session_start();

$sum = 0;

$_SESSION["ROWS"] = array();
if (!isset($_SESSION['CART'])) $_SESSION['CART'] = array();
if (@$_POST['submit']) {
    @$_SESSION['CART'][$_POST['code']] += $_POST['quantity'];
}

foreach($_SESSION['CART'] as $code => $num) {
    $st = $dbh->prepare("SELECT * FROM Product_Info WHERE Product_ID=?");
    $st->execute(array($code));
    $row = $st->fetch();
    $st->closeCursor();
    $row['num'] = strip_tags($num);
    $_SESSION["ROWS"][] = $row;
}

if(@$_GET["name"]){
    header('Location: product_list.php?name=added');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>カート</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <?php require 'nav.php'; ?>
    <h1>カート</h1>
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
      <a href="product_list.php">お買い物に戻る</a>　
      <a href="cart_empty.php">カートを空にする</a>　
      <a href="buy.php">購入する</a>
    </div>
</body>
</html>