<?php

namespace models;

class Product extends Database
{
    public function getAllProducts(): array|bool
    {
        $sql = "SELECT * FROM products LIMIT 20";
        // On choppe la fonction query depuis Database
        $result = Database::query($sql);
        return $result->fetchAll();
    }
}