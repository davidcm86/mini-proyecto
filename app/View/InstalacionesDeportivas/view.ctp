<div class="instalacionesDeportivas view">
<h2><?php echo __('Instalaciones Deportiva'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instalacionesDeportiva['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $instalacionesDeportiva['Ciudad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deporte'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instalacionesDeportiva['Deporte']['nombre'], array('controller' => 'deportes', 'action' => 'view', $instalacionesDeportiva['Deporte']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Instalacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instalacionesDeportiva['TipoInstalacion']['nombre'], array('controller' => 'tipo_instalacions', 'action' => 'view', $instalacionesDeportiva['TipoInstalacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifed'); ?></dt>
		<dd>
			<?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['modifed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instalaciones Deportiva'), array('action' => 'edit', $instalacionesDeportiva['InstalacionesDeportiva']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instalaciones Deportiva'), array('action' => 'delete', $instalacionesDeportiva['InstalacionesDeportiva']['id']), array(), __('Are you sure you want to delete # %s?', $instalacionesDeportiva['InstalacionesDeportiva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instalaciones Deportivas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instalaciones Deportiva'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deportes'), array('controller' => 'deportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deporte'), array('controller' => 'deportes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Instalacions'), array('controller' => 'tipo_instalacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Instalacion'), array('controller' => 'tipo_instalacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
