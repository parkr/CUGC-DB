<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GraduationYear.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GraduationYear.id'))); ?>
			<?php echo $this->Html->link(__('List Graduation Years'), array('action' => 'index'));?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="graduationYears form">
<?php echo $this->Form->create('GraduationYear');?>
	<fieldset>
		<legend><?php echo __('Edit Graduation Year'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('degree');
		echo $this->Form->input('year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>