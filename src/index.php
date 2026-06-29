<?php

    include_once "./Utility/utility.php";

    class Brands
    {

        private ?int $id;

        private string $label;

        private string $description;

        // Attributs d'exemple pour illustrer des cas
        private DateTime $birthedAt;
        private DateTime $createdAt;
        private ?DateTime $updatedAt;

        public function getId(): ?int
        {
            return $this->id;
        }

        public function setId(?int $id): void
        {
            $this->id = $id;
        }

        public function getLabel(): string
        {
            return $this->label;
        }

        public function setLabel(string $label): void
        {
            $this->label = $label;
        }

        // Exemple de méthodes utilitaires dans les classes

        public function getAge(): void
        {
            // return date("Y", new DateTime()) - date("Y", $this->birthedAt);
        }

        public function getDisplayedDate(): DateTime
        {
            if ($this->updatedAt !== null) {
                return $this->updatedAt;
            }
            return $this->createdAt;
        }

    }

    $brand = new Brands();
    $brand->setId(1);
    $brand->setLabel("Ford");

    $brand2 = new Brands();
    $brand2->setId(2);
    $brand2->setLabel("Opel");

    dump($brand->getLabel());
    dump($brand2);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>2026 POEI PHP POO</title>
    </head>
    <body>

    </body>
</html>
