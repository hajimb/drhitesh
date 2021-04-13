
<style type="text/css">.custombtn{margin-top:0}th {text-transform:uppercase}</style>
<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <h2 class="page-heading text-left"><?=$heading; ?></h2></div>
                <div class="col-lg-6 col-xs-6">
                    <h2 class="page-heading text-right"><div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Book Appointment <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <?php if(count($consultation) > 0){?>
                              <li><a href="javascript:void(0)" data-type="Online" class="getCalendar">Online</a></li>
                              <li><a href="javascript:void(0)" data-type="Personally" class="getCalendar">Personally</a></li>
                              <?php }else{?>
                                <li><a href="<?= base_url('consult-online');?>">Online</a></li>
                                <li><a href="<?= base_url('consult-personally');?>">Personally</a></li>
                              <?php }?>
                        </ul>
                      </div> 
                    </h2>
                </div>
            </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Consultation Type</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>consult type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // print_r($consultation);
                            if(count($consultation) > 0){
                                foreach ($consultation as $row) {
                                    $cdate = DateTime::createFromFormat('d/m/Y', $row['date'])->format('Y-m-d');
                                    $tdate = date('Y-m-d');
                                    if($cdate > $tdate){
                                        $class  = 'class="warning"';
                                        $action = '<button type="button" class="fbut rad0 followup" data-id="'.$row['id'].'" style="margin-top:0"> Followup</button>';
                                    }else{
                                        $class  = '';
                                        $action = '';
                                    }
                                    echo '<tr '.$class.'><td>'.ucwords(strtolower($row['onlineoffline'])).'</td><td>'.$row['date'].'</td><td>'.$row['start_time'].' <b>-</b> '.$row['end_time'].'</td><td>'.$row['consulttype'].'</td><td>'.$action.'</td></tr>';
                                }
                            }else{
                                echo '<tr><td colspan="4"> No Appointment</td></tr>';
                            }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>