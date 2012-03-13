<div class="mailingAddresses view">
<h2><?php  echo __('Mailing Address');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailingAddress['Member']['name'], array('controller' => 'members', 'action' => 'view', $mailingAddress['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mailing Address'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['mailing_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Greater City'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['greater_city']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mailing Address'), array('action' => 'edit', $mailingAddress['MailingAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mailing Address'), array('action' => 'delete', $mailingAddress['MailingAddress']['id']), null, __('Are you sure you want to delete # %s?', $mailingAddress['MailingAddress']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailing Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailing Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
