<?php
    $con = array("Cả"=>"Tùng","Ba"=>"Hoà","Tư"=>"Lan","Út"=>"Minh");
    echo "<b> Anh cả </b>: ".$con["Cả"]."<br/>";
    echo "<b> Em út </b>: ".$con["Út"]."<br/>";
    foreach ($con as $key=>$value){
        echo "Con".$key."là: " .$value;
        echo "<br/>";
    }
?>