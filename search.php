<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Search Data Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>

                        <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
                      //  $db = mysqli_select_db("test", $connection);
						
                        ?>
                    </div>
					<html>
					<body>

					<form action="users.php" method="GET">
						<input id="search" name = "searchVal" type="text" placeholder="Type here">
						<input id="submit" type="submit" value="Search">
					</form>
					</body>
					</html>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>        
       
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>