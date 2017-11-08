<?php
  include ('../../config/init.php');
  include ($BASE_DIR . 'database/tweets.php');

  $tweets = getAllTweets();

  $smarty->assign('tweets', $tweets);
  $smarty->display('tweets/list.tpl');
?>
