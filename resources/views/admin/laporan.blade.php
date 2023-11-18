
<html>
<head>
	<title>Absensi - laporan</title>
	<link rel='stylesheet' href='css/custom.css'>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
</head>
<body onload='window.print()' style='font-family: Quicksand, sans-serif'>
	<img src='https://i.ytimg.com/vi/gbD6FGh8IwE/maxresdefault.jpg' style='height: 90px; width: 105px; margin-top: 10px; margin-left: 10px; margin-bottom: -50px;'>
	<img src='' style='display: none; margin-left: auto; width: 90px; margin-bottom: -70px; margin-top: -38px; margin-right: 5px;'>
	<h3 class='text-center' style='font-family: Quicksand, sans-serif; margin-top: -30px;'>.:: PT. Mamiez Figoez ::.</h3>
	<p style='font-size: 12px;' class='text-center'>Jl. Mars, RT.101/RW.008, Kec. Bulan,Kota Jupiter, Planet Uranus 00001 <br> github : MamiezFigoez | Telp : 081******** </p>
	<hr>
	<p style='font-size: 12px;' class='text-end'>Tanggal : {{ request()->get('tanggal') }} </p>
	<h4 class='text-center' style='font-family: Quicksand'>Laporan {{ $jenis }}</h4>
	<table class='table table-striped table-bordered'>
		<thead>
			<tr style="text-align: center;">
				<th>Id</th>
				<th>Nama</th>
				<th>Lama Kerja</th>
				<th>Masuk</th>
				<th>Pulang</th>
				<th>Keterangan</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($laporans as $laporan)
			<tr style="text-align: center;">
				<td>{{ $laporan->karyawan_id }}</td>
				<td>{{ $laporan->karyawan->nama }}</td>
				<td>{{ $laporan->waktuKerja }}</td>
				<td>{{ $laporan->jamMasuk }}</td>
				<td>{{ $laporan->jamPulang }}</td>
				<td>{{ $laporan->keterangan }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>