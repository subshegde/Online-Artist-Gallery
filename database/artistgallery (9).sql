-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 08:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artistgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist_details`
--

CREATE TABLE `artist_details` (
  `aid` int(11) NOT NULL,
  `aname` varchar(255) DEFAULT NULL,
  `workexperience` int(11) DEFAULT NULL,
  `awardwin` varchar(255) DEFAULT NULL,
  `aaddress` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `contno` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_details`
--

INSERT INTO `artist_details` (`aid`, `aname`, `workexperience`, `awardwin`, `aaddress`, `email_id`, `contno`, `user_name`) VALUES
(1, 'Koushik Hegde', 10, 'Arjuna', 'sirsi ', 'koushik12@gmail.com', '7878675645', 'hegdekoushik');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_details`
--

CREATE TABLE `gallery_details` (
  `gid` int(11) NOT NULL,
  `Gname` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `artistId` int(11) DEFAULT NULL,
  `upload_paint` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `gallery_type_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_details`
--

INSERT INTO `gallery_details` (`gid`, `Gname`, `description`, `artistId`, `upload_paint`, `date`, `gallery_type_id`, `price`, `status`) VALUES
(2, 'Animal painting', 'best animal pic', 1, 'ar.jpeg', '27-07-2022', 6, 2000, 'Sold'),
(3, 'nature art', 'Sunrise nature painting', 1, 'nature_art1.jpg', '28-07-2022', 1, 2750, 'new'),
(4, 'nature art', 'Handpainted Art Painting', 1, 'nature_art2.jpg', '28-07-2022', 1, 1500, 'new'),
(5, 'nature art', '', 1, 'nature_art3.jpg', '28-07-2022', 1, 2300, 'new'),
(7, 'nature art', '', 1, 'nature_art4.jpg', '28-07-2022', 1, 1500, 'new'),
(8, 'nature art', '', 1, 'nature_art5.gif', '28-07-2022', 1, 2900, 'new'),
(9, 'nature art', '', 1, 'nature_art6.jpg', '28-07-2022', 1, 2800, 'new'),
(10, 'nature art', '', 1, 'nature_art7.jpg', '28-07-2022', 1, 2000, 'new'),
(11, 'nature art', '', 1, 'nature_art8.jpg', '28-07-2022', 1, 2900, 'new'),
(12, 'nature art', '', 1, 'nature_art9.jpg', '28-07-2022', 1, 1800, 'Sold'),
(13, 'Glass Painting', '', 1, 'glass1.jpg', '28-07-2022', 2, 3500, 'new'),
(14, 'Glass Painting', 'Handpainted using camel camlin kokuyo Fabrica Acrylic color', 1, 'glass2.jpg', '28-07-2022', 2, 3000, 'new'),
(15, 'Rajastani Arts', '', 1, 'raj3.jpg', '28-07-2022', 3, 900, 'new'),
(17, 'Rajastani Arts', '', 1, 'rajastani2.jpg', '28-07-2022', 3, 700, 'new'),
(18, 'Pencil works', '', 1, 'p1.jpg', '28-07-2022', 5, 2500, 'new'),
(19, 'Pencil works', '', 1, 'p2.jpg', '28-07-2022', 5, 4000, 'Sold'),
(20, 'Pencil works', '', 1, 'p5.jpg', '28-07-2022', 5, 3800, 'new'),
(21, 'Pencil works', '', 1, 'p6.jpg', '28-07-2022', 5, 3000, 'new'),
(22, 'Pencil works', '', 1, 'p7.jpg', '28-07-2022', 5, 3900, 'new'),
(23, 'Pencil works', '', 1, 'p8.jpg', '28-07-2022', 5, 5000, 'new'),
(24, 'Pencil works', '', 1, 'p12.jpeg', '28-07-2022', 5, 4500, 'new'),
(25, 'Pencil works', '', 1, 'p9.jpg', '28-07-2022', 5, 2800, 'new'),
(26, 'Pencil works', '', 1, 'p10.jpg', '28-07-2022', 5, 4000, 'Sold'),
(27, 'Pencil works', '', 1, 'p13.png', '28-07-2022', 5, 4000, 'new'),
(29, 'Pencil works', '', 1, 'p3.jpg', '28-07-2022', 5, 3900, 'new'),
(32, 'Mandala Arts', '', 1, 'm2.jpg', '28-07-2022', 8, 2000, 'new'),
(34, 'Mandala Arts', '', 1, 'm4.jpg', '28-07-2022', 8, 4000, 'new'),
(35, 'Mandala Arts', '', 1, 'm6.jpg', '28-07-2022', 8, 3000, 'new'),
(36, 'Mandala Arts', '', 1, 'm7.jpg', '28-07-2022', 8, 3900, 'Sold'),
(37, 'Mandala Arts', '', 1, 'm11.jpg', '28-07-2022', 8, 2999, 'Sold'),
(38, 'Mandala Arts', '', 1, 'm8.jpg', '28-07-2022', 8, 3500, 'new'),
(40, '', '', 1, '', '28-07-2022', 0, 0, 'new'),
(43, 'Oil Paintings', '', 1, 'IMG_20220728_211819.jpg', '28-07-2022', 6, 3600, 'new'),
(44, 'Oil Paintings', '', 1, 'IMG_20220728_211807.jpg', '28-07-2022', 6, 3000, 'Sold'),
(45, 'Oil Paintings', '', 1, 'IMG_20220728_211755.jpg', '28-07-2022', 6, 1000, 'new'),
(46, 'Oil Paintings', '', 1, 'IMG_20220728_211726.jpg', '28-07-2022', 6, 3700, 'Sold'),
(47, 'Oil Paintings', '', 1, 'IMG_20220728_211706.jpg', '28-07-2022', 6, 2550, 'new'),
(48, 'Oil Paintings', '', 1, 'IMG_20220728_211639.jpg', '28-07-2022', 6, 4000, 'new'),
(49, 'Oil Paintings', '', 1, 'IMG_20220728_211608.jpg', '28-07-2022', 6, 3700, 'new'),
(50, 'Oil Paintings', '', 1, 'IMG_20220728_211549.jpg', '28-07-2022', 6, 2800, 'new'),
(54, 'Oil Paintings', '', 1, 'IMG_20220522_162651.jpg', '30-07-2022', 6, 2500, 'new'),
(56, 'Swarnavalli Shri Gangadarenra Sarasvati swami', '', 1, 'IMG_20220522_162737.jpg', '30-07-2022', 6, 3500, 'new'),
(57, 'Tiger Paint', '', 1, 'IMG_20220522_162721.jpg', '30-07-2022', 6, 3000, 'new'),
(58, 'Oil Paintings', '', 1, 'IMG_20220522_162747.jpg', '30-07-2022', 6, 3000, 'new'),
(59, 'Oil Paintings', '', 1, 'IMG_20220522_162923.jpg', '30-07-2022', 6, 3500, 'new'),
(60, 'Anjaneya', '', 1, 'IMG_20220522_163100.jpg', '30-07-2022', 6, 4000, 'new'),
(61, 'Oil Paintings', '', 1, 'IMG_20220522_163117.jpg', '30-07-2022', 6, 4000, 'new'),
(62, 'Oil Paintings', '', 1, 'IMG_20220522_163136.jpg', '30-07-2022', 6, 3000, 'new'),
(63, 'Oil Paintings', '', 1, 'IMG_20220522_163233.jpg', '30-07-2022', 6, 3000, 'Sold'),
(64, 'Oil Paintings', '', 1, 'IMG_20220522_163248.jpg', '30-07-2022', 6, 4000, 'new'),
(65, 'Oil Paintings', '', 1, 'IMG_20220522_163300.jpg', '30-07-2022', 6, 4700, 'new'),
(66, 'Oil Paintings', '', 1, 'IMG_20220522_163322.jpg', '30-07-2022', 6, 4500, 'new'),
(67, 'Oil Paintings', '', 1, 'IMG_20220522_163334.jpg', '30-07-2022', 6, 3900, 'new'),
(68, 'Oil Paintings', '', 1, 'IMG_20220522_163346.jpg', '30-07-2022', 6, 4690, 'new'),
(69, 'Oil Paintings', '', 1, 'IMG_20220522_163359.jpg', '30-07-2022', 6, 4770, 'new'),
(70, 'Eye Sketch', '', 1, 'IMG_20220522_185847.jpg', '30-07-2022', 5, 4000, 'new'),
(71, 'APJ Abdul Kalam ', '', 1, 'IMG_20220522_185750.jpg', '30-07-2022', 10, 3000, 'new'),
(72, 'Shiva Painting', '', 1, 'IMG_20220522_163203.jpg', '30-07-2022', 6, 3900, 'Sold'),
(73, 'Joker Oil Painting', '', 1, 'IMG_20220522_163216.jpg', '30-07-2022', 6, 3500, 'new'),
(74, 'Oil Paintings', '', 1, 'IMG_20220522_163411.jpg', '30-07-2022', 6, 3000, 'new'),
(75, 'Cartoon art works', '', 1, 'f1.jpg', '30-07-2022', 10, 3900, 'new'),
(76, 'Mandala Arts', '', 1, 'm13.jpg', '15-08-2022', 8, 1000, 'new'),
(77, 'Mandala Arts', '', 1, 'm1.jpg', '15-08-2022', 8, 2000, 'new'),
(79, 'nature art', '', 1, 'il_fullxfull.2200650334_n15v.webp', '15-08-2022', 1, 3000, 'new'),
(80, 'nature art', '', 1, 'Mohd-Ishaq-12-x-12-inches-Acrylic-on-canvas-5 (1).jpg', '15-08-2022', 1, 4000, 'new'),
(81, 'nature art', '', 1, 'OIP (1).jfif', '15-08-2022', 1, 5000, 'new'),
(82, 'nature art', '', 1, 'OIP (2).jfif', '15-08-2022', 1, 4500, 'new'),
(83, 'nature art', '', 1, 'OIP (1).jfif', '15-08-2022', 1, 5000, 'new'),
(84, 'nature art', '', 1, 'OIP (3).jfif', '15-08-2022', 1, 3000, 'new'),
(85, 'nature art', '', 1, 'OIP (4).jfif', '15-08-2022', 1, 5500, 'new'),
(86, 'nature art', '', 1, 'OIP (5).jfif', '15-08-2022', 1, 5000, 'new'),
(87, 'nature art', '', 1, 'OIP.jfif', '15-08-2022', 1, 5000, 'new'),
(88, 'nature art', '', 1, 'R (1).jfif', '15-08-2022', 1, 4900, 'new'),
(89, 'nature art', '', 1, 'R (2).jfif', '15-08-2022', 1, 6000, 'new'),
(90, 'nature art', '', 1, 'R (3).jfif', '15-08-2022', 1, 5000, 'new'),
(91, 'nature art', '', 1, 'R.jfif', '15-08-2022', 1, 4800, 'Sold'),
(92, 'Pencil works', '', 1, 'mr.been.jpg', '15-08-2022', 5, 5000, 'new'),
(93, 'Pencil works', '', 1, 'mrbeen.jpg', '15-08-2022', 5, 7000, 'new'),
(94, 'Oil Paintings', '', 1, 'IMG_20220815_165216.jpg', '15-08-2022', 6, 3000, 'new'),
(95, 'Oil Paintings', '', 1, 'IMG_20220815_165231.jpg', '15-08-2022', 6, 4000, 'new'),
(96, 'Oil Paintings', '', 1, 'IMG_20220815_165245.jpg', '15-08-2022', 6, 5000, 'new'),
(97, 'Oil Paintings', '', 1, 'IMG_20220815_165304.jpg', '15-08-2022', 6, 3000, 'new'),
(98, 'Oil Paintings', '', 1, 'IMG_20220815_165321.jpg', '15-08-2022', 6, 3000, 'Sold'),
(99, 'Yash and Ambarish Photo', '', 1, 'IMG_20220815_165337.jpg', '15-08-2022', 6, 7000, 'new'),
(100, 'color paint', '', 1, 'IMG_20220815_165352.jpg', '15-08-2022', 6, 4000, 'new'),
(101, 'Elephant image', '', 1, 'IMG_20220815_165404.jpg', '15-08-2022', 6, 4000, 'new'),
(102, 'MS Dhoni', '', 1, 'IMG_20220815_165501.jpg', '15-08-2022', 10, 6000, 'new'),
(103, 'color painting', '', 1, 'IMG_20220815_165515.jpg', '15-08-2022', 6, 3000, 'new'),
(104, 'Kicha Sudeepa', '', 1, 'IMG_20220815_165529.jpg', '15-08-2022', 6, 7000, 'new'),
(105, 'color paint', '', 1, 'IMG_20220815_165541.jpg', '15-08-2022', 6, 4000, 'new'),
(106, 'Jackie Chan photo', '', 1, 'IMG_20220815_165552.jpg', '15-08-2022', 10, 4000, 'new'),
(107, 'Albert Einstein photo', '', 1, 'IMG_20220815_165433.jpg', '15-08-2022', 10, 4000, 'new'),
(108, 'color painting', '', 1, 'IMG_20220815_165602.jpg', '15-08-2022', 6, 6000, 'new'),
(109, 'Rakshit Shetty image', '', 1, 'IMG_20220815_165612.jpg', '15-08-2022', 6, 5000, 'Sold'),
(110, 'Kashinath', '', 1, 'IMG_20220815_165621.jpg', '15-08-2022', 6, 3000, 'Sold'),
(111, 'Jaggesh', '', 1, 'IMG_20220815_165634.jpg', '15-08-2022', 6, 3000, 'new'),
(112, 'Darshan Tugudeepa', '', 1, 'IMG_20220815_165645.jpg', '15-08-2022', 6, 4000, 'new'),
(113, 'Rajkumar', '', 1, 'IMG_20220815_165702.jpg', '15-08-2022', 6, 7000, 'new'),
(114, 'color paint', '', 1, 'IMG_20220815_165732.jpg', '15-08-2022', 6, 7000, 'new'),
(115, 'Yash photo', '', 1, 'IMG_20220815_165747.jpg', '15-08-2022', 6, 6900, 'new'),
(116, 'Baba photo', '', 1, 'IMG_20220815_165831.jpg', '15-08-2022', 6, 7000, 'new'),
(117, 'Virat Kohli funny image', '', 1, 'IMG_20220815_165420.jpg', '15-08-2022', 10, 6000, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `gtype_details`
--

CREATE TABLE `gtype_details` (
  `gallery_type_id` int(11) NOT NULL,
  `gtype_Name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gtype_details`
--

INSERT INTO `gtype_details` (`gallery_type_id`, `gtype_Name`, `description`) VALUES
(1, 'Nature Art', 'The beauty of nature abounds all around us. Handpainted nature works'),
(2, 'Glass Paint', 'Handpainted using Camel Camlin Kokuyo Fabrica Acrylic Pearl Color'),
(3, 'Rajastani art', 'One of the best Art in India'),
(5, 'Pencil Works', 'One of  the best new paint'),
(6, 'Oil paintings', 'Best Art '),
(8, 'Mandala Arts', ' Mandala arts using black , blue and other pens'),
(15, 'Cartoon works', 'Funny photos'),
(19, ' Nature Art', 'hahjajaa'),
(20, ' Mandala Arts', ' Mandala Arts');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `hintquest` varchar(255) DEFAULT NULL,
  `hintans` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`, `type`, `hintquest`, `hintans`, `status`) VALUES
