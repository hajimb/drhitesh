<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
<div class="content_fullwidth less2">
    <div class="container">
        <h2 style="padding-bottom: 20px">Case Study</h2>
        <div class="slideFrame" id="slider-3">
            <ul class="guide-other left">
                <?php foreach($case_study as $key){
                    $img = base_url().'uploads/case-study/'.$key['image'];
                    echo  '<li class="cell-other" ><a data-img="'.$img.'" data-comment="'.$key['comment'].'" class="casestudy"><img style="height:100px;width:100px;" src="'.$img.'" ></a></li>'  ;  
                } ?>
            </ul>
            </div>
    <div class="clearfix divider_line9"></div>
    </div>
    <div class="container">
        <div class="row">
            <div id="cs-img" class="col-md-12" style="display: none;">
                <img id="csimg" class="img-responsive" src="">
            </div>
            <div id="cs-com" style="padding-top: 10px;display: none;" class="blog_post col-md-12">
                <div class="date">Dr's Comments</div>
                <div id="post_by"></div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix margin_top6"></div>
