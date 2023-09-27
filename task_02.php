<?php 

$numbers = [1,2,3,4,5,6,7,8,9,10];


function removeEven( $n){
    return $n % 2 !== 0;
}
function removeEvenNum($numbers)
{
    $filterNumber = array_filter($numbers,"removeEven");

    print_r($filterNumber);
}
removeEvenNum($numbers);