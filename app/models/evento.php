<?php
class Evento extends AppModel{
  var $name = 'Evento';
  var $hasMany = array('Registro');
  var $displayField = 'nome_evento';
  var $uses = array('Evento', 'Registro');
  var $validate = array(
                    'nome_evento'=>array('rule'=>'notEmpty', 
                                  'required'=>true, 
                                  'message'=>'>> O campo Nome do evento é obrigatório!'),

                    'desc_evento'=>array('rule'=>'notEmpty', 
                                  'required'=>true, 
                                  'message'=>'>> O campo Descrição do evento é obrigatório!'),

                    'valor'=>array('rule'=>'notEmpty', 
                                  'required'=>true, 
                                  'message'=>'>> O campo Valor do evento é obrigatório!'),

                  );
}
?>
