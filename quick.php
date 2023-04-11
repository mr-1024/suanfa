<?php

$arr = [2, 7, 0, 9, 1, 4, 8, 6];

// 递归快速排序-从小到大
function quick($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }
    
    $left = $right = [];
    $middle = $arr[0];
    for ($i = 1, $size = count($arr); $i < $size; $i++) {
        if ($arr[$i] >= $middle) {
            $right[] = $arr[$i];
        } else {
            $left[] = $arr[$i];
        }
    }

    $left = quick($left);
    $right = quick($right);
    return array_merge($left, [$middle], $right);
}

var_export(quick($arr));

