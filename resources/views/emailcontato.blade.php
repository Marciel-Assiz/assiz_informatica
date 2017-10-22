<!DOCTYPE html>

<html lang="pt-br">
    
   
    <h2>Pedido N° <?php echo $pedido; ?></h2
    <h2>Pedido N° {{$pedido}}</h2
   
    <p><b>Muito Obrigado {{$dadosForm->nomeCliente}}</b></p>   
   
    <p>Esses são os serviços que você solicitou</p>
        <?php if (isset($dadosForm['opcao01'])) {  echo "<tr><td>Aprender a utilizar redes-socias</td></tr>";} ?>
        <?php if (isset($dadosForm['opcao02'])) {  echo "<tr><td>Aprender Mexer no Smartphone ou Tablet</td></tr>";} ?>
        <?php if (isset($dadosForm['opcao03'])) {  echo "<tr><td>Mexer no Tablet ou SmartTV</td></tr>";} ?>
        <?php if (isset($dadosForm['opcao04'])) {  echo "<tr><td>Baixar e utilizar aplicativos</td></tr>";} ?>
        <?php if (isset($dadosForm['opcao05'])) {  echo "<tr><td> Funções básicas no Computador</td></tr>";} ?>
        <?php if (isset($dadosForm['opcao06'])) {  echo "<tr><td>Utilizar Smart TV</td></tr>";} ?>
        <?php if (isset($dadosForm['opcao07'])) {  echo "<tr><td>Instalar Som, Blue ray, etc</td></tr>";} ?>
        <?php if (isset($dadosForm['outros' ])>0) {  echo "<tr><td>Outros: {$dadosForm['outros']}</td></tr>";} ?>
            
    <p> Em breve entraremos em contato para combinarmos os <b>detalhes</b></p>

</html>
