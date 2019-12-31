<?php

require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("/source/login.php");
    exit;
}
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

//$link = mysqli_connect("customsbz.mysql.database.azure.com", "uajaldb@customsbz", "bvD52CKH1o518iSGq7MM", "logincredentials");
 
// Check connection
//if($link === false){
 //   die("ERROR: Could not connect. " . mysqli_connect_error());
//}
 
// Escape user inputs for security
header("Location: cargo_register.php");
//$search_req = $_POST['search_req'];
//$search_req = $_POST['search_req']);
//$search_req = mysqli_real_escape_string($link, $_REQUEST['search_req']);
//$date_time_out = date('Y-m-d H:i:s');
$username = $_POST['username'];
$email = $_POST['email'];

//$issued_by = mysqli_real_escape_string($link, $_REQUEST['issued_by']);
//$date_issued = mysqli_real_escape_string($link, $_REQUEST['date_issued']);
//$requisition_number = mysqli_real_escape_string($link, $_REQUEST['requisition_number']);

// echo nl2br("hello\n");
 ?>



 <?php
 
//$requisition = mysql_query('SELECT requisition_number FROM logincredentials.toner_requisition');

//mysql_query("UPDATE toner_requisition SET date_issued='" . $date_issued . "', issued_by='" . $issued_by . "'WHERE requisition_number = '" . $search_req . "'")
//                or die(mysql_error()); 

//mysql_query("UPDATE toner_requisition SET date_issued = '$date_issued' , issued_by = '$issued_by' WHERE requisition_number = '$search_req'");

 $db = mysql_connect("customsbz.mysql.database.azure.com", "uajaldb@customsbz", "bvD52CKH1o518iSGq7MM");
mysql_select_db("logincredentials",$db) or die ('Unable to connect to database');
//NOT WORKING

	mysql_query("UPDATE users SET  email ='$email' WHERE username = '$username'");

//$sql = "UPDATE toner_requisition SET date_issued = '$date_issued' , issued_by = '$issued_by' WHERE requisition_number = '$search_req';"
//if(mysqli_query($link, $sql)){
//	echo "Record was updated successfully.";
//} else {
//	echo "ERROR: Could not be able to execute $sql. ".mysqli_error($link);
//}
//mysqli_close($link);

//if(mysqli_query($link, $sql)){
//    echo "Records added successfully.";
//} else{
 //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
 //$sql = 'SELECT id, requisition_number FROM toner_requisition WHERE $requisition_number = $search_req';
//$upd_result = mysqli_query($conn, $sql);


//$sql = "UPDATE toner_requisition SET issued_by = '$issued_by', date_issued = '$date_issued' WHERE requisition_number = '$search_req'";
//$sql = "INSERT INTO toner_requisition (issued_by, date_issued, search_req) VALUES ('$issued_by', '$date_issued', '$search_req') WHERE search_req = requisition_number";
//if(mysqli_query($link, $sql)){
//    echo "Records added successfully.";
//} else{
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
 

// Attempt insert query execution



// Close connection
mysqli_close($link);
?>
<br><br>
<a href = "/source/login-home.php"> Back to Customs Bulletin</a><br><br>
<a href = "index.php"> Import Another Cargo </a><br><br>
<a href = "index.php"> Export Another Cargo </a><br><br>

<a href='/source/logout.php'>LOGOUT</a>

