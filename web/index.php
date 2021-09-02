<?php
require_once(__DIR__ . "/../app/functions.php");

session_start();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>会員制掲示板サイト</h1>
  <?php if (isset($_SESSION['username'])): ?>
    <div>
      <h2>名前</h2>
      <p>自己紹介</p>
      <!-- login -->
    </div>

    <div>
      <h2>投稿する</h2>
      <form action="index.php">
        <input type="hidden" name="post[userName]" value="">
        <input type="hidden" name="post[time]" value="">
        <textarea name="post[text]"></textarea>
        <button>投稿する</button>
      </form>
      <!-- formPost -->
    </div>
  <?php else: ?>
    <div>
      <a href="newMember.php">新規会員登録</a>
      <a href="login.php">ログイン</a>
      <!-- nonLogin -->
    </div>
  <?php endif; ?>


  <div>
    <h2>投稿一覧</h2>
    <section>
      <h3>名前</h3>
      <p>時間</p>
      <p>テキスト</p>
      <p>いいね数</p>
    </section>
    <!-- posts -->
  </div>
</body>
</html>