-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2025 pada 21.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$uQ1mPwOtNp1FqPfwMWK9v.gn0DMh2.xMSSmi.tXX.Yzw6w.hiO05S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kata`
--

CREATE TABLE `kata` (
  `id` int(11) NOT NULL,
  `kata` varchar(100) NOT NULL,
  `arti` text NOT NULL,
  `contoh` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kata`
--

INSERT INTO `kata` (`id`, `kata`, `arti`, `contoh`, `created_at`) VALUES
(1, 'a', 'sebagai imbuhan (k!itika)', 'a menyatakan persona ketiga atau berpadanan dengan awalan me- pada BI: —sumpu Ia minum; —sikola i SMA ia bersekolah di SMA; 2 menjadi akhiran, berpadanan dengan arti awalan di- pada B!: kande - dimakan; aali --i toko bajuna bajunya dibeli di toko.', '2025-07-31 19:26:11'),
(2, 'a', 'sebagai bunyi', '\'a suara bayi yang baru lahir:\r\nsalaahirina mpu indamo ako -\r\nsewaktu lahirnya betul dia sudah\r\ntidak bersuara;\r\nka\'a\'a gagu: minaaka maidiidi\r\na--mo sedari kecil dia telah\r\ngagu.', '2025-07-31 19:35:38'),
(3, 'aahera', 'akhirat', 'amala malape p0-\r\nkawaaka mborosa malape I -\r\namal balk akan mendapat kediaman yang balk di akhirat', '2025-07-31 19:36:13'),
(4, 'aahini', 'akhir', 'zamani akhir za -\r\nman', '2025-07-31 19:38:02'),
(5, 'aai', 'entah', 'inda kumatana entah, saya tidak tahu;\r\npoaai berentah: kuabakiasoa\r\nketika saya tanyai, dia hanya\r\nberentah', '2025-07-31 19:38:32'),
(6, 'aakii', 'balig', 'seorang mulai akil balig (cukup umur/dewasa)', '2025-07-31 19:41:24'),
(7, 'aamani', 'aman', 'mo o lipu kasiimpo kubolia telah aman negara,\r\nbarulah saya tinggalkan', '2025-07-31 19:42:50'),
(8, 'aba', 'tanya; sapa', 'ia bertanya; abaaka menanyakan;\r\niabaakamu yang engkau tanyakan;\r\niaba-abaki yang ditanya-tanya;\r\nkaaba-aba tukang tanya;\r\noabana tanyanya; sapanya;\r\npengkaaba-aba bertanya-tanya ', '2025-07-31 19:44:12'),
(9, 'abi', 'sebagai', '1 gelar: o —na i alaala yarona\r\nkapala gelarnya di umum ialah\r\nbekas kepala 2 anggap;\r\nabia digelari;\r\npoabi-abi saling menganggap:\r\nra - wutitinai kiranya kita\r\nsaling menganggap keluarga', '2025-07-31 19:48:27'),
(10, 'acara', 'sebagai', '1 acar, n.j. makanan: -na\r\nontimu acar ketimun;\r\n2 acara: pewmo duka -\r\nmalosii i bunuana dia membuat\r\nlagi acara malam mi di rumahnya', '2025-07-31 19:49:11'),
(11, 'ada', 'pinjam', ': a- kapuluku dia\r\nmeminjam parangku;\r\nadaaka meminjamkan;\r\napaadaaka dipinjamkan: poa-poa\r\nada saling meminjam: - aka ba-\r\n/u manga saling meminjamkan\r\nbaju', '2025-07-31 19:49:41'),
(12, 'ade', 'dagu', 'o -na malape mpu\r\ndagunya bagus sekali.', '2025-07-31 20:02:30'),
(13, 'adede', 'aduh', ': - kapiina baa ku\r\naduh, sakitnya kepalaku;\r\nboli upo - peka kaakaa jangan\r\nengkau mengerang keras-keras', '2025-07-31 20:02:55'),
(14, 'adi', 'jadi', ': - tuapamo a losaana\r\njadi, bagaimana seterusnya', '2025-07-31 20:03:48'),
(15, 'adhabu', 'sebagai', '1 tuah;\r\n2 kutuk(an): boli u malanga\r\ninciamu, indaaka kanako -\r\njangan engkau nakal supaya\r\nengkau tidak terkena kutukan\r\nkoadhabu bertuah', '2025-07-31 20:04:16'),
(16, 'ae', 'kaki', ': ruambali - na mapii\r\nkedua belah kakinya sakit', '2025-07-31 20:04:33'),
(17, 'aebu', 'aib', ': ho/i u pewau giu I - aka\r\njangan engkau berbuat perbuatan\r\nyang mengaibkan', '2025-07-31 20:05:01'),
(18, 'afu', 'maaf', '(lih. ma\'afu): ka .-fiina iisao\r\nInda saopea ihilasi kemaafannya tadi tidak seberapa ikhlas;\r\nta pomaa maafuaka kita saling\r\nmemaafkan', '2025-07-31 20:06:11'),
(19, 'aga', 'agab', '; memandang dengan maksud mengajak tertawa atau menantang: boli u /w himboo\r\nitu jangan engkau memandang\r\nsaya seperti itu', '2025-07-31 20:06:54'),
(20, 'agama', 'agama', 'agama ope yingko? agama apa anda?', '2025-07-31 20:09:42'),
(21, 'ago', 'selamatkan', 'agoa ia diselamatkan: \'-j i nuncana\r\nkasukara ia diselamatkan dan\r\nkesukaran ago ago karona menyelamatkan din;\r\napoago ia minta selamat;\r\npoago-ago saling menyelamatkan;\r\nkaago hal menyelamatkan;\r\nkaago-ago terburu-buru \r\nagoago buru-buru ', '2025-07-31 20:11:41'),
(22, 'agoi', 'rampas; jambret', ': salaaka amoko bawinena bersalah karena\r\nmerampas istri orang; a-a arb/ma i limana dijanibret arloji di tangannya;\r\npoago-agoi be ramp as-rampasan', '2025-07-31 20:15:44'),
(23, 'ahadhi', 'Ahad; Minggu', ': o eo sii eona\r\n- - hari mi adalah hari Mingg', '2025-07-31 20:16:09'),
(24, 'ahali', 'ahli', 'manga ahli, para ahli', '2025-07-31 20:16:48'),
(25, 'ahama', 'bodoh', ': asala umembali mia\r\n- jangan engkau menjadi\r\norang bodoh', '2025-07-31 20:17:16'),
(26, 'ajala', 'ajal', ': ande mencuana p0 —na\r\nindapo bea mate kalau bukan\r\nal, dia belum mati; ajala werebua ajal perbuatan: o mate patobokia, o mate \'-\' mati bertikam, mati ajal perbuatan', '2025-07-31 20:17:53'),
(27, 'ajara', 'kuda', 'kabarina ajara saao, banyaknya kuda tadi', '2025-07-31 20:19:00'),
(28, 'ajima', 'azimat', ': inda pogaa te —na tidak bercerai dengan azimatnya', '2025-07-31 20:19:32'),
(29, 'ajo', 'rias; hias; dandan', ': kakesana -\r\nna alangkah cantiknya dandanannya;\r\npaajoa yang merias: incema\r\no kalambe i aroa sumau? siapa\r\nyang merias gadis yang di depan\r\nitu?\r\napaajoa. dirias: - Wa Merna\r\ndirias oleh Wa Merna', '2025-07-31 20:20:05'),
(30, 'aka', 'sebagai', 'o —na kakaknya;\r\naaka ia kakak: incia teyaku\r\nia kakak saya;\r\npoluakaa diperkakak;\r\n2 sebagai akhiran yang berarti\r\nakan: boli— biar akan (biarkan): b dengan bila mengikuti\r\nkk: kande— makan dengan:\r\ntawana kau, makan dengan\r\nsayur; c kalau sudah setelah ks:\r\nmakida— kalau sudah pandal', '2025-07-31 20:20:31'),
(31, 'akala', 'akal', ': maoge —na besar\r\nakalnya;\r\nkoakala berakal: akala madaki\r\nakal bulus', '2025-07-31 20:22:11'),
(32, 'akea', 'sebagai', 'akhiran yang memberi arti perintah untuk melakukan kata\r\ndasarnya: lingka - ! bawa\r\npergi! sumpu— minumkan!', '2025-07-31 20:23:01'),
(33, 'akeka', 'hakikat', ': pewau —na anana\r\nkae-kaepu melakukan hakikat\r\nanak bungsunya', '2025-07-31 20:23:26'),
(34, 'akoro', 'akur', ': —mo manga mereka sudah akur', '2025-07-31 20:23:43'),
(35, 'akusara', 'aksara', ': 0 buri Wolio -\r\nArabu i ranga-rangani tulisan\r\nWolio ialah aksara Arab yang\r\nditambah-tambah', '2025-07-31 20:24:03'),
(36, 'ala', 'sebagai', '1 ambil: —a (baca: alea),\r\nambil dia! —mo ambilah!\r\n—po 1 ambil dulu; 1— yang\r\ndiambil;\r\nkoalaaka, memihak; po- baku ambil;\r\npoala-ala bertukaran;\r\n2 laku: abari ka—na paraasona\r\nbanyak laku barangnya; ma\r\n- mpu andeta paraaso i wesii\r\nlaku benar kalau kita berjualan\r\ndi sini ', '2025-07-31 20:24:30'),
(37, 'alaamati', 'alamat', ': ande akomingku\r\nbiwita, - na betapogera kalau\r\nbergerak bibir kita alamat akan\r\nbertengkar; iapai - na i Jupanda?\r\ndi mana alamatflya di Ujung\r\nPandang?', '2025-07-31 20:26:22'),
(38, 'alamu', 'alam', ': - arwaha alam ar -\r\nwah; - baatini alam kebatinan', '2025-07-31 20:26:41'),
(39, 'alefu', 'ejaan untuk huruf Arab (alif)', 'dangia alefuna, ada alifnya', '2025-07-31 20:27:46'),
(40, 'alemari', 'lemari', ': ase lemari besi;\r\n- na kande saka lemari makan', '2025-07-31 20:28:10'),
(41, 'ali', 'sebagai', '1 beli: a— baju baau dia membei baju baru,;\r\nalia dibeli: baju baauna -\' i\r\ndaaoa baju barunya dibeli di\r\npasar\r\ntoali terbeli: inda - rampana\r\nkaali tidak terbeli karena maha1\r\npeali-ali belanja: bumbu i\r\ndaaoa baau belanja bumbu di\r\npasar barn; \r\n2 maali mahal; sukar: aa o\r\nmotoro i alma &amp;mai mahal\r\nyang dibelmya itu;\r\nkaali kemahalan: sii-sii abari\r\nnia mopokidee kemahalan Sekarang, banyak orang yang mengeluh; mpu o kalentu i\r\nsikolana sukar sekali pelajaran\r\ndi sekolahnya', '2025-07-31 20:29:21'),
(42, 'alo', 'embun', ': soa ko waraino o itawana tonea, tilaia eo ande o malomalo, o - saling berkilauan\r\nembun di daun keladi ditimpa\r\ncahaya matahari bila pagi had', '2025-08-01 17:24:52'),
(43, 'alusu', 'halus', ': -- mpu akomingku\r\nhalus benar dia bekerja;\r\npeka - aande u poistirika\r\nhalus-halus engkau menyetrika', '2025-08-01 17:25:56'),
(44, 'halus', 'alusu', ': -- mpu akomingku\r\nhalus benar dia bekerja;\r\npeka - aande u poistirika\r\nhalus-halus engkau menyetrika', '2025-08-01 18:10:11'),
(45, 'ama', 'bapak', ': o —na daangia i Jakarta, bapaknya masih diJakarta.\r\npinoama paman;\r\npoama berbapak', '2025-08-01 18:11:52'),
(46, 'amala', 'amal; semedi', ': kangengena syi\r\nabari mpu amala i pewauna\r\nselama mi banyak benar amal\r\nyang dibuatnya;\r\npitu malomo a - i nuncana\r\nliana hatibi Sudah tujuh malam\r\nbersemedi di gua khatib', '2025-08-01 18:15:42'),
(47, 'amara', 'marah', ': guns - iki murina\r\nguru memarahi muridnya;\r\namraaka memarahkan;\r\npekaama-amara marah-marah', '2025-08-01 18:16:04'),
(48, 'amba meamba', 'tawar', 'meamba ope yitu? menawar apa itu?', '2025-08-01 18:17:25'),
(49, 'ambala', 'permadani', 'kecil untuk tikar\r\nsembahyang', '2025-08-01 18:17:47'),
(50, 'ambara', 'ambara', '; n. barang yang\r\nberasal dari perut sejenis ikan;\r\nharum putih kekuning-kuningan;\r\nada juga yang berasal dari damar\r\nyang berwama kehitam-hitaman\r\ndibakar untuk mengasapi turnbuhan supaya berbuat lebat\r\natau subur', '2025-08-01 18:19:55'),
(51, 'ambo', 'Ambon', '(ibu kota Propinsi Maluku)', '2025-08-01 18:20:28'),
(52, 'ampa', 'ranjau', ': ata - memasang\r\nranjau; saeo-saeo apene asolo o\r\n- i taana tiap hari ia menjenguk ranjau yang dipasangnya;\r\nmatana ampa bulu yang diruncingkan khusus untuk ranjau', '2025-08-01 18:21:02'),
(53, 'ampadea', 'hasil', ': inda te —na tidak\r\nada hasilnya;\r\nkoampadea berhasil', '2025-08-01 18:23:32'),
(54, 'ampe', 'landa', ': banua i biwina tawo,\r\n- na ure rumah di pinggir\r\nlaut dilanda pasang;\r\naarnpe disapu: - incema o\r\ntaana potaro disapu oleh siapa\r\ntidak adanya judi?\r\nkaampe-ape terkatung-katung', '2025-08-01 18:24:22'),
(55, 'amponi', 'ampun', ': - aku o salakumo\r\npadana ampuni salahku yang\r\ntelah lalu;\r\ntoamponi terampuni', '2025-08-01 18:24:44'),
(56, 'ana', 'anak', '1 (ana-ana) : o mancuana\r\nsumai inda - na orang tua itu\r\ntidak ada anaknya; ana-ana mac/u anakyatim;\r\npoana (baca: poanea) dijadikannya anak;\r\n2 a n. bilangan, enam: ise, jua,\r\nta/u, uapa, lima, ana satu, dua, tiga, empat, lima, enam; b untuk\r\nbuah; nama puluh mia, enam\r\npuluh orang;\r\n3 anyam: a - langka dia menganyam keranjang; anea dianyam; talu eo a saangu lang/ca\r\ntiga hari dianyam satu keranjang', '2025-08-01 18:26:06'),
(57, 'anabati', 'serunai', 'alamea abati, ambilkan serunai', '2025-08-01 18:28:14'),
(58, 'anbia', 'para nabi', 'zamanina anbia, zaman para nabi', '2025-08-01 18:29:03'),
(59, 'anca', '1 insang; 2 angsa', ': o —na i/cane bauura insangnya ikan berbara;\r\n: pia mba o - moponganona i umaha siroo? berapa\r\nekor angsa yang berenang di\r\nsungai itu?', '2025-08-01 18:29:43'),
(60, 'ance', 'orang Cina', ': o ance ance orang\r\nCma tua: bawine i,zcia sii wnanena perempuan mi suaminya Cina tua', '2025-08-01 18:30:10'),
(61, 'anco', 'nanti', ';jangan sampai: - alingka, nanti (jangan sarnpai) ia\r\npergi;\r\nanco-anco so rong-sorong;\r\npeimintaan untuk mendapatkan\r\ntempat: kitapo sakie i bawo\r\nkita sorong-sorong sedikit ke\r\natas', '2025-08-01 18:30:31'),
(62, 'andala', 'lautan', ': - ogena I boseikina\r\nlautan besar yang dilayarinya;\r\no -na tana Jawa laut(an) Jawa', '2025-08-01 18:31:51'),
(63, 'andalo', 'janin', ': - na rusa janin\r\nrusa; ana andalo janin yang sudah berbentuk', '2025-08-01 18:32:13'),
(64, 'ande', 'kalau', ': - u bose sadhi lambako ide kalau engkau berangkat, kirimlah selalu benita', '2025-08-01 18:32:41'),
(65, 'andea', '1 sejawat; 2 sekutu', '; rekan: sa - te\r\nJoni sejawat dengan Joni;\r\n: boil u p0 - - kea\r\no lipu sii yang dipersekutukan\r\nnegeri itu', '2025-08-01 18:33:18'),
(66, 'andi', '1 adik; 2 gelar bangsawan Bugis', ': o - k rua miii,\r\nsemua bawine samia umane adikku dua orang, seorang perempuan, seorang laki-laki;\r\nmengka andi-andi paling bungsu: tuapa p0 duka incia\r\nbagaimanapun juga dia paling\r\nbungsu;', '2025-08-01 18:33:59'),
(67, 'andou', 'nama jenis ikan', 'dangia andou? adakah ikan andou?', '2025-08-01 18:36:16'),
(68, 'ane', '1 anai ;2 kalau', ': kau sii akandemea -\r\nkayu mi telah dimakan anai\r\n: - ulingka boll urnange kalau engkau pergi,jangan\r\nterlalu lama;\r\nane mboo itu kalau begitu', '2025-08-01 18:37:14'),
(69, 'anemeie', 'pemborong', '; anemer; jambata baau sii - na o Cina\r\njembatan barn mi pemborongnya Cina', '2025-08-01 18:37:36'),
(70, 'anggara', 'anggaran', ': —na saopea?\r\nBerapa anggarannya?', '2025-08-01 18:37:54'),
(71, 'anggota', 'anggota', ': - baau anggota baru', '2025-08-01 18:38:28'),
(72, 'angku', 'angkut', ': opea - mangamia\r\nsuamai? mengangkut apa orang\r\norang itu?aangkua diangkutnya saide\r\nsaide pokawaaka mapupu diangkutnya sedikit-sedikit sampai\r\nhabis;\r\npoangku saling antar (saling angkut)', '2025-08-01 18:39:17'),
(73, 'ango', 'hidung', ': 0 - na malanga\r\nhidungnya mane ung', '2025-08-01 18:43:40'),
(74, 'angu', 'buah', '(kata satuan): pia -\r\nkabarina o poo ilangka itu beberapa buah mangga di keranjang itu? sa - sebuah', '2025-08-01 18:44:03'),
(75, 'anjo', 'anjungan', ': anakoda akabalebale i - nakhoda berdiri di\r\nanjungan', '2025-08-01 18:44:23'),
(76, 'anto', 'isi', '; daging: o - na isinya;\r\ndagingnya;\r\nkoanto berisi berdaging: o karona a badannya berisi (berda -\r\nging), (gemuk);\r\npoanto berisi (penuh isi);\r\napoantoki memasukkan isi:\r\nilimu kajaganina karo memasukkan ilmu penjaga din;\r\npeantoi mengeluarkan isi (dagmg)', '2025-08-01 18:44:40'),
(77, 'ara', '1 jangan sampai; 2 andaikata; 3 arak', ': pengkaanaka\r\n- upo kawaaka papalei hatihatilah jangan sampal menemui\r\nhalangan;\r\n: - ulin.gka i kantori posu alaakaaku te suraku\r\nandaikata engkau ke kantor pos,\r\nanibilkan suratku\r\n: boliumpu - n \'agko akea jangan minum arak,\r\nitu memabukkan; arana konau\r\narak enau;', '2025-08-01 18:45:32'),
(78, 'maara', 'lapar', ': u \' aka ukande -\r\nmo kalau engkau lapar, makanlah;', '2025-08-01 18:47:22'),
(79, 'kaara', 'kelaparan', ': sii-sii abari mini o lipu i kana -\' sekarang\r\nbanyak lagi negeri yang ditimpa\r\nkelaparan', '2025-08-01 18:47:43'),
(80, 'araba\'a', 'Rabu', ': o eona - han\r\nRabu', '2025-08-01 18:48:24'),
(81, 'arabu', 'Arab', ': miana - orang Arab;\r\npogau - bahasa Arab', '2025-08-01 18:48:48'),
(82, 'arasi', 'menghendaki', ': mo—na moko\r\npewawana ofeeli mpu inda momalape menghendaki harta orang\r\nlain adalah perbuatan yang betul-betul tidak baik', '2025-08-01 18:49:05'),
(83, 'arataa', 'harta', ': abari mpu —na mia\r\nincia sumai banyak benar hartanya orang itu.', '2025-08-01 18:49:21'),
(84, 'arate maarate', 'panjang', 'maarate uka adi, panjangnya juga', '2025-08-01 18:50:22'),
(85, 'arii', 'tiang', ': - na banuana arii\r\npatawala tiang rumahnya adalah tiang segi empat', '2025-08-01 18:50:40'),
(86, 'arloji', 'jam tangan', 'saope arlojimu yitu? berapa jam tanganmu itu? (tentang harga)', '2025-08-01 18:51:57'),
(87, 'aro', 'hadap', ': a - pengkaadariana\r\ndia menghadapi pelajarannya\r\niarona yang dthadapinya;\r\npoaro-aro saling berhadapan;\r\npoarokea dihadapi;\r\naroana hadapannya; aro-aro kalape menghadapi kebaikan;', '2025-08-01 18:52:48'),
(88, 'arope', 'menuju', 'arope yapai? menuju kemana?', '2025-08-01 18:53:48'),
(89, 'aru, aru-aru', 'kolak labu', ': mameko\r\nlau-lau - i karajaa sumai terlalu manis kolak labu yang dibuatnya', '2025-08-01 18:55:24'),
(90, 'aruki', 'jejal', ': - pea balanan koli -\r\nkoli itu jejali dulu lubang biduk itu\r\nsaani-anikiino ngangamu jejali\r\nterus mulutmu (ungkapan kasar\r\nbuat orang tukang makan)', '2025-08-01 18:55:51'),
(91, 'arwaha', 'arwah', 'kamata arwaha, melihat arwah', '2025-08-01 18:56:29'),
(92, 'asa', '(kartu) as', ', n.j. bunga kartu permainan:\r\n–na sikopa asnya skop', '2025-08-01 18:57:01'),
(93, 'asala', 'jangan sampai', '; nanti; janganjangan: boll ukabale bale i matana bamba - wnandewu! jangan engkau berdiri di muka\r\npintu nanti engkau jatuh! --\r\numambela umagasiaaka piso itu\r\njangan-jangan engkau luka karena memainkan pisau ftu', '2025-08-01 18:57:21'),
(94, 'ase', '1 besi; 2 permainan', ': poluka - belanga\r\nbesi; taina ase karat besi; asease kawat;\r\n hadang-hadangan:\r\nkalapena ta - i bone sebaiknya kita berhadang-hadangan di\r\npasir', '2025-08-01 18:57:51'),
(95, 'asi', 'haru; kasih;', 'kaasi keharuan; kasihan: maoge\r\nna te mancuanana alangkah\r\nbesar kasihannya pada orang\r\ntuannya;\r\npekaasi-asi membuat dirinya supaya dikasiham', '2025-08-01 18:58:44'),
(96, 'aso', 'jual', ': sapea a—a motorona?\r\nberapa diajualkan motomya?\r\n\r\niaso, yang dijual;\r\n\r\nparaaso beijualan;\r\n\r\nparaaso-aso pura-pura jual \r\n', '2025-08-01 18:59:02'),
(97, 'asu', 'ambil', '(khusus air): a—uwe\r\ndia mengambil air', '2025-08-01 19:00:52'),
(98, 'asyura', 'hari raya Islam', 'setiap tanggal 10 Muharam', '2025-08-01 19:01:11'),
(99, 'atawa', 'atau:', 'amakida - akobongo ia pandai at au', '2025-08-01 19:01:42'),
(100, 'ate', 'bahu', 'kalagana atena, tinggi bahunya', '2025-08-01 19:02:21'),
(101, 'ati', 'pantai', ': tapana - pinggir pantai; o –na kobone maputi,\r\npantainya berpasir putih;\r\nkaatiana yang dangkalnya;\r\nmaati dangkal; sapo ati air surut', '2025-08-01 19:03:12'),
(102, 'atom', 'aturan', ': abari - kasiimpo\r\ninda toose banyak aturan barn\r\ntidak diikuti;\r\nparaatora peraturan', '2025-08-01 19:03:33'),
(103, 'atoro', 'atur', ';\r\natoroa diatur: boll mbo itu\r\njangan diatur begitu!', '2025-08-01 19:03:54'),
(104, 'atu', 'ratus', ';\r\nsaatu seratus: kilo katunbangina kulouna seratus kilo\r\ntimbangan kopranya;\r\niatu-atuna beratus-ratus', '2025-08-01 19:04:22'),
(105, 'aula', 'ya, Allah', ': - kangengena\r\nsiimpo ta powaka Ya Allah,\r\nalangkah lamanya barn kita bertemu', '2025-08-01 19:05:31'),
(106, 'aulia', 'aulia', 'orang yang suci yang\r\nditerima permintaannya oleh\r\nAllah SWT', '2025-08-01 19:05:50'),
(107, 'awaa', 'bahu', ': o - na baju jasi i sorumbana tuka maniadi amalape mpu o dietia bahu baju\r\njas yang dijahit oleh tukangjahit\r\nitu bagus benar potongannya', '2025-08-01 19:06:36'),
(108, 'auwali', 'awal', '; mula-mula: auwali kaminaana asal mulanya', '2025-08-01 19:06:51'),
(109, 'awo', 'tiri', ':ana - anak tiri;ama -\r\nbapak tin; poina - beribu\r\ntiri', '2025-08-01 19:07:09'),
(110, 'awu', 'keluar', ';\r\nawuaka keluarkan; awu-awu 1\r\nboros: lape-lapea kanguleainu,\r\nboli u baik-baik hasil keringatmu,jangan engkau boros;\r\n2 n.j. ikan', '2025-08-01 19:07:44'),
(111, 'azabu', 'azab; siksaan', ': bea penami\r\nsaro giuna - akan merasakan\r\napa yang disebut azab', '2025-08-01 19:08:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kata`
--
ALTER TABLE `kata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
