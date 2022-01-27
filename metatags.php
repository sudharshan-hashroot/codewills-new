<?php
$fulluri = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-215524711-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-215524711-1');
</script>

<meta name="robots" content="index,follow">
<link href=<?php echo $fulluri;?> rel="canonical">
<meta name="trustburn-site-verification" content="c89d52d2e3f4deb0ee209e8dc4da572a">