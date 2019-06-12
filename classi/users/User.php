<?php
namespace classi\users;

use classi\payments\PaymentInterface;
use classi\utilities\Date;
use classi\utilities\Place;

class User {
    private $name;
    private $surname;
    private $address;
    private $birthDate;
    private $contact;
    private $password;
    private $payment;
    private $language;
    
    
    public function __construct(string $name, string $surname) {
        $this->name = trim($name);
        $this->surname = trim($surname);
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setAddress(string $nation, string $county, string $city, string $street, string $number)
    {
        $this->address = new Place($nation, $county, $city, $street, $number);
    }

    public function setBirthDate(int $day, int $month, int $year)
    {
        $this->birthDate = new Date($day, $month, $year);
    }

    public function setContact(string $email, string $phone_num)
    {
        $this->contact = new Contact($email, $phone_num);
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;      //TODO
    }

    public function setLanguage(string $language)
    {
        $this->language = trim($language);
    }


    
    
    
    
}

