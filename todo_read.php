<?php

// DB接続情報
$dbn = 'mysql:dbname=rugby_member;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
//データ参照SQL作成
$sql = 'SELECT * FROM rugby_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //実行を忘れずに


if ($status == false) {
  $error = $stmt->errorInfo(); //失敗時はエラー出力
  exit('sqlError:' . $error[2]);
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
  // var_dump($result);
  // exit();


  $output = "";
  foreach ($result as $record) {
    // $output .= "<tr><td>{$record["team"]}</td><td>{$record["name"]}</td><tr>";
    $output .= "<tr>";
    $output .= "<td>{$record["team"]}</td>";
    $output .= "<td>{$record["name"]}</td>";
    $output .= "<td><img src=\"" . $record['image'] . "\"></td>";
    $output .= "</tr>";
  }
  // $img1 = "";
  // foreach ($result as $record) {
  //   $img1 .= "<tr><img src=\"" . $record['image'] . "\"><tr>";
  //   $output .= "<tr>";
  //   $output .= "<td>{$record["image"]}</td>";
  //   $output .= "</tr>";
  // }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>選手名鑑</title>
</head>

<body>
  <fieldset>
    <legend>選手名鑑</legend>
    <a href="todo_input.php">登録</a>
    <table>
      <thead>
        <tr>
          <td>TEAM</td>
          <td>NAME</td>
        </tr>
        <tr>
          <td>
            <select name="team-select" id="team-select">
              <option value="sanix">宗像サニックスブルース </option>
              <option value="yamaha">ヤマハ発動機ジュビロ</option>
              <option value="tousiba">東芝ブレイブルーパス</option>
            </select>
          </td>
        </tr>

      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
  <div> <?= $img1 ?></div>
</body>

</html>