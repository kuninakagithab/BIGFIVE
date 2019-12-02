<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/check.css">
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
  <main>
    <p class="red">チェックボタンが移動されていません</p>
    <h1>問題の答えかた</h1>
      <p>次の質問に直感で当てはまる番号にチェックを入れて</p>
      <p>一番したの結果を見るボタンをクリック</p>
    <form action="answer.php" method="POST">
      <div class="checkbox">
        <h2>1. 初対面の人に会うのが好きで、<br>初対面でも相手との会話を楽しむことができる</h2>
        <p><input type="radio" name="check1" value="0" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check1" value="1">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check1" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check1" value="3">3.やや当てはまる</p>
        <p><input type="radio" name="check1" value="4">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>2. 他人に思いやりがあり、<br>それを行動に移していてみんなに差別なく親切にできている</h2>
        <p><input type="radio" name="check2" value="0" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check2" value="1">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check2" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check2" value="3">3.やや当てはまる</p>
        <p><input type="radio" name="check2" value="4">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>3. 物事をきっちりこなし、手際よく効率よく行なっている</h2>
        <p><input type="radio" name="check3" value="0" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check3" value="1">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check3" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check3" value="3">3.やや当てはまる</p>
        <p><input type="radio" name="check3" value="4">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>4. いつも心配事が多く、不安になりやすい</h2>
        <p><input type="radio" name="check4" value="0" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check4" value="1">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check4" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check4" value="3">3.やや当てはまる</p>
        <p><input type="radio" name="check4" value="4">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>5. 新しいことを知ることが好きで、<br>クリエイティビティが高く好奇心や探究心が強い</h2>
        <p><input type="radio" name="check5" value="0" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check5" value="1">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check5" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check5" value="3">3.やや当てはまる</p>
        <p><input type="radio" name="check5" value="4">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>6. 恥ずかしがり屋で物静かなタイプ</h2>
        <p><input type="radio" name="check6" value="4" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check6" value="3">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check6" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check6" value="1">3.やや当てはまる</p>
        <p><input type="radio" name="check6" value="0">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>7. 思ったことをすぐに口に出し、他人の感情に流されず冷静な判断をする</h2>
        <p><input type="radio" name="check7" value="4" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check7" value="3">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check7" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check7" value="1">3.やや当てはまる</p>
        <p><input type="radio" name="check7" value="0">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>8. 後先考えずに行動して、ぎりぎりまで物事に手をつけない衝動的な部分がある</h2>
        <p><input type="radio" name="check8" value="4" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check8" value="3">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check8" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check8" value="1">3.やや当てはまる</p>
        <p><input type="radio" name="check8" value="0">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>9. 大抵リラックスして落ち着いている</h2>
        <p><input type="radio" name="check9" value="4" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check9" value="3">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check9" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check9" value="1">3.やや当てはまる</p>
        <p><input type="radio" name="check9" value="0">4.完全に当てはまる</p>
      </div>
      <div class="checkbox">
        <h2>10. 物事を現実的に考え、常識破りなことはしない、<br>わりと保守的な考え方である</h2>
        <p><input type="radio" name="check10" value="4" checked="checked">0.全く当てはまらない</p>
        <p><input type="radio" name="check10" value="3">1.ほとんど当てはまらない</p>
        <p><input type="radio" name="check10" value="2">2.どちらとも言えない</p>
        <p><input type="radio" name="check10" value="1">3.やや当てはまる</p>
        <p><input type="radio" name="check10" value="0">4.完全に当てはまる</p>
      </div>
      <div class="subbtnbox">
        <input class="subbtn" type="submit" value="結果を見る">
      </div>
    </form>
  </main>
</body>

</html>