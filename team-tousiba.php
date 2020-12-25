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
$sql = 'SELECT * FROM rugby_table where team like"%東芝%"';
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
        // $output .= "<td>{$record["team"]}</td>";
        // $output .= "<td>{$record["name"]}</td>";
        $output .= "<td><button><img src=\"" . $record['image'] . "\"></button></td>";
        $output .= "</tr>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="team.css">
    <title>sanix</title>
</head>

<body>
    <header>
        <?= $output ?>
    </header>
    <footer>
        <h1><a href="todo_input.php">登録</a></h1>
    </footer>
</body>

</html>