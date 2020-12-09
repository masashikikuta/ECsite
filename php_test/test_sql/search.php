<?php

require "pdo_connect.php";
session_start();

if(empty($_POST["search"]) && empty($_POST["category"])){
    $prepare = $dbh->prepare("SELECT * FROM Product_Info");
}else if(empty($_POST["search"])){
    $prepare = $dbh->prepare("SELECT * FROM Product_Info WHERE Product_Category LIKE '%".$_POST["category"]."%'");
}else if(empty($_POST["category"])){
    $prepare = $dbh->prepare("SELECT * FROM Product_Info WHERE Product_Name LIKE '%".$_POST["search"]."%'");
}else {
    $prepare = $dbh->prepare("SELECT * FROM Product_Info WHERE Product_Name LIKE '%".$_POST["search"]."%' AND Product_Category LIKE '%".$_POST["category"]."%' ");
}


// $prepare = $dbh->prepare("SELECT * FROM Product_Info WHERE Product_Name LIKE '%".$_POST["search"]."%' OR Product_Category LIKE '%".$_POST["category"]."%' ");
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>商品一覧</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/nav.css">
</head>
<body>
	<?php require 'nav.php'; ?>

	<div class="search-area">
    		<form action="search.php" method="post" class="form-search">
    			<select name="" class="category-select">
    				<option value="">カテゴリ</option>
    				<option value="">食品</option>
    				<option value="">文房具</option>
    			</select>
        		<input type="text" class="search" name="search">
        		<input type="submit" value="検索" class="search-submit"><br>
        	</form>
	</div>

	<div class="container">
    	<h2>商品一覧</h2>
    	<?php for($i=0; $i<count($result); $i++): ?>
        	<form action="cart.php?name=add" method="post">
    			<div class="product">
    				<a href="product.php?name=<?php echo $result[$i]["Product_ID"] ?>"><img src="<?php echo $result[$i]["Product_Image"] ?>" class="product-image"></a>
    				<h3><a href="product.php?name=<?php echo $result[$i]["Product_ID"] ?>"><?php echo $result[$i]["Product_Name"] ?></a></h3>
    				<div><?php echo $result[$i]["Product_Price"] ?>円</div>
    				<div>数量</div>
    				<input type="number" min="0" max="99" name="quantity">
    				<input type="hidden" name="code" value="<?php echo $result[$i]["Product_ID"] ?>">
    				<input type="submit" name="submit" value="カートに入れる">
    			</div>
    		</form>
    	<?php endfor ?>
    	<?php if(empty($result)): ?>
    		<div class="nou-found">商品が見つかりませんでした</div>
    	<?php endif ?>
    </div>

</body>
</html>