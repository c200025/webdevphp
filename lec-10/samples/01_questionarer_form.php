<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>アンケートフォーム</title>
</head>
<body>
  <h1>アンケートフォーム</h1>
  <p>以下の項目を入力して［送信］ボタンをクリックしてください。</p>
  <form action="01_questionare_reciever.php" method="post">
    <table border="1">
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="name" />
        </td>
      </tr>
      <tr>
        <th>ご趣味</th>
        <td>
          <input type="checkbox" name="hobby[]" value="music" />音楽
          <input type="checkbox" name="hobby[]" value="sports" />スポーツ
          <input type="checkbox" name="hobby[]" value="movie" />映画
          <input type="checkbox" name="hobby[]" value="trip" />旅行
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          <input type="radio" name="gender" value="m" />男性
          <input type="radio" name="gender" value="f" />女性
        </td>
      </tr>
      <tr>
        <th>住所</th>
        <td>
          <select name="area">
            <option value="11">埼玉県</option>
            <option value="12">千葉県</option>
            <option value="13">東京都</option>
            <option value="14">神奈川県</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>メッセージ</th>
        <td>
          <textarea name="message" id="" cols="40" rows="3"></textarea>
        </td>
      </tr>
    </table>
    <p><input type="submit" value="送信"></p>
  </form>
</body>
</html>