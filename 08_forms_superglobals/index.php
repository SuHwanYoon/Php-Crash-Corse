<?php
// 등록된 연락처 목록을 표시하는 페이지입니다.
// 연락처 목록은 JSON 파일에 저장되어 있으며, 이 파일을 읽어와서 표시합니다.
// contacts.json 파일의 경로를 지정합니다.
$contactsJsonFile = 'contacts.json';
$contacts = file_exists($contactsJsonFile)
    ? json_decode(file_get_contents($contactsJsonFile), true) : [];
// contacts.json 파일이 존재하지 않으면 빈 배열로 초기화합니다.
// contacts.json 파일이 존재하면 해당 파일의 내용을 읽어와서 $contacts 배열에 저장합니다.
// 만약 contacts.json 파일이 존재하지 않으면 빈 배열로 초기화합니다.
// contacts 배열은 실제 데이터를 담고 있는 PHP 배열입니다.
// contacts 배열이 비어있지 않으면 연락처 목록을 표시합니다.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacts List</title>
    <style>
        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #d6e9c6;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['message']) && $_GET['message'] === 'successfully_deleted'): ?>
        <div class="success-message">
            Successfully deleted!
        </div>
    <?php endif; ?>

    <a href="create.php">Create new contact Forms</a>
    <h1>Contacts List</h1>
    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <strong>Name:</strong> <?php echo htmlspecialchars($contact['name']); ?><br>
                <strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?><br>
                <strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone']); ?><br>
                <?php if (!empty($contact['image'])): ?>
                    <img src="uploads/<?php echo htmlspecialchars($contact['image']); ?>" alt="Contact Image"
                        style="max-width: 100px; max-height: 100px;">
                    <!-- 단순하게 get method로 id를 참초해서 해당 contact를 삭제하는 delete 구현 -->
                    <a href="delete.php?id=<?php echo $contact['id'] ?>">
                        <button>Delete</button>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>