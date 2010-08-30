<?php echo $html->docType()."\n"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php echo $html->charset()."\n"; ?>
<title><?php echo $title_for_layout ?></title>
<?php e($html->css('style', array(), array('media'=>'screen'))); ?>
<?php e($html->css('content', array(), array('media'=>'screen'))); ?>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
      <?php echo $html->image("logo.gif", array(
       "alt" => "Brownies", "border" => 0, 
       'url' => array('controller' => 'eventos', 'action' => 'inscricao')
       )); ?>
				<h1><a href="#"><span>SISCAD</span> - FUNDAEP</a></h1>
			</div>
			<div id="menu">
      <?php //echo $this->element($menusuperior); ?>
				<ul>
					<li><?php echo $html->link('Home', '/useres/area_restrita/'); ?></li>
					<li><?php echo $html->link('Registros', '/registros/'); ?></li>
          <li><?php echo $html->link('Eventos', '/eventos/index'); ?></li>
          <li><?php echo $html->link('Logout', '/useres/logout'); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="page">
    <div id="content">
      <div class="post">
          <?php
            echo $content_for_layout;
          ?>
      </div>
    </div>
<!--      <div id="sidebar">
        <?php // echo $this->element($menulateral); ?>
      </div> -->
      <div style="clear: both;">&nbsp;</div>
	</div>

<div id="footer">
	<p>Copyright (c) 2010 SISCAD - FUNDAEP. <br />Desenvolvido por: carlosfarah@gmail.com</a>.</p>
</div>
  
</body>

</html>
