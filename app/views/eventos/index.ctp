<div class="post">
<?php
  echo $this->Html->image('add.png', array('alt'=>'Editar',
                                                          'border'=>0,
                                                          'url'=>array('action'=>'add')));
  echo $this->Html->link('Adicionar Evento', '/eventos/add');
?>
</div>

<div class="paging_top">
  <?php echo $paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
    |     <?php echo $paginator->numbers();?>
  <?php echo $paginator->next(__('proxima', true).' >>', array(), null, array('class'=>'disabled'));?>
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
              <th align="center" width="50px" colspan="3"><div id="titulo_tabela">a&ccedil;&atilde;o</div></th>
            </tr>
            <?php foreach($eventos as $i=>$evento){ ?>
              <tr<?php echo ($i % 2 == 0) ? " class='altrow'" : "" ?>>
                <?php echo "<td align='center'>" . $evento['Evento']['id'] . "</td>"; ?>
                <?php echo "<td>" . $evento['Evento']['nome_evento'] . "</td>"; ?>
                <?php echo "<td>" . $evento['Evento']['desc_evento'] . "</td>"; ?>
                <td align="center"><?php echo $html->image('view.png', array('alt'=>'Detalhes',
                                                              'border'=>0,
                                                              'url'=>array('action'=>'view',$evento['Evento']['id'])))?>
                </td>

                <td align="center"><?php echo $html->image('edit.png', array('alt'=>'Editar',
                                                              'border'=>0,
                                                              'url'=>array('action'=>'edit', $evento['Evento']['id'])))?>
                </td>

                <td align="center"><?php echo $html->image('delete.png', array('alt'=>'Remover',
                                                              'border'=>0,
                                                              'url'=>array('action'=>'delete', $evento['Evento']['id'])))?>
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
