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
                            ORDER BY time');
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

?>
