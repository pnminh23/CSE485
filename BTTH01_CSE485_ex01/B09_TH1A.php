<?php
    $arrs = ['1','B','C','E'];
    $arrs1 = ['a',0,null,false];
    function lower($arrs){
        $newArrs = array();
        foreach($arrs as $value){
            array_push($newArrs,strtolower($value));
        }
        return $newArrs;
    }
    print_r(lower($arrs));
    echo "<br>";
    print_r(lower($arrs1));