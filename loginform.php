
<html>
    <head> 
        <title>Login form</title>
        <link rel="stylesheet" type="text/css" href="lcwcss/lgin.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.2.1.min.js"></script>
        <body>  
            <div class="loginBox">
                <img src="tao2.png" class="dead" >
                <h2>Login Here</h2>
                <form id= "loginform" method ="post"  action ="loginform.php">
                    <label><p>Username</p>
                        <input type="text" name="username"  required ="" id="Username"></label>
                    <label><p>Password</p>
                        <input type="password" name="password"  required ="" id="Password"></label>
                    <input type="submit" name="login" id="login" onclick ="login()" value ="LOGIN"> 	
                    <a href="signupform.php" class="sign" id="ac" >SIGN UP</a>
                </form>
                <script>
						jQuery(document).ready(function(){
						jQuery("#loginform").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Welcome to LCWLC System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'adminDash.php'  }, delay);  
									}else if (html == 'true_user'){
										$.jGrowl("Welcome to LCWLC System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'UserDash.php'  }, delay);  
									}else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
            </div>
        </body>
    </head>
</html>
   