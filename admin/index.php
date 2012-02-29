
<?php 
// Page title
$pageTitle='Admin Area';

require("../includes/config.php");
include $include . 'admin_header.php';

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 

?> 

<div id="login">
	<div class="innerLogin">
		<h1>Login</h1> 
		
		<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
		    <p><label for="txtUsername">Username:</label> 
		    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p> 
		
		    <p><label for="txtpassword">Password:</label> 
		    <br /><input type="password" title="Enter your password" name="txtPassword" /></p> 
		
		    <p><input type="submit" name="Submit" value="Login" /></p> 		
		</form>
		<a href="../index.html">Home Page</a> 
	</div>
</div> 
<?php 

} 
else { 

?>                                                                   
<div id="login">
	<div class="innerLogin">
		<h2>Click the download button to create and download a CSV file containing all of the RSVP's.</h2> 
		<a class="download" href="export.php">Download</a><br /><br />
		<a href="index.php">Logout</a>        
	</div>
</div>                                                             
<?php 
}                                      
?>  

<?php include $include . 'admin_footer.php'; ?>                 