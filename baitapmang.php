<?php
    $a = array("Nam","Bình","Xuân");
    foreach($a as $key=>$value)
    echo "a[$key]=$value <br/>";

    echo "-------------<br/>";
    $b = array("1555","288883","10","5");
    $sum =0;
    foreach($b as $key=>$value){
    $sum += $value;
    echo "b[$key]=$value <br/>";
    }
    echo "Tổng: $sum";
?>
