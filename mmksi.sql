-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2024 at 03:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `aksesoris`
--

INSERT INTO `aksesoris` (`id`, `nama`, `harga`, `gambar`, `id_kendaraan`, `created_by`, `updated_by`) VALUES
(2, 'Dolorem alala', 'Voluptates blanditii', 'images/aksesoris_kendaraan/1716778904new-mmc.png', 1, NULL, NULL),
(3, 'Engine Hood Emblem', 'Rp 500.000', 'images/aksesoris_kendaraan/171703526629.jpg', 3, NULL, 'admin'),
(4, 'Luggage Tray', 'Rp 399.999', 'images/aksesoris_kendaraan/1717035454luggage.jpg', 3, NULL, NULL),
(5, 'Mud Guard', 'Rp 800.000', 'images/aksesoris_kendaraan/1717035515mud guard.webp', 3, NULL, NULL),
(6, 'Tailgate Spoiler', 'Rp 2.000.000', 'images/aksesoris_kendaraan/1717035583tailgate.jpg', 3, NULL, NULL),
(7, 'Side Visor', 'Rp 400.000', 'images/aksesoris_kendaraan/1717035642Black-Car-Exterior-Accessories-Window-Sun-Visor-for-Toyota-Camry-70-2017.webp', 3, NULL, NULL),
(8, 'Lorem Ipsum', 'Rp 20.000', 'images/aksesoris_kendaraan/171703566729.jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris_aftersales`
--

CREATE TABLE `aksesoris_aftersales` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `aksesoris_aftersales`
--

INSERT INTO `aksesoris_aftersales` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/aksesoris_aftersales/bg2.png', 'halah', '1', '<main>\r\n<section class=\"banner mg-t-90-sm mg-t-85-md\">\r\n<div class=\"banner__wrapper\">\r\n<div class=\"banner__background lazy entered loaded\" data-bg=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-aksesoris-06012022.webp\" data-bg-hidpi=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-aksesoris-06012022@2x.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-aksesoris-06012022@2x.webp&quot;);\">&nbsp;</div>\r\n<!--  .banner__background -->\r\n\r\n<div class=\"banner__background-responsive lazy entered loaded\" data-bg=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-aksesoris-responsive-06012022.webp\" data-bg-hidpi=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-aksesoris-responsive-06012022@2x.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-aksesoris-responsive-06012022@2x.webp&quot;);\">&nbsp;</div>\r\n<!--  .banner__background-responsive -->\r\n\r\n<div class=\"banner__content\">\r\n<h1 class=\"title-primary_large c-white mg-b-80-sm mg-b-20-md\">AKSESORIS</h1>\r\n\r\n<p class=\"c-white\">Berani tampil beda dan jadi pusat perhatian di setiap perjalanan Anda. Ekspresikan gaya Anda dengan aksesoris resmi Mitsubishi Motors.</p>\r\n</div>\r\n<a class=\"banner-scroll\" href=\"javascript:;\" id=\"banner-scroll\"><i class=\"material-icons\">keyboard_arrow_down</i></a></div>\r\n</section>\r\n\r\n<section class=\"section pd-t-10-sm pd-t-60-md\" id=\"commitment-section\">\r\n<div class=\"container\">\r\n<div class=\"pd-x-30-md pd-x-10-sm\">\r\n<div class=\"row pd-y-40-sm\">\r\n<div class=\"ev-sm-12\">\r\n<h2 class=\"title-primary_large text-center\">KOMITMEN KAMI</h2>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"pd-x-30-md pd-x-10-sm\">\r\n<div class=\"row\">\r\n<div class=\"ev-sm-12\">\r\n<p class=\"fs-16-sm text-center\">&nbsp;</p>\r\n\r\n<p><span data-sheets-userformat=\"{&quot;2&quot;:15307,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:65535},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:2101837}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:2}]},&quot;9&quot;:0,&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:2101837},&quot;15&quot;:&quot;Roboto&quot;,&quot;16&quot;:10}\" data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Aksesoris resmi Mitsubishi Motors dirancang dan dikembangkan untuk inntegrasi yang lebih mulus. Semua bagian diuji secara menyeluruh dari segi keamanan, fungsi, dan daya tahan. Kami dengan bangga merekomendasikan ke setiap negara dan wilayah sesuai dengan peraturan yang berlaku. Kami berharap dapat terus menyediakan aksesoris untuk memenuhi kebutuhan pelanggan di seluruh dunia, memanfaatkan kekuatan situs pengembangan dan pengadaan global kami serta tradisi \\&quot;monozukuri\\&quot; Jepang.&quot;}\">Aksesoris resmi Mitsubishi Motors dirancang dan dikembangkan untuk inntegrasi yang lebih mulus. Semua bagian diuji secara menyeluruh dari segi keamanan, fungsi, dan daya tahan. Kami dengan bangga merekomendasikan ke setiap negara dan wilayah sesuai dengan peraturan yang berlaku. Kami berharap dapat terus menyediakan aksesoris untuk memenuhi kebutuhan pelanggan di seluruh dunia, memanfaatkan kekuatan situs pengembangan dan pengadaan global kami serta tradisi &quot;monozukuri&quot; Jepang.</span>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"section\">\r\n<div class=\"container\">\r\n<div class=\"pd-x-30-md pd-x-10-sm\">\r\n<div class=\"row pd-y-40-sm\">\r\n<div class=\"ev-sm-12\">\r\n<h2 class=\"title-primary_large text-center\">SEMANGAT KAMI</h2>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"pd-x-30-md pd-x-10-sm\">\r\n<div class=\"row pd-y-10-sm\">\r\n<div class=\"ev-sm-12 ev-md-3 pd-x-0-sm\">\r\n<div class=\"card__accessories\"><img alt=\"Design\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000416-1665393522-bg-1pngpng.webp\" />\r\n<div class=\"c-white card__accessories-content\" data-fancybox=\"\" data-src=\"#spirit1\">\r\n<h3 class=\"ev-uppercase fs-28-sm fw-bold\">DESIGN</h3>\r\n\r\n<p class=\"fs-12-sm\">Salah satu kelebihan terbesar dari genuine accessories adalah bahwa aksesori tersebut dirancang dan dikembangkan pada saat yang sama dengan kendaraan itu sendiri. Hal ini menciptakan kesan natural yang serasi dengan kendaraan.</p>\r\n<span class=\"ev-uppercase fw-bold fs-14-sm card__accessories-content_more\">Selengkapnya</span></div>\r\n\r\n<div class=\"popup__full popup__full-custom\" id=\"spirit1\" style=\"display: none;\">\r\n<div class=\"popup__full-wrapper\">\r\n<div class=\"popup__full-content\">\r\n<h3 class=\"title-primary_medium c-dark\">DESIGN</h3>\r\n\r\n<div class=\"pd-t-30-sm pd-b-20-sm\">\r\n<p class=\"fs-16-sm\" data-pm-slice=\"1 1 []\">Desain harmonis yang terasa menyatu dengan kendaraan sejak awal merupakan keunggulan utama aksesoris asli. Kami percaya setiap aksesori yang kami tawarkan harus menyatu dengan desain kendaraan saat dipilih sebagai opsi, seperti yang mereka lakukan pada gambar katalog atau ruang pamer mobil dengan aksesori asli kami terpasang.</p>\r\n\r\n<p><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001466.png\" /></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"ev-sm-12 ev-md-3 pd-x-0-sm\">\r\n<div class=\"card__accessories\"><img alt=\"Design\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000454-1665391421-1665374330-spirit-safetyjpgjpg.webp\" />\r\n<div class=\"c-white card__accessories-content\" data-fancybox=\"\" data-src=\"#spirit2\">\r\n<h3 class=\"ev-uppercase fs-28-sm fw-bold\">SAFETY</h3>\r\n\r\n<p class=\"fs-12-sm\">Genuine accessories kami memenuhi semua persyaratan keselamatan, melewati berbagai tes evaluatif, dan dikembangkan dengan mempertimbangkan fungsi sensorik kendaraan untuk bekerja dengan peralatan keselamatan canggih.</p>\r\n<span class=\"ev-uppercase fw-bold fs-14-sm card__accessories-content_more\">Selengkapnya</span></div>\r\n\r\n<div class=\"popup__full popup__full-custom\" id=\"spirit2\" style=\"display: none;\">\r\n<div class=\"popup__full-wrapper\">\r\n<div class=\"popup__full-content\">\r\n<h3 class=\"title-primary_medium c-dark\">SAFETY</h3>\r\n\r\n<div class=\"pd-t-30-sm pd-b-20-sm\">\r\n<p class=\"fs-16-sm\">Genuine accessories kami memenuhi semua persyaratan keselamatan, melewati berbagai tes evaluatif, dan dikembangkan dengan mempertimbangkan fungsi sensorik kendaraan untuk bekerja dengan peralatan keselamatan canggih. Keselamatan adalah salah satu bidang tanpa kompromi. Kami melakukan berbagai pengujian untuk memastikan bahwa setiap suku cadang yang kami jual memenuhi standar keselamatan tinggi kami dan memungkinkan penyesuaian fungsi sensor keselamatan kendaraan itu sendiri. Dalam kasus bilah pelindung depan Triton, uji tabrakan pasca pemasangan dilakukan untuk memastikan tidak ada gangguan pada fungsi airbag atau peralatan lainnya.</p>\r\n\r\n<p><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001507.jpg\" /></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"ev-sm-12 ev-md-3 pd-x-0-sm\">\r\n<div class=\"card__accessories\"><img alt=\"Design\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000480-1665391515-1665374652-spirit-durabilityjpgjpg.webp\" />\r\n<div class=\"c-white card__accessories-content\" data-fancybox=\"\" data-src=\"#spirit3\">\r\n<h3 class=\"ev-uppercase fs-28-sm fw-bold\">DURABILITY</h3>\r\n\r\n<p class=\"fs-12-sm\">Daya tahan berhubungan langsung dengan keselamatan. Jika ada masalah yang muncul selama pengujian, kami menganalisis penyebabnya secara rinci dan menggunakan hasilnya untuk memperbaiki aksesori itu sendiri serta berkoordinasi dengan pengembangan kendaraan untuk memberikan umpan balik.</p>\r\n<span class=\"ev-uppercase fw-bold fs-14-sm card__accessories-content_more\">Selengkapnya</span></div>\r\n\r\n<div class=\"popup__full popup__full-custom\" id=\"spirit3\" style=\"display: none;\">\r\n<div class=\"popup__full-wrapper\">\r\n<div class=\"popup__full-content\">\r\n<h3 class=\"title-primary_medium c-dark\">DURABILITY</h3>\r\n\r\n<div class=\"pd-t-30-sm pd-b-20-sm\">\r\n<p class=\"fs-16-sm\">Daya tahan berhubungan langsung dengan keselamatan. Jika ada masalah yang muncul selama pengujian, kami menganalisis penyebabnya secara rinci dan menggunakan hasilnya untuk memperbaiki aksesori itu sendiri serta berkoordinasi dengan pengembangan kendaraan untuk memberikan umpan balik. Uji daya tahan dilakukan dengan mengemudi di jalan lintas alam, jalur cepat sirkuit, jalan terendam, dan kondisi lain dengan genuine accessories yang terpasang. Aksesori juga diuji di bawah kondisi lingkungan yang berbeda untuk mengukur ketahanan panas dan ketahanan terhadap cuaca dan faktor lainnya. Karena daya tahan terhubung dengan keselamatan pelanggan, kami berkolaborasi dengan pengembangan mobil untuk mendapatkan feedback dari pengujian.</p>\r\n\r\n<p><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001542.jpg\" /></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"ev-sm-12 ev-md-3 pd-x-0-sm\">\r\n<div class=\"card__accessories\"><img alt=\"Design\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000512-1665391596-1665374576-spirit-functionalityjpgjpg.webp\" />\r\n<div class=\"c-white card__accessories-content\" data-fancybox=\"\" data-src=\"#spirit4\">\r\n<h3 class=\"ev-uppercase fs-28-sm fw-bold\">FUNCTIONALITY</h3>\r\n\r\n<p class=\"fs-12-sm\">Kami bertujuan untuk merancang dan mengembangkan aksesori yang meningkatkan fungsionalitas kendaraan dan memenuhi persyaratan unik setiap wilayah. Kami juga mempertimbangkan bagaimana aksesori akan digunakan dalam kombinasi dengan fitur keselamatan tingkat lanjut.</p>\r\n<span class=\"ev-uppercase fw-bold fs-14-sm card__accessories-content_more\">Selengkapnya</span></div>\r\n\r\n<div class=\"popup__full popup__full-custom\" id=\"spirit4\" style=\"display: none;\">\r\n<div class=\"popup__full-wrapper\">\r\n<div class=\"popup__full-content\">\r\n<h3 class=\"title-primary_medium c-dark\">FUNCTIONALITY</h3>\r\n\r\n<div class=\"pd-t-30-sm pd-b-20-sm\">\r\n<p class=\"fs-16-sm\">Kami bertujuan untuk merancang dan mengembangkan aksesori yang meningkatkan fungsionalitas kendaraan dan memenuhi persyaratan unik setiap wilayah. Kami juga mempertimbangkan bagaimana aksesori akan digunakan dalam kombinasi dengan fitur keselamatan tingkat lanjut. Kami merancang aksesori untuk meningkatkan fungsionalitas kendaraan. Untuk beberapa bagian aero parts, kami melakukan pengujian terowongan angin dengan aksesori yang dipasang pada kendaraan pada tahap finalisasi desain kendaraan. Kemampuan untuk mengkonfirmasi fungsionalitas sebelum peluncuran kendaraan baru ini merupakan kekuatan dari aksesoris asli yang membedakannya dari aksesoris aftermarket.</p>\r\n\r\n<p><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001588.jpg\" /></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"section\">\r\n<div class=\"container\">\r\n<div class=\"pd-x-30-md pd-x-10-sm pd-b-40-sm\">\r\n<div class=\"row pd-y-40-sm\">\r\n<div class=\"ev-sm-12\">\r\n<h2 class=\"title-primary_large text-center\">FILOSOFI PRODUK</h2>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row-flex\">\r\n<div class=\"ev-flex-sm-12 ev-flex-md-6 pd-x-0-sm overflow-hidden\"><img alt=\"\" src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/atsunori-mitsuda.webp\" /></div>\r\n\r\n<div class=\"ev-flex-sm-12 ev-flex-md-6 pd-x-20-sm pd-y-40-sm pd-y-0-md pd-x-0-md c-black pd-l-50-lg pd-r-40-lg pd-t-100-lg pd-l-35-md pd-r-25-md pd-t-50-md\">\r\n<h3 class=\"ev-uppercase fs-28-sm fw-bold mg-b-10-sm\">ATSUNORI MITSUDA</h3>\r\n\r\n<h4 class=\"fs-18-sm fw-bold mg-b-10-sm\">Manager, Product Design Department Design Division</h4>\r\n\r\n<p class=\"mg-b-0-sm\">Integrasi dengan kendaraan adalah kunci utama kami dalam mendesain aksesoris.</p>\r\n\r\n<div class=\"pd-t-10-sm\"><a class=\"ev-uppercase c-black fw-bold title--underline-black\" data-fancybox=\"\" data-src=\"#filosofi1\" href=\"#\">Selengkapnya</a></div>\r\n</div>\r\n\r\n<div class=\"popup__full popup__full-custom\" id=\"filosofi1\" style=\"display: none;\">\r\n<div class=\"popup__full-wrapper\">\r\n<div class=\"popup__full-content\">\r\n<h3 class=\"title-primary_medium fs-32-sm c-dark\">INTEGRASI DENGAN KENDARAAN ADALAH KUNCI UTAMA KAMI DALAM MENDESAIN AKSESORIS</h3>\r\n<img alt=\"\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000247-1665390887-screen-shot-2022-10-09-at-232711pngpng.webp\" />\r\n<h4 class=\"title-primary_small--alt c-dark fw-bold ev-uppercase\">ATSUNORI MITSUDA</h4>\r\n<span class=\"c-dark fw-medium fs-18-sm\">Manager, Product Design Department Design Division </span>\r\n\r\n<p class=\"fs-20-sm\"><span class=\"c-dark fw-medium fs-18-sm\"><strong>INTEGRASI DENGAN KENDARAAN ADALAH KUNCI UTAMA KAMI DALAM MENDESAIN AKSESORIS. PENDEKATAN KAMI MENGIKUTI FILOSOFI DESAIN &ldquo;ROBUST &amp; INGENIOUS&rdquo; MITSUBISHI, YANG MEMUNGKINKAN KAMI MENGHADIRKAN AKSESORI PABRIKAN ASLI DALAM GAYA KHAS MITSUBISHI.</strong></span></p>\r\n\r\n<p class=\"fs-20-sm\"><span class=\"c-dark fw-medium fs-18-sm\"><strong>PENDEKATAN TERPADU DENGAN TIM DESAIN KENDARAAN</strong></span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Kami bertujuan untuk menciptakan desain aksesori dengan karakteristik identitas Mitsubishi, lebih dari sekadar menciptakan rasa kesatuan dengan kendaraan untuk benar-benar meningkatkan daya tariknya. Hal ini sesuai dengan filosofi &ldquo;Robust &amp; Ingenious&rdquo; dengan prinsip desain yang sederhana, kuat dan inovatif.</span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Beberapa produsen mobil menawarkan aksesoris yang menunjukkan tampilan berbeda dari desain asli kesan asli kendaraan. Di negara-negara Asia khususnya, semua jenis aksesori dijual di pasar purna jual, sehingga dalam beberapa kasus sulit untuk mengetahui desain asli mobil tersebut. Di Mitsubishi Motor, kami menyediakan suku cadang asli yang dibuat dengan mempertimbangkan kendaraan asli. Departemen kami berdekatan dengan tim desain kendaraan, sehingga kami dapat menyentuh basis satu sama lain dan menyesuaikan desain kami agar sesuai dengan sempurna.</span></p>\r\n\r\n<p><span class=\"c-dark fw-medium fs-18-sm\"><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001171.png\" /></span></p>\r\n\r\n<p class=\"fs-20-sm\"><span class=\"c-dark fw-medium fs-18-sm\"><strong>AKSESORI TRITON BARU YANG DIPASANG SECARA GLOBAL</strong></span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Salah satu aksesoris yang kami banggakan dari New Triton adalah under garnish berlapis krom, tambahan pada bumper garnish yang menekankan &ldquo;kekokohan&rdquo;. Aksesori berlapis krom selalu populer di luar negeri, tetapi kami berupaya sungguh-sungguh agar New Triton terlihat lebih halus, membayangkan pelanggan kami di seluruh dunia mengendarai kendaraan dengan aksesori pada momen-momen penting. Kami mengoptimalkan permintaan pelanggan akan aksesori untuk menginspirasi perasaan kualitas yang lebih tinggi terhadap mobil. Hal ini kami wujudkan melalui kerjasama dengan divisi desain bodi mobil sejak awal. Sekilas mungkin tidak terlihat jelas, tetapi sedikit lekukan dalam desain diperhitungkan dengan cermat untuk mencerminkan pemandangan di sekitarnya dengan cara yang ideal. Jika sudutnya sedikit berbeda, hiasan bawah hanya akan memantulkan jalan, membuatnya tampak hitam pekat, jadi kami menggunakan grafik dan model komputer untuk memverifikasi dan menyempurnakan desain. Kami juga membayangkan kondisi di mana pelanggan akan mengendarai mobil, mengingat bagaimana sinar matahari yang kuat di Asia Tenggara atau Australia dapat dipantulkan bersama dengan langit biru dan permukaan jalan berwarna coklat kemerahan.</span></p>\r\n\r\n<p><span class=\"c-dark fw-medium fs-18-sm\"><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001241.png\" /></span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Suku cadang opsional dapat memenuhi kebutuhan pelanggan yang menginginkan mobil yang individual seperti apa adanya&mdash;yang menonjol di antara mobil lain di jalan. Jika suku cadang kami berhasil meningkatkan pesona Triton dan memicu rasa ingin tahu dan semangat petualangan pelanggan kami, itu akan sangat bermanfaat bagi kami sebagai desainer.</span></p>\r\n<span class=\"c-dark fw-medium fs-18-sm\"> </span></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row-flex\">\r\n<div class=\"ev-flex-sm-12 ev-flex-md-6 pd-x-0-sm order-md-2 overflow-hidden\"><img alt=\"\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000375-1665391057-1665376400-screen-shot-2022-10-10-at-113307pngpngpng.webp\" /></div>\r\n\r\n<div class=\"ev-flex-sm-12 ev-flex-md-6 pd-x-20-sm pd-y-40-sm pd-y-0-md pd-x-0-md c-black pd-l-50-lg pd-r-40-lg pd-t-100-lg pd-l-35-md pd-r-25-md pd-t-50-md\">\r\n<h3 class=\"ev-uppercase fs-28-sm fw-bold mg-b-10-sm\">HIROSHI AOYAMA</h3>\r\n\r\n<h4 class=\"fs-18-sm fw-bold mg-b-10-sm\">Manager, Accessory Planning and Development Department Global After Sales Division</h4>\r\n\r\n<p class=\"mg-b-0-sm\">Kami mengoptimalkan permintaan pelanggan akan aksesori untuk menambah kesan kualitas yang lebih tinggi pada mobil.</p>\r\n\r\n<div class=\"pd-t-10-sm\"><a class=\"ev-uppercase c-black fw-bold title--underline-black\" data-fancybox=\"\" data-src=\"#filosofi2\" href=\"#\">Selengkapnya</a></div>\r\n</div>\r\n\r\n<div class=\"popup__full popup__full-custom\" id=\"filosofi2\" style=\"display: none;\">\r\n<div class=\"popup__full-wrapper\">\r\n<div class=\"popup__full-content\">\r\n<h3 class=\"title-primary_medium fs-32-sm c-dark\">KAMI MENGOPTIMALKAN PERMINTAAN PELANGGAN AKAN AKSESORI UNTUK MENAMBAH KESAN KUALITAS YANG LEBIH TINGGI PADA MOBIL.</h3>\r\n<img alt=\"\" src=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000375-1665391057-1665376400-screen-shot-2022-10-10-at-113307pngpngpng.webp\" />\r\n<h4 class=\"title-primary_small--alt c-dark fw-bold ev-uppercase\">hiroshi aoyama</h4>\r\n<span class=\"c-dark fw-medium fs-18-sm\">Manager, Accessory Planning and Development Department Global After Sales Division </span>\r\n\r\n<p class=\"fs-20-sm\"><span class=\"c-dark fw-medium fs-18-sm\"><strong>KAMI MENGOPTIMALKAN PERMINTAAN PELANGGAN AKAN AKSESORI UNTUK MENAMBAH KESAN KUALITAS YANG LEBIH TINGGI PADA MOBIL. KAMI BERKOLABORASI DENGAN VEHICLE DESIGN DEPARTMENT SEJAK TAHAP AWAL.</strong></span></p>\r\n\r\n<p class=\"fs-20-sm\"><span class=\"c-dark fw-medium fs-18-sm\"><strong>GENUINE RELIABILITY</strong></span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Pandangan kami adalah bahwa aksesori harus terintegrasi dengan baik dengan kendaraan yang meningkatkan daya tariknya. Kami ingin mengembangkan aksesoris yang akan memuaskan bahkan pelanggan yang mengharapkan lebih dari desain kendaraan asli. Setelah 13 tahun dalam desain kendaraan, saya telah menghabiskan lima tahun terakhir di departemen saya saat ini mengembangkan aksesori, dan satu hal yang saya sukai dari pekerjaan saya sekarang adalah hal itu membawa saya ke kontak yang lebih dekat dengan pelanggan kami.</span></p>\r\n\r\n<p><span class=\"c-dark fw-medium fs-18-sm\"><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001365.jpg\" /></span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Saya berusaha untuk memastikan bahwa setiap aksesori terintegrasi dengan sempurna meskipun dipasang setelah kendaraan dijual di pasar. Salah satunya hiasan bumper depan hitam Triton. Tepi di mana tanda Mitsubishi tiga berlian perak bertemu dengan bingkai hitam lebih sulit untuk diperbaiki daripada desain kendaraan aslinya. Jika celahnya terlalu lebar, terlihat tidak rapi, tetapi jika ujungnya terlalu rapat dapat menggores mobil. Hal ini membuat tantangan yang menarik dari perspektif desain. Triton diproduksi di Thailand, dan banyak bagiannya juga diproduksi oleh pemasok Thailand. Kami memutuskan desain akhir dengan berkonsultasi dengan divisi desain, yang bertujuan untuk menghadirkan kecakapan teknis terbaik yang ditawarkan oleh lokasi produksi lokal tersebut. Saya berharap tantangan untuk menciptakan aksesori yang rumit ini akan memacu peningkatan lebih lanjut di tingkat teknis pemasok kami.</span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Seorang pelanggan umumnya memilih aksesoris untuk penampilan atau fungsionalitas. Beberapa aksesori yang lebih berat dapat membatasi fungsionalitas kendaraan setelah pemasangan. Namun, kami memastikan genuine reliability dengan batasan kinerja minimum mutlak melalui konsultasi desainer aksesori dengan divisi pengujian sejak tahap awal proses desain kendaraan. Itulah yang kami maksud dengan &quot;asli&quot;.</span></p>\r\n\r\n<p><span class=\"c-dark fw-medium fs-18-sm\"><img class=\"fr-fic fr-dib\" src=\"https://www.mitsubishi-motors.co.id/storage/editor-images/1666001372.jpg\" /></span></p>\r\n\r\n<p class=\"fs-20-sm\"><span class=\"c-dark fw-medium fs-18-sm\"><strong>MENANGGAPI KEBUTUHAN GLOBAL</strong></span></p>\r\n\r\n<p class=\"fs-16-sm\"><span class=\"c-dark fw-medium fs-18-sm\">Di Australia, ada permintaan yang bertahan lama untuk suku cadang yang melindungi kendaraan dari tabrakan dengan hewan liar. Rupanya, banyak kecelakaan di sana melibatkan mobil yang menabrak kanguru. Karena kanguru liar cukup besar dan bergerak cepat, mereka sulit dihindari, dan kerusakan akibat tabrakan bisa parah. Akibatnya, Anda melihat banyak kendaraan di Australia dengan pipa besi dan kisi-kisi atau pelindung bagian logam yang terpasang dan lampu peringatan serta antena di atasnya. Tetapi memasang aksesori aftermarket semacam itu dapat memiliki efek negatif seperti membatasi jangkauan sensor depan kendaraan. Suku cadang yang sangat berat juga dapat merusak daya tahan dan kinerja kendaraan. Oleh karena itu, meningkatkan kekokohan Triton pada tahap desain terbukti menantang. Kami bertujuan untuk memenuhi permintaan pelanggan kami dengan menciptakan bilah pelindung depan yang menggabungkan kekuatan dan fungsionalitas untuk melindungi kendaraan dari benturan dengan hewan sambil menyesuaikan dengan desain kendaraan Triton secara keseluruhan.</span></p>\r\n<span class=\"c-dark fw-medium fs-18-sm\"> </span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n\r\n<section class=\"section\">\r\n<div class=\"container\">\r\n<div class=\"banner banner__secondary mg-y-0-sm\">\r\n<div class=\"banner__secondary-container\">\r\n<div class=\"banner__secondary-content banner__secondary-content-small\">\r\n<div class=\"container pd-l-15-sm pd-r-15-sm pd-l-50-md pd-r-50-md\">\r\n<div class=\"row\">\r\n<div class=\"ev-sm-12 ev-xmd-7\">\r\n<h2 class=\"title-primary_large c-white mg-b-200-sm mg-b-10-md\">TERTARIK DENGAN AKSESORIS RESMI?</h2>\r\n<!--  .title-primary_large -->\r\n\r\n<p class=\"c-white\">Aksesoris resmi tersedia di setiap dealer Mitsubishi Motors kesayangan Anda. Cek lokasi dan informasi dealer sekarang!</p>\r\n<a class=\"button button-primary mg-t-20-sm\" href=\"https://www.mitsubishi-motors.co.id/cari-dealer\">cari dealer</a></div>\r\n<!--  .ev-sm-12 ev-xmd-6 --></div>\r\n<!--  .row --></div>\r\n<!--  .container --></div>\r\n<!--  .banner__secondary-content -->\r\n\r\n<div class=\"banner__secondary-background banner__secondary-desktop banner__secondary-desktop-small lazy entered loaded\" data-bg=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000175-1665391677-1665387218-banner-section-21062022-at-2xjpgjpg.webp\" data-bg-hidpi=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000175-1665391677-1665387218-banner-section-21062022-at-2xjpgjpg.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000175-1665391677-1665387218-banner-section-21062022-at-2xjpgjpg.webp&quot;);\">&nbsp;</div>\r\n<!--  .banner__secondary-desktop -->\r\n\r\n<div class=\"banner__secondary-background banner__secondary-mobile lazy entered loaded\" data-bg=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000176-1665391677-1665387219-banner-section-responsive-19012022-at-2xjpgjpg.webp\" data-bg-hidpi=\"https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000176-1665391677-1665387219-banner-section-responsive-19012022-at-2xjpgjpg.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://assets.mitsubishi-motors.co.id/compress/accessory/pages/1666000176-1665391677-1665387219-banner-section-responsive-19012022-at-2xjpgjpg.webp&quot;);\">&nbsp;</div>\r\n<!--  .banner__secondary-mobile -->\r\n\r\n<div class=\"overlay overlay__black\">&nbsp;</div>\r\n<!--  .overlay overlay__black --></div>\r\n<!--  .banner__secondary-container --></div>\r\n<!--  .banner banner__secondary --></div>\r\n</section>\r\n</main>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `link` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `text_link` varchar(255) DEFAULT NULL,
  `link2` varchar(255) DEFAULT NULL,
  `text_link2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `link`, `background`, `text_link`, `link2`, `text_link2`) VALUES
(6, 'https://www.com', 'images/banner/1716953229.jpg', 'Halo', 'aaa', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `slug`, `judul`, `gambar`, `content`, `kategori`, `tanggal`, `created_by`, `updated_by`) VALUES
(2, 'program-penjualan-mitsubishi-mei-2024', 'Program Penjualan – Mitsubishi MEI 2024', 'images/cover_berita/promo1.png', '<p>Pada periode April 2024 ini kami memberikan berbagai kemudahan dalam melakukan pembelian dan proses kepemilikan kendaraan melalui program penjualan menarik untuk konsumen yang ingin melakukan pembelian kendaraan di bulan April 2024.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Program Pembiayaan Melalui PT. Dipo Star Finance (S&amp;K berlaku):</p>\r\n\r\n<p>o &nbsp; Program DP ringan:</p>\r\n\r\n<ul>\r\n	<li>DP ringan mulai dari 15%</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Bunga ringan:</p>\r\n\r\n<ul>\r\n	<li>bunga ringan mulai dari 0% hingga 2 tahun</li>\r\n	<li>DP mulai dari 25% (2 tahun 0% berlaku DP min. 55%)</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Konsumen Loyal Mitsubishi Motors:</p>\r\n\r\n<ul>\r\n	<li>DP mulai dari 55% dengan bunga mulai dari 0% hingga 2 tahun</li>\r\n</ul>\r\n\r\n<p>o &nbsp;Program SMART CASH:</p>\r\n\r\n<ul>\r\n	<li>bunga 0%</li>\r\n	<li>DP mulai dari 55%</li>\r\n	<li>Bonus asuransi &amp; tanpa biaya administrasi</li>\r\n</ul>\r\n\r\n<p>2. Gratis kaca film Solargard.</p>\r\n\r\n<p>3. Gratis perawatan/servis berkala hingga 50.000 km atau 4 tahun.</p>\r\n\r\n<p>4. Extended Warranty 1 tahun atau 20.000 KM apabila melakukan perawatan berkala secara teratur sampai dengan 3 (tiga) tahun atau 40.000 KM.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><a href=\"https://bosowaberlian.co.id/mitsubishi/produk/new-xpander-cross/\" rel=\"noreferrer noopener\" target=\"_blank\">New Xpander Cross</a></strong></p>\r\n\r\n<p>1. Program Cashback hingga jutaan rupiah berlaku untuk semua varian (S&amp;K berlaku)</p>\r\n\r\n<p>2. Program pilihan pembiayaan melalui PT. Dipo Star Finance (S&amp;K berlaku):</p>\r\n\r\n<p>o &nbsp; Program DP ringan:</p>\r\n\r\n<ul>\r\n	<li>DP mulai 10% (Tidak mengikat seluruh cabang), dan</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Bunga Rendah:</p>\r\n\r\n<ul>\r\n	<li>Bunga 0% sampai dengan tenor 2 tahun, dan</li>\r\n	<li>Gratis biaya administrasi</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program SMART CASH:</p>\r\n\r\n<ul>\r\n	<li>Bunga 0% hingga 1 tahun, dan&nbsp;</li>\r\n	<li>Gratis biaya asuransi, dan</li>\r\n	<li>Gratis biaya administrasi</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Konsumen Loyal Mitsubishi Motors:</p>\r\n\r\n<ul>\r\n	<li>DP mulai dari 55%, dan&nbsp;</li>\r\n	<li>Bunga 0% hingga 2 tahun, dan&nbsp;</li>\r\n	<li>Gratis biaya administrasi</li>\r\n</ul>\r\n\r\n<p>o &nbsp; Program Cicilan Pintar:</p>\r\n\r\n<ul>\r\n	<li>Buyback guarantee sampai dengan 73%, atau&nbsp;</li>\r\n	<li>Angsuran sampai dengan 7 tahun</li>\r\n</ul>\r\n\r\n<p>3. Gratis kaca film V-Kool untuk variant Premium CVT dan kaca film Konica Minolta atau Solargard untuk variant MT.</p>', 'Promo', '2024-05-29 11:06:58', NULL, NULL),
(3, 'l100-ev-kendaraan-operasional-tangguh-dipakai-oleh-banyak-perusahaan-besar-di-jepang', 'L100 EV KENDARAAN OPERASIONAL TANGGUH DIPAKAI OLEH BANYAK PERUSAHAAN BESAR DI JEPANG', 'images/cover_berita/Mitsubishi-L100.jpg', '<p>Mitsubishi L100 EV adalah kendaraan niaga bertenaga listrik yang diproduksi dan dijual Mitsubishi Indonesia. Menariknya, sebelum resmi dijual untuk pasar dalam negeri, L100 EV telah melakukan serangkaian uji coba (<em>Proof of Concept</em>&nbsp;) bersama beberapa perusahaan logistik dan jasa di Indonesia untuk melakukan berbagai aktivitas usaha sejak 2020 silam.</p>\r\n\r\n<p>Misalnya dengan PT Pos Indonesia, PT Haleyora Power, Gojek, DHL Supply Chain Indonesia, dan yang terbaru dijadikan gerai Lawson terkecil di dunia. Dalam aktivitas POC tersebut pada akhirnya menyimpulkan bahwa Mitsubishi L100 EV mampu mengakomodasi kebutuhan aktivitas operasional sehari-hari, dengan ukuran yang ringkas, kemudahan pengendaraan, bebas aturan ganjil-genap, dan paling penting sangat efisien!</p>\r\n\r\n<p>FYI, Mitsubishi L100 EV sebenarnya telah lama dimanfaatkan juga oleh perusahaan-perusahaan ternama di Jepang sebagai mobil operasional. Nah, beberapa di antaranya adalah:</p>\r\n\r\n<p><strong>1. Hakuyosha Co., Ltd. (Layanan kebersihan)</strong></p>\r\n\r\n<p>Perusahaan ini memakai Mitsubishi L100 EV untuk untuk sarana transportasi antara kantor cabang di Tokyo. Selain itu juga digunakan untuk mengumpulkan dan mengembalikan produk pembersih. &ndash; &ldquo;Biaya listrik mobil ini cuma 1/3 jika dibandingkan mobil berbahan bakar minyak, sehingga ada keuntungan dari segi biaya.&rdquo;</p>\r\n\r\n<p><strong>2. Mediceo Corp. (Layanan medis dan farmasi)</strong></p>\r\n\r\n<p>Menggunakan Mitsubishi L100 EV sebagai mobil pengiriman obat-obatan sampai jarak 100 km dari Tokyo. Mobil ini rata-rata juga dipakai menempuh jarak sekitar 30 km per harinya. &ndash; &ldquo;Dengan semua keunggulan mobil ini, berat rasanya kalau kami harus kembali memakai mobil berbahan bakar minyak.&rdquo;</p>\r\n\r\n<p><strong>3. Japan POST Co., Ltd. (Layanan kurir dan logistik)</strong></p>\r\n\r\n<p>Mitsubishi L100 EV dijadikan peran utama untuk melakukan sirkulasi pengiriman dan pengumpulan surat atau paket di seluruh Jepang. &ndash; &ldquo;Tanggapan pelanggan sangat positif, dan kami merasa telah berkontribusi terhadap pengurangan emisi karbon.&rdquo;</p>\r\n\r\n<p><strong>4. Cainz Corporation (Retail)</strong></p>\r\n\r\n<p>Memakai Mitsubishi L100 EV untuk mengunjungi pelanggan dalam memberikan layanan seperti penggantian dan perakitan produk retail yang mereka jual. &ndash; &ldquo;Mobil ini bahkan bisa dipakai menaiki dan menuruni daerah perbukitan dalam suhu cuaca panas sekali pun. Kami juga merasa yakin dengan kemampuan baterainya.&rdquo;</p>\r\n\r\n<p><strong>5. Pal System Tokyo (Layanan &nbsp;logistik)</strong></p>\r\n\r\n<p>Membuat mobil operasional Mitsubishi L100 EV untuk kendaraan pengiriman bahan makanan dan komoditas lainnya ke konsumen. &ndash; &ldquo;Mobil ini mengurangi beban pengemudi karena tidak perlu lagi berpikiran untuk mengisi bahan bakar.&rdquo;&nbsp;</p>', 'Berita', '2024-05-29 11:35:50', NULL, NULL),
(4, 'respon-antusiasme-pasar-terhadap-model-spesial-mmksi-luncurkan-pajero-sport-dan-new-xpander-cross-limited-edition', 'RESPON ANTUSIASME PASAR TERHADAP MODEL SPESIAL, MMKSI LUNCURKAN PAJERO SPORT DAN NEW XPANDER CROSS LIMITED EDITION', 'images/cover_berita/1715156796-picture1png.webp', '<p>PT Mitsubishi Motors Krama Yudha Sales Indonesia (PT MMKSI) akan memperkenalkan varian edisi terbatas untuk model Mitsubishi Pajero Sport dan Mitsubishi Xpander Cross, yang dipasarkan dengan jumlah terbatas dengan nama&nbsp;<strong>Mitsubishi Pajero Sport Elite Limited Edition</strong>, dan&nbsp;<strong>Mitsubishi&nbsp;Xpander Cross Elite Limited Edition</strong>.&nbsp;</p>\r\n\r\n<p>Mengusung&nbsp;<em>tagline</em>&nbsp;&ldquo;Experience the Unlimited Excitement of Adventures&rdquo;, peluncuran dua varian terbatas ini akan dilaksanakan dengan mendisplay varian edisi terbatas tersebut pada event Mitsubishi Motors Large Auto Show Exhibition pada periode 9 &ndash; 12 Mei 2024 di Bekasi, Palembang, dan Bandung, dan akan di lanjutkan di kota-kota lainnya pada event pameran Mitsubishi Motors selama bulan Mei (lokasi dan jadwal dari pameran disampaikan pada siaran persi ini). Peluncuran kedua model ini merupakan respon yang baik atas terhadap dua model tersebut sebelumnya, yang sangat diapresiasi di pasar.</p>\r\n\r\n<p>&ldquo;Varian spesial dan terbatas untuk model Mitsubishi Motors selalu mendapatkan apresiasi dan respon positif dari pasar Indonesia. Melalui peluncuran varian Elite Limited Edition Mitsubishi Pajero Sport dan Mitsubishi Xpander Cross, kami ingin memberikan penyegaran produk serta pilihan yang lebih luas bagi konsumen yang menginginkan model yang lebih tegas, lebih mewah, dan lebih eksklusif dibandingkan dengan model reguler. Dengan warna two-tone eksklusif dan aksesoris eksklusif, kami percaya model terbatas ini akan memenuhi keinginan dari konsumen yang penuh passion, dan akan mendapat feedback positif dari konsumen kami. Varian ini akan dirilis dengan jumlah terbatas, oleh karena itu saya ingin mengajak konsumen kami untuk segera mengunjungi pameran kami untuk melihatnya,&rdquo; ungkap Atsushi Kurita, President Director PT MMKSI.</p>\r\n\r\n<p><strong>Mitsubishi Pajero Sport Elite Limited Edition</strong>, merupakan varian edisi terbatas yang dikembangkan dengan basis Mitsubishi Pajero Sport Dakar 4x2, dan tersedia hanya dalam 1 varian dan 1 pilihan warna, yakni Quartz White Pearl. Pada Mitsubishi Pajero Sport Elite Limited Edition disematkan penyegaran pada sisi eksterior dengan sebuah desain yang&nbsp;<em>elite&nbsp;</em>dan<em>&nbsp;</em>stylish, melalui&nbsp;<em>highlight&nbsp;</em>utama warna&nbsp;<em>two-tone</em>&nbsp;putih dan hitam, serta beragam aksesoris&nbsp;<em>Elite</em>, seperti&nbsp;<em>Black Front Grille, Black Front Under Garnish, Black Headlamp Extension, Black Alloy Wheel, Black Roof, Black Roof Rail, Engine Hood Emblem</em>,&nbsp;<em>Black Shark-Fin Antenna</em>,&nbsp;<em>Black Rear Spoiler</em>,&nbsp;<em>Elite Limited Edition Emblem</em>,&nbsp;<em>Black Rear Under Garnish</em>, dan&nbsp;<em>Exhaust Finisher.</em>&nbsp;Sedangkan pada sisi interior Mitsubishi Pajero Sport Elite Limited Edition dibenamkan audio premium, yang meningkatkan kenyamanan hiburan dalam kabin dan juga prestise bagi penggunanya. Dengan basis Mitsubishi Pajero Sport Dakar 4x2, Mitsubishi Pajero Sport Elite Limited Edition tidak hanya mendapatkan penyegaran dari sisi eksterior, dan interior, namun juga dilengkapi dengan semua fitur unggulan yang terdapat pada Pajero Sport Dakar 4x2. Mitsubishi Pajero Sport Elite Edition dipasarkan di Indonesia sebanyak hanya sebanyak 800 unit, dengan harga&nbsp;<em>on the road</em>&nbsp;Rp 661.400.000 untuk wilayah Jabode</p>', 'Siaran Pers', '2024-05-29 11:36:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bodicat`
--

CREATE TABLE `bodicat` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bodicat`
--

INSERT INTO `bodicat` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/bodicat/bg1.png', 'Text 1', 'w', '<div class=\"ng-scope\" ng-app=\"App\" ng-controller=\"HomeController\">\r\n<div class=\"uk-width-expand\" id=\"headline\">\r\n<div class=\"uk-container uk-container-expand\">\r\n<div class=\"uk-position-relative\">\r\n<div class=\"uk-inline uk-width-1-1 uk-overflow-hidden uk-flex uk-flex-middle img\"><img alt=\"Accessories Aftersales\" class=\"uk-position-center-right uk-visible@m\" src=\"https://www.mitsubishi-motors.co.id/asset/img/banner-bodi-dan-cat-large.webp\" /><img alt=\"Accessories Aftersales\" class=\"uk-position-center-right uk-hidden@m\" src=\"https://www.mitsubishi-motors.co.id/asset/img/banner-bodi-dan-cat-small.webp\" />\r\n<div class=\"uk-width-expand uk-position-left uk-padding-large uk-visible@m cover\">\r\n<div class=\"uk-container\">\r\n<p class=\"uk-display-block uk-margin-large uk-padding-large\">&nbsp;<br />\r\n&nbsp;&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<h1 class=\"uk-text-uppercase uk-display-block title\" style=\"margin-bottom:20px;\">Bodi &amp; Cat</h1>\r\n\r\n<p class=\"uk-width-1-3 uk-margin-large-bottom subtitle\">Demi memberikan layanan purna jual yang menyeluruh kepada pelanggan, Mitsubishi hadir untuk memberikan pelayanan khusus untuk pengerjaan bodi &amp; cat yang tersebar di beberapa kota di Indonesia.</p>\r\n\r\n<div class=\"uk-display-block uk-text-center\">\r\n<h3 class=\"title\"><a href=\"#content\" uk-scroll=\"\"><svg aria-hidden=\"true\" class=\"svg-inline--fa fa-chevron-down\" data-fa-i2svg=\"\" data-icon=\"chevron-down\" data-prefix=\"fas\" focusable=\"false\" role=\"img\" viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z\" fill=\"currentColor\"></path></svg><!-- <i class=\"fa-solid fa-chevron-down\"></i> Font Awesome fontawesome.com --></a></h3>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-expand uk-position-bottom uk-padding-small uk-hidden@m cover-bottom\">\r\n<p class=\"uk-display-block uk-margin-large\">&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<h2 class=\"uk-text-uppercase uk-margin-large uk-display-block title\" style=\"margin-top:125px!important;margin-bottom:80px!important;\">Bodi &amp; Cat</h2>\r\n\r\n<p class=\"uk-width-auto subtitle\" style=\"margin-bottom:40px!important;\">Demi memberikan layanan purna jual yang menyeluruh kepada pelanggan, Mitsubishi hadir untuk memberikan pelayanan khusus untuk pengerjaan bodi &amp; cat yang tersebar di beberapa kota di Indonesia.</p>\r\n\r\n<div class=\"uk-display-block uk-text-center\">\r\n<h3 class=\"title\"><a href=\"#content\" uk-scroll=\"\"><svg aria-hidden=\"true\" class=\"svg-inline--fa fa-chevron-down\" data-fa-i2svg=\"\" data-icon=\"chevron-down\" data-prefix=\"fas\" focusable=\"false\" role=\"img\" viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z\" fill=\"currentColor\"></path></svg><!-- <i class=\"fa-solid fa-chevron-down\"></i> Font Awesome fontawesome.com --></a></h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-expand uk-margin-small-top uk-margin-bottom@m uk-margin-remove-bottom@s\" id=\"intro\">\r\n<div class=\"uk-container\">\r\n<p class=\"uk-margin-top uk-margin-bottom uk-visible@m\">Kami memahami betapa pentingnya penampilan kendaraan bagi Anda. Kami berkomitmen untuk memberikan hasil yang memuaskan dan memastikan tampilan kendaraan Anda kembali sempurna.</p>\r\n\r\n<div class=\"uk-container uk-hidden@m\" style=\"padding:0 10px\">\r\n<p class=\"uk-margin-top uk-margin-bottom\">Kami memahami betapa pentingnya penampilan kendaraan bagi Anda. Kami berkomitmen untuk memberikan hasil yang memuaskan dan memastikan tampilan kendaraan Anda kembali sempurna.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-expand uk-margin-top@m uk-margin-small-top@s\" id=\"content\">\r\n<div class=\"uk-container uk-overflow-hidden\">\r\n<div class=\"wrapper uk-grid uk-grid-stack\" uk-grid=\"\">\r\n<div class=\"uk-width-1-2@m uk-width-auto uk-first-column\">\r\n<div class=\"grid-padding\">\r\n<div class=\"uk-width-expand uk-margin-small uk-margin-remove-left uk-flex uk-flex-middle images\"><img alt=\"pilihan layanan - bodi\" src=\"https://www.mitsubishi-motors.co.id/asset/img/content3.webp\" /></div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-1-2@m uk-wdith-auto uk-grid-margin uk-first-column\">\r\n<div class=\"grid-padding\">\r\n<h1 class=\"uk-text-uppercase uk-visible@m\">Pilihan Layanan</h1>\r\n\r\n<h2 class=\"uk-text-uppercase uk-margin-remove uk-hidden@m\">Pilihan Layanan</h2>\r\n\r\n<table class=\"uk-table\">\r\n	<tbody>\r\n		<tr class=\"header\">\r\n			<td width=\"3%\">1.</td>\r\n			<td>Perbaikan Bodi Kendaraan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Melayani perbaikan bodi kendaraan yang rusak akibat kecelakaan, mulai dari perbaikan ringan sampai perbaikan berat.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>2.</td>\r\n			<td>Perbaikan Cat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Melayani perbaikan cat kendaraan yang rusak akibat tergores maupun penggantian warna kendaraan anda dengan kualitas cat premium.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>3.</td>\r\n			<td>Poles Bodi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Mitsubishi Motors Authorized Bodi &amp; Cat Dealer juga menyediakan layanan jasa poles untuk perawatan kendaraan anda menggunakan material poles premium.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-margin-large-top uk-margin-bottom uk-grid uk-grid-stack\" uk-grid=\"\">\r\n<div class=\"uk-width-auto@s uk-hidden@m uk-first-column\">\r\n<div class=\"grid-padding\">\r\n<div class=\"uk-width-expand uk-margin-small uk-margin-remove-right uk-flex uk-flex-middle images\"><img alt=\"keunggulan layanan kami - bodi\" src=\"https://www.mitsubishi-motors.co.id/asset/img/content2.webp\" /></div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-1-2@m uk-width-auto uk-grid-margin uk-first-column\">\r\n<div class=\"grid-padding\">\r\n<h1 class=\"uk-text-uppercase uk-visible@m\">Keunggulan<br />\r\nLayanan Kami</h1>\r\n\r\n<h2 class=\"uk-text-uppercase uk-margin-remove uk-hidden@m\">Keunggulan<br />\r\nLayanan Kami</h2>\r\n\r\n<table class=\"uk-table\">\r\n	<tbody>\r\n		<tr class=\"header\">\r\n			<td width=\"3%\">1.</td>\r\n			<td>SOP Perbaikan Standard Mitsubishi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Jaminan perbaikan kendaraan Anda sesuai dengan SOP standard Mitsubishi.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>2.</td>\r\n			<td>Premium Cat</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Menggunakan material cat premium (waterbased) untuk memberikan jaminan kualitas hasil pengecatan yang optimal dan ramah lingkungan.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>3.</td>\r\n			<td>Jaminan Kualitas dan Garansi Perbaikan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Memberikan kenyamanan dan ketenangan kepada konsumen.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>4.</td>\r\n			<td>One Stop Service</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Penulisan Mitsubishi Bodi &amp; Cat Dealer diganti menjadi &quot;Mitsubishi Motors Authorized Bodi &amp; Cat dealer.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>5.</td>\r\n			<td>Jaminan Suku Cadang Resmi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Kami menjamin suku cadang yang kami berikan dan kami gunakan adalah suku cadang resmi Mitsubishi Motors.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>6.</td>\r\n			<td>Mekanik yang Profesional</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Kendaraan Anda akan ditangani oleh tim mekanik yang berpengalaman dan memiliki kualifikasi profesional.</td>\r\n		</tr>\r\n		<tr class=\"header\">\r\n			<td>7.</td>\r\n			<td>Fasilitas dan Peralatan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Kami senantiasa berkomitmen untuk memberikan fasilitas pelayanan terbaik dan memastikan peralatan yang kami gunakan dilengkapi dengan peralatan yang modern dengan teknologi terbaru untuk memenuhi kebutuhan kepuasan pelanggan.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class=\"uk-text-small uk-margin-large-top uk-visible@m\">Semua layanan di Mitsubishi Motors Authorized Bodi &amp; Cat dapat digunakan oleh seluruh konsumen Mitsubishi Motors baik itu dengan menggunakan Asuransi maupun secara Pribadi diseluruh jaringan Mitsubishi Authorized Bodi &amp; Cat Dealer.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-auto uk-hidden@m uk-grid-margin uk-first-column\">\r\n<div class=\"grid-padding\">\r\n<div class=\"uk-width-expand uk-margin-small uk-margin-remove-right uk-flex uk-flex-middle images\"><img alt=\"keunggulan layanan kami - cat\" src=\"https://www.mitsubishi-motors.co.id/asset/img/content1.webp\" /></div>\r\n\r\n<p class=\"uk-text-small uk-margin-large-top\">Semua layanan di Mitsubishi Motors Authorized Bodi &amp; Cat dapat digunakan oleh seluruh konsumen Mitsubishi Motors baik itu dengan menggunakan Asuransi maupun secara Pribadi diseluruh jaringan Mitsubishi Authorized Bodi &amp; Cat Dealer.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"uk-width-1-2@m uk-visible@m\">\r\n<div class=\"uk-width-expand uk-margin-small uk-margin-bottom uk-margin-remove-right uk-flex uk-flex-middle images\"><img alt=\"keunggulan layanan kami - bodi\" src=\"https://www.mitsubishi-motors.co.id/asset/img/content2.webp\" /></div>\r\n\r\n<div class=\"uk-width-expand uk-margin-large uk-margin-remove-right uk-flex uk-flex-middle images\"><img alt=\"keunggulan layanan kami - cat\" src=\"https://www.mitsubishi-motors.co.id/asset/img/content1.webp\" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `brosur`
--

CREATE TABLE `brosur` (
  `id` int NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_by` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `brosur`
--

INSERT INTO `brosur` (`id`, `sampul`, `judul`, `kategori`, `link`, `created_by`, `updated_by`) VALUES
(2, 'images/sampul_brosur/1715165208-xpander-mobilephone-sam-kv-okpng.webp', 'hfhhf a', 'KENDARAAN NIAGA RINGAN', 'brosurs/maintenance.png', 'admin', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `showroom` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `gmaps` varchar(255) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id`, `nama`, `kota`, `alamat`, `layanan`, `showroom`, `service`, `telepon`, `gmaps`, `created_by`, `updated_by`) VALUES
(2, 'Mitsubishi Cab. Palopo', 'Malang', 'Jl. Jalan', 'Bodi & Cat, Service', 'Senin - Jumat 08:00 - 17:00 WITA\r\n\r\nSabtu 08:00 - 12:00 WITA', 'Senin - Jumat 08:00 - 17:00 WITA\r\n\r\nSabtu 08:00 - 12:00 WITA', '0189340509, 300505', 'https://www.com', NULL, 'admin'),
(3, 'Mitsubishi Cab. Kendari', 'Jakarta', 'jl. jakarta', 'Bodi & Cat, Sales, Suku Cadang', 'Senin - Jumat 08:00 - 17:00 WITA\r\n\r\nSabtu 08:00 - 12:00 WITA', 'Senin - Jumat 08:00 - 17:00 WITA\r\n\r\nSabtu 08:00 - 12:00 WITA', '01930330', 'https://w.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_sparepart`
--

CREATE TABLE `cms_sparepart` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cms_sparepart`
--

INSERT INTO `cms_sparepart` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/cms_sparepart/bg2.png', 'Haeijd', 'd', '<section class=\"banner mg-t-90-sm mg-t-85-md\">\r\n<div class=\"banner__wrapper\">\r\n<div class=\"banner__background lazy entered loaded\" data-bg=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-spareparts-03012022.webp\" data-bg-hidpi=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-spareparts-03012022@2x.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-spareparts-03012022@2x.webp&quot;);\">&nbsp;</div>\r\n<!--  .banner__background -->\r\n\r\n<div class=\"banner__background-responsive lazy entered loaded\" data-bg=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-spareparts-responsive-03012022.webp\" data-bg-hidpi=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-spareparts-responsive-03012022@2x.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/banner-spareparts-responsive-03012022@2x.webp&quot;);\">&nbsp;</div>\r\n<!--  .banner__background-responsive -->\r\n\r\n<div class=\"banner__content\">\r\n<h1 class=\"title-primary_large c-white mg-b-20-sm mg-b-20-md\">SUKU CADANG</h1>\r\n\r\n<p class=\"c-white\">Kami siap melayani kebutuhan suku cadang untuk kendaraan Anda. Percayakan kebutuhan suku cadang mobil Anda kepada kami, asli Mitsubishi Motors dengan kualitas terbaik.</p>\r\n</div>\r\n</div>\r\n<!--  .banner__wrapper --></section>\r\n\r\n<section class=\"section\">\r\n<div class=\"container\">\r\n<div class=\"row mg-b-0-sm mg-b-0-md\">\r\n<div class=\"ev-sm-12 ev-md-5 match\">\r\n<h1 class=\"title-primary_large mg-b-30-sm mg-b-20-md\">KATEGORI SUKU CADANG</h1>\r\n\r\n<p>Mitsubishi Motors menyediakan berbagai jenis suku cadang yang sesuai untuk memastikan kendaraan Anda beroperasi dalam kondisi yang prima.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"container mg-b-50-md\">\r\n<div class=\"row\">\r\n<div class=\"ev-md-12 ev-sm-12\">\r\n<div class=\"footer__wrapper\">\r\n<div class=\"footer__ecommerce\">\r\n<p>Dapatkan suku cadang di <a href=\"https://www.mitsubishi-motors.co.id/cari-dealer\" style=\"color: black\" target=\"__blank\"> <u>bengkel resmi Dealer Mitsubishi Motors</u> </a> seluruh Indonesia.<br />\r\nAtau dapatkan di Official Store e-Commerce Mitsubishi Motors Genuine Part Indonesia.</p>\r\n\r\n<div class=\"d-desktop\">\r\n<ul>\r\n	<li class=\"pd-x-0-md pd-r-30-md\"><a class=\"social-media\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/1/aftersales\" id=\"Tokopedia-icon\" style=\"cursor: pointer\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Tokopedia/1715476216-tokped-full-desktoppngpng.webp\" style=\"margin-bottom: 5px; max-height:40px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-md pd-r-30-md\"><a class=\"social-media\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/2/aftersales\" id=\"Shopee-icon\" style=\"cursor: pointer\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Shopee/1715476455-1715080798-shopee-full-desktoppngpng.webp\" style=\"margin-bottom: 5px; max-height:40px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-md pd-r-30-md\"><a class=\"social-media\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/3/aftersales\" id=\"Blibli-icon\" style=\"cursor: pointer\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Blibli/1715476575-blibli-full-desktoppngpng.webp\" style=\"margin-bottom: 5px; max-height:40px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-md pd-r-30-md\"><a class=\"social-media\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/4/aftersales\" id=\"Bukalapak-icon\" style=\"cursor: pointer\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Bukalapak/1715476652-1715080914-bukalapak-full-desktoppngpng.webp\" style=\"margin-bottom: 5px; max-height:40px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-md pd-r-30-md\"><a class=\"social-media\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/5/aftersales\" id=\"Lazada-icon\" style=\"cursor: pointer\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Lazada/1715476784-lazada-full-desktoppngpng.webp\" style=\"margin-bottom: 5px; max-height:40px\" /> </i> </a></li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"d-mobile\">\r\n<ul>\r\n	<li class=\"pd-x-0-sm pd-r-10-sm\"><a class=\"social-media mg-x-0-sm\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/1/aftersales\" id=\"Tokopedia-icon\" style=\"cursor: pointer;\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Tokopedia/1715476216-tokped-full-mobilepngpng.webp\" style=\"margin-bottom: 5px; max-height:27px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-sm pd-r-10-sm\"><a class=\"social-media mg-x-0-sm\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/2/aftersales\" id=\"Shopee-icon\" style=\"cursor: pointer;\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Shopee/1715476455-1715080798-shopee-full-mobilepngpng.webp\" style=\"margin-bottom: 5px; max-height:27px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-sm pd-r-10-sm\"><a class=\"social-media mg-x-0-sm\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/3/aftersales\" id=\"Blibli-icon\" style=\"cursor: pointer;\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Blibli/1715476575-blibli-full-mobilepngpng.webp\" style=\"margin-bottom: 5px; max-height:27px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-sm pd-r-10-sm\"><a class=\"social-media mg-x-0-sm\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/4/aftersales\" id=\"Bukalapak-icon\" style=\"cursor: pointer;\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Bukalapak/1715476652-1715080914-bukalapak-full-mobilepngpng.webp\" style=\"margin-bottom: 5px; max-height:27px\" /> </i> </a></li>\r\n	<li class=\"pd-x-0-sm pd-r-10-sm\"><a class=\"social-media mg-x-0-sm\" href=\"https://www.mitsubishi-motors.co.id/links/ecommerce/tracker/5/aftersales\" id=\"Lazada-icon\" style=\"cursor: pointer;\" target=\"_blank\"><i aria-hidden=\"true\"><img src=\"https://assets.mitsubishi-motors.co.id/compress/ecommerce/Lazada/1715476784-lazada-full-mobilepngpng.webp\" style=\"margin-bottom: 5px; max-height:27px\" /> </i> </a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `exterior_kendaraan`
--

CREATE TABLE `exterior_kendaraan` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `exterior_kendaraan`
--

INSERT INTO `exterior_kendaraan` (`id`, `judul`, `deskripsi`, `gambar`, `id_kendaraan`, `created_by`, `updated_by`) VALUES
(2, 'New Generation Dynamic Shield', '<p>lorem lorem lorem lorem ipsum sit dolor amet.&nbsp;<a href=\"http://eekek.com\">Lihat lebih lengkap</a></p>\r\n\r\n<p><span style=\"font-size:9px;\">*harga tersedia di varian ultimate</span></p>', 'images/exterior_kendaraan/1717008992pajero.png', 3, NULL, 'superadmin'),
(3, 'Impressive Futuristic Design Standing Out From The Crowd', 'Desain futuristik yang menggabungkan kesan canggih dan kokoh khas SUV lewat lekukan bodi yang tegas, sukses menjadikan Anda pusat perhatian.', 'images/exterior_kendaraan/1717009551mobilputih.jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interior_kendaraan`
--

CREATE TABLE `interior_kendaraan` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `interior_kendaraan`
--

INSERT INTO `interior_kendaraan` (`id`, `judul`, `deskripsi`, `gambar`, `id_kendaraan`, `created_by`, `updated_by`) VALUES
(2, 'Voluptatem et anim a', 'Quidem eos rerum et', 'images/interior_kendaraan/171703626129.jpg', 3, NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id` bigint UNSIGNED NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id`, `perusahaan`, `pekerjaan`, `tempat`, `kualifikasi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Eum exercitationem e', 'Et sit voluptas nece', 'Makkasar, Jakarta, Surabaya', 'Voluptatibus eiusmod', 'eum-exercitationem-e-et-sit-voluptas-nece', NULL, NULL),
(2, 'Quia sed ullam duis', 'Ut aut veniam dolor', 'Makkasar', 'Deleniti dolor numqu', 'quia-sed-ullam-duis-ut-aut-veniam-dolor', NULL, NULL),
(3, 'Eos ut est aliquam', 'Sed voluptates ab qu', 'Malang, Surabaya', 'Tempore consectetur', 'eos-ut-est-aliquam-sed-voluptates-ab-qu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karir_apply`
--

CREATE TABLE `karir_apply` (
  `id` bigint UNSIGNED NOT NULL,
  `karir_id` int NOT NULL,
  `sumber_informasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_diharapkan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_sebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_diharapkan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_sebelumnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karir_apply`
--

INSERT INTO `karir_apply` (`id`, `karir_id`, `sumber_informasi`, `gaji_diharapkan`, `gaji_sebelumnya`, `fasilitas_diharapkan`, `fasilitas_sebelumnya`, `lokasi_kerja`, `cv`, `nama`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kompas', 'vybymu@mailinator.com', 'zakosol@mailinator.com', 'sohyxok@mailinator.com', 'fenegimax@mailinator.com', 'Makkasar', 'data_karir/cv/print iot.docx', 'hotose@mailinator.com', '59', 'feleh@mailinator.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtext1` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `subtext2` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `foto_exterior` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `foto_interior` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `background2` varchar(255) NOT NULL,
  `background_thumbnail` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `opsi_text` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama`, `slug`, `subtext1`, `subtext2`, `foto_exterior`, `foto_interior`, `gambar`, `background`, `background2`, `background_thumbnail`, `harga`, `opsi_text`, `kategori`, `created_by`, `updated_by`) VALUES
(2, 'Excepteur id except', 'excepteur-id-except', 'Quaerat nisi ab blan', 'Molestiae aut offici', NULL, NULL, 'images/gambar_kendaraan/11717424073new-xpander.webp', 'images/gambar_kendaraan/21716745294bg1.png', '', 'images/gambar_kendaraan/21717424073kota-makassar.webp', 'Rp 450.000.000', '', 'Light Commercial Vehicle', NULL, NULL),
(3, 'Quia fugit et quaer', 'quia-fugit-et-quaer', 'Velit ex dolor sit', 'Porro quo veniam eu', '<iframe src=\"https://mmksiwebsite.sirv.com/Spins/Trainers/Trainers.spin\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowfullscreen></iframe>', 'images/gambar_kendaraan/31717047346interior_car.jpg', 'images/gambar_kendaraan/11717424562triton.webp', 'images/gambar_kendaraan/21716958190Mitsubishi-L100.jpg', 'images/gambar_kendaraan/21722284828bg.webp', 'images/gambar_kendaraan/21717424562kota-jeneponto.webp', 'Rp 450.000.000', '*Harga sewaktu-waktu dapat berubah\r\n*Harga OTR DKI Jakarta selama bulan Juli 2024\r\n*Harga New Xpander Cross white color lebih tinggi Rp1.500.000', 'Passenger Car', NULL, 'superadmin'),
(4, 'Quisquam ad est duis', 'quisquam-ad-est-duis', 'Est placeat nisi de', 'Alias illo possimus', 'images/gambar_kendaraan/41716958277Mitsubishi-L100.jpg', 'images/gambar_kendaraan/31716958277carousel-bg-1.jpg', 'images/gambar_kendaraan/11717424577new-pajero-sport (1).webp', 'images/gambar_kendaraan/21716958277Mitsubishi-L100.jpg', '', 'images/gambar_kendaraan/21717424577kota-makassar.webp', 'Rp 450.000.000', '', 'Passenger Car', NULL, NULL),
(5, 'Eiusmod accusantium', 'eiusmod-accusantium', 'Quis labore atque et', 'Iure officia ut mole', 'images/gambar_kendaraan/41716958298promo1.png', 'images/gambar_kendaraan/31716958298carousel-bg-1.jpg', 'images/gambar_kendaraan/11716958298mobilputih.jpg', 'images/gambar_kendaraan/21716958298promo1.png', '', 'images/gambar_kendaraan/21717424642kota-makassar.webp', 'Rp 450.000.000', '', 'Light Commercial Vehicle', NULL, NULL),
(6, 'Fugiat minim sunt', 'fugiat-minim-sunt', 'Voluptatem aut aliqu', 'Odio nulla nisi nisi', 'images/gambar_kendaraan/41717002262mobilmerah.jpg', 'images/gambar_kendaraan/317170022621715156796-picture1png.webp', 'images/gambar_kendaraan/11717002262mobilputih.jpg', 'images/gambar_kendaraan/21717002262mobilputih.jpg', '', 'images/gambar_kendaraan/21717424654kota-jeneponto.webp', 'Dolor ad quibusdam l', '', 'Passenger Car', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lineup`
--

CREATE TABLE `lineup` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup`
--

INSERT INTO `lineup` (`id`, `nama`, `harga`, `id_kendaraan`, `created_by`, `updated_by`) VALUES
(9, 'Ultimate CVT', 'Rp 600.000.000', 3, NULL, 'admin'),
(10, 'cs1', 'Rp 450.000.000', 3, 'superadmin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lineup_warna`
--

CREATE TABLE `lineup_warna` (
  `id` int NOT NULL,
  `id_lineup` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kode_warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `lineup_warna`
--

INSERT INTO `lineup_warna` (`id`, `id_lineup`, `gambar`, `kode_warna`) VALUES
(6, 9, 'images/lineup_kendaraan/1717036651abu.png', '#787878'),
(7, 9, 'images/lineup_kendaraan/1717036651kuning.webp', '#d8ac0e'),
(8, 9, 'images/lineup_kendaraan/1717036651merah.webp', '#e21212'),
(9, 9, 'images/lineup_kendaraan/171703665129.jpg', '#282dbd'),
(10, 10, 'images/lineup_kendaraan/1718726741car_(25).jpg', '#e70d0d'),
(11, 10, 'images/lineup_kendaraan/1718726741WhatsApp Image 2024-06-03 at 21.08.35_c2902cc7.jpg', '#b8a214');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int NOT NULL,
  `background` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `background`, `text1`, `text2`, `content`, `updated_by`) VALUES
(1, 'images/maintenance/carousel-bg-1.jpg', 'ad', 'Layanan perawatan dan perbaikan kendaraan dilakukan oleh tenaga mekanik yang profesional dengan menggunakan peralatan yang modern.', '<section class=\"banner mg-t-90-sm mg-t-85-md\">\r\n<div class=\"banner__wrapper\">\r\n<div class=\"banner__background lazy entered loaded\" data-bg=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-desktop.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-desktop.webp&quot;);\">&nbsp;</div>\r\n\r\n<div class=\"banner__background-responsive lazy entered loaded\" data-bg=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-mobile.webp\" data-ll-status=\"loaded\" style=\"background-image: url(&quot;https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-mobile.webp&quot;);\">&nbsp;</div>\r\n\r\n<div class=\"banner__content\">\r\n<h1 class=\"title-primary_large c-white mg-b-80-sm mg-b-20-md\">Perawatan Kendaraan</h1>\r\n\r\n<p class=\"c-white\">Layanan perawatan dan perbaikan kendaraan dilakukan oleh tenaga mekanik yang profesional dengan menggunakan peralatan yang modern. Kami menjamin keamanan, kenyamanan, dan performa yang optimal bagi kendaraan Anda.</p>\r\n</div>\r\n<a class=\"banner-scroll\" href=\"javascript:;\" id=\"banner-scroll\"><i class=\"material-icons\">keyboard_arrow_down</i></a></div>\r\n</section>\r\n\r\n<section class=\"section\">\r\n<div class=\"container\" data-id=\"next-section\">\r\n<div class=\"row rows mg-b-50-sm\">\r\n<div class=\"ev-sm-12 ev-md-6 pd-r-0-sm pd-r-40-md order-2 order-md-1\">\r\n<h2 class=\"title-primary_large mg-b-10-sm\">PERAWATAN BERKALA</h2>\r\n\r\n<p>Mitsubishi Motors berkomitmen memberikan pelayanan terbaik untuk pemeriksaan dan pemeliharaan komponen kendaraan Mitsubishi Anda melalui layanan Perawatan Berkala. Pelayanan kendaraan Mitsubishi Anda akan dioptimalkan dengan beberapa fitur khusus.</p>\r\n</div>\r\n\r\n<div class=\"ev-sm-12 ev-md-6 order-1 order-md-2\"><img alt=\"\" class=\"mg-b-20-sm\" src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-05012022.webp\" srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-05012022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/perawatan-kendaraan-05012022@2x.webp 2x\" /></div>\r\n</div>\r\n\r\n<div class=\"swiper-container slider__content\" id=\"slider-content\">\r\n<div class=\"row swiper-wrapper\">\r\n<div class=\"swiper-slide ev-sm-12 ev-md-4 mg-b-30-sm\">\r\n<div class=\"card__content large\"><a data-animation-duration=\"700\" data-fancybox=\"\" data-src=\"#my-mitsubishi\" href=\"javascript:;\"><img alt=\"\" class=\"text-center lazy entered loaded\" data-ll-status=\"loaded\" data-src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/bengkel-buka-minggu-31082022.webp\" data-srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/bengkel-buka-minggu-31082022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/bengkel-buka-minggu-31082022@2x.webp 2x\" src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/bengkel-buka-minggu-31082022.webp\" srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/bengkel-buka-minggu-31082022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/bengkel-buka-minggu-31082022@2x.webp 2x\" /></a>\r\n\r\n<p>Layanan service juga tersedia di hari Minggu. Silahkan hubungi dealer terdekat di kota Anda untuk mendapatkan informasi lebih lanjut.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"swiper-slide ev-sm-12 ev-md-4 mg-b-30-sm\">\r\n<div class=\"card__content large\"><a data-animation-duration=\"700\" data-fancybox=\"\" data-src=\"#my-mitsubishi\" href=\"javascript:;\"><img alt=\"\" class=\"text-center lazy entered loaded\" data-ll-status=\"loaded\" data-src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/quick-pit-service-31082022.webp\" data-srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/quick-pit-service-31082022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/quick-pit-service-31082022@2x.webp 2x\" src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/quick-pit-service-31082022.webp\" srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/quick-pit-service-31082022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/quick-pit-service-31082022@2x.webp 2x\" /></a>\r\n\r\n<p>Layanan Quick PIT tersedia untuk rangkaian service ringan, dengan estimasi waktu maksimal 2 jam kerja.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"swiper-slide ev-sm-12 ev-md-4 mg-b-30-sm\">\r\n<div class=\"card__content large\"><a data-animation-duration=\"700\" data-fancybox=\"\" data-src=\"#my-mitsubishi\" href=\"javascript:;\"><img alt=\"\" class=\"text-center lazy entered loaded\" data-ll-status=\"loaded\" data-src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/service-booking-31082022.webp\" data-srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/service-booking-31082022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/service-booking-31082022@2x.webp 2x\" src=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/service-booking-31082022.webp\" srcset=\"https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/service-booking-31082022.webp 1x, https://static.mitsubishi-motors.co.id/compress/assets/img/aftersales/service-booking-31082022@2x.webp 2x\" /></a>\r\n\r\n<p>Layanan Service Booking memastikan kendaraan Anda servis tepat waktu dan tanpa antrian.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"swiper-pagination\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</section>', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_11_180028_update_banner_table', 2),
(6, '2024_07_11_182101_remove_isi_foto_exterior_from_kendaraan_table', 3),
(7, '2024_07_12_161753_create_karir_table', 4),
(8, '2024_07_12_164605_create_karir_apply_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `performance_kendaraan`
--

CREATE TABLE `performance_kendaraan` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `performance_kendaraan`
--

INSERT INTO `performance_kendaraan` (`id`, `judul`, `deskripsi`, `gambar`, `id_kendaraan`, `created_by`, `updated_by`) VALUES
(1, 'performance 1 ed', 'lorem lorem lorem lorem ipsum sit dolor amet', 'images/performance_kendaraan/1716787035logo-fuso.png', 2, NULL, NULL),
(2, 'Sit similique numqu', 'Libero necessitatibu', 'images/performance_kendaraan/1717036334mobilputih.jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `safety_kendaraan`
--

CREATE TABLE `safety_kendaraan` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kendaraan` int NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `safety_kendaraan`
--

INSERT INTO `safety_kendaraan` (`id`, `judul`, `deskripsi`, `gambar`, `id_kendaraan`, `created_by`, `updated_by`) VALUES
(2, 'Consectetur ut qui e', 'Reprehenderit sequi', 'images/safety_kendaraan/1717036298luggage.jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_perusahaan`
--

CREATE TABLE `sejarah_perusahaan` (
  `id` int NOT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sejarah_perusahaan`
--

INSERT INTO `sejarah_perusahaan` (`id`, `content`, `updated_by`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:36px\"><strong>SEJARAH PERUSAHAAN</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Perusahaan ini bermula dari sebuah perusahaan yang bergerak di bidang perdagangan umum bernama CV Moneter di kota Makassar, Sulawesi Selatan, pada 22 Februari 1973 oleh Aksa Mahmud.</p>\r\n\r\n<p>Pada tahun 1978, perusahaan nya mendapatkan hak eksklusif sebagai dealer resmi mobil produksi Jepang yakni Datsun untuk kawasan timur Indonesia. Pada tahun yang sama, nama perusahaan diganti menjadi PT Moneter Motor.</p>\r\n\r\n<p>Pada Oktober 1980, PT Moneter Motor mendapatkan kepercayaan dari Mitsubishi Motors menjadi sales dan distributor mobil merek Mitsubishi untuk kawasan timur Indonesia. Perusahaan ini kemudian berganti nama menjadi PT Bosowa Berlian Motor yang menjadi tonggak penting mengawali kemajuan Bosowa Corp. Nama Bosowa berasal dari singkatan nama tiga kabupaten di Sulawesi Selatan, yaitu Bone, Soppeng dan Wajo.</p>', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_perusahaan_timeline`
--

CREATE TABLE `sejarah_perusahaan_timeline` (
  `id` int NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sejarah_perusahaan_timeline`
--

INSERT INTO `sejarah_perusahaan_timeline` (`id`, `tahun`, `deskripsi`) VALUES
(1, '2018', 'alalalla'),
(2, '2019', 'alalalla'),
(3, '2020', 'alalalla'),
(4, '2021', 'alalalla'),
(5, '2022', 'alalalla'),
(6, '2023', 'alalalla'),
(7, '2024', 'alalalla');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `deskripsi` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_deskripsi` varchar(255) NOT NULL,
  `meta_sitename` varchar(255) NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `icon2` varchar(255) NOT NULL,
  `icon_white` varchar(255) NOT NULL,
  `icon2_white` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `whatsapp` varchar(25) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `deskripsi`, `title`, `meta_title`, `meta_deskripsi`, `meta_sitename`, `icon`, `icon2`, `icon_white`, `icon2_white`, `link2`, `favicon`, `whatsapp`, `linkedin`, `instagram`, `youtube`, `facebook`, `twitter`, `alamat`, `hotline`, `updated_by`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in</p><ul><li>Lorem ipsum sit dolor amet</li><li><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text</li></ul>', 'MMKSI', 'Beralih bersama kami', 'Beralih bersama kamii', 'mmksi.com', 'images/icon_website/11717084947logo-light.svg', 'images/icon_website/11722269568logo-light (1).svg', '', '', 'njnj', 'images/icon_website/21717084947logo-light.svg', '62898204044', 'https://www.com', 'https://www.com', 'https://www.com', 'https://www.com', 'https://www.com', 'Jl. Urip Sumoharjo No.266\r\nKarampuang, Kecamatan Panakkukang, Kota Makassar\r\nSulawesi Selatan 90231', 'Jl. Urip Sumoharjo No.266\r\nKarampuang, Kecamatan Panakkukang, Kota Makassar\r\nSulawesi Selatan 90231', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id`, `kategori_id`, `nama`, `harga`, `gambar`, `created_by`, `updated_by`) VALUES
(2, 2, 'Oli Motul 10-40W Edit', 'Rp 45.000', 'images/sparepart/new-mmc.png', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_kategori`
--

CREATE TABLE `sparepart_kategori` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sparepart_kategori`
--

INSERT INTO `sparepart_kategori` (`id`, `nama`, `gambar`, `created_by`, `updated_by`) VALUES
(2, 'Oli Mesin', 'images/sparepart_kategori/fuso.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart_link`
--

CREATE TABLE `sparepart_link` (
  `id` int NOT NULL,
  `sparepart_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sparepart_link`
--

INSERT INTO `sparepart_link` (`id`, `sparepart_id`, `nama`, `link`) VALUES
(14, 2, 'Tokopedia', 'httpss://ww.com'),
(15, 2, 'Lazada', 'www.alzda.om'),
(16, 2, 'Bukalapak', 'sjsj');

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `id` int NOT NULL,
  `kendaraan_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `cabang_id` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`id`, `kendaraan_id`, `nama`, `jenis_kelamin`, `no_telp`, `email`, `tanggal`, `jam`, `cabang_id`, `kota`) VALUES
(2, '6', 'bygaxinur@mailinator.com', 'Laki-Laki', '28', 'puwykam@mailinator.com', '2011-03-16', '22:18', '2', ''),
(3, 'Quia fugit et quaer', 'pucivese@mailinator.com', 'Laki-Laki', '61', 'wyjuna@mailinator.com', '2024-06-28', '01:02', 'Mitsubishi Cab. Kendari - jl. jakarta', ''),
(4, 'Quisquam ad est duis', 'mycuvapa@mailinator.com', 'Laki-Laki', '27', 'qoris@mailinator.com', '2017-10-10', '18:04', '0', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$12$G2iOCHPUZ66nl7bMNzAOD.AKiKjpW08Rde3/f1t42KPXJTvIxnAtK', 'rB89Lye8wG23FcZ8zKBjZPh9h3sdsaT4OdNCXDzinCS2zqs1QY5JWe81RuQw', '2024-05-24 02:55:04', '2024-05-24 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int NOT NULL,
  `link` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `link`) VALUES
(1, 'https://www.youtube.com/embed/egnFETk0JC4?si=4I8XYEAANpiIkywe'),
(2, 'https://www.youtube.com/embed/fJR_KmGC0Yg?si=dvnpa6Xf1e0xcWg4'),
(3, 'https://www.youtube.com/embed/BATKvswgBEQ?si=f2W4-MrDHa55qJ4G'),
(4, 'https://www.youtube.com/embed/5YPxhlmi8gw?si=wK2NHlwS0WRO0hz5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aksesoris_aftersales`
--
ALTER TABLE `aksesoris_aftersales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bodicat`
--
ALTER TABLE `bodicat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brosur`
--
ALTER TABLE `brosur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_sparepart`
--
ALTER TABLE `cms_sparepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterior_kendaraan`
--
ALTER TABLE `exterior_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interior_kendaraan`
--
ALTER TABLE `interior_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karir_apply`
--
ALTER TABLE `karir_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lineup`
--
ALTER TABLE `lineup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lineup_warna`
--
ALTER TABLE `lineup_warna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `performance_kendaraan`
--
ALTER TABLE `performance_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `safety_kendaraan`
--
ALTER TABLE `safety_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah_perusahaan`
--
ALTER TABLE `sejarah_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah_perusahaan_timeline`
--
ALTER TABLE `sejarah_perusahaan_timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart_kategori`
--
ALTER TABLE `sparepart_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sparepart_link`
--
ALTER TABLE `sparepart_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoris`
--
ALTER TABLE `aksesoris`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `aksesoris_aftersales`
--
ALTER TABLE `aksesoris_aftersales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bodicat`
--
ALTER TABLE `bodicat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brosur`
--
ALTER TABLE `brosur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cms_sparepart`
--
ALTER TABLE `cms_sparepart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exterior_kendaraan`
--
ALTER TABLE `exterior_kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interior_kendaraan`
--
ALTER TABLE `interior_kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karir_apply`
--
ALTER TABLE `karir_apply`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lineup`
--
ALTER TABLE `lineup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lineup_warna`
--
ALTER TABLE `lineup_warna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `performance_kendaraan`
--
ALTER TABLE `performance_kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `safety_kendaraan`
--
ALTER TABLE `safety_kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejarah_perusahaan`
--
ALTER TABLE `sejarah_perusahaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sejarah_perusahaan_timeline`
--
ALTER TABLE `sejarah_perusahaan_timeline`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sparepart_kategori`
--
ALTER TABLE `sparepart_kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sparepart_link`
--
ALTER TABLE `sparepart_link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
