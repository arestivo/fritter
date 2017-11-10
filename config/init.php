<?php
  session_set_cookie_params(3600, '/~arestivo/fritter/');
  session_start();

  $BASE_DIR = '/home/arestivo/public_html/fritter/';
  $BASE_URL = 'http://localhost/~arestivo/fritter/';

  $conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=siem', 'siem', 'siem');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);

  if (isset($_SESSION['form_values'])) {
    $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
    unset($_SESSION['form_values']);
  }

  if (isset($_SESSION['success_messages'])) {
    $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
    unset($_SESSION['success_messages']);
  }

  if (isset($_SESSION['error_messages'])) {
    $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
    unset($_SESSION['error_messages']);
  }

  if (isset($_SESSION['username'])) {
    $smarty->assign('USERNAME', $_SESSION['username']);
  }
?>
