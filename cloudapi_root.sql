-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2018 at 05:16 PM
-- Server version: 5.6.34
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudapi_root`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertising`
--

CREATE TABLE IF NOT EXISTS `advertising` (
  `advertising_id` int(11) NOT NULL,
  `advertising_title` varchar(1111) NOT NULL,
  `advertising_image` varchar(1111) NOT NULL,
  `advertising_width` int(11) NOT NULL,
  `advertising_height` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`advertising_id`, `advertising_title`, `advertising_image`, `advertising_width`, `advertising_height`, `product_id`, `trader_id`) VALUES
(1, 'reg', 'beats-ad-800x332.jpg', 312, 321, 8, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` varchar(1111) NOT NULL,
  `product_id` varchar(1111) NOT NULL,
  `product_name` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_firstname` varchar(100) NOT NULL,
  `customer_lastname` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_phoneNumber` bigint(20) NOT NULL,
  `customer_joinDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_email`, `customer_password`, `customer_phoneNumber`, `customer_joinDate`) VALUES
(1, 'reggie', 'cril', '1151162744@qq.com', '123456789', 768642342, '2018-01-25 00:00:00'),
(2, 'DarrylFed', 'DarrylFedWQ', 'monicalee923@yahoo.com', 'y97xYq%u7jN', 0, '0000-00-00 00:00:00'),
(3, '22', 'wqeq', 'reggie@135.com', '1234456', 0, '0000-00-00 00:00:00'),
(4, '22', 'wqeq', 'reggie@135.com', '1234456', 0, '0000-00-00 00:00:00'),
(5, '22', 'wqeq', 'reggie@135.com', '1234456', 0, '0000-00-00 00:00:00'),
(6, '22', 'wqeq', 'reggie@135.com', '1234456', 0, '0000-00-00 00:00:00'),
(7, '22', 'wqeq', 'reggie@135.com', '1234456', 0, '0000-00-00 00:00:00'),
(8, '22', 'wqeq', 'reggie@135.com', '1234456', 0, '0000-00-00 00:00:00'),
(9, 'Xie', 'Yuncheng', 'reggiecril0618@gmail.com', 'Cloud19961008', 0, '0000-00-00 00:00:00'),
(10, 'Xie', 'Yuncheng', 'reggiecril0618@gmail.com', 'Cloud19961008', 0, '0000-00-00 00:00:00'),
(11, 'xie', 'yuncheng', '1151162743@qq.com', '123456789', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE IF NOT EXISTS `customer_address` (
  `customer_address_id` int(11) NOT NULL,
  `customer_address_name` varchar(1111) NOT NULL,
  `customer_address_first` varchar(1111) NOT NULL,
  `customer_address_second` varchar(1111) NOT NULL,
  `customer_address_mobile` varchar(1111) NOT NULL,
  `customer_address_city` varchar(1111) NOT NULL,
  `customer_address_passcode` varchar(1111) NOT NULL,
  `customer_address_updateDate` datetime NOT NULL,
  `customer_address_createDate` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_address_state` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`customer_address_id`, `customer_address_name`, `customer_address_first`, `customer_address_second`, `customer_address_mobile`, `customer_address_city`, `customer_address_passcode`, `customer_address_updateDate`, `customer_address_createDate`, `customer_id`, `customer_address_state`) VALUES
