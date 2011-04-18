<script type="text/javascript">
    $(document).ready(function(){
        $("#scrap-list a").click(function(){
           $.getJSON('<?php echo $this->Html->url(array('controller'=>'scrapbooks', 'action'=>'mostrar'))?>/'+$(this).attr('id'), function(data){
               $("#foto-scrapbook div").html("<img src='img/"+data.Scrapbook.img+"' alt=''/>");
                $("#foto-scrapbook span p").html(data.Scrapbook.scrap);
           });
        });
    });
</script>
<ul id="paginas">
    <li id="texto-paginas" style="width: 364px;">
        <br />
        <span style="margin-left: -30px;"> <?php echo $this->Html->image('img-scrapbook.png')?></span>
        <br />
        <div id="scrap-list">
            <?php $scrap = $this->requestAction(array('controller'=>'scrapbooks', 'action'=>'index'))?>
            <?php if(empty($scrap)){?>
            <span>Não há scraps</span>
            <?php }else{?>
            <?php foreach($scrap as $i){?>
                <a href="#" id="<?php echo $i['Scrapbook']['id']?>"><span><?php $data = explode('-', substr($i['Scrapbook']['created'],0, 10)); echo $data[2].'/'.$data[1].'/'.$data[0] ?></span> - <?php echo $i['Scrapbook']['casal']?></a>
            <?php } ?>
            <?php } ?>
        </div>
    </li>

    <li>
        <div id="foto-scrapbook">
            <div></div>
            <span><p></p></span>
        </div>

    </li>
</ul>