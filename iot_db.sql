-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 12:49 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmodels`
--

CREATE TABLE `bmodels` (
  `bmodel_id` int(11) NOT NULL,
  `bmodel_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `board_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bmodels`
--

INSERT INTO `bmodels` (`bmodel_id`, `bmodel_name`, `board_id`, `status`) VALUES
(1, 'UNO', 1, 1),
(2, 'Mega', 1, 1),
(3, 'Nano', 1, 1),
(4, 'Promini', 1, 1),
(5, 'Leonardo', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `board_id` int(11) NOT NULL,
  `board_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`board_id`, `board_name`, `status`) VALUES
(1, 'Arduino', 1);

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `input_id` int(11) NOT NULL,
  `input_pin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bmodel_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`input_id`, `input_pin`, `bmodel_id`, `status`) VALUES
(1, '1', 1, 1),
(2, '2', 1, 1),
(3, '3~', 1, 1),
(4, '4', 1, 1),
(5, '5~', 1, 1),
(6, '6~', 1, 1),
(7, '7', 1, 1),
(8, '8', 1, 1),
(9, '9~', 1, 1),
(10, '10~', 1, 1),
(11, '11~', 1, 1),
(12, '12', 1, 1),
(13, '13~', 1, 1),
(14, 'A0', 1, 1),
(15, 'A1', 1, 1),
(16, 'A2', 1, 1),
(17, 'A3', 1, 1),
(18, 'A4', 1, 1),
(19, 'A5', 1, 1),
(20, 'RX0 ', 2, 1),
(21, 'TX0', 2, 1),
(22, '2~', 2, 1),
(23, '3~', 2, 1),
(24, '4~', 2, 1),
(25, '5~', 2, 1),
(26, '6~', 2, 1),
(27, '7~', 2, 1),
(28, '8~', 2, 1),
(29, '9~', 2, 1),
(30, '10~', 2, 1),
(31, '11~', 2, 1),
(32, '12~', 2, 1),
(33, '13~', 2, 1),
(34, '14(RX1)', 2, 1),
(35, '15(TX1)', 2, 1),
(36, '16(RX2)', 2, 1),
(37, '17(TX2)', 2, 1),
(38, '18(RX3)', 2, 1),
(39, '19(Tx3)', 2, 1),
(40, '20', 2, 1),
(41, '21', 2, 1),
(42, '22', 2, 1),
(43, '23', 2, 1),
(44, '24', 2, 1),
(45, '25', 2, 1),
(46, '26', 2, 1),
(47, '27', 2, 1),
(48, '28', 2, 1),
(49, '29', 2, 1),
(50, '30', 2, 1),
(51, '31', 2, 1),
(52, '32', 2, 1),
(53, '33', 2, 1),
(54, '34', 2, 1),
(55, '35', 2, 1),
(56, '36', 2, 1),
(57, '37', 2, 1),
(58, '38', 2, 1),
(59, '39', 2, 1),
(60, '40', 2, 1),
(61, '41', 2, 1),
(62, '42', 2, 1),
(63, '43', 2, 1),
(64, '44~', 2, 1),
(65, '45~', 2, 1),
(66, '46~', 2, 1),
(67, '47', 2, 1),
(68, '48', 2, 1),
(69, '49', 2, 1),
(70, '50', 2, 1),
(71, '51', 2, 1),
(72, '52', 2, 1),
(73, '53', 2, 1),
(74, 'A0', 2, 1),
(75, 'A1', 2, 1),
(76, 'A2', 2, 1),
(77, 'A3', 2, 1),
(78, 'A4', 2, 1),
(79, 'A5', 2, 1),
(80, 'A6', 2, 1),
(81, 'A7', 2, 1),
(82, 'A8', 2, 1),
(83, 'A9', 2, 1),
(84, 'A10', 2, 1),
(85, 'A11', 2, 1),
(86, 'A12', 2, 1),
(87, 'A13', 2, 1),
(88, 'A14', 2, 1),
(89, 'A15', 2, 1),
(90, ' 0 ', 3, 1),
(91, ' 1 ', 3, 1),
(92, ' 2 ', 3, 1),
(93, ' 3 ~', 3, 1),
(94, ' 4 ', 3, 1),
(95, ' 5 ~', 3, 1),
(96, ' 6 ~', 3, 1),
(97, ' 7 ', 3, 1),
(98, ' 8 ', 3, 1),
(99, ' 9 ~', 3, 1),
(100, ' 10 ~', 3, 1),
(101, ' 11 ~', 3, 1),
(102, ' 12 ', 3, 1),
(103, ' 13 ', 3, 1),
(104, 'A0', 3, 1),
(105, 'A1', 3, 1),
(106, 'A2', 3, 1),
(107, 'A3', 3, 1),
(108, 'A4', 3, 1),
(109, 'A5', 3, 1),
(110, 'A6', 3, 1),
(111, 'A7', 3, 1),
(112, ' 0 (RX0) ', 4, 1),
(113, ' 1 (TX0) ', 4, 1),
(114, ' 2 ', 4, 1),
(115, ' 3 ~', 4, 1),
(116, ' 4 ', 4, 1),
(117, ' 5 ~', 4, 1),
(118, ' 6 ~', 4, 1),
(119, ' 7 ', 4, 1),
(120, ' 8 ', 4, 1),
(121, ' 9 ~', 4, 1),
(122, ' 10 ~', 4, 1),
(123, ' 11 ~', 4, 1),
(124, ' 12 ', 4, 1),
(125, ' 13 ', 4, 1),
(126, 'A0', 4, 1),
(127, 'A1 ', 4, 1),
(128, 'A2 ', 4, 1),
(129, 'A3 ', 4, 1),
(130, ' 0 ', 5, 1),
(131, ' 1 ', 5, 1),
(132, ' 2 ', 5, 1),
(133, ' 3 ~', 5, 1),
(134, ' 4 ', 5, 1),
(135, ' 5 ~', 5, 1),
(136, ' 6 ~', 5, 1),
(137, ' 7 ', 5, 1),
(138, ' 8 ', 5, 1),
(139, ' 9 ~', 5, 1),
(140, ' 10 ~', 5, 1),
(141, ' 11 ~', 5, 1),
(142, ' 12 ', 5, 1),
(143, ' 13 ~', 5, 1),
(144, 'A0 ', 5, 1),
(145, 'A1 ', 5, 1),
(146, 'A2 ', 5, 1),
(147, 'A3 ', 5, 1),
(148, 'A4 ', 5, 1),
(149, 'A5 ', 5, 1),
(0, '0 (Not Selected)', 1, 1),
(0, '0 (Not Selected)', 2, 1),
(0, '0 (Not Selected)', 3, 1),
(0, '0 (Not Selected)', 4, 1),
(0, '0 (Not Selected)', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `output_id` int(11) NOT NULL,
  `output_pin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bmodel_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`output_id`, `output_pin`, `bmodel_id`, `status`) VALUES
(1, '1', 1, 1),
(2, '2', 1, 1),
(3, '3~', 1, 1),
(4, '4', 1, 1),
(5, '5~', 1, 1),
(6, '6~', 1, 1),
(7, '7', 1, 1),
(8, '8', 1, 1),
(9, '9~', 1, 1),
(10, '10~', 1, 1),
(11, '11~', 1, 1),
(12, '12', 1, 1),
(13, '13~', 1, 1),
(14, 'A0', 1, 1),
(15, 'A1', 1, 1),
(16, 'A2', 1, 1),
(17, 'A3', 1, 1),
(18, 'A4', 1, 1),
(19, 'A5', 1, 1),
(20, 'RX0 ', 2, 1),
(21, 'TX0', 2, 1),
(22, '2~', 2, 1),
(23, '3~', 2, 1),
(24, '4~', 2, 1),
(25, '5~', 2, 1),
(26, '6~', 2, 1),
(27, '7~', 2, 1),
(28, '8~', 2, 1),
(29, '9~', 2, 1),
(30, '10~', 2, 1),
(31, '11~', 2, 1),
(32, '12~', 2, 1),
(33, '13~', 2, 1),
(34, '14(RX1)', 2, 1),
(35, '15(TX1)', 2, 1),
(36, '16(RX2)', 2, 1),
(37, '17(TX2)', 2, 1),
(38, '18(RX3)', 2, 1),
(39, '19(Tx3)', 2, 1),
(40, '20', 2, 1),
(41, '21', 2, 1),
(42, '22', 2, 1),
(43, '23', 2, 1),
(44, '24', 2, 1),
(45, '25', 2, 1),
(46, '26', 2, 1),
(47, '27', 2, 1),
(48, '28', 2, 1),
(49, '29', 2, 1),
(50, '30', 2, 1),
(51, '31', 2, 1),
(52, '32', 2, 1),
(53, '33', 2, 1),
(54, '34', 2, 1),
(55, '35', 2, 1),
(56, '36', 2, 1),
(57, '37', 2, 1),
(58, '38', 2, 1),
(59, '39', 2, 1),
(60, '40', 2, 1),
(61, '41', 2, 1),
(62, '42', 2, 1),
(63, '43', 2, 1),
(64, '44~', 2, 1),
(65, '45~', 2, 1),
(66, '46~', 2, 1),
(67, '47', 2, 1),
(68, '48', 2, 1),
(69, '49', 2, 1),
(70, '50', 2, 1),
(71, '51', 2, 1),
(72, '52', 2, 1),
(73, '53', 2, 1),
(74, 'A0', 2, 1),
(75, 'A1', 2, 1),
(76, 'A2', 2, 1),
(77, 'A3', 2, 1),
(78, 'A4', 2, 1),
(79, 'A5', 2, 1),
(80, 'A6', 2, 1),
(81, 'A7', 2, 1),
(82, 'A8', 2, 1),
(83, 'A9', 2, 1),
(84, 'A10', 2, 1),
(85, 'A11', 2, 1),
(86, 'A12', 2, 1),
(87, 'A13', 2, 1),
(88, 'A14', 2, 1),
(89, 'A15', 2, 1),
(90, ' 0 ', 3, 1),
(91, ' 1 ', 3, 1),
(92, ' 2 ', 3, 1),
(93, ' 3 ~', 3, 1),
(94, ' 4 ', 3, 1),
(95, ' 5 ~', 3, 1),
(96, ' 6 ~', 3, 1),
(97, ' 7 ', 3, 1),
(98, ' 8 ', 3, 1),
(99, ' 9 ~', 3, 1),
(100, ' 10 ~', 3, 1),
(101, ' 11 ~', 3, 1),
(102, ' 12 ', 3, 1),
(103, ' 13 ', 3, 1),
(104, 'A0', 3, 1),
(105, 'A1', 3, 1),
(106, 'A2', 3, 1),
(107, 'A3', 3, 1),
(108, 'A4', 3, 1),
(109, 'A5', 3, 1),
(110, 'A6', 3, 1),
(111, 'A7', 3, 1),
(112, ' 0 (RX0) ', 4, 1),
(113, ' 1 (TX0) ', 4, 1),
(114, ' 2 ', 4, 1),
(115, ' 3 ~', 4, 1),
(116, ' 4 ', 4, 1),
(117, ' 5 ~', 4, 1),
(118, ' 6 ~', 4, 1),
(119, ' 7 ', 4, 1),
(120, ' 8 ', 4, 1),
(121, ' 9 ~', 4, 1),
(122, ' 10 ~', 4, 1),
(123, ' 11 ~', 4, 1),
(124, ' 12 ', 4, 1),
(125, ' 13 ', 4, 1),
(126, 'A0', 4, 1),
(127, 'A1 ', 4, 1),
(128, 'A2 ', 4, 1),
(129, 'A3 ', 4, 1),
(130, ' 0 ', 5, 1),
(131, ' 1 ', 5, 1),
(132, ' 2 ', 5, 1),
(133, ' 3 ~', 5, 1),
(134, ' 4 ', 5, 1),
(135, ' 5 ~', 5, 1),
(136, ' 6 ~', 5, 1),
(137, ' 7 ', 5, 1),
(138, ' 8 ', 5, 1),
(139, ' 9 ~', 5, 1),
(140, ' 10 ~', 5, 1),
(141, ' 11 ~', 5, 1),
(142, ' 12 ', 5, 1),
(143, ' 13 ~', 5, 1),
(144, 'A0 ', 5, 1),
(145, 'A1 ', 5, 1),
(146, 'A2 ', 5, 1),
(147, 'A3 ', 5, 1),
(148, 'A4 ', 5, 1),
(149, 'A5 ', 5, 1),
(0, '0 (Not Selected)', 1, 1),
(0, '0 (Not Selected)', 2, 1),
(0, '0 (Not Selected)', 3, 1),
(0, '0 (Not Selected)', 4, 1),
(0, '0 (Not Selected)', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `sensor_id` int(11) NOT NULL,
  `sensor_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`sensor_id`, `sensor_name`, `status`) VALUES
