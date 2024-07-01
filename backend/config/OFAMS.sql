SET
   SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET 
    AUTOCOMMIT = 0;
START TRANSACTION;    

SET


-- Set the old character set client
SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;

-- Set the old character set results
SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;

-- Set the old collation connection
SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;

-- Set the character set to utf8mb4
SET NAMES utf8mb4;


--Create ofams database
CREATE DATABASE IF NOT EXISTS `ofams`;
USE `ofams`;

DROP TABLE IF EXISTS `Workers`;

-- Create Workers table
CREATE TABLE IF NOT EXISTS `Workers` (
    `workerID` INT PRIMARY KEY,
    `fname` VARCHAR(100),
    `mname` VARCHAR(100),
    `lname` VARCHAR(100)
    `email` VARCHAR(100),
    `phone` VARCHAR(20),
    `skills` VARCHAR(255),
    `availability` VARCHAR(100)
);

DROP TABLE IF EXISTS `Tasks`

-- Create Tasks table
CREATE TABLE IF NOT EXISTS `Tasks` (
    `taskID` INT PRIMARY KEY,
    `description` TEXT,
    `location` VARCHAR(100),
    `deadline` DATE,
    `priority` INT,
    `status` VARCHAR(50)
);

DROP TABLE IF EXISTS `TaskAssignments`

-- Create TaskAssignments table
CREATE TABLE IF NOT EXISTS `TaskAssignments` (
    `assignmentID` INT PRIMARY KEY,
    `taskID` INT,
    `workerID` INT,
    `dateAssigned` DATE,
   ` dateCompleted` DATE,
    `notes` TEXT,
    FOREIGN KEY (`taskID`) REFERENCES Tasks(`taskID`),
    FOREIGN KEY (`workerID`) REFERENCES Workers(`workerID`)
);

DROP TABLE IF EXISTS `Equipment`

-- Create Equipment table
CREATE TABLE IF NOT EXISTS `Equipment` (
    `equipmentID` INT PRIMARY KEY,
    `name` VARCHAR(100),
    `description` TEXT,
    `quantity` INT
);

DROP TABLE IF EXISTS `Expenses`;

-- Create Expenses table
CREATE TABLE IF NOT EXISTS `Expenses` (
    `expenseID` INT PRIMARY KEY,
    `taskID` INT,
    `amount` DECIMAL(10, 2),
    `description` TEXT,
    `date` DATE,
    FOREIGN KEY (`taskID`) REFERENCES Tasks(`taskID`)
);

DROP TABLE IF EXIST `Reports`;

-- Create Reports table
CREATE TABLE IF NOT EXISTS `Reports` (
    `reportID` INT PRIMARY KEY,
    `taskID` INT,
    `workerID` INT,
    `date` DATE,
    `content` TEXT,
    FOREIGN KEY (`taskID`) REFERENCES Tasks(`taskID`),
    FOREIGN KEY (`workerID`) REFERENCES Workers(`workerID`)
);


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@COLLATION_CONNECTION */;