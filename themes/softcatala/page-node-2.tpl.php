<?php
$GLOBALS['conf']['cache'] = FALSE;

require_once('browser_detection.php' );
function detectmob() {
    
    $os = browser_detection( 'mobile_data' );
    return($os[3]);

}

$mredirect = $_GET['mobile_no_redirect'];
$mso ="";
$mso = detectmob();

if (!empty($mso) && $mredirect !=1) {
header('Location: http://www.softcatala.org/m/traductor');
}
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
<link rel="search" type="application/opensearchdescription+xml" title="Softcatalà" href="/softcatala.xml" />
<script type='text/javascript' src='http://ad.softcatala.org/www/delivery/spcjs.php?id=1'></script>
<link rel="image_src" href="http://www.softcatala.org/imatges/noticies/softcatala.png" />
<meta property="og:image" content="http://www.softcatala.org/imatges/noticies/softcatala.png" />
</head>
  <body class="thrColHybHdr fondo3">
<div id="container">
<div id="publisuperior">
<div id="publisuperior1">
<div class="publieti"><img src="/img/publicitat.jpg" alt="Publicitat" title="Publicitat" /></div>
<div class="publicos">
<script type='text/javascript'><!--// <![CDATA[
    /* [id13] Softcatalà - Traductor Publisuperior esquerra */
    OA_show(13);
// ]]> --></script><noscript><a target='_blank' href='http://ad.softcatala.org/www/delivery/ck.php?n=c1a5b64'><img border='0' alt='' src='http://ad.softcatala.org/www/delivery/avw.php?zoneid=13&amp;n=c1a5b64' /></a></noscript>
</div>
</div>
<div id="publisuperior2">
<div class="publieti"><img src="/img/publicitat.jpg" alt="Publicitat" title="Publicitat" /></div>
<div class="publicos">
<script type='text/javascript'><!--// <![CDATA[
    /* [id17] Softcatalà - Genèric Publisuperior dreta */
    OA_show(17);
// ]]> --></script><noscript><a target='_blank' href='http://ad.softcatala.org/www/delivery/ck.php?n=b548d5e'><img border='0' alt='' src='http://ad.softcatala.org/www/delivery/avw.php?zoneid=17&amp;n=b548d5e' /></a></noscript>
</div>
</div>
</div>
<!--# include virtual="/ssi/header.html" -->
<!-- Layout -->
    <div id="scint">
          <?php if ($tabs): print $breadcrumb; endif; ?>		   
          <?php if ($tabs): print '<div id="tabs-wrapper">'; endif; ?>
	  <div class="versioord"><a href="/m/traductor">Versió mòbil »</a></div>
          <?php if ($title): print '<h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>

          <div class="txtint">
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
<script language="JavaScript" type="text/javascript">
<!--
if (top.location != location) {
top.location.href = document.location.href; }
-->
</script>

<!--# include virtual="/ssi/footer-g.html" -->

  <?php print $closure ?>
  </body>
</html>
