-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 07:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `econstruction`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_architecture`
--

CREATE TABLE `add_architecture` (
  `architecture_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_1` longblob NOT NULL,
  `image_2` longblob NOT NULL,
  `image_3` longblob NOT NULL,
  `discription` varchar(255) NOT NULL,
  `plot_area` varchar(50) NOT NULL,
  `building_type` varchar(50) NOT NULL,
  `building_style` varchar(20) NOT NULL,
  `badroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `foundation_type` varchar(255) NOT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_architecture`
--

INSERT INTO `add_architecture` (`architecture_id`, `title`, `image_1`, `image_2`, `image_3`, `discription`, `plot_area`, `building_type`, `building_style`, `badroom`, `bathroom`, `floor`, `kitchen`, `foundation_type`, `price`) VALUES
(6, '50  x 30  two story house', 0x646f776e6c6f61642e6a7067, 0x686f6d65352e6a7067, 0x6d617020666f72206679702e6a7067, 'Rare opportunity to move in your dream home! Offering this 9 marla boulevard corner house for sale in Bahria Town Phase 8. The fully furnished house is well constructed, comprises of spacious rooms, wide lounge and airy kitchen. The area is connected to a', '10000', 'South facing House Plan', 'Residential', 5, 5, 1, 1, 'crawl', 700000000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 2147483647),
(1, 'admin', 'admin@email.com', 'admin', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(14, 'Stile'),
(15, 'ABM'),
(16, 'PEC'),
(14, 'Stile'),
(15, 'ABM'),
(16, 'PEC');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(19, 'Tile'),
(20, 'Sand'),
(19, 'Tile'),
(20, 'Sand');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(10, 'Karachi'),
(11, 'Lahore'),
(12, 'Faisalabad'),
(13, 'Rawalpindi'),
(14, 'Multan'),
(15, 'Hyderabad'),
(16, 'Gujranwala'),
(17, 'Peshawar'),
(18, 'Quetta'),
(19, 'Islamabad'),
(20, 'Sargodha'),
(21, 'Sialkot'),
(22, 'Bahawalpur'),
(23, 'Sukkur'),
(24, 'Jhang'),
(25, 'Sheikhupura'),
(26, 'Larkana'),
(27, 'Gujrat'),
(28, 'Mardan'),
(29, 'Kasur'),
(30, 'Rahim Yar Khan'),
(31, 'Sahiwal'),
(32, 'Okara'),
(33, 'Wah'),
(34, 'Dera Ghazi Khan'),
(35, 'Mirpur Khas'),
(36, 'Nawabshah'),
(37, 'Mingora'),
(38, 'Chiniot'),
(39, 'Kamoke'),
(40, 'Mandi Burewala'),
(41, 'Jhelum'),
(42, 'Sadiqabad'),
(43, 'Jacobabad'),
(44, 'Shikarpur'),
(45, 'Khanewal'),
(46, 'Hafizabad'),
(47, 'Kohat'),
(48, 'Muzaffargarh'),
(49, 'Khanpur'),
(50, 'Gojra'),
(51, 'Bahawalnagar'),
(52, 'Muridke'),
(53, 'Pak Pattan'),
(54, 'Abottabad'),
(55, 'Tando Adam'),
(56, 'Jaranwala'),
(57, 'Khairpur'),
(58, 'Chishtian Mandi'),
(59, 'Daska'),
(60, 'Dadu'),
(61, 'Mandi Bahauddin'),
(62, 'Ahmadpur East'),
(63, 'Kamalia'),
(64, 'Khuzdar'),
(65, 'Vihari'),
(66, 'Dera Ismail Khan'),
(67, 'Wazirabad'),
(68, 'Nowshera'),
(69, 'asjkdhaskdjhasdk'),
(70, 'adausdayid'),
(71, 'adausdayid'),
(72, 'adausdayid'),
(73, 'adausdayid');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `customer_id`) VALUES
(1, 'musab', 'musab@email.com', '0315241454', 'abc message', 1),
(2, 'asd', 'asd@sad.asd', 'asd', 'asd', 1),
(8, 'asd', 'asd@asdasd.asd', 'asd', 'asd', 1),
(1, 'musab', 'musab@email.com', '0315241454', 'abc message', 1),
(2, 'asd', 'asd@sad.asd', 'asd', 'asd', 1),
(8, 'asd', 'asd@asdasd.asd', 'asd', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_contact` int(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_city`, `customer_contact`, `customer_address`) VALUES
(13, 'jahangir', 'jahangir@gmail.com', '$2y$10$gHPkfe2DWi/O/R28R/TV5.x01S528DdFSZkHduObie3b8TzukThQu', 'Karachi', 2147483647, 'shadman town karachi'),
(14, 'shahid', 'shahid@gmail.com', '$2y$10$51NZKSQXsu9uXyyT/sSYFujx8wEgsY8/Y6Lzyd070fPuL0vbBREGi', 'Karachi', 2147483647, 'pioneer park city'),
(15, '123', 'anas@gmail.com', '$2y$10$sF/d.PJ23lZrxp0gBbPOLup5ectItvxltjY6OenXKueLRX7f0Uov6', 'Gujrat', 2147483647, 'pioneer park city block 8A gulistan-e-jahor'),
(16, '123', 'anas@gmail.com', '$2y$10$mooPzGKEmgrQnFrjnDMcueRHVPUyigjoRH6U6Df3xINx2MjDPZLKi', 'Gujrat', 2147483647, 'pioneer park city block 8A gulistan-e-jahor');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_amout` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_address` varchar(500) NOT NULL,
  `order_country` varchar(50) NOT NULL,
  `order_city` varchar(50) NOT NULL,
  `order_state` varchar(50) NOT NULL,
  `order_postcode` varchar(50) NOT NULL,
  `order_phone` varchar(50) NOT NULL,
  `order_shipping` int(50) NOT NULL,
  `order_comment` varchar(100) NOT NULL,
  `order_payment_type` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amout`, `invoice_no`, `total_products`, `order_address`, `order_country`, `order_city`, `order_state`, `order_postcode`, `order_phone`, `order_shipping`, `order_comment`, `order_payment_type`, `order_date`, `order_status`) VALUES
