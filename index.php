<?php

$width  = 30;
$height = 30;

if($width>0 && $height>0){
    $area = $width * $height;
    echo " พื้นที่สี่เหลี่ยม = ".$area." ตารางนิ้ว";
}else{
    echo "กรุณาป้อนตัวเลข ความกว้างและความสูง มากว่า 0 ";
}

?>