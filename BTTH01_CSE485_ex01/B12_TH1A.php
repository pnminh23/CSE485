<?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
        ];

        function maxx($arrs){
            $max = reset($arrs);
            foreach($arrs as $key => $value){
                if($max <=$value){
                    $max = $value;
                }
            }
            return $max;
        }
        function minn($arrs){
            $min = reset($arrs);
            foreach($arrs as $key => $value){
                if($min >= $value){
                    $min = $value;
                }
            }
            return $min;
        }

    // lấy phẩn tử đầu tiên
    var_dump(reset($numbers)) ;
    echo "<br>";
    // lấy phần tử cuối cùng
    var_dump(end($numbers));
    echo "<br>";
    echo "Số lớn nhất: ".maxx($numbers)."<br>";
    echo "Số nhỏ nhất: ".minn($numbers)."<br>";
    echo "Tổng các giá trị trong mảng: ".array_sum($numbers)."<br>";
    echo "<br>";
    echo "Sắp xếp theo chiều tăng dần các giá trị<br>";
    asort($numbers);
    var_dump($numbers);
    echo "<br>";
    echo "Sắp xếp theo chiều giảm dần các giá trị<br>";
    arsort($numbers);
    var_dump($numbers);
    echo "<br>";
    echo "Sắp xếp theo chiều tăng dần các key<br>";
    ksort($numbers);
    var_dump($numbers);
    echo "<br>";
    echo "Sắp xếp theo chiều giảm dần các key<br>";
    krsort($numbers);
    var_dump($numbers);


    
