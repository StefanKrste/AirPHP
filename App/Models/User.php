<?php

require('../Config/config.php');

class User
{
    protected $id;
    protected $username;
    protected $password;
    protected $points;
    protected $email;
    protected $role;
    public function __construct($id,$username,$password,$points,$email,$role){
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
        $this->points=$points;
        $this->email=$email;
        $this->role=$role;
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
    public function getRole()
    {
        return $this->role;
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
    public function setRole(string $role)
    {
        $this->$role = $role;
    }
}