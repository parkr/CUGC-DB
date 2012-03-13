<?php
$websiteTitle = __('CUGC Alumni & Gift Database');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>:
		<?php echo $websiteTitle; ?>
	</title>
	<?php
		echo $this->Html->meta('icon', '/favicon.png', array('type' => 'image/png'));

		echo $this->Html->css('cugcdb');
		echo $this->Html->script('cugcdb');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($websiteTitle, '/'); ?></h1>
			<?php
				if(AuthComponent::user('id') > 0){
					echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), array('id' => 'login_logout'));
				}else{
					echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), array('id' => 'login_logout'));
				}
			?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					"Website, Database by Parker Moore",
					'http://www.parkermoore.de/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
