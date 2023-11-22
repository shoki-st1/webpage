<?php
require_once __DIR__ . '/linkPath.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--cssは後の方が優先-->
    <!--マイアイデアcss-->
    <link rel="stylesheet" type="text/css" href="<?= $web_idea_css ?>">
    <!--game用css-->
    <link rel="stylesheet" type="text/css" href="<?= $web_gamepage_css ?>">
    <!--固定のcss(ハンバーガー)-->
    <link rel="stylesheet" type="text/css" href="<?= $web_css ?>">
</head>

<body>
    <!--タブの名前-->
    <title>アイデア's</title>
    <div class="navbar">
        <!--ハンバーガー-->
        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!--ページ名(バーに表示)-->
        <div class="navbar-title">
            <h1><?= $barname ?></h1>
        </div>

        <!-- ログインしているユーザー名の表示 -->
        <!--ログインのメニュー-->



        <!-- メニュー -->
        <ul class="menu">
            <!--他のアカウントの人達が出してくれたアイデアの一覧表示-->
            <li><a href="<?= $web_HOME_path ?>" class="my-button">ホーム</a></li>
            <!--自分の出したアイデアを表示させるページ-->
            <!-- アイデアを出すボタン -->
            <li><a href="<?= $web_MYIDEA_path ?>" class="my-button">マイアイデア</a></li>
            <!--ミニゲームのページ-->
            <li><a href="<?= $web_GAME_path ?>" class="my-button">ミニゲーム</a></li>

            <li><a href="#" class="my-button">その3</a></li>
        </ul>
    </div>
    <!-- ボタンを押したときの処理のスクリプト -->
    <script src="<?= $humscript_path ?>"></script>