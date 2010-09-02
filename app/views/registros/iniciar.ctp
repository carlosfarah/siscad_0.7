<div id="post">
  <b><u>O processo de inscrição está dividido em três passos:</u></b><br />
  <br />
  <h1>Você está no - 1º Passo</h1> Inscrever-se em nosso site;<br /><br />
</div>
teste
<div id="inscrever_col">
  <?php
  
$codigo = "<strong>Código do evento:</strong> " . $registro['Registro']['evento_id'];
echo $this->Html->para('null', $codigo);
echo 'teste';
    echo $this->Form->create('Registro', array('type'=>'post'));

    echo $this->Form->input('evento_id', array('label'=>'Eventos:', 'div'=>array('id'=>'search-text', 'title'=>'Div title')));
    echo $this->Form->input('valor', array('label'=>'Valores:', 'div'=>array('id'=>'search-text', 'title'=>'Div title')));
    echo $this->Form->end('Próximo passo >>', array('div'=>array(
                              'id'=>'search-text', 'title'=>'Div title')));
  ?>
</div>
  
