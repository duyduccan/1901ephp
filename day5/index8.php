<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 8:54 CH
 */
class Hinhtron{
    public static $r;
    public static function datBankinh($r){
        /*
         * khi mà truy cập vào thuộc tính hay phương thức không có từ khóa static
         * thì ta dùng $this->tenthuoctinh và $this->tenphuongthuc
         * khi mà truy cập vào thuộc tính hay phương thức có từ khóa static
         * thì dùng từ khóa self thay cho $this
         * và sẽ viết là self::tenphuongthuc() và self::tenthuoctinh;
         * */
        self::$r = $r;
        return self::$r;
    }
    //$r là bán kính hình tròn
    public static function tinhchuvi($r){
        $cv = $r*2*3.14;
        return $cv;
    }
    public static function tinhdientich($r){
        $s = $r*$r*3.14;
        return $s;
    }
}
/*
 * khi khởi tạo đối tượng thông thường
 * $doituong = new TenClass();
 * gọi đến thuộc tính hay phương thức của class
 * thì sẽ phải gọi qua đối tượng
 * $doituong->tenthuoctinh;
 * $doituong->tenphuongthuc();*/

/*Khi class có các thuộc tính hay phương thức có từ khóa static
thì không cần khởi tạo đối tượng bằng từ khóa new
gọi đến thuộc tính static bằng cách
TenClass::TenThuocTinh;
gọi đến phương thức static bằng cách
TenClass::TenPhuongThuc();
 * */
$bankinh = Hinhtron::datBankinh(5);
echo "<br> ban kinh: " .$bankinh;

$chuvi = Hinhtron::tinhchuvi(5);
echo "<br> chu vi: " .$chuvi;

$dientich = Hinhtron::tinhdientich(5);
echo "<br> dien tich: " .$dientich;
