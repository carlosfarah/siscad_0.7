<div id="search">

  <?php
  echo $this->Session->flash('auth'); // Exibimos qualquer erro que possa ter ocorrido
  echo $this->Form->create('User' , array('action' => 'login'));

  echo $this->Form->input('username.Login:', array('label'=>'Login', 'div'=>array('id'=>'search-text', 'title'=>'Div title')));

  echo $this->Form->input('password.Senha:', array('label'=>'Senha', 'div'=>array('id'=>'search-text', 'title'=>'Div title')));
  
  echo $this->Form->end('LOGAR', array('div'=>array('id'=>'search-submit', 'title'=>'Div title')));
  ?>
</div>
