<div class="employeurs form">
<?php echo $this->Form->create('Employeur'); ?>
	<fieldset>
		<legend><?php echo __('Add Employeur'); ?></legend>
	<?php
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
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employeurs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employeurs'), array('controller' => 'employeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Id Employeur'), array('controller' => 'employeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
