<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Phone Number'), array('action' => 'edit', $phoneNumber['PhoneNumber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Phone Number'), array('action' => 'delete', $phoneNumber['PhoneNumber']['id']), null, __('Are you sure you want to delete # %s?', $phoneNumber['PhoneNumber']['id'])); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Phone Numbers'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Phone Number'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="phoneNumbers view">
<h2><?php  echo __('Phone Number');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phoneNumber['Member']['name'], array('controller' => 'members', 'action' => 'view', $phoneNumber['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($phoneNumber['PhoneNumber']['phone_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>