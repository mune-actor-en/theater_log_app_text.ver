<?php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>読書ログの登録</title>
</head>
<body>

  <h1>読書ログ</h1>
  <h2>読書ログの登録</h2>
  <form action="create.php" method="POST">
    <div>
      <label for="title">書籍名</label>
      <input type="text" name="title" id="title">
    </div>
    <div>
      <label for="author">著者名</label>
      <input type="text" name="author" id="author">
    </div>
    <div>
      <label for="">読書状況</label>
      <div>
        <input type="radio" name="status" id="status1" value="未読">
        <label for="status1">未読</label>
      </div>
      <div>
        <input type="radio" name="status" id="status2" value="読んでる">
        <label for="status2">読んでる</label>
      </div>
      <div>
        <input type="radio" name="status" id="status3" value="読了">
        <label for="status3">読了</label>
      </div>
    </div>
    <div>
      <label for="score">評価(5点満点の整数)</label>
      <input type="number" name="score" id="score">
    </div>
    <div>
      <label for="summary">感想</label>
      <textarea type="text" name="summary" id="summary" rows="10"></textarea>
    </div>
    <button type="submit">登録する</button>
  </form>

</body>

</html>