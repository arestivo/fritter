<?php
  include ('../../config/init.php');
  include ($BASE_DIR . 'database/tweets.php');

  if (!$_GET['username']) {
    $_SESSION['error_messages'][] = 'Undefined username';
    header("Location: $BASE_URL");
    exit;
  }

  $username = $_GET['username'];

  $tweets = getUserTweets($username);

  $smarty->assign('tweets', $tweets);
  $smarty->display('tweets/list.tpl');
?>
