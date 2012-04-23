<div id="section_listing" class="actions">
<?php

echo $this->Html->tag('h2', 'Select a section to edit:');

$links = array(
	$this->Html->link('Members',	array('controller' => 'members')),
	$this->Html->link('Gifts',	array('controller' => 'gifts'))
	
);
if(AuthComponent::user('id') > 0){
	$links[] = $this->Html->link('Edit My Account', array('controller' => 'users', 'action' => 'edit', AuthComponent::user('id')), array('data-icon' => 'gear'));
}
echo $this->Html->nestedList($links, array(
	'class' => 'routing'
));

echo "<br />";
echo $this->Html->tag('h2', 'Sub-sections:');

$sub_section_links = array();
$sub_sections = array(
	'emails',
	'phone_numbers',
	'mailing_addresses',
	'graduation_years',
	'officer_positions',
	'occupations',
);
foreach($sub_sections as $ss){
	$sub_section_links[] = $this->Html->link(Inflector::humanize($ss), array('controller' => $ss));
}
echo $this->Html->nestedList($sub_section_links, array(
	'class' => 'routing'
));

?>
</div>