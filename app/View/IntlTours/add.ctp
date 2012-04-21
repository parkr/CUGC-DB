<div class="intlTours form">
<?php echo $this->Form->create('IntlTour');?>
	<fieldset>
		<legend><?php echo __('Add Intl Tour'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('year');
		echo $this->Form->input('Member');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Intl Tours'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
