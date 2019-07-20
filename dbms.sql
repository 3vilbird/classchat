-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 12:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `chat` (IN `uu` VARCHAR(60), IN `us` VARCHAR(60))  INSERT INTO newsfeed (sender,message)VALUES( (SELECT uid FROM login WHERE username=uu),us   )$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getc` ()  SELECT * FROM newsfeed$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `internal` int(11) NOT NULL,
  `usn` varchar(200) NOT NULL,
  `cs51` int(11) NOT NULL,
  `cs52` int(11) NOT NULL,
  `cs53` int(11) NOT NULL,
  `cs54` int(11) NOT NULL,
  `cs55` int(11) NOT NULL,
  `cs56` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`internal`, `usn`, `cs51`, `cs52`, `cs53`, `cs54`, `cs55`, `cs56`) VALUES
(1, '4bd16is018', 10010, 80010, 0, 0, 0, 0),
(1, '4bd16is026', 56010, 89010, 0, 0, 0, 0),
(2, '4bd16is026', 69015, 0, 0, 0, 0, 0);

--
-- Triggers `academic`
--
DELIMITER $$
CREATE TRIGGER `HELP` BEFORE INSERT ON `academic` FOR EACH ROW IF new.cs51<0
THEN set new.cs51=0;
elseif new.cs52<0
then set new.cs52=0;
elseif new.cs53<0
then set new.cs53=0;
elseif new.cs54<0
then set new.cs54=0;
elseif new.cs55<0
then set new.cs55=0;
elseif new.cs56<0
then set new.cs56=0;
end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `data`
-- (See below for the actual view)
--
CREATE TABLE `data` (
`p` binary(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `grchat`
--

CREATE TABLE `grchat` (
  `gid` int(255) NOT NULL,
  `sender` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grchat`
--

INSERT INTO `grchat` (`gid`, `sender`, `message`) VALUES
(15, 33, 'hi'),
(17, 35, 'hi am new here'),
(18, 35, 'what is primary key in dbms?'),
(19, 32, 'it is an unique and non repeated attribute'),
(20, 32, 'pictures/waterfalls_river_rocks_trees_landscape_84484_3840x2400 (1).jpg'),
(21, 32, 'pictures/beach_tropics_sea_sand_palm_trees_84750_3840x2400.jpg'),
(22, 32, 'pictures/benze.jpg'),
(23, 32, 'pictures/autumn_forest_river_rocks_landscape_86233_3840x2400.jpg'),
(24, 35, 'hi am gagan');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `uid` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`uid`, `action`, `date`) VALUES
(19, 'registered', '2018-11-25 09:30:38'),
(20, 'registered', '2018-11-25 09:34:13'),
(21, 'registered', '2018-11-25 09:35:53'),
(22, 'registered', '2018-11-25 09:49:11'),
(23, 'registered', '2018-11-25 16:56:24'),
(24, 'registered', '2018-11-25 19:35:42'),
(25, 'registered', '2018-11-25 22:44:42'),
(26, 'registered', '2018-11-29 18:41:54'),
(27, 'registered', '2018-11-29 19:31:13'),
(28, 'registered', '2018-11-29 21:18:41'),
(29, 'registered', '2018-11-29 21:27:45'),
(30, 'registered', '2018-11-30 07:34:50'),
(31, 'registered', '2018-11-30 12:13:01'),
(32, 'registered', '2018-11-30 12:17:42'),
(33, 'registered', '2018-11-30 12:47:10'),
(34, 'registered', '2018-12-05 14:09:20'),
(35, 'registered', '2018-12-06 20:49:55'),
(36, 'registered', '2018-12-07 07:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `indchat`
--

CREATE TABLE `indchat` (
  `message_id` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `send` int(11) NOT NULL,
  `recv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indchat`
--

INSERT INTO `indchat` (`message_id`, `message`, `send`, `recv`) VALUES
(15, 'hi', 33, 30),
(16, 'hi bro', 35, 34),
(17, 'where r u?', 35, 34),
(18, 'sir good morning', 35, 32),
(19, 'good morning', 32, 35),
(20, 'hi', 35, 36),
(21, 'ge sir', 35, 32);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `pass`) VALUES
(32, 'shivamurthy', 'e2638bc85f79a14b89de182c171edbcb'),
(33, 'rashmi', 'e2638bc85f79a14b89de182c171edbcb'),
(34, 'chandan', 'e2638bc85f79a14b89de182c171edbcb'),
(35, 'gagan', 'e2638bc85f79a14b89de182c171edbcb'),
(36, 'ganpati', 'e2638bc85f79a14b89de182c171edbcb');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `messageid` int(11) NOT NULL,
  `sender` int(200) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`messageid`, `sender`, `message`) VALUES
