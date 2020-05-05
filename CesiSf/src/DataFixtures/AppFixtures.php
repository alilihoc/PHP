<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;


class AppFixtures extends Fixture
{

  public function load(ObjectManager $manager)
    {
        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');

        $marque1 = new Marque();
        $marque1->setNom('Apple');
        $manager->persist($marque1);

        $marque2 = new Marque();
        $marque2->setNom('Samsung');
        $manager->persist($marque2);

        $marque3 = new Marque();
        $marque3->setNom('Microsoft');
        $manager->persist($marque3);

        $MarqueArray = [$marque1,$marque2,$marque3];
        // on créé 10 produits
        for ($i = 0; $i < 10; $i++) {
            shuffle($MarqueArray);
            $produit = new Produit();
            $produit->setTitre($faker->randomElement($array = array ('Lave Vaisselle','Grille Pain','TV 110 Cm','Aspirateur','Ordinateur','Tablette','Smartphone','Cafetiere','Lave Linge','Robot Ménager' )))
              ->setCouleur($faker->numberBetween(1,10))
              ->setDescription($faker->sentence(20, true))
              ->setFabAdress($faker->streetAddress)
              ->setFabCity($faker->city)
              ->setFabPostCode($faker->postcode)
              ->setPoids($faker->randomFloat($nbMaxDecimals = 2, $min = 2, $max = 500))
              ->setPrixTTC($faker->randomNumber(4))
              ->setPrixHT($produit->getPrixTTC() * 0.8)
              ->setStockQte($faker->randomNumber(2))
              ->setMarque($MarqueArray[0]);
            $manager->persist($produit);
        }
        $manager->flush();


    }
}
