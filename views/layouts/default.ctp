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
                    <li><a href="">Inicio</a>|</li>
                    <li><a href="">Contato</a></li>
                    <li><span class="youtube"></span></li>
                    <li><span class="twitter"></span></li>
                    <li><span class="facebook"></span></li>
                </ul>
            </div>
            <div id="header">
                <ul>

                    <li>

                        <a href="<?php echo $this->Html->url('/')?>"><?php echo $this->Html->image('logo.png') ?></a>

                    </li>

                    <li>

                        <ul id="menu">
                            <li><a href="">Empresa</a> |</li>
                            <li><a href="">Serviços</a> |</li>
                            <li><a href="">Galeria</a> |</li>
                            <li><a href="">Parceiros</a> |</li>
                            <li><a href="">Dicas</a> |</li>
                            <li><a href="">Scrapbook</a> |</li>
                            <li><a href="">Contato</a></li>
                        </ul>

                    </li>

                    <li>

                        <?php echo $this->Html->image('img-header-vetor.png', array('id' => 'vetor')) ?>

                    </li>
                </ul>

                <div class="traco-cinza"></div>
 
            </div>

            <div id="content">
                <?php echo $content_for_layout ?>
                 <div class="traco-cinza"></div>
            </div>

            <div id="footer">
                <ul id="newsletters">
                    <?php echo $this->Form->create('Contato', array('action'=>'newsletter'))?>
                    <li><p>DESEJA RECEBER NOVIDADES?</p></li>
                    <li><?php echo $this->Form->input('nome', array('label'=>'', 'value'=>'Digita seu nome'))?></li>
                    <li><?php echo $this->Form->input('email', array('label'=>'', 'value'=>'Digita seu e-mail'))?></li>
                    <li><?php echo $this->Form->submit('OK')?></li>
                    <?php echo $this->Form->end()?>
                </ul>

                <div class="traco-cinza" style="width: 450px;"></div>

                <ul id="footer-2">
                    <li><a href="">Mapa do site</a>|</li>
                    <li><a href="">Empresa</a>|</li>
                    <li><a href="">Contato</a></li>
                </ul>

                <p style="margin-left: 31%;">©2011 Nilla assessoria em eventos. Todos os direitos reservados.</p>
                
            </div>
        </div>

    </body>

</html>