-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 06:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2checkout_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `image`, `price`, `status`) VALUES
(1, 'Mens Shoes', 'Branded Mans Shoes Faxibel Layer', 'images/1.jpg', 5.00, 1),
(4, 'Fundamentals of Management', 'Fundamentals of Management is a brief, paperback text', 'images/book.jpg', 10.00, 1),
(8, 't shirt', 'Men White & Blue Ombre-Dyed Round Neck T-shirt', 'images/11.jpg', 50.00, 1),
(9, 'Amazon Gift Card', '$100 Amazon.com Gift Card', 'images/333.jpg', 100.00, 1),
(33, 'ASUS ROG Zephyrus G14', 'Free upgrade to Windows 11 when available. Disclaimer-Upgrade rollout plan is being finalized and is scheduled to begin late in 2021 and continue into 2022.', 'images/lap.jpg', 200.00, 1),
(34, 'Bergmann Typhoon Heavy Duty Metal Inflator', 'SAY NO TO PLASTIC INFLATORS] – Most plastic body air compressors are fragile,', 'images/ll.jpg', 1.00, 1),
(35, 'iPhone 12', '14 Bionic, the fastest chip in a smartphone. An edge-to-edge OLED display. ', 'images/i12.jpg', 500.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
