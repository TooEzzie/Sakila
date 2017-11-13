<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Rental</h2></div>
                <div class="divB">
                    <div class="divD">
						<?php
						
						$connection = mysqli_connect("localhost", "root", "", "sakila");
						$c_id = $_GET['CustID'];
						$e_id = $_GET['EmpID'];
						$f_id = $_GET['FilmID'];
						$query = mysqli_query($connection,"select * from inventory where film_id like '{$f_id}'");
						$inventory = mysqli_fetch_array($query);
						$i_id=$inventory['inventory_id'];
						$query2 = mysqli_query($connection,"SELECT get_customer_balance({$c_id}, NOW())");
						$balance = mysqli_fetch_array($query2);
						if($balance[0] > 0){
								#refuse or accept payment
								echo "Customer has an outstanding balance of \${$balance[0]}. <br/>Cannot process rental.";
						}
						else
						{
							mysqli_query($connection, "INSERT INTO rental ( rental_date, inventory_id, customer_id, staff_id) 
									VALUES( NOW(), $i_id, $c_id, $e_id)");
							$pricequery = mysqli_query($connection, "SELECT rental_rate FROM film WHERE film_id LIKE {$f_id}");
								$price = mysqli_fetch_array($pricequery);
								mysqli_query($connection, "INSERT INTO payment ( customer_id, staff_id, rental_id, amount,  payment_date)
									VALUES($c_id,$e_id,LAST_INSERT_ID(), {$price['rental_rate']}, NOW())");
								
								echo "Film rented. Payment processed.";
						}
						?>
						<br />
					<p><a href="index.php">Home</a></p>
                    </div>
					
                </div>
            </div>        
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>
							