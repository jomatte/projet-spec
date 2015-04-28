<div class="contacts view">
<h2><?php echo __('Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Employeur'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['id_employeur']['id'], array('controller' => 'employeurs', 'action' => 'view', $contact['id_employeur']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poste Occupe'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['poste_occupe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Courriel'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['courriel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Est Sollicitable'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['est_sollicitable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Poste'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['tel_poste']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Cell'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['tel_cell']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), array(), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeurs'), array('controller' => 'employeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Id Employeur'), array('controller' => 'employeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
