<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Form->postLink(__('Delete Mailing Address'), array('action' => 'delete', $mailingAddress['MailingAddress']['id']), null, __('Are you sure you want to delete # %s?', $mailingAddress['MailingAddress']['id'])); ?>
			<?php echo $this->Html->link(__('Edit Mailing Address'), array('action' => 'edit', $mailingAddress['MailingAddress']['id'])); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Mailing Addresses'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Mailing Address'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="mailingAddresses view">
<h2><?php  echo __('Mailing Address');?></h2>
	<dl>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailingAddress['Member']['name'], array('controller' => 'members', 'action' => 'view', $mailingAddress['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Greater City'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['greater_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($mailingAddress['MailingAddress']['country']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
