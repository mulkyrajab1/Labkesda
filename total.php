<!DOCTYPE html>
<html>
<head>
	<title>Penjumlahan pada Isi Kolom Table Add Dinamis</title>
</head>
<body>
	<form>
		<div id="input-container">
			<label for="input-field">Masukkan Nilai: </label>
			<input type="number" id="input-field" />

			<button type="button" onclick="tambahInput()">Tambah</button>
		</div>

		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Nilai</th>
				</tr>
			</thead>
			<tbody id="tabel-body">
			</tbody>
			<tfoot>
				<tr>
					<td>Total:</td>
					<td id="total">0</td>
				</tr>
			</tfoot>
		</table>
	</form>

	<script>
		var nilai = [];

		function tambahInput() {
			// ambil nilai input field
			var input = document.getElementById("input-field").value;

			// tambahkan nilai ke dalam array
			nilai.push(parseInt(input));

			// reset nilai input field
			document.getElementById("input-field").value = "";

			// tampilkan nilai array pada tabel
			tampilkanTabel(nilai);

			// hitung total nilai
			var total = jumlahkan(nilai);

			// tampilkan total nilai pada halaman
			document.getElementById("total").innerHTML = total;
		}

		function tampilkanTabel(array) {
			// buat variabel untuk menampung isi tabel
			var tabelHTML = "";

			// loop untuk menambahkan baris pada tabel
			for (var i = 0; i < array.length; i++) {
				// tambahkan baris pada tabel
				tabelHTML += "<tr><td>" + (i+1) + "</td><td>" + array[i] + "</td></tr>";
			}

			// tampilkan isi tabel pada halaman
			document.getElementById("tabel-body").innerHTML = tabelHTML;
		}

		function jumlahkan(array) {
			// hitung hasil penjumlahan
			var total = 0;

			for (var i = 0; i < array.length; i++) {
				total += array[i];
			}

			return total;
		}
	</script>
</body>
</html>
