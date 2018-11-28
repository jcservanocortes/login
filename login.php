<?php
		include('');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* USER */
			$query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		/* ADMIN */
		$query_admin = mysql_query("SELECT * FROM ADMIN WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_admin = mysql_num_rows($query_admin);
		$row_admin = mysql_fetch_array($query_admin);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['user_id'];
		echo 'true_user';	
		}else if ($num_row_admin > 0){
		$_SESSION['id']=$row_admin['admin_id'];
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>