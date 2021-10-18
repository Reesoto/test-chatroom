<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use http\Exception\InvalidArgumentException;
use function PHPUnit\Framework\throwException;

class UserService {

    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    /**
     * [get Author Details]
     * @param  User  $user
     * @return array
     */
    public function getAuthorDetails(User $user) : array {
        $author = $this->em->getRepository(User::class)->findOneById($user->getId());

        return [
            "id"  => $author->getId(),
            "nickname"  => $author->getNickname(),
            "avatar"    => $author->getAvatar(),
            "email"    => $author->getEmail()
        ];
    }

    /**
     * @param int $id
     * @return string
     */
    public function getNicknameById(int $id) : string {
        if(!is_null($id)) {
            $user = $this->em->getManager(User::class)->findOneById($id);
        } else {
            throw new InvalidArgumentException("ID can not be empty");
        }

        return $user->getNickname();
    }
}
