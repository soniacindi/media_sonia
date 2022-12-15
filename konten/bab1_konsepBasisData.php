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
					<div class="judul">Konsep Basis Data</div>
					<div class="subjudul">A. Pengertian Basis Data
					</div>
					<div class="paragraf">Basis data adalah kumpulan data yang saling terintegrasi satu sama lain dan saling berhubungan (relasi) yang dirancang untuk melengkapi informasi yang dibutuhkan, biasanya menggambarkan kegiatan satu atau organisasi yang lebih terkait. Misalnya, database Sekolah Menengah Kejuruan mungkin berisi informasi tentang berikut ini:
					</div>
					<ul>
						<li>
							Entitas seperti siswa, guru, mata pelajaran, jurusan, dan ruang kelas.
						</li>
						<li>
							Hubungan antar entitas, seperti: pendaftaran siswa di jurusan yang telah dipilih, jurusan kursus pengajaran, dan penggunaan ruangan kelas untuk siswa.
						</li>
					</ul>
						Berikut pengertian basis data menurut beberapa ahli :	
					<ol>
						<li>
							Connolly dan Begg, basis data merupakan sekumpulan data tersebar yang berhubungan secara logis, dan penjelasan dari data ini dirancang untuk memenuhi kebutuhan informasi dari suatu organisasi. 
						</li>
						<li>
							Gottschalk dan Saether, basis data merupakan sekumpulan data yang terorganisasi untuk mendukung banyak aplikasi secara efisien dengan memusatkan data dan mengontrol redundant data. 
						</li>
						<li>
							Gordon C. Everest, basis data (database) merupakan suatu koleksi atau kumpulan data yang bersifat mekanis, terbagi, terdefinisi secara formal, dan terkontrol. Pengontrolan sistem database tersebut adalah terpusat pada suatu organisasi.
						</li>
						<li>
							Elmasri, penggunaan istilah basis data lebih dibatasi pada arti implisit yang khusus mempunyai beberapa pengertian berikut :
							<ol type="a">
								<li>
									Basis data dapat dikatakan sebagai penyajian suatu aspek yang berasal dari dunia nyata atau yang biasa dikenal sebagai real world ataupun mini world. Misalnya basis data di suatu perbankan, pertanahan, perpajakan, perpustakaan, dan massih banyak lagi lainnya. 
								</li>
								<li>
									Basis data adalah suatu kumpulan data dari berbagai sumber dengan secara logika memiliki arti implisit. Jadi jika data terkumpul secara acak dan tanpa mempunyai arti, maka tidak dapat disebut sebagai basis data.
								</li>
								<li>
									Basis data perlu dirancang, dibangun, dan dikumpulkan untuk satu tujuan tertentu. 
								</li>
								<li>
									Basis data dapat digunakan oleh beberapa pengguna dan beberapa aplikasi yang sesuai dengan kepentingan pengguna.
								</li>
							</ol>
							Dari beberapa definisi di atas, dapat disimpulkan bahwa basis data adalah sekumpulan data yang saling terkait yang disimpan di dalam komputer dan dapat diolah menggunakan perangkat lunak sehingga memudahkan aktivitas untuk memperoleh informasi.
						</li>
					</ol>
					Data yang berada di dalam database ini adalah sebuah data fakta yang diketahui yang dapat direkam dan memiliki makna tersirat. Misalnya nama, nomor telepon, dan alamat orang yang kita kenal. Saat ini, data ini adalah biasanya disimpan di ponsel, yang memiliki perangkat lunak basis data sederhana mereka sendiri. Data ini juga dapat direkam dalam buku alamat yang diindeks atau disimpan di hard drive, menggunakan komputer pribadi dan perangkat lunak seperti Microsoft Access atau Excel. Kumpulan data terkait dengan makna implisit ini adalah database.
					<div class="subjudul">B. Konsep Basis Data
					</div>
					Sistem database adalah sistem pencatatan berbasis komputer yang sangat baik. Kumpulan data, biasa disebut database, berisi informasi tentang perusahaan tertentu. Ini memelihara setiap informasi yang mungkin diperlukan untuk proses pengambilan keputusan yang terlibat dalam manajemen organisasi itu. Itu juga dapat didefinisikan sebagai kumpulan data yang saling terkait yang disimpan bersama untuk melayani beberapa aplikasi, data disimpan sehingga tidak tergantung pada program yang menggunakan data tersebut. Pendekatan generik dan terkontrol digunakan untuk menambahkan data baru dan memodifikasi dan mengambil data yang ada dalam database. Data terstruktur sehingga memberikan dasar untuk pengembangan aplikasi di masa depan.
				</div>
				<img src="/media_sonia-main/image/1.png" width="60%" alt="">
				<img src="/media_sonia-main/image/2.png" width="60%" alt="">
				<div class="subjudul">
					C. Properti Basis Data
				</div>
				<div>
					Basis Data memiliki properti implisit berikut :
					<ul>
						<li>
							Database mewakili beberapa aspek dari dunia nyata, kadang-kadang disebut miniworld atau Universe of Discourse (UoD). Perubahan ke dunia mini tercermin dalam sebuah basis data.
						</li>
						<li>
							Basis data adalah kumpulan data yang koheren secara logis dengan beberapa bawaan arti. Bermacam-macam data secara acak tidak dapat dengan tepat disebut sebagai basis data.
						</li>
						<li>
							Database dirancang, dibangun, dan diisi dengan data untuk tujuan tertentu. Ini memiliki kelompok pengguna yang dituju dan beberapa pengapikasiannya yang terbentuk sebelumnya telah diminati.
						</li>
					</ul>
					<div>
						Dengan kata lain, basis data memiliki beberapa sumber dari mana data berasal, beberapa derajat interaksi dengan peristiwa di dunia nyata, dan audiens yang secara aktif tertarik dengan isinya. Pengguna akhir database dapat melakukan transaksi bisnis (misalnya, pelanggan membeli kamera) atau peristiwa mungkin terjadi (misalnya, karyawan memiliki bayi) yang menyebabkan informasi dalam database berubah. Dalam urutan agar database akurat dan dapat diandalkan setiap saat, itu harus menjadi cerminan sejati dari miniworld yang diwakilinya; oleh karena itu, perubahan harus tercermin dalam database sesegera mungkin. Sebuah database dapat dari berbagai ukuran dan kompleksitas. Misalnya, daftar nama dan alamat yang disebutkan sebelumnya dapat terdiri dari hanya beberapa ratus catatan, masing-masing dengan a struktur sederhana. Di sisi lain, katalog terkomputerisasi dari perpustakaan besar dapat berisi setengah juta entri yang diatur dalam berbagai kategori menurut nama belakang penulis utama, berdasarkan subjek, berdasarkan judul buku dengan setiap kategori diatur menurut abjad. Database dengan ukuran dan kompleksitas yang lebih besar akan dipertahankan oleh perusahaan media sosial seperti Facebook, yang memiliki lebih dari satu miliar pengguna. Basis data harus memelihara informasi di mana pengguna terkait satu sama lain sebagai teman, postingan setiap pengguna, pengguna mana yang diizinkan untuk melihat setiap postingan, dan sejumlah besar jenis informasi lain yang diperlukan untuk pengoperasian yang benar dari situs Web mereka. Untuk situs Web seperti itu, sejumlah besar database diperlukan untuk menyimpan melacak informasi yang terus berubah yang dibutuhkan oleh situs Web media sosial.
					</div>
					<div>
					<br>
						Contoh database komersial besar adalah Amazon.com. Ini berisi data untuk lebih dari 60 juta pengguna aktif, dan jutaan buku, CD, video, DVD, game, elektronik, pakaian, dan barang-barang lainnya. Basis data menempati lebih dari 42 terabyte (satu terabyte adalah penyimpanan senilai 1012 byte) dan disimpan di ratusan komputer (disebut server). Jutaan pengunjung mengakses Amazon.com setiap hari dan menggunakan database untuk melakukan pembelian. Basis data terus diperbarui sebagai buku baru dan item lainnya ditambahkan ke inventaris, dan jumlah stok dip rbarui sebagai pembelian ditransaksikan. Sebuah database dapat dihasilkan dan dipelihara secara manual atau mungkin terkomputerisasi. Misalnya, katalog kartu perpustakaan adalah database yang dapat dibuat dan dipelihara secara manual. Database terkomputerisasi dapat dibuat dan dipelihara baik oleh sekelompok program aplikasi yang ditulis khusus untuk tugas itu atau oleh a.
					</div>
					<div class="subjudul">D. Kelebihan dan Kelemahan Basis Data
					</div>
					<div>
						Kelebihan menggunakan basis data:
						<ol>
							<li>
								Data dapat digunakan bersama.
							</li>
							<li>
								Dapat dilakukan pembatasan keamanan data.
							</li>
							<li>
								Terciptanya data yang konsisten.
							</li>
							<li>
								Integritas data dapat dipelihara.
							</li>
							<li>
								Independensi data.
							</li>
							<li>
								Pengendalian terhadap data terpusat. 
							</li>
							<li>
								Redundansi data dapat dikurangi.
							</li>
						</ol>
					</div>
					<div>
						Selain kelebihan basis data di atas, terdapat beberapa kelemahan yang ditimbulkan oleh penggunaan basis data, antara lain:
						<ol>
							<li>
								Membutuhkan tingkat keahlian yang tinggi karena database bersifat kompleks terhadap penggunaan hardware berkapasitas besar.
							</li>
							<li>
								Biaya yang dibutuhkan mahal dikarenakan membutuhkan hardware, software, dan brainware yang berkualitas.
							</li>
						</ol>
					</div>
					<div class="subjudul">E. Tujuan Basis Data
					</div>
					<div>
						Basis Data memiliki beberapa tujuan sebagai berikut:
						<ol>
							<li>
								Kecepatan dan kemudahan (speed) - Penggunaan basis data dapat mempercepat dan mempermudah pengguna dalam menyimpan, mengubah, dan menampilkan kembali data.
							</li>
							<li>
								Efisiensi ruang penyimpanan (space) - Penggunaan basis data mampu mengurangi redundancy (pengulangan) data. Hal ini dapat dilakukan dengan menerapkan sejumlah pengodean atau dengan membuat relasi antarkelompok data yang saling berhubungan. 
							</li>
							<li>
								Ketersediaan (availability) - Dengan basis data, data yang sudah tidak digunakan dapat dipisahkan dari sistem basis data yang sedang aktif. Hal ini dapat dilakukan dengan cara menghapus atau memindahkannya ke media backup untuk menghemat ruang penyimpanan. Selain itu dengan memanfaatkan jaringan komputer, data yang berada di suatu lokasi juga dapat diakses di lokasi lainnya.
							</li>
							<li>
								Keakuratan (accuracy) - Keakuratan data pada basis data lebih terjaga dengan menerapkan aturan dan batasan tertentu (constraint), tipe data, domain data, dan keunikan data.
							</li>
							<li>
								Kebersamaan penggunaan (shareability) - Data dalam basis data dapat digunakan secara bersamaan oleh banyak user atau aplikasi. Data-data yang diperlukan oleh banyak orang/bagian tidak perlu dilakukan pencatatan di masing-masing bagian, akan tetapi cukup dengan satu basis data yang digunakan bersama.
							</li>
							<li>
								Keamanan (security) - Dengan penerapan keamanan basis data, setiap pengguna memiliki hak akses masing-masing. Ditentukan objek-objek yang dapat diakses dan jenis-jenis operasi apa saja yang dapat dilakukan.
							</li>
						</ol>
					</div>
					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_sonia-main/konten/bab2_strukturHierarkiBasisData.php'">
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