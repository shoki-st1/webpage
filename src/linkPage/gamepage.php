<?php
//タブの名前とバーの名前
$pageTitle = "ミニゲーム";
$barname = "MoBreak";
//ヘッダーの読み込み
require_once __DIR__ . '/../header.php';
?>

<!--ゲームのJS-->
<script src="<?= $game_path ?>"></script>


<?php
require_once __DIR__ . '/../footer.php';
?>