-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2022 at 11:12 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colegiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `elevi`
--

CREATE TABLE `elevi` (
  `id` int(2) NOT NULL,
  `nume` varchar(25) CHARACTER SET utf8 COLLATE utf8_romanian_ci NOT NULL,
  `prenume` varchar(25) CHARACTER SET utf8 COLLATE utf8_romanian_ci NOT NULL,
  `adresa` varchar(35) CHARACTER SET utf8 COLLATE utf8_romanian_ci NOT NULL,
  `email` varchar(35) NOT NULL,
  `data_nasterii` date NOT NULL,
  `sex` varchar(2) NOT NULL,
  `media_bac` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elevi`
--

INSERT INTO `elevi` (`id`, `nume`, `prenume`, `adresa`, `email`, `data_nasterii`, `sex`, `media_bac`) VALUES
(1, 'Movileanu', 'Valeria', 'bd.Cuza-Voda 15/3', 'movileanu@gmail.com', '2003-04-05', 'f', 7.25),
(2, 'Nuța', 'Dan', 'str.Ismail 13/2', 'nuta@gmail.com', '2003-06-11', 'm', 8.5),
(3, 'Palii', 'Dorin', 'str.Teilor 4a', 'palii@gmail.com', '2004-03-17', 'm', 7.75),
(4, 'Paraschiv', 'Nina-Evelina', 'str.Studentilor 12/3', 'paraschiv@gmail.com', '2003-11-07', 'f', 9),
(5, 'Plastelin', 'Daniel', 'sos.Muncesti 25/6', 'plastelin@gmail.com', '2003-02-21', 'm', 6.25),
(6, 'Pocitaru', 'Constantin', 'str.Sarmizegetusa 9/11', 'pocitaru@gmail.com', '2003-06-03', 'm', 7),
(7, 'Popa', 'Vadim', 'str.Ismail 43/2', 'popa@gmail.com', '2004-03-30', 'm', 8),
(8, 'Railean', 'Vsevolod', 'str.Miorita 23/3', 'railean@gmail.com', '2003-12-09', 'm', 8.5),
(9, 'Rașcovschi', 'Victor', 'str.Paris 4', 'rascovschi@gmail.com', '2003-02-20', 'm', 6.75),
(10, 'Rementova', 'Anghelina', 'bd.Dacia 27/3', 'rementova@gmail.com', '2003-12-12', 'f', 8.33),
(11, 'Roșca', 'Dumitru', 'bd.Traian 67/10', 'rosca@gmail.com', '2003-03-05', 'm', 9),
(12, 'Rusu', 'Dan', 'str.Cuza-Voda 3/2', 'rusu@gmail.com', '2002-09-18', 'm', 6.75),
(13, 'Schiraș', 'Andrei', 'bd.Grenoble 15/3', 'schiras@gmail.com', '2004-01-20', 'm', 6.5),
(14, 'Svetlicinâi', 'Radu', 'str.Cuza-Voda 9/2', 'svetlicinai@gmail.com', '2003-02-02', 'm', 7.75),
(15, 'Vartic', 'Vasile', 'str.Cuza-Voda 3', 'vartic@gmail.com', '2003-06-10', 'm', 7.75),
(16, 'Zuza', 'Marius', 'bd.Kiev 10/5', 'zuza@gmail.com', '2003-08-28', 'm', 5.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elevi`
--
ALTER TABLE `elevi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elevi`
--
ALTER TABLE `elevi`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
