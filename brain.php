<?php
$human = $_GET['human'];
$result = array();
$result['human'] = $human;

if ($human == "rock") {
    $human = 0;
} elseif ($human == "paper") {
    $human = 1;
} elseif ($human == "scissor") {
    $human = 2;
} else {
}

$computer = rand(0, 2);


if ($human == 0) {
    if ($computer == 0) {
        $result['message'] = "Tie";
    } elseif ($computer == 1) {
        $result['message'] = "Computer Win, You Lose";
    } elseif ($computer == 2) {
        $result['message'] = "You Win, Computer Lose";
    } else {
        $result['message'] = "Error";
    }
} elseif ($human == 1) {
    if ($computer == 0) {
        $result['message'] = "You Win, Computer Lose";
    } elseif ($computer == 1) {
        $result['message'] = "Tie";
    } elseif ($computer == 2) {
        $result['message'] = "Computer Win, You Lose";
    } else {
        $result['message'] = "Error";
    }
} elseif ($human == 2) {
    if ($computer == 0) {
        $result['message'] = "Computer Win, You Lose";
    } elseif ($computer == 1) {
        $result['message'] = "You Win, Computer Lose";
    } elseif ($computer == 2) {
        $result['message'] = "Tie";
    } else {
        $result['message'] = "Error";
    }
} else {
    $result['message'] = "Error";
}


if ($computer == 0) {
    $computer = "rock";
} elseif ($computer == 1) {
    $computer = "paper";
} elseif ($computer == 2) {
    $computer = "scissor";
} else {
}


$result['computer'] = $computer;

echo json_encode($result);
