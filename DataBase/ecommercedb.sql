-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 06:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `memberID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`memberID`, `productID`, `productQuantity`, `totalPrice`) VALUES
(1, 1, 3, 3600),
(2, 1, 2, 2400);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Laptops'),
(2, 'Phones'),
(3, 'Accessories'),
(4, 'Printers'),
(5, 'Desktops'),
(6, 'ALL IN ONe'),
(9, 'Hard Drivers'),
(10, 'test'),
(11, 'From mobile '),
(12, 'uni'),
(13, 'starbucks'),
(14, 'uni'),
(15, ''),
(16, 'HomeTest'),
(17, '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `phoneNB` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `email`, `password`, `fullName`, `phoneNB`, `address1`, `address2`) VALUES
(1, 'aliwehbi@test.com', '123456789', 'Ali Wehbi', '71809966', 'Ain Anoub, Daher Shahamer Street, Naim Blg, First Floor', 'Sin El Fil, Jiser El Wati, Fattal Blg'),
(2, 'mhmdjibbe@test.com', '123456789', 'Mohammad Jibbe', '03927356', 'Beirut, Dekweneh, Nef3aa, hayakel baalbak Bld', ''),
(3, 'test@test.com', '123456789', 'Test Test', '03333333', 'Test, Test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productTotalPrice` int(11) NOT NULL,
  `purshaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `memberID`, `productID`, `productQuantity`, `productTotalPrice`, `purshaseDate`) VALUES
(1, 1, 1, 1, 1200, '2018-10-21'),
(1, 1, 2, 10, 10, '2018-10-21'),
(1, 1, 3, 20, 20, '2018-10-21'),
(2, 2, 1, 2, 2400, '2018-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productDescription` text NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productImage` varchar(255) DEFAULT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDescription`, `productPrice`, `productQuantity`, `productImage`, `catID`) VALUES
(1, 'Lenovo y700 3TEST', 'Core i7, 16GB RAM, 256GB SSD, 1TB HDD, 6GB VGA NVIDIA 3TEST', 30, 3, 'imgs/products/lenovoy700.jpg', 1),
(2, 'Logitech G203 Gaming Mouse', 'Gaming Mouse Hight sensitivity, 6 keys, high quality', 30, 10, 'imgs/products/LogitechG203GamingMouse.jpg', 3),
(3, 'Iphone X', 'Iphone x Desxription', 1000, 10, 'imgs/products/iphonex.jpg', 2),
(5, 'test1', 'test1', 100, 1, '', 10),
(6, 'TESTTEST', 'TESTTEST', 34, 34, NULL, 10),
(7, 'uni', 'uni', 20, 0, NULL, 12),
(8, 'uni2', 'uni2', 10, 100, NULL, 12),
(9, 'starbucks1', 'starbucks1', 10, 10, NULL, 13),
(10, 'tesssssssssst', 'tessssssssssst', 45, 45, '', 10),
(11, 'dsfdsf', 'dfdsfdsfds', 34543, 34324, '', 1),
(12, 'dskldslkdslk', 'kldfkldfklfdkl', 0, 0, 'imgs/products/download.jpg', 1),
(13, 'hjsdfhjdfshjdfs', 'hjfhjdfhjdfhjdfhjfhj', 34, 34, 'imgs/products/download.jpg', 13),
(14, 'UNIUNI', 'UNIUNI', 20, 20, 'imgs/products/bmw.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'ali', 'ali'),
(3, 'mhmd', 'mhmd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`memberID`,`productID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`,`memberID`,`productID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `members` (`memberID`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `members` (`memberID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `categories` (`categoryID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
