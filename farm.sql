-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 12:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `id` int(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_price` varchar(255) NOT NULL,
  `i_des` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`id`, `i_name`, `i_price`, `i_des`, `status`, `img1`, `img2`, `img3`, `img4`) VALUES
(5, 'AGile Farms Charcuterie Board', '7325', 'Wanting to entertain guests with a top of the range Charcuterie board?\r\nOr Wanting to showcase your grilling skills with a tomahawk steak or rack of ribs?\r\n\r\nThe AGile Farms grill-to-go large Charcuterie/Butcher Board is the perfect compliment for any entertaining household!\r\n\r\nDimensions:\r\n\r\n60cm x 40cm\r\nThickness around 3cm\r\n*Can do custom engraving for large custom orders.', 'Active', 'IMG_4340-scaled.jpg', 'IMG_4339-scaled-600x450.jpg', 'IMG_4074-scaled-600x800.jpg', 'IMG_4073-scaled.jpg'),
(6, 'AGile Farms Cutting Board', '75000', 'The AGile Farms Cutting Board is more than meets the eye.\r\nThis doubles as both a beautiful eye catching cutting board and your dinner plate.\r\n\r\nCustomised to provide a grill-to-go experience, this board will showcase your meals.\r\nComing with a built in juice groove, and corner ideal to hold whatever sauce tickles your fancy.\r\n\r\nDimensions:\r\n\r\n38cm x 25cm\r\nThickness around 3cm\r\n*Custom engraving available on Large Qty Custom Orders', 'Active', 'IMG_4030-scaled.jpg', 'IMG_4029-scaled.jpg', 'IMG_4027-scaled.jpg', ''),
(7, 'Hydroponic Grow Tower', '25390', 'Details of Each Hydroponic Grow Tower:\r\n– Dimension: (DxRxC) 60x60x195(cm)\r\n– Consists of 9 cylinders, each with 4 cavities\r\n– Color: Matte White\r\n– Material: Durable and light uPVC plastic\r\n– Origin: Vietnam\r\n– Product durability : 5 – 10 years\r\n– Warranty: 1 year\r\n\r\nAccessories included:\r\n– A 70-liter nutrient tank with a bottom cross-section of approximately 0.32m²\r\n– A nutrition pump\r\n– 36 vegetable pots / pillar\r\n– Nutritional drainage system', 'Active', 'Hydroponic-Grow-Tower.png', 'Hydroponic-Grow-Tower-Rooftop-600x904.jpg', '156288101_1327689357607075_807103946053251091_n.jpg', ''),
(8, 'Hydroponic Pump or Light Timer', '10000', 'The 24 Hours Timer is the most convenient timer to allow for even easier hydroponic farming. The 24 hour timer allows you to set the on / off time of the power controlling either your water pump or lights. This ensures the amount of of water & light is achieving optimal efficiency for the plant and saves significantly on electricity and water for your operation.', 'Active', '24Hour-Timer.jpg', '', '', ''),
(9, 'In-House Grow Racks', '20000', 'At checkout, we’ll provide you with an estimated delivery date for your order based on your shipping method. Standard shipping charges may apply based on the order value. AnthroPerks members enjoy free Standard Shipping on all orders $150+', 'Active', '6d536ebd086d55002081c8cbbf4676d7-600x503.png', 'Screen-Shot-2020-10-08-at-2.05.06-pm.png', 'Light-View-rendering.png', ''),
(10, 'Vibrant Green Money Plant  (Pack of 5)', '799', '\r\nProduct Description: Combo Of 5 Plants Airpurifying Plant Multicolor Plastic Pot - 3 X 3 Inches Plant Placement- Indoors & Outdoors Care Info For Your Lovely Plant : Keep plants in medium light locations, out of direct sunlight.Natural light is best, but some plants can also thrive in office fluorescent light. Be careful to avoid overwatering.Plants should be kept in a cool spot (between 18-28°C)', 'Active', 'combo-of-two-layer-bamboo-plant-syngonium-plant-money-plant-original-imafwy5namhhkfve.jpeg', 'air-purifying-2-layer-bamboo-plant-in-white-plastic-pot-1-original-imafv6a868nupkqx.jpeg', 'combo-of-two-layer-bamboo-plant-syngonium-plant-money-plant-original-imafwy5nyyyz6hwv.jpeg', 'combo-of-two-layer-bamboo-plant-syngonium-plant-money-plant-original-imafwy5nyyyz6hwv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `a_hit`
--

CREATE TABLE `a_hit` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `i_id` varchar(255) NOT NULL,
  `i_img` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_qty` varchar(255) NOT NULL,
  `i_price` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `total_item` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_hit`
--

INSERT INTO `a_hit` (`id`, `f_name`, `email`, `phone`, `addr`, `city`, `pin`, `state`, `user_id`, `i_id`, `i_img`, `i_name`, `i_qty`, `i_price`, `total_price`, `total_item`, `order_id`, `action`, `payment`) VALUES
(3, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '3', 'IMG_4340-scaled.jpg', 'AGile Farms Charcuterie Board', '1', '7325', '8124', '2', '60996ab253af5', 'Confirm', 'Successful'),
(4, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '4', 'combo-of-two-layer-bamboo-plant-syngonium-plant-money-plant-original-imafwy5namhhkfve.jpeg', 'Vibrant Green Money Plant  (Pack of 5)', '1', '799', '8124', '2', '60996ab253af5', 'Confirm', 'Successful'),
(5, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '5', 'IMG_4340-scaled.jpg', 'AGile Farms Charcuterie Board', '1', '7325', '7325', '1', '609a675435a4e', 'Confirm', 'Successful');

-- --------------------------------------------------------

--
-- Table structure for table `a_regi`
--

CREATE TABLE `a_regi` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_regi`
--

INSERT INTO `a_regi` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_des` text NOT NULL,
  `b_img` varchar(255) NOT NULL,
  `b_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `b_name`, `b_des`, `b_img`, `b_date`) VALUES
