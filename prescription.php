<?php require_once '.\assets\helper\header.html'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Prescription</h1>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-lg-6"><strong>Describtion</strong></div>
                <div class="col-lg-6">
                    <form method="post" action="insert.php">
                        <div class="form-group">
                            <label for="dname">Doctor's Name: </label>
                            <input type="text" class="form-control" id="dname" placeholder="Doctor's Name">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>  
    </div>
    <hr>           
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-plus-circle"></i> Creatre Prescribtion </div>
        <div class="panel-body"> 
            <form method="post" action="insert.php">
                <div class="row">
                    <div class="col-md-3">
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
                    <div class="col-md-3">
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
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>


        <script src="assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        
        <script src="assets/js/metisMenu.min.js"></script>
        
        <!-- Custom Theme JavaScript -->
        <script src="assets/js/sb-admin-2.js"></script>
        
    </body>
    </html>
    