<div class="story-node-form">
<script type="text/javascript">
function canviaurl(param, place) {
	var link;
	var paramplace;
	if (place == 'mini') {
		link = document.getElementById('link_mini');
		paramplace = "miniatura";
	}
	else {
		link = document.getElementById('link_imatge');
		paramplace = "imatge";
	}

	var onclicks;
	if (param!=0) {
		onclicks = "javascript:window.open('/imadir.php?dir="+param+"&section="+paramplace+"', 'Imatges', 'fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=no,directories=no,location=no,width=500,height=500,left=100,top=100')";
		link.setAttribute('onclick', onclicks);
	}
	else {
		onclicks = "javascript:window.open('/imadir.php?dir=&section="+paramplace+"', 'Imatges', 'fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=no,directories=no,location=no,width=500,height=500,left=100,top=100')";
		link.setAttribute('onclick', onclicks);
	}
}
</script>

  <?php print drupal_render($form['title']); ?>
  <?php print drupal_render($form['taxonomy']); ?>
  <?php print drupal_render($form['field_font']); ?>
  <?php print drupal_render($form['field_contacte']); ?>
  <?php print drupal_render($form['body_field']); ?>
  <fieldset class="imatges_form">
  <legend>Selecció de les imatges</legend>
  <a name='mini'></a>
  <div class="form_image">
  <div class="value_form_image">
  <?php print drupal_render($form['field_mini']); ?>
  </div>
  <div class="load_form_image">
  <select name="dir_mini" onchange="canviaurl(this.options[this.selectedIndex].value, 'mini')">
	<option selected="selected" value="0">Seleccioneu una galeria...</option>
	<option value="">Imatges generals</option>
	<option value="noticies">Imatges per a les notícies</option>
	<option value="usuaris/<?php global $user; print $user->name;?>">Imatges de l'usuari</option>
  </select>
  <a href="#mini" onclick="javascript:window.open('/imadir.php?dir=noticies&section=miniatura', 'Imatges', 'fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=no,directories=no,location=no,width=500,height=500,left=100,top=100');" id="link_mini">Trieu la miniatura...</a>
  </div>
  </div>
  <?php print drupal_render($form['field_minitxt']); ?>
  <a name='imatge'></a>
  <div class="form_image">
  <div class="value_form_image">
  <?php print drupal_render($form['field_imatge']); ?>
  </div>
  <div class="load_form_image">
  <select name="dir_imatge" onchange="canviaurl(this.options[this.selectedIndex].value, 'imatge')">
        <option selected="selected" value="0">Seleccioneu una galeria...</option>
        <option value="">Imatges generals</option>
        <option value="noticies">Imatges per a les notícies</option>
        <option value="usuaris/<?php global $user; print $user->name;?>">Imatges de l'usuari</option>
  </select>
  <a href="#imatge" onclick="javascript:window.open('/imadir.php', 'Imatges', 'fullscreen=no,toolbar=no,status=no,menubar=no,scrollbars=yes,resizable=no,directories=no,location=no,width=500,height=500,left=100,top=100');" id="link_imatge">Trieu la imatge...</a>
  </div>
  </div>
  <?php print drupal_render($form['field_imatgetxt']); ?>
  <?php print drupal_render($form['field_llegenda']); ?>
  </div>
  <?php $buttons = drupal_render($form['buttons']);
  print drupal_render($form). $buttons;
  ?>
</div>
