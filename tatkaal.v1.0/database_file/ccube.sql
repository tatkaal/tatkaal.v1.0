-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 05:36 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccube`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prob_categories`
--

CREATE TABLE `prob_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prob_categories`
--

INSERT INTO `prob_categories` (`cat_id`, `cat_name`) VALUES
(1, 'I need Employer'),
(2, 'I need Employee'),
(3, 'Household Issues'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longi` varchar(255) NOT NULL,
  `skill` varchar(11) NOT NULL,
  `received_message` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `live_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `dob`, `email`, `lat`, `longi`, `skill`, `received_message`, `cost`, `password`, `gender`, `live_address`) VALUES
(10, '', 'kaustuv', 'prajapati', '1980-08-26', 'kaustuvprajapati@gmail.com', '27.6991555', '85.3084416', 'plumber', 0, 0, '$2y$10$hGQLvpmfIzD3cHZUe.k.ieQo0p5Qz5j2mjTRMwGjmytkcJQ6oNdhm', 'male', ''),
(11, '', 'Sujan', 'Adhikari', '1998-02-04', 'zeradt@gmail.com', '27.745612', '85.374846', 'medical', 0, 0, '$2y$10$bJXS3HJ1ytLxMNh/76QmBOXV07i0Ywc9TfEGmDLQ2IAjzFvM8i11W', 'male', ''),
(12, '', 'Kiran', 'Aryal', '1997-05-10', 'kiranaryal.msp2018@mspnepal.com', '27.683307', '85.356501', 'medical', 0, 0, '$2y$10$qK9UYNszLx0xeg2CPXA2QuurAXljNmTE4u3S1YJQzya2SEgdnsrt2', 'male', ''),
(13, '', 'naruto', 'shippu', '1980-08-26', 'naruto@gmail.com', '27.672693', ' 85.325151', 'computer te', 0, 0, '$2y$10$KTavWqD2OGnTzb6wi.bTpeNIo.cPj8oQdsKvCXLpnXjDibxwYvam6', 'male', ''),
(14, '', 'sasuke', 'uchiha', '1980-08-26', 'sasukeuchiha@gmail.com', '27.701705', '85.339849', 'plumber', 0, 0, '$2y$10$MP4H/5eScrbCotkNlO2MVOppsR/ItXhSJhDv8k9eq6Jp9IF29Uj0O', 'male', ''),
(15, '', 'sakura', 'haruno', '1980-08-26', 'sakura@gmail.com', '27.678523', '85.349239', 'baby sitter', 0, 0, '$2y$10$p0Qll5QA6MGHCuZz8EU9GuicCD6t5fC7NCp8pMir6nxwtGcrCNrly', 'female', ''),
(16, '', 'abc', 'xyz', '1980-08-26', 'abc@gmail.com', '27.6991555', '85.3084416', 'plumber', 0, 0, '$2y$10$cq7FrTKqFhKw8iuFksQ/w.PnM/I9sBuI88Z/0mxYqhIqUw0bNNQZu', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`,`receiver`),
  ADD KEY `receiver` (`receiver`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `prob_categories`
--
ALTER TABLE `prob_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `skill` (`skill`) USING BTREE,
  ADD KEY `received_message` (`received_message`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prob_categories`
--
ALTER TABLE `prob_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
