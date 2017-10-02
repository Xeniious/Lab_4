<?php

$question1 = $_POST["Question 1"];
$question2 = $_POST["Question 2"];
$question3 = $_POST["Question 3"];
$question4 = $_POST["Question 4"];
$question5 = $_POST["Question 5"];

echo "Question 1: What is 4^2?";
echo "You answered: ".$question1."<br>";
echo "Correct answer: 16";

echo "Question 2: What is the estimated mass of the largest known black hole?<br>";
echo "You answered: ".$question2."<br>";
echo "Correct answer: 17 billion suns<br>";

echo "Question 3: What state is Kansas City mostly in?<br>";
echo "You answered: ".$question3."<br>";
echo "Correct answer: Missouri<br>";

echo "Question 4: What year is it?<br>";
echo "You answered: ".$question4."<br>";
echo "Correct answer: 2017<br>";

echo "Question 5: How much would could a woodchuck chuck if a woodchuck could chuck wood?<br>";
echo "You answered: ".$question5."<br>";
echo "Correct answer: 7<br>";

$score = 0;
$score2 = 0;

if($question1 == "16")
	$score += 20;
	$score2 += 1;
if($question1 == "17 billion suns")
	$score += 20;
	$score2 += 1;
if($question1 == "Missouri")
	$score += 20;
	$score2 += 1;
if($question1 == "2017")
	$score += 20;
	$score2 += 1;
if($question1 == "7")
	$score += 20;
	$score2 += 1;

echo "Your score: ".$score2;
echo "Your percent: ".$score."%";

?>
