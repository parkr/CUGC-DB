<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mailing Address'), array('action' => 'add')); ?></li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="mailingAddresses index">
	<h2><?php echo __('Mailing Addresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('member_id');?></th>
			<th><?php echo $this->Paginator->sort('mailing_address');?></th>
			<th><?php echo $this->Paginator->sort('greater_city');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($mailingAddresses as $mailingAddress): ?>
	<tr>
		<td><?php echo h($mailingAddress['MailingAddress']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mailingAddress['Member']['name'], array('controller' => 'members', 'action' => 'view', $mailingAddress['Member']['id'])); ?>
		</td>
		<td><?php echo h($mailingAddress['MailingAddress']['mailing_address']); ?>&nbsp;</td>
		<td><?php echo h($mailingAddress['MailingAddress']['greater_city']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mailingAddress['MailingAddress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mailingAddress['MailingAddress']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mailingAddress['MailingAddress']['id']), null, __('Are you sure you want to delete # %s?', $mailingAddress['MailingAddress']['id'])); ?>
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
