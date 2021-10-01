-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 07:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccer411`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `fName`, `lName`, `role`, `password`, `email`, `created_date`) VALUES
(1, 'Gorge', 'Makola', 'eventAdmin', '12345', 'jane@gmail.com', '2021-02-24'),
(2, 'Rudolph', 'Puane', 'superAdmin', '123456', 'rudolphpuane@gmail.com', '2021-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `playerID` varchar(255) NOT NULL,
  `awardType` varchar(255) NOT NULL,
  `awardDate` date NOT NULL,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`playerID`, `awardType`, `awardDate`, `about`) VALUES
('km1', 'ManMatch', '2021-03-16', 'very good player'),
('km1', 'playerWeek', '2021-03-16', 'Good player who started playing in development in 2008 at Makgaka FC in Polokwane'),
('km1', 'playerMonth', '2021-03-16', 'very good player'),
('km1', 'seasonPlayer', '2021-03-16', 'very good player'),
('km12', 'playerWeek', '2021-03-17', 'Good player who started playing in development in 2008 at Makgaka FC in Polokwane'),
('km3', 'playerMonth', '2021-03-17', 'very good player'),
('km9', 'playerMonth', '2021-03-18', 'very good player'),
('km2', 'seasonPlayer', '2021-03-17', 'very good player'),
('km15', 'ManMatch', '2021-03-17', 'very good player');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameID` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `scoreH` int(11) NOT NULL,
  `away` varchar(255) NOT NULL,
  `scoreW` int(11) NOT NULL,
  `gameDate` date NOT NULL,
  `gameTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameID`, `home`, `scoreH`, `away`, `scoreW`, `gameDate`, `gameTime`) VALUES
('Eagl_Kome', 'Eagle FC', 0, 'Kome stars', 0, '2021-10-02', '11:15:00'),
('Kome_Eagl', 'Kome stars', 0, 'Eagle FC', 0, '2021-10-26', '11:15:00'),
('Kom_Eag', 'Kome stars', 0, 'Eagle FC', 0, '2021-10-02', '13:30:00'),
('Kome_Eagl', 'Kome stars', 0, 'Eagle FC', 0, '2021-10-19', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `leagueID` int(11) NOT NULL,
  `teamID` varchar(6) NOT NULL,
  `played` int(11) NOT NULL,
  `win` int(11) NOT NULL,
  `draw` int(11) NOT NULL,
  `lose` int(11) NOT NULL,
  `goals_for` int(11) NOT NULL,
  `goals_against` int(11) NOT NULL,
  `goals_diff` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`leagueID`, `teamID`, `played`, `win`, `draw`, `lose`, `goals_for`, `goals_against`, `goals_diff`, `points`) VALUES
(2, 'km', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'ef', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `picture` varchar(255) NOT NULL,
  `player_id` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `kitNo` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `teamID` varchar(255) NOT NULL,
  `joined_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`picture`, `player_id`, `lName`, `fName`, `age`, `Nationality`, `kitNo`, `position`, `teamID`, `joined_date`) VALUES
('', '', 'PUANE', 'MF', 0, '', '', '', '', '0000-00-00'),
('playerLogo/1093727-image-1461860510.jpg', 'km1', 'Mahlase', 'Kay', 22, 'limpopo', '1', 'Goalkeeper', 'km', '2021-03-13'),
('playerLogo/soccer.jpg', 'km100', 'Maleka', 'Kamogelo', 25, 'limpopo', '100', 'Goalkeeper', 'km', '2021-03-13'),
('playerLogo/1585589223_f25dd.jpg', 'km12', 'Konama', 'Lebo', 22, 'gauteng', '12', 'Middle', 'km', '2021-03-13'),
('playerLogo/dxxdv_8qH8E.jpeg', 'km15', 'Mnisi', 'Ocney', 22, 'limpopo', '15', 'Middle', 'km', '2021-03-13'),
('playerLogo/095064101607483.Y3JvcCw1MTEzLDQwMDAsNDQzLDA.jpg', 'km2', 'Mathebula', 'Katlego', 22, 'gauteng', '2', 'Defender', 'km', '2021-03-13'),
('playerLogo/images (6).jpg', 'km3', 'Konama', 'lerato', 19, 'northWest', '3', 'Defender', 'km', '2021-03-13'),
('playerLogo/download.jpg', 'km9', 'Lekgalwa', 'Robert', 19, 'limpopo', '9', 'Striker', 'km', '2021-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `playerID` varchar(255) NOT NULL,
  `teamID` varchar(255) NOT NULL,
  `goal` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  `goalConceded` int(11) NOT NULL,
  `cleanSheet` int(11) NOT NULL,
  `block` int(11) NOT NULL,
  `yellow` int(11) NOT NULL,
  `red` int(11) NOT NULL,
  `tackle` int(11) NOT NULL,
  `offiside` int(11) NOT NULL,
  `drippling` int(11) NOT NULL,
  `appearance` int(11) NOT NULL,
  `keyPass` int(11) NOT NULL,
  `throughPass` int(11) NOT NULL,
  `crossBall` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `lastUpdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`playerID`, `teamID`, `goal`, `assist`, `goalConceded`, `cleanSheet`, `block`, `yellow`, `red`, `tackle`, `offiside`, `drippling`, `appearance`, `keyPass`, `throughPass`, `crossBall`, `link`, `about`, `lastUpdate`) VALUES
