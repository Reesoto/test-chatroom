<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Room;
use App\Entity\Message;

class MessageService {

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em, UserService $userService) {
        $this->em = $em;
        $this->userService = $userService;
    }

    /**
     * @param Room $room
     * @return array
     */
    public function getRoomMessages(Room $room) {
        $messagesCol = $room->getMessages();

        $messages = [];

        foreach ($messagesCol as $message) {
            $author = $this->userService->getAuthorDetails($message->getUser());

            $messages[] = [
                "author"  => $author,
                "date"    => $message->getCreatedAt(),
                "body"    => html_entity_decode($message->getBody())
            ];
        };

        return $messages;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getMessageDetails(int $id) : array {
        $message = $this->em->getRepository(Message::class)->findOneById($id);
        $authorDetails = $this->userService->getAuthorDetails($message->getUser());

        $msgDetails = [
            "body"    => html_entity_decode($message->getBody()),
            "date"    => $message->getCreatedAt()
        ];

        return [
            "author"      =>  $authorDetails,
            "message"     => $msgDetails
        ];
    }

    /**
     * @param array $datas
     * @return false|string
     */
    public function saveInstantMessage(array $datas)
    {
        $author = $datas['author'];
        $body = $datas['body'];
        $roomId = $datas['room'];

        $message = new Message();
        $message->setUser($author);
        $message->setBody(htmlentities(trim($body)));
        $message->setCreatedAt(new \DateTimeImmutable());
        $message->setRoom($roomId);

        $this->em->persist($message);
        $this->em->flush();

        $messageDetails = $this->getMessageDetails($message->getId());

        return json_encode($messageDetails);
    }

    /**
     * @param Room $room
     * @return false|string
     */
    public function getLast5SecMessages(Room $room, User $user)  {
        $messages = $this->em->getRepository(Message::class)->getLast5SecMessages($room->getId(), $user->getId());
        $newMsgDetails = [];

        foreach($messages as $message) {
            $newMsgDetails[] = $this->getMessageDetails($message["id"]);
        }

        return json_encode($newMsgDetails);
    }

}
