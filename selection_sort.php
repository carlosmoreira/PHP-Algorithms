<?php
    /*
     * To view how the Algorithm works on the stack : 
     * Uncomment all lines in the selection sort method
     * 
     * 
     */
    function selection_sort($array){
        //echo "<br />Size of Array: ".sizeof($array)." -- ";
        if(sizeof($array) == 0){
            //echo " Returning the stack";
            return $array;
        }     
        $smallest = $array[0];
        $smallestIndex = 0;
        for($i = 0 ; $i < sizeof($array)  ; $i++){
            if($array[$i] < $smallest){
                $smallest = $array[$i] ;
                $smallestIndex = $i ;
            }
        }   
        //echo "  - Smallest Index: ".$smallestIndex." which holds ".$smallest.' - ';
        
        unset($array[$smallestIndex]);
        //print_r($array);
        $array = array_values($array);
        $newA[] = $smallest;
        return $newA = array_merge($newA, selection_sort($array)); 
    }

    
    $array = array(45,100, 10, 25, 15 , 60);
    //Display unsorted array
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    
    echo "<h4>Sorted Array</h4>"; 
    
    //Display sorted array
    echo "<pre>";
    print_r(selection_sort($array));
    echo "</pre>";
    
?>






