-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 06:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadvertkijiji`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `AdvertID` int(11) NOT NULL,
  `PaymentID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL,
  `AdvertDesc` text NOT NULL,
  `RegDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `Price` double NOT NULL,
  `Title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`AdvertID`, `PaymentID`, `MemberID`, `SubCategoryID`, `AdvertDesc`, `RegDate`, `ExpDate`, `Price`, `Title`) VALUES
(1, 1, 1, 1, 'Selling my Tesla Car', '2019-03-05', '2019-03-10', 1000, ''),
(2, 2, 2, 3, 'A great truck is on sale!', '2019-03-09', '2019-03-13', 3500.99, '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(3) NOT NULL,
  `Desc_Eng` varchar(250) NOT NULL,
  `Desc_Fre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `Desc_Eng`, `Desc_Fre`) VALUES
(1, 'Vehicles', 'Véhicules\r\n'),
(2, 'Jobs', 'Emplois'),
(3, 'Clothes', 'Vêtements');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ImageID` int(11) NOT NULL,
  `AdvertID` int(11) NOT NULL,
  `Source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luckymember`
--

CREATE TABLE `luckymember` (
  `LuckyMemberID` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `RegDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `DiscountRate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luckymember`
--

INSERT INTO `luckymember` (`LuckyMemberID`, `MemberID`, `RegDate`, `ExpDate`, `DiscountRate`) VALUES
(1, 1, '2019-03-22', '2019-03-25', 0.2),
(2, 2, '2019-03-27', '2019-03-30', 0.35);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `MemberType` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `Name`, `Address`, `City`, `State`, `Phone`, `Email`, `Password`, `MemberType`) VALUES
(1, 'Judy Mok', '1819 Beaubien East', 'Montreal', 'Quebec', '514-549-5016', 'sigurrosist@gmail.com', '1234', 1),
(2, 'Seungyeon', '2000 Ste.Catherine', 'Montreal', 'Quebec', '514-516-1135', 'seungyeon@gmail.com', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(3) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `CreateDate` date NOT NULL,
  `Sender` int(3) NOT NULL,
  `Receiver` int(3) NOT NULL,
  `New` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `Title`, `Message`, `CreateDate`, `Sender`, `Receiver`, `New`) VALUES
(1, 'Hyundai', 'Iwantit', '2019-04-19', 10, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(3) NOT NULL,
  `NumberOfImage` int(3) NOT NULL,
  `Duration` int(3) NOT NULL,
  `TotalPayment` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `NumberOfImage`, `Duration`, `TotalPayment`) VALUES
(1, 5, 5, '20'),
(2, 5, 5, '20');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `SubCategoryID` int(3) NOT NULL,
  `CategoryID` int(3) NOT NULL,
  `Desc_Eng` varchar(250) NOT NULL,
  `Desc_Fre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`SubCategoryID`, `CategoryID`, `Desc_Eng`, `Desc_Fre`) VALUES
(1, 1, 'Sedan', 'Sedan'),
(2, 1, 'Wagon', 'Wagon'),
(3, 1, 'Truck', 'Camion'),
(4, 2, 'Manager', 'Directeur'),
(5, 2, 'Developer', 'Développeur'),
(6, 2, 'Clerk', 'Employé de bureau\r\n'),
(7, 3, 'Woman', 'Femme'),
(8, 3, 'Man', 'Homme'),
(9, 3, 'Baby', 'Bébé');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`AdvertID`),
  ADD KEY `PaymentID` (`PaymentID`),
  ADD KEY `MemberID` (`MemberID`,`SubCategoryID`),
  ADD KEY `SubCategoryID` (`SubCategoryID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImageID`),
  ADD KEY `AdvertID` (`AdvertID`);

--
-- Indexes for table `luckymember`
--
ALTER TABLE `luckymember`
  ADD PRIMARY KEY (`LuckyMemberID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`SubCategoryID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `AdvertID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luckymember`
--
ALTER TABLE `luckymember`
  MODIFY `LuckyMemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `SubCategoryID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`SubCategoryID`) REFERENCES `subcategory` (`SubCategoryID`),
  ADD CONSTRAINT `advertisement_ibfk_2` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`),
  ADD CONSTRAINT `advertisement_ibfk_3` FOREIGN KEY (`PaymentID`) REFERENCES `payment` (`PaymentID`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`AdvertID`) REFERENCES `advertisement` (`AdvertID`);

--
-- Constraints for table `luckymember`
--
ALTER TABLE `luckymember`
  ADD CONSTRAINT `luckymember_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
