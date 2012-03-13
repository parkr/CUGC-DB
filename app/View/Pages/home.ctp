<?php
$links = array(
	$this->Html->link('Members', array('controller' => 'members')),
	$this->Html->link('Gifts', array('controller' => 'gifts'))
);
if(AuthComponent::user('id') > 0){
	$links[] = $this->Html->link('Account', array('controller' => 'users', 'action' => 'edit', AuthComponent::user('id')), array('data-icon' => 'gear'));
}
echo $this->Html->nestedList($links, array(
	'data-role' => 'listview',
	'id' => 'nodes',
	'data-inset' => 'true',
	'data-theme' => 'a'
));
?>
