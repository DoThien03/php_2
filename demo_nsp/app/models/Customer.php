<?php

namespace App\Models;

class Customer extends BaseModel
{
    protected $table = "customers";
    // xây dựng hàng truy vẫn để lấy ra danh sách sp

    public function getCustomers()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows(); // lấy ra nhiều dòng dữ liệu

    }

    // lấy ra 1 dòng dữ liệu theo id
    public function getDetailCustomers($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    //thêm sản phẩm
    public function addCustomers($id, $ten, $tuoi)
    {
        $sql = "INSERT INTO $this->table values(?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $ten, $tuoi]);
    }

    // update sản phẩm
    public function updateCustomers($ten, $tuoi, $id)
    {
        $sql = "UPDATE $this->table SET name = ?, age = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$ten, $tuoi, $id]);
    }
    public function deleteCustomers($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