(1, 'Xie', 'the plaza,flat 11,room 11', 'streey', '', 'leesd', 'ls2 8br', '2018-01-23 00:00:00', '2018-01-23 00:00:00', 1, '1'),
(2, 'xxx', 'dsd', 'dsd', '', 'dsd', 'sd', '2018-01-23 00:00:00', '2018-01-23 00:00:00', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

CREATE TABLE IF NOT EXISTS `customer_payment` (
  `customer_payment_id` int(11) NOT NULL,
  `customer_payment_holder` varchar(111) NOT NULL,
  `customer_payment_cardNumber` varchar(111) NOT NULL,
  `customer_payment_cardLast` varchar(111) NOT NULL,
  `customer_payment_expirationMonth` varchar(111) NOT NULL,
  `customer_payment_expirationYear` varchar(111) NOT NULL,
  `customer_payment_secure` int(111) NOT NULL,
  `customer_payment_updateDate` datetime NOT NULL,
  `customer_payment_createDate` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_payment_state` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payment`
--

INSERT INTO `customer_payment` (`customer_payment_id`, `customer_payment_holder`, `customer_payment_cardNumber`, `customer_payment_cardLast`, `customer_payment_expirationMonth`, `customer_payment_expirationYear`, `customer_payment_secure`, `customer_payment_updateDate`, `customer_payment_createDate`, `customer_id`, `customer_payment_state`) VALUES
(1, 'xie', '2312323332322323123', '3213', 'Jan', '2019', 231, '2018-01-23 00:00:00', '2018-01-23 00:00:00', 1, 1),
(2, 'xxx', '213123', '3123', '01', '20', 23232, '2018-01-27 16:24:28', '2018-01-27 16:24:28', 1, 1),
(3, '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(4, '', '', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE IF NOT EXISTS `favourite` (
  `favourite_id` int(11) NOT NULL,
  `customer_id` int(111) NOT NULL,
  `product_id` int(111) NOT NULL,
  `favourite_updateDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`favourite_id`, `customer_id`, `product_id`, `favourite_updateDate`) VALUES
(1, 1, 2, '2018-04-04 00:00:00'),
(2, 1, 1, '2018-04-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `old_product`
--

CREATE TABLE IF NOT EXISTS `old_product` (
  `old_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `old_product_name` varchar(1111) NOT NULL,
  `old_product_type` varchar(111) NOT NULL,
  `old_product_originPrice` int(11) NOT NULL,
  `old_product_nowPrice` int(11) NOT NULL,
  `old_product_quantity` int(11) NOT NULL,
  `old_product_category` varchar(2221) NOT NULL,
  `old_product_mainImage` varchar(1111) NOT NULL,
  `old_product_trader_id` int(11) NOT NULL,
  `old_product_updateDate` datetime NOT NULL,
  `old_product_sell` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_product`
--

INSERT INTO `old_product` (`old_product_id`, `product_id`, `old_product_name`, `old_product_type`, `old_product_originPrice`, `old_product_nowPrice`, `old_product_quantity`, `old_product_category`, `old_product_mainImage`, `old_product_trader_id`, `old_product_updateDate`, `old_product_sell`) VALUES
(1, 1, ' Ideapad 320-15(E2-9000)', 'laptop', 0, 200, 200, '', '61ikAJnULvL._SL1000_.jpg', 10000, '0000-00-00 00:00:00', 1),
(2, 1, ' Ideapad 320-15(E2-9000)', 'laptop', 0, 200, 200, '', '61ikAJnULvL._SL1000_.jpg', 10000, '0000-00-00 00:00:00', 1),
(3, 2, 'Beats by Dr. Dre Beats Studio3 Wireless Headphone', 'audio&video', 299, 299, 321, '', '59b62b10N6d520c28.jpg', 10000, '0000-00-00 00:00:00', 1),
(4, 7, '15-inch MacBook Pro', 'Laptop', 2399, 2299, 111, 'new', 'mbp15touch-gray-select-201610.jpg', 10000, '2018-01-17 21:23:22', 1),
(5, 1, ' Ideapad 320-15(E2-9000)', 'laptop', 0, 200, 200, '', '61ikAJnULvL._SL1000_.jpg', 10000, '0000-00-00 00:00:00', 1),
(6, 1, ' Ideapad 320-15(E2-9000)', 'laptop', 0, 200, 200, '', '61ikAJnULvL._SL1000_.jpg', 10000, '0000-00-00 00:00:00', 1),
(7, 1, ' Ideapad 320-15(E2-9000)', 'laptop', 0, 200, 200, '', '61ikAJnULvL._SL1000_.jpg', 10000, '0000-00-00 00:00:00', 1),
(8, 1, ' Ideapad 320-15(E2-9000)', 'laptop', 0, 200, 200, '', '61ikAJnULvL._SL1000_.jpg', 10000, '0000-00-00 00:00:00', 1),
(9, 9, 'dsad', 'Laptop', 0, 123, 0, '', '', 10000, '2018-01-29 17:43:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` varchar(111) NOT NULL,
  `order_customer_id` int(111) NOT NULL,
  `order_address_id` int(111) NOT NULL,
  `order_payment_id` int(111) NOT NULL,
  `order_totalMoney` int(111) NOT NULL,
  `order_message` varchar(1111) NOT NULL,
  `order_createDate` datetime NOT NULL,
  `order_updateDate` datetime NOT NULL,
  `order_state` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_customer_id`, `order_address_id`, `order_payment_id`, `order_totalMoney`, `order_message`, `order_createDate`, `order_updateDate`, `order_state`) VALUES
('', 0, 0, 0, 0, '', '2018-04-12 14:41:15', '2018-04-12 14:41:15', 'Ordered'),
('20180125185248306', 1, 1, 1, 1149, '', '2018-01-25 18:52:48', '2018-01-25 18:52:48', 'Ordered'),
('20180125185341868', 1, 1, 1, 1149, '', '2018-01-25 18:53:41', '2018-01-25 18:53:41', 'Ordered'),
('2018012521294230', 1, 1, 1, 4597, '', '2018-01-25 21:29:42', '2018-01-25 21:29:42', 'Ordered'),
('20180125213312909', 1, 1, 1, 4597, '', '2018-01-25 21:33:12', '2018-01-25 21:33:12', 'Ordered'),
('20180126183352474', 1, 2, 1, 200, '', '2018-01-26 18:33:52', '2018-01-26 18:33:52', 'Ordered'),
('20180126183420343', 1, 2, 1, 1149, '', '2018-01-26 18:34:20', '2018-01-26 18:34:20', 'Ordered'),
('2018012618360321', 1, 2, 1, 1149, '', '2018-01-26 18:36:03', '2018-01-26 18:36:03', 'Ordered'),
('20180126183644916', 1, 2, 1, 1149, '', '2018-01-26 18:36:44', '2018-01-26 18:36:44', 'Ordered'),
('20180411125421402', 1, 1, 4, 1149, '', '2018-04-11 12:54:21', '2018-04-11 12:54:21', 'Ordered'),
('20180411130113777', 1, 1, 2, 1039, '', '2018-04-11 13:01:13', '2018-04-11 13:01:13', 'Ordered'),
('20180411200953902', 1, 1, 1, 0, '', '2018-04-12 03:56:08', '2018-04-12 03:56:08', 'Ordered'),
('20180411203948278', 1, 1, 1, 1149, '', '2018-04-12 04:26:04', '2018-04-12 04:26:04', 'Ordered'),
('20180411204144934', 1, 1, 1, 1149, '', '2018-04-12 04:28:00', '2018-04-12 04:28:00', 'Ordered'),
('20180411204213538', 1, 1, 1, 1149, '', '2018-04-12 04:28:29', '2018-04-12 04:28:29', 'Ordered'),
('20180411204218662', 1, 1, 1, 1149, '', '2018-04-12 04:28:34', '2018-04-12 04:28:34', 'Ordered'),
('20180411204222882', 1, 1, 1, 1149, '', '2018-04-12 04:28:38', '2018-04-12 04:28:38', 'Ordered'),
('20180411204248443', 1, 1, 1, 1149, '', '2018-04-12 04:29:04', '2018-04-12 04:29:04', 'Ordered'),
('20180411204253668', 1, 1, 1, 1149, '', '2018-04-12 04:29:09', '2018-04-12 04:29:09', 'Ordered'),
('2018041120425733', 1, 1, 1, 1149, '', '2018-04-12 04:29:13', '2018-04-12 04:29:13', 'Ordered'),
('2018041120444931', 1, 0, 0, 1149, '', '2018-04-12 04:31:05', '2018-04-12 04:31:05', 'Ordered'),
('20180411204523364', 1, 1, 1, 1149, '', '2018-04-12 04:31:39', '2018-04-12 04:31:39', 'Ordered'),
('2018041120473127', 1, 1, 1, 1149, '', '2018-04-12 04:33:47', '2018-04-12 04:33:47', 'Ordered'),
('20180411204926627', 1, 1, 1, 1848, '', '2018-04-12 04:37:02', '2018-04-12 04:37:02', 'Ordered'),
('20180411205137561', 1, 1, 1, 1848, '', '2018-04-12 04:37:53', '2018-04-12 04:37:53', 'Ordered'),
('20180412064520655', 1, 1, 1, 1848, '', '2018-04-12 14:31:38', '2018-04-12 14:31:38', 'Ordered'),
('20180412064621194', 1, 1, 1, 1848, '', '2018-04-12 14:32:37', '2018-04-12 14:32:37', 'Ordered'),
('20180412064626850', 1, 1, 1, 1848, '', '2018-04-12 14:32:42', '2018-04-12 14:32:42', 'Ordered'),
('20180412064953168', 1, 1, 1, 1848, '', '2018-04-12 14:36:09', '2018-04-12 14:36:09', 'Ordered'),
('20180412065043987', 1, 1, 1, 1848, '', '2018-04-12 14:36:58', '2018-04-12 14:36:58', 'Ordered'),
('20180412065048773', 1, 1, 1, 1848, '', '2018-04-12 14:37:04', '2018-04-12 14:37:04', 'Ordered'),
('20180412065500483', 1, 1, 1, 1848, '', '2018-04-12 14:41:15', '2018-04-12 14:41:15', 'Ordered'),
('20180412065827190', 1, 0, 0, 1848, '', '2018-04-12 14:44:45', '2018-04-12 14:44:45', 'Ordered'),
('20180412070026638', 1, 1, 1, 231, '', '2018-04-12 14:46:40', '2018-04-12 14:46:40', 'Ordered'),
('20180412070139487', 1, 1, 1, 231, '', '2018-04-12 14:47:56', '2018-04-12 14:47:56', 'Ordered'),
('20180412070219148', 1, 1, 1, 231, '', '2018-04-12 14:48:34', '2018-04-12 14:48:34', 'Ordered'),
('20180412070243460', 1, 1, 1, 231, '', '2018-04-12 14:48:58', '2018-04-12 14:48:58', 'Ordered'),
('20180412070326758', 1, 1, 1, 231, '', '2018-04-12 14:49:40', '2018-04-12 14:49:40', 'Ordered'),
('20180412071048621', 1, 1, 1, 231, '', '2018-04-12 14:57:03', '2018-04-12 14:57:03', 'Ordered'),
('20180516091322324', 1, 1, 4, 3447, '', '2018-05-16 09:13:22', '2018-05-16 09:13:22', 'Ordered');

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE IF NOT EXISTS `orders_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` varchar(111) NOT NULL,
  `order_item_quantity` int(11) NOT NULL,
  `order_item_trader` int(11) NOT NULL,
  `order_item_total` int(11) NOT NULL,
  `order_item_product` int(11) NOT NULL,
  `order_item_state` varchar(111) NOT NULL,
  `order_item_createDate` datetime NOT NULL,
  `order_item_updateDate` datetime NOT NULL,
  `order_item_hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_item`
--

INSERT INTO `orders_item` (`order_item_id`, `order_id`, `order_item_quantity`, `order_item_trader`, `order_item_total`, `order_item_product`, `order_item_state`, `order_item_createDate`, `order_item_updateDate`, `order_item_hide`) VALUES
(5, '2018012521294230', 2, 10000, 2298, 6, 'Trader will confirm you order', '2018-01-25 21:29:42', '2018-01-25 21:29:42', 1),
(6, '2018012521294230', 1, 10000, 2299, 7, 'Trader will confirm you order', '2018-01-25 21:29:42', '2018-01-25 21:29:42', 1),
(7, '20180125213312909', 2, 10000, 2298, 6, 'Trader will confirm you order', '2018-01-25 21:33:12', '2018-01-25 21:33:12', 1),
(8, '20180125213312909', 1, 10000, 2299, 7, 'Trader will confirm you order', '2018-01-25 21:33:12', '2018-01-25 21:33:12', 1),
(10, '20180126183420343', 1, 10000, 1149, 6, 'Trader will confirm you order', '2018-01-26 18:34:20', '2018-01-26 18:34:20', 1),
(11, '2018012618360321', 1, 10000, 1149, 6, 'Trader will confirm you order', '2018-01-26 18:36:03', '2018-01-26 18:36:03', 1),
(12, '20180126183644916', 1, 10000, 1149, 6, 'Trader will confirm you order', '2018-01-26 18:36:44', '2018-01-26 18:36:44', 0),
(13, '20180411125421402', 1, 10000, 1149, 6, 'Trader will confirm you order', '2018-04-11 12:54:21', '2018-04-11 12:54:21', 0),
(14, '20180411130113777', 1, 10000, 1039, 8, 'Trader will confirm you order', '2018-04-11 13:01:13', '2018-04-11 13:01:13', 0),
(15, '', 0, 0, 0, 0, 'Trader will confirm you order', '2018-04-12 14:44:31', '2018-04-12 14:44:31', 0),
(16, '', 9, 0, 10341, 6, 'Trader will confirm you order', '2018-04-12 14:44:44', '2018-04-12 14:44:44', 0),
(17, '', 1, 0, 699, 11, 'Trader will confirm you order', '2018-04-12 14:44:44', '2018-04-12 14:44:44', 0),
(18, '', 1, 0, 231, 3, 'Trader will confirm you order', '2018-04-12 14:46:40', '2018-04-12 14:46:40', 0),
(19, '', 1, 10000, 231, 3, 'Trader will confirm you order', '2018-04-12 14:48:57', '2018-04-12 14:48:57', 0),
(20, '20180412070326758', 1, 10000, 231, 3, 'Trader will confirm you order', '2018-04-12 14:49:40', '2018-04-12 14:49:40', 0),
(21, '20180412071048621', 1, 10000, 231, 3, 'Trader will confirm you order', '2018-04-12 14:57:02', '2018-04-12 14:57:02', 0),
(22, '20180516091322324', 3, 10000, 3447, 6, 'Trader will confirm you order', '2018-05-16 09:13:22', '2018-05-16 09:13:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_type` varchar(200) NOT NULL,
  `product_originPrice` int(200) NOT NULL,
  `product_nowPrice` int(100) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_mainImage` varchar(200) NOT NULL,
  `product_trader_id` varchar(200) NOT NULL,
  `product_updateDate` varchar(111) NOT NULL,
  `product_sell` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `product_originPrice`, `product_nowPrice`, `product_quantity`, `product_category`, `product_mainImage`, `product_trader_id`, `product_updateDate`, `product_sell`) VALUES
(1, 'iPhone 8 Silver 4.7-inch display ', 'Mobile', 699, 699, 200, 'recommend', 'iphone8-silver-select-2017_AV1.png', '10000', '2018-01-30 01:18:27', 0),
(2, 'Beats by Dr. Dre Beats Studio3 Wireless Headphone', 'Audio&Video', 299, 299, 321, 'new', '59b62b10N6d520c28.jpg', '10000', '2018-01-30 02:53:00', 1),
(3, 'Bose SoundSport Free', 'Audio&Video', 231, 231, 112, 'popular', '59e9d758Na65b1ac3.jpg', '10000', '2018-01-30 02:53:13', 1),
(6, '13-inch MacBook Pro', 'Laptop', 1249, 1149, 111, 'popular', 'mbp13-gray-select-201610.jpg', '10000', '2018-01-17 21:15:33', 4),
(7, '15-inch MacBook Pro', 'Laptop', 2399, 2299, 111, 'new', 'mbp15touch-gray-select-201610.jpg', '10000', '2018-01-17 21:23:22', 1),
(8, 'XPS 131', 'Laptop', 1139, 1039, 23, 'new', 'XPS 13.jpg', '10000', '2018-01-28 22:34:37', 2),
(9, 'iPhone 8 Gold 4.7-inch display ', 'Mobile', 699, 699, 200, 'new', 'iphone8-silver-select-2017_AV1.png', '10000', '2018-01-30 01:18:27', 0),
(10, 'iPhone 8 Silver 4.7-inch display ', 'Mobile', 699, 699, 200, 'recommend', 'iphone8-silver-select-2017_AV1.png', '10000', '2018-01-30 01:18:27', 0),
(11, 'iPhone 8 Silver 4.7-inch display ', 'Mobile', 699, 699, 200, 'recommend', 'iphone8-silver-select-2017_AV1.png', '10000', '2018-01-30 01:18:27', 0),
(12, 'iPhone 8 Silver 4.7-inch display ', 'Mobile', 699, 699, 200, 'recommend', 'iphone8-silver-select-2017_AV1.png', '10000', '2018-01-30 01:18:27', 0),
(13, 'iPhone 8 Silver 4.7-inch display ', 'Mobile', 699, 699, 200, 'recommend', 'iphone8-silver-select-2017_AV1.png', '10000', '2018-01-30 01:18:27', 0),
(14, ' iPhone X Silver 5.8-inch display', 'Mobile', 999, 999, 102, 'new', 'iphone-x-silver-select-2017_AV1.png', '10000', '2018-01-30 01:24:24', 0),
(15, ' iPhone X Silver 5.8-inch display', 'Mobile', 999, 999, 102, 'new', 'iphone-x-silver-select-2017_AV1.png', '10000', '2018-01-30 01:24:24', 0),
(16, 'iPhone 7 Jet Black 4.7-inch display', 'Mobile', 549, 549, 201, 'popular', 'iphone7-jetblack-select-2016_AV1.png', '10000', '2018-01-30 01:27:42', 0),
(17, 'iPhone 7 Jet Black 4.7-inch display', 'Mobile', 549, 549, 201, 'popular', 'iphone7-jetblack-select-2016_AV1.png', '10000', '2018-01-30 01:27:42', 0),
(18, 'iPhone 7 Jet Black 4.7-inch display', 'Mobile', 549, 549, 201, 'popular', 'iphone7-jetblack-select-2016_AV1.png', '10000', '2018-01-30 01:27:42', 0),
(19, 'iPhone 7 Jet Black 4.7-inch display', 'Mobile', 549, 549, 201, 'popular', 'iphone7-jetblack-select-2016_AV1.png', '10000', '2018-01-30 01:27:42', 0),
(20, 'iPhone 7 Jet Black 4.7-inch display', 'Mobile', 549, 549, 201, 'popular', 'iphone7-jetblack-select-2016_AV1.png', '10000', '2018-01-30 01:27:42', 0),
(21, 'Huawei P10', 'Mobile', 300, 250, 21, 'popular', 'p10.png', '10000', '2018-01-30 01:34:26', 0),
(22, 'Huawei Mate 10 Pro', 'Mobile', 320, 280, 43, 'popular', 'mate-10-proGREY.png', '10000', '2018-01-30 01:35:41', 0),
(23, 'Huawei P10 Lite', 'Laptop', 290, 280, 22, 'recommend', '714KLRUPM0L._SY450_.jpg', '10000', '2018-01-30 02:31:40', 0),
(24, 'Huawei P8 lite 2017', 'Laptop', 400, 320, 222, 'recommend', 'p8-lite-2017-listimage-black.png', '10000', '2018-01-30 02:31:57', 0),
(25, 'Inspiron 15 3000', 'Laptop', 226, 220, 44, 'popular', 'LargePNG.png', '10000', '2018-01-30 01:41:20', 0),
(26, 'XPS 15', 'Laptop', 1499, 1399, 222, 'new', 'dell_0c17r_xps_15_9560_i7_7700hq_1357402.jpg', '10000', '2018-01-30 02:29:35', 0),
(27, 'Miix 320 2-in-1 (25,65 cm / 10,1")', 'Laptop', 230, 230, 132, 'new', 'lenovo-miix-320-hero.png', '10000', '2018-01-30 01:46:13', 0),
(28, 'HP ENVY x360 15-bp100na Convertible Laptop', 'Laptop', 999, 999, 55, 'popular', 'c05514236_209x189.jpg', '10000', '2018-01-30 01:47:52', 0),
(29, 'IdeaCentre AIO 510 (22, AMD)', 'Computer', 450, 441, 222, 'recommend', 'lenovo-ideacentre-aio-510-22-hero.png', '10000', '2018-01-30 01:52:44', 0),
(30, 'v510z', 'Computer', 760, 670, 43, 'recommend', 'lenovo-desktop-aio-V510z-series.png', '10000', '2018-01-30 02:07:59', 0),
(31, 'V410z', 'Computer', 630, 603, 33, 'new', 'lenovo-v410z-aio-front-series.png', '10000', '2018-01-30 01:59:57', 0),
(32, 'Dell Inspiron 3464 i3464-3038BLK-PUS All-in-One Desktop, 23.8" (Black)', 'Computer', 400, 390, 45, 'popular', '71-M4-hzS9L._SL1500_.jpg', '10000', '2018-01-30 02:11:53', 0),
(33, 'Nikon D850 DSLR Camera Body', 'Camera', 3500, 3500, 69, 'recommend', 'l_71841-D850_BF1B_front.jpg', '10000', '2018-01-30 02:18:50', 0),
(34, 'Nikon D5 Body Only - Dual CompactFlash Version', 'Camera', 4999, 4998, 233, 'popular', 'l_34129-NikonD5.jpg', '10000', '2018-01-30 02:20:44', 0),
(35, 'Nikon D5600 18-55mm AF-P VR with 70-300mm DX AF-P VR Lens Kit', 'Camera', 889, 889, 55, 'popular', 'D5600AFP1855VRfrtTwinkit.png', '10000', '2018-01-30 02:22:11', 0),
(36, 'Nikon D7500 Digital SLR with 18-140mm Lens', 'Camera', 1176, 1175, 222, 'new', 'nikon-d7500-18-140.jpg', '10000', '2018-01-30 02:23:39', 0),
(37, 'Sony Alpha a7R II Compact System Camera Body with 55mm f1.8 Lens', 'Camera', 3210, 3210, 21, 'new', 'CSONYCM175282026.jpg', '10000', '2018-01-30 02:25:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_audiovideo`
--

CREATE TABLE IF NOT EXISTS `product_audiovideo` (
  `product_audiovideo_id` int(11) NOT NULL,
  `product_audiovideo_type` varchar(111) NOT NULL,
  `product_audiovideo_brand` varchar(1111) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_camera`
--

CREATE TABLE IF NOT EXISTS `product_camera` (
  `product_camera_id` int(11) NOT NULL,
  `product_camera_brand` varchar(111) NOT NULL,
  `product_camera_type` varchar(111) NOT NULL,
  `product_camera_pixel` varchar(1111) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_camera`
--

INSERT INTO `product_camera` (`product_camera_id`, `product_camera_brand`, `product_camera_type`, `product_camera_pixel`, `product_id`, `trader_id`) VALUES
(1, 'Nikon', 'Interchangeable Lens', '1080', 33, 10000),
(2, 'Nikon', 'Interchangeable Lens', '1080', 34, 10000),
(3, 'Nikon', 'Interchangeable Lens', '1080', 35, 10000),
(4, 'Nikon', 'Interchangeable Lens', '960', 36, 10000),
(5, 'Sony', 'Interchangeable Lens', '1080', 37, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `product_computer`
--

CREATE TABLE IF NOT EXISTS `product_computer` (
  `product_computer_id` int(11) NOT NULL,
  `product_computer_brand` varchar(101) NOT NULL,
  `product_computer_case` varchar(11111) NOT NULL,
  `product_computer_screen` varchar(1111) NOT NULL,
  `product_computer_cpu` varchar(111) NOT NULL,
  `product_computer_graphicsCard` varchar(111) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_computer`
--

INSERT INTO `product_computer` (`product_computer_id`, `product_computer_brand`, `product_computer_case`, `product_computer_screen`, `product_computer_cpu`, `product_computer_graphicsCard`, `product_id`, `trader_id`) VALUES
(1, 'lenovo', '1TB 7200 rpm', '21.5"FHD LED 1920x1080', 'AMD A6-9210 Processor ( 2.50GHz 2133MHz 1MB )', 'AMD Integrated Graphics', 29, 10000),
(2, 'Dell', '500GB 5.4k HDD; DVD-RW', '23.8-inch FHD (1920 x 1080) Anti-Glare LED-Backlit Display with Wide Viewing Angle', 'Intel Core i3-7100U', 'Intel HD Graphics', 32, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `product_description`
--

CREATE TABLE IF NOT EXISTS `product_description` (
  `product_description_id` int(11) NOT NULL,
  `product_id` int(111) NOT NULL,
  `product_detail` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_imageFile` varchar(1000) NOT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_laptop`
--

CREATE TABLE IF NOT EXISTS `product_laptop` (
  `product_laptop_id` int(11) NOT NULL,
  `product_laptop_brand` varchar(1011) NOT NULL,
  `product_laptop_graphicsCard` varchar(1111) NOT NULL,
  `product_laptop_cpu` varchar(1111) NOT NULL,
  `product_laptop_size` varchar(1111) NOT NULL,
  `product_id` int(250) NOT NULL,
  `trader_id` int(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_laptop`
--

INSERT INTO `product_laptop` (`product_laptop_id`, `product_laptop_brand`, `product_laptop_graphicsCard`, `product_laptop_cpu`, `product_laptop_size`, `product_id`, `trader_id`) VALUES
(3, 'Apple', 'Intel Iris Plus Graphics 640', 'Intel Core i5', '13', 6, 10000),
(4, 'Apple', 'Intel HD Graphics 630', 'Intel Core i7', '15', 7, 10000),
(5, 'Dell', 'Intel Iris Plus Graphics 640', 'Intel Core i7-8550U', '13.3', 8, 10000),
(6, 'DELL', 'IntelÂ® HD Graphics', 'IntelÂ® CeleronÂ® Processor N3060 (2M Cache, up to 2.48 GHz)', '15.6', 25, 10000),
(7, 'DELL', 'NVIDIAÂ® GeForceÂ® GTX 1050 with 4GB GDDR5', '7th Generation IntelÂ® Coreâ„¢ i7-7700HQ Quad Core Processor (6M cache, up to 3.8 GHz)', '15.6', 26, 10000),
(8, 'lenovo', 'Intel HD Graphics 400', 'Intel Atom x5-Z8350 Processor ( 1.44GHz 1600MHz 2MB )', '10.1', 27, 10000),
(9, 'HP', 'NVIDIAÂ® GeForceÂ® 150MX', 'IntelÂ® Coreâ„¢ i5-8250U ', '15.6', 28, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `product_mobile`
--

CREATE TABLE IF NOT EXISTS `product_mobile` (
  `product_mobile_id` int(11) NOT NULL,
  `product_mobile_brand` varchar(101) NOT NULL,
  `product_mobile_size` varchar(111) NOT NULL,
  `product_mobile_system` varchar(111) NOT NULL,
  `product_mobile_pixel` varchar(111) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trader_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_mobile`
--

INSERT INTO `product_mobile` (`product_mobile_id`, `product_mobile_brand`, `product_mobile_size`, `product_mobile_system`, `product_mobile_pixel`, `product_id`, `trader_id`) VALUES
(4, 'apple', '4.7', 'IOS', '1800', 0, 10000),
(5, 'apple', '5.8', 'IOS', '2000', 14, 10000),
(6, 'apple', '4.7', 'IOS', '1800', 16, 10000),
(7, 'Huawei', '5.1', 'android', '1600', 21, 10000),
(8, 'Huawei', '5.1', 'android', '1800', 22, 10000),
(9, 'Huawei', '5.1', 'android', '1800', 23, 10000),
(10, 'Huawei', '5.1', 'android', '1800', 24, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(11) NOT NULL,
  `question1` varchar(10) NOT NULL,
  `question2` varchar(10) NOT NULL,
  `question3` varchar(10) NOT NULL,
  `question4` varchar(10) NOT NULL,
  `question5` varchar(10) NOT NULL,
  `question6` varchar(10) NOT NULL,
  `question7` varchar(10) NOT NULL,
  `question8` varchar(10) NOT NULL,
  `question9` varchar(10) NOT NULL,
  `message` varchar(10100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `message`) VALUES
(1, 'male', 'no', '2', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(2, 'male', 'yes', '3', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(3, 'female', 'yes', '5', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(4, 'male', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'Maybe this website needs to be more user-friendly.'),
(5, 'female', 'no', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(6, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(7, 'male', 'yes', '3', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(8, 'female', 'yes', '5', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(9, 'female', 'yes', '5', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(10, 'male', 'yes', '3', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(11, 'female', 'yes', '4', 'yes', 'yes', 'no', 'no', 'yes', 'no', ''),
(12, 'male', 'yes', '5', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(13, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'ÎÞ'),
(14, 'male', 'yes', '2', 'no', 'no', 'no', 'yes', 'no', 'no', ''),
(15, 'male', 'no', '3', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(16, 'female', 'yes', '3', 'yes', 'no', 'no', 'no', 'yes', 'yes', ''),
(17, 'male', 'no', '4', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(18, 'female', 'yes', '4', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', ''),
(19, 'male', 'no', '4', 'no', 'yes', 'yes', 'no', 'yes', 'no', ''),
(20, 'male', 'yes', '2', 'yes', 'no', 'no', 'yes', 'yes', 'no', ''),
(21, 'female', 'no', '4', 'no', 'yes', 'no', 'no', 'yes', 'yes', ''),
(22, 'male', 'yes', '4', 'yes', 'yes', 'no', 'no', 'yes', 'yes', ''),
(23, 'female', 'yes', '5', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'ÎÞ'),
(24, 'male', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(25, 'female', 'no', '4', 'no', 'no', 'no', 'no', 'yes', 'no', ''),
(26, 'male', 'no', '4', 'yes', 'yes', 'no', 'no', 'no', 'no', ''),
(27, 'female', 'yes', '4', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(28, 'female', 'yes', '2', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(29, 'male', 'no', '2', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(30, 'male', 'yes', '2', 'no', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(31, 'male', 'yes', '3', 'yes', 'yes', 'no', 'no', 'no', 'no', ''),
(32, 'male', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'no', ''),
(33, 'male', 'yes', '5', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(34, 'female', 'yes', '3', 'yes', 'no', 'no', 'yes', 'no', 'no', ''),
(35, 'female', 'yes', '4', 'yes', 'yes', 'no', 'no', 'yes', 'yes', ''),
(36, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(37, 'female', 'no', '4', 'no', 'yes', 'no', 'no', 'yes', 'no', ''),
(38, 'male', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(39, 'male', 'no', '4', 'no', 'yes', 'no', 'yes', 'no', 'yes', ''),
(40, 'female', 'yes', '4', 'no', 'no', 'no', 'no', 'no', 'no', ''),
(41, 'female', 'no', '2', 'no', 'no', 'no', 'yes', 'no', 'no', ''),
(42, 'male', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(43, 'female', 'no', '2', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no'),
(44, 'male', 'yes', '2', 'yes', 'no', 'no', 'yes', 'no', 'no', ''),
(45, 'female', 'no', '2', 'no', 'no', 'yes', 'no', 'no', 'no', ''),
(46, 'female', 'no', '3', 'no', 'no', 'no', 'yes', 'no', 'no', ''),
(47, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(48, 'male', 'yes', '4', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(49, 'female', 'yes', '4', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(50, 'female', 'no', '4', 'no', 'no', 'no', 'no', 'no', 'no', ''),
(51, 'male', 'yes', '5', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(52, 'female', 'yes', '3', 'yes', 'yes', 'no', 'no', 'yes', 'yes', ''),
(53, 'female', 'yes', '3', 'yes', 'yes', 'no', 'no', 'yes', 'no', ''),
(54, 'male', 'yes', '2', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '1'),
(55, 'male', 'yes', '3', 'yes', 'yes', 'no', 'no', 'yes', 'no', ''),
(56, 'male', 'no', '1', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(57, 'male', 'no', '5', 'no', 'yes', 'no', 'no', 'no', 'no', ''),
(58, 'male', 'no', '1', 'no', 'yes', 'no', 'no', 'yes', 'yes', ''),
(59, 'female', 'no', '2', 'yes', 'yes', 'no', 'no', 'yes', 'no', ''),
(60, 'female', 'yes', '4', 'yes', 'no', 'no', 'no', 'no', 'no', 'ÎÞ'),
(61, 'male', 'no', '4', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'ÎÞ'),
(62, 'female', 'yes', '1', 'yes', 'yes', 'yes', 'yes', 'no', 'no', ''),
(63, 'male', 'yes', '4', 'no', 'yes', 'yes', 'yes', 'yes', 'no', ''),
(64, 'male', 'no', '3', 'yes', 'no', 'no', 'yes', 'no', 'no', ''),
(65, 'female', 'yes', '3', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(66, 'female', 'no', '3', 'no', 'no', 'no', 'no', 'no', 'no', ''),
(67, 'female', 'yes', '4', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'Ã»ÓÐ'),
(68, 'female', 'no', '4', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(69, 'female', 'no', '2', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(70, 'male', 'no', '3', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(71, 'female', 'yes', '4', 'no', 'yes', 'no', 'yes', 'no', 'yes', ''),
(72, 'female', 'no', '3', 'no', 'no', 'no', 'yes', 'no', 'no', ''),
(73, 'female', 'no', '5', 'no', 'yes', 'no', 'yes', 'no', 'no', ''),
(74, 'female', 'yes', '4', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'ÎÞ'),
(75, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'Ìì'),
(76, 'female', 'no', '2', 'no', 'no', 'no', 'yes', 'yes', 'no', ''),
(77, 'male', 'no', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(78, 'male', 'no', '2', 'yes', 'no', 'no', 'yes', 'yes', 'no', ''),
(79, 'female', 'yes', '3', 'no', 'no', 'yes', 'no', 'no', 'yes', ''),
(80, 'male', 'no', '5', 'no', 'no', 'no', 'yes', 'no', 'yes', ''),
(81, 'male', 'yes', '3', 'yes', 'no', 'no', 'yes', 'yes', 'no', '¼ÓÓÍ'),
(82, 'female', 'yes', '1', 'yes', 'yes', 'yes', 'no', 'no', 'no', '1'),
(83, 'female', 'no', '1', 'yes', 'no', 'yes', 'yes', 'no', 'yes', ''),
(84, 'female', 'yes', '3', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(85, 'female', 'yes', '2', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', ''),
(86, 'male', 'yes', '2', 'no', 'no', 'yes', 'yes', 'yes', 'yes', ''),
(87, 'female', 'no', '4', 'no', 'no', 'no', 'yes', 'no', 'no', 'ÎÞ'),
(88, 'male', 'no', '2', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(89, 'male', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no'),
(90, 'female', 'no', '5', 'no', 'no', 'no', 'no', 'no', 'no', ''),
(91, 'female', 'no', '4', 'no', 'yes', 'no', 'no', 'yes', 'no', 'i noot no'),
(92, 'female', 'yes', '4', 'yes', 'no', 'no', 'yes', 'no', 'yes', ''),
(93, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'no', 'yes', ''),
(94, 'female', 'yes', '2', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(95, 'female', 'no', '3', 'no', 'no', 'no', 'yes', 'yes', 'no', 'ÎÞ'),
(96, 'female', 'no', '4', 'no', 'no', 'no', 'no', 'no', 'yes', ''),
(97, 'female', 'yes', '5', 'no', 'yes', 'no', 'yes', 'no', 'yes', ''),
(98, 'female', 'no', '5', 'no', 'yes', 'no', 'no', 'yes', 'yes', ''),
(99, 'female', 'yes', '3', 'yes', 'no', 'no', 'yes', 'yes', 'no', ''),
(100, 'male', 'no', '4', 'no', 'yes', 'no', 'yes', 'no', 'no', ''),
(101, 'male', 'yes', '4', 'no', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(102, 'female', 'yes', '1', 'no', 'yes', 'no', 'no', 'no', 'yes', ''),
(103, 'female', 'no', '1', 'no', 'yes', 'no', 'no', 'no', 'no', ''),
(104, 'female', 'no', '2', 'no', 'no', 'no', 'yes', 'no', 'yes', ''),
(105, 'male', 'yes', '3', 'no', 'no', 'no', 'yes', 'no', 'yes', ''),
(106, 'female', 'yes', '3', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', ''),
(107, 'female', 'yes', '4', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'Ï£Íû¸üÍêÃÀ'),
(108, 'female', 'no', '4', 'yes', 'no', 'no', 'yes', 'no', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_rating` int(11) NOT NULL,
  `customer_name` varchar(1111) NOT NULL,
  `review_title` varchar(1111) NOT NULL,
  `review_content` varchar(11111) NOT NULL,
  `review_updateDate` datetime NOT NULL,
  `review_helper` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `customer_id`, `product_id`, `customer_rating`, `customer_name`, `review_title`, `review_content`, `review_updateDate`, `review_helper`) VALUES
(1, 1, 6, 4, 'reggiecril', 'good', 'liek', '2018-01-27 00:00:00', 1),
(2, 1, 6, 5, 'reggiecril', 'good', 'liek', '2018-01-27 00:00:00', 1),
(3, 1, 6, 5, 'crilreggie', 'Nice', 'Best Choics', '2018-04-20 21:09:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trader`
--

CREATE TABLE IF NOT EXISTS `trader` (
  `trader_id` int(11) NOT NULL,
  `trader_name` varchar(100) NOT NULL,
  `trader_email` varchar(222) NOT NULL,
  `trader_password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trader`
--

INSERT INTO `trader` (`trader_id`, `trader_name`, `trader_email`, `trader_password`) VALUES
(10000, 'Apple', 'reggiecril0618@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertising`
--
ALTER TABLE `advertising`
  ADD PRIMARY KEY (`advertising_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`customer_address_id`);

--
-- Indexes for table `customer_payment`
--
ALTER TABLE `customer_payment`
  ADD PRIMARY KEY (`customer_payment_id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`favourite_id`);

--
-- Indexes for table `old_product`
--
ALTER TABLE `old_product`
  ADD PRIMARY KEY (`old_product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_item`
--
ALTER TABLE `orders_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_audiovideo`
--
ALTER TABLE `product_audiovideo`
  ADD PRIMARY KEY (`product_audiovideo_id`);

--
-- Indexes for table `product_camera`
--
ALTER TABLE `product_camera`
  ADD PRIMARY KEY (`product_camera_id`);

--
-- Indexes for table `product_computer`
--
ALTER TABLE `product_computer`
  ADD PRIMARY KEY (`product_computer_id`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
  ADD PRIMARY KEY (`product_description_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `product_laptop`
--
ALTER TABLE `product_laptop`
  ADD PRIMARY KEY (`product_laptop_id`);

--
-- Indexes for table `product_mobile`
--
ALTER TABLE `product_mobile`
  ADD PRIMARY KEY (`product_mobile_id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `trader`
--
ALTER TABLE `trader`
  ADD PRIMARY KEY (`trader_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertising`
--
ALTER TABLE `advertising`
  MODIFY `advertising_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `customer_address_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_payment`
--
ALTER TABLE `customer_payment`
  MODIFY `customer_payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `favourite_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `old_product`
--
ALTER TABLE `old_product`
  MODIFY `old_product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `orders_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `product_audiovideo`
--
ALTER TABLE `product_audiovideo`
  MODIFY `product_audiovideo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_camera`
--
ALTER TABLE `product_camera`
  MODIFY `product_camera_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_computer`
--
ALTER TABLE `product_computer`
  MODIFY `product_computer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_description`
--
ALTER TABLE `product_description`
  MODIFY `product_description_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_laptop`
--
ALTER TABLE `product_laptop`
  MODIFY `product_laptop_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_mobile`
--
ALTER TABLE `product_mobile`
  MODIFY `product_mobile_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trader`
--
ALTER TABLE `trader`
  MODIFY `trader_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10001;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
