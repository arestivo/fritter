{include file='common/header.tpl'}

<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/register.php" method="post">
    <label>Name: <input type="text" name="realname" value=""></label><br>
    <label>Username: <input type="text" name="username" value=""></label><br>
    <label>Password: <input type="password" name="password" value=""></label><br>
    <input type="submit" value="Register">
  </form>

</section>

{include file='common/footer.tpl'}
