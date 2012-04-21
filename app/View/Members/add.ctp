<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?>
			<?php echo $this->Html->link(__('Simple Add'), array('action' => 'simple_add'));?>
		</li>
</div>
<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Add Member'); ?></legend>
	<?php
	
		$indices = array(
			'emails' => 0,
			'graduation_years' => 0,
			'mailing_addresses' => 0,
			'occupations' => 0,
			'officer_positions' => 0,
			'phone_numbers' => 0
		);
	
		echo $this->Form->input('first_name')."\n";
		echo $this->Form->input('last_name')."\n"."\n";
		
		################################################################################################################################################
		############################################################### Emails #########################################################################
		################################################################################################################################################
		echo $this->Html->tag('div', null, array('id' => 'emails', 'class' => 'sub_field_bunch'))."\n";
		if($this->Form->data && $this->Form->data['Email'] && count($this->Form->data['Email']) > 0){
			$e = 0;
			for(; $e<count($this->Form->data['Email']); $e++){
				echo $this->Form->input("Email.$e.email", array('label' => 'Email #'.($e+1)))."\n";
			}
			$indices['emails'] = ($e-1);
		}else{
			echo $this->Form->input('Email.0.email')."\n";
		}
		echo $this->Html->tag('a', 'Add Email', array('class' => 'add_field', 'id' => 'add_email', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		################################################################################################################################################
		############################################################ Phone Numbers #####################################################################
		################################################################################################################################################
		echo $this->Html->tag('div', null, array('id' => 'phone_numbers', 'class' => 'sub_field_bunch'))."\n";
		if($this->Form->data && $this->Form->data['PhoneNumber'] && count($this->Form->data['PhoneNumber']) > 0){
			$e = 0;
			for(; $e<count($this->Form->data['PhoneNumber']); $e++){
				echo $this->Form->input("PhoneNumber.$e.phone_number", array('label' => 'Phone Number #'.($e+1)))."\n";
			}
			$indices['phone_numbers'] = ($e-1);
		}else{
			echo $this->Form->input('PhoneNumber.0.phone_number')."\n";
		}
		echo $this->Html->tag('a', 'Add Phone Number', array('class' => 'add_field', 'id' => 'add_phone_number', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		################################################################################################################################################
		########################################################### Graduation Years ###################################################################
		################################################################################################################################################
		echo $this->Html->tag('div', null, array('id' => 'graduation_years', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Graduation Years')."\n";
		if($this->Form->data && $this->Form->data['GraduationYear'] && count($this->Form->data['GraduationYear']) > 0){
			$e = 0;
			for(; $e<count($this->Form->data['GraduationYear']); $e++){
				echo $this->Form->input("GraduationYear.$e.degree", array('label' => 'Degree #'.($e+1)))."\n";
				echo $this->Form->input("GraduationYear.$e.year", array('type' => 'number', 'name' => "data[GraduationYear][$e][year]", 'label' => 'Year #'.($e+1)))."\n";
				echo $this->Html->tag('div', 'Year of graduation', array('class' => 'note'))."\n";
			}
			$indices['graduation_years'] = ($e-1);
		}else{
			echo $this->Form->input('GraduationYear.0.degree')."\n";
			echo $this->Form->input('GraduationYear.0.year', array('type' => 'number', 'name' => 'data[GraduationYear][0][year]'))."\n";
			echo $this->Html->tag('div', 'Year of graduation', array('class' => 'note'))."\n";
		}
		echo $this->Html->tag('a', 'Add Graduation', array('class' => 'add_field', 'id' => 'add_graduation_year', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		################################################################################################################################################
		########################################################## Mailing Addresses ###################################################################
		################################################################################################################################################
		echo $this->Html->tag('div', null, array('id' => 'mailing_addresses', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Mailing Addresses')."\n";
		if($this->Form->data && $this->Form->data['MailingAddress'] && count($this->Form->data['MailingAddress']) > 0){
			$e = 0;
			for(; $e<count($this->Form->data['MailingAddress']); $e++){
				echo $this->Form->input("MailingAddress.$e.street", array('type' => 'text', 'label' => 'Street #'.($e+1)))."\n";
				echo $this->Form->input("MailingAddress.$e.city", array('label' => 'City #'.($e+1)))."\n";
				echo $this->Form->input("MailingAddress.$e.state", array('label' => 'State #'.($e+1)))."\n";
				echo $this->Form->input("MailingAddress.$e.zip_code", array('type' => 'text', 'label' => 'Zip Code #'.($e+1)))."\n";
				echo $this->Form->input("MailingAddress.$e.greater_city", array('label' => 'Greater City #'.($e+1)))."\n";
			}
			$indices['mailing_addresses'] = ($e-1);
		}else{
			echo $this->Form->input('MailingAddress.0.street', array('type' => 'text'))."\n";
			echo $this->Form->input('MailingAddress.0.city')."\n";
			echo $this->Form->input('MailingAddress.0.state')."\n";
			echo $this->Form->input('MailingAddress.0.zip_code', array('type' => 'text'))."\n";
			echo $this->Form->input('MailingAddress.0.greater_city')."\n";
		}
		echo $this->Html->tag('a', 'Add Mailing Address', array('class' => 'add_field', 'id' => 'add_mailing_address', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		################################################################################################################################################
		############################################################# Occupations ######################################################################
		################################################################################################################################################
		echo $this->Html->tag('div', null, array('id' => 'occupations', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Occupations')."\n";
		if($this->Form->data && $this->Form->data['Occupation'] && count($this->Form->data['Occupation']) > 0){
			$e = 0;
			for(; $e<count($this->Form->data['Occupation']); $e++){
				echo $this->Form->input("Occupation.$e.position", array('label' => 'Position #'.($e+1)))."\n";
				echo $this->Form->input("Occupation.$e.company", array('label' => 'Company #'.($e+1)))."\n";
			}
			$indices['occupations'] = ($e-1);
		}else{
			echo $this->Form->input('Occupation.0.position')."\n";
			echo $this->Form->input('Occupation.0.company')."\n";
		}
		echo $this->Html->tag('a', 'Add Occupation', array('class' => 'add_field', 'id' => 'add_occupation', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		################################################################################################################################################
		########################################################## Officer Positions ###################################################################
		################################################################################################################################################
		echo $this->Html->tag('div', null, array('id' => 'officer_positions', 'class' => 'sub_field_bunch'))."\n";
		echo $this->Html->tag('h4', 'Officer Positions')."\n";
		if($this->Form->data && $this->Form->data['OfficerPosition'] && count($this->Form->data['OfficerPosition']) > 0){
			$e = 0;
			for(; $e<count($this->Form->data['OfficerPosition']); $e++){
				echo $this->Form->input("OfficerPosition.$e.position", array('label' => 'Position #'.($e+1)))."\n";
				echo $this->Form->input("OfficerPosition.$e.years", array('label' => 'Years #'.($e+1)))."\n";
			}
			$indices['officer_positions'] = ($e-1);
		}else{
			echo $this->Form->input('OfficerPosition.0.position')."\n";
			echo $this->Form->input('OfficerPosition.0.years')."\n";
		}
		echo $this->Html->tag('a', 'Add Officer Position', array('class' => 'add_field', 'id' => 'add_officer_position', 'href' => '#'))."\n";
		echo "</div>"."\n"."\n";
		
		echo $this->Form->input('things_to_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<?php echo $this->Html->script('mass_add_helpers.js'); ?>
<?php echo "<script type='text/javascript'>CUGCDB.indices = ".json_encode($indices)."</script>"; ?>