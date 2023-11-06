-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2023 at 03:17 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters-homepage`
--

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `agree_to_marketing` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`id`, `name`, `email`, `company`, `phone`, `message`, `agree_to_marketing`) VALUES
(28, 'Bernard Marx', 'bernard.marx@email.com', 'Epsilon Pharmaceuticals', '9876543210', '&quot;I&#039;m interested in discussing the role of individuality in &#039;Brave New World&#039; and its impact on society.&quot;', 1),
(29, 'Lenina Crowne', 'lenina.crowne@email.com', NULL, '5551234567', 'I&#039;d like to inquire about the latest beauty products and trends. Can you provide product recommendations?', 0),
(30, 'Mustapha Mond', 'mustapha.mond@email.com', 'Alpha Science Institute', '7778889999', 'I&#039;m interested in discussing the advancements in science and technology in &#039;Brave New World.&#039; How can we apply similar principles to our research?', 1),
(31, 'Bill Masen', 'bill.masen@email.com', NULL, '01632960228', 'I&#039;m interested in purchasing triffid seeds for my garden. Can you provide pricing and planting instructions?', 0),
(32, 'Alan Wake', 'alan.wake@email.org', 'Bright Falls Books', '441632960228', 'I have a question about my latest manuscript. Can you provide some advice on dealing with writer&#039;s block?', 1),
(33, 'Thomas Zane', 'thomas.zane@email.net', NULL, '01632960828', 'I&#039;m interested in licensing the music of The Old Gods of Asgard for a project. How can I get in touch with the band?', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Messages`
--
ALTER TABLE `Messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
