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
					<div class="judul">Struktur Konseptual Basis Data</div>
					Model Data Konseptual adalah sebuah konsep basis data dan relasinya. Tujuan membuat model data konseptual adalah untuk menetapkan entitas, atribut, dan relasi antar entitas. Berikut kita akan bahas satu per satu mengenai entitas, atribut dan relasi antar entitas.
					<div class="subjudul">A. Entity atau Entitas
					</div>
					<div>
						Sebuah objek unik tunggal di dunia nyata yang sedang dikuasai. Contoh entitas adalah satu orang (siswa, guru, mahasiswa, dosen), satu produk (mata pelajaran), atau satu organisasi. Tipe entitas -> Seseorang, organisasi, tipe objek, atau konsep tentang informasi yang disimpan. Menjelaskan jenis informasi yang sedang dikuasai. Tipe entitas biasanya sesuai dengan satu atau beberapa tabel terkait dalam database. Entitas dibagi menjadi dua macam yaitu entitas kuat dan entitas lemah
					</div>
					<ol >
						<li>
							Entitas kuat adalah entitas yang dapat berdiri sendiri yang artinya entitas kuat ini tidak bergantung pada entitas lainnya. Entitas kuat ini mempunyai atribut kunci dan entitas ini berbentuk persegi panjang bergaris tunggal.
						</li>
						<li>
							Entitas lemah adalah sebuah entitas yang tidak dapat berdiri sendiri yang artinya entitas lemah ini bergantung pada entitas lainnya, entitas lemah ini adalah hasil dari pembentukan entitas kuat. Entitas lemah ini tidak memiliki atribut key dan entitas lemah ini digambarkan dengan bentuk persegi panjang dengan garis double atau ganda. Jika entitas kuat yang membentuk entitas lemah dihapus, maka secara otomatis entitas lemah juga terhapus.
							<img src="/media_sonia-main/image/10.png" width="70%" alt="">
							<div>
							Dari gambar diatas menggambarkan bahwa tidak aka ada wali murid (entitas lemah -> bentuk persegi panjang dengan garis double atau ganda) jika tidak ada siswa (entitas kuat -> persegi panjang bergaris tunggal).
							</div>
						</li>
					</ol>
					<div class="subjudul">B. Atribut (attribute)
					</div>
					<div>
						Atribut adalah karakteristik atau sifat dari tipe entitas yang menjelaskan entitas, misalnya, tipe entitas Orang memiliki atribut Tanggal Lahir. Nilai atribut adalah nilai data actual atau sebuah informasi yang disimpan pada suatu atribut di dalam suatu entitas atau relasi. Atribut biasanya dikenal sebagai karakteristik dari sebuah entitas (objek). Atribut dilambangkan sebagai notasi elips. Atribut dibagi menjadi beberapa jenis sebagai berikut:
						<ol>
							<li>
								<div>Atribut sederhana (simple attribute/atomic atrribute) - Atribut sederhana adalah atribut yang nilainya tidak dapat dibagi lagi menjadi atribut yang lebih kecil.</div>

								<img src="/media_sonia-main/image/11.png" width="70%" alt="">
							</li>
							<li>
								<div>Atribut komposit (composite atribut) - Atribut komposit merupakan atribut yang bernilai gabungan yang mampu dipecah menjadi bagian yang lebih kecil lagi.</div>
								
								<img src="/media_sonia-main/image/12.png" width="70%" alt="">
							</li>
							<li>
								<div>Atribut bernilai tunggal (single valued attribute) - Atribut bernilai tunggal merupakan jenis atribut yang bernilai hanya satu dari entitas. Contoh dari atribut bernilai tunggal yanti golongan darah. Hal tersebut menunjukkan atribut golongan darah selalu bernilai satu karena satu siswa memiliki satu golongan darah.</div>
								
								<img src="/media_sonia-main/image/13.png" width="70%" alt="">
							</li>
							<li>
								<div>Atribut bernilai banyak (multivalued attribute) - Atribut bernilai banyak merupakan jenis atribut yang nilainya lebih dari satu dalam suatu entitas tertentu. Misalnya atribut hobi, tiap siswa memiliki lebih dari satu hobi.</div>
								
								<img src="/media_sonia-main/image/14.png" width="70%" alt="">
							</li>
							<li>
								<div>Atribut turunan (derived attribute) - Atribut turunan merupakan suatu atribut yang nilainya diperoleh dari atribut lainnya. Contohnya atribut umur, atribut umur ini diperoleh dari atribut tanggal lahir yang diperoleh dari entitas siswa.</div>
								
								<div>
									<img src="/media_sonia-main/image/15.png" width="70%" alt="">
								</div>
							</li>
							<li>
								Atribut identitas (key attribute) - Atribu identitas merupakan atribut yang dijadikan sebagai kunci dari suatu entitas. Atribut identitas ini bersifat unik yang artinya tidak boleh sama dengan data lain yang mengakibatkan hal tersebut dapat digunakan untuk membedakan data dari suatu baris (record) dengan baris lain pada suatu tabel. Atribut identitas (kunci) dapat berfungsi untuk mengindentifikasikan dan menghubungkan suatu tabel dengan tabel lainnya. Atribut identitas dibagi menjadi 5 jenis antara lain:
								<ol type="a">
									<li>
										Super key adalah satu atau lebih atribut yang dengan unik dapat membedakan suatu entitas dengan entitas lainnya dalam suatu himpunan entitas.
									</li>
									<li>
										Candidate key merupakan super key dengan jumlah atribut minimal yang dapat membedakan antara satu entitas dengan entitas yang lainnya dalam suatu entitas.
									</li>
									<li>
										Primary key adalah suatu key yang dipilih untuk menjadi kunci utama mengidentifikasikan entitas dalam himpunan entitas. Nilai atribut yang menjadi primary key harus unik (tidak boleh ganda) dan juga tidak boleh NULL (data tidak boleh kosong).
									</li>
									<img src="/media_sonia-main/image/16.png" width="70%" alt="">
									<li>
										Alternate key adalah sebuah key yang tidak terpilih sebagai primary key.
									</li>
									<li>
										Foreign key merupakan suatu atribut yang telah menunjuk primary key pada tabel lain. Jika sebuah primary key terhubung ke tabel lain, maka keberadaan primary key pada tabel tersebut disebut sebagai foreign key. Foreign key akan terjadi pada suatu relasi yang memiliki kardinalitas one to many (satu ke banyak) atau many to many (banyak ke banyak). Primary key dan foreign key adalah field yang sama, namun pada tabel yang berbeda. Artinya, nama field sebagai primary key dan foreign key tidak boleh berbeda, nama field wajib sama.

									</li>
									<img src="/media_sonia-main/image/17.png" width="70%" alt="">
								<div class="subjudul">C. Relasi antar Entitas
								</div>
								</ol>
								<ol>
									<li>
										Relasi unary merupakan relasi dengan jumlah entitas hanya satu saja, relasi unary ini terjadi karena sebuah himpunan entitas ke himpunan entitas yang sama seperti entitas tadi.
									</li>
									<img src="/media_sonia-main/image/18.png" width="70%" alt="">
									<li>
										Relasi binary adalah sebuah relasi dengan dua entitas.
									</li>
									<img src="/media_sonia-main/image/19.png" width="70%" alt="">
									<li>
										Relasi unary merupakan relasi dengan jumlah entitas hanya satu saja, relasi unary ini terjadi karena sebuah himpunan entitas ke himpunan entitas yang sama seperti entitas tadi.
									</li>
									<img src="/media_sonia-main/image/20.png" width="70%" alt="">
									<li>
										Relasi n-nary adalah sebuah relasi yang menghubungkan lebih dari tiga entitas
									</li>
									Dalam relasi juga terdapat rasio atau derajat kardinalitas yang akan menjelaskan Batasan jumlah keterhubungan satu entitas dengan entitas yang lainnya. Terdapat tiga macam rasio kardinalitas sebagai berikut :
									<ol type="a">
										<li>
											One to One - Jenis hubungan ini memungkinkan hanya satu catatan di setiap sisi hubungan. Kunci utama hanya berhubungan dengan satu catatan (atau tidak ada) di tabel lain. Misalnya, dalam sebuah pernikahan, setiap pasangan hanya memiliki satu pasangan. Hubungan semacam ini dapat diimplementasikan dalam satu tabel dan oleh karena itu tidak menggunakan kunci asing.
										</li>
										<img src="/media_sonia-main/image/21.png" width="70%" alt="">
										<img src="/media_sonia-main/image/22.png" width="70%" alt="">
										<li>
											Hubungan basis data yang banyak digunakan adalah satu-ke-banyak. Ini adalah hubungan tipe kardinalitas antara dua entitas. Satu record dalam satu tabel mungkin memiliki hubungan dengan satu atau lebih record di tabel lainnya. Ini layak ketika kunci asing dari satu tabel mereferensikan kunci utama dari yang lain. Misalnya, sebuah negara bagian mencakup beberapa kota, tetapi kota-kota yang sama hanya berada di bawah satu negara bagian itu. Hubungan satu-ke-banyak dan banyak-ke-satu hampir serupa, tetapi mereka berbeda dalam arahnya. Ketersediaan entitas dan sisi relasinya menentukan apakah relasi itu satu-ke-banyak atau banyak-ke-satu. Misalnya, jika satu guru mengajar beberapa mata kuliah, hubungan antara guru dan mata kuliah adalah satu-ke-banyak, sedangkan hubungan antara mata kuliah dan guru adalah banyak-ke-satu.
										</li>
										<img src="/media_sonia-main/image/23.png" width="70%" alt="">
										<img src="/media_sonia-main/image/24.png" width="70%" alt="">
										<img src="/media_sonia-main/image/25.png" width="70%" alt="">
										<li>
											Kardinalitas many to many adalah sejenis kardinalitas yang menggambarkan hubungan antara dua entitas. Beberapa record dari satu tabel memiliki relasi dengan beberapa record dari tabel lain. Dalam hal ini, setiap record dalam tabel A mungkin memiliki beberapa record yang cocok di tabel B. Sekali lagi, setiap record dalam tabel B mungkin memiliki beberapa entri yang sesuai dalam tabel A. Ini terdiri dari dua hubungan satu-ke-banyak antara dua tabel. Jenis hubungan ini sulit untuk dibangun. Ada pengenalan tabel ketiga untuk memecahkan dan menjalankan hubungan banyak-ke-banyak dalam database relasional. Tabel ketiga adalah meja koneksi atau junction table. Tabel persimpangan menghubungkan dua hubungan satu ke banyak untuk membuat hubungan banyak ke banyak.
										</li>
										<img src="/media_sonia-main/image/26.png" width="70%" alt="">
										<img src="/media_sonia-main/image/27.png" width="70%" alt="">
									</ol>
								</ol>
								<div class="subjudul">D. Batasan Partisipasi
								</div>
								Pada konseptual basis data terdapat batasan partisipasi atau batasan hubungan entitas menjelaskan data berelasasi, batasan partisipasi menentukan apakah entitas harus ada atau tidaknya. Terdapat dua macam Batasan partisipasi antara lain:
								<ol>
									<li>
										Partisipasi total ini artinya bahwa setiap entitas dalam kumpulan entitas harus berpartisipasi secara wajib dalam setidaknya satu contoh hubungan dalam kumpulan hubungan itu. Partisipasi total direpresentasikan menggunakan garis ganda antara himpunan entitas dan himpunan relasi
									</li>
									<img src="/media_sonia-main/image/28.png" width="70%" alt="">
									<li>
										Partisipasi parsial - artinya bahwa setiap entitas dalam himpunan entitas mungkin atau mungkin tidak berpartisipasi dalam contoh hubungan dalam himpunan hubungan itu. Partisipasi parsial direpresentasikan menggunakan garis tunggal antara himpunan entitas dan himpunan relasi.
									</li>
									<img src="/media_sonia-main/image/29.png" width="70%" alt="">
								</ol>
							</li>
						</ol>
					</div>
					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_sonia-main/konten/bab3_modelHierarkiBasisData.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_sonia-main/konten/bab5_mappingER.php'">
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