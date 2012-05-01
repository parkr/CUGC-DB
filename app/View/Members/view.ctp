<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Gifts'), array('controller' => 'gifts', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Graduation Year'), array('controller' => 'graduation_years', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Address'), array('controller' => 'mailing_addresses', 'action' => 'add')); ?>
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
	</ul>
</div>
<div class="members view">
<h2><?php  echo __('Member');?></h2>
	<dl>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($member['Member']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Initial'); ?></dt>
		<dd>
			<?php echo h($member['Member']['middle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suffix'); ?></dt>
		<dd>
			<?php echo h($member['Member']['suffix']); ?>
			&nbsp;
		</dd>
		<?php
			$giving = array( 'cumulative' => 0 );
			foreach($accounts as $acct){ $giving[$acct['Account']['name']] = 0; }
			foreach($member['Gift'] as $gift){
				$giving['cumulative'] += $gift['amount'];
				if(!isset($giving[$gift['Account']['name']])) { $giving[$gift['Account']['name']] = 0; }
				$giving[$gift['Account']['name']] += $gift['amount'];
			}
		?>
		<dt><?php echo __('Cumulative Giving'); ?></dt>
		<dd>
			<?php echo $this->Number->currency($giving['cumulative']); ?>
			&nbsp;
		</dd>
		<?php foreach($accounts as $account): ?>
		<dt><?php echo __('Giving to '.$account['Account']['name']); ?></dt>
		<dd>
			<?php echo $this->Number->currency($giving[$account['Account']['name']]); ?>
			&nbsp;
		</dd>	
		<?php endforeach; ?>
		<dt><?php echo __('Things To Note'); ?></dt>
		<dd>
			<?php echo h($member['Member']['things_to_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Living?'); ?></dt>
		<dd>
			<?php echo $this->Html->image(($member['Member']['is_living'] == 1) ? "https://github.com/images/modules/ajax/success.png" : "red_x.png"); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($member['Email'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Email'] as $email): ?>
		<tr>
			<td><?php echo $email['email'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $email['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Gifts');?></h3>
	<?php if (!empty($member['Gift'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Member Id'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Gift'] as $gift): ?>
		<tr>
			<td><?php echo $gift['id'];?></td>
			<td><?php echo $gift['member_id'];?></td>
			<td><?php echo $gift['account_id'];?></td>
			<td><?php echo $gift['date'];?></td>
			<td><?php echo $this->Number->currency($gift['amount']);?></td>
			<td><?php echo $gift['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'gifts', 'action' => 'view', $gift['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'gifts', 'action' => 'edit', $gift['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gifts', 'action' => 'delete', $gift['id']), null, __('Are you sure you want to delete # %s?', $gift['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gift'), array('controller' => 'gifts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Graduation Years');?></h3>
	<?php if (!empty($member['GraduationYear'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Degree'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['GraduationYear'] as $graduationYear): ?>
		<tr>
			<td><?php echo $graduationYear['id'];?></td>
			<td><?php echo $graduationYear['degree'];?></td>
			<td><?php echo $graduationYear['year'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'graduation_years', 'action' => 'view', $graduationYear['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'graduation_years', 'action' => 'edit', $graduationYear['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'graduation_years', 'action' => 'delete', $graduationYear['id']), null, __('Are you sure you want to delete # %s?', $graduationYear['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Graduation Year'), array('controller' => 'graduation_years', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mailing Addresses');?></h3>
	<?php if (!empty($member['MailingAddress'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Greater City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['MailingAddress'] as $mailingAddress): ?>
		<tr>
			<td><?php echo $mailingAddress['street'];?></td>
			<td><?php echo $mailingAddress['city'];?></td>
			<td><?php echo $mailingAddress['greater_city'];?></td>
			<td><?php echo $mailingAddress['state'];?></td>
			<td><?php echo $mailingAddress['zip_code'];?></td>
			<td><?php echo $mailingAddress['country'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mailing_addresses', 'action' => 'view', $mailingAddress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mailing_addresses', 'action' => 'edit', $mailingAddress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mailing_addresses', 'action' => 'delete', $mailingAddress['id']), null, __('Are you sure you want to delete # %s?', $mailingAddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mailing Address'), array('controller' => 'mailing_addresses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Occupations');?></h3>
	<?php if (!empty($member['Occupation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Industry Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('Start Year'); ?></th>
		<th><?php echo __('End Year'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Occupation'] as $occupation): ?>
		<tr>
			<td><?php echo $occupation['industry_id'];?></td>
			<td><?php echo $occupation['position'];?></td>
			<td><?php echo $occupation['company'];?></td>
			<td><?php echo $occupation['start_year'];?></td>
			<td><?php echo $occupation['end_year'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'occupations', 'action' => 'view', $occupation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'occupations', 'action' => 'edit', $occupation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'occupations', 'action' => 'delete', $occupation['id']), null, __('Are you sure you want to delete # %s?', $occupation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Occupation'), array('controller' => 'occupations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Officer Positions');?></h3>
	<?php if (!empty($member['OfficerPosition'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Years'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['OfficerPosition'] as $officerPosition): ?>
		<tr>
			<td><?php echo $officerPosition['position'];?></td>
			<td><?php echo $officerPosition['years'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'officer_positions', 'action' => 'view', $officerPosition['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'officer_positions', 'action' => 'edit', $officerPosition['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'officer_positions', 'action' => 'delete', $officerPosition['id']), null, __('Are you sure you want to delete # %s?', $officerPosition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Officer Position'), array('controller' => 'officer_positions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Phone Numbers');?></h3>
	<?php if (!empty($member['PhoneNumber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Phone Number'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['PhoneNumber'] as $phoneNumber): ?>
		<tr>
			<td><?php echo $phoneNumber['phone_number'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'phone_numbers', 'action' => 'view', $phoneNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'phone_numbers', 'action' => 'edit', $phoneNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'phone_numbers', 'action' => 'delete', $phoneNumber['id']), null, __('Are you sure you want to delete # %s?', $phoneNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Phone Number'), array('controller' => 'phone_numbers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
