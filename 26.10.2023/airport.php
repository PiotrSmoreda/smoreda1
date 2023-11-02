<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Odloty samolotów</title>


	<link rel="stylesheet" href="style6.css"> 
</head>

<body>
	<div class="s1">
		<h2>Odloty z lotniska</h2>
	</div>
	<div class="s2"><img src="logo.png" alt="logotyp"></div>
	<div class="main">
		<table>
			<tr>
				<th>LP.</th>
				<th>NUMER REJSU</th>
				<th>CZAS</th>
				<th>KIERUNEK</th>
				<th>STATUS</th>
			</tr>
			<?php
			$conn = mysqli_connect(
				'localhost',
				'root',
				'',
				'egzaamin'
				);

			$qrr = ('SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty ORDER BY czas desc');

			$res = mysqli_query($conn, $qrr);

			while ($V = mysqli_fetch_assoc($res)) {
				echo "<tr>";
				for ($o = 0; $o <= 4; $o++) {
					echo "<td>";
					echo $V[$o];
					echo "</td>";
				}
				echo "</tr>";
			}
			?>
		</table>
	</div>
	<div class="pobierz">
		<a href="samolot.png">Pobierz obraz</a>
	</div>
	<div id="cookie">
		<p>
			<?php
			include ('cookie.php');
			?>
		</p>
	</div>
	<footer>Autor: Piotrek Smoręda</footer>
</body>

</html>