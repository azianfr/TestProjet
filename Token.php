<?php

/**
 * Created by PhpStorm.
 * User: Will
 * Date: 24/05/2017
 * Time: 12:25
 */
class Token
{
    private $token;

    /**
     * Token constructor.
     * @param $token
     */
    public function __construct($length)
    {
        $this->token = bin2hex(openssl_random_pseudo_bytes($length));
    }


    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

}