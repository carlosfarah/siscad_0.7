<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Fundaep</title>
		<?php echo $html->meta('keywords', 'Ajax Domain Search, Web 2.0 Domain Generator, Web 2.0 Color Generator, Brain Storming');?>
		<?php echo $html->css('web20_styles');?>
		<?php echo $html->css($frameworkStyles);?>
		<?php echo $html->css($pluginStyles);?>
		<?php echo $scripts_for_layout ?>
	</head>
	<body>
		<div class="header">
			<h3><?php echo $headerTitle; ?><!--Brainstorming Tools For the Web--></h3>
			<div class="menu"><?=$html->link('Color Picker', array('controller'=>'colorpalettes', 'action'=>'index'));?></div>
			<div class="menu_selected"><?=$html->link('Domain Name', array('controller'=>'domainnames', 'action'=>'index'));?></div>
		</div>
		<div id="page">
			<div id="leftSideTop">
			<?php 
			if (isset($showLayoutContent)) {
				echo $content_for_layout; 
			}
			?>
			</div>
			<div id="sideBar">
				  <?php echo $this->element($sideBar); ?>
			</div>
			<div id="leftSideBot">
				<?php echo $this->element($footerAds); ?>	
			</div>
		</div>
	</body>
</html>
