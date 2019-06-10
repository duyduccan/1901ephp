<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 06/06/2019
 * Time: 8:06 CH
 */
$city = "ha noi";
$country = "viet nam";
$go = function($vehicle) use ($city,$country){
    echo "<br> Go travel city ".$city. " country ".$country." by ".$vehicle;
};