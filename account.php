<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php 
include_once 'dbConnection.php';
session_start();

                if(isset($_SESSION['name']))
                {
                 $value = ($_SESSION['name']);
                  echo strtok ($value, " ");
                }
                else
                { 
                  echo '|| CBT Made';
                }
              ?> || CBT Made</title>
              <link rel="icon" href="image/favicon.png"/>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<script> // navbar stick script..
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});
</script>


</head>
<?php
include_once 'dbConnection.php';
?>

<body>

   
<div class="bg3">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">CBT Made&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <span class="glyphicon glyphicon-calendar" style="font-size:19px"></span> <span style="font-size:20px" id="clockbox"></span></span></div>
  <script type="text/javascript"> 
tday=new Array("Sun","Mon","Tue","Wed","Thur","Fri","Sat");
  tmonth=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
  
  function GetClock(){
  var d=new Date();
  var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
  if(nyear<1000) nyear+=1900;
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
  
  document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+"";
  }
  
  {
  GetClock();
  setInterval(GetClock,1000);
  }
</script>

<div class="col-md-4 col-md-offset-1 ">
 <?php
 include_once 'dbConnection.php';
  if(!(isset($_SESSION['email']))){
header("location:index.php");
}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';

echo '<span class="pull-right top title" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<b></span><a href="?q=9" class="log log1" title="You Are Logged In As '.$name.'"><b>';

 $value = "$name"; echo strtok ($value, " ");

echo '  </b><a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<b>Signout</b></a></span>';

}?>
</div>
</div></div>
<!--navigation menu-->
<nav class="navbar navbar-default title1 ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!--Dashboard -->
    <div class="navbar-header">
      <a class="navbar-brand title" title="CBT Made Dashboard" >Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav title">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;<b>Home</b><span class="sr-only"></span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;<b>History</b></a></li>
		<li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;<b>Ranking</b></a></li>
    <li <?php if(@$_GET['q']==9) echo'class="active"'; ?>><a href="account.php?q=9"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;<b>Profile</b></a></li>
    <li <?php if(@$_GET['?page']=='feedback') echo'class="active"'; ?>><a href="?page=feedback"><span class="????" aria-hidden="true" title="Feedback">????</span><b> Feedback</b></a></li>
    <li <?php if(@$_GET['?page']=='feedback') echo'class="active"'; ?>><a href="?page=feedback"><span class="????" aria-hidden="true" title="Chat">????</span><b> Chat</b></a></li>
		<li> <a href="logout.php?q=account.php"> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;<b>Log Out</b></a></li>
		</ul>
            <form class="navbar-form navbar-left" method="GET" action="search.php">
        <div class="form-group">
          <input style="border-radius: 2em" type="text" name="tag" class="form-control" placeholder="Search..." required="required" />
          <input style="border-radius: 1em" type="submit" id="x" value="Search" class="btn btn-default"/>
        </div>
    
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->

<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
  <div class="timer">???: <span id="timebox" style=" font-family: 'typo'"></span></div>
  <!--Update Page start -->
 <?php 
    @$page=  $_GET['page'];
      if($page!="")
      {
        if($page=="update_password")
      {
        include('update_password.php');
      
      }
      
        if($page=="update_profile")
      {
        include('update_profile.php');
      
      }
      if($page=="feedback")
      {
        include('give_feedback.php');
      
      }
      if($page=="search_client")
      {
        include('search.php');

      }
      }
      else
      {
      
      ?>
      <!--Update Page ends -->
      <!--Update Profile -->
      <?php if(@$_GET['q']==9) {

echo '<br><div class="panel"><div class="table-responsive">
<center><tr style="color:#990000" ><a href="?page=update_profile"><button class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Update Profile</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="?page=update_password"><button class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Update Password</button></a></tr></center></div></div>';
echo '<div class="panel title"><center><tr style="color:#990000" >"This site is protected by reCAPTCHA and the Google <a href=https:policies.google.com/privacy>Privacy Policy</a> and <a href=https:policies.google.com/terms>Terms of Service</a> apply."</center></div>';}
}?><br><br>
<!--Update Profile Ends -->
  <!--Default Page-->
  <?php if(@$_GET['q']==45) {
    echo '<div class="panel "><center><h1 class="title cd-headline clip" style="color:#660033"><span class="cd-words-wrapper"><b class="is-visible fw_300">You are Welcome,</b>
     <b class="fw_300">'.$name.'!!</b></h1><center><br /></div><br><br><br><br><br>';
    }?>
    <!--Default Page Ends-->
    <!-- Default welcome page -->
     <?php if(@$_GET['q']==47) {
    echo '<div class="panel responsive"><center><h1 class="title cd-headline clip" style="color:#660033"><span class="cd-words-wrapper">
    <b class="is-visible fw_300">Welcome Back,</b>
     <b class="fw_300">'.$name.'!!</b></h1><center><br /></div><br><br><br><br><br>';
    }?>
<!--home start-->
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title">
<tr><td><b>S.N.</b></td><td><b>Course</b></td><td><b>Total Question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;Min</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true" ></span>&nbsp;<span class="title1" class="start" ><b>Start</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This Quiz is Already Taken By You" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;Min</td>
	<td><b><div title="This Quiz is Already Taken By You"><a class="pull-right btn sub1" style="margin:0px;background:red" ><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Taken </b></span></a></b></div></td></tr>';
}
}
$c=0;
echo '</table></div></div>';

}?>

