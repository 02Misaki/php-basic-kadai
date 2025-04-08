<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題005</title>
</head>
<body>
 <p>
<?php
// 各スコアを個別の変数に代入
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 85;
$score8 = 95;
$score9 = 30;
$score10 = 60;

// 合計点を変数に代入
$totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

// 平均点を計算し、別の変数に代入
$averageScore = $totalScore / 10;

// 平均点を出力
echo $averageScore;
?>
 </p>
</body>
</html>