<?php
  $BASE_DIR = 'REPLACE ME';
  $BASE_URL = 'REPLACE ME';

  $conn = new PDO('pgsql:host=HOSTNAME;dbname=USERNAME', 'USERNAME', 'PASSWORD');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