('km9', 'km', 22, 8, 5, 0, 1, 0, 0, 1, 9, 11, 3, 27, 14, 3, 'https://www.youtube.com/embed/4882QyRp_fY', 'Robert is a great player indeed', '2021-03-15'),
('km1', 'km', 4, 2, 3, 0, 21, 1, 0, 23, 5, 14, 4, 25, 29, 9, 'https://www.youtube.com/embed/85E6spD1OjQ', '', '2021-03-15'),
('km2', 'km', 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 'https://www.youtube.com/embed/ifYjIwcVoFU', '1', '2021-03-15'),
('km3', 'km', 0, 0, 0, 0, 38, 1, 0, 26, 12, 8, 2, 7, 5, 4, 'https://www.youtube.com/embed/NvEG5QTiBpk', 'He is been good and very good at covering spaces', '2021-03-15'),
('km100', 'km', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'https://www.youtube.com/embed/ne6HQKfba6s', 'first not to conced', '2021-03-15'),
('km15', 'km', 25, 3, 3, 0, 3, 1, 0, 2, 14, 114, 3, 45, 3, 4, 'https://www.youtube.com/embed/bFdHZSXvb_M', 'kjdvcbdshvcjshvdkcsdajkvhkhv', '2021-03-15'),
('km12', 'km', 3, 4, 3, 0, 5, 2, 0, 16, 6, 25, 4, 17, 5, 6, 'https://www.youtube.com/embed/dYTBt0qFu-w', '', '2021-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `logo` varchar(255) NOT NULL,
  `teamId` varchar(11) NOT NULL,
  `teamName` varchar(255) NOT NULL,
  `teamOwner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `landLine` int(11) NOT NULL,
  `league` varchar(255) NOT NULL,
  `tournament1` varchar(255) NOT NULL,
  `createdDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`logo`, `teamId`, `teamName`, `teamOwner`, `email`, `landLine`, `league`, `tournament1`, `createdDate`) VALUES
('logos/dejavu fc.jpg', 'ef', 'Eagle FC', 'Kgano', 'eagles@gmail.com', 123847363, 'KASI PREMIER LEAGUE', 'Kasi_Knockout', '2021-03-03'),
('logos/kome stars.jpg', 'km', 'Kome stars', 'Mahamba', 'kome@gmail.com', 113234934, 'KASI PREMIER LEAGUE', 'Kasi_Knockout', '2021-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `teammanager`
--

CREATE TABLE `teammanager` (
  `teamID` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammanager`
--

INSERT INTO `teammanager` (`teamID`, `fName`, `lName`, `email`, `password`, `created_Date`) VALUES
('km', 'Lethabo', 'Mokwena', 'mokwena@gmail.com', '12345', '2021-03-13'),
('ef', 'John', 'Hans', 'jHans@gmail.com', '123456', '2021-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`leagueID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `leagueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
