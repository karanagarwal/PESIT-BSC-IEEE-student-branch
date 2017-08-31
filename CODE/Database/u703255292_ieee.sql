
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2017 at 08:54 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u703255292_ieee`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `about`) VALUES
(1, 'PESIT Bangalore South Campus IEEE Student Chapter is devoted to its aim of instilling scientific temperament in the student community through a plethora of activities around the year. The chapter also introduced a Women in Engineering Affiinity Group that is dedicated to promoting women engineers and inspiring girls to follow their academic interests to a career in engineering.');

-- --------------------------------------------------------

--
-- Table structure for table `achivements`
--

CREATE TABLE IF NOT EXISTS `achivements` (
  `achive_id` int(11) NOT NULL AUTO_INCREMENT,
  `achive_description` text NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`achive_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `achivements`
--

INSERT INTO `achivements` (`achive_id`, `achive_description`, `year`) VALUES
(4, 'Won the Most Promising IEEE WIE Student Branch award in WIE Professional Activities Day held on September 1st 2013', 2013),
(6, 'IEEE Branch Counselor has been elevated to IEEE Senior Member and identified as active WIE Affinity Group Member for the year 2014.', 2014);

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `image_location` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `date`, `image_location`, `link`, `description`) VALUES
(1, 'IEEE T-Shirt Design Competition', '2016-04-16', '1462495244261911.jpg', 'https://goo.gl/k7m94T', 'The IEEE T-Shirt Design Competition'),
(2, 'ISRO and HAL Industrial Visit', '2016-05-20', '1463248642310635.jpg', 'https://goo.gl/1vtuHZ', 'The PESIT Bangalore South Campus IEEE Student Chapter is organizing an Industrial Visit to ISRO and HAL on the 20th of May, 2016 for all IEEE student members.\r\nPlease register before 5th May, 2016.\r\nTransport will be provided. Those who register will be requested to buy the Official Student Branch T-Shirt!'),
(3, 'Virtual Reality', '2016-04-28', '1463249268532092.jpg', 'NULL', 'The PESIT Bangalore South Campus IEEE Student Branch will be hosting an informative session on ''Virtual Reality'' covering various topics, from the basics of VR to an introduction to making VR apps using Google cardboard.\r\nMushtaque Ahamed, Software Engineer at Code Nation, will be speaking on human interactive design; Sandesh Gade, Research Associate at PES, will talk about his work with Leap Motion and Suryoday Basak, Undergraduate Student, will speak about Google Cardboard.\r\nWe hope to see you there to expand your knowledge on VR!'),
(4, 'Signal Processing Workshop', '2014-08-09', '1464083706263876.png', 'NULL', 'To provide broad perspective, outline covering, theoretical foundation on signal processing, certain applications to speech, audio, biomedical, bioinformatics and EEG signals. Time: 9:00 a.m. to 5:30 p.m.'),
(5, 'Inauguration Program', '2013-03-28', '1464084071313478.png', 'NULL', 'The IEEE Student Branch was inaugurated with a formal ceremony. Dr. Debabrata Das was the Chief Guest of the occasion and the Guest of Honour was Dr. Preetha Sharan.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_location`, `description`) VALUES
(1, '1463249732541650.jpg', 'Synchronize, 2015. A talk on #IoT.'),
(5, '1463254100805734.jpg', 'Virtual Reality  Session'),
(6, '1463254170651019.jpg', 'Prof. Animesh Giri proposed the creation of a new group on IOT, enormous interest was shown by the crowd!'),
(7, '1463254289653958.jpg', 'IEEE T-shirt Design Competiton'),
(8, '1463254373469525.jpg', 'Virtual Reality Session. Sandesh Gade with Dr. Annapurna D.'),
(9, '1463254468695431.jpg', 'Virtual Reality Session with Mushtaque Ahamed, Sandesh Gade and Suryoday Basak at P.E.S. Institute of Technology, Bangalore South Campus.'),
(10, '1464082217431197.jpg', 'IEEE Student Branch WIE'),
(11, '1464082245463385.jpg', 'IEEE Student Branch WIE');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `poss` varchar(80) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_year` int(11) NOT NULL,
  `image_location` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `poss`, `start_year`, `end_year`, `image_location`) VALUES
(1, 'Nithya KSD', 'WiE Chairperson', 2013, 2014, '1463915872544367.jpg'),
(2, 'Archit Bhandari', 'Treasurer', 2013, 2014, '1462427748370263.jpg'),
(3, 'Nisheeth Agarwal', 'Secretary', 2013, 2014, '1462427696329916.jpg'),
(4, 'Vinay Krupakaran', 'Vice Chairperson', 2013, 2014, '1462427667761871.jpg'),
(5, 'Aquila Khanam', 'Chairperson', 2013, 2014, '1463915905840401.jpg'),
(6, 'Bhoomika Agarwal', 'WiE Chairperson', 2014, 2015, '1462428075924468.jpg'),
(7, 'Nitish Surana', 'Treasurer', 2014, 2015, '1462428045996841.jpg'),
(8, 'Shrey Rupani', 'Secretary', 2014, 2015, '1462428022832238.jpg'),
(9, 'Priyal Mehta', 'Vice Chairperson', 2014, 2015, '1462427944611276.jpg'),
(10, 'Rahul Negi', 'Chairperson', 2014, 2015, '1462427920688592.jpg'),
(12, 'Eshika Soni', 'WiE Vice Chairperson', 2016, 2017, '1463269242564721.jpg'),
(13, 'Rasika Thorat', 'WiE Chairperson', 2016, 2017, '1463915552996668.jpg'),
(14, 'Kaustubh Sinha', 'Treasurer', 2016, 2017, '1462428904336260.jpg'),
(15, 'Sukrit Venkatagiri', 'Secretary', 2016, 2017, '1462428874818862.jpg'),
(16, 'Malika Agarwal', 'Vice Chairperson', 2016, 2017, '1462428848968908.jpg'),
(17, 'Tyson Pais', 'Chairperson', 2016, 2017, '1462429232649810.jpg'),
(11, 'Karan Agarwal', 'Webmaster', 2016, 2017, '1463753314441497.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
