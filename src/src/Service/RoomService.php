<?php

namespace App\Service;

use App\Service\MessageService;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Room;

class RoomService {

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var \App\Service\MessageService
     */
    protected $messageService;

    public function __construct(EntityManagerInterface $em, MessageService $messageService) {
        $this->em = $em;
        $this->messageService = $messageService;
    }

    /**
     * [Retrieve an object Room by its ID]
     * @param  int  $id
     * @return Room
     */
    public function getRoom(int $id) : Room {
        $room = $this->em->getRepository(Room::class)->findOneById($id);
        return $room;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getRoomDetails(int $id) {
        $room = $this->getRoom($id);
        $messages = $this->messageService->getRoomMessages($room);

        $room = $this->em->getRepository(Room::class)->getRoomDetails($id);

        return [
            'room' => $room,
            'Messages'  => $messages
        ];
    }

    /**
     * [get All Rooms]
     * @return array
     */
    public function getAllRooms() : array {
        return $this->em->getRepository(Room::class)->findAll();
    }
}
