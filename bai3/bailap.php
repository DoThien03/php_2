
<?php
// tạo class giangVien gồm
// maGV, tenGV, namSinh, soGioDay, luongF
//xây dựng hàm khởi tạo có tham số truyền vào để set giá trị cho các thuộc tính trên
//xây dựng phương thức tính tuổi có trả về lấy năm hiện tại trừ cho năm sinh
// xây dựng hàm tính lương biết nếu số giờ day > 440h thì lương đc tính như sau: (luongF*440h) + ((soGioDay - 440)/2 * luongF)
// nếu số giờ dạy < 440h thì: luongF * soGioDay // xây dược phương thức hiển thị tất cả các thông tin // khởi tạo hai đối tượng giảng viên để test 



class GiangVien
{
    public $tenGV;
    public $maGV;
    public $namSinh;
    public $soGioDay;
    public $luongF;

    public function __construct($tenGV, $maGV, $namSinh, $soGioDay, $luongF)
    {
        $this->tenGV = $tenGV;
        $this->maGV = $maGV;
        $this->namSinh = $namSinh;
        $this->soGioDay = $soGioDay;
        $this->luongF = $luongF;
    }


    public function tinhLuong()
    {
        if ($this->soGioDay >= 440) {
            return ($this->luongF * 440) + (($this->soGioDay - 440) / 2 * $this->luongF);
        } else {
            return $this->luongF * $this->soGioDay;
        }
    }


    public function tinhTuoi()
    {
        return date('Y') - $this->namSinh;
    }


    public function hienThiThongTin()
    {
        echo "tên: " . $this->tenGV . "<br>" . "Mã: " . $this->maGV . "<br>"  . "năm sinh: " . $this->namSinh . "<br>" . "Số giờ dạy: " . $this->soGioDay . "<br>" . "Lương:" . $this->luongF . "<br>" . "Tuổi: " . $this->tinhTuoi() . "</br>" . "Lương: " . $this->tinhLuong() . "<br>";
    }
}

$GV1 = new GiangVien('Thiên', '333d4', 2003, 441, 10);
$GV1->hienThiThongTin();
$GV2 = new GiangVien('Thắng', '53d45', 2000, 200, 10);
$GV2->hienThiThongTin();
