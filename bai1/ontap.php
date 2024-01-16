<?php
//biến có thể thay đổi được
// hằng không thể thay đổi được
$a = 5;
$b = 6.5;
$c ="Fpoly";
$d = false;
$a = 6;
echo $a;
const DIEM = 8;
//DIEM = 9;
// mảng là nơi lưu trữ nhiều giá trị
//mảng tuần tự
$mang = [6,7,8,9];
for($i = 0;$i < count($mang);$i ++) {
    if ($mang[$i] % 2 == 0) {
        echo $mang[$i] . "</br>";
    }
//    echo $mang[1];
//    echo $mang[2];
//    echo $mang[3];

}

//mảng liên hợp là mảng có thể tự set được vị trí theo ý muốn
$manglh = ["a"=>1,"b"=>2,"c"=>3];
//echo $manglh["a"];
//echo $manglh["b"];
//echo $manglh["c"];
//foreach ($manglh as $key=>$value){
//    echo $key."=>".$value."</br>";
$mangColor  = ["red"=>"mau do","blue"=>"mau xanh","pink"=>"mauhong"];
//hien thi key va value cua mangColor ra table
// moi  1 dong se to mau tuong ung voi key cua dong do
//}
?>
<table border="1">
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>
    <?php foreach ($mangColor as $key=>$value) { ?>
    <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php } ?>
</table>
