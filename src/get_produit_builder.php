<?php

require_once '../bootstrap.php';

/* 
  @createQueryBuilder
  Cette ligne crée un objet QueryBuilder à partir d'un objet EntityManager, 
  qui permet de construire une requête. 
*/
$query = $entityManager->createQueryBuilder()
          ->select('p.name', 'p.id') /* 
            Cette ligne spécifie les colonnes que l'on souhaite récupérer dans la requête. 
            Ici, on veut récupérer les colonnes "name" et "id" de la table "Produit", que l'on aliasse en "p". 
          */
          ->from(Produit::class, 'p') /* Cette ligne spécifie la table sur laquelle la   requête sera exécutée. Ici, la table est "Produit" (une classe PHP qui est mappée à une table dans la base de données), et on utilise l'alias "p" pour y faire référence. 
          */
          ->getQuery(); // Cette ligne retourne la requête sous forme d'objet Query.
          
$produits = $query->getArrayResult(); /* Cette ligne exécute la requête et retourne les résultats sous forme de tableau associatif. Les résultats sont stockés dans la variable $produits. */
