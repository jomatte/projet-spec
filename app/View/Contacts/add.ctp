<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employeurs'), array('controller' => 'employeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Id Employeur'), array('controller' => 'employeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
