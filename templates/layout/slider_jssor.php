<?php

    $slider=getAll("select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc");
    $video_slider=getAll('select link from #_video where hienthi=1 and noibat=1 order by stt,id desc limit 0,5');
	
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 no-padding">
            <div id="slider1_container" style="position: relative;width: 780px; height: 360px;">
                <!-- Slides Container -->
                <div u="slides" style="cursor: move;width: 780px; height: 360px;overflow: hidden;">
                    <?php for($i=0,$count_slider=count($slider);$i<$count_slider;$i++){ ?>
                    <div>
                        <img u="image" src="<?php if($slider[$i]['photo']!='')echo _upload_hinhanh_l.$slider[$i]['photo'];else echo 'images/noimage.png' ?>" alt="<?=$$slider[$i]['ten']?>" />
                    </div>
                    <?php } ?>                
                </div>
                <!-- Trigger -->
                         
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora05l" style="top:40%;"></span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora05r" style="top:40%;"></span>
            </div><!-- Jssor Slider End -->
        </div>
        <div class="col-md-4 no-padding-right">
            <div id="video_slider">
               
            </div>
        </div>
    </div>
</div>

    
 