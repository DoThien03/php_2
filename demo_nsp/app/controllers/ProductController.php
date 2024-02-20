<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{

    public $product;


    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        // lấy danh sách product
        $products = $this->product->getProduct();
        $this->render('product.index', compact("products"));
    }
    public function addProduct()
    {
        return $this->render('product.add');
    }
    public function postProduct()
    {
        if (isset($_POST['btn_add'])) {
            $result = $this->product->addProduct(Null, $_POST['name'], $_POST['price']);
            if ($result) {
                echo "Thêm thành công";
            }
        }
        header('location:list-products');
    }

    public function detail($id)
    {
        $product = $this->product->getDetailProduct($id);
        return $this->render("product.edit", compact('product'));
    }
    public function editProduct()
    {
        if (isset($_POST['btn_edit'])) {
            $result = $this->product->updateProduct($_POST['name'], $_POST['price'], $_POST['id']);
        }
        if ($result) {
            echo "Sửa thành công!";
        } else {
            echo "Sửa Thất bại";
        }
        header('location:list-products');
    }
    public function deleteProduct($id)
    {
        $result = $this->product->deleteProduct($id);
        if ($result) {
            echo "Xóa thành công!";
        } else {
            echo "Xóa Thất bại!";
        }
    }
}
