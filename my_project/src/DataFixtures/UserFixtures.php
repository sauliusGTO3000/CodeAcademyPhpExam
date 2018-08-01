<?php
/**
 * Created by PhpStorm.
 * User: SauliusGTO3000
 * Date: 8/1/2018
 * Time: 15:09
 */

namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager){
        $admin = new User();
        $admin->setUsername('admin@admin.com');
        $admin->setPassword('$2y$13$GokmxeAM1kEoQDumZG8H/uToGhhybsjn/FX.c7JuWtbvC6L77OpfO');
        $admin->setIsActive(True);
        $admin->setRoles('ROLE_ADMIN');
        $admin->setEmail('admin@admin.com');
        $manager->persist($admin);
        $manager->flush();
    }

}