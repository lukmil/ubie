<?php
/**
 * Created by PhpStorm.
 * User: lukmil
 * Date: 10/6/2016
 * Time: 18:01
 */

namespace AppBundle\modals;


class Login
{
    private $email;
    private $password;

    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}