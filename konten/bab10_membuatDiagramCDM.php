<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learning Database - Materi</title>
	<link rel="stylesheet" type="text/css" href="/media_sonia-main/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/media_sonia-main/css/main.css">
	<link rel="icon" href="/media_sonia-main/image/logo.png">
	<script type="text/javascript" src="/media_sonia-main/bootstrap/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<?php
include('../header.php');
?>

		<div class="col-lg-8 col-md-8">
			<div class="kotak">
				<div class="isi"> 
					<div class="judul">Membuat Diagram CDM</div>
					Sebelum membuat diagram Conceptual Data Model (CDM), kita harus mengisntall software Power Designer terlebih dahulu. Berikut ini Langkah-langkah membuat diagram CDM (conceptual data model) pada aplikasi Power Designer :
					<div>
						<ol>
							<li>
								Buka aplikasi power designer, maka akan menampilkan tulisan “selamat datang di power designer” seperti pada gambar di bawah ini.
								<div><img src="/media_sonia-main/image/67.png" width="70%" alt=""></div>
							</li>
							<li>
								Setelah memasukki software power designer maka untuk membuat file baru pilih menu file lalu klik “new model” atau klik pada keyboard “ctrl + N”
								<div><img src="/media_sonia-main/image/68.png" width="70%" alt=""></div>
							</li>
							<li>
								Setelah membuata model baru pada power designer kita harus memilih seperti apa model tersebut. Pada kali ini kita akan membuat Conceptual Data Model (CDM). Yang pertama pilih model type di sebelah kiri yaitu “Conceptual Data Model” lalu yang kedua pilih conceptual diagram, dan yang ketiga kita memberi nama pada model name nya bebas sesuai dengan database apa yang ingin kita buat. Pada kali ini kita akan membuat database sekolah dengan nama “database_sekolah”.
								<div><img src="/media_sonia-main/image/69.png" width="70%" alt=""></div>
							</li>
							<li>
								Tampilan power designer setelah di atur untuk membuat CDM (Conceptual Data Model) baru.
								<div><img src="/media_sonia-main/image/70.png" width="70%" alt=""></div>
							</li>
							<li>
								Untuk membuat entity yaitu pilih toolbox lalu pilih conceptual diagram lalu pilih icon seperti pada gambar dibawah ini, icon tersebut merupakan icon dari entity
								<div><img src="/media_sonia-main/image/71.png" width="70%" alt=""></div>
							</li>
							<li>
								Kemudian drag entity tersebut dan beri nama entity, disini kita akan membuat entity.
								<div><img src="/media_sonia-main/image/72.png" width="70%" alt=""></div>
							</li>
							<li>
								Klik pointer (Dipergunakan untuk memilih dan melakukan perubahan property pada obyek yang dipilih).
								<div><img src="/media_sonia-main/image/73.png" width="70%" alt=""></div>
							</li>
							<li>
								Kemudian klik kanan lalu pilih property untuk merubah nama entity yang diinginkan.
								<div><img src="/media_sonia-main/image/74.png" width="70%" alt=""></div>
							</li>
							<li>
								Ubah nama entitas yang awal nya nama default (Entity_1) menjadi entity guru.
								<div><img src="/media_sonia-main/image/75.png" width="70%" alt=""></div>
							</li>
							<li>
								Setelah menambahkan entity Langkah selanjutnya yaitu menambahkan atribut dalam setiap entitas. Pertama-tama kita harus membuka properties dari entitas yang ingin ditambahkan atributnya lalu pilih tab “Attributes”.
								<div><img src="/media_sonia-main/image/76.png" width="70%" alt=""></div>
							</li>
							<li>
								Tambahkan atribut pada entitas guru, disini kita akan menambahkan tiga atribut yaitu atrribut id_guru, nama_guru, dan tanggal_lahir. Untuk membuat primery key maka centang “P”.
								<div><img src="/media_sonia-main/image/77.png" width="70%" alt=""></div>
							</li>
							<li>
								Selanjutkan menambahkan tipe data pada setiap atribut dengan cara klik titik tiga seperti pada gambar yang ditunjuk anak panah seperrti pada gambar dibawah ini.
								<div><img src="/media_sonia-main/image/78.png" width="70%" alt=""></div>
							</li>
							<li>
								Pilih tipe data variable characters pada atribut id_guru dan juga mengatur panjang length sepanjang 100.
								<div><img src="/media_sonia-main/image/79.png" width="70%" alt=""></div>
							</li>
							<li>
								Setelah membuat entitas guru maka buat entitas lainnya yaitu entitas mata pelajaran
								<div><img src="/media_sonia-main/image/80.png" width="70%" alt=""></div>
							</li>
							<li>
								Kemudian tambahkan relasi many to many pada toolbox sebelah kanan.
								<div><img src="/media_sonia-main/image/81.png" width="70%" alt=""></div>
							</li>
							<li>
								Begitulah cara membuat CDM (Conceptual Data Model) pada Power Designer
								<div><img src="/media_sonia-main/image/82.png" width="70%" alt=""></div>
							</li>
						</ol>
					</div>


					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_sonia-main/konten/bab9_CDM.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <!-- <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_sonia-main/konten/bab5_mappingER.php'">
						  Selanjutnya
						  <span aria-hidden="true">&rarr;</span>
						</a>
					</div> -->
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