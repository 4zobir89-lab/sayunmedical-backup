-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 08:40 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sayun`
--

-- --------------------------------------------------------

--
-- Table structure for table `3d_gallery`
--

CREATE TABLE IF NOT EXISTS `3d_gallery` (
`id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `3d_gallery`
--

INSERT INTO `3d_gallery` (`id`, `img`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `3_diff_hematology`
--

CREATE TABLE IF NOT EXISTS `3_diff_hematology` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `3_diff_hematology`
--

INSERT INTO `3_diff_hematology` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `5_diff_hematology`
--

CREATE TABLE IF NOT EXISTS `5_diff_hematology` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `5_diff_hematology`
--

INSERT INTO `5_diff_hematology` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anesthesia_machines`
--

CREATE TABLE IF NOT EXISTS `anesthesia_machines` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `anesthesia_machines`
--

INSERT INTO `anesthesia_machines` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg'),
(20, '20.jpg'),
(21, '21.jpg'),
(22, '22.jpg'),
(23, '23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cabinet_work_table_sink`
--

CREATE TABLE IF NOT EXISTS `cabinet_work_table_sink` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cabinet_work_table_sink`
--

INSERT INTO `cabinet_work_table_sink` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cardiology`
--

CREATE TABLE IF NOT EXISTS `cardiology` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cardiology`
--

INSERT INTO `cardiology` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `com_logos`
--

CREATE TABLE IF NOT EXISTS `com_logos` (
`id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `com_logos`
--

INSERT INTO `com_logos` (`id`, `img`) VALUES
(1, 'logo-1.png'),
(2, 'logo-2.png'),
(3, 'logo-3.png'),
(4, 'logo-4.png'),
(5, 'logo-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `dental_unit`
--

CREATE TABLE IF NOT EXISTS `dental_unit` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dental_unit`
--

INSERT INTO `dental_unit` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `electronic_apparatus`
--

CREATE TABLE IF NOT EXISTS `electronic_apparatus` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `electronic_apparatus`
--

INSERT INTO `electronic_apparatus` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `general_imaging`
--

CREATE TABLE IF NOT EXISTS `general_imaging` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `general_imaging`
--

INSERT INTO `general_imaging` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg'),
(20, '20.jpg'),
(21, '21.jpg'),
(22, '22.jpg'),
(23, '23.jpg'),
(24, '24.jpg'),
(25, '25.jpg'),
(26, '26.jpg'),
(27, '27.jpg'),
(28, '28.jpg'),
(29, '29.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slide`
--

CREATE TABLE IF NOT EXISTS `home_slide` (
`id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `home_slide`
--

INSERT INTO `home_slide` (`id`, `img`) VALUES
(1, '011.jpg'),
(2, '012.jpg'),
(3, '013.jpg'),
(4, '014.jpg'),
(5, '015.jpg'),
(6, '016.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_bed`
--

CREATE TABLE IF NOT EXISTS `hospital_bed` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `hospital_bed`
--

INSERT INTO `hospital_bed` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_trolley`
--

CREATE TABLE IF NOT EXISTS `hospital_trolley` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hospital_trolley`
--

INSERT INTO `hospital_trolley` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `incubator_and_warmer`
--

CREATE TABLE IF NOT EXISTS `incubator_and_warmer` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `incubator_and_warmer`
--

INSERT INTO `incubator_and_warmer` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infusion_pumps`
--

CREATE TABLE IF NOT EXISTS `infusion_pumps` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `infusion_pumps`
--

INSERT INTO `infusion_pumps` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `obgyn`
--

CREATE TABLE IF NOT EXISTS `obgyn` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `obgyn`
--

INSERT INTO `obgyn` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_monitoring_systems`
--

CREATE TABLE IF NOT EXISTS `patient_monitoring_systems` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `patient_monitoring_systems`
--

INSERT INTO `patient_monitoring_systems` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `poc`
--

CREATE TABLE IF NOT EXISTS `poc` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `poc`
--

INSERT INTO `poc` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `radiology`
--

CREATE TABLE IF NOT EXISTS `radiology` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `radiology`
--

INSERT INTO `radiology` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sterilizer`
--

CREATE TABLE IF NOT EXISTS `sterilizer` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sterilizer`
--

INSERT INTO `sterilizer` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `surgical_lights_and_operating_tables`
--

CREATE TABLE IF NOT EXISTS `surgical_lights_and_operating_tables` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `surgical_lights_and_operating_tables`
--

INSERT INTO `surgical_lights_and_operating_tables` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '14.jpg'),
(15, '15.jpg'),
(16, '16.jpg'),
(17, '17.jpg'),
(18, '18.jpg'),
(19, '19.jpg'),
(20, '20.jpg'),
(21, '21.jpg'),
(22, '22.jpg'),
(23, '23.jpg'),
(24, '24.jpg'),
(25, '25.jpg'),
(26, '26.jpg'),
(27, '27.jpg'),
(28, '28.jpg'),
(29, '29.jpg'),
(30, '30.jpg'),
(31, '31.jpg'),
(32, '32.jpg'),
(33, '33.jpg'),
(34, '34.jpg'),
(35, '35.jpg'),
(36, '36.jpg'),
(37, '37.jpg'),
(38, '38.jpg'),
(39, '39.jpg'),
(40, '40.jpg'),
(41, '41.jpg'),
(42, '42.jpg'),
(43, '43.jpg'),
(44, '44.jpg'),
(45, '45.jpg'),
(46, '46.jpg'),
(47, '47.jpg'),
(48, '48.jpg'),
(49, '49.jpg'),
(50, '50.jpg'),
(51, '51.jpg'),
(52, '52.jpg'),
(53, '53.jpg'),
(54, '54.jpg'),
(55, '55.jpg'),
(56, '56.jpg'),
(57, '57.jpg'),
(58, '58.jpg'),
(59, '59.jpg'),
(60, '60.jpg'),
(61, '61.jpg'),
(62, '62.jpg'),
(63, '63.jpg'),
(64, '64.jpg'),
(65, '65.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ultrasound`
--

CREATE TABLE IF NOT EXISTS `ultrasound` (
`id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ultrasound`
--

INSERT INTO `ultrasound` (`id`, `img`) VALUES
(1, 'dc-8.jpg'),
(2, 'dc-8-exp.jpg'),
(3, 'dc-30.jpg'),
(4, 'dc-40.jpg'),
(5, 'dc-60.jpg'),
(6, 'dc-70.jpg'),
(7, 'dp-10.jpg'),
(8, 'dp-50.jpg'),
(9, 'dp-2200.jpg'),
(10, 'dp-2200-plus.jpg'),
(11, 'resona6.jpg'),
(12, 'resona7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ventilators_and_defibrillator`
--

CREATE TABLE IF NOT EXISTS `ventilators_and_defibrillator` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ventilators_and_defibrillator`
--

INSERT INTO `ventilators_and_defibrillator` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `x_ray`
--

CREATE TABLE IF NOT EXISTS `x_ray` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `x_ray`
--

INSERT INTO `x_ray` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3d_gallery`
--
ALTER TABLE `3d_gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3_diff_hematology`
--
ALTER TABLE `3_diff_hematology`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5_diff_hematology`
--
ALTER TABLE `5_diff_hematology`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anesthesia_machines`
--
ALTER TABLE `anesthesia_machines`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabinet_work_table_sink`
--
ALTER TABLE `cabinet_work_table_sink`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardiology`
--
ALTER TABLE `cardiology`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com_logos`
--
ALTER TABLE `com_logos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dental_unit`
--
ALTER TABLE `dental_unit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronic_apparatus`
--
ALTER TABLE `electronic_apparatus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_imaging`
--
ALTER TABLE `general_imaging`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slide`
--
ALTER TABLE `home_slide`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_bed`
--
ALTER TABLE `hospital_bed`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_trolley`
--
ALTER TABLE `hospital_trolley`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incubator_and_warmer`
--
ALTER TABLE `incubator_and_warmer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infusion_pumps`
--
ALTER TABLE `infusion_pumps`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obgyn`
--
ALTER TABLE `obgyn`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_monitoring_systems`
--
ALTER TABLE `patient_monitoring_systems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poc`
--
ALTER TABLE `poc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiology`
--
ALTER TABLE `radiology`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sterilizer`
--
ALTER TABLE `sterilizer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgical_lights_and_operating_tables`
--
ALTER TABLE `surgical_lights_and_operating_tables`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ultrasound`
--
ALTER TABLE `ultrasound`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventilators_and_defibrillator`
--
ALTER TABLE `ventilators_and_defibrillator`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `x_ray`
--
ALTER TABLE `x_ray`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `3d_gallery`
--
ALTER TABLE `3d_gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `3_diff_hematology`
--
ALTER TABLE `3_diff_hematology`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `5_diff_hematology`
--
ALTER TABLE `5_diff_hematology`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `anesthesia_machines`
--
ALTER TABLE `anesthesia_machines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cabinet_work_table_sink`
--
ALTER TABLE `cabinet_work_table_sink`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cardiology`
--
ALTER TABLE `cardiology`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `com_logos`
--
ALTER TABLE `com_logos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dental_unit`
--
ALTER TABLE `dental_unit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `electronic_apparatus`
--
ALTER TABLE `electronic_apparatus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `general_imaging`
--
ALTER TABLE `general_imaging`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `home_slide`
--
ALTER TABLE `home_slide`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hospital_bed`
--
ALTER TABLE `hospital_bed`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hospital_trolley`
--
ALTER TABLE `hospital_trolley`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `incubator_and_warmer`
--
ALTER TABLE `incubator_and_warmer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `infusion_pumps`
--
ALTER TABLE `infusion_pumps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `obgyn`
--
ALTER TABLE `obgyn`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `patient_monitoring_systems`
--
ALTER TABLE `patient_monitoring_systems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `poc`
--
ALTER TABLE `poc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `radiology`
--
ALTER TABLE `radiology`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sterilizer`
--
ALTER TABLE `sterilizer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `surgical_lights_and_operating_tables`
--
ALTER TABLE `surgical_lights_and_operating_tables`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `ultrasound`
--
ALTER TABLE `ultrasound`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ventilators_and_defibrillator`
--
ALTER TABLE `ventilators_and_defibrillator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `x_ray`
--
ALTER TABLE `x_ray`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
