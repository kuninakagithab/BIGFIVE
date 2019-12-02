<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/style.css">
  <title>BIGFIVE</title>
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
    <h1>自分の性格がたった１０の質問でわかる!?</h1>
    <img class="topimg" src="img/topimg.jpg" alt="notfound">

    <div class="flex">
      <main>
        <h1>ショートビッグファイブテスト</h1>
        <p>皆さんはショートビッグファイブテストをご存じですか？？</p>
        <p>ショートファイブテストとは、たった１０個の質問で,</p>
        <p>自分の性格がわかってしまうという驚きの心理テストです。</p>
        <p>人間の性格を5つの要素に分けその各要素の数値によって、</p>
        <p>性格を見抜いてしまう方法です。その5つの要素とは、</p>
        <p><span class="red">協調性 </span>,<span class="orange">外向性 </span>,<span class="yellow">開放性 </span>,<span class="green">誠実性 </span>,<span class="blue">神経症的傾向</span>の5つです</p>

        <h1>各要素の概要</h1>
        <p class="element">協調性：新しいものに対する興味や好奇心</p>
        <p class="element">外向性：物事をコツコツと真面目に続ける力</p>
        <p class="element">開放性：初対面の人とどれぐらい社交的に接することができるか</p>
        <p class="element">誠実性：周りに合わせる力</p>
        <p class="element">神経症的傾向：不安や緊張をどれくらいしやすいか</p>
        <h1>テストの始め方</h1>
        <p>右の入力フォームにニックネームとemailアドレスを入力して始めるボタンをクリック！！</p>
        <p>各質問に答えるだけで各要素の点数とあなたの性格が表示されます。</p>
      </main>
        <form action="check.php" method="POST">
          <div class="formbox">
            <h2>入力フォーム</h2>
            <p class="nyuuryoku red">ニックネームが入力されていません</p>
            <input type="text" name="nickname">
            <p class="nyuuryoku red">emailアドレスが入力されていません</p>
            <input type="text" name="email"><br>
            <input class="button" type="submit" value="診断を始める！！">
          </div>
        </form>
    </div>
  </div>
  <footer>

  </footer>
</body>

</html>