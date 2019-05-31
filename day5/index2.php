<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 7:19 CH
 */
class BasePhone{
    public $name;
    public $model;
    public $manufacture;

    public function __construct($name,$model,$manufacture)
    {
        $this->name = $name;
        $this->model = $model;
        $this->manufacture = $manufacture;
    }

    //gửi tin nhắn sms
    public function sendSms($phone){
    echo '<br>'. __METHOD__ ." ". $phone;
    }
    //nhận tin nhắn sms
    public function receiveSms($phone){
        echo '<br>'. __METHOD__ ." ". $phone;
    }
    //gọi điện
    public function callNumber($phone){
        echo '<br>'. __METHOD__ ." ". $phone;
    }
    //nhận cuộc gọi
    public function receiveNumber($phone){
        echo '<br>'. __METHOD__ ." ". $phone;
    }
}

/*
 * class Smartphone kế thừa class BasePhone
 * extends == kế thừa từ class cha
 * khi 1 class kế thừa từ 1 class cha
 * class con sẽ tự động có tất cả các thuộc tính và phương thức public hay protected của class cha
 * class Smartphone*/
class Smartphone extends BasePhone{
    public function __construct($name, $model, $manufacture)
    {
        // gọi đến hàm khởi tạo của class cha
        parent::__construct($name, $model, $manufacture);
    }

    public function sendEmai($address_email){
    echo '<br>' .__METHOD__. " ".$address_email ;
    }
    public function facebook($account){
        echo '<br>' .__METHOD__. " ".$account ;
    }
    public function playGame($game_name){
        echo '<br>' .__METHOD__. " ".$game_name ;
    }
}
$samsungi8 = new Smartphone('samsung i8','i8', 'samsung');
$samsungi8->sendSms('0374444261');
$samsungi8->facebook('havi1234');

echo "<pre>";
print_r($samsungi8);
echo "</pre>";