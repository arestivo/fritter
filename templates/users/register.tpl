{include file='common/header.tpl'}

<section id="register">
  <h2>Register</h2>

  <form action="{$BASE_URL}actions/users/register.php" method="post">
    <input type="text" name="realname" value="{if isset($FORM_VALUES)}{$FORM_VALUES.realname}{/if}" placeholder="Name">
    <input type="text" name="username" value="{if isset($FORM_VALUES)}{$FORM_VALUES.username}{/if}" placeholder="Username">
    <input type="password" name="password" value="" placeholder="Password">
    <label><input type="submit" value="Register"></label>
  </form>

</section>

{include file='common/footer.tpl'}
