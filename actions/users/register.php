<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_POST['username'] || !$_POST['realname'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  $realname = strip_tags($_POST['realname']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];

  try {
    createUser($username, $realname, $password);
  } catch (PDOException $e) {

    if (strpos($e->getMessage(), 'users_pkey') !== false)
      $_SESSION['error_messages'][] = 'Duplicate username';
    else $_SESSION['error_messages'][] = 'Error creating user';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }

  header('Location: ' . $BASE_URL);
?>
