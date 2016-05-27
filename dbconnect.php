<?php
// DB接続情報
  // ここにDBに登録する処理を記述する
// $dsn='mysql:dbname=LAA0745419-onelinebbs;host=mysql111.phy.lolipop.lan';
// $user='LAA0745419';
// $password='tenpa8891tenpa';
// $dbh=new PDO($dsn,$user,$password);
// $dbh->query('SET NAMES utf8');


$dsn='mysql:dbname=oneline_bbs;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

?>