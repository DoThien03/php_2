<?php
class SinhVien
{


    // khai báo thuộc tính tức là biến trong class
    public $tenSV;
    public $maSV;
    public $namSinh;

    //hàm magic function trong class(hàm đặc biệt) hàm khởi tạo
    public function  __construct($tenSV, $maSV, $namSinh)
    {
        // hàm khởi tạo luôn được gọi khi khởi tạo 1 object mới
        // loại 1 ko có tham số truyền vào
        // loại 2 có tham số truyền vào
        $this->tenSV = $tenSV;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
    }


    // tạo ra 1 phương thức set tên để set giá trị cho tên
    public function setTen($tenSV)
    {
        $this->tenSV = $tenSV;
    }


    // tạo ra 1 phương thức set mã để set giá trị cho mã
    public function setMaSv($maSV)
    {
        $this->maSV = $maSV;
    }


    // tạo ra 1 phương thức set năm sinh để set giá trị cho năm sinh
    public function setNamSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }


    // phương thứ tính tuổi
    public function tinhTuoi()
    {
        return date('y') - $this->namSinh;
    }


    // khai báo phương thức tức là khai báo hàm trong class 
    public function hienThiTHongTin()
    {
        echo "tên: " . $this->tenSV . "<br>" . "Mã: " . $this->maSV . "<br>"  . "năm sinh: " . $this->namSinh . "<br>" . $this->tinhTuoi() . "</br>";
    }
}


// khởi tạo đối tượng sinh viên nghĩa là tạo ra 1 sinh viên
$sv1 = new sinhVien('thiên đẹp zai', '2323', '2003');
// $sv1->setTen('Thiên đẹp zai');
// $sv1->setMaSv('123');
// $sv1->setNamSinh('2003');
$sv1->hienThiTHongTin();


$sv2 = new sinhVien('thiên', '3434', '2002');
// $sv2->setTen('a Thiên đẹp zai vãi ò');
// $sv2->setMaSv('1234');
// $sv2->setNamSinh('2002');
$sv2->hienThiTHongTin();
