<?php 
include "config.php";

session_start();
//Set Date 
date_default_timezone_set('Asia/Calcutta');
$cand_date=date('d-m-Y H:i:s');

//Check if POST 

if($_SERVER['REQUEST_METHOD']=="POST")
{ 
	 
$designation=$_SESSION["designation"]=$_POST["designation"];
$tot_exp=$_SESSION["tot_exp"]=$_POST["tot_exp"];
$cur_experience=$_SESSION["cur_experience"]=$_POST["cur_experience"];
$cur_city=$_SESSION["cur_city"]=$_POST["cur_city"];
$company=$_SESSION["company"]=$_POST["company"];
$cur_indus=$_SESSION["cur_indus"]=$_POST["cur_indus"];
$cur_func=$_SESSION["cur_func"]=$_POST["cur_func"];
$appl_indus=$_SESSION["appl_indus"]=$_POST["appl_indus"];
$f_name=$_SESSION["f_name"]=$_POST["fname"];
$m_name=$_SESSION["m_name"]=$_POST["mname"];
$l_name=$_SESSION["l_name"]=$_POST["lname"];
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
	$cur_city_pattern='/^[A-Za-z][A-Za-z ]+$/';
	$company_pattern="/^[A-Za-z][A-Za-z ]+$/";
	$email_pattern='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	$mobile_pattern="/^[9876][0-9]{9}$/";

	if($f_name=="" && $m_name=="" && $l_name=="")
	{
		$_SESSION['ERRMSG1'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Enter the candidates Name</span>";
		}
		
	if($designation=="-1")
	{
		$_SESSION['ERRMSG2'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Enter the candidates Name</span>";
		}
		
	if($tot_exp=="-1")
	{
		$_SESSION['ERRMSG3'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select the candidates total experience</span>";
		}
	
	if($cur_experience=="-1")
	{
		$_SESSION['ERRMSG4'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select the candidates Current experience</span>";
		}	
		
	if($cur_city=="-1")
	{
		$_SESSION['ERRMSG5'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select the candidates city </span>";
		}
		
	if($company=="")
	{
		$_SESSION['ERRMSG6'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please enter the candidates company </span>";
		}
			
	if($cur_indus=="-1")
	{
		$_SESSION['ERRMSG7'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select the candidates current industry </span>";
		}
		
	if($cur_func=="-1")
	{
		$_SESSION['ERRMSG8'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select the candidates Function </span>";
		}
		
	if($appl_indus=="-1")
	{
		$_SESSION['ERRMSG9'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select the candidates Applied Industry</span>";
		}
		
	if($email=="")
	{
			$_SESSION['ERRMSG10'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please enter Email </span>";
			$flag="true";
	}
	
	if($email!="")
	{
	if(!preg_match($email_pattern,$email))
			{
				$_SESSION['ERRMSG10'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Email is not valid </span>";
				$flag="true";
			}}	
	
	if($mobile=="")
	{	
		$_SESSION['ERRMSG11'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please enter Candidates mobile number </span>";
			$flag="true";
	}
	if($mobile!="")
	{			
	if(!preg_match($mobile_pattern,$mobile))
			{
					   $_SESSION['ERRMSG11'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Mobile is not valid </span> ";
					   $flag="true";
			}	}	
	if($source=="")
	{
		$_SESSION['ERRMSG13']="<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Please select a source</span>";
		$flag="true";
		}
		
  $notes=mysqli_real_escape_string($con,$notes);
  
   if($notes=="")
   {
	 $_SESSION['ERRMSG14']="<span style='font-family:Calibri; font-size:14px; color:#ff0000;'> Please add notes</span>";
	 $flag="true";
	 }
	 
	  if (empty($_FILES['file']['name'])) {
		  $_SESSION['ERRMSG12'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>Please Select a File to Upload.</span>";
		  $flag="true";	 
		   }
		//	$allowedExts = array("pdf", "doc", "docx");
		   
		if ($_FILES["file"]["error"] > 0)
		  {
		  $_SESSION['ERRMSG12'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>".$_FILES['file']['error']."</span>";
	     $flag="true";	 
		   }
		if(file_exists("upload_resume/" . $_FILES["file"]["name"]))
		  {
		  $_SESSION['ERRMSG12'] = "<span style='font-family:Calibri; font-size:14px; color:#ff0000;'>".$_FILES["file"]["name"]." is an already exists</span>";
		  $flag="true";	  
			 }
		
				 
	if($flag=="true")	 
	{
	  header("Location: add_can_detls.php");
	  exit();
	 }
  move_uploaded_file($_FILES["file"]["tmp_name"],"upload_resume/".$_FILES["file"]["name"]);	 
$notes = nl2br(htmlspecialchars($notes, ENT_QUOTES));
		
//Insertion through SP
$query=mysqli_query($con,"CALL PER_INSERT('$cand_id','$f_name','$m_name','$l_name','$designation','$tot_exp','$cur_experience','$cur_city','$company','$cur_indus','$cur_func','$appl_indus','$email','$mobile','$file','$source','$smssent','$emailsent','$notes','$cand_date')");

header("Location: add_can_detls.php");
 

}

?> 