(35, 1, 25000, 738838487, 2, 'asda', 'Pakistan', 'dasda', 'Karachi', '234', '234234324', 0, '', 'Pay by bank wire', '2019-09-05 11:25:32', 'Compelete'),
(42, 1, 110120, 994658022, 2, 'abc', 'Pakistan', 'abc', 'Lahore', '674090', '031515454', 60, '', '', '2019-08-27 09:02:56', 'Compelete'),
(55, 1, 33000, 2034970286, 2, 'asd', 'Pakistan', 'asd', 'Karachi', 'asd', 'asd', 0, '', '', '2019-09-22 21:46:42', 'Compelete'),
(62, 1, 60000, 1684874891, 2, 'asd', 'Pakistan', 'sad', 'Karachi', 'asd', 'sad', 0, '', '', '2019-09-05 11:28:05', 'Compelete'),
(81, 1, 50000, 1670191295, 1, 'asd', 'Pakistan', 'asd', 'Karachi', 'as', 'asd', 1, '', '', '2019-09-05 11:51:04', 'Compelete'),
(82, 1, 3060, 1108549783, 1, 'asd', 'Pakistan', 'asd', 'Karachi', 'asd', 'asd', 60, '', '', '2019-09-22 21:46:50', 'Compelete'),
(83, 1, 10000, 354472826, 1, 'pioneer pc', 'Pakistan', 'Karachi', 'Karachi', '123', '03343348028', 60, '', '', '2019-09-22 21:48:17', 'Compelete'),
(84, 6, 200, 1163445683, 1, 'r35 ayaztown`', 'Pakistan', 'karachi', 'Karachi', '21212121', '22112122222222', 1, '', '', '2019-09-22 21:48:43', 'Compelete'),
(35, 1, 25000, 738838487, 2, 'asda', 'Pakistan', 'dasda', 'Karachi', '234', '234234324', 0, '', 'Pay by bank wire', '2019-09-05 11:25:32', 'Compelete'),
(42, 1, 110120, 994658022, 2, 'abc', 'Pakistan', 'abc', 'Lahore', '674090', '031515454', 60, '', '', '2019-08-27 09:02:56', 'Compelete'),
(55, 1, 33000, 2034970286, 2, 'asd', 'Pakistan', 'asd', 'Karachi', 'asd', 'asd', 0, '', '', '2019-09-22 21:46:42', 'Compelete'),
(62, 1, 60000, 1684874891, 2, 'asd', 'Pakistan', 'sad', 'Karachi', 'asd', 'sad', 0, '', '', '2019-09-05 11:28:05', 'Compelete'),
(81, 1, 50000, 1670191295, 1, 'asd', 'Pakistan', 'asd', 'Karachi', 'as', 'asd', 1, '', '', '2019-09-05 11:51:04', 'Compelete'),
(82, 1, 3060, 1108549783, 1, 'asd', 'Pakistan', 'asd', 'Karachi', 'asd', 'asd', 60, '', '', '2019-09-22 21:46:50', 'Compelete'),
(83, 1, 10000, 354472826, 1, 'pioneer pc', 'Pakistan', 'Karachi', 'Karachi', '123', '03343348028', 60, '', '', '2019-09-22 21:48:17', 'Compelete'),
(84, 6, 200, 1163445683, 1, 'r35 ayaztown`', 'Pakistan', 'karachi', 'Karachi', '21212121', '22112122222222', 1, '', '', '2019-09-22 21:48:43', 'Compelete');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `id` int(11) NOT NULL,
  `delivery_charges` varchar(50) NOT NULL,
  `free_delivery_over` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customize`
--

INSERT INTO `customize` (`id`, `delivery_charges`, `free_delivery_over`) VALUES
(1, 'SDASD', 0),
(1, 'SDASD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forget_pass`
--

