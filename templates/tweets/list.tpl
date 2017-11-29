{include file='common/header.tpl'}

<section id="tweets">

  <header>
    <h2>Tweets</h2>
  </header>

  <section id="new_tweets"></section>

  {if isset($USERNAME)}
  <section id="tweet_form">
    <form action="{$BASE_URL}actions/tweets/tweet.php" method="post">
      <textarea name="tweet" placeholder="Say something"></textarea>
      <input type="submit" value="Tweet">
    </form>
  </section>
  {/if}

  {foreach $tweets as $tweet}
  <article class="tweet">
    <header>
      <span class="id">{$tweet.id}</span>
      <span class="realname">{$tweet.realname}</span>
      <a href="{$BASE_URL}pages/tweets/list_user.php?username={$tweet.username}" class="username">@{$tweet.username}</a>
      <span class="time">{$tweet.time}</span>
    </header>

    <p>{$tweet.text}</p>
  </article>
  {/foreach}

</section>

{include file='common/footer.tpl'}
