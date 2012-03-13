<div class="graduationYears view">
<h2><?php  echo __('Graduation Year');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($graduationYear['GraduationYear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($graduationYear['Member']['name'], array('controller' => 'members', 'action' => 'view', $graduationYear['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degree'); ?></dt>
		<dd>
			<?php echo h($graduationYear['GraduationYear']['degree']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($graduationYear['GraduationYear']['year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Graduation Year'), array('action' => 'edit', $graduationYear['GraduationYear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Graduation Year'), array('action' => 'delete', $graduationYear['GraduationYear']['id']), null, __('Are you sure you want to delete # %s?', $graduationYear['GraduationYear']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Graduation Years'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Graduation Year'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
