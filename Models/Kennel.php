<?php
require_once __DIR__ . "/Product.php";

class Kennel extends Product
{
    public $size;

    public function __construct(string $name, float $price, category $category, string $size)
    {
        parent::__construct($name, $price, $category);
        $this->size = $size;
    }
}
