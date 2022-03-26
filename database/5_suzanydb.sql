-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 07:02 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suzanydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_contactus`
--

CREATE TABLE `table_contactus` (
  `contactus_id` int(11) NOT NULL,
  `contactus_name` varchar(50) NOT NULL,
  `contactus_email` varchar(50) NOT NULL,
  `contactus_subject` varchar(1000) NOT NULL,
  `contactus_number` int(11) NOT NULL,
  `contactus_message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_contactus`
--

INSERT INTO `table_contactus` (`contactus_id`, `contactus_name`, `contactus_email`, `contactus_subject`, `contactus_number`, `contactus_message`) VALUES
(1, 'Sakith', 'Sakith@gmail.com', '', 774353004, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk'),
(2, 'Edwin', 'Edwin@hotmail.com', 'Request 2', 773265987, 'jjjjjggggggggggggggggggggggggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `table_customer`
--

CREATE TABLE `table_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_gender` varchar(11) NOT NULL,
  `customer_address` varchar(50) DEFAULT NULL,
  `customer_email` varchar(50) DEFAULT NULL,
  `customer_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_customer`
--

INSERT INTO `table_customer` (`customer_id`, `customer_name`, `customer_password`, `customer_gender`, `customer_address`, `customer_email`, `customer_contact`) VALUES
(1, 'L.L.Perera', '', 'Male', '26,Mahanama Street,  Colombo 01500', 'perera55@gmail.com', 776359785),
(2, 'Lahiru Piumal', '', 'Male', '78, St Peters Road, Colombo 01000', 'l.perera@outlook.com', 765315987),
(3, 'Jason Mathew', '', 'Male', '120, Malawatta road, Colombo 00600', 'jasona@outlook.com', 768973562),
(4, 'Anderson', '', 'Male', '05, Rudra Mawatta, Colombo 00600', 'AndersonM@gmail.com', 759834568),
(5, 'Kavinda', '', 'Male', 'No 55, Negombo-Colombo Main Rd,', 'kavindalakshan@gmail.com', 756914556),
(6, 'James.A', '', 'Male', '\r\n89/7A, Kothalavala Flats, Kothalawala, Colombo 1', 'annajames@icloud.com', 756914563),
(9, 'Edwin', '', 'Male', 'Wellewatta', 'alfred.edwin@hotmail.com', 789564526),
(10, 'Edwin', 'alfrededwin', 'Male', 'Colombo', 'alfred.edwin@hotmail.com', 775081914),
(11, 'Jay Sakith', 'Sakith', 'Male', '108 St Benadicts Street Colombo 01300', 'vijayasakith@gmail.com', 774353004);

-- --------------------------------------------------------

--
-- Table structure for table `table_employee`
--

CREATE TABLE `table_employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(50) DEFAULT NULL,
  `employee_gender` varchar(11) NOT NULL,
  `employee_address` varchar(50) DEFAULT NULL,
  `employee_email` varchar(50) DEFAULT NULL,
  `employee_contact` int(11) DEFAULT NULL,
  `employee_privilege` varchar(20) DEFAULT NULL,
  `employee_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_employee`
--

INSERT INTO `table_employee` (`employee_id`, `employee_name`, `employee_gender`, `employee_address`, `employee_email`, `employee_contact`, `employee_privilege`, `employee_password`) VALUES
(1, 'N.Subakaran', 'Male', '78, St Beanadicts Street, Colombo 01300', 'subakaran89@gmail.com', 759863459, 'Admin', 'Admin'),
(2, 'SAMEERA HASHAN', 'Male', '77, A.D.M.L Perra Lane, Colombo 01400', 'hashan94@gmail.com', 759645835, 'Staff', 'Staff'),
(3, 'W.A.DE SILVA', 'Male', '105, St Perers Street, Colombo 01400', 'silva.w.a@gmail.com', 764531689, 'Admin', 'Admin'),
(4, 'A.M.M.SADIQ', 'Male', '03, Amarasinha Mawatta, Colombo 01400', 'sadiq890@gmail.com', 777689345, 'Staff', 'Staff'),
(6, 'Adam', 'Male', 'Dehiwala', 'adam@gmail.com', 778445698, 'Admin', 'Adam'),
(7, 'Online', 'Online', 'Online', 'Online', 773670980, 'Admin', '2729729');

