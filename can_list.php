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
        	<table>
            	<thead>
                	<td></td>
                    <td></td>
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Candidate Name</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Phone</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Source</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">SMS</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Notes</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Last Update</label></div></td>

              	</thead>
                <tbody>
                	<form action="edit_can.php">
                	<td><input type="image" src="CpCS/images/edit-16.png" title="Edit" /></td>
                    </form>                    
                    <td><input type="image" src="CpCS/images/delete-16.png" title="Remove from list" /></td>
                	<td>
                        <div class="update_name_txt1">
                            <label>Tanwar Yogendra Singh</label>
                        </div>
                    </td>
                    <td>
                    	<div class="update_name_txt1">                    	
            				<label>yogendra.tanwar@gmail.com</label>
						</div>                            
                    </td>
                    <td>
                    	<div class="update_name_txt1">
                            	<label>+91 8744008819</label>
            			</div>
                    </td>
                    <td>
                    	<div class="update_name_txt1">
                        	<label>Quikr</label>                       
                        </div>                
					</td>
                    <td>
                    	<div class="update_name_txt1">
                        	<input type="checkbox" value="Send" />
                        </div>
					</td>
                    <td>
                    	<div class="update_name_txt1">
                        	<input type="checkbox" value="Send" />
                        </div>
					</td>
                    <td>
                    	<div class="update_name_txt1">
                        	<input type="button" value="Show Notes" title="Notes in Popup Window" />
                        </div>
                   	</td>
                    <td>
                    	<div class="update_name_txt1">
                        	<label>12/02/2014</label>                       
                        </div>                
					</td>
                </tbody>
                <tfoot>
                	<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    	<div class="update_name_txt">
                        	<input type="checkbox" value="Send SMS to All" title="Send SMS to All" />
                            <input type="button" value="Send" />
                        </div>
					</td>
                    <td>
                    	<div class="update_name_txt">
                        	<input type="checkbox" value="Send Email to All" title="Send Email to All" />
                            <input type="button" value="Send" />
                        </div>
					</td>
                    <td></td>
                    <td></td>
                </tfoot>
         	</table>
			<table>
            	<tbody>
                	<td>
                    	<input type="button" value="Save" title="Save Details of the Candidate" class="submit_btn" />
                    	<input type="button" value="Save & Fill Details" title="Save & Fill Complete Details of the Candidate" class="submit_btn" />
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