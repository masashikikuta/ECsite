<?php

require "pdo_connect.php";
$productID = $_GET["name"];
// echo $productID;

$prepare = $dbh->prepare("SELECT * FROM Product_Info WHERE Product_ID = ?");
$prepare->execute([$productID]);

$result = $prepare->fetch(PDO::FETCH_ASSOC);
// print_r($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>商品詳細</title>
	<link rel="stylesheet" href="css/product.css">
</head>
<body>

	<div class="container">
    	<h2><?php echo $result["Product_Name"] ?></h2>
    	<img src="<?php echo $result["Product_Image"] ?>" class="product-image">
		<div>商品名:<?php echo $result["Product_Name"] ?></div>
		<div><?php echo $result["Product_Price"] ?>円</div>
		<div>カテゴリ:<?php echo $result["Product_Category"] ?></div>
		<p><?php echo $result["Product_About"] ?></p>
		<div>数量</div>
		<input type="text">
		<input type="submit" value="カートに入れる">
		<div>在庫数:<?php echo $result["Product_Stock"] ?></div>
    </div>

</body>
</html>