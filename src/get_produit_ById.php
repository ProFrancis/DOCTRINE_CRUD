<?php

require_once "../bootstrap.php";

$id = 4; /* Cette ligne définit la valeur de l'identifiant $id que l'on souhaite récupérer. */

$product = $entityManager->find(Product::class, $id);/* Cette ligne récupère un objet Product à partir de son identifiant $id en utilisant la méthode find de l'EntityManager. L'identifiant est la clé primaire du produit. */

$productId = $product->getId(); /* Cette ligne récupère l'identifiant de l'objet Product à partir de la méthode getId() et stocke cette valeur dans la variable $productId.
 */

$entityManager->remove($product); /* Cette ligne supprime l'objet $product de la base de données en utilisant la méthode remove de l'EntityManager. */