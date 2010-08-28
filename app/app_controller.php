<?php
class AppController extends Controller {
 var $name = 'App';
 var $components = array('Auth', 'Session');

 function beforeFilter(){
    Security::setHash('sha256');
    $this->Auth->authError = 'Area Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
    $this->Auth->loginError = 'Nome de usuario ou senha n&atilde;o conferem!'; // Mensagem quando não se autenticar
    $this->Auth->loginRedirect = array('action' => 'area_restrita', 'controller' => 'useres');
    $this->Auth->logoutRedirect = array('controller'=>'eventos', 'action'=>'index');
    $this->Auth->allow('inscricao', 'iniciar', 'cadastro', 'pagseguro','list_eventos');
  }
}
?>
