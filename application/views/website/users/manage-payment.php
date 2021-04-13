
<style type="text/css">.custombtn{margin-top:0}th {text-transform:uppercase}</style>
<div class="clearfix margin_top6"></div>
<div class="featured_div19 featured_section56">
    <div class="container animate fadeInRight professsional" data-anim-type="fadeInRight" data-anim-delay="300">
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <h2 class="page-heading text-left"><?=$heading; ?></h2>
            </div>
                
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Invoice Number</th>
                            <th>Amount</th>
                            <th>Transaction Number</th>
                            <th>Transaction ID</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(count($payment) > 0){
                                foreach ($payment as $row) {
                                    $cdate = DateTime::createFromFormat('Y-m-d H:i:s', $row['added_time'])->format('d/m/Y H:i:s A');
                                    echo '<tr><td>'.$row['invoice_id'].'</td><td>'.$row['amount'].'</td><td>'.$row['transaction_no'].' </td> <td>'.$row['transaction_id'].'</td><td>'.$cdate.'</td></tr>';
                                }
                            }else{
                                echo '<tr><td colspan="5"> No Payment</td></tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>