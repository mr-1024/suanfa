<?php

// 选择>冒泡
$arr = [9,3, 2, 5, 1, 8, 6];

// 第一个数和后面的每个数比大小将小的数放最前面
for ($i = 0, $size = count($arr); $i < $size; $i++) {
    for ($j = $i + 1; $j < $size; $j++) {
        echo $arr[$i] .'_' .$arr[$j].PHP_EOL;
        if ($arr[$i] > $arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
        echo 'for_after:'.json_encode($arr).PHP_EOL;
    }
     echo $i.':'.json_encode($arr).PHP_EOL;
}

var_export($arr);
