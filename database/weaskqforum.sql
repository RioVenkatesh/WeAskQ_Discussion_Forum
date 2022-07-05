-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 07:56 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veasqforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_mail` varchar(50) NOT NULL,
  `feedback_descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_mail`, `feedback_descr`) VALUES
(1, 'mvenkateshsmart@gmail.com', 'VeAsQ Forum Support me'),
(2, 'aswin04067@gmail.com', 'HI\r\n'),
(3, 'aswin04067@gmail.com', 'Hi dude'),
(4, 'aswin04067@gmail.com', 'I''m Impressed..!'),
(5, 'mvenkatesh3900@gmail.com', 'super guys nice forum');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(8) NOT NULL,
  `posts_topic` int(8) NOT NULL,
  `posts_content` text NOT NULL,
  `posts_date` datetime NOT NULL,
  `posts_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `posts_topic`, `posts_content`, `posts_date`, `posts_by`) VALUES
(81, 41, 'ok i will update', '2021-02-12 00:00:00', 27),
(82, 41, 'ok', '2021-02-13 00:00:00', 26),
(83, 42, 'helo how are you\r\n', '2021-02-13 00:00:00', 28),
(84, 45, 'ok', '2021-02-18 00:00:00', 26),
(85, 44, 'Thank You', '2021-02-19 00:00:00', 26),
(86, 44, 'ok dude', '2021-02-19 00:00:00', 26),
(87, 44, 'Thanks dude', '2021-02-19 00:00:00', 26),
(88, 44, 'hi', '2021-02-19 00:00:00', 26),
(89, 44, 'hi', '2021-02-19 00:00:00', 26),
(90, 44, 'oi', '2021-02-19 00:00:00', 26),
(91, 44, 'ok', '2021-02-19 00:00:00', 26),
(92, 45, 'ok', '2021-02-19 00:00:00', 26),
(93, 45, 'helo', '2021-02-19 00:00:00', 26),
(94, 46, 'Rafael Nadal\r\n\r\nExplanation:\r\nUS Open 2019 Men''s title Was Won by Rafael Nadal . Rafael Nadal defeated Daniil Medvedev of Russia in the Final. This is Nadal''s  19th Grand Slam Singles titles.', '2021-03-14 00:00:00', 30),
(95, 47, 'Rafael Nadal.\r\n\r\nUS open 2019 Men''s Title was won by Rafael Nadal . Rafael Nadal defeated Daniil Medvedev of Russia in the Final. ', '2021-03-14 00:00:00', 30),
(96, 48, 'Lionel Messi\r\n\r\nExplanation:\r\n \r\nLionel Messi bagged the FIFA Best Player 2019 Awards for the 6th time. Earlier Messi had received this award in 2009,2010,2011,2012,and 2015.', '2021-03-14 00:00:00', 30),
(97, 49, 'West Indies', '2021-03-14 00:00:00', 30),
(98, 50, ' Australia.\r\n\r\nExplanation:\r\n\r\nAustralia is the Most Successful Country Which has Won 5 World Cup Titles. India & West Indies are the only two Countries Which have won 2 World Cup Titles. ', '2021-03-14 00:00:00', 30),
(99, 52, 'Shura Kitata\r\n\r\nIn London  Marathon 2020 , the men''s elite race was won by Ethiopian Shura Kitata, and women''s event was won by Kenyan Brigid Kosgei.', '2021-03-14 00:00:00', 30),
(100, 53, 'Ans:- Field\r\n\r\nNote:\r\n\r\nA Fields can be easily explained by a simple example i.e when we enter a name in the login form, that box we can enter only a name i.e nothing but field. \r\nField is column which contain one type of information.', '2021-03-14 00:00:00', 30),
(101, 54, 'Ans:-\r\nOperating System.\r\n\r\nNote:\r\n\r\nIt is a platform to execute any program , without Operating System we cannot run any software.', '2021-03-14 00:00:00', 30),
(102, 55, 'Ans:- Remote Control\r\n\r\nNote:\r\nSome authorities are recommending TV''s,VCR''s and Stereo''s be connected to power strips with switches and turned off when not in use to save energy. your remote will not work until power switched back on.', '2021-03-14 00:00:00', 30),
(103, 56, 'Ans:- To increase the voltage momentarily.\r\n\r\nNote:\r\n\r\nChoke is  to increase voltage momentary, its one of advantage because to indicate tube in heat level.its provides high voltage and maintain constant watts. ', '2021-03-14 00:00:00', 30),
(104, 57, 'Ans:- BeriBeri\r\n', '2021-03-14 00:00:00', 30),
(105, 58, 'Ans: Pantothenic Acid', '2021-03-14 00:00:00', 30),
(106, 59, 'Ans:- One', '2021-03-14 00:00:00', 30),
(107, 60, 'Ans:- Leg Bone', '2021-03-14 00:00:00', 30),
(108, 61, 'Ans:- Ayurveda', '2021-03-14 00:00:00', 30),
(109, 62, 'Ans: Heart.', '2021-03-14 00:00:00', 30),
(110, 63, 'Ans:\r\nKamal Hassan.', '2021-03-14 00:00:00', 30),
(111, 64, 'Ans:- Dadasaheb Phalke', '2021-03-14 00:00:00', 30),
(112, 47, 'ok ', '2021-03-23 00:00:00', 27),
(113, 66, 'Digital Single Lens Reflex', '2021-03-26 00:00:00', 26),
(114, 67, 'Starlink is a satellite internet constellation being constructed by SpaceX providing satellite Internet access. The constellation will consist of thousands of mass-produced small satellites in low Earth orbit (LEO), working in combination with ground transceivers. SpaceX plans to sell some of the satellites for military, scientific, or exploratory purposes. The SpaceX satellite development facility in Redmond, Washington houses the Starlink research, development, manufacturing, and orbit control. The cost of the decade-long project to design, build, and deploy the constellation was estimated by SpaceX in May 2018 to be at least US$10 billion.', '2021-03-26 00:00:00', 27),
(115, 71, 'Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.\r\n\r\nMost people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.', '2021-03-26 00:00:00', 27),
(116, 67, 'Thanks dude', '2021-03-26 00:00:00', 26),
(117, 65, 'Karch Kiraly From US', '2021-03-27 00:00:00', 26),
(118, 47, 'Thank you for the information\r\n', '2021-03-27 00:00:00', 26);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscribe_id`, `subscribe_mail`) VALUES
(1, 'aswin04067@gmail.com'),
(2, 'ghgff'),
(3, 'mvenkatesh8008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_descr` text NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` varchar(20) NOT NULL,
  `topic_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_descr`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(47, 'Tennis', 'Who is The Winner of the US Open 2019 Men''s Title?', '2021-03-14 00:00:00', 'sports', 30),
(48, 'Football', 'Who got FIFA Best Player 2019 Award?', '2021-03-14 00:00:00', 'sports', 30),
(49, 'Cricket', 'Who Won the First World Cup,1975?', '2021-03-14 00:00:00', 'sports', 30),
(50, 'Cricket', 'Which Cricket team has Won Most ICC Cricket World Cup Titles?', '2021-03-14 00:00:00', 'sports', 30),
(52, 'Athlete', 'Which athlete scored first position in the London Marathon held on 4th October , 2020?', '2021-03-14 00:00:00', 'sports', 30),
(53, 'Database', 'What is part of a database that holds only one type of information?', '2021-03-14 00:00:00', 'technology', 30),
(54, 'OS', '''OS'' computer abbreviation usually means?', '2021-03-14 00:00:00', 'technology', 30),
(55, 'TV', 'Most modern TV''s draw power even if turned off. the circuit the power is used in does what function?\r\n', '2021-03-14 00:00:00', 'technology', 30),
(56, 'Electronic', 'The purpose of choke in tube light is?', '2021-03-14 00:00:00', 'technology', 30),
(57, 'Disease', 'What is the name of the disease in man arising out Vitamin B1 deficiency?', '2021-03-14 00:00:00', 'health', 30),
(58, 'Vitamin', 'What is another name for vitamin B5?', '2021-03-14 00:00:00', 'health', 30),
(59, 'Fat', 'How many pounds of fat are needed to store 3500 calories?', '2021-03-14 00:00:00', 'health', 30),
(60, 'Bone', 'Which area of the Body has the largest Bone?', '2021-03-14 00:00:00', 'health', 30),
(61, 'Medicine', 'In India the use of herbal Medicines is Known as?', '2021-03-14 00:00:00', 'health', 30),
(62, 'Muscle', 'What is the strongest muscle in the human body?', '2021-03-14 00:00:00', 'health', 30),
(63, 'Movie', 'Who is the Highest National award winner in tamil hero?', '2021-03-14 00:00:00', 'entertainment', 30),
(64, 'Movie', 'Who is Known as the "Father of Indian Cinema"?', '2021-03-14 00:00:00', 'entertainment', 30),
(65, 'Volley ball', 'Who is best player in volleyball??', '2021-03-23 00:00:00', 'sports', 27),
(66, 'DSLR', 'What is Dslr??\r\n', '2021-03-23 00:00:00', 'technology', 27),
(67, 'StarLink', 'What is starlink?\r\n', '2021-03-26 00:00:00', 'technology', 26),
(68, 'Computer', 'Who is the father of computer', '2021-03-26 00:00:00', 'technology', 26),
(69, 'Web', 'What is Dark Web?', '2021-03-26 00:00:00', 'technology', 26),
(70, 'Advanced Tech', 'What is AI?', '2021-03-26 00:00:00', 'technology', 26),
(71, 'Covid 19', 'What is Corona Virus??', '2021-03-26 00:00:00', 'health', 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `udate` datetime NOT NULL,
  `user_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `gender`, `email`, `password`, `contact`, `udate`, `user_level`) VALUES
(26, 'Venkatesh', 'Venkatesh', 'male', 'mvenkateshsmart@gmail.com', '8dc06bc9b7275c28d1de0753ce35ade9b195e974', '8940446140', '0000-00-00 00:00:00', 0),
(27, 'T.Aswin', 'aswin', 'male', 'aswin07@gmail.com', '32c9d1ed607b4af613ebda59aca3044e1b97c13b', '9629551157', '0000-00-00 00:00:00', 0),
(28, 'Abinandhan', 'abinandha', 'male', 'abi@gmail.com', '10bc0280897562d2135fe4e23f866165f60ecba2', '7654739088', '0000-00-00 00:00:00', 0),
(29, 'ifen', 'ttrtd', 'male', 'mvenkatesh3900@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '345t6455', '0000-00-00 00:00:00', 0),
(30, 'T.Aswin', 'aswin07', 'male', 'aswin04067@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '9629551153', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`),
  ADD KEY `posts_by` (`posts_by`),
  ADD KEY `posts_ibfk_4` (`posts_topic`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_by` (`topic_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_by`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
