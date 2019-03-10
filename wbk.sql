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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `abcsoal` */

insert  into `abcsoal`(`id`,`nama`,`petunjuk_teknis`,`id_nomorsoal`) values 
(1,'a. Apakah unit kerja telah membentuk tim kerja WBK\r\n/ WBBM untuk melakukan\r\npembangunan Zona\r\nIntegritas ?','<p>a.&nbsp;Membuat undangan pembentukan Tim kerja WBK / WBBM,</p>\r\n\r\n<p>b.&nbsp;Melaksanakan rapat pembentukan Tim kerja WBK / WBBM,</p>\r\n\r\n<p>c.&nbsp;Penentuan anggota Tim harus memiliki kompetensi, memahami tusi, berdedikasi, tidak bermasalah, tidak pernah melakukan tindak pidana serta pelanggaran kode etik dan kode perilaku,</p>\r\n\r\n<p>d.&nbsp;Pengesahan Tim kerja WBK / WBBM.</p>',1),
(2,'b. Apakah penentuan anggota\r\nTim kerja WBK / WBBM\r\nselain pimpinan dipilih\r\nmelalui\r\nprosedur/mekanisme yang\r\njelas ?\r\n','a. Pimpinan, pejabat, dan pihak terkait melakukan\r\nseleksi untuk membentuk Tim kerja,\r\nb. Seleksi dilakukan dengan mempertimbangkan:\r\n1) Kompetensi,\r\n2) Memahami tusi,\r\n3) Berdedikasi,\r\n4) Tidak bermasalah,\r\n5) Tidak pernah melakukan tindak pidana serta\r\npelanggaran kode etik dan disiplin.\r\nc. Rapat penentuan Tim kerja,\r\nd. Penetapan Tim kerja.\r\n',1),
(4,'a. Apakah ada dokumen rencana kerja pembangunan Zona Integritas menuju WBK/WBBM ',NULL,2),
(5,'b. Apakah dalam dokumen pembangunan terdapat target-target prioritas yang relevan dengan tujuan pembangunan WBK/WBBM?',NULL,2),
(6,'c. Apakah terdapat\r\nmekanisme atau media\r\nuntuk mensosialisasikan\r\npembangunan\r\nWBK/WBBM?\r\n',NULL,2),
(7,'a. Apakah seluruh kegiatan\r\npembangunan sudah\r\ndilaksanakan sesuai dengan\r\nrencana ?',NULL,3),
(8,'b. Terdapat monitoring dan\r\nevaluasi terhadap\r\npembangunan Zona\r\nIntegritas',NULL,3),
(9,'c. Apakah hasil Monitoring\r\ndan Evaluasi telah\r\nditindaklanjuti ?',NULL,3),
(10,'a. Apakah pimpinan berperan\r\nsebagai role model dalam\r\npelaksanaan Pembangunan\r\nWBK/WBBM ?',NULL,4),
(11,'b. Apakah sudah ditetapkan\r\nagen perubahan ?\r\n',NULL,4),
(12,'c. Apakah telah dibangun\r\nbudaya kerja dan pola pikir\r\ndi lingkungan organisasi ?\r\n',NULL,4),
(13,'d. Apakah anggota organisasi\r\nterlibat dalam\r\npembangunan Zona\r\nIntegritas menuju\r\nWBK/WBBM ?',NULL,4),
(14,'a. Apakah SOP mengacu pada\r\npeta proses bisnis instansi ?',NULL,5),
(15,'b. Prosedur operasional tetap\r\n(SOP) telah diterapkan. ',NULL,5),
(16,'c. Prosedur operasional tetap\r\n(SOP) telah dievaluasi.',NULL,5),
(17,'a. Apakah sistem pengukuran\r\nkinerja unit sudah\r\nmenggunakan teknologi\r\ninformasi?\r\n',NULL,6),
(18,'b. Apakah operasionalisasi\r\nmanajemen SDM sudah\r\nmenggunakan teknologi\r\ninformasi ?\r\n',NULL,6),
(19,'c. Apakah pemberian\r\npelayanan kepada publik\r\nsudah menggunakan\r\nteknologi informasi ?\r\n',NULL,6),
(20,'d. Apakah telah dilakukan\r\nmonitoring dan evaluasi\r\nterhadap pemanfaatan\r\nteknologi informasi dalam\r\npengukuran kinerja unit,\r\noperasionalisasi SDM, dan\r\npemberian layanan kepada\r\npublik?\r\n',NULL,6),
(21,'a. Kebijakan tentang\r\nketerbukaan informasi\r\npublik telah diterapkan.',NULL,7),
(22,'b. Melakukan monitoring dan\r\nevaluasi pelaksanaan\r\nkebijakan keterbukaan informasi publik',NULL,7),
(23,'sdasdsdfsdfsdf',NULL,23);

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `files` */

insert  into `files`(`id`,`path`,`ori_nama`,`id_transaksi`,`id_datadukung`) values 
(33,'file_upload/c. Berita acara dan laporan pelaksanaan seleksi anggota Tim Kerja,.png','opera-512.png',45,4),
(34,'file_upload/e. Untuk Satuan Kerja, rekomendasi dari Kepala.png','firefox_png.png',45,6);

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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`id_abcsoal`,`revisi`,`status`,`created_at`,`updated_at`,`created_by`,`updated_by`) values 
(45,2,NULL,0,'2019-03-10 10:02:17','2019-03-10 10:02:37',2,2);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`id_upt`,`id_role`) values 
(1,'faiqfirdausy','faiqfirdausy16@gmail.com',NULL,'$2y$10$sl7k1v3HBXMDKHdMdKJGBuOLkkld4HytNmnOQDUCReg25mcoFu0gu','MAYpmldMqWVJ0Tdte9FocZnIcHDY3Md1Ly1KM2xkQTgxg1QMwjjm91aCCFdQ','2019-02-11 12:31:52','2019-02-12 14:00:46',NULL,NULL),
(2,'upt','faiqfirdausy17@gmail.com',NULL,'$2y$10$ugVyCrBy6uWh29LLAarZvOXcbO8EzUXaA9ih6vTVz1BZwsr4/t5Zq','40ELpoWb4O2viYDWQBq2jbJjDgPqnoPSOJhjiTNZmLtxed0qO3aCKAKvFLpF','2019-02-12 14:08:12','2019-02-18 06:06:04',50,1),
(3,'admin','admin@gmail.com',NULL,'$2y$10$KLI/McEgNHG9uPxxZSTCsObTYSzX7OPTCLgNkT77m5zpsycXcHaVm','uNYWksomL8L1ggYo3Eu55o5hgFqZnPQFObuc0EOGLrGiuQ9PqtfPc6r483b8','2019-02-18 06:07:12','2019-02-18 06:07:12',65,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
