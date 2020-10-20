-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 06:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `views` int(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `create_by` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `kategori`, `views`, `image`, `created_at`, `updated_at`, `create_by`) VALUES
(21, '\'Tolak\' Tes Corona untuk 575 Anggota DPR dan Keluarga nya', '<p>Presiden Joko Widodo tak ingin tes cepat dan massal (rapid test) virus corona (Covid-19) dilakukan terhadap orang-orang yang tidak tepat, termasuk anggota Dewan Perwakilan Rakyat (DPR) RI. Rapid test diperintahkan Jokowi harus diprioritaskan untuk dokter, tenaga medis dan keluarganya, serta orang-orang yang masuk kategori orang dalam pemantauan (ODP) dan pasien dalam pengawasan (PDP). &quot;Tadi pagi saya telah perintahkan kepada Menkes untuk rapid test, yang diprioritaskan adalah dokter dan tenaga medis serta keluarganya terlebih dahulu,&quot; kata Jokowi, Selasa (24/3), menjawab pertanyaan soal rencana rapid test untuk seluruh anggota DPR RI dan keluarganya.Selain itu Jokowi menyatakan rapid test juga diprioritaskan untuk orang-orang yang masuk kategori orang dalam pemantauan (ODP) dan pasien dalam pengawasan (PDP). Rencana rapid test untuk seluruh anggota DPR RI dan keluarganya diungkapkan oleh Sekretaris Jenderal DPR RI Indra Iskandar pada Senin (23/3) lalu. Anggota DPR periode 2019-2024 berjumlah 575 orang.Indra mengatakan rapid test rencananya akan dilakukan pada Kamis (26/3) atau Jumat (27/3), di kompleks rumah dinas DPR RI di Kalibata dan Ulujami, Jakarta Selatan. &quot;Karena kan jumlah anggota dewan 575, kalau kali empat saja rata-rata sekitar di atas dua ribu keseluruhan, dengan pembantu dan driver barang kali,&quot; kata Indra kepada wartawan. Rencana DPR ini menuai kritik dari masyarakat dan pengamat politik. Sejumlah pengamat politik menilai standar moral DPR sangat rendah bila tetap memaksakan rencana ini. Sebab, masih banyak masyarakat yang lebih membutuhkan rapid test ketimbang anggota dewan.&quot;Pimpinan, anggota DPR dan keluarganya mendapatkan keistimewaan tes corona, dipertontonkan sedemikian rupa di depan publik tanpa melihat keadaan dengan mata hati yang jernih,&quot; kata peneliti Indef, Didik Rachbini.</p>\r\n', 'Kesehatan', 0, 'c6ff8067-94d5-494d-9aa4-f063846e526d_169.jpg', '2019-11-19 07:59:04', '2020-03-24 07:29:41', '1'),
(46, 'Suami dalam tahanan, warga Bukittinggi positif covid-19 meninggal dunia dalam kondisi hamil', '<p>Padang, (ANTARA) - Seorang warga Bukittinggi, Sumatera Barat dalam kondisi hamil delapan bulan yang terkonfirmasi positif Corona Virus Disease (COVID-19) meninggal dunia di Rumah Sakit Umum Pusat M Djamil Padang, Rabu. &quot;Saya baru menerima informasi yang bersangkutan positif corona sore ini, pemakaman dilaksanakan di Agam sesuai dengan prosedur penanganan jenazah corona,&quot; kata Wali Kota Bukitinggi RamlanNurmatias di Padang, Rabu malam pada jumpa pers daring yang difasilitasi Ikatan Jurnalis Televisi Indonesia (IJTI) Sumatera Barat. Menurut dia pada awalnya pasien tersebut pada Senin (6/4) mengalami kejang dan dibawa oleh masyarakat ke salah satu rumah sakit di Bukittinggi. Kemudian pada malam harinya kondisinya kurang baik akhirnya dikirim ke Rumah Sakit Umum Pusat M Djamil Padang. Berdasarkan hasil labor dari Universitas Andalas ternyata yang bersangkutan dinyatakan positif sore ini. Pada sisi lain saat yang bersangkutan dilarikan ke rumah sakit pada Senin malam , suami yang bersangkutan juga ditahan di Polres setempat karena kasus narkoba. Oleh sebab itu untuk mengantisipasi penyebaran pihaknya akan melakukan penelusuran riwayat kontak almarhumah dengan warga dan petugas medis. &quot;Termasuk dengan suami yang saat ini berada di dalam tahanan, saya sudah berkoordinasi dengan Polres setempat dan besok akan dilakukan tes swab atau pengecekan cairan tenggorokan,&quot; kata dia.</p>\r\n', 'Nasional', 49, 'Screen-Shot-2020-04-08-at-21.12.03.png', '2019-11-19 08:03:59', '2020-03-24 04:40:06', '1'),
(26, ' Detik-detik 4 Prajurit TNI Dikeroyok dan Ditodong Senpi Rakitan di Jambi', 'Empat anggota TNI korban pengeroyokan anggota Serikat Mandiri Batanghari (SMB) di bawah pimpinan Muslim, dihadirkan oleh Jaksa Penuntut Umum (JPU) Kejaksaan Tinggi (Kejati) Jambi dalam sidang yang digelar di Pengadilan Negeri (PN) Jambi, Rabu (20/11/2019).\r\n\r\nKeempat prajurit TNI itu adalah Sertu Zendriawan, Kopda Herliansyah, Koptu Zulhijaz, dan Pratu Riski Pratama. Keterangan saksi diambil untuk terdakwa Muslim, Yohanes, Usman, Dani, dan Bagus Eko.\r\n\r\nKepada majelis hakim, saksi Herliansyah mengungkapkan, ia dan tiga anggota TNI lainnya sedang bertugas memantau Kebakaran Hutan dan Lahan (Karhutla) di Kabupaten Tanjung Jabung Barat (Tanjabbar). Namun, mereka justru mengalami tindak kekerasan.\r\n\r\nMenurut Herliansyah, kekerasan terjadi ketika aksi kedua kelompok SMB di Distrik VIII PT WKS. Aksi pertama terjadi sekitar pukul 11.30 WIB, Muslim bersama puluhan anggotanya sempat diredam. Sehingga Muslim dan sebagian anggotanya membubarkan diri dari lokasi.\r\n', 'Internasional', 0, 'download (1).jpg', '2019-11-27 10:13:49', '2020-01-17 05:57:39', '1'),
(34, 'Update Corona 23 Maret: 579 Kasus, 49 Meninggal, 30 Sembuh', 'Jumlah pasien positif terinfeksi Virus Corona (Covid-19) kembali  Korban yang meninggal pun meningkat menjadi 49 orang, dengan jumlah yang sembuh mencapai 30 pasien.\r\n\r\n\"Jumlah kasus bertambah 65 dari data kemarin. Sehingga total kasus hari ini menjadi 579 orang,\" ucap juru bicara pemerintah Achmad Yurianto saat konferensi pers di Jakarta yang disiarkan langsung, Senin (23/3).Jumlah ini meningkat dibandingkan dengan  48 Meninggal, dan 29 Sembuh.', 'Nasional', 0, 'corona.jpeg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', '1'),
(35, 'Demokrat soal Penghinaan Presiden: Polri Tak Boleh Intimidasi', '<p>Jakarta, CNN Indonesia -- Wakil Ketua Fraksi Partai Demokrat DPR RI Didik Mukrianto meminta Polri tidak mengintimidasi masyarakat terkait aturan penghinaan presiden dan pejabat terkait penanganan virus corona (Covid-19). Didik meminta Polri fokus menegakkan hukum seperti yang dilakukan selama ini tanpa membumbuinya dengan aturan sarat intimidasi yang meresahkan masyarakat. Lihat juga: SBY Minta Telegram Polri soal Penghina Presiden Dievaluasi &quot;Penegakan hukum tidak boleh dilakukan dengan basis intimidatif dan menimbulkan nuansa kebatinan ketertekanan masyarakat terhadap penegak hukum. Apalagi kebebasan yang bertanggung jawab adalah hak setiap warga negara,&quot; kata Didik kepada CNNIndonesia.com, Kamis (9/4).</p>\r\n', 'Teknologi', 0, 'be674906-3b64-4ac1-baa9-b3a5c465d214_169.jpg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', '1'),
(37, 'Padang gratiskan tagihan Perumda Air Minum bagi 3.550 pelanggan tiga bulan ke depan nya', '<p>Pemerintah Kota Padang mengeluarkan kebijakan menggratiskan tagihan Perusahaan Umum Daerah Air Minum/PDAM selama tiga bulan ke depan bagi 3.550 pelanggan yang masuk kelompok sosial A dan B serta rumah tangga A dan B. &quot;Kebijakan ini diambil menyikapi dampak ekonomi corona dalam rangka meringankan beban warga kota,&quot; kata Wali Kota Padang Mahyeldi di Padang, Kamis. Menurut dia kebijakan ini mulai berlaku untuk pembayaran tagihan bulanMei, Juni dan Juli 2020. Sejalan dengan itu Direktur Utama Perumda Air Minum Kota Padang Hendra Pebrizal mengatakan pihaknya telah mengajukan permohonan penggratisan pembayaran rekening air minum bagi pelanggan kepada pemkotPadang selaku pemegang saham. &quot;Penggratisan ini terhitung mulai pembayaran Mei sampai Juli 2020 dengan nilai tagihan sebesar Rp1 miliar,&quot; ujarnya Ia menyampaikan penggratisandilakukan sebagai bentuk kepedulian Pemkot Padang melalui Perumda Air Minum terhadap masyarakat golongan rendah pelanggan air minum.</p>\r\n', 'Politik', 0, '20200409_140026.jpg', '2019-11-19 10:01:27', '2019-11-28 03:45:31', '1'),
(39, 'Google Larang Karyawan Pakai Zoom', '<p>&quot;Kami telah lama memiliki kebijakan untuk tidak mengizinkan karyawan menggunakan aplikasi yang tidak disetujui untuk pekerjaan yang berada di luar jaringan perusahaan kami,&quot; kata juru bicara Google Jose Castaneda, melansir The Verge. Castaneda mengatakan tim keamanan Google telah memberi tahu karyawan bahwa Zoom tidak memenuhi standar keamanan perusahaan. &quot;Karyawan yang telah menggunakan Zoom untuk tetap berhubungan dengan keluarga dan teman dapat terus melakukannya melalui browser web atau melalui ponsel,&quot; ujarnya. Kritik atas keamanan Zoom bukan baru terjadi. Sebelum pandemi Covid-19, telah perusahaan menghadapi kritik karena privasi yang lemah dan perlindungan keamanan, seperti pada bulan Juli tahun lalu ketika cacat macOS memungkinkan URL Zoom dapat secara sepihak mengaktifkan webcam MacBook. Lihat juga: Kekayaan Pendiri Zoom Naik Rp66 Triliun dalam Tiga Bulan Melansir Business Insider, Zoom juga dihadapkan dengan &#39;Zoombombing&#39;, di mana orang asing dapat bergabung dalam sebuah konferensi meski tidak diundang. Tak hanya itu, Zoom juga diketahui berbagi data yang tidak diungkapkan dengan Facebook. Google bukan perusahaan pertama yang melarang penggunaan Zoom. Tesla juga melakukan hal yang sama awal bulan ini karena masalah keamanan dan meminta karyawan untuk mengandalkan panggilan telepon, email (surat elektronik), dan pesan singkat sebagai gantinya. CEO Zoom Eric Yuan mengatakan pihaknya telah merespon masalah tersebut dan akan menghentikan pengembangan fitur baru selama 90 hari agar fokus mengatasi masalah pada privasi dan keamanan. (jps/mik)</p>\r\n', 'Teknologi', 0, 'zoom.jpeg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', '1'),
(40, 'Jaga Keamanan Mitra Pengemudi, Grab Bekali Penunjang Kerja', 'Grab membekali alat penunjang kerja kepada mitra pengemudi dalam menjalankan kegiatan operasionalnya. Hal tersebut seiring dengan dipersiapkannya armada khusus keperluan mengantar tenaga medis maupun hasil laboratorium dan obat-obatan.Managing Director Grab Indonesia Neneng Goenadi mengatakan agar semuanya berjalan aman dan normal, salah satu perhatian untuk mencegah transmisi virus adalah dengan menerapkan kebersihan ekstra pada lini transportasi.\r\n\r\n\" Sebagai platform penyedia transportasi, Grab menyadari pentingnya menjaga kualitas sanitasi dan keamanan berkendara bagi pelanggannya selama masa yang mengkhawatirkan ini,\" ujar berdasarkan keterangan pers, Jakarta, Jumat (3/4).', 'Teknologi', 0, '5261ce30-8790-424c-a470-d651d312c3e1_169.jpeg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', ''),
(41, 'Jurus Asosiasi Telekomunikasi Agar Internet Murah Kala PSBB', 'Asosiasi Penyelenggara Telekomunikasi Seluruh Indonesia (ATSI) membeberkan beberapa opsi untuk meringankan operator seluler demi mendukung tarif murah paket internet kala penerapan Pembatasan Sektor Berskala Besar (PSBB). PSBB diterapkan untuk menekan penyebaran wabah Covid-19\r\n\r\nKetua Umum ATSI Ririek Adriansyah mengatakan operator seluler memahami kondisi masyarakat akibat wabah Covid-19 yang harus mengeluarkan biaya lebih untuk membeli paket internet.\r\n\r\nAkan tetapi, ia mengatakan tidak adil apabila hal ini harus dibebankan semua ke operator. Ia mengatakan kolaborasi antar pemangku kebijakan dengan operator seluler dan penyedia jasa internet.', 'Teknologi', 0, '1c9fa259-8248-4977-a426-1d6c878da817_169.jpg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', '1'),
(42, '60 Persen Mahasiswa Pulang Kampung, Kuliah Online Kala Corona', 'Survey Kementerian Pendidikan dan Kebudayaan (Kemendikbud) mencatat 95 persen mahasiswa perguruan tinggi telah melakukan pendidikan jarak jauh (PJJ) atau belajar dari rumah daring atau online kala wabah virus corona Covid-19.\r\n\r\nPlt. Direktur Jenderal Pendidikan Tinggi Kemendikbud Nizam mengatakan 60 persen mahasiswa pulang kampung ke daerah asal masing-masing dan melakukan belajar daring dari sana.\r\n\r\n\"60 persen di antara mereka pulang kampung jadi mereka melakukan berpelajaran dari dari rumah. jadi ini positif pembelajaran daring bisa sampai Sabang ke Merauke,\" ujar Nizam saat konferensi pers virtual di Dewan TIK Nasional, Kamis (9/4).', 'Teknologi', 0, '270dcb34-5ff5-48c6-8df0-e85654630a3b_169.jpeg', '2020-03-24 08:21:56', '2020-03-24 08:21:56', '1'),
(43, 'PDIP Nilai Anies Lamban Baru Berlakukan PSBB di DKI Jumat', 'Anggota DPRD DKI Jakarta Fraksi PDIP Gilbert menilai Gubernur DKI Jakarta Anies Baswedan lamban dalam pemberlakuan pembatasan sosial berskala besar (PSBB) untuk menanggulangi virus corona (Covid-19). Padahal, kata Gilbert, sebelumnya Anies sering menyampaikan bahwa pemerintah pusat perlu segera mengambil langkah tertentu.\r\n\r\n\"Setelah PSBB diputuskan oleh Menkes, ternyata DKI malah melaksanakannya 3 hari kemudian. Kesan lambat ini sangat terasa karena ucapannya yang selalu minta segera,\" ujar Gilbert dalam keterangan tertulisnya yang diterima CNNIndonesia.com, Kamis (9/4).', 'Politik', 0, 'b43a463f-c876-4291-92b5-51461475e03c_169.jpeg', '2019-11-19 10:01:27', '2019-11-28 03:45:31', '1'),
(44, 'Dua lagi warga Padang positif corona tanpa gejala, total semua jadi 18 orang', 'Padang, (ANTARA) - Dua warga Padang yang sebelumnya tanpa gejala terkonfirmasi positif Corona Virus Disease (COVID-19 berdasarkan hasil tes laboratorium sehingga total posstif hingga hari ini menjadi 18 orang.\r\n\r\n\"Jika kemarin total positif 15 orang, ada penambahan tiga orang hari ini, pasien ke-16 meninggal dunia kemaren yang sebelumnya sempat dirawat di Rumah Sakit Umum Pusat M Djamil Padang\", kata Kepala Dinas Kesehatan Kota Padang Feri Mulyani di Padang, Jumat.\r\n\r\nSementara untuk pasien yang ke-17 dan ke-18 merupakan temuan dari hasil penelusuran kontak dengan pasien nomor enam.\r\n\r\n\"Untuk pasien ke-18 merupakan tenaga medis dan diduga kuat sebelumnya melakukan kontak dengan pasien nomor enam juga,\" kata dia.', 'Nasional', 0, '20200409_132624.jpg', '2019-11-19 07:59:04', '2020-03-24 07:29:41', '1'),
(45, 'Irjen Pol Fakhrizal salurkan ribuan paket bahan pokok untuk warga terdampak COVID-19 di Sumbar', '<p>Mantan Kapolda Sumatera Barat Irjen Pol Fakhrizal menyalurkan 2.500 paket bahan pokok bagi warga yang terdampak ekonomi karena pembatasan sosial yang dilakukan oleh pemerintah dalam mencegah penyebaran virus COVID-19 di SumateraBarat &quot;Kita pahami kondisi saat ini membuat kondisi ekonomi masyarakat menurun dan kita coba berikan bantuan bahan pokok. Ada 2.500 paket yang kita salurkan melalui relawan di Sumbar,&quot; kata dia ketika dihubungi dari Padang, Jumat. Menurut dia dalam menghadapi wabah ini kondisi tubuh harus tetap sehat dan daya tahan tubuh hanya akan didapatkan ketika mengonsumsi makanan yang bergizi. Dirinya berharap bantuan ini dapat dimanfaatkan dengan baik oleh warga yang terdampak. Ia mengatakan walaupun ada pembatasan sosial yang membuat dirinya tidak dapat berkunjung ke kampung halaman. Ia berkomitmen memberikan bantuan baik secara moril maupun kebutuhan pokok dalam menghadapi virus ini &quot;Dimana pun kita berada, mari kita bergotong royong menghadapi musibah ini. Insya Allah dengan bersama-sama dan bersatu kita bisa kuat,&quot; ujarnya. Sebelumnya, Irjen Pol Fakhrizal juga telah membagikan lima ton beras kepada masyarakat terdampakCOVID-19 Kemudian ada 35 ribu masker juga telah dibagikan secara ke sejumlah rumah sakit dan masyarakat di Sumbar. Adapun masker itu diberikan ke Rumah Sakit Achmad Mochtar, Rumah Sakit Stroke, Rumah Sakit Ibunu Sina, Rumah Sakit Madina dan Rumah Sakit Tentara Bukittinggi. Selain itu juga ke RSUD Sadikin Pariaman, Rumah Sakit TMCdansejumlah Puskesmas seperti Puskesmas Pauh Kota Pariaman, Puskesmas Sikapak, Puskesmas Kampung Baru Pandusunan, Puskesmas Air Santok, Puskemas Kuraitaji dan Puskesmas Marunggi. Pihaknya juga membagikan masker ke Muhammadiyah Covid-19 Command Center Sumatra Barat yang memiliki rumah sakit yaitu RS Aisyiyah, Ia mengatakan masker yang dibagikannya memang dikhususkan untuk rumah sakit sebab petugas medis di rumah sakit menjadi garda terdepan dalam membantu masyarakat memerangi wabah ini.</p>\r\n', 'Politik', 7, 'IMG-20200410-WA0085.jpg', '2019-11-19 10:01:27', '2019-11-28 03:45:31', '1'),
(47, 'Ahli RI Ingatkan Gelombang Dua Corona Bisa Lebih Buruk', '<p>Jakarta, CNN Indonesia -- Epidemiolog Dicky Budiman menyatakan gelombang kedua penularan virus corona SARS-CoV-2 (Covid-19) di Indonesia sulit diprediksi. Menurutnya, keterbatasan data yang disajikan pemerintah membuat prediksi puncak penularan yang menjadi patokan untuk mengukur gelombang kedua penularan beragam dan tidak dapat dipastikan. ? &quot;Indonesia masih belum gelombang kedua. Pemodelan saat ini, puncaknya pun terus terang, pemodelan yang kami lihat dan lakukan untuk Indonesia terbatas sekali kesempurnaanya karena terbatasnya data,&quot; ujar Dicky kepada CNNIndonesia.com, Rabu (23/4). ? Dicky menuturkan data yang lengkap adalah syarat untuk membuat pemodelan sebuah epidemi. Salah satu data yang saat ini tidak lengkap, kata dia, adalah data tes dari pemerintah. Dia menilai data tes dari pemerintah yang tidak proporsional mempengaruhi akurasi pemodelan Covid-19. Dicky menuturkan penularan Covid-19 di Indonesia belum mencapai puncaknya. Saat ini, dia mengatakan posisi penularan Covid-19 di Indonesia masih pada fase kurva menanjak. Sedangkan gelombang kedua, kata dia, terjadi ketika satu wilayah mencapai puncak penularan pertama. ? Lihat juga: WHO Peringatkan Jalan Panjang Keluar dari Krisis Corona &quot;Ketika dia telah mencapai puncak kemudian ada pelandaian. Kemudian ada peningkatan, di situlah disebut sebagai gelombang kedua,&quot; ujarnya. ? Hasil pemodelan dari data yang seadanya, Dicky mengatakan puncak epidemi di DKI Jakarta dan Jawa Barat yang merupakan kawasan paling banyak ditemukan kasus paling cepat akan terjadi pada awal atau pertengahan Mei 2020. Sedangkan daerah lain, dia mengatakan tergantung dari sejak kapan kasus ditemukan. ? &quot;Sehingga akan tidak aneh bisa puncak di Jawa, khususnya di Jakarta dan Jabar akan duluan dari Jawa Tengah atau Bali. Bahkan dengan Sulawesi, Kalimantan, dan Sumatera,&quot; ujar Dicky. ? &quot;Jadi ini akan terjadi beberapa variasi waktu tercapainya puncak untuk setiap wilayah,&quot; ujarnya. Di sisi lain, Dicky menuturkan gelombang kedua memilik prasyarat. Pertama, dia berkata gelombang kedua atau seterusnya adalah jika penduduk pada satu wilayah belum memiliki kekebalan yang memenuhi syarat minimal adanya perlindungan terhadap pandemi Covid-19.</p>\r\n', 'Teknologi', 0, 'dcda396d-2b91-4527-abb2-c8a40ab8a409_169.jpeg', '', '', '1'),
(48, 'Permintaan Obat Anti-cemas Meningkat Sejak Pandemi Covid-19', 'Jakarta, CNN Indonesia -- Dampak pandemi infeksi virus corona (Covid-19) terhadap kesehatan mental tampak nyata. Sejak Covid-19 ditetapkan sebagai pandemi, permintaan obat anti-kecemasan meningkat signifikan.\r\n\r\nLaporan terbaru di Amerika Serikat menunjukkan, terdapat peningkatan dokter yang meresepkan obat anti-kecemasan sejak imbauan beraktivitas dari rumah digaungkan. Laporan dari Express Scripts mencatat kenaikan resep obat anti-kecemasan hingga 34 persen pada Maret lalu.\r\n\r\nPenggunaan obat anti-kecemasan ini dua kali lebih tinggi pada perempuan atau meningkat hingga 40 persen. Sedangkan pada pria meningkat 22,7 persen.Secara khusus resep obat untuk kecemasan, depresi, dan insomnia meningkat 21 persen sejak Februari hingga 15 Maret. Resep obat ini baru menurun setelah orang-orang dikarantina atau beraktivitas di rumah.\r\n\r\nDikutip dari CNN, laporan ini didapat dari 31,5 juta pengguna Express Scripts yang dikover oleh perusahaan.\r\n\r\nPeningkatan penggunaan obat anti-kecemasan ini berbanding terbalik dengan situasi dalam lima tahun terakhir. Penggunaan obat-obatan yang bersifat anti-kecemasan menurun hingga 12,1 persen. Dokter banyak mengalihkan penggunaan obat-obatan dengan terapi.\r\n\r\nDampak virus corona yang membuat orang bertahan di rumah, kehilangan pekerjaan, dan sekolah yang ditutup membuat banyak orang merasa tertekan.\r\n\r\nSurvei Kaiser Family Foundation menunjukkan sekitar 45 persen orang mengaku khawatir atau stres karena virus corona.Survei lain dari American Psychiatric Association mendapati hampir 50 persen orang cemas tertular virus corona dan 62 persen cemas orang yang mereka cintai jatuh sakit, menurut sebuah jajak pendapat dari bulan Maret.\r\n\r\nUntuk mencegah kecemasan dan stres saat berada di rumah selama masa pandemi virus corona, psikolog Personal Growth Veronica Adesla menyarankan untuk melakukan kegiatan positif, terhubung dengan keluarga dan teman, serta membatasi konsumsi berita negatif.\r\n\r\n\"Kegiatan positif menyenangkan atau relaxing dapat dilakukan dengan berbagai hal seperti: meditasi, relaksasi, bermain musik, menyanyi, membuat karya seni, berolahraga bersama, bermain bersama, misalnya TikTok-an bersama,\" kata Veronica kepada CNNIndonesia.com. (ptj/asr)', 'Kesehatan', 0, 'c6ff8067-94d5-494d-9aa4-f063846e526d_169.jpg', '', '', '1'),
(49, 'Presiden Amerika Donal Trump Kritik Gubernur karena Buka Kembali Bisnis Terlalu Dini', '<p>Presiden Amerika Serikat Donald Trump mengkritik keputusan Gubernur Georgia Brian Kemp membuka kembali perekonomian negara yang ditutup karena virus corona. Hal itu disampaikan Trump saat konferensi pers di Gedung Putih, Kamis (23/4) waktu setempat. &quot;Saya ingin negara bagian dibuka, lebih dari yang dia lakukan, lebih banyak daripada yang dia lakukan. Tapi saya tidak suka melihat spa pada tahap awal ini, begitu juga para dokter,&quot; kata Trump seperti dikutip dari CNN.Mulai Jumat ini, Georgia mengizinkan pusat-pusat kebugaran, arena bowling, studio tato, tukang cukur, salon rambut dan kuku, dan bisnis terapi pijat untuk dibuka kembali. Kemp juga membolehkan warga ibadah di gereja. Trump menilai terlalu cepat bisnis-bisnis tersebut beroperasi kembali. &quot;Saya mengatakan kepada Gubernur Georgia Brian Kemp, bahwa saya sangat tidak setuju dengan keputusannya untuk membuka fasilitas tertentu yang melanggar pedoman Fase Satu,&quot; ujar dia dilansir dari AFP.Trump secara resmi telah mengizinkan para gubernur negara bagian untuk melonggarkan kewajiban pembatasan dalam konferensi pers pekan lalu. Seperti dilansir Associated Press, Jumat (17/4), Trump menyatakan pelonggaran pembatasan kegiatan hanya diberlakukan di wilayah dengan jumlah penularan virus corona yang rendah. Sedangkan di wilayah dengan jumlah kasus tinggi belum diperbolehkan. Sebelum pembukaan kembali dilakukan, suatu negara harus mengalami penurunan kasus infeksi virus corona selama 14 hari.&quot;Saya menghormatinya dan saya akan membiarkan dia membuat keputusan. Apakah saya akan melakukan itu? Tidak. Saya akan membuat mereka (ditutup) sedikit lebih lama. Saya ingin melindungi kehidupan orang-orang,&quot; kata Trump. Pakar Penyakit Menular Pemerintah AS Anthony Fauci mengatakan telah memberitahu Gubernur Georgia bahwa pembukaan negara harus dilakukan secara berhati-hati dan bertahap.</p>\r\n', 'Internasional', 0, 'ad9c2af7-bee9-4bdc-b2b9-4a80c7140190_169.jpeg', '', '', '1'),
(57, 'Update Corona 25 April: 8.607 Kasus, 720 Wafat, 1.042 Sembuh', 'Jakarta, CNN Indonesia -- Jumlah pasien positif virus corona (Covid-19) di Indonesia pada Sabtu (25/4) mencapai 8.607 orang. Dari jumlah itu pasien yang meninggal sebanyak 720 orang, sementara 1.042 orang dinyatakan sembuh.\r\n\r\nJuru Bicara Pemerintah untuk Covid-19 Achmad Yurianto mengatakan data tersebut merupakan data yang diperoleh pemerintah per Sabtu (25/4) pukul 12.00 WIB.\"Pasien positif bertambah 396, total 8607. Sembuh 1042 orang,\" kata Yurianto melalui keterangan resmi di Graha Badan Nasional Penanggulangan Bencana (BNPB), Jakarta, Sabtu (25/4).Selain tambahan kasus positif baru, jumlah orang yang meninggal dunia bertambah 31 orang, dan yang sembuh juga bertambah 40 orang.\r\n\r\nSejak sepekan terakhir, jumlah kasus meninggal akibat Covid-19 cenderung mengalami penurunan, sedangkan pasien sembuh sebaliknya terus meningkat.\r\n\r\nPada Jumat (24/4) terdapat penambahan 436 kasus baru. Sementara jumlah orang yang meninggal dunia bertambah 42 orang dan yang sembuh bertambah 42 orang.Kriteria pasien sembuh yang diakumulasikan tersebut adalah berdasarkan hasil uji laboratorium selama dua kali dan ketika pasien tidak ada lagi keluhan klinis.\r\n\r\nCovid-19 juga telah menyebar di 34 Provinsi dan 267 Kabupaten/Kota di Indonesia. Sebagai upaya dalam percepatan penanganan covid-19, Pemerintah Daerah (Pemda) diminta untuk mengajukan penerapan Pembatasan Sosial Berskala Besar (PSBB) di wilayahnya. \r\n\r\nDalam menekan penyebaran virus corona, pemerintah telah mencegah masyarakat untuk mudik dengan menerapkan larangan sementara penggunaan sarana transportasi pada 24 April hingga 31 Mei 2020. Meski demikian masih ada jenis kendaraan tertentu yang tetap diizinkan dipakai pada periode tersebut.\r\n\r\nLarangan mudik selama 38 hari ini berlaku pada daerah yang sudah menerapkan Pembatasan Sosial Berskala Besar (PSBB), zona merah penyebaran virus corona, dan aglomerasi (pemusatan wilayah) PSBB.Sejumlah sanksi pidana berupa denda dan juga kurungan penjara akan diberlakukan bagi pemudik. Namun, sejauh ini pihak kepolisian masih berupaya mengedepankan pemberian sanksi dengan meminta kendaraan untuk putar balik di tengah perjalanan. (tst/pmg)', 'Kesehatan', 0, '009b832d-8af1-47c2-b1fc-b19914eb70e3_169.jpeg', '', '', '1'),
(81, 'Corona Merebak Ke Seluruh Negara', '<p>Corona Merebak Ke Seluruh Negara</p>\r\n', 'Internasional', 0, 'corona.jpeg', '', '', '3'),
(123, 'Kecelakaan Lalu Lintas di Kota padang di karenakan sopir mengantuk', '<p>Kecelakaan Lalu Lintas di Kota padang di karenakan sopir mengantuk dalam berkendara</p>\r\n', 'Nasional', 0, '06122019_gantung-diri.jpg', '2020-05-10', '', '1'),
(84, 'Bulan Puasa di tengah wabah virus covid-19 memanglah menyedihkan', '<p>Bulan Puasa di tengah wabah virus covid-19,&nbsp;</p>\r\n', 'Kesehatan', 0, 'Corona.jpeg', '', '', '2'),
(131, 'Petarung Indonesia Prediksi Usman vs Masvidal di UFC 251', '<p>Jakarta, CNN Indonesia --&nbsp;</p>\r\n\r\n<p>Dua petarung MMA Indonesia memprediksi bakal terjadi adu pukulan sampai akhir pada pertarungan antara&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/kamaru-usman\" target=\"_blank\">Kamaru Usman</a></strong>&nbsp;vs&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/jorge-masvidal\" target=\"_blank\">Jorge Masvidal</a></strong>&nbsp;pada gelaran&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/ufc-251\" target=\"_blank\">UFC 251</a></strong>&nbsp;di Yas Island, Abu Dhabi, Minggu (12/7).</p>\r\n\r\n<p>Juara nasional One Pride 2019 kelas 77 kg, Theodorus Ginting mengatakan pertarungan Usman dengan Masvidal bakal berlangsung keras. Kedua petarung disebut sama-sama memiliki karakter kuat nan hebat.&quot;Masvidal itu tipikal petarung yang liar. Sedangkan Usman, petarung yang punya teknik wrestling bagus. Saya lebih condong ke Usman karena dia lebih teknikal dan itu yang dibutuhkan di MMA,&quot; kata Theo kepada CNNIndonesia.com, Kamis (9/7).</p>\r\n\r\n<p>Di mata Theo, Usman memiliki skill set yang lebih lengkap dengan permainan yang lebih rapi di octagon. Terlebih, Usman merupakan juara bertahan di kelas welter UFC yang membuat dirinya kian percaya diri dan haus gelar juara jelang melawan Masvidal.</p>\r\n\r\n<p>Begitu juga dengan teknik game play dan menyerang Usman yang disebut Theo bisa menjadi kekuatan tersendiri untuk mengalahkan lawan. Meskipun Masvidal juga dipercaya telah mempersiapkan diri dengan baik untuk menghadapi Usman.</p>\r\n', 'Nasional', 0, '1180a72d-539b-4825-9c08-87a5f9fae5df_169.jpeg', '2020-07-11', '', '1'),
(132, 'UNESCO Protes Turki Tetapkan Hagia Sophia Sebagai Masjid', '<p>Jakarta, CNN Indonesia --&nbsp;</p>\r\n\r\n<p>Badan Pendidikan dan Kebudayaan Perserikatan Bangsa-Bangsa (<strong><a href=\"https://www.cnnindonesia.com/internasional/20200711115821-134-523511/cnnindonesia.com/tag/unesco\">UNESCO</a></strong>) menyesalkan keputusan Presiden&nbsp;<strong><a href=\"https://www.cnnindonesia.com/internasional/20200711115821-134-523511/cnnindonesia.com/tag/turki\">Turki</a></strong>&nbsp;Recep Tayip Erdogan menjadikan&nbsp;<strong><a href=\"https://www.cnnindonesia.com/internasional/20200711115821-134-523511/cnnindonesia.com/tag/hagia-sophia\">Hagia Sophia</a></strong>&nbsp;sebagai masjid, tanpa ada dialog sebelumnya.</p>\r\n\r\n<p>Hagia Sophia merupakan salah satu situs bersejarah di Istanbul dan merupakan bekas katedral ortodoks dengan arsitektur Bizantium tersebut.</p>\r\n\r\n<p><br />\r\n&quot;Keputusan (Turki) ini memunculkan masalah yakni dampak perubahan status pada nilai universal sebuah properti,&quot; kata UNESCO melalui pernyataan pada Jumat (10/7).</p>\r\n', 'Internasional', 0, '1180a72d-539b-4825-9c08-87a5f9fae5df_169.jpeg', '2020-07-11', '', '1'),
(135, 'KBRI Kuala Lumpur Tak Tahu Djoko Tjandra di Malaysia', '<p>Jakarta, CNN Indonesia --&nbsp;</p>\r\n\r\n<p>Kedutaan Besar Republik Indonesia (KBRI) di Kuala Lumpur,&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/malaysia\" target=\"_blank\">Malaysia</a></strong>&nbsp;menyatakan pihaknya belum memiliki informasi terkait keberadaan buronan kasus korupsi pengalihan hak tagih (cessie) Bank Bali&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/djoko-tjandra\" target=\"_blank\">Djoko Tjandra</a></strong>, yang sebelumnya dikabarkan tengah berada di sana.<br />\r\n&nbsp;<br />\r\nHal itu disampaikan oleh Koordinator Fungsi Penerangan dan Sosial Budaya KBRI Malaysia, Agung Cahaya Sumirat, pada Senin (13/7).</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h5>Lihat juga:</h5>\r\n			&nbsp;<a href=\"https://www.cnnindonesia.com/nasional/20200713100330-12-523906/dikabarkan-di-malaysia-imigrasi-tak-catat-nama-djoko-tjandra/\">Dikabarkan di Malaysia, Imigrasi Tak Catat Nama Djoko Tjandra</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;<br />\r\n&quot;Terkait isu Djoko Tjandra, sejauh ini kami belum memiliki informasi keberadaan yang bersangkutan di Malaysia. Kami pantau perkembangan isu ini dari pemberitaan di media,&quot; kata Agung lewat pesan tertulis yang diterima&nbsp;<em>CNNIndonesia.com.</em><br />\r\n&nbsp;<br />\r\nAgung juga mengatakan bahwa dia akan mengkomunikasikan dan mengkoordinasikan perihal keberadaan Djoko Tjandra kepada para pemangku kepentingan terkait.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h5>Lihat juga:</h5>\r\n			&nbsp;<a href=\"https://www.cnnindonesia.com/internasional/20200710100455-106-523116/menanti-buronan-ri-di-singapura-dijemput-seperti-maria-lumowa/\">Menanti Buronan RI di Singapura Dijemput seperti Maria Lumowa</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nDjoko sebelumnya diketahui berada di DKI Jakarta pada 8 Juni 2020 untuk mendaftarkan permohonan Peninjauan Kembali (PK) atas kasus yang menjeratnya di Pengadilan Negeri Jakarta Selatan.<br />\r\n&nbsp;<br />\r\nNamun, dalam sidang perdana, Senin (6/7), yang bersangkutan tidak hadir dengan alasan menjalani pengobatan di salah satu rumah sakit di Kuala Lumpur, Malaysia.</p>\r\n', 'Internasional', 0, 'bapack.jpeg', '2020-07-13', '', '1'),
(144, 'Politeknik ATI Padang luncurkan program studi baru Diploma IV teknologi rekayasa bioproses energi terbarukan', 'Padang (ANTARA) - Politeknik ATI Padang luncurkan program studi baru Diploma IV Teknologi Rekayasa Bioproses Energi Terbarukan\r\n\r\nEnergi Terbarukan yang merupakan salah satu sumber energi yang tengah dikembangkan secara masif di Indonesia, tidak saja karena sumber energinya mudah ditemukan di Indonesia tetapi juga karena potensi bahan baku yang beraneka ragam, karenanya Politeknik ATI Padang meluncurkan program studi baru teknologi rekayasa Bioproses..\r\n\r\nEnergi terbarukan adalah upaya untuk mengatasi semakin menipisnya ketersediaan sumber energi fosil, terungkap dalam webiner, Rabu.\r\n\r\nPengembangan energi terbarukan ini harus dilakukan karena dengan hanya mengandalkan bahan bakar fosil (batu\r\n\r\nbara, minyak dan gas) sebagai sumber energi sudah tidak bisa dilakukan.\r\n\r\nSaat ini energi terbarukan menjadi isu besar yang berpotensi mengubah peta geopolitik energi dunia.\r\n\r\nKemajuan teknologi dan penurunan biaya teknologi membuat energi terbarukan tumbuh lebih cepat daripada sumber energi lainnya.\r\n\r\nBahkan, beberapa teknologi energi terbarukan, seperti biodiesel atau bioethanol, sudah kompetitif disektor penggunaan sebagai bahan bakar.\r\n\r\nTerlebih, daya saing tersebut belum memperhitungkan kontribusi energi terbarukan dalam mengurangi polusi udara dan mencegah dampak perubahan iklim.\r\n\r\nMelalui Webinar Series#6 yang diselenggarakan, pada hari Rabu, 5 Agustus 2020, Politeknik ATI Padang sebagai perguruan tinggi vokasi di bawah Kementerian Perindustrian\r\n\r\nberkomitmen mengembangkan keilmuan energi terbarukan dengan membuka program studi Diploma IV yaitu Teknologi Rekayasa Bioproses Energi Terbarukan.\r\n\r\nPeluncuran program studi ini langsung dilakukan oleh Kepala Badan Pengembangan Sumber Daya Manusia Industri Kementerian Perindustrian, Eko S.A. Cahyanto.\r\n\r\nHarapan beliau, program studi ini akan menghasilkan tenaga kerja yang kompeten bisa langsung diserap oleh industri. Sehingga industri lebih berkembang ke berbagai pelosok\r\n\r\nIndonesia dengan memanfaatkan energi terbarukan dalam menjalankan proses produksinya.\r\n\r\nWebinar ini juga diisi oleh narasumber dari organisasi dan industri yang peduli dengan pemanfaatan energi terbarukan di Indonesia, yaitu Direktur Eksekutif Masyarakat Energi Terbarukan Indonesia Paul Butar-Butar, Direktur PT. Energi Agro Nusantara Ir. Izmirta Rachman, dan Section Head Biodiesel PT. Smart TBK Bobby Nugroho.\r\n\r\nPaparan dan diskusi dalam webinar ini memberikan pencerahan yang luar biasa tentang ketersediaan bahan baku yang melimpah dan cara pengolahannya menjadi energi terbarukan, sehingga menjadi sumber energi baru dan bahkan menjadi ladang usaha baru yang menjanjikan.\r\n\r\nSelanjutnya, bagi calon mahasiswa yang masih bingung dalam memilih arah masa depannya, mari bergabung dengan program Diploma IV Teknologi Rekayasa Bioproses Energi Terbarukan di Politeknik ATI Padang.\r\n\r\nPendaftaran mahasiswa dapat dilakukan melalui www.jarvis.poltekatipdg.ac.id sampai dengan 24 Agustus 2020. Industri yang memanfaatkan dan bergerak dibidang energi terbarukan ini akan semakin berkembang dan akan membutuhkan tenaga kerja kompeten.\r\n\r\nJumlah mahasiswa untuk angkatan pertama ini akan ada peluang mendapatkan baesiswa.\r\n\r\nAyo, Dunia Industri Memanggil Anda !!!\r\n', 'Teknologi', 0, 'IMG-20200805-WA0110.jpg', '2020-08-06', '', '1'),
(143, 'DPRD Padang bagi informasi meningkatkan PAD pasca pandemi COVID-19 pada DPRD Kabupaten Langkat', 'Padang (ANTARA) - DPRD Kota Padang berbagi informasi mengenai upaya yang dilakukan dalam peningkatan Pendapatan Asli Daerah (PAD) pasca pandemi COVID-19 ke anggota DPRD dari Kabupaten Langkat, Sumatera Utara.\r\n\r\nKepala Bagian (Kabag) Humas Protokol dan Publikasi DPRD Kota Padang, El Fauzi di Padang, Rabu, mengatakan Kota Padang juga merupakan salah satu daerah yang terdampak akibat pandemi COVID-19, khususnya di bidang ekonomi.\r\n\r\n&amp;quot;Untuk itu, DPRD Padang tentu tidak akan tinggal diam, dan akan terus mendorong pemerintah setempat dalam menghidupkan kembali perekonomian di Kota Padang dalam rangka meningkatkan PAD,&amp;quot; tambah dia.\r\n\r\nIa menyampaikan hal itu setelah pertemuan dengan anggota DPRD dari Kabupaten Langkat, Sumatera Utara di Gedung DPRD Kota Padang, Sumatera Barat.\r\n\r\nLebih lanjut, ia menyebutkan untuk penanganan COVID-19, Padang telah mengeluarkan dana sekitar Rp71 miliar, termasuk di dalamnya dana dari &amp;quot;refocusing&amp;quot; anggaran kegiatan DPRD Kota Padang sekitar Rp20 miliar lebih.\r\n\r\nIa mengatakan anggaran yang telah &amp;#39;direfocusing&amp;#39; berupa anggaran pembelian mobil dinas dewan, pembangunan gedung DPRD Padang, dan perjalanan dinas dewan yang ditiadakan selama masa pandemi COVID-19 beberapa waktu lalu.\r\n\r\n&amp;quot;Semua anggota dewan telah sepakat uang tersebut diserahkan untuk dana COVID-19,&amp;quot; ujar dia.\r\n\r\nSekretaris Komisi C DPRD Kabupaten Langkat, Rahmanuddin Rangkuti mengatakan kunjungan mereka ke Padang dalam rangka mengetahui bagaimana cara pengawasan legislator Padang terhadap pajak retribusi pasca pandemi, dan peningkatan PAD.\r\n\r\n&amp;quot;Kami berharap dengan kunjungan ini dapat memberikan gambaran terhadap kami dalam meningkatkan PAD di Kabupaten Langkat ke depannya,&amp;quot; tambah dia.\r\n\r\nIa menyebutkan target PAD di Kabupaten Langkat sebesar Rp180 miliar sangat kecil jika dibandingkan dengan target PAD di Padang.\r\n\r\n&amp;quot;Karena Kabupaten Langkat sendiri terdiri atas 23 kecamatan, 240 desa, dan 37 kelurahan,&amp;quot; ujar dia.\r\n\r\nIa juga menyebutkan Kabupaten Langkat juga terdampak pandemi COVID-19. Salah satunya perhotelan di kabupaten itu ditutup dan baru bisa dibuka 4 Juli 2020. Dengan demikian, pendapatan daerah baru dimulai kembali.\r\n\r\n&amp;quot;Untuk penanganan COVID-19, Kabupaten Langkat mengeluarkan dana sekitar Rp47 miliar yaitu Rp17 miliar untuk badan penanggulangan bencana daerah dan Dinas Kesehatan Kabupaten Langkat. Kemudian Rp30 miliar untuk bantuan sosial terhadap masyarakat yang terdampak,&amp;quot; jelas dia.\r\n\r\nDPRD Kabupaten Langkat sendiri telah &amp;quot;merecofusing&amp;quot; anggara sebesar Rp5,6 miliar yaitu anggaran dari perjalanan dinas dan kunjungan kerja.\r\n\r\n&amp;quot;Kami berharap pandemi COVID-19 ini segera berakhir sehingga masyarakat kembali beraktivitas seperti biasa,&amp;quot; ujar dia.\r\n&amp;nbsp;\r\n\r\nPewarta :&amp;nbsp;Laila Syafarud\r\nEditor:&amp;nbsp;Hendra Agusta\r\nCOPYRIGHT &amp;copy;&amp;nbsp;ANTARA&amp;nbsp;2020\r\n', 'Politik', 0, '05_DPRD.jpg', '2020-08-06', '', '1'),
(145, 'Fantastis, program tambah daya super wow gaet 2.234 pelanggan PLN Sumbar', 'Padang (ANTARA) - Program Gebyar Kemerdekaan 2020 Tambah Daya Super WOW dari PLN begitu diminati pelanggan, buktinya di Sumatera Barat sudah terdaftar 2.234 pelanggan.\r\n\r\n&amp;quot;Sejak diluncurkan pada Juli lalu, sudah terdaftar 2234 pelanggan PLN Sumbar yang mengikuti program Gebyar Kemerdekaan 2020 tersebut,&amp;quot; kata General Manager PLN UIW Sumbar Bambang Dwiyanto di Padang, Selasa.\r\n\r\nMenurut dia, tingginya antusiasme masyarakat tersebut diluar dugaan PLN, namun hal tersebut tentu positif karena menunjukkan geliat pertumbuhan ekonomi dan aktivitas masyarakat yang semakin meningkat sehingga memerlukan daya listrik yang semakin tinggi.\r\n\r\nBambang menyebutkan diskon yang sangat besar tersebut menjadi daya tarik utama pelanggan untuk mendaftar program ini, terlebih kebutuhan listrik pada pelanggan tarif rumah tangga semakin tinggi saat pandemi ini.\r\n\r\n&amp;quot;Saat ini sudah 2.234 pendaftar dan angka tersebut masih terus bertambah, sosialisasi juga terus kami tingkatkan karena ingin seluruh masyarakat mengetahui dan memanfaatkan program Super WOW ini. PLN Siap memenuhi kebutuhan listrik pelanggan agar tetap nyaman dan produktif di rumah,&amp;quot; imbuh Bambang.\r\n\r\nRibuan pendaftar tersebut berasal dari berbagai wilayah di Sumbar, diantaranya 1.224 pendaftar dari wilayah kerja Unit Pelaksana Pelayanan Pelanggan (UP3) Padang, 345 pendaftar dari wilayah kerja Bukittinggi, 480 pendaftar dari UP3 Solok, dan 185 dari wilayah kerja UP3 Payakumbuh.\r\n\r\nCukup membayar Rp170-ribuan, pelanggan bisa tambah daya sampai 5500 VA melalui program yang berlaku hingga 30 September 2020.\r\n\r\nProgram ini merupakan salah satu upaya PLN memberikan kemudahan bagi masyarakat untuk memenuhi kebutuhan listrik, khususnya saat pandemi Covid-19 yang menyebabkan tingginya kebutuhan daya listrik karena pola aktivitas yang beralih ke rumah.\r\n\r\nDiskon tambah daya &amp;ldquo;Super Wow&amp;quot; ditujukan khusus untuk pelanggan golongan tarif rumah tangga mulai dari daya 450 Volt Ampere (VA) sampai daya 4.400 VA dengan pilihan daya akhir adalah daya 2.200 VA sampai daya 5.500 VA.\r\n\r\nPelanggan cukup membayar Rp 170.845,- dari harga normal bisa mencapai Rp 4.893.450,-. PLN memastikan tidak ada perbedaan tarif listrik pelanggan rumah tangga daya 1300 hingga 5500 VA, semuanya sama dengan tarif Rp. 1.467,-/kwh.\r\n\r\nhttps://caramengatasimasalahmu.blogspot.com/\r\n', 'Nasional', 0, 'IMG-20200804-WA0045.jpg', '2020-08-06', '', '1'),
(146, 'Dampak COVID-19 ekonomi melemah, penjualan bendera merah putih masih lesu jelang HUT RI ke-75', 'Padang (ANTARA) - Pedagang mengeluhkan penjualan bendera merah putih dan umbul-umbul untuk kebutuhan Hari Ulang Tahun (HUT) Kemerdekaan RI ke-75 masih lesu dibandingkan tahun sebelumnya.\r\n\r\n&amp;quot;Jika dibandingkan tahun sebelumnya, penjualan bendera merah putih tahun ini jauh merosot diperkirakan lebih dari 50 persen,&amp;quot; kata seorang pedagang bendera merah putih Teguh (40) di depan Masjid Nurul Iman Padang, Rabu.\r\n\r\nIa menyebutkan jenis bendera yang dijualnya berupa bendera tiang, bendera rempel, umbul-umbul, dan marawa.\r\n\r\n&amp;quot;Tahun sebelumnya pembuatan bendera tiang mencapai 300 kodi. Namun sekarang hanya 100 kodi saja. Karena takut tidak terjual,&amp;quot; jelas dia.\r\n\r\nLebih lanjut, ia menyebutkan saat ini pesanan bendera rempel juga berkurang hanya 1.000 meter jika dibandingkan tahun sebelumnya mencapai 5.000 meter untuk wilayah Sumbar.\r\n\r\n&amp;quot;Saat ini kami hanya menyediakan bendera rempel stok lama saja. Tidak membuat yang baru, karena pemesannya tidak banyak dan biaya pembuatannya cukup mahal,&amp;quot; tambah dia.\r\n\r\nIa menjelaskan saat ini harga penjualan bendera juga dikurangi dari harga biasanya seperti bendera rempel yang biasanya dijual Rp100 ribu per meter sekarang hanya Rp50 ribu per meter dan bendera tiang biasanya dijual Rp50 ribu, sekarang hanya Rp20 ribu.\r\n\r\n&amp;quot;Kami berharap penjualan sekarang balik modal saja sudah cukup,&amp;quot; ujar dia.\r\n\r\nMenurut dia salah satu penyebab merosotnya penjualan bendera tersebut karena pandemi COVID-19.\r\n\r\n&amp;quot;Pandemi COVID-19 menyebabkan ekonomi masyarakat melemah. Dengan demikian, tentu masyarakat lebih mengutamakan memenuhi kebutuhan sehari-hari, cukup memasang bendera yang tahun sebelumnya,&amp;quot; terang dia.\r\n\r\nIa mengakui penjualan bendera merah putih ini merupakan usaha keluarga yang sudah dimulai sejak 1990-an.\r\n\r\nIa juga mengatakan biasanya hasil penjualan bendera tersebut mencapai ratusan juta per tahun.\r\n\r\n&amp;quot;Kalau sekarang saya pesimis akan mencapai segitu,&amp;quot; ujar dia.\r\n\r\nBendera yang dijualnya dijahit sendiri di rumah oleh saudara perempuannya dan ada juga yang dipesan ke para penjahit di Padang.\r\n\r\nIa mulai menjajakan barang dagangannya sejak 13 Juli 2020 dengan mengikat bendera yang dijual pada seutas tali yang direntangkan di antara dua tiang di pagar Masjid Nurul Iman.\r\n\r\nPenjualan bendera merah putih tersebut hanya dilakukan satu kali setahun, karena biasanya ia menjual bahan bangunan.\r\n\r\n&amp;quot;Setelah Agustus nanti saya balik lagi bekerja seperti semula,&amp;quot; ujar dia.\r\n\r\nSeorang padagang lainnya Ardi (35) juga mengeluhkan hal yang sama yaitu masih sepi pembeli kendati sudah memasuki pekan kedua menjelang HUT RI ke-75 pada 17 Agustus 2020.\r\n\r\n&amp;quot;Saat ini pembeli masih sepi, meskipun pemerintah Kota Padang telah menyerukan pemasangan bendera serentak. Tetap tidak seramai dulu,&amp;quot; lanjut dia.\r\n&amp;nbsp;\r\n', 'Kesehatan', 0, '05_bendera.jpg', '2020-08-06', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `judul`, `image`) VALUES
(1, '', 'pmb2020-covid19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `isi_komentar` text DEFAULT NULL,
  `id_berita` tinytext DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `tampil` varchar(10) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama_lengkap`, `isi_komentar`, `id_berita`, `tgl`, `jam`, `tampil`) VALUES
(7, 'ritacuantiq22@ymail.com', '<p>artikelnya bagus, sangat membantu dalam pelayanan informasi.. terima kasih</p>\r\n\r\n<p>dan jangan lupa update informasi terbaru ya !!!</p>\r\n\r\n<p>&nbsp;</p>\r\n', '31', '2017-03-30', '11:26:01', 'Public'),
(8, 'bimbim77@gmail.com', '<p>Berita Sangat Bagus pak</p>\r\n', NULL, NULL, NULL, 'Public'),
(9, 'bimbim77@gmail.com', '<p>Berita nya sangat menarik</p>\r\n', NULL, NULL, NULL, 'Public'),
(10, 'bimbim77@gmail.com', '<p>Berita nya sangat menarik</p>\r\n', NULL, NULL, NULL, 'Public'),
(11, 'Chahganteng66@gmail.com', '<p>Akurat Sekali Berita nya</p>\r\n', NULL, NULL, NULL, 'Public'),
(12, 'andrrehaxor12@gmail.com', '<p>mantap sekali kang :v</p>\r\n', NULL, NULL, NULL, 'Private'),
(13, 'bimbim77@gmail.com', '<p>tidak bisa login min</p>\r\n', NULL, NULL, NULL, 'Private'),
(14, 'alannuri.xblast441@gmail.com', '<p>saya terharu melihat wabah yang kian melanda di negeri ku tercinta !!!</p>\r\n', NULL, NULL, NULL, 'Public'),
(15, 'bimbim77@gmail.com', '<p>Mantap kak informasi nya sangat bermanfaat</p>\r\n', NULL, NULL, NULL, 'Private'),
(18, 'rivaldo@gmail.com', 'Sangat Bermanfaat', NULL, NULL, NULL, 'Private'),
(20, 'ariantochueckx33@gmail.com', 'Mantap\r\n', NULL, NULL, NULL, 'Private'),
(21, 'ariantochueckx33@gmail.com', 'selamat siang, saya ingin menjadi seorang penulis berita di web ini pak, WA 081539803262\r\n', NULL, NULL, NULL, 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `expired` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `judul`, `kontak`, `deskripsi`, `email`, `alamat`, `logo`, `expired`) VALUES
(1, 'Web Berita Kota Padang', '089531941653', '© 2020 Portal Berita, logo and all associated elements (R) and © 2020 Cable News Network, Inc. A Time Warner Company. ©2020 All rights reserved | This template is made CyberTeam  by https://caramengatasimasalahmu.blogspot.com/', 'rizky12@gmail.com', 'Alamat Belum di isi', 'berita-harian-vector-logo-720x340.png', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `id_induk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_induk`, `nama`, `icon`, `url`, `created_at`) VALUES
(1, 'root', 'Internasional', '0', '\r\n', ''),
(2, 'root', 'Ekonomi', '', '', ''),
(3, 'root', 'Olah Raga', '', '', ''),
(4, 'root', 'Kesehatan', '', '', ''),
(6, 'root', 'Teknologi', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto_user` varchar(100) DEFAULT 'user.png',
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `foto_user`, `level`) VALUES
(1, 'Jokerkw', 'https://caramengatasimasalahmu.blogspot.com/', '21232f297a57a5a743894a0e4a801fc3', 'post-2.jpg', 'Admin'),
(2, 'Riko Hermansyah', 'rikostmiknh@yahoo.com', '6d645e4f965768f1561684ce8cf79f5f', 'user.png', 'User'),
(3, 'alfarisi', 'alfarisi12@gmail.com', 'e5bc1c6d81d979705455fdd126b9050d', 'user.png', 'User'),
(6, 'Fajar Ridick Industries', 'stikomjbi@gmail.com', NULL, 'user.png', 'User'),
(11, 'Bram Putra', 'Bram Sistem Informasi', NULL, 'user.png', 'User'),
(12, 'Siti Zuriah', 'Sitizuriah@gmail.com', NULL, 'user.png', 'User'),
(13, 'Narrita', 'test@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user.png', 'User'),
(14, 'Pondoksoft.com', 'Pondoksoft.com', '21232f297a57a5a743894a0e4a801fc3', 'user.png', 'User'),
(15, 'adminsjQJ@gmail.com', 'adminsjQJ@gmail.com', NULL, 'user.png', 'Admin'),
(17, 'Yulianto', 'Yulianto', '698d51a19d8a121ce581499d7b701668', 'user.png', 'User'),
(18, 'Andika Lesmana', 'Andika Lesmana', '698d51a19d8a121ce581499d7b701668', 'user.png', 'User'),
(20, NULL, '', NULL, 'user.png', 'User'),
(21, NULL, '', NULL, 'user.png', 'User'),
(22, NULL, '', NULL, 'user.png', 'User'),
(23, NULL, '', NULL, 'user.png', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
