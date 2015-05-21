<nav class="navEditEmployeur">
	<div class="nav-1">
		<a href="/employeurs"><i class="fa fa-home"></i><br />Retour aux employeurs</a>
	</div>
</nav>
<div class="eEmployeur">
<?php echo $this->Form->create('Employeur'); ?>
	<fieldset>
		<?php if($this->Form->value('Employeur.id')): ?>
			<legend><?php echo __('Modifier un employeur'); ?></legend>
		<?php else: ?>
			<legend><?php echo __('Ajouter un employeur'); ?></legend>
		<?php endif; ?>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('nom_entreprise', array('label' => 'Nom de l\'entreprise : ', 'required' => 'required'));
		echo $this->Form->input('adresse_postale', array('label' => 'Adresse postale : '));
		echo $this->Form->input('ville', array('label' => 'Ville : '));
		echo $this->Form->input('province', array('label' => 'Province : '));
		echo $this->Form->input('code_postal', array('label' => 'Code postal : '));
		echo $this->Form->input('url', array('label' => 'Site web : '));
		echo $this->Form->input('region_pays', array('label' => 'Région : '));
		echo $this->Form->input('type', array('label' => 'Type d\'entreprise : '));
		echo $this->Form->input('fax', array('label' => 'Fax : '));
	?>
	</fieldset>
	<a href="/employeurs/">Annuler </a>
<?php echo $this->Form->end(__('Enregistrer')); ?>

</div>
