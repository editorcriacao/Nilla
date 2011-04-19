<script type="text/javascript">
    $(document).ready(function(){
        $("#texto-paginas-dicas a").click(function(){
           $.getJSON('<?php echo $this->Html->url(array('controller'=>'dicas', 'action'=>'mostrar'))?>/'+$(this).attr('id'), function(data){
                $("#dicas-texto p").html(data.Dica.texto);
           });
        });
    });
</script>
<ul id="paginas">
    <li id="texto-paginas-dicas" style="width: 369px;">
        <br />
        <span style="margin-left: -30px;"> <?php echo $this->Html->image('img-dicas.png')?></span>
        <br />
        <br />
        <?php $dicas = $this->requestAction(array('controller'=>'dicas', 'action'=>'index'))?>
        <?php if(empty($dicas)){?>
        <p>Não há dicas</p>
        <?php }else{?>
        <?php foreach($dicas as $i){?>
         <p> <img src="img/lista.png" style="margin-right:8px; padding-bottom: 2px;"/><a href="#" id="<?php echo $i['Dica']['id']?>"><?php echo $i['Dica']['dica']?></a></p>
        <?php }?>
        <?php }?>
    </li>

    <li id="dicas-texto">
        <p></p>
    </li>
</ul>