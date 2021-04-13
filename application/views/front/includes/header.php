<div class="container-fluid borderbottom">
<?php //print_r($_SESSION);?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo-wrapper">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/img/sexologist-in-mumbai.png" width="150"></a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($pagename=='men' ){?> class="active"
                    <?php }?>><a href="<?php echo base_url();?>men">Men</a></li>
                <li <?php if($pagename=='women' ){?> class="active"
                    <?php }?>><a href="<?php echo base_url();?>women">Women</a></li>
                <li <?php if($pagename=='couple' ){?> class="active"
                    <?php }?>><a href="<?php echo base_url();?>couple">Couple</a></li>
                <li class="dropdown" <?php if($pagename=='consult-online' || $pagename=='consult-personally' ){?> class="active"
                    <?php }?>>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consult <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>consult-online">Consult Online</a></li>
                        <li><a href="<?php echo base_url();?>consult-personally">Consult Personally</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a></li>
                <li><a href="<?php echo base_url();?>about" <?php if($pagename=='about-us' ){?> class="active"<?php }?>>About Us</a></li>
                <li><a href="<?php echo base_url();?>ask-question" <?php if($pagename=='question' ){?> class="active"<?php }?>>Ask Question</a></li>
                <?php if($this->session->userdata('logged_in') == 0 && !$this->session->userdata('logintype') == 'normal'){?>
                    <li <?php if($pagename=='login' ){?> class="active"<?php }?>><a href="<?php echo base_url();?>login">Login</a></li>
                <?php } else{?>
                <li <?php if($pagename=='logout' ){?> class="active" <?php }?>><a href="<?php echo base_url();?>login/logout">Logout</a></li>
                <?php } ?>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </nav>
</div>
<a id="edgtf-back-to-top" href="#" class="scrollup on">
    <span class="edgtf-icon-stack"><i class="edgtf-icon-font-awesome fa fa-angle-up "></i></span>
</a>