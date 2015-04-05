<div class="deportes view">
<h2><?php echo __('Deporte'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deporte['Deporte']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($deporte['Deporte']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($deporte['Deporte']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($deporte['Deporte']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deporte'), array('action' => 'edit', $deporte['Deporte']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deporte'), array('action' => 'delete', $deporte['Deporte']['id']), array(), __('Are you sure you want to delete # %s?', $deporte['Deporte']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deportes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deporte'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instalaciones Deportivas'), array('controller' => 'instalaciones_deportivas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instalaciones Deportiva'), array('controller' => 'instalaciones_deportivas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Instalaciones Deportivas'); ?></h3>
	<?php if (!empty($deporte['InstalacionesDeportiva'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Ciudad Id'); ?></th>
		<th><?php echo __('Deporte Id'); ?></th>
		<th><?php echo __('Tipo Instalacion Id'); ?></th>
		<th><?php echo __('Modifed'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($deporte['InstalacionesDeportiva'] as $instalacionesDeportiva): ?>
		<tr>
			<td><?php echo $instalacionesDeportiva['id']; ?></td>
			<td><?php echo $instalacionesDeportiva['nombre']; ?></td>
			<td><?php echo $instalacionesDeportiva['ciudad_id']; ?></td>
			<td><?php echo $instalacionesDeportiva['deporte_id']; ?></td>
			<td><?php echo $instalacionesDeportiva['tipo_instalacion_id']; ?></td>
			<td><?php echo $instalacionesDeportiva['modifed']; ?></td>
			<td><?php echo $instalacionesDeportiva['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instalaciones_deportivas', 'action' => 'view', $instalacionesDeportiva['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instalaciones_deportivas', 'action' => 'edit', $instalacionesDeportiva['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instalaciones_deportivas', 'action' => 'delete', $instalacionesDeportiva['id']), array(), __('Are you sure you want to delete # %s?', $instalacionesDeportiva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instalaciones Deportiva'), array('controller' => 'instalaciones_deportivas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
