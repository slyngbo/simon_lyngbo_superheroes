-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 02:22 AM
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
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(3) NOT NULL,
  `Reciever` int(50) NOT NULL,
  `Message` text NOT NULL,
  `Sender` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `Reciever`, `Message`, `Sender`) VALUES
(2, 1, 'Hej smukke', 2),
(7, 2, 'I am awesome', 2),
(9, 4, 'Have you seen what Cap has done this time?', 2),
(10, 6, 'What are you even doing here? This site is only for real superheroes!', 2),
(15, 5, 'Is that a hammer in your pants, or are you just happy to see me?', 4);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `ID` int(5) NOT NULL,
  `Likes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`ID`, `Likes`) VALUES
(20, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(4, 7),
(5, 9),
(1, 16),
(7, 16),
(6, 29),
(3, 31),
(2, 48);

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE `roster` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sex` varchar(128) NOT NULL,
  `Species` varchar(256) NOT NULL,
  `Hair_color` varchar(256) NOT NULL,
  `Eye_color` varchar(256) NOT NULL,
  `Body_shape` varchar(256) NOT NULL,
  `Special_power` varchar(256) NOT NULL,
  `Signature_color` varchar(256) NOT NULL,
  `Image` varchar(256) CHARACTER SET utf8 NOT NULL,
  `url` varchar(256) NOT NULL,
  `Likes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`ID`, `Name`, `Sex`, `Species`, `Hair_color`, `Eye_color`, `Body_shape`, `Special_power`, `Signature_color`, `Image`, `url`, `Likes`) VALUES
(1, 'Wonder Woman', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Pink_Venus_symbol.svg/400px-Pink_Venus_symbol.svg.png', 'Amazon', 'Black', 'Blue', 'Athletic', 'Lasso of truth', 'Gold', 'https://i.pinimg.com/564x/de/a6/f3/dea6f392cd88fc2a08bda757d0f48821.jpg', 'wonder_woman.php', 0),
(2, 'Iron Man', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Male-s%C3%ADmbolo2.svg/199px-Male-s%C3%ADmbolo2.svg.png', 'Human', 'Brown', 'Brown', 'Muscular', 'Technomage', 'Gold/red', 'https://static1.squarespace.com/static/583c906ebe659429d1106265/t/5935941859cc687293cd3f6b/1496683572683/?format=750w', 'ironman.php', 0),
(3, 'Superman', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Male-s%C3%ADmbolo2.svg/199px-Male-s%C3%ADmbolo2.svg.png', 'Kryptonian', 'Black', 'Blue', 'Masculin', 'Enchanced humanoid', 'Blue/Red', 'https://static.posters.cz/image/750webp/51000.webp', 'superman.php', 0),
(4, 'Black Widow', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Pink_Venus_symbol.svg/400px-Pink_Venus_symbol.svg.png', 'Human', 'Red', 'Green', 'Feminine', 'Martial Arts', 'Black', 'https://static.comicvine.com/uploads/original/9/99801/2381611-54578731966469810988114.jpg', 'black_widow.php', 0),
(5, 'Thor', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Male-s%C3%ADmbolo2.svg/199px-Male-s%C3%ADmbolo2.svg.png', 'Asgardian', 'Blond', 'Blue', 'God Like', 'Mjolnir', 'Black/red', 'https://i.pinimg.com/564x/90/20/ba/9020ba9000c05e555db7b375ebc38bed.jpg', 'thor.php', 0),
(6, 'Silk Spectre', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Pink_Venus_symbol.svg/400px-Pink_Venus_symbol.svg.png', 'Human', 'Brown', 'Brown', 'Curvy', 'Martial Arts', 'Yellow/Black', 'https://i.pinimg.com/564x/49/ad/06/49ad065eb246fb154f2b0c1bfd5a121c.jpg', 'silk_spectre.php', 0),
(7, 'Wolverine', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Male-s%C3%ADmbolo2.svg/199px-Male-s%C3%ADmbolo2.svg.png', 'Human/Mutant', 'Brown', 'Green', 'Muscular', 'Immortal', 'Yellow/Black', 'https://i.pinimg.com/564x/9f/c2/11/9fc2112b20183646bc909e742030740f.jpg', 'wolverine.php', 0),
(20, 'Batman', 'Male', 'Human', 'Brown', 'Brown', 'Muscular', 'IÂ´m rich bitch', 'Black/Grey', 'http://art.cafimg.com/images/Category_1/subcat_4058/bale-costume-1%20copy.jpg', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Reciever` (`Reciever`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Likes` (`Likes`);

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Unik` (`ID`),
  ADD KEY `Name` (`Name`),
  ADD KEY `Liked` (`Likes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roster`
--
ALTER TABLE `roster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `roster` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
