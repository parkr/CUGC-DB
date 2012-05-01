<div class="members form">
<?php echo $this->Form->create('Member', array('enctype' => "multipart/form-data"));?>
	<fieldset>
		<legend><?php echo __('Upload Member & Gifts'); ?></legend>
	<?php
		echo $this->Form->input('import_file', array('type' => 'file'));
	?>
	</fieldset>
	<div class="note">
		Import a CSV file whose columns conform to <?php echo $this->Html->link('this sample document', '/files/import/sample.csv'); ?>.
	</div>
<?php echo $this->Form->end(__('Submit'));?>
</div>