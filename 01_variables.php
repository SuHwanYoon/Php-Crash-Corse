<?php

$name = "John";
$age = 30;
$isFather = true;
$money = 100.50;
$salary = null;

// 변수 출력
// php에서 . 은 문자열을 연결하는 연산자입니다.
// \n은 줄바꿈을 의미하는데 n은 newline의 약자입니다.
echo $name;    

echo "Hello " . $name . "!<br>";
// 문자열 안에 변수를 넣을 때는 중괄호를 사용합니다.
echo "Hello {$name}!<br>";
// ''를 사용했을경우는 변수값으로 출력되지 않습니다.
// echo 'Hello $name!<br>'; // 이 경우는 $name이 출력되지 않습니다.
echo "<pre>";
echo 'Hello {$name}!<br>'; 
echo $age . " years old.<br>";
echo "I have {$money} dollars.<br>";
echo "true is " . $isFather . "<br>"; 
echo "true is $isFather "  . "<br>";
echo "true is {$isFather} "  . "<br>";
echo "Is he a father? " . ($isFather ? 'Yes' : 'No') . "<br>";

// print types of the variables
echo "<pre>";
echo "Type of name: " . gettype($name) . "<br>";
echo "Type of age: " . gettype($age) . "<br>";
echo "Type of isFather: " . gettype($isFather) . "<br>";
echo "Type of money: " . gettype($money) . "<br>";
echo "Type of salary: " . gettype($salary) . "<br>";

// print the whole variable
// print_r()는 변수의 내용을 읽기 쉽게 출력합니다.
echo "<pre>";
print_r($name);
echo "<br>";
// var_dump()는 변수의 타입과 값을 출력합니다.
var_dump($name);

// change the value and print the type
// name 변수의 타입을 String에서 Integer로 변경
echo "<pre>";
$name = 123; 
echo "<br>";
echo "Type of name after change: " . gettype($name) . "<br>";

// Variable cheking functions
// is_string()는 변수가 문자열인지 확인합니다.
// is_int()는 변수가 정수인지 확인합니다.
// is_bool()는 변수가 불리언인지 확인합니다.
// is_float()는 변수가 실수인지 확인합니다.
// is_null()는 변수가 null인지 확인합니다.
// is_string()는 변수가 문자열인지 확인합니다.
echo "<pre>";
echo "Type of current name value" . var_dump(is_string($name)). "<br>"; 
echo "Type of current name value: " . var_export(is_string($name), true) . "<br>";
var_dump(is_int($age)); // true

// check if variable is difined
// isset()는 변수가 정의되어 있는지 확인합니다.
// isset()는 변수가 정의되어 있고 null이 아닌지 확인합니다.
echo "<pre>";
var_dump(isset($name)) . "<br>"; // true
var_dump(isset($age)) . "<br>"; // true
var_dump(isset($isFather)) . "<br>"; // true
var_dump(isset($undifinedValue)) . "<br>"; // flase
var_dump(isset($salary)) . "<br>"; // false, because salary is null

// 순수 php 코드만 포함할경우는 태그를 닫는 태그가 없는것이 좋습니다.
// php와 html을 함께 사용할 때는 태그를 닫음