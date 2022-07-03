-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `variants_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `name`, `description`) VALUES
(1, 'cake', ''),
(2, 'cookie', ''),
(3, 'pastry', '');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_item`
--

CREATE TABLE `checkout_item` (
  `ID` int(11) NOT NULL,
  `checkout_items_ID` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `variants_ID` int(11) NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout_item`
--

INSERT INTO `checkout_item` (`ID`, `checkout_items_ID`, `product_ID`, `quantity`, `variants_ID`, `total_price`) VALUES
(1, 2, 9, 3, 5, 432),
(2, 2, 1, 5, 2, 3600),
(3, 3, 6, 2, 1, 1400),
(4, 3, 4, 2, 3, 1959.99),
(5, 3, 1, 2, 1, 1200),
(6, 3, 9, 2, 6, 448),
(7, 3, 7, 1, 6, 168),
(8, 4, 6, 2, 1, 1400),
(9, 4, 4, 2, 3, 1959.99),
(10, 4, 1, 2, 1, 1200),
(11, 4, 9, 2, 6, 448),
(12, 4, 7, 1, 6, 168),
(13, 5, 6, 2, 1, 1400),
(14, 5, 4, 2, 3, 1959.99),
(15, 5, 1, 2, 1, 1200),
(16, 5, 9, 2, 6, 448),
(17, 5, 7, 1, 6, 168);

-- --------------------------------------------------------

--
-- Table structure for table `checkout_items`
--

CREATE TABLE `checkout_items` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_number` varchar(45) NOT NULL,
  `payment_method` varchar(45) NOT NULL,
  `total_quantity` int(10) NOT NULL,
  `total_price` double NOT NULL,
  `shipping_fee` double NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout_items`
--

INSERT INTO `checkout_items` (`ID`, `user_ID`, `name`, `address`, `contact_number`, `payment_method`, `total_quantity`, `total_price`, `shipping_fee`, `date_created`) VALUES
(1, 2, 'Wyn Christian Rebanal', 'Blk 62 Lot 10 Phase 3 Lapu-Lapu st.', '09214765154', 'cc', 8, 4082, 50, '2022-07-03 10:52:23'),
(2, 2, 'Wyn Christian Rebanal', 'Blk 62 Lot 10 Phase 3 Lapu-Lapu st.', 'ha', 'cod', 8, 4082, 50, '2022-07-03 11:18:10'),
(3, 2, 'Wyn Christian Rebanal', 'Blk 62 Lot 10 Phase 3 Lapu-Lapu st.', '09214765154', 'gcash', 9, 5226, 50, '2022-07-03 11:50:20'),
(4, 2, 'Wyn Christian Rebanal', 'Blk 62 Lot 10 Phase 3 Lapu-Lapu st.', '09214765154', 'cod', 9, 5226, 50, '2022-07-03 11:51:17'),
(5, 2, 'Wyn Christian Rebanal', 'Blk 62 Lot 10 Phase 3 Lapu-Lapu st.', '09214765154', 'cod', 9, 5226, 50, '2022-07-03 11:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card_checkout`
--

CREATE TABLE `credit_card_checkout` (
  `ID` int(11) NOT NULL,
  `number` varchar(45) NOT NULL,
  `expiry_date` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `checkout_items_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_card_checkout`
--

INSERT INTO `credit_card_checkout` (`ID`, `number`, `expiry_date`, `cvv`, `checkout_items_ID`) VALUES
(1, '1209', '12/12', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gcash_checkout`
--

CREATE TABLE `gcash_checkout` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `checkout_items_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gcash_checkout`
--

INSERT INTO `gcash_checkout` (`ID`, `name`, `number`, `checkout_items_ID`) VALUES
(1, 'wynter', '09214765154', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `img_name` text NOT NULL,
  `set_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `category_ID`, `name`, `description`, `price`, `img_name`, `set_ID`) VALUES
(1, 1, 'Carrot', 'Soft and moisty goodness packed with carrots, walnuts, and cream cheese.', 600, 'carrot.png', 1),
(2, 1, 'Chocolate Fudge', 'Decadent fudge-filled chocolate topped with caramel frosting.', 600, 'chocofudge.png', 1),
(3, 1, 'Marble', 'Layers of vanilla and chocolate mixed in buttery bread.', 600, 'marble.png', 1),
(4, 1, 'Red Velvet', 'Our own take on the traditional velvet flavor—vanilla drenched in butter with a hint of cocoa flavor.', 700, 'redvelvet.png', 1),
(5, 1, 'Tiramisu', 'A fusion of espresso-dipped ladyfingers and a creamy, lightly sweetened mascarpone cream, making a bittersweet result of flavors.', 700, 'tiramisu.png', 1),
(6, 1, 'Ube', 'Moist, nutty, delectable ube goodness you all know and love.', 700, 'ube.png', 1),
(7, 2, 'Chocolate Chip', 'Our famous, traditional chocolate chip cookie.', 60, 'chocochip.png', 2),
(8, 2, 'Chocolate Crinkles', 'Brownie-like chocolate cookies coated in confectioners\' sugar.', 50, 'chococringles.png', 2),
(9, 2, 'Gingerbread', 'Molasses and brown sugar-sweetened holiday goodness that are crispy on the edges yet soft in the center.', 80, 'gingerbread.png', 2),
(10, 3, 'Egg Tart', 'Bright savory egg richness with a scorched caramelized exterior.', 60, 'eggtart.png', 3),
(11, 3, 'Macarons', 'Evocatively delicate nutty sandwich cookies with a crisp exterior.', 50, 'macaron.png', 2),
(12, 3, 'Soft Pretzel', 'Traditional pretzels with a deeply browned exterior and a chewy texture.', 60, 'pretzel.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `username`, `password`, `date_created`) VALUES
(1, 'john@sample.com', 'johnDoe', '1234', '0000-00-00'),
(2, 'john@sample.co', 'joh', '123', '2022-07-01'),
(3, 'john@sample.co', 'joh', '123', '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price_multiplier` double NOT NULL,
  `set_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`ID`, `name`, `price_multiplier`, `set_ID`) VALUES
(1, '6 x 8', 1, 1),
(2, '8 x 10', 1.2, 1),
(3, '10 x 12', 1.4, 1),
(4, '5 pcs', 1, 2),
(5, '10 pcs', 1.8, 2),
(6, '20 pcs', 2.8, 2),
(7, '2 pcs', 1, 3),
(8, '4 pcs', 1.8, 3),
(9, '6 pcs', 2.8, 3),
(10, '6 pcs', 1, 4),
(11, '12 pcs', 1.8, 4),
(12, '24 pcs', 2.8, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `checkout_item`
--
ALTER TABLE `checkout_item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `checkout_items`
--
ALTER TABLE `checkout_items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `credit_card_checkout`
--
ALTER TABLE `credit_card_checkout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gcash_checkout`
--
ALTER TABLE `gcash_checkout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout_item`
--
ALTER TABLE `checkout_item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `checkout_items`
--
ALTER TABLE `checkout_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `credit_card_checkout`
--
ALTER TABLE `credit_card_checkout`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gcash_checkout`
--
ALTER TABLE `gcash_checkout`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
