<?php
require_once "db.php";
function getListProduct()
{
    $sql = "select * from productS";
    return getData($sql);
}

//
function deleteProduct($id)
{
    $sql = "DELETE FROM products where  id = $id";
    getData($sql, false); // câu lệnh thêm sửa xóa thì chỉ cần truyền
    // false vào là được
}
