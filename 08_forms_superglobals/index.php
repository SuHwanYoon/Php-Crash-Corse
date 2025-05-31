<?php
// superglobals 는 PHP에서 전역적으로 사용할 수 있는 변수들입니다.
// 이 변수들은 어디서든 접근할 수 있으며, PHP 스크립트의 실행 환경에 대한 정보를 제공합니다.
// superglobals는 PHP에서 미리 정의된 전역 변수들로,
// 주로 폼 데이터 처리, 세션 관리, 쿠키 처리 등에 사용됩니다.
// superglobals의 예시로는 $_GET, $_POST, $_REQUEST, $_SERVER, $_SESSION, $_COOKIE, $_FILES 등이 있습니다.
// $_SERVER: 서버와 실행 환경에 대한 정보를 담고 있는 배열입니다.
// 이 배열은 PHP 스크립트가 실행되는 서버의 환경 정보를 제공합니다.
// 예를 들어, 요청된 URL, 서버의 IP 주소, 요청 메소드(GET, POST 등), 사용자 에이전트 정보 등을 포함합니다.
// echo "<h1>SERVER</h1>";
// echo "<pre>";
// var_dump($_SERVER);
// echo "<pre>";

// // $_GET: URL 쿼리 문자열로 전달된 데이터를 가져옵니다.
// echo "<h1>GET Method</h1>";
// var_dump($_GET);
// echo "<pre>";
// // $_POST: HTML 폼에서 POST 방식으로 전송된 데이터를 가져옵니다.
// echo "<h1>POST Method</h1>";
// var_dump($_POST);
// echo "</pre>";

//  Post 방식으로 전송된 데이터를 처리하기 위해서는
// HTML 폼에서 method 속성을 "post"로 설정해야 합니다.
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // POST 방식으로 전송된 데이터를 처리하는 로직
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     $phone = htmlspecialchars($_POST['phone']);

//     // 데이터베이스에 저장하거나 다른 처리를 할 수 있습니다.
//     echo "<h2>Received Data:</h2>";
//     echo "Name: $name<br>";
//     echo "Email: $email<br>";
//     echo "Phone: $phone<br>";
// }

// 아래의 코드는 HTML 폼을 사용하여 사용자로부터 데이터를 입력받고,
// POST 방식으로 전송된 데이터를 처리하는 예시입니다.
// HTML 폼에서 입력받은 데이터를 처리하기 위해서는
// $_POST 슈퍼글로벌 변수를 사용합니다.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 문자열 sanitize를 위해 htmlspecialchars 사용
    // htmlspecialchars 함수는 HTML 특수 문자를 변환하여 XSS 공격을 방지합니다.
    // 사용자가 공백을 입력할것을 대비하여 trim 함수를 사용하여 앞뒤 공백을 제거합니다.
    // ??는 null 병합 연산자로, $_POST["name"]필드에 입력값이 null이면 빈 문자열을 입력.
    // FILTER_VALIDATE_EMAIL는 이메일 형식을 검증하는 필터입니다.
    // FILTER_SANITIZE_NUMBER_INT는 입력데이터에서 문자를 지우고 숫자만 남기는 필터입니다.
    $name = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    // var_dump로 입력값을 확인
    var_dump($name, $email, $phone);
    // 입력값이 비어있지 않은지 확인
    if (!empty($name) && $email && $phone) {
        echo "<h2>Received Data:</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Phone: $phone<br>";
    } else {
        echo "<h2>Error: Please fill in all fields.</h2>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form page</title>
</head>

<body>
    <!-- // forms -->
    <form action="" method="post">
        <!-- // label 태그의 for 속성은 input 태그의 id와 연결되어 있습니다.
        // for 속성이 지정된 label을 클릭하면 해당 input 필드가 활성화됩니다.
        // for 속성이 없으면 label을 클릭해도 input 필드가 활성화되지 않습니다. -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
        <br>
        <!-- input type을 tel로 하면 모바일환경에서 숫자 키패드가 나와서 입력하기 더좋음 -->
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" >
        <br>

        <button type="submit">Add Contract</button>
    </form>
</body>

</html>