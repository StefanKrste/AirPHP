<?php
require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";

class Ticket
{
    /**
     * @return mixed
     */
    public function getNumPassengers()
    {
        return $this->num_passengers;
    }

    /**
     * @param mixed $num_passengers
     */
    public function setNumPassengers($num_passengers): void
    {
        $this->num_passengers = $num_passengers;
    }
    /**
     * @return mixed
     */

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * @param mixed $des
     */
    public function setDes($des): void
    {
        $this->des = $des;
    }



    /**
     * @return mixed
     */
    public function getClas()
    {
        return $this->clas;
    }

    /**
     * @param mixed $clas
     */
    public function setClas($clas): void
    {
        $this->clas = $clas;
    }

    /**
     * @return mixed
     */
    public function getLuggage()
    {
        return $this->luggage;
    }

    /**
     * @param mixed $luggage
     */
    public function setLuggage($luggage): void
    {
        $this->luggage = $luggage;
    }

    /**
     * @return mixed
     */
    public function getTypeLuggage()
    {
        return $this->typeLuggage;
    }

    /**
     * @param mixed $typeLuggage
     */
    public function setTypeLuggage($typeLuggage): void
    {
        $this->typeLuggage = $typeLuggage;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param mixed $Price
     */
    public function setPrice($Price): void
    {
        $this->Price = $Price;
    }

    protected $date;
    protected $des;
protected $num_passengers;
    protected $clas;
    protected $luggage;
    protected $typeLuggage;
    protected $email;
    protected $name;
    protected $surname;
    protected $Price;

    /**
     * @param $date
     * @param $des

     * @param $clas
     * @param $luggage
     * @param $typeLuggage
     * @param $email
     * @param $name
     * @param $surname
     * @param $Price
     */
    public function __construct($date, $des,$num_passengers, $clas, $luggage, $typeLuggage, $email, $name, $surname, $Price)
    {
        $this->date = $date;
        $this->des = $des;
        $this->num_passengers=$num_passengers;
        $this->clas = $clas;
        $this->luggage = $luggage;
        $this->typeLuggage = $typeLuggage;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->Price = $Price;
    }
}