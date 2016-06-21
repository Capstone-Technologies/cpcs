<?php 
include "config.php";
session_start();
$get_id=mysqli_fetch_array(mysqli_query($con,"select max(cand_id) from temp_data"));
$candidate_id=$get_id[0];
$query=mysqli_query($con,"select f_name,m_name,l_name,cand_email,cand_phone,cand_source,cand_smssent,cand_emailsent,cand_notes from temp_data where cand_id =".$candidate_id."");
$row=mysqli_fetch_array($query);
$f_name=$row['f_name'];
$m_name=$row['m_name'];
$l_name=$row['l_name'];
$cand_email=$row['cand_email'];
$cand_phone=$row['cand_phone'];
$cand_source=$row['cand_source'];
$cand_smssent=$row['cand_smssent'];
$cand_emailsent=$row['cand_emailsent'];
$cand_notes=$row['cand_notes'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="CpCS/images/favicon.ico" />
<title>Capstone Consultancy Services</title>
<link href="index.css" media="all" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="top_bar">
	<div class="top_bar_cont">		
        <div class="blank_top_bar_all">
        </div>
        <div class="logo_all">
        	<img src="CpCS-Logo_39x39.png" height="39" width="39" alt="CpCS Logo" />
        </div>        
        <div class="logo_capt_all">
        	<img src="cpcs_banner_787x39.png" height="25" width="534" alt="Capstone Consultancy Services" />
        </div>
        <div class="lgn_all">
        	<div class="lgn_btn">
            	<a href="#">Login</a>
                <a href="#">Register</a>
            </div>
            <div class="frgt_pass">
            	<a href="#">Forgot Password? Click Here</a>
            </div>
        </div>
	</div>
</div>
<div class="top_botm_bar_all">
	<div class="top_botm_bar_cont_all">	
        
        
        <div class="menu_all" id="drop_menu_all">
        	<ul>
            	<li>Home</li>
                <li>Services
                	<ul>
                    	<li><a href="hcm.php">Human Capital Management</a></li>
                        <li><a href="bi.php">Business Inteligence</a></li>
                        <li><a href="bt.php">Business Transformation</a></li>
						<li><a href="ctd.php">Corporate Training & Development</a></li>
						<li><a href="bvc.php">Background Verification Checks</a></li>
						<li><a href="oep.php">Overseas Education & Placements</a></li>
                    </ul>
                </li>
                <li>Clients</li>
                <li>About US
                	<ul>
                    	<li>Human Capital Management</li>
                        <li>Business Inteligence</li>
                    </ul>
                </li>
                <li>Contact</li>
            </ul>
        </div>
	</div>
</div>

<div class="main_indx_div" >
    <div class="cont_all">
    	<div class="nav_top">
			<ul>
            	<li class="nav_all_li"><a class="nav_all" href="add_can.php">New Candidate</a></li>
                <li class="nav_all_li"><a class="nav_all" href="add_can_detls.php">Full Candidate Details</a></li>
                <li class="nav_all_li"><a class="nav_all" href="can_list.php">Call List</a></li>
                <li class="nav_all_li"><a class="nav_all" href="can_detls_list.php">Database</a></li>
                <li class="nav_all_li"><a class="nav_all" href="#">Scheduled</a></li> 
                <li class="nav_all_li"><a class="nav_all" href="#">Shortlisted</a></li>
            </ul>
		</div>
        <blockquote>
          <form action="insert_perdata.php" method="post" enctype="multipart/form-data">
            <div class="fill1">
              	<table>
					<thead>
                      <td><div class="add_can_name"><label class="add_can_name_lbl">Candidate Name</label></div></td>
                      <td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                      <td><div class="add_can_name"><label class="add_can_name_lbl">Phone</label></div></td>
	                </thead>
	                <tbody>
                      <td class="can_name_td">
                            <div class="can_name_td_box">
                              <span class="update_name_txt"><input type="text" name="fname" placeholder="First Name" value="<?php if($f_name!="") {echo $f_name;} ?>"/></span>
                              <span class="update_name_txt"><input type="text" name="mname" placeholder="Mid Name"  value="<?php if($m_name!="") {echo $m_name;} ?>" /></span>
                              <span class="update_name_txt"><input type="text" name="lname" placeholder="Last Name" value="<?php if($l_name!="") {echo $l_name;} ?>" />
                            <br/><?php if(isset($_SESSION['ERRMSG1'])){echo $_SESSION['ERRMSG1'];}unset($_SESSION['ERRMSG1']);?> </span>
                              </div>
                            </td>
						<td class="email_tble">                    	
                          <span class="update_name_txt"><input type="text" name="email" placeholder="Email" value="<?php echo $cand_email; ?>" />
                           <br/><?php if(isset($_SESSION['ERRMSG10'])){echo $_SESSION['ERRMSG10'];}unset($_SESSION['ERRMSG10']);?> </span>
                        </td>
                        <td>
                          <div class="">
                            <span class="update_name_txt">
                              <input type="text" placeholder="Mobile" name="mobile" maxlength="15" value="<?php echo $cand_phone; ?>"   class="w200"/>
                             <br/><?php if(isset($_SESSION['ERRMSG11'])){echo $_SESSION['ERRMSG11'];}unset($_SESSION['ERRMSG11']);?> </span>
                            </span>
                            </div>
                        </td>                            
	                 </tbody>
                </table>
				<table>
                	<thead>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Company</label></div></td>
	                    <td><div class="add_can_name"><label class="add_can_name_lbl">Designation</label></div></td>
                        <td><div class="add_can_name"><label class="add_can_name_lbl">Current Exp</label></div></td>
                        <td><div class="add_can_name"><label class="add_can_name_lbl">Total Exp</label></div></td>
                    </thead>
                    <tbody>
                    	<td>                    	
                        	<span class="update_name_txt"><input name="company" type="text" placeholder="Company" value="<?php echo $_SESSION['company']; ?>" /></span>
                         	<br/><?php if(isset($_SESSION['ERRMSG6'])){echo $_SESSION['ERRMSG6'];}unset($_SESSION['ERRMSG6']);?> 
                        </td>
                    	<td>                    	
                  	<span class="update_name_txt unt_desig">
                          <!--Entry made in Database-->
                          <?php $designation_db=mysqli_query($con,"select * from cur_desig"); ?>
                          <select name="designation" id="desig"> 
                            <option <?php if(!(isset($_SESSION['designation']))){ echo "selected"; } ?> value="-1" >Select Designation</option>
                            <?php while($qual_val=mysqli_fetch_array($designation_db)) {?>
                            <option <?php if(isset($_SESSION['designation']) && $_SESSION['designation']== $qual_val['can_desig']){ echo "selected"; }?> value="<?php echo $qual_val['can_desig']; ?>"><?php echo $qual_val['can_desig']; ?></option> 
                            <?php } ?>
                            <?php unset($_SESSION['designation']); ?>
                          </select>
                          <br/><?php if(isset($_SESSION['ERRMSG2'])){echo $_SESSION['ERRMSG2'];}unset($_SESSION['ERRMSG2']);?> 
                            
                          </span>
                        </td>
						<td>
                        	<div class="can_name_td_exp">                    	
                                <span class="update_name_txt exp_ym">
                                <?php $cur_db=mysqli_query($con,"select * from cur_exp"); ?>
                                    <select name="cur_experience" id="exp"> 
                                        <option <?php if(!(isset($_SESSION['cur_experience']))){ echo "selected"; } ?> value="-1" >-Year-</option>
                                    <?php while($qual_exp=mysqli_fetch_array($cur_db)) {?>
                                        <option <?php if(isset($_SESSION['cur_experience']) && $_SESSION['cur_experience']== $qual_exp['cur_exp']){ echo "selected"; }?> value="<?php echo $qual_exp['cur_exp']; ?>"><?php echo $qual_exp['cur_exp']; ?></option> 
                                <?php } ?>
                                <?php unset($_SESSION['cur_experience']); ?>
                                    </select>
                                <br/><?php if(isset($_SESSION['ERRMSG4'])){echo $_SESSION['ERRMSG4'];}unset($_SESSION['ERRMSG4']);?> 
                                
                                </span>
                                <span class="update_name_txt exp_ym">
                                	<?php $cur_db=mysqli_query($con,"select * from cur_exp"); ?>
                              		<select name="cur_experience" id="exp"> 
                                        <option <?php if(!(isset($_SESSION['cur_experience']))){ echo "selected"; } ?> value="-1" >-Month-</option>
                                        <?php while($qual_exp=mysqli_fetch_array($cur_db)) {?>
                                        <option <?php if(isset($_SESSION['cur_experience']) && $_SESSION['cur_experience']== $qual_exp['cur_exp']){ echo "selected"; }?> value="<?php echo $qual_exp['cur_exp']; ?>"><?php echo $qual_exp['cur_exp']; ?></option> 
                                        <?php } ?>
                                        <?php unset($_SESSION['cur_experience']); ?>
                              		</select>
                              		<br/><?php if(isset($_SESSION['ERRMSG4'])){echo $_SESSION['ERRMSG4'];}unset($_SESSION['ERRMSG4']);?> 
                              </span>
                          </div>
                        </td>
						<td>
                        	<div class="can_name_td_exp">                   	
                          <span class="update_name_txt exp_ym">
                            <?php $exp_db=mysqli_query($con,"select * from cur_exp"); ?>
                          <select name="tot_exp" id="exp"> 
                            <option <?php if(!(isset($_SESSION['tot_exp']))){ echo "selected"; } ?> value="-1" >-Year-</option>
                            <?php while($qual_exp=mysqli_fetch_array($exp_db)) {?>
                            <option <?php if(isset($_SESSION['tot_exp']) && $_SESSION['tot_exp']== $qual_exp['cur_exp']){ echo "selected"; }?> value="<?php echo $qual_exp['cur_exp']; ?>"><?php echo $qual_exp['cur_exp']; ?></option> 
                            <?php } ?>
                            <?php unset($_SESSION['tot_exp']); ?>
                          </select>
                          
                            <?php $exp_db=mysqli_query($con,"select * from cur_exp"); ?>
                          <select name="tot_exp" id="exp"> 
                            <option <?php if(!(isset($_SESSION['tot_exp']))){ echo "selected"; } ?> value="-1" >-Month-</option>
                            <?php while($qual_exp=mysqli_fetch_array($exp_db)) {?>
                            <option <?php if(isset($_SESSION['tot_exp']) && $_SESSION['tot_exp']== $qual_exp['cur_exp']){ echo "selected"; }?> value="<?php echo $qual_exp['cur_exp']; ?>"><?php echo $qual_exp['cur_exp']; ?></option> 
                            <?php } ?>
                            <?php unset($_SESSION['tot_exp']); ?>
                          </select>
                          <br/><?php if(isset($_SESSION['ERRMSG3'])){echo $_SESSION['ERRMSG3'];}unset($_SESSION['ERRMSG3']);?> 
                            
                          </span>
                          </div>
                        </td>
                    </tbody>                
                </table>
              	<table>
                	<thead>
                  		
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Current Industry</label></div></td>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Functional Area</label></div></td>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Preferred Industry</label></div></td>                   
            		</thead>
                  	<tbody>
                        <td>
                          <div class="">
                            <span class="update_name_txt unt_ci">
                            <!--Entry made in Database-->
                              <?php $cur_industry=mysqli_query($con,"select * from indus_type"); ?>
                            <select name="cur_indus" > 
                              <option <?php if(!(isset($_SESSION['cur_indus']))){ echo "selected"; } ?> value="-1" >---Current Industry---</option>
                              <?php while($qual_curindus=mysqli_fetch_array($cur_industry)) {?>
                              <option <?php if(isset($_SESSION['cur_indus']) && $_SESSION['cur_indus']== $qual_curindus['indus_name']){ echo "selected"; }?> value="<?php echo $qual_curindus['indus_name']; ?>"><?php echo $qual_curindus['indus_name']; ?></option> 
                              <?php } ?>
                              <?php unset($_SESSION['cur_indus']); ?>
                            </select>
                            <br/><?php if(isset($_SESSION['ERRMSG7'])){echo $_SESSION['ERRMSG7'];}unset($_SESSION['ERRMSG7']);?> 
                            </select>
                            </span>
                            </div>
                        </td>
                        <td>
                          <div class="">
                            <span class="update_name_txt unt_fa">
                            <!--Entry made in Database-->
                              <?php $cur_function=mysqli_query($con,"select * from func_area"); ?>
                            <select name="cur_func" > 
                              <option <?php if(!(isset($_SESSION['cur_func']))){ echo "selected"; } ?> value="-1" >Select Functional Area</option>
                              <?php while($qual_curindus=mysqli_fetch_array($cur_function)) {?>
                              <option <?php if(isset($_SESSION['cur_func']) && $_SESSION['cur_func']== $qual_curindus['func_name']){ echo "selected"; }?> value="<?php echo $qual_curindus['func_name']; ?>"><?php echo $qual_curindus['func_name']; ?></option> 
                              <?php } ?>
                              <?php unset($_SESSION['cur_func']); ?>
                            </select>
                            <br/><?php if(isset($_SESSION['ERRMSG8'])){echo $_SESSION['ERRMSG8'];}unset($_SESSION['ERRMSG8']);?> 
                            </select>
                            </span>
                            </div>
                        </td>
                        <td>
                        	<div class="">
                          	<span class="update_name_txt unt_pi">
                          <!--Entry made in Database-->
                            <?php $appl_industry=mysqli_query($con,"select * from indus_type"); ?>
                          <select name="appl_indus" > 
                            <option <?php if(!(isset($_SESSION['appl_indus']))){ echo "selected"; } ?> value="-1" >---Preferred Industry---</option>
                            <?php while($qual_appindus=mysqli_fetch_array($appl_industry)) {?>
                            <option <?php if(isset($_SESSION['appl_indus']) && $_SESSION['appl_indus']== $qual_appindus['indus_name']){ echo "selected"; }?> value="<?php echo $qual_appindus['indus_name']; ?>"><?php echo $qual_appindus['indus_name']; ?></option> 
                            <?php } ?>
                            <?php unset($_SESSION['appl_indus']); ?>
                          </select>
                          <br/><?php if(isset($_SESSION['ERRMSG9'])){echo $_SESSION['ERRMSG9'];}unset($_SESSION['ERRMSG9']);?> 
                          </select>
                          </span>
                          </div>
                    	</td>
                	</tbody>
                </table>
              	<table>
                	<thead>
                    </thead>
	                <tbody>
	                </tbody>
                </table>
              	<table>
                <thead>
	                <td><div class="add_can_name"><label class="add_can_name_lbl">Current Location</label></div></td>
    	            <td><div class="add_can_name"><label class="add_can_name_lbl">Preferred Location</label></div></td>
			        <td><div class="add_can_name"><label class="add_can_name_lbl">Upload Resume</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Source</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">SMS Status</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email Status</label></div></td>
                    </thead>
					<tbody>
						<td>
                          <span class="update_name_txt unt_loc">
                          <!--Entry made in Database-->
                          <?php $cur_loc=mysqli_query($con,"select * from cur_city"); ?>
                          <select name="cur_city" > 
                            <option <?php if(!(isset($_SESSION['cur_city']))){ echo "selected"; } ?> value="-1" >--Current Location--</option>
                            <?php while($qual_city=mysqli_fetch_array($cur_loc)) {?>
                            <option <?php if(isset($_SESSION['cur_city']) && $_SESSION['cur_city']== $qual_city['city_name']){ echo "selected"; }?> value="<?php echo $qual_city['city_name']; ?>"><?php echo $qual_city['city_name']; ?></option> 
                            <?php } ?>
                            <?php unset($_SESSION['cur_city']); ?>
                          </select>
                          <br/><?php if(isset($_SESSION['ERRMSG5'])){echo $_SESSION['ERRMSG5'];}unset($_SESSION['ERRMSG5']);?> 
                            
                          </span>
                        </td>
                        <td>
                          <span class="update_name_txt unt_loc">
                          <!--Entry made in Database-->
                          <?php $cur_loc=mysqli_query($con,"select * from cur_city"); ?>
                          <select name="cur_city" > 
                            <option <?php if(!(isset($_SESSION['cur_city']))){ echo "selected"; } ?> value="-1" >--Select--</option>
                            <?php while($qual_city=mysqli_fetch_array($cur_loc)) {?>
                            <option <?php if(isset($_SESSION['cur_city']) && $_SESSION['cur_city']== $qual_city['city_name']){ echo "selected"; }?> value="<?php echo $qual_city['city_name']; ?>"><?php echo $qual_city['city_name']; ?></option> 
                            <?php } ?>
                            <?php unset($_SESSION['cur_city']); ?>
                          </select>
                          <br/><?php if(isset($_SESSION['ERRMSG5'])){echo $_SESSION['ERRMSG5'];}unset($_SESSION['ERRMSG5']);?> 
                            
                          </span>
                        </td>                  	
                      	<td>                    	
                        <span class="update_name_txt"><input type="file" name="file">
                         <br/><?php if(isset($_SESSION['ERRMSG12'])){echo $_SESSION['ERRMSG12'];}unset($_SESSION['ERRMSG12']);?> </span>
                        </td>
                        <td>
                          <div class="update_name_txt unt_src">
                            <select name="source"  >
                              <option <?php if($cand_source==""){ echo "selected"; } ?> value="-1"><?php echo $cand_source; ?> Select Source</option>
                              <option <?php if($cand_source=="Self"){ echo "selected"; } ?> value="Self">Self</option>
                              <option <?php if($cand_source=="Employee"){ echo "selected"; } ?> value="Employee">Employee</option>
                              <option <?php if($cand_source=="Quikr"){ echo "selected"; } ?> value="Quikr">Quikr</option>
                              <option <?php if($cand_source=="Quikr"){ echo "selected"; } ?> value="Shine">Shine</option>
                              <option <?php if($cand_source=="Naukri"){ echo "selected"; } ?> value="Naukri">Naukri</option>
                              <option <?php if($cand_source=="Internet"){ echo "selected"; } ?> value="Internet">Internet</option>
                              <option <?php if($cand_source=="Candidate"){ echo "selected"; } ?> value="Candidate">Candidate</option>
                              <option <?php if($cand_source=="Freelancer"){ echo "selected"; } ?> value="Freelancer">Freelancer</option>
                              </select>                       
                               <br/><?php if(isset($_SESSION['ERRMSG13'])){echo $_SESSION['ERRMSG13'];}unset($_SESSION['ERRMSG13']);?> 
                            </div>                
                        </td>
                        <td>
                          <div class="update_name_txt">
                            <input name="sms" <?php if($cand_smssent!=""){ echo "checked";} ?> type="checkbox" />
                            </div>
                        </td>
                        <td>
                          <div class="update_name_txt">
                            <input name="emailsent" type="checkbox" <?php if($cand_emailsent!=""){ echo "checked";} ?> />
                            </div>
                        </td>                
                        </tbody>
                        
                </table>
              	<table>
                <thead>
                  <td><div class="add_can_name"><label class="add_can_name_lbl">Notes</label></div></td>
                    </thead>
                  <tbody>
                      <td>
                        <textarea class="sms_dtls" name="notes" ><?php echo $cand_notes; ?></textarea>
                         <br/><?php if(isset($_SESSION['ERRMSG14'])){echo $_SESSION['ERRMSG14'];}unset($_SESSION['ERRMSG14']);?> </td>
                        </tbody>
                </table>
              	<table>
                <tbody>
                  <td>
                    <input type="submit" value="Save" title="Save Details of the Candidate" />
                    </td>
                    </tbody>
                </table>
            </div>
            </form>
        </blockquote>
    </div>
</div>
<footer>
<div class="top_botm_bar_all">
	<div class="top_botm_bar_cont_all">
    </div>
</div>    
</footer>
</body>
</html>