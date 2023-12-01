-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 08:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `priv` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `county` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address_1`, `address_2`, `gender`, `priv`, `phone`, `image`, `country`, `county`, `city`) VALUES
(4, 'abdalla_mansour', '76a889eb714f2f897ad8e8e0dcfc7dbc', 'bodemansour8@gmail.com', 'nocta street', '', 0, 1, '01019113427', '6567404026b1e.jpg', 'Egypt', 'aga', 'elmansoura'),
(5, 'ahmed_mahameho', '5d6685f9c56cdd04d635c7cbed612db3', 'ahmed@gmail.com', 'testtesting1', 'test2', 0, 0, '1023571010', '6569091419c62.png', 'Egypt', 'ss', 'elmansourasss'),
(6, 'hoda', '5d6685f9c56cdd04d635c7cbed612db3', 'hoda@gmail.com', 'testaddress', 'testaddress2', 1, 0, '1023561027358', 'default.png', 'Egypt', 'testcounty', 'test'),
(7, 'rokaia', '54b1d109dc7156ef46816a9527a861bc', 'rokaia', 'balady', 'balady el tania', 1, 1, '1289751010', 'default.png', 'Egypt', 'aga', 'elmansoura balady'),
(8, 'osama', '5d6685f9c56cdd04d635c7cbed612db3', '65679cda8df80@gmail.com', '65679cda8df87', '65679cda8df87', 0, 0, '52751627071', 'default.png', 'Egypt', '65679cda8df87', '65679cda8df87'),
(9, 'wegdaan', '5d6685f9c56cdd04d635c7cbed612db3', '65679cda9e9c3@gmail.com', '65679cda9e9cd', '65679cda9e9cd', 1, 0, '60001372785', 'default.png', 'Egypt', '65679cda9e9cd', '65679cda9e9cd'),
(10, 'abdalla', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdaa7801@gmail.com', '65679cdaa780c', '65679cdaa780c', 0, 0, '96493959071', 'default.png', 'Egypt', '65679cdaa780c', '65679cdaa780c'),
(11, 'sana', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdaaed5e@gmail.com', '65679cdaaed69', '65679cdaaed69', 1, 0, '81303752781', 'default.png', 'Egypt', '65679cdaaed69', '65679cdaaed69'),
(12, 'ali', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdab5129@gmail.com', '65679cdab5134', '65679cdab5134', 0, 0, '77497102598', 'default.png', 'Egypt', '65679cdab5134', '65679cdab5134'),
(13, 'zahraa', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdabc678@gmail.com', '65679cdabc685', '65679cdabc685', 1, 0, '19662424197', 'default.png', 'Egypt', '65679cdabc685', '65679cdabc685'),
(14, 'salma', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdac7f85@gmail.com', '65679cdac7f8f', '65679cdac7f8f', 1, 0, '99131621076', 'default.png', 'Egypt', '65679cdac7f8f', '65679cdac7f8f'),
(15, 'osama', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdacf470@gmail.com', '65679cdacf47b', '65679cdacf47b', 0, 0, '37709334564', 'default.png', 'Egypt', '65679cdacf47b', '65679cdacf47b'),
(16, 'ahmed', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdad5dd0@gmail.com', '65679cdad5dda', '65679cdad5dda', 0, 0, '74220951121', 'default.png', 'Egypt', '65679cdad5dda', '65679cdad5dda'),
(17, 'mahmod', '5d6685f9c56cdd04d635c7cbed612db3', '65679cdadd2c4@gmail.com', '65679cdadd2cf', '65679cdadd2cf', 0, 0, '62290733055', 'default.png', 'Egypt', '65679cdadd2cf', '65679cdadd2cf'),
(18, 'ahmed', '5d6685f9c56cdd04d635c7cbed612db3', '65679d8c9f244@gmail.com', 'test testing', 'test testing', 0, 0, '15321271133', 'default.png', 'Egypt', 'test testing', 'test testing'),
(19, 'shaimaa', '5d6685f9c56cdd04d635c7cbed612db3', '65679d8caebe8@gmail.com', 'test testing', 'test testing', 1, 0, '82294707646', 'default.png', 'Egypt', 'test testing', 'test testing'),
(20, 'aliaa', '5d6685f9c56cdd04d635c7cbed612db3', '65679d8cb8374@gmail.com', 'test testing', 'test testing', 1, 0, '97674209256', 'default.png', 'Egypt', 'test testing', 'test testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
