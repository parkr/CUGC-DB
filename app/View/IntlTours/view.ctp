<div class="intlTours view">
<h2><?php  echo __('Intl Tour');?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($intlTour['IntlTour']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($intlTour['IntlTour']['year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Intl Tour'), array('action' => 'edit', $intlTour['IntlTour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Intl Tour'), array('action' => 'delete', $intlTour['IntlTour']['id']), null, __('Are you sure you want to delete # %s?', $intlTour['IntlTour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Intl Tours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intl Tour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Members');?></h3>
	<?php if (!empty($intlTour['Member'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Things To Note'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($intlTour['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['first_name'];?></td>
			<td><?php echo $member['last_name'];?></td>
			<td><?php echo $member['things_to_note'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
