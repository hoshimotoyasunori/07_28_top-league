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
        $output .= "<fieldset><tr><td>{$record["team"]}</td><br><td>{$record["name"]}</td><br><td>{$record["tall"]}cm</td><br><td>{$record["weight"]}kg</td><br><td>{$record["born"]}生まれ</td><br><td>{$record["comefrom"]}出身</td><br><td><img src=\"" . $record['image'] . "\"></td><tr><br></fieldset>";
        // $output .= "<tr>";
        // $output .= "<td><img src=\"" . $record['image'] . "\"></td>";
        // $output .= "</tr>";
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
    <link rel="stylesheet" href="data.css">
    <title>選手名鑑</title>
</head>

<body>

    <header>
        <a href="todo_input.php">登録</a>
    </header>
    <main>
        <?= $output ?>
    </main>
    <!-- </fieldset> -->
    <!-- <div> </div> -->
</body>

</html>