<div class="">
<?php echo $this->Form->create('Employeur'); ?>
	<fieldset>
		<?php if($this->Form->value('Employeur.id')): ?>
			<legend><?php echo __('Modifier un employeur'); ?></legend>
		<?php else: ?>
			<legend><?php echo __('Ajouter un employeur'); ?></legend>
		<?php endif; ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nom_entreprise');
		echo $this->Form->input('adresse_postale');
		echo $this->Form->input('ville');
		echo $this->Form->input('province');
		echo $this->Form->input('code_postal');
		echo $this->Form->input('url');
		echo $this->Form->input('region_pays');
		echo $this->Form->input('type');
		echo $this->Form->input('fax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enregistrer')); ?>
<a href="/employeurs/">Annuler </a>
</div>
