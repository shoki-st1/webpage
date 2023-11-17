<?php
require_once __DIR__ . '/linkPath.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= $web_css ?>">
    <title>メインページ</title>
</head>

<body>
    <div class="navbar">
        <div class="menu-toggle" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="menu">
            <li><a href="#">ホーム</a></li>
            <li><a href="#">その1</a></li>
            <li><a href="#">その2</a></li>
            <li><a href="#">その3</a></li>
        </ul>
    </div>

    <script src="<?= $humscript_path ?>"></script>


    <hr>