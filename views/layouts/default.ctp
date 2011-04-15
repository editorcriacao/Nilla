<?php echo $this->Html->doctype() ?>
<html>
    <head>
        <?php echo $this->Html->charset() ?>
        <title>Nilla Assessoria em Eventos</title>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia', 'icon')) ?>
        <?php echo $this->Html->script(array('jquery')) ?>
        <script type="text/javascript">
            $(document).ready(function(){
                $('input[type=text], textarea, input[type=password]').focus(function(){
                    if($(this).val() == $(this).attr('defaultValue'))
                    {
                        $(this).val('');
                    }
                });

                $('input[type=text], textarea, input[type=password]').blur(function(){
                    if($(this).val() == '')
                    {
                        $(this).val($(this).attr('defaultValue'));
                    }
                });
            });
        </script>
       
    </head>

    <body>
        <div id="todo">
            <div id="menu-header">
                <ul>
                    <li><a href="#">Inicio</a>|</li>
                    <li><a href="#">Contato</a></li>
                    <li><span class="youtube"><a href="#"></a></span></li>
                    <li><span class="twitter"><a href="#"></a></span></li>
                    <li><span class="facebook"><a href="#"></a></span></li>
                </ul>
            </div>
            <div id="header">
                <ul>

                    <li style="margin-left: 5px; *margin-left: 0; ">

                        <a href="<?php echo $this->Html->url('/') ?>"><?php echo $this->Html->image('logo.png') ?></a>

                    </li>

                    <li>

                        <ul id="menu">
                            <li style="margin-left: -10px;"><a href="">Empresa</a> |</li>
                            <li><a href="<?php echo $this->Html->url('/servicos')?>">Serviços</a> |</li>
                            <li><a href="<?php echo $this->Html->url('/galeria')?>">Galeria</a> |</li>
                            <li><a href="">Parceiros</a> |</li>
                            <li><a href="">Dicas</a> |</li>
                            <li><a href="">Scrapbook</a> |</li>
                            <li><a href="<?php echo $this->Html->url('/contato')?>">Contato</a></li>
                        </ul>

                    </li>

                    <li id="elemento-page">

                        <?php echo $this->Html->image('img-header-vetor.png', array('id' => 'vetor')) ?>

                    </li>
                </ul>

                <div class="traco-cinza" style="*margin-top: -30px;"></div>

            </div>

            <div id="conteudo">
                <?php echo $content_for_layout ?>
                    </div>

                    <div class="traco-cinza"></div>        


                    <div id="footer">
                        <ul id="newsletters">
                    <?php echo $this->Form->create('Contato', array('action' => 'newsletter')) ?>
                        <li><p>DESEJA RECEBER NOVIDADES?</p></li>
                        <li><?php echo $this->Form->input('nome', array('label' => '', 'value' => 'Digite seu nome')) ?></li>
                        <li><?php echo $this->Form->input('email', array('label' => '', 'value' => 'Digite seu e-mail')) ?></li>
                        <li><?php echo $this->Form->submit('OK') ?></li>
                    <?php echo $this->Form->end() ?>
                </ul>

                <div class="traco-cinza" style="width: 750px; margin-bottom:16px;"></div>

                <ul id="footer-2">
                    <li><a href="">Mapa do site</a>|</li>
                    <li><a href="">Empresa</a>|</li>
                    <li><a href="">Contato</a></li>
                </ul>

                <p style="margin-left: 300px; *margin-left: 295px;">©2011 Nilla assessoria em eventos. Todos os direitos reservados.</p>
            </div>
        </div>

    </body>

</html>