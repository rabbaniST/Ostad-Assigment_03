<?php

$grades = [85, 92, 78, 88, 95];
function sortDescending($arr)
{
    rsort($arr);
    return $arr;
}

$sortResult = sortDescending($grades);
print_r($sortResult);