-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 01:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_listing`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `token` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mnane` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `short_info` varchar(150) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `mnane`, `lname`, `short_info`, `email`, `contact`, `password`) VALUES
(1, 'Shashi', '', 'Kumar', 'Hi, Currently working as a Freelancer. Looking for a full time job ', 'ayushmankasyap@gmail.com', '8409061507', 'demo'),
(10, 'Shashi', '', 'Kumar', 'Hello There Currently working as a freelancer', 'demo@demo.com', '8409061507', 'demo'),
(11, 'Rakesh', '', 'Kumar', 'Hello There Currently working as a Software Dev', 'demo1@demo.com', '1234567890', 'demo1'),
(12, 'Suresh', '', 'Kumar', 'Hi, There Currently working as a Devops Admin', 'demo2@demo.com', '1234567890', 'demo2'),
(13, 'Kartik', '', 'Kumar', 'Currently working in TCS', 'demo3@demo.com', '1234567890', 'demo3'),
(14, 'Prakash', '', 'Paswan', 'Currently Working In Sbi bank', 'demo4@demo.com', '1234569770', 'demo4');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `employer_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `name`, `about`, `employer_type`) VALUES
(1, 'ABC Software and technology Limited', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas maximus purus, pretium semper felis sollicitudin ut. Vivamus lacinia sagittis pretium. Duis mattis, quam a viverra elementum, odio odio condimentum diam, vel imperdiet nulla liber', 'IT & Software');

-- --------------------------------------------------------

--
-- Table structure for table `job_applied`
--

CREATE TABLE `job_applied` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_applied`
--

INSERT INTO `job_applied` (`id`, `email`, `job_id`) VALUES
(12, 'demo@demo.com', '1'),
(13, 'demo@demo.com', '2'),
(14, 'demo@demo.com', '4'),
(15, 'demo1@demo.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `job_desc`
--

CREATE TABLE `job_desc` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_desc`
--

INSERT INTO `job_desc` (`id`, `job_id`, `description`, `experience`, `education`, `skills`, `type`) VALUES
(1, 1, 'Roles and Responsibilities\r\n\r\n1.To participate in requirement analysis\r\n2. Improve existing software with senior developer assistant\r\n3. Identifying Bugs and solving the same.\r\n4. Working front-end technologies when required\r\n\r\n5. A fullstack Developer\r\n\r\n\r\nDesired Candidate Profile\r\n\r\n1. Good knowledge of the .NET language - VB.Net / C# -\r\n2. Good knowledge in HTML, CSS, Java Script Front end technology\r\n3. Familiarity with Microsoft SQL Server / My SQL/ PostgreSQL\r\n4. Knowledge of .NET Frame work/ Dot Net Core / MVC Pattern\r\n5. Strong understanding of object-oriented programming\r\n\r\n6. Web API RESTFul\r\n\r\n7. Working with open source project\r\n\r\n8. Mobile App (Xamarin, Android) (Optional)', 'Mid Level', 'UG :BCA in Computers\r\nPG :MCA in Computers', 'software development,css,java,full stack,.Net,html,software developer', 'Full Time'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu sapien nunc. Vestibulum sit amet ligula turpis. Etiam quis elit neque. Mauris vel lacus vel diam luctus ullamcorper at eget diam. Cras et congue turpis, ut elementum diam. Maecenas scelerisque nunc purus, vel dignissim leo egestas a. Sed massa diam, imperdiet id arcu ut, interdum interdum nisl. Integer blandit eleifend laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam convallis felis vel metus sodales rhoncus.', 'Entry Level', 'Nulla vel arcu nec elit volutpat sagittis quis ut magna', 'estibulum, auctor, ut, nisi, sit, amet, vestibulum', 'Part Time'),
(3, 4, 'oles and Responsibilities 1.To participate in requirement analysis 2. Improve existing software with senior developer assistant 3. Identifying Bugs and solving the same. 4. Working front-end technologies when required 5. A fullstack Developer Desired Candidate Profile 1. Good knowledge of the .NET language - VB.Net / C# - 2. Good knowledge in HTML, CSS, Java Script Front end technology 3. Familiarity with Microsoft SQL Server / My SQL/ PostgreSQL 4. Knowledge of .NET Frame work/ Dot Net Core / MVC Pattern 5. Strong understanding of object-oriented programming 6. Web API RESTFul 7. Working with open source project 8. Mobile App (Xamarin, Android) (Optional)', 'Mid Level', 'UG :BCA in Computers PG :MCA in Computers', 'AWS,Python,C', 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `job_listed`
--

CREATE TABLE `job_listed` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `posted_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_listed`
--

INSERT INTO `job_listed` (`id`, `title`, `posted_by`) VALUES
(1, 'Software Developer', '1'),
(2, 'Hardware Engineer', '1'),
(4, 'AWS Engineer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `min_salary` int(11) NOT NULL,
  `max_salary` int(11) NOT NULL,
  `salary_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `job_id`, `min_salary`, `max_salary`, `salary_type`) VALUES
(1, 1, 18000, 28000, 'per month'),
(2, 2, 100000, 150000, 'per annum'),
(3, 4, 25000, 35000, 'Monthly');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Shashi Kumar', 'demo@demo.com', '8409061507', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applied`
--
ALTER TABLE `job_applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_desc`
--
ALTER TABLE `job_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_listed`
--
ALTER TABLE `job_listed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_applied`
--
ALTER TABLE `job_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_listed`
--
ALTER TABLE `job_listed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
