<?php
require_once('dbconnect.php');

$nickname =$_POST['name1'];
$email =$_POST['name2'];
$cooperativeness = $_POST['name3'];
$extroversion = $_POST['name4'];
$openness = $_POST['name5'];
$sincerity = $_POST['name6'];
$psychotic = $_POST['name7'];

$stmt = $dbh->prepare('INSERT INTO bigfive ( nickname, email, cooperativeness, extroversion, openness, sincerity, psychotic) VALUES (?, ?, ?, ?, ?, ?, ?)');
$stmt->execute([$nickname, $email, $cooperativeness, $extroversion, $openness, $sincerity, $psychotic]);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>ありがとうございました</p>
</body>
</html>