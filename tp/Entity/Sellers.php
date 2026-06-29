<?php


class Sellers
{

    private int $id;

    private string $first_name;

    private string $last_name;

    private string $email;

    private string $location;

    private string $phone_number;

    public function getId() : int
    {
        return $this->id;
    }

    public function getFirstName() : string
    {
        return $this->first_name;
    }

    public function getLastName() : string
    {
        return $this->last_name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getLocation() : string
    {
        return $this->location;
    }

    public function getPhoneNumber() : string
    {
        return $this->phone_number;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }


}