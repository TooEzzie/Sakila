<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Rent thing</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>
						</br></br>
						<a href = "search.php" >Search</a> </br></br></br>
                    </div>
						 <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
                      //  $db = mysqli_select_db("test", $connection);
						
						
									
                        $query = mysqli_query($connection,"select * from film");
						echo"<table width= '60%'>";
						    echo"<tr>";
							echo "<th width='20%'>Film&nbsp;ID</th>";
							echo "<th width='40%'>Title&nbsp;</th>";
							echo "<th width= '40%'>Release&nbsp;Date</th>";
						    echo"</tr>";
                        while ($row = mysqli_fetch_array($query)) 
						{
                            echo"<tr>";
							echo "<td width='10%'>".$row['film_id']."</td>";
							echo "<td width='50%'>".$row['title']."</td>";
							echo "<td width= '40%'>".$row['release_year']."</td>";
						    echo"</tr>";
  
                        }
						echo"</table>";
                        ?>
                    
                    <div class="clear">
				
					
					</div>
					
                </div>
                <div class="clear">   </div>
				
            </div>        
     
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>