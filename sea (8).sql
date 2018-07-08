-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2018 at 04:07 PM
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
-- Table structure for table `2016archi`
--

DROP TABLE IF EXISTS `2016archi`;
CREATE TABLE IF NOT EXISTS `2016archi` (
  `student_name` varchar(150) NOT NULL,
  `total` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `mid` varchar(15) NOT NULL,
  `CA 1` varchar(500) NOT NULL,
  `CA 2` varchar(500) NOT NULL,
  `CA 3` varchar(500) NOT NULL,
  `CA 4` varchar(500) NOT NULL,
  `CA 5` varchar(500) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2016archi`
--

INSERT INTO `2016archi` (`student_name`, `total`, `end`, `mid`, `CA 1`, `CA 2`, `CA 3`, `CA 4`, `CA 5`) VALUES
('160256u', '', '', '', '', '', '', '', '');

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
  `CA 89` varchar(500) NOT NULL,
  `CA 899` varchar(500) NOT NULL,
  `CA 8990` varchar(500) NOT NULL,
  `CA 845` varchar(500) NOT NULL,
  `CA 891` varchar(500) NOT NULL,
  `CA 8911` varchar(500) NOT NULL,
  `ca 54` varchar(500) NOT NULL,
  `ca 544` varchar(500) NOT NULL,
  `ca 1122` varchar(500) NOT NULL,
  `ca 11227` varchar(500) NOT NULL,
  `ca 177` varchar(500) NOT NULL,
  `ca 1774` varchar(500) NOT NULL,
  `ca 17740` varchar(500) NOT NULL,
  `ca 17740w` varchar(500) NOT NULL,
  `ca 17740wy` varchar(500) NOT NULL,
  `ca 17740wyu` varchar(500) NOT NULL,
  `ca 17740wyuk` varchar(500) NOT NULL,
  `ca123223` varchar(500) NOT NULL,
  `ca1232236` varchar(500) NOT NULL,
  `ca111111` varchar(500) NOT NULL,
  `CA 899011111` varchar(500) NOT NULL,
  `CA 899123` varchar(500) NOT NULL,
  `ca11112222223333` varchar(500) NOT NULL,
  `ca ssss121212` varchar(500) NOT NULL,
  `CA 89111111111111111` varchar(500) NOT NULL,
  `CA 899034567` varchar(500) NOT NULL,
  `CA 899034567k` varchar(500) NOT NULL,
  `ca yjhgj` varchar(500) NOT NULL,
  `CA 899000098` varchar(500) NOT NULL,
  `ca` varchar(500) NOT NULL,
  `ca 1122123` varchar(500) NOT NULL,
  `ca 1122123987` varchar(500) NOT NULL,
  `CA 1997` varchar(500) NOT NULL,
  `CA 78` varchar(500) NOT NULL,
  `CA griwf` varchar(500) NOT NULL,
  `CA wtgeg` varchar(500) NOT NULL,
  `ca 34343` varchar(500) NOT NULL,
  `CA 23456` varchar(500) NOT NULL,
  `CA tyui` varchar(500) NOT NULL,
  `CA 1242` varchar(500) NOT NULL,
  `ca 444444444444` varchar(500) NOT NULL,
  `ca 44444444444444444444` varchar(500) NOT NULL,
  `CA aergq34g` varchar(500) NOT NULL,
  `Ca  wrgsdv` varchar(500) NOT NULL,
  `CA ertyui` varchar(500) NOT NULL,
  `CA09` varchar(500) NOT NULL,
  `CA 99900999` varchar(500) NOT NULL,
  `CA 345676098765` varchar(500) NOT NULL,
  `CA 2453523438765678` varchar(500) NOT NULL,
  `CA werwer` varchar(500) NOT NULL,
  `CA wer` varchar(500) NOT NULL,
  `CA 99957657463w5strhwsr` varchar(500) NOT NULL,
  `CARTKjukilojp` varchar(500) NOT NULL,
  `wertfgbzxvaweqwegq1qe` varchar(500) NOT NULL,
  `;uwek.vv` varchar(500) NOT NULL,
  `u64jwy5htd` varchar(500) NOT NULL,
  `uetsrkydt9877ty` varchar(500) NOT NULL,
  `CA 7y7y7y6y6y` varchar(500) NOT NULL,
  `CA chchchchchcch` varchar(500) NOT NULL,
  `CA ttttttttttttttttt666666666` varchar(500) NOT NULL,
  `CABkjhgb` varchar(500) NOT NULL,
  `CSAETHrjyk` varchar(500) NOT NULL,
  `pppppppppppoiuytrewertgbjh` varchar(500) NOT NULL,
  `CA ohfurdkcb` varchar(500) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2016oop`
--

INSERT INTO `2016oop` (`student_name`, `total`, `end`, `mid`, `CA1`, `CA111`, `CA6`, `CA10`, `CA7`, `CA222`, `CA2`, `CA 89`, `CA 899`, `CA 8990`, `CA 845`, `CA 891`, `CA 8911`, `ca 54`, `ca 544`, `ca 1122`, `ca 11227`, `ca 177`, `ca 1774`, `ca 17740`, `ca 17740w`, `ca 17740wy`, `ca 17740wyu`, `ca 17740wyuk`, `ca123223`, `ca1232236`, `ca111111`, `CA 899011111`, `CA 899123`, `ca11112222223333`, `ca ssss121212`, `CA 89111111111111111`, `CA 899034567`, `CA 899034567k`, `ca yjhgj`, `CA 899000098`, `ca`, `ca 1122123`, `ca 1122123987`, `CA 1997`, `CA 78`, `CA griwf`, `CA wtgeg`, `ca 34343`, `CA 23456`, `CA tyui`, `CA 1242`, `ca 444444444444`, `ca 44444444444444444444`, `CA aergq34g`, `Ca  wrgsdv`, `CA ertyui`, `CA09`, `CA 99900999`, `CA 345676098765`, `CA 2453523438765678`, `CA werwer`, `CA wer`, `CA 99957657463w5strhwsr`, `CARTKjukilojp`, `wertfgbzxvaweqwegq1qe`, `;uwek.vv`, `u64jwy5htd`, `uetsrkydt9877ty`, `CA 7y7y7y6y6y`, `CA chchchchchcch`, `CA ttttttttttttttttt666666666`, `CABkjhgb`, `CSAETHrjyk`, `pppppppppppoiuytrewertgbjh`, `CA ohfurdkcb`) VALUES
('160256U', '', '', '', 'qwaf|uploaded files/Students/2016/OOP/CA1/C1.pdf||2018-07-07 23:02:58|2months 21days 09hours 2minutes 58seconds-late|', '|uploaded files/Students/2016/OOP/CA111/04 Data Transmission.pdf||2018-07-07 22:42:42|2months 18days 02hours 4minutes 42seconds-late', '|uploaded files/Students/2016/OOP/CA6/B4.pdf||2018-07-07 09:05:09|2months 19days 10hours 37minutes 9seconds-late|', '|uploaded files/Students/2016/OOP/CA10/A2.pdf||2018-07-07 12:03:37|2months 11days 00hours 40minutes 37seconds-late|good', '|uploaded files/Students/2016/OOP/CA7/B3.pdf||2018-07-07 09:26:35|2months 11days 18hours 51minutes 35seconds-late', '', '|uploaded files/Students/2016/OOP/CA2/B3.pdf||2018-07-08 07:46:08|0months 18days 14hours 25minutes 52seconds-not late|', 'tesyucgvhljb;knml|||2018-07-08 16:01:23|0months 5days 00hours 16minutes 37seconds-not late', '899899989989989989|uploaded files/Students/2016/OOP/CA 899/A3.pdf||2018-07-06 15:32:02|0months 14days 21hours 57minutes 58seconds-not late|', '8990|uploaded files/Students/2016/OOP/CA 8990/C1.pdf||2018-07-06 15:39:25|0months 14days 21hours 50minutes 35seconds-not late|', '845|uploaded files/Students/2016/OOP/CA 845/B3.pdf||2018-07-07 09:25:22|0months 14days 04hours 4minutes 38seconds-not late|', 'grlne|uploaded files/Students/2016/OOP/CA 891/160575V.pdf||2018-07-06 18:56:04|0months 3days 09hours 29minutes 56seconds-not late|', '', '54|uploaded files/Students/2016/OOP/CA 899/A3.pdf||2018-07-06 15:32:02|0months 14days 21hours 57minutes 58seconds-not late|', '544|uploaded files/Students/2016/OOP/CA 899/A3.pdf||2018-07-06 15:32:02|0months 14days 21hours 57minutes 58seconds-not late|', '', '', '', '1774|uploaded files/Students/2016/OOP/ca 1774/B5.pdf||2018-07-06 16:02:48|0months 14days 01hours 15minutes 12seconds-not late|', '|uploaded files/Students/2016/OOP/ca 17740/B1.pdf||2018-07-07 09:32:54|0months 0days 00hours 0minutes 0seconds-not late', '17740w|uploaded files/Students/2016/OOP/ca 17740w/B1.pdf||2018-07-06 16:04:42|0months 14days 01hours 13minutes 18seconds-not late|', '177|uploaded files/Students/2016/OOP/ca 17740wy/E2.pdf||2018-07-06 16:05:07|0months 19days 01hours 12minutes 53seconds-not late|', '177|uploaded files/Students/2016/OOP/ca 17740wyu/B5.pdf||2018-07-06 16:08:30|0months 19days 01hours 9minutes 30seconds-not late|', '', '', '123123|uploaded files/Students/2016/OOP/ca1232236/C6.pdf||2018-07-06 16:09:13|0months 21days 17hours 2minutes 47seconds-not late|', '', '89999|uploaded files/Students/2016/OOP/CA 899011111/C1.pdf||2018-07-06 16:09:55|0months 21days 06hours 40minutes 5seconds-not late|', '', '1111111112222222222333333333|||2018-07-06 16:13:39|0months 20days 12hours 12minutes 21seconds-not late', '', '', '', '', '', '', '', '', '', '', 'qqqqqqqqq|uploaded files/Students/2016/OOP/CA 78/Kingsman.The.Golden.Circle.2017.1080p.BluRay.x264-SPARKS.HI.srt||2018-07-06 23:26:55|0months 14days 04hours 42minutes 5seconds-not late|', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Dhanu', '', '', '', '', '', '', '|uploaded files/Students/2016/OOP/CA10/160575V (1).zip||2018-04-21 10:23:25|0months 2days 23hours 0minutes 25seconds-late|', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `2016os`
--

DROP TABLE IF EXISTS `2016os`;
CREATE TABLE IF NOT EXISTS `2016os` (
  `student_name` varchar(150) NOT NULL,
  `total` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `mid` varchar(15) NOT NULL,
  `CA 1` varchar(500) NOT NULL,
  `CA 2` varchar(500) NOT NULL,
  `CA 3` varchar(500) NOT NULL,
  PRIMARY KEY (`student_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2016os`
--

INSERT INTO `2016os` (`student_name`, `total`, `end`, `mid`, `CA 1`, `CA 2`, `CA 3`) VALUES
('160256u', '', '', '', 'uytjk|uploaded files/Students/2016/OS/CA 1/B3.pdf||2018-07-08 17:19:04|0months 15days 07hours 6minutes 56seconds-not late|', '', '');

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
-- Table structure for table `instructor_2016-archi_ca`
--

DROP TABLE IF EXISTS `instructor_2016-archi_ca`;
CREATE TABLE IF NOT EXISTS `instructor_2016-archi_ca` (
  `CA_number` varchar(100) NOT NULL,
  `assignment` varchar(10000) NOT NULL,
  `file` varchar(1500) NOT NULL,
  `valid_duration` varchar(100) NOT NULL,
  PRIMARY KEY (`CA_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_2016-archi_ca`
--

INSERT INTO `instructor_2016-archi_ca` (`CA_number`, `assignment`, `file`, `valid_duration`) VALUES
('CA 1', '                                                                                        1111', 'uploaded files/Instructor/2015/archi/A2.pdf', '2018-07-10T23:10'),
('CA 2', '22222', 'uploaded files/Instructor/2015/archi/B4.pdf', '2018-08-08T01:25'),
('CA 3', '333333', 'uploaded files/Instructor/2015/archi/A4.pdf', '2018-10-08T02:28'),
('CA 4', '44444444', 'uploaded files/Instructor/2015/archi/C1.pdf', '2018-09-08T01:29'),
('CA 5', 'qtawsdasd', 'uploaded files/Instructor/2015/archi/C1.pdf', '2018-12-08T00:58');

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
('CA1', '                                            Do this.', 'uploaded files/Instructor/2016/oop/B2.pdf', '2018-07-12T14:00'),
('CA111', '                                            qwert123456789y', 'B1.pdf', '2018-09-19T20:38'),
('CA2', 'this is 2', 'uploaded files/Instructor/2016/oop/B1.pdf', '2018-07-26T22:12'),
('CA6', 'do this 6', 'Aviation School Free Website Template - Free-CSS.com (1) (1).zip', '2018-04-17T22:28'),
('CA222', '222222222', 'AOD_Undergrad Prospectus MARCH 2017.pdf', '2018-08-01T22:28'),
('CA10', '10101010101', 'cv-library-graduate-no-experience-cv-template (1).docx', '2018-04-26T11:23'),
('CA7', '77777777777777777777', 'decrypt - workshop (1).doc', '2018-04-25T14:35'),
('CA 89', 'CA 89 DO', 'uploaded files/Instructor/2016/oop/A2.pdf', '2018-07-13T16:18'),
('CA 899', '899 do', 'uploaded files/Instructor/2016/oop/160575V.pdf', '2018-07-21T13:30'),
('CA 8990', '8990 do', 'uploaded files/Instructor/2016/oop/160575V.pdf', '2018-07-21T13:30'),
('CA 845', '845 do', 'uploaded files/Instructor/2016/oop/A3.pdf', '2018-07-21T13:30'),
('CA 891', '891 do', 'uploaded files/Instructor/2016/oop/A4.pdf', '2018-07-10T04:26'),
('CA 8911', '8911 do', 'uploaded files/Instructor/2016/oop/C1.pdf', '2018-07-10T04:26'),
('ca 54', '545454', 'uploaded files/Instructor/2016/oop/B5.pdf', '2018-07-19T15:11'),
('ca 544', '544544544', 'uploaded files/Instructor/2016/oop/C1.pdf', '2018-07-19T15:11'),
('ca 1122', '112211221122', 'uploaded files/Instructor/2016/oop/E2.pdf', '2018-07-26T17:18'),
('ca 11227', '11221122112277777', 'uploaded files/Instructor/2016/oop/B2.pdf', '2018-07-04T17:18'),
('ca 177', '11777', 'uploaded files/Instructor/2016/oop/A5.pdf', '2018-07-20T17:18'),
('ca 1774', '11777444', 'uploaded files/Instructor/2016/oop/A5.pdf', '2018-07-20T17:18'),
('ca 17740', '11777444000', 'uploaded files/Instructor/2016/oop/A5.pdf', '2018-07-20T17:18'),
('ca 17740w', '11777444000wwww', 'uploaded files/Instructor/2016/oop/A5.pdf', '2018-07-20T17:18'),
('ca 17740wy', '11777444000wwwwyyyy', 'uploaded files/Instructor/2016/oop/B4.pdf', '2018-07-25T17:18'),
('ca 17740wyu', '11777444000wwwwyyyyuuuu', 'uploaded files/Instructor/2016/oop/B4.pdf', '2018-07-25T17:18'),
('ca 17740wyuk', '11777444000wwwwyyyyuuuukkkk', 'uploaded files/Instructor/2016/oop/B4.pdf', '2018-07-25T17:18'),
('ca123223', '12323123', '', '2018-07-28T09:12'),
('ca1232236', '1232312366', '', '2018-07-28T09:12'),
('ca111111', '11111111111', '', '2018-07-14T14:13'),
('CA 899011111', 'thfvxccvdsbx', '', '2018-07-27T22:50'),
('CA 899123', '899123899123', '', '2018-07-21T23:54'),
('ca11112222223333', '11111111222223333', '', '2018-07-27T04:26'),
('ca ssss121212', 'wwwwwwsssssssaaaaaa', '', '2018-07-20T04:29'),
('CA 89111111111111111', '8888888888889999999911111111', '', '2018-07-27T03:19'),
('CA 899034567', 'werthdfg', '', '2018-07-27T22:55'),
('CA 899034567k', 'werthdfg', '', '2018-07-27T22:55'),
('ca yjhgj', 'oiuyghj', '', '2018-07-19T14:02'),
('CA 899000098', 'qwerty', 'uploaded files/Instructor/2016/oop/A3.pdf', '2018-07-27T02:06'),
('ca', 'rtfyg', 'uploaded files/Instructor/2016/oop/10 Network Transport and Application layers.pdf', '2019-09-09T11:43'),
('ca 1122123', '13123123', '', '2018-07-19T05:26'),
('ca 1122123987', '131231232345', '', '2018-07-19T05:26'),
('CA 1997', '1997', 'uploaded files/Instructor/2016/oop/B4.pdf', '2018-07-13T06:16'),
('CA 78', 'tyfyvb', 'uploaded files/Instructor/2016/oop/160078B (1).zip', '2018-07-21T04:09'),
('CA griwf', 'awfqawf.', 'B1.pdf', '2018-07-12T15:09'),
('CA wtgeg', 'awsd', 'Kingsman.The.Golden.Circle.2017.1080p.BluRay.x264-SPARKS.HI.srt', '2018-07-13T02:03'),
('ca 34343', '34343', 'uploaded files/Instructor/2016/oop/04 Data Transmission.pdf', '2018-07-19T13:00'),
('CA 23456', '7654', 'uploaded files/Instructor/2016/oop/B2.pdf', '2018-07-18T02:01'),
('CA tyui', 'kjh', 'uploaded files/Instructor/2016/oop/B3.pdf', '2018-07-18T03:03'),
('CA 1242', 'asdasd', '', ''),
('ca 444444444444', '7655', '', ''),
('ca 44444444444444444444', 'iutyrsdhfghj', '', ''),
('CA aergq34g', 'ergerbcxbx', '', '2018-07-19T02:01'),
('Ca  wrgsdv', 'agadsvas', '', '2018-07-12T02:14'),
('CA ertyui', '12345678987654', 'uploaded files/Instructor/2016/oop/B1.pdf', '2018-07-13T04:17'),
('CA09', 'aesfdsd', '', '2018-07-12T02:14'),
('CA 99900999', '1212123434344', 'uploaded files/Instructor/2016/oop/A5.pdf', '2018-07-11T15:08'),
('CA 345676098765', 'qwertyuikmnbvdgbvcxcv', '', '2018-07-12T02:14'),
('CA 2453523438765678', 'wsgsdfgd64tdf', '', '2018-07-13T19:18'),
('CA werwer', 'dsd', '', '2018-07-13T01:11'),
('CA wer', '234323456645', '', '2018-07-14T02:03'),
('CA 99957657463w5strhwsr', 'srtfhw5esrdfz', '', '2018-07-18T16:04'),
('CARTKjukilojp', 'aegasg', '', '2018-07-19T02:15'),
('wertfgbzxvaweqwegq1qe', 'eragdvsdvgj', '', '2018-07-18T01:05'),
(';uwek.vv', 'av;bsdl/ ', '', '2018-07-13T00:21'),
('u64jwy5htd', '675tu', '', '2018-07-20T15:07'),
('uetsrkydt9877ty', 'kgh bnm', '', '2018-07-16T03:05'),
('CA 7y7y7y6y6y', 'dddddddddddd', '', '2018-07-13T15:03'),
('CA chchchchchcch', 'chchchchchcchchc', '', '2018-07-13T09:30'),
('CA ttttttttttttttttt666666666', 'gygygyghgyugjkl.', '', '2018-07-20T20:41'),
('CABkjhgb', 'ytesrdfghiop87iyh', 'uploaded files/Instructor/2016/oop/A5.pdf', '2018-07-13T08:51'),
('CSAETHrjyk', 'kuyufk,n', '', '2018-07-14T22:51'),
('iuythxcvvb ', 'aegasdzbuiythfb ', '', '2018-07-20T23:48'),
('pppppppppppoiuytrewertgbjh', '888888888ijhfdxcv', '', '2018-07-27T13:59'),
('CA ohfurdkcb', 'uavbnvxm,c', 'B5.pdf', '2018-07-26T04:04');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_2016-os_ca`
--

DROP TABLE IF EXISTS `instructor_2016-os_ca`;
CREATE TABLE IF NOT EXISTS `instructor_2016-os_ca` (
  `CA_number` varchar(100) NOT NULL,
  `assignment` varchar(10000) NOT NULL,
  `file` varchar(1500) NOT NULL,
  `valid_duration` varchar(100) NOT NULL,
  PRIMARY KEY (`CA_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_2016-os_ca`
--

INSERT INTO `instructor_2016-os_ca` (`CA_number`, `assignment`, `file`, `valid_duration`) VALUES
('CA 1', '11111111111', 'uploaded files/Instructor/2016/os/3.jpg', '2018-07-24T00:26'),
('CA 2', '2222222222', 'uploaded files/Instructor/2016/os/3.jpg', '2018-07-20T20:08'),
('CA 3', '3333333', 'uploaded files/Instructor/2016/os/04 Data Transmission.pdf', '2018-07-13T21:18');

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
('160256U', 3, 'OOP,OS,Archi'),
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
