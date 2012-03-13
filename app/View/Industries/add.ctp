<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Industries'), array('action' => 'index'));?></li>
		<li>
			<?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="industries form">
<?php echo $this->Form->create('Industry');?>
	<fieldset>
		<legend><?php echo __('Add Industry'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>