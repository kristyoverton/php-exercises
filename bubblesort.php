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

for ($outercounter = 0; $outercounter < count($numArray)-1; $outercounter++) {
	for ($innerCounter = 0; $innerCounter < count($numArray) - 1 - $outercounter; $innerCounter++) 
	{
		//compare with the next value in array. If the leftmore one is greater, swap.

		if ($numArray[$innerCounter] > $numArray[$innerCounter +1]) 
		{
			$temp = $numArray[$innerCounter];
			$numArray[$innerCounter] = $numArray[$innerCounter+1];
			$numArray[$innerCounter+1] = $temp;
		}
	}
}

$elapsedTime = microtime(true) - $start;
echo "time to sort 10,000 elements: " . $elapsedTime;
//echo "<h1> Sorted Array</h1>";
//var_dump ($numArray);

?>
</body>
</html>