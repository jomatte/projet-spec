<?php 
/* 

Petite exemple de comment utliser ça:


echo $this->element('admin/modal/confirm', array(
	'id' => 'confirmation_suppression_'.$page['Page']['id'],
	'title' => 'Suppression de page',
	'content' => '<p>Êtes-vous sûr de vouloir supprimer cette page?<br/> <em>'.$page['Page']['menu_fre'].'</em></p>',
	'link' => '/admin/pages/supprimer/'.$page['Page']['id'],
	'button' => 'Supprimer',
	'type' => 'danger'
));


*/
?>

<!-- Modal dialog -->
<?php if(!isset($id)) { $id = 'UN_ID_UNIQUE_SVP'; } ?>
<div id="<?php echo $id; ?>" tabindex="-1" role="dialog" class="modal hide fade <?php echo (isset($class)) ? $class : ''; ?>">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo (isset($title)) ? $title : 'Confirmation'; ?></h3>
  </div>
  <?php if($content): ?>
  <div class="modal-body">
    <?php echo $content; ?>
  </div>
  <?php endif; ?>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <?php if(isset($link)): ?>
    	<a href="<?php echo $link ?>" class="btn <?php echo (isset($type)) ? 'btn-'.$type :'' ?>"><?php echo $button ?></a>
    <?php endif; ?>
  </div>
</div>
<!-- / Fin ---- Modal dialog -->