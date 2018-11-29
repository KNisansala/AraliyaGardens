-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 11:44 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uppermostvilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `image_name`, `short_description`, `description`, `queue`) VALUES
(1, 'Swimming Pool', '-210145524_190992995382_1531888144_n.jpg', 'Uppermost Villa Unawatuna features one swimming pool laying in front of the villa, the pool sits by the perfectly groomed gardens of the villa surrounded by sun beds and is the location for guests to spend the day tanning and swimming with the option to r', '<p>Uppermost Villa Unawatuna features one swimming pool laying in front of the villa, the pool sits by the perfectly groomed gardens of the villa surrounded by sun beds and is the location for guests to spend the day tanning and swimming with the option to retreat to the covered garden terrace for lunch. Enjoy the perfect relaxation in a minute with superb stunning surroundings with finest landscaped pool.</p>', 0),
(2, 'Airport Transfers', '-299309754_190903831152_1531890987_n.jpg', 'Uppermost Villa serves Airport pickup or drops taxi service for your convenient. Our drivers will ensure you reach the airport safely & on time. And also our chauffer will be arranged according to your wish with worth cost. All vehicles are fully comforta', '<p>Uppermost Villa serves Airport pickup or drops taxi service for your convenient. Our drivers will ensure you reach the airport safely &amp; on time. And also our chauffer will be arranged according to your wish with worth cost. All vehicles are fully comfortable and you can have a rich relaxation by enjoying stunning surroundings. </p>', 0),
(3, 'Arrange Parties', '-300281064_190902859842_1531893508_n.jpg', 'Magical days need magical settings. Uppermost Villa we offer the perfect setting for your birthday, anniversary or get together parties. Easily can accommodate about 50 guests and is a wonderful place to enjoy delicious food and drink. We offer unique ser', '<p>Magical days need magical settings. Uppermost Villa we offer the perfect setting for your birthday, anniversary or get together parties. Easily can accommodate about 50 guests and is a wonderful place to enjoy delicious food and drink. We offer unique service to arrange your prime requirement with highest satisfaction.</p>', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
