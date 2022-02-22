<?php

namespace App\Controller;

use App\Model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showAllProducts()
    {
        $products = $this->productModel->getAll();
        include_once "App/View/list.php";
    }

    public function deleteProduct($id)
    {
        $this->productModel->deleteById($id);
        header("location:index.php?page=list");
    }

    public function addProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/View/create.php";
        } else {
            $product = [
                'productName'=> $_POST['productName'],
                'type'=> $_POST['type'],
                'price'=> $_POST['price'],
                'quantity'=> $_POST['quantity'],
                'description'=> $_POST['description']
            ];
//            var_dump($product);
//            die();
            $this->productModel->add($product);
            header("location:index.php?page=list");
        }

    }

    public function updateProduct($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/View/update.php";
        } else {
            $product = [
                'productName'=> $_POST['productName'],
                'type'=> $_POST['type'],
                'price'=> $_POST['price'],
                'quantity'=> $_POST['quantity'],
                'description'=> $_POST['description']
            ];
            $this->productModel->updateById($id, $product);
            header("location:index.php?page=list");
        }
    }
}