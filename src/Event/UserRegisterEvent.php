<?php
/**
 * Created by PhpStorm.
 * User: eketchabepa
 * Date: 09.10.2018
 * Time: 13:23
 */

namespace App\Event;


use App\Entity\User;
use Symfony\Component\EventDispatcher\Event;

class UserRegisterEvent extends Event
{
    const NAME = 'user.register';
    /**
     * @var User
     */
    private $registeredUser;

    public function __construct(User $registeredUser)
    {
        $this->registeredUser = $registeredUser;
    }

    /**
     * @return User
     */

    public function getRegisteredUser(): User
    {
        return $this->registeredUser;
    }
}