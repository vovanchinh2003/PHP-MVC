<?php
    $a = array("Nam","Bình","Xuân");
    foreach($a as $key=>$value)
    echo "a[$key]=$value <br/>";

    echo "-------------<br/>";
    $b = array("12","23","10","5");
    $sum =0;
    foreach($b as $key=>$value){
    $sum += $value;
    echo "b[$key]=$value <br/>";
    }
    echo "Tổng: $sum";
?>