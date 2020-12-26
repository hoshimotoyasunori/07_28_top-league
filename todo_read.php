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
$sql = 'SELECT * FROM rugby_table order by team asc, tall asc';
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
    $output .= "<td><img src=\"" . $record['image'] . "\"></td>";
    $output .= "</tr>";
  }
}
// $sql1 = 'SELECT * FROM rugby_table';
// $stmt1 = $pdo1->prepare($sql1);
// $status1 = $stmt1->execute(); //実行を忘れずに

// if ($status1 == false) {
//   $error1 = $stmt1->errorInfo(); //失敗時はエラー出力
//   exit('sqlError:' . $error1[2]);
// } else {
//   $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC); //fetchAllで全部取れる
//   // var_dump($result);
//   // exit();

//   $output1 = "";
//   foreach ($result1 as $record1) {
//     // $output .= "<tr><td>{$record["team"]}</td><td>{$record["name"]}</td><tr>";
//     $output1 .= "<tr>";
//     $output1 .= "<td><img src=\"" . $record1['image'] . "\"></td>";
//     $output1 .= "</tr>";
//   }
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="read.css">
  <title>選手名鑑</title>
</head>

<body>
  <!-- <header class="header" style="display: none;">
    <table class="logo">
      <tr class="box">
        <td><button onclick="location.href='team-sanix.php'"><img src="team/sanix.jpeg" alt=""></button></td>
        <td><button onclick="location.href='team-yamaha.php'"><img src="team/yamaha.png" alt=""></button></td>
        <td><button onclick="location.href='team-toyota.php'"><img src="team/toyota.png" alt=""></button></td>
        <td><button onclick="location.href='team-tousiba.php'"><img src="team/tousiba.png" alt=""></button></td>
      </tr>
      <tr class="box">
        <td><button onclick="location.href='team-suntory.php'"><img src="team/suntory.png" alt=""></button></td>
        <td><button onclick="location.href='team-richo.php'"><img src="team/richo.png" alt=""></button></td>
        <td><button onclick="location.href='team-pana.php'"><img src="team/pana.png" alt=""></button></td>
        <td><button onclick="location.href='team-nec.php'"><img src="team/nec.jpeg" alt=""></button></td>
      </tr>
      <tr class="box">
        <td><button onclick="location.href='team-n-com.php'"><img src="team/n-com.png" alt=""></button></td>
        <td><button onclick="location.href='team-kubota.php'"><img src="team/kubota.png" alt=""></button></td>
        <td><button onclick="location.href='team-kobe.php'"><img src="team/kobe.png" alt=""></button></td>
        <td><button onclick="location.href='team-jyuukou.php'"><img src="team/jyuukou.jpeg" alt=""></button></td>
      </tr>
      <tr class="box">
        <td><button onclick="location.href='team-honda.php'"><img src="team/honda.png" alt=""></button></td>
        <td><button onclick="location.href='team-hino.php'"><img src="team/hino.png" alt=""></button></td>
        <td><button onclick="location.href='team-docomo.php'"><img src="team/docomo.png" alt=""></button></td>
        <td><button onclick="location.href='team-canon.php'"><img src="team/canon.png" alt=""></button></td>
      </tr>
    </table>
  </header> -->

  <!-- <img class="top-league" src="team/topleague.jpg" alt=""> -->
  <!-- <fieldset> -->
  <!-- <legend>選手名鑑</legend> -->
  <header>
    <a href="todo_input.php">登録</a>
  </header>
  <main>
    <?= $output ?>
    <?= $output1 ?>
  </main>
  <!-- </fieldset> -->
  <!-- <div> </div> -->
</body>

</html>