<ul>
  <li><?php echo $this->Html->link('Administrar eventos', array('controller'=>'eventos', 'action'=>'index')); ?></li>
  <li><?php echo $this->Html->link('Administrar Registros', array('controller'=>'registros', 'action'=>'index'));?></li>
  <li><?php echo $this->Html->link('Voltar ao menu de administração', '/useres/area_restrita/'); ?></li>
  <li><?php echo $this->Html->link('CLIQUE AQUI PARA SAIR' , array('controller' => 'useres' , 'action' => 'logout')); ?></li>
</ul>
