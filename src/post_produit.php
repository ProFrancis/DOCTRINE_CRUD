<?php

require_once "../bootstrap.php";

$article = "Basket";

/*
  Cela crée une nouvelle instance de la classe 
  Produit et stocke l'objet dans la variable $product.
*/
$product = new Produit; 

/* 
  Cela appelle la méthode setName() de l'objet $product et lui passe la valeur de la variable $article comme argument. 
*/
$product->setName($article);

/* 
  @persist()
  La méthode persist() est utilisée pour indiquer à Doctrine 
  que l'objet doit être enregistré dans la base de données lors de l'appel à flush().  
*/
$entityManager->persist($product);

/* 
  @flush()
  Cela permet de confirmer toutes les modifications apportées à la base de données et de les enregistrer de manière permanente en utilisant la méthode flush() de l'entityManager. 
*/
$entityManager->flush();