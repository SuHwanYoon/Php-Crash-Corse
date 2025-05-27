<?php

// numbers in PHP
// https://www.php.net/manual/en/ref.math.php

$x = 25;
$y = 2;

// plus operator
echo $x + $y . "<br>"; // 27
// minus operator
echo $x - $y . "<br>"; // 23
// multiply operator    
echo $x * $y . "<br>"; // 50
// divide operator
echo $x / $y . "<br>"; // 12.5
// modulo operator
echo $x % $y . "<br>"; // 1
// exponentiation operator
// **는 거듭제곱 연산자입니다.
// 거듭제곱 연산자는 두 숫자를 곱하는 것을 반복합니다.
// 예를 들어, 5 ** 3은 5를 3번 곱한 결과인 125입니다.
// 따라서 625는 25를 2번 거듭제곱한 결과입니다.
echo $x ** $y . "<br>"; // 625
// increment operator
echo ++$x . "<br>"; // 26
// decrement operator
echo --$y . "<br>"; // 1
// abs() function
echo abs(-100) . "<br>"; // 100
// round() function
echo round(3.14159, 2) . "<br>"; // 3.14
// ceil() function
echo ceil(3.14159) . "<br>"; // 4
// floor() function
echo floor(3.14159) . "<br>"; // 3
// max() function
echo max(1, 2, 3, 4, 5) . "<br>"; // 5
// min() function
echo min(1, 2, 3, 4, 5) . "<br>"; // 1
// 2씩 증가 하는 += operator
$x += 2;
// 2씩 감소 하는 -= operator
$y -= 2;
// echo the result
echo "x: $x, y: $y <br>"; // x: 27, y: -1