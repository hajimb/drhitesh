<header class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo"><a href="<?php echo base_url('')?>" id="logo"></a></div>
        <!-- Navigation Menu -->
        <div class="menu_main">
            <div class="navbar yamm navbar-default">
                <div class="navbar-header">
                    <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"> <span>Menu</span>
                        <button type="button"> <i class="fa fa-bars"></i></button>
                    </div>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="<?php echo base_url('men') ?>" class="page-scroll">Men</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('women') ?>" class="page-scroll">Women</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('couple') ?>" class="page-scroll">Couple</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('premarriage-counselling')?>" class="page-scroll">Pre Marriage</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('training') ?>" class="page-scroll">Training</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('survey') ?>" class="page-scroll">Survey</a></li>
                        <!--li class="dropdown"><a href="<?php echo base_url('events') ?>" class="page-scroll">Events</a></li-->
                        <!-- <li class="dropdown"><a href="<?php echo base_url('testimonials') ?>" class="page-scroll">Testimonials</a></li> -->
                        <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle">Testimonials</a>
                            <ul class="dropdown-menu" role="menu">
                                <li> <a href="<?php echo base_url('testimonials') ?>">Reviews</a> </li>
                                <li> <a href="<?php echo base_url('case-study') ?>">Case Study</a> </li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="<?php echo base_url('media') ?>" class="page-scroll">Media</a></li>
                        <li class="dropdown"><a href="<?php echo base_url('consult'); ?>" class="dropdown-toggle">Consult</a>
                            <ul class="dropdown-menu" role="menu">
                                <li> <a href="<?php echo base_url();?>consult-online">Consult Online</a> </li>
                                <li> <a href="<?php echo base_url();?>consult-personally">Consult Personally</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end Navigation Menu -->
    </div>
</header>
