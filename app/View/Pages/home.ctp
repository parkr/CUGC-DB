<div id="section_listing" class="actions">
<?php

echo $this->Html->tag('h1', 'Select a section to edit:');

$links = array(
	$this->Html->link('Members', 	array('controller' => 'members')),
	$this->Html->link('Gifts',		array('controller' => 'gifts'))
	
);
if(AuthComponent::user('id') > 0){
	$links[] = $this->Html->link('Account', array('controller' => 'users', 'action' => 'edit', AuthComponent::user('id')), array('data-icon' => 'gear'));
}
echo $this->Html->nestedList($links, array(
	'id' => 'routing'
));
?>
</div>