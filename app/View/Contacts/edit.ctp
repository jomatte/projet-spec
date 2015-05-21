<nav class="navEditContact">
	<div class="nav-2">
		<a href="/employeurs"><i class="fa fa-home"></i><br />Retour aux employeurs</a>
		<a href="/contacts/index/<?php echo $id ?>"><i class="fa fa-arrow-circle-left"></i><br />Retour aux contacts</a>
	</div>
	
</nav>
<div class="eContact">	
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<?php if($this->Form->value('Employeur.id')): ?>
			<legend><?php echo __('Modifier un contact pour ' . $employeur); ?></legend>
		<?php else: ?>
			<legend><?php echo __('Ajouter un contact pour ' . $employeur); ?></legend>
		<?php endif; ?>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->hidden('id_employeur', array('value' => $id)); ?>
		<div class="group groupPrenom">
			<div class="champTitre">
				<?php echo $this->Form->input('titre', array('options' => array(
					'M, Mme' => 'M, Mme',
					'M.' => 'M.',
					'Mme.' => 'Mme.'
				), 'label' => 'Titre : ')); ?>
			</div>
			<div class="champPrenom">
				<?php echo $this->Form->input('prenom', array('label' => 'Prénom : ')); ?>
			</div>
		</div>
		
		<?php echo $this->Form->input('nom', array('label' => 'Nom : '));
		echo $this->Form->input('poste_occupe', array('label' => 'Poste occupé : '));
		echo $this->Form->input('courriel', array('label' => 'Courriel : ', 'required' => 'required')); ?>
		<div class='group groupTel'>
			<?php echo $this->Form->input('tel', array('label' => 'Téléphone : ')); ?>
			<div class="champPoste">
				 <?php echo $this->Form->input('tel_poste', array('label' => 'Poste : ')); ?>
			</div>
		</div>
		<?php echo $this->Form->input('tel_cell', array('label' => 'Cellulaire : '));
		echo $this->Form->input('est_sollicitable', array('label' => 'Est sollicitable', 'type' => 'checkbox'));
	?>
	</fieldset>
	<a href="/contacts/index/<?php echo $id ?>">Annuler </a>
<?php echo $this->Form->end(__('Enregistrer')); ?>

</div>

