-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 07:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Total_Amount` int(100) NOT NULL,
  `Card_Name` varchar(100) NOT NULL,
  `Card_Number` varchar(16) NOT NULL,
  `Pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`First_Name`, `Last_Name`, `Address`, `Zip`, `Phone`, `Total_Amount`, `Card_Name`, `Card_Number`, `Pin`) VALUES
('Sanjay', 'Shah', '1234ffc', '07', 2147483647, 30, '', '', 0),
('Amar', 'Suryawanshi', 'Jersey city', '07306', 2147483647, 30, 'Discover', '12345678901', 1234),
('Rajes', 'Suryawanshi', 'Jersey city', '07306', 2147483647, 52, 'Discover', '34455666', 9834),
('', '', '', '', 0, 92, '', '', 0),
('', '', '', '', 0, 92, '', '', 0),
('', '', '', '', 0, 0, '', '', 0),
('Amar', 'Suryawanshi', 'Jersey city', '07306', 2147483647, 0, '', '', 0),
('Raj', 'kiran', 'am', '0079', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `User_Id` varchar(100) NOT NULL,
  `Menu_Id` int(10) NOT NULL,
  `Menu_Name` varchar(50) NOT NULL,
  `Menu_Price` int(10) NOT NULL,
  `Quantity` int(2) NOT NULL,
  `Total` int(10) NOT NULL,
  `Active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`User_Id`, `Menu_Id`, `Menu_Name`, `Menu_Price`, `Quantity`, `Total`, `Active`) VALUES
('', 102, 'JeeraRice', 10, 2, 20, 0),
('', 102, 'JeeraRice', 10, 2, 20, 0),
('', 103, 'Chicken Biryani', 11, 1, 11, 0),
('', 103, 'Chicken Biryani', 11, 1, 11, 0),
('', 103, 'Chicken Biryani', 11, 1, 11, 0),
('', 103, 'Chicken Biryani', 11, 1, 11, 0),
('Amar123 ', 102, 'JeeraRice', 10, 1, 10, 0),
('Amar123 ', 102, 'JeeraRice', 10, 1, 10, 0),
('Amar123 ', 103, 'Chicken Biryani', 11, 2, 22, 0),
('Amar123 ', 103, 'Chicken Biryani', 11, 1, 11, 0),
('Amar123 ', 102, 'JeeraRice', 10, 2, 20, 0),
('Amar123 ', 101, 'Butter Roti', 5, 1, 5, 0),
('Amar123 ', 101, 'Butter Roti', 5, 1, 5, 1),
('Amar123 ', 102, 'JeeraRice', 10, 1, 10, 1),
('Amar123 ', 102, 'JeeraRice', 10, 1, 10, 1),
('Amar123 ', 102, 'JeeraRice', 10, 1, 10, 1),
('Raj ', 102, 'JeeraRice', 10, 1, 10, 0),
('Raj ', 101, 'Butter Roti', 5, 1, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Menu_Name` varchar(50) NOT NULL,
  `Menu_Id` int(20) NOT NULL,
  `Menu_price` int(20) NOT NULL,
  `Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Menu_Name`, `Menu_Id`, `Menu_price`, `Image`) VALUES
('Butter Roti', 101, 5, 'images/roti.JPG'),
('JeeraRice', 102, 10, 'images/rice.jpg'),
('Chicken Biryani', 103, 11, 'images/biryani.jpg'),
('Gulabjamun', 104, 8, 'images/gulab.jpg'),
('Plain Rice', 105, 6, 'images/plainrice.jpg'),
('Masala Dosa', 106, 10, 'images/masaladosa.jpg'),
('Upma', 107, 5, 'images/upma.jpg'),
('RasMalai', 108, 7, 'images/Rasmalai.jpg'),
('PaneerTikka', 109, 11, 'images/paneer.jpg'),
('Idli', 110, 5, 'images/idli.jpg'),
('Chapati', 111, 2, 'images/chapati.jpg'),
('MeduVada', 112, 8, 'images/meduvada.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `User_id` varchar(10) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_Number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`First_Name`, `Last_Name`, `User_id`, `Password`, `Email`, `Mobile_Number`) VALUES
('Amar', 'Suryawanshi', 'Amar123', '12345', 'suryawanshiamar93@gmail.com', 2012479734),
('Raj', 'Kumar', 'Raj', '1234', 'rk@gmail.com', 1022479734);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Menu_Id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