-- --------------------------------------------------------

--
-- Table structure for table `table_item`
--

CREATE TABLE `table_item` (
  `item_id` int(11) NOT NULL,
  `item_make` varchar(50) DEFAULT NULL,
  `item_model` varchar(50) DEFAULT NULL,
  `item_unitcost` int(11) DEFAULT NULL,
  `item_color` varchar(50) DEFAULT NULL,
  `item_warrantyperiod` varchar(11) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `item_nostock` int(11) DEFAULT NULL,
  `item_filter` varchar(50) NOT NULL,
  `item_imgpath` varchar(100) NOT NULL,
  `item_description` varchar(500) NOT NULL,
  `item_FullDescription` varchar(1000) NOT NULL,
  `item_imgFront` varchar(255) NOT NULL,
  `item_imgBack` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_item`
--

INSERT INTO `table_item` (`item_id`, `item_make`, `item_model`, `item_unitcost`, `item_color`, `item_warrantyperiod`, `supplier_id`, `item_nostock`, `item_filter`, `item_imgpath`, `item_description`, `item_FullDescription`, `item_imgFront`, `item_imgBack`) VALUES
(3, 'Apple', 'IPhone 6s', 60000, 'Silver', '3 Month', 1, 5, 'MostRated', 'PH_IPhone 6S.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', 'ph_moredatails1.jpg', 'ph_moredatails2.jpg'),
(4, 'Samsung', 'Samsung S9 ', 120000, 'Blue', '12 Months', 2, 15, 'Latest', 'PH_Galaxy S9.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhoOur vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.ne that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', '', ''),
(5, 'Apple', 'IPhone 8 Plus', 100000, 'Rose Gold', '24 Months', 1, 18, 'Latest', 'PH_IPhone 8Plus.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', ''),
(6, 'Apple', 'IPhone 7 Plus', 90000, 'Black', '6 Month', 2, 20, 'Mostrated', 'PH_IPhone 7Plus.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', ''),
(7, 'Vivo', 'Vivo V9', 50000, 'Silver', '12 Months', 1, 13, 'Mostrated', 'PH_Vivo V9.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', ''),
(11, 'Huwaei', 'Huwaei P20 Pro', 120000, 'gold', '3 Month', 2, 12, 'Latest', 'PH_Huawei P20Pro.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', ''),
(12, 'Oppo', 'Oppo F7', 40000, 'blue', '12 Months', 1, 22, 'Latest', 'PH_Oppo F7.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', ''),
(13, 'Apple', 'Iphone 6S Plus', 50000, 'Silver', '6 Month', 1, 5, 'Latest', 'PH_IPhone 6SPlus.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', ''),
(14, 'Samsung', 'Samsung A3', 50000, 'Blue', '12 Months', 1, 50, 'Latest', 'PH_Galaxy A8.jpg', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_line`
--

CREATE TABLE `table_line` (
  `line_id` int(11) NOT NULL,
  `line_qty` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_line`
--

INSERT INTO `table_line` (`line_id`, `line_qty`, `customer_id`, `sale_id`, `item_id`) VALUES
(1, 4, 4, 1, 3),
(2, 3, 4, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `table_sale`
--

CREATE TABLE `table_sale` (
  `sale_id` int(11) NOT NULL,
  `sale_date` date DEFAULT NULL,
  `sale_time` time DEFAULT NULL,
  `sale_totalcost` varchar(50) DEFAULT NULL,
  `sale_qty` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_sale`
--

INSERT INTO `table_sale` (`sale_id`, `sale_date`, `sale_time`, `sale_totalcost`, `sale_qty`, `customer_id`, `employee_id`, `status_id`) VALUES
(1, '2018-07-04', '10:20:41', '150000', 0, 1, 4, 0),
(4, NULL, NULL, NULL, 0, 1, 6, 30),
(5, NULL, NULL, NULL, NULL, 10, 4, 35),
(11, NULL, NULL, NULL, NULL, 1, 7, 90),
(12, NULL, NULL, NULL, NULL, 1, 7, 90),
(13, NULL, NULL, NULL, NULL, 1, 7, 90),
(14, NULL, NULL, NULL, NULL, 1, 7, 90),
(15, NULL, NULL, NULL, NULL, 1, 7, 90),
(16, '2018-08-04', '09:16:36', '100000', 5, 1, 7, 10),
(17, '2018-08-04', '09:17:38', '100000', 5, 1, 7, 10),
(18, '2018-08-04', '09:17:56', '100000', 5, 3, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `table_status`
--

CREATE TABLE `table_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_status`
--

INSERT INTO `table_status` (`status_id`, `status_name`) VALUES
(0, '00 - DRAFT'),
(10, '10 - ORDER DRAFT'),
(20, '20 - PENDING PAYMENT'),
(25, '25 - PATTIALLY INVOICED'),
(30, '30 - PAYMENT CONFIRM'),
(35, '35 - PAYMENT RETURN'),
(90, '90 - CANCEL ORDER');

-- --------------------------------------------------------

--
-- Table structure for table `table_supplier`
--

CREATE TABLE `table_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `supplier_gender` varchar(11) NOT NULL,
  `supplier_address` varchar(50) DEFAULT NULL,
  `supplier_email` varchar(50) DEFAULT NULL,
  `supplier_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_supplier`
--

INSERT INTO `table_supplier` (`supplier_id`, `supplier_name`, `supplier_gender`, `supplier_address`, `supplier_email`, `supplier_contact`) VALUES
(1, 'Tharindu balasuriya', 'Male', '56, Mahawatta Lane, Colombo - 14', 'tharindur@yahoo.com', 77721911),
(2, 'Sharwan', 'Male', '109, St Marys Lane, Colombo 00800', 'sharwan77@gmail.com', 777219116),
(3, 'Samal Perera', 'Male', 'No. 30 Queens Road, Colombo 00300', 'samalp@outlook.com', 776585351),
(4, 'Madusanka Perera', 'Male', '52, Negombo-Colombo Main Rd,', 'perera.m@outlook.com', 112589755),
(5, 'Samal Perera', 'Male', 'No:5,deans rd,colombo', 'samal@gmail.com', 776585351),
(6, 'Alfred Edwin', 'Male', 'Colombo', 'alfred@gmail.com', 777219116),
(7, 'Lashitha', 'Female', 'Kotehena', 'lakshitha@gmail.com', 776219116);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_contactus`
--
ALTER TABLE `table_contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `table_customer`
--
ALTER TABLE `table_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `table_employee`
--
ALTER TABLE `table_employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `table_item`
--
ALTER TABLE `table_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `table_line`
--
ALTER TABLE `table_line`
  ADD PRIMARY KEY (`line_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `table_sale`
--
ALTER TABLE `table_sale`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `table_status`
--
ALTER TABLE `table_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `table_supplier`
--
ALTER TABLE `table_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_contactus`
--
ALTER TABLE `table_contactus`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_customer`
--
ALTER TABLE `table_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_employee`
--
ALTER TABLE `table_employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_item`
--
ALTER TABLE `table_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `table_line`
--
ALTER TABLE `table_line`
  MODIFY `line_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_sale`
--
ALTER TABLE `table_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `table_supplier`
--
ALTER TABLE `table_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_item`
--
ALTER TABLE `table_item`
  ADD CONSTRAINT `table_item_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `table_supplier` (`supplier_id`);

--
-- Constraints for table `table_line`
--
ALTER TABLE `table_line`
  ADD CONSTRAINT `table_line_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `table_customer` (`customer_id`),
  ADD CONSTRAINT `table_line_ibfk_2` FOREIGN KEY (`sale_id`) REFERENCES `table_sale` (`sale_id`),
  ADD CONSTRAINT `table_line_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `table_item` (`item_id`);

--
-- Constraints for table `table_sale`
--
ALTER TABLE `table_sale`
  ADD CONSTRAINT `table_sale_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `table_customer` (`customer_id`),
  ADD CONSTRAINT `table_sale_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `table_employee` (`employee_id`),
  ADD CONSTRAINT `table_sale_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `table_status` (`status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
