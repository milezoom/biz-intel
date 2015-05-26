-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 03:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bizintel`
--

-- --------------------------------------------------------

--
-- Table structure for table `awareness`
--

CREATE TABLE IF NOT EXISTS `awareness` (
  `nama` varchar(35) NOT NULL,
  `umur` smallint(6) NOT NULL DEFAULT '0',
  `jenis_kelamin` varchar(10) NOT NULL,
  `daerah` varchar(20) NOT NULL,
  `is_know` tinyint(1) NOT NULL,
  `awal` int(11) NOT NULL,
  `akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awareness`
--

INSERT INTO `awareness` (`nama`, `umur`, `jenis_kelamin`, `daerah`, `is_know`, `awal`, `akhir`) VALUES
('abdul latief', 22, 'laki-laki', 'bogor', 1, 0, 0),
('abdurahman faisal', 20, 'laki-laki', 'jakarta', 0, 0, 0),
('abdurrahman faisal', 19, 'laki-laki', 'bandung', 0, 0, 0),
('Abid Abyana', 34, 'laki-laki', 'bekasi', 0, 0, 0),
('abimayu mulyawan', 22, 'laki-laki', 'surabaya', 0, 0, 0),
('Achmad Asriandari', 18, 'laki-laki', 'jakarta', 0, 0, 0),
('Adeeva syakila', 19, 'perempuan', 'depok', 0, 0, 0),
('Adelia silmi kaffa', 20, 'perempuan', 'bekasi', 1, 0, 0),
('adrian tamora', 23, 'laki-laki', 'jakarta', 1, 0, 0),
('afifi asnawi', 27, 'laki-laki', 'tangerang', 1, 0, 0),
('Aggil Edwin Anantarqi', 28, 'laki-laki', 'tangerang', 0, 0, 0),
('Ahmad Maulana', 20, 'laki-laki', 'palembang', 0, 0, 0),
('ahmad rifai', 20, 'laki-laki', 'depok', 0, 0, 0),
('aina nur syifa', 26, 'perempuan', 'bogor', 1, 0, 0),
('Aldi Kusuma', 28, 'laki-laki', 'tangerang', 1, 0, 0),
('amira urwatun', 21, 'perempuan', 'Aceh', 0, 0, 0),
('Angga Bima Soeharto', 30, 'laki-laki', 'bogor', 1, 0, 0),
('Aqila Fajri', 31, 'perempuan', 'tangerang', 0, 0, 0),
('Araminta', 20, 'perempuan', 'jakarta', 0, 0, 0),
('Ardha Satrio', 19, 'laki-laki', 'bali', 0, 0, 0),
('Ariana fatin', 19, 'perempuan', 'solo', 1, 0, 0),
('Ariyadi Caroline', 18, 'laki-laki', 'bandung', 0, 0, 0),
('Aswin Ogie Prapastia', 26, 'laki-laki', 'lombok', 1, 0, 0),
('aulia rizqi', 29, 'laki-laki', 'bali', 1, 0, 0),
('Ayu sulistiorini', 24, 'perempuan', 'bogor', 1, 0, 0),
('Azka labibbah', 20, 'laki-laki', 'jakarta', 0, 0, 0),
('Bayu Chaironi', 20, 'laki-laki', 'depok', 1, 0, 0),
('Bob Fathoni', 35, 'laki-laki', 'bogor', 1, 0, 0),
('Cahyadi Usman', 25, 'laki-laki', 'palembang', 0, 0, 0),
('cut muthia', 24, 'perempuan', 'bali', 1, 0, 0),
('dania daniswari', 19, 'perempuan', 'bandung', 0, 0, 0),
('Dela Larashaty', 29, 'perempuan', 'bekasi', 0, 0, 0),
('Demi Wijaya', 19, 'laki-laki', 'bali', 0, 0, 0),
('Deristya Novitasari', 21, 'perempuan', 'depok', 0, 0, 0),
('Deristya Novitasari', 23, 'perempuan', 'depok', 0, 0, 0),
('dery purnomo', 23, 'laki-laki', 'padang', 1, 0, 0),
('Dewi sartika', 30, 'perempuan', 'medan', 1, 0, 0),
('Dika Idrus', 27, 'laki-laki', 'jakarta', 1, 0, 0),
('dina tiara', 19, 'perempuan', 'solo', 1, 0, 0),
('egi gilang', 31, 'laki-laki', 'jakarta', 1, 0, 0),
('Elsa Ramadhani', 18, 'laki-laki', 'padang', 1, 0, 0),
('Eti S', 21, 'perempuan', 'depok', 1, 0, 0),
('Eylien Saniyati', 26, 'perempuan', 'bogor', 0, 0, 0),
('Fahmi Brugman', 25, 'laki-laki', 'jakarta', 1, 0, 0),
('Fahmi Elleonora', 25, 'laki-laki', 'jakarta', 1, 0, 0),
('febby febiola', 25, 'perempuan', 'bogor', 0, 0, 0),
('ferry irawan', 22, 'laki-laki', 'jakarta', 1, 0, 0),
('Fidela Annisa', 26, 'perempuan', 'depok', 1, 0, 0),
('firman el yusra', 29, 'laki-laki', 'jakarta', 1, 0, 0),
('gerry hutabalung', 28, 'laki-laki', 'medan', 0, 0, 0),
('Gilang ramadhan', 31, 'laki-laki', 'surabaya', 0, 0, 0),
('gina permata', 27, 'perempuan', 'tangerang', 0, 0, 0),
('Hakim Junaydi', 34, 'laki-laki', 'bandung', 1, 0, 0),
('Hanako Novita', 20, 'perempuan', 'medan', 0, 0, 0),
('hanan cindy', 29, 'perempuan', 'bekasi', 1, 0, 0),
('Hardi Gilang Ramadhan', 25, 'laki-laki', 'jakarta', 0, 0, 0),
('ibnu aziz', 20, 'laki-laki', 'depok', 1, 0, 0),
('Imam Habibiansyah', 21, 'laki-laki', 'bali', 1, 0, 0),
('iman cahya', 21, 'laki-laki', 'lombok', 0, 0, 0),
('Indri Wahyuni', 27, 'perempuan', 'depok', 1, 0, 0),
('Inge Najjuba', 22, 'perempuan', 'surabaya', 1, 0, 0),
('Ira Rahmawati', 22, 'perempuan', 'tangerang', 1, 0, 0),
('Jesyca Ihatrayudha', 31, 'perempuan', 'jakarta', 1, 0, 0),
('kania afifa', 31, 'perempuan', 'tangerang', 0, 0, 0),
('karmina putri', 24, 'perempuan', 'jakarta', 0, 0, 0),
('kartika sari dewi', 35, 'perempuan', 'depok', 1, 0, 0),
('keisha permata', 19, 'perempuan', 'palembang', 0, 0, 0),
('Kemal Kurniawan', 26, 'laki-laki', 'bandung', 1, 0, 0),
('Maharani Mukaffi', 22, 'perempuan', 'padang', 0, 0, 0),
('megawati', 20, 'perempuan', 'bali', 0, 0, 0),
('Mercy Syabantika', 21, 'perempuan', 'jakarta', 1, 0, 0),
('milla kamilla', 21, 'perempuan', 'jakarta', 0, 0, 0),
('Mubarak karimallah', 26, 'laki-laki', 'solo', 0, 0, 0),
('muhammad ismail', 23, 'laki-laki', 'jakarta', 0, 0, 0),
('Mukti setya', 20, 'laki-laki', 'jogjakarta', 0, 0, 0),
('Nabil abi barizah', 23, 'laki-laki', 'jakarta', 1, 0, 0),
('Nanda Obara', 27, 'laki-laki', 'padang', 1, 0, 0),
('Natasya Natanael', 32, 'perempuan', 'jakarta', 1, 0, 0),
('nathan saragih', 23, 'laki-laki', 'lombok', 0, 0, 0),
('Novita Sari', 26, 'perempuan', 'jakarta', 0, 0, 0),
('patrecia amanda', 29, 'perempuan', 'padang', 1, 0, 0),
('Pratama Setya', 24, 'laki-laki', 'jakarta', 1, 0, 0),
('putra eka mahardika', 30, 'laki-laki', 'medan', 1, 0, 0),
('putra permana', 26, 'laki-laki', 'jogjakarta', 1, 0, 0),
('Ralissta harun', 19, 'perempuan', 'solo', 0, 0, 0),
('Rangga Pahlevi', 27, 'laki-laki', 'tangerang', 0, 0, 0),
('rendy rizki', 25, 'laki-laki', 'tangerang', 0, 0, 0),
('Reninta dariesa', 20, 'perempuan', 'lombok', 0, 0, 0),
('Richard Fadholi', 19, 'laki-laki', 'depok', 1, 0, 0),
('Ridho Rahmadi', 21, 'laki-laki', 'bekasi', 1, 0, 0),
('Rofiqotul Ratnasari', 22, 'perempuan', 'jakarta', 0, 0, 0),
('Saqina Maulana', 28, 'perempuan', 'bandung', 1, 0, 0),
('Saraya Sabrina', 32, 'perempuan', 'bogor', 1, 0, 0),
('Sari Pinem', 25, 'perempuan', 'jakarta', 0, 0, 0),
('Sigit Ibidemu', 20, 'laki-laki', 'bogor', 1, 0, 0),
('Suci Delmeizar', 20, 'perempuan', 'bekasi', 1, 0, 0),
('Syarief Sastrawan', 20, 'laki-laki', 'bekasi', 0, 0, 0),
('Thalita latif', 21, 'perempuan', 'jakarta', 1, 0, 0),
('tommy halim', 21, 'laki-laki', 'jakarta', 1, 0, 0),
('try nurhidayati', 20, 'perempuan', 'jakarta', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keuntungan`
--

