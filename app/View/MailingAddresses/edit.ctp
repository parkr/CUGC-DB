<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MailingAddress.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MailingAddress.id'))); ?>
			<?php echo $this->Html->link(__('List Mailing Addresses'), array('action' => 'index'));?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="mailingAddresses form">
<?php echo $this->Form->create('MailingAddress');?>
	<fieldset>
		<legend><?php echo __('Edit Mailing Address'); ?></legend>
	<?php
		echo $this->Form->input('id');
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