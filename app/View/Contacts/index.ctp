<div class="">
	<h2><?php echo __('Contacts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th>Prénom</th>
		<th>Nom</th>
		<th>Titre</th>
		<th>Poste occupé</th>
		<th>Courriel</th>
		<th>Est sollicitable</th>
		<th>Téléphone bureau</th>
		<th>Poste</th>
		<th>Cellulaire</th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo $contact['Contact']['titre']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['prenom']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['nom']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['poste_occupe']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['courriel']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['est_sollicitable']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['tel']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['tel_poste']; ?>&nbsp;</td>
		<td><?php echo $contact['Contact']['tel_cell']; ?>&nbsp;</td>
		<td class="actions">
			<a href="/contacts/edit/<?php echo $contact['Contact']['id']; ?>/<?php echo $id; ?>"><i class="fa fa-pencil"></i></a>
			<a href="/contacts/delete/<?php echo $contact['Contact']['id']; ?>"><i class="fa fa-trash-o"></i></a>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
	<a href="/contacts/add/<?php echo $id ?>">Ajouter un contact</a>
	<a href="/employeurs/">Retour aux employeurs</a>
	
</div>
