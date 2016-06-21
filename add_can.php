<?php 
include "config.php";
session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <form action="insert_temp.php" method="post">
    	<div class="fill1">
        	<table>
            	<thead>
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Candidate Name</label></div></td>
              	</thead>
                <tbody>
                	<td>
                        <div class="right_update">
             <span class="update_name_txt"><input type="text" placeholder="First Name" name="f_name" value="<?php if(isset($_SESSION["f_name"])){ echo $_SESSION["f_name"]; unset($_SESSION["f_name"]); }?>" /></span>
    <span class="update_name_txt"><input type="text" placeholder="Mid Name" name="m_name" value="<?php if(isset($_SESSION["m_name"])){ echo $_SESSION["m_name"]; unset($_SESSION["m_name"]); } ?>" /></span>
                            <span class="update_name_txt"><input type="text" placeholder="Last Name" name="l_name" value="<?php if(isset($_SESSION["l_name"])){ echo $_SESSION["l_name"]; unset($_SESSION["l_name"]); }?>" /></span>
                        </div>
                    </td>
                </tbody>
         	</table>
			<table>
            	<thead>
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Phone</label></div></td>                    
                </thead>
				<tbody>
                    <td class="email_tble">                    	
            				<span class="update_name_txt"><input type="email" placeholder="Email" name="email" value="<?php if(isset($_SESSION["email"])){ echo $_SESSION["email"]; unset($_SESSION["email"]); }?>" /> <?php if(isset($_SESSION['Err06'])){ echo $_SESSION['Err06']; unset($_SESSION['Err06']); }?>  </span>
                    </td>
                    <td>
                    	<div class="">
            				<span class="update_name_txt">
                            	<input type="text" placeholder="Mobile" name="mobile" maxlength="15" 
                                 value="<?php if(isset($_SESSION["mobile"])){ echo $_SESSION["mobile"]; unset($_SESSION["mobile"]); }?>" class="w200" />
                            </span>
            			</div>
					<td><?php if(isset($_SESSION['Err01'])){ echo $_SESSION['Err01']; unset($_SESSION['Err01']); }?>
						<?php if(isset($_SESSION['Err02'])){ echo $_SESSION['Err02']; unset($_SESSION['Err02']); }?>
						<?php if(isset($_SESSION['Err03'])){ echo $_SESSION['Err03']; unset($_SESSION['Err03']); }?></td>
                </tbody>
			</table>
			<table>
            	<thead>
                    <td><div class="add_can_name"><label class="add_can_name_lbl" >Source</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl" >SMS Details</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email Status</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Industry Intersted</label></div></td>
                </thead>
				<tbody>
					<td>
                    	<div class="update_name_txt">
                        	<select name="source">
                           <option <?php  if(!(isset($_SESSION['source']))){ echo "selected"; } ?> value="-1" >--Select Source--</option>
                          <option value="Self" <?php if(isset($_SESSION['source']) && $_SESSION['source']=="Self"){ echo "selected"; unset($_SESSION['source']); }?> >Self</option>
                          <option value="Quikr" <?php if(isset($_SESSION['source']) && $_SESSION['source']=="Quikr"){ echo "selected"; unset($_SESSION['source']);  }?> >Quikr</option>
                         <option value="Naukri" <?php if(isset($_SESSION['source']) && $_SESSION['source']=="Naukri"){ echo "selected"; unset($_SESSION['source']); }?> >Naukri</option>
                   <option value="Internet" <?php if(isset($_SESSION['source']) && $_SESSION['source']=="Internet"){ echo "selected"; unset($_SESSION['source']); }?> >Internet</option>
                <option value="Candidate" <?php if(isset($_SESSION['source']) && $_SESSION['source']=="Candidate"){ echo "selected"; unset($_SESSION['source']); }?> >Candidate</option>
            <option value="Freelancer" <?php if(isset($_SESSION['source']) && $_SESSION['source']=="Freelancer"){ echo "selected"; unset($_SESSION['source']);  }?> >Freelancer</option>
                            </select>     
                            <?php if(isset($_SESSION['Err04'])){ echo $_SESSION['Err04']; unset($_SESSION['Err04']); }?>                  
                        </div>      
					</td>
                    <td>
                    	<div class="update_name_txt">
                        	<input type="checkbox"  name="smssent" value="smssent" <?php if(isset($_SESSION['smssent'])){echo "checked"; unset($_SESSION['smssent']);}?>/>
                        </div>
					</td>
                    <td>
                    	<div class="update_name_txt">
                        	<input type="checkbox" name="emailsent" value="emailsent" <?php if(isset($_SESSION['emailsent'])){echo "checked"; unset($_SESSION['emailsent']);}?> />
                        </div>
					</td> 
                    <td>
                    	<div class="update_name_txt">
                        	<input type="text" name="indus_intrst" value="indus_intrst" />
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
                    	<textarea class="sms_dtls" name="notes"><?php if(isset($_SESSION['notes'])){echo $_SESSION['notes']; unset($_SESSION['notes']);}?></textarea>
                        <?php if(isset($_SESSION['Err05'])){ echo $_SESSION['Err05']; unset($_SESSION['Err05']); }?>
                    </td>
                </tbody>
            </table>
			<table>
            	<tbody>
                	<td>
                    	<input type="submit"  name="Save"  value="save" title="Save Details of the Candidate" class="submit_btn" />
                        <input type="submit" name="continue"  value="continue" title="Save and Continue" class="submit_btn" />               
                        <input type="submit"  name="SendMail" value="SendMail" title="Save & Fill Complete Details of the Candidate" class="submit_btn" />                         
                    </td>
                </tbody>
            </table>
        </div>
        </form>
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