let BASE_URL = 'http://localhost/~arestivo/fritter/';

$(document).ready(function() {
  initMessageClosers();
  if ($('section#tweets').length)
    initTweetChecker();
  initTweetReloader();
});

function initMessageClosers() {
  $('.close').click(function() {
    $(this).parent().fadeOut();
  });
}

function initTweetChecker() {
  setInterval(checkForNewTweets, 5000);
};

function checkForNewTweets() {
  let last_id = $('article.tweet:first .id').text();

  $.getJSON(BASE_URL + "api/tweets/count_after.php", {id: last_id}, function(data) {
    if (data > 0) {
      $('#new_tweets').html('New tweets (' + data + '). <a href="#">Reload</a>?');
      $('#new_tweets').fadeIn();
    }
  });
}

function initTweetReloader() {
  $('#new_tweets').on('click', 'a', function() {
    let last_id = $('article.tweet:first .id').text();
    $.getJSON(BASE_URL + "api/tweets/get_after.php", {id: last_id}, function(data) {
      $.each(data, function(i, tweet) {
        $('#tweets .tweet:first').before('<article class="tweet">' +
            '<header>' +
              '<span class="id">' + tweet.id + '</span>' +
              '<span class="realname">' + tweet.realname + '</span>' +
              '<a href="{$BASE_URL}pages/tweets/list_user.php?username=' + tweet.username + '" class="username">@' + tweet.username + '</a>' +
              '<span class="time">' + tweet.time + '</span>' +
            '</header>' +
            '<p>' + tweet.text + '</p>' +
          '</article>');
        $('#new_tweets').fadeOut();
      });
    });
  });
}
