-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2016 at 06:13 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE IF NOT EXISTS `makes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`make`) VALUES
('ABARTH'),
('AC'),
('ALFA ROMEO'),
('ARIEL'),
('ASTON MARTIN'),
('AUDI'),
('AUSTIN'),
('BAC'),
('BENTLEY'),
('BMW'),
('BOWLER'),
('BUGATTI'),
('BUICK'),
('CADILLAC'),
('CATERHAM'),
('CHEVROLET'),
('CHRYSLER'),
('CITROEN'),
('DACIA'),
('DAEWOO'),
('DAIHATSU'),
('DAIMLER'),
('DODGE'),
('DS AUTOMOBILES'),
('FERRARI'),
('FIAT'),
('FORD'),
('GINETTA'),
('GMC'),
('GREAT WALL'),
('HONDA'),
('HUMBER'),
('HUMMER'),
('HYUNDAI'),
('INFINITI'),
('ISUZU'),
('JAGUAR'),
('JEEP'),
('JENSEN'),
('KIA'),
('KOENIGSEGG'),
('KTM'),
('LAMBORGHINI'),
('LANCIA'),
('LAND ROVER'),
('LEXUS'),
('LINCOLN'),
('LOTUS'),
('MASERATI'),
('MAYBACH'),
('MAZDA'),
('MCLAREN'),
('MERCEDES-BENZ'),
('MG'),
('MINI'),
('MITSUBISHI'),
('MORGAN'),
('MORRIS'),
('NISSAN'),
('NOBLE'),
('OPEL'),
('PAGANI'),
('PEROUDA'),
('PEUGEOT'),
('PONTIAC'),
('PORSCHE'),
('PROTON'),
('RENAULT'),
('ROLLS-ROYCE'),
('ROVER'),
('SAAB'),
('SEAT'),
('SKODA'),
('SMART'),
('SSANGYONG'),
('SUBARU'),
('SUZUKI'),
('TESLA'),
('TOYOTA'),
('TRIUMPH'),
('TVR'),
('VAUXHALL'),
('VOLKSWAGEN'),
('VOLVO'),
('WESTFIELD'),
('ZENOS')

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
