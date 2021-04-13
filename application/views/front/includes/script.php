<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/jquery.min.js"><\/script>')
</script>
<script src="<?php echo base_url()?>assets/js/mediaelement-and-player.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.toaster.js"></script>
<script>
new WOW().init();
var base_url = $('#base_url').val();
</script>
<script type="text/javascript">
$('.flip').hover(function() {
    //$(this).find('.card').toggleClass('flipped');
    $(this).find('.card').addClass('flipped');
});

$(window).load(function() {
    owlCarouselInit();
});

function owlCarouselInit() {
    var nextNav = '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>';
    var prevNav = '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>';
    $('#Partner-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        navText: [prevNav, nextNav],
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
}

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script>

