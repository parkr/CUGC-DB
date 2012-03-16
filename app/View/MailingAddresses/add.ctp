<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Mailing Addresses'), array('action' => 'index'));?></li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="mailingAddresses form">
<?php echo $this->Form->create('MailingAddress');?>
	<fieldset>
		<legend><?php echo __('Add Mailing Address'); ?></legend>
	<?php
		echo $this->Form->input('member_id');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('greater_city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
