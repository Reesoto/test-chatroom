<?php

namespace App\Controller;

use App\Service\MessageService;
use App\Service\RoomService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
    #[Route('/chat/{id}', name: 'chat', defaults: ['id' => 0])]
    public function index( int $id, RoomService $roomService ): Response
    {
        if($id == 0) {
            return $this->redirectToRoute('room');
        }

        $chatroomDetails = $roomService->getRoomDetails($id);
        $nickname = $this->getUser()->getNickname();
        $me = $this->getUser()->getId();

        return $this->render('chat/index.html.twig', [
            'nickname'        => $nickname,
            'me'              => $me,
            'chatroomDetails' => $chatroomDetails
        ]);
    }

    #[Route('/manageInstantMessage', name: 'manageMessage')]
    public function manageInstantMessage(
        Request $request,
        RoomService $roomService,
        MessageService $messageService
    ): JsonResponse
    {
        $data = \json_decode($request->getContent(), true);

        if (empty($content = $data['body'])) {
            throw new AccessDeniedHttpException('No data sent');
        }

        if (empty($data['room'])) {
            throw new AccessDeniedHttpException('Message have to be sent on a specific room');
        }

        $room = $roomService->getRoom($data['room']);
        $author = $this->getUser();

        $datas =
            [
                'room'    => $room,
                'body'    => $content,
                'author'  => $author
            ];

        $jsonMessage = $messageService->saveInstantMessage($datas);

        return new JsonResponse(
            $jsonMessage,
            Response::HTTP_OK,
            [],
            true
        );
    }

    #[Route('/getLastMessages/{idRoom}', name: 'lastMessages', defaults: ['idRoom' => 0])]
    public function getLastMessages(int $idRoom, MessageService $messageService, RoomService $roomService) {

        if ($idRoom === 0) {
            throw new AccessDeniedHttpException('Message have to be sent on a specific room');
        } else {
            $room = $roomService->getRoom($idRoom);
            $jsonNewFeed = $messageService->getLast5SecMessages($room, $this->getUser());
            return new JsonResponse(
                $jsonNewFeed,
                Response::HTTP_OK,
                [],
                true
            );
        }
    }
}