<script type="text/javascript">
  function GetTime(){
  var d=new Date();
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
  
  if(nhour===0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}
  
  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;
  
  document.getElementById('timebox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
  }
  
  {
  GetTime();
  setInterval(GetTime,1000);
  }
</script>
<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
echo '<div class="panel" style="margin:4%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
$a=mysqli_query($con,"SELECT * FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($a) )
{
$title=$row['title'];
$desc=$row['intro'];
$time=$row['time'];
}
echo '<b style="color:orange ; font-size:20px;">'.$title.' </b>: <b style="font-size:20px;">'.$desc.'</b><br/><br>';
echo '<b style="font-family:typo ; font-size:15px;">Question '.$sn.': '.$qns.'?</b><br /><br />';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST" class="form-horizontal"> ';

while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<div style="font-family:typo"><input type="radio" required="required" name="ans" value="'.$optionid.'">&nbsp;'.$option.'<br /><br /></div>';
}
echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
echo  '<div class="panel"><div class="table-responsive">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$per =round((($r / $qa) * 100),2);
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
// Translates a precentage grade into a letter grade based on our customized scale.
function translateToGrade($per) {
    if ($per >= 90.0) { return "A????"; }
    else if ($per >= 80.0) { return "B????"; }
    else if ($per >= 70.0) { return "C????"; }
    else if ($per >= 60.0) { return "D????"; }
    else if ($per >= 50.0) { return "Average"; }
    else if ($per >= 40.0) { return "PASS"; }
    else { return "FAIL"; }
}


echo '<tr style="color:#AAAA11"><td>Username</td><td>'.$name.'</td></tr>
      <tr style="color:#66BBII"><td>Course Title</td><td>'.$title.'</td></tr>
      <tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>Right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>
  <tr style="color:#66CCGG"><td>Percentage&nbsp;<span class="glyphicon glyphicon-check" aria-hidden="true"></span></td><td>'.$per.'% - '.translateToGrade($per) .'</td></tr>';
}
$q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '<center<tr style="color:#990000"  onclick="window.print()"><button class="btn btn-primary"><b>Download Result&nbsp;</b><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button></tr></center> <br><br>';
echo '</table></div></div>';
}
?>

<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Course</b><td><b>Course ID</b></td></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr style="font-family:typo"><td>'.$c.'</td><td>'.$title.'</td><td>'.$eid.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td><td><b><a href="account.php?q=result&eid='.$eid.'" class="btn btn-primary" style="margin:0px;border-radius: 1em;">&nbsp;<span class="title1"><b>Result</b></span></a></b></td>';

echo '<td><b><a href="account.php?q=details&eid='.$eid.'" class="btn btn-primary" style="margin:0px;border-radius: 1em;">&nbsp;<span class="title1"><b>Details</b></span></a></b></td></tr>';
}
echo'</table></div></div><br>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1">
    <p>????<b>Note: Rankings Are Based On The Number Of Courses And Its Marking Scheme Each User Takes.</b></p>
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr style="font-family:typo"><td><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div></div>';}
?>

<!-- Result Details Start here -->
<?php
if(@$_GET['q']== 'details' && @$_GET['eid'] ) 
{
$eid=@$_GET['eid'];


$q=mysqli_query($con,"SELECT * FROM quiz WHERE  eid='$eid' " );
while($row=mysqli_fetch_array($q) )
{
$title=$row['title'];
$desc=$row['intro'];

}
echo '<div class="panel title"> 
<center><h1 class="title" style="color:#660033">Questions & Answers</h1><center>
<h3 class="col-md-6">Test : '.$title.'</h3><h3 class="col-md-6">Test ID : '.$eid.'</h3>
<p style="margin-left:-550px;">Description : '.$desc.'</p> ';



$q=mysqli_query($con,"SELECT `eid`, `qid`, `qns`, `choice`, `sn` FROM `questions` WHERE  eid='$eid' " );
while($row=mysqli_fetch_array($q) )
{
$qid=$row['qid'];
$qns=$row['qns'];
$sn=$row['sn'];
}
$sn=@$_GET['sn'];
echo '<b style="font-family:typo">Question '.$sn.': '.$qns.'?</b><br /><br />';
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
while($row=mysqli_fetch_array($q) )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<div style="font-family:typo"><input  required="required" name="ans" readonly="true" value="'.$optionid.'">&nbsp;'.$option.'<br /><br /></div>';
}

   $q=mysqli_query($con,"SELECT * FROM answer WHERE qid='$qid' " );
while($row=mysqli_fetch_array($q) )
{
$ansid=$row['ansid'];
$qid=$row['qid'];

  echo 'Ans : '.$ansid.' ';
}
// still working on how to get the full question from the server....
}
                     ?>

</div></div></div>
<!--Footer start-->
<br><br><br><br><br><br></br><br><br>
<div class="row footer title">
<h5 style="color: gold;"><p>Welcome. Be sure you stay safe ????????????????????</p></h5>
</div>
<!--footer end-->
</body></body></div>
</html>
<link  rel="stylesheet" href="css/animated-headline.css"/>
<script src="js/animated-headline.js"></script>

<!--
    [[[[[[[[[[[[[[[       ]]]]]]]]]]]]]]]
    [::::::::::::::       ::::::::::::::]
    [::::::::::::::       ::::::::::::::]
    [::::::[[[[[[[:       :]]]]]]]::::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[       CBT MADE        ]:::::]
    [:::::[ localhost/online-exam ]:::::]
    [:::::[       EmeditWEB       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [::::::[[[[[[[:       :]]]]]]]::::::]
    [::::::::::::::       ::::::::::::::]
    [::::::::::::::       ::::::::::::::]
    [[[[[[[[[[[[[[[       ]]]]]]]]]]]]]]]

     --> 