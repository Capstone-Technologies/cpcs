<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="index.css" media="all" type="text/css" rel="stylesheet" />
</head>

<body>
	
	<div class="notes_pop_main">
    	<div class="close_btn">
    		<a href="#">X</a>
    	</div>
    	<table class="notes_pop_tbl">
        	<thead>
            	<td><div class="update_name_txt"><label class="add_can_name_lbl">Name:</label></div></td>
                <td><div class="update_name_txt"><label class="add_can_name_lbl">Email:</label></div></td>
                <td><div class="update_name_txt"><label class="add_can_name_lbl">Phone:</label></div></td>
            </thead>
        	<tbody>
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
			</tbody>                
		</table>
		<table class="notes_pop_tbl">
        	<thead>
            	<td><div class="update_name_txt"><label class="add_can_name_lbl">Company:</label></div></td>
                <td><div class="update_name_txt"><label class="add_can_name_lbl">Position:</label></div></td>
                <td><div class="update_name_txt"><label class="add_can_name_lbl">Status:</label></div></td>
            </thead>
        	<tbody>
            	<td>
                    <div class="update_name_txt1">
                        <select>
                        	<option value="">Future Generali</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="update_name_txt1">
                        <select>
                        	<option value="">Sales Manager</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="update_name_txt1">
                        <select>
                        	<option value="">New Call</option>
                            <option value="">Followup Call</option>
                            <option value="">Schedule</option>
                            <option value="">Reschedule</option>
                            <option value="">Shortlist</option>
                            <option value="">Next Round</option>
                            <option value="">Selected</option>
                            <option value="">Absent</option>
                            <option value="">Not Interested</option>
                        </select>
                    </div>
                </td>
            </tbody>
        </table>
        <table class="notes_pop_tbl">
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
        <table class="notes_pop_tbl">
            <tbody>
                <td>
                    <input type="submit"  name="Save"  value="" title="Save Details of the Candidate" class="save_btn btn_all" />
                    <input type="submit"  name="Schedule"  value="" title="Schedule Interview with HR" class="schd_btn btn_all" />                    
                </td>
            </tbody>
        </table>
        <table class="notes_pop_tbl">
            <tbody>
                <td>
					<div class="disp_notes">
                    	<div class="">
                        	<label class="add_can_name_lbl">All Notes to display here</label>
                        </div>
                        <div class="disp_notes_left">
                            <table class="notes_pop_tbl">
                                <thead>
                                	<td><div class="update_name_txt"><label class="add_can_name_lbl">Date:</label></div></td>
                                    <td><div class="update_name_txt"><label class="add_can_name_lbl">Company:</label></div></td>
                                    <td><div class="update_name_txt"><label class="add_can_name_lbl">Position:</label></div></td>
                                    <td><div class="update_name_txt"><label class="add_can_name_lbl">Status:</label></div></td>
                                </thead>
                                <tbody>
                                	<td><div class="update_name_txt1"><label class="update_name_txt1">12-09-14</label></div></td>
                                    <td><div class="update_name_txt1"><label class="update_name_txt1">Future Generali</label></div></td>
                                    <td><div class="update_name_txt1"><label class="update_name_txt1">Sales Manager</label></div></td>
                                    <td><div class="update_name_txt1"><label class="update_name_txt1">Shorlist</label></div></td>
                                </tbody>
                            </table>
                        </div>
						<div class="disp_notes_right">
                        	<label>He was Selected. Invoice already raised</label>
                        </div>
               		</div>
            </tbody>
        </table>

</div>








</body>
</html>