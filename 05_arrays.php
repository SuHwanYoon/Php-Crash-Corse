<?php

// indexed Array
$fruits = ["Apple", "Banana", "Cherry"];
echo $fruits[0] . "<br>"; // Apple
echo $fruits[1] . "<br>"; // Banana
echo $fruits[2] . "<br>"; // Cherry
$fruits[3] = "Orange"; // Add Orange to the array
echo "<pre>";

var_dump($fruits); // Display the array structure
echo "<pre>";

// Mixed type array

$mixedArray = [1, "Hello", 3.14, true]; // Mixed types: integer, string, float, boolean
// print_r()는 배열의 내용을 읽기 쉽게 출력합니다.
print_r($mixedArray); // Display the mixed type array
echo "<pre>";

echo "mixedArray print"."<br>"; // 1
var_dump($mixedArray); // Display the mixed type array structure
echo "<pre>";

// Associative Array
// Associative arrays는 키-값 쌍으로 데이터를 저장하는 배열입니다.
$person = [
    "name" => "John",
    "age" => 30,
    "isEmployed" => true
];
echo "Name: " . $person["name"] . "<br>"; // John
echo "Age: " . $person["age"] . "<br>"; // 30
echo "Employed: " . ($person["isEmployed"] ? "Yes" : "No") . "<br>"; // Yes
echo "<pre>";
// Display the associative array structure
var_dump($person); // Display the associative array structure
