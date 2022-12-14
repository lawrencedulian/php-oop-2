<?php
require_once __DIR__ . "/Category.php";

class Product
{
    public $name;
    public $price;
    public $type_of_animal;

    public function __construct(string $name, float $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
