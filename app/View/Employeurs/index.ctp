<div class="">
	<h1>Liste des employeurs</h1>
	<table>
		<tr>
			
			<th>Nom d'entreprise</th>
			<th>Site Web</th>
			<th>Type d'entreprise</th>
			<th>Adresse</th>
			<th>Fax</th>
			<th>Actions</th>
		</tr>
		<?php foreach($employeurs as $employeur): ?>
			<tr>
				
				<td><?php echo h($employeur['Employeur']['nom_entreprise']) ?></td>
				<td><?php echo h($employeur['Employeur']['url']) ?></td>
				<td><?php echo h($employeur['Employeur']['type']) ?></td>
				<td>
					<?php echo ($employeur['Employeur']['adresse_postale'] != '') ? h($employeur['Employeur']['adresse_postale']) . ', ' : ''; ?>
					<?php echo ($employeur['Employeur']['ville']) ? h($employeur['Employeur']['ville']) . ', ' : ''; ?>
					<?php echo ($employeur['Employeur']['province']) ? h($employeur['Employeur']['province']) . ', ' : ''; ?>
					<?php echo ($employeur['Employeur']['region_pays']) ? h($employeur['Employeur']['region_pays']) . ', ' : ''; ?>
					<?php echo ($employeur['Employeur']['code_postal']) ? h($employeur['Employeur']['code_postal']) . ', ' : ''; ?>
				</td>
				<td><?php echo h($employeur['Employeur']['fax']) ?></td>
				<td>
					<a href="/contacts/index/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-eye"></i></a>
					<a href="/employeurs/edit/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-pencil"></i></a>
					<a href="/employeurs/delete/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-trash-o"></i></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	
	<a href="/employeurs/add">Ajouter un employeur</a>
	
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} de {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Précédent'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Suivant') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

