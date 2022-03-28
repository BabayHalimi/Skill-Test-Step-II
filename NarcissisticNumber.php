<?php

class MyNumber {

	public 	function digit_length($number) {
		$size = 0;
		while ($number != 0) {
			$number = intval($number/ 10);
			$size++;
		}
		return $size;
	}
	public 	function is_narcissistic($number) {
		$size = $this->digit_length($number);
		$auxiliary = $number;
		$result = 0;
		$digit = 0;
		while ($auxiliary != 0) {
			$digit = $auxiliary % 10;
			$auxiliary =  intval($auxiliary/ 10);
			$result = (pow($digit, $size)) + $result;
		}
		return $result;
	}

	public 	function narcissistic($number) {

		if ($this->is_narcissistic($number) == $number) 
		{
			echo($number ." narcissistic <b>True</b>\n");
		} else {
			echo($number ." narcissistic <b>False</b>\n");
		}
		echo "<br>";
	}
};

function main() {
	$obj = new MyNumber();
	//Test Cases

	$obj->narcissistic(1634);
	// $obj->narcissistic(12);
	// $obj->narcissistic(345);
	// $obj->narcissistic(371);
}
main();


?>