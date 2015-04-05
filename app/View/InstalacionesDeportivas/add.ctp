<div class="instalacionesDeportivas form">
<?php echo $this->Form->create('InstalacionesDeportiva'); ?>
	<fieldset>
		<legend><?php echo __('Add Instalaciones Deportiva'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('ciudad_id');
		echo $this->Form->input('deporte_id');
		echo $this->Form->input('tipo_instalacion_id');
		echo $this->Form->input('instalaciones_libres');
		echo $this->Form->input('modifed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instalaciones Deportivas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deportes'), array('controller' => 'deportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deporte'), array('controller' => 'deportes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Instalacions'), array('controller' => 'tipo_instalacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Instalacion'), array('controller' => 'tipo_instalacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