CREATE TABLE `forget_pass` (
  `pwd_id` int(11) NOT NULL,
  `pwd_email` text NOT NULL,
  `pwd_selector` text NOT NULL,
  `pwd_token` longtext NOT NULL,
  `pwd_expires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget_pass`
--

INSERT INTO `forget_pass` (`pwd_id`, `pwd_email`, `pwd_selector`, `pwd_token`, `pwd_expires`) VALUES
(1, 'musab@email.com', '53adf9d1b1c82d06', '$2y$10$z5AfhqW9RP4E0lwcRReYLunU1lIP.AJxhmCq7r27AWhY9CvFgm1We', '1567691766'),
(1, 'musab@email.com', '53adf9d1b1c82d06', '$2y$10$z5AfhqW9RP4E0lwcRReYLunU1lIP.AJxhmCq7r27AWhY9CvFgm1We', '1567691766');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `name`, `cell`) VALUES
(1, 'admin', 'admin', '', ''),
(2, 'jahangir', 'jahangir', '', ''),
(3, 'anas', 'anas', '', ''),
(4, 'dcdcdcd', '$2y$10$oZwWkaD8swjFxVnOAQCK9e5l.0rD7wYcO69vV/gcb7UuVXhVPfIO.', 'qwerty', 'qwerty'),
(5, 'dvfvdfvdfv', '$2y$10$EFNdSoSn8JkxBkLHLul6yOr1pB2GzgDxXepoQbpf2/doZ6EPOOc7O', '234234234', '234234234');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `product_name`, `product_price`, `product_qty`) VALUES
(27, 2, 'Gabbage', 0, 1),
(27, 14, 'DELL-8090 P3', 0, 2),
(27, 11, 'Strawberry', 0, 1),
(28, 2, 'Gabbage', 50000, 1),
(28, 16, 'Onion', 36000, 2),
(28, 14, 'DELL-8090 P3', 30000, 2),
(29, 2, 'Gabbage', 150000, 3),
(30, 11, 'Strawberry', 10000, 1),
(31, 16, 'Onion', 18000, 1),
(34, 11, 'Strawberry', 10000, 1),
(35, 11, 'Strawberry', 10000, 1),
(35, 14, 'DELL-8090 P3', 15000, 1),
(39, 16, 'Onion', 18000, 1),
(40, 15, 'asds', 20000, 1),
(40, 16, 'Onion', 36000, 2),
(40, 14, 'DELL-8090 P3', 15000, 1),
(41, 2, 'Gabbage', 50000, 1),
(41, 11, 'Strawberry', 10000, 1),
(42, 19, 'iPhone Max', 100000, 1),
(42, 11, 'Strawberry', 10000, 1),
(43, 2, 'Gabbage', 50000, 1),
(44, 2, 'Gabbage', 50000, 1),
(45, 16, 'Onion', 18000, 1),
(46, 14, 'DELL-8090 P3', 15000, 1),
(47, 2, 'Gabbage', 50000, 1),
(48, 2, 'Gabbage', 50000, 1),
(49, 2, 'Gabbage', 50000, 1),
(49, 11, 'Strawberry', 10000, 1),
(50, 11, 'Strawberry', 10000, 1),
(50, 14, 'DELL-8090 P3', 15000, 1),
(51, 14, 'DELL-8090 P3', 15000, 1),
(51, 11, 'Strawberry', 10000, 1),
(52, 11, 'Strawberry', 10000, 1),
(52, 2, 'Gabbage', 50000, 1),
(53, 11, 'Strawberry', 10000, 1),
(53, 14, 'DELL-8090 P3', 15000, 1),
(54, 11, 'Strawberry', 10000, 1),
(54, 14, 'DELL-8090 P3', 15000, 1),
(55, 14, 'DELL-8090 P3', 15000, 1),
(55, 16, 'Onion', 18000, 1),
(56, 11, 'Strawberry', 10000, 1),
(56, 16, 'Onion', 18000, 1),
(57, 2, 'Gabbage', 50000, 1),
(58, 16, 'Onion', 18000, 1),
(59, 16, 'Onion', 18000, 1),
(59, 11, 'Strawberry', 20000, 2),
(60, 11, 'Strawberry', 10000, 1),
(60, 2, 'Gabbage', 50000, 1),
(61, 2, 'Gabbage', 50000, 1),
(61, 11, 'Strawberry', 10000, 1),
(62, 2, 'Gabbage', 50000, 1),
(62, 11, 'Strawberry', 10000, 1),
(63, 2, 'Gabbage', 50000, 1),
(63, 11, 'Strawberry', 10000, 1),
(64, 2, 'Gabbage', 50000, 1),
(64, 11, 'Strawberry', 10000, 1),
(65, 2, 'Gabbage', 50000, 1),
(65, 11, 'Strawberry', 10000, 1),
(66, 14, 'DELL-8090 P3', 15000, 1),
(66, 11, 'Strawberry', 10000, 1),
(67, 11, 'Strawberry', 20000, 2),
(68, 2, 'Gabbage', 50000, 1),
(69, 11, 'Strawberry', 10000, 1),
(70, 11, 'Strawberry', 10000, 1),
(71, 11, 'Strawberry', 10000, 1),
(71, 14, 'DELL-8090 P3', 15000, 1),
(72, 11, 'Strawberry', 10000, 1),
(72, 14, 'DELL-8090 P3', 15000, 1),
(73, 2, 'Gabbage', 50000, 1),
(74, 2, 'Gabbage', 50000, 1),
(74, 14, 'DELL-8090 P3', 15000, 1),
(75, 2, 'Gabbage', 50000, 1),
(75, 14, 'DELL-8090 P3', 15000, 1),
(76, 2, 'Gabbage', 50000, 1),
(76, 11, 'Strawberry', 10000, 1),
(77, 14, 'DELL-8090 P3', 15000, 1),
(77, 11, 'Strawberry', 10000, 1),
(78, 2, 'Gabbage', 50000, 1),
(78, 11, 'Strawberry', 10000, 1),
(79, 11, 'Strawberry', 10000, 1),
(79, 14, 'DELL-8090 P3', 15000, 1),
(80, 11, 'Strawberry', 10000, 1),
(80, 2, 'Gabbage', 50000, 1),
(81, 2, 'Gabbage', 50000, 1),
(82, 18, 'Coca Nata', 3000, 1),
(83, 11, 'Strawberry', 10000, 1),
(84, 25, 'ABM Concrete M-Sand', 200, 1),
(85, 21, 'E-SC-AS-001 Flouring Tile', 200, 1),
(27, 2, 'Gabbage', 0, 1),
(27, 14, 'DELL-8090 P3', 0, 2),
(27, 11, 'Strawberry', 0, 1),
(28, 2, 'Gabbage', 50000, 1),
(28, 16, 'Onion', 36000, 2),
(28, 14, 'DELL-8090 P3', 30000, 2),
(29, 2, 'Gabbage', 150000, 3),
(30, 11, 'Strawberry', 10000, 1),
(31, 16, 'Onion', 18000, 1),
(34, 11, 'Strawberry', 10000, 1),
(35, 11, 'Strawberry', 10000, 1),
(35, 14, 'DELL-8090 P3', 15000, 1),
(39, 16, 'Onion', 18000, 1),
(40, 15, 'asds', 20000, 1),
(40, 16, 'Onion', 36000, 2),
(40, 14, 'DELL-8090 P3', 15000, 1),
(41, 2, 'Gabbage', 50000, 1),
(41, 11, 'Strawberry', 10000, 1),
(42, 19, 'iPhone Max', 100000, 1),
(42, 11, 'Strawberry', 10000, 1),
(43, 2, 'Gabbage', 50000, 1),
(44, 2, 'Gabbage', 50000, 1),
(45, 16, 'Onion', 18000, 1),
(46, 14, 'DELL-8090 P3', 15000, 1),
(47, 2, 'Gabbage', 50000, 1),
(48, 2, 'Gabbage', 50000, 1),
(49, 2, 'Gabbage', 50000, 1),
(49, 11, 'Strawberry', 10000, 1),
(50, 11, 'Strawberry', 10000, 1),
(50, 14, 'DELL-8090 P3', 15000, 1),
(51, 14, 'DELL-8090 P3', 15000, 1),
(51, 11, 'Strawberry', 10000, 1),
(52, 11, 'Strawberry', 10000, 1),
(52, 2, 'Gabbage', 50000, 1),
(53, 11, 'Strawberry', 10000, 1),
(53, 14, 'DELL-8090 P3', 15000, 1),
(54, 11, 'Strawberry', 10000, 1),
(54, 14, 'DELL-8090 P3', 15000, 1),
(55, 14, 'DELL-8090 P3', 15000, 1),
(55, 16, 'Onion', 18000, 1),
(56, 11, 'Strawberry', 10000, 1),
(56, 16, 'Onion', 18000, 1),
(57, 2, 'Gabbage', 50000, 1),
(58, 16, 'Onion', 18000, 1),
(59, 16, 'Onion', 18000, 1),
(59, 11, 'Strawberry', 20000, 2),
(60, 11, 'Strawberry', 10000, 1),
(60, 2, 'Gabbage', 50000, 1),
(61, 2, 'Gabbage', 50000, 1),
(61, 11, 'Strawberry', 10000, 1),
(62, 2, 'Gabbage', 50000, 1),
(62, 11, 'Strawberry', 10000, 1),
(63, 2, 'Gabbage', 50000, 1),
(63, 11, 'Strawberry', 10000, 1),
(64, 2, 'Gabbage', 50000, 1),
(64, 11, 'Strawberry', 10000, 1),
(65, 2, 'Gabbage', 50000, 1),
(65, 11, 'Strawberry', 10000, 1),
(66, 14, 'DELL-8090 P3', 15000, 1),
(66, 11, 'Strawberry', 10000, 1),
(67, 11, 'Strawberry', 20000, 2),
(68, 2, 'Gabbage', 50000, 1),
(69, 11, 'Strawberry', 10000, 1),
(70, 11, 'Strawberry', 10000, 1),
(71, 11, 'Strawberry', 10000, 1),
(71, 14, 'DELL-8090 P3', 15000, 1),
(72, 11, 'Strawberry', 10000, 1),
(72, 14, 'DELL-8090 P3', 15000, 1),
(73, 2, 'Gabbage', 50000, 1),
(74, 2, 'Gabbage', 50000, 1),
(74, 14, 'DELL-8090 P3', 15000, 1),
(75, 2, 'Gabbage', 50000, 1),
(75, 14, 'DELL-8090 P3', 15000, 1),
(76, 2, 'Gabbage', 50000, 1),
(76, 11, 'Strawberry', 10000, 1),
(77, 14, 'DELL-8090 P3', 15000, 1),
(77, 11, 'Strawberry', 10000, 1),
(78, 2, 'Gabbage', 50000, 1),
(78, 11, 'Strawberry', 10000, 1),
(79, 11, 'Strawberry', 10000, 1),
(79, 14, 'DELL-8090 P3', 15000, 1),
(80, 11, 'Strawberry', 10000, 1),
(80, 2, 'Gabbage', 50000, 1),
(81, 2, 'Gabbage', 50000, 1),
(82, 18, 'Coca Nata', 3000, 1),
(83, 11, 'Strawberry', 10000, 1),
(84, 25, 'ABM Concrete M-Sand', 200, 1),
(85, 21, 'E-SC-AS-001 Flouring Tile', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `ref_no` int(50) NOT NULL,
  `code` int(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 1077900139, 900, 'Bank Transfer', 234, 234324, '2019-07-12 16:55:56'),
(3, 1077900139, 900, 'Bank Transfer', 324, 342423, '2019-07-12 16:58:55'),
(4, 399959755, 1160, 'Bank Transfer', 151414, 165445, '2019-07-24 17:11:36'),
(5, 1048175408, 180, 'Bank Transfer', 432, 23432, '2019-07-24 17:12:27'),
(6, 2120691281, 400, 'Bank Transfer', 243, 2434, '2019-07-24 17:44:38'),
(7, 1862693950, 400, 'Bank Transfer', 34234, 4234324, '2019-07-24 18:28:39'),
(8, 1638490717, 3180, 'Bank Transfer', 324432, 3432432, '2019-07-24 18:30:17'),
(2, 1077900139, 900, 'Bank Transfer', 234, 234324, '2019-07-12 16:55:56'),
(3, 1077900139, 900, 'Bank Transfer', 324, 342423, '2019-07-12 16:58:55'),
(4, 399959755, 1160, 'Bank Transfer', 151414, 165445, '2019-07-24 17:11:36'),
(5, 1048175408, 180, 'Bank Transfer', 432, 23432, '2019-07-24 17:12:27'),
(6, 2120691281, 400, 'Bank Transfer', 243, 2434, '2019-07-24 17:44:38'),
(7, 1862693950, 400, 'Bank Transfer', 34234, 4234324, '2019-07-24 18:28:39'),
(8, 1638490717, 3180, 'Bank Transfer', 324432, 3432432, '2019-07-24 18:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `customer_id` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(1, 1743444233, 2, 1, 'Pending'),
(1, 1087541045, 11, 2, 'Pending'),
(1, 1538073562, 14, 2, 'Pending'),
(1, 309185229, 14, 2, 'Pending'),
(1, 1776174193, 15, 1, 'Pending'),
(1, 912798977, 11, 2, 'Pending'),
(1, 695279868, 14, 1, 'Pending'),
(1, 829787293, 2, 2, 'Pending'),
(1, 2770615, 15, 4, 'Pending'),
(1, 2111966599, 15, 1, 'Pending'),
(1, 2111966599, 11, 2, 'Pending'),
(1, 861099485, 2, 2, 'Pending'),
(1, 861099485, 16, 4, 'Pending'),
(1, 1223028977, 2, 1, 'Pending'),
(1, 1938001519, 2, 1, 'Pending'),
(1, 439548111, 14, 3, 'Pending'),
(1, 1152709532, 14, 2, 'Pending'),
(1, 1701728419, 11, 2, 'Pending'),
(1, 1547312617, 14, 3, 'Pending'),
(1, 371969446, 11, 2, 'Pending'),
(1, 367921115, 11, 2, 'Pending'),
(1, 591853893, 16, 3, 'Pending'),
(1, 285863719, 11, 4, 'Pending'),
(1, 1650110058, 14, 5, 'Pending'),
(1, 888407195, 2, 3, 'Pending'),
(1, 1170375671, 11, 1, 'Pending'),
(1, 2004233096, 16, 1, 'Pending'),
(1, 596847902, 11, 3, 'Pending'),
(1, 1812042197, 11, 1, 'Pending'),
(1, 838104293, 11, 1, 'Pending'),
(1, 738838487, 14, 2, 'Pending'),
(1, 423101498, 2, 1, 'Pending'),
(1, 645547595, 2, 1, 'Pending'),
(1, 840629964, 16, 1, 'Pending'),
(1, 1624102658, 16, 1, 'Pending'),
(1, 299341488, 14, 4, 'Pending'),
(1, 54914154, 11, 2, 'Pending'),
(1, 994658022, 11, 2, 'Pending'),
(1, 1332398688, 2, 1, 'Pending'),
(1, 1589244507, 2, 1, 'Pending'),
(1, 1429692142, 16, 1, 'Pending'),
(1, 1526276416, 14, 1, 'Pending'),
(1, 1375781442, 2, 1, 'Pending'),
(1, 621295792, 2, 1, 'Pending'),
(1, 868612347, 11, 2, 'Pending'),
(1, 1499975247, 14, 2, 'Pending'),
(1, 2104135544, 11, 2, 'Pending'),
(1, 916073070, 2, 2, 'Pending'),
(1, 1783584545, 14, 2, 'Pending'),
(1, 358086467, 14, 2, 'Pending'),
(1, 2034970286, 16, 2, 'Pending'),
(1, 847342043, 16, 2, 'Pending'),
(1, 1726791320, 2, 1, 'Pending'),
(1, 1529854928, 16, 1, 'Pending'),
(1, 647259822, 11, 3, 'Pending'),
(1, 1483147596, 2, 2, 'Pending'),
(1, 353913807, 11, 2, 'Pending'),
(1, 1684874891, 11, 2, 'Pending'),
(1, 1542115567, 11, 2, 'Pending'),
(1, 822058589, 11, 2, 'Pending'),
(1, 1244698967, 11, 2, 'Pending'),
(1, 1237727857, 11, 2, 'Pending'),
(1, 742237599, 11, 2, 'Pending'),
(1, 1458801130, 2, 1, 'Pending'),
(1, 605500896, 11, 1, 'Pending'),
(1, 944232621, 11, 1, 'Pending'),
(1, 1544077248, 14, 2, 'Pending'),
(1, 562025151, 14, 2, 'Pending'),
(1, 78396840, 2, 1, 'Pending'),
(1, 1614446274, 14, 2, 'Pending'),
(1, 906858914, 14, 2, 'Pending'),
(1, 1644267518, 11, 2, 'Pending'),
(1, 700248437, 11, 2, 'Pending'),
(1, 668303140, 11, 2, 'Pending'),
(1, 382385334, 14, 2, 'Pending'),
(1, 470789645, 2, 2, 'Pending'),
(1, 1670191295, 2, 1, 'Pending'),
(1, 1108549783, 18, 1, 'Pending'),
(1, 354472826, 11, 1, 'Pending'),
(6, 1163445683, 25, 1, 'Pending'),
(6, 1810840117, 21, 1, 'Pending'),
(1, 1743444233, 2, 1, 'Pending'),
(1, 1087541045, 11, 2, 'Pending'),
(1, 1538073562, 14, 2, 'Pending'),
(1, 309185229, 14, 2, 'Pending'),
(1, 1776174193, 15, 1, 'Pending'),
(1, 912798977, 11, 2, 'Pending'),
(1, 695279868, 14, 1, 'Pending'),
(1, 829787293, 2, 2, 'Pending'),
(1, 2770615, 15, 4, 'Pending'),
(1, 2111966599, 15, 1, 'Pending'),
(1, 2111966599, 11, 2, 'Pending'),
(1, 861099485, 2, 2, 'Pending'),
(1, 861099485, 16, 4, 'Pending'),
(1, 1223028977, 2, 1, 'Pending'),
(1, 1938001519, 2, 1, 'Pending'),
(1, 439548111, 14, 3, 'Pending'),
(1, 1152709532, 14, 2, 'Pending'),
(1, 1701728419, 11, 2, 'Pending'),
(1, 1547312617, 14, 3, 'Pending'),
(1, 371969446, 11, 2, 'Pending'),
(1, 367921115, 11, 2, 'Pending'),
(1, 591853893, 16, 3, 'Pending'),
(1, 285863719, 11, 4, 'Pending'),
(1, 1650110058, 14, 5, 'Pending'),
(1, 888407195, 2, 3, 'Pending'),
(1, 1170375671, 11, 1, 'Pending'),
(1, 2004233096, 16, 1, 'Pending'),
(1, 596847902, 11, 3, 'Pending'),
(1, 1812042197, 11, 1, 'Pending'),
(1, 838104293, 11, 1, 'Pending'),
(1, 738838487, 14, 2, 'Pending'),
(1, 423101498, 2, 1, 'Pending'),
(1, 645547595, 2, 1, 'Pending'),
(1, 840629964, 16, 1, 'Pending'),
(1, 1624102658, 16, 1, 'Pending'),
(1, 299341488, 14, 4, 'Pending'),
(1, 54914154, 11, 2, 'Pending'),
(1, 994658022, 11, 2, 'Pending'),
(1, 1332398688, 2, 1, 'Pending'),
(1, 1589244507, 2, 1, 'Pending'),
(1, 1429692142, 16, 1, 'Pending'),
(1, 1526276416, 14, 1, 'Pending'),
(1, 1375781442, 2, 1, 'Pending'),
(1, 621295792, 2, 1, 'Pending'),
(1, 868612347, 11, 2, 'Pending'),
(1, 1499975247, 14, 2, 'Pending'),
(1, 2104135544, 11, 2, 'Pending'),
(1, 916073070, 2, 2, 'Pending'),
(1, 1783584545, 14, 2, 'Pending'),
(1, 358086467, 14, 2, 'Pending'),
(1, 2034970286, 16, 2, 'Pending'),
(1, 847342043, 16, 2, 'Pending'),
(1, 1726791320, 2, 1, 'Pending'),
(1, 1529854928, 16, 1, 'Pending'),
(1, 647259822, 11, 3, 'Pending'),
(1, 1483147596, 2, 2, 'Pending'),
(1, 353913807, 11, 2, 'Pending'),
(1, 1684874891, 11, 2, 'Pending'),
(1, 1542115567, 11, 2, 'Pending'),
(1, 822058589, 11, 2, 'Pending'),
(1, 1244698967, 11, 2, 'Pending'),
(1, 1237727857, 11, 2, 'Pending'),
(1, 742237599, 11, 2, 'Pending'),
(1, 1458801130, 2, 1, 'Pending'),
(1, 605500896, 11, 1, 'Pending'),
(1, 944232621, 11, 1, 'Pending'),
(1, 1544077248, 14, 2, 'Pending'),
(1, 562025151, 14, 2, 'Pending'),
(1, 78396840, 2, 1, 'Pending'),
(1, 1614446274, 14, 2, 'Pending'),
(1, 906858914, 14, 2, 'Pending'),
(1, 1644267518, 11, 2, 'Pending'),
(1, 700248437, 11, 2, 'Pending'),
(1, 668303140, 11, 2, 'Pending'),
(1, 382385334, 14, 2, 'Pending'),
(1, 470789645, 2, 2, 'Pending'),
(1, 1670191295, 2, 1, 'Pending'),
(1, 1108549783, 18, 1, 'Pending'),
(1, 354472826, 11, 1, 'Pending'),
(6, 1163445683, 25, 1, 'Pending'),
(6, 1810840117, 21, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` varchar(100) NOT NULL,
  `product_img1` varchar(500) NOT NULL,
  `product_price` varchar(500) NOT NULL,
  `sales_price` int(11) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `qty` int(100) NOT NULL,
  `status` int(10) NOT NULL,
  `product_keyword` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_price`, `sales_price`, `product_desc`, `qty`, `status`, `product_keyword`, `count`, `rating`) VALUES
(0, 0, 0, '2019-11-20 08:00:00', 'plumber', '73363hs_007_1469215406_1479219168.jpg', '200', 110, 'wdssdsdsd', 12, 0, 'ssdfsff', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`type_id`, `type`, `sub_type`) VALUES
(3, 'Home', 'House'),
(4, 'Home', 'Flat'),
(5, 'Home', 'Upper Portion'),
(6, 'Home', 'Lower Portion'),
(7, 'Home', 'Room'),
(8, 'Home', 'Penthouse'),
(9, 'Plots', 'Residential Plot'),
(10, 'Plots', 'Commercial Plot'),
(11, 'Plots', 'Agricultural Land'),
(12, 'Plots', 'Industrial Land'),
(13, 'Plots', 'Plot File'),
(14, 'Plots', 'Plot Form'),
(15, 'Commercial', 'Office'),
(16, 'Commercial', 'Shop'),
(17, 'Commercial', 'Warehouse'),
(18, 'Commercial', 'Factory'),
(19, 'Commercial', 'Building'),
(20, 'Commercial', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `realstate`
--

CREATE TABLE `realstate` (
  `realstate_id` int(11) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `Property_type` varchar(50) NOT NULL,
  `Select_city` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Property_Title` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Land_area` varchar(100) NOT NULL,
  `Add_Images` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `cell_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `realstate_admin`
--

CREATE TABLE `realstate_admin` (
  `realstate_id` int(11) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `Property_type` varchar(50) NOT NULL,
  `subtype` varchar(100) NOT NULL,
  `Select_city` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Property_Title` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Land_area` varchar(100) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Bedrooms` varchar(10) NOT NULL,
  `Bathrooms` varchar(10) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `cell_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realstate_admin`
--

INSERT INTO `realstate_admin` (`realstate_id`, `Purpose`, `Property_type`, `subtype`, `Select_city`, `Location`, `Property_Title`, `Description`, `Price`, `Land_area`, `Unit`, `Bedrooms`, `Bathrooms`, `phone_no`, `cell_no`, `Email`, `customer_id`) VALUES
(1, 'Sale', 'Home', 'House', 'Ahmadpur East', 'Shadman town karachi', 'askasjhdkasdjh', 'anas house for sale in karchi', '80009090', '090909', 'Square Feet', '1', '1', '03310279828', '066775765765', 'mirzacomputers0331@gmail.com', 13788),
(39, 'Sale', 'Home', 'House', 'Chiniot', 'nazimabad', 'asdasdasd', '87987', '89798', '897', 'Square Feet', '1', '1', '978987', '897897897', 'mirzacomputers0331@gmail.com', 0),
(40, 'Rent', 'Plot', 'Warehouse', 'Chiniot', 'nazimabad', 'jaanaigr', 'alskdjadklj', '987987', '987', 'Square Feet', '2', '1', '987987', '987987987', '9879872@gmail.com', 0),
(41, 'Sale', 'Home', 'House', 'Ahmed Nager Chatha', 'shadmna', 'askldjasdlj', 'laskdjasldjk', '098098098098', '098098', 'Square Feet', '3', '1', '788979789', '8798798798', 'jalilahmedsheikh3@gmail.com', 0),
(42, 'Sale', 'Plot', 'Lower Portion', 'Ahmadpur East', 'shadmna', 'kjshdakdjh', '980980809', '0980', '98098', 'Square Feet', '1', '3', '03310279828', '0898098098', 'mirzacomputers0331@gmail.com', 0),
(43, 'Sale', 'Home', 'House', 'Burewala', 'nazimabad', 'askasjhdkasdjh', 'asdasdasd', '89798', '7897', 'Square Feet', '2', '3', '98798789', '78978978', '9879872@gmail.com', 98),
(44, 'Sale', 'Plot', 'Warehouse', 'Chiniot', 'nazimabad', 'asdasjdhkj', 'kjhjkhjkhjk', '9987', '987', 'Square Feet', '1', '1', '9878979', '9987897', '9879872@gmail.com', 987),
(45, 'Sale', 'Plot', 'Warehouse', 'Chiniot', 'nazimabad', 'asdasjdhkj', 'kjhjkhjkhjk', '9987', '987', 'Square Feet', '1', '1', '9878979', '9987897', '9879872@gmail.com', 987),
(46, 'Rent', 'Home', 'House', 'Bhera', 'nazimabad', 'askasjhdkasdjh', 'furqan', '9080989', '8098098', 'Square Feet', '1', '3', '09809809', '8098098', '9879872@gmail.com', 12121),
(47, 'Rent', 'Plot', 'Other', 'Chiniot', 'shadmna', 'askasjhdkasdjh', 'zsdasd', '0909090', '909090', 'Square Feet', '1', '1', '8979878979', '7897', '9879872@gmail.com', 12),
(48, '', '', '', '', '', '', '', '100000', '1000000', '', '', '', '', '', '', 0),
(49, 'Rent', 'Plot', 'Flat', 'Islamabad', 'nazimabad', 'askasjhdkasdjh', 'Finally', '900000', '90', 'Square Feet', '1', '1', '0300009090', '2190909203', 'Marla@gmail.com', 2147483647),
(50, 'Rent', 'Plot', 'Flat', 'Islamabad', 'nazimabad', 'askasjhdkasdjh', 'Finally', '900000', '90', 'Square Feet', '1', '1', '0300009090', '2190909203', 'Marla@gmail.com', 2147483647),
(51, 'Rent', 'Plot', 'Flat', 'Islamabad', 'Shadman town karachi', 'askasjhdkasdjh', 'asklajldkj', '09898', '098', 'Square Feet', '1', '1', '08098098', '0980', '98098@gmail.com', 98),
(52, 'Rent', 'Plot', 'Upper Portion', 'adausdayid', 'nazimabad', 'asdasdasd', 'slkdhaskldjhasdjk', '900000', '900000', 'Square Feet', '1', '1', '03310279828', '0808080880', 'mirzacomputers0331@gmail.com', 1210009),
(53, 'Rent', 'Home', 'Flat', 'Mingora', 'nazimabad', 'askasjhdkasdjh', 'kashdkasjhds', '900000', '100', 'Square Feet', '1', '1', '03310279828', '022323232', 'mirzacomputers0331@gmail.com', 109090),
(54, 'Rent', 'Commercial', 'Farmhouse', 'Chishtian Mandi', 'Shadman town karachi', 'askasjhdkasdjh', 'aashaskjashdjkhs', '100000', '1000', 'Square Feet', '1', '1', '03310279828', '9872947823894', 'mirzacomputers0331@gmail.com', 238947),
(55, 'Rent', 'Commercial', 'Farmhouse', 'Chishtian Mandi', 'Shadman town karachi', 'askasjhdkasdjh', 'aashaskjashdjkhs', '100000', '1000', 'Square Feet', '1', '1', '03310279828', '9872947823894', 'mirzacomputers0331@gmail.com', 238947),
(56, 'Sale', 'Home', 'House', 'Karachi', 'gulshan', 'house', 'SALE', '100000', '100', 'Square Feet', '1', '1', '03434343434', '03232323232', 'anasshahidsiddiqui@gmail.com', 1212121),
(57, 'Sale', 'Home', 'House', 'Jacobabad', 'jkbkjh', 'kjbjkh', 'kjjkhjk', '-767868767', '-888', 'Square Feet', '5', '1', '78678676', '897897897', 'ghfgh@ghfgh.jhfjh', 1212121),
(58, 'Rent', 'Home', 'House', 'Gujrat', 'gulshan', 'house', 'asshdjkah', '87687678', '876', 'Square Feet', '3', '3', '876786786876', '876876876786', '8@tmai.com', 1),
(59, 'Rent', 'Home', 'House', 'Kohat', 'gulshan', 'house', 'A house for sale gulistan-e0jahor', '2000000', '120', 'Square Feet', '4', '4', '03343348028', '03343348028', 'anasshahidsiddiqui@gmail.com', 1),
(60, 'Sale', 'Plots', 'Plot Form', 'Chiniot', 'gulshan', 'Plot', 'Plot for sale in chiniot', '3000000', '120', 'Square Yards', '3', '3', '34025818', '03343348028', '9789798!@GMAIL.COM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `realstate_pics`
--

CREATE TABLE `realstate_pics` (
  `image_id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `max_num` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realstate_pics`
--

INSERT INTO `realstate_pics` (`image_id`, `image`, `customer_id`, `max_num`) VALUES
(1, 0x346261642e6a7067, '1', ''),
(2, 0x34626164322e6a7067, '1', ''),
(3, 0x34626164322e6a7067, '1', ''),
(4, 0x3131373838687a5f66726f6e74656469745f313439383037343638382e6a7067, '1', ''),
(5, 0x32333236374a445f4e435f4c6f676f5f30315f313537323936373038332e6a7067, '1', ''),
(6, 0x3531383134485a5f46524f4e545f4455534b5f313537303230303533372e6a7067, '1', ''),
(7, 0x3131373838687a5f66726f6e74656469745f313439383037343638382e6a7067, '1', ''),
(8, 0x32333236374a445f4e435f4c6f676f5f30315f313537323936373038332e6a7067, '1', ''),
(9, 0x3531383134485a5f46524f4e545f4455534b5f313537303230303533372e6a7067, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `customer_Name` varchar(100) NOT NULL,
  `Customer_cell` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `customer_Name`, `Customer_cell`, `customer_address`, `customer_message`) VALUES
(0, '', 'yaseen', '03232624343', 'zczczczxczxczxczxc', 'zxczxczxczxc'),
(0, '', 'yaseen', '12345678', 'r34 gulshan', 'i want service'),
(0, '', 'yaseen', '03232624343', 'zczczczxczxczxczxc', 'zxczxczxczxc'),
(0, '', 'yaseen', '12345678', 'r34 gulshan', 'i want service');

-- --------------------------------------------------------

--
-- Table structure for table `serviceadd`
--

CREATE TABLE `serviceadd` (
  `service_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `service_price` varchar(100) NOT NULL,
  `service_Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceadd`
--

INSERT INTO `serviceadd` (`service_id`, `service_name`, `service_img`, `service_type`, `service_price`, `service_Description`) VALUES
(19, 'plumber', '11788hz_frontedit_1498074688.jpg', 'labour', '1000', 'HAJKSDHASKJDHJK');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_architecture`
--
ALTER TABLE `add_architecture`
  ADD PRIMARY KEY (`architecture_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realstate_admin`
--
ALTER TABLE `realstate_admin`
  ADD PRIMARY KEY (`realstate_id`);

--
-- Indexes for table `realstate_pics`
--
ALTER TABLE `realstate_pics`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `serviceadd`
--
ALTER TABLE `serviceadd`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_architecture`
--
ALTER TABLE `add_architecture`
  MODIFY `architecture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `realstate_admin`
--
ALTER TABLE `realstate_admin`
  MODIFY `realstate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `realstate_pics`
--
ALTER TABLE `realstate_pics`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `serviceadd`
--
ALTER TABLE `serviceadd`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
