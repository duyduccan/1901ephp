<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 04/06/2019
 * Time: 7:59 CH
 */

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
/*
 *  xóa cookie bằng cách đặt thời gian sống cho nó là 1 thời gian đã qua
    time() là thời gian hiện tại
    time() - 3600 là thời gian cách đây 1 giờ
    session sẽ tự chết*/
$time = time() - 360000;
setcookie("username",$time);
//in ra cookie sau khi xóa
echo "<br>sau khi xóa";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";