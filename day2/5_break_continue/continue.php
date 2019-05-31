<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 14/05/2019
 * Time: 7:56 CH
 */
for($i = 1; $i <20; $i++){
    if($i == 10){
        // continue sẽ bỏ qua các lệnh bên dưới continue trong lần lặp đó
        //và chuyển sang lần lặp tiếp theo
        continue;
    }
    echo "<br> ".$i;
}