('admin', 'Admin@123', 'admin', 'who i am', 'admin', 'Active'),
('hegdekoushik', 'Koushik@123', 'artist', 'Enetr Your Email ID', 'koushik12@gmail.com', 'active'),
('pkh', 'Prasanna@1234', 'user', 'Enetr Your Email ID', 'pk12@gmail.com', 'active'),
('shravan', 'Shravan@123', 'user', 'Enetr Your Email ID', 'shravan123@gmail.com', 'active'),
('arjun', 'Arjun@123', 'user', 'Enetr Your Email ID', 'arjun12@gmail.com', 'active'),
('rashmi', 'Rashmi@123', 'user', 'Enetr Your Email ID', 'rashmi12@gmail.com', 'active'),
('sandeep', 'Sandeep@123', 'user', 'Enetr Your Email ID', 'sandeep12@gmail.com', 'active'),
('disha', 'Disha@123', 'user', 'Enetr Your Email ID', 'disha12@gmail.com', 'active'),
('abhi', 'Abhi@123', 'user', 'Enetr Your Email ID', 'abhi12@gmail.com', 'active'),
('pranav', 'Pranav@123', 'user', 'Enetr Your Email ID', 'pranav12@gmail.com', 'active'),
('pavan', 'Pavan@123', 'user', 'Enetr Your Email ID', 'pavan12@gmail.com', 'active'),
('karna', 'Karna@123', 'user', 'Enetr Your Email ID', 'karna12@gmail.com', 'active'),
('tarun', 'Tarun@123', 'user', 'Enetr Your Email ID', 'tarun12@gmail.com', 'active'),
('subrahmanya', 'Subrahmanya@123', 'user', 'Enetr Your Email ID', 'sub12@gmail.com', 'active'),
('puneet', 'Puneet@123', 'user', 'Enetr Your Email ID', 'puneet12@gmail.com', 'active'),
('tarun', 'Madhu@123', 'user', 'Enetr Your Email ID', 'madhu12@gmail.com', 'active'),
('hegdekoushik', 'Nagu@123', 'artist', 'Enetr Your Email ID', 'nagu12@gmail.com', 'active'),
('pratik', 'Pratik@123', 'user', 'Enetr Your Email ID', 'shravan123@gmail.com', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `materials_details`
--

CREATE TABLE `materials_details` (
  `mid` int(11) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `material_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials_details`
--

INSERT INTO `materials_details` (`mid`, `material_name`, `material_description`) VALUES
(7, 'Isomars Drawing Brush', 'Finest quality golden taklon hair with wooden handle\r\n'),
(8, 'White gel pen', '0.8mm Line Drawing pen allows details drawing sketching coloring and illustration. Great pen for white ,toned and black paper.'),
(9, 'Drawing sheets', 'Acid free LRS cold pressed water color sheets , suitable for water color , acrylics,pen and ink,pastels '),
(10, 'Graphite pencils', 'Made of lightweight wood and superior leads of finely ground graphite and clay which are break resistant and gives comfortable grip.'),
(11, 'Woodless charcoal pencils', 'Made with superior grade charcoal these woodless pencils are perfect for detailing , sketching and shading.'),
(12, 'Pastel pencils', 'Superb for fine detail work '),
(13, 'Kneadable Eraser', 'Used while working with pastels,charcoals or graphite powders. It absorbs chalks by blotting and wiping the surface without damaging the drawing papers.'),
(14, 'Oil paints', 'Oil based colors'),
(15, 'Black pen', 'Waterproof Archival ink Micro Fine Liner Pen'),
(16, 'Blending stump', 'Made from sheets of peper that are tightly wound and shaped to a point . Wise way to achieve control while keeping your fingers clean when looking for a way to blend.'),
(17, 'Cotton Earbuds', 'Echo friendly Biodegradable wooden cotton earbuds.Used for Shading.');

-- --------------------------------------------------------

--
-- Table structure for table `material_purchase`
--

CREATE TABLE `material_purchase` (
  `mpid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `material_purchase_rate` varchar(255) NOT NULL,
  `material_purchase_date` date NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_purchase`
--

INSERT INTO `material_purchase` (`mpid`, `mid`, `material_purchase_rate`, `material_purchase_date`, `aid`) VALUES
(3, 9, '890', '2022-06-12', 3),
(4, 3, '345', '2022-07-12', 8),
(6, 8, '195', '2022-07-30', 1),
(7, 9, '500', '2022-07-30', 1),
(8, 10, '201', '2022-07-30', 1),
(9, 11, '399', '2022-07-30', 1),
(10, 12, '4999', '2022-07-30', 1),
(11, 13, '200', '2022-07-30', 1),
(12, 14, '400', '2022-07-30', 1),
(13, 15, '330', '2022-07-30', 1),
(14, 16, '99', '2022-07-30', 1),
(15, 17, '100', '2022-08-15', 1),
(16, 14, '350', '2022-08-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `material_used`
--

CREATE TABLE `material_used` (
  `muid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `used_date` date NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_used`
--

INSERT INTO `material_used` (`muid`, `mid`, `quantity`, `used_date`, `aid`) VALUES
(4, 9, '5', '2022-06-21', 2),
(5, 10, '3', '2022-07-06', 3),
(6, 9, '5', '2022-07-13', 2),
(7, 5, '8', '2022-07-15', 7),
(8, 3, '9', '0000-00-00', 1),
(9, 5, '10', '2022-07-25', 17),
(10, 5, 'half glass', '2022-07-17', 7),
(11, 4, 'dd', '2022-07-15', 22),
(12, 3, '2', '2022-07-13', 1),
(13, 7, '6', '2022-07-30', 1),
(14, 10, '10', '2022-08-09', 1),
(15, 14, '3', '2022-08-11', 1),
(16, 9, '30', '2022-08-11', 1),
(17, 15, '10', '2022-08-11', 1),
(18, 8, '12', '2022-08-11', 1),
(19, 10, '15', '2022-08-11', 1),
(20, 12, '16', '2022-08-11', 1),
(21, 11, '17', '2022-08-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `amt` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `payment_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `signature_hash` int(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pid`, `uid`, `gid`, `amt`, `date`, `payment_id`, `order_id`, `signature_hash`, `created_at`, `p_status`) VALUES
(1, 1, 1, 3000, '2022-07-27', 'pay_JyRN0hskrPSLaC', 'order_JyRMfVJ2wXnYiC', 0, '2022-07-27 15:33:40', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(2, 1, 2, 2000, '2022-07-27', 'pay_JyRsBAwbEmsGrJ', 'order_JyRrFt8EteLOOc', 94, '2022-07-27 16:00:58', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(3, 1, 30, 2000, '2022-07-28', 'pay_JyrvY8Nq1RsDfL', 'order_JyrvHp5fq1Extq', 1, '2022-07-29 09:18:56', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(4, 1, 31, 1000, '2022-07-29', 'pay_Jz84zBv3BnIBXH', 'order_Jz84aGjAo5otqg', 0, '2022-07-29 09:19:02', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(5, 1, 44, 3000, '2022-08-02', 'pay_K0qms1j2OQoNzt', 'order_K0qmKzu0UxZ1B4', 7, '2022-08-15 08:14:20', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(6, 2, 46, 3700, '2022-08-15', 'pay_K5qAH9J17SuJjk', 'order_K5qA5138zNT1Nk', 22, '2022-08-15 08:23:19', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(7, 3, 72, 3900, '2022-08-15', 'pay_K5s1h652hR4z5u', 'order_K5s1Vq3ICLzoOb', 73500000, '2022-08-15 10:28:35', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(8, 4, 12, 1800, '2022-08-15', 'pay_K5sAFk90UcDNdi', 'order_K5sAAGHQ60HmTC', 0, '2022-08-15 10:28:39', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(9, 5, 19, 4000, '2022-08-15', 'pay_K5sDOCkRmQatbo', 'order_K5sDDpm1N7CJUf', 0, '2022-08-15 10:28:42', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(10, 6, 26, 4000, '2022-08-15', 'pay_K5sJVFi4SnA8dS', 'order_K5sJLbIDULUAjb', 0, '2022-08-15 10:28:45', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(11, 7, 110, 3000, '2022-08-16', 'pay_K6CRdi7Q37zd9f', 'order_K6CRPqq3uvYDK7', 0, '2022-08-16 06:19:42', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(12, 8, 36, 3900, '2022-08-16', 'pay_K6Ca5Utym3DBMp', 'order_K6CZuVgK7a2Eti', 0, '2022-08-16 06:19:46', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(13, 9, 37, 2999, '2022-08-16', 'pay_K6Cdee3RPiLyv7', 'order_K6CdUrJ87uQ9UR', 0, '2022-08-16 06:19:52', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(14, 10, 98, 3000, '2022-08-16', 'pay_K6Cyq4GIu3rpHA', 'order_K6Cyfoaw1EdRxe', 97, '2022-08-16 06:41:27', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(15, 11, 91, 4800, '2022-08-16', 'pay_K6Nz60DwO6esnU', 'order_K6NyuGidFjB3Sc', 32347, '2022-08-16 17:27:59', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(16, 12, 109, 5000, '2022-08-17', 'pay_K6awpBdxJSiYRZ', 'order_K6awdNi2Xv0wZt', 20, '2022-08-17 06:32:18', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address'),
(17, 13, 63, 3000, '2022-08-17', 'pay_K6blO50fkbMakL', 'order_K6blErpOgtKecB', 9, '2022-08-17 06:58:12', 'Your Paymint Is Accepted.. and Ur Painting Order Reach Within 3 Days to Ur Address');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rid` int(11) NOT NULL,
  `gid` int(11) DEFAULT NULL,
  `ratings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rid`, `gid`, `ratings`) VALUES
(1, 14, 43),
(2, 1, 15),
(3, 2, 45),
(4, 20, 10),
(5, 13, 5),
(6, 4, 30),
(7, 3, 30),
(8, 113, 5),
(9, 17, 5),
(10, 5, 35),
(11, 8, 35),
(12, 18, 15),
(13, 19, 25),
(14, 7, 25),
(15, 12, 15),
(16, 15, 10),
(17, 9, 25),
(18, 10, 20),
(19, 24, 5),
(20, 22, 15),
(21, 26, 10),
(22, 21, 5),
(23, 11, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contno` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`uid`, `firstname`, `lastname`, `address`, `contno`, `email_id`, `user_name`) VALUES
(1, 'Prasanna', 'Hegde', 'sirsi', '9675645612', 'pk12@gmail.com', 'pkh'),
(2, 'Shravan', 'reddy', 'dharwad', '9675645612', 'shravan123@gmail.com', 'shravan'),
(3, 'Arjun', 'Mayya', 'Shivamogga', '9876543423', 'arjun12@gmail.com', 'arjun'),
(4, 'Rashmi', 'Bhat', 'Sirsi', '9643212345', 'rashmi12@gmail.com', 'rashmi'),
(5, 'Sandeep', 'Hegde', 'Sirsi', '8978675645', 'sandeep12@gmail.com', 'sandeep'),
(6, 'Disha', 'Hegde', 'Siddapura', '9809908778', 'disha12@gmail.com', 'disha'),
(7, 'Abhi', 'Sagar', 'Sagar', '9878675645', 'abhi12@gmail.com', 'abhi'),
(8, 'Pranav', 'Shetty', 'Kundapur', '9878675643', 'pranav12@gmail.com', 'pranav'),
(9, 'Pavan', 'Udup', 'Mysore', '8998781221', 'pavan12@gmail.com', 'pavan'),
(10, 'Karna', 'Bhat', '  Bidralli po:neggu tq:yallpura(UK)', '9809789065', 'karna12@gmail.com', 'karna'),
(11, 'Tarun', 'Hegde', 'Nerladda po:Mattigar Tq:Sirsi (UK) 581450', '8989878767', 'tarun12@gmail.com', 'tarun'),
(12, 'Subrahmanya', 'Hegde', 'Dodmane Po:mattigar Tq:Sirsi (uK)581450', '9089785612', 'sub123@gmail.com', 'subrahmanya'),
(13, 'Puneet', 'Rajkumar', '249,18th Cross Rd,Sadashiva nagar, Aramane Nagar, Bengaluru ,Karnataka 560080', '9809124354', 'puneet12@gmail.com', 'puneet');

-- --------------------------------------------------------

--
-- Table structure for table `user_paint_upload`
--

CREATE TABLE `user_paint_upload` (
  `upuid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `paint_name` varchar(255) NOT NULL,
  `paint_description` varchar(255) NOT NULL,
  `paint_upload` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `upload_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_paint_upload`
--

INSERT INTO `user_paint_upload` (`upuid`, `uid`, `aid`, `paint_name`, `paint_description`, `paint_upload`, `upload_date`, `upload_status`) VALUES
(3, 3, 1, 'My photo', 'Pencil Sketch', 'arjun.jpg', '2022-08-15', 'New'),
(4, 4, 1, 'my image', 'Oil painting', 'rash.jpg', '2022-08-15', 'New'),
(5, 5, 1, 'Wedding photo', 'Cartoon image', 'sandy.jpg', '2022-08-15', 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist_details`
--
ALTER TABLE `artist_details`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `gallery_details`
--
ALTER TABLE `gallery_details`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `gtype_details`
--
ALTER TABLE `gtype_details`
  ADD PRIMARY KEY (`gallery_type_id`),
  ADD UNIQUE KEY `gtype_Name` (`gtype_Name`);

--
-- Indexes for table `materials_details`
--
ALTER TABLE `materials_details`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `material_purchase`
--
ALTER TABLE `material_purchase`
  ADD PRIMARY KEY (`mpid`);

--
-- Indexes for table `material_used`
--
ALTER TABLE `material_used`
  ADD PRIMARY KEY (`muid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_paint_upload`
--
ALTER TABLE `user_paint_upload`
  ADD PRIMARY KEY (`upuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist_details`
--
ALTER TABLE `artist_details`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery_details`
--
ALTER TABLE `gallery_details`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `gtype_details`
--
ALTER TABLE `gtype_details`
  MODIFY `gallery_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `materials_details`
--
ALTER TABLE `materials_details`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `material_purchase`
--
ALTER TABLE `material_purchase`
  MODIFY `mpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `material_used`
--
ALTER TABLE `material_used`
  MODIFY `muid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_paint_upload`
--
ALTER TABLE `user_paint_upload`
  MODIFY `upuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
