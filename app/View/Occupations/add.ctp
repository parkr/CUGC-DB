<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Occupations'), array('action' => 'index'));?></li>
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
		<legend><?php echo __('Add Occupation'); ?></legend>
	<?php
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
