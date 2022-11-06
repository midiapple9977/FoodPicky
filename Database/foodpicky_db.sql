-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodpicky_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usertype` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`, `usertype`) VALUES
(16, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'dilshanwickramaarachchi99@gmail.com', 'QX5ZMN', '2022-09-04 04:26:51', 'admin'),
(19, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'dilshanwsw2ickramaarachchi99@gmail.com', 'QSTE52', '2022-09-04 04:29:32', 'cashire');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `u_id`, `rs_id`, `title`, `slogan`, `c_name`, `price`, `img`, `status`) VALUES
(160, 48, 0, 'Egg roll', 'Enjoy your food.', 'Short_eats', '100.00', '6310ca1eb6f20.jpg', 0),
(161, 48, 0, 'Fish roll', 'Enjoy your food.', 'Short_eats', '90.00', '6310ca5ae6d9a.jpg', 0),
(162, 48, 0, 'Patties', 'Enjoy your food.', 'Short_eats', '100.00', '6310caba5a3c2.jpg', 0),
(163, 48, 0, 'Fish bun', 'Enjoy your food.', 'Short_eats', '100.00', '6310cad90eb40.jpg', 0),
(164, 48, 0, 'Drumstick bun', 'Enjoy your food.', 'Short_eats', '150.00', '6310cb01e5fb2.jpg', 0),
(165, 48, 0, 'Vegetable roti', 'Enjoy your food.', 'Short_eats', '100.00', '6310cbd4ae539.jpg', 0),
(166, 48, 0, 'Fish burger', 'Enjoy your food.', 'Short_eats', '150.00', '6310cc0695f5d.jpg', 0),
(167, 48, 0, 'Mini hotdog', 'Enjoy your food.', 'Short_eats', '130.00', '6310cc4946b28.jpg', 0),
(168, 48, 0, 'Uludu wade', 'Enjoy your food.', 'Short_eats', '130.00', '6310cc7406e87.jpg', 0),
(169, 48, 0, 'Pancake', 'Enjoy your food.', 'Short_eats', '80.00', '6310cd0e98869.jpg', 0),
(170, 48, 0, 'Pol cake', 'Enjoy your food.', 'Short_eats', '100.00', '6310cd79e4f78.jpg', 0),
(171, 48, 0, 'Halapa', 'Enjoy your food.', 'Short_eats', '80.00', '6310cdc3966a0.jpg', 0),
(172, 48, 0, 'Butter cake', 'Enjoy your food.', 'Short_eats', '100.00', '6310cdf29fa9f.jpg', 0),
(173, 48, 0, 'Smak spicy bites', 'Enjoy your food.', 'Bites', '130.00', '6310d1c50147b.jpg', 0),
(174, 48, 0, 'Smak chees & onions bites', 'Enjoy your food.', 'Bites', '130.00', '6310d30ad0ea6.png', 0),
(175, 48, 0, 'Smak onions bites', 'Enjoy your food.', 'Bites', '130.00', '6310d399d9680.png', 0),
(176, 48, 0, 'Pop corn', 'Enjoy your food.', 'Bites', '130.00', '6310d3ba402ce.jpg', 0),
(177, 48, 0, 'Kassawa', 'Enjoy your food.', 'Bites', '140.00', '6310d3e107c8f.jpg', 0),
(178, 48, 0, 'Sini murukku', 'Enjoy your food.', 'Bites', '100.00', '6310d43b4d42e.jpg', 0),
(179, 48, 0, 'Marie biscuits', 'Enjoy your food.', 'Biscuits', '100.00', '631188b3d048b.jpg', 0),
(180, 48, 0, 'Chocolate biscuits', 'Enjoy your food.', 'Biscuits', '160.00', '6310d758358d3.jpg', 0),
(181, 48, 0, 'Chick bits', 'Enjoy your food.', 'Biscuits', '65.00', '6310d77f7d963.jpg', 0),
(182, 48, 0, 'Orange crush', 'Enjoy your food.', 'Beverages', '80.00', '6310d971d0fde.jpg', 0),
(183, 48, 0, 'Necto', 'Enjoy your food.', 'Beverages', '80.00', '6310d9a6e0cd1.jpg', 0),
(184, 48, 0, 'Cream soda', 'Enjoy your food.', 'Beverages', '80.00', '6310da05a4c46.png', 0),
(185, 48, 0, 'EGB', 'Enjoy your food.', 'Beverages', '80.00', '6310da4173ae7.jpg', 0),
(186, 48, 0, 'Lemonade', 'Enjoy your food.', 'Beverages', '80.00', '6310daac59b1f.png', 0),
(187, 48, 0, 'Kik cola', 'Enjoy your food.', 'Beverages', '80.00', '6310db1d7612e.png', 0),
(188, 48, 0, 'Mountain dew', 'Enjoy your food.', 'Beverages', '80.00', '6310db44e25de.jpg', 0),
(189, 48, 0, 'Pepsi', 'Enjoy your food.', 'Beverages', '80.00', '6310dbd1c0fa5.jpg', 0),
(190, 48, 0, 'Ole cream soda', 'Enjoy your food.', 'Beverages', '80.00', '6310dc1c714b2.jpg', 0),
(191, 48, 0, 'Mirinda', 'Enjoy your food.', 'Beverages', '80.00', '6310dc554a0da.jpg', 0),
(192, 48, 0, 'Water bottel', 'Enjoy your food.', 'Beverages', '70.00', '6310dfb0ba758.jpg', 0),
(193, 48, 0, 'Cool milo', 'Enjoy your food.', 'Beverages', '120.00', '6310dfd41ca04.jpg', 0),
(194, 48, 0, 'Hot milo', 'Enjoy your food.', 'Beverages', '100.00', '63118704c9d06.jpg', 0),
(195, 48, 0, 'Cool nescafe', 'Enjoy your food.', 'Beverages', '120.00', '6310e00605541.png', 0),
(196, 48, 0, 'Hot nescafe', 'Enjoy your food.', 'Beverages', '100.00', '631187345be1e.jpg', 0),
(197, 48, 0, 'Vennila kothmale', 'Enjoy your food.', 'Beverages', '120.00', '6310e05961ef1.jpg', 0),
(198, 48, 0, 'Motmale chox', 'Enjoy your food.', 'Beverages', '120.00', '6310e0af16bd4.jpg', 0),
(199, 48, 0, 'Falooda', 'Enjoy your food.', 'Beverages', '120.00', '6310e118e53fb.jpg', 0),
(200, 48, 0, 'Iced coffee kothmale', 'Enjoy your food.', 'Beverages', '120.00', '6310e14f3c28a.jpg', 0),
(201, 48, 0, 'Yoget  ', 'Enjoy your food.', 'Beverages', '70.00', '6310e16e82ab8.jpg', 0),
(202, 48, 0, 'Smak', 'Enjoy your food.', 'Beverages', '140.00', '6310e188c3a13.jpg', 0),
(203, 48, 0, 'Yogurt drink', 'Enjoy your food.', 'Beverages', '140.00', '6310e1a773d7c.jpg', 0),
(204, 48, 0, 'Hot nestea', 'Enjoy your food.', 'Beverages', '100.00', '6311884cac459.jpg', 0),
(205, 48, 0, 'Chocolate milk', 'Enjoy your food.', 'Beverages', '120.00', '6310e237dd4cc.jpg', 0),
(206, 171, 0, 'Chicken rice', 'You have to order this before 9.00 P.M. Then, you can have it next day. Both breakfast and launch.', 'Rice', '350.00', '634f8feb503fa.jpg', 0),
(207, 171, 0, 'Egg rice', 'You have to order this before 9.00 P.M. Then, you can have it next day. Both breakfast and launch.', 'Rice', '350.00', '634f9033c4c5b.jpg', 0),
(208, 171, 0, 'Fish rice', 'You have to order this before 9.00 P.M. Then, you can have it next day. Both breakfast and launch.', 'Rice', '350.00', '634f9013bf34e.jpg', 0),
(209, 171, 0, 'Noodels', 'You have to order this before 9.00 P.M. Then, you can have it next day. Both breakfast and launch.', 'Rice', '170.00', '6329c75c63a49.jpg', 0),
(210, 171, 0, 'Fried rice', 'Available in Tuesday and Sunday. Launch only.', 'Rice', '330.00', '6329c94ba5b20.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `frequency`
--

CREATE TABLE `frequency` (
  `d_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `quantity` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frequency`
--

INSERT INTO `frequency` (`d_id`, `u_id`, `quantity`) VALUES
(160, 48, 1),
(160, 173, 1),
(161, 48, 20),
(162, 48, 30),
(162, 173, 5),
(164, 48, 30),
(164, 171, 1),
(171, 173, 1),
(172, 48, 1),
(178, 48, 50),
(180, 48, 50),
(180, 189, 20),
(180, 190, 2),
(184, 48, 1),
(188, 48, 12),
(195, 48, 60),
(197, 48, 3),
(207, 171, 250),
(207, 173, 2);

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(73, 27, 'new apple jusise:)', 'dilshanwickramaarachchi99@gmail.com', '0117 430 000', 'https://myappmaker.io/learning_E', '7am', '4pm', 'mon-wed', '135 S. De S. Jayasinghe Mawatha, Nugegoda 10250', '6309aafb9588d.jpg', '2022-08-27 05:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(52, 'Short_eats', '2022-09-01 15:00:02'),
(53, 'Bites', '2022-09-01 15:36:17'),
(54, 'Biscuits', '2022-09-01 15:59:51'),
(55, 'Beverages', '2022-09-01 16:03:54'),
(57, 'Rice', '2022-09-14 12:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `verification_code` varchar(400) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `verification_code`, `address`, `status`, `date`) VALUES
(190, 'mithila', 'Mithila', 'Dilshan', '20s15006@saegis.edu.lk', '0761009042', '25f9e794323b453885f5181f1b624d0b', '', '111/5 kurawalana ,Kahatowita', 1, '2022-11-05 14:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `d_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `totalprice` int(222) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `d_id`, `title`, `quantity`, `price`, `totalprice`, `status`, `date`) VALUES
(95, 190, 0, 'Chocolate biscuits', 2, '160.00', 320, 'closed', '2022-11-05 14:46:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `frequency`
--
ALTER TABLE `frequency`
  ADD PRIMARY KEY (`d_id`,`u_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
