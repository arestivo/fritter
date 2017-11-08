<?php
  include ('../../config/init.php');
  include ($BASE_DIR . 'database/tweets.php');

  $tweets = getAllTweets();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Example Twitter</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
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
