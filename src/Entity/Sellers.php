<?php


class Sellers
{

  private int $id;
  private string $first_name;
  private string $last_name;
  private string $email;
  private string $location;
  private string $phone_number;


  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }


  public function getFirstName(): string
  {
    return $this->first_name;
  }

  public function SetFirstName(string $first_name): void
  {
    $this->first_name = $first_name;
  }


  public function getLastName(): string
  {
    return $this->last_name;
  }

  public function SetLastName(string $last_name): void
  {
    $this->last_name = $last_name;
  }


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
}
