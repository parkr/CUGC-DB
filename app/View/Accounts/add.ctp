<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
		<legend><?php echo __('Add Account'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('account_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Gifts'), array('controller' => 'gifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add')); ?> </li>
	</ul>
</div>
