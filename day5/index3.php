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
$t = new Test();
echo "<br>" . $t->a;
//truy cập vào thuộc tính có giới hạn truy cập là protected
//Cannot access protected property
echo "<br>" .$t->b;