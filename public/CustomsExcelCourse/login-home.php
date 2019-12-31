<?PHP
require_once("./include/membersite_config.php");
require_once("./include/PrivilegedUser.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

//  $privilegeduser->getByUsername();
 // $privilegeduser->initRoles();

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

	  <script src="css/jquery-latest.js"></script>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Customs Bulletin - Home</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
      <link href="stylesheets_tariffs/style.css">
      <link href="css/responsive.css">
      <link href="css/style.css">

      <link rel="stylesheet" href="css/style.css">
	  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100,900' rel='stylesheet' type='text/css'>

      <link href="css/business-casual.css" rel="stylesheet">
      <link href="css/business-casual.css" rel="stylesheet">
      <link href="css/modern-business.css" rel="stylesheet">

      <script type="text/javascript" language="JavaScript">
  function set_body_height() { // set body height = window height
    $('body').height($(window).height());
  }
  $(document).ready(function() {
    $(window).bind('resize', set_body_height);
    set_body_height();
  });
</script>



<style>
/* Style the buttons */
.btn {
    border-style: none;
    outline: none;
    padding: 5px 10px;
    background-color: ;
    cursor: pointer;
    font-size: 17px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
    background-color: #666;
    color: white;
}
</style>
</head>



 <body>  


 


 	<div class="container">
 <div class="bg-faded p-4 my-4">

          <table width="100%">
          	<tr><td align="center">
          		<div class="theme">
          			<h2 class="theme_" style="color:darkblue">Customs & Excise Department Bulletin</h2>
          		</div>
          	</td></tr>          	
          </table>

          <div class="card-header" role="tab" id="headingNine">
<table align="center">
	<tr>

		
		<td align="center" width="50%"><a href='change-pwd.php'>CHANGE MY PASSWORD</a></td>
		
		<td align="center" width="50%"><a href='logout.php'>LOGOUT</a></td>
	</tr>
          <table width="100% align="center">   
            <tr>
                 <td align="center" width="100%"> 
                  			<h3 class="my-4"> 
                  <div id='fg_membersite_content' align="center">
                  	<table align="center"> 
                  		<tr><td align="center">
						
            Welcome back <?= $fgmembersite->UserFullName(); ?><br>
           

				



Stay Updated With What's Going On.</td></tr><tr><td> Visit the Training Center for Professional Development. View the documents and Quiz yourself to see how much you have learned.   </td>
<td align="center"><a href="/CustomsProcedures/index.php" target="_blank"><img src="images/trainingg.jpg"  height = "70px" width="110px"> </a><br><h5>Click to view Documents</h5></td></tr>
</table></div></h3></td>
            </tr>
          </table></table>

                 <div class="row"><br>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Officer Of The Month</h4>
            <div class="card-body">
              <p class="card-text"><b>Date:</b><br> March 27th <br><br><b>Name Of Officer:</b><br> Include information about oficer</p>
            </div>
            <div class="card-footer">
              <a href="" target = "_blank" class="btn btn-primary">Read About Officer</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Quiz Yourself</h4>
            <div class="card-body">
              <p class="card-text"><b><a href = "./quiz_trade_1.php" target="_blank">Int. Trade & Policy (Level 1)</a></b><br>    <br><br><b>  </b><br>  </p>
            </div>
            <div class="card-footer">
              <a href="./quiz_trade_1.php" target ="_blank" class="btn btn-primary">Take Quiz</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Calendar</h4>
            <div class="card-body">
              <p class="card-text">Insert Interactive Calendar</p>
            </div>
            <div class="card-footer">
              <a href="" target="_blank" class="btn btn-primary">Viee More Upcomming Events</a>
            </div>
          </div>
        </div>
      </div>

          
          





  </div>  



</div>



	<div class="bg-faded p-4 my-4">
          <table width="100%"><tr><td>
          <div class="card-header" role="tab" id="headingOne">
            <table width="100%"><tr><td width="100%" align="center"><h3>Corporate Strategic Plan</h3><br><h3>Policies</h3><br><h3>SOP's</h3><p class="mb-0" align="justify">
            
        

           </p><br> <table><tr><td><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><h5 align="left">View These Docs / Hide These Docs</h5></a></td></tr></table>
              
            </td></tr>
          </table>
          </div></td></tr>
        </table>
        <table width="100%"><tr><td>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
               <a href="/source/procedures_policies/IT Maintenance Procedure Manual.pdf" target="blank" target = "_blank"> IT Resource Maintenance SOP's </a><br><br>
<p align="left"><strong><a href="">Include link to another page or file if necessary</a></strong></p>
            </div>
          </div></td></tr>
        </table>
        </div>


   <div class="bg-faded p-4 my-4">

          <table width="100%"><tr><td>
          <div class="card-header" role="tab" id="headingZero">
            <table width="100%"><tr><td width="100%" align="center"><h3>Memorandums</h3><p class="mb-0" align="justify">
             <!--  <h3>Customs Duties</h3> -->
Some Memo's are available. Others will be added later!
</p><br> <table><tr><td><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="false" aria-controls="collapseZero"><h5 align="">View Memo's / Hide Memo's</h5></a></td><td><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="false" aria-controls="collapseZero"></a>
</td></tr></table>
              
            </td></tr>
          </table>
          </div></td></tr>
        </table>
<div>
        <table width="100%" class =""><tr><td>
          <div id="collapseZero" class="collapse" role="tabpanel" aria-labelledby="headingZero"><br>
            <div class="row"><br>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
              <p class="card-text"><b>Date:</b><br> March 27th <br><br><b>Subject:</b><br> 2019 WCO Fellowship Programme for English-Speakers</p>
            </div>
            <div class="card-footer">
              <a href="memos/WCO 79th Fellowship Programme for English-speakers.pdf" target = "_blank" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
              <p class="card-text"><b>Date:</b><br> March 20th <br><br><b>Subject:</b><br>Recommended Transfer List 2019</p>
            </div>
            <div class="card-footer">
              <a href="memos/Recommended Transfer List 2019.pdf" target ="_blank" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
              <p class="card-text">Insert Date and Topic</p>
            </div>
            <div class="card-footer">
              <a href="PDF/excise exempt list revised.pdf" target="_blank" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo  </h4>
            <div class="card-body">
              <p class="card-text">   
Insert Date and Topic<!--<br><br>Importation from Countries Within the Caribbean Common Market (Caricom)<br>

Imports from Caricom Countries are exempted from the payment of import duty provided the importer produces a Certificate of Origin from the country within the Common Market certifying that the goods were produced within the region of the common market. Some commodities imported from Caricom pay Revenue Replacement Duty (RRD). There are restriction for certain commodities imported from Caricom and requires an Import License from Ministry of Trade prior to importation.--></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
              <p class="card-text">Insert Date and Topic</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
              <p class="card-text">
                Insert Date and Topic

              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo </h4>
            <div class="card-body">
              <p class="card-text">   
Insert Date and Topic

            </div>
            <div class="card-footer">
              <a href="personal_household.html" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
              <p class="card-text">Insert Date and Topic</p></div>
            <div class="card-footer">
              <a href="" class="btn btn-primary">Read Memo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Memo</h4>
            <div class="card-body">
            <p class="card-text">Insert Date and Topic</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Read Memo</a>
            </div>
          </div>        
        </div>         
        </td></tr>
        </table>  
  </div>

  </div>





<div class="bg-faded p-4 my-4">

          <table width="100%"><tr><td>
          <div class="card-header" role="tab" id="headingZeroo">
            <table width="100%"><tr><td width="100%" align="center"><h3> Forms</h3><p class="mb-0" align="justify">
             <!--  <h3>Customs Duties</h3> -->
  Forms for all purposes (internal to Customs) will be added..........


</p><br> <table><tr><td><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseZeroo" aria-expanded="false" aria-controls="collapseZeroo"><h5 align="">View Forms / Hide Forms</h5></a></td><td><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseZeroo" aria-expanded="false" aria-controls="collapseZeroo"></a>
</td></tr></table>
              
            </td></tr>
          </table>
          </div></td></tr>
        </table>

<div>
        <table width="100%" class =""><tr><td>
          <div id="collapseZeroo" class="collapse" role="tabpanel" aria-labelledby="headingZeroo"><br>
            <div class="row"><br>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Form</h4>
            <div class="card-body">
              <p class="card-text"><font color="green"><h5 align="center"> <a href="/toners/index.php" target = "_blank" class="btn btn-primary">Toner Requisition</a></h5></font></p>
            </div>
            <div class="card-footer">
              <a href="/toners/index.php" target = "_blank" class="btn btn-primary">Request Toner</a>
            </div>
          </div>
        </div>
         <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Form</h4>
            <div class="card-body">
              <p class="card-text"><font color="green"><h5 align="center"> <a href="/CZL_BackGateRotation/index.php" target = "_blank" class="btn btn-primary">Corozal Cargo Rotation</a></h5></font></p>
            </div>
            <div class="card-footer">
              <a href="/CZL_BackGateRotation/index.php" target = "_blank" class="btn btn-primary">Import/Export Cargo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Form</h4>
            <div class="card-body">
              <p class="card-text"><font color="green"><h5 align="center"> <a href="" target = "_blank" class="btn btn-primary">Pleasure Craft Permit</a></h5></font></p>
            </div>
            <div class="card-footer">
              <a href="" target="_blank" class="btn btn-primary">Issue Permit</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Form  </h4>
            <div class="card-body">
             <p class="card-text"><font color="green"><h5 align="center"> <a href="" target = "_blank" class="btn btn-primary">Vehicle Transportation Permit</a></h5></font></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Issue TP</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Form</h4>
            <div class="card-body">
              <p class="card-text"><font color="green"><h5 align="center"> <a href="" target = "_blank" class="btn btn-primary">IT Support</a></h5></font></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Request IT Support</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" align="center">Form</h4>
            <div class="card-body">
              <p class="card-text">
                
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Insert Form</a>
            </div>
          </div>
        </div>
      </div>
        
   
      
     
             
        </td></tr>
        </table>  
  </div>
  

</div>






  



</div>
 <footer class="footerbg text-center">
      <div class="container  footerbg">
         <p class="m-0 footerbg" style="color:white">Copyright &copy; Belize Customs and Excise 2018<br>Web Design: Jevon Mckenzie &nbsp;&nbsp;&nbsp; Graphic Design: Julian Chimal</p>
       </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
