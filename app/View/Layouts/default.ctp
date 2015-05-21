<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Stages TIM - <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<?php echo $this->element('header'); ?>
	</header>
	<div id="container">

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	</div>
	
	<footer>
		<?php echo $this->element('footer'); ?>
	</footer>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
    <script type="text/javascript">
  	if (window.jQuery === undefined) {
  		var script_tag = document.createElement('script');
  		    script_tag.setAttribute("type", "text/javascript");
  		    script_tag.setAttribute("src", "/js/libs/jquery-1.8.0.min.js");
  		(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
  	}
    </script>

	<?php echo $this->Html->script('/js/libs/jquery.validate'); ?> 
  	<?php echo $this->Html->script('/js/libs/localization/messages_fr'); ?> 
	<?php echo $this->Html->script('/js/script'); ?> 
	<?php echo $this->fetch('script'); ?>

</body>
</html>
