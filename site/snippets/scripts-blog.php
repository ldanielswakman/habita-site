<script>
  $(document).ready(function() {
    getHabitaContent('<?= $site->url() ?>/' + getLang() + 'blog.json', '#blog_result', 'blog');

    randomContentRequest['blog'].done(function() {
      setFavicon();
    });
  });
</script>