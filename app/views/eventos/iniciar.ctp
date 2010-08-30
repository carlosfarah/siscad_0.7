<div id="post">
  <b><u>O processo de inscrição está dividido em três passos:</u></b><br />
  <br />
  <h1>Você está no - 1º Passo</h1> Inscrever-se em nosso site;<br /><br />
</div>

<div id="inscrever_col">
  <?php
    echo $this->Form->create('Registro', array('type'=>'post'));

    echo $this->Form->input('evento_id', array('label'=>'Eventos:', 'div'=>array('nome_evento'=>'search-text', 'title'=>'Div title')));
    echo $this->Form->end('Próximo passo >>', array('div'=>array(
                              'id'=>'search-text', 'title'=>'Div title')));
  ?>
</div>
  
