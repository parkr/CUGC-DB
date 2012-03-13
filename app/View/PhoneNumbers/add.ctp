<div class="phoneNumbers form">
<?php echo $this->Form->create('PhoneNumber');?>
	<fieldset>
		<legend><?php echo __('Add Phone Number'); ?></legend>
	<?php
		echo $this->Form->input('member_id');
		echo $this->Form->input('phone_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Phone Numbers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
