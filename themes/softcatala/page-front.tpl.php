<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lte IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
    <!--[if lt IE 7]>
          <link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/softcatala/fix-ie6.css" />
    <![endif]-->
<script type="text/javascript" src="/js/cookies/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/cookies/jquery.cookiecuttr.js"></script>
<script type="text/javascript" src="/js/softcatala.js"></script>
<link rel="search" type="application/opensearchdescription+xml" title="Softcatalà" href="/softcatala.xml" />
<script type='text/javascript' src='https://ad.softcatala.org/www/delivery/spcjs.php?id=1'></script>
<link href="/css/cookies/cookiecuttr.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="Softcatalà - RSS de comentaris" href="/comentaris.xml" />
<link rel="image_src" href="http://www.softcatala.org/imatges/noticies/softcatala.png" />
<meta property="og:image" content="http://www.softcatala.org/imatges/noticies/softcatala.png" />
</head>

<body class="thrColHybHdr fondo5">
<div id="container">
<!--# include virtual="/ssi/ads/superior-portada.html" -->
<!--# include virtual="/ssi/header.html" -->
<!--
<div id="sidebar4">
<br />
</div>
-->
<!--I COLUMNA ESQUERRA -->
<div class="sidebar_home2"> 
<?php if ($left): ?>
<?php print $left ?>
<?php endif; ?>
</div>
<!--F COLUMNA ESQUERRA --> 
<!-- Layout -->
<!-- I CONTENIDO CENTRAL -->    
<div id="mainhome" class="postop15">

<div class="gridfull_b">
<!--i print Header -->
<?php
$path = drupal_get_normal_path('capcalera_de_la_portada');
if ( strpos($path, 'node/') != 0 )
{
}
else {
  $nid = substr($path, 5);
  $node = node_load(array('nid' => $nid));
  print $node->body;
}   
?>
<!--f print Header -->
<!--i menu actualitat -->
<div class="boxactualitat1">
<div class="boxactualitat2">
<div class="titu_ho"><h1>Actualitat</h1><h2>tecnològica i de llengua catalana</h2></div>
<div class="proposeu"><span id="propnoticia"><a href="/afegeix">Proposeu una notícia</a></span><span id="subsnovetats"><a href="javascript:subscriu_novetats();" onclick="javascript:subscriu_novetats();">Subscripció a novetats</a></span></div>
<div class="menuactualitat">
<ul>
<li style="border-left:0;"><a href="/categoria/tot">Tota l'actualitat</a></li>
<li><a href="/categoria/article">Articles (<?php echo get_categories(4) ?>)</a></li>
<li><a href="/categoria/novetat">Novetats (<?php echo get_categories(5) ?>)</a></li>

<li><a href="/categoria/presentació">Presentacions (<?php echo get_categories(6) ?>)</a></li>
<li><a href="/categoria/nota_de_premsa">Notes de premsa (<?php echo get_categories(7) ?>)</a></li>
</ul>
</div>


</div>
</div>
<!--f menu actualitat -->

<!--i txt actualitat -->
<div class="txtactu">
<div id="boxsubscriu">
<form method="get" action="" name="info">
<font size="1">
<input type="text" style="color: rgb(204, 204, 204);" onfocus="cleartext(this)" value="Adreça electrònica" size="13" name="email"/>
</font>
<br/>
<select name="action">
<option selected="selected" value="subscribe">Afegiu-m'hi</option>
<option value="unsubscribe">Esborreu-me'n</option>
</select>
<input type="submit" value="Envia" onclick="javascript:correu_novetats(document.info)" name="envia"/>
</form>
</div>
          <div class="txtint">
            <?php print $content ?>
          </div>
          
      </div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->


    </div> <!-- /container -->

  </div>

<!--I NO ESBORRAR CLEAR --> <br class="clearfloat" /><!-- F NO ESBORRAR CLEAR -->

  </div>
  <?php if (!empty($footer)): print $footer; endif; ?>
<!-- /layout -->
<!--# include virtual="/ssi/footer-w.html" -->

<?php print $closure ?>

  </body>
</html>
