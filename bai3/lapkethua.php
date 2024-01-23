<?php
class ConNguoi
{
    protected $hoTen;
    protected $diaChi;
    protected $namSinh;
    protected $email;
    protected $sdt;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt)
    {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->namSinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
    }

    public function tinhTuoi()
    {
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin()
    {
        echo "Tên: " . $this->hoTen . "<br>" . "Địa chỉ:  " . $this->diaChi . "<br>" . " Năm Sinh: " . $this->namSinh . "<br>" . "Email:  " . $this->email . "<br>" . " SĐT " . $this->sdt  . "<br>" . "Tuổi: " . $this->tinhTuoi() . "<br>";
    }
}
class HocSinh extends ConNguoi
{
    private $diemToan;
    private $diemLy;
    private $diemHoa;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa)
    {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function DiemTB()
    {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }
    public function hienThiThongTin()
    {
        echo "Tên: " . $this->hoTen . "<br>" . "Địa chỉ:  " . $this->diaChi . "<br>" . " Năm Sinh: " . $this->namSinh . "<br>" . "Email:  " . $this->email . "<br>" . " SĐT "  . $this->sdt . "<br>" . "Điểm TB: " . $this->diemTB() . "<br>";
    }
}

class GiangVien extends ConNguoi
{
    private $luongCB;
    private $soGioDay;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $luongCB, $soGioDay)
    {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt, $luongCB, $soGioDay);
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }

    public function tongLuong()
    {
        return $this->luongCB * $this->soGioDay;
    }
    public function hienThiThongTin()
    {
        echo "TênGV: " . $this->hoTen . "<br>" . "Địa chỉGV:  " . $this->diaChi . "<br>" . " Năm Sinh GV: " . $this->namSinh . "<br>" . "Email GV:  " . $this->email . "<br>" . " SĐT GV "  . $this->sdt . "<br>" . "Tổng Lương: " . $this->tongLuong() . "<br>";
    }
}


$cn = new ConNguoi('Thiên', 'Nam Định', 2003, 'thiendepzai@gmail.com', 7372836);
$cn->hienThiThongTin();

$hs = new HocSinh('Thiên đẹp zai ', 'Nam Định', 2003, 'thiendepzai@gmail.com', 7372836, 7, 8, 9);
$hs->hienThiThongTin();


$gv = new GiangVien('Thiên đẹp zai vãi ò', 'Nam Định', 2003, 'thiendepzai@gmail.com', 7372836, 15, 180);
$gv->hienThiThongTin();
