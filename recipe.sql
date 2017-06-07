-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 11:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'soft drink'),
(3, 'Desert'),
(4, 'Apetizers'),
(5, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `difficulty`
--

CREATE TABLE IF NOT EXISTS `difficulty` (
`id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `difficulty`
--

INSERT INTO `difficulty` (`id`, `type`) VALUES
(1, 'easy'),
(2, 'medium'),
(3, 'hard');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
`id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `recipe_id`, `created_at`) VALUES
(6, 4, 22, '2016-12-28 20:34:12'),
(7, 4, 19, '2016-12-28 20:35:05'),
(8, 6, 18, '2016-12-28 20:36:40'),
(9, 6, 22, '2016-12-28 20:36:49'),
(10, 5, 22, '2016-12-28 20:37:29'),
(11, 5, 17, '2016-12-28 22:00:27'),
(12, 5, 20, '2016-12-28 22:00:42'),
(13, 5, 20, '2016-12-28 22:00:46'),
(14, 5, 21, '2016-12-28 22:00:58'),
(15, 5, 21, '2016-12-28 22:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  `uploaded_by` int(100) NOT NULL,
  `type` enum('regular','special') NOT NULL,
  `description` varchar(100) NOT NULL,
  `difficulty_id` varchar(100) NOT NULL,
  `preparation_time` varchar(100) NOT NULL,
  `cooking_time` varchar(100) NOT NULL,
  `serves` int(100) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `procedures` varchar(500) NOT NULL,
  `upload_time` datetime(6) NOT NULL,
  `recipe_of_the_day` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `category_id`, `uploaded_by`, `type`, `description`, `difficulty_id`, `preparation_time`, `cooking_time`, `serves`, `ingredients`, `procedures`, `upload_time`, `recipe_of_the_day`) VALUES
(17, 'Chef Johns Pumpkin Pie', 3, 1, 'special', 'After many years of experimentation, Ive finally perfected what I think is the ideal formula for a r', '1', '15 min', '45 min', 5, '1 (15 ounce) can pumpkin puree,3 egg yolks 1 large egg, 1 (14 ounce) can sweetened condensed milk, 1 teaspoon ground cinnamon', 'Preheat oven to 425 degrees F (220 degrees C).\r\nWhisk together pumpkin puree, egg yolks, and egg in a large bowl until smooth. Add sweetened condensed milk, cinnamon, ginger, salt, nutmeg, and Chinese 5-spice powder; whisk until thoroughly combined.\r\nFit pie crust in a 9-inch pie plate and crimp edges.', '2016-11-08 14:03:33.000000', 0),
(18, 'Frosted Cranberries', 3, 4, 'special', 'Beautiful sugar coated cranberries can put the finishing touch on your holiday desserts and side dis', '2', '5 min', '15 min ', 2, '2 tablespoons water 1 tablespoon pasteurized egg white or liquid egg substitute 1 (12 ounce) package fresh cranberries 1 cup white sugar', 'In a medium bowl, stir together the water and egg white until blended but not whipped. Coat cranberries with this mixture. Spread the sugar out on a baking sheet, and roll the cranberries in it until they are coated. Dry at room temperature for 2 hours. Use as garnishes for desserts, or eat them plain.', '2016-11-08 14:10:04.000000', 0),
(19, 'Scrumptious Frosted Fudgy Brownies', 2, 4, 'regular', 'I can never eat just one of these melt-in-your-mouth brownies, they are so rich and chocola', '1', '23 min', '40 min', 6, '8 (1 ounce) squares unsweetened baking chocolate 1 cup butter 5 eggs 3 cups white sugar 1 tablespoon vanilla extract', 'Preheat oven to 375 degrees F (190 degrees C). Grease a 13x9-inch baking pan. Place 8 ounces of baking chocolate with 1 cup of butter in a microwave-safe bowl, and microwave on High until the chocolate is soft and the butter has melted, about 2 minutes. Stir to mix.', '2016-11-08 14:12:03.000000', 0),
(20, 'Fancy Brownies', 2, 4, 'regular', 'Fudgy brownie with chocolate covered candies, chocolate chips and toffee bits.', '1', '30 min', '40 min', 5, '1 (18.25 ounce) package chocolate cake mix 1/2 cup melted butter 1/3 cup milk 2 eggs', 'Preheat oven to 350 degrees F (175 degrees C). Grease a 9x13 inch pan. Unwrap chocolate covered caramel candies and set aside.\r\nIn a large bowl, combine the cake mix, melted butter, milk and eggs. Stir with a wooden spoon until well blended. Press half of the mixture or a little bit more evenly into the bottom of the prepared pan.', '2016-11-08 14:15:34.000000', 0),
(21, 'Caramel Brownies ', 2, 4, 'regular', 'Whenever I make these, they are a big hit. DELICIOUS', '3', '20 min', '25 min', 4, '1 (14 ounce) package individually wrapped caramels 2/3 cup evaporated milk 1 (18.25 ounce) package German chocolate cake mix', 'Preheat oven to 350 degrees F (175 degrees C). Grease one 9x13 inch baking dish.\r\nMelt caramels and 1/3 cup of the evaporated milk over very low heat, stirring occasionally until smooth.\r\nCombine cake mix, melted butter, the remaining 1/3 cup evaporated milk, vanilla and nuts. Mix well and spread 1/2 of the batter into the prepared pan.', '2016-11-08 14:18:26.000000', 0),
(22, 'Kentucky Pecan Pie', 3, 4, 'special', 'This pie is a family favorite. I get many requests to make this for our church bake sales', '2', '10 min', '12 min', 5, '1 cup white corn syrup 1 cup packed brown sugar 1/3 teaspoon salt 1/3 cup butter, melted', 'Combine syrup, sugar, salt, and melted butter or margarine. Slightly beat the eggs, and add to sugar mixture. Beat well, and pour into uncooked pie shell. Sprinkle pecans on top.\r\nBake at 350 degrees F (175 degrees C) for 50 to 60 minutes.', '2016-11-09 16:36:05.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `type` enum('admin','user') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_of_the_day` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `type`, `email`, `password`, `user_of_the_day`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '1234', 0),
(2, 'Niloy', 'Saha', 'admin', 'niloy@gmail.com', '1234', 0),
(4, 'Niloy', 'saha Sagor', 'user', 'niloy1@gmail.com', '1234', 1),
(5, 'Mehadi', 'hassan', 'user', 'abc@gmail.com', '1234', 0),
(6, 'cr', '7', 'user', 'cr7@gmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `difficulty`
--
ALTER TABLE `difficulty`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `difficulty`
--
ALTER TABLE `difficulty`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
