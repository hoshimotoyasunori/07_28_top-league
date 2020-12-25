<?php
if (isset($_POST["team"])) {
  // セレクトボックスで選択された値を受け取る
  $team = $_POST["team"];

  // 受け取った値を画面に出力
  echo $team;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>選手登録画面</title>
</head>

<body class="body">
  <header>
    <!-- <img class="top-league" src="team/topleague.jpg" alt=""> -->
    <div class="japan">
      <a href="todo_read.php"><img src="team/topleague.jpg" alt=""></a>
    </div>
    <div class="kinyuu">
      <form action="todo_create.php" method="POST" class="registration">
        <fieldset>
          <!-- <legend>選手登録</legend> -->
          <!-- <div>
            チーム: <input type="text" name="team">
          </div> -->
          <div>
            　 T E A M　: 　<select name="team">
              <option value="宗像サニックスブルース">宗像サニックスブルース </option>
              <option value="コベルコスティーラーズ">コベルコスティーラーズ</option>
              <option value="トヨタベルブリッツ">トヨタベルブリッツ</option>
              <option value="パナソニックワイルドナイツ">パナソニックワイルドナイツ</option>
              <option value="サントリーサンゴリアス">サントリーサンゴリアス</option>
              <option value="クボタスピアーズ">クボタスピアーズ</option>
              <option value="ヤマハジュビロ磐田">ヤマハジュビロ磐田</option>
              <option value="NECグリーンロケッツ">NECグリーンロケッツ</option>
              <option value="東芝ブレイブルーパス">東芝ブレイブルーパス</option>
              <option value="RICHOブラックラムズ">RICHOブラックラムズ</option>
              <option value="n-NTTコミュニケーションズ">NTTコミュニケーションズ</option>
              <option value="三菱重工ダイナボアーズ">三菱重工ダイナボアーズ</option>
              <option value="ホンダヒート">ホンダヒート</option>
              <option value="日野レッドドルフィンズ">日野レッドドルフィンズ</option>
              <option value="ドコモレッドスパークす">ドコモレッドスパークす</option>
              <option value="キャノンイーグルス">キャノンイーグルス</option>
            </select>
          </div>
          <div>
            　名　　前　:　 <input type="text" name="name">
          </div>
          <div>
            　　 身　　長　: 　<input type="text" name="tall">cm
          </div>
          <div>
            　　 体　　重　: 　<input type="text" name="weight">kg
          </div>
          <div>
            　誕 生 日　:　 <input type="date" name="born">
          </div>
          <div>
            　出 身 地 　: 　<input type="text" name="comefrom">
          </div>
          <div>
            　写真URL　: 　<input type="url" name="image">
          </div>
          <div>
            　　　　　　<button>登録</button>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="japan">
      <a href="data.php"><img src="team/japan.png" alt=""></a>
    </div>
  </header>
  <main>
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
  </main>
</body>

</html>