(1, '15 Most Nutritious Vegetables You Can Put In Your Body', 'It is based on grain farming. About half of the world’s land is occupied by cereals. Grain along with potatoes is one of the most important food resources of mankind. It is a widespread product in the industry – flour, cereals, spirit, feed. Wheat, rice, corn. NN Vavilov established that the origin of wheat is in Asia and the Mediterranean. From here it spread throughout the world.\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.\r\n\r\nLorem ipsum dolor sit amet, ius eligendi consetetur eloquentiam. Qui te diam quando, cu quas instructior est.\r\n\r\nSteve Jobs\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.', 'Rectangle-46.png', '2021/05/13'),
(2, 'Top 10 Foods For Healthy Hair', '\r\nIt is based on grain farming. About half of the world’s land is occupied by cereals. Grain along with potatoes is one of the most important food resources of mankind. It is a widespread product in the industry – flour, cereals, spirit, feed. Wheat, rice, corn. NN Vavilov established that the origin of wheat is in Asia and the Mediterranean. From here it spread throughout the world.\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.\r\n\r\nLorem ipsum dolor sit amet, ius eligendi consetetur eloquentiam. Qui te diam quando, cu quas instructior est.\r\n\r\nSteve Jobs\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.', 'image-25-1536x912.jpeg', '2021/05/13'),
(3, 'Consumption Of Highly Nutritious Fruits', 'It is based on grain farming. About half of the world’s land is occupied by cereals. Grain along with potatoes is one of the most important food resources of mankind. It is a widespread product in the industry – flour, cereals, spirit, feed. Wheat, rice, corn. NN Vavilov established that the origin of wheat is in Asia and the Mediterranean. From here it spread throughout the world.\r\n\r\n\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.\r\n\r\nLorem ipsum dolor sit amet, ius eligendi consetetur eloquentiam. Qui te diam quando, cu quas instructior est.\r\n\r\nSteve Jobs\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.', 'Rectangle-46.png', '2021/05/13'),
(4, 'Consumption Of Highly Nutritious Food', 'It is based on grain farming. About half of the world’s land is occupied by cereals. Grain along with potatoes is one of the most important food resources of mankind. It is a widespread product in the industry – flour, cereals, spirit, feed. Wheat, rice, corn. NN Vavilov established that the origin of wheat is in Asia and the Mediterranean. From here it spread throughout the world.\r\n\r\n\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.\r\n\r\nLorem ipsum dolor sit amet, ius eligendi consetetur eloquentiam. Qui te diam quando, cu quas instructior est.\r\n\r\nSteve Jobs\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.', 'Rectangle-25.jpg', '2021/05/13'),
(5, 'The Amount Of Freak Bread Or Other Fruits', 'It is based on grain farming. About half of the world’s land is occupied by cereals. Grain along with potatoes is one of the most important food resources of mankind. It is a widespread product in the industry – flour, cereals, spirit, feed. Wheat, rice, corn. NN Vavilov established that the origin of wheat is in Asia and the Mediterranean. From here it spread throughout the world.\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.\r\n\r\nLorem ipsum dolor sit amet, ius eligendi consetetur eloquentiam. Qui te diam quando, cu quas instructior est.\r\n\r\nSteve Jobs\r\n\r\nIt is distributed almost everywhere. The geography of animal husbandry is primarily determined by the place ment of livestock. Cattle. This branch of animal husba ndry is developed in most countries of the world, mainly in the forest, forest-steppe zones of the temperate zone. The largest cattle breeding area in the world is the Argentine pampa. In some parts of the United States, Canada, Australia, large-scale “meat factories” have emerged.', 'photo-1507638940746-7b17d6b55b8f.jpeg', '2021/05/13');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_qty` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `p_qty`, `user_id`) VALUES
(19, '10', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mess`) VALUES
(1, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', 'Great ');

-- --------------------------------------------------------

--
-- Table structure for table `order_i`
--

CREATE TABLE `order_i` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `i_id` varchar(255) NOT NULL,
  `i_img` varchar(255) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_qty` varchar(255) NOT NULL,
  `i_price` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `total_item` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_i`
--

INSERT INTO `order_i` (`id`, `f_name`, `email`, `phone`, `addr`, `city`, `pin`, `state`, `user_id`, `i_id`, `i_img`, `i_name`, `i_qty`, `i_price`, `total_price`, `total_item`, `order_id`, `payment`, `action`) VALUES
(3, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '5', 'IMG_4340-scaled.jpg', 'AGile Farms Charcuterie Board', '1', '7325', '8124', '2', '60996ab253af5', 'Successful', 'Confirm'),
(4, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '10', 'combo-of-two-layer-bamboo-plant-syngonium-plant-money-plant-original-imafwy5namhhkfve.jpeg', 'Vibrant Green Money Plant  (Pack of 5)', '1', '799', '8124', '2', '60996ab253af5', 'Successful', 'Confirm'),
(5, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '5', 'IMG_4340-scaled.jpg', 'AGile Farms Charcuterie Board', '1', '7325', '7325', '1', '609a675435a4e', 'Successful', 'Confirm'),
(8, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '10', 'combo-of-two-layer-bamboo-plant-syngonium-plant-money-plant-original-imafwy5namhhkfve.jpeg', 'Vibrant Green Money Plant  (Pack of 5)', '1', '799', '799', '1', '609d0da3e6ca0', 'Successful', 'Pending'),
(9, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '8', '24Hour-Timer.jpg', 'Hydroponic Pump or Light Timer', '1', '10000', '10000', '1', '609d15d24fdec', 'Successful', 'Pending'),
(10, 'Piyush Himmatro Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', 'Laxami Naryan Nagar Bhuswal', 'Jalgaon', '425201', 'Mahārāshtra', '1', '9', '6d536ebd086d55002081c8cbbf4676d7-600x503.png', 'In-House Grow Racks', '1', '20000', '20000', '1', '609d76cf52f83', 'Successful', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`) VALUES
(1, 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '+917517090229', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review`, `p_id`, `user_id`) VALUES
(1, 'Good ', '9', '1'),
(2, 'Good ', '9', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_hit`
--
ALTER TABLE `a_hit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_regi`
--
ALTER TABLE `a_regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_i`
--
ALTER TABLE `order_i`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `a_hit`
--
ALTER TABLE `a_hit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `a_regi`
--
ALTER TABLE `a_regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_i`
--
ALTER TABLE `order_i`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
