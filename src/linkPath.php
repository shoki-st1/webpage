<?php
//リンクのまとめられた変数

//セッションが無ければ開始
if (!isset($_SESSION)) {
    session_start();
    session_destroy();
}

//ホストネーム
//$http_hostname = '//' . $_SERVER['SERVER_NAME'] . ':8080/';

//cssのパス
$web_css = '/css/freamstyle.css';
//ハンバーガーメニューのパス
$humscript_path = '/JScode/humscript.js';
