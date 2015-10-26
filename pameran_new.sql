-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2015 at 08:18 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pameran_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `ID` int(10) NOT NULL,
  `PIC` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `wkt` time NOT NULL,
  `benua` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `progress` varchar(50) NOT NULL DEFAULT 'Unprocessed',
  `nama_file_card` varchar(200) NOT NULL,
  `ukuran_file_card` int(10) NOT NULL,
  `direktori_card` text NOT NULL,
  `nama_file_buyer` varchar(200) NOT NULL,
  `ukuran_file_buyer` int(10) NOT NULL,
  `direktori_buyer` text NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `trader` varchar(10) NOT NULL DEFAULT 'No',
  `own` varchar(10) NOT NULL DEFAULT 'No',
  `middleman` varchar(10) NOT NULL DEFAULT 'No',
  `have_ownbrand` varchar(10) NOT NULL DEFAULT 'No',
  `import_othercountry` varchar(10) NOT NULL DEFAULT 'No',
  `indonesia_biscuit` varchar(10) NOT NULL DEFAULT 'No',
  `never` varchar(10) NOT NULL DEFAULT 'No',
  `discussion` varchar(30) NOT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `others_brief` varchar(300) NOT NULL,
  `packing1` varchar(100) NOT NULL,
  `packing2` varchar(100) NOT NULL,
  `packing3` varchar(100) NOT NULL,
  `biscuit_type1` varchar(100) NOT NULL,
  `biscuit_type2` varchar(100) NOT NULL,
  `biscuit_type3` varchar(100) NOT NULL,
  `biscuit_type4` varchar(100) NOT NULL,
  `biscuit_type5` varchar(100) NOT NULL,
  `biscuit_type6` varchar(100) NOT NULL,
  `price_list` varchar(10) NOT NULL DEFAULT 'No',
  `factory_visit` varchar(10) NOT NULL DEFAULT 'No',
  `best_price` varchar(10) NOT NULL DEFAULT 'No',
  `sample` varchar(10) NOT NULL DEFAULT 'No',
  `others` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`ID`, `PIC`, `tgl`, `wkt`, `benua`, `negara`, `company`, `gender`, `buyer`, `email`, `progress`, `nama_file_card`, `ukuran_file_card`, `direktori_card`, `nama_file_buyer`, `ukuran_file_buyer`, `direktori_buyer`, `status`, `trader`, `own`, `middleman`, `have_ownbrand`, `import_othercountry`, `indonesia_biscuit`, `never`, `discussion`, `rating`, `others_brief`, `packing1`, `packing2`, `packing3`, `biscuit_type1`, `biscuit_type2`, `biscuit_type3`, `biscuit_type4`, `biscuit_type5`, `biscuit_type6`, `price_list`, `factory_visit`, `best_price`, `sample`, `others`) VALUES
