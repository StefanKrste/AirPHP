<?php

require('../Config/config.php');

class User
{
    protected $id;
    protected $username;
    protected $password;
    protected $points;
    protected $email;

    public function __construct($id,$username,$password,$points,$email){
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
        $this->points=$points;
        $this->email=$email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setUsername(string $username)
    {
        $this->$username = $username;
    }

    public function setPassword(string $password)
    {
        $this->$password = $password;
    }

    public function setPoints(string $points)
    {
        $this->$points = $points;
    }

    public function setEmail(string $email)
    {
        $this->$email = $email;
    }

}