
<style type="text/css">.custombtn{margin-top:0}th {text-transform:uppercase}</style>
<input type="hidden" id="user_id" value="<?= $userid;?>">
<input type="hidden" id="patient_id" value="<?= $patient_id;?>">
<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <h2 class="page-heading text-left">Documennts</h2>
            </div>
        </div>
        <br />
        <div class="row wbg">
            <div class="col-lg-12">
                <form id="docform" method="post">
                    <div class="form-group">
                        <label for="duration" class="col-sm-3 control-label">Upload Doc</label>
                        <div class="col-sm-3">
                            <input type="file" class="form-control blank" name="filename" id="filename">
                            <input type="hidden" value="<?= $patient_id?>" name="patient_id">
                            <input type="hidden" value="0" name="pid">
                        </div>
                        <label for="title" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control blank" name="title" id="title">
                        </div>
                        <button type="submit" class="btn btn-primary" id="updatedocs">Upload Report </button>
                    </div>
                    <div style="clear: both;height: 15px"></div>
                </form>
            </div>
        </div>
        
        <div class="row" id="fileData"></div>

        <div class="row wbg"></div>
    </div>
</div>