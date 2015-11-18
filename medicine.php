<?php
require_once '.\assets\helper\adminAuh.php';
if (isset($_POST['save'])) {
    $mname = $_POST['name'];
    addMed($mname);
}

if (isset($_GET['delete'])) {
    deleteMed($_GET["delete"]);
}

if (isset($_POST['edited'])) {
    $id = $_POST['id'];
    $mname = $_POST['mname'];
    editMed($id, $mname);
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>E-Prescription</title>

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->

        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <link href="assets/css/home.css" rel="stylesheet">
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet">  

        <!-- Custom Fonts -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Medi-Care</a>
                </div>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!-- Home -->
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Control Desk</a>
                            </li>

                            <!-- Manage Prescription-->
                            <li>
                                <a href="prescription.php"><i class="fa fa-sitemap fa-fw"></i> Prescription</a>
                            </li>

                            <!-- Manage Medicine -->
                            <li>
                                <a href="medicine.php"><i class="fa fa-book fa-fw"></i>  Medicine</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Medicine</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-plus-circle"></i> Add Medicine </div>
                    <div class="panel-body"> 
                        <form role="form" action="medicine.php" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2"> Medicine Name:</label>
                                <div class="col-sm-6">
                                    <input type="text" name='name' class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" name='save'class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>         
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-cog"></i> Medicine Listing </div>
                    <div class="panel-body"> 
                        <?php viewMed(); ?>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title text-info" id="myModalLabel">Edit Candidate Name</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                            if (isset($_GET['edit'])) {
                                $id = clean($_GET['edit']);
                                $data = getMed($id);
                            }
                            ?>
                            <form class="form-horizontal" role="form" action="medicine.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="col-sm-9">
                                        <input name="id" type="hidden" value="<?php print $data['m_id']; ?>">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Medicine Name:</label>
                                    <div class="col-sm-6">
                                        <input value="<?php print $data['medicine_name']; ?>"type="text" name="mname" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" name="edited" class="btn btn-success">Update</button>
                                </div>
                            </form>
                            <!-- </form> -->         
                        </div>
                    </div>
                </div>
            </div>

        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="assets/js/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="assets/js/sb-admin-2.js"></script>
        <script type="text/javascript">
            //dismiss any alert message box
            $(".alert").delay(1000).fadeTo(1000, 500).slideUp(200, function () {
            $(this).alert('close');
            });
        </script>
        <?php
        /** show Edit box * */
            if (isset($_GET['edit'])) {
        ?> 
        <script type="text/javascript">
            $(function () {
                $('#modal').modal('show');
            });
        </script>
        <?php
        }
        ?>

    </body>
</html>
