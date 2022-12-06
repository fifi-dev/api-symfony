<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 1; $i <= 10; $i++) {
            $task = new  Task;
            $task->setTitle('Ma tâche n° ' . $i);
            $task->setDescription('Une desciption de la tache ' . $i);
            $task->setDone(false);
            $manager->persist($task);
        }

        $manager->flush();
    }
}
