<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('things_to_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gifts'), array('controller' => 'gifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Graduation Year'), array('controller' => 'graduation_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailing Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailing Address'), array('controller' => 'mailing_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Officer Positions'), array('controller' => 'officer_positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Officer Position'), array('controller' => 'officer_positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Phone Numbers'), array('controller' => 'phone_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone Number'), array('controller' => 'phone_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>