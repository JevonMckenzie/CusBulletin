<?php
require_once $_SERVER['DOCUMENT_ROOT']."/source/Role.php";
require_once $_SERVER['DOCUMENT_ROOT']."/source/PrivilegedUser.php";

require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}


// connect to database...

/*$servername = "customsbz.mysql.database.azure.com";
$username = "uajaldb@customsbz";
$password = "bvD52CKH1o518iSGq7MM";
$dbname = "logincredentials";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
// ...


session_start();

if (isset($_SESSION["loggedin"])) {
    $u = PrivilegedUser::getByUsername($_SESSION["loggedin"]);
}

if ($u->hasPrivilege("thisPermission")) {
    // do something
}

?>