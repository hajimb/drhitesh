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
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" id="addform" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="lifestyle" class="col-sm-2 control-label">Lifestyle</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="lifestyle" name="lifestyle" placeholder="lifestyle">
                                        </div>
                                        <label for="status" class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="status" id="status">
                                                <option value="">Select Status</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 text-center">
                                            <input type="hidden" name="id" id="id" value="0">
                                            <button type="submit" class="btn btn-info" id="add" data-form="addform">Add</button>
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
                        <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Lifestyle</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th>Lifestyle</th>
                                    <th>Status</th>
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