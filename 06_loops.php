<?php

// 기본 for loop 구조 의 코드예시
$fruits = ["Apple", "Banana", "Cherry", "Orange"];
// count() 함수는 배열의 요소 개수를 반환합니다.
for ($i = 0; $i < count($fruits); $i++) {
    echo "furuits #" . ($i + 1) . ": " . $fruits[$i] . "<br>";
}
echo "<pre>";

// for Loop
$fruits = ["Apple", "Banana", "Cherry", "Orange"];
echo "Using for loop:<br>";
// as 는 PHP에서 배열을 순회할 때 사용되는 키워드입니다.
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<pre>";

// while Loop
$i = 0;
echo "Using while loop:<br>";
while ($i < count($fruits)) {
    echo $fruits[$i] . "<br>";
    $i++;
}
echo "<pre>";

// foreach Loop
echo "Using foreach loop:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<pre>";