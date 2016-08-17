<script>
  $(document).ready(function() {
    getHabitaContent('<?= $site->url() ?>/' + getLang() + 'blog/api', '#blog_result', 'blog');

    randomContentRequest['blog'].done(function() {
      setFavicon();
    });
  });
</script>