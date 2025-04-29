-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2025 at 02:45 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rigwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `rigwise_carousel`
--

DROP TABLE IF EXISTS `rigwise_carousel`;
CREATE TABLE IF NOT EXISTS `rigwise_carousel` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `carousel_image` varchar(255) NOT NULL,
  `carousel_alt` varchar(255) NOT NULL,
  `carousel_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rigwise_carousel`
--

INSERT INTO `rigwise_carousel` (`ID`, `carousel_image`, `carousel_alt`, `carousel_title`) VALUES
(1, '10001.JPG', 'Marine Operation', 'Joining'),
(2, '10002p.JPG', 'Marine Operation', 'Preparing for Move'),
(3, '10003p.JPG', 'Marine Operation', 'Inspecting Tugs and AHTS for Safety'),
(4, '10004p.JPG', 'Marine Operation', 'Testing Emergency Release'),
(5, '10005.JPG', 'Marine Operation', 'Maneuvering to Connect'),
(6, '10006P.JPG', 'Marine Operation', 'Maneuvering to Connect'),
(7, '10007s.JPG', 'Marine Operation', 'Billy Pugh Transfer'),
(8, '10008S.JPG', 'Marine Operation', 'Lead AHTS Presenting for Connection'),
(9, '10009.JPG', 'Marine Operation', 'Releasing the Tow Bridle'),
(10, '10010s.JPG', 'Marine Operation', 'Catching the Tow Bridle'),
(11, '10011ps.JPG', 'Marine Operation', 'AHTS Preparing to Connect, Tugger Wire Passes Through Towing Pins, Main Tow Prepared'),
(12, '10012.JPG', 'Marine Operation', 'Connecting Main Tow'),
(13, '10013ps.JPG', 'Marine Operation', 'Main Tow Connected, Preparing to Tow'),
(14, '10014ps.JPG', 'Marine Operation', 'Main Tow Connected'),
(15, '10015s.JPG', 'Marine Operation', 'Main Tow Connected'),
(16, '10016s.JPG', 'Marine Operation', 'Main Tow Connected and Checked'),
(17, '10017.JPG', 'Marine Operation', 'Stretching the Tow'),
(18, '10018s.JPG', 'Marine Operation', 'Moving into Position'),
(19, '10019Ssp.JPG', 'Marine Operation', 'Paying out Tow Wire, Moving into Position'),
(20, '10020s.JPG', 'Marine Operation', 'Paying out Tow Wire, Moving into Position'),
(21, '10021s.JPG', 'Marine Operation', 'Connecting Secondary Tugs'),
(22, '10022p.JPG', 'Marine Operation', 'Underway and Making Way'),
(23, '10023ps.JPG', 'Marine Operation', 'Checking Tugs and Tow'),
(24, '10024sp.JPG', 'Marine Operation', 'Maintaining Course and Speed'),
(25, '10025s.JPG', 'Marine Operation', 'Preparing for the Night'),
(26, '10026s.JPG', 'Marine Operation', 'Sunset'),
(27, '10027ps.JPG', 'Marine Operation', 'Morning Pre-Arrival Checks'),
(28, '10028sp.JPG', 'Marine Operation', 'Preparing for Arrival'),
(29, '10029.JPG', 'Marine Operation', 'Checking Final Positioning'),
(30, '10031.JPG', 'Marine Operation', 'Final Position Accepted'),
(31, '100321ft.JPG', 'Marine Operation', 'Final Position Accepted, 1 ft Steel to Steel'),
(32, '1003072Overlay.JPG', 'Marine Operation', 'Jack-Up 3 Tugs, Live Boat Approach, Drilling Tolerance is Tight. Toolpusher Wants 1ft Standoff, 1 ft to go');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
