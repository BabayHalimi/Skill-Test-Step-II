<?php
	
function ParityOutlier($integers) {
  $odds = [];
  $evens = [];
  foreach ($integers as $item) {
    if ($item % 2) {
    	array_push($odds, $item);
    }
    else {
    	array_push($evens, $item);
    }
  }

  if(count($evens) === 1)
  {
  	$result = $evens[0];
  }
  else if(count($odds) === 1)
  {
  	$result = $odds[0];
  }
  else if(count($evens) == 0 && count($odds) > 0)
  {
  	$result = "false (all odd integer, no outlier)";
  }
  else if(count($evens) > 0 && count($odds) == 0)
  {
  	$result = "false (all event integer, no outlier)";
  }

  return $result;
}

echo ParityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]);
echo "<br>";
echo ParityOutlier([160, 3, 1719, 19, 11, 13, -21]);
echo "<br>";
echo ParityOutlier([11, 13, 15, 19, 9, 13, -21]);
?>