
<!DOCTYPE html>
<html>
<head>
	<title>Web crawler</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
	<form method="post" action="proses.php">
		<p style="text-align:center;">
			<input type="text" name="target" class="input" required/>
		</p>
			
			<tr>
			<td>
				<select name="gender" required>
					<option value="">Pilih Gnder</option>
					<option value="pria">Pria</option>
					<option value="wanita">Wanita</option>
				</select>
			</td>
			</tr>
			<tr>
		
			<td>
				<select name="kategori" required>
					<option value="">Pilih Kategori</option>
					<option value="kaos">Koas</option>
					<option value="kemeja">Kemeja</option>
					<option value="polo">Polo</option>
					<option value="jaket">Jaket</option>
					<option value="sweater">Sweater</option>
					<option value="kacamata">Kacamata</option>
					<option value="topi">Topi</option>
					<option value="piyama">Piyama</option>
					<option value="jas">Jas</option>
					<option value="jeans">Jeans</option>
					<option value="pakaian dalam">Pakaian dalam</option>
					<option value="tas">Tas</option>
					<option value="jam tangan">Jam Tangan</option>
					<option value="sepatu">Sepatu</option>
					<option value="sandal">Sandal</option>
					<option value="dompet">Dompet</option>
					<option value="jilbab">Jilbab</option>
					<option value="baju muslim">Baju Muslim</option>
					<option value="celana kain">Celana Kain</option>
					<option value="ikat pinggang">Ikat Pinggang</option>
				</select>
			</td>
			</tr>

		<p style="text-align:center;">
			<input type="submit" name="url_site" class="button" value="Crawl !" />
		</p>
			
	</form>
</body>
</html>


