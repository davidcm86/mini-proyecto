<div class="deportes form">
<?php echo $this->Form->create('Deporte'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deporte'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deporte.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Deporte.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deportes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instalaciones Deportivas'), array('controller' => 'instalaciones_deportivas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instalaciones Deportiva'), array('controller' => 'instalaciones_deportivas', 'action' => 'add')); ?> </li>
	</ul>
</div>
