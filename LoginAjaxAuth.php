<?php	require "phpfunc.php"; // require 'session.php';
		
	if(isset($_POST["userid"]) && ($_POST["pwd"])){	$userid=$_POST["userid"];	$pwd=$_POST["pwd"];

		$lgnqry="SELECT ID,EMPNO,EMPNAME,PWD,USERTYPE,STATUS FROM login_master where EMPNO='$userid' and PWD='$pwd' and STATUS='Active'";	
				
		$conn=connectdb();	
		$outpt=mysqli_query($conn, $lgnqry); 			/*	$noofrec = mysqli_num_rows($outpt);  
			echo " &nbsp; &nbsp; &nbsp; &nbsp; No. of Records found: &nbsp; <font style='background-color:green;' color='yellow'> <b>".$noofrec." </b></font> \n ";									*/
		if(mysqli_num_rows($outpt)>=1) 	{		
				while($outptrow=mysqli_fetch_array($outpt))	{		
				$userid = $outptrow['ID'];   			$empno = $outptrow['EMPNO'];	
				$empname = $outptrow['EMPNAME'];   		$pwd = $outptrow['PWD'];	
				$usertype = $outptrow['USERTYPE'];   	$userstatus = $outptrow['STATUS'];	
				echo "User is '$userid'";
				}	mysqli_close($conn);
			session_start();
			$_SESSION["auth"] = 1;						$_SESSION['userid'] = $userid;				$_SESSION["empno"] = $empno;
			$_SESSION["pwd"] = $pwd;					$_SESSION["usertype"]= $usertype;	$_SESSION["userstatus"] = $userstatus;
		if($usertype=='admin')
			header('location:loginsuccessadmin.php');       
		else	
			echo "<script> $('#Workingarea').load('loginsuccess.php'); </script>";// header('location:loginsuccess.php');	
		} 
		elseif($userid=='00000') echo "User is '$userid'";
		else echo "Invalid Credentials..... <br> Try again....<br>";	
			
	}
	

	
	
	
	
?>