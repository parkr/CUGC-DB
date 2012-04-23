<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('New Intl Tour'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Mailing Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Officer Positions'), array('controller' => 'officer_positions', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('List Phone Numbers'), array('controller' => 'phone_numbers', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List International Tours'), array('controller' => 'intl_tours', 'action' => 'index')); ?>
		</li>
</div>
<div class="intlTours index">
	<h2><?php echo __('Intl Tours');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('year');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($intlTours as $intlTour): ?>
	<tr>
		<td><?php echo h($intlTour['IntlTour']['name']); ?>&nbsp;</td>
		<td><?php echo h($intlTour['IntlTour']['year']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $intlTour['IntlTour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $intlTour['IntlTour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $intlTour['IntlTour']['id']), null, __('Are you sure you want to delete # %s?', $intlTour['IntlTour']['id'])); ?>
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