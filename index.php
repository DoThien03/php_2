<?php
include_once "./demo_nsp/models/Customer.php";
include_once "./demo_nsp/models/Product.php";
include_once "./demo_nsp/controller/ProductController.php";
include_once "./demo_nsp/controller/CustomerController.php";

use Models\Product;
use Models\Customer;
use Controllers\ProductController;
use Controllers\CustomerController;

$productController = new ProductController;
