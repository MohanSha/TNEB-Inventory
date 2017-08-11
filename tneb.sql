-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 12:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tneb`
--
CREATE DATABASE IF NOT EXISTS `tneb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tneb`;

-- --------------------------------------------------------

--
-- Table structure for table `auto_transformers_ict`
--

DROP TABLE IF EXISTS `auto_transformers_ict`;
CREATE TABLE `auto_transformers_ict` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `voltage_level` varchar(50) DEFAULT NULL,
  `capacity` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `makers_no` varchar(15) NOT NULL,
  `no_of_taps` int(50) NOT NULL,
  `tap_position` varchar(50) NOT NULL,
  `year_of_MFG` year(4) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `maximum_reached` varchar(50) NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `breakers_110kv`
--

DROP TABLE IF EXISTS `breakers_110kv`;
CREATE TABLE `breakers_110kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `makers_no` int(15) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `medium` varchar(250) NOT NULL,
  `operating_mechanism` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `breakers_230kv`
--

DROP TABLE IF EXISTS `breakers_230kv`;
CREATE TABLE `breakers_230kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `makers_no` varchar(15) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `medium` varchar(250) NOT NULL,
  `operating_mechanism` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `breakers_400kv`
--

DROP TABLE IF EXISTS `breakers_400kv`;
CREATE TABLE `breakers_400kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `makers_no` varchar(15) NOT NULL,
  `type` varchar(250) NOT NULL,
  `breaking_capacity` varchar(200) NOT NULL,
  `year_of_MFG` year(4) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `capacitor_voltage_transformers_230kv`
--

DROP TABLE IF EXISTS `capacitor_voltage_transformers_230kv`;
CREATE TABLE `capacitor_voltage_transformers_230kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `makers_no` int(15) NOT NULL,
  `CVT_ratio_available` varchar(50) NOT NULL,
  `CVT_ratio_adopted` varchar(50) DEFAULT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `current_transformers_230kv`
--

DROP TABLE IF EXISTS `current_transformers_230kv`;
CREATE TABLE `current_transformers_230kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` varchar(15) NOT NULL,
  `Y` varchar(15) NOT NULL,
  `B` varchar(15) NOT NULL,
  `ratio_available` varchar(50) NOT NULL,
  `ratio_adopted` varchar(50) DEFAULT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `current_transformer_110kv`
--

DROP TABLE IF EXISTS `current_transformer_110kv`;
CREATE TABLE `current_transformer_110kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` int(15) NOT NULL,
  `Y` int(15) NOT NULL,
  `B` int(15) NOT NULL,
  `CT_ratio_available` varchar(250) NOT NULL,
  `CT_ratio_adopted` varchar(250) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `current_transformer_ct_400kv`
--

DROP TABLE IF EXISTS `current_transformer_ct_400kv`;
CREATE TABLE `current_transformer_ct_400kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` int(15) NOT NULL,
  `Y` int(15) NOT NULL,
  `B` int(15) NOT NULL,
  `ratio_available` varchar(50) NOT NULL,
  `ratio_adopted` varchar(50) DEFAULT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `current_transformer_cvt_400kv`
--

DROP TABLE IF EXISTS `current_transformer_cvt_400kv`;
CREATE TABLE `current_transformer_cvt_400kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` int(15) NOT NULL,
  `Y` int(15) NOT NULL,
  `B` int(15) NOT NULL,
  `ratio_available` varchar(50) NOT NULL,
  `ratio_adopted` varchar(50) DEFAULT NULL,
  `date_of_commisioning` varchar(10) NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt`
--

