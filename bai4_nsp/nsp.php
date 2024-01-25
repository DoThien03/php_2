<?php
include_once "./nsp1.php";
include_once "./nsp2.php";

use nsp1 as n1; // đổi tên namespace

$sv = new n1\SinhVien("Thiên", 21);
$sv->HienThiThongTinSV();
$sv2 = new nsp2\SinhVien(2003, "Thiên");
$sv2->HienThiThongTinSV();




// namespace là không gian tên
// namespace sẽ giúp chúng ta phân biệt được các class/biến/hàm ở các file khác nhau nếu như chúng trùng  nhau
// namespace luôn luôn đặt ở đầu file php
// namespace không bao giờ được trùng nhau 