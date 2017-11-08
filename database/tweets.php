<?php
  function getAllTweets() {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM tweets JOIN users USING (username) ORDER BY time DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>