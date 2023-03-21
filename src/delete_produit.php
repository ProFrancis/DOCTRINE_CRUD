<?php
// On récupère l'objet "Produit" correspondant à l'identifiant $id en utilisant la méthode "find" de l'EntityManager
$produit = $entityManager->find(Produit::class, $id);

// Si l'objet n'a pas été trouvé, $produit sera null
if ($produit !== null) {
    // On supprime l'objet de la base de données en utilisant la méthode "remove" de l'EntityManager
    $entityManager->remove($produit);
    // On enregistre les modifications en base de données en utilisant la méthode "flush" de l'EntityManager
    $entityManager->flush();
}