<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?>
			<?php echo $this->Html->link(__('Simple Add'), array('action' => 'simple_add'));?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Graduation Year'), array('controller' => 'graduation_years', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Mailing Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Mailing Address'), array('controller' => 'mailing_addresses', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Officer Positions'), array('controller' => 'officer_positions', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Officer Position'), array('controller' => 'officer_positions', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Phone Numbers'), array('controller' => 'phone_numbers', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Phone Number'), array('controller' => 'phone_numbers', 'action' => 'add')); ?>
		</li>
</div>
<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		
		echo $this->Form->input('Email.email');
		echo $this->Html->tag('div', 'Comma-separated emails', array('class' => 'note'));
		
		echo $this->Form->input('PhoneNumber.phone_number');
		echo $this->Html->tag('div', 'Comma-separated phone numbers', array('class' => 'note'));
		
		echo $this->Html->tag('h4', 'Graduation Years');
		echo $this->Form->input('GraduationYear.degree');
		echo $this->Form->input('GraduationYear.year', array('type' => 'number', 'name' => 'data[GraduationYear][year]'));
		echo $this->Html->tag('div', 'Year of graduation', array('class' => 'note'));
		echo $this->Html->tag('div', 'Comma-separated degrees and years that correspond to each other (vertically)', array('class' => 'note'));
		
		echo $this->Html->tag('h4', 'Mailing Addresses');
		echo $this->Form->input('MailingAddress.street');
		echo $this->Form->input('MailingAddress.city');
		echo $this->Form->input('MailingAddress.zip_code', array('type' => 'text'));
		echo $this->Form->input('MailingAddress.greater_city');
		echo $this->Form->input('MailingAddress.state');
		echo $this->Html->tag('div', 'SEMI-COLON-SEPARATED values that correspond to each other (vertically)', array('class' => 'note'));
		
		echo $this->Html->tag('h4', 'Occupations');
		echo $this->Form->input('Occupation.position');
		echo $this->Form->input('Occupation.company');
		echo $this->Html->tag('div', 'Comma-separated values that correspond to each other (vertically)', array('class' => 'note'));
		
		echo $this->Html->tag('h4', 'Officer Positions');
		echo $this->Form->input('OfficerPosition.position');
		echo $this->Form->input('OfficerPosition.years');
		echo $this->Html->tag('div', 'Comma-separated values that correspond to each other (vertically)', array('class' => 'note'));
		
		echo $this->Form->input('things_to_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>