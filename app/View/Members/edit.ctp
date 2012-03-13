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
<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		
		// List associated values, +1
		for($i=0; $i<count($this->Form->data['Email']); $i++){ echo $this->Form->input("Email.$i.email", array('label' => "Email #".($i+1))); }
		for($i=0; $i<count($this->Form->data['PhoneNumber']); $i++){ echo $this->Form->input("PhoneNumber.$i.phone_number", array('label' => "Phone Number #".($i+1))); }
		for($i=0; $i<count($this->Form->data['MailingAddress']); $i++){
			echo $this->Form->input("MailingAddress.$i.mailing_address", array('label' => "Mailing Address #".($i+1), 'type' => 'text'));
			echo $this->Form->input("MailingAddress.$i.greater_city", array('label' => "Greater City #".($i+1), 'type' => 'text'));
			echo $this->Form->input("MailingAddress.$i.state", array('label' => "State #".($i+1), 'type' => 'text'));
		}
		for($i=0; $i<count($this->Form->data['Occupation']); $i++){
			echo $this->Form->input("Occupation.$i.position", array('label' => "Occupation: Position #".($i+1)));
			echo $this->Form->input("Occupation.$i.company", array('label' => "Occupation: Company #".($i+1)));
		}
		for($i=0; $i<count($this->Form->data['OfficerPosition']); $i++){
			echo $this->Form->input("OfficerPosition.$i.position", array('label' => "Officer Position #".($i+1)));
			echo $this->Form->input("OfficerPosition.$i.years", array('label' => "Officer Years #".($i+1)));
		}
		for($i=0; $i<count($this->Form->data['GraduationYear']); $i++){
			echo $this->Form->input("GraduationYear.$i.degree", array('label' => "Degree #".($i+1)));
			echo $this->Form->input("GraduationYear.$i.year", array('label' => "Graduation Year #".($i+1), 'type' => 'number'));
		}
		
		echo $this->Form->input('things_to_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>