<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('List Occupations'), array('action' => 'index'));?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Occupation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Occupation.id'))); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> 
			<?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?>
		</li>
		
	</ul>
</div>
<div class="occupations form">
<?php echo $this->Form->create('Occupation');?>
	<fieldset>
		<legend><?php echo __('Edit Occupation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('industry_id');
		echo $this->Form->input('position');
		echo $this->Form->input('company');
		echo $this->Form->input('start_year', array('type' => 'number'));
		echo $this->Form->input('end_year', array('type' => 'number'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
