<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB登録画面</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>DB登録画面</legend>
      <a href="todo_read.php">選手名鑑</a>
      <div>
        チーム: <input type="text" name="team">
      </div>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        身長: <input type="text" name="tall">
      </div>
      <div>
        体重: <input type="text" name="weight">
      </div>
      <div>
        誕生日: <input type="date" name="born">
      </div>
      <div>
        出身大学: <input type="text" name="comefrom">
      </div>
      <div>
        写真URL: <input type="url" name="image">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>