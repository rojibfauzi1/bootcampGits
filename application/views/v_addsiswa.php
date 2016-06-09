<h2>Tambah Siswa</h2>
<h3>
	<?php
		$pesan = $this->session->flashdata('pesan');
		if($pesan){
			echo $pesan;
		}
	?>
</h3>
<form action="simpan_siswa" method="POST"> 
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="kirim" value="Kirim" /></td>
		</tr>
	</table>
</form>