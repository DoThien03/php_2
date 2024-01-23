<?php
require_once "controllers/ProductController.php";
$url = isset($_GET["url"]) ? $_GET["url"] : "/";


$product = new ProductController();


switch ($url) {
    case '/':
        $product->listProduct();
        break;
    case 'add-product':
        if (isset($_POST['save'])) {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $product->addProducts($name, $price);
        };
        $product->addProduct();
        break;
    case 'edit-product':
        if (isset($_POST['edit'])) {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            $product->updateProducts($name, $price);
        };
        $product->show();
        break;

    case 'delete':
        $product->deleteProduct();
        break;
}
