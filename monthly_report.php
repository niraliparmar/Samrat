<html>
<head>
<style type="text/css">
table.alerts
{ text-align: center;
font-family: Verdana;
font-weight: normal;
font-size: 11px;
color: #404040;

background-color: #f0f0f0;
border: 5px #d79900 outset;
border-collapse: collapse;
border-spacing: 0px;}


.alertHd
{ border-bottom: 2px solid #d79900;
background-color: #fff2ba;
text-align: center;
font-family: Verdana;
font-weight: bold;
font-size: 11px;
color: #404040;}


.alertBod p
{ text-align: left;
font-family: Verdana, sans-serif, Arial;
font-weight: normal;
font-size: 11px;
line-height: 12px;
color: #404040;
background-color: #fafafa;
text-indent: -8px;
margin-left: 10px;
margin-right: 10px;
margin-top: 5px;
margin-bottom: 5px;} 
</style>
<title>
Monthly Report
</title>

</head>
<body bgcolor="#c9e1fb">
<?php

$select_user=$_REQUEST['n'];
$month=$_REQUEST['m'];

 require_once('config.php');
   $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
		
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
    
	 
	 
   $qry = "SELECT user_name,date,month,in_time,out_time,total_hour_per_day,rupees_per_hour,rupees_per_day FROM agenta_per_day where user_name='$select_user' and month='$month'";
   $res = mysql_query($qry); 
  
 $total=0;
		
		echo '
		<center>
		<table name="fetch" width="80%" class="alerts" style="border-style:groove; border-color:#073063;;">
		';
	
		$row=mysql_fetch_assoc($res);
echo '<strong><font size="+3" face="Verdana, Geneva, sans-serif" color=#0272fc>'.$row['user_name'].'</font></strong><br><hr>';
		while($row)
		{
			
		echo '<tr>';
		for($i=0;$i<3 && $row;$i++)
		{
			
	$total=$total + $row['rupees_per_day'];

		echo'
		<td class="space3" width="30%" ><br/>
	
	
		
		
		'.'<b style="font-size:15px;">'.'&nbsp;&nbsp;Date: '.'</b>'.'<b style="color:#073063">'.$row['date'].'</b>'.'<br>'.'<hr width="150" align="center">
		
		'.'<b>'.'&nbsp;&nbsp;In-Time: '.'</b>'.$row['in_time'].'<br>'.'<b>'.'&nbsp;&nbsp;Out-Time: '.'</b>'.$row['out_time'].'<br>'.'<b>'.'&nbsp;&nbsp;Total Hours: '.'</b>'.$row['total_hour_per_day'].' / Day'.'<br><b>&nbsp;&nbsp;Rupees: </b>'.$row['rupees_per_hour'].' / Hour'.'<br><hr width="180" align="center">
		
		<font class="style2"><b>&nbsp;&nbsp;Total Rupees : </b></font>'.$row['rupees_per_day'].' / Day'.'<br>'.'<br/><hr></td>';
		$row=mysql_fetch_assoc($res);

		}   // end for
		
		echo'</tr>';
		
				
		} // end while	
	
		echo '<P style="color:#093b78; font-size:19px;">'.'<b>Total Sallary : </b> ' . $total.' / Month'.'</p>'.'<br/>';
		echo '
		</table>
		</center>';
   
		
	



?>

</body>
</html>