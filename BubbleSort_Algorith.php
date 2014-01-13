<?php

$array = [10, 3, 5, 7];


//
function bubble_sort($array, $array_size) {
    if($array_size == 0) return $array;
    if ($array == null || sizeof($array) == 0)
        return 0;
    $holder = 0;
    for($i=0; $i<$array_size -1 ; $i++){
        if($array[$i] > $array[$i + 1]){
            $holder = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $holder;
        }
    }
   return bubble_sort($array, $array_size-1);
}
echo "<pre>";
    print_r($array);
        $array = bubble_sort($array, sizeof($array));
    print_r($array);
echo "</pre>";
?>