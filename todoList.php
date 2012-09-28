<?php session_start(); ?>
<html>
<head>      
<title> Todo </title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>


</head> 
<body>
    
    <div id="wrapper"><!-- wrapper -->
        
        <div id="header">
                <div class="nonHomePageLogo">
                <a href="./"><img id="logo" src="img/logo.png" alt="TODO LIST" /></a>
                <p class="logout">
                    <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
                    <a href="scripts/logout.php"><button>LogOut</button></a>
                </p>
            </div>
        </div>
        
        <div class="actionButtons">
            <p>ADD: <input type="text" /> </p>
        </div>
        
        <div id="todoList"><!-- Todo List -->
        
            <ul>
                <li>
                    <input type="checkbox" />
                    Lorem ipsum dolar uste enum plorar daniem consectur.
                    <button>Update</button>
                </li>
            
                <li>
                    <input type="checkbox" />
                    Lorem ipsum dolar uste enum plorar daniem consectur.
                    <button>Update</button>
                 </li>
            
                <li>
                    <input type="checkbox" />
                    Lorem ipsum dolar uste enum plorar daniem consectur.
                    <button>Update</button>
                </li>
            
                <li>
                    <input type="checkbox" />
                    Lorem ipsum dolar uste enum plorar daniem consectur.
                    <button>Update</button>
                </li>
            
            
            </ul>
       
        </div> <!-- End Todo List -->
        
        <div class="actionButtons">
            <button>Delete Selected </button>
        </div>
        
        
    </div><!-- End Wrapper -->
            
        
</body> 
</html>