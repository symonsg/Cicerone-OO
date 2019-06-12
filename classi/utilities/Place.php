<?php
namespace classi\utilities;

//dichiarazione classe "place"
class Place{
    private $nation;
    private $county;        //campo provincia
    private $city;
    private $street;
    private $number;
    
    public function __construct(string $nation, string $county, string $city, string $street, string $number) {
        
        $this->nation = trim($nation);
        $this->county = trim($county);
        $this->city = trim($city);
        $this->street = trim($street);
        $this->number = trim($number);
    }

    public function getNation()
    {
        return $this->nation;
    }

    public function getCounty()
    {
        return $this->county;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getNumber()
    {
        return $this->number;
    }
    
}

