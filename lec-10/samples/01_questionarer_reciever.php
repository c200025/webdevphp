<?php
// リクエストを取得
$name = $_REQUEST["name"];
isset($_REQUEST["hobby"]) ? $hobbies = $_REQUEST["hobby"] : $hobbies = [];
isset($_REQUEST["gender"]) ? $gender = $_REQUEST["gender"] : $gender = "";
isset($_REQUEST["area"]) ? $area = $_REQUEST["area"] : $area = "";
$message = $_REQUEST["message"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>アンケート受付確認</title>
</head>
<body>
  <h1>アンケート受付確認</h1>
  <p>以下のように受け付けました。</p>
  <table border="1">
    <tr>
      <th>お名前</th>
      <td><?= $name ?></td>
    </tr>
    <tr>
      <th>ご趣味</th>
      <td>
        <?php foreach ($hobbies as $hobby): ?>
        <?= $hobby ?>、
        <?php endforeach; ?>
      </td>
    </tr>
    <tr>
      <th>性別</th>
      <td><?= $gender ?></td>
    </tr>
    <tr>
      <th>住所</th>
      <td><?= $area ?></td>
    </tr>
    <tr>
      <th>メッセージ</th>
      <td><?= $message ?></td>
    </tr>
  </table>
</body>
</html>
