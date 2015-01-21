<html>
<head></head>
<body>
<?php
$mainArray = array();

for ($i = 0; $i < 10000; $i++) {
	$mainArray[] = rand(0,10000);
}

//echo "<h1> Initial Array</h1>";
//var_dump ($mainArray);

$start = microtime(true);

// outer loop - once per digit
for ($i = 0; $i < 5; $i++) 
{
	// reinitialize the buckets
	$buckets = array(
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
	);
	

	//put each element into a bucket
	for ($j = 0; $j < count($mainArray); $j++) 
	{
		//add any necessary leading zeroes
		$mainArray[$j] = sprintf('%05d', $mainArray[$j]);

		$digit = substr($mainArray[$j], 4-$i, 1);
		$buckets[$digit][] = $mainArray[$j];
	} // finished one pass - everything is in a bucket

//	var_dump($buckets);

	//reset main array
	$mainArray = array();

	// zip it back together
	foreach ($buckets as $bucket) {
		foreach ($bucket as $drop) {
			$mainArray[] = $drop;
		}
	}
	//var_dump($mainArray);
}


$elapsedTime = microtime(true) - $start;
echo "time to sort 10,000 elements: " . $elapsedTime;
//echo "<h1> Sorted Array</h1>";
//var_dump ($numArray);

?>
</body>
</html>