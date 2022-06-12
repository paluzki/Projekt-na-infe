<html>
<head>
	<title>Dziękujemy | 3D Team Guides</title>
	<link rel="shortcut icon" href="favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="wyniki.css">
</head>
<body>
<?php
	$q1 = $_POST['Q1'];
	$q2 = $_POST['Q2'];
	$q3 = $_POST['Q3'];
	$q4 = $_POST['Q4'];
	if(isset($_POST['Q5'])) $q5 = $_POST['Q5'];
	else $q5 = "";
	$email = $_POST['ema'];
	
	$opener = fopen("feedback.txt", "a");
	fwrite($opener, "\r\nmail: ");
	fwrite($opener, $email);
	fwrite($opener, "\r\nq1: ");
	fwrite($opener, $q1);
	fwrite($opener, "\r\nq2: ");
	fwrite($opener, $q2);
	fwrite($opener, "\r\nq3: ");
	fwrite($opener, $q3);
	fwrite($opener, "\r\nq4: ");
	fwrite($opener, $q4);
	fwrite($opener, "\r\nq5: ");
	fwrite($opener, $q5);
	
	fclose($opener);
?>
	<div class="podziekowania">
		<h1>Dziękujemy za wypełnienie ankiety :)</h1>
		<h2>Teraz możesz wrócić do <a href="index.html">Strony Głównej.</a></h2>
	</div>
	
</body>
</html>