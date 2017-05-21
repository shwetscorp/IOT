-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 09:46 AM
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
  `board_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`input_id`, `input_pin`, `board_id`, `status`) VALUES
(1, '1', 1, 1),
(2, '2', 1, 1),
(3, '3', 1, 1),
(4, '4', 1, 1),
(5, '5', 1, 1),
(6, '6', 1, 1),
(7, '7', 1, 1),
(8, '8', 1, 1),
(9, '9', 1, 1),
(10, '10', 1, 1),
(11, '11', 1, 1),
(12, '12', 1, 1),
(13, '13', 1, 1),
(14, 'A0', 1, 1),
(15, 'A1', 1, 1),
(16, 'A2', 1, 1),
(17, 'A3', 1, 1),
(18, 'A4', 1, 1),
(19, 'A5', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `output_id` int(11) NOT NULL,
  `output_pin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `board_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`output_id`, `output_pin`, `board_id`, `status`) VALUES
(1, '1', 1, 1),
(2, '2', 1, 1),
(3, '3', 1, 1),
(4, '4', 1, 1),
(5, '5', 1, 1),
(6, '6', 1, 1),
(7, '7', 1, 1),
(8, '8', 1, 1),
(9, '9', 1, 1),
(10, '10', 1, 1),
(11, '11', 1, 1),
(12, '12', 1, 1),
(13, '13', 1, 1),
(14, 'A0', 1, 1),
(15, 'A1', 1, 1),
(16, 'A2', 1, 1),
(17, 'A3', 1, 1),
(18, 'A4', 1, 1),
(19, 'A5', 1, 1);

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
(33, 'HC-SR04', 8, 1);

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
