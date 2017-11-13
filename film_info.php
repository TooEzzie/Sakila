<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Film Info</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>

                        <?php 

$connection = mysqli_connect("localhost","root","", "sakila");
$select = mysqli_real_escape_string($connection, $_GET['select']);
$query = mysqli_query($connection, "SELECT * FROM film WHERE film_id = $select;");
 while ($row = mysqli_fetch_array($query)) {	
	 echo "<div>ID: {$row['film_id']} </div>";  
	 echo "<div>Title: {$row['title']}</div>";
	 echo "<div>Description: {$row['description']}</div>";
	 echo "<div>Release Year: {$row['release_year']}</div>";
	 echo "<div>Rating: {$row['rating']}</div>";
	 echo "<div>Special Features: {$row['special_features']}</div>";
	 echo "<div>Rental Rate: {$row['rental_rate']}</div>";
	 echo "<div>Replacement cost: {$row['replacement_cost']}</div>";
	 if(mysqli_query($connection, "SELECT inventory_in_stock($select);"))
	 {
		echo "<div>In Stock</div>";
	 }
	 
                            echo "<br />";
//echo "<div id='link' onClick='addText(\"".$row['film_id']."\");'>" . $row['title'] . "</div>";  
 }


  ?>
					<form action="rent.php" method="GET">
						<input id="CustID" name = "CustID" type="text" placeholder="Customer ID">
						<input id="EmpID" name = "EmpID" type="text" placeholder="Employee ID">
						<input id="FilmID" name = "FilmID" type="text" placeholder="filmID">
						<input id="submit" type="submit" value="rent">
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
