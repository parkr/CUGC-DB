<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index'));?></li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="emails form">
<?php echo $this->Form->create('Email');?>
	<fieldset>
		<legend><?php echo __('Add Email'); ?></legend>
	<?php
		echo $this->Form->input('member_id');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>