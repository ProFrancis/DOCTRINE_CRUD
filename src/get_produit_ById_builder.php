<?php

require_once "../bootstrap.php";

$id = 1;
$query = $entityManager->createQueryBuilder()
  ->select('p.id', 'p.name')
  ->from(Produit::class, 'p')
  ->where('p.id = :id') /* Cette méthode ajoute la clause WHERE à la requête, en spécifiant la condition de recherche. Dans cet exemple, nous recherchons le produit qui a un identifiant égal à 1, en utilisant une variable nommée :id. */
  ->setParameter('id', $id)/*  Cette méthode associe une valeur à la variable nommée :id dans la requête, en utilisant la valeur de la variable $id définie précédemment. Cela permet d'éviter les attaques par injection SQL et de rendre la requête dynamique.
 */
  ->getQuery();
$result = $query->execute();
