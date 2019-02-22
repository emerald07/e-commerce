<?php
require_once '_header.php';
$json = array('error' => true);
require_once 'panier.class.php';
if(isset($_GET['id'])){
	$product = $DB->query('SELECT id FROM products WHERE id=:id',array('id' => $_GET['id']));
	if(empty($product)){
		$json['message']="Ce produit n'existe pas";
}
  $panier->add($product[0]->id);
  $json['error']= false;
  $json['message']='Le produit a bien été ajouter à votre panier';
}else{
	$json['message']="Vous n'avez pas sélectionner de produit à ajouter au panier";
}
echo json_encode($json);
