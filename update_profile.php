<?php 
extract($_REQUEST);
if(isset($update))
{
$Upddate = date('d-m-Y h:i:s', time());
$sql=mysqli_query($con,"update user set name='$name',mobile='$mob',Upddate='$Upddate', where where email='$email'");






$err="<font color='blue'>Profile updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($con,"select * from user where email='".$_SESSION['email']."'");
$res=mysqli_fetch_assoc($sql);

?><div class="panel title">
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your New Name [First Name]</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" id="name" name="name"/></td>
				</tr>
				<tr>
					<td>Enter Your Email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="email"/></td>
				</tr>
				
				<tr>
					<td>Enter Your Gender </td>
					<Td><input class="form-control" type="gender" readonly="true" value="<?php echo $res['gender'];?>"  name="gender"/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile Number </td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mob'];?>" id="name" name="mob"/></td>
				</tr>
				
				<tr>
				
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	