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
					<div class="judul">Bentuk Normal</div>
					Menurut Jogiyanto (2005:403) ”Normalisasi (Normalization) adalah Proses untuk mengorganisasikan file untuk menghilangkan grup elemen yang berulang-ulang”. Konsep dan teknik normalisasi ini dikenalkan oleh Dr.E.F Codd di papernya pada tahun 1970 dan 1972. Dalam artikelnya, E.F. Codd mendefinisikan struktur data yang baru yaitu disebut dengan struktur data hubungan (relational data structure). Istilah data hubungan menunjukkan suatu struktur data yang mempunyai hubungan dengan elemen-elemen data lainnya, baik dalam satu atau dalam file lainnya. Brntuk Normal memiliki beberapa tipe yang meliputi First Normal Form (1NF), Second Normal Form (2NF), Third Normal Form (3NF), BCNF (Boyce – Codd Normal Form), Fourth Normal Form (4NF), Fifth Normal Form (5NF), dan DKNF (Domain Key Normal Form), dari ketujuh tipe bentuk normalisasi maka kita ulas satu persatu.

					<div class="subjudul">1.	First Normal Form (1NF) </div>
					<div>
						Karakteristik First Normal Form (1NF) :
						<ol>
							<li>Suatu relasi akan menjadi 1NF jika mengandung nilai atomik. </li>
							<li>Ini menyatakan bahwa atribut tabel tidak dapat menampung banyak nilai. Itu harus hanya memiliki atribut bernilai tunggal. </li>
							<li>Bentuk normal pertama tidak mengizinkan atribut multi-nilai, atribut komposit, dan kombinasinya.</li>
							<li>Bentuk Normal Pertama (1NF) adalah bentuk Normalisasi sederhana.</li>
							<li>Ini menyederhanakan setiap atribut dalam suatu relasi.</li>
							<li>Dalam 1NF, tidak boleh ada kelompok data yang berulang. </li>
							<li>Setiap set kolom harus memiliki nilai unik. </li>
							<li>Ini berisi nilai atom karena tabel tidak dapat menampung banyak nilai.</li>
						</ol>
						<img src="/media_sonia-main/image/36.png" width="70%" alt="">
						<img src="/media_sonia-main/image/37.png" width="70%" alt="">
					</div>

					<div class="subjudul">2. Second Normal Form (2NF)</div>
					Suatu relasi akan berada dalam 2NF jika berada dalam 1NF dan semua atribut bukan kunci berfungsi penuh bergantung pada kunci utama. Karakteristik Second Normal Form (2NF) :
					<ol>
						<li>Dalam 2NF, relasional harus dalam 1NF. </li>
						<li>Dalam bentuk normal kedua, semua atribut bukan kunci berfungsi penuh bergantung pada kunci utama.</li>
						<li>Dalam 2NF, tabel diperlukan dalam 1NF.</li>
						<li>Aturan utama 2NF adalah Tidak ada atribut non-prima yang bergantung pada subset yang tepat dari setiap kunci kandidat tabel. </li>
						<li>Atribut yang bukan merupakan bagian dari candidate key disebut atribut non-prime.</li>
					</ol>
					<img src="/media_sonia-main/image/38.png" width="70%" alt="">
					<img src="/media_sonia-main/image/39.png" width="70%" alt="">
					<img src="/media_sonia-main/image/40.png" width="70%" alt="">

					<div class="subjudul">3. Third Normal Form (3NF)</div>
					Suatu relasi akan berada dalam 3NF jika berada dalam 2NF dan tidak ada ketergantungan transisi. Karakteristik Third Normal Form (3NF) :
					<ol>
						<li>Bentuk Normal Ketiga (3NF) digunakan untuk meminimalkan redundansi transitif.</li>
						<li>Dalam 3NF, tabel diperlukan dalam 2NF. Saat menggunakan tabel 2NF, seharusnya tidak ada ketergantungan parsial transitif.</li>
						<li>3NF mengurangi duplikasi data dan juga mencapai integritas data.</li>
						<li>Suatu relasi akan berada dalam 3NF jika berada dalam 2NF dan tidak mengandung ketergantungan parsial transitif.</li>	
						</li>3NF digunakan untuk mengurangi duplikasi data. Hal ini juga digunakan untuk mencapai integritas data.</li>
						<li>Jika tidak ada ketergantungan transitif untuk atribut non-prima, maka relasi tersebut harus dalam bentuk normal ketiga.</li>
					</ol>
					<img src="/media_sonia-main/image/41.png" width="70%" alt="">
					<img src="/media_sonia-main/image/42.png" width="70%" alt="">
					<img src="/media_sonia-main/image/43.png" width="70%" alt="">

					<div class="subjudul">4. BCNF (Boyce – Codd Normal Form)</div>
					Karakteristik dari Boyce – Codd Normal Form (BCNF) :
					<ol>
						<li>BCNF yang merupakan singkatan dari Boyce – Code Normal From dikembangkan oleh Raymond F. Boyce dan E. F. Codd pada tahun 1974.</li>
						<li>BCNF adalah versi 3NF yang lebih tinggi.</li>
						<li>Ini berkaitan dengan jenis anomali tertentu yang tidak ditangani oleh 3NF. </li>
						<li>Sebuah tabel memenuhi BCNF jika berada dalam 3NF dan setiap atribut adalah determinan fungsional penuh yaitu A → B. (Atribut 'A' adalah determinan).</li>
						<li>Jika setiap determinan adalah kunci kandidat, maka dikatakan BCNF.</li>
						<li>Candidate key memiliki kemampuan untuk menjadi primary key. Ini adalah kolom dalam tabel.</li>
					</ol>
					<img src="/media_sonia-main/image/44.png" width="70%" alt="">
					<img src="/media_sonia-main/image/45.png" width="70%" alt="">
					<img src="/media_sonia-main/image/46.png" width="70%" alt="">
					<img src="/media_sonia-main/image/47.png" width="70%" alt="">

					<div class="subjudul">5. Fourth Normal Form (4NF)</div>
					Suatu relasi akan berada dalam 4NF jika berada dalam bentuk normal Boyce Codd dan tidak memiliki ketergantungan multi-nilai. Karakteristik dari Fourth Normal Form (4NF) :
					<ol>
						<li>Bentuk Normal Keempat (4NF) tidak memiliki dependensi multinilai non-trivial selain kunci kandidat. </li>
						<li>4NF dibangun di atas tiga bentuk normal pertama (1NF, 2NF dan 3NF) dan BCNF. </li>
						<li>Itu tidak mengandung lebih dari satu ketergantungan multinilai. </li>
						<li>Bentuk normal ini jarang digunakan di luar kalangan akademis.</li>
						<li>Suatu relasi akan berada dalam 4NF jika berada dalam bentuk normal Boyce Codd dan tidak memiliki ketergantungan multi-nilai. </li>
						<li>Untuk dependensi A → B, jika untuk satu nilai A, ada beberapa nilai B, maka relasinya akan menjadi dependensi multi-nilai.</li>
					</ol>
					<img src="/media_sonia-main/image/48.png" width="70%" alt="">
					<img src="/media_sonia-main/image/49.png" width="70%" alt="">
					<img src="/media_sonia-main/image/50.png" width="70%" alt="">

					<div class="subjudul">6.	Fifth Normal Form (5NF)</div>
					Sebuah relasi berada dalam 5NF. Jika dalam 4NF dan tidak mengandung ketergantungan bergabung, bergabung harus lossless. Karakteristik dari Fifth Normal Form (5NF) :
					<ol>
						<li>5NF juga dikenal sebagai Project-Join Normal Form (PJ/NF). </li>
						<li>Hal ini dirancang untuk mengurangi redundansi dalam database relasional. </li>
						<li>5NF membutuhkan beberapa hubungan semantik terkait, yang jarang terjadi.</li>
						<li>Dalam 5NF, jika suatu atribut adalah atribut multinilai, maka atribut tersebut harus dikeluarkan sebagai entitas yang terpisah. </li>
						<li>Saat melakukan 5NF, tabel harus dalam 4NF.</li>
						<li>Suatu relasi berada dalam 5NF jika berada dalam 4NF dan tidak mengandung ketergantungan join dan join harus lossless.</li>
						<li>5NF terpenuhi ketika semua tabel dipecah menjadi tabel sebanyak mungkin untuk menghindari redundansi.</li>
					</ol>
					<img src="/media_sonia-main/image/51.png" width="70%" alt="">
					<img src="/media_sonia-main/image/52.png" width="70%" alt="">
					<img src="/media_sonia-main/image/53.png" width="70%" alt="">
					<img src="/media_sonia-main/image/54.png" width="70%" alt="">

					<div class="subjudul">7.	DKNF (Domain Key Normal Form)</div>
					Karakteristik dari DKNF (Domain Key Normal Form) :
					<ol>
						<li>DKNF singkatan dari Domain Key Normal Form membutuhkan database yang tidak mengandung kendala selain domain constraint dan key constraint. </li>
						<li>Di DKNF, mudah untuk membangun database. </li>
						<li>Ini menghindari kendala umum dalam database yang bukan domain yang jelas atau kendala utama. 3NF, 4NF, 5NF dan BCNF adalah kasus khusus dari DKNF. </li>
						<li>Hal ini dicapai ketika setiap kendala pada relasi adalah konsekuensi logis dari definisi.</li>
					</ol>

					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_sonia-main/konten/bab6_pengantarNormalisasiData.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_sonia-main/konten/bab8_alatBantuPemodelanKonseptualData.php'">
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