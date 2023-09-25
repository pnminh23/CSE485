<?php
    $arrs = ["đỏ","xanh","cam","trắng"];
    
    $colors = [
        "đỏ" => "red",
        "trắng" => "white",
        "cam" => "orange",
        "xanh" => "blue",
    ];
    $str = 'Màu đỏ là màu yêu thích của Anh, trắng là màu yêu thích của sơn,cam là màu yêu thích của thắng, còn màu yêu thích của tôi là màu trắng';
    foreach ($colors as $color => $value){
        $str = str_replace($color,"<span style='color:".$value."'>".$color."</span>",$str);
    }
    echo $str;