<!DOCTYPE html>
<html>
<head>
<h1 style="color:rgb(153, 74, 0)" align="center">Answer Sheet</h1><br><hr>
</head>
<body style= "background-color:rgb(243, 222, 202)" >
<?php
$score = 0;
$answer1 = $_POST['ans1'];
$answer2 = $_POST['ans2'];
$answer3 = $_POST['ans3'];
$answer4 = $_POST['ans4'];
$answer5 = $_POST['ans5'];
if ($answer1 == "2") { 
    $score++; 
}
if ($answer2 == "8") { 
    $score++; 
}
if ($answer3 == "64") { 
    $score++; 
}
if ($answer4 == "1") {
     $score++; 
    }
if ($answer5 == "10") { 
    $score++; 
}
$percent = ($score / 5)*100;
echo "<b style='color:rgb(255, 123, 0)' id='results' >Question1: What is 1+1?</b>";
echo "<div id='results'>You answered: $answer1 </div>";
echo "<div id='results'>Correct Answer: 2 </div><br>";
echo "<b style='color:rgb(255, 123, 0)' id='results' >Question 2: What is 3+5?</b>";
echo "<div id='results'>You answered: $answer2 </div>";
echo "<div id='results'>Correct Answer: 8 </div><br>";
echo "<b style='color:rgb(255, 123, 0)' id='results' >Question3: What is 8 x 8?</b>";
echo "<div id='results'>You answered: $answer3 </div>";
echo "<div id='results'>Correct Answer: 64 </div><br>";
echo "<b style='color:rgb(255, 123, 0)' id='results' >Question4: What is 6 / 6?</b>";
echo "<div id='results'>You answered: $answer4 </div>";
echo "<div id='results'>Correct Answer: 1 </div><br>";
echo "<b style='color:rgb(255, 123, 0)' id='results' >Question5: What is 1(1+9)?</b>";
echo "<div id='results'>You answered: $answer5 </div>";
echo "<div id='results'>Correct Answer: 10 </div><br><hr>";
echo "<b style='color:rgb(139, 70, 6)' id='results'>Your score is $score/5</b><br>";
echo "<b style='color:rgb(139, 70, 6)' id='results'>Correct rate $percent%</b>";
?>
</body>
</html>