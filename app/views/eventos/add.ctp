<div id="inscrever_col">
  <?php
    echo $this->Form->create('Evento');

    echo $this->Form->input('nome_evento', array('label'=>'Nome do evento:', 
                            'size'=>33,
                            'div'=>array('id'=>'search-text')));

    echo $this->Form->input('desc_evento', array('rows'=>'3', 'label'=>'Descrição do evento:', 
                            'cols'=>52,
                            'div'=>array('id'=>'search-text')));

    echo '<div id="search-text">';
    
    echo '</div>';


    echo '<div id="search-text">';
    echo $this->Form->end('Cadastrar');
    echo '</div>';
  ?>
</div>
