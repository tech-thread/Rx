<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Quanfey";
$dbname = "doctor";

$con = mysql_connect($dbhost, $dbuser, $dbpass) or die("sorry not connected!" . mysql_error());
mysql_select_db($dbname) or die("sorry no db selected" . mysql_error());

function addMed($mname) {
    $mname = clean($mname);
    $sql = "INSERT INTO medicine(`m_id`,`medicine_name`)
           VALUES ('','$mname')";
    if (mysql_query($sql) > 0) {
        success("Added successfull.");
    } else {
        error("Added Failed.");
    }
}

function viewMed(){
    $sql = "SELECT * FROM medicine";
    $result = mysql_query($sql);

    print '<table class="table table-bordered">';
    print '<th style="color:green" ><center>Medicine Name</center></th>
            <th style="color:green" ><center>Action</center></th>';

    while ($row = mysql_fetch_assoc($result)) {
        ?> 
        <tr>
            <td><?php echo "<center>" . $row['medicine_name'] . "</center>" ?></td> 
            <td><center>
            <a class="btn btn-primary btn-xs" role="button" href="medicine.php?id=<?php print @$id; ?>&edit=<?php print $row['m_id']; ?>"><i class="fa  fa-trash-o"></i> Edit</a>    
            <a class="btn btn-danger btn-xs" role="button" href="medicine.php?id=<?php print $id; ?>&delete=<?php print $row['m_id']; ?>"  onclick="return confirm('Are you sure?');"><i class="fa  fa-trash-o"></i> Delete</a>
        </center></td>
        </tr>
        <?php
    }
    print '</table>';
  
}

function getMed($id) {
    $data = mysql_fetch_array(mysql_query("SELECT * FROM medicine WHERE m_id= '$id' "));
    return $data;
}

function editMed($id,$mname) {
    if (mysql_query("UPDATE medicine SET medicine_name = '$mname' WHERE m_id= '$id' ")) {
        success("Successfully updated.");
    } else {
        error("Database problem!");
    }
}

function deleteMed($id) {
    $id = clean($id);
    if (mysql_query("DELETE FROM medicine WHERE m_id='$id'")) {
        success("Deleted Successfully .");
    } else {
        error("Database problem!");
    }
}

function clean($value) {
    return mysql_real_escape_string($value);
}

function error($msg) {
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php print $msg ?>
    </div>
    <?php
}

function success($msg) {
    ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="">×</button>
        <?php print $msg ?>
    </div>
    <?php
}