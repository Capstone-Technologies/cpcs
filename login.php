<?php 
include "config.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CPCS</title>

<style>
.wrapper3{ margin:150px 0 0 0;}

.content4 table{ padding:10px 20px; color:#fff; font-size:20px;}

.content4 table tr td{ padding:10px;}

.content4 table tr td input{ width:300px; height:35px;}

.buttons{ background-color:#f76013; border: medium none; color: #FFFFFF; height: 36px; outline: medium none; cursor:pointer;}

</style>
</head>

<body>
<div class="wrapper3">
 <!--springer logo starts-->
                            <div class="springer_logo">
                              
                            </div>
                        <!--springer logo closed-->
                        
                        
                        
                         
            <div class="content4" style=" width:500px !important; margin:0 auto !important;">            
                       
<form method="post" action="" >
<table cellpadding="0" cellspacing="10" border="0" align="center">
<tr>
<td> Name: </td>
<td><input name="popusername" type="text" value="" class=""  required/></td>
</tr>
<tr>
<td> Password: </td>
<td><input name="password" type="password" value=""  required/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" class="submit_button" value="Submit"></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	function convert($str,$ky=''){ 
	//if($ky=='')return $str; 
	$ky=str_replace(chr(32),'',$ky); 
	if(strlen($ky)<8)exit('key error'); 
	$kl=strlen($ky)<32?strlen($ky):32; 
	$k=array();for($i=0;$i<$kl;$i++){ 
	$k[$i]=ord($ky{$i})&0x1F;} 
	$j=0;for($i=0;$i<strlen($str);$i++){ 
	$e=ord($str{$i}); 
	$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e); 
	$j++;$j=$j==$kl?0:$j;} 
	return $str; 
	}

	$popusername=$_POST['popusername'];
	$key='0123456789';
	$poppwd=mysqli_real_escape_string($con,convert($_POST['password'],$key));

	$query=mysqli_query($con,"Select * from login where UserName='".$popusername."' AND UserPass='".$poppwd."'");
	$val=mysqli_fetch_array($query);
	$num=mysqli_num_rows($query);
	
	if($num>=1)
	{
		$_SESSION['aname']=$popusername;	
		header("Location: index1.php");
	    exit();		
	}
	else 
	{
		print("<script language='javascript'> alert('Username and Password mismatch...');</script>");
	}
} 
?>