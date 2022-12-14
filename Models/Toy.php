<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product
{
    public $material;
    public $color;

    public function __construct(string $name, float $price, category $category, string $material, string $color)
    {
        parent::__construct($name, $price, $category);
        $this->material = $material;
        $this->color = $color;
    }
}
