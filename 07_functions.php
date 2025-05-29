<?php

// simple function example
echo "Function Examples:<br>";
echo greet("World") . "<br>";
function greet($name) {
    return "Hello, " . $name . "!";
}

//with parameter
echo greetWithParameter("Alice") . "<br>";
function greetWithParameter($name = "Guest") {
    return "Hello, " . $name . "!";
}

// parameter with default value
echo greetWithDefault() . "<br>";
function greetWithDefault($name = "Guest") {
    return "Hello, " . $name . "!";
}

// return from function
echo getGreeting("Bob") . "<br>";
function getGreeting($name) {
    return "Hello, " . $name . "!";
}

// function with multiple parameters
echo greetMultiple("Charlie", "Dave") . "<br>";
function greetMultiple($name1, $name2) {
    return "Hello, " . $name1 . " and " . $name2 . "!";
}

// function with return type
echo greetWithReturnType("Eve") . "<br>";
function greetWithReturnType(string $name): string {
    return "Hello, " . $name . "!";
}


// function with type hinting
echo greetWithTypeHint(["Frank", "Grace"]) . "<br>";
function greetWithTypeHint(array $names): string {
    $greetings = [];
    foreach ($names as $name) {
        $greetings[] = "Hello, " . $name . "!";
    }
    return implode(" ", $greetings);
}

// function with variable number of arguments
echo greetWithVariadic("Hank", "Ivy", "Jack") . "<br>";
function greetWithVariadic(...$names): string {
    $greetings = [];
    foreach ($names as $name) {
        $greetings[] = "Hello, " . $name . "!";
    }
    return implode(" ", $greetings);
}

// function with reference
$number = 5;
echo "Before increment: " . $number . "<br>";
echo "After increment: ";
increment($number);
echo $number . "<br>";
function increment(&$number) {
    $number = (int)$number;
    $number++;
}

// function with return by reference
function &getReference(&$array, $key) {
    return $array[$key];
}

// function with closure
function &getReferenceArray(&$array, $key) {
    return function() use (&$array, $key) {
        return $array[$key];
    };
}


// function with static variable
function staticCounter() {
    static $count = 0;
    $count++;
    return $count;
}

// function with global variable
function globalCounter() {
    global $count;
    $count++;
    return $count;
}

// function with anonymous function
function anonymousFunctionExample() {
    $greet = function($name) {
        return "Hello, " . $name . "!";
    };
    return $greet("Anonymous");
}

// function with callback
function callbackExample($callback, $name) {
    return $callback($name);
}

// function with error handling
function errorHandlingExample($number) {
    if (!is_numeric($number)) {
        throw new InvalidArgumentException("The argument must be a number.");
    }
    return "The number is " . $number;
}

// function with exception handling
function exceptionHandlingExample($number) {
    try {
        if (!is_numeric($number)) {
            throw new InvalidArgumentException("The argument must be a number.");
        }
        return "The number is " . $number;
    } catch (InvalidArgumentException $e) {
        return "Error: " . $e->getMessage();
    }
}

// function with recursion
function factorial($number) {
    if ($number < 0) {
        throw new InvalidArgumentException("The number must be non-negative.");
    }
    if ($number === 0 || $number === 1) {
        return 1;
    }
    return $number * factorial($number - 1);
}

// function with array manipulation
function arrayManipulationExample(array $array) {
    // array_map()는 배열의 각 요소에 콜백 함수를 적용하여 새로운 배열을 반환합니다.
    return array_map(function($item) {
        return $item * 2; // 각 요소를 2배로 만듭니다.
    }, $array);
}

// function with string manipulation
function stringManipulationExample($string) {
    // strtoupper()는 문자열을 대문자로 변환합니다.
    return strtoupper($string);
}

// function with date manipulation
function dateManipulationExample($date) {
    // strtotime()는 문자열을 Unix 타임스탬프로 변환합니다.
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        throw new InvalidArgumentException("Invalid date format.");
    }
    // date()는 Unix 타임스탬프를 형식화된 날짜 문자열로 변환합니다.
    return date("Y-m-d H:i:s", $timestamp);
}

