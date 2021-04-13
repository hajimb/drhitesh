<div>
  <style type="text/css">
    .borderr>thead>tr>th, .borderr>tbody>tr>th, .borderr>tfoot>tr>th, .borderr>thead>tr>td, .borderr>tbody>tr>td, .borderr>tfoot>tr>td {
    border-top: 1px solid #673636;
}
  </style>
  <table class="table borderr">
    <tr>
      <td>Name</td>
      <td><?php echo $result->first_name.' '.$result->middle_name.' '.$result->last_name ;?></td>
    </tr>
    <tr>
      <td>Patient ID</td>
      <td><?php echo $result->patient_id;?></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><?php echo $result->dob;?></td>
    </tr>
    <tr>
      <td>Marital Status</td>
      <td><?php echo $result->maritalstatus;?> Since <?php echo $result->marital_since;?></td>
    </tr>
    <tr>
      <td>Contact Number</td>
      <td><?php echo $result->country_code;?> <?php echo $result->mobile;?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $result->emailaddress;?></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><?php echo $result->qualification;?></td>
    </tr>
    <tr>
      <td>Occupation</td>
      <td><?php echo $result->occupation;?></td>
    </tr>
  </table>
</div>