<ul id="paginas">
    <li id="texto-paginas" style="width: 400px;">
        <br />
        <span style="margin-left: -30px;"> <?php echo $this->Html->image('img-contato.png')?></span>
        <br />
        <?php echo $this->Form->create('Contato', array('action'=>'contato'))?>
        <?php echo $this->Form->input('nome', array('label'=>'Nome:', 'size'=>40))?>
        <?php echo $this->Form->input('telefone', array('label'=>'Telefone:', 'size'=>25))?>
        <?php echo $this->Form->input('celular', array('label'=>'Celular:', 'size'=>25))?>
        <?php echo $this->Form->input('email', array('label'=>'E-mail:', 'size'=>30))?>
        <?php echo $this->Form->input('tipoEvento', array('label'=>'Tipo de evento:', 'type'=>'select'))?>
        <?php echo $this->Form->input('mensagem', array('label'=>'Mensagem:', 'type'=>'textarea'))?>
        <?php echo $this->Form->submit('ENVIAR', array('style'=>'float: right; margin-right: 35px;'))?>
        <?php echo $this->Form->end()?>
    </li>

    <li style="margin-top: -290px; margin-left: 490px">
        <div id="caixa-endereco" style="border: 1px solid #c6c6c6; width: 250px; padding: 20px 15px;">
            <p>Av. Vital Brasil Filho, Nº 280</p>
            <p>Apto. 04 - CEP: 09541-130</p>
            <p>São Caetano do Sul - SP</p>
            <p>Cel.: (11) 97150995</p>
             <?php echo $this->Html->image('mapa-google.png', array('style'=>'float: right; margin-top: -73px;'))?>
        </div>
       
    </li>
</ul>