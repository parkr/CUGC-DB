<div class="occupations index">
	<h2><?php echo __('Occupations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('member_id');?></th>
			<th><?php echo $this->Paginator->sort('industry_id');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('company');?></th>
			<th><?php echo $this->Paginator->sort('start_year');?></th>
			<th><?php echo $this->Paginator->sort('end_year');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($occupations as $occupation): ?>
	<tr>
		<td><?php echo h($occupation['Occupation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($occupation['Member']['name'], array('controller' => 'members', 'action' => 'view', $occupation['Member']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($occupation['Industry']['name'], array('controller' => 'industries', 'action' => 'view', $occupation['Industry']['id'])); ?>
		</td>
		<td><?php echo h($occupation['Occupation']['position']); ?>&nbsp;</td>
		<td><?php echo h($occupation['Occupation']['company']); ?>&nbsp;</td>
		<td><?php echo h($occupation['Occupation']['start_year']); ?>&nbsp;</td>
		<td><?php echo h($occupation['Occupation']['end_year']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $occupation['Occupation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $occupation['Occupation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $occupation['Occupation']['id']), null, __('Are you sure you want to delete # %s?', $occupation['Occupation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Occupation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
