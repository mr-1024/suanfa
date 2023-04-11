<?php

$arr = [2, 7, 0, 9, 1, 4, 8, 6];
// 插入排序-把大的值往后放
for ($i = 1, $size = count($arr); $i < $size; $i++) {
    $tmp = $arr[$i];
    echo json_encode($arr).PHP_EOL;
    for ($j = $i-1; $j >= 0; $j--) {
        echo $tmp . '_' . $arr[$j] . PHP_EOL;
        if ($tmp > $arr[$j]) {
            break;
        }
        
        $arr[$j+1] = $arr[$j];
        $arr[$j] = $tmp;
    }
}

var_export($arr);