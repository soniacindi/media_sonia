<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learning Database - Materi</title>
	<link rel="stylesheet" type="text/css" href="/media_ajar/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/media_ajar/css/main.css">
	<link rel="icon" href="/media_ajar/image/logo.png">
	<script type="text/javascript" src="/media_ajar/bootstrap/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<?php
include('../header.php');
?>

		<div class="col-lg-8 col-md-8">
			<div class="kotak">
				<div class="isi"> 
					<div class="judul">Mapping ER ke Relasi Tabel</div>
					Setelah merancang diagram ER sistem, kita perlu mengubahnya menjadi model Relasional yang dapat langsung diimplementasikan oleh RDBMS apa pun seperti Oracle, MySQL, dll. Dalam artikel ini kita akan membahas cara mengubah diagram ER ke Model Relasional untuk skenario yang berbeda.
					<div class="subjudul">
						A. Hubungan Biner dengan kardinalitas 1:1 dengan partisipasi total suatu entitas
					</div>
					<div>
						Seseorang memiliki 0 atau 1 nomor paspor dan Paspor selalu dimiliki oleh 1 orang. Jadi kardinalitas 1:1 dengan batasan partisipasi penuh dari Paspor. Pertama, Konversikan setiap entitas dan hubungan ke tabel. Tabel orang sesuai dengan Entitas Orang dengan kunci sebagai Per-Id. Demikian pula tabel Paspor sesuai dengan Entitas Paspor dengan kunci sebagai No-Pass. Has Table merepresentasikan hubungan antara Person dan Passport (Yang mana punya paspor mana). Sehingga akan mengambil atribut id_pelanggan dari pelanggan dan no_passport dari Passport.
					</div>
					<img src="/media_ajar/image/30.png" width="60%" alt="">
					<div class="subjudul">
						B. Hubungan biner dengan kardinalitas 1:1 dan partisipasi parsial dari kedua entitas
					</div>
					<div>
						Seorang pria menikahi 0 atau 1 wanita dan sebaliknya juga. Jadi kardinalitas 1:1 dengan kendala partisipasi parsial dari keduanya. Pertama, Konversikan setiap entitas dan hubungan ke tabel. Tabel pria sesuai dengan Entitas Pria dengan kunci sebagai Id_laki-laki. Demikian pula tabel Wanita sesuai dengan Entitas Wanita dengan kunci sebagai id_perempuan. Tabel Kawin mewakili hubungan antara Pria dan Wanita (Mana Laki-laki yang menikah dengan perempuan). Sehingga akan diambil atribut id_perempuan dari perempuan dan id_laki-laki dari laki-laki.
					</div>
					<img src="/media_ajar/image/31.png" width="60%" alt="">
					<div class="subjudul">
						C. Hubungan biner dengan n : 1 kardinalitas
					</div>
					<div>
						Dalam skenario ini, setiap siswa hanya dapat mendaftar di satu mata kuliah pilihan tetapi untuk mata kuliah pilihan bisa ada lebih dari satu siswa. Pertama, Konversikan setiap entitas dan hubungan ke tabel. Tabel siswa sesuai dengan Entitas Siswa dengan kunci sebagai id_siswa. Demikian pula tabel mata_pelajaran sesuai dengan Entiti mata_pelajaran dengan kunci sebagai id_mapel. Mendaftar merepresentasikan hubungan antara siswa dan mata_pelajaran (Siswa mana yang mendaftar di mata pelajaran mana). Sehingga akan diambil atribut id_siswa dari siswa dan id_mapel dari id_mapel.
					</div>
					<img src="/media_ajar/image/32.png" width="60%" alt="">
					<div class="subjudul">
						D. Hubungan biner dengan m : n kardinalitas
					</div>
					<div>
						Dalam skenario ini, setiap mahasiswa dapat mendaftar di lebih dari 1 mata kuliah wajib dan untuk mata kuliah wajib dapat lebih dari 1 mahasiswa. Pertama, Konversikan setiap entitas dan hubungan ke tabel. Tabel siswa sesuai dengan Entitas Siswa dengan kunci sebagai id_siswa. Demikian pula tabel maple_wajib sesuai dengan Entitas mapel Wajib dengan kunci sebagai id_mapel_wajib. Mendaftar Table merepresentasikan hubungan antara siswa dan mapel_wajib (siswa mana yang mendaftar di mata pelajaran mana). Sehingga akan diambil atribut id_siswa dari entitas didwa dan id_mapel_wajib dari mapel_wajib.
					</div>
					<img src="/media_ajar/image/33.png" width="60%" alt="">
				</div>
				<div class="subjudul">
					E. Hubungan biner dengan entitas lemah
				</div>
					<div>
						Dalam skenario ini, seorang pegawai dapat memiliki banyak tanggungan dan satu tanggungan dapat bergantung pada satu pegawai. Tanggungan tidak memiliki keberadaan tanpa pegawai (misalnya; kita sebagai seorang anak dapat menjadi tanggungan ayah kita di perusahaannya). Jadi itu akan menjadi entitas yang lemah dan partisipasinya akan selalu total. Entitas Lemah tidak memiliki kunci sendiri. Jadi kuncinya adalah kombinasi dari kunci entitas pengenalnya (id_karyawan dalam entitas Karyawan dalam hal ini) dan kunci parsialnya (Nama-D). Pertama, Konversikan setiap entitas dan hubungan ke tabel. Tabel pegawai sesuai dengan Entitas pegawai dengan kunci sebagai id_pegawai. Demikian pula tabel nama_tanggungan sesuai dengan entiti tanggungan dengan kunci sebagai  nama-d dan id_pegawai. Tabel memiliki merepresentasikan hubungan antara Karyawan dan Tanggungan (Pegawai mana yang memiliki tanggungan). Sehingga akan diambil atribut id_pegawai dari pegawai dan nama-d dari tanggungan.
					</div>
					<img src="/media_ajar/image/34.png" width="60%" alt="">
					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_ajar/konten/bab4_strukturKonseptualBasisData.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_ajar/konten/bab6_pengantarNormalisasiData.php'">
						  Selanjutnya
						  <span aria-hidden="true">&rarr;</span>
						</a>
					</div>
		  	</div>
				</div>
			</div>

<?php
include('../footer.php');
?>
</div>
</div>
</body>
</html>