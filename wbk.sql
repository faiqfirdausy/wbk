/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - wbk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wbk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `wbk`;

/*Table structure for table `abcsoal` */

DROP TABLE IF EXISTS `abcsoal`;

CREATE TABLE `abcsoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `petunjuk_teknis` text,
  `id_nomorsoal` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

/*Data for the table `abcsoal` */

insert  into `abcsoal`(`id`,`nama`,`petunjuk_teknis`,`id_nomorsoal`,`updated_at`,`created_at`) values 
(1,'a. Apakah unit kerja telah membentuk tim kerja WBK\r\n/ WBBM untuk melakukan\r\npembangunan Zona\r\nIntegritas ?','<p>a.&nbsp;Membuat undangan pembentukan Tim kerja WBK / WBBM,</p>\r\n\r\n<p>b.&nbsp;Melaksanakan rapat pembentukan Tim kerja WBK / WBBM,</p>\r\n\r\n<p>c.&nbsp;Penentuan anggota Tim harus memiliki kompetensi, memahami tusi, berdedikasi, tidak bermasalah, tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan kode perilaku,</p>\r\n\r\n<p>d.&nbsp;Pengesahan Tim kerja WBK / WBBM.</p>',1,NULL,NULL),
(2,'b. Apakah penentuan anggota\r\nTim kerja WBK / WBBM\r\nselain pimpinan dipilih\r\nmelalui\r\nprosedur/mekanisme yang\r\njelas ?\r\n','<p>a. Pimpinan, pejabat, dan pihak terkait melakukan seleksi untuk membentuk Tim kerja,</p>\r\n\r\n<p>b. Seleksi dilakukan dengan mempertimbangkan:</p>\r\n\r\n<ol>\r\n	<li>Kompetensi,</li>\r\n	<li>Memahami tusi,</li>\r\n	<li>Berdedikasi,</li>\r\n	<li>Tidak bermasalah,</li>\r\n	<li>Tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan disiplin.</li>\r\n</ol>\r\n\r\n<p>c. Rapat penentuan Tim kerja,</p>\r\n\r\n<p>d. Penetapan Tim kerja.</p>',1,'2019-03-11 04:08:00',NULL),
(3,'a. Apakah ada dokumen rencana kerja pembangunan Zona Integritas menuju WBK/WBBM ','<p>Buat rencana aksi tiap-tiap penanggung jawab program (kapan dimulai, berapa lama, target yang akan dicapai)<br />\r\nMembuat SK Kepala Satker tentang rencana pembangunan ZI.</p>',2,'2019-03-11 04:11:59',NULL),
(4,'b. Apakah dalam dokumen pembangunan terdapat target-target prioritas yang relevan dengan tujuan pembangunan WBK/WBBM?','<p>Target prioritas adalah hasil yang ingin dicapai dalam tiap-tiap kegiatan, program dan inovasi yang dilaksanakan dalam rangka mempercepat Proses Perubahan serta membawa dampak menuju kearah yang lebih baik.</p>\r\n\r\n<ol>\r\n	<li>Tentukan target prioritas yang dirasa mudah diraih atau dicapai di tiap komponen perubahan,</li>\r\n	<li>Penentuan target-target prioritas harus melibatkan seluruh Tim Kerja,</li>\r\n	<li>&nbsp;Melaksanakan Analisa dan Evaluasi pada masing-masing Rencana Kerja dan Rencana Aksi yang terlaksana maupun tidak.</li>\r\n</ol>',2,'2019-03-11 04:13:35',NULL),
(5,'c. Apakah terdapat\r\nmekanisme atau media\r\nuntuk mensosialisasikan\r\npembangunan\r\nWBK/WBBM?\r\n','<p>Sosialisasi dilaksanakan agar kemauan untuk melakukan perubahan Menuju WBK/WBBM didengar dan dipahami oleh Internal dan Eksternal. Proses Pembangunan ZI menuju WBK harus disosialisasikan kepada seluruh pegawai agar tujuan utama meraih WBK dan WBBM tercapai, yaitu:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;A. Sosialisasi kepada pegawai melalui:</p>\r\n\r\n<ul>\r\n	<li>Pengarahan saat apel pagi, rapat staf secara periodik,</li>\r\n	<li>Pendampingan/pembinaan oleh pusat dan wilayah terkait program, kegiatan dan inovasi pembangunan ZI menuju WBK/WBBM,</li>\r\n	<li>Pemasangan spanduk dan banner di lingkungan kerja;</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;B.Sosialisasi langsung kepada masyarkat</p>\r\n\r\n<ul>\r\n	<li>Untuk Unit Satuan Kerja Imigrasi, sosialisasi dilakukan kepada pemohon jasa keimigrasian;</li>\r\n	<li>Untuk Unit Satuan Kerja Pemasyarakatan, sosialisasi &nbsp;dilakukan kepada pemohon layanan pemasyarakatan (pengunjung dan WBP);</li>\r\n	<li>Untuk Satuan Kerja Eselon I, sosialisasi dilakukan kepada pemohon layanan.</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;C. Sosialisasi kepada masyarakat melalui:</p>\r\n\r\n<ul>\r\n	<li>Banner/spanduk/himbauan/brosur</li>\r\n	<li>Website</li>\r\n	<li>Media Sosial</li>\r\n	<li>Media elektronik</li>\r\n	<li>Media cetak</li>\r\n	<li>Media TV</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Selain melakukan Sosialisasi Zona Integritas, satuan kerja juga perlu melakukan Pencanangan Zona Integritas yang menunjukkan keseriusan dan kemauan dari satuan kerja untuk melakukan perubahan pada jajarannya menuju WBK/WBBM serta sebagai titik awal dimulainya pembangunan Zona integritas hingga tercapainya WBK/WBBM, meliputi kegiatan:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Eksternal</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Melaksanakan pencanangan Zona Integritas yang disaksikan antara lain oleh Instansi terkait, Kemenpan RB, Forkopimda, Perwakilan Ombudsman, tokoh masyarakat, Tokoh agama serta dipublikasikan.</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Internal</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>melaksanakan Penandatanganan Pakta Integritas antara Kepala Satuan Kerja dengan jajaran struktural dibawahnya;</li>\r\n	<li>penandatangan Pakta Integritas Antara jajaran Struktural dalam satuan kerja dengan Pegawai (komitmen tidak memungut biaya diluar ketentuan, tidak diskriminasi, tidak melaksanakan gratifikasi, memberikan pelayanan terbaik kepada masyarakat)</li>\r\n</ol>',2,'2019-03-11 07:22:11',NULL),
(6,'a. Apakah seluruh kegiatan\r\npembangunan sudah\r\ndilaksanakan sesuai dengan\r\nrencana ?','<p>A. Pelaksanaan kegiatan harus melibatkan seluruh anggota Tim kerja;<br />\r\nb. Membuat laporan hasil pembangunan ZI berdasarkan Rencana Aksi dan Target Prioritas yang sudah ditetapkan oleh Tim kerja;<br />\r\nc. Membuat dokumentasi berupa foto-foto kegiatan.</p>',3,'2019-03-11 07:43:53',NULL),
(7,'b. Terdapat monitoring dan\r\nevaluasi terhadap\r\npembangunan Zona\r\nIntegritas','<p>a. Melaksanakan rapat monitoring dan evaluasi secara bulanan;<br />\r\nb. Membuat laporan monitoring dan evaluasi secara bulanan (berkala).</p>',3,'2019-03-11 07:44:13',NULL),
(8,'c. Apakah hasil Monitoring\r\ndan Evaluasi telah\r\nditindaklanjuti ?','<p>Laporan tindak lanjut hasil monitoring dan evaluasi.</p>',3,'2019-03-11 07:44:26',NULL),
(9,'a. Apakah pimpinan berperan\r\nsebagai role model dalam\r\npelaksanaan Pembangunan\r\nWBK/WBBM ?','<p>Pimpinan (Kepala Satuan Kerja serta pejabat struktural dibawahnya) harus berperan sebagai <em>role model </em>dalam pelaksanaan Pembangunan ZI Menuju WBK/WBBM, dengan:</p>\r\n\r\n<p>a. Keteladanan yang ditunjukan oleh pimpinan akan menjadi panutan bagi bawahannya;</p>\r\n\r\n<p>b. Keteladanan mempunyai pengaruh besar dalam pembentukan pribadi seseorang;</p>\r\n\r\n<p>c. Keteladanan akan sangat cepat merubah pola pikir bawahannya.</p>\r\n\r\n<p>Contoh: Pimpinan Tinggi Madya dan Pratama melakukan absensi kehadiran seperti pegawai lainnya</p>\r\n\r\n<p>&nbsp;</p>',4,'2019-03-12 02:23:06',NULL),
(10,'b. Apakah sudah ditetapkan\r\nagen perubahan ?\r\n','<p>Sesuai dengan Permenpan RB No.27 Tahun 2014 tentang Pedoman Pembangunan Agen Perubahan di Instansi Pemerintah, untuk:</p>\r\n\r\n<p>a. Membuat undangan penetapan agen perubahan;</p>\r\n\r\n<p>b. Melaksanakan rapat penetapan agen perubahan;</p>\r\n\r\n<p>c. Menentukan agen perubahan yang menjadi contoh bagi pegawai lainnya, memiliki kompetensi, memahami tusi, berdedikasi, tidak bermasalah, tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan kode perilaku;</p>\r\n\r\n<p>d. Mengesahkan SK agen perubahan.</p>',4,'2019-03-12 02:27:44',NULL),
(11,'c. Apakah telah dibangun\r\nbudaya kerja dan pola pikir\r\ndi lingkungan organisasi ?\r\n','<p>a. Menerapkan budaya kerja sebagaimana tertuang dalam kode etik dan kode perilaku,</p>\r\n\r\n<p>b. Berikan <em>reward </em>dan <em>punishment</em>,</p>\r\n\r\n<p>c. Membuat laporan kegiatan pembangunan budaya kerja dan pola pikir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Contoh penerapan Budaya Kerja (membangun pola hidup sederhana; berfikir, berkata dan bertindak positif), antara lain:</p>\r\n\r\n<p>&nbsp; &nbsp;a. Penerapan tata nilai kami PASTI setiap hari oleh pimpinan kepada seluruh pegawai melalui kegiatan sosialisasi, bimtek, dan diklat,</p>\r\n\r\n<p>&nbsp; &nbsp;b. Absensi melalui fingerprint pada saat masuk dan pulang kerja</p>',4,'2019-03-12 02:31:02',NULL),
(12,'d. Apakah anggota organisasi\r\nterlibat dalam\r\npembangunan Zona\r\nIntegritas menuju\r\nWBK/WBBM ?','<p>a. Membuat program dan kegiatan ZI kepada seluruh pegawai meliputi:<br />\r\n&nbsp; &nbsp; 1) Penandatanganan pakta integritas seluruh pegawai;<br />\r\n&nbsp; &nbsp; 2) Penerapan tata nilai kami PASTI setiap hari oleh pimpinan kepada seluruh pegawai melalui kegiatan sosialisasi, bimtek, dan diklat;<br />\r\n&nbsp; &nbsp; 3) Apel pagi dan apel sore;<br />\r\n&nbsp; &nbsp; 4) Jumat olahraga;<br />\r\n&nbsp; &nbsp; 5) Kegiatan rohani;<br />\r\n&nbsp; &nbsp; 6) Coffee Morning.<br />\r\nb. Membuat laporan Hasil Kegiatan.</p>',4,'2019-03-12 03:08:02',NULL),
(13,'a. Apakah SOP mengacu pada\r\npeta proses bisnis instansi ?','<p>a. Unit Pusat membuat SOP yang mengacu kepada peta proses bisnis instansi,</p>\r\n\r\n<p>b. Wilayah/UPT membuat SOP Unit yang merupakan turunan dari SOP yang diterbitkan oleh Pusat,</p>\r\n\r\n<p>c. Wilayah/UPT membuat SOP Inovasi.</p>\r\n\r\n<p>Contoh:</p>\r\n\r\n<p>1) Sistem antrian penerbitan paspor sesuai SOP dari pusat hanya mensyaratkan pemberian nomor antrian kepada pemohon. Inovasi yang bisa dilakukan dengan menambahkan pengambilan poto wajah untuk menghindari percaloan. UPT membuat SOP inovasi system antrian berbasis poto wajah.</p>\r\n\r\n<p>2) Sistem kunjungan keluarga narapidana yang mensyaratkan pemeriksaan identitas. UPT menambahkan SOP pemeriksaan identitas melalui perekaman <em>fingerprint </em>pada saat masuk dan keluar.</p>\r\n\r\n<p>&nbsp;</p>',5,'2019-03-12 03:16:12',NULL),
(14,'b. Prosedur operasional tetap\r\n(SOP) telah diterapkan. ','<p>a. Memastikan pelaksanaan Tugas Pegawai sesuai SOP, dengan pemasangan/informasi tentang alur atau prosedur layanan,</p>\r\n\r\n<p>b. Melakukan inovasi terhadap SOP yang berlaku.</p>\r\n\r\n<p>Contoh:</p>\r\n\r\n<p>&nbsp; 1) Memasang informasi tentang alur layanan kunjungan keluarga narapidana/tahanan di Lapas/Rutan,</p>\r\n\r\n<p>&nbsp; 2) Memasang informasi tentang alur layanan penerbitan paspor.</p>\r\n\r\n<p>&nbsp;</p>',5,'2019-03-12 03:24:21',NULL),
(15,'c. Prosedur operasional tetap\r\n(SOP) telah dievaluasi.','<p>a. Melaksanakan Evaluasi SOP,</p>\r\n\r\n<p>b. Membuat laporan hasil evaluasi SOP serta tindak lanjutnya.</p>\r\n\r\n<p>&nbsp;</p>',5,'2019-03-12 03:25:10',NULL),
(16,'a. Apakah sistem pengukuran\r\nkinerja unit sudah\r\nmenggunakan teknologi\r\ninformasi?\r\n','<p>a. Pengukuran kinerja Satker melalui aplikasi e-Performance,<br />\r\nb. Penilaian Kinerja Individu melalui pengisian jurnal harian dengan menggunakan aplikasi Simpeg Terbaru</p>',6,'2019-03-12 03:26:53',NULL),
(17,'b. Apakah operasionalisasi\r\nmanajemen SDM sudah\r\nmenggunakan teknologi\r\ninformasi ?\r\n','<p>Operasionalisasi manajemen SDM sudah menggunakan aplikasi Simpeg Terbaru.</p>',6,'2019-03-12 03:27:42',NULL),
(18,'c. Apakah pemberian\r\npelayanan kepada publik\r\nsudah menggunakan\r\nteknologi informasi ?\r\n','<p>a. Penggunaan Tehnologi lnformasi dalam memberikan Pelayanan kepada masyarakat yang bertujuan untuk lebih memudahkan masyarakat dalam menerima layanan,</p>\r\n\r\n<p>b. Memiliki Website yang memudahkan masyarakat dalam memperoleh lnformasi,</p>\r\n\r\n<p>c. Memiliki aplikasi layanan:</p>\r\n\r\n<p>Contoh: Aplikasi layanan: AHU, KI, Imigrasi, Pemasyarakatan, dll</p>\r\n\r\n<p>d. Memiliki Media Sosial seperti facebook. Twitter, lnstagram, Google+, dll</p>\r\n\r\n<p>&nbsp;</p>',6,'2019-03-12 03:29:41',NULL),
(19,'d. Apakah telah dilakukan\r\nmonitoring dan evaluasi\r\nterhadap pemanfaatan\r\nteknologi informasi dalam\r\npengukuran kinerja unit,\r\noperasionalisasi SDM, dan\r\npemberian layanan kepada\r\npublik?\r\n','<p>a. Melakukan rapat bulanan Monitoring dan Evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik,</p>\r\n\r\n<p>b. Menyusun laporan Monitoring dan Evaluasi.</p>\r\n\r\n<p>&nbsp;</p>',6,'2019-03-12 03:36:53',NULL),
(20,'a. Kebijakan tentang\r\nketerbukaan informasi\r\npublik telah diterapkan.','<p>a. Menyiapkan ketersediaan informasi dengan berbagai infrastruktur dan konten yang memadai, disertai dengan sikap keterbukaan dan mekanisme serta prosedur yang memadai (memiliki Website yang mudah diakses),</p>\r\n\r\n<p>b. Penerapan keterbukaan informasi publik (persyaratan, alur, waktu, dan biaya) melalui Spanduk, Banner, Website dan Media Sosial.</p>\r\n\r\n<p><strong>Contoh Website Lembaga Pemasyarakatan yang berisi konten : </strong></p>\r\n\r\n<p>1) Transparansi alokasi anggaran DIPA melalui Website,</p>\r\n\r\n<p>2) lnformasi pengurusan layanan Pemasyarakatan (remisi, PB, CB, CMB, dll),</p>\r\n\r\n<p>3) lnformasi Kegiatan-Kegiatan di Lembaga Pemasyarakatan.</p>\r\n\r\n<p>&nbsp;</p>',7,'2019-03-12 03:38:15',NULL),
(21,'b. Melakukan monitoring dan\r\nevaluasi pelaksanaan\r\nkebijakan keterbukaan informasi publik','<p>a. Melakukan rapat monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik,</p>\r\n\r\n<p>b. Menyusun laporan Monitoring dan Evaluasi.</p>\r\n\r\n<p>&nbsp;</p>',7,'2019-03-12 03:40:09',NULL),
(22,'a. Apakah kebutuhan pegawai yang disusun oleh unit kerja mengacu kepada peta jabatan dan hasil analisis beban kerja untuk masing-masing jabatan?','<p>a. UPT melaksanakan rapat kebutuhan pegawai berdasarkan peta jabatan dan analisis beban kerja, UPT menyampaikan kebutuhan pegawai tersebut ke Kantor wilayah untuk pengisian kebutuhan pegawai dilingkungannya,</p>\r\n\r\n<p>b. Kanwil melaksanakan rapat kebutuhan pegawai berdasarkan peta jabatan dan analisis beban kerja usulan dari UPT dan kebutuhan kanwil sendiri, selanjutnya Kanwil mengusulkan kebutuhan pegawai ke Biro Kepegawaian, Setjen,</p>\r\n\r\n<p>c. Biro Kepegawaian dan Sekretaris Unit Eselon I melaksanakan rapat kebutuhan pegawai. berdasarkan peta jabatan dan analisis beban kerja berdasarkan usulan dari Kantor Wilayah.</p>',8,'2019-03-14 01:35:00',NULL),
(23,'b. Apakah penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun perjabatan ?','<p>a. Biro Kepegawaian menerbitkan SK penempatan pegawai berdasarkan persetujuan dari MenPAN dan BKN, serta berdasarkan usulan kebutuhan pegawai dari masing-masing Kanwil,</p>\r\n\r\n<p>b. Kanwil menempatkan pegawai hasil rekrutmen berdasarkan formasi dan usulan yang telah disetujui dari MenPAN dan BKN ke UPT,</p>\r\n\r\n<p>c. UPT membuat surat perintah melaksanakan tugas (SPMT) sesuai dengan SK penempatannya.</p>',8,'2019-03-14 01:37:49',NULL),
(24,'c. Apakah telah dilakukan monitoring dan evaluasi terhadap penempatan pegawai rekrutmen untuk memenuhi kebutuhan jabatan dalam organisasi telah memberikan perbaikan terhadap kinerja unit kerja ?',NULL,8,NULL,NULL),
(25,'a. Dalam melakukan pengembangan karier pegawai, apakah telah dilakukan mutasi pegawai antar jabatan ?',NULL,9,NULL,NULL),
(26,'b. Apakah dalam melakukan mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan?',NULL,9,NULL,NULL),
(27,'c. Apakah telah dilakukan monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja?',NULL,9,NULL,NULL),
(28,'a. Apakah Unit Kerja melakukan Training Need Analysis Untuk pengembangan kompetensi?',NULL,10,NULL,NULL),
(29,'b. Dalam menyusun rencana pengembangan kompetensi pegawai, apakah mempertimbangkan hasil pengelolaan kinerja pegawai ?',NULL,10,NULL,NULL),
(30,'c. Persentase kesenjangan kompetensi pegawai yang ada dengan standar kompetensi yang ditetapkan untuk masing-masing jabatan.',NULL,10,NULL,NULL),
(31,'d. Pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya.',NULL,10,NULL,NULL),
(32,'e. Dalam pelaksanaan pengembangan kompetensi, apakah unit kerja melakukan upaya pengembangan kompetensi kepada pegawai (dapat melalui pengikutsertaan pada lembaga pelatihan, in-house training, atau melalui coaching, atau mentoring, dll)?',NULL,10,NULL,NULL),
(33,'f. Apakah telah dilakukan monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja?',NULL,10,NULL,NULL),
(34,'a. Terdapat penetapan kinerja individu yang terkait dengan kinerja organisasi.',NULL,11,NULL,NULL),
(35,'b. Ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level di atasnya.',NULL,11,NULL,NULL),
(36,'c. Pengukuran kinerja individu dilakukan secara periodik.',NULL,11,NULL,NULL),
(37,'d. Hasil penilaian kinerja individu telah dijadikan dasar untuk pemberian reward (pengembangan karir individu, penghargaan, dll).',NULL,11,NULL,NULL),
(38,'Aturan disiplin/kode etik/kode perilaku telah dilaksanakan/diimplementasikan.',NULL,12,NULL,NULL),
(39,'Data informasi kepegawaian unit kerja telah dimutakhirkan secara berkala.',NULL,13,NULL,NULL),
(40,'a. Apakah pimpinan terlibat secara langsung pada saat penyusunan Perencanaan',NULL,14,NULL,NULL),
(41,'b. Apakah pimpinan terlibat secara langsung pada saat penyusunan Penetapan Kinerja',NULL,14,NULL,NULL),
(42,'c. Apakah pimpinan memantau pencapaian kinerja secara berkala',NULL,14,NULL,NULL),
(43,'a. Apakah dokumen perencanaan sudah ada?',NULL,15,NULL,NULL),
(44,'b. Apakah dokumen perencanaan telah berorientasi hasil?',NULL,15,NULL,NULL),
(45,'c. Apakah terdapat Indikator Kinerja Utama (IKU)?',NULL,15,NULL,NULL),
(46,'d. Apakah indikator kinerja telah SMART (Specific, Measurable, Achievable, Realistic, Timely)?',NULL,15,NULL,NULL),
(47,'e. Apakah laporan kinerja telah disusun tepat waktu?',NULL,15,NULL,NULL),
(48,'f. Apakah pelaporan kinerja telah memberikan informasi tentang kinerja?',NULL,15,NULL,NULL),
(49,'g. Apakah terdapat upaya peningkatan kapasitas SDM yang menangani akuntabilitas kinerja?',NULL,15,NULL,NULL),
(50,'h. Pengelolaan akuntabilitas kinerja dilaksanakan oleh SDM yang kompeten.',NULL,15,NULL,NULL),
(51,'a. Telah dilakukan public campaign tentang pengendalian gratifikasi.',NULL,16,NULL,NULL),
(52,'b. Pengendalian gratifikasi telah diimplementasikan.',NULL,16,NULL,NULL),
(53,'a. Telah dibangun lingkungan pengendalian.',NULL,17,NULL,NULL),
(54,'b. Telah dilakukan penilaian risiko atas pelaksanaan kebijakan.',NULL,17,NULL,NULL),
(55,'c. Telah dilakukan kegiatan pengendalian untuk meminimalisir risiko yang telah diidentifikasi.',NULL,17,NULL,NULL),
(56,'d. SPI telah diinformasikan dan dikomunikasikan kepada seluruh pihak terkait.',NULL,17,NULL,NULL),
(57,'a. Kebijakan Pengaduan masyarakat telah diimplementasikan.',NULL,18,NULL,NULL),
(58,'b. Hasil penanganan pengaduan masyarakat telah ditindaklanjuti.',NULL,18,NULL,NULL),
(59,'c. Telah dilakukan monitoring dan evaluasi atas penanganan pengaduan masyarakat.',NULL,18,NULL,NULL),
(60,'d. Hasil evaluasi atas penanganan pengaduan masyarakat telah ditindaklanjuti.',NULL,18,NULL,NULL),
(61,'a. Apakah Whistle Blowing System sudah di-internalisasi ?',NULL,19,NULL,NULL),
(62,'b. Whistle Blowing System telah diterapkan.',NULL,19,NULL,NULL),
(63,'c. Telah dilakukan evaluasi atas penerapan Whistle Blowing System.',NULL,19,NULL,NULL),
(64,'d. Hasil evaluasi atas penerapan Whistle Blowing System telah ditindaklanjuti.',NULL,19,NULL,NULL),
(65,'a. Telah terdapat identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama.',NULL,20,NULL,NULL),
(66,'b. Penanganan Benturan Kepentingan telah disosialisasikan/internalisasi.',NULL,20,NULL,NULL),
(67,'c. Penanganan Benturan Kepentingan telah diimplementasikan.',NULL,20,NULL,NULL),
(68,'d. Telah dilakukan evaluasi atas Penanganan Benturan Kepentingan.',NULL,20,NULL,NULL),
(69,'e. Hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti.',NULL,20,NULL,NULL),
(70,'a. Terdapat kebijakan standar pelayanan.',NULL,21,NULL,NULL),
(71,'b. Standar pelayanan telah dimaklumatkan',NULL,21,NULL,NULL),
(72,'c. Terdapat SOP bagi pelaksanaan standar pelayanan.',NULL,21,NULL,NULL),
(73,'d. Dilakukan reviu dan perbaikan atas standar pelayanan dan SOP.',NULL,21,NULL,NULL),
(74,'a. Telah dilakukan sosialisasi/pelatihan dalam upaya penerapan Budaya Pelayanan Prima.',NULL,22,NULL,NULL),
(75,'b. Informasi tentang pelayanan mudah diakses melalui berbagai media.',NULL,22,NULL,NULL),
(76,'c. Telah terdapat sistem punishment (sanksi)/reward bagi pelaksana layanan serta pemberian kompensasi kepada penerima layanan bila layanan tidak sesuai standar.',NULL,22,NULL,NULL),
(77,'d. Telah terdapat sarana layanan terpadu/terintegrasi.',NULL,22,NULL,NULL),
(78,'e. Terdapat inovasi pelayanan',NULL,22,NULL,NULL),
(79,'a. Dilakukan survei kepuasan masyarakat terhadap pelayanan.',NULL,23,NULL,NULL),
(80,'b. Hasil survei kepuasan masyarakat dapat diakses secara terbuka.',NULL,23,NULL,NULL),
(81,'c. Dilakukan tindak lanjut atas hasil survei kepuasan masyarakat.',NULL,23,NULL,NULL);

/*Table structure for table `data_dukung` */

DROP TABLE IF EXISTS `data_dukung`;

CREATE TABLE `data_dukung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `id_abcsoal` int(11) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `data_dukung` */

