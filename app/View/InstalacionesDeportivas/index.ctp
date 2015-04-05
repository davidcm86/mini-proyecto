<div class="instalacionesDeportivas index">
	<h2><?php echo __('Instalaciones Deportivas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deporte_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_instalacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($instalacionesDeportivas as $instalacionesDeportiva): ?>
	<tr>
		<td><?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['id']); ?>&nbsp;</td>
		<td><?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instalacionesDeportiva['Ciudad']['ciudad'], array('controller' => 'ciudads', 'action' => 'view', $instalacionesDeportiva['Ciudad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($instalacionesDeportiva['Deporte']['deporte'], array('controller' => 'deportes', 'action' => 'view', $instalacionesDeportiva['Deporte']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($instalacionesDeportiva['TipoInstalacion']['nombre'], array('controller' => 'tipo_instalacions', 'action' => 'view', $instalacionesDeportiva['TipoInstalacion']['id'])); ?>
		</td>
		<td><?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['modifed']); ?>&nbsp;</td>
		<td><?php echo h($instalacionesDeportiva['InstalacionesDeportiva']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instalacionesDeportiva['InstalacionesDeportiva']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instalacionesDeportiva['InstalacionesDeportiva']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instalacionesDeportiva['InstalacionesDeportiva']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $instalacionesDeportiva['InstalacionesDeportiva']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Instalaciones Deportiva'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciudads'), array('controller' => 'ciudads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudad'), array('controller' => 'ciudads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deportes'), array('controller' => 'deportes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deporte'), array('controller' => 'deportes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Instalacions'), array('controller' => 'tipo_instalacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Instalacion'), array('controller' => 'tipo_instalacions', 'action' => 'add')); ?> </li>
	</ul>
</div>
