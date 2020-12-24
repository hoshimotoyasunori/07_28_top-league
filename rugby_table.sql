-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 12 月 24 日 14:14
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `rugby_member`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `rugby_table`
--

CREATE TABLE `rugby_table` (
  `id` int(12) NOT NULL,
  `team` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tall` int(12) NOT NULL,
  `weight` int(12) NOT NULL,
  `born` date NOT NULL,
  `comefrom` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `rugby_table`
--

INSERT INTO `rugby_table` (`id`, `team`, `name`, `tall`, `weight`, `born`, `comefrom`, `image`) VALUES
(1, '宗像サニックスブルース', '星本泰憲', 169, 96, '1989-10-24', '大阪', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/295250.jpg'),
(2, 'パナソニックワイルドナイツ', '稲垣啓太', 186, 116, '1990-06-02', '新潟', 'https://i.pinimg.com/originals/b2/38/4f/b2384f21acd5e816f8ef2194ec0c63a5.jpg'),
(5, 'トヨタ自動車ヴェルブリッツ', '木津悠輔', 178, 113, '1995-12-02', '大分', 'http://sports.gazoo.com/verblitz/player/assets_c/2020/03/player_yusuke_kizu-thumb-314x329-11700.jpg'),
(6, '東芝ブレイブルーパス', 'リーチマイケル', 189, 113, '1988-10-07', '東海大学', 'http://www.toshiba.co.jp/sports/images/rugby/member/profile/leitch_m/img_main.jpg'),
(7, '宗像サニックスブルース', 'カーンヘスケス', 178, 98, '1985-08-01', 'オタゴ大学', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/69352.jpg'),
(8, 'サントリーサンゴリアス', '流大', 166, 75, '1992-09-04', '帝京大学', 'https://www.suntory.co.jp/culture-sports/sungoliath/member/img/portrait/nagare.jpg'),
(9, 'サントリーサンゴリアス', '中村亮土', 181, 92, '1991-06-03', '帝京大学', 'https://www.suntory.co.jp/culture-sports/sungoliath/member/img/portrait/nakamura_r.jpg'),
(10, 'サントリーサンゴリアス', 'ボーデンバレット', 186, 92, '1991-05-27', '-', 'https://www.suntory.co.jp/culture-sports/sungoliath/member/img/portrait/beauden.jpg'),
(11, 'トヨタ自動車ヴェルブリッツ', '姫野和樹', 187, 112, '1994-07-27', '帝京大学', 'https://www.jsports.co.jp/img/web/page/rugby/topleague/team/toyota/img01.jpg'),
(12, 'トヨタ自動車ヴェルブリッツ', '茂野海人', 170, 79, '1990-11-21', '大東文化大学', 'http://sports.gazoo.com/verblitz/player/assets_c/2020/03/player_kaito_shigeno-thumb-314x329-11662.jpg'),
(13, 'コベルコスティーラーズ', '山下裕史', 183, 120, '1986-01-01', '京都産業大学', 'https://www.kobelcosteelers.com/member/member_img/hiroshi_yamashita/profile_off.jpg'),
(14, 'コベルコスティーラーズ', '中島イシレリ', 186, 125, '1989-07-09', '流通経済大学', 'https://www.kobelcosteelers.com/member/member_img/isileli_nakajima/profile_off.jpg'),
(15, 'コベルコスティーラーズ', '山中亮平', 188, 100, '1986-06-22', '早稲田大学', 'https://www.kobelcosteelers.com/member/member_img/ryohei_yamanaka/profile_over.gif'),
(16, 'キャノンイーグルス', '田中史明', 166, 73, '1985-01-03', '京都産業大学', 'https://i2.wp.com/prtimes.jp/i/33617/38/resize/d33617-38-368386-2.jpg?w=1360&ssl=1'),
(17, 'キャノンイーグルス', '田村優', 181, 92, '1989-01-09', '明治大学', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/302366.jpg'),
(18, '宗像サニックスブルース', '屋宜ベンジャミン', 175, 80, '1988-03-05', '流通経済大学', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/sanix/20009.jpg'),
(19, '東芝ブレイブルーパス', '德永 祥尭', 185, 100, '1992-04-10', '関西学院大学', 'http://www.toshiba.co.jp/sports/images/rugby/member/profile/tokunaga_y/img_main.jpg'),
(20, '東芝ブレイブルーパス', '三上 正貴', 178, 111, '1988-06-04', '東海大学', 'http://www.toshiba.co.jp/sports/images/rugby/member/profile/mikami_m/img_main.jpg'),
(21, 'necグリーンロケッツ', '瀧澤直', 175, 115, '1986-09-30', '早稲田大学', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/nec/8634.jpg'),
(22, 'necグリーンロケッツ', '川村慎', 172, 102, '1987-08-06', '慶應義塾大学', 'https://rugby-japan.s3-ap-northeast-1.amazonaws.com/res/img/photo/topleague/nec/8305.jpg'),
(23, 'パナソニックワイルドナイツ', '堀江翔太', 180, 104, '1986-01-21', '帝京大学', 'https://panasonic.co.jp/sports/rugby/member/horie_shota/img/bustup.jpg'),
(24, 'パナソニックワイルドナイツ', '松田力也', 181, 90, '1994-05-03', '帝京大学', 'https://panasonic.co.jp/sports/rugby/member/matsuda_rikiya/img/bustup.jpg'),
(25, 'クボタスピアーズ', 'ピーター\"ラピース\"ラブスカフニ', 189, 106, '1989-01-11', 'フリーステート大学', 'https://www.kubota-spears.com/player/detail/images/pieter_lappies_labuschagne/main.jpg'),
(26, 'クボタスピアーズ', '立川理道', 180, 93, '1989-12-02', '天理大学', 'https://www.kubota-spears.com/player/detail/images/tatekawa_harumichi/main.jpg'),
(27, 'NTTコミュニケーションズ', '金 正奎', 177, 95, '1991-10-03', '早稲田大学', 'https://www.ntt.com/rugby/members/Shokei_Kin/images/main.jpg'),
(28, 'NTTコミュニケーションズ', 'アマナキ・レレイ・マフィ', 189, 112, '1990-01-11', '花園大学', 'https://www.ntt.com/rugby/members/Amanaki_lelei_Mafi/images/main.jpg'),
(29, '三菱重工ダイナボアーズ', '成 昂徳', 177, 110, '1983-04-28', '帝京大学', 'https://pbs.twimg.com/profile_images/1264328888835964928/eUyFPisg_400x400.jpg'),
(30, '三菱重工ダイナボアーズ', 'イーリニコラス', 180, 90, '1988-10-14', '拓殖大学', 'https://sports.smt.docomo.ne.jp/rugby/img/topleague/player/294542.jpg'),
(31, '日野自動車レッドドルフィンズ', '木津武士', 183, 114, '1988-07-15', '東海大学', 'https://hino-reddolphins.com/uploads/thumb/player/2020HP/kizu.JPG'),
(32, '日野自動車レッドドルフィンズ', '二リラトゥ', 182, 101, '1982-02-19', 'セイクリッド・ハート高校', 'https://hino-reddolphins.com/uploads/thumb/player/2020HP/nili.JPG'),
(33, 'NTTドコモレッドハリケーンズ', 'ヴィンピー ファンデルヴァルト', 188, 112, '1989-01-06', 'ネルスプロイト高校', 'https://docomo-rugby.jp/common/img/player/profile/46/img_list.png'),
(34, 'NTTドコモレッドハリケーンズ', 'ペレナラ', 184, 90, '1992-01-23', 'マナカレッジ', 'https://docomo-rugby.jp/common/img/player/profile/238/img_list.png'),
(35, 'リコーブラックラムズ', '松橋周平', 180, 99, '1993-11-24', '明治大学', 'https://blackrams.ricoh/images/members/matsuhashi/matsuhashi_2020_list.jpg'),
(36, 'リコーブラックラムズ', 'マット・ルーカス', 172, 77, '1992-01-29', 'Brisbane', 'https://blackrams.ricoh/images/members/matt/matt_2020_prof.jpg'),
(37, 'ホンダヒート', '具智元', 183, 118, '1994-07-20', '拓殖大学', 'http://www.honda-heat.jp/assets/img/players/122.png'),
(38, 'ホンダヒート', '小林亮太', 182, 98, '1991-06-11', '近畿大学', 'http://www.honda-heat.jp/assets/img/players/27.png'),
(39, 'ヤマハ発動機ジュビロ', '山本幸輝', 181, 113, '1990-10-29', '近畿大学', 'https://rugby.yamaha-motor.co.jp/players/players-img/2020_11_06_yamamoto_thum.jpg'),
(40, 'ヤマハ発動機ジュビロ', 'クワッガ・スミス', 181, 91, '1993-06-11', '南アフリカ', 'https://rugby.yamaha-motor.co.jp/players/players-img/2020_11_06_kwagga_thum.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `rugby_table`
--
ALTER TABLE `rugby_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `rugby_table`
--
ALTER TABLE `rugby_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
