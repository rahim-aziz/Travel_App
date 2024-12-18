<div class="nav-bar">
	<div class="myFlexedImage">
	<a href="/Travel_App/home.php">
	<img style="padding-left:10px" src="/Travel_App/JDM_logo_small.png" width=50% height=10%/>
	</a>
	</div>
	<div class="dropdown">
    <button class="dropbtn">Tools
	</button>
		<i class="material-icons" style="font-size:20px;color:black">arrow_drop_down</i>
    <div class="dropdown-content">
      <a href="/Travel_App/Language-Translator/translator.php">Language Translator</a>
      <a href="/Travel_App/Currency-Converter/currency.php">Currency Converter</a>
      <a href="/Travel_App/World-Clock/clock.php">World Clock</a>
	  <a href="/Travel_App/budget-planner.php">Budget Calculator</a>
	</div>
	</div> 
	<div style="margin-left: auto">
	<div>
		I'm travelling to <?php echo '<b>'.$_COOKIE["travel_country"].'</b>'; ?>
		<a href="/Travel_App/home.php">
		<i class="material-icons" style="font-size:20px;color:black">restart_alt</i>
		</a>
	</div>
	</div>
</div>