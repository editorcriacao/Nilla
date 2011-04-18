<ul id="paginas">
    <li id="texto-paginas" style="width: 400px;">
        <br />
        <span style="margin-left: -30px;"> <?php echo $this->Html->image('img-dicas.png')?></span>
        <br />
        <?php echo $this->Form->create('Contato', array('action'=>'contato'))?>
        <?php echo $this->Form->input('nome', array('label'=>'Nome:', 'size'=>40))?>
        <?php echo $this->Form->input('telefone', array('label'=>'Telefone:', 'size'=>20))?>
        <?php echo $this->Form->input('celular', array('label'=>'Celular:', 'size'=>20))?>
        <?php echo $this->Form->input('email', array('label'=>'E-mail:', 'size'=>20))?>
        <?php echo $this->Form->input('tipoEvento', array('label'=>'Tipo de evento:', 'type'=>'select'))?>
        <?php echo $this->Form->input('mensagem', array('label'=>'Mensagem:', 'type'=>'textarea'))?>
        <?php echo $this->Form->submit('Enviar', array('style'=>'float: right; margin-right: 35px;'))?>
        <?php echo $this->Form->end()?>
    </li>

    <li style="margin-top: -250px; margin-left: 490px">
        <div id="caixa-endereco" style="border: 1px solid #c6c6c6; width: 250px; padding: 15px;">
            <p>Rua: tal n°000 - Bairro: tal</p>
            <p>São Paulo - SP</p>
            <p>Tel.: </p>
            <p>Cel.:</p>
             <?php echo $this->Html->image('mapa-google.png', array('style'=>'float: right; margin-top: -68px;'))?>
        </div>

    </li>
</ul>