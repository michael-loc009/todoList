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
        
        <form id="form" action="scripts/signupScript.php" method="POST">
            
            <input type="text" name="firstname" value="First Name"/>
            <input type="text" name="lastname" value="Last Name" />
            <input type="text" name="email" value="Email"   />
            <input type="password" name="password" value="abcdefg"/>
            <input type="submit" value="signup" />
            
        </form>
        
    </div>
            
        
</body> 
</html>