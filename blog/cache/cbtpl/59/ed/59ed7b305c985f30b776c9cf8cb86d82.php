<div id="footer">
<div id="background">
&copy; <a href="<?php echo context::global_filters($core->blog->url,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogURL'); ?>"><?php echo context::global_filters($core->blog->name,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => '1',
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogName'); ?></a> &nbsp;|&nbsp;Theme Avebury&nbsp;|&nbsp;<?php printf(__("Powered by %s"),"<a href=\"https://dotclear.org/\">Dotclear</a>"); ?>&nbsp;<span class="copyright"><a href="http://fr.dotclear.org/" onclick="window.open(this.href,'_blank');return false;"></a> </span> 
</div><!-- End #footer -->
<p id="gotop"><a href="#top"><?php echo __('Page top'); ?></a></p>
<?php if ($core->hasBehavior('publicFooterContent')) { $core->callBehavior('publicFooterContent',$core,$_ctx);} ?>