<html>
<head></head>
<body>
<?php
$numArray = array();

for ($i = 0; $i < 10000; $i++) {
	$numArray[] = rand(0,10000);
}

//echo "<h1> Initial Array</h1>";
//var_dump ($numArray);

$start = microtime(true);

for ($unsorted = 0; $unsorted < count($numArray) - 1; $unsorted++) {
	//find the lowest number still unsorted in the array, 
		$lowest = $numArray[$unsorted];
		$lowestIndex = $unsorted;
		$temp = 0;
	for ($j = $unsorted + 1; $j < count($numArray); $j++)//$unsorted + 1; $j < count($numArray); $j++) 
	{	
		if ($numArray[$j] < $lowest) {
			$lowest = $numArray[$j];
			$lowestIndex = $j;
			
		}	//if
	} //for j
	
	$temp = $numArray[$unsorted];
	$numArray[$unsorted] = $lowest;
	$numArray[$lowestIndex] = $temp;
}
$elapsedTime = microtime(true) - $start;
echo "time to sort 10,000 elements: " . $elapsedTime;
//echo "<h1> Sorted Array</h1>";
//var_dump ($numArray);

?>
</body>
</html>