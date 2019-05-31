<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 14/05/2019
 * Time: 7:49 CH
 */
$i = 100;
for($i = 1; $i <= 10; $i++) {
    echo "<br>" . $i;
}
$i = 100;
while($i <= 10) {
    echo "<br>" . $i;
    $i++;
}
/**
 * do ... while sẽ chạy ít nhất 1 lần ngay cả khi điều kiện chạy vòng lặp là false
 * từ lần thứ 2 trở đi do ... while mới check điều kiện là true thì chạy
 *
 * for và while chỉ chạy khi điều kiện là true
 */
$i = 100;
do {
    echo "<br>" . $i;
    $i++;
}while($i <= 10);