<?php echo $this->Html->script(array('slides')) ?>
<script type="text/javascript">

    var mygallery=new simpleGallery({
        wrapperid: "simplegallery1", //ID of main gallery container,
        dimensions: [808, 475], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
        imagearray: [
            ["img/galeria.png", "http://en.wikipedia.org/wiki/Swimming_pool", "_new", ""]
        ],
        autoplay: [false, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
        persist: false,
        fadeduration: 500, //transition duration (milliseconds)
        oninit:function(){ //event that fires when gallery has initialized/ ready to run
        },
        onslide:function(curslide, i){ //event that fires after each slide is shown
            //curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
            //i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
        }
    })
</script>
<style type="text/javascript">
    #simplegallery1{
        position: relative;
    }

</style>

<ul id="simplegallery1">

</ul>