<?php 
  echo $paginator->counter(array('format'=> __('Pagina %page% de %pages%, mostrando %current% registros de um
  total de %count%, iniciando no registro %start%, terminando em %end%', true)));
  // aqui contamos quantas páginas e registros existem para esta paginação, e exibimos na tela
?>
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
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Nome.','nome');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('CPF','cpf');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Email','email');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Telefone','telefone');?></div></th>
              <th align="center"><div id="titulo_tabela"><?php echo $paginator->sort('Situação','situacao');?></div></th>
              <th align="center" colspan="3"><div id="titulo_tabela">a&ccedil;&atilde;o</div></th>
            </tr>
            <?php foreach($registros as $i=>$registro){ ?>
              <tr<?php echo ($i % 2 == 0) ? " class='altrow'" : "" ?>>
                 <?php echo "<td align='center'>" . $registro['Registro']['id'] . "</td>"; ?>
                 <?php echo "<td>" . $registro['Registro']['nome'] . "</td>"; ?>
                 <?php echo "<td align='center'>" . $registro['Registro']['cpf'] . "</td>"; ?>
                 <?php echo "<td>" . $registro['Registro']['email'] . "</td>"; ?>
                 <?php echo "<td>" . $registro['Registro']['telefone'] . "</td>"; ?>
                 
                 <?php
                  if ($registro['Registro']['situacao'] == 0)
                    $situacao = "não aprovado";
                  else
                    $situacao = "aprovado";
                 ?>
                 <?php echo "<td align='center'>" . $situacao . "</td>"; ?>
                 
                 
                 <td align="center"><?php echo $html->image('view.png', array('alt'=>'Detalhes',
                                                              'border'=>0,
                                                              'url'=>array('action'=>'view',$registro['Registro']['id'])))?>
                </td>

                <td align="center"><?php echo $html->image('edit.png', array('alt'=>'Editar',
                                                              'border'=>0,
                                                              'url'=>array('action'=>'edit', $registro['Registro']['id'])))?>
                </td>

                <td align="center"><?php echo $html->image('delete.png', array('alt'=>'Remover',
                                                              'border'=>0,
                                                              'url'=>array('action'=>'delete', $registro['Registro']['id'])))?>
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
