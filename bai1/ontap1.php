<?php
//ham
$a = 5; // kiem tra 5 la so chan hay so le
$b = 6;

// ham gom 2 loai
//-co tra ve
//- khum tra ve
function ktraChanLe ($a,$b = 10) { // tất cả những biến trong khe ngoặc đều là tham số
    //trong khe ngoặc có bao nhiêu tham số thì tương đương với bấy nhiêu biến
    // và cách nhau bằng dấu phẩy
    if($a % 2 == 0) {
        echo "Ddaay la aso chan";
    } else {
        echo "day la so le";
    }
}
ktraChanLe ($a);
ktraChanLe ($b);
// viết hàm tính diện tích hình chữ nhật không trả về
// với 2 tham số truyền vào bắt buộc là cd,cr
function dientich($cd,$cr)
{
  echo "dien tich la".($cd * $cr);
}
dientich(3,4);
//hàm có trả về sẽ có return
function dienTichCoTraVe($cd,$cr){
    return $cd * $cr;
}
echo "dien tich hcn la".dienTichCoTraVe(3,4);
// mô phỏng lại hàm pow với 2 tham số truyền vào là a,n

// kết quả trả về sẽ là a^n
?>
