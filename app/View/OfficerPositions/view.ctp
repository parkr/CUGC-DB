<div class="actions" id="navigation">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Officer Position'), array('action' => 'edit', $officerPosition['OfficerPosition']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Officer Position'), array('action' => 'delete', $officerPosition['OfficerPosition']['id']), null, __('Are you sure you want to delete # %s?', $officerPosition['OfficerPosition']['id'])); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Officer Positions'), array('action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Officer Position'), array('action' => 'add')); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?>
			<?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?>
		</li>
		
	</ul>
</div>
<div class="officerPositions view">
<h2><?php  echo __('Officer Position');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($officerPosition['OfficerPosition']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo $this->Html->link($officerPosition['Member']['name'], array('controller' => 'members', 'action' => 'view', $officerPosition['Member']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($officerPosition['OfficerPosition']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Years'); ?></dt>
		<dd>
			<?php echo h($officerPosition['OfficerPosition']['years']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
