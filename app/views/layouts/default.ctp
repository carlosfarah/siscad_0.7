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
      <h1><strong>Sistema de inscrição on line</strong></h1>
<!--
				<ul>
					<li><?php //echo $html->link('Home', '/useres/login/'); ?></li>
					<li><?php //echo $html->link('Inscrever-se', '/eventos/inscricao'); ?></li>
          <li><?php //echo $html->link('Eventos', '/eventos/list_eventos'); ?></li>
          <li><?php //echo $html->link('Login', '/useres/login'); ?></li>
				</ul>
-->
			</div>
      <div id="logo2">
      <?php echo $html->image("logo_ufvjm.gif", array(
       "alt" => "Brownies", "border" => 0
       )); ?>
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
    <?php echo $html->image("cartoes.png", array(
       "alt" => "Brownies", "border" => 0, "align"=>"right",
       'url' => array('controller' => 'eventos', 'action' => 'inscricao')
        )); 
    ?>
    <?php 
       echo $html->image("seguro.png", array(
       "alt" => "Brownies", "border" => 0, "align"=>"left",
       'url' => array('controller' => 'eventos', 'action' => 'inscricao')
       ));
    ?>
    
    
<div id="footer">
	<p>Copyright (C) 2010 SISCAD - FUNDAEP. <br />
	Desenvolvido por:<br />
	Carlos Farah (carlosfarah@gmail.com) e
	Thiago Freire (freireaf@yahoo.com.br)<br />
    <?php
    echo $html->image("cake.power.gif", array(
       "alt" => "Brownies", "border" => 0, "align"=>"center",
       'url' => array('controller' => 'eventos', 'action' => 'inscricao')
       ));
    ?>
    </p>
</div>
  
</body>

</html>
