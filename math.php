<!DOCTYPE html>
<html>
<head>
	<title>Math Game</title>
</head>
<body>
	<h1>Welcome to Math Game</h1>

	<?php
		if (!isset($_COOKIE['username'])){

			// tampilkan form input nama user

			if ($_POST['submitname']){
				// baca nama user dari form 
				// simpan nama user ke cookie
				// redirect to math.php?mode=start
			}

		} else {

			if ($_GET['mode']=="play"){

				if (/* lives > 0 */) {
					// muncul pertanyaan
				} else {
					// cetak game over
					// munculkan link: Main lagi -> mode=start | Hall of Fame -> mode=halloffame
				}

				if ($_POST['submitans']){
					// cek jawaban user
					// jika jawaban benar -> score +10
					// jika jawaban salah -> score -2
					//                    -> lives -1
					// update score, lives di session
					// redirect to math.php?mode=play
				}
			}

			if ($_GET['mode']=="start"){
				// set score -> 0
				// set lives -> 3
				// simpan score dan lives ke session
				// redirect to math.php?mode=play
			}

			if ($_GET['mode']=="halloffame"){
				// tampilkan data score dari db sort by score limit 10
			}
		}
	?>
</body>
</html>