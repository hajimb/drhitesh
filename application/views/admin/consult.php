<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Consult <small></small> </h1>
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
              <h3 class="box-title"><?php echo ucwords($this->uri->segment(3));?></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <!-- <th>Action</th> -->
                    <th>Patient Name</th>
                    <th>Appointment Date and Time</th>
                    <th>Status</th>
                    <th>Consultation Type</th>
                    <th>Consultation Mode</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
                  <tfoot>
                    <tr>
                      <th>S.No.</th>
                                    <!-- <th>Action</th> -->
                                    <th>Patient Name</th>
                                    <th>Appointment Date and Time</th>
                                    <th>Status</th>
                                    <th>Consultation Type</th>
                                    <th>Consultation Mode</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>