<div id="inscrever_col">
  <?php
    echo $this->Form->create('Registro');

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

    echo '<div id="search-text">Situação: ';
      $situacao=array(0=>'Não aprovado', 1=>'Aprovado');
      echo $this->Form->select('situacao', $situacao, array('label'=>'Situação:', 
                              'div'=>array('id'=>'search-text')));

    echo $this->Form->end('Atualizar registro');
    echo '</div>';
  ?>
</div>

