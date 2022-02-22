<?php

namespace App\Model;

class ProductModel
{
    public $connektor;

    public function __construct()
    {
        $db = new DBConnect();
        $this->connektor = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->connektor->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM products WHERE id=$id";
        $this->connektor->query($sql);
    }

    public function add($product)
    {

        $sql = "INSERT INTO products (productName, type, price, quantity, date, description) values (?,?,?,?,?,?)";
        $stmt = $this->connektor->prepare($sql);
        $stmt->bindParam(1, $product['productName']);
        $stmt->bindParam(2, $product['type']);
        $stmt->bindParam(3, $product['price']);
        $stmt->bindParam(4, $product['quantity']);
        $stmt->bindParam(5, $date);
        $stmt->bindParam(6, $product['description']);
        $stmt->execute();
    }

    public function updateById($id, $product)
    {
        $sql = "UPDATE products set productName=?, type=?, price=?, quantity=?, description=? where id=?";
        $stmt = $this->connektor->prepare($sql);
        $stmt->bindParam(1, $product['productName']);
        $stmt->bindParam(2, $product['type']);
        $stmt->bindParam(3, $product['price']);
        $stmt->bindParam(4, $product['quantity']);
        $stmt->bindParam(5, $product['description']);
        $stmt->bindParam(6, $id);
        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM products where id=$id";
        $stmt = $this->connektor->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}