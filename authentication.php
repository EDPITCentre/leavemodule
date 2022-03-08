<?php
	if(isset($_POST["submit"])){
	$userid = $_POST['userid'];							$pwd = $_POST['pwd'];
	$usertype='Not Defined';							include 'connection.php';
	
	$qry = ("SELECT  id,username,userid,usertype FROM login_master 	WHERE userid = '$userid' AND pwd = '$pwd' AND status='Active' ");				
	$query = $conn->query($qry);						$rowCount = $query->num_rows; 
		if($rowCount > 0){
			while($row = $query->fetch_assoc()){
              $usertype= $row['usertype']; 				$name = $row['username'];			$id = $row['id'];		
            }
		session_start();
			$_SESSION["auth"] = 1;						$_SESSION['id'] = $id;				$_SESSION["userid"] = $userid;
			$_SESSION["pwd"] = $pwd;					$_SESSION["usertype"]= $usertype;	$_SESSION["name"] = $name;
		if($usertype=='admin')
			header('location:loginsuccessadmin.php');       
		else	
			header('location:loginsuccess.php');       
            }
        else
		{	?>
	<script>document.getElementById("lgnmsg").innerHTML='<b>&nbsp;Incorrect User ID or Password.</b>';</script>	<?php	}
	}	?>
