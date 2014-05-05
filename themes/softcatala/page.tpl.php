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
<link rel="search" type="application/opensearchdescription+xml" title="Softcatalà" href="/softcatala.xml" />
<script type="text/javascript" src="/js/cookies/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/cookies/jquery.cookiecuttr.js"></script>
<script type="text/javascript" src="/js/softcatala.js"></script>
<script type='text/javascript' src='http://ad.softcatala.org/www/delivery/spcjs.php?id=1'></script>
<link href="/css/cookies/cookiecuttr.css" rel="stylesheet" type="text/css" />
<link rel="image_src" href="http://www.softcatala.org/imatges/noticies/softcatala.png" />
<meta property="og:image" content="http://www.softcatala.org/imatges/noticies/softcatala.png" />
</head>

<body class="thrColHybHdr fondo4">

<div id="container">
<!--# include virtual="/ssi/ads/superior-drupal.html" -->
<!--# include virtual="/ssi/header.html" -->
<!-- Layout -->
<div id="scintnoti">
	
<?php if ($tabs): print $breadcrumb; endif; ?>		   
<div class="titu_ho"><h1>Actualitat</h1><h2>tecnològica i de llengua catalana</h2></div>

<!--i menu actualitat -->

<div class="menuactualitat">
<ul>
<li class="borderno"><a href="/categoria/tot">Tota l' actualitat</a></li>
<li><a href="/categoria/article">Articles (<?php echo get_categories(4) ?>)</a></li>
<li><a href="/categoria/novetat">Novetats (<?php echo get_categories(5) ?>)</a></li>
<li><a href="/categoria/presentacio">Presentacions (<?php echo get_categories(6) ?>)</a></li>
<li><a href="/categoria/nota_de_premsa">Notes de premsa (<?php echo get_categories(7) ?>)</a></li>
</ul>
</div>
<!--f menu actualitat -->


          <?php if ($tabs): print '<div id="tabs-wrapper" class="notisection">'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>

          <div id="boxnoticies">
            <?php print $content ?>
          </div>
          <?php print $feed_icons ?>
          
      </div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

<div class="bloque">
<br />
<br />
<br />
<br />

    </div> <!-- /container -->

<!--I NO ESBORRAR CLEAR --> <br class="clearfloat" /><!-- F NO ESBORRAR CLEAR -->

  </div>
<?php if (!empty($footer)): print $footer; endif; ?>
<!-- /layout -->

<!--# include virtual="/ssi/footer-g.html" -->

  <?php print $closure ?>
  </body>
</html>
