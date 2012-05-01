<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?>
			<?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('List Graduation Years'), array('controller' => 'graduation_years', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Mailing Addresses'), array('controller' => 'mailing_addresses', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('List Occupations'), array('controller' => 'occupations', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Officer Positions'), array('controller' => 'officer_positions', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('List Phone Numbers'), array('controller' => 'phone_numbers', 'action' => 'index')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List International Tours'), array('controller' => 'intl_tours', 'action' => 'index')); ?>
		</li>
	</ul>
</div>
<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_initial');
		echo $this->Form->input('last_name');
		echo $this->Form->input('is_living', array('checked' => "checked"));
		echo $this->Form->input('things_to_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>