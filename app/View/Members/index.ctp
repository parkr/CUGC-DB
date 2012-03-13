<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo __("Emails"); ?></th>
			<th><?php echo __("Graduation Years"); ?></th>
			<th><?php echo __("Mailing Addresses"); ?></th>
			<th><?php echo __("Occupations"); ?></th>
			<th><?php echo __("Officer Positions"); ?></th>
			<th><?php echo __("Phone Number"); ?></th>
			<th><?php echo __('Things to Note');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['last_name']); ?>&nbsp;</td>
		<td>
			<?php
				$entities = array();
				foreach($member['Email'] as $entity){
					$entities[] = $entity['email'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td>
			<?php
				$entities = array();
				foreach($member['GraduationYear'] as $entity){
					$entities[] = $entity['degree_year'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td>
			<?php
				$entities = array();
				foreach($member['MailingAddress'] as $entity){
					$entities[] = nl2br($entity['mailing_address']);
				}
				echo implode("<br><br>", $entities);
			?>&nbsp;
		</td>
		<td>
			<?php
				$entities = array();
				foreach($member['Occupation'] as $entity){
					$entities[] = $entity['occupation'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td>
			<?php
				$entities = array();
				foreach($member['OfficerPosition'] as $entity){
					$entities[] = $entity['officer_position'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td>
			<?php
				$entities = array();
				foreach($member['PhoneNumber'] as $entity){
					$entities[] = $entity['phone_number'];
				}
				echo implode("<br>", $entities);
			?>&nbsp;
		</td>
		<td><?php echo h($member['Member']['things_to_note']); ?>&nbsp;</td>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gifts'), array('controller' => 'gifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Graduation Year'), array('controller' => 'graduation_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailing Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailing Address'), array('controller' => 'mailing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Officer Positions'), array('controller' => 'officer_positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Officer Position'), array('controller' => 'officer_positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Phone Numbers'), array('controller' => 'phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone Number'), array('controller' => 'phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