insert  into `data_dukung`(`id`,`nama`,`id_abcsoal`,`id_divisi`) values 
(1,'SK Tim Kerja Pembangunan ZI Menuju WBK, WBBM pada Satker ',1,NULL),
(2,'a. Undangan rapat dan daftar hadir pembentukan Tim Kerja,\r\n',2,NULL),
(3,'b. Notulensi rapat penentuan Tim kerja,',2,NULL),
(4,'c. Berita acara dan laporan pelaksanaan seleksi anggota Tim Kerja,',2,NULL),
(5,'d. Riwayat Hidup dan rekam jejak anggota Tim Rekomendasi Irjen/Kakanwil',2,NULL),
(6,'e. Untuk Satuan Kerja, rekomendasi dari Kepala',2,NULL),
(7,'f. Dokumentasi Foto',2,NULL),
(8,'a. Undangan, absensi, foto, dokumen rencana aksi.',3,NULL),
(9,'b. Dokumen Rencana Kerja Pembangunan ZI',3,NULL),
(10,'c. Dokumen Kegiatan Penetapan Rencana Kerja',3,NULL),
(11,'a. Dokumen rencana aksi yang berisi paket prioritas,',4,NULL),
(12,'b. Dokumen laporan pelaksanaan kegiatan penyusunan target prioritas pembangunan ZI (Undangan Rapat, Notulen, Daftar Hadir, Foto,\r\ndokumen rencana aksi. Laporan kegiatan penyusunan rencana aksi ZI yang memuat target prioritas).',4,NULL),
(13,'Capture SIMKIM Pendaftaran Paspor RI',19,2),
(14,'Capture Aplikasi Pendaftaran Paspor Online',19,2),
(15,'Capture layanan kunjungan berbasis TI,',19,1),
(16,'Capture 40 Layanan pada Ditjen AHU',19,3);

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(500) DEFAULT NULL,
  `ori_nama` varchar(255) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_datadukung` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `files` */

insert  into `files`(`id`,`path`,`ori_nama`,`id_transaksi`,`id_datadukung`) values 
(24,'file_upload/Kantor Imigrasi Kelas II Blitar/e. Untuk Satuan Kerja, rekomendasi dari Kepala.jpg','20190214_072004.jpg',3,6),
(25,'file_upload/Kantor Imigrasi Kelas II Blitar/f. Dokumentasi Foto.jpg','20190214_072228.jpg',3,7);

/*Table structure for table `jawaban` */

DROP TABLE IF EXISTS `jawaban`;

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  `id_abcsoal` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `jawaban` */

insert  into `jawaban`(`id`,`nama`,`id_abcsoal`,`nilai`) values 
(1,'a. Telah membentuk Tim Reformasi Birokrasi sesuai kebutuhan organisasi\n',1,NULL),
(2,'b. Telah membentuk Tim Reformasi Birokrasi namun belum sesuai kebutuhan organisasi',1,NULL),
(3,'c. Belum membentuk Tim Reformasi Birokrasi',1,NULL),
(4,'a. Seluruh tugas telah dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(5,'b. Sebagian besar telah dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(6,'c. Sebagian kecil telah dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(7,'d. Seluruh tugas belum dilaksanakan oleh tim reformasi birokrasi sesuai dengan rencana kerja',2,NULL),
(8,'a. Seluruh rencana kerja telah dimonitoring dan di evaluasi, dan hasil evaluasi telah ditindaklanjuti',3,NULL),
(9,'b. Sebagian besar rencana kerja telah dimonitoring dan di evaluasi, dan hasil evaluasi telah ditindaklanjuti',3,NULL),
(10,'c. Sebagian kecil rencana kerja telah dimonitoring dan di evaluasi, dan hasil evaluasi telah ditindaklanjuti',3,NULL),
(11,'d. Seluruh rencana kerja belum dimonitoring dan di evaluasi',3,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `nomorsoal` */

DROP TABLE IF EXISTS `nomorsoal`;

CREATE TABLE `nomorsoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  `id_romawisoal` int(11) DEFAULT NULL,
  `nilai` float DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `nomorsoal` */

