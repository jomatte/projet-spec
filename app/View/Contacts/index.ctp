<nav class="navIndexContact">
	<div class="nav-2">
		<a href="/employeurs/"><i class="fa fa-home"></i><br />Retour aux employeurs</a>
		<a href="/contacts/add/<?php echo $id ?>"><i class="fa fa-user-plus"></i><br />Ajouter un contact</a>
	</div>
</nav>
<div class="contact">
	<h2><?php echo 'Liste de contacts de : ' . $employeur['Employeur']['nom_entreprise'] ?></h2>
	<?php if($contacts): ?>
		<?php foreach ($contacts as $contact): ?>
			<table cellpadding="0" cellspacing="0" class="tContact">
				<tbody>
					<tr class="tTitre">
						<td colspan="2"><?php echo $contact['Contact']['titre'] . ' ' . $contact['Contact']['prenom'] . ' ' . $contact['Contact']['nom']; ?>&nbsp;</td>
					</tr>
					<?php if($contact['Contact']['poste_occupe']): ?>
						<tr class="tPosteOccupe">
							<td colspan="2"><?php echo $contact['Contact']['poste_occupe']; ?>&nbsp;</td>
						</tr>
					<?php endif; ?>
					
					<tr class="tInfos">
						<td colspan="2">
							
							<?php if($contact['Contact']['courriel']): ?>
								<p><?php echo $contact['Contact']['courriel']; ?>&nbsp;</p>
							<?php endif; ?>
							
							<?php if($contact['Contact']['tel']): ?>
								<p><?php echo $contact['Contact']['tel']; ?><?php echo ($contact['Contact']['tel_poste']) ? ' p : ' . $contact['Contact']['tel_poste'] : ''; ?> &nbsp;</p>
							<?php endif; ?>
							
							<?php //if($contact['Contact']['tel_cell']): ?>
<!-- 								<td><?php //echo $contact['Contact']['tel_cell']; ?>&nbsp;</td> -->
							<?php //endif; ?>
							
						</td>
					</tr>
					
<!--
					<tr class="tSollicitable">
						<td>Est sollicitable : </td>
						<td><?php //echo ($contact['Contact']['est_sollicitable']) ? 'Oui' : 'Non'; ?>&nbsp;</td>
					</tr>
-->
					<tr class="tActions">
						<td ><a class="ok" href="/contacts/edit/<?php echo $contact['Contact']['id']; ?>/<?php echo $id; ?>"><i class="fa fa-pencil"></i></a></td>
						<td><a class="sup" href="/contacts/delete/<?php echo $id; ?>/<?php echo $contact['Contact']['id']; ?>" onclick="return confirm('Êtes-vous certains de vouloir supprimer le contact : <?php echo $contact['Contact']['prenom'] . ' ' . $contact['Contact']['nom']; ?> ?')";><i class="fa fa-trash-o"></i></a></td>
					</tr>
				</tbody>
			</table>
		<?php endforeach; ?>
	<?php else: ?>
		<h3 class="erreurContact">Aucun contact n'est disponible, veuillez en ajouter.</h3>
	<?php endif; ?>
	
		
	
	
	
</div>
