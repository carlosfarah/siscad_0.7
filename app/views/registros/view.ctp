<?php
$detalhes = "<h3>Detalhes de: " . $registro['Registro']['nome'] . "</h3>";
$nome = "<strong>Nome Completo:</strong> " . $registro['Registro']['nome'];
$cpf = "<strong>CPF:</strong> " . $registro['Registro']['cpf'];
$email = "<strong>Email:</strong> " . $registro['Registro']['email'];
$telefone = "<strong>Telefone:</strong> " . $registro['Registro']['telefone'];
$celular = "<strong>Celular:</strong> " . $registro['Registro']['celular'];
$endereco = "<strong>Endereço:</strong> " . $registro['Registro']['endereco'];
$pais = "<strong>País:</strong> " . $registro['Registro']['pais'];

if ($registro['Registro']['situacao'] == 0)
  $situacao = "<strong>Situação:</strong> não aprovado";
else
  $situacao = "<strong>Situação:</strong> aprovado";

echo $detalhes;
echo '<div class="detalhes_top">';
echo $this->Html->para('null', $nome);
echo $this->Html->para('null', $cpf);
echo $this->Html->para('null', $email);
echo $this->Html->para('null', $telefone);
echo $this->Html->para('null', $celular);
echo $this->Html->para('null', $endereco);
echo $this->Html->para('null', $pais);
echo $this->Html->para('null', $situacao);
echo '</div>';
?>
