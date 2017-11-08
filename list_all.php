<?php
  $conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=siem', 'siem', 'siem');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  $stmt = $conn->prepare('SELECT * FROM tweets JOIN users USING (username) ORDER BY time DESC');
  $stmt->execute();
  $tweets = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Example Twitter</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section id="tweets">

      <header>
        <h2>Tweets</h2>
      </header>

      <?php foreach ($tweets as $tweet) { ?>
      <article class="tweet">
        <header>
          <span class="realname"><?=$tweet['realname']?></span>
          <a href="#" class="username">@<?=$tweet['username']?></a>
          <span class="time"><?=$tweet['time']?></span>
        </header>

        <p><?=$tweet['text']?></p>
      </article>
      <?php } ?>

    </section>
  </body>
</html>
