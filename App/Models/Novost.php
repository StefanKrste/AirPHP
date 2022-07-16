<?php

require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";

class Novost
{

    protected $id;
    protected $title;
    protected $description;
    protected $time;

    /**
     * @param $id
     * @param $title
     * @param $description
     * @param $time
     */

    public function __construct($id, $title, $description, $time)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->time = $time;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }



}