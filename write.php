<?php

$worry = $_GET['worry'];
$bookName = $_GET['bookName'];
$reason = $_GET['reason'];

// ファイルに書き込み
$time = date('Y-m-d H:i:s');
//文字作成
$data = $time . "/" . $worry . "/" . $bookName . "/" . $reason . "\n";

file_put_contents('data/data.txt',$data,FILE_APPEND);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/datab.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
