<?php
//リンクのまとめられた変数

//セッションが無ければ開始
if (!isset($_SESSION)) {
    session_start();
}

$http_hostname = '//' . $_SERVER['SERVER_NAME'];
