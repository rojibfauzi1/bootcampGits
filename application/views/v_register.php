<!DOCTYPE html>
<html>
<head>
	<title>Ini register</title>
</head>
<body>
	<h2><?php echo $title ?></h2>
	<p>
		<b>Data Siswa</b><br/>
		<?php
		foreach($siswa as $sis){
			echo "Nama Siswa : ".$sis->nama."<br/>";
			echo "NIM Siswa : ".$sis->nim;
		}
		?>
	</p>
</body>
</html>