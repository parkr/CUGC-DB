<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Account'), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Gifts'), array('controller' => 'gifts', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add')); ?>
		</li>
		
	</ul>
</div>
<div class="accounts view">
<h2><?php  echo __('Account');?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($account['Account']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Number'); ?></dt>
		<dd>
			<?php echo h($account['Account']['account_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Gifts'); ?></dt>
		<dd>
			<?php 
				$total=0; 
				foreach($account['Gift'] as $gift){
					$total += $gift['amount'];
				}
				echo $this->Number->currency($total);
			?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Gifts');?></h3>
	<?php if (!empty($account['Gift'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Member Id'); ?></th>
		<th><?php echo __('Account'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['Gift'] as $gift): ?>
		<tr>
			<td><?php echo $gift['member_id'];?></td>
			<td><?php echo $account['Account']['name'];?></td>
			<td><?php echo $gift['date'];?></td>
			<td><?php echo $gift['amount'];?></td>
			<td><?php echo $gift['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'gifts', 'action' => 'view', $gift['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'gifts', 'action' => 'edit', $gift['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gifts', 'action' => 'delete', $gift['id']), null, __('Are you sure you want to delete # %s?', $gift['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
