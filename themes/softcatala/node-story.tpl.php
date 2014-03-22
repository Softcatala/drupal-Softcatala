<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?><?php $destination = drupal_get_destination(); if (!preg_match('/destination\=taxonomy/', $destination) ) {print ' cosnoticia'; }?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <?php if ($submitted): ?>
   <?php if ($node->uid > 0) { ?>
    <span class="submitted font12 verdanya grey2"><?php print $submitted; ?></span>
   <?php } ?>
   <?php if ($node->uid < 1) { ?>
    <span class="submitted font12 verdanya grey2">Publicat per 
<?php
$nom = "Anònim";
if (preg_match('/^\s*\S+/', content_format('field_font', $field_font[0]))) {
	$nom = content_format('field_font', $field_font[0]);
}
print $nom." "; 
if (preg_match('/^\s*\S+/', $field_contacte[0][email])) {
	$email = $field_contacte[0]['email'];
	$canvis = array ("@", ".");
	$nous = array (" <em>arrova</em> ", " <em>punt</em> ");
	$correu = str_replace($canvis, $nous, $email);
	print "(".$correu.")";
}
?> el <?php print format_date($node->created) ?></span>
   <?php } ?>

<?php if ($taxonomy): ?>
                <div class="terms"><?php print $terms ?></div>
      <?php endif;?>
  <?php endif; ?>

<?php 
$destination = drupal_get_destination();
$arraynodes = array(1, 2, 3, 4, 5);
if (!$is_front && !preg_match('/destination\=taxonomy/', $destination) && !in_array($node->nid, $arraynodes))  : 
if ($title): print '<h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1>'; endif;
$curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url);
if ($links): print '
        <div class="links">'. $links . '
<div id="social-icons">
<iframe src="http://www.facebook.com/plugins/like.php?app_id=143173705767916&amp;href='.$curr_url.'&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><a href="http://twitter.com/share?url='.$curr_url.'&text=' .$title .'&via=softcatala" class="twitter-share-button">Tweet</a><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="medium"></g:plusone><span class="icon"><a href="http://identi.ca/index.php?action=newnotice&amp;status_textarea='.$curr_url.'"><img height="20" src="/imatges/identica3.png" alt="identi.ca" /></a></span><span class="icon"><a title="La Tafanera" href="http://www.latafanera.cat/submit.php?url='.$curr_url.'"><img height="20" src="/imatges/latafanera.png" alt="La Tafanera"></a></span>
</div>
</div>
	<div class="lin5 postop_10">
	<img longdesc="Separador de categories" alt="Softcatalà" src="/img/shim.gif"/>
	</div>'; endif;
endif; ?>


<div class="content clear-block story-block">

<?php 

if ($is_front) { ?>

<div class="textoact">
<?php print_r($node->content['body']['#value']); ?>
</div>
<?php if (!preg_match('/^\s*$/', $field_mini[0]['value'])) {?>
<div class="imgnotihomediv">
    <img src="<?php print content_format('field_mini', $field_mini[0]) ?>" alt="<?php print content_format('field_minitxt', $field_minitxt[0]) ?>" title="<?php print content_format('field_minitxt', $field_minitxt[0]) ?>" class="imgnotihome" />
</div>
<?php } ?>


<?php } ?>


<?php
$destination = drupal_get_destination();

if (preg_match('/destination\=taxonomy/', $destination)) { ?>

<div class="textoact3">
<?php print_r($node->content['body']['#value']); ?>
</div>
<?php if (!preg_match('/^\s*$/', $field_mini[0]['value'])) {?>
<div class="imgnotihomediv">
    <img src="<?php print content_format('field_mini', $field_mini[0]) ?>" alt="<?php print content_format('field_minitxt', $field_minitxt[0]) ?>" title="<?php print content_format('field_minitxt', $field_minitxt[0]) ?>" class="imgnotihome" />
</div>
<?php } ?>


<?php } ?>



<?php 
$destination = drupal_get_destination();

if (!$is_front && !preg_match('/destination\=taxonomy/', $destination)) { ?>
  
  <div class="textoact2">
  <?php print_r($node->content['body']['#value']); ?>
  </div>

    <!--I GRID280 -->
    <div class="lateralnoticia">
    <!--i block foto -->
    <?php if (!preg_match('/^\s*$/', $field_imatge[0][value])) {?>
    	<div class="fotonot">
    	<img src="<?php print content_format('field_imatge', $field_imatge[0]) ?>" alt="<?php print content_format('field_imatgetxt', $field_imatgetxt[0]) ?>" longdesc="Imatge de la notícia" title="<?php print content_format('field_imatgetxt', $field_imatgetxt[0]) ?>" class="bzero"/>
    	<?php if (!preg_match('/^\s*$/', $field_llegenda[0][value])) {echo "<p>"; print content_format('field_llegenda', $field_llegenda[0]); echo "</p>";} ?>
    	</div>
    <? } ?>
    <!--f block foto -->
   <!--i block publicitat -->
    <!--i anuncios google -->
    <div class="boxtit2">Publicitat</div> 
<script type='text/javascript'><!--// <![CDATA[
    /* [id9] Softcatalà - Notícia Requadre */
    OA_show(9);
// ]]> --></script><noscript><a target='_blank' href='http://ad.softcatala.org/www/delivery/ck.php?n=7eca3a4'><img border='0' alt='' src='http://ad.softcatala.org/www/delivery/avw.php?zoneid=9&amp;n=7eca3a4' /></a></noscript>    
<!--F GRID280 -->
    </div>
<?php } ?>

</div>
<br class="clearfloat" />
<?php 
$destination = drupal_get_destination();
$curr_url = check_plain("http://" .$_SERVER['HTTP_HOST'] .$node_url);
if ($is_front || preg_match('/destination\=taxonomy/', $destination)) :
if ($links): print '<div class="links">'.$links.'</div>'; 
endif;
endif; ?>
  
</div>
