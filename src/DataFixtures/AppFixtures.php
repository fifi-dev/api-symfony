<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        //$test_password = $this->passwordEncoder->encodePassword("#12345678");
        //generating fake tasks
        /*for ($i = 1; $i <= 10; $i++) {
            $task = new  Task;
            $task->setTitle('Ma tâche n° ' . $i);
            $task->setDescription('Une desciption de la tache ' . $i);
            $task->setDone(false);

            $manager->persist($task);
        }*/

        //generating fake users
        for ($i = 1; $i <= 10; $i++) {
            $user = new  User();
            $user->setEmail('email' . $i . '@fake-user.com');
            $user->setApi_key('12345');
            $user->setPassword("#12345678");
            $user->set(false);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
