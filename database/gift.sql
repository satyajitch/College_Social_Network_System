-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3306
-- Generation Time: May 17, 2023 at 08:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gift`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `slno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`slno`, `name`, `id`, `password`) VALUES
(1, 'Satyajit', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `receiver`, `comment`) VALUES
(4, 'dhiraj@gmail.com', 'radheysaraan@gmail.com', 'text'),
(5, 'manishsahu8696@gmail.com', 'dhiraj@gmail.com', 'fdf'),
(6, 'dhiraj@gmail.com', 'manishsahu8696@gmail.com', 'hii'),
(7, 'dhiraj@gmail.com', 'radheysaraan@gmail.com', 'test'),
(8, 'dhiraj@gmail.com', 'manishsahu8696@gmail.com', ',mk.,'),
(9, 'dhiraj@gmail.com', 'hitesh@gmail.com', 'Hii Hitesh'),
(10, 'hitesh@gmail.com', 'dhiraj@gmail.com', 'Hii Dhiraj'),
(11, 'dhiraj@gmail.com', 'hitesh@gmail.com', 'How are you hitesh'),
(12, 'radheysaraan@gmail.com', 'dhiraj@gmail.com', 'hii'),
(13, 'hitesh@gmail.com', 'radheysaraan@gmail.com', 'hii Radhe'),
(14, 'radheysaraan@gmail.com', 'hitesh@gmail.com', ''),
(15, 'satyajit@gmail.com', 'hitesh@gmail.com', 'Hii Hitesh ...Thanks for accpeting my request.'),
(16, 'nilamadhab12@gmail.com', 'debasis@gmail.com', 'Hii Debas'),
(17, 'debasis@gmail.com', 'nilamadhab12@gmail.com', 'Hello Nila...How are you?'),
(18, 'nilamadhab12@gmail.com', 'debasis@gmail.com', 'I am Fine...'),
(19, 'nilamadhab12@gmail.com', 'debasis@gmail.com', 'What about you?'),
(20, 'debasis@gmail.com', 'nilamadhab12@gmail.com', 'Good Yar..'),
(21, 'pritam@gmail.com', 'debasis@gmail.com', 'Hii Debasis Pradhan'),
(22, 'debasis@gmail.com', 'pritam@gmail.com', 'Hii Deba'),
(23, 'satyajit@gmail.com', 'priyaranjan@gmail.com', 'Hii Priyaranjan'),
(24, 'priyaranjan@gmail.com', 'satyajit@gmail.com', 'Hii satyajit'),
(25, 'subhankar@gmail.com', 'hitesh@gmail.com', 'Hey there');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `count` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`count`, `id`, `comment`, `email`) VALUES
(1, 4, 'good', 'post/s_288259b26d5ca7684.jpg'),
(2, 4, 'nice', 'post/s_288259b26d5ca7684.jpg'),
(3, 4, 'gf', 'post/s_288259b26d5ca7684.jpg'),
(4, 4, 'testing', 'dhiraj@gmail.com'),
(5, 4, 'test2', 'dhiraj@gmail.com'),
(6, 4, 'dkjewf', 'dhiraj@gmail.com'),
(7, 7, 'test1', 'dhiraj@gmail.com'),
(8, 7, 'test2', 'dhiraj@gmail.com'),
(9, 9, 'fine..What about you?', 'manishsahu8696@gmail.com'),
(10, 12, 'Congratulations...', 'debasis@gmail.com'),
(11, 12, 'Congrats !!!', 'satyajit@gmail.com'),
(12, 23, 'Happy Diwali Guys!', 'priyaranjan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `s_status` varchar(50) NOT NULL,
  `r_status` varchar(50) NOT NULL,
  `friends` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `sender`, `receiver`, `s_status`, `r_status`, `friends`) VALUES
(26, 'dhiraj@gmail.com', 'radheysaraan@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(27, 'hitesh@gmail.com', 'radheysaraan@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(28, 'manishsahu8696@gmail.com', 'dhiraj@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(29, 'hitesh@gmail.com', 'dhiraj@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(31, 'hitesh@gmail.com', 'satyajit@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(32, 'priyaranjan@gmail.com', 'satyajit@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(33, 'hitesh@gmail.com', 'manishsahu8696@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(34, 'debasis@gmail.com', 'priyaranjan@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(35, 'debasis@gmail.com', 'satyajit@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(36, 'nilamadhab12@gmail.com', 'debasis@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(37, 'pritam@gmail.com', 'debasis@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(38, 'satyajit1@gmail.com', 'debasis@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(40, 'sambit@gmail.com', 'debasis@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(41, 'satyajit@gmail.com', 'dhiraj@gmail.com', 'SEND', 'ACCEPTED', 'YES'),
(42, 'satyajit@gmail.com', 'pritam@gmail.com', 'SEND', 'ACCEPTED', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

CREATE TABLE `friend_list` (
  `id` int(11) NOT NULL,
  `user1` varchar(100) NOT NULL,
  `user2` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `friend_list`
--

INSERT INTO `friend_list` (`id`, `user1`, `user2`, `status`) VALUES
(4, 'dhiraj@gmail.com', 'radheysaraan@gmail.com', 'YES'),
(5, 'radheysaraan@gmail.com', 'dhiraj@gmail.com', 'YES'),
(6, 'hitesh@gmail.com', 'radheysaraan@gmail.com', 'YES'),
(7, 'radheysaraan@gmail.com', 'hitesh@gmail.com', 'YES'),
(8, 'manishsahu8696@gmail.com', 'dhiraj@gmail.com', 'YES'),
(9, 'dhiraj@gmail.com', 'manishsahu8696@gmail.com', 'YES'),
(10, 'hitesh@gmail.com', 'dhiraj@gmail.com', 'YES'),
(11, 'dhiraj@gmail.com', 'hitesh@gmail.com', 'YES'),
(12, 'hitesh@gmail.com', 'manishsahu8696@gmail.com', 'YES'),
(13, 'hitesh@gmail.com', 'satyajit@gmail.com', 'YES'),
(14, 'satyajit@gmail.com', 'hitesh@gmail.com', 'YES'),
(15, 'priyaranjan@gmail.com', 'satyajit@gmail.com', 'YES'),
(16, 'satyajit@gmail.com', 'priyaranjan@gmail.com', 'YES'),
(17, 'hitesh@gmail.com', 'manishsahu8696@gmail.com', 'YES'),
(18, 'manishsahu8696@gmail.com', 'hitesh@gmail.com', 'YES'),
(19, 'debasis@gmail.com', 'priyaranjan@gmail.com', 'YES'),
(20, 'debasis@gmail.com', 'satyajit@gmail.com', 'YES'),
(21, 'nilamadhab12@gmail.com', 'debasis@gmail.com', 'YES'),
(22, 'debasis@gmail.com', 'nilamadhab12@gmail.com', 'YES'),
(23, 'pritam@gmail.com', 'debasis@gmail.com', 'YES'),
(24, 'debasis@gmail.com', 'pritam@gmail.com', 'YES'),
(25, 'satyajit@gmail.com', 'debasis@gmail.com', 'YES'),
(26, 'satyajit1@gmail.com', 'debasis@gmail.com', 'YES'),
(27, 'debasis@gmail.com', 'satyajit1@gmail.com', 'YES'),
(28, 'priyaranjan@gmail.com', 'debasis@gmail.com', 'YES'),
(29, 'sambit@gmail.com', 'debasis@gmail.com', 'YES'),
(30, 'sambit@gmail.com', 'debasis@gmail.com', 'YES'),
(31, 'debasis@gmail.com', 'sambit@gmail.com', 'YES'),
(32, 'satyajit@gmail.com', 'dhiraj@gmail.com', 'YES'),
(33, 'dhiraj@gmail.com', 'satyajit@gmail.com', 'YES'),
(34, 'satyajit@gmail.com', 'pritam@gmail.com', 'YES'),
(35, 'pritam@gmail.com', 'satyajit@gmail.com', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `username` varchar(50) NOT NULL,
  `rcv` varchar(50) NOT NULL,
  `msg` varchar(60000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`username`, `rcv`, `msg`, `id`) VALUES
('manishsahu8696@gmail.com', 'manishsahu8696@gmail.com', 'hii', 1),
('manishsahu8696@gmail.com', 'hitesh@gmail.com', 'Hii', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `text` varchar(200) NOT NULL,
  `like` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `email`, `image`, `text`, `like`, `status`) VALUES
(3, 'manishsahu8696@gmail.com', 'post/s_382559b26d14b1635.jpg', 'test', '', ''),
(5, 'dhiraj@gmail.com', 'post/s_598859db2116037f4.jpg', 'hii', '1', 'TRUE'),
(6, 'dhiraj@gmail.com', 'post/s_607759db224a8f0f5.jpg', ' testing', '17', 'TRUE'),
(7, 'dhiraj@gmail.com', 'post/s_612259db4ec44b556.png', 'test', '4', 'TRUE'),
(9, 'satyajit@gmail.com', '', 'Hii How are you?', '2', 'TRUE'),
(10, 'priyaranjan@gmail.com', 'post/s_288663ff258a0b15c.jpg', 'GIFT Musical Night', '2', 'TRUE'),
(11, 'debasis@gmail.com', 'post/s_395063ff31fe184ba.jpg', 'Memories..', '1', 'TRUE'),
(12, 'samirpanda@gmail.com', 'post/s_162463ff3892807f6.jpg', 'Congratulation Folks!', '6', 'TRUE'),
(17, 'priyaranjan@gmail.com', 'post/s_337563ff95df6e2a9.jpg', 'Missing first year', '1', 'TRUE'),
(18, 'shakti@gmail.com', 'post/s_325463ff977fdd6e3.jpg', 'My college, GIFT', '', 'TRUE'),
(19, 'satyajit@gmail.com', 'post/s_224063ff9937aa5eb.jpg', 'Happy Diwali Guys!', '', 'TRUE'),
(20, 'sambit@gmail.com', 'post/s_607563ff99d11314f.jpg', 'In NandanKanan, Bhubaneswar', '', 'TRUE'),
(21, 'satyajit@gmail.com', 'post/s_1516640049937278c.jpg', 'hey', '', 'TRUE'),
(22, 'satyajit1@gmail.com', 'post/s_142264004cd98a70a.jpg', 'hello', '', 'TRUE'),
(23, 'satyajit1@gmail.com', 'post/s_529464004d0de819f.jpg', 'happy diwali', '2', 'TRUE'),
(24, 'subhankar@gmail.com', 'post/s_31296461ed195ab0f.jpg', 'This is my College, Gandhi Institute for Technology (GIFT), Bhubaneswar', '1', 'TRUE');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `email`, `password`, `mobile`, `dob`, `gender`, `image`) VALUES
('Debasis', 'Pradhan', 'debasis@gmail.com', 'debasis', '9081454646', '2002-01-24', 'male', 'profilepic/IMG202212311010445-removebg-preview.png'),
('Dhiraj', 'Sahu', 'dhiraj@gmail.com', '5961', '7879767470', '31/10/1992', 'male', 'profilepic/FB_IMG_1554082451640.jpg'),
('Hitesh', 'Sahu', 'hitesh@gmail.com', '2711', '8960437205', '2000-09-12', 'male', 'profilepic/IMG_20200110_145418.jpg'),
('Manish', 'Sahu', 'manishsahu8696@gmail.com', '3976', '8602811878', '02/12/1996', 'male', 'profilepic/FB_IMG_1567691190360.jpg'),
('Nila Madhab', 'Rana', 'nilamadhab12@gmail.com', 'nilamadhab', '1235342665', '2001-09-13', 'male', 'img/user.png'),
('Pritam Kumar', 'Nayak', 'pritam@gmail.com', 'pritam', '435567564', '2002-02-20', 'male', 'profilepic/IMG20221208164838.jpg'),
('Priyaranajan', 'Panda', 'priyaranjan@gmail.com', 'priyaranjan', '875434343', '2001-04-20', 'male', 'profilepic/1677654204400.jpg'),
('Radhey', 'Baba', 'radheysaraan@gmail.com', '3049', '8963214755', '1992-04-01', 'male', 'profilepic/IMG_20181224_180843.jpg'),
('Rahul', 'Kumar', 'rahul@gmail.com', '7698', '8963214754', '2012-12-02', 'male', 'profilepic/FB_IMG_15450542990699668.jpg'),
('Sambit Kumar', 'Panda', 'sambit@gmail.com', 'sambit', '6723783569', '2002-02-28', 'male', 'profilepic/IMG_20230511_210233.jpg'),
('Samir', 'Panda', 'samirpanda@gmail.com', 'samir', '9853760990', '1991-05-16', 'male', 'profilepic/IMG_20230301_163242.jpg'),
('satyajita', 'Chinara', 'satyajit1@gmail.com', '12345678', '7934734385', '1974-03-12', 'male', 'img/user.png'),
('Satyajit', 'Chinara', 'satyajit@gmail.com', 'satyajit', '1234567890', '2002-01-06', 'male', 'profilepic/1642576574264.jpg'),
('Shakti Prasanna', 'Deo', 'shakti@gmail.com', '9609', '4324032944', '2002-05-02', 'male', 'profilepic/IMG-20230301-WA0000.jpg'),
('Subhankar', 'Dash', 'subhankar@gmail.com', 'subhankar', '1234565656', '2002-01-17', 'male', 'img/user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_list`
--
ALTER TABLE `friend_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`,`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `friend_list`
--
ALTER TABLE `friend_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
