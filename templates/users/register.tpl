{include file='common/header.tpl'}

<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/register.php" method="post">
    <input type="text" name="realname" value="" placeholder="Name">
    <input type="text" name="username" value="" placeholder="Username">
    <input type="password" name="password" value="" placeholder="Password">
    <input type="submit" value="Register">
  </form>

</section>

{include file='common/footer.tpl'}
