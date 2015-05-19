<?php $i = 0; ?>
<nav class="navIndexContact">
	<div class="nav-1">
		<a href="/employeurs/add"><i class="fa fa-newspaper-o"></i><br />Ajouter un employeur</a>
	</div>
</nav>
<div class="employeur">
	<h1>Liste d'employeurs</h1>
	<table>
		<thead>
			
			<th>Nom d'entreprise</th>
			<th>Site Web</th>
			<th>Région</th>
			<th>Actions</th>
		</thead>
		<tbody>
		<?php foreach($employeurs as $employeur): ?>
			<tr class="tableauInterractif <?php echo ($i % 2 == 0) ? 'bleu' : '' ?>">
				
				<td><?php echo h($employeur['Employeur']['nom_entreprise']) ?></td>
				<td><?php echo h($employeur['Employeur']['url']) ?></td>
				<td><?php echo h($employeur['Employeur']['region_pays']) ?></td>
				<td>
					<a class="ok" href="/contacts/index/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-user"></i></a>
					<a class="ok" href="/employeurs/edit/<?php echo $employeur['Employeur']['id']; ?>"><i class="fa fa-pencil"></i></a>
					<a href="/employeurs/delete/<?php echo $employeur['Employeur']['id']; ?>" onclick="return confirm('Êtes-vous certains de vouloir supprimer l\'entreprise : <?php echo $employeur['Employeur']['nom_entreprise']; ?> ?')";>
						<i class="fa fa-trash-o"></i>										
					</a>
				</td>
			</tr>
			<tr class="tableauCache">
				<td colspan="5">
					<?php echo ($employeur['Employeur']['type']) ? 'Type d\'entreprise : ' . $employeur['Employeur']['type'] . '<br />' : ''; ?>
					<?php echo ($employeur['Employeur']['adresse_postale'] != '') ? 'Adresse : ' . h($employeur['Employeur']['adresse_postale']) . '<br />' : ''; ?>
					<?php echo ($employeur['Employeur']['ville']) ? 'Ville : ' . h($employeur['Employeur']['ville']) . '<br />' : ''; ?>
					<?php echo ($employeur['Employeur']['province']) ? 'Province : ' . h($employeur['Employeur']['province']) . '<br />' : ''; ?>
					<?php echo ($employeur['Employeur']['code_postal']) ? 'Code postal : ' . h($employeur['Employeur']['code_postal']) . '<br />' : ''; ?>
					<?php echo ($employeur['Employeur']['fax']) ? 'Numéro de fax : ' . h($employeur['Employeur']['fax']) : '' ; ?></td>
				</td>
			</tr>
		<?php $i ++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
	
</div>

