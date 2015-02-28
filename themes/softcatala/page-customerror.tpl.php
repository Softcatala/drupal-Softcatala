<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
    <!--[if IE 7]>
          <link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/softcatala/fix-ie7.css" />
    <![endif]-->
<script type="text/javascript" src="/js/softcatala.js"></script>
<meta name="keywords" content="software, programari, català, valencià, catalan, valencian, catalán, valenciano" />
<link rel="search" type="application/opensearchdescription+xml" title="Softcatalà" href="/softcatala.xml" />
<script type='text/javascript' src='https://ad.softcatala.org/www/delivery/spcjs.php?id=1'></script>
</head>
  <body class="thrColHybHdr fondo7">

<div id="container">
<!--# include virtual="/ssi/ads/superior-drupal.html" -->
<!--# include virtual="/ssi/header.html" -->
<!-- Layout -->
    <div id="scint">

          <div class="errorpage">
            <?php print $content ?>
          </div>
          <?php print $feed_icons ?>
          
      </div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

<div class="bloque">
<br />
<br />
<br />
<br />
</div>

    </div> <!-- /container -->

<!--I NO ESBORRAR CLEAR --> <br class="clearfloat" /><!-- F NO ESBORRAR CLEAR -->

<!-- /layout -->

<!--# include virtual="/ssi/footer-g.html" -->

  <?php print $closure ?>
  </body>
</html>
