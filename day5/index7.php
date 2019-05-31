<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 7:50 CH
 */
class Test{
    /*
     * những thuộc tính được khai báo giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * */
    public $a = 5;
    protected $b = 7;
    private $c = 8;

    public function methoda(){
        echo "<br>".__METHOD__;
    }
    protected function methodb(){
        echo "<br>".__METHOD__;
    }
    private function methodc(){
        echo "<br>".__METHOD__;
    }
}
class Test1 extends Test{
    public function truycapphuongthucpubliccha(){
        echo "<br>".__METHOD__. " " .$this->methoda();
    }
    /*
     * chỉ có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
     * từ các class kế thừa từ class cha
     * không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha*/
    public function truycapphuongthucprotectedcha(){
        echo "<br>".__METHOD__. " " .$this->methodb();
    }
    public function truycapphuongthucprivatecha(){
        echo "<br>".__METHOD__. " " .$this->methodc();
    }
}
$t = new Test1();
$t->truycapphuongthucpubliccha();
$t->truycapphuongthucprotectedcha();
$t->truycapphuongthucprivatecha();
/*
 * chỉ có thể truy cập vào các thuộc tính và method protected từ bên trong class kế thừa của nó
 * chỉ có thể truy cập vào các thuộc tính và method private trong chính bản thân class đó
 * phương thức và thuộc tính public thì có thể truy cập ở mọi nơi*/