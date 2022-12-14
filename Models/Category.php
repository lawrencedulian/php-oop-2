<?php
require_once __DIR__ . "/Product.php";

class Category
{
    public $type_of_animal;
    public function __construct($type_of_animal)
    {
        $this->type_of_animal = $type_of_animal;
    }
}
