<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
<div class="content_fullwidth less2">
    <div class="container">
        <h2 style="padding-bottom: 20px">Hand written testimonials by our esteemed patients</h2>
        <div class="slideFrame" id="slider-3">
            <ul class="guide-other left">
                <?php foreach($handtestimonials as $key){
                    $img = base_url().'uploads/testimonial/'.$key['image'];
                    echo  '<li class="cell-other" ><a href="'.$img.'" style="height:40px;" rel="shadowbox[group1]"><img src="'.$img.'" ></a></li>'  ;  
                } ?>
            </ul>
            </div>
    <div class="clearfix divider_line9"></div>
    </div>
    <div class="container">
        <h2 style="padding-bottom: 20px">Authentic testimonials from Practo, Lybrate, Justdial, Google etc...</h2>

        <?php foreach ($testimonials as $key) {
           /* $cat      = explode(':',$key['category']);
            $category = $cat[1];*/
            if($key['testimonial_date']!=NULL){
                $nice_date = date('d-M-Y', strtotime( $key['testimonial_date'] ));
            }
        ?>
        <div class="blog_post">
            <div class="blog_postcontent">
                <h3><a href="#"><?php echo $key['category'];?></a></h3>
                <ul class="post_meta_links">
                    <li><a href="#" class="date"><?php echo $nice_date;?></a></li>
                    <li class="post_by"><i>by:</i> <a href="#"><?php echo ucwords(strtolower($key['name']));?></a></li>
                    <!-- <li class="post_categoty"><i>in:</i> <a href="#"><?php echo $key['category'];?></a></li> -->
                </ul>
                <div class="clearfix"></div>
                <div class="margin_top1"></div>
                <p><?php echo $key['testimonial'];?> <!--a href="#">read more...</a--></p>
            </div>
        </div>
        <div class="clearfix divider_line9"></div>
        <?php }?>
        <div>
            <!--div class="pagination center">
                <b>Page 2 of 18</b>
                <a href="#" class="navlinks">&lt; Previous</a>
                <a href="#" class="navlinks">1</a>
                <a href="#" class="navlinks current">2</a>
                <a href="#" class="navlinks">3</a>
                <a href="#" class="navlinks">4</a>
                <a href="#" class="navlinks">Next ></a>
            </div-->
            <!-- /# end pagination -->
        </div>
    </div>
</div>
<div class="clearfix margin_top6"></div>
