<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 23/05/2019
 * Time: 6:42 CH
 */
/*khai báo class trong php
class Student*/
class Student{
    //khai báo thuộc tính (properties) của class
    public $name;
    public $age;
    public $location;
    public $point;

    //khai báo các phương thức (method) của class
    /*
     * hàm khởi tạo của class. hàm này sẽ chạy ngay khi khởi tạo đối tượng từ class
     * Student contructor*/

    public function __construct($name_param,$age_param,$location_param)
    {
        /*trong các phương thức của class để gọi đến chính bản thân của class
        thì ta sử dụng từ khóa $this*/
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;

    }
    public function caculatePoint($point_arr_param){
        if(isset($point_arr_param)&&!empty($point_arr_param)){
            $count = 0;
            $total = 0;
            foreach($point_arr_param as $key => $value){
                // $total = $total + $value;
                $total += $value;
                $count++;
            }
            $point = $total/$count;
            $this->point = $point;
        }
        return false;
    }
}
//khởi tạo đối tượng class
$name = "can duy duc";
$age = 22;
$location = "ha noi";
$duc = new Student($name,$age,$location);

echo "<pre>";
print_r($duc);
echo "</pre>";

$point = array(
    'java' => 5,
    '.net' => 3,
    "c++" => 4,
    "c" => 8

);

//gọi đến phương thức của class
$duc->caculatePoint($point);

$cal_point = $duc->point;
echo "diểm trung bình: ". $cal_point;

echo "<pre>";
print_r($duc);
echo "</pre>";