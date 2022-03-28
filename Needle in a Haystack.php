<?php
	function findNeedle($arr, $index)
	{
		for($i=0; $i<count($arr); $i++)
		{
			if($arr[$i] == $index)
			{
				return $arr[$i];
			}
		}
	}
	echo findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");

?>