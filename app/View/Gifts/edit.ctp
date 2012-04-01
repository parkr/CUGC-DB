<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Gift.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Gift.id'))); ?>
			<?php echo $this->Html->link(__('List Gifts'), array('action' => 'index'));?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="gifts form">
<?php echo $this->Form->create('Gift');?>
	<fieldset>
		<legend><?php echo __('Edit Gift'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member_id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('date');
		echo $this->Form->input('amount');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
