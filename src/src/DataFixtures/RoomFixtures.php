<?php

namespace App\DataFixtures;

use App\Entity\Room;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RoomFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*Create new Room */
        $room = new Room();
        $room->setName('Public');
        $room->setMaxParticipant(100);
        $room->setPicture('https://picsum.photos/id/1/300/200');

        $manager->persist($room);
        $manager->flush();

        $room = new Room();
        $room->setName('Society');
        $room->setMaxParticipant(100);
        $room->setPicture('https://picsum.photos/id/10/300/200');

        $manager->persist($room);
        $manager->flush();

        $room = new Room();
        $room->setName('Funny');
        $room->setMaxParticipant(100);
        $room->setPicture('https://picsum.photos/id/20/300/200');

        $manager->persist($room);
        $manager->flush();
    }
}
