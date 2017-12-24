--
-- Database: `crawler`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL auto_increment,
  `url_img` varchar(100) NOT NULL,
  `nama_barang` varchar(1000) NOT NULL,
  `harga` varchar(1000) NOT NULL,
  `url_site` varchar(1000) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `kategori` varchar(1000) NOT NULL,
   PRIMARY KEY  (`id_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL auto_increment,
  `feedback_product` varchar(1000) NOT NULL,
  `id_barang` varchar(1000) NOT NULL,
   PRIMARY KEY  (`id_feedback`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