(1, 'Button', 1),
(2, 'BLuetoth', 1),
(3, 'DHT Series', 1),
(4, 'Hall_Effect_sensor', 1),
(5, 'IR_distance\r\n', 1),
(6, 'IR_proximity_sensor', 1),
(7, 'Temperature Sensor', 1),
(8, 'Ultrasonic_Distance', 1),
(9, 'MQ Series', 1),
(10, 'PIR Sensor', 1),
(11, 'LCD16x2', 1),
(12, 'ALDX series', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smodels`
--

CREATE TABLE `smodels` (
  `smodel_id` int(11) NOT NULL,
  `smodel_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sensor_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `smodels`
--

INSERT INTO `smodels` (`smodel_id`, `smodel_name`, `sensor_id`, `status`) VALUES
(0, 'Button', 1, 1),
(1, 'MQ131', 9, 1),
(2, 'MQ2_GCG', 9, 1),
(3, 'MQ3_A', 9, 1),
(4, 'MQ4_NGM', 9, 1),
(5, 'MQ5_LPG', 9, 1),
(6, 'MQ6_P', 9, 1),
(7, 'MQ7_CO', 9, 1),
(8, 'MQ8_H', 9, 1),
(9, 'MQ9_CO/CG', 9, 1),
(10, 'MQ216_NG/CG', 9, 1),
(11, 'MQ303A', 9, 1),
(12, 'MQ306A', 9, 1),
(13, 'MQ309A', 9, 1),
(14, 'MQ135_AQC', 9, 1),
(15, 'MQ136_H2S', 9, 1),
(16, 'MQ137_NH3', 9, 1),
(17, 'MQ138', 9, 1),
(18, 'ALDXL212', 12, 1),
(19, 'ALDXL213', 12, 1),
(20, 'ALDXL335', 12, 1),
(21, 'ALDXL345', 12, 1),
(22, 'ALDXL001', 12, 1),
(23, 'HC-05', 2, 1),
(24, 'HC-06', 2, 1),
(25, 'DHT11', 3, 1),
(26, 'DHT22', 3, 1),
(27, 'HC-SR501', 10, 1),
(29, 'PNA4602m', 5, 1),
(28, 'GP2Y0A21', 6, 1),
(30, 'ACS712_30A', 4, 1),
(31, 'LM35', 7, 1),
(32, 'RTD PT 100', 7, 1),
(33, 'HC-SR04', 8, 1),
(34, 'Memsic2125', 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmodels`
--
ALTER TABLE `bmodels`
  ADD PRIMARY KEY (`bmodel_id`);

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`board_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
