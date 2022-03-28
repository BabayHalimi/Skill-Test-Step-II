<?php

	function blueOcean($arr1, $arr2)
	{
		$array = \array_diff($arr1, $arr2);
		print_r($array);
	}

	blueOcean([1,2,3,4,6,10], [1]);
	echo "<br>";
	blueOcean([1,5,5,5,5,3], [5]);

?>