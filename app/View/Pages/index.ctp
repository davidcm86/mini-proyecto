<?php echo $this->Html->script('jquery.min.js'); ?>
<?php echo $this->Html->script('polideportivo'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<?php  
echo $this->Form->create('InstalacionesDeportiva');
echo $this->Form->input('ciudad', array(
    'id' => 'autocomplete',
    'placeholder' => 'Empiece a escribir una ciudad'));
echo $this->Form->input('deporte', array(
	'options' => $deportes,
	'empty' => 'Selecciona un deporte'));
echo $this->Form->end('Buscar');
?>

<h2><?php echo __('Resultados búsqueda'); ?></h2>
<?php if (!empty($instalacionesDeportivas)) { ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('nombre'); ?></th>
		<th><?php echo $this->Paginator->sort('instalaciones_libres'); ?></th>
	</tr>
		<?php foreach ($instalacionesDeportivas as $instalacionDeportiva){ ?>
			<tr>
				<td><?php echo h($instalacionDeportiva['InstalacionesDeportiva']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($instalacionDeportiva['InstalacionesDeportiva']['instalaciones_libres']); ?>&nbsp;</td>
			</tr>
		<?php } ?>

	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>
	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<?php } ?>