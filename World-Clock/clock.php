<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.37/moment-timezone-with-data-1970-2030.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="src/styles.css" />
	<link rel="stylesheet" href="../home_style.css" />
    <title></title>
  </head>
  <body>
  <?php include('../header.php') ?>
    <div class="container">
      <h1>World Clock</h1>
      <select id="cities-select">
        <option value="">Select a city</option>
        <option value="current">My timezone</option>
        <option value="Asia/Tokyo">Japan</option>
        <option value="Asia/Kuala_Lumpur">Malaysia</option>
      </select>
      <div class="cities" id="cities">
      </div>
    </div>
    <!--end of container div-->
    <script type="text/javascript" src="./src/app.js"></script>
  </body>
</html>
