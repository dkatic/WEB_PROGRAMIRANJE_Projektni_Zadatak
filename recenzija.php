

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recenzije - Beard Club</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js">
	</script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo1.jpg" alt="">
		</a>
		<ul id="navigation">
			<li>
				<a href="index.html">Početna stranica</a>
			</li>
			<li>
				<a href="o.html">Nekad i sad</a>
			</li>
			<li>
				<a href="galerija.html">Galerija</a>
			</li>
			<li>
				<a href="blog.html">Blog</a>
			</li>
			<li class="selected">
				<a href="recenzija.html">Recenzije</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h1><span>Nije za djevojke :P</span></h1>
		<form method="POST" action="unos.php">
			<input type="text" name="fname" id="fname" placeholder="ime">
			<input type="text" name="address" id="address" placeholder="adresa">
			<input type="email" name="email" id="email" placeholder="email">
			<input type="tel" name="usrtel" id="phone" placeholder="broj telefona">

			<textarea name="message" id="message" placeholder="poruka"></textarea>
			<input type="submit" name="send" id="send" value="pošalji">
		</form>
		<?php
		include "spoj.php";
		$result = mysql_query("SELECT * FROM $tblname");
		if ($row = mysql_fetch_array($result, MYSQLI_ASSOC)){
		echo "<div id='database'>";
		do{
		echo "<p style='padding:20px 0 20px 0; border-bottom:1px solid #252525;'><span style='font-weight:bold'>" . $row['fname'] . "</span>:";
		echo "</br>";
		echo "<b>“</b>" . $row['message'] . "<b>“</b>";
		echo "</p>";
		}
		while ($row = mysql_fetch_array($result));
		echo "</div>";
		}
		?>
	</div>
	<div id="footer">
		<div>
			<p>&copy; 2016 by David. All rights reserved. <b><br>Web programiranje</p>
			<ul>
				<li>
					<a href="https://www.facebook.com/david.katic.900" target="_blank" id="facebook">facebook</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
