<div class="occupations view">
<h2><?php  echo __('Occupation');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($occupation['Occupation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($occupation['Member']['name'], array('controller' => 'members', 'action' => 'view', $occupation['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($occupation['Industry']['name'], array('controller' => 'industries', 'action' => 'view', $occupation['Industry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($occupation['Occupation']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($occupation['Occupation']['company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Year'); ?></dt>
		<dd>
			<?php echo h($occupation['Occupation']['start_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Year'); ?></dt>
		<dd>
			<?php echo h($occupation['Occupation']['end_year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Occupation'), array('action' => 'edit', $occupation['Occupation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Occupation'), array('action' => 'delete', $occupation['Occupation']['id']), null, __('Are you sure you want to delete # %s?', $occupation['Occupation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Occupations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occupation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
