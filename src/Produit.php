<?php

use Doctrine\ORM\Mapping as ORM;

/* 
  l'annotation #[ORM\Entity] 
  permet de marquer une classe comme 
  étant une entité dans Doctrine, 
  ce qui permet à Doctrine de la mapper 
  à une table en base de données 
  et de faire le lien entre les propriétés 
  de la classe et les colonnes de la table.
*/
#[ORM\Entity]
#[ORM\Table(name: 'produits')]
class Produit
{
  #[ORM\Id]
  #[ORM\Column(type: 'integer')]
  #[ORM\GeneratedValue]
  private int|null $id = null;

  #[ORM\Column(type: 'string')]
  private string $name;

  // .. (other code)

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getId(): int
  {
    return $this->id;
  }
}
