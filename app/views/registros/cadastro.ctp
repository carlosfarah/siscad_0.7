<div id="post">
  <b><u>O processo de inscrição está dividido em três passos:</u></b><br />
  <br />
  <h1>Você está no passo 2 de 3 passos</h1> Efetue o cadastro em nosso site<br />Obs.: Todos os campos são obrigatórios.<br />
</div>

<div id="inscrever_col">
<?php
  $id = $this->passedArgs['id'];
  $valor = array_key_exists ('valor', $this->passedArgs) ? $this->passedArgs['valor'] : '';
  $nome_evento = $this->passedArgs['evento'];

    echo $this->Form->create('Registro', array('url'=> array('id'=>$id, 'valor'=>$valor, 'evento'=>$nome_evento)));

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

    echo $this->Form->hidden('evento', array('value'=>$this->passedArgs['id'],
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->hidden('evento', array('value'=>$valor,
                             'div'=>array('id'=>'search-text')));

    echo $this->Form->hidden('evento', array('value'=>$this->passedArgs['evento'],
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->end('Próximo passo >>');
    echo '</div>';
?>
</div>

