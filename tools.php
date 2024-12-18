<!-- Choose Tools -->
<div class="tools-div">
	<p style="font-size: 25px">Choose tools:</p>
	
	<div class="flex-container">
		<div class="box" style="border-radius:15px;position:relative;">
			<center>
			<i class="material-icons" style="font-size:48px;color:black">translate</i>
			<p style="font-size:15px;color:black"> Translation </p>
			</center>
			<a class="link-hover" href="/Travel_App/Language-Translator/translator.php"></a>
		</div>
		<div class="box" style="border-radius:15px;position:relative">
			<center>
			<i class="material-icons" style="font-size:48px;color:black">currency_exchange</i>
			<p style="font-size:15px;color:black"> Currency <br> Converter </p>
			</center>
			<a class="link-hover" href="/Travel_App/Currency-Converter/currency.php"></a>
		</div>
		<div class="box" style="border-radius:15px;position:relative">
			<center>
			<i class="material-icons" style="font-size:48px;color:black">schedule</i>
			<p style="font-size:15px;color:black"> Time <br> Zone </p>
			</center>
			<a class="link-hover" href="/Travel_App/World-Clock/clock.php"></a>
		</div>
		<div class="box" style="border-radius:15px;position:relative">
			<center>
			<i class="material-icons" style="font-size:48px;color:black">payments</i>
			<p style="font-size:15px;color:black"> Budget <br> Calculator </p>
			</center>
			<a class="link-hover" href="/Travel_App/budget-planner.php"></a>
		</div>
		<div class="box" style="border-radius:15px;position:relative">
			<center>
			<i class="material-icons" style="font-size:48px;color:black">restaurant</i>
			<p style="font-size:15px;color:black"> Food <br> Guide </p>
			</center>
			<?php if($_COOKIE["travel_country"]=="Japan") {
				echo '<a class="link-hover" href="/Travel_App/food_japan.php"></a>';
			} else if($_COOKIE["travel_country"]=="Malaysia") {
				echo '<a class="link-hover" href="/Travel_App/food_malaysia.php"></a>';
			}
			?>
		</div>
		<div class="box" style="border-radius:15px;position:relative">
			<center>
			<i class="material-icons" style="font-size:48px;color:black">attractions</i>
			<p style="font-size:15px;color:black"> Attractions </p>
			</center>
			<?php if($_COOKIE["travel_country"]=="Japan") {
				echo '<a class="link-hover" href="/Travel_App/japan_att.php"></a>';
			} else if($_COOKIE["travel_country"]=="Malaysia") {
				echo '<a class="link-hover" href="/Travel_App/malaysia_att.php"></a>';
			}
			?>
		</div>
	</div>
</div>