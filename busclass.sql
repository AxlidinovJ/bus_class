-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 07:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `call`
--

CREATE TABLE `call` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `address` text NOT NULL,
  `number` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call`
--

INSERT INTO `call` (`id`, `text`, `address`, `number`, `email`) VALUES
(1, 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis accumsan', '1234 Heaven Stress, Beverly Hill.', 'Office: (800) 123 456 789\r\nMy (+998) 91 157 77 69', 'Email: email@website.com\r\nSupport: support@website.com\r\nAdmin JamshidbekAxlidinovtatu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `meet`
--

CREATE TABLE `meet` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '1.330x414.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meet`
--

INSERT INTO `meet` (`id`, `name`, `company`, `img`) VALUES
(1, 'Andrew Cusik', 'Marketing Lead', '1.330x414.jpeg'),
(2, 'Jane Anderson', 'Company CEO', '1.330x414.jpeg'),
(3, 'Jamshidbek', 'iTech', '1.330x414.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `time`) VALUES
(1, 'skad', 'kmldm2jnkas@jkansd.iz', 'ndj', '2022-02-08 08:42:53'),
(2, 'JamshidbekAxlidinov', 'AxlidinovJamshidbek2003@gmail.com', 'ss', '2022-02-08 08:44:31'),
(3, 'JamshidbekAxlidinov', 'axlidinovj@gmail.com', 'jsadja', '2022-02-08 11:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'news-no.jpg',
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `button_name` varchar(30) NOT NULL DEFAULT 'Read Full Story',
  `button_link` varchar(255) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `img`, `title`, `content`, `button_name`, `button_link`) VALUES
(1, 'CvrcEjuPI8.jpg', 'Work Environment JK', 'Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.', 'Read Full Story', '#'),
(2, 'news-no.jpg', 'Web Development JK', 'Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin Quisque vitae sodales lectus.', 'Read Full Story', '#');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `price_item` text NOT NULL,
  `button_name` varchar(30) NOT NULL DEFAULT 'get started',
  `button_link` varchar(255) NOT NULL DEFAULT '#',
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `title`, `price`, `month`, `price_item`, `button_name`, `button_link`, `status`) VALUES
(1, 'Starter Plan', 19, '1Months', 'Modern & Creative Design\r\nPremium Plugins\r\nClean Code\r\nResponsive Layouts\r\nGoogle Fonts\r\nHighly Customizable', 'get started', '#', '0'),
(2, 'Business Plan', 79, '6Months', 'Modern & Creative Design\r\nPremium Plugins\r\nClean Code\r\nResponsive Layouts\r\nGoogle Fonts\r\nHighly Customizable', 'get started', '#', '1'),
(3, 'Premium Plan', 149, '12Months', 'Modern & Creative Design\r\nPremium Plugins\r\nClean Code\r\nResponsive Layouts\r\nGoogle Fonts\r\nHighly Customizable', 'get started', '#', '0');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `name`) VALUES
(1, ' Graphic Design '),
(2, 'Web Design'),
(3, 'SEO'),
(4, 'Marketing ');

-- --------------------------------------------------------

--
-- Table structure for table `project_img`
--

CREATE TABLE `project_img` (
  `id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_img`
--

INSERT INTO `project_img` (`id`, `catagory_id`, `img`) VALUES
(1, 3, 'HTFJfAQhKz.png'),
(6, 2, 'b-2EoIyzSR.png'),
(8, 2, '1-UC9j8yb2.jpg'),
(9, 1, 'KaWiciCpLI.jpg'),
(10, 2, 'mArZCk6Md4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `subtext` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `button_name` varchar(200) NOT NULL DEFAULT 'learn more',
  `button_link` varchar(255) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `bg`, `subtext`, `text`, `button_name`, `button_link`) VALUES
(1, 'E6W2bVymrU.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Grow Your Business With Us', 'Kirish', '#'),
(2, '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Watch Our Success Story', 'Hozir boshlash', 'https://www.youtube.com/watch?v=7e90gBu4pas'),
(3, '2.jpg', '#', 'Maecenas nec odio et ante tincidunt tempus Donecbero vitae sapien ut libero nenatis.', 'learn more', '#');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'fas fa-laptop',
  `title` varchar(20) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `img`, `title`, `subtitle`) VALUES
(1, 'fas fa-laptop', 'Creative Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu'),
(2, 'fas fa-chart-bar', 'SEO Marketing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu'),
(3, 'fas fa-edit', 'Content Writing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu'),
(6, 'fas fa-edit', 'Taxrirlash', 'sakad as wedewj shekas ejn wedi asd wedjda');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text NOT NULL,
  `button_name` varchar(255) NOT NULL DEFAULT 'Learn more',
  `button_link` varchar(255) NOT NULL DEFAULT '#',
  `bg` varchar(255) NOT NULL DEFAULT 'no-img.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `year`, `title`, `subtitle`, `button_name`, `button_link`, `bg`) VALUES
(1, 'Serving Since 1930', 'Classic Business', 'We are a new Digital Agency based in USA. We have over 10 years of experience about designing websitesand mobile apps. \r\n                     ', 'Learn more', '#', 'waa0cJi1MF.jpg'),
(2, 'Serving Since 1930', 'Digital Agency', 'We are a new Digital Agency based in USA. We have over 10 years of experience about designing websitesand mobile apps. \r\n                     ', 'Learn more', '#', 'VJZ1hSVqpy.jpg'),
(6, '20202', 'Classic Business jk', 'Jamshidbek Axlidinov We are a new Digital Agency based in USA. We have over 10 years of experience about designing websitesand mobile apps.', 'Learn more', '#', 'eHWf7W_Su_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id` int(11) NOT NULL,
  `completed` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `feedbacks` int(11) NOT NULL,
  `clients` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`id`, `completed`, `hours`, `feedbacks`, `clients`, `title`, `sub_title`) VALUES
(1, 5480, 1465, 612, 735, 'Statistical Numbers', 'Vivamus ut scelerisque tellus. Morbi egestas neque et lorem sodales faucibus. Etiam efficitur vehicula commodo. Curabitur ac libero ullamcorper,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call`
--
ALTER TABLE `call`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meet`
--
ALTER TABLE `meet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `project_img`
--
ALTER TABLE `project_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catagory_id` (`catagory_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `call`
--
ALTER TABLE `call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meet`
--
ALTER TABLE `meet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_img`
--
ALTER TABLE `project_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_img`
--
ALTER TABLE `project_img`
  ADD CONSTRAINT `project_img_ibfk_1` FOREIGN KEY (`catagory_id`) REFERENCES `project_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
