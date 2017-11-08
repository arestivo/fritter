{include file='common/header.tpl'}

<section id="tweets">

  <header>
    <h2>Tweets</h2>
  </header>

  {foreach $tweets as $tweet}
  <article class="tweet">
    <header>
      <span class="realname">{$tweet.realname}</span>
      <a href="{$BASE_URL}pages/tweets/list_user.php?username={$tweet.username}" class="username">@{$tweet.username}</a>
      <span class="time">{$tweet.time}</span>
    </header>

    <p>{$tweet.text}</p>
  </article>
  {/foreach}

</section>

{include file='common/footer.tpl'}
