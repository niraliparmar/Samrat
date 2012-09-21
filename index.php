<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Samrat Industry PVT LTD</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/app1.js"></script>
         <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
		<link href="css/jquery-ui-1.8.16.custom.css" type="text/css" rel="stylesheet" />
		<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
	    <script type="text/javascript" src="js/date.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
    </head>
    
       
	<body>
        <div id="content">
            <h1 style="color:#4797ED">Samrat Industry PVT LTD</h1>
            <div id="wrapper">
                <div id="steps">
             
             		<!--Form for Add new user-->    
                    <div id="adduser" class="adduser">      
                    <fieldset class="fieldset step">
                       <form id="formElem1" name="formElem1" method="post" action="add_user.php" >
                        <legend class="legend">Add new User</legend>
                        
                        <p>
                            <label for="firstname">First name</label>
                            <input id="firstname" name="firstname" />
                        </p>
                        <p>
                            <label for="lastname">Last name</label>
                            <input id="lastname" name="lastname" />
                        </p>
                        <p>
                            <label for="Address">Address</label>
                            <input id="address" name="address" type="text"/>
                        </p>
                        <p>
                            <label for="DOB">Date of Birth</label>
                            <input id="dob" name="dob" type="text"/>
                        </p>
                        <p>
                            <label for="contact_no">Contact Number</label>
                            <input id="contact_no" name="contact_no" type="text"   />
                        </p>
                        <p class="submit">
                        	<button id="registerButton" type="submit" name="add_user">Add User</button>
                        </p>
                    </form>
                    </fieldset>
                    </div>

                    
                    <!--Form for Agenda-->
                   <fieldset class="fieldset step">
                    <form id="formElem2" name="formElem2" action="time.php" method="post">
                        <legend class="legend">Agenda</legend>
                         <p>
                            <label for="select_user">Select User</label>
                           
						<?php					
                           	 require_once('config.php');
                      		 $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
                        	 if(!$link) {
                           	 die('Failed to connect to server: ' . mysql_error());
                        	 }
							 $db = mysql_select_db(DB_DATABASE);
							 if(!$db) {
								die("Unable to select database");
							 }
							 $qry = "SELECT * FROM user_detail";
							 $res = mysql_query($qry);                                 
							 echo '<select id="user" name="user">';
							 echo '<option value="">- - Select User - -</option>';
							 while ($row = mysql_fetch_assoc($res)) 
							 {
								 $fn = $row['first_name'];
								 $ln = $row['last_name'];
								 $n = $fn." ".$ln;
							 	 echo $n;
							 	 echo "<option value='$n'>$n</option>";
							 }
							 echo '</select>';
                        ?>
                              
                            </p>
                            <p>
                                <label for="date">Date</label>
                                <input id="date" name="date" class="time_field"  type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="In-Time">Time</label>
                                <input id="in_time" class="time_field" name="in_time" placeholder="Starting Time" type="text" AUTOCOMPLETE=OFF size="15" />
								<label class="to">to</label>
                                <input id="out_time" name="out_time" class="time_field" placeholder="Ending Time" type="text" AUTOCOMPLETE=OFF />
                            </p>
							  
							<p>
                                <label for="rupees">Rupees</label>
                                <input id="rupees" name="rupees" class="time_field"  type="text" AUTOCOMPLETE=OFF /><label class="to">/Hour</label>
                            </p>
							<p class="submit">
                                <button id="registerButton" type="submit"  name="submit">Submit</button>
                            </p>
							</form>
                        </fieldset>
                        
                        <!--Form for Report-->
                        <fieldset class="fieldset step">
                             <form id="formElem3" name="formElem3" action=""  method="post">
                                <legend class="legend">Report</legend>
                                <p>
                                    <label for="select_user">Select User</label>

							<?php
                              require_once('config.php');
                               $link1 = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
                                if(!$link1) {
                                    die('Failed to connect to server: ' . mysql_error());
                                }
                                $db1 = mysql_select_db(DB_DATABASE);
                                if(!$db1) {
                                    die("Unable to select database");
                                }  
                               $qry1 = "SELECT * FROM user_detail";
                               $res1 = mysql_query($qry1);  
                               echo '<select id="username" name="username">';
                               echo '<option value="">- - Select User - -</option>';
                               while ($row1 = mysql_fetch_assoc($res1)) {
                                     $fn1 = $row1['first_name'];
                                     $ln1 = $row1['last_name'];
                                     $n1 = $fn1." ".$ln1;
                                	echo $n1;
                                	echo "<option value='$n1'>$n1</option>";
                                }
                                echo '</select>';
                             ?>
                            </p>
                            <p>
                                <label for="month">Select Month</label>
                               
                                <select name="month">
                                <option value="">- - Select Month - -</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                                </select>
                            </p>
                           <p class="submit">
                                <button id="registerButton" type="submit"  name="display" onClick="report()" >Submit</button>
                            </p>
							</form>
                        </fieldset>
                        
                        <!--Form for Setting-->
                       <fieldset class="fieldset step">
                            <form id="formElem4" name="formElem4" action="" method="post">
                                <legend class="legend">Settings</legend>
                                <p>
                                    <label for="newsletter">Newsletter</label>
                                    <select id="newsletter" name="newsletter">
                                        <option value="Daily" selected>Daily</option>
                                        <option value="Weekly">Weekly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Never">Never</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="updates">Updates</label>
                                    <select id="updates" name="updates">
                                        <option value="1" selected>Package 1</option>
                                        <option value="2">Package 2</option>
                                        <option value="0">Don't send updates</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="tagname">Newsletter Tag</label>
                                    <input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF />
                                </p>
                                </form>
                        </fieldset>
                        
                        <!--Form for Confirm-->
                         <fieldset class="fieldset step">
                          <form id="formElem5" name="formElem5" action="" method="post">
                                <legend class="legend">Confirm</legend>
                                <p>
                                    Everything in the form was correctly filled 
                                    if all the steps have a green checkmark icon.
                                    A red checkmark icon indicates that some field 
                                    is missing or filled out with invalid data. In this
                                    last step the user can confirm the submission of
                                    the form.
                                </p>
                                <p class="submit">
                                    <button id="registerButton" type="submit">Register</button>
                                </p>
                                </form>
                           </fieldset>
                    
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Add User</a>
                        </li>
                        <li>
                            <a href="#">Agenda</a>
                        </li>
                        <li>
                            <a href="#">Report</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>