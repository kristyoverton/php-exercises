<html>
<head></head>
<body>
<?php
$numArray = array();

for ($i = 0; $i < 100; $i++) {
	$numArray[] = rand(0,10000);
}

echo "<h1> Initial Array</h1>";
var_dump ($numArray);

$start = microtime(true);

for ($unsorted = 0; $unsorted < count($numArray)/2; $unsorted++) {
	//find the lowest AND HIGHEST numbers still unsorted in the array, 
		$lowest = $numArray[$unsorted];
		$highest = $numArray[$unsorted];
		$lowestIndex = $unsorted;
		$highestIndex = $unsorted;
		$temp = 0;
	for ($j = $unsorted + 1; $j < count($numArray) - $unsorted; $j++)//$unsorted + 1; $j < count($numArray); $j++) 
	{	
		if ($numArray[$j] < $lowest) {
			$lowest = $numArray[$j];
			$lowestIndex = $j;
		}	else if ($numArray[$j] > $highest) {
			$highest = $numArray[$j];
			$highestIndex = $j;
		}

	} //for j
	
	//swaps lowest to beginning of unsorted
	$temp = $numArray[$unsorted];
	$numArray[$unsorted] = $lowest;
	$numArray[$lowestIndex] = $temp;
	
	// if you happened to swap the low for the high, you need to adjust your values for the high.
	if ($highest == $numArray[$lowestIndex])
		{
			$highestIndex = $lowestIndex;
		}
	//swaps highest to end of unsorted
	$temp = $numArray[count($numArray)-$unsorted-1];
	$numArray[count($numArray)-$unsorted-1] = $highest;
	$numArray[$highestIndex] = $temp;
	
}

$elapsedTime = microtime(true) - $start;
echo "time: " . $elapsedTime;
echo "<h1> Sorted Array</h1>";
var_dump ($numArray);

?>
</body>
</html>