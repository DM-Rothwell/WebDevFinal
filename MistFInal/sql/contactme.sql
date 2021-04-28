-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2021 at 05:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactme`
--
CREATE DATABASE IF NOT EXISTS `contactme` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contactme`;

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

DROP TABLE IF EXISTS `contactinfo`;
CREATE TABLE IF NOT EXISTS `contactinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `name`, `email`, `message`) VALUES
(8, 'Tud Email', 'b00126023@mytudublin.ie', 'This is my message from TUD!\r\n'),
(7, 'Darragh', 'darragh@gmail.com', 'Hello this is my message to the database!'),
(6, 'admin', 'admin@gmail.com', 'Hello this is the admin\'s message'),
(9, 'Tud Email', 'b00126023@mytudublin.ie', 'This is my message from TUD!\r\n'),
(12, 'w', 'w@w.w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(11) NOT NULL,
  `shoe` varchar(255) NOT NULL,
  `shoedesc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `price`, `shoe`, `shoedesc`) VALUES
(1, '220', 'Yeezy 350', 'Sapien et ligula ullamcorper malesuada proin libero nunc consequat.'),
(2, '210', 'Jordan 1', 'Tellis in hac habitasse platea dictumut vestibla commodo consequat. '),
(3, '300', 'Jordan 1 Low', 'Magna fringilla urna porttitor rhoncus dolor purus non enim.'),
(4, '150', 'SB Dunks', 'Alaoreet sit amet cursus sit amet dictum sit amet.'),
(5, '100', 'Air Force 1 ', 'Electus nulla at volutpat diam ut venenatis tellus in.'),
(6, '450', 'Jordan 1', 'Eelit eget gravida um sociis natoque penatibus et magnis.'),
(7, '80', 'Kids - Air Presto', 'Utortor dignissim convallis aenean et tortor at risus viverra.'),
(8, '85', 'Kids - Acne Studios', 'Venenatis urna cursus eget nunc scelerisque viverra mauris in.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'MyUser', 'MyPassword'),
(3, 'Username', 'password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
