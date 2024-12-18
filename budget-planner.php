<html>
<head>
	<link rel="stylesheet" href="./home_style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<style>
.container-container {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
}
.container {
    width: 300px;
    border-radius: 6px;
    padding: 8px;
    background-color: #ff92a8;
}
#title {
    text-align: center;
    padding: 4px 0;
    border-bottom: 1px solid black;
}
</style>
<body>
	<?php include('./header.php'); ?>
	<br/>
	<div class="container-container">
    <div class="container">
		<h1 id="title">Budget Calculator</h1>
	<div class="paddingrl">
	<form action="/Travel_App/budget-planner.php" method="post">
	<label style="font-size:20px" for="travellers">Number of travellers (Max:8) </label>
	<br>
	<input style="width:100%" type="number" id="travellers" name="travellers" min="1" max="8" 
	value="<?php if(isset($_POST['travellers'])) echo $_POST['travellers']; ?>" required/>
	<br/>
	<br/>
	<label style="font-size:20px" for="nights">Number of nights </label>
	<input style="width:100%" type="number" id="nights" name="nights" min="1"
	value="<?php if(isset($_POST['nights'])) echo $_POST['nights']; ?>" required/>
	<br/>
	<br/>
	<input type="submit" name="submit" value="Calculate">
	</form>
	
	<?php
		require_once ('mysqli.php'); // Connect to the db.
		global $dbc;
		if(isset($_POST['travellers'])  && isset($_POST['nights'])) {
			$travel_country = $_COOKIE["travel_country"];
			$travellers = (int)$_POST['travellers'];
			$nights = (int)$_POST['nights'];
			if($travellers<=2) {
				$query = "SELECT AVG(single_room_price) AS price FROM hotel WHERE country='$travel_country'";
			} else if($travellers<=4) {
				$query = "SELECT AVG(double_room_price) AS price FROM hotel WHERE country='$travel_country'";
			} else {
				$query = "SELECT AVG(family_room_price) AS price FROM hotel WHERE country='$travel_country'";
			}
			$price_one_night = (double)mysqli_fetch_array(@mysqli_query($dbc,$query), MYSQLI_ASSOC)["price"];
			$price_hotel = $price_one_night * $nights;
			
			$query = "SELECT AVG(price) AS price FROM food WHERE country='$travel_country'";
			$price_food = (double)mysqli_fetch_array(@mysqli_query($dbc,$query), MYSQLI_ASSOC)["price"] * ($nights+2);
			
			$budget = $price_hotel + $price_food;
			if($travel_country=="Malaysia") {
				$currency = "RM";
				$budget = number_format($budget,2);
				$price_one_night = number_format($price_one_night,2);
				$price_food = number_format($price_food,2);
			} if($travel_country=="Japan") {
				$currency = "¥";
				$budget = number_format($budget);
				$price_one_night = number_format($price_one_night);
				$price_food = number_format($price_food);
			}
			echo '<center><div style="max-width:100%;font-size:24px;background-color:pink;padding:5%">'
			."Hotel: $currency$price_one_night/night".
			"<br/>"
			."Food: $currency$price_food".
			"<br/>"
			."Total: $currency$budget".
			'</div></center>';
		}
	?>
	</div>
</body>
</html>