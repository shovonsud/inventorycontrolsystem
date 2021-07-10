-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 01:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorycontrolsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'Laundry &amp; Dishwashing', 1),
(2, 'Household Cleaning', 1),
(3, 'Shaving &amp; Grooming', 1),
(4, 'Oral Care', 1),
(5, 'Hand Care', 1),
(6, 'Family Nutrition', 1),
(7, 'Air Fresheners', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_addr` varchar(255) NOT NULL,
  `cust_phn` varchar(10) NOT NULL,
  `cust_item_id` int(11) NOT NULL,
  `cust_quant` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_name`, `cust_addr`, `cust_phn`, `cust_item_id`, `cust_quant`, `order_total`, `timestamp`) VALUES
(1, 'Mark Zuckerberg', 'Podicherry-144', '6334217588', 2, 2, 330, '2021-04-20 04:33:14'),
(2, 'Nathuswami Gopala', 'DK-420,Chennai-890', '7885214336', 3, 1, 320, '2021-04-20 05:05:04'),
(3, 'Dipak Swain', 'Baguiati,Kolkata-111', '6357415895', 1, 1, 449, '2021-04-20 19:26:23'),
(4, 'Disha Madan', 'ED-41,Mumbai-196', '6335214889', 14, 2, 90, '2021-04-21 04:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `cat_id`, `unit_price`, `quantity`, `item_status`) VALUES
(1, 'Surf Excel Matic Top Load Detergent Washing Powder 2KG', 1, '449.00', 29, 1),
(2, 'Vim Dishwash Liquid Gel Lemon(750ml)', 1, '165.00', 18, 1),
(3, 'Godrej Ezee Liquid Detergent-Winterwear,2kgs', 1, '320.00', 9, 1),
(4, 'Surf Excel Easy Wash Detergent Powder(1.5 Kg)', 1, '177.00', 30, 1),
(5, 'Ariel Matic Top Load Detergent Washing Powder (2 Kg)', 1, '449.00', 22, 1),
(6, 'Lizol Disinfectant Surface &amp; Floor Cleaner Liquid, Citrus (2 L)', 2, '344.00', 16, 1),
(7, 'Lizol Disinfectant Surface &amp; Floor Cleaner Liquid, Citrus (975 ml)', 2, '179.00', 8, 1),
(8, 'Pidilite T16 Roff Cera Clean Professional Tile, Floor and Ceramic Cleaner (1 L)', 2, '160.00', 4, 1),
(9, 'Harpic Powerplus Disinfectant Toilet Cleaner, Original, 1 L (Pack of 2)', 2, '320.00', 7, 1),
(10, 'Harpic Disinfectant Toilet Cleaner Liquid, Original(1 L)', 2, '168.00', 8, 1),
(11, 'Domex Fresh Guard Lime Fresh Disinfectant Liquid Toilet Cleaner', 2, '130.00', 4, 1),
(12, 'Dettol Liquid Disinfectant Cleaner for Home, Lime Fresh, 1L', 2, '347.00', 9, 1),
(13, 'Dettol Disinfectant Sanitizer Spray(225ml)', 2, '143.00', 7, 1),
(14, 'Dettol Liquid Refil', 5, '45.00', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email_id`, `phone`, `username`, `password`) VALUES
(1, 'Sudipto', 'Dasgupta', 'shovon.das.gupta@gmail.com', '9062416156', 'shovon_sud', '970072f9595eb5a4ba3bf36d6968eba0'),
(2, 'Subhashish', 'Poddar', 'poddarsubhashish@gmail.com', '8371097898', 'subh_poddar', '045bbf873cfb79c8120f06d1ce32d793'),
(3, 'Surbhi', 'Suman', 'sj.samirahjaiswal@gmail.com', '7004800446', 'surbhi.suman', 'eccb50d79aedaed9640b547efa98a431');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
