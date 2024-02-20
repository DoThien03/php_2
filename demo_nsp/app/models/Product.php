<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = "products";
    // xây dựng hàng truy vẫn để lấy ra danh sách sp

    public function getProduct()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows(); // lấy ra nhiều dòng dữ liệu

    }

    // lấy ra 1 dòng dữ liệu theo id
    public function getDetailProduct($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    //thêm sản phẩm
    public function addProduct($id, $tenSP, $gia)
    {
        $sql = "INSERT INTO $this->table values(?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $tenSP, $gia]);
    }

    // update sản phẩm
    public function updateProduct($name, $price, $id)
    {
        $sql = "UPDATE $this->table SET name = ?, price = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $price, $id]);
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
        
    }
}
