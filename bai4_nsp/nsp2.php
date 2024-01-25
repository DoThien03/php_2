<?php

namespace nsp2;

class SinhVien
{
    public $namSinh;
    public $ten;

    public function __construct($namSinh, $ten)
    {
        $this->namSinh = $namSinh;
        $this->ten = $ten;
    }

    public function HienThiThongTinSV()
    {
        echo "Năm Sinh: " . $this->namSinh . "Tên: " . $this->ten;
    }
}
