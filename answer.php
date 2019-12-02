<?php
// ニックネームの取得
$nickname = $_POST['nickname'];
// 変数定義と各チェックボックスのvalue取得
$check1 = $_POST['check1'];
$check2 = $_POST['check2'];
$check3 = $_POST['check3'];
$check4 = $_POST['check4'];
$check5 = $_POST['check5'];
$check6 = $_POST['check6'];
$check7 = $_POST['check7'];
$check8 = $_POST['check8'];
$check9 = $_POST['check9'];
$check10 = $_POST['check10'];
// 全ての合計
$all_check_sum = ($check1 +
  $check2 +
  $check3 +
  $check4 +
  $check5 +
  $check6 +
  $check7 +
  $check8 +
  $check9 +
  $check10);

// 各要素の合計
$cooperativeness = $check1 + $check6;
$extroversion = $check2 + $check7;
$openness = $check3 + $check8;
$sincerity = $check4 + $check9;
$psychotic = $check5 + $check10;
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/answer.css">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="hleft">
      <img src="img/logo.png" alt="notfound">
      <div class="title">
        <span class="logo font1">PSYCHOLOGY</span>
      </div>
    </div>
    <div class="hright">
      <ul>
        <li><a href="">協調性</a></li>
        <li><a href="">外向性</a></li>
        <li><a href="">開放性</a></li>
        <li><a href="">誠実性</a></li>
        <li><a href="">神経症的傾向</a></li>
      </ul>
    </div>
  </header>
  <div class="container">
    <main>
      <section>
        <h2>各要素の点数は ８点満点 です</h2>
        <p><?php echo $nickname; ?></p>
      </section>
      <section>
        <div class="result">
        <h1>協調性:</h1>
        <p>あなたの協調性の点数は８点満点中<span class="point"> <?php echo $cooperativeness; ?> </span>点です</p>
        </div>
        <?php if($cooperativeness <= 4): ?>
        <p class="gap">協調性が低く、衝動性が高いのが特徴。言い方がきつかったりします。</p>
        <p class="gap">他人似合わせることが苦手で、自己中心的になりがちです。</p>
        <?php else: ?>
        <p class="gap">優しくて心が広い、他人に対しても親切で、協力的で素直</p>
        <p class="gap">誰にでも優しく接することができるところが魅力的であったりします。</p>
        <? endif; ?>
      </section>

      <section>
        <div class="result">
        <h1>外向性:</h1>
        <p>あなたの外向性の点数は８点満点中<span class="point"> <?php echo $extroversion; ?> </span>点です</p>
        </div>
        <?php if($extroversion <= 4): ?>
        <p class="gap">外向性が低く、内向的なタイプ。自分から話しかけることが苦手だったりします。</p>
        <p class="gap">他人似合わせることが苦手で、自己中心的になりがちです。</p>
        <?php else: ?>
        <p class="gap">外向性が高く、喋るのが好き、陽気なタイプ、社交的で活動的、積極的</p>
        <p class="gap">誰とでもすぐに仲良くなれて、魅力的であったりします。</p>
        <? endif; ?>
      </section>

      <section>
        <div class="result">
        <h1>開放性:</h1>
        <p>あなたの開放性の点数は８点満点中<span class="point"> <?php echo $openness; ?> </span>点です</p>
        </div>
        <?php if($openness <= 4): ?>
        <p class="gap">開放性が低く、マニュアル的。現実的で、</p>
        <p class="gap">安定感があるが、面白みに欠ける。手順を作るのが好き。権威が好き。</p>
        <?php else: ?>
        <p class="gap">開放性が高く、好奇心が強い。いろんなところで活躍したり、みんなよりも一歩前に行く力がある。想像力があり、古い物事に対して新しい考えが湧く。</p>
        <p class="gap">将来こうなるのではないかと予測できる。アートなどセンスがある。頭の回転が速い。応用力がある。趣味が広い。自立心が高い</p>
        <? endif; ?>
      </section>

      <section>
        <div class="result">
        <h1>誠実性:</h1>
        <p>あなたの誠実性の点数は８点満点中<span class="point"> <?php echo $sincerity; ?> </span>点です</p>
        </div>
        <?php if($sincerity <= 4): ?>
        <p class="gap">誠実性が低く、いい加減で大雑把な性格。</p>
        <p class="gap">他人に流されたり、めんどくさがりになりがち。こだわりがない。ブレブレ。</p>
        <?php else: ?>
        <p class="gap">誠実性が高く、コツコツと計画的に物事をこなす、几帳面で一生懸命働く。こだわりを持っている。</p>
        <p class="gap">将来成功する確率が高い</p>
        <? endif; ?>
      </section>

      <section>
        <div class="result">
        <h1>神経症的傾向:</h1>
        <p>あなたの神経症的傾向の点数は８点満点中<span class="point"> <?php echo $psychotic; ?> </span>点です</p>
        </div>
        <?php if($psychotic <= 4): ?>
        <p class="gap">神経症的傾向が低く、メンタルが強い。不安になりづらい。</p>
        <p class="gap">失敗してもくよくよしない。たちなおりがはやい。常に落ち着いているタイプ。</p>
        <?php else: ?>
        <p class="gap">神経症的傾向が高く、メンタルが弱い。不安になりやすい。未来に関して悲観的。</p>
        <p class="gap">傷付くと、とことん傷付く。気苦労しやすい。鬱になりやすい傾向がある</p>
        <? endif; ?>
      </section>

      <h3>終わりに</h3>
      <p>いかがだったでしょうか。。。</p>
      <p>このテストで出た結果を生かして、自分の生活に生かしてみてください</p>
      <p></p>
    </main>
  </div>

</body>

</html>