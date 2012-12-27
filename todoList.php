<?php session_start(); ?>
<?php require_once("scripts/selectItem.php"); ?>
<!DOCTYPE html>
<html>
<head>      
<title>Todo</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />

</head> 
<body>
    
    <div id="wrapper"><!-- wrapper -->
        
        <div id="header">
                <div class="nonHomePageLogo">
                <a href="todoList.php"><img id="logo" src="img/logo.png" alt="TODO LIST" /></a>
                <p class="logout">
                    <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
                    <a href="scripts/logout.php"><button>LogOut</button></a>
                </p>
            </div>
        </div>
        
        
        <div id="todoList"><!-- Todo List -->
            <form class="add" action="scripts/insert.php" method="post">
                <button>ADD</button> <input class="addItem" type="text" name="todoItem" />
            </form>
        
            <ul>
                <!-- Display all of the current user's todo items -->
                <?php todos(); ?>           
            </ul>

        </div> <!-- End Todo List -->
        
        
    </div><!-- End Wrapper -->

<script type="text/javascript" src="js/jquery.js"></script>
<script>
(function() {
    $('.addItem').on('focusin', function(){
        $(this).animate({
            width: 450
        })
    });

    $('.addItem').on('focusout', function(){
        $(this).animate({
            width: 50
        })
    });

})();
</script> 

<script>

    
    (function() {
        $(".delete").on("click", function() {

            var todoContainer = $(this).parent();
            var id = todoContainer.attr('id');

            $.ajax({
                type: "POST",
                url:  "scripts/deleteItem.php",
                data: "id=" + id,
                success: function(e) {
                    $('#'+id).remove();
                }

            });

        });
    })();

</script>    
        
</body> 
</html>