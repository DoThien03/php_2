<?php
require_once "models/Product.php";
function getProduct(){
    // tạo ra 1 biến để hứng list danh sách product được trả về từ models
    $products = getListProduct();
    include_once "views/product/list.php";
//    echo "<pre>";
//    var_dump($products);
//    die;
//    echo "DDaay la danh sach product";
}