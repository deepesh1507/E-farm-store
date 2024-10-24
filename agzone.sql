-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 09:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerregistration`
--

CREATE TABLE `buyerregistration` (
  `buyer_id` int(255) NOT NULL,
  `buyer_name` varchar(30) NOT NULL,
  `buyer_phone` bigint(10) NOT NULL,
  `buyer_addr` text NOT NULL,
  `buyer_mail` varchar(20) NOT NULL,
  `buyer_username` varchar(20) NOT NULL,
  `buyer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerregistration`
--

INSERT INTO `buyerregistration` (`buyer_id`, `buyer_name`, `buyer_phone`, `buyer_addr`, `buyer_mail`, `buyer_username`, `buyer_password`) VALUES
(68, 'Raja', 8451559758, '6th street\r\ntirunelveli', 'raja@gmail.com', 'raja', 'iMPY7w=='),
(69, 'Broze', 9854772546, '3rd street\r\ntirunelveli', 'broze@gmail.com', 'broze', 'mNDd9O0='),
(70, 'Ram', 7548662548, '1st street', 'ram@gmail.com', 'u1', 'j5M='),
(71, 'Vicky', 8759882546, '7 street', 'vicky@gmail.com', 'u2', 'j5A='),
(72, 'Guru', 8754558791, '4th street', 'guru@gmail.com', 'u3', 'j5E=');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL DEFAULT 1,
  `subtotal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `username`, `qty`, `subtotal`) VALUES
