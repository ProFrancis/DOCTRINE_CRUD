<?php

require_once '../bootstrap.php';

/*   
  @$entityManager->getRepository()
  Cela crée une instance de l'objet repository 
  pour la classe Produit et le stocke dans la variable $repoProduit. 
  Le repository est une classe qui fournit des méthodes 
  pour interagir avec les objets de la base de données. 
*/
$repoProduit = $entityManager->getRepository(Produit::class);

/*   
  Cela appelle la méthode findAll() du repository de l'objet Produit, pour récupérer 
  tous les objets de la base de données et les stocke dans la variable $produits.
*/
$produits = $repoProduit->findAll();

/* 
  Cela parcourt tous les objets stockés dans la variable $produits 
  en utilisant une boucle foreach.
 */
foreach ($produits as $produit) {
  /*   
  Cela affiche l'ID et le nom de chaque objet Produit stocké dans la base de données. 
  La méthode getId() renvoie l'identifiant de l'objet 
  La méthode getName() renvoie le nom de l'objet. 
*/
  echo $produit->getId() . ' : ' . $produit->getName() . "\n";
}
