-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 07:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `exam_time_in_minutes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `exam_time_in_minutes`) VALUES
(1, 'Osis', '20'),
(2, 'PHP', '30'),
(7, 'Eclipse', '10');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(1, '1', '5 + 1 = ?', '6', '7', '8', '5', '6', 'Osis'),
(2, '2', '1 + 1 = ?', '6', '7', '4', '2', '2', 'Osis'),
(3, '3', '2 + 2 = ?', '4', '1', '3', '2', '4', 'Osis'),
(10, '4', 'a', 'opt_images/A.jpg', 'opt_images/B.jpg', 'opt_images/C.jpg', 'opt_images/D.jpg', 'opt_images/A.jpg', 'Osis'),
(11, '5', 'test', 'opt_images/a171f9298b590ea2ec0114326466789aA.jpg', 'opt_images/a171f9298b590ea2ec0114326466789aB.jpg', 'opt_images/a171f9298b590ea2ec0114326466789aC.jpg', 'opt_images/a171f9298b590ea2ec0114326466789aD.jpg', 'opt_images/a171f9298b590ea2ec0114326466789aA.jpg', 'Osis'),
(12, '6', 'what is the first alphabet?', 'opt_images/2e148a97f37154d03b89f3a2141c6af3C.jpg', 'opt_images/2e148a97f37154d03b89f3a2141c6af3D.jpg', 'opt_images/2e148a97f37154d03b89f3a2141c6af3B.jpg', 'opt_images/2e148a97f37154d03b89f3a2141c6af3A.jpg', 'opt_images/2e148a97f37154d03b89f3a2141c6af3A.jpg', 'Osis'),
(13, '7', 'What Is the best answer?', 'opt_images/f3ff3dfcc4a39eb30af60e0e1754752cC.jpg', 'opt_images/f3ff3dfcc4a39eb30af60e0e1754752cD.jpg', 'opt_images/f3ff3dfcc4a39eb30af60e0e1754752cB.jpg', 'opt_images/f3ff3dfcc4a39eb30af60e0e1754752cA.jpg', 'opt_images/f3ff3dfcc4a39eb30af60e0e1754752cD.jpg', 'Osis'),
(14, '8', 'aq', 'gambar/56d5d24c7654ca699a7c14d24cbf761eC.jpg', 'gambar/56d5d24c7654ca699a7c14d24cbf761eB.jpg', 'gambar/56d5d24c7654ca699a7c14d24cbf761eA.jpg', 'gambar/56d5d24c7654ca699a7c14d24cbf761eD.jpg', 'gambar/56d5d24c7654ca699a7c14d24cbf761eD.jpg', 'Osis'),
(15, '1', 'ewow', 'gambar/0fda0407b563b12485af664305c5d9ae2.png', 'gambar/0fda0407b563b12485af664305c5d9ae1.png', 'gambar/0fda0407b563b12485af664305c5d9ae4.png', 'gambar/0fda0407b563b12485af664305c5d9ae3.png', 'gambar/0fda0407b563b12485af664305c5d9ae1.png', ''),
(16, '9', 'q', 'gambar/43387e1e718a4fa6b4857054c3a071a71.png', 'gambar/43387e1e718a4fa6b4857054c3a071a72.png', 'gambar/43387e1e718a4fa6b4857054c3a071a73.png', 'gambar/43387e1e718a4fa6b4857054c3a071a74.png', 'gambar/43387e1e718a4fa6b4857054c3a071a74.png', 'Osis'),
(17, '10', 'www', 'gambar/5bed64a607421b45286d53c0240ce9ea2.png', 'gambar/5bed64a607421b45286d53c0240ce9ea3.png', 'gambar/5bed64a607421b45286d53c0240ce9ea4.png', 'gambar/5bed64a607421b45286d53c0240ce9ea1.png', 'gambar/5bed64a607421b45286d53c0240ce9ea1.png', 'Osis'),
(18, '11', 'r', 'gambar/7353ab04895289c6d65f8230609534252.png', 'gambar/7353ab04895289c6d65f8230609534251.png', 'gambar/7353ab04895289c6d65f8230609534253.png', 'gambar/7353ab04895289c6d65f8230609534254.png', 'gambar/7353ab04895289c6d65f8230609534251.png', 'Osis'),
(19, '12', '21', 'gambar/7877f6a0eedc93611a903361fb8a81982.png', 'gambar/7877f6a0eedc93611a903361fb8a81981.png', 'gambar/7877f6a0eedc93611a903361fb8a81984.png', 'gambar/7877f6a0eedc93611a903361fb8a81983.png', 'gambar/7877f6a0eedc93611a903361fb8a81984.png', 'Osis'),
(20, '13', 'qw', 'gambar/5bc65f50dc1aabd7136922d1e2ce73201.png', 'gambar/5bc65f50dc1aabd7136922d1e2ce73202.png', 'gambar/5bc65f50dc1aabd7136922d1e2ce73203.png', 'gambar/5bc65f50dc1aabd7136922d1e2ce73204.png', 'gambar/5bc65f50dc1aabd7136922d1e2ce73204.png', 'Osis'),
(21, '1', 'ab', 'gambar/4e44f4da389a52be45997acae679bede1.png', 'gambar/4e44f4da389a52be45997acae679bede2.png', 'gambar/4e44f4da389a52be45997acae679bede3.png', 'gambar/4e44f4da389a52be45997acae679bede4.png', 'gambar/4e44f4da389a52be45997acae679bede5.png', 'Eclipse'),
(22, '2', 'er', 'gambar/sabi.jpg', 'gambar/sabi.jpg', '', 'gambar/sabi.jpg', 'gambar/sabi.jpg', 'Eclipse'),
(23, '3', 'bisa ga?', 'gambar/B.jpg', 'gambar/C.jpg', '', 'gambar/A.jpg', 'gambar/D.jpg', 'Eclipse'),
(24, '4', 'rr', 'gambar/3e11e267dd684b39bae18f3ebde64248C.jpg', 'gambar/3e11e267dd684b39bae18f3ebde64248D.jpg', 'gambar/3e11e267dd684b39bae18f3ebde64248B.jpg', 'gambar/3e11e267dd684b39bae18f3ebde64248A.jpg', 'gambar/3e11e267dd684b39bae18f3ebde64248D.jpg', 'Eclipse'),
(25, '5', 'qq', 'gambar/e4098a20d2aec8f639c9303f3ec63fe1', 'gambar/e4098a20d2aec8f639c9303f3ec63fe1A.jpg', 'gambar/e4098a20d2aec8f639c9303f3ec63fe1C.jpg', 'gambar/e4098a20d2aec8f639c9303f3ec63fe1D.jpg', 'gambar/e4098a20d2aec8f639c9303f3ec63fe1D.jpg', 'Eclipse'),
(26, '6', 'iya', 'gambar/D.jpg', 'gambar/C.jpg', 'gambar/B.jpg', 'gambar/A.jpg', 'gambar/D.jpg', 'Eclipse'),
(27, '7', 'tt', 'gambar/image (2).png', 'gambar/image (3).png', 'gambar/image (3).png', 'gambar/image (3).png', 'gambar/image (3).png', 'Eclipse'),
(28, '8', 'tq', 'gambar/b755443aef43c97b4a6dc8b63f387da51.png', 'gambar/b755443aef43c97b4a6dc8b63f387da52.png', 'gambar/b755443aef43c97b4a6dc8b63f387da53.png', 'gambar/b755443aef43c97b4a6dc8b63f387da54.png', 'gambar/b755443aef43c97b4a6dc8b63f387da54.png', 'Eclipse'),
(29, '9', 'yy', 'gambar/1f88a56ebb0f1ba9ba76d36d55dc47c21.png', 'gambar/1f88a56ebb0f1ba9ba76d36d55dc47c22.png', 'gambar/1f88a56ebb0f1ba9ba76d36d55dc47c24.png', 'gambar/1f88a56ebb0f1ba9ba76d36d55dc47c25.png', 'gambar/1f88a56ebb0f1ba9ba76d36d55dc47c25.png', 'Eclipse');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'afakih', 'fajduwani', 'admin', '1', 'afakihfaj@gmail.com', '082331495886'),
(2, 'a', 'b', 'afakihf', 'ad', 'afakih@gmail.com', '082331495886');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
