<?php
// var_dump($_POST);
// exit();
// DB接続情報
$dbn = 'mysql:dbname=rugby_member;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';
// DB接続

if (
  !isset($_POST['team']) || $_POST['team'] == '' ||
  !isset($_POST['name']) || $_POST['name'] == '' ||
  !isset($_POST['tall']) || $_POST['tall'] == '' ||
  !isset($_POST['weight']) || $_POST['weight'] == '' ||
  !isset($_POST['born']) || $_POST['born'] == '' ||
  !isset($_POST['comefrom']) || $_POST['comefrom'] == '' ||
  !isset($_POST['image']) || $_POST['image'] == ''
) {
  exit('ParamError');
}

$team = $_POST['team'];
$name = $_POST['name'];
$tall = $_POST['tall'];
$weight = $_POST['weight'];
$born = $_POST['born'];
$comefrom = $_POST['comefrom'];
$image = $_POST['image'];

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

$sql = 'INSERT INTO rugby_table(id, team, name, tall, weight, born, comefrom, image) VALUES(NULL, :team, :name, :tall, :weight, :born, :comefrom, :image)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':team', $team, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':tall', $tall, PDO::PARAM_STR);
$stmt->bindValue(':weight', $weight, PDO::PARAM_STR);
$stmt->bindValue(':born', $born, PDO::PARAM_STR);
$stmt->bindValue(':comefrom', $comefrom, PDO::PARAM_STR);
$stmt->bindValue(':image', $image, PDO::PARAM_STR);
$status = $stmt->execute(); // SQLを実行

if ($status == false) {
  $error = $stmt->errorInfo(); // データ登録失敗次にエラーを表示 
  exit('sqlError:' . $error[2]);
} else {
  // 登録ページへ移動
  header('Location:todo_input.php');
}