(354444447, 'Raja', 1, 450);

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
(1, 'Crops'),
(2, 'Vegetables'),
(3, 'Fruits'),
(4, 'Seeds'),
(5, 'Gardening Tools'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `farmerregistration`
--

CREATE TABLE `farmerregistration` (
  `farmer_id` int(255) NOT NULL,
  `farmer_name` varchar(255) NOT NULL,
  `farmer_phone` bigint(10) NOT NULL,
  `farmer_address` text NOT NULL,
  `farmer_state` varchar(50) NOT NULL,
  `farmer_district` varchar(50) NOT NULL,
  `farmer_pin` varchar(10) NOT NULL,
  `farmer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`farmer_id`, `farmer_name`, `farmer_phone`, `farmer_address`, `farmer_state`, `farmer_district`, `farmer_pin`, `farmer_password`) VALUES
(112, 'Raja', 8452225479, '6th street', 'TAMIL NADU', 'Tirunelveli', '627357', 'iMPY7w=='),
(113, 'Broze', 7548665789, '3rd street', 'TAMIL NADU', 'Thoothukkudi', '625375', 'mNDd9O0='),
(114, 'Kumar', 7898778546, '9th street', 'TAMIL NADU', 'Thiruvallur', '628554', 'kdff7/o='),
(115, 'Ben', 9584667859, '9th street', 'TAMIL NADU', 'Tirunelveli', '675485', 'mMfc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `farmer_name` varchar(100) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `total` int(10) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `buyer_phonenumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `qty`, `address`, `delivery`, `farmer_name`, `phonenumber`, `total`, `payment`, `buyer_name`, `buyer_phonenumber`) VALUES
(108, 354444470, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 7548665789, 70, 'COD', 'Raja', 8451559758),
(109, 354444471, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 7548665789, 60, 'COD', 'Raja', 8451559758),
(110, 354444472, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 7548665789, 50, 'COD', 'Raja', 8451559758),
(111, 354444473, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 7548665789, 26, 'COD', 'Raja', 8451559758),
(112, 354444474, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 7548665789, 50, 'COD', 'Raja', 8451559758),
(113, 354444474, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 7548665789, 50, 'COD', 'Raja', 8451559758),
(114, 354444449, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 8452225479, 460, 'COD', 'Raja', 8451559758),
(115, 354444446, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 8452225479, 260, 'COD', 'Raja', 8451559758),
(116, 354444453, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 8452225479, 125, 'COD', 'Raja', 8451559758),
(117, 354444455, 1, '6th street\r\ntirunelveli', 'Courier', 'Raja', 8452225479, 70, 'COD', 'Raja', 8451559758),
(118, 354444471, 2, '6th street\r\ntirunelveli', 'Courier', 'Broze', 7548665789, 120, 'UPI', 'Raja', 8451559758);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `farmer_fk` int(255) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_expiry` varchar(25) NOT NULL,
  `product_image` text NOT NULL,
  `product_stock` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_delivery` varchar(5) NOT NULL,
  `product_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `farmer_fk`, `product_title`, `product_cat`, `product_type`, `product_expiry`, `product_image`, `product_stock`, `product_price`, `product_desc`, `product_keywords`, `product_delivery`, `product_status`) VALUES
(354444445, 112, 'Green Apple', '3', 'Apple', '2023-08-22', 'apple (1).jpeg', 55, 350, 'Good Quality\r\nHigh Grade Apple\r\n', 'green apple, apple', 'yes', 'APPROVED'),
(354444446, 112, 'Orange', '3', 'Orange', '2023-06-22', 'orange (1).jpeg', 30, 260, 'Good Quality\r\nHigh Orange\r\n', 'orange', 'yes', 'APPROVED'),
(354444447, 112, 'Mango', '3', 'Mango', '2023-05-30', 'mango (1).jpg', 20, 450, 'Good Quality\r\nOrganic\r\n', 'mango', 'yes', 'APPROVED'),
(354444448, 112, 'Grapes', '3', 'Grapes', '2023-05-31', 'grapes (1).jpg', 10, 165, 'Good Quality\r\nOrganic', 'grapes', 'no', 'APPROVED'),
(354444449, 112, 'Kiwi', '3', 'Kiwi', '2023-05-06', 'kiwi (1).jpg', 10, 460, 'Good Quality\r\nOrganic', 'kiwi', 'no', 'APPROVED'),
(354444450, 112, 'Banana', '3', 'Banana', '2023-04-19', 'banana (1).jpg', 22, 80, 'Good Quality\r\nOrganic', 'banana', 'no', 'APPROVED'),
(354444452, 112, 'Pomegranate', '3', 'Pomegranate', '2023-04-26', 'pomegranate (2).jpg', 20, 350, 'Good Quality \r\nOrganic', 'pomegranate', 'yes', 'APPROVED'),
(354444453, 112, 'Pineapple', '3', 'Pineapple', '2023-04-20', 'pineapple (1).jpg', 40, 125, 'Good Quality\r\nOrganic', 'pineapple', 'yes', 'APPROVED'),
(354444454, 112, 'Watermelon', '3', 'Watermelon', '2023-04-17', 'watermelon (1).jpg', 60, 50, 'Good Quality\r\nOrganic', 'watermelon', 'yes', 'APPROVED'),
(354444455, 112, 'Lemon', '3', 'Lemon', '2023-04-28', 'lemon (1).jpg', 20, 70, 'Good Quality\r\nOrganic', 'lemon', 'yes', 'APPROVED'),
(354444456, 112, 'Tomato', '2', 'Tomato', '2023-04-14', 'tomato (1).jpeg', 30, 25, 'Good Quality\r\nOrganic', 'tomato', 'yes', 'APPROVED'),
(354444457, 112, 'Brinjal', '2', 'Brinjal', '2023-04-27', 'brinjal (1).jpg', 22, 40, 'Good Quality\r\nOrganic', 'brinjal', 'yes', 'APPROVED'),
(354444458, 112, 'Potato', '2', 'Potato', '2023-04-22', 'potato (1).jpeg', 20, 30, 'Good Quality\r\nOrganic', 'potato', 'yes', 'APPROVED'),
(354444459, 112, 'Cauliflower', '2', 'Cauliflower', '2023-04-28', 'cauliflower (1).jpg', 40, 25, 'Good Quality\r\nOrganic', 'cauliflower', 'yes', 'APPROVED'),
(354444460, 112, 'Beet root', '2', 'Beet root', '2023-04-25', 'beetroot (1).jpg', 30, 25, 'Good Quality\r\nOrganic', 'beet root', 'yes', 'APPROVED'),
(354444461, 112, 'Chilli', '2', 'Chilli', '2023-04-28', 'chili (1).jpg', 20, 19, 'Good Quality\r\nOrganic', 'chilli', 'yes', 'APPROVED'),
(354444462, 112, 'Ginger', '2', 'Ginger', '2023-04-20', 'ginger (1).jpg', 10, 25, 'Good Quality\r\nOrganic', 'ginger', 'yes', 'APPROVED'),
(354444463, 112, 'Carrot', '2', 'Carrot', '2023-04-27', 'carrot (1).jpeg', 30, 25, 'Good Quality\r\nOrganic', 'carrot', 'yes', 'APPROVED'),
(354444464, 112, 'Onion', '2', 'Onion', '2023-04-22', 'onion (2).jpg', 40, 40, 'Good Quality\r\nOrganic', 'onion', 'yes', 'APPROVED'),
(354444465, 112, 'Raddish', '2', 'Raddish', '2023-04-21', 'raddish (1).jpeg', 20, 15, 'Good Quality\r\nOrganic', 'raddish', 'yes', 'APPROVED'),
(354444466, 113, 'Brinjal seeds', '4', 'Brinjal seeds', '2023-04-17', 'brinjal seeds (1).jpeg', 1, 5, 'Good Quality\r\nOrganic', 'brinjal, brinjal seeds, seeds', 'no', 'APPROVED'),
(354444467, 113, 'Sunflower seeds', '4', 'Sunflower seeds', '2023-04-28', 'sunflower seed (1).jpeg', 1, 8, 'Good Quality\r\nOrganic', 'sunflower, sunflower seeds, seeds', 'no', 'APPROVED'),
(354444468, 113, 'Papaya seeds', '4', 'Papaya seeds', '2023-04-13', 'papaya seed (1).jpeg', 1, 4, 'Good Quality\r\nOrganic', 'seeds, papaya, papaya seeds', 'no', 'APPROVED'),
(354444469, 113, ' Sapota seeds', '4', 'Sapota seeds', '2023-04-28', 'sapota seed (1).jpeg', 1, 8, 'Good Quality\r\nOrganic', 'sapota seeds, seeds, sapota', 'no', 'APPROVED'),
(354444470, 113, 'Rice', '1', 'Rice', '2023-04-18', 'rice (1).jpeg', 90, 70, 'Good Quality\r\nOrganic', 'rice', 'no', 'PENDING'),
(354444471, 113, 'Wheat', '1', 'Wheat', '2023-04-13', 'wheat (1).jpeg', 80, 60, 'Good Quality\r\nOrganic', 'wheat', 'yes', 'APPROVED'),
(354444472, 113, 'Corn', '1', 'Corn', '2023-04-18', 'corn (1).jpg', 40, 50, 'Good Quality\r\nOrganic', 'corn', 'yes', 'APPROVED'),
(354444473, 113, 'Black Gram', '1', 'Black Gram', '2023-04-28', 'black dal (1).jpeg', 30, 26, 'Good Quality\r\nOrganic', 'black gram, dal , gram', 'yes', 'APPROVED'),
(354444474, 113, 'Green Gram', '1', 'Green Gram', '2023-04-22', 'green moon dal (1).jpeg', 40, 50, 'Good Quality\r\nOrganic', 'gram, green gram ,dal', 'yes', 'APPROVED'),
(354444475, 113, 'Toor dal', '1', 'Toor dal', '2023-04-25', 'toor dal.jpeg', 40, 20, 'Good Quality\r\nOrganic', 'toor dal ,dal ', 'yes', 'APPROVED'),
(354444476, 113, 'Urad dal', '1', 'Urad dal', '2023-04-21', 'urahd dal (1).jpeg', 10, 33, 'Good Quality\r\nOrganic', 'urad dal ,dal', 'yes', 'APPROVED'),
(354444477, 113, 'Green Peas', '1', 'Green Peas', '2023-04-14', 'peas.jpeg', 20, 40, 'Good Quality\r\nOrganic', 'peas, green peas', 'yes', 'APPROVED'),
(354444478, 114, 'Gardening Gloves', '5', 'Gardening Gloves', '2023-04-25', 'gloves.jpeg', 15, 175, 'Good Quality\r\n', 'gloves', 'yes', 'APPROVED'),
(354444479, 114, 'Gardening Boots', '5', 'Gardening Boots', '2023-09-22', 'boots.jpeg', 20, 700, 'Good Quality\r\n', 'boots', 'yes', 'APPROVED'),
(354444481, 114, 'Hedge Shears', '5', 'Hedge Shears', '2023-09-21', 'hedgge shears.jpeg', 20, 350, 'Good Quality\r\n', 'shears. hedge, hedge shears', 'yes', 'APPROVED'),
(354444482, 114, 'Pruning Shears', '5', 'Pruning Shears', '2023-08-17', 'pruning shears.jpeg', 20, 350, 'Good Quality\r\n', 'pruning, shears. pruning shears', 'yes', 'APPROVED'),
(354444483, 114, 'Rake', '5', 'Rake', '2024-04-26', 'rake.jpeg', 10, 780, 'Good Quality\r\n', 'rake ,tools', 'yes', 'APPROVED'),
(354444484, 114, 'Gardening Fork', '5', 'Gardening Fork', '2023-04-13', 'fork.jpeg', 20, 230, 'Good Quality\r\n', 'fork, tools', 'yes', 'APPROVED'),
(354444485, 114, 'Watering can', '5', 'Watering can', '2023-06-09', 'water can.jpeg', 20, 500, 'Good Quality\r\n', 'water, can ,watercan, watering can', 'yes', 'APPROVED'),
(354444486, 114, 'Shovel', '5', 'Shovel', '2023-04-29', 'shovel.jpeg', 5, 350, 'Good Quality\r\n', 'shovel , tools', 'yes', 'APPROVED'),
(354444487, 115, 'Coco Peat', '6', 'Coco Peat', '2023-07-27', 'coco peat.jpeg', 40, 350, 'Good Quality\r\n', 'coco peat, soil', 'yes', 'APPROVED'),
(354444488, 115, 'Vermicompost', '6', 'Vermicompost', '2023-07-07', 'compost.jpeg', 30, 800, 'Good Quality\r\nOrganic', 'compost, vermicompost, vermi, fertilizer', '', 'APPROVED'),
(354444489, 115, 'Compost', '6', 'Compost', '2023-09-15', 'manure.jpeg', 40, 600, 'Good Quality\r\nOrganic', 'compost,  fertilizer', 'yes', 'APPROVED'),
(354444490, 115, 'Pest repellent', '6', 'Pest Repellent', '2023-09-21', 'pest repellent.jpeg', 30, 400, 'Good Quality\r\nOrganic', 'compost,  fertilizer, pest repellent ,repellent', 'yes', 'APPROVED'),
(354444491, 115, 'Gardening Pots', '6', 'Gardening Pots', '2023-08-23', 'pots.jpeg', 60, 60, 'Good Quality\r\n', 'pots ,pot', 'yes', 'APPROVED'),
(354444492, 113, 'Apple', '3', 'Apple', '2023-04-29', 'apple (2).jpeg', 40, 50, 'Good Quality', 'red apple, apple', 'yes', 'APPROVED'),
(354444493, 112, 'Orange', '3', 'Orange', '2023-04-13', 'orange (1).jpg', 44, 60, 'good', 'orange', 'yes', 'REJECTED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerregistration`
--
ALTER TABLE `buyerregistration`
  ADD PRIMARY KEY (`buyer_id`),
  ADD UNIQUE KEY `buyer_username` (`buyer_username`),
  ADD UNIQUE KEY `buyer_phone` (`buyer_phone`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  ADD UNIQUE KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `phonenumber` (`phonenumber`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `farmer_fk` (`farmer_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerregistration`
--
ALTER TABLE `buyerregistration`
  MODIFY `buyer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354444494;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
