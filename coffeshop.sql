-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `nama_pemesan` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `gambar`, `description`, `price`) VALUES
(1, 'Espresso', 'espresso.jpg', 'Shot konsentrat kopi dengan aroma dan rasa yang kaya', 3000),
(2, 'Cappuccino', 'cappuccino.jpg', 'Espresso dengan tambahan susu dan taburan bubuk cokelat', 4000),
(3, 'Latte', 'latte.jpg', 'Espresso dengan susu hangat dan lapisan busa susu di atasnya', 4500),
(4, 'Mocha', 'mocha.jpg', 'Espresso dengan susu, cokelat, dan whipped cream', 5000),
(5, 'Americano', 'americano.jpg', 'Espresso dengan air panas untuk rasa yang lebih ringan', 3500),
(6, 'Macchiato', 'macchiato.jpg', 'Espresso dengan tambahan sedikit susu', 3500),
(7, 'Flat White', 'flat white.jpg', 'Espresso dengan susu steamed untuk rasa yang kaya', 4500),
(8, 'Iced Coffee', 'ice coffe.jpg', 'Espresso atau kopi dingin dengan tambahan es dan susu', 5000),
(9, 'Matcha Latte', 'matcha latte.jpg', 'Minuman tradisional Jepang dengan bubuk matcha dan susu', 5500),
(10, 'Hot Chocolate', 'hot chocolate.jpg', 'Minuman cokelat hangat dengan marshmallow di atasnya', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
