<?php

require_once $_SERVER['DOCUMENT_ROOT']."/App/Config/config.php";

class Flight
{
    protected $id;
    protected $destination;
    protected $base_price;
    protected $mo;
    protected $tu;
    protected $we;
    protected $th;
    protected $fr;
    protected $sa;
    protected $su;

    public function __construct($id,$destination,$base_price,$mo,$tu,$we,$th,$fr,$sa,$su){
        $this->id=$id;
        $this->destination=$destination;
        $this->base_price=$base_price;
        $this->mo=$mo;
        $this->tu=$tu;
        $this->we=$we;
        $this->th=$th;
        $this->fr=$fr;
        $this->sa=$sa;
        $this->su=$su;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination(string $destination)
    {
        $this->destination = $destination;
    }

    public function getBasePrice()
    {
        return $this->base_price;
    }

    public function setBasePrice(string $base_price)
    {
        $this->base_price = $base_price;
    }

    public function getMo()
    {
        return $this->mo;
    }

    public function setMo(string $mo)
    {
        $this->mo = $mo;
    }

    public function getTu()
    {
        return $this->tu;
    }

    public function setTu(string $tu)
    {
        $this->tu = $tu;
    }

    public function getWe()
    {
        return $this->we;
    }

    public function setWe(string $we)
    {
        $this->we = $we;
    }

    public function getTh()
    {
        return $this->th;
    }

    public function setTh(string $th)
    {
        $this->th = $th;
    }

    public function getFr()
    {
        return $this->fr;
    }

    public function setFr(string $fr)
    {
        $this->fr = $fr;
    }

    public function getSa()
    {
        return $this->sa;
    }

    public function setSa(string $sa)
    {
        $this->sa = $sa;
    }

    public function getSu()
    {
        return $this->su;
    }

    public function setSu(string $su)
    {
        $this->su = $su;
    }

}