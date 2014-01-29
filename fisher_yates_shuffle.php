<?php

//Fisher-Yates Shuffle Modern Algorithm

//Use the Normal function
$array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I');
print_r($array);
$array = fisher_yates_shuffle($array);
echo "<br />";
print_r($array);


echo "<br /><br />";


//Use the Recursive function
$array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I');
print_r($array);
$array = fisher_yates_shuffle_recursive($array, sizeof($array));
echo "<br />";
print_r($array);

//Normal
function fisher_yates_shuffle($array) {
	for ($i = sizeof($array) - 1; $i > 0; $i--) {
		$rand = rand(0, $i - 1);
		if ($rand == $i)
			continue;
		$tmp = $array[$i];
		$array[$i] = $array[$rand];
		$array[$rand] = $tmp;
	}
	return $array;
}


//Recursive
function fisher_yates_shuffle_recursive($array, $arraySize) {
	if ($arraySize == 0) return $array;
	$rand = rand(0, $arraySize - 1);
	if ($rand == $arraySize -1)	return fisher_yates_shuffle_recursive($array, $arraySize - 1);
		
	$tmp = $array[$arraySize-1];
	$array[$arraySize-1] = $array[$rand];
	$array[$rand] = $tmp;
	return fisher_yates_shuffle_recursive($array, $arraySize - 1);
}



