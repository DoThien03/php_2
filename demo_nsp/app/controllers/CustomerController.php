<?php

namespace App\Controllers;

use App\Models\Customer;

class CustomerController extends BaseController
{

    public $customer;


    public function __construct()
    {
        $this->customer = new Customer();
    }


    public function index()
    {
        // lấy danh sách product
        $customers = $this->customer->getCustomers();
        $this->render('customer.index', compact("customers"));
    }
    public function addCustomer()
    {
        return $this->render('customer.add');
    }
    public function postCustomer()
    {
        if (isset($_POST['btn_add'])) {
            $result = $this->customer->addCustomers(Null, $_POST['name'], $_POST['age']);
            if ($result) {
                echo "Thêm thành công";
            }
        }
        header('location:list-customers');
    }

    public function detailCustomer($id)
    {
        $customers = $this->customer->getDetailCustomers($id);
        return $this->render("customer.edit", compact('customers'));
    }
    public function editCustomer()
    {
        if (isset($_POST['btn_edit'])) {
            $result = $this->customer->updateCustomers($_POST['name'], $_POST['age'], $_POST['id']);
        }
        if ($result) {
            echo "Sửa thành công!";
        } else {
            echo "Sửa Thất bại";
        }
        header('location:list-customers');
    }
    public function deleteCustomer($id)
    {
        $result = $this->customer->deleteCustomers($id);
        if ($result) {
            echo "Xóa thành công!";
        } else {
            echo "Xóa Thất bại!";
        }
    }
}
