<html>
<head
	<title>Wyniki</title>
	<style>
		body {
			background-color:black;
			text-allign: center;
			font-size: 30px;
			font-family: Calibri;
			color: #FFF200;

		}
		
		a {
			text-decoration: none;
		}
		
	</style>
</head>
<body>
<?php
	$q1 = $_POST['Q1'];
	$q2 = $_POST['Q2'];
	$q3 = $_POST['Q3'];
	$q4 = $_POST['Q4'];
	$q5 = $_POST['Q5'];
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
	<h1>Dzękujemy za twoje odpowiedzi :)</h1>
	<h2>Teraz możesz wrócić do <a href="index.html">Strony Głównej.</a></h2>
</body>
</html>