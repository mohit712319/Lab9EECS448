<?php
function percentage($x, $y)
{ $z =(+$x/+$y)*100;
  return $z; }
//access the global array called $_POST to get the values from the text fields 
$answer1 = $_POST["q1answers"];
$answer2=$_POST["q2answers"];
$answer3=$_POST["q3answers"];
$answer4=$_POST["q4answers"];
$answer5=$_POST["q5answers"];
$totalcorrect=0;
if($answer1=="Lisbon")
{
        $totalcorrect++;
}
if($answer2=="Madrid")
{
        $totalcorrect++;
}
if($answer3=="Berlin")
{
        $totalcorrect++;
}
if($answer4=="Buenos Aires")
{
        $totalcorrect++;
}
if($answer5=="Rome")
{
        $totalcorrect++;
}
echo"<div>Question 1: What is the capital of Portugal?</div>";
echo"<div>You answered: " .$answer1 ."</div>";
echo"<div>Correct answer: Lisbon </div>";
echo"<div>Question 2: What is the capital of Spain?</div>";
echo"<div>You answered: " .$answer2 ."</div>";
echo"<div>Correct answer: Madrid </div>";
echo"<div>Question 3: What is the capital of Germany?</div>";
echo"<div>You answered: " .$answer3 ."</div>";
echo"<div>Correct answer: Berlin </div>";
echo"<div>Question 4: What is the capital of Argentina?</div>";
echo"<div>You answered: " .$answer4 ."</div>";
echo"<div>Correct answer: Buenos Aires </div>";
echo"<div>Question 5: What is the capital of Italy?</div>";
echo"<div>You answered: " .$answer5 ."</div>";
echo"<div>Correct answer: Rome </div>";
echo "<div id='results'>$totalcorrect / 5 correct</div>";
echo "<div> Percent Correct: " .percentage($totalcorrect,5). "</div>";
?>
