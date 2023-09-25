<?php
    $arrs = ["programming","php","basic","dev","is","program is PHP"];
    $max = "";
    $min = $arrs[0];
    // tìm max
    foreach($arrs as $value){
        if(strlen($max)<=strlen($value)){
            $max = $value;
        }
        if(strlen($min)>=strlen(($value))){
            $min = $value;
        }
    }
    echo "Chuỗi nhỏ nhất là ".$min.", độ dài = ".strlen($min)."<br>";
    echo "Chuỗi lớn nhất là ".$max.", độ dài = ".strlen($max)."<br>";
