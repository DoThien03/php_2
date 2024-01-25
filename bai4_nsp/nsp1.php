<?php

namespace nsp1;

class SinhVien
{
    public $ten;
    public $tuoi;

    public function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }

    public function HienThiThongTinSV()
    {
        echo "Tên: " . $this->ten . "Tuổi: " . $this->tuoi . "<br>";
    }
}
