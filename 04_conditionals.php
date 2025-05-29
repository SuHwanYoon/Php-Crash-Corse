<?php

// if-else + comparison operators
// http://php.net/manual/en/control-structures.if.php
// ==
// ===
// != or <>
// !==
$john_age = 20;
$mary_age = 18;
echo "john age: $john_age<br>";
echo "mary age: $mary_age<br>";


if ($john_age > $mary_age) {
    echo "John is older than Mary.<br>";
} elseif ($john_age < $mary_age) {
    echo "Mary is older than John.<br>";
} else {
    echo "John and Mary are the same age.<br>";
}
echo "<pre>";



// logical operators
// http://php.net/manual/en/language.operators.logical.php
// and, or, xor, &&, ||, !
$john_height = 180; // cm
$mary_height = 170; // cm
echo "John's height: $john_height cm<br>";
echo "Mary's height: $mary_height cm<br>";

if ($john_height > 175 && $mary_height > 175) {
    echo "Both John and Mary are taller than 175 cm.<br>";
} elseif ($john_height > 175 || $mary_height > 175) {
    echo "At least one of them is taller than 175 cm.<br>";
} else {
    echo "Neither John nor Mary is taller than 175 cm.<br>";
}

echo "<pre>";

// switch statement
// switch 에서 return 문은 switch 문을 종료하고, 해당 값을 반환합니다.
// http://php.net/manual/en/control-structures.switch.php
$day = "Monday";
echo "Today is: $day<br>";
echo day($day);
function day($day) {
    switch ($day) {
        case "Monday":
            return "It's the start of the week!<br>";
        case "Tuesday":
            return "It's Tuesday!<br>";
        case "Wednesday":
            return "It's hump day!<br>";
        case "Thursday":
            return "Almost the weekend!<br>";
        case "Friday":
            return "It's Friday!<br>";
        case "Saturday":
            return "It's the weekend!<br>";
        case "Sunday":
            return "Rest day!<br>";
        default:
            return "Not a valid day.<br>";
    }
}

echo "<pre>";
// switch break
// switch 에서 break 문은 각 case 블록의 실행을 중단하고 switch 문을 종료합니다.
// 만약 break 문이 없으면, 다음 case 블록이 실행됩니다.
// 이는 PHP에서 switch 문이 fall-through 동작을 하기 때문입니다.
// fall-through 동작은 switch 문에서 특정 case가 실행된 후, 다음 case로 넘어가는 것을 의미합니다.
// http://php.net/manual/en/control-structures.switch.php#control-structures.switch.break
$score = 85;
$score2 = 75;
$score3 = 65;
echo "Score: $score<br>";
echo "Score2: $score2<br>";
echo "Score3: $score3<br>";
echo calculateGrade([$score, $score2, $score3]) . "<br>";
function calculateGrade($scores) {
    $total = 0;
    switch(count($scores)) {
        case 3:
            $total += $scores[2];
            break;
        case 2:
            $total += $scores[1];
            break;
        case 1:
            $total += $scores[0];
            break;
        default:
            echo "점수가 없습니다";
            break;
    }
    return $total;
}

echo "<pre>";
echo totalCalculateGrade([$score, $score2, $score3]) . "<br>";
// totalCalculateGrade 함수는 배열에 있는 모든 점수를 합산하여 반환합니다.
// 이 함수는 점수의 개수에 상관없이 작동하며, 배열이 비어있을 경우 0을 반환합니다.
function totalCalculateGrade($scores) {
    $total = 0;
    foreach($scores as $score) {
        $total += $score;
    }
    // implode 함수는 배열의 요소를 문자열로 결합합니다.
    return implode(" + ", $scores) . " = " . $total;
}
