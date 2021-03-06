<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Fancy Sliding Form with jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
        
        
    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
    <body>
      
        <div id="content">
            <h1>Samrat Industry PVT LTD</h1>
            <div id="wrapper">
                <div id="steps">
                 
                        <fieldset class="fieldset step">
						   <form id="formElem1" name="formElem1" action="" method="post">
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
                                <label for="contact_no">Contact Number</label>
                                <input id="contact_no" name="contact_no" type="text"   />
                            </p>
							<p class="submit">
                                <button id="registerButton" type="submit">Add User</button>
                            </p>
						</form>
                        </fieldset>
						
                       <fieldset class="fieldset step">
					    <form id="formElem2" name="formElem2" action="" method="post">
                            <legend class="legend">Agenta</legend>
                             <p>
                                <label for="cardtype">Select User</label>
                                <select id="cardtype" name="cardtype">
                                    <option>Jekin</option>
                                    <option>Diveyesh</option>
                                    <option>Darshan</option>
                                </select>
                            </p>
                            <p>
                                <label for="country">Country</label>
                                <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" placeholder="e.g. +351215555555" type="tel" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="website">Website</label>
                                <input id="website" name="website" placeholder="e.g. http://www.codrops.com" type="tel" AUTOCOMPLETE=OFF />
                            </p>
							</form>
                        </fieldset>
                        <fieldset class="fieldset step">
						 <form id="formElem3" name="formElem3" action="" method="post">
                            <legend class="legend">Payment</legend>
                            <p>
                                <label for="cardtype">Card</label>
                                <select id="cardtype" name="cardtype">
                                    <option>Visa</option>
                                    <option>Mastercard</option>
                                    <option>American Express</option>
                                </select>
                            </p>
                            <p>
                                <label for="cardnumber">Card number</label>
                                <input id="cardnumber" name="cardnumber" type="number" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="secure">Security code</label>
                                <input id="secure" name="secure" type="number" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="namecard">Name on Card</label>
                                <input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF />
                            </p>
							</form>
                        </fieldset>
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
                            <a href="#">Agenta</a>
                        </li>
                        <li>
                            <a href="#">Payment</a>
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