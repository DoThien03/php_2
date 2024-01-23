<?php
require_once "db.php";

class Product extends db
{
    public  function listProduct()
    {
        $sql = "SELECT * FROM products";
        return $this->getData($sql);
    }
    public  function addProduct($name, $price)
    {
        $sql = "INSERT INTO products (name, price) VALUE ('$name', '$price')";
        return $this->getData($sql, false);
    }

    public function getOneProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function updateProduct($id, $name, $price)
    {
        $sql = "UPDATE products SET name='$name', price='$price' WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products where  id = $id";
        $this->getData($sql, false); // câu lệnh thêm sửa xóa thì chỉ cần truyền
        // false vào là được
    }
}
