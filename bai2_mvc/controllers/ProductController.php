<?php
require_once "models/Product.php";
class ProductController
{

    public function listProduct()
    {
        $listProduct = (new Product())->listProduct();
        include "views/product/list.php";
    }

    public function addProduct()
    {
        $products = (new Product())->listProduct();
        include "views/product/add.php";
    }
    public function addProducts($name, $price)
    {
        $addProduct = (new Product())->addProduct($name, $price);
        header("location:index.php");
    }


    public function show()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $product = new Product();
        $productData = $product->getOneProduct($id);

        include "views/product/edit.php";
    }

    public function updateProducts($name, $price)
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $product = new Product();
        $productData = $product->getOneProduct($id);

        $product->updateProduct($id, $name, $price);
        header("location:index.php");
    }
    public function deleteProduct()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $deleteProduct = (new Product())->deleteProduct($id);
        header("location:index.php");
    }
};
