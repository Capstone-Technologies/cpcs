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
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Candidate Name</label></div></td>
              	</thead>
                <tbody>
                	<td>
                        <div class="right_update">
                            <span class="update_name_txt"><input type="text" placeholder="First Name" /></span>
                            <span class="update_name_txt"><input type="text" placeholder="Mid Name" /></span>
                            <span class="update_name_txt"><input type="text" placeholder="Last Name" /></span>
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
            				<span class="update_name_txt"><input type="email" placeholder="Email" /></span>
                    </td>
                    <td>
                    	<div class="">
            				<span class="update_name_txt">
                            	<input type="text" placeholder="Mobile" name="mobile" maxlength="15" value="" class="w200"/>
                            </span>
            			</div>
                    </td>
                    
                </tbody>
			</table>

			<table>
            	<thead>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Source</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">SMS Details</label></div></td>
                    <td><div class="add_can_name"><label class="add_can_name_lbl">Email Status</label></div></td>
                </thead>
				<tbody>
					<td>
                    	<div class="update_name_txt">
                        	<select>
                                <option>Self</option>
                                <option>Quikr</option>
                                <option>Naukri</option>
                                <option>Internet</option>
                                <option>Candidate</option>
                                <option>Freelancer</option>
                            </select>                       
                        </div>                
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
                </tbody>

            </table>


			<table>
            	<thead>
                	<td><div class="add_can_name"><label class="add_can_name_lbl">Notes</label></div></td>
                </thead>
                <tbody>
                	<td>
                    	<textarea class="sms_dtls"></textarea>
                    </td>
                </tbody>
            </table>
			<table>
            	<tbody>
                	<td>
                    	<input type="button" value="Save" title="Save Details of the Candidate" />
                    	<input type="button" value="Save & Fill Details" title="Save & Fill Complete Details of the Candidate" />
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