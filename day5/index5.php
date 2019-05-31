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

}
class Test1 extends Test{
    public function truycapthuoctinhpubliccha(){
        echo "<br>".__METHOD__. " " .$this->a;
    }
    /*
     * chỉ có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
     * từ các class kế thừa từ class cha
     * không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha*/
    public function truycapthuoctinhprotectedcha(){
        echo "<br>".__METHOD__. " " .$this->b;
    }
    public function truycapthuoctinhprivatecha(){
        echo "<br>".__METHOD__. " " .$this->c;
    }
}
$t = new Test1();
$t->truycapthuoctinhpubliccha();
$t->truycapthuoctinhprotectedcha();
$t->truycapthuoctinhprivatecha();