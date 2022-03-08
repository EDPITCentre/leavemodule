
	function vldlogin(){		 var userid=document.getElementById("userid").value;	 var pwd=document.getElementById("pwd").value;	 
			if(userid){
			if(pwd){
            $.ajax({
                type:'POST',  url:'LoginAjaxAuth.php',    
				data: {userid: userid, pwd: pwd, },	
				success:function(html){      $('#LoginMSG').html(html);       }
    }); }	else  document.getElementById("LoginMSG").value="Enter Password.";
		}		
			else  document.getElementById("LoginMSG").value="Enter userID.";
			return false;
			}