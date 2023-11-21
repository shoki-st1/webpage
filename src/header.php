<?php
require_once __DIR__ . '/linkPath.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= $web_css ?>">
</head>

<body>
    <title><?= $pageTitle ?></title>
    <div class="navbar">
        <!--ハンバーガー-->
        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <!--ページ名-->
        <div class="navbar-title">
            <h1><?= $barname ?></h1>
        </div>

        <!-- メニュー -->
        <ul class="menu">
            <li><a href="<?= $web_home_path ?>" class="my-button">ホーム</a></li>
            <li><a href="<?= $web_page1_path ?>" class="my-button">test1ページ</a></li>
            <li><a href="#" class="my-button">その2</a></li>
            <li><a href="#" class="my-button">その3</a></li>
        </ul>
    </div>
    <!-- ボタンを押したときの処理のスクリプト -->
    <script src="<?= $humscript_path ?>"></script>



    <center>