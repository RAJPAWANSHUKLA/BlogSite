-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2022 at 11:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Writer` varchar(40) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `Title`, `Description`, `Writer`, `image`) VALUES
(1, 'Movies', 'Movies are one of the most important part of this era influencing a single person to whole country or for some extend to world also. Movies effect a person in his/her psychological thinking and if we look at this from a community point of view movies are the somewhat the unknown tool of building an essence of a community. If we now look at movies from the country point of view, they can be used to build up a very strong soft power of a country in global level.', 'Raj Pawan Shukla', 'images/movies.jpeg'),
(2, 'Sports', 'Sports are very crucial part of our society as they acts as an alternative to our regular workspace. But Sports are not just an alternative from our regular lifestyle, they develop many skills in a person unconsciously, from leadership qualities to be a good team player all can be learnt by playing sports. There are so many pros of being a sportsperson that so many books are published on it, so many movies are made just for sports.', 'Raj Pawan Shukla', 'images/sports.jpeg'),
(3, '123456789', 'bahut badhiya hai dekh lo', 'arjun@gmail.com', 'images/zoom_0.mp4'),
(5, '123456789', '', 'arjun@gmail.com', 'images/'),
(6, '123456789', '', 'arjun@gmail.com', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `Name` varchar(30) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`Name`, `Image`, `Price`, `Description`, `Time`) VALUES
('Shirt', 'images/image1.png', 2000, 'Cotton Shirt Size L \r\n', '2022-03-09'),
('Pant', 'images/image2.png', 1000, 'size 32\r\n', '2022-03-09'),
('Shoes', 'images/image3.png', 2500, 'Size 9\r\nColor Black\r\n', '2022-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Comments` text NOT NULL,
  `Time` varchar(30) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Id`, `Name`, `Email`, `Comments`, `Time`, `blog_id`) VALUES
(1, 'raj', 'raj@a.com', 'sadds', '08:44:15', 1),
(2, 'raj', 'raj@a.com', 'bahut hi bakwaas likha hai', '08:44:29', 1),
(3, 'tarun', 'tarun@g.com', 'bahut acha likha hai', '08:47:05', 1),
(4, 'tarun', 'raj@a.com', 'bahut bakwass hai ye', '08:50:26', 2),
(5, 'a@g.com', '', 'shqgshjus', '09:28:47', 1),
(8, 'r@g.com', '', 'xdaswcdscdswcv', '10:14:38', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
