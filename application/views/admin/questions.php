<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Users <small></small> </h1>
      <ol class="breadcrumb">
        <li><a href="javscript:void(0)"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">lists</li>
      </ol>
    </section>    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Question List <b><?php echo ucwords($this->uri->segment(3));?></b></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Question</th>
                    <th>Ispublic</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Question</th>
                    <th>Ispublic</th>
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