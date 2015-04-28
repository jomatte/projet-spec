<div class="">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<?php if($this->Form->value('Employeur.id')): ?>
			<legend><?php echo __('Modifier un contact'); ?></legend>
		<?php else: ?>
			<legend><?php echo __('Ajouter un contact'); ?></legend>
		<?php endif; ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_employeur');
		echo $this->Form->input('titre');
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('poste_occupe');
		echo $this->Form->input('courriel');
		echo $this->Form->input('est_sollicitable');
		echo $this->Form->input('tel');
		echo $this->Form->input('tel_poste');
		echo $this->Form->input('tel_cell');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enregistrer')); ?>
<a href="/contacts/index/<?php echo $id ?>">Annuler </a>

</div>

