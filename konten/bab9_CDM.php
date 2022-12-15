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
					<div class="judul">CDM</div>
					<div class="subjudul">A. Pengertian CDM</div>
					<div>
						CDM adalah serangkaian proses administratif yang memungkinkan data tentang pelanggan dan interaksi pelanggan dari sistem sumber yang berbeda untuk digabungkan dan dinormalisasi. Tujuan utama CDM adalah untuk menyediakan semua individu dalam organisasi yang sama dengan pandangan yang holistik dan terpadu tentang pelanggan individu dan segmen pelanggan. CDM adalah bagian dari manajemen data master atau dalam bahasa inggris dikenal sebagai master data management (MDM). Agregasi data adalah setiap proses di mana data dikumpulkan dan dinyatakan dalam bentuk ringkasan. Saat data dikumpulkan, baris data atom -- biasanya dikumpulkan dari berbagai sumber -- diganti dengan statistik total atau ringkasan. Kelompok agregat yang diamati diganti dengan statistik ringkasan berdasarkan pengamatan tersebut. Data gabungan biasanya ditemukan di gudang data, karena dapat memberikan jawaban atas pertanyaan analitis dan juga secara dramatis mengurangi waktu untuk membuat kueri kumpulan data yang besar. Agregasi data sering digunakan untuk menyediakan analisis statistik untuk sekelompok orang dan untuk membuat ringkasan data yang berguna untuk analisis bisnis. Agregasi sering dilakukan dalam skala besar, melalui perangkat lunak yang dikenal sebagai agregator data. Agregator data biasanya menyertakan fitur untuk mengumpulkan, memproses, dan menyajikan data agregat. Agregasi data dapat memungkinkan analis untuk mengakses dan memeriksa sejumlah besar data dalam kerangka waktu yang wajar. Baris data agregat dapat mewakili ratusan, ribuan atau bahkan lebih catatan data atom. Ketika data diagregasi, itu dapat ditanyakan dengan cepat alih-alih mengharuskan semua siklus pemrosesan untuk mengakses setiap baris data atom yang mendasarinya dan mengagregasinya secara real time ketika ditanyakan atau diakses. Karena jumlah data yang disimpan oleh organisasi terus bertambah, data yang paling penting dan sering diakses dapat memperoleh manfaat dari agregasi, sehingga memungkinkan untuk diakses secara efisien. Normalisasi basis data adalah proses pengorganisasian data ke dalam tabel sedemikian rupa sehingga hasil penggunaan basis data selalu tidak ambigu dan sebagaimana dimaksud. Normalisasi tersebut intrinsik untuk teori database relasional. Ini mungkin memiliki efek menduplikasi data dalam database dan sering menghasilkan pembuatan tabel tambahan. Konsep normalisasi database umumnya ditelusuri kembali ke E.F. Codd, seorang peneliti IBM yang, pada tahun 1970, menerbitkan sebuah makalah yang menjelaskan model database relasional. Apa yang digambarkan Codd sebagai "bentuk normal untuk hubungan database" adalah elemen penting dari teknik relasional. Normalisasi data seperti itu menemukan audiens yang siap pada tahun 1970-an dan 1980-an - saat disk drive cukup mahal dan sarana yang sangat efisien untuk penyimpanan data sangat diperlukan. Sejak saat itu, teknik lain, termasuk denormalisasi, juga disukai. CDM mencakup orang, proses, dan teknologi yang dimiliki organisasi untuk mengumpulkan, mengakses, dan mengatur data pelanggan. CDM yang efektif dapat memberi organisasi berbagai manfaat seperti visibilitas pelanggan dan saluran komunikasi yang lebih besar, tingkat kepuasan dan retensi pelanggan yang lebih tinggi, peningkatan kualitas data, dan pendapatan yang lebih tinggi. Vendor CDM populer termasuk Oracle, Hadoop, SAP dan IBM. Organisasi dapat mengimplementasikan CDM dengan perangkat lunak internal atau layanan komputasi awan yang mengumpulkan, menganalisis, dan mengatur informasi pelanggan dalam satu platform yang konsisten. Setelah tersedia, data dapat diakses secara real time oleh semua departemen terkait di seluruh organisasi, termasuk penjualan, pemasaran, dan dukungan pelanggan.
					</div>

					<div class="subjudul">B. Fungsi CDM</div>
					<div>Produk perangkat lunak CDM dapat digunakan dalam berbagai cara, seperti :</div>
					<ol>
						<li>Mengizinkan pemangku kepentingan untuk memulai tanggapan instan terhadap umpan balik atau masalah pelanggan.</li>
						<li>Mengizinkan pemangku kepentingan untuk mengidentifikasi dan menghubungi segmen audiens target.</li>
						<li>Izinkan pemangku kepentingan untuk mengidentifikasi dan menghubungi prospek tertentu yang memenuhi syarat pemasaran (MQL) dan prospek yang memenuhi syarat penjualan (SQL).</li>
						<li>Konsep bisnis perlu diberi nama dan didefinisikan. Nama-nama ini sering kali harus diselesaikan melalui koordinasi antara beberapa unit bisnis, yang mengarah pada peningkatan komunikasi, pemahaman, standarisasi, dan kolaborasi.</li>
						<li>Sebagai hasil dari peningkatan pemahaman data (ditangkap sebagai metadata bisnis dan dimasukkan ke dalam atau ditautkan ke CDM melalui alat penyimpanan metadata), kualitas data dapat ditingkatkan. Jika organisasi tidak dapat mendefinisikan elemen data, bagaimana orang dapat mengetahui apakah data tersebut berkualitas tinggi?</li>
						<li>CDM membantu menyelaraskan TI dengan bisnis. Dengan meluangkan waktu untuk memahami bisnis melalui CDM, bisnis merasa telah dipahami dengan baik. CDM digunakan untuk memvalidasi dan memperbaiki pemahaman – sebelum solusi dikembangkan, sehingga menghemat waktu, tenaga, dan uang. Kesalahpahaman dapat diselesaikan di awal proyek, bukan di akhir selama implementasi.</li>
						<li>Informasi adalah aset utama – namun, seringkali tidak diperlakukan dengan perhatian yang sama seperti pengelolaan sumber daya keuangan, manusia, atau lainnya. Model Data Konseptual adalah pendukung utama Tata Kelola Data untuk memastikan bahwa aset informasi dipahami dan digunakan secara efektif. Model Data Konseptual membantu organisasi mengidentifikasi dan memahami aset informasinya dan membantu memastikan bahwa sistem informasi yang sangat kompleks selaras dengan visi bisnis.</li>
						<li>Desain aplikasi dipengaruhi oleh model data, apakah aplikasi tersebut merupakan Enterprise Data Warehouse, ERP, SOA, OLTP, hub Master Data Management, dll. Misalnya, jika hubungan banyak-ke-banyak (M:M) terlewatkan (misalnya CDM tidak dikembangkan), ini dapat mempengaruhi desain aplikasi secara signifikan. Cara umum untuk menyelesaikan hubungan M:M adalah dengan entitas asosiatif yang berarti bahwa satu tabel lagi dan satu hubungan lagi harus diperhitungkan dalam: kode program, formulir layar, laporan, SQL, antarmuka, pengujian – mempengaruhi proyek secara signifikan jadwal dan biaya.</li>
						<li>Yang lebih penting adalah biaya yang terkait dengan duplikasi data atau data yang hilang yang dapat terjadi karena model hubungan yang salah. Sebuah bank besar mencatat semua informasi pelanggan di tingkat rekening. Ketika ada lebih dari satu pelanggan di akun, informasi penting (misalnya informasi identitas, skor FICO) tentang pelanggan sekunder tidak dicatat. Akibatnya, bank tidak memiliki gambaran yang benar mengenai jumlah nasabah yang dimilikinya dan tingkat aktivitas nasabah yang sebenarnya.</li>
					</ol>

					<div class="subjudul">C. Simbol dan Notasi CDM di Power Designer</div>
					<div>Pada gambar dibawah ini terdapat symbol dan notasi dalam power designer dan juga terdapat deskripsi bagaimana cara kita membuaut diagram CDM.</div>
					<img src="/media_ajar/image/65.png" width="70%" alt="">
					<div class="subjudul">D. Tipe Data Numerik Power Designer</div>
					<div>
						<table class="table">
		  			<thead class="table-light">
		  			<tr>
		  				<td>Standard data type</td>
		  				<td>DBMS-specific <br> physical data type</td>
		  				<td>Content</td>
		  				<td>Length</td>
		  			</tr>
		  			</thead>
		  			<tbody>
		  			<tr>
		  				<td>Integer</td>
		  				<td>int / INTEGER</td>
		  				<td>32-bit integer</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Short Integer	</td>
		  				<td>smallint / SMALLINT</td>
		  				<td>16-bit integer</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Long Integer</td>
		  				<td>int / INTEGER	</td>
		  				<td>32-bit integer</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Byte</td>
		  				<td>tinyint / SMALLINT</td>
		  				<td>256 values</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Number</td>
		  				<td>numeric / NUMBER</td>
		  				<td>Numbers with a fixed decimal point</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Decimal</td>
		  				<td>decimal / NUMBER</td>
		  				<td>Numbers with a fixed decimal point</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Float</td>
		  				<td>float / FLOAT</td>
		  				<td>32-bit floating point numbers	</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Short Float	</td>
		  				<td>real / FLOAT</td>
		  				<td>Less than 32-bit point decimal number</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Long Float</td>
		  				<td>double precision / BINARY DOUBLE</td>
		  				<td>64-bit floating point numbers	</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Money</td>
		  				<td>money / NUMBER</td>
		  				<td>Numbers with a fixed decimal point</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Serial</td>
		  				<td>numeric / NUMBER</td>
		  				<td>Automatically incremented numbers	</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Boolean	</td>
		  				<td>bit / SMALLINT</td>
		  				<td>Two opposing values (true/false; yes/no; 1/0)	</td>
		  				<td>—</td>
		  			</tr>
		  		</tbody>
		  		</table>
					</div>

					<div>Tipe Data Karakter Power Designer</div>
					<div>
						<table class="table">
		  			<thead class="table-light">
		  			<tr>
		  				<td>Standard data type</td>
		  				<td>DBMS-specific <br> physical data type</td>
		  				<td>Content</td>
		  				<td>Length</td>
		  			</tr>
		  			</thead>
		  			<tbody>
		  			<tr>
		  				<td>Characters</td>
		  				<td>char / CHAR</td>
		  				<td>Character strings	</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Variable Characters	</td>
		  				<td>varchar / VARCHAR2	</td>
		  				<td>Character strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Long Characters</td>
		  				<td>varchar / CLOB</td>
		  				<td>Character strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Long Var Characters	</td>
		  				<td>text / CLOB	</td>
		  				<td>Character strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Text	</td>
		  				<td>text / CLOB</td>
		  				<td>Character strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Multibyte</td>
		  				<td>nchar / NCHAR	</td>
		  				<td>Multibyte character strings</td>
		  				<td>Fixed</td>
		  			</tr>
		  			<tr>
		  				<td>Variable Multibyte</td>
		  				<td>nvarchar / NVARCHAR2</td>
		  				<td>Multibyte character strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  		</tbody>
		  		</table>
					</div>

					<div class="subjudul">E. Tipe Data Waktu Power Designer</div>
					<div>
						<table class="table">
		  			<thead class="table-light">
		  			<tr>
		  				<td>Standard data type</td>
		  				<td>DBMS-specific <br> physical data type</td>
		  				<td>Content</td>
		  				<td>Length</td>
		  			</tr>
		  			</thead>
		  			<tbody>
		  			<tr>
		  				<td>Date</td>
		  				<td>date / DATE	</td>
		  				<td>Day, month, year</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Time</td>
		  				<td>time / DATE</td>
		  				<td>Hour, minute, and second</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Date & Time	</td>
		  				<td>datetime / DATE</td>
		  				<td>Date and time</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Timestamp</td>
		  				<td>timestamp / TIMESTAMP	</td>
		  				<td>System date and time</td>
		  				<td>—</td>
		  			</tr>
		  		</tbody>
		  		</table>
					</div>

					<div class="subjudul">F. Tipe Data Lainnya Power Designer</div>
					<div>
						<table class="table">
		  			<thead class="table-light">
		  			<tr>
		  				<td>Standard data type</td>
		  				<td>DBMS-specific <br> physical data type</td>
		  				<td>Content</td>
		  				<td>Length</td>
		  			</tr>
		  			</thead>
		  			<tbody>
		  			<tr>
		  				<td>Binary</td>
		  				<td>binary / RAW</td>
		  				<td>Binary strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Long Binary</td>
		  				<td>image / BLOB</td>
		  				<td>Binary strings</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Bitmap</td>
		  				<td>image / BLOB</td>
		  				<td>Images in bitmap format (BMP)</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Image</td>
		  				<td>image / BLOB</td>
		  				<td>Images</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>OLE</td>
		  				<td>image / BLOB</td>
		  				<td>OLE links</td>
		  				<td>Maximum</td>
		  			</tr>
		  			<tr>
		  				<td>Other	</td>
		  				<td>—</td>
		  				<td>User-defined data type</td>
		  				<td>—</td>
		  			</tr>
		  			<tr>
		  				<td>Undefined</td>
		  				<td>undefined</td>
		  				<td>Undefined. Replaced by the default data type at generation</td>
		  				<td>—</td>
		  			</tr>
		  		</tbody>
		  		</table>
					</div>
					<div class="row halaman">
		  		<div class="judul-halaman">Materi Lainnya</div>
		  		<div class="col-6">
		  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_ajar/konten/bab8_alatBantuPemodelanKonseptualData.php'">
						  <span aria-hidden="true">&larr;</span>
						  Sebelumnya
					  </a>
		  		</div>
				  <div class="col-6 geser-kanan">
						<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_ajar/konten/bab10_membuatDiagramCDM.php'">
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