<div class="officerPositions index">
	<h2><?php echo __('Officer Positions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('member_id');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('years');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($officerPositions as $officerPosition): ?>
	<tr>
		<td><?php echo h($officerPosition['OfficerPosition']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($officerPosition['Member']['name'], array('controller' => 'members', 'action' => 'view', $officerPosition['Member']['id'])); ?>
		</td>
		<td><?php echo h($officerPosition['OfficerPosition']['position']); ?>&nbsp;</td>
		<td><?php echo h($officerPosition['OfficerPosition']['years']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $officerPosition['OfficerPosition']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $officerPosition['OfficerPosition']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $officerPosition['OfficerPosition']['id']), null, __('Are you sure you want to delete # %s?', $officerPosition['OfficerPosition']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Officer Position'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