insert  into `nomorsoal`(`id`,`nama`,`id_romawisoal`,`nilai`,`keterangan`) values 
(1,'Tim Kerja',1,1,'Tim kerja adalah tim yang dibentuk untuk melaksanakan proses perubahan melalui Program, kegiatan dan Inovasi di 6 Area Perubahan (6 komponen\r\nPengungkit), Tim kerja akan menjadi motor dalam Pembangunan Zona Integritas menuju WBK dan WBBM.\r\n'),
(2,'Dokumen Rencana Pembangunan Zona Integritas',1,1,'Rencana Pembangunan Zona Integritas adalah program, Kegiatan dan Inovasi yang akan dilaksanakan dalam melakukan perubahan yang berisi tentang\r\nTarget, Waktu dan Hasil yang ingin dicapai, disesuaikan dengan kondisi dan karakteristik Satker di wilayah masing-masing.'),
(3,'Pemantauan dan Evaluasi Pembukaan WBK / WBBM',1,2,'Kegiatan pemantauan dan evaluasi dilaksanakan secara kontinyu dalam rangka monitoring capaian pembangunan ZI tiap-tiap komponen'),
(4,'Perubahan Pola Pikir dan Budaya Kerja',1,1,'Perubahan pola piker dan budaya kerja adalah kegiatan yang dilaksanakan dalam rangka merubah pola pikir anggota menuju kearah yang lebih baik serta\r\nmewujudkan budaya kerja di Satker sehingga tercipta lingkungan kerja yang benar-benar bebas korupsi dan berkinerja baik\r\n'),
(5,'Prosedur Operasional Tetap (SOP) Kegiatan Utama ',2,1,NULL),
(6,'E-Office',2,2,NULL),
(7,'Keterbukaan Informasi Publik',2,1,NULL),
(8,'Perencanaan kebutuhan pegawai sesuai dengan kebutuhan organisasi',3,2,NULL),
(9,'Pola Mutasi Internal',3,2,NULL),
(10,'Pengembangan Pegawai Berbasis kompetensi',3,3,NULL),
(11,'Penetapan kinerja Individu',3,4,NULL),
(12,'Pengakuan aturan disiplin/ kode etik/ kode perilaku pegawai',3,3,NULL),
(13,'Sistem informasi Kepegawaian',3,1,NULL),
(14,'Keterlibatan Pimpinan',4,5,NULL),
(15,'Pengelolaan Akuntabilitas Kinerja',4,5,NULL),
(16,'Pengendalian Gratifikasi',5,3,NULL),
(17,'Penerapan SPIP',5,3,NULL),
(18,'Pengaduan Masyarakat',5,3,NULL),
(19,'Whistle-Blowing System',5,3,NULL),
(20,'Penanganan Benturan Kepentingan',5,3,NULL),
(21,'Standar Pelayanan',6,3,NULL),
(22,'Budaya Pelayanan Prima',6,3,NULL),
(23,'Penilaian Kepuasan Terhadap pelayanan',6,4,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `romawisoal` */

DROP TABLE IF EXISTS `romawisoal`;

CREATE TABLE `romawisoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) DEFAULT NULL,
  `keterangan` text,
  `nilai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `romawisoal` */

insert  into `romawisoal`(`id`,`nama`,`keterangan`,`nilai`) values 
(1,'I. Manajemen Perubahan','Bertujuan untuk mengubah secara sistematis dan konsisten mekanisme kerja, pola pikir (mind set), serta budaya kerja (culture set) individu pada\r\nSatuan Kerja yang dibangun, menjadi lebih baik sesuai dengan tujuan dan sasaran pembangunan zona integritas',5),
(2,'II. Penataan Tatalaksana','Penataan Tatalaksanan Bertujuan untuk meningkatkan efisiensi dan efektivitas sistem, proses, dan prosedur kerja yang jelas, efektif, efisien, dan\r\nterukur pada Zona Integritas Menuju WBK/WBBM.',5),
(3,'III. Penataan Sistem Manajemen SDM','Penataan Sistem Manajemen SDM di lingkungan Kementerian Hukum dan HAM bertujuan untuk meningkatkan profesionalisme SDM Kementerian\r\nHukum dan HAM pada Zona Integritas Menuju WBK/WBBM.',15),
(4,'IV. Penguatan Akuntabilitas','Akuntabilitas kinerja bertujuan untuk meningkatkan kapasitas dan akuntabilitas kinerja Kementerian Hukum dan HAM.\r\n',10),
(5,'V. Penguatan Pengawasan','Penguatan pengawasan bertujuan untuk meningkatkan penyelenggaraan organisasi Kementerian Hukum dan HAM yang bersih dan bebas KKN',15),
(6,'VI. Peningkatan Kualitas Pelayanan Publik','Peningkatan kualitas pelayanan publik merupakan suatu upaya untuk meningkatkan kualitas dan inovasi pelayanan publik sesuai kebutuhan dan\r\nharapan masyarakat.',10);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_abcsoal` int(11) DEFAULT NULL,
  `revisi` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`id_abcsoal`,`revisi`,`status`,`created_at`,`updated_at`,`created_by`,`updated_by`) values 
(3,2,NULL,0,'2019-04-07 03:03:21','2019-04-07 03:03:21',2,NULL);

/*Table structure for table `upt` */

DROP TABLE IF EXISTS `upt`;

CREATE TABLE `upt` (
  `id_upt` int(11) NOT NULL AUTO_INCREMENT,
  `nama_upt` varchar(500) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_upt`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

/*Data for the table `upt` */

insert  into `upt`(`id_upt`,`nama_upt`,`id_divisi`,`created_at`,`updated_at`) values 
(1,'Lapas Klas I Surabaya',1,NULL,NULL),
(2,'Lapas Klas I Malang',1,NULL,NULL),
(3,'Lapas Klas I Madiun',1,NULL,NULL),
(4,'Lapas Klas IIA Pamekasan',1,NULL,NULL),
(5,'Lapas Klas IIA Bojonegoro',1,NULL,NULL),
(6,'Lapas Klas IIA Sidoarjo',1,NULL,NULL),
(7,'Lapas Perempuan Klas IIA Malang',1,NULL,NULL),
(8,'Lapas Klas IIA Kediri',1,NULL,NULL),
(9,'Lapas Klas IIA Jember',1,NULL,NULL),
(10,'Lapas Anak Klas IIA Blitar',1,NULL,NULL),
(11,'Lapas Klas IIB Mojokerto',1,NULL,NULL),
(12,'Lapas Klas IIB Jombang',1,NULL,NULL),
(13,'Lapas Klas IIB Lamongan',1,NULL,NULL),
(14,'Lapas Klas IIB Tuban',1,NULL,NULL),
(15,'Lapas Klas IIB Ngawi',1,NULL,NULL),
(16,'Lapas Klas IIB Blitar',1,NULL,NULL),
(17,'Lapas Klas IIb Tulungagung',1,NULL,NULL),
(18,'Lapas Klas IIB Probolinggo',1,NULL,NULL),
(19,'Lapas Klas IIB Pasuruan',1,NULL,NULL),
(20,'Lapas Klas IIB Lumajang',1,NULL,NULL),
(21,'Lapas Klas IIB Bondowoso',1,NULL,NULL),
(22,'Lapas Klas IIB Banyuwangi',1,NULL,NULL),
(23,'Lapas Narkotika Madiun',1,NULL,NULL),
(24,'Lapas Narkotika Pamekasan',1,NULL,NULL),
(25,'Rutan Kelas I Surabaya ',1,NULL,NULL),
(26,'Rutan Kelas IIB Ponorogo',1,NULL,NULL),
(27,'Rutan Kelas IIB Pacitan',1,NULL,NULL),
(28,'Rutan Kelas IIB Magetan',1,NULL,NULL),
(29,'Rutan Kelas IIB Nganjuk',1,NULL,NULL),
(30,'Rutan Kelas IIB Kraksaan',1,NULL,NULL),
(31,'Rutan Kelas IIB Bangil',1,NULL,NULL),
(32,'Rutan Kelas IIB Situbondo',1,NULL,NULL),
(33,'Rutan Kelas IIB Trenggalek',1,NULL,NULL),
(34,'Rutan Kelas IIB Bangkalan',1,NULL,NULL),
(35,'Rutan Kelas IIB Sampang',1,NULL,NULL),
(36,'Rutan Kelas IIB Sumenep',1,NULL,NULL),
(37,'Rutan Kelas IIB Gresik',1,NULL,NULL),
(38,'Rutan Perempuan Surabaya',1,NULL,NULL),
(39,'Cab Rutan Sumenep Arjasa',1,NULL,NULL),
(40,'Rupbasan Surabaya',1,NULL,NULL),
(41,'Rupbasan Blitar',1,NULL,NULL),
(42,'Rupbasan Jombang',1,NULL,NULL),
(43,'Rupbasan Mojokerto',1,NULL,NULL),
(44,'Rupbasan Pasuruan',1,NULL,NULL),
(45,'Rupbasan Probolinggo',1,NULL,NULL),
(46,'Kantor Imigrasi Kelas I Khusus Surabaya',2,NULL,NULL),
(47,'Kantor Imigrasi Kelas I TJ Perak',2,NULL,NULL),
(48,'Kantor Imigrasi Kelas I Malang',2,NULL,NULL),
(49,'Kantor Imigrasi Kelas II Jember',2,NULL,NULL),
(50,'Kantor Imigrasi Kelas II Blitar',2,NULL,NULL),
(51,'Kantor Imigrasi Kelas II Madiun',2,NULL,NULL),
(52,'Kantor Imigrasi Kelas III Kediri',2,NULL,NULL),
(53,'Kantor Imigrasi Kelas III Pamekasan',2,NULL,NULL),
(54,'Kantor Imigrasi Kelas III Ponorogo',2,NULL,NULL),
(55,'Rudenim Pasuruan',2,NULL,NULL),
(56,'Bapas Surabaya',1,NULL,NULL),
(57,'Bapas Pamekasan',1,NULL,NULL),
(58,'Bapas Malang',1,NULL,NULL),
(59,'Bapas Bojonegoro ',1,NULL,NULL),
(60,'Bapas Kediri',1,NULL,NULL),
(61,'Bapas Madiun',1,NULL,NULL),
(62,'Bapas Jember',1,NULL,NULL),
(63,'Balai Harta Peninggalan',3,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_upt` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`id_upt`,`id_role`) values 
(1,'faiqfirdausy','faiqfirdausy16@gmail.com',NULL,'$2y$10$sl7k1v3HBXMDKHdMdKJGBuOLkkld4HytNmnOQDUCReg25mcoFu0gu','MAYpmldMqWVJ0Tdte9FocZnIcHDY3Md1Ly1KM2xkQTgxg1QMwjjm91aCCFdQ','2019-02-11 12:31:52','2019-02-12 14:00:46',NULL,NULL),
(2,'upt','faiqfirdausy17@gmail.com',NULL,'$2y$10$mfp1Vd5q4tseGFV9/0vs/.zDo6aN9POj6q4XO5NEXmRAuaYV8PbZ2','40ELpoWb4O2viYDWQBq2jbJjDgPqnoPSOJhjiTNZmLtxed0qO3aCKAKvFLpF','2019-02-12 14:08:12','2019-02-18 06:06:04',50,1),
(3,'admin','admin@gmail.com',NULL,'$2y$10$KLI/McEgNHG9uPxxZSTCsObTYSzX7OPTCLgNkT77m5zpsycXcHaVm','uNYWksomL8L1ggYo3Eu55o5hgFqZnPQFObuc0EOGLrGiuQ9PqtfPc6r483b8','2019-02-18 06:07:12','2019-02-18 06:07:12',65,0),
(4,'faiq2','faiq3@gmail.com',NULL,'$2y$10$mfp1Vd5q4tseGFV9/0vs/.zDo6aN9POj6q4XO5NEXmRAuaYV8PbZ2',NULL,'2019-07-08 08:42:31','2019-07-08 08:42:31',62,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;