(12, 'septiyo', '2015-09-28', '15:00:53', 'Asia', 'AZERBAIJAN', 'ENTAHLAH CORP', 'Mr', 'OK lah', 'septiyou@gmail.com', 'Processed', '2013-ferrari-f12-berlinetta-lead.jpg', 44964, 'cardname/2013-ferrari-f12-berlinetta-lead.jpg', 'ferrari-f12-berlinetta-spia-by-dmc-photo-gallery_9.jpg', 336588, 'buyer/ferrari-f12-berlinetta-spia-by-dmc-photo-gallery_9.jpg', NULL, 'Ya', '', 'Ya', 'No', 'Ya', 'Ya', '', 'DISCUSSION', '3.5', '', 'Family', 'Box', 'Pcp', 'Crackers', 'Wirecut', 'Cookies', 'Waferstick', 'Wafer', '', 'Ya', 'Ya', 'Ya', 'Ya', 'entahlah ini keterangan'),
(13, 'septiyo', '2015-09-28', '15:03:48', 'Asia', 'PAKISTAN', 'Entah CORP', 'Mrs', 'Aisyah', 'ada@asdad.com', 'Unprocessed', 'Maserati_Gran_Turismo_V8.jpg', 1841831, 'cardname/Maserati_Gran_Turismo_V8.jpg', 'Maserati-GranTurismo -Front-.jpg', 47918, 'buyer/Maserati-GranTurismo -Front-.jpg', NULL, 'Ya', '', 'Ya', 'No', 'Ya', 'Ya', '', 'NODISCUSSION', '4.5', '', 'Pcp', 'Family', '', 'Cookies', 'Waferstick', '', '', '', '', '', 'Ya', '', 'Ya', ''),
(14, 'septiyo', '2015-09-29', '07:42:33', 'Asia', 'MYANMAR', 'Pok Coy corp', 'Mr', 'Pok coy', 'septiyou@gmail.com', 'Unprocessed', 'dymatize_amino_500.jpg', 2496, 'cardname/dymatize_amino_500.jpg', 'unnamed (4).jpg', 30674, 'buyer/unnamed (4).jpg', NULL, 'Ya', 'Ya', '', 'No', 'Ya', 'Ya', '', 'DISCUSSION', '4.5', '', 'Family', 'Pcp', 'Box', 'Hardough', 'Crackers', 'Waferstick', '', '', '', 'Ya', 'Ya', 'Ya', '', 'Entahlah'),
(15, 'septiyo', '2015-09-29', '08:56:10', 'Asia', 'AFGHANISTAN', 'ENTAHA CORP', 'Mr', 'entahlah saja', 'asdas@asdasdad', 'Unprocessed', '2005-nopi-sony-car2.jpg', 249742, 'cardname/2005-nopi-sony-car2.jpg', '3159371518_a990218644.jpg', 182292, 'buyer/3159371518_a990218644.jpg', NULL, 'Ya', 'Ya', 'Ya', 'No', 'Ya', 'Ya', 'Ya', 'DISCUSSION', '', '', 'Pcp', 'Family', 'Box', 'Hardough', 'Crackers', 'Wirecut', 'Cookies', 'Waferstick', 'Wafer', 'Ya', 'Ya', 'Ya', 'Ya', 'asdasdasda'),
(16, 'septiyo', '2015-09-29', '09:02:06', 'Europe', 'AUSTRIA', 'asdasd', 'Mr', 'asdasdasda', 'asdas@asdasd', 'Unprocessed', '', 0, 'cardname/', 'jootix.ir--3811251146.jpg', 1168743, 'buyer/jootix.ir--3811251146.jpg', NULL, '', 'Ya', '', 'No', 'Ya', 'Ya', 'Ya', 'NODISCUSSION', '', '', 'Family', 'Box', '', 'Cookies', 'Wirecut', 'Crackers', 'Waferstick', 'Hardough', '', 'Ya', 'Ya', 'Ya', '', ''),
(17, 'septiyo', '2015-09-29', '09:23:49', 'Asia', 'BANGLADESH', 'JUJU Corp', 'Mr', 'jukir', 'adasd@asdad', 'Unprocessed', '2012_koenigsegg_agera-wide.jpg', 283343, 'cardname/2012_koenigsegg_agera-wide.jpg', 'ccx-07.jpg', 57596, 'buyer/ccx-07.jpg', NULL, 'Ya', 'Ya', 'Ya', 'No', 'Ya', 'Ya', 'Ya', 'DISCUSSION', '3.5', '', 'Pcp', 'Family', 'Box', 'Cookies', 'Wirecut', 'Crackers', '', '', '', '', 'Ya', 'Ya', 'Ya', 'asdasda'),
(18, 'septiyo', '2015-09-29', '09:37:19', 'Asia', 'AFGHANISTAN', 'asdasdasd', 'Mrs', 'asdasda', 'asdasd@adasdasd', 'Unprocessed', 'ccx-07.jpg', 57596, 'cardname/ccx-07.jpg', 'trevita.jpg', 62048, 'buyer/trevita.jpg', NULL, 'Ya', 'Ya', 'Ya', 'No', '', 'Ya', 'Ya', 'DISCUSSION', '2.5', '', 'Pcp', 'Family', 'Box', 'Wirecut', 'Cookies', '', '', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'asdasdasd'),
(19, 'septiyo', '2015-09-29', '09:45:52', 'Africa', 'ZIMBABWE', 'asdasdasd', 'Mrs', 'asdasd', 'asdasd@asdasda', 'Unprocessed', 'ccx-07.jpg', 57596, 'cardname/ccx-07.jpg', 'ccxr-special-edition.jpg', 37935, 'buyer/ccxr-special-edition.jpg', NULL, '', 'Ya', 'Ya', 'No', '', 'Ya', 'Ya', 'NODISCUSSION', '4.5', '', 'Family', 'Box', 'Pcp', 'Hardough', 'Cookies', 'Wirecut', 'Crackers', '', '', '', 'Ya', 'Ya', 'Ya', 'asdasda'),
(20, 'septiyo', '2015-09-29', '09:51:46', '', 'asdasd@asdasda', 'asdasd', 'Mr', 'asdad', 'asdasdas@asdasdad', 'Unprocessed', 'astonmartin.jpg', 37403, 'cardname/astonmartin.jpg', 'Ferrari 699 GTB.jpg', 397697, 'buyer/Ferrari 699 GTB.jpg', NULL, 'Ya', 'Ya', 'Ya', 'No', 'Ya', '', '', 'DISCUSSION', '1.5', '', 'Pcp', 'Family', 'Box', 'Hardough', 'Wirecut', 'Cookies', 'Crackers', 'Waferstick', 'Wafer', 'Ya', 'Ya', 'Ya', 'Ya', 'asdasdad'),
(21, 'septiyo', '2015-09-29', '09:53:18', 'Asia', 'UNITED ARAB EMIRATES', 'dasda', 'Mr', 'asdas', 'sdasd@adasda', 'Unprocessed', 'Ferrari 699 GTB.jpg', 397697, 'cardname/Ferrari 699 GTB.jpg', 'statement_bank.jpg', 61992, 'buyer/statement_bank.jpg', NULL, 'Ya', 'Ya', '', 'No', 'Ya', 'Ya', 'Ya', 'NODISCUSSION', '', '', 'Pcp', 'Family', 'Box', 'Cookies', 'Crackers', 'Waferstick', 'Hardough', '', '', 'Ya', '', 'Ya', '', 'adasdad'),
(22, 'septiyo', '2015-09-29', '09:54:48', 'Oceania', 'AMERICAN SAMOA', 'asdasd', 'Mrs', 'asdad', 'asdas@asdasda', 'Unprocessed', 'astonmartin.jpg', 37403, 'cardname/astonmartin.jpg', 'statement_bank.jpg', 61992, 'buyer/statement_bank.jpg', NULL, 'Ya', '', '', 'No', 'Ya', '', 'Ya', 'NODISCUSSION', '', '', 'Family', 'Box', '', 'Cookies', 'Wirecut', 'Crackers', 'Hardough', '', '', '', 'Ya', 'Ya', '', 'asdasdad'),
(23, 'septiyo', '2015-09-29', '09:57:01', 'Africa', 'ANGOLA', 'dasd', 'Mrs', 'asdad', 'adadas@asdasdas', 'Unprocessed', 'S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 895061, 'cardname/S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 'Maserati_Gran_Turismo_MC_Stradale_21_inch_wheels.jpg', 59557, 'buyer/Maserati_Gran_Turismo_MC_Stradale_21_inch_wheels.jpg', NULL, '', 'Ya', 'Ya', 'No', 'Ya', '', '', 'NODISCUSSION', '2', '', 'Pcp', 'Family', 'Box', 'Cookies', 'Wirecut', '', '', '', '', '', 'Ya', 'Ya', '', ''),
(24, 'septiyo', '2015-09-29', '10:15:53', 'North America', 'CANADA', 'asdasd', 'Mrs', 'asdasd', 'asdasdas@asdasdad', 'Unprocessed', 'Maserati_Gran_Turismo_V8.jpg', 1841831, 'cardname/Maserati_Gran_Turismo_V8.jpg', 'S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 895061, 'buyer/S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', NULL, '', 'Ya', 'Ya', 'No', 'Ya', 'Ya', '', 'NODISCUSSION', '3.5', '', 'Family', 'Box', '', 'Wirecut', 'Crackers', 'Waferstick', 'Cookies', '', '', 'Ya', 'Ya', 'Ya', '', 'asdasda'),
(25, 'septiyo', '2015-09-29', '10:16:39', 'Oceania', 'AMERICAN SAMOA', 'asdad', '', 'asdasd', 'adadas@asdasdas', 'Unprocessed', 'S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 895061, 'cardname/S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 'granturismo_03.jpg', 68784, 'buyer/granturismo_03.jpg', NULL, '', 'Ya', '', 'No', 'Ya', '', '', 'DISCUSSION', '5', '', 'Family', '', '', 'Cookies', 'Wirecut', 'Crackers', 'Waferstick', 'Hardough', '', '', 'Ya', '', '', 'asdad'),
(26, 'septiyo', '2015-09-29', '10:20:20', 'Africa', 'ZIMBABWE', 'jiko', 'Mr', '$message', 'asdasd@asdasda', 'Unprocessed', 'Maserati-GranTurismo-MC-Trofeo-2012.jpg', 212518, 'cardname/Maserati-GranTurismo-MC-Trofeo-2012.jpg', '35-2013-maserati-granturismo-sport-fd.jpg', 274671, 'buyer/35-2013-maserati-granturismo-sport-fd.jpg', NULL, '', 'Ya', '', 'No', 'Ya', 'Ya', 'Ya', 'NODISCUSSION', '5', '', 'Pcp', 'Family', 'Box', 'Hardough', 'Cookies', 'Wirecut', 'Crackers', 'Waferstick', '', 'Ya', 'Ya', 'Ya', '', 'asdasdad'),
(27, 'septiyo', '2015-09-29', '10:23:14', '', 'asdasd', 'asdasd', 'Mrs', 'asdadad', 'asdasdas@asdasdad', 'Unprocessed', 'granturismo_03.jpg', 68784, 'cardname/granturismo_03.jpg', 'Maserati_Gran_Turismo_MC_Stradale_21_inch_wheels.jpg', 59557, 'buyer/Maserati_Gran_Turismo_MC_Stradale_21_inch_wheels.jpg', NULL, 'Ya', 'Ya', '', 'No', '', 'Ya', '', 'NODISCUSSION', '4', '', 'Family', 'Box', '', 'Cookies', 'Hardough', '', '', '', '', 'Ya', 'Ya', 'Ya', '', 'asdada'),
(28, 'septiyo', '2015-09-29', '10:39:31', '', 'aasdasda', 'asdasd', 'Mr', 'asdad', '', 'Unprocessed', 'S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 895061, 'cardname/S0-Maserati-GranTurismo-S-2008-photo88616-63163.jpg', 'Maserati_Gran_Turismo_MC_Stradale_21_inch_wheels.jpg', 59557, 'buyer/Maserati_Gran_Turismo_MC_Stradale_21_inch_wheels.jpg', NULL, 'Ya', 'Ya', '', 'No', '', 'Ya', 'Ya', 'NODISCUSSION', '', '', 'Box', 'Family', '', 'Cookies', 'Wirecut', 'Crackers', '', '', '', '', 'Ya', 'Ya', '', 'adada'),
(29, 'septiyo', '2015-09-29', '10:43:02', 'Europe', 'ALAND ISLANDS', 'asdasd', 'Mr', 'asdad', 'asdasd@asdasda', 'Unprocessed', '4-Lamborghini-Ankonian-jpg-080446-jpg_054826.jpg', 28535, 'cardname/4-Lamborghini-Ankonian-jpg-080446-jpg_054826.jpg', 'Lamborghini-Reventon-08.jpg', 33466, 'buyer/Lamborghini-Reventon-08.jpg', NULL, 'Ya', '', '', 'No', 'Ya', '', '', 'NODISCUSSION', '2', '', 'Pcp', '', '', 'Hardough', 'Cookies', '', '', '', '', '', 'Ya', '', '', 'asdad'),
(30, 'septiyo', '2015-09-29', '10:52:03', 'Africa', 'ANGOLA', 'asdasda', 'Mr', 'asdasda', 'asdasda@asdasda', 'Unprocessed', 'Lamborghini-Aventador-626x382.jpg', 48787, 'cardname/Lamborghini-Aventador-626x382.jpg', 'Lamborghini-Aventador-626x382.jpg', 48787, 'buyer/Lamborghini-Aventador-626x382.jpg', NULL, '', 'Ya', 'Ya', 'No', 'Ya', 'Ya', '', 'NODISCUSSION', '3.5', '', 'Family', 'Pcp', '', 'Cookies', 'Wirecut', 'Crackers', '', '', '', 'Ya', 'Ya', 'Ya', '', 'asdad'),
(31, 'septiyo', '2015-09-29', '10:53:55', 'Asia', 'AZERBAIJAN', 'sasdas', 'Mr', 'asdad', 'asasdas@asdasd', 'Unprocessed', 'How-many-likes-for-Lamborghini-Aventador-LP700-4..jpg', 88021, 'cardname/How-many-likes-for-Lamborghini-Aventador-LP700-4..jpg', 'lamborghinimadura02.jpg', 77324, 'buyer/lamborghinimadura02.jpg', NULL, 'Ya', 'Ya', 'Ya', 'No', 'Ya', 'Ya', '', 'DISCUSSION', '3.5', '', 'Pcp', 'Family', 'Box', 'Cookies', 'Wirecut', 'Crackers', '', '', '', 'Ya', 'Ya', 'Ya', '', 'asda'),
(32, 'septiyo', '2015-09-29', '10:54:59', 'Asia', 'ARMENIA', 'asdad', 'Mr', 'asdada', 'asdasd@asdasda', 'Unprocessed', '3dnaturewallpapers.jpg', 663353, 'cardname/3dnaturewallpapers.jpg', '1_Gunung_Meletus_01.jpg', 103495, 'buyer/1_Gunung_Meletus_01.jpg', NULL, '', 'Ya', 'Ya', 'No', 'Ya', 'Ya', 'Ya', 'NODISCUSSION', '4', '', 'Box', 'Pcp', '', 'Wirecut', 'Crackers', 'Waferstick', '', '', '', 'Ya', 'Ya', 'Ya', '', 'asdadad'),
(33, 'septiyo', '2015-09-29', '11:08:28', 'North America', 'ANGUILLA', 'asdad', 'Mr', 'asdad', 'asdasd@asdasda', 'Unprocessed', '4-Lamborghini-Ankonian-jpg-080446-jpg_054826.jpg', 28535, 'cardname/4-Lamborghini-Ankonian-jpg-080446-jpg_054826.jpg', 'How-many-likes-for-Lamborghini-Aventador-LP700-4..jpg', 88021, 'buyer/How-many-likes-for-Lamborghini-Aventador-LP700-4..jpg', NULL, 'Ya', 'Ya', '', 'No', 'Ya', 'Ya', '', 'NODISCUSSION', '2.5', '', 'Family', 'Box', '', 'Hardough', 'Cookies', '', '', '', '', 'Ya', 'Ya', '', '', 'asdad'),
(34, 'septiyo', '2015-09-29', '11:11:10', '', 'aasdasda', 'asdad', 'Mrs', 'asdada', 'asdasd@asdasda', 'Unprocessed', 'lamborghinimadura02.jpg', 77324, 'cardname/lamborghinimadura02.jpg', 'Lamborghini-Aventador-626x382.jpg', 48787, 'buyer/Lamborghini-Aventador-626x382.jpg', NULL, '', 'Ya', 'Ya', 'No', '', '', 'Ya', 'NODISCUSSION', '', '', 'Box', 'Family', '', 'Cookies', 'Hardough', '', '', '', '', 'Ya', 'Ya', '', '', 'asdad'),
(35, 'septiyo', '2015-09-29', '11:16:49', 'Europe', '', '', '', '', '', 'Unprocessed', '', 0, 'cardname/', '', 0, 'buyer/', NULL, '', '', '', 'No', '', '', '', 'DISCUSSION', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'septiyo', '2015-09-29', '11:28:40', 'Asia', 'AZERBAIJAN', 'asdasda', 'Mr', 'dasdada', 'sdasd@adasda', 'Unprocessed', '01a (1).jpg', 173195, 'cardname/01a (1).jpg', '01a (2).jpg', 194994, 'buyer/01a (2).jpg', NULL, '', 'Ya', 'Ya', 'No', 'Ya', 'Ya', '', 'DISCUSSION', '2.5', '', 'Family', 'Box', 'Pcp', 'Hardough', 'Cookies', 'Wirecut', '', '', '', 'Ya', 'Ya', 'Ya', '', 'asdadad'),
(37, 'septiyo', '2015-09-29', '11:30:41', 'South America', 'COLOMBIA', 'asdasd', 'Mrs', 'asdada', 'asdasda@asdada', 'Unprocessed', 'abyss-charming-wallpaper-abyss-nature-wallpaper-hd.jpg', 4876599, 'cardname/abyss-charming-wallpaper-abyss-nature-wallpaper-hd.jpg', '', 0, 'buyer/', NULL, '', 'Ya', 'Ya', 'No', 'Ya', 'Ya', '', 'NODISCUSSION', '1.5', '', 'Family', 'Pcp', 'Box', 'Hardough', 'Cookies', 'Crackers', 'Wirecut', 'Waferstick', '', 'Ya', 'Ya', 'Ya', '', 'asdasda');

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE IF NOT EXISTS `continents` (
  `code` char(2) NOT NULL COMMENT 'Continent code',
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`code`, `name`) VALUES
('AF', 'Africa'),
('AN', 'Antarctica'),
('AS', 'Asia'),
('EU', 'Europe'),
('NA', 'North America'),
('OC', 'Oceania'),
('SA', 'South America');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `code` char(2) NOT NULL COMMENT 'Two-letter country code (ISO 3166-1 alpha-2)',
  `name` varchar(255) NOT NULL COMMENT 'English country name',
  `full_name` varchar(255) NOT NULL COMMENT 'Full English country name',
  `iso3` char(3) NOT NULL COMMENT 'Three-letter country code (ISO 3166-1 alpha-3)',
  `number` smallint(3) unsigned zerofill NOT NULL COMMENT 'Three-digit country number (ISO 3166-1 numeric)',
  `continent_code` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`code`, `name`, `full_name`, `iso3`, `number`, `continent_code`) VALUES
('AD', 'Andorra', 'Principality of Andorra', 'AND', 020, 'EU'),
('AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', 784, 'AS'),
('AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', 004, 'AS'),
('AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', 028, 'NA'),
('AI', 'Anguilla', 'Anguilla', 'AIA', 660, 'NA'),
('AL', 'Albania', 'Republic of Albania', 'ALB', 008, 'EU'),
('AM', 'Armenia', 'Republic of Armenia', 'ARM', 051, 'AS'),
('AO', 'Angola', 'Republic of Angola', 'AGO', 024, 'AF'),
('AQ', 'Antarctica', 'Antarctica (the territory South of 60 deg S)', 'ATA', 010, 'AN'),
('AR', 'Argentina', 'Argentine Republic', 'ARG', 032, 'SA'),
('AS', 'American Samoa', 'American Samoa', 'ASM', 016, 'OC'),
('AT', 'Austria', 'Republic of Austria', 'AUT', 040, 'EU'),
('AU', 'Australia', 'Commonwealth of Australia', 'AUS', 036, 'OC'),
('AW', 'Aruba', 'Aruba', 'ABW', 533, 'NA'),
('AX', 'Aland Islands', 'Åland Islands', 'ALA', 248, 'EU'),
('AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', 031, 'AS'),
('BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', 070, 'EU'),
('BB', 'Barbados', 'Barbados', 'BRB', 052, 'NA'),
('BD', 'Bangladesh', 'People''s Republic of Bangladesh', 'BGD', 050, 'AS'),
('BE', 'Belgium', 'Kingdom of Belgium', 'BEL', 056, 'EU'),
('BF', 'Burkina Faso', 'Burkina Faso', 'BFA', 854, 'AF'),
('BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', 100, 'EU'),
('BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', 048, 'AS'),
('BI', 'Burundi', 'Republic of Burundi', 'BDI', 108, 'AF'),
('BJ', 'Benin', 'Republic of Benin', 'BEN', 204, 'AF'),
('BL', 'Saint Barthelemy', 'Saint Barthélemy', 'BLM', 652, 'NA'),
('BM', 'Bermuda', 'Bermuda', 'BMU', 060, 'NA'),
('BN', 'Brunei Darussalam', 'Brunei Darussalam', 'BRN', 096, 'AS'),
('BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', 068, 'SA'),
('BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', 535, 'NA'),
('BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', 076, 'SA'),
('BS', 'Bahamas', 'Commonwealth of the Bahamas', 'BHS', 044, 'NA'),
('BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', 064, 'AS'),
('BV', 'Bouvet Island (Bouvetoya)', 'Bouvet Island (Bouvetoya)', 'BVT', 074, 'AN'),
('BW', 'Botswana', 'Republic of Botswana', 'BWA', 072, 'AF'),
('BY', 'Belarus', 'Republic of Belarus', 'BLR', 112, 'EU'),
('BZ', 'Belize', 'Belize', 'BLZ', 084, 'NA'),
('CA', 'Canada', 'Canada', 'CAN', 124, 'NA'),
('CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', 166, 'AS'),
('CD', 'Congo', 'Democratic Republic of the Congo', 'COD', 180, 'AF'),
('CF', 'Central African Republic', 'Central African Republic', 'CAF', 140, 'AF'),
('CG', 'Congo', 'Republic of the Congo', 'COG', 178, 'AF'),
('CH', 'Switzerland', 'Swiss Confederation', 'CHE', 756, 'EU'),
('CI', 'Cote d''Ivoire', 'Republic of Cote d''Ivoire', 'CIV', 384, 'AF'),
('CK', 'Cook Islands', 'Cook Islands', 'COK', 184, 'OC'),
('CL', 'Chile', 'Republic of Chile', 'CHL', 152, 'SA'),
('CM', 'Cameroon', 'Republic of Cameroon', 'CMR', 120, 'AF'),
('CN', 'China', 'People''s Republic of China', 'CHN', 156, 'AS'),
('CO', 'Colombia', 'Republic of Colombia', 'COL', 170, 'SA'),
('CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', 188, 'NA'),
('CU', 'Cuba', 'Republic of Cuba', 'CUB', 192, 'NA'),
('CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', 132, 'AF'),
('CW', 'Curacao', 'Curaçao', 'CUW', 531, 'NA'),
('CX', 'Christmas Island', 'Christmas Island', 'CXR', 162, 'AS'),
('CY', 'Cyprus', 'Republic of Cyprus', 'CYP', 196, 'AS'),
('CZ', 'Czech Republic', 'Czech Republic', 'CZE', 203, 'EU'),
('DE', 'Germany', 'Federal Republic of Germany', 'DEU', 276, 'EU'),
('DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', 262, 'AF'),
('DK', 'Denmark', 'Kingdom of Denmark', 'DNK', 208, 'EU'),
('DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', 212, 'NA'),
('DO', 'Dominican Republic', 'Dominican Republic', 'DOM', 214, 'NA'),
('DZ', 'Algeria', 'People''s Democratic Republic of Algeria', 'DZA', 012, 'AF'),
('EC', 'Ecuador', 'Republic of Ecuador', 'ECU', 218, 'SA'),
('EE', 'Estonia', 'Republic of Estonia', 'EST', 233, 'EU'),
('EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', 818, 'AF'),
('EH', 'Western Sahara', 'Western Sahara', 'ESH', 732, 'AF'),
('ER', 'Eritrea', 'State of Eritrea', 'ERI', 232, 'AF'),
('ES', 'Spain', 'Kingdom of Spain', 'ESP', 724, 'EU'),
('ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', 231, 'AF'),
('FI', 'Finland', 'Republic of Finland', 'FIN', 246, 'EU'),
('FJ', 'Fiji', 'Republic of Fiji', 'FJI', 242, 'OC'),
('FK', 'Falkland Islands (Malvinas)', 'Falkland Islands (Malvinas)', 'FLK', 238, 'SA'),
('FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', 583, 'OC'),
('FO', 'Faroe Islands', 'Faroe Islands', 'FRO', 234, 'EU'),
('FR', 'France', 'French Republic', 'FRA', 250, 'EU'),
('GA', 'Gabon', 'Gabonese Republic', 'GAB', 266, 'AF'),
('GB', 'United Kingdom of Great Britain & Northern Ireland', 'United Kingdom of Great Britain & Northern Ireland', 'GBR', 826, 'EU'),
('GD', 'Grenada', 'Grenada', 'GRD', 308, 'NA'),
('GE', 'Georgia', 'Georgia', 'GEO', 268, 'AS'),
('GF', 'French Guiana', 'French Guiana', 'GUF', 254, 'SA'),
('GG', 'Guernsey', 'Bailiwick of Guernsey', 'GGY', 831, 'EU'),
('GH', 'Ghana', 'Republic of Ghana', 'GHA', 288, 'AF'),
('GI', 'Gibraltar', 'Gibraltar', 'GIB', 292, 'EU'),
('GL', 'Greenland', 'Greenland', 'GRL', 304, 'NA'),
('GM', 'Gambia', 'Republic of the Gambia', 'GMB', 270, 'AF'),
('GN', 'Guinea', 'Republic of Guinea', 'GIN', 324, 'AF'),
('GP', 'Guadeloupe', 'Guadeloupe', 'GLP', 312, 'NA'),
('GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', 226, 'AF'),
('GR', 'Greece', 'Hellenic Republic Greece', 'GRC', 300, 'EU'),
('GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', 239, 'AN'),
('GT', 'Guatemala', 'Republic of Guatemala', 'GTM', 320, 'NA'),
('GU', 'Guam', 'Guam', 'GUM', 316, 'OC'),
('GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', 624, 'AF'),
('GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', 328, 'SA'),
('HK', 'Hong Kong', 'Hong Kong Special Administrative Region of China', 'HKG', 344, 'AS'),
('HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', 334, 'AN'),
('HN', 'Honduras', 'Republic of Honduras', 'HND', 340, 'NA'),
('HR', 'Croatia', 'Republic of Croatia', 'HRV', 191, 'EU'),
('HT', 'Haiti', 'Republic of Haiti', 'HTI', 332, 'NA'),
('HU', 'Hungary', 'Hungary', 'HUN', 348, 'EU'),
('ID', 'Indonesia', 'Republic of Indonesia', 'IDN', 360, 'AS'),
('IE', 'Ireland', 'Ireland', 'IRL', 372, 'EU'),
('IL', 'Israel', 'State of Israel', 'ISR', 376, 'AS'),
('IM', 'Isle of Man', 'Isle of Man', 'IMN', 833, 'EU'),
('IN', 'India', 'Republic of India', 'IND', 356, 'AS'),
('IO', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Indian Ocean Territory (Chagos Archipelago)', 'IOT', 086, 'AS'),
('IQ', 'Iraq', 'Republic of Iraq', 'IRQ', 368, 'AS'),
('IR', 'Iran', 'Islamic Republic of Iran', 'IRN', 364, 'AS'),
('IS', 'Iceland', 'Republic of Iceland', 'ISL', 352, 'EU'),
('IT', 'Italy', 'Italian Republic', 'ITA', 380, 'EU'),
('JE', 'Jersey', 'Bailiwick of Jersey', 'JEY', 832, 'EU'),
('JM', 'Jamaica', 'Jamaica', 'JAM', 388, 'NA'),
('JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', 400, 'AS'),
('JP', 'Japan', 'Japan', 'JPN', 392, 'AS'),
('KE', 'Kenya', 'Republic of Kenya', 'KEN', 404, 'AF'),
('KG', 'Kyrgyz Republic', 'Kyrgyz Republic', 'KGZ', 417, 'AS'),
('KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', 116, 'AS'),
('KI', 'Kiribati', 'Republic of Kiribati', 'KIR', 296, 'OC'),
('KM', 'Comoros', 'Union of the Comoros', 'COM', 174, 'AF'),
('KN', 'Saint Kitts and Nevis', 'Federation of Saint Kitts and Nevis', 'KNA', 659, 'NA'),
('KP', 'Korea', 'Democratic People''s Republic of Korea', 'PRK', 408, 'AS'),
('KR', 'Korea', 'Republic of Korea', 'KOR', 410, 'AS'),
('KW', 'Kuwait', 'State of Kuwait', 'KWT', 414, 'AS'),
('KY', 'Cayman Islands', 'Cayman Islands', 'CYM', 136, 'NA'),
('KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', 398, 'AS'),
('LA', 'Lao People''s Democratic Republic', 'Lao People''s Democratic Republic', 'LAO', 418, 'AS'),
('LB', 'Lebanon', 'Lebanese Republic', 'LBN', 422, 'AS'),
('LC', 'Saint Lucia', 'Saint Lucia', 'LCA', 662, 'NA'),
('LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', 438, 'EU'),
('LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', 144, 'AS'),
('LR', 'Liberia', 'Republic of Liberia', 'LBR', 430, 'AF'),
('LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', 426, 'AF'),
('LT', 'Lithuania', 'Republic of Lithuania', 'LTU', 440, 'EU'),
('LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', 442, 'EU'),
('LV', 'Latvia', 'Republic of Latvia', 'LVA', 428, 'EU'),
('LY', 'Libya', 'Libya', 'LBY', 434, 'AF'),
('MA', 'Morocco', 'Kingdom of Morocco', 'MAR', 504, 'AF'),
('MC', 'Monaco', 'Principality of Monaco', 'MCO', 492, 'EU'),
('MD', 'Moldova', 'Republic of Moldova', 'MDA', 498, 'EU'),
('ME', 'Montenegro', 'Montenegro', 'MNE', 499, 'EU'),
('MF', 'Saint Martin', 'Saint Martin (French part)', 'MAF', 663, 'NA'),
('MG', 'Madagascar', 'Republic of Madagascar', 'MDG', 450, 'AF'),
('MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', 584, 'OC'),
('MK', 'Macedonia', 'Republic of Macedonia', 'MKD', 807, 'EU'),
('ML', 'Mali', 'Republic of Mali', 'MLI', 466, 'AF'),
('MM', 'Myanmar', 'Republic of the Union of Myanmar', 'MMR', 104, 'AS'),
('MN', 'Mongolia', 'Mongolia', 'MNG', 496, 'AS'),
('MO', 'Macao', 'Macao Special Administrative Region of China', 'MAC', 446, 'AS'),
('MP', 'Northern Mariana Islands', 'Commonwealth of the Northern Mariana Islands', 'MNP', 580, 'OC'),
('MQ', 'Martinique', 'Martinique', 'MTQ', 474, 'NA'),
('MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', 478, 'AF'),
('MS', 'Montserrat', 'Montserrat', 'MSR', 500, 'NA'),
('MT', 'Malta', 'Republic of Malta', 'MLT', 470, 'EU'),
('MU', 'Mauritius', 'Republic of Mauritius', 'MUS', 480, 'AF'),
('MV', 'Maldives', 'Republic of Maldives', 'MDV', 462, 'AS'),
('MW', 'Malawi', 'Republic of Malawi', 'MWI', 454, 'AF'),
('MX', 'Mexico', 'United Mexican States', 'MEX', 484, 'NA'),
('MY', 'Malaysia', 'Malaysia', 'MYS', 458, 'AS'),
('MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', 508, 'AF'),
('NA', 'Namibia', 'Republic of Namibia', 'NAM', 516, 'AF'),
('NC', 'New Caledonia', 'New Caledonia', 'NCL', 540, 'OC'),
('NE', 'Niger', 'Republic of Niger', 'NER', 562, 'AF'),
('NF', 'Norfolk Island', 'Norfolk Island', 'NFK', 574, 'OC'),
('NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', 566, 'AF'),
('NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', 558, 'NA'),
('NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', 528, 'EU'),
('NO', 'Norway', 'Kingdom of Norway', 'NOR', 578, 'EU'),
('NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', 524, 'AS'),
('NR', 'Nauru', 'Republic of Nauru', 'NRU', 520, 'OC'),
('NU', 'Niue', 'Niue', 'NIU', 570, 'OC'),
('NZ', 'New Zealand', 'New Zealand', 'NZL', 554, 'OC'),
('OM', 'Oman', 'Sultanate of Oman', 'OMN', 512, 'AS'),
('PA', 'Panama', 'Republic of Panama', 'PAN', 591, 'NA'),
('PE', 'Peru', 'Republic of Peru', 'PER', 604, 'SA'),
('PF', 'French Polynesia', 'French Polynesia', 'PYF', 258, 'OC'),
('PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', 598, 'OC'),
('PH', 'Philippines', 'Republic of the Philippines', 'PHL', 608, 'AS'),
('PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', 586, 'AS'),
('PL', 'Poland', 'Republic of Poland', 'POL', 616, 'EU'),
('PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', 666, 'NA'),
('PN', 'Pitcairn Islands', 'Pitcairn Islands', 'PCN', 612, 'OC'),
('PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', 630, 'NA'),
('PS', 'Palestine', 'State of Palestine', 'PSE', 275, 'AS'),
('PT', 'Portugal', 'Portuguese Republic', 'PRT', 620, 'EU'),
('PW', 'Palau', 'Republic of Palau', 'PLW', 585, 'OC'),
('PY', 'Paraguay', 'Republic of Paraguay', 'PRY', 600, 'SA'),
('QA', 'Qatar', 'State of Qatar', 'QAT', 634, 'AS'),
('RE', 'Reunion', 'Réunion', 'REU', 638, 'AF'),
('RO', 'Romania', 'Romania', 'ROU', 642, 'EU'),
('RS', 'Serbia', 'Republic of Serbia', 'SRB', 688, 'EU'),
('RU', 'Russian Federation', 'Russian Federation', 'RUS', 643, 'EU'),
('RW', 'Rwanda', 'Republic of Rwanda', 'RWA', 646, 'AF'),
('SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', 682, 'AS'),
('SB', 'Solomon Islands', 'Solomon Islands', 'SLB', 090, 'OC'),
('SC', 'Seychelles', 'Republic of Seychelles', 'SYC', 690, 'AF'),
('SD', 'Sudan', 'Republic of Sudan', 'SDN', 729, 'AF'),
('SE', 'Sweden', 'Kingdom of Sweden', 'SWE', 752, 'EU'),
('SG', 'Singapore', 'Republic of Singapore', 'SGP', 702, 'AS'),
('SH', 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', 654, 'AF'),
('SI', 'Slovenia', 'Republic of Slovenia', 'SVN', 705, 'EU'),
('SJ', 'Svalbard & Jan Mayen Islands', 'Svalbard & Jan Mayen Islands', 'SJM', 744, 'EU'),
('SK', 'Slovakia (Slovak Republic)', 'Slovakia (Slovak Republic)', 'SVK', 703, 'EU'),
('SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', 694, 'AF'),
('SM', 'San Marino', 'Republic of San Marino', 'SMR', 674, 'EU'),
('SN', 'Senegal', 'Republic of Senegal', 'SEN', 686, 'AF'),
('SO', 'Somalia', 'Federal Republic of Somalia', 'SOM', 706, 'AF'),
('SR', 'Suriname', 'Republic of Suriname', 'SUR', 740, 'SA'),
('SS', 'South Sudan', 'Republic of South Sudan', 'SSD', 728, 'AF'),
('ST', 'Sao Tome and Principe', 'Democratic Republic of Sao Tome and Principe', 'STP', 678, 'AF'),
('SV', 'El Salvador', 'Republic of El Salvador', 'SLV', 222, 'NA'),
('SX', 'Sint Maarten (Dutch part)', 'Sint Maarten (Dutch part)', 'SXM', 534, 'NA'),
('SY', 'Syrian Arab Republic', 'Syrian Arab Republic', 'SYR', 760, 'AS'),
('SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', 748, 'AF'),
('TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', 796, 'NA'),
('TD', 'Chad', 'Republic of Chad', 'TCD', 148, 'AF'),
('TF', 'French Southern Territories', 'French Southern Territories', 'ATF', 260, 'AN'),
('TG', 'Togo', 'Togolese Republic', 'TGO', 768, 'AF'),
('TH', 'Thailand', 'Kingdom of Thailand', 'THA', 764, 'AS'),
('TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', 762, 'AS'),
('TK', 'Tokelau', 'Tokelau', 'TKL', 772, 'OC'),
('TL', 'Timor-Leste', 'Democratic Republic of Timor-Leste', 'TLS', 626, 'AS'),
('TM', 'Turkmenistan', 'Turkmenistan', 'TKM', 795, 'AS'),
('TN', 'Tunisia', 'Tunisian Republic', 'TUN', 788, 'AF'),
('TO', 'Tonga', 'Kingdom of Tonga', 'TON', 776, 'OC'),
('TR', 'Turkey', 'Republic of Turkey', 'TUR', 792, 'AS'),
('TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', 780, 'NA'),
('TV', 'Tuvalu', 'Tuvalu', 'TUV', 798, 'OC'),
('TW', 'Taiwan', 'Taiwan, Province of China', 'TWN', 158, 'AS'),
('TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', 834, 'AF'),
('UA', 'Ukraine', 'Ukraine', 'UKR', 804, 'EU'),
('UG', 'Uganda', 'Republic of Uganda', 'UGA', 800, 'AF'),
('UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', 581, 'OC'),
('US', 'United States of America', 'United States of America', 'USA', 840, 'NA'),
('UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', 858, 'SA'),
('UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', 860, 'AS'),
('VA', 'Holy See (Vatican City State)', 'Holy See (Vatican City State)', 'VAT', 336, 'EU'),
('VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', 670, 'NA'),
('VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', 862, 'SA'),
('VG', 'British Virgin Islands', 'British Virgin Islands', 'VGB', 092, 'NA'),
('VI', 'United States Virgin Islands', 'United States Virgin Islands', 'VIR', 850, 'NA'),
('VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', 704, 'AS'),
('VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', 548, 'OC'),
('WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', 876, 'OC'),
('WS', 'Samoa', 'Independent State of Samoa', 'WSM', 882, 'OC'),
('YE', 'Yemen', 'Yemen', 'YEM', 887, 'AS'),
('YT', 'Mayotte', 'Mayotte', 'MYT', 175, 'AF'),
('ZA', 'South Africa', 'Republic of South Africa', 'ZAF', 710, 'AF'),
('ZM', 'Zambia', 'Republic of Zambia', 'ZMB', 894, 'AF'),
('ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', 716, 'AF');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `ID` int(10) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `tglwkt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`ID`, `tujuan`, `subjek`, `message`, `tglwkt`) VALUES
(16, '$pecah1[0]', '$subjek', '$message', '0000-00-00 00:00:00'),
(17, 'man.of.freak@gmail.com', 'asdsa', '', '2015-03-03 08:50:31'),
(18, 'man.of.freak@gmail.com', 'entah', '', '2015-03-03 08:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `setting_template`
--

CREATE TABLE IF NOT EXISTS `setting_template` (
  `ID` int(10) NOT NULL,
  `header` text NOT NULL,
  `isi` text NOT NULL,
  `footer` text NOT NULL,
  `template` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_template`
--

INSERT INTO `setting_template` (`ID`, `header`, `isi`, `footer`, `template`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>INI ADALAH PERCOBAAN</strong></p>\r\n<p><span style="font-size: 8pt;">Dear Summit Import Corporation, USA&nbsp;<br />Attn :Import Manager - Supply chain manager</span></p>\r\n<p>ini adalah testing</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>We are one of the leading biscuit and wafer manufacturer in Indonesia located in Surabaya.<br />We serve local Indonesia market and Global markets for Europe, Australia, Asia and Africa.<br /><strong><span style="text-decoration: underline;">We have complied HACCP, HALAL, ISO 22000 : 2005 and BRC Certification</span>.<br /><br /></strong>Believing that America have a great potential market with their special need and requirements, we looking for potential partner to serve the market.<br /><br />Please Kindly visit our Website and download our catalog to understand more about our products<br /><strong><br /></strong>Looking forward your positive response.<strong><br /></strong>Please feel free to contact us should you have any question or inquiry.<br /><br />Have a great day ...</p>\r\n<p>&nbsp;</p>\r\n<p>testwefwewefwef</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>anks,</p>\r\n<p>Best Regards,</p>\r\n<address>Ms, Putri Andini</address>\r\n<p><strong>PT. UNGGUL INDO MODERN SEJAHTERA</strong></p>\r\n<p><strong>PT. MEGA GLOBAL FOOD INDUSTRY</strong></p>\r\n<p><span class="Apple-style-span">E-mail :&nbsp;<a href="mailto:export@kokola.co.id" target="_blank">export@kokola.co.id</a><br />Cellular: +628385848399<br />Phone : +62317590008<br />Fax : +62317508988<br />Yahoo messenger:&nbsp;<a href="mailto:export_kokola@yahoo.com" target="_blank">export_kokola@yahoo.com</a><br />skype: export_kokola<br /><br />Website :&nbsp;<a href="http://www.kokola.co.id">www.kokola.co.id</a></span></p>\r\n<p>&nbsp;</p>\r\n<p>testjo0ij0j</p>\r\n<table class="listdata" width="620" cellspacing="0" cellpadding="0" align="center">\r\n<tbody>\r\n<tr>\r\n<td colspan="5" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</body>\r\n</html>', 'mentego.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `hak` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user`, `pass`, `hak`) VALUES
(1, 'septiyo', 'septiyo23', 'user'),
(2, 'admin', '12345', 'admin'),
(3, 'putri', 'user', 'user'),
(4, 'putri', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`code`),
  ADD KEY `continent_code` (`continent_code`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `fk_countries_continents` FOREIGN KEY (`continent_code`) REFERENCES `continents` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
