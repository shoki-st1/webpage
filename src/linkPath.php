<?php
//リンクのまとめられた変数

//セッションが無ければ開始
// if (!isset($_SESSION)) {
//     session_start();
// }

//ホストネーム
//$http_hostname = '//' . $_SERVER['SERVER_NAME'] . ':8080/';

//cssのパス
$web_css = '/css/freamstyle.css';
//ハンバーガーメニューのパス<js>
$humscript_path = '/JScode/humscript.js';


//ホームのパス
$web_home_path = '/index.php';

//ゲームページ
$web_page1_path = '/linkPage/gamepage.php';
//ゲームページのゲームパス<js>
/*タイピングとモグラたたきのゲームで出てくるモグラにabcなどの記号
を持たせてタイピングも出来るゲーム*/
$game_path = '/JScode/MoleBreakbgame.js';
