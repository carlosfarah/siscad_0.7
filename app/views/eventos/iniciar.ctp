<div id="post">
  <b><u>O processo de inscrição está dividido em três passos:</u></b><br />
  <br />
  <h1>Você está no passo 1 de 3 passos</h1> Escolha o evento<br /><br />
</div>


<div class="tabela">
  <div class="resultado">
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td>
          <table border="0" cellpadding="2" cellspacing="0" width="100%">
            <tr>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Cód.','id');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Evento','nome_evento');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Descrição do Evento','desc_evento');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('R$ do Evento','valor');?></div></th>
              <th align="center" width="50px" colspan="3"><div id="titulo_tabela">a&ccedil;&atilde;o</div></th>
            </tr>
            <?php foreach($eventos as $i=>$evento){ ?>
              <tr<?php echo ($i % 2 == 0) ? " class='altrow'" : "" ?>>
                <?php echo "<td align='center'>" . $evento['Evento']['id'] . "</td>"; ?>
                <?php echo "<td>" . $evento['Evento']['nome_evento'] . "</td>"; ?>
                <?php echo "<td>" . $evento['Evento']['desc_evento'] . "</td>"; ?>
                <?php echo "<td>" . $evento['Evento']['valor'] . "</td>"; ?>
                <td align="center">
                      <?php echo $html->image('select.png', array('alt'=>'Selecionar',
                                                          'border'=>0,
                                                          'url'=>array(
                                                                        'controller'=>'registros',
                                                                        'action'=>'cadastro',
                                                                        'id'=>$evento['Evento']['id'],
                                                                        'valor'=>$evento['Evento']['valor'],
                                                                        'evento'=>$evento['Evento']['nome_evento']
                                                                      ))); ?>
                </td>
              </tr>
            <?php } ?>
          </table>
        </td>
      </tr>
    </table>
  </div>
</div>
<div class="paging_bottom">
    <?php echo $paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 |     <?php echo $paginator->numbers();?>
    <?php echo $paginator->next(__('proxima', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<?php 
  echo $paginator->counter(array('format'=> __('Pagina %page% de %pages%, mostrando %current% registros de um
  total de %count%, iniciando no registro %start%, terminando em %end%', true)));
  // aqui contamos quantas páginas e registros existem para esta paginação, e exibimos na tela
?>















<!--
<div id="inscrever_col">
  <?php /**
    echo $this->Form->create('Registro', array('type'=>'post'));

    echo $this->Form->input('evento_id', array('label'=>'Eventos:', 'div'=>array('nome_evento'=>'search-text', 'title'=>'Div title')));
    echo $this->Form->end('Próximo passo >>', array('div'=>array(
                              'id'=>'search-text', 'title'=>'Div title')));
                              **/
  ?>
</div>
  
-->
