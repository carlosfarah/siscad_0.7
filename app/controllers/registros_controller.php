<?php
class RegistrosController extends AppController {
  var $name = 'Registros';
  var $paginate = array('limit'=>30, 'page'=>1, 'order'=>array('nome'=>'desc'));
  
  function index(){
    $this->Registros->recursive = 0;
    $this->set('registros', $this->paginate());
    //$this->set('registros', $this->Registro->find('all'));
    $this->layout = 'admin'; 
  }
  
  function view($id = null){
    $this->Registro->id = $id;
    $this->set('registro', $this->Registro->read());
    $this->layout = 'admin'; 
  }
  
  function add(){
    $this->layout = 'admin'; 
    if(!empty($this->data)){
      if($this->Registro->save($this->data)){
        $this->Session->setFlash('Voc&ecirc; foi cadastrado.');
        $this->redirect(array('action'=>'index'));
      }
    }
  }
  
  function delete($id){
    $this->Registro->delete($id);
    $this->Session->setFlash('Você removeu a matrícula: ' . $id . '!');
    $this->redirect(array('action'=>'index'));
  }
  
  function edit($id = null){
    $this->layout = 'admin'; 
    $this->Registro->id = $id;
    if(empty($this->data)){
      $this->data = $this->Registro->read();
    }
    else{
      if($this->Registro->save($this->data)){
        $this->Session->setFlash('Registro atualizado com sucesso!');
        $this->redirect(array('action'=>'index'));
      }
    }
  }

  function iniciar(){
    if(!empty($this->data)){
      if(!empty($this->data ['Registro']['evento_id'])){
        $this->redirect(array('action'=>'cadastro', 'evento_id'=>$this->data ['Registro']['evento_id']));
      }
    }
  }

  function cadastro(){
    if(!empty($this->data)){
      if($this->Registro->save($this->data)){
        //$this->passedArgs['evento_id'];
        $this->Session->setFlash('Voc&ecirc; foi cadastrado.');
        $this->redirect(array('action'=>'pagseguro', 'evento'=>$this->data ['Registro']['evento']));
      }
    else {
      if(!empty($this->data)){
          if($this->Registro->save($this->data)){
            $this->data ['Registro']['evento'];
            $this->Session->setFlash('Voc&ecirc; foi cadastrado.');
            $this->redirect(array('action'=>'pagseguro', 'evento'=>$this->data ['Registro']['evento']));
          }
        }
      }
    }
  }

  function pagseguro(){
    if(!empty($this->data)){
      $this->passedArgs['evento_id'];
    }
  }

}
?>
