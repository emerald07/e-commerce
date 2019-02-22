<?php
require_once 'db.class.php';
require_once 'panier.class.php';
//require_once 'header.php';
$DB = new DB();
var_dump($DB->query("SELECT * FROM products"));
$req=$DB->db->prepare('SELECT * FROM products');
$req->execute();
var_dump($req->fetchAll());

$panier= new panier();
?>

<html>
<head>
<title>Page Produit</title>
<meta name="viewport" content="width=device-width, initial-scale-1"
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
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
<span><a href="vue_caddie.php">My Cart </a></span>
</span>

</div>


<div class="header-bottom">

<span>
<img src="img/img-01.png"></img>
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


<div class="header2">
<div><h4>Home > Design</h4></div>
<div><h4>Design</h4></div>
</div>


<div class="container main">



<nav class="col-md-2 main-left">

<table>
<tr><th class="th2">Shop By</th></tr>
<tr><td>CATEGORIES</td><tr>
<tr><td>Catégorie 1</td></tr>
<tr><td>Catégorie 2</td></tr>
<tr><td>Catégorie 3</td></tr>
<tr><td>Catégorie 4</td></tr>
<tr><td>Catégorie 5</td></tr>
<tr><td>Catégorie 6</td></tr>
<tr><th class="th1">PRIX</th></tr>
<tr><th class="th1">COLOR</th></tr>
<tr><th class="th1">BRAND</th></tr>
</table>

</nav>


<div class="col-md-10 main-right">

  <div class="main-right-top">

   <div><img src="img/img-03.png"></img></div>

   <div class="x2">
   	    <img src="img/img-04.png">
	    <img src="img/img-05.png">
	    <img src="img/img-06.png">
	    <img src="img/img-07.png">
   </div>

</div>

<hr>
<div class="main-right-bottom">
<?php $products = $DB->query('SELECT * FROM products'); 
	 foreach ( $products as $product): ?>
  <article>
     <img src="img/img-08.png"></img>
     <p><?= $product->name; ?></p></br>
     <p><?= number_format($product->price,2,',',''); ?>$</p>
     <span> 
      <a class="addPanier" href="addpanier.php?id=<?= $product->id; ?>"><img src="img/img-11.png"></img></a>
      <img src="img/img-12.png"></img>
      <img src="img/img-13.png"></img>
     </span>
  </article>
<?php endforeach ?>
</div>

<div class="pagination">
	<span class="p2">1</span>
	<span class="p2">2</span>
    <span class="p2">3</span>
    <span class="p1">Next Page</span>
</div> 

<div class="f1">
<img src="img/img-14.png"></img>
<img src="img/img-15.png"></img>
<img src="img/img-16.png"></img>
<img src="img/img-17.png"></img>
</div>


</div>




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


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>

</footer>

</body>



</html>
