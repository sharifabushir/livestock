-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 11:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livestock`
--

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `advice_ID` int(11) NOT NULL,
  `treat_ID` int(11) NOT NULL,
  `details` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advice`
--

INSERT INTO `advice` (`advice_ID`, `treat_ID`, `details`) VALUES
(1, 1, 'wape maji klwa wing,chumvi na banda liwe safi'),
(2, 2, 'sdradfzhcvjhff,kghkhghio');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animal_ID` int(11) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `atype` varchar(45) NOT NULL,
  `species` varchar(45) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animal_ID`, `F_ID`, `atype`, `species`, `gender`, `location`, `age`, `weight`) VALUES
(1, 1, 'mbuzi', 'mnyama', 'male', 'jambiani', 5, 100),
(2, 2, 'ngombe', 'ngombe', 'female', 'kiwengwa', 4, 60),
(3, 2, 'mbuz', 'mnyama', 'male', 'jambiani', 3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `comp_ID` int(11) NOT NULL,
  `vet_ID` int(11) NOT NULL,
  `animal_ID` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`comp_ID`, `vet_ID`, `animal_ID`, `title`, `status`) VALUES
(1, 3, 2, 'maradhi', 'active'),
(2, 4, 1, 'maradhi', 'off'),
(3, 4, 3, 'maradhi', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `dis_ID` int(11) NOT NULL,
  `symp_ID` int(11) NOT NULL,
  `dname` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `duration` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`dis_ID`, `symp_ID`, `dname`, `type`, `duration`) VALUES
(1, 1, 'panado', 'painkiller', '3days'),
(2, 2, 'bruffen', 'every', '5days');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `F_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `FName` varchar(45) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `location` varchar(45) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedingplan`
--

CREATE TABLE `feedingplan` (
  `plan_ID` int(11) NOT NULL,
  `food_ID` int(11) NOT NULL,
  `treat_ID` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_ID` int(11) NOT NULL,
  `F_Name` varchar(45) NOT NULL,
  `manufacturer` varchar(45) NOT NULL,
  `type` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_ID`, `F_Name`, `manufacturer`, `type`) VALUES
(1, 'majani ya viazi', 'zanziba', 1),
(2, 'mbatata', 'cheju', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_ID` int(11) NOT NULL,
  `treat_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `manufacture` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_ID`, `treat_ID`, `name`, `manufacture`) VALUES
(1, 1, 'amoxline', 'china'),
(2, 2, 'syrup', 'kenya');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symp_ID` int(11) NOT NULL,
  `animal_ID` int(11) NOT NULL,
  `details` varchar(45) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symp_ID`, `animal_ID`, `details`, `image`) VALUES
(1, 1, 'dfsfg', ''),
(2, 2, 'mmmm', ''),
(3, 3, 'chafya', '');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treat_ID` int(11) NOT NULL,
  `comp_ID` int(11) NOT NULL,
  `ttype` varchar(45) NOT NULL,
  `tdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treat_ID`, `comp_ID`, `ttype`, `tdate`) VALUES
(1, 3, 'pumu', '2020-04-14'),
(2, 1, 'minyoo', '2020-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `password` varchar(10) NOT NULL,
  `roles` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `userName`, `password`, `roles`) VALUES
(2, 'tuma', '12345', 'Staff'),
(3, 'juma', 'juma', 'Staff'),
(4, 'jumaa', 'juma', 'Staff'),
(5, 'tumaa', '12345', 'Staff'),
(6, 'tumaar', '12345', 'Staff'),
(7, 'muu', 'muu', 'Staff'),
(8, 'hai', 'hai', 'Staff'),
(9, '', '', 'Staff'),
(10, 'mo', 'mo', 'farmer');

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `vet_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `vetName` varchar(45) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `image` varchar(120) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vet`
--

INSERT INTO `vet` (`vet_ID`, `user_ID`, `vetName`, `Gender`, `phone`, `address`, `email`, `image`, `status`) VALUES
(1, 2, 'fatma khamis', 'female', '987456767', 'fuoni', 'fat@gmail.com', 'C:UsersKeisDocuments71y9lq_large.png', 'Active'),
(2, 3, 'ali juma ali', 'male', '0777890765', 'mwera', 'juma@gmail.com', '', 'Active'),
(3, 4, 'ali juma ali', 'male', '0777890765', 'fuoni', 'juma@gmail.com', '', 'Active'),
(4, 5, 'fatma khamis', 'female', '987456767', 'mwera', 'fat@gmail.com', '', 'Active'),
(5, 6, 'fatma khamis', 'female', '987456767', 'mwera', 'fat@gmail.com', '', 'Active'),
(6, 7, 'Muzdalifat', 'female', '077778899', 'jumbi', 'm@gmail.com', '', 'Active'),
(7, 8, 'haitham', 'female', '0889356', 'mwera', 'h@gmail.com', '', 'Active'),
(8, 9, 'fnnj', '', '98675', 'fnh', '', '', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`advice_ID`),
  ADD KEY `treat_ID` (`treat_ID`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_ID`),
  ADD KEY `F_ID` (`F_ID`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`comp_ID`),
  ADD KEY `Animal_ID` (`animal_ID`),
  ADD KEY `complain_ibfk_1` (`vet_ID`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`dis_ID`),
  ADD KEY `symp_ID` (`symp_ID`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `feedingplan`
--
ALTER TABLE `feedingplan`
  ADD PRIMARY KEY (`plan_ID`),
  ADD KEY `treat_ID` (`treat_ID`),
  ADD KEY `food_ID` (`food_ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_ID`),
  ADD KEY `treat_ID` (`treat_ID`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symp_ID`),
  ADD KEY `animal_ID` (`animal_ID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treat_ID`),
  ADD KEY `comp_ID` (`comp_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `vet`
--
ALTER TABLE `vet`
  ADD PRIMARY KEY (`vet_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `advice_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `comp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `dis_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedingplan`
--
ALTER TABLE `feedingplan`
  MODIFY `plan_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vet`
--
ALTER TABLE `vet`
  MODIFY `vet_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advice`
--
ALTER TABLE `advice`
  ADD CONSTRAINT `advice_ibfk_1` FOREIGN KEY (`treat_ID`) REFERENCES `treatment` (`treat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `farmer` (`F_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`vet_ID`) REFERENCES `vet` (`vet_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complain_ibfk_3` FOREIGN KEY (`animal_ID`) REFERENCES `animal` (`animal_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disease`
--
ALTER TABLE `disease`
  ADD CONSTRAINT `disease_ibfk_1` FOREIGN KEY (`symp_ID`) REFERENCES `symptoms` (`symp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmer_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedingplan`
--
ALTER TABLE `feedingplan`
  ADD CONSTRAINT `feedingplan_ibfk_1` FOREIGN KEY (`treat_ID`) REFERENCES `treatment` (`treat_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedingplan_ibfk_2` FOREIGN KEY (`food_ID`) REFERENCES `food` (`food_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`treat_ID`) REFERENCES `treatment` (`treat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD CONSTRAINT `symptoms_ibfk_1` FOREIGN KEY (`animal_ID`) REFERENCES `animal` (`animal_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`comp_ID`) REFERENCES `complain` (`comp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vet`
--
ALTER TABLE `vet`
  ADD CONSTRAINT `vet_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
