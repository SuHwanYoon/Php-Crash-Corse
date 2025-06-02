<?php

// index.php 파일에서 표시된 연락처 목록을 삭제하는 기능을 구현합니다.
// contactsJsonFile은 contacts.json 파일의 경로를 나타내는 문자열 변수입니다.
if (isset($_GET['id'])) {
    // GET 방식으로 전달된 id 값을 가져옵니다.
    $id = $_GET['id'];

    // contacts.json 파일의 경로를 지정합니다.
    $contactsJsonFile = 'contacts.json';

    // contacts.json 파일이 존재하는지 확인하고, 존재하면 내용을 읽어옵니다.
    if (file_exists($contactsJsonFile)) {
        $contacts = json_decode(file_get_contents($contactsJsonFile), true);
    } else {
        $contacts = [];
    }

    // 해당 id를 가진 연락처를 찾아서 삭제합니다.
    foreach ($contacts as $key => $contact) {
        if ($contact['id'] == $id) {
            unset($contacts[$key]);
            break;
        }
    }

    // 변경된 연락처 목록을 다시 contacts.json 파일에 저장합니다.
    file_put_contents($contactsJsonFile, json_encode(array_values($contacts)));

    // 성공 메시지와 함께 리다이렉트
    header("Location: index.php?message=successfully_deleted");
    exit;
} else {
    // id가 전달되지 않은 경우, index.php로 리다이렉트합니다.
    header('Location: index.php');
    exit;
}
// 위 코드는 연락처 목록에서 특정 연락처를 삭제하는 기능을 구현합니다.
// 사용자가 삭제 버튼을 클릭하면 해당 연락처의 id가 GET 방식으로 전달되고,
// 이 id를 사용하여 contacts.json 파일에서 해당 연락처를 찾아 삭제합니다.
// 삭제 후에는 index.php로 리다이렉트하여 변경된 연락처 목록을 표시합니다.
// 만약 id가 전달되지 않은 경우에는 index.php로 리다이렉트합니다.
// 이 코드는 연락처 목록에서 특정 연락처를 삭제하는 기능을 구현합니다.
// // 삭제 후 index.php로 리다이렉트합니다.
// header('Location: index.php');
// exit; // 스크립트 실행을 종료합니다.
// // 만약 id가 전달되지 않은 경우에는 index.php로 리다이렉트합니다.
// header('Location: index.php');
// exit; // 스크립트 실행을 종료합니다.