<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title"><b><?php echo $result->title;?></b></h4>
</div>
<div class="modal-body">
	<h4><b><?php echo $result->second_title;?></b></h4>
    <?php echo html_entity_decode($result->description);?>
</div>
<div class="modal-footer">
	<a class="btn btn-primary" data-dismiss="modal" aria-hidden="true" href="<?php echo base_url();?>consult">Consult</a>
	<a class="btn btn-info" data-dismiss="modal" aria-hidden="true" href="<?php echo base_url();?>testimonials">Testimonial</a>

</div>
