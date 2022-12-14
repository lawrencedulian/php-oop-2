<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $ingredients;
    public $weight;
    public $expiration_date;

    public function __construct(string $name, float $price, category $category, string $ingredients, string $weight, string $expiration_date)
    {
        parent::__construct($name, $price, $category);
        $this->ingredients = $ingredients;
        $this->weight = $weight;
        $this->expiration_date = $expiration_date;
    }
}
