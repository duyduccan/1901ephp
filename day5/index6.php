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
    /*
     * chỉ có thể truy cập vào các phương thức hay các thuộc tính
     * có giới hạn truy cập private trong chính bản thân class đó*/
    public function getC(){
        echo "<br>".__METHOD__." " .$this->c;
    }
}
$t = new Test();
$t->getC();