(32, 32, 'tommorrow my clases is at 202'),
(33, 33, 'tommorrow everyone should attend the classes'),
(34, 33, 'pictures/beach_tropics_sea_sand_palm_trees_84750_3840x2400.jpg'),
(35, 33, 'pictures/JavaTheCompleteReference.pdf'),
(36, 32, 'hi'),
(37, 32, 'hope everyone has finalised their marks?'),
(38, 32, 'pictures/benze.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `uid` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `status` varchar(600) DEFAULT NULL,
  `profilepic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`uid`, `pid`, `status`, `profilepic`) VALUES
(33, '4030', 'hi', 'pictures/benze.jpg'),
(32, '4bd16', 'I am using  class chat', 'pictures/benze.jpg'),
(36, '4bd16cs024', 'I am using  class chat', 'nothing'),
(34, '4bd16is018', 'I am using  class chat', 'nothing'),
(35, '4bd16is026', 'stepping towards success', 'pictures/benze1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uid` int(11) NOT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `p` binary(1) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `phno` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `fname`, `lname`, `p`, `email`, `phno`) VALUES
(32, 'Shivamurthy', 'D', 0x30, 'shivamurthy@gmail.com', '7898789654'),
(33, 'rashmi', 'sh', 0x30, 'rashmi@gmail.com', '8797565678'),
(34, 'chandan', 'tm', 0x31, 'chandan@gmail.com', '8970304089'),
(35, 'gagan', 'r shetty', 0x31, 'gagan@gmail.com', '9878987898'),
(36, 'ganpati', 'md', 0x31, 'ganpati@gmail.com', '8769598789');

--
-- Triggers `registration`
--
DELIMITER $$
CREATE TRIGGER `his` AFTER INSERT ON `registration` FOR EACH ROW INSERT INTO history VALUES(new.uid,"registered",now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `data`
--
DROP TABLE IF EXISTS `data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data`  AS  select `registration`.`p` AS `p` from `registration` where (`registration`.`uid` = '35') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`internal`,`usn`),
  ADD KEY `fff` (`usn`);

--
-- Indexes for table `grchat`
--
ALTER TABLE `grchat`
  ADD PRIMARY KEY (`gid`),
  ADD KEY `ffk3` (`sender`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `indchat`
--
ALTER TABLE `indchat`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `ffk5` (`send`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`,`username`);

--
-- Indexes for table `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`messageid`),
  ADD KEY `ffk4` (`sender`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `ffk2` (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grchat`
--
ALTER TABLE `grchat`
  MODIFY `gid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `indchat`
--
ALTER TABLE `indchat`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `fff` FOREIGN KEY (`usn`) REFERENCES `profile` (`pid`);

--
-- Constraints for table `grchat`
--
ALTER TABLE `grchat`
  ADD CONSTRAINT `ffk3` FOREIGN KEY (`sender`) REFERENCES `registration` (`uid`);

--
-- Constraints for table `indchat`
--
ALTER TABLE `indchat`
  ADD CONSTRAINT `ffk5` FOREIGN KEY (`send`) REFERENCES `registration` (`uid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `ffk` FOREIGN KEY (`uid`) REFERENCES `registration` (`uid`) ON DELETE CASCADE;

--
-- Constraints for table `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD CONSTRAINT `ffk4` FOREIGN KEY (`sender`) REFERENCES `registration` (`uid`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `ffk2` FOREIGN KEY (`uid`) REFERENCES `registration` (`uid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
