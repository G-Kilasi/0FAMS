-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 07:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
drop Database ofams;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

DROP DATABASE IF EXISTS `ofams`;
--
-- Database: `ofams`
--
CREATE DATABASE IF NOT EXISTS `ofams` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ofams`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `password_reset_token`, `verification_token`, `email`, `auth_key`, `status`, `created_at`, `updated_at`, `password`) VALUES
(1, 'JOHCRAZY', '$2y$13$DQaQUDh241km4vlYS1Tnn.fQPH1hOe0pfBPofrk7xQIjn2KTqhlfi', NULL, 'DOUjVZ-DwivIJgqgNwXOSpKLtgMLDxvD_1713010437', 'jjuma8165@gmail.com', 'y1T1ukWtxNAOtHxNmYW7BLoYY-5tZSUh', 10, 1713010437, 1713010437, NULL),
(2, 'G-KILASI', '$2y$13$KrvcbElLpjXvOj5Nhd6Yae7rZDbJjeCjv0D5ShqzMY/CBWpYf001u', NULL, 'nJnf6pjaa3Nr4DDwmMPVlA-BTCz3cK1T_1713012457', 'gracekilasi5@gmail.com', 'wEF0UUmihcqoRoYKkAnYV5RLTbEE2kP6', 10, 1713012457, 1713012457, NULL);


INSERT INTO `admin` (`id`, `username`, `password_hash`, `password_reset_token`, `verification_token`, `email`, `auth_key`, `status`, `created_at`, `updated_at`, `password`) VALUES
(1, 'G-KILASI', '$2y$13$DQaQUDh241km4vlYS1Tnn.fQPH1hOe0pfBPofrk7xQIjn2KTqhlfi', NULL, 'DOUjVZ-DwivIJgqgNwXOSpKLtgMLDxvD_1713010437', 'jjuma8165@gmail.com', 'y1T1ukWtxNAOtHxNmYW7BLoYY-5tZSUh', 10, 1713010437, 1713010437, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicant`;
CREATE TABLE IF NOT EXISTS `applicant` (
  `ApplicantID` int(11) AUTO_INCREMENT,
  `userID` INT,
  FOREIGN KEY(`userID`) REFERENCES `user`(`id`),
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `verified` ENUM('Pending','Verified'),
  `accepted` ENUM('Pending','Accepted'),
  `availability` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ApplicantID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `TaskID` int(11) AUTO_INCREMENT,
  `description` text DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `priority` ENUM('Low','Medium','High'),
  `status` ENUM('Pending','In Progress','Completed'),
  PRIMARY KEY (`TaskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `EquipmentID` int(11) AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `cost` decimal(10,2), 
  `description` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`EquipmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------


CREATE TABLE `worker` (
  `Workerid` INT PRIMARY KEY AUTO_INCREMENT,
  `applicantID` INT,
  FOREIGN KEY(`applicantID`) REFERENCES `applicant`(`ApplicantID`),
  `department` varchar(225) NOT NULL,
  `salary` decimal(10,2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `ExpenseID` int(11) NOT NULL,
  `taskID` int(11) DEFAULT NULL,
  `equipmentID` INT,
  `amount` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`ExpenseID`),
  FOREIGN KEY(`equipmentID`) REFERENCES `equipment`(`EquipmentID`),
  FOREIGN KEY(`taskID`) REFERENCES `task`(`TaskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `ReportID` int(11) NOT NULL,
  `workerID` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `content` text DEFAULT NULL,
  `expenseID` INT,
  FOREIGN KEY(`expenseID`) REFERENCES `expense` (`ExpenseID`),
  PRIMARY KEY (`ReportID`),
  FOREIGN KEY(`workerID`) REFERENCES `worker`(`WorkerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taskassignments`
--

DROP TABLE IF EXISTS `taskassignment`;
CREATE TABLE IF NOT EXISTS `taskassignment` (
  `AssignmentID` int(11) NOT NULL,
  `taskID` int(11) DEFAULT NULL,
  `workerID` int(11) DEFAULT NULL,
  `equipmentID` INT,
  FOREIGN KEY(`equipmentID`) REFERENCES `equipment`(`EquipmentID`),
  `dateAssigned` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `dateCompleted` DATE,
  `Notes` text,
  PRIMARY KEY (`AssignmentID`),
  FOREIGN KEY(`taskID`) REFERENCES `task`(`TaskID`),
  FOREIGN KEY (`workerID`) REFERENCES `worker`(`WorkerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
