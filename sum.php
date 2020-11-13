<?php

//課題 1
function mul($m){
  $result = $m * 2;
  return $result;
}
echo mul(2)."\n";

//課題 2
function addition($a, $b){
    $result = $a + $b;
    return $result;
}
echo addition(1, 2)."\n";

//課題 3
function mult($arr){
    $result = 1;
        foreach($arr as $a){
        $result *= $a;
    }
        return $result;
    }
 $arr = array(1, 3, 5, 7, 9);
 echo mult($arr)."\n";
 
 //課題 4
 echo max_array([1,3,5,7,4])."\n";
function max_array($array){
  $result = $array[0];
  foreach($array as $num){
    if($result < $num){
      $result = $num;
    }
  }
  return $result;
}
