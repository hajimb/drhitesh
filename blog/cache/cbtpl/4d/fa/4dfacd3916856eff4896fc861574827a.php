
<div id="top" role="banner">
<div id="top-image">
<p id="prelude" role="navigation"><a href="#main"><?php echo __('To content'); ?></a> |
<a href="#blognav"><?php echo __('To menu'); ?></a> |
<a href="#search"><?php echo __('To search'); ?></a></p>
<div class="title">
<div class="title-background">
  <h1 class="title-name"><a href="<?php echo context::global_filters($core->blog->url,array (
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
),'BlogName'); ?></a></h1>
   <span id="blogdesc"><?php echo context::global_filters($core->blog->desc,array (
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
),'BlogDescription'); ?></span>

  <?php if ($core->hasBehavior('publicTopAfterContent')) { $core->callBehavior('publicTopAfterContent',$core,$_ctx);} ?>
  
</div><!-- End title-background -->
</div><!-- End title -->
</div><!-- End top-image -->
</div><!-- End top -->

<div id="simplemenu">
<?php echo tplSimpleMenu::displayMenu('supranav nosmall','sn-top',''); ?>
</div>

