<?php

$arr = [7, 3, 2, 5, 1, 8, 6];

// 把大的数放到最后
// 第一个和后面的一个数比大小
// 将arr[$i]的值给替换
for ($i = 0, $size = count($arr); $i < $size; $i++) {
    for ($j = 0; $j < $size-1; $j++) {
        echo $arr[$j].'_'.$arr[$j + 1].PHP_EOL;
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
        echo 'for_after:'.json_encode($arr).PHP_EOL;
    }
    echo $i.':'.json_encode($arr).PHP_EOL;
}

// var_export($arr);