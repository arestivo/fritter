<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/tweets.php');

  $tweets = getTweetsAfter($_GET['id']);

  echo json_encode($tweets);
?>
