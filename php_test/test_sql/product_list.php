<?php

require "pdo_connect.php";

session_start();

$prepare = $dbh->prepare("SELECT * FROM Product_Info");
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>商品一覧</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/popup.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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

	<div class="header">

	</div>

	<div class="container">

		<div class="left-content">
    		<?php for($i=0; $i<count($result); $i++): ?>
            	<form action="cart.php?name=add" method="post" class="test0">
        			<div class="product">
        				<a href="product.php?name=<?php echo $result[$i]["Product_ID"] ?>"><img src="<?php echo $result[$i]["Product_Image"] ?>" class="product-image"></a>
        				<h3><a href="product.php?name=<?php echo $result[$i]["Product_ID"] ?>" class="item-name"><?php echo $result[$i]["Product_Name"] ?></a></h3>
        				<div><?php echo $result[$i]["Product_Price"] ?>円</div>
        				<div>数量</div>
        				<input type="number" min="0" max="<?php echo $result[$i]["Product_Stock"] ?>" name="quantity">
        				<input type="hidden" name="code" value="<?php echo $result[$i]["Product_ID"] ?>">
        				<input type="submit" name="submit" value="カートに入れる">
        				<div>在庫数:<?php echo $result[$i]["Product_Stock"] ?>個</div>
        			</div>
        		</form>
        	<?php endfor ?>
        </div>

        <div class="right-content">
			<div class=pickup-category>
				<h5>おすすめのカテゴリ</h5>
				<ul>
					<li><a href="">食品</a></li>
					<li><a href="">文房具</a></li>
				</ul>
			</div>
			<div class="pickup-product">
				<h5>おすすめの商品</h5>
				<?php for($i=0; $i<count($result); $i++): ?>
					<div class="pickup">
						<a href="product.php?name=<?php echo $result[$i]["Product_ID"] ?>">
						<img src="<?php echo $result[$i]["Product_Image"] ?>" class="pickup-image">
						<a href=""><?php echo $result[$i]["Product_Name"] ?></a>
						<div class="pickup-price"><?php echo $result[$i]["Product_Price"] ?>円</div>
						</a>
					</div>
				<?php endfor ?>
			</div>
        </div>

    </div>

	<?php if($_GET["name"] == "added"): ?>
        <div class="popup">
    		カートに商品を追加しました
        </div>
    <?php endif ?>

    <script src="js/popup.js"></script>

</body>
</html>