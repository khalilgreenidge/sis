-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2017 at 10:06 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis`
--
CREATE DATABASE sis;
USE sis;
-- --------------------------------------------------------

--
-- Table structure for table `activation_links`
--

CREATE TABLE IF NOT EXISTS `activation_links` (
  `hash` varchar(40) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activation_links`
--

INSERT INTO `activation_links` (`hash`, `startDate`, `endDate`) VALUES
('2c8e7edb3c25e327922578414c6e1f9a', '2015-05-07', '2015-05-14'),
('3c1f064a04619529d242fa5436fb49e6', '2015-05-12', '2015-05-19'),
('d49d9ee3ae939ee64571892f57888bbd', '2015-05-07', '2015-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `application_a`
--

CREATE TABLE IF NOT EXISTS `application_a` (
`student_id` int(7) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Applied` date DEFAULT NULL,
  `Sex` varchar(6) NOT NULL,
  `RegistrationNumber` int(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `HomeNumber` varchar(19) DEFAULT NULL,
  `WorkNumber` varchar(30) DEFAULT NULL,
  `CellNumber` varchar(19) DEFAULT NULL,
  `MailingAddress` varchar(30) NOT NULL,
  `CountryofBirth` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `MaritalStatus` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `application_a`
--

INSERT INTO `application_a` (`student_id`, `Name`, `DOB`, `Address`, `Applied`, `Sex`, `RegistrationNumber`, `Email`, `HomeNumber`, `WorkNumber`, `CellNumber`, `MailingAddress`, `CountryofBirth`, `Nationality`, `MaritalStatus`) VALUES
(1, 'K K K K', '2015-05-10', 'h', NULL, 'male', 97, 'h@jb.jb', '214', '765', '765', 'jh', 'Bim', 'Barbadian', 'single'),
(8, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(9, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(10, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(11, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(12, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '428-6910 ext-236', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(13, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '428-6910 ext-236', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(14, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '428-6910 ext-236', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(15, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '428-6910 ext-236', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(16, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '428-6910 ext-236', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(17, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '428-6910 ext-236', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(18, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(19, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(20, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(21, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(22, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(23, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(24, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(25, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(26, 'Khalil Greenidge Josiah Jerome', '2015-05-10', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(27, 'Khalil Fxcf Kha Gff', '0000-00-00', '', '0000-00-00', '', 0, '', '', '', '', '', '', '', ''),
(28, 'Khalil Greenidge Josiah Jerome', '1997-07-23', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '428-6910', '', '237-5178', 'same as above', 'Barbados', 'Barbadian', 'single'),
(29, 'Jeffrey Jones Johnathan Jakobi', '1989-05-03', 'Welchman Hall Gully', '0000-00-00', 'male', 12345689, 'JeffJones@hotmail.co', '495-8838', '295-0495 ext-', '289-3947', '#123 Almond Parris Road Develo', 'France', 'French', 'single'),
(30, 'Jeffrey Jones Johnathan Jakobi', '1989-05-03', 'Welchman Hall Gully', '0000-00-00', 'male', 12345689, 'JeffJones@hotmail.co', '495-8838', '295-0495 ext-', '289-3947', '#123 Almond Parris Road Develo', 'France', 'French', 'single'),
(31, 'Jeffrey Jones Johnathan Jakobi', '1989-05-03', 'Welchman Hall Gully', '0000-00-00', 'male', 12345689, 'JeffJones@hotmail.co', '495-8838', '295-0495 ext-', '289-3947', '#123 Almond Parris Road Develo', 'France', 'French', 'single'),
(32, 'Jeffrey Jones Johnathan Jakobi', '1989-05-03', 'Welchman Hall Gully', '0000-00-00', 'male', 12345689, 'JeffJones@hotmail.co', '495-8838', '295-0495 ext-', '289-3947', '#123 Almond Parris Road Develo', 'France', 'French', 'single'),
(33, 'Jeffrey Jones Johnathan Jakobi', '1989-05-03', 'Welchman Hall Gully', '0000-00-00', 'male', 12345689, 'JeffJones@hotmail.co', '495-8838', '295-0495 ext-', '289-3947', '#123 Almond Parris Road Develo', 'France', 'French', 'single'),
(34, 'Gary Smith Alan ', '1996-11-22', 'Bagatelle', '0000-00-00', 'male', 96, 'gsmith@hotmail.com', '428-6977', '', '', 'same as above', 'Barbados', 'Barbadian', 'single'),
(35, 'Romario Bates  ', '1992-07-22', 'Market Hill, Bate''s Pool Bar', '0000-00-00', 'male', 97, 'romario.bates@gmail.', '428-6725', '', '233-4744', 'same as above', 'Barbados', 'Barbadian', 'single'),
(36, 'Romario Bates  ', '1992-07-22', '', '0000-00-00', 'male', 97, 'romario.bates@gmail.', '425-8744', '', '234-5478', 'same as above', 'Barbados', 'Barbadian', 'single'),
(37, 'Kjb  Kjb ', '2015-05-11', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 12345689, 'kh@gmail.com', '', ' ext-888', '888-8888', 'see', 'Barbados', 'Barbadian', 'single'),
(38, 'Kjb  Kjb ', '2015-05-11', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 12345689, 'kh@gmail.com', '', ' ext-888', '888-8888', 'see', 'Barbados', 'Barbadian', 'single'),
(39, 'Kjb  Kjb ', '2015-05-11', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 12345689, 'kh@gmail.com', '', ' ext-888', '888-8888', 'see', 'Barbados', 'Barbadian', 'single'),
(40, 'Kjb  Kjb ', '2015-05-11', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 12345689, 'kh@gmail.com', '', ' ext-888', '888-8888', 'see', 'Barbados', 'Barbadian', 'single'),
(41, 'Kjb  Kjb ', '2015-05-11', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 12345689, 'kh@gmail.com', '', ' ext-888', '888-8888', 'see', 'Barbados', 'Barbadian', 'single'),
(42, 'Shawn Greenidge  ', '2015-05-11', 'Thyme bottom Lot#3 Christ Church', '0000-00-00', 'male', 23323232, 'sgreenidge@globaldir', '426-4777', '', '', 'same as above', 'Barbados', 'Barbadian', 'single'),
(43, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(44, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(45, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(46, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(47, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(48, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(49, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(50, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(51, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(52, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'mb@facebook.com', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(53, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(54, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(55, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(56, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(57, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(58, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(59, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(60, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(61, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(62, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(63, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(64, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(65, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(66, 'Jhb Zuckerburg  ', '2015-05-11', '3775 NW', '0000-00-00', 'male', 97, 'freshprince_kg@hotma', '423-2557', '', '', 'same as above', 'America', 'American', 'single'),
(67, 'Marielle Forde Alyana ', '1997-06-25', 'Foul Bay st. Phillip', '0000-00-00', 'female', 97, 'fordemarielle@gmail.', '428-9855', '', '242-3588', 'same as above', 'Barbados', 'Barbadian', 'single'),
(68, 'Samuel Rouse  ', '1955-03-08', 'BCC Howell Cross-Road', '0000-00-00', 'male', 97, 'Samuel.rouse@bcc.edu', '426-2858', '426-2858 ext-5261', '', 'same as above', 'Barbados', 'Barbadian', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `application_b`
--

CREATE TABLE IF NOT EXISTS `application_b` (
  `student_id` int(7) NOT NULL,
  `emergency_contact` varchar(20) NOT NULL,
  `Home#` varchar(19) NOT NULL,
  `Work#` varchar(19) NOT NULL,
  `Cell#` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application_cd`
--

CREATE TABLE IF NOT EXISTS `application_cd` (
  `student_id` int(7) NOT NULL,
  `Disability1` varchar(20) DEFAULT NULL,
  `Disability2` varchar(20) DEFAULT NULL,
  `Disability3` varchar(20) DEFAULT NULL,
  `M_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application_e`
--

CREATE TABLE IF NOT EXISTS `application_e` (
  `student_id` int(7) NOT NULL,
  `workid` int(8) DEFAULT NULL,
  `employer` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application_f`
--

CREATE TABLE IF NOT EXISTS `application_f` (
  `student_id` int(7) NOT NULL,
  `major1` varchar(30) DEFAULT NULL,
  `major2` varchar(30) DEFAULT NULL,
  `major3` varchar(30) DEFAULT NULL,
  `program1` varchar(30) DEFAULT NULL,
  `program2` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `name` varchar(30) NOT NULL,
  `major/program_id` int(7) NOT NULL,
  `tutor_id` int(7) NOT NULL,
  `division_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`name`, `major/program_id`, `tutor_id`, `division_id`) VALUES
('Major Project', 1, 111, 1),
('Web Applications', 1, 111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
  `division_id` int(7) NOT NULL,
  `name` varchar(20) NOT NULL,
  `senior_tutor_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`division_id`, `name`, `senior_tutor_email`) VALUES
(1, 'Computer Studies', 'khalilgreenidge16@gmail.com'),
(2, 'Commerce', 'khalilgreenidge16@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `majorprogram`
--

CREATE TABLE IF NOT EXISTS `majorprogram` (
  `major/program_id` int(7) NOT NULL,
  `name` varchar(40) NOT NULL,
  `division_id` int(7) NOT NULL,
  `isMajor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majorprogram`
--

INSERT INTO `majorprogram` (`major/program_id`, `name`, `division_id`, `isMajor`) VALUES
(1, 'computer studies', 1, 'no'),
(2, 'Business Studies', 2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `majorproject`
--

CREATE TABLE IF NOT EXISTS `majorproject` (
  `student_id` int(7) NOT NULL,
  `test_1` double DEFAULT NULL,
  `test_2` double DEFAULT NULL,
  `test_3` double DEFAULT NULL,
  `assignment_1` double DEFAULT NULL,
  `assignment_2` double DEFAULT NULL,
  `paper_1` double DEFAULT NULL,
  `paper_2` double DEFAULT NULL,
  `grade` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE IF NOT EXISTS `password_reset` (
  `hash` varchar(40) NOT NULL,
  `student_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `hash` varchar(40) NOT NULL,
  `id` int(7) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `typeOfUser` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`hash`, `id`, `password`, `gender`, `name`, `email`, `typeOfUser`) VALUES
('2c8e7edb3c25e327922578414c6e1f9a', 1, '161ebd7d45089b3446ee4e0d86dbcf92', 'Mr.', 'Khalil  Greenidge', 'khalilgreenidge16@gmail.com', 'student'),
('3c1f064a04619529d242fa5436fb49e6', 67, '161ebd7d45089b3446ee4e0d86dbcf92', 'female', 'Marielle Forde', 'khalilgreenidge16@gmail.com', 'student'),
('d49d9ee3ae939ee64571892f57888bbd', 1, '161ebd7d45089b3446ee4e0d86dbcf92', 'Mr.', 'Khalil  Greenidge', 'khalilgreenidge16@gmail.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(7) NOT NULL,
  `name` varchar(40) NOT NULL,
  `program` varchar(30) DEFAULT NULL,
  `major1` varchar(30) DEFAULT NULL,
  `major2` varchar(30) DEFAULT NULL,
  `year` date NOT NULL,
  `division_id1` int(7) NOT NULL,
  `division_id2` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `program`, `major1`, `major2`, `year`, `division_id1`, `division_id2`) VALUES
(1, 'Khalil Greenidge', 'Computer Studies', '', '', '2013-09-02', 1, NULL),
(2, 'Scott Henry', 'Computer Studies', '', '', '2013-09-02', 1, NULL),
(67, 'Marielle Forde', 'Computer Studies', NULL, NULL, '2015-05-12', 1, NULL),
(68, 'Samuel Rouse', 'Computer Studies', NULL, NULL, '2015-05-12', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int(7) NOT NULL,
  `name` varchar(40) NOT NULL,
  `division_id` int(7) NOT NULL,
  `course1` varchar(40) DEFAULT NULL,
  `course2` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `division_id`, `course1`, `course2`) VALUES
(111, 'Vincent Branker', 1, NULL, 'Web Applications'),
(112, 'Samuel Rouse', 1, 'Major Project', NULL),
(113, 'Mark Griffith', 1, 'Web Applications', 'Major Project'),
(114, 'Debbie Best', 1, 'Program Implementations', NULL),
(1555, 'Jhb Jhb', 1, 'jh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(7) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `typeOfUser` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `gender`, `name`, `email`, `typeOfUser`) VALUES
(1, '161ebd7d45089b3446ee4e0d86dbcf92', 'Mr.', 'Khalil  Greenidge', 'khalilgreenidge16@gmail.com', 'student'),
(67, '161ebd7d45089b3446ee4e0d86dbcf92', 'female', 'Marielle Forde', 'khalilgreenidge16@gmail.com', 'student'),
(111, '161ebd7d45089b3446ee4e0d86dbcf92', 'Mr.', 'Vincent  Branker', 'v.branker@bcc.edu.bb', 'tutor'),
(112, '161ebd7d45089b3446ee4e0d86dbcf92', 'Mr.', 'Samuel Rouse', 'v.branker@bcc.edu.bb', 'seniortutor');

-- --------------------------------------------------------

--
-- Table structure for table `webapplications`
--

CREATE TABLE IF NOT EXISTS `webapplications` (
  `student_id` int(7) NOT NULL,
  `test_1` double DEFAULT NULL,
  `test_2` double DEFAULT NULL,
  `test_3` double DEFAULT NULL,
  `assignment_1` double DEFAULT NULL,
  `assignment_2` double DEFAULT NULL,
  `paper_1` double DEFAULT NULL,
  `paper_2` double DEFAULT NULL,
  `grade` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webapplications`
--

INSERT INTO `webapplications` (`student_id`, `test_1`, `test_2`, `test_3`, `assignment_1`, `assignment_2`, `paper_1`, `paper_2`, `grade`) VALUES
(1, 80, 85, 89, 94, 75, 89, 95, 'A+'),
(2, 70, 80, 89, 90, 77, 75, 75, 'B+'),
(67, 100, 90, 70, 87, 80, 50, 100, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_links`
--
ALTER TABLE `activation_links`
 ADD PRIMARY KEY (`hash`);

--
-- Indexes for table `application_a`
--
ALTER TABLE `application_a`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `application_b`
--
ALTER TABLE `application_b`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `application_cd`
--
ALTER TABLE `application_cd`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `application_e`
--
ALTER TABLE `application_e`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `application_f`
--
ALTER TABLE `application_f`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`name`), ADD KEY `division_id` (`division_id`), ADD KEY `major/program_id` (`major/program_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
 ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `majorprogram`
--
ALTER TABLE `majorprogram`
 ADD PRIMARY KEY (`major/program_id`);

--
-- Indexes for table `majorproject`
--
ALTER TABLE `majorproject`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
 ADD PRIMARY KEY (`hash`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`hash`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
 ADD PRIMARY KEY (`id`), ADD KEY `division_id` (`division_id`), ADD KEY `coursename` (`course1`), ADD KEY `course2` (`course2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webapplications`
--
ALTER TABLE `webapplications`
 ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_a`
--
ALTER TABLE `application_a`
MODIFY `student_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`division_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `password_reset`
--
ALTER TABLE `password_reset`
ADD CONSTRAINT `password_reset_ibfk_1` FOREIGN KEY (`hash`) REFERENCES `activation_links` (`hash`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`hash`) REFERENCES `activation_links` (`hash`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tutors`
--
ALTER TABLE `tutors`
ADD CONSTRAINT `tutors_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`division_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `tutors_ibfk_2` FOREIGN KEY (`course2`) REFERENCES `course` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
