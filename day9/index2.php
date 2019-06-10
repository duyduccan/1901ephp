<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 06/06/2019
 * Time: 7:07 CH
 */
class Connguoi{
    public $name;
    public function getInfo(){
        echo "<br>".__METHOD__;
    }
}
/*
 * chỉ có thể kế thừ từ 1 class
 * class NhanVien
 * */
class NhanVien extends Connguoi{

}
//đa kế thừa dùng trait
