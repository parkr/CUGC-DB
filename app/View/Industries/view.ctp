<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Industry'), array('action' => 'edit', $industry['Industry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Industry'), array('action' => 'delete', $industry['Industry']['id']), null, __('Are you sure you want to delete # %s?', $industry['Industry']['id'])); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Industries'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Industry'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="industries view">
<h2><?php  echo __('Industry');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Occupations');?></h3>
	<?php if (!empty($industry['Occupation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Member Id'); ?></th>
		<th><?php echo __('Industry Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('Start Year'); ?></th>
		<th><?php echo __('End Year'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($industry['Occupation'] as $occupation): ?>
		<tr>
			<td><?php echo $occupation['id'];?></td>
			<td><?php echo $occupation['member_id'];?></td>
			<td><?php echo $occupation['industry_id'];?></td>
			<td><?php echo $occupation['position'];?></td>
			<td><?php echo $occupation['company'];?></td>
			<td><?php echo $occupation['start_year'];?></td>
			<td><?php echo $occupation['end_year'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'occupations', 'action' => 'view', $occupation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'occupations', 'action' => 'edit', $occupation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'occupations', 'action' => 'delete', $occupation['id']), null, __('Are you sure you want to delete # %s?', $occupation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
