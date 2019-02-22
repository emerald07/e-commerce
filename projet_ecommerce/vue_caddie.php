<?php
require_once 'db.class.php';
$DB = new DB();
require_once 'panier.class.php';
require_once 'addpanier.php';
require_once '_header.php';
?>
<?php
if(isset($_GET['del'])){
	$panier->del($_GET['del']);
}
?>
	


<head>
<title>Page Caddie</title>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="caddie.css"/>
<link rel="stylesheet" href="produit.css"/>
</head>


<body>


<header class="header">

<div class="header-top">

<span class="h-left">
<span>Shop by Phone (01) 123 456 SM</span>
<span><a href="#">Live Chat With Us</a></span>
</span>

<span class="h-right">
<span>My Account</span> |
<span><a href="#">My Cart </a></span>
</span>

</div>


<div class="header-bottom">

<span>
<a href="vue_page-produit.php"><img src="img/img-01.png"></img></a>
</span>

<span>
<ul><li>OFFICE</li>
	<li>MULTIMEDIA</li>
	<li>DESIGN</li>
	<li>DEVELOPER</li>
	<li>UTILITIES</li>
	<li>GAMES</li></ul>
</span>

<span>
<input class="i1" type="search"/>
</span>

</div>

</header>


<hr>


</body>



<div class="main">

<div class="header2">
  <div><h2>Home > Shopping Cart</h2></div>
  <div><h1>Shopping Cart</h1></div>
</div>

<div class="notification">Votre article a bien été ajouté </div>

<?php
	$ids= array_keys($SESSION['panier']);
	if(empty($ids)){
		$products = array();
		
	}else{
		$products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
	}
	foreach($products as $product);
?>
		
<div class="panier">
<table>
			<thead>
	<tr><td>Item Name</td><td>Price</td><td>Quantity</td><td>Subtotal</td><td> </td></tr>
			</thead>

			<thbody>
	<tr><td><img src="img/cart.png"></img><p><?= $product->name; ?></p></td>
	<td>$100</td>
	<td><input value="1" type="text" name="quantité" class="input-quantite"/></td>
	<td>$100</td><td><a href="panier.php?supprimer=<?= $product->id; ?>" id="supprimer"><img src="img/cart-02.png"></img></a></td></tr>
			</thbody>
		</table>
</div>
<?php// endforeach; ?>

<div class="items">
	<div class="item">
		<table>
			<thead><tr><th>Estimate Shipping & Tax</th></tr></thead>
		    <tr><td>Enter your destination to get a shpping estimate</td></tr>
		    <tr><td><label class="after">Contry</label><input type="text" name=""></td></tr>
		    <tr><td><label class="after">State / Province</label><input type="text" name=""></td></tr>
		    <tr><td><label class="after">Zip / Postal Code</label><input type="text" name=""></td></tr>
		    <tr><td><a href="#"><img src="img/cart-05.png"></img></a></td></tr>
		</table>
	</div>
	<div class="item">
		<table>
			<thead><tr><th>Discount Coupon</th></tr></thead>
		    <tr><td>Enter coupon code below if you have one.</td></tr>
		    <tr><td><label>Get a coupon discount here</label><input type="text" name=""></td></tr>
		    <tr><td><a href="#"><img src="img/cart-04.png"></img></a></td></tr>
		</table>
	</div>
	
	<div class="item">
		<table>
			<thead><tr><td>Order Total</td><td> </td></tr></thead>
		    <tr><td>Subtotal</td><td><?number_format($panier->total(),2,',',' ') ?></td></tr>
		    <tr><td>Grand Total</td><td><h5><?number_format($panier->total()*1.196,2,',',' ') ?></h5></td></tr>
		    <tr><td><a href="#" id="supprimer"><img src="img/cart-03.png"></img></a></td></tr>
		</table>
	</div>
	
</div>

</div>

</body>


<script>
</script>
<footer>


<img src="img/img-27.png"></img>

<div class="f2">

<div>
<img src="img/img-19.png">Facebook</img>
<img src="img/img-20.png">Twitter</img>
<img src="img/img-21.png">YouTube</img>
<img src="img/img-22.png">Flux RSS</img>
</div>

<div class="f22">
<img src="img/img-23.png"></img>
<img src="img/img-24.png"></img>
<img src="img/img-25.png"></img>
<img src="img/img-26.png"></img>
</div>

<br><hr>

<div class="f3">
	<p>2013 SoftMarket Magento Store</p><p><b>EN</b> FR ES   <b>€</b>  $ L</p>
</div>

</footer>

</html>
