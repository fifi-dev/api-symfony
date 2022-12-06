<?php

namespace App\DataFixtures;

use App\Entity\Task;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {

    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 1; $i <= 10; $i++){
            $task = new  Task;
            $task->setTitle('Ma tâche n° ' . $i);
            $task->setDescription('Une desciption de la tache ' . $i);
            $task->setDone(false);

            $user = new User;
            $user->setEmail('user' . $i . '@gmail.com');
            $user->setPassword($this->passwordEncoder->hashPassword($user, 'password'));

            $manager->persist($task);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
