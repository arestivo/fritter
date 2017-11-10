<?php
  function getAllTweets() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM tweets JOIN
                                 users USING (username)
                            ORDER BY time DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getUserTweets($username) {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM tweets JOIN
                                 users USING(username)
                            WHERE username = ?
                            ORDER BY time DESC');
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function createTweet($username, $tweet) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO tweets
                            VALUES (DEFAULT, CURRENT_TIMESTAMP, ?, ?)");
    $stmt->execute(array($username, $tweet));
  }


?>
