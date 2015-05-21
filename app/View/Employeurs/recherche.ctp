<?php $i = 0; ?>
<table>
	<thead>
			<?php if(isset($_GET['tri']) && isset($_GET['ordre'])): ?>
				<th><a href="?tri=nom_entreprise<?php echo ($_GET['ordre'] == 'ASC' && $_GET['tri'] == 'nom_entreprise') ? '&ordre=DESC' : '&ordre=ASC'; ?>">Nom d'entreprise<i class="fa fa-sort"></i></a></th>
			<?php else : ?>
				<th><a href="?tri=nom_entreprise&ordre=ASC">Nom d'entreprise<i class="fa fa-sort"></i></a></th>
			<?php endif; ?>
			
			<th>Site Web</th>
			
			<?php if(isset($_GET['tri']) && isset($_GET['ordre'])): ?>
				<th><a href="?tri=region_pays<?php echo ($_GET['ordre'] == 'ASC' && $_GET['tri'] == 'region_pays') ? '&ordre=DESC' : '&ordre=ASC'; ?>">Région<i class="fa fa-sort"></i></a></th>
			<?php else : ?>
				<th><a href="?tri=region_pays&ordre=ASC">Région<i class="fa fa-sort"></i></a></th>
			<?php endif; ?>
			
			
			<th>Actions</th>
		</thead>
		<tbody>
	<?php foreach($employeurs as $employeur): ?>
		<tr class="tableauInterractif <?php echo ($i % 2 == 0) ? 'bleu' : '' ?>">
			
			<td class="fleche"><i class="fa fa-arrow-down"></i><?php echo h($employeur['Employeur']['nom_entreprise']) ?></td>
			<td><?php echo h($employeur['Employeur']['url']) ?></td>
			<td><?php echo h($employeur['Employeur']['region_pays']) ?></td>
			<td>
				<a class="ok" href="/contacts/index/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-user"></i></a>
				<a class="ok" href="/employeurs/edit/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-pencil"></i></a>
				<a class="sup" href="/employeurs/delete/<?php echo $employeur['Employeur']['id']; ?>" onclick="return confirm('Êtes-vous certains de vouloir supprimer l\'entreprise : <?php echo $employeur['Employeur']['nom_entreprise']; ?> ?')";>
					<i class="fa fa-trash-o"></i>										
				</a>
			</td>
		</tr>
		<tr class="tableauCache">
			<td colspan="5">
				<?php echo ($employeur['Employeur']['type']) ? '<p>Type d\'entreprise : <span>' . $employeur['Employeur']['type'] . '</span></p>' : ''; ?>
				<?php echo ($employeur['Employeur']['adresse_postale'] != '') ? '<p>Adresse : <span>' . h($employeur['Employeur']['adresse_postale']) . '</span></p>' : ''; ?>
				<?php echo ($employeur['Employeur']['ville']) ? '<p>Ville : <span>' . h($employeur['Employeur']['ville']) . '</span></p>' : ''; ?>
				<?php echo ($employeur['Employeur']['province']) ? '<p>Province : <span>' . h($employeur['Employeur']['province']) . '</span></p>' : ''; ?>
				<?php echo ($employeur['Employeur']['code_postal']) ? '<p>Code postal : <span>' . h($employeur['Employeur']['code_postal']) . '</span></p>' : ''; ?>
				<?php echo ($employeur['Employeur']['fax']) ? '<p>Numéro de fax : <span>' . h($employeur['Employeur']['fax']) . '</span>' : '' ; ?></td>
			</td>
		</tr>
	<?php $i ++; ?>
	<?php endforeach; ?>
	</tbody>
</table>