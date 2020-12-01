<?php
function processGame($human,$computer){
    if($human == $computer){
        return "Tie";
    } elseif(($human == 'rock' && $computer == 'scissor') || ($human == 'paper' && $computer == 'rock') || ($human == 'scissor' && $computer == 'paper')){
        return "You Win, Computer Lose";
    } else{
        return "Computer Win, You Lose";
    }
}
$moves = ['rock','paper','scissor'];
$index = rand(0, 2);
$computer = $moves[$index];
$human = $_GET['human'];
$result = array();
$result['computer'] = $computer;
$result['message'] = processGame($human,$computer);
echo json_encode($result);
?>