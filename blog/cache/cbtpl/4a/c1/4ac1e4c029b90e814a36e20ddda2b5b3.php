<!-- media queries -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script type="text/javascript">
        $("html").addClass("js");
        $(document).ready(function(){
        $(window).scroll(function() {
                if($(this).scrollTop() != 0) {
                    $('#gotop').fadeIn();
                } else {
                    $('#gotop').fadeOut();
                }
            });

            $('#gotop').click(function() {
                $('body,html').animate({scrollTop:0},1000);
            });
});
</script>