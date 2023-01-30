<?php
	if(isset($_POST["btnsubmit"]))
	{
        $con=mysqli_connect("localhost","root","","dev");
		
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
               		
		$query = "select *from `absence` ";
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["ID"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `abs2`(`ID` ,  `Date` ,  `Absence`) VALUES('$mno','$date','1')";
			}
			else
			{
				$query1 = "INSERT INTO  `abs2`(`ID` ,  `Date` ,  `Absence`) VALUES('$mno','$date','0')";
			}
			mysqli_query($con,$query1)or die("insert error".$mno);
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='list_abs.php';";
			print "</script>";
		}
		
		
			
		
	}
	else
	{
		header("Location:index.php");
	}
?>
