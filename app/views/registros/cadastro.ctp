<div id="post">
  <b><u>O processo de inscrição está dividido em três passos:</u></b><br />
  <br />
  <h1>Você está no - 2º Passo</h1> Efetuar o cadastro em nosso site;<br /><br />
</div>

<div id="inscrever_col">
  <?php
if (!empty($this->passedArgs['evento_id'])){

    echo $this->Form->create('Registro', array('type'=>'post'));

    echo $this->Form->input('nome', array('label'=>'Nome Completo:', 
                            'size'=>35,
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('cpf', array('label'=>'CPF:', 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('email', array('label'=>'E-mail:', 
                            'size'=>35, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('ddd_telefone', array('label'=>'DDD:', 
                            'size'=>2, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('telefone', array('label'=>'Telefone:', 
                            'size'=>10, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('ddd_celular', array('label'=>'DDD:', 
                            'size'=>2, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('celular', array('label'=>'Celular:', 
                            'size'=>10, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('pais', array('label'=>'País:', 
                            'size'=>25,
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->hidden('evento', array('value'=>$this->passedArgs['evento_id'],
                            'div'=>array('id'=>'search-text')));
                            
    echo $this->Form->end('Próximo passo >>');
    echo '</div>';
}
else {
    echo $this->Form->create('Registro', array('type'=>'post'));

    echo $this->Form->input('nome', array('label'=>'Nome Completo:', 
                            'size'=>35,
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('cpf', array('label'=>'CPF:', 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('email', array('label'=>'E-mail:', 
                            'size'=>35, 
                            'div'=>array('id'=>'search-text')));
                            
    echo $this->Form->input('ddd_telefone', array('label'=>'DDD:', 
                            'size'=>2, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('telefone', array('label'=>'Telefone:', 
                            'size'=>10, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('ddd_celular', array('label'=>'DDD:', 
                            'size'=>2, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('celular', array('label'=>'Celular:', 
                            'size'=>10, 
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('pais', array('label'=>'País:', 
                            'size'=>25,
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->hidden('evento', array(
                            'value'=>$this->data ['Registro']['evento'],
                            'div'=>array('id'=>'search-text')));
                            
    echo $this->Form->end('Próximo passo >>');
    echo '</div>';
}
  ?>
</div>

