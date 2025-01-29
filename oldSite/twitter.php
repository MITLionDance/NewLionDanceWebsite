<?php include("header.php"); ?>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<center>
<script>
new TWTR.Widget({
  version: 2,
  type: 'list',
  rpp: 30,
  interval: 30000,
  title: 'Follow the adventures of our lions!',
  subject: 'What\'s happening?',
  width: 500,
  height: 400,
  theme: {
    shell: {
      background: '#363636',
      color: '#c2c2c2'
    },
    tweets: {
      background: '#000000',
      color: '#e8e58e',
      links: '#e69e12'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setList('mit_liondance', 'mit-lion-dance').start();
</script>
</center>
<?php include("footer.php"); ?>