CREATE TABLE IF NOT EXISTS `keuntungan` (
  `tahun` smallint(6) NOT NULL,
  `pendapatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuntungan`
--

INSERT INTO `keuntungan` (`tahun`, `pendapatan`) VALUES
(2010, 50000000),
(2011, 80000000),
(2012, 100000000),
(2013, 140000000),
(2014, 180000000),
(2015, 200000000);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE IF NOT EXISTS `performance` (
  `divisi` varchar(30) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jenis_pekerjaan` varchar(55) NOT NULL,
  `lama_kerja` smallint(6) NOT NULL DEFAULT '0',
  `performa` smallint(6) NOT NULL DEFAULT '0',
  `kepemimpinan` smallint(6) NOT NULL DEFAULT '0',
  `kedisiplinan` smallint(6) NOT NULL DEFAULT '0',
  `time_management` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`divisi`, `nama`, `jenis_pekerjaan`, `lama_kerja`, `performa`, `kepemimpinan`, `kedisiplinan`, `time_management`) VALUES
('Design', 'Bara sutiana', 'Motion Gaphic Designer', 17, 76, 65, 77, 83),
('Design', 'Devato Prahasto', 'Videographer', 10, 91, 69, 69, 81),
('Design', 'Dian Diah Erditya', 'UX Designer', 9, 72, 79, 81, 83),
('Design', 'Fahrian Gusti', 'Search Engine Optimization (SEO) Specialist', 15, 77, 61, 90, 81),
('Design', 'Frisca Andrawida', 'Graphic Designer', 8, 79, 70, 85, 79),
('Design', 'Rahman Sunanto', 'UI Designer', 13, 81, 69, 84, 88),
('Design', 'Tifany Liandra Elvira', 'Ilustrator', 7, 63, 69, 85, 78),
('Engineer', 'Emir Verev', 'Test Engineer', 3, 62, 79, 85, 75),
('Engineer', 'Haikal Omar Purwahyuningrum', 'System Administrator', 14, 63, 66, 84, 69),
('Engineer', 'Hani Maharani', 'Software Engineer', 8, 65, 76, 81, 61),
('Engineer', 'Mega Mawaldi', 'Data Engineer', 5, 75, 84, 91, 78),
('Engineer', 'Risma Kahfi', 'Release Engineer', 12, 83, 72, 60, 70),
('Engineer', 'Ruthcharuni Amanda', 'IT Security Analyst', 6, 65, 87, 69, 76),
('Human Resource', 'Edwin Herdani', 'HR Generalist Compensation & Benefit Specialist', 8, 82, 78, 79, 82),
('Human Resource', 'Ferhat Sumandi Sucipto', 'Operational Custome Care Specialist', 4, 81, 67, 69, 86),
('Internet Marketing', 'Adisti Zakia', 'Search Engine Marketing (SEM) Specialist', 12, 69, 59, 79, 79),
('Internet Marketing', 'Cakra Abelardo', 'Data Scientist', 10, 83, 74, 79, 68),
('Internet Marketing', 'Surya Subekti', 'Public Relations', 13, 71, 68, 85, 78),
('Marketing', 'Ari Yunika', 'HR Recuitment Specialist', 13, 81, 76, 70, 90),
('Marketing', 'Deka Kurniansyah', 'Marketing Communications', 8, 69, 76, 83, 76),
('Marketing', 'Jeremiah Sharifa', 'Business Merchant Development', 14, 84, 79, 70, 83),
('Operational Team', 'Aldi Natanael', 'Senior Business Development', 16, 78, 68, 72, 69),
('Operational Team', 'Mirza Farandy', 'Operational Transaction Specialist', 11, 76, 68, 79, 85),
('Others', 'Fika Viena', 'Fraud Prevention Specialist', 7, 76, 68, 90, 81),
('Others', 'Indah Zahra', 'Legal', 5, 79, 85, 89, 75),
('Others', 'Ismiranti Sukosulistiowani', 'Senior Accounting & Finance', 15, 91, 78, 83, 76),
('Others', 'Khansa Alim', 'Senior Internal Auditor Specialist', 13, 75, 72, 82, 89),
('Technical Infrastructure', 'Bimo Melinda', 'Database Administrator', 6, 73, 70, 84, 81),
('Technical Infrastructure', 'Fildzah Pinkanatalini', 'Network Engineer ', 16, 76, 84, 61, 76),
('Technical Infrastructure', 'fulda Azzad', 'UI Engineer', 12, 69, 67, 87, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awareness`
--
ALTER TABLE `awareness`
 ADD PRIMARY KEY (`nama`,`umur`,`daerah`);

--
-- Indexes for table `keuntungan`
--
ALTER TABLE `keuntungan`
 ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
 ADD PRIMARY KEY (`divisi`,`nama`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
