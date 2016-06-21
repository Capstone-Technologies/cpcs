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
    	<div class="fill1">
        	<div class="can_search">
            	<table class="tab1">
            	<tbody>
                	<td><input class="can_search_tbl" type="search" placeholder="Search Candidate by Phone, Email or Name" value="" name="Candidate Search" /></td>
                    <td><img src="CpCS/images/search-9-16.png" class="img_srch" /></td>
                    <td><input type="button" value="Search" class="can_search_inpt submit_btn1" /></td>
                </tbody>
            </table>
            </div>
        	<div class="rslt_disp">
            	<table>
					<tbody>
                        <td><div class="add_can_name"><label class="add_can_name_lbl">Name</label></div></td>
                        <td><div class="update_name_txt1"><label>Tanwar, Yogendra Singh</label></div></td>
						<td><div class="add_can_name"><label class="add_can_name_lbl">Current Designation</label></div></td>
                        <td><span class="update_name_txt1"><label>Manager</label></span></td>
                        <td><div class="add_can_name"><label class="add_can_name_lbl">Organization</label></div></td>
                        <td><span class="update_name_txt1"><label>Capstone Consultant</label></span></td>
						<td><div class="add_can_name"><label class="add_can_name_lbl">Location</label></div></td>
                        <td><span class="update_name_txt1"><label>Gurgaon</label></span></td>
                    </tbody>
                    <tbody>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Current Industry</label></div></td>
                        <td><div class=""><span class="update_name_txt1"><label>IT</label></span></div></td>
	                    <td><div class="add_can_name"><label class="add_can_name_lbl">Functional Area</label></div></td>
                        <td><div class=""><span class="update_name_txt1"><label>IT Software - Mainframe</label></span></div></td>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Total Exp</label></div></td>
                    	<td><span class="update_name_txt1"><label>12 Years</label></span></td>
                        <td><div class="add_can_name"><label class="add_can_name_lbl">Current Exp</label></div></td>
                        <td><span class="update_name_txt1"><label>1 Years</label></span></td>
                    </tbody>
                    <tbody>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Source</label></div></td>
                        <td><div class="update_name_txt1"><label>Quikr</label></div></td>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Notes</label></div></td>
                        <td><div class="update_name_txt1"><label>Notes</label></div></td>
                        <td><div class="add_can_name"><label class="add_can_name_lbl">SMS</label></div></td>
                        <td><div class="update_name_txt1"><input type="checkbox" checked="checked" disabled="disabled" /></div></td>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                        <td><div class="update_name_txt1"><input type="checkbox" checked="checked" disabled="disabled" /></div></td>
                    </tbody>
                    <tbody>
                    	<td><div class="add_can_name"><label class="add_can_name_lbl">Email:</label></div></td>
                        <td><span class="update_name_txt1"><label>yogendra.tanwar@gmail.com</label></span></td>
						<td><div class="add_can_name"><label class="add_can_name_lbl">Phone:</label></div></td>
                        <td><span class="update_name_txt1"><label>+91 8744008819</label></span></td>
						<td><div class="add_can_name"><label class="add_can_name_lbl">Resume</label></div></td>
                        <td><span class="update_name_txt1"><label>Yogi.pdf</label></span></td>
						<td><div class="add_can_name"><label class="add_can_name_lbl">last Updated</label></div></td>
                        <td><span class="update_name_txt1"><label>12/02/2014</label></span></td>
                    </tbody>
                </table>
				<table class="tab1">
                	<tbody>
                		<td><input type="image" src="CpCS/images/edit-16.png" title="Edit, takes to edit_can.php" /></td>
                    	<td><input type="image" src="CpCS/images/delete-16.png" title="Remove from list" /></td>
                        <td><input type="image" src="CpCS/images/phone-16.png" title="Call this candidate, take to add_notes_pop.php" /></td>
                    </tbody>
                </table>
            </div>
        	<!--<table>
            	<thead>
                	<td></td>
                    <td></td>
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Candidate Name</label></div></td>
	                <td><div class="add_can_name"><label class="add_can_name_lbl">Designation</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Total Exp</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Current Exp</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Company</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Current Industry</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Functional Area</label></div></td>
	                <td><div class="add_can_name"><label class="add_can_name_lbl">Industry Applied</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Phone</label></div></td>
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Upload Resume</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Source</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">SMS</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Notes</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Last Update</label></div></td>
              	</thead>
                <tbody>
                	<td><input type="image" src="CpCS/images/edit-16.png" title="Edit" /></td>
                    <td><input type="image" src="CpCS/images/delete-16.png" title="Remove from list" /></td>
	               	<td>
                        <div class="update_name_txt1">
                            <label>Tanwar Yogendra Singh</label>
                        </div>
                    </td>
                	<td>
                    	<span class="update_name_txt">
                        	<label>Manager</label>
                        </span>
                    </td>
                    <td>
                    	<span class="update_name_txt">
							<label>12 Years</label>
                       	</span>
                 	</td>
                    <td>
                    	<span class="update_name_txt">
							<label>1 Years</label>
                        </span>
                 	</td>
                    <td>                    	
            			<span class="update_name_txt"><label>Company</label></span>
                    </td>
                    <td>
                    	<div class="">
            				<span class="update_name_txt"><label>IT</label></span>
            			</div>
                    </td>
                    <td>
                    	<div class="">
            				<span class="update_name_txt"><label>IT Software - Mainframe</label></span>
            			</div>
                    </td>
                	<td>
                    	<div class="">
            				<span class="update_name_txt"><label>Accounting/Finance</label></span>
            			</div>
                    </td>
                    <td>                   	
            			<span class="update_name_txt"><label>yogendra.tanwar@gmail.com</label></span>
                    </td>
                    <td>
                    	<div class="">
            				<span class="update_name_txt"><label>Mobile</label></span>
            			</div>
                    </td>
                	<td>                    	
            				<span class="update_name_txt"><label>Yogi.pdf</label></span>
                    </td>
					<td>
                    	<div class="update_name_txt"><label>Quikr</label></div>                
					</td>
                    <td>
                    	<div class="update_name_txt">
                        	<input type="checkbox" />
                        </div>
					</td>
                    <td>
                    	<div class="update_name_txt">
                        	<input type="checkbox" />
                        </div>
					</td>                
                	<td>
                    	<label>Notes</label>
                    </td>
					<td>
                    	<label>Date</label>
                   	</td>
            </table>-->
			<table>
            	<tbody>
                	<td>
                    	<input type="button" value="Save" title="Save Details of the Candidate" class="submit_btn" />
                    </td>
                </tbody>
            </table>
        </div>
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