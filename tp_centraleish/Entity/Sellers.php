<?php
include_once "TraitId.php";
include_once "TraitName.php";
class Sellers{

    use TraitId, TraitName;
    private string $email;
    private string $location;
    private string $phone_number;

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getLocation(): string
    {
        return $this->location;
    }
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }
    public function setPhoneNumber(string $phone_number): void
    {
        $this->phone_number = $phone_number;
    }
    function getFullname(): string
    {
        return $this->first_name . " " . $this->last_name;
    }
}