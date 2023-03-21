<?php

$id = 1;

$newProduit = 'basket';
  $produit2 = $entityManager->find(Produit::class, $id);

  $produit2->setName($newProduit);
  $entityManager->flush();