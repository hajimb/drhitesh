<style>
.text-wrap{
    white-space:nowrap;
}
.label-black{
    color:#000;
}
.fc-day-grid{background:#FFF}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1> Dashboard <small>Control panel</small> </h1>
        <ol class="breadcrumb">
            <li><a href="javscript:void(0)"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $this->db->count_all('master_user');?></h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon"> <i class="ion ion-bag"></i> </div>
                    <a href="<?php echo base_url();?>dashboard/users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $this->db->count_all('master_question');?></h3>
                        <p>Total Questions</p>
                    </div>
                    <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
                    <a href="<?php echo base_url();?>question/qlist/all" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php 
              $where = "answer is  NOT NULL";
              echo $this->db->where($where)->from("master_question")->count_all_results();?></h3>
                        <p>Answered Question</p>
                    </div>
                    <div class="icon"> <i class="ion ion-person-add"></i> </div>
                    <a href="<?php echo base_url();?>question/qlist/answered" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo $this->db->where(['answer'=> NULL])->from("master_question")->count_all_results();?></h3>
                        <p>Un Answered</p>
                    </div>
                    <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
                    <a href="<?php echo base_url();?>question/qlist/unanswered" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12 wbg">
                    <div id="calendar"></div>
                </div>
            </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding" style="overflow:inherit">
                        <div class="box-header">
                            <h3 class="box-title">Consult List</h3>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Action</th>
                                    <th>Patient Name</th>
                                    <th>Appointment Date and Time</th>
                                    <th>Status</th>
                                    <th>Consultation Type</th>
                                    <th>Consultation Mode</th>
                                    <!-- <th>Consultation</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</div>