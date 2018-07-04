-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 08:25 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sea`
--

-- --------------------------------------------------------

--
-- Table structure for table `2016oop`
--

DROP TABLE IF EXISTS `2016oop`;
CREATE TABLE IF NOT EXISTS `2016oop` (
  `student_name` varchar(150) NOT NULL,
  `total` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `mid` varchar(15) NOT NULL,
  `CA1` varchar(5000) NOT NULL DEFAULT 'not_submitted',
  `CA111` varchar(5000) NOT NULL,
  `CA6` varchar(5000) NOT NULL,
  `CA10` varchar(5000) NOT NULL,
  `CA7` varchar(5000) NOT NULL,
  `CA222` varchar(500) NOT NULL,
  `CA2` varchar(500) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2016oop`
--

INSERT INTO `2016oop` (`student_name`, `total`, `end`, `mid`, `CA1`, `CA111`, `CA6`, `CA10`, `CA7`, `CA222`, `CA2`) VALUES
('160256U', '', '', '', '|uploaded files/Students/2016/OOP/CA1/item.txt||2018-04-21 14:30:13|0months 5days 00hours 30minutes 13seconds-late|', '', '', '', '', '', '|uploaded files/Students/2016/OOP/CA2/2nd sem violin.txt||2018-04-21 16:18:46|0months 7days 05hours 53minutes 14seconds-not late|'),
('Dhanu', '', '', '', '', '', '', '|uploaded files/Students/2016/OOP/CA10/160575V (1).zip||2018-04-21 10:23:25|0months 2days 23hours 0minutes 25seconds-late|', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data structure and algorithms quiz collections 1`
--

DROP TABLE IF EXISTS `data structure and algorithms quiz collections 1`;
CREATE TABLE IF NOT EXISTS `data structure and algorithms quiz collections 1` (
  `question` text NOT NULL,
  `ans1` varchar(500) NOT NULL,
  `ans2` varchar(500) NOT NULL,
  `ans3` varchar(500) NOT NULL,
  `ans4` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data structure and algorithms quiz collections 1`
--

INSERT INTO `data structure and algorithms quiz collections 1` (`question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`) VALUES
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `electrical quiz collections 1`
--

DROP TABLE IF EXISTS `electrical quiz collections 1`;
CREATE TABLE IF NOT EXISTS `electrical quiz collections 1` (
  `question` text,
  `ans1` varchar(500) DEFAULT NULL,
  `ans2` varchar(500) DEFAULT NULL,
  `ans3` varchar(500) DEFAULT NULL,
  `ans4` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical quiz collections 1`
--

INSERT INTO `electrical quiz collections 1` (`question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`) VALUES
('question one for electrical quiz', 'ans1', 'ans2', 'ans3', 'ans4', '2'),
('question one for electrical quiz', 'ans1', 'ans2', 'ans3', 'ans4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `gpa_chart`
--

DROP TABLE IF EXISTS `gpa_chart`;
CREATE TABLE IF NOT EXISTS `gpa_chart` (
  `GRADE` varchar(2) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpa_chart`
--

INSERT INTO `gpa_chart` (`GRADE`, `GPA`) VALUES
('B+', 3.3),
('A+', 4.2),
('A', 4),
('A-', 3.7),
('B-', 2.7),
('B', 3),
('C+', 2.3),
('C', 2),
('C-', 1.5),
('D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_2016-oop_ca`
--

DROP TABLE IF EXISTS `instructor_2016-oop_ca`;
CREATE TABLE IF NOT EXISTS `instructor_2016-oop_ca` (
  `CA_number` varchar(100) NOT NULL,
  `assignment` varchar(10000) NOT NULL,
  `file` varchar(1500) NOT NULL,
  `valid_duration` varchar(100) NOT NULL,
  PRIMARY KEY (`CA_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_2016-oop_ca`
--

INSERT INTO `instructor_2016-oop_ca` (`CA_number`, `assignment`, `file`, `valid_duration`) VALUES
('CA1', 'Do this.', '160575V.pdf', '2018-04-16T14:00'),
('CA111', 'qwert123456789y', 'education-care.1.0.8.zip', '2018-04-17T20:29'),
('CA2', 'this is 2', 'uploaded files/Instructor/2016/oop/160575V (1) (1).zip', '2018-04-28T22:12'),
('CA6', 'do this 6', 'Aviation School Free Website Template - Free-CSS.com (1) (1).zip', '2018-04-17T22:28'),
('CA222', '222222222', 'uploaded files/Instructor/2016/oop/AOD_Undergrad Prospectus MARCH 2017.pdf', '2018-04-26T22:28'),
('CA10', '10101010101', 'cv-library-graduate-no-experience-cv-template (1).docx', '2018-04-26T11:23'),
('CA7', '77777777777777777777', 'decrypt - workshop (1).doc', '2018-04-25T14:35');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_modules`
--

DROP TABLE IF EXISTS `instructor_modules`;
CREATE TABLE IF NOT EXISTS `instructor_modules` (
  `instructor_name` varchar(150) NOT NULL,
  `modules` varchar(1000) NOT NULL,
  PRIMARY KEY (`instructor_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_modules`
--

INSERT INTO `instructor_modules` (`instructor_name`, `modules`) VALUES
('I001', '2016-oop,2016-os,2015-archi');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_oop_ca`
--

DROP TABLE IF EXISTS `instructor_oop_ca`;
CREATE TABLE IF NOT EXISTS `instructor_oop_ca` (
  `CA_number` int(10) NOT NULL,
  `assignment` varchar(10000) NOT NULL,
  `valid_duration` varchar(100) NOT NULL,
  PRIMARY KEY (`CA_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `Modules` varchar(40) NOT NULL,
  `Credit` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`Modules`, `Credit`) VALUES
('OOP', 3),
('COMPUTER_ARCHITECTURE', 3),
('DSA', 2.5),
('ELECTRONICS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `new quiz 1`
--

DROP TABLE IF EXISTS `new quiz 1`;
CREATE TABLE IF NOT EXISTS `new quiz 1` (
  `question` text,
  `ans1` varchar(500) DEFAULT NULL,
  `ans2` varchar(500) DEFAULT NULL,
  `ans3` varchar(500) DEFAULT NULL,
  `ans4` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new quiz 1`
--

INSERT INTO `new quiz 1` (`question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`) VALUES
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `object oriented programming quiz collections 1`
--

DROP TABLE IF EXISTS `object oriented programming quiz collections 1`;
CREATE TABLE IF NOT EXISTS `object oriented programming quiz collections 1` (
  `question` text NOT NULL,
  `ans1` varchar(500) NOT NULL,
  `ans2` varchar(500) NOT NULL,
  `ans3` varchar(500) NOT NULL,
  `ans4` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `object oriented programming quiz collections 1`
--

INSERT INTO `object oriented programming quiz collections 1` (`question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`) VALUES
('Object Oriented Programming sample question 1', 'ans1', 'ans2', 'ans3', 'ans4', '1'),
('Object Oriented Programming sample question 2', 'ans1', 'ans2', 'ans3', 'ans4', '1'),
('Object Oriented Programming sample question 3', 'ans1', 'ans2', 'ans3', 'ans4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `oop`
--

DROP TABLE IF EXISTS `oop`;
CREATE TABLE IF NOT EXISTS `oop` (
  `student_name` varchar(150) NOT NULL,
  `CA1` varchar(15) NOT NULL,
  `mid` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operating systems quiz`
--

DROP TABLE IF EXISTS `operating systems quiz`;
CREATE TABLE IF NOT EXISTS `operating systems quiz` (
  `question` text,
  `ans1` varchar(500) DEFAULT NULL,
  `ans2` varchar(500) DEFAULT NULL,
  `ans3` varchar(500) DEFAULT NULL,
  `ans4` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_categories`
--

DROP TABLE IF EXISTS `question_categories`;
CREATE TABLE IF NOT EXISTS `question_categories` (
  `category_names` varchar(100) NOT NULL,
  UNIQUE KEY `category_names` (`category_names`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_categories`
--

INSERT INTO `question_categories` (`category_names`) VALUES
('Data Structure and Algorithms quiz collections 1'),
('Electrical quiz collections 1'),
('Object Oriented Programming Quiz Collections 1'),
('Operating Systems quiz');

-- --------------------------------------------------------

--
-- Table structure for table `quiz 1`
--

DROP TABLE IF EXISTS `quiz 1`;
CREATE TABLE IF NOT EXISTS `quiz 1` (
  `question` varchar(1000) DEFAULT NULL,
  `ans1` varchar(500) DEFAULT NULL,
  `ans2` varchar(500) DEFAULT NULL,
  `ans3` varchar(500) DEFAULT NULL,
  `ans4` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  UNIQUE KEY `question` (`question`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz 1`
--

INSERT INTO `quiz 1` (`question`, `ans1`, `ans2`, `ans3`, `ans4`, `answer`) VALUES
('This is sample question two This is sample question two This is sample question two ', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('This is sample question one This is sample question one This is sample question one', 'answer 1', 'answer 2', 'answer 3', 'answer 4', '1'),
('question one for electrical quiz', 'ans1', 'ans2', 'ans3', 'ans4', '2'),
('Object Oriented Programming sample question 1', 'ans1', 'ans2', 'ans3', 'ans4', '1'),
('Object Oriented Programming sample question 2', 'ans1', 'ans2', 'ans3', 'ans4', '1'),
('Object Oriented Programming sample question 3', 'ans1', 'ans2', 'ans3', 'ans4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz 2`
--

DROP TABLE IF EXISTS `quiz 2`;
CREATE TABLE IF NOT EXISTS `quiz 2` (
  `question` text,
  `ans1` varchar(500) DEFAULT NULL,
  `ans2` varchar(500) DEFAULT NULL,
  `ans3` varchar(500) DEFAULT NULL,
  `ans4` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz 3`
--

DROP TABLE IF EXISTS `quiz 3`;
CREATE TABLE IF NOT EXISTS `quiz 3` (
  `question` text,
  `ans1` varchar(500) DEFAULT NULL,
  `ans2` varchar(500) DEFAULT NULL,
  `ans3` varchar(500) DEFAULT NULL,
  `ans4` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quizs`
--

DROP TABLE IF EXISTS `quizs`;
CREATE TABLE IF NOT EXISTS `quizs` (
  `quizname` varchar(100) NOT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `duration` mediumint(9) NOT NULL,
  `participants` varchar(50) NOT NULL,
  UNIQUE KEY `quizname` (`quizname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizs`
--

INSERT INTO `quizs` (`quizname`, `starttime`, `endtime`, `duration`, `participants`) VALUES
('QUIZ 1', '2018-02-02 02:12:00', '2018-03-30 02:12:00', 3600, '*, 2016'),
('QUIZ 3', '2018-03-24 00:12:00', '2018-03-24 00:22:00', 11213, '*'),
('QUIZ 2', '2018-03-08 12:21:00', '2018-03-23 12:22:00', 1220, '*');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` varchar(7) DEFAULT NULL,
  `OOP` varchar(2) NOT NULL,
  `Computer_Architecture` varchar(2) NOT NULL,
  `DSA` varchar(2) NOT NULL,
  `Electronics` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `OOP`, `Computer_Architecture`, `DSA`, `Electronics`) VALUES
('160277E', 'A', 'A+', 'B+', 'A'),
('160256U', 'B+', 'A', 'A-', 'A'),
('160231A', 'A', 'A+', 'A', 'A'),
('150145L', 'A', 'A+', 'A', 'A-'),
('150751I', 'B', 'A', 'B+', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `student_modules`
--

DROP TABLE IF EXISTS `student_modules`;
CREATE TABLE IF NOT EXISTS `student_modules` (
  `student_name` varchar(150) NOT NULL,
  `Sem` int(3) NOT NULL,
  `modules` varchar(10000) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_modules`
--

INSERT INTO `student_modules` (`student_name`, `Sem`, `modules`) VALUES
('160256U', 3, 'OOP,OS,Electronic'),
('Dhanu', 2, 'OOP,Algo,Archi');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

DROP TABLE IF EXISTS `user_list`;
CREATE TABLE IF NOT EXISTS `user_list` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `privilege` varchar(50) NOT NULL DEFAULT 'Student',
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_name`, `password`, `privilege`) VALUES
('160748s', '1234', 'student'),
('150765k', '1234', 'student'),
('160256u', '1111', 'student'),
('I001', '1111', 'instructor'),
('L001', '1111', 'lecturer'),
('A001', '1111', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
