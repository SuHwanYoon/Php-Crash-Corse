<?php

// Strings in PHP
// http://php.net/manual/en/ref.strings.php

$str = "Hello form PHP!";
echo strtolower($str). "<br>"; // Convert to lowercase
echo strtoupper($str). "<br>"; // Convert to uppercase
echo str_replace("PHP", "World", $str). "<br>"; // Replace substring
// str_word_count()는 문자열에서 단어의 개수를 세는 함수입니다.
// 단어의 개수를 세는 기준은 공백, 구두점, 줄바꿈 등입니다.
// str_word_count()가 반환하는 갯수의 타입은 정수입니다.
echo str_word_count($str)."<br>";
echo "type of str_word_count: " . gettype(str_word_count($str)) . "<br>";