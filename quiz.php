<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$correctCount = 0;

	$a = $_POST["a"];
	echo "Question 1: What is the first character of this question?" . "<br />";
	echo "&emsp; You Answered: " . $a . "<br />";
	echo "&emsp; Correct Answer: Q" . "<br />" . "<br />";
	if ($a == "Q") {
		$correctCount++;
	}
	
	$b = $_POST["b"];
	echo "Question 2: How many different letters are in \"the alphabet?\"" . "<br />";
	echo "&emsp; You Answered: " . $b . "<br />";
	echo "&emsp; Correct Answer: 7" . "<br />" . "<br />";
	if ($b == "7") {
		$correctCount++;
	}

	$c = $_POST["c"];
	echo "Question 3: What has it got in its pocketses?" . "<br />";
	echo "&emsp; You Answered: " . $c . "<br />";
	echo "&emsp; Correct Answer: A ring" . "<br />" . "<br />";
	if ($c == "A ring") {
		$correctCount++;
	}

	$d = $_POST["d"];
	echo "Question 4: What is my favorite color?" . "<br />";
	echo "&emsp; You Answered: " . $d . "<br />";
	echo "&emsp; Correct Answer: Red" . "<br />" . "<br />";
	if ($d == "Red") {
		$correctCount++;
	}

	$e = $_POST["e"];
	echo "Question 5: What gives life its beauty?" . "<br />";
	echo "&emsp; You Answered: " . $e . "<br />";
	echo "&emsp; Correct Answer: It's precisely because we age and die that our lives have value and nobility" . "<br />" . "<br />";
	if ($e == "It's precisely because we age and die that our lives have value and nobility") {
		$correctCount++;
	}

	$score = $correctCount * 20;
	echo $score . "%" . "<br />" . $correctCount . " out of 5 correct<br />";
?>