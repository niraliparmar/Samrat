<?php
$in_time=$_POST['in_time'];
$out_time=$_POST['out_time'];
$date=$_POST['date'];
$db_date=split('-',$date);
$month=$db_date[1];



// Spliting In Time
$in=split(':',$in_time);

$in_format=$in[1];
$in_Min_For=split(' ',$in_format);

$in_H=$in[0]; //Hours
$in_M=$in_Min_For[0];  //Minutes
$in_AM_PM=$in_Min_For[1];  // AM / PM

// Spliting Out Time
$out=split(':',$out_time);

$out_format=$out[1];
$out_Min_For=split(' ',$out_format);

$out_H=$out[0]; //Hours
$out_M=$out_Min_For[0];  //Minutes
$out_AM_PM=$out_Min_For[1];  // AM / PM

if($in_AM_PM==$out_AM_PM)
{
	if($in_H==12)
	{
		$total_H=$out_H + 12 - $in_H;
		
		//echo $total_H;
	}
	else
	{
		$total_H=$out_H - $in_H ;
		//echo $total_H."<br/>";
	}
}
else
{
	$total_H=$out_H + 12 - $in_H;
	//echo $total_H."<br/>";
}

$total_M=$in_M + $out_M;
if($total_M > 60)
{
	$total_M=$total_M - 60 ;
	$total_H=$total_H + 1 ;
	//echo $total_M."Final"."<br/>";
	//echo $total_H."Final";
	
}
if($total_M > 45)
	{
		$total_H=$total_H + 1 ;
		//echo $total_H."Final H"."<br/>";
		
	}
/*echo $total_M." "."<-Min"."<br/>";
echo $total_H." "."<-H"."<br/>";




echo $total_rs_per_day;*/

 require_once('config.php');
   $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
		
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
$rupees=$_POST['rupees'];
$total_rs_per_day= $rupees * $total_H;
$select_user=$_POST['user'];
$date=$_POST['date'];

/*$qry = "INSERT INTO agenta_per_day (user_name, date, in_time, out_time ,total_hour_per_day ,rupees_per_hour,rupees_per_day) VALUES('$select_user','$date','$in_time','$out_time','$total_H' ,'$rupees','$total_rs_per_day')";*/

$sql = "INSERT INTO `samrat`.`agenta_per_day` (`user_name`, `date`, `month`, `in_time`, `out_time`, `total_hour_per_day`, `rupees_per_hour`, `rupees_per_day`) VALUES ('$select_user','$date', '$month','$in_time','$out_time','$total_H' ,'$rupees','$total_rs_per_day');";



	$result = @mysql_query($sql);
	
	//Check the query was successful or not
	if($result) {
		header("location: index.php");
		exit();
	}else {
		die("Query failed");
		exit();
	}
	
	
?>