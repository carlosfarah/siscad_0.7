<?php
$detalhes = "<h3>Detalhes do evento: " . $evento['Evento']['nome_evento'] . "</h3>";
$codigo = "<strong>Código do evento:</strong> " . $evento['Evento']['id'];
$nome = "<strong>Nome do evento:</strong> " . $evento['Evento']['nome_evento'];
$descricao = "<strong>Descrição:</strong> " . $evento['Evento']['desc_evento'];

echo $detalhes;
echo '<div class="detalhes_top">';
echo $this->Html->para('null', $codigo);
echo $this->Html->para('null', $nome);
echo $this->Html->para('null', $descricao);
echo '</div>';
?>
