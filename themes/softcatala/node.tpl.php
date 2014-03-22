<?php
// $Id: node.tpl.php,v 1.5 2007/10/11 09:51:29 goba Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted font12 verdanya grey2"><?php print $submitted; ?></span>
      <?php if ($taxonomy): ?>
                <span class="terms"><?php print $terms ?></span>
      <?php endif;?>
  <?php endif; ?>

<?php 
$destination = drupal_get_destination();
$arraynodes = array(1, 2, 3, 4, 5, 6, 7, 402, 403, 423, 551, 631, 650);
if (!$is_front && !preg_match('/destination\=taxonomy/', $destination) && !in_array($node->nid, $arraynodes))  : 
if ($title): print '<h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1>'; endif;
if ($links): print '
        <div class="links">'. $links . '</div>
	<div class="lin5 postop_10">
	<img longdesc="Separador de categories" alt="Softcatalà" src="/img/shim.gif"/>
	</div>'; endif;
endif; ?>


  <div class="content clear-block">
    <?php print $content ?>
  </div>

<?php if ($is_front) :
if ($links): print '<div class="links">'.$links.'</div>'; 
endif;
endif; ?>
  
</div>
