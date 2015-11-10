<?php
include 'template/header.html';
?>

<div class="well">
  <div class="page-header">
    <h3>Patient Entry Form</h3>
  </div>
  <form method="post" action="insert.php">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Patient Name</label>
          <input type="text" class="form-control" name="patientName">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Age</label>
          <input type="text" class="form-control" name="patientAge">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Weight</label>
          <input type="text" class="form-control" name="patientWeight">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Date</label>
          <input type="text" class="form-control date-ui" name="appointmentDate" placeholder="DD/MM/YYYY">
        </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" rows="2" id="textArea" name="comments"></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-default btn-custom">Submit</button>
      </div>
      <!-- <a href="#null" class="medium secondary button" onclick="printContent('printTable')"><i class="fa fa-print"></i> Print</a> -->
    </div>
  </form>
</div>

<?php
include 'template/footer.html';
?>