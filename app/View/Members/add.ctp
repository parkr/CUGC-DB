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
		echo $this->Form->input('first_name')."\n";
		echo $this->Form->input('last_name')."\n"."\n";
		
		echo $this->Html->tag('div', null, array('id' => 'emails', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Form->input('Email.0.email')."\n";
		echo $this->Html->tag('a', 'Add Email', array('class' => 'add_field', 'id' => 'add_email', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Html->tag('div', null, array('id' => 'phone_numbers', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Form->input('PhoneNumber.0.phone_number')."\n";
		echo $this->Html->tag('a', 'Add Phone Number', array('class' => 'add_field', 'id' => 'add_phone_number', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Html->tag('div', null, array('id' => 'graduation_years', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Graduation Years')."\n";
		echo $this->Form->input('GraduationYear.0.degree')."\n";
		echo $this->Form->input('GraduationYear.0.year', array('type' => 'number', 'name' => 'data[GraduationYear][year]'))."\n";
		echo $this->Html->tag('div', 'Year of graduation', array('class' => 'note'))."\n";
		echo $this->Html->tag('a', 'Add Graduation', array('class' => 'add_field', 'id' => 'add_graduation_year', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Html->tag('div', null, array('id' => 'mailing_addresses', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Mailing Addresses')."\n";
		echo $this->Form->input('MailingAddress.0.street', array('type' => 'text'))."\n";
		echo $this->Form->input('MailingAddress.0.city')."\n";
		echo $this->Form->input('MailingAddress.0.state')."\n";
		echo $this->Form->input('MailingAddress.0.zip_code', array('type' => 'text'))."\n";
		echo $this->Form->input('MailingAddress.0.greater_city')."\n";
		echo $this->Html->tag('a', 'Add Mailing Address', array('class' => 'add_field', 'id' => 'add_mailing_address', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Html->tag('div', null, array('id' => 'occupations', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Occupations')."\n";
		echo $this->Form->input('Occupation.0.position')."\n";
		echo $this->Form->input('Occupation.0.company')."\n";
		echo $this->Html->tag('a', 'Add Occupation', array('class' => 'add_field', 'id' => 'add_occupation', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Html->tag('div', null, array('id' => 'officer_positions', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Officer Positions')."\n";
		echo $this->Form->input('OfficerPosition.0.position')."\n";
		echo $this->Form->input('OfficerPosition.0.years')."\n";
		echo $this->Html->tag('a', 'Add Officer Position', array('class' => 'add_field', 'id' => 'add_officer_position', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Form->input('things_to_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<?php echo $this->Html->script('mass_add_helpers.js'); ?>