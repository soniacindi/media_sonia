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
					<div class="judul">Model Hierarki Basis Data</div>
					<div class="subjudul">A. Skema dan Abstraksi Basis Data
					</div>
					<div>
					Abstraksi data adalah proses pemrograman untuk membuat tipe data, biasanya kelas, yang menyembunyikan detail representasi data untuk membuat tipe data lebih mudah digunakan. Abstraksi data melibatkan pembuatan representasi untuk data yang memisahkan antarmuka dari implementasi sehingga programmer atau pengguna hanya perlu memahami antarmuka, perintah untuk digunakan, dan bukan bagaimana struktur internal data direpresentasikan dan/atau diimplementasikan. Abstraksi data membuat sistem yang kompleks lebih ramah pengguna dengan menghilangkan spesifikasi mekanik sistem. Abstraksi data melibatkan pembuatan antarmuka pengguna baru yang meniadakan kebutuhan akan pengetahuan kerja yang mendalam melalui contoh, termasuk ponsel cerdas dan mobil.
					Skema basis data mendefinisikan bagaimana data diatur dalam basis data relasional, hal ini termasuk batasan logis seperti, nama tabel, bidang, tipe data, dan hubungan antara entitas ini. Skema basis data biasanya menggunakan representasi visual untuk mengkomunikasikan arsitektur basis data, menjadi dasar untuk disiplin manajemen data organisasi. Proses desain skema basis data ini juga dikenal sebagai pemodelan data. Model data ini melayani berbagai peran, seperti pengguna basis data, administrator basis data, dan pemrogram. Misalnya, dapat membantu administrator basis data mengelola proses normalisasi untuk menghindari duplikasi data. Atau dapat memungkinkan analis untuk menavigasi struktur data ini untuk melakukan pelaporan atau analisis bisnis berharga lainnya. Diagram ini bertindak sebagai dokumentasi berharga dalam sistem manajemen basis data (DBMS), memastikan keselarasan di berbagai pemangku kepentingan. Skema arsitektur basis data yang dikenal dengan istilah arsitektur tiga skema. Arsitektur tiga skema ini juga disebut arsitektur ANSI/SPARC atau arsitektur tiga tingkat. Kerangka kerja ini digunakan untuk menggambarkan struktur sistem basis data tertentu. Arsitektur tiga skema juga digunakan untuk memisahkan aplikasi pengguna dan database fisik. Arsitektur tiga skema berisi tiga tingkat. Ini memecah database menjadi tiga kategori berbeda.
					</div>
					<img src="/media_ajar/image/4.png" width="60%" alt="">
					<div>
						Pemetaan digunakan untuk mengubah permintaan dan respons antara berbagai tingkat arsitektur basis data. Pemetaan tidak baik untuk DBMS kecil karena membutuhkan lebih banyak waktu. Dalam pemetaan Eksternal / Konseptual, perlu untuk mengubah permintaan dari tingkat eksternal ke skema konseptual. Dalam pemetaan Konseptual / Internal, DBMS mengubah permintaan dari tingkat konseptual ke internal.
					</div>
					<div class="subjudul">B. Pemodelan Data
					</div>
					<div>
						Pemodelan data adalah proses membuat diagram yang disederhanakan dari sistem perangkat lunak dan elemen data yang dikandungnya, menggunakan teks dan simbol untuk mewakili data dan bagaimana data mengalir. Model data menyediakan cetak biru untuk merancang database baru atau merekayasa ulang aplikasi lama. Secara keseluruhan, pemodelan data membantu organisasi menggunakan datanya secara efektif untuk memenuhi kebutuhan bisnis akan informasi. Model data dapat dianggap sebagai diagram alur yang menggambarkan entitas data, atributnya, dan hubungan antar entitas. Ini memungkinkan data management dan analitik untuk mendokumentasikan persyaratan data untuk aplikasi dan mengidentifikasi kesalahan dalam rencana pengembangan sebelum kode apa pun ditulis. Model data dapat dibuat melalui upaya rekayasa balik yang mengekstraknya dari sistem yang ada. Itu dilakukan untuk mendokumentasikan struktur database relasional yang dibangun secara ad hoc tanpa pemodelan data up front dan untuk menentukan skema kumpulan data mentah yang disimpan di data lake atau basis data NoSQL untuk mendukung aplikasi analitik tertentu. 
					</div>
					<ol>
						<li>
							Berbasis Objek - perancangan model data berupa simbol maupun objek. Berikut contoh diagram berbasis objek:
							<ol type="a">
								<li>
									<div>
										ERD (Entity Relationalship Diagram) -
										ERD adalah suatu model untuk menjelaskan hubungan antar data dalam basis data berdasarkan objek-objek dasar data yang mempunyai hubungan antar relasi.
									</div>
									<img src="/media_ajar/image/5.png" width="60%" alt="">

								</li>
								<li>
									Model berioentasi objek adalah konstruksi objek menggunakan kumpulan objek yang berisi nilai tersimpan dari variabel instan yang ditemukan di dalam objek. Tidak seperti model yang berorientasi pada catatan, nilai berorientasi objek hanyalah objek. Pendekatan pemodelan berorientasi objek menciptakan penyatuan aplikasi dan pengembangan basis data dan mengubahnya menjadi model data terpadu dan lingkungan bahasa. Pemodelan berorientasi objek memungkinkan identifikasi dan komunikasi objek sambil mendukung abstraksi data, pewarisan, dan enkapsulasi. Pemodelan berorientasi objek adalah proses mempersiapkan dan merancang seperti apa kode model sebenarnya. Selama fase konstruksi atau pemrograman, teknik pemodelan diimplementasikan dengan menggunakan bahasa yang mendukung model pemrograman berorientasi objek. Pemodelan berorientasi objek terdiri atas pengembangan representasi objek secara progresif melalui tiga fase: analisis, desain, dan implementasi. Selama tahap awal pengembangan, model yang dikembangkan bersifat abstrak karena detail eksternal dari sistem menjadi fokus utama. Model menjadi lebih dan lebih rinci saat berkembang, sementara fokus utama bergeser ke arah pemahaman bagaimana sistem akan dibangun dan bagaimana seharusnya berfungsi.
									<img src="/media_ajar/image/6.png" width="60%" alt="">
								</li>
								<li>
									Simantik adalah gambaran pengetahuan grafis yang menunjukkan hubungan antar berbagai objek dan juga terdiri atas lingkaran-lingkaran yang dihubungkan dengan anak panah yang menunjukkan objek dan informasi tentang objek-objek tersebut.
									<img src="/media_ajar/image/7.png" width="60%" alt="">
								</li>
							</ol>
							<li>
								Berbasis Record - perancangan model data berupa baris. Berikut contoh diagram berbasis record:
								<ol type="a">
									<li>
										Relasional adalah gambaran struktur basis data yang dibuat dengan bentuk tabel
										<img src="/media_ajar/image/8.png" width="60%" alt="">
									</li>
									<li>
										Jaringan adalah gambaran struktur basis data yang kompleks karena melibatkan jaringan pada sistem basis datanya
									</li>
									<li>
										Hirary adalah serangkaian data tentang pemodelan dalam basis data yang berkaitan dengan character, field atau data, record,file, dan tabel dari basis data tersebut. Hirarky ini memungkinkan kita membuat diagram atau perancangan basis data berdasarkan level -> jadi semakin besar level atau jabatan maka posisinya semakin tinggi.
										<img src="/media_ajar/image/9.png" width="60%" alt="">
									</li>
								</ol>
							</li>
						</li>
					</ol>
					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_ajar/konten/bab2_strukturHierarkiBasisData.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_ajar/konten/bab4_strukturKonseptualBasisData.php'">
						  Selanjutnya
						  <span aria-hidden="true">&rarr;</span>
						</a>
					</div>
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