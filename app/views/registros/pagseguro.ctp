<div id="post">
  <b><u>O processo de inscrição está dividido em três passos:</u></b><br />
  <br />
  <h1>Você está no - 3º Passo</h1> No último passo você terá que clicar no botão do site do PAGSEGURO e logo você será redirecionado para o site deles, onde você terá que preencher um pequeno formulário para assim ser gerado o método de pagamento que você desejar, você efetuando o pagamento estaremos enviando um email de da confirmação da matrícula.<br /><br />
</div>

<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
  <form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" method="post">
  <input type="hidden" name="email_cobranca" value="fundaepe@fundaepe.org.br" />
  <input type="hidden" name="tipo" value="CP" />
  <input type="hidden" name="moeda" value="BRL" />
  <input type="hidden" name="item_id_1" value="<?php echo $this->passedArgs['evento']; ?>" />
  <input type="hidden" name="item_descr_1" value="<?php echo $this->passedArgs['evento']; ?>" />
  <input type="hidden" name="item_quant_1" value="1" />
  <input type="hidden" name="item_valor_1" value="7000" />
  <input type="hidden" name="item_frete_1" value="000" />
  <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
  </form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
