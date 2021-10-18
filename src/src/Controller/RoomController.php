<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\RoomService;

class RoomController extends AbstractController
{
    #[Route('/room', name: 'room')]
    public function index(RoomService $roomService): Response
    {
        $nickname = $this->getUser()->getNickname();
        $rooms = $roomService->getAllRooms();

        return $this->render('room/index.html.twig', [
            'nickname'  => $nickname,
            'rooms' => $rooms
        ]);
    }
}