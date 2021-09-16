<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $password=="")
	{
	$err="<font color='green'><center>Please Fill all the fileds first!!</center></font>";	
	}
	else
	{
$password=md5($password);	

$sql=mysqli_query($con,"select * from user where password='$password'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$np=md5($np);
	date_default_timezone_set('Africa/Lagos');
	$passUpdate = date('d-m-Y h:i:sa', time());
	$sql=mysqli_query($con,"update user set password='$np', passUpdate= '$passUpdate' where email='$email'");
	$err="<font color='blue'><center>Password updated successfully.</center></font>";
    session_destroy();
    echo "<b class='panel title'>Redirecting to Login page...</b>";
    echo "<script>window.top.location='\index.php';</script>";
	}
	else
	{
	$err="<font color='purple'><center>New password do not match !!</center></font>";
	}
}

else
{

$err="<font color='red'><center>Wrong Old Password !!</center></font>";

}
}
}

?>
<div class="panel title">
  <?php $q=mysqli_query($con,"SELECT * FROM user WHERE  email='$email' " );
  while($row=mysqli_fetch_array($q) )
{
$passUpdate=$row['passUpdate'];
}
echo '<div class="panel-heading"><h4>Last Updation Date:&nbsp;&nbsp;'.$passUpdate.'</h4>';
 ?>
 </div>

<h2 align="center">Update Password</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Old Password</div>
		<div class="col-sm-5">
		<input type="password" name="password"  class="form-control" onBlur="checkpass()" required="required" /></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control" required="required" /></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"> Confirm New Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control" required="required" /></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div><br>
	<p>📌<b>Note: You'll be redirected to the Login page after Password Update.</b></p>
</form>
