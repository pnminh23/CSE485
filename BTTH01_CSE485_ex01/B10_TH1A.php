<?php
    $arrs = ['1','b','c','d'];
    $arrs1 = ['a',0,null,false];
    function upper($arrs){
        $newArrs = array();
        foreach($arrs as $value){
            array_push($newArrs,strtoupper($value));
        }
        return $newArrs;
    }
    print_r(upper($arrs));
    echo "<br>";
    print_r(upper($arrs1));