<div class="employeurs view">
<h2><?php echo __('Employeur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom Entreprise'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['nom_entreprise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse Postale'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['adresse_postale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['province']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['code_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region Pays'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['region_pays']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($employeur['Employeur']['fax']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employeur'), array('action' => 'edit', $employeur['Employeur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employeur'), array('action' => 'delete', $employeur['Employeur']['id']), array(), __('Are you sure you want to delete # %s?', $employeur['Employeur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeurs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employeur'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employeurs'), array('controller' => 'employeurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Id Employeur'), array('controller' => 'employeurs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employeurs'); ?></h3>
	<?php if (!empty($employeur['id_employeur'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom Entreprise'); ?></th>
		<th><?php echo __('Adresse Postale'); ?></th>
		<th><?php echo __('Ville'); ?></th>
		<th><?php echo __('Province'); ?></th>
		<th><?php echo __('Code Postal'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Region Pays'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employeur['id_employeur'] as $idEmployeur): ?>
		<tr>
			<td><?php echo $idEmployeur['id']; ?></td>
			<td><?php echo $idEmployeur['nom_entreprise']; ?></td>
			<td><?php echo $idEmployeur['adresse_postale']; ?></td>
			<td><?php echo $idEmployeur['ville']; ?></td>
			<td><?php echo $idEmployeur['province']; ?></td>
			<td><?php echo $idEmployeur['code_postal']; ?></td>
			<td><?php echo $idEmployeur['url']; ?></td>
			<td><?php echo $idEmployeur['region_pays']; ?></td>
			<td><?php echo $idEmployeur['type']; ?></td>
			<td><?php echo $idEmployeur['fax']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employeurs', 'action' => 'view', $idEmployeur['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employeurs', 'action' => 'edit', $idEmployeur['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employeurs', 'action' => 'delete', $idEmployeur['id']), array(), __('Are you sure you want to delete # %s?', $idEmployeur['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Id Employeur'), array('controller' => 'employeurs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
