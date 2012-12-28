<!DOCTYPE html>
<html>
<head>      
<title> Todo </title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>


</head> 
<body>
    
    <div id="wrapper">
        
        <div id="header">
            <a href="./"><img id="logo" class="homePageLogo" src="img/logo.png" alt="TODO LIST" /></a>
        </div>
        
        <form id="form" action="scripts/login.php" method="POST">
            
            <input type="text" name="email" value="Email"   />
            <input type="password" name="password" value="abcdefg"/>
            <input class="loginButton" type="submit" value="Log In">
            
            
        </form>
        
        <a href="signup.php"><button>Sign Up</button></a>
        
    </div>
            
        
</body> 
</html>