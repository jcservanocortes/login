<html>
    <head>
       
        <link rel="stylesheet" type="text/css" href="lcwcss/signup.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="jquery-3.2.1.min.js"></script>

         <title>Sign up</title>
            <body>   
               <div class="signinBox">
                <h2>Sign Up Here</h2>
                <form id= "signupform" method ="post"  action ="loginform.php">
                    <label><p>I.D Number</p>
                        <input type="text" name="id"  required ="" id="id"></label>
                    <label><p>Full Name</p>
                        <input type="text" name="fullname"  required ="" id="fname"></label>
                    <label><p>Username</p>
                        <input type="text" name="username"  required ="" id="Username"></label>
                    <label><p>Password</p>
                        <input type="password" name="password"  required ="" id="Password"></label>
                     <input type="submit" name="signin" id="sign" onclick ="addtablerow();" value ="SIGN IN"> 	
                    <a href="loginform.php" id="ac" >CANCEL</a>
                   </form>
                </div>
             
        </body>
    </head>
</html>