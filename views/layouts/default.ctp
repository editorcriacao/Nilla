<?php echo $this->Html->doctype() ?>
<html>
    <head>
        <?php echo $this->Html->charset() ?>
        <title>Nilla Assessoria em Eventos</title>
        <?php echo $this->Html->css(array('reset', 'estrutura', 'tipografia', 'icon')) ?>
        <?php echo $this->Html->script(array('jquery')) ?>
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

                        <?php echo $this->Html->image('logo.png') ?>

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
 
            </div>

            <div id="content">

            </div>

            <div id="footer">

            </div>
        </div>

    </body>

</html>