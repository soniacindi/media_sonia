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
					<div class="judul">Struktur Hierarki Basis Data</div>
					<div class="subjudul">A. Pengertian Arsitektur Basis Data
					</div>
					<div>
						Arsitekturtur Basis data adalah suatu kumpulan data yang tersimpan secara sistematik dimana pengguna dapat melihat data dan pengguna juga dapat melihat cara menggunakan data tersebut. Arsitekturtur ini juga berfungsi memberikan kerangka kerja bagi pembangunan basis data. Arsitekturtur basis data melibatkan desain basis data profesional yang membuat desain ini disebut arsitektur basis data. Jelajahi tugas pekerjaan seorang arsitektur basis data, serta persyaratan pendidikan dan gaji untuk posisi tersebut. Arsitekturtur basis data berfokus pada desain dan konstruksi basis data untuk sistem basis data perusahaan besar yang mengelola sejumlah besar informasi untuk organisasi. Arsitekturtur basis data mencakup pengaturan standar untuk aspek keamanan dan pemrograman basis data ini, serta mencari tahu bagaimana basis data ini akan beroperasi dan berfungsi dalam struktur yang ada.
					</div>
					<div class="subjudul">B. Manfaat Arsitektur basis data dalam Dunia Kerja
					</div>
					<div>
						Arsitekturtur basis data adalah profesional yang melakukan desain dan konstruksi basis data. Para profesional ini membuat basis data baru ini untuk membantu bisnis menjalankan operasi sehari-hari sambil tetap aman dan andal. Beberapa tugas pekerjaan khusus untuk para profesional ini mungkin termasuk: 
					</div>
					<ul type="square">
						<li>
							Mengatur proses pencadangan dan pemulihan untuk basis data 
						</li>
						<li>
							Menentukan strategi arsitekturtur dalam persyaratan bisnis 
						</li>
						<li>
							Membuat model untuk aplikasi data
						</li>
						<li>
							Memantau sistem produksi standar pengembangan basis data
						</li>
						<li>
							Uji sistem dan pembaruan untuk aplikasi basis data 
						</li>
					</ul>
					Arsitekturtur basis data, atau administrator basis data, umumnya bekerja penuh waktu dan dapat bekerja di berbagai bidang, termasuk di bidang perawatan kesehatan yang mengelola data pasien atau dalam mengelola informasi pelanggan secara eceran. Arsitektur basis data membutuhkan pemikiran kritis dan keterampilan memecahkan masalah untuk mengatasi masalah teknis dengan sistem basis data, serta keterampilan komunikasi untuk bekerja dengan manajer, pengembang, dan profesional lainnya.
					<div class="subjudul">C. Persyaratan Pendidikan Arsitektur Basis Data
					</div>
					<div>
					Sebagian besar arsitektur atau administrator basis data membutuhkan setidaknya gelar sarjana, meskipun beberapa posisi mungkin memerlukan gelar master. Meskipun arsitektur basis data dapat mengejar gelar sarjana di bidang ilmu komputer atau teknologi informasi, ada beberapa program gelar sarjana yang menawarkan spesialisasi dengan basis data. Program gelar ini biasanya ditawarkan sebagai Bachelor of Science (BS) di bidang-bidang seperti ilmu komputer dan informasi,arsitek teknologi informasi, atau sistem informasi komputer. Banyak menawarkan spesialisasi seperti pemrograman basis data, administrasi basis data, atau manajemen basis data. Siswa dalam program gelar sarjana ini dapat mengambil kursus di bidang-bidang seperti: 					
					</div>
					<ul type="square">
						<li>
							Bahasa kueri terstruktur (SQL) 
						</li>
						<li>
							Desain sistem  
						</li>
						<li>
							Struktur data 
						</li>
						<li>
							Pemrograman
						</li>
						<li>
							Skrip basis data
						</li>
						<li>
							Pengembangan aplikasi web
						</li> 
					</ul>
				Beberapa majikan mungkin lebih memilih kandidat yang memiliki gelar master. Program gelar master umumnya ditawarkan di bidang teknologi informasi sebagai gelar Master of Science (MS) dan mungkin menawarkan konsentrasi khusus di bidang-bidang seperti desain basis data atau desain dan administrasi basis data.
				<div class="subjudul">D. Struktur Hierarki Basis Data
				</div>	
				<img src="/media_ajar/image/3.png" width="70%" alt="">
				<div>
					Data adalah sumber daya utama dari sebuah organisasi. Data yang disimpan dalam sistem komputer membentuk hierarki yang membentang dari satu bit ke basis data, entitas pencatatan utama perusahaan. Setiap anak tangga yang lebih tinggi dari hierarki ini diatur dari komponen di bawahnya. Pada struktur hierarki basis data terdapat 3 elemen yang meliputi:
				</div>		
				<ul type="disc">
					<li>
						field bidang yang terdiri atas pengelompokan karakter. Bidang data mewakili atribut (karakteristik atau kualitas) dari beberapa entitas (objek, orang, tempat, atau peristiwa).
					</li>
					<li>
						record sebuah catatan rekaman yang mewakili kumpulan atribut yang menggambarkan entitas dunia nyata. Sebuah record terdiri dari field-field, dengan masing-masing field menggambarkan atribut dari entitas.
					</li>
					<li>
						file adalah sekelompok catatan  rekaman terkait. File sering diklasifikasikan berdasarkan aplikasi yang digunakan terutama (file karyawan). Kunci utama dalam file adalah bidang (atau bidang) yang nilainya mengidentifikasi catatan antara lain dalam file data.
					</li>
				</ul>
				<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_ajar/konten/bab1_konsepBasisData.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_ajar/konten/bab3_modelHierarkiBasisData.php'">
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