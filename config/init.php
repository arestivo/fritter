<?php
  session_set_cookie_params(3600, 'PATH');
  session_start();

  $BASE_DIR = 'REPLACE ME';
  $BASE_URL = 'REPLACE ME';

  $conn = new PDO('pgsql:host=HOSTNAME;dbname=USERNAME', 'USERNAME', 'PASSWORD');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);

  if (isset($_SESSION['error_messages'])) {
    $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
    unset($_SESSION['error_messages']);
  }
?>
