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
					<div class="judul">Pengantar Normalisasi Data</div>
					<div class="subjudul">A. Perancangan Basis Data
					</div>
					<div>
						Desain Basis Data adalah kumpulan proses yang memfasilitasi perancangan, pengembangan, implementasi, dan pemeliharaan sistem manajemen data perusahaan. Basis data yang dirancang dengan benar mudah dipelihara, meningkatkan konsistensi data, dan hemat biaya dalam hal ruang penyimpanan disk. Perancang basis data memutuskan bagaimana elemen data berkorelasi dan data apa yang harus disimpan. Tujuan utama dari desain database dalam DBMS adalah untuk menghasilkan model desain logis dan fisik dari sistem database yang diusulkan. Model logis berkonsentrasi pada persyaratan data dan data yang akan disimpan terlepas dari pertimbangan fisik. Itu tidak menyangkut dirinya sendiri dengan bagaimana data akan disimpan atau di mana akan disimpan secara fisik. Model desain data fisik melibatkan penerjemahan desain DB logis dari database ke media fisik menggunakan sumber daya perangkat keras dan sistem perangkat lunak seperti sistem manajemen basis data atau dalam bahasa inggris disebut DataBase Management Systems (DBMS).
					</div>
					<div class="subjudul">B. Definisi Normalisasi
					</div>
					<img src="/media_sonia-main/image/35.png" width="70%" alt="">
					<div>
						Normalisasi adalah proses pengorganisasian data dalam basis data. Ini termasuk membuat tabel dan membangun hubungan antara tabel tersebut sesuai dengan aturan yang dirancang untuk melindungi data dan membuat database lebih fleksibel dengan menghilangkan redundansi dan ketergantungan yang tidak konsisten. Data yang berlebihan menghabiskan ruang disk dan menimbulkan masalah pemeliharaan. Jika data yang ada di lebih dari satu tempat harus diubah, data harus diubah dengan cara yang persis sama di semua lokasi. Perubahan alamat pelanggan jauh lebih mudah diterapkan jika data tersebut disimpan hanya di tabel Pelanggan dan tidak di tempat lain di database. Apa itu ketergantungan yang tidak konsisten Meskipun intuitif bagi pengguna untuk melihat di tabel Pelanggan untuk alamat pelanggan tertentu, mungkin tidak masuk akal untuk mencari di sana gaji karyawan yang menelepon pelanggan itu. Gaji karyawan terkait dengan, atau bergantung pada, karyawan tersebut dan karenanya harus dipindahkan ke tabel Karyawan. Ketergantungan yang tidak konsisten dapat membuat data sulit diakses karena jalur untuk menemukan data mungkin hilang atau rusak. Ada beberapa aturan untuk normalisasi database. Setiap aturan disebut bentuk normal. Jika aturan pertama dipatuhi, database dikatakan dalam bentuk normal pertama. Jika tiga aturan pertama dipatuhi, database dianggap dalam bentuk normal ketiga. Meskipun tingkat normalisasi lainnya dimungkinkan, bentuk normal ketiga dianggap sebagai tingkat tertinggi yang diperlukan untuk sebagian besar aplikasi. Seperti banyak aturan dan spesifikasi formal, skenario dunia nyata tidak selalu memungkinkan kepatuhan yang sempurna. Secara umum, normalisasi memerlukan tabel tambahan dan beberapa pelanggan menganggap ini rumit. Jika Kita memutuskan untuk melanggar salah satu dari tiga aturan normalisasi pertama, pastikan aplikasi Kita mengantisipasi masalah apa pun yang dapat terjadi, seperti data yang berlebihan dan dependensi yang tidak konsisten.
					</div>
					<div class="subjudul">C. Karakteristik Normalisasi</div>
					Normalisasi juga memiliki karakteristik secara umum, diantara lain :
						<ol>
							
							<li>
								Normalisasi adalah proses pengorganisasian data dalam database. 
							</li>
							<li>
								Normalisasi digunakan untuk meminimalkan redundansi dari suatu relasi atau himpunan relasi. Ini juga digunakan untuk menghilangkan karakteristik yang tidak diinginkan seperti Penyisipan, Pembaruan, dan Penghapusan Anomali. 
							</li>
							<li>
								Normalisasi membagi tabel yang lebih besar menjadi lebih kecil dan menghubungkannya menggunakan hubungan. 
							</li>
							<li>
								Bentuk normal digunakan untuk mengurangi redundansi dari tabel database.
							</li>
							<li>
								Normalisasi menghindari redundansi data. 
							</li>
							<li>
								Normalisasi ini adalah proses formal untuk mengembangkan struktur data. 
							</li>
							<li>
								Integritas data
							</li>
							<li>
								Mmemastikan dependensi data masuk akal yang berarti data disimpan secara logis. 
							</li>
							<li>
								Dapat menghilangkan karakteristik yang tidak diinginkan seperti Penyisipan, Pembaruan dan Penghapusan Anomali.
							</li>
						</ol>
						<div class="subjudul">D. Kelebihan Normalisasi</div>
						<ol>
							<li>Normalisasi membantu meminimalkan redundansi data.</li>
							<li>Organisasi basis data keseluruhan yang lebih besar.</li>
							<li>Konsistensi data dalam database.</li>
							<li>Desain database yang jauh lebih fleksibel.</li>
							<li>Menerapkan konsep integritas relasional.</li>
							<li>Alasan utama untuk menormalkan hubungan adalah menghilangkan anomali ini. Kegagalan untuk menghilangkan anomali menyebabkan redundansi data dan dapat menyebabkan integritas data dan masalah lain seiring pertumbuhan basis data. Normalisasi terdiri dari serangkaian pedoman yang membantu memandu Kita dalam membuat struktur database yang baik.</li>
						</ol>

						<div class="subjudul">E. Kelemahan Normalisasi</div>
						<ol>
							<li>Kita tidak dapat mulai membangun database sebelum mengetahui apa yang dibutuhkan pengguna.</li>
							<li>Performa menurun ketika menormalkan hubungan ke bentuk normal yang lebih tinggi, yaitu, 4NF, 5NF.</li>
							<li>Sangat memakan waktu dan sulit untuk menormalkan hubungan pada tingkat yang lebih tinggi.</li>
							<li>Dekomposisi yang ceroboh dapat menyebabkan desain database yang buruk, yang menyebabkan masalah serius.</li>
						</ol>
						<div class="subjudul">F. Drawbacks Of Normalization</div>
						Seperti yang kita ketahui, normalisasi adalah proses mengatur kolom (atribut) dan tabel (relasi) dari database relasional untuk mengurangi redundansi data dan meningkatkan integritas data. Normalisasi juga merupakan proses penyederhanaan desain database sehingga mencapai struktur yang optimal. Ini mengurangi dan menghilangkan data yang berlebihan. Dalam normalisasi, integritas data terjamin. Ini pertama kali diusulkan oleh Dr. Edgar F. Codd, sebagai bagian integral dari model relasional. Dan kita sudah tahu bahwa normalisasi memberi kita banyak keuntungan dan manfaat, seperti :
						<ol>
							<li>Menjadikan Basis Data Lebih Kecil dengan menghilangkan data yang berlebihan, dengan melakukan ini data akan lebih mudah dikelola dan menghemat lebih banyak ruang penyimpanan. </li>
							<li>Performa Lebih Baik karena semakin kecil data, semakin cepat diproses. </li>
							<li>Hapus anomali yang akan menyebabkan kesalahan dalam sistem, dan masih banyak lagi lainnya.</li>
						</ol>
						Namun, terkadang basis data yang dinormalisasi tidak memberikan efisiensi pemrosesan yang maksimal karena terlalu banyak tabel gabungan yang hanya menyediakan kode data (kunci pengenal) bukan data sebenarnya, sehingga sistem perlu melakukan pencarian lebih lanjut untuk menemukan data yang sebenarnya. Ada beberapa kelemahan dalam normalisasi:
						<ol>
							<li>Membuat tugas yang lebih panjang, karena ada lebih banyak tabel untuk digabungkan, kebutuhan untuk menggabungkan tabel tersebut meningkat dan tugas menjadi lebih membosankan (lebih lama dan lebih lambat). Basis data menjadi lebih sulit untuk direalisasikan juga. </li>
							<li>Tabel akan berisi kode daripada data nyata karena data yang diulang akan disimpan sebagai baris kode daripada data sebenarnya. Oleh karena itu, selalu ada kebutuhan untuk pergi ke tabel pencarian, sehingga sistem akan bekerja lebih lambat. </li>
							<li>Membuat query lebih sulit, karena terdiri dari SQL yang dibangun secara dinamis dan biasanya dibangun oleh alat query yang ramah desktop, sehingga sulit untuk memodelkan database tanpa mengetahui apa yang diinginkan pelanggan. </li>
							<li>Memerlukan Analisis dan Desain yang Mendetail, Normalisasi database adalah tugas yang kompleks dan sulit, karena analis harus mengetahui tujuan database, seperti apakah harus dioptimalkan untuk membaca data, menulis data, atau keduanya, juga memengaruhi cara normalisasi. . Basis data yang dinormalisasi dengan buruk dapat berkinerja buruk dan menyimpan data secara tidak efisien.</li>
						</ol>

						<div class="subjudul">G.	Denormalization</div>
						Denormalization atau biasa disebut dengan Denormalisasi adalah strategi yang digunakan pada database yang sebelumnya dinormalisasi untuk meningkatkan kinerja. Ide di baliknya adalah untuk menambahkan data redundan di tempat yang menurut kami akan paling membantu kami. Ini adalah proses mencoba meningkatkan kinerja baca database, dengan mengorbankan kehilangan beberapa kinerja tulis, dengan menambahkan salinan data yang berlebihan atau dengan mengelompokkan data. Denormalisasi mengacu pada penyempurnaan skema relasional sedemikian rupa sehingga tingkat normalisasi untuk relasi yang dimodifikasi kurang dari derajat setidaknya satu relasi asli. Ini mengacu pada situasi di mana dua relasi digabungkan menjadi satu relasi baru, yang masih dinormalisasi tetapi mengandung lebih banyak nol daripada relasi asli. Hal-hal yang perlu diperhatikan dalam melakukan denormalisasi :
						<ol>
							<li>
								Membuat implementasi menjadi lebih kompleks, karena akan lebih banyak data yang redundan dan anomali yang akan mempengaruhi proses implementasi. 
							</li>
							<li>
								Sering mengorbankan fleksibilitas. 
							</li>
							<li>
								Dapat mempercepat pengambilan tetapi memperlambat pembaruan, redundansi data akan memperlambat pembaruan data karena akan ada lebih banyak tabel yang akan diperbarui.
							</li>
						</ol>
						Pengamanan Demormalisasi :
						<ol>
							<li>Mempertahankan sejarah </li>
							<li>Meningkatkan kinerja kueri, Beberapa kueri mungkin menggunakan beberapa tabel untuk mengakses data yang sering kita butuhkan Mempercepat pelaporan, Kami sangat sering membutuhkan statistik tertentu. </li>
							<li>Membuatnya dari data langsung cukup memakan waktu dan dapat memengaruhi kinerja sistem secara keseluruhan. </li>
							<li>Menghitung nilai yang biasanya dibutuhkan di awal, Kami ingin memiliki beberapa nilai yang siap dihitung sehingga kami tidak perlu membuatnya secara real time (real time ini berkaitan dengan sistem di mana data masukan diproses dalam milidetik sehingga tersedia segera sebagai umpan balik, misalnya, dalam panduan rudal atau sistem pemesanan penerbangan. "pemrosesan sinyal waktu nyata").</li>
						</ol>
					

						<div class="row halaman">
			  		<div class="judul-halaman">Materi Lainnya</div>
			  		<div class="col-6">
			  			<a class="halaman-kiri" href="#" aria-label="Previous"  onclick="location='/media_sonia-main/konten/bab5_mappingER.php'">
							  <span aria-hidden="true">&larr;</span>
							  Sebelumnya
						  </a>
			  		</div>
					  <div class="col-6 geser-kanan">
							<a class="halaman-kanan" href="#" aria-label="Next"  onclick="location='/media_sonia-main/konten/bab7_bentukNormal.php'">
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