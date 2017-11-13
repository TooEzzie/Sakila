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

$connection = mysqli_connect("localhost","root","", "sakila");
$search = mysqli_real_escape_string($connection, $_GET['searchVal']);
$query = mysqli_query($connection, "SELECT * FROM film WHERE title LIKE '%{$search}%';");
 while ($row = mysqli_fetch_array($query)) {
	 echo "<b><a href=\"film_info.php?select={$row['film_id']}\">{$row['title']}</a></b>";
                            echo "<br />";
//echo "<div id='link' onClick='addText(\"".$row['film_id']."\");'>" . $row['title'] . "</div>";  
 }


  ?>
					<a href = "search.php" >Search</a> </br></br></br>
                    </div>
					<html>
					<body>
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
