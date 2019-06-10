<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 06/06/2019
 * Time: 7:07 CH
 */
class ClassicPhone{
    /*gọi điện*/
    public function callVoice(){
        echo "<br>".__METHOD__;
    }
    /*nhận cuộc gọi*/
    public function receiveVoice(){
        echo "<br>".__METHOD__;
    }
}
/*khai báo trait
trait Ipod*/
trait Ipod{
    public function listenMusic(){
        echo "<br>".__METHOD__;
    }
}
trait Radio{
    public function listenRadio(){
        echo "<br>".__METHOD__;
    }
}
trait Computer{
    public function sendEmail(){
        echo "<br>".__METHOD__;
    }
    public function playGame(){
        echo "<br>".__METHOD__;
    }
    public function wordOffice(){
        echo "<br>".__METHOD__;
    }
}
class Smartphone extends ClassicPhone{
    /*
     * nhúng trait vào trong class
     * để sử dụng đa kế thừa
     * */
    use Ipod, Radio, Computer;
}
//khởi tạo đối tượng smartphone
$samsung = new Smartphone();
$samsung->callVoice();
$samsung->receiveVoice();
$samsung->listenMusic();
$samsung->listenRadio();
$samsung->playGame();
