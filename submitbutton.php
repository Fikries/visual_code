<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date('j/n/Y');
$time = date('ga');
$timeuppercase = strtoupper($time);

$conn = new mysqli("localhost", "fikriainfyp", "mPIDZ.y73lNRg)Ew", "elderainfik");
$insertsql = $conn->prepare("INSERT INTO `pushtime`(`id`, `date`, `time`) VALUES (NULL,?,?)");
$insertsql->bind_param("ss", $date, $timeuppercase);

$insertsql->execute();