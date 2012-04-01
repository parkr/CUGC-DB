<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li>
			<?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Graduation Year'), array('controller' => 'graduation_years', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Mailing Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Mailing Address'), array('controller' => 'mailing_addresses', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Officer Positions'), array('controller' => 'officer_positions', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Officer Position'), array('controller' => 'officer_positions', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Phone Numbers'), array('controller' => 'phone_numbers', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Phone Number'), array('controller' => 'phone_numbers', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="first_name"><?php echo $this->Paginator->sort('first_name');?></th>
			<th class="last_name"><?php echo $this->Paginator->sort('last_name');?></th>
			<th class="emails"><?php echo __("Emails"); ?></th>
			<th class="phone_numbers"><?php echo __("Phone Numbers"); ?></th>
			<th class="things_to_note"><?php echo __('Things to Note');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td class="first_name"><?php echo h($member['Member']['first_name']); ?>&nbsp;</td>
		<td class="last_name"><?php echo h($member['Member']['last_name']); ?>&nbsp;</td>
		<td class="emails">
			<?php
				$entities = array();
				foreach($member['Email'] as $entity){
					$entities[] = $entity['email'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td class="phone_numbers">
			<?php
				$entities = array();
				foreach($member['PhoneNumber'] as $entity){
					$entities[] = $entity['phone_number'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td class="things_to_note"><?php echo h($member['Member']['things_to_note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
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