DROP TABLE IF EXISTS `dt`;
CREATE TABLE `dt` (
  `trans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `potential_transformers_230kv`
--

DROP TABLE IF EXISTS `potential_transformers_230kv`;
CREATE TABLE `potential_transformers_230kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` int(15) NOT NULL,
  `Y` int(15) NOT NULL,
  `B` int(15) NOT NULL,
  `ratio_available` varchar(50) NOT NULL,
  `ratio_adopted` varchar(50) DEFAULT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `potential_transformer_110kv`
--

DROP TABLE IF EXISTS `potential_transformer_110kv`;
CREATE TABLE `potential_transformer_110kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` int(15) NOT NULL,
  `Y` int(15) NOT NULL,
  `B` int(15) NOT NULL,
  `CT_ratio_available` varchar(250) NOT NULL,
  `CT_ratio_adopted` varchar(250) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssam`
--

DROP TABLE IF EXISTS `ssam`;
CREATE TABLE `ssam` (
  `Sno` int(11) NOT NULL,
  `EquipmentName` varchar(250) DEFAULT NULL,
  `Make` varchar(250) DEFAULT NULL,
  `Capacity` varchar(250) DEFAULT NULL,
  `MakersSNo` varchar(250) DEFAULT NULL,
  `VoltageLevelinkV` int(250) DEFAULT NULL,
  `NoofTAPS` int(250) DEFAULT NULL,
  `PresentTapPosition` varchar(250) DEFAULT NULL,
  `DateOfCommissioning` int(250) DEFAULT NULL,
  `YearofMFG` int(250) DEFAULT NULL,
  `Presentstatus` varchar(250) DEFAULT NULL,
  `MaximumReached` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surge_arrestors_110kv`
--

DROP TABLE IF EXISTS `surge_arrestors_110kv`;
CREATE TABLE `surge_arrestors_110kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` int(15) NOT NULL,
  `Y` int(15) NOT NULL,
  `B` int(15) NOT NULL,
  `CT_ratio_available` varchar(250) NOT NULL,
  `CT_ratio_adopted` varchar(250) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surge_arrestors_230kv`
--

DROP TABLE IF EXISTS `surge_arrestors_230kv`;
CREATE TABLE `surge_arrestors_230kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` varchar(15) NOT NULL,
  `Y` varchar(15) NOT NULL,
  `B` varchar(15) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surge_arrestors_400kv`
--

DROP TABLE IF EXISTS `surge_arrestors_400kv`;
CREATE TABLE `surge_arrestors_400kv` (
  `sno` int(11) NOT NULL,
  `equipment_name` varchar(250) NOT NULL,
  `make` varchar(50) NOT NULL,
  `R` varchar(15) NOT NULL,
  `Y` varchar(15) NOT NULL,
  `B` varchar(15) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `MCOV` varchar(250) NOT NULL,
  `year_of_MFG` year(4) NOT NULL,
  `date_of_commisioning` date NOT NULL,
  `present_status` varchar(250) NOT NULL,
  `purchase_order` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transmission_line`
--

DROP TABLE IF EXISTS `transmission_line`;
CREATE TABLE `transmission_line` (
  `sno` int(11) NOT NULL,
  `feeders` varchar(250) NOT NULL,
  `volt` varchar(20) NOT NULL,
  `line_len` varchar(250) NOT NULL,
  `conn_ss` varchar(250) NOT NULL,
  `MW` varchar(250) NOT NULL,
  `MVAR` varchar(250) NOT NULL,
  `amps` varchar(250) NOT NULL,
  `date_time` varchar(250) NOT NULL,
  `tied_rad_cond` varchar(250) NOT NULL,
  `src_norm_feed` varchar(250) NOT NULL,
  `conductor` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercreate`
--

DROP TABLE IF EXISTS `usercreate`;
CREATE TABLE `usercreate` (
  `fullname` varchar(250) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_transformers_ict`
--
ALTER TABLE `auto_transformers_ict`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `breakers_110kv`
--
ALTER TABLE `breakers_110kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `breakers_230kv`
--
ALTER TABLE `breakers_230kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `breakers_400kv`
--
ALTER TABLE `breakers_400kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `capacitor_voltage_transformers_230kv`
--
ALTER TABLE `capacitor_voltage_transformers_230kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `current_transformers_230kv`
--
ALTER TABLE `current_transformers_230kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `current_transformer_110kv`
--
ALTER TABLE `current_transformer_110kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `current_transformer_ct_400kv`
--
ALTER TABLE `current_transformer_ct_400kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `current_transformer_cvt_400kv`
--
ALTER TABLE `current_transformer_cvt_400kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dt`
--
ALTER TABLE `dt`
  ADD PRIMARY KEY (`trans`);

--
-- Indexes for table `potential_transformers_230kv`
--
ALTER TABLE `potential_transformers_230kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `potential_transformer_110kv`
--
ALTER TABLE `potential_transformer_110kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `ssam`
--
ALTER TABLE `ssam`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `surge_arrestors_110kv`
--
ALTER TABLE `surge_arrestors_110kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `surge_arrestors_230kv`
--
ALTER TABLE `surge_arrestors_230kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `surge_arrestors_400kv`
--
ALTER TABLE `surge_arrestors_400kv`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transmission_line`
--
ALTER TABLE `transmission_line`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_transformers_ict`
--
ALTER TABLE `auto_transformers_ict`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `breakers_110kv`
--
ALTER TABLE `breakers_110kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `breakers_230kv`
--
ALTER TABLE `breakers_230kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `breakers_400kv`
--
ALTER TABLE `breakers_400kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `capacitor_voltage_transformers_230kv`
--
ALTER TABLE `capacitor_voltage_transformers_230kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `current_transformers_230kv`
--
ALTER TABLE `current_transformers_230kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `current_transformer_110kv`
--
ALTER TABLE `current_transformer_110kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `current_transformer_ct_400kv`
--
ALTER TABLE `current_transformer_ct_400kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `current_transformer_cvt_400kv`
--
ALTER TABLE `current_transformer_cvt_400kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `potential_transformers_230kv`
--
ALTER TABLE `potential_transformers_230kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `potential_transformer_110kv`
--
ALTER TABLE `potential_transformer_110kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ssam`
--
ALTER TABLE `ssam`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surge_arrestors_110kv`
--
ALTER TABLE `surge_arrestors_110kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `surge_arrestors_230kv`
--
ALTER TABLE `surge_arrestors_230kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `surge_arrestors_400kv`
--
ALTER TABLE `surge_arrestors_400kv`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transmission_line`
--
ALTER TABLE `transmission_line`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
