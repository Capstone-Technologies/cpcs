<?php 
include "config.php";

session_start();
//Set Date 
date_default_timezone_set('Asia/Calcutta');
$cand_date=date('d-m-Y H:i:s');

//Check if POST 

if($_SERVER['REQUEST_METHOD']=="POST")
{ 
	 
$f_name=$_SESSION["f_name"]=$_POST["f_name"];
$m_name=$_SESSION["m_name"]=$_POST["m_name"];
$l_name=$_SESSION["l_name"]=$_POST["l_name"];
$email=$_SESSION["email"]=$_POST["email"];
$mobile=$_SESSION["mobile"]=$_POST["mobile"];
$source=$_SESSION["source"]=$_POST["source"];
$smssent=$_SESSION["smssent"]=$_POST["smssent"];
$emailsent=$_SESSION["emailsent"]=$_POST["emailsent"];
$notes=$_SESSION["notes"]=$_POST["notes"];


	//Flag Set
	$flag="false";
		
	// Validations
//	$name_pattern="/^[A-Za-z][A-Za-z ]+$/";       
	$email_pattern='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	$mobile_pattern="/^[9876][0-9]{9}$/";

	
	if($email=="" && $mobile=="")
	{
			$_SESSION['Err01'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please enter Email or Phone Number </span>";
			$flag="true";
	}
	
	if($email!="")
	{
	if(!preg_match($email_pattern,$email))
			{
				$_SESSION['Err02'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Email is not valid </span>";
				$flag="true";
			}}		
	
	if($mobile!="")
	{			
	if(!preg_match($mobile_pattern,$mobile))
			{
					   $_SESSION['Err03'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Mobile is not valid </span> ";
					   $flag="true";
			}	}	
	if($source=="-1")
	{
		$_SESSION['Err04']="<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Please select a source</span>";
		$flag="true";
		}
		
  $notes=mysqli_real_escape_string($con,$notes);
  
   if($notes=="")
   {
	 $_SESSION['Err05']="<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Please add notes</span>";
	 $flag="true";
	 }
		 
	if($flag=="true")	 
	{
	  header("Location: add_can.php");
	  exit();
	 }
	 
	$notes = nl2br(htmlspecialchars($notes, ENT_QUOTES));
		
//Check if already recommended
if($email=="")
{
	$email="none";
	}
	
	
$sql = mysqli_query($con,"CALL SP_SEL('$email',@ECOUNT)") or die("Query fail: " . mysqli_error($con));
$row = mysqli_fetch_array($sql);
$num_rows = $row[0];
mysqli_next_result($con);

if($num_rows == 0)
{
//Insertion through SP
$query=mysqli_query($con,"CALL SP_INSERT('$f_name','$m_name','$l_name','$email','$mobile','$source','$smssent','$emailsent','$notes','$cand_date')");

// If Save
if(isset($_POST['Save'])) 
{
	unset($_SESSION["f_name"]);
unset($_SESSION["m_name"]);
unset($_SESSION["l_name"]);
unset($_SESSION["email"]);
unset($_SESSION["mobile"]);
unset($_SESSION['source']);
unset($_SESSION['smssent']);
unset($_SESSION['emailsent']);
unset($_SESSION['notes']);
	
	header("Location: add_can.php");
	exit();
}

// If Continue
else if(isset($_POST['continue'])) 
	{
		header("Location: add_can_detls.php");
	    exit();
		}

//if SAVE n mail
else if(isset($_POST['SendMail'])) 
{
	
//Mail Setting 
	require_once "email.php";
	$smtp_user = "resume@cpcs.in";
	$smtp_pass = "ggnard01";
	
//Send Mail to User
$to=$email;
$subject='Welcome to Capstone Consultancy Services';
$from='resume@cpcs.in';
$message="<tr>
   <td bgcolor='#fafafa' style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000;' >
   Dear ".$f_name."&nbsp;".$m_name."&nbsp;".$l_name."  Below are the details registered with Capstone Consultancy Services.
     </td>
 </tr>
 
   <tr><td style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000;'><strong>Name:</strong> ".$f_name."&nbsp;".$m_name."&nbsp;".$l_name."</td></tr>
  <tr><td style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000;'><strong>Email:</strong> ".$email."</td></tr>
  <tr><td style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000; padding-bottom:20px;'><strong>Mobile:</strong> ".$mobile."</td></tr>
  ";
    $mail = new EMail;
	$mail->Username = $smtp_user;
	$mail->Password = $smtp_pass;
	
	$mail->SetFrom($from,"Capstone Consultancy Services");
	$mail->AddTo($to);
	$mail->Subject = $subject;
	$mail->Message = $message;
	
	//Optional stuff
	$mail->ContentType = "text/html";        		// Defaults to "text/plain; charset=iso-8859-1"
	$mail->Headers['X-SomeHeader'] = 'abcde';		// Set some extra headers if required
	$mail->ConnectTimeout = 30;		// Socket connect timeout (sec)
	$mail->ResponseTimeout = 8;		// CMD response timeout (sec)
	
	
if($mail->Send())
{	
// Send to Admin
$from1=$to;
	$subject1="New Registration done by ".$f_name."&nbsp;".$m_name."&nbsp;".$l_name;
	$to1="resume@cpcs.in";
	$message1="<tr>
  <td bgcolor='#fafafa' style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000;' >
   Dear ".$f_name."&nbsp;".$m_name."&nbsp;".$l_name."  Below are the details registered with Capstone Consultancy Services.
     </td>
 </tr>
<tr><td style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000;'><strong>Name:</strong> ".$f_name."&nbsp;".$m_name."&nbsp;".$l_name."</td></tr>
  <tr><td style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000;'><strong>Email:</strong> ".$email."</td></tr>
  <tr><td style='font-family:Calibri; font-size:16px; padding:10px 0px; color:#000000; padding-bottom:20px;'><strong>Mobile:</strong> ".$mobile."</td></tr>
  ";    
        $header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$header .= 'From: Capstone Consutancy Services <'.$from1.'>' . "\r\n";
		
		//mail smtp code 
		$mail1 = new EMail;
		$mail1->Username = $smtp_user;
		$mail1->Password = $smtp_pass;
		
		$mail1->SetFrom($from1,"Capstone Consultancy Services");
		$mail1->AddTo($to1);
		$mail1->Subject = $subject1;
		$mail1->Message = $message1;
		
		//Optional stuff
		$mail1->ContentType = "text/html";        // Defaults to "text/plain; charset=iso-8859-1"
		$mail1->Headers['X-SomeHeader'] = 'abcde';	// Set some extra headers if required
		$mail1->ConnectTimeout = 30;		// Socket connect timeout (sec)
		$mail1->ResponseTimeout = 8;		// CMD response timeout (sec)
		


  if($mail1->Send())
	{
	header("Location: add_can.php");
    exit();
	}
	else
	{
	 echo 'Mail error: '; 
	 exit();
	}
	}
	else
	{
		 echo 'Mail error: '; 
		 exit();
	} 
	
	}
	
}
else
{
	$_SESSION['Err06'] = "<font color='#FF0000' size='-1'> Email already exists! </font>";
	$_SESSION['flag1']=1;
	header("Location: add_can.php");
	exit();
	}
}

//} */



?> 