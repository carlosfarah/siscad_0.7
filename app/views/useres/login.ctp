<h2>EFETUE LOGIN!</h2>
<?php
$session->flash('auth'); // Exibimos qualquer erro que possa ter ocorrido
echo $this->Form->create('User' , array('action' => 'login'));
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('LOGAR');
?>
