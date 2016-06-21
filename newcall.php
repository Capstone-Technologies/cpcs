<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="/demo/css/newcall.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div class="main_indx_div" >

<form action="/test/exg2/dailycalls.php" method="post">
<h1>Frontline Hiring / New Call Page</h1>
	<div id="main">
        <label for="hiring_org" title="Hiring Organization">Select Hiring Organization:</label>
        <input type="text" name="namebx" id="hiring_org" placeholder="Select Organization:" /><label>Job Assigned by TL Should Auto Pop Up in List</label><br />
        <label for="jobtype" title="Job Post">Select Job Title:</label>
        <input type="text" name="namebx" id="jobtypebx" placeholder="Select Job Post:" /><label>Job Assigned by TL Should Auto Pop Up in List</label><br />
        <label for="namebx" title="Name">Name:</label>
        <input type="text" name="namebx" id="lnamebx" placeholder="Enter Last Name" />
        <input type="text" name="Namebx" id="fnamebx" placeholder="Enter First Name" />
        <input type="text" name="Namebx" id="mnamebx" placeholder="Enter Middle Name" /><br />
        <label for="desigbx" title="CurrentDesignation">Current Designation:</label>
        <input type="text" name="designbx" id="desigbx" placeholder="Enter Candidate's name" /><br />
        <label for="emailbx" title="Email ID">Email ID:</label>
        <input type="email" name="emailbxx" id="emailbx" placeholder="Enter Email ID" /><br /><!--Should be List Box with intelisence-->
        <label for="phonebx" title="Phone">Enter Phone:</label>
        <input type="number" name="phonebxx" id="phonebx" placeholder="Enter Phone Number" /><br /><!--Should be List Box with intelisence-->
        <label for="industypebx" title="Industry Type">Indutry:</label>
        <select name="industypebxx" id="industypebx">
       		<option>Select or Start Typing an Industry:</option>
			<option>IT-Software / Software Services</option>
            <option>BPO / Call Centre / ITES</option>
            <option>Automobile / Auto Anciliary / Auto Components</option>
            <option>Construction / Engineering / Cement / Metals</option>
            <option>Banking / Financial Services / Broking</option>
            <option>-------------------------------------------------------------</option>
            <option>Accounting / Finance</option>
            <option>Advertising / PR / MR / Event Management</option>
            <option>Agriculture / Dairy</option>
            <option>Animation / Gaming</option>
            <option>Architecture / Interior Design</option>
            <option>Aviation / Aerospace Firms</option>
            <option>Brewery / Distillery</option>
            <option>Ceramics / Sanitary ware</option>
            <option>Chemicals / PetroChemical / Plastic / Rubber</option>
            <option>Consumer Electronics / Appliances / Durables</option>
            <option>Courier / Transportation / Freight / Warehousing</option>
            <option>Education / Teaching / Training</option>
            <option>Electricals / Switchgears</option>
            <option>Export / Import</option>
            <option>Facility Management</option>
            <option>Fertilizers / Pesticides</option>
            <option>FMCG / Foods / Beverage</option>
            <option>Food Processing</option>
            <option>Fresher / Trainee / Entry Level</option>
            <option>Gems / Jewellery</option>
            <option>Glass / Glassware</option>
            <option>Government / Defence</option>
            <option>Heat Ventilation / Air Conditioning</option>
            <option>Industrial Products / Heavy Machinery</option>
            <option>Insurance</option>
            <option>Iron and Steel</option>
            <option>IT-Hardware &amp; Networking</option>
            <option>KPO / Research / Analytics</option>
            <option>Legal</option>
            <option>Media / Entertainment / Internet</option>
            <option>Internet / Ecommerce</option>
            <option>Medical / Healthcare / Hospitals</option>
            <option>Mining / Quarrying</option>
            <option>NGO / Social Services / Regulators / Industry Associations</option>
            <option>Office Equipment / Automation</option>
            <option>Oil and Gas / Energy / Power / Infrastructure</option>
            <option>Pulp and Paper</option>
            <option>Pharma / Biotech / Clinical Research</option>
            <option>Printing / Packaging</option>
            <option>Publishing</option>
            <option>Real Estate / Property</option>
            <option>Recruitment / Staffing</option>
            <option>Retail / Wholesale</option>
            <option>Security / Law Enforcement</option>
            <option>Semiconductors / Electronics</option>
            <option>Shipping / Marine</option>
            <option>Strategy / Management Consulting Firms</option>
            <option>Telecom/ISP</option>
            <option>Textiles / Garments / Accessories</option>
            <option>Travel / Hotels / Restaurants / Airlines / Railways</option>
            <option>Tyres</option>
            <option>Water Treatment / Waste Management</option>
            <option>Wellness / Fitness / Sports</option>
            <option>Other</option>
        </select><br/>        
        <label for="organbx" title="Organization">Organization:</label>
        <input type="text" name="orgbx" id="organbx" placeholder="Organization Candidate work" /><br /><!--Should be List Box with intelisence-->
        <label for="hirigfbx" title="Hiring For">Hiring For:</label>
        <input type="text" name="hirigfbxx" id="hirigfbx" placeholder="Hiring For" /><label>Organization Name Should Auto Pop Up</label><br /><!--Should be List Box with intelisence-->
        <label for="newdesigbx" title="Hiring Designation">Hiring Designation:</label>
        <input type="text" name="newdesigbxx" id="newdesigbx" placeholder="Hiring Designation:" /><label>Organization Name Should Auto Pop Up & Changable</label><br /><!--Should be List Box with intelisence-->
        <label for="expbx" title="exp">Current Expriance:</label>
        <input type="text" name="exprbx" id="expbx" placeholder="Number of years experiance" /><br /><!--Should be List Box with intelisence-->
        <label for="exptotalbx" title="Experiance Total">Overall Experiance:</label>
        <input type="text" name="expttlbx" id="exptotalbx" placeholder="Enter Candidate's name" /><br />
        <label for="exprelbx" title="RelevantExp">Relevant Experiance:</label>
        <input type="text" name="relevexpbx" id="exprelbx" placeholder="Enter Candidate's name" /><br />
        <label for="locationbx" title="Location">Location:</label>
        <input type="text" name="locationx" id="locationbx" placeholder="Candidate's Location" /><br /><!--Should be List Box with intelisence-->
        <label for="ctcbx" title="CTC">CTC:</label>
        <input type="text" name="ctcbxx" id="ctcbx" placeholder="Current CTC" /><br /><!--Should be List Box with intelisence-->
        <label for="expctcbx" title="Expected CTC">Expected CTC:</label>
        <input type="text" name="expctcbxx" id="expctcbx" placeholder="Expected CTC" /><br />
        <label for="relocatebx" title="Relocation">Relocation:</label>
        <input type="text" name="relocatebxx" id="relocatebx" placeholder="Relocation: (Y/N)" /><br /><!--Should be List Box with intelisence-->
        <label for="interdatebx" title="InterDate">Interveiw Date:</label>
        <input type="datetime" name="interdatebxx" id="interdatebx" placeholder="Select Schedule" /><br /><!--Should be List Box with intelisence--><br />
        
        <input class="btncolor" type="image" src="/test/exg2/images/Schedule.png" width="78" height="31" value="Schedule" />
        <input class="btncolor" type="image" src="/test/exg2/images/Reset.png" width="78" height="31" value="Reset" />
        <input class="btncolor" type="image" src="/test/exg2/images/Cancel.png" width="78" height="31" value="Cancel" />
	</div>
</form>
</div>
</body>
</html>