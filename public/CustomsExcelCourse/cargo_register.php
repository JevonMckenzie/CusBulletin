<?PHP
require_once("./include/membersite_config.php");
//require_once("./include/PrivilegedUser.php");

if(!$fgmembersite->CheckLoginRegister())
{
    $fgmembersite->RedirectToURL("noaccess.php");
    exit;
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CZL Cargo Rotation Export</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >

        <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>

  <script LANGUAGE="JavaScript">
<!--
function confirmSubmit()
{
var agree=confirm("Please double check the data that you entered. Are you sure you wish to continue?");
if (agree)
 return true ;
else
 return false ;
}
// -->
</script>

 <script>

$(function() {

  // v2.24.6, change popup print & close button text
  // See print_now description
  $.tablesorter.language.button_print = "Print";
  $.tablesorter.language.button_close = "Close";

  $(".tablesorter").tablesorter({
    theme: 'blue',
    widgets: ["zebra", "filter", "print", "columnSelector"],
    widgetOptions : {
      columnSelector_container : $('#columnSelector'),
      columnSelector_name : 'data-name',

      print_title      : '',          // this option > caption > table id > "table"
      print_dataAttrib : 'data-name', // header attrib containing modified header name
      print_rows       : 'f',         // (a)ll, (v)isible, (f)iltered, or custom css selector
      print_columns    : 's',         // (a)ll, (v)isible or (s)elected (columnSelector widget)
      print_extraCSS   : '',          // add any extra css definitions for the popup window here
      print_styleSheet : '../css/theme.blue.css', // add the url of your print stylesheet
      print_now        : true,        // Open the print dialog immediately if true
      // callback executed when processing completes - default setting is null
      print_callback   : function(config, $table, printStyle) {
        // do something to the $table (jQuery object of table wrapped in a div)
        // or add to the printStyle string, then...
        // print the table using the following code
        $.tablesorter.printTable.printOutput( config, $table.html(), printStyle );
      }
    }
  });

  $('.print').click(function() {
    $('.tablesorter').trigger('printTable');
  });

});


 </script>
       
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <h2>Corozal Cargo Rotation (Update User Permission)</h2>
                 <table width=100%>
                    <tr><td><h5><a href = "../CZL_BackGateRotation/index.php"> Import Cargo</a></h5></td><td width=""></td><td width=""><a href="../CZL_BackGateRotation/all.php">View / Print All Cargo Imports & Exports</a></td></tr></table><br><br>


                    <form method="post" id="reused_form" action ='action_register.php'>
                        <table>
                            <tr>


                        <td>
                        <div class="form-group">
                            <label for="username" width = "20%"> Username:</label>
                            <input type="text" class="form-control" width = "20%" id="username" name="username" required maxlength="50">
                        </div>
                                </td>
                            

                         
                    


                       
                                <td>
                          <div class="form-group" width = "20%">
                            <label for="email" align="center">Permissions:</label>
                            <input type="text" class="form-control" width = "5%" id="email"
                             name="email" required maxlength="50">
                        </div>
                                </td>
   
                                 

                          

                            


                           <td>
                            <div class="form-group">
                          
                        <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs" onClick='return confirmSubmit()'>Update Privilage &rarr;</button></div>

                    </td></tr></table></form>
                
</div>
</div>



 <div id="divToPrint" style="display:none;">
                    <div style="width:200px;height:300px;background-color:teal;">
                        <?php 
                        echo $html; 
                        ?>      
                    </div>
                </div>


                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Update User Privilage Successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error updating user privilage. </div>
                </div>
            </div>
        </div><br>

        <h3 align="center"> Users Who Currently Have Access To Cargo Rotation </h3><br>
        <h4 align="center"> Set User Permission To "cargo.rotation@customs.gov.bz" To ADD Users To the Cargo Rotation Access List</h4><br>
        <h4 align="center"> Set User Permission To "None" To Remove Users From the Cargo Rotation Access List</h4>

<?php

$servername = "customsbz.mysql.database.azure.com";
$username = "uajaldb@customsbz";
$password = "bvD52CKH1o518iSGq7MM";
$dbname = "logincredentials";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT username, email
 FROM users';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
   
    <body>
        <div id="container" align="center" >
          
            <table class="table table-bordered table-condensed" style="width:100%; empty-cells:hide;">
             
                    <tr>
                        <th align="center">username</th>
                        <th align="center">Permission</th>
                     
                      
                        
                       
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        
                        <tr align="center" <?php if($row['email'] == "cargo.rotation@customs.gov.bz"): ?>>
                            <td align="center"><?php echo htmlspecialchars($row['username']); ?></td>
                            <td align="center"><?php echo htmlspecialchars($row['email']); ?></td>
                            
                           
                            <?php endif; ?>
                        </tr>



                    <?php endwhile; ?>
                    

                </tbody>
            </table>
            </div>
</div>
</body>
</html>