<script>
  $(document).ready(function() {

    // start with fetching random blog post...
    getHabitaContent('<?= $site->url() ?>/' + getLang() + 'blog.json', '#blog_result', 'blog', true);

    // .. when done, get random member ...
    randomContentRequest['blog'].done(function() {

      if($('#event_result').length) {
        console.log('event result exists');
        getHabitaContent('<?= $site->url() ?>/' + getLang() + 'events.json', '#event_result', 'event', true);

        // .. when done, get random member ...
        randomContentRequest['event'].done(function() {
          if($('#member_result').length) {
            console.log('member result exists');
            getHabitaContent('<?= $site->url() ?>/' + getLang() + 'members.json', '#member_result', 'member', true);
            randomContentRequest['member'].done(function() {
              setFavicon();
            });
          } else {
            setFavicon();
          }
        });
      } else if($('#member_result').length) {
        console.log('member result exists');
        getHabitaContent('<?= $site->url() ?>/' + getLang() + 'members.json', '#member_result', 'member', true);
        randomContentRequest['member'].done(function() {
          setFavicon();
        });
      } else {
        setFavicon();
      }

    });

  });
</script>