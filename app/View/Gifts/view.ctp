<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Gift'), array('action' => 'edit', $gift['Gift']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Gift'), array('action' => 'delete', $gift['Gift']['id']), null, __('Are you sure you want to delete # %s?', $gift['Gift']['id'])); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Gifts'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Gift'), array('action' => 'add')); ?>
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
<div class="gifts view">
<h2><?php  echo __('Gift');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gift['Gift']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gift['Member']['name'], array('controller' => 'members', 'action' => 'view', $gift['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gift['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $gift['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($gift['Gift']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo $this->Number->currency($gift['Gift']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($gift['Gift']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>