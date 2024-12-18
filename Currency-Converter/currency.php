<head>
    <title></title>
    <link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./coinExchangeSticker.png" type="image/x-icon">
	<link rel="stylesheet" href="../home_style.css">
</head>
<body>
    <?php include('../header.php') ?>
	<div class="container-container">
    <div class="container">
        <h1 id="title">JDM Currency Converter</h1>
        <img src="./coinExchangeSticker.png" id="coinSticker" alt="coin exchange sticker">
        
        <input type="number" id="userValue" min="1" name="userInput" placeholder="...">
        
        <div class="selecterContainer">
            <select id="fromCurrency" name="fromCurrency" title="Convert From"></select>
            
            <button type="button" id="switchCurrency">🔁</button>

            <select id="toCurrency" name="toCurrency" title="Convert To"></select>
        </div>
        
        <p id="status"></p>
        
        <button type="button" id="btn">Convert</button>
        
        <p id="result"></p>
    </div>
	</div>
    <!-- JavaScript File -->
    <script type="text/javascript" src="./script.js" defer></script>
</body>
</html>
