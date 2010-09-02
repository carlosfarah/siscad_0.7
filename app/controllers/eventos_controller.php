<?php
class EventosController extends AppController{
  var $name = 'Eventos';
  
  function index() {
    $this->layout = 'admin';
    $this->Eventos->recursive = 0;
    $this->set('eventos', $this->paginate());
  }

  function view($id = null) {
    $this->Evento->id = $id;
    $this->set('evento', $this->Evento->read());
  }

  function add(){
    $this->layout = 'admin';
    if(!empty($this->data)) {
      if($this->Evento->save($this->data)) {
        $this->Session->setFlash('Evento foi cadastrado com sucesso.');
        $this->redirect(array('action'=>'index'));
      }
    }
  }

  function delete($id) {
    $this->Evento->delete($id);
    $this->Session->setFlash('Você removeu o evento: ' . $id . '!');
    $this->redirect(array('action'=>'index'));
  }

  function edit($id = null) {
    $this->Evento->id = $id;
    if(empty($this->data)){
      $this->data = $this->Evento->read();
    }
    else {
      if($this->Evento->save($this->data)) {
        $this->Session->setFlash('Evento atualizado com sucesso!');
        $this->redirect(array('action'=>'index'));
      }
    }
  }
  
  function inscricao() {
    
  }

  function iniciar() {
    $this->Eventos->recursive = 0;
    $this->set('eventos', $this->paginate());
  }

  function list_eventos() {
    $this->Eventos->recursive = 0;
    $this->set('eventos', $this->paginate());
  }

  function inscritos() {
    $eventos = $this->Evento->findAll("id = 1");
    $this->Evento->set($this->data);
  }
}
?>
