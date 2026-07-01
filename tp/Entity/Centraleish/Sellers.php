<?php

include_once __DIR__."/Traits/Common.php";

class Sellers
{

    use Common;

    private string $firstName;

    private string $lastName;

    private string $email;

    private string $location;

    private string $phoneNumber;

    // Getters

    public function getFirstName(): ?string {
        return $this->firstName;
    }

    public function getLastName(): ?string {
        return $this->lastName;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getLocation(): ?string {
        return $this->location;
    }

    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    // Setters

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setLocation(string $location): void {
        $this->location = $location;
    }

    public function setPhoneNumber(string $phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

}

?>