-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2018 at 11:59 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ha07`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` longblob,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_title` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `posting_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_title`, `Location`, `item_description`, `price`, `posting_date`, `user_id`) VALUES
(1, 'test', 'test', 'test', 1, '2018-04-08', 1),
(2, 'test', 'test', 'test', 1, '2018-04-08', 1),
(3, 'test', 'test', 'test', 1, '2018-04-08', 1),
(4, 'test2', 'test2', 'test2', 2, '2018-04-08', 1),
(5, 'test3', 'test3', 'test3', 3, '2018-04-09', 1),
(6, 'test3', 'test3', 'test3', 3, '2018-04-08', 1),
(7, 'test4', 'test4', 'test4', 4, '2018-04-09', 1),
(8, 'test5', 'test 5', 'test 5', 5, '2018-04-09', 1),
(9, 'test6', 'test6', 'test6', 6, '2018-04-09', 1),
(10, 'test7', 'test7', 'test7', 7, '2018-04-09', 1),
(11, 'test8', 'test8', 'test8', 8, '2018-04-09', 1),
(12, 'test9', 'test9', 'test9', 9, '2018-04-09', 1),
(13, 'test10', 'test10', 'test10', 10, '2018-04-09', 1),
(14, 'test11', 'test11', 'test11', 11, '2018-04-09', 1),
(15, 'test12', 'test12', 'test12', 12, '2018-04-09', 1),
(16, 'test13', 'test13', 'test13', 13, '2018-04-09', 1),
(17, 'test15', 'test15', 'test15', 15, '2018-04-10', 1),
(18, 'test16', 'test16', 'test16', 16, '2018-04-09', 1),
(19, 'test17', 'test17', 'test17', 17, '2018-04-09', 1),
(20, 'test20', 'test20', 'test20', 20, '2018-04-09', 1),
(21, 'test21', 'test21', 'test21', 21, '2018-04-09', 1),
(22, 'test22', 'test22', 'test22', 22, '2017-04-09', 1),
(23, 'test23', 'test23', 'test23', 23, '2018-04-09', 1),
(24, 'test24', 'test24', 'test24', 24, '2018-04-09', 1),
(25, 'test25', 'test25', 'test25', 25, '2018-04-09', 1),
(26, 'test26', 'test26', 'test26', 26, '2018-04-09', 1),
(27, 'test27', 'test27', 'test27', 27, '2018-04-09', 1),
(28, 'test28', 'test28', 'test28', 28, '2018-04-09', 1),
(29, 'test29', 'test29', 'test29', 29, '2018-04-09', 1),
(30, 'tst30', 'tst30', 'tst30', 330, '2018-04-09', 1),
(31, 'test31', 'test31', 'test31', 31, '2018-04-09', 1),
(32, 'test32', 'test32', 'test32', 32, '2014-08-09', 1),
(33, 'tst33', 'tst33', 'tst33', 33, '2018-04-09', 1),
(34, 'test35', 'test35', 'test35', 35, '2018-04-09', 1),
(35, 'test36', 'test36', 'test36', 36, '2018-04-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `activation_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `activation_code`) VALUES
(4, 'tharindu', 'tharindusenadeera081@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'L5fOs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
