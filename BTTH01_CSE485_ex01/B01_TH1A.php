<?php
    $arrs = [2,5,6,9,2,5,6,12,5];
    $diff = $arrs[0];
    $quo =$arrs[0];
    for ($i = 1;$i<count($arrs);$i++){
        $diff -= $arrs[$i];
        $quo /= $arrs[$i];
    }
    echo "Tổng các phẩn tử = " . implode(" + ",$arrs) . " = " . array_sum($arrs) . "<br>";
    echo "Hiệu các phẩn tử = " . implode(" - ",$arrs) . " = " . $diff . "<br>";
    echo "Tích các phẩn tử = " . implode(" x ",$arrs) . " = " . array_product($arrs) . "<br>";
    echo "Thương các phẩn tử = " . implode(" / ",$arrs) . " = " . round($quo,6) . "<br>";