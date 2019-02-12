<?php

namespace App\DataFixtures;

use App\Entity\Events;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EventsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1;$i <= 6; $i++) {
            $event=new Events();
            $event->setTitle("event n°$i")
                  ->setLieu("chez $i")
                  ->setDateEvent(new \DateTime())
                  ->setPicEvent1("http://placehold.it/350x150")
                  ->setParticipeOui("$i")
                  ->setParticipeNon("$i")
                  ->setParticipePe("$i");
                  $manager->persist($event);
        }

        $manager->flush();
    }
}
