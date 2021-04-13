<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <?= $breadcrumb;?> <small></small> </h1>
        <ol class="breadcrumb">
            <li><a href="javscript:void(0)"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>add/edit/view/delete</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add / Edit</h3>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <!-- form start -->
                            <form class="form-horizontal" id="testmonialForm" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="image" class="col-sm-2 control-label">Image</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" id="filename" name="filename">
                                        </div>
                                        <label for="active" class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="active" id="active">
                                                <option value="">Select Status</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div id="oldimagewrapper" style="display: none">
                                            <label for="comment" class="col-sm-2 control-label">Old Image</label>
                                            <div class="col-sm-4">
                                                 <img src="" id="image" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 text-center">
                                            <input type="hidden" name="id" id="id" value="0">
                                            <input type="hidden" name="oldimage" id="oldimage" value="">
                                            <button type="submit" class="btn btn-info" id="add" data-form="testmonialForm">Add</button>
                                            <button type="submit" class="btn btn-default" id="resetfield">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?php echo ucwords($this->uri->segment(3));?></h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>