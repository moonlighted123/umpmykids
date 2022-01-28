
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    
	<style>
	
	body{   
    background: #1AC58F;  
}  
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
}  </style>
	
</head>
<body>
   <div id = "frm">  
       <center> <h1>UMP-MYKIDS</h1>  
	   <h3>SIGN UP</h3>  
        <form name="f1" action = "register.php" onsubmit = "return validation()" method = "POST">  
            <label> Username: </label>  
                <input type = "text" id ="username" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
           
		   <p>     
                <input type =  "submit" id = "btn" value = "Sign up" />  

            </p>  
        </form>  
    </div>  </center>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>