<?php
class Registro extends AppModel{
  
  var $name = 'Registro';
  var $belongsTo = array('Evento');
  var $actsAs = array('Validacao');
  var $validate = array(
                    'nome'=>array('rule'=>'notEmpty', 
                                  'required'=>true, 
                                  'message'=>'>> O campo Nome é obrigatório!'),
                    
                    'cpf' => array('rule' => array('cpf'),
                                   'required'=>true,
                                   'message'=>'>> O campo CPF é obrigatório e não é necessário digitar "." ou "-"!'),
                    
                    'email'=>array('rule'=>array('email'), 
                                   'required'=>true, 
                                   'message'=>'>> O email não foi preenchido ou está incorreto!'),

                    'ddd_telefone'=>array(array('rule'=>'notEmpty', 'rule'=>'numeric',
                                                'required'=>true,
                                                'message'=>'>> O campo DDD é obrigatório e só é permitido números!')),

                    'telefone'=>array(array('rule'=>'notEmpty', 'rule'=>'numeric',
                                            'required'=>true,
                                            'message'=>'>> O campo Telefone é obrigatório e só é permitido números!!')),

                    'ddd_celular'=>array(array('rule'=>'notEmpty', 'rule'=>'numeric',
                                                'required'=>true,
                                                'message'=>'>> O campo DDD é obrigatório e só é permitido números!')),

                    'celular'=>array(array('rule'=>'notEmpty', 'rule'=>'numeric',
                                            'required'=>true,
                                            'message'=>'>> O campo Telefone é obrigatório e só é permitido números!!')),
                    'pais'=>array('rule'=>'notEmpty', 
                                  'required'=>true, 
                                  'message'=>'>> O campo País é obrigatório!'),
                  );
}

?>
