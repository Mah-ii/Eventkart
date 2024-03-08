-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 02:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `birthday_service`
--

CREATE TABLE `birthday_service` (
  `id` int(11) NOT NULL,
  `service_type` varchar(70) NOT NULL,
  `image` text NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthday_service`
--

INSERT INTO `birthday_service` (`id`, `service_type`, `image`, `price`) VALUES
(1, 'Cake-Quake Fiesta', 'uploads/WhatsApp Image 2024-02-26 at 7.26.47 PM (2).jpeg', 60000),
(2, 'Balloon Bonanza Bash', 'uploads/WhatsApp Image 2024-03-01 at 3.44.20 PM.jpeg', 100000),
(3, 'Giggles & Gumdrops Gala', 'uploads/WhatsApp Image 2024-03-01 at 3.44.19 PM.jpeg', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `event_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event_master`
--

CREATE TABLE `calendar_event_master` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `calendar_event_master`
--

INSERT INTO `calendar_event_master` (`event_id`, `event_name`, `event_start_date`, `event_end_date`) VALUES
(1, '', '1970-01-01', '1970-01-01'),
(2, '', '1970-01-01', '1970-01-01'),
(4, 'defence', '2023-12-31', '2024-01-03'),
(5, 'wedding', '2024-01-12', '2024-01-12'),
(6, 'final exam', '2024-01-04', '2024-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `features_list`
--

CREATE TABLE `features_list` (
  `feature_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features_list`
--

INSERT INTO `features_list` (`feature_id`, `category_id`, `service_type`, `title`, `description`) VALUES
(24, 0, 'Enchanting Unions Packages', 'Venue of Enchantment:', 'A breathtaking venue set in a picturesque location, providing a romantic backdrop for your special day. '),
(25, 0, 'Enchanting Unions Packages', 'Personalized Wedding Planning:', 'We, a dedicated wedding planner to guide you through every step of the planning process. '),
(26, 0, 'Enchanting Unions Packages', 'Fairy-tale Decor', 'Transform the venue into a magical wonderland with enchanting decor.'),
(27, 0, 'Enchanting Unions Packages', 'Gourmet Culinary Delights', 'Indulge in a culinary journey with a customized menu crafted to delight your taste buds'),
(28, 0, 'Enchanting Unions Packages', 'Photography and Videography', 'Capture every moment of your enchanting union with a professional photographer and videographer'),
(29, 0, 'Harmony Haven Bundles', 'Floral Fantasy', 'A lavish display of fresh flowers, from the bridal bouquet to the ceremony arch and reception centerpieces.'),
(30, 0, 'Harmony Haven Bundles', 'Bespoke Wedding Stationery', 'Receive personalized wedding invitations, programs, and other stationery that reflect the enchanting theme of your union'),
(31, 0, 'Harmony Haven Bundles', 'Live Acoustic Music', 'Enhance the peaceful ambiance with live acoustic music.'),
(32, 0, 'Harmony Haven Bundles', 'Mindful Photography', 'Capture the essence of your harmonious union with a professional photographer.'),
(33, 0, 'Harmony Haven Bundles', 'Tranquil Venue Setting', 'A serene and harmonious venue nestled in nature or a peaceful location, providing a tranquil backdrop for your wedding day'),
(34, 0, 'Harmony Haven Bundles', 'Day-of Coordination', 'A professional coordinator to manage the details on the day of the wedding, ensuring everything runs smoothly.'),
(35, 0, 'Whispering Willows Celebrations', 'Woodland-Inspired Venue', 'Exchange vows in a magical setting surrounded by whispering willow trees and lush greenery.'),
(36, 0, 'Whispering Willows Celebrations', 'Dedicated Wedding Planner', 'A professional wedding planner to assist you in creating a celebration that reflects the charm of whispering willows.'),
(37, 0, 'Whispering Willows Celebrations', 'Enchanted Forest Decor', 'Transform your venue into an enchanted forest with whimsical decor.'),
(38, 0, 'Whispering Willows Celebrations', 'Bespoke Floral Arrangements', 'Adorn your celebration with bespoke floral arrangements inspired by the beauty of willow trees. '),
(39, 0, 'Whispering Willows Celebrations', 'Magical Photography and Videography', 'Capture the mystical moments with a professional photographer and videographer'),
(40, 0, 'Whispering Willows Celebrations', 'Outdoor Lounge Areas', 'Create cozy outdoor lounge areas where guests can relax and enjoy the natural surroundings.'),
(41, 0, 'Radiant Vows Packages', 'Luxurious Venue with Radiant Views', 'Choose a stunning venue with breathtaking views, capturing the essence of radiance.'),
(42, 0, 'Radiant Vows Packages', 'Expert Wedding Planning Services', 'Benefit from the expertise of a seasoned wedding planner who will assist you in creating a radiant celebration. '),
(43, 0, 'Radiant Vows Packages', 'Glamorous Decor and Lighting', 'Elevate the ambiance with glamorous decor featuring luxurious details and radiant lighting.'),
(44, 0, 'Radiant Vows Packages', 'Exquisite Floral Design', 'Delight in the beauty of exquisite floral arrangements that add a touch of opulence to your celebration.'),
(45, 0, 'Radiant Vows Packages', 'Culinary Excellence', 'Indulge in a culinary experience of excellence with a gourmet menu designed to tantalize the taste buds.'),
(46, 0, 'Radiant Vows Packages', 'Live Entertainment Extravaganza', 'The entertainment is curated to keep the energy high and the celebration vibrant.\r\n'),
(47, 0, 'Radiant Vows Packages', 'VIP Lounge and Seating', 'Create a VIP experience for you and your guests with an exclusive lounge area '),
(48, 0, 'Timeless Treasures Bundle', 'Elegant Historic Venue', 'Choose a venue with timeless charm, such as a historic mansion, castle, or a venue with classic architectural features. '),
(49, 0, 'Timeless Treasures Bundle', 'Experienced Wedding Coordination', 'Benefit from the guidance of an experienced wedding coordinator who specializes in timeless celebrations.'),
(50, 0, 'Timeless Treasures Bundle', 'Classic Decor Elements', 'Enhance the venue with classic decor elements that stand the test of time. '),
(51, 0, 'Timeless Treasures Bundle', 'Graceful Floral Designs', 'Adorn your celebration with graceful floral designs that evoke a sense of timeless beauty. '),
(52, 0, 'Timeless Treasures Bundle', 'Live Classical Music Ensemble', 'The timeless melodies create a refined and sophisticated ambiance throughout your celebration.'),
(53, 0, 'Timeless Treasures Bundle', 'Traditional Culinary Delights', 'Indulge in a menu featuring traditional culinary delights that appeal to a classic palate.'),
(54, 0, 'Timeless Treasures Bundle', 'Timeless Photography and Videography', 'Capture the essence of your timeless celebration with a professional photography and videography team'),
(55, 0, 'Timeless Treasures Bundle', 'Customized Vintage-Inspired Stationery', 'Receive a suite of vintage-inspired stationery, including invitations, programs, and place cards. '),
(56, 0, 'Timeless Treasures Bundle', 'Time-Honored Ceremony Rituals', 'Incorporate time-honored ceremony rituals or traditions that add a sense of depth and meaning to your vows.'),
(60, 0, 'Cake-Quake Fiesta', 'Cake Delight', 'Customized birthday cake designed to induce a \"cake-quake\" of delight.'),
(61, 0, 'Cake-Quake Fiesta', 'Quirk-tastic Photo Booth ', 'Photo booth with quirky props and backdrops.'),
(62, 0, 'Cake-Quake Fiesta', 'iggle-Inducing Goodie Bags', 'Fun-filled goodie bags for all attendees.'),
(63, 0, 'Cake-Quake Fiesta', 'Laughing Lemonade & Snacks Bar ', 'Refreshing lemonade station with assorted snacks.'),
(64, 0, 'Balloon Bonanza Bash', 'Balloon Artist Extravaganza', 'Professional balloon artist creating intricate and whimsical balloon sculptures.'),
(65, 0, 'Balloon Bonanza Bash', 'Balloon Burst Entertainment ', 'Interactive balloon-popping games and activities'),
(66, 0, 'Balloon Bonanza Bash', 'Cake & Balloon Tower', 'Customized birthday cake complemented by a towering balloon display.'),
(67, 0, 'Balloon Bonanza Bash', 'Balloon Bonanza Photo Booth', 'Photo booth with balloon-themed props and backdrops.'),
(68, 0, 'Balloon Bonanza Bash', 'Fizz and Pop Refreshment Station ', 'Refreshing beverages and snacks in a balloon-themed setup.'),
(69, 0, 'Giggles & Gumdrops Gala', 'Candyland Venue Wonderland', 'Venue transformed into a Candy-land paradise with vibrant decorations.'),
(70, 0, 'Giggles & Gumdrops Gala', 'Sugar Rush Entertainment ', 'Professional candy-themed entertainer or character.'),
(71, 0, 'Giggles & Gumdrops Gala', 'Gumdrops & Lollipops Lagoon', 'Inflatable pool filled with gumdrops and oversized lollipops.'),
(72, 0, 'Giggles & Gumdrops Gala', 'Candy Buffet Extravaganza', 'Extensive candy buffet with a variety of sweets and treats'),
(73, 0, 'Giggles & Gumdrops Gala', 'Giggles & Gumdrops Cake Delight', 'Customized birthday cake with a delightful candy theme.'),
(74, 0, 'Giggles & Gumdrops Gala', 'Candylicious Photo Booth', 'Photo booth with candy-themed props and backdrops.'),
(24, 0, 'Enchanting Unions Packages', 'Venue of Enchantment:', 'A breathtaking venue set in a picturesque location, providing a romantic backdrop for your special day. '),
(25, 0, 'Enchanting Unions Packages', 'Personalized Wedding Planning:', 'We, a dedicated wedding planner to guide you through every step of the planning process. '),
(26, 0, 'Enchanting Unions Packages', 'Fairy-tale Decor', 'Transform the venue into a magical wonderland with enchanting decor.'),
(27, 0, 'Enchanting Unions Packages', 'Gourmet Culinary Delights', 'Indulge in a culinary journey with a customized menu crafted to delight your taste buds'),
(28, 0, 'Enchanting Unions Packages', 'Photography and Videography', 'Capture every moment of your enchanting union with a professional photographer and videographer'),
(29, 0, 'Harmony Haven Bundles', 'Floral Fantasy', 'A lavish display of fresh flowers, from the bridal bouquet to the ceremony arch and reception centerpieces.'),
(30, 0, 'Harmony Haven Bundles', 'Bespoke Wedding Stationery', 'Receive personalized wedding invitations, programs, and other stationery that reflect the enchanting theme of your union'),
(31, 0, 'Harmony Haven Bundles', 'Live Acoustic Music', 'Enhance the peaceful ambiance with live acoustic music.'),
(32, 0, 'Harmony Haven Bundles', 'Mindful Photography', 'Capture the essence of your harmonious union with a professional photographer.'),
(33, 0, 'Harmony Haven Bundles', 'Tranquil Venue Setting', 'A serene and harmonious venue nestled in nature or a peaceful location, providing a tranquil backdrop for your wedding day'),
(34, 0, 'Harmony Haven Bundles', 'Day-of Coordination', 'A professional coordinator to manage the details on the day of the wedding, ensuring everything runs smoothly.'),
(35, 0, 'Whispering Willows Celebrations', 'Woodland-Inspired Venue', 'Exchange vows in a magical setting surrounded by whispering willow trees and lush greenery.'),
(36, 0, 'Whispering Willows Celebrations', 'Dedicated Wedding Planner', 'A professional wedding planner to assist you in creating a celebration that reflects the charm of whispering willows.'),
(37, 0, 'Whispering Willows Celebrations', 'Enchanted Forest Decor', 'Transform your venue into an enchanted forest with whimsical decor.'),
(38, 0, 'Whispering Willows Celebrations', 'Bespoke Floral Arrangements', 'Adorn your celebration with bespoke floral arrangements inspired by the beauty of willow trees. '),
(39, 0, 'Whispering Willows Celebrations', 'Magical Photography and Videography', 'Capture the mystical moments with a professional photographer and videographer'),
(40, 0, 'Whispering Willows Celebrations', 'Outdoor Lounge Areas', 'Create cozy outdoor lounge areas where guests can relax and enjoy the natural surroundings.'),
(41, 0, 'Radiant Vows Packages', 'Luxurious Venue with Radiant Views', 'Choose a stunning venue with breathtaking views, capturing the essence of radiance.'),
(42, 0, 'Radiant Vows Packages', 'Expert Wedding Planning Services', 'Benefit from the expertise of a seasoned wedding planner who will assist you in creating a radiant celebration. '),
(43, 0, 'Radiant Vows Packages', 'Glamorous Decor and Lighting', 'Elevate the ambiance with glamorous decor featuring luxurious details and radiant lighting.'),
(44, 0, 'Radiant Vows Packages', 'Exquisite Floral Design', 'Delight in the beauty of exquisite floral arrangements that add a touch of opulence to your celebration.'),
(45, 0, 'Radiant Vows Packages', 'Culinary Excellence', 'Indulge in a culinary experience of excellence with a gourmet menu designed to tantalize the taste buds.'),
(46, 0, 'Radiant Vows Packages', 'Live Entertainment Extravaganza', 'The entertainment is curated to keep the energy high and the celebration vibrant.\r\n'),
(47, 0, 'Radiant Vows Packages', 'VIP Lounge and Seating', 'Create a VIP experience for you and your guests with an exclusive lounge area '),
(48, 0, 'Timeless Treasures Bundle', 'Elegant Historic Venue', 'Choose a venue with timeless charm, such as a historic mansion, castle, or a venue with classic architectural features. '),
(49, 0, 'Timeless Treasures Bundle', 'Experienced Wedding Coordination', 'Benefit from the guidance of an experienced wedding coordinator who specializes in timeless celebrations.'),
(50, 0, 'Timeless Treasures Bundle', 'Classic Decor Elements', 'Enhance the venue with classic decor elements that stand the test of time. '),
(51, 0, 'Timeless Treasures Bundle', 'Graceful Floral Designs', 'Adorn your celebration with graceful floral designs that evoke a sense of timeless beauty. '),
(52, 0, 'Timeless Treasures Bundle', 'Live Classical Music Ensemble', 'The timeless melodies create a refined and sophisticated ambiance throughout your celebration.'),
(53, 0, 'Timeless Treasures Bundle', 'Traditional Culinary Delights', 'Indulge in a menu featuring traditional culinary delights that appeal to a classic palate.'),
(54, 0, 'Timeless Treasures Bundle', 'Timeless Photography and Videography', 'Capture the essence of your timeless celebration with a professional photography and videography team'),
(55, 0, 'Timeless Treasures Bundle', 'Customized Vintage-Inspired Stationery', 'Receive a suite of vintage-inspired stationery, including invitations, programs, and place cards. '),
(56, 0, 'Timeless Treasures Bundle', 'Time-Honored Ceremony Rituals', 'Incorporate time-honored ceremony rituals or traditions that add a sense of depth and meaning to your vows.'),
(60, 0, 'Cake-Quake Fiesta', 'Cake Delight', 'Customized birthday cake designed to induce a \"cake-quake\" of delight.'),
(61, 0, 'Cake-Quake Fiesta', 'Quirk-tastic Photo Booth ', 'Photo booth with quirky props and backdrops.'),
(62, 0, 'Cake-Quake Fiesta', 'iggle-Inducing Goodie Bags', 'Fun-filled goodie bags for all attendees.'),
(63, 0, 'Cake-Quake Fiesta', 'Laughing Lemonade & Snacks Bar ', 'Refreshing lemonade station with assorted snacks.'),
(64, 0, 'Balloon Bonanza Bash', 'Balloon Artist Extravaganza', 'Professional balloon artist creating intricate and whimsical balloon sculptures.'),
(65, 0, 'Balloon Bonanza Bash', 'Balloon Burst Entertainment ', 'Interactive balloon-popping games and activities'),
(66, 0, 'Balloon Bonanza Bash', 'Cake & Balloon Tower', 'Customized birthday cake complemented by a towering balloon display.'),
(67, 0, 'Balloon Bonanza Bash', 'Balloon Bonanza Photo Booth', 'Photo booth with balloon-themed props and backdrops.'),
(68, 0, 'Balloon Bonanza Bash', 'Fizz and Pop Refreshment Station ', 'Refreshing beverages and snacks in a balloon-themed setup.'),
(69, 0, 'Giggles & Gumdrops Gala', 'Candyland Venue Wonderland', 'Venue transformed into a Candy-land paradise with vibrant decorations.'),
(70, 0, 'Giggles & Gumdrops Gala', 'Sugar Rush Entertainment ', 'Professional candy-themed entertainer or character.'),
(71, 0, 'Giggles & Gumdrops Gala', 'Gumdrops & Lollipops Lagoon', 'Inflatable pool filled with gumdrops and oversized lollipops.'),
(72, 0, 'Giggles & Gumdrops Gala', 'Candy Buffet Extravaganza', 'Extensive candy buffet with a variety of sweets and treats'),
(73, 0, 'Giggles & Gumdrops Gala', 'Giggles & Gumdrops Cake Delight', 'Customized birthday cake with a delightful candy theme.'),
(74, 0, 'Giggles & Gumdrops Gala', 'Candylicious Photo Booth', 'Photo booth with candy-themed props and backdrops.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `title`, `image`, `category`) VALUES
(5, '', '', 'Uploadimage/WhatsApp Image 2024-03-01 at 2.40.43 PM.jpeg', 'Wedding'),
(6, '', '', 'Uploadimage/WhatsApp Image 2024-03-01 at 2.40.40 PM.jpeg', 'Wedding'),
(7, '', '', 'Uploadimage/WhatsApp Image 2024-03-01 at 2.40.42 PM.jpeg', 'Birthday'),
(8, '', '', 'Uploadimage/WhatsApp Image 2024-02-26 at 7.26.47 PM (1).jpeg', 'Birthday'),
(9, '', '', 'Uploadimage/WhatsApp Image 2024-03-01 at 2.40.41 PM (3).jpeg', 'Birthday'),
(10, '', '', 'Uploadimage/WhatsApp Image 2024-02-26 at 7.26.47 PM.jpeg', 'Birthday'),
(11, '', '', 'Uploadimage/WhatsApp Image 2024-02-26 at 7.26.47 PM (4).jpeg', 'Wedding'),
(12, '', '', 'Uploadimage/WhatsApp Image 2024-03-01 at 2.40.43 PM (1).jpeg', 'Wedding'),
(13, '', '', 'Uploadimage/', 'Birth_invitation');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_check`
--

CREATE TABLE `otp_check` (
  `id` int(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `is_expired` int(50) NOT NULL,
  `create_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp_check`
--

INSERT INTO `otp_check` (`id`, `otp`, `is_expired`, `create_at`) VALUES
(1, '33524', 1, '2024-01-01 20:27:54.980928'),
(2, '71751', 1, '2024-01-15 00:17:15.832940'),
(3, '92142', 1, '2024-01-15 01:26:53.397804'),
(4, '40791', 1, '2024-02-29 10:08:49.797731'),
(5, '32912', 0, '2024-03-02 03:00:10.850835'),
(6, '89599', 0, '2024-03-02 03:18:23.010179'),
(7, '21856', 0, '2024-03-02 03:19:24.738531'),
(8, '87147', 0, '2024-03-02 03:24:06.787781'),
(9, '46738', 1, '2024-03-02 10:34:24.847347'),
(10, '17323', 1, '2024-03-02 10:40:16.241158'),
(11, '87573', 1, '2024-03-02 12:41:03.763875'),
(12, '80808', 1, '2024-03-03 00:12:54.819252'),
(13, '28740', 0, '2024-03-03 11:08:56.020790');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `category` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instragram` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `com_name`, `owner_name`, `category`, `phone`, `email`, `facebook`, `instragram`) VALUES
(1, 'Cake\"N\"Bake', 'Shormi Rayhan', 'Bakeries', '01711111111', 'cakenbake@gmail.com', 'https://www.facebook.com/profile.php?id=100089220902804', 'https://www.instagram.com/cakenbake218/?hl=bn'),
(2, 'Cake Creation', 'Peuli Deb', 'Bakeries', '01711111111', 'cakecreation@gmail.com', 'https://www.facebook.com/profile.php?id=100069981739893', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(3, 'Art Of Cake', 'Arpita Roy', 'Bakeries', '01711111111', 'artofcake@@gmail.com', 'https://www.facebook.com/getcakeofart', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(4, 'Splendid Event', 'Arif Hossain', 'Caterars', '01711111111', 'splendid@gmail.com', 'https://www.facebook.com/profile.php?id=100089220902804', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(5, 'FoodBelly', 'Arif Hossain', 'Caterars', '01711111111', 'Foodbelly@gmail.com', 'https://www.facebook.com/foodbellybd', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(6, 'Tune Castle', 'Arif Hossain', 'Music', '01711111111', 'tune@gmail.com', 'https://www.facebook.com/tunecastlemusicalstore', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(7, 'DhakaRosariums', 'Arif Hossain', 'Flowrist', '01973-569377', 'rosurim@gmail.com', 'https://www.facebook.com/dhakarosarium', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(8, 'GLAMFREAK By Farin', 'Farin Haq', 'Makeup & Hair', '01973-569377', 'glamfreakbyfarin@gmail.com', 'https://www.facebook.com/glamfreakbyfarinrahman', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(9, 'Dream Weaver', 'Bappa Mazumdar', 'Photographers', '01711111111', 'dreamweaver@gmail.com', 'https://www.facebook.com/DreamWeaver.com.bd', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(10, 'SYGMAZ :: Wedding Planner & Event Management', 'Bappa Mazumdar', 'Decorations', '01711111111', 'decorations@gmail.com', 'https://www.facebook.com/DreamWeaver.com.bd', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(11, 'Highway360', 'Bappa Mazumdar', 'Transports', '01970-260984', 'transport@gmail.com', 'https://www.facebook.com/360highway', 'https://www.instagram.com/cake_creations_5879/?hl=bn'),
(12, 'Frame Of Wedding', 'Bappa Mazumdar', 'Videography', '01970-260984', 'frameofwedding@gmail.com', 'https://www.facebook.com/frameofwedding', 'https://www.instagram.com/cake_creations_5879/?hl=bn');

-- --------------------------------------------------------

--
-- Table structure for table `rev`
--

CREATE TABLE `rev` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `review` varchar(350) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rev`
--

INSERT INTO `rev` (`id`, `user_name`, `user_email`, `review`, `image`, `category`) VALUES
(15, 'Farhana Akther Munni', 'Farhana@gmail.com', ' \"I recently celebrated my milestone 30th birthday with EventKart, and I couldn\'t have asked for a better experience. From the moment I contacted them, their team was attentive to my vision and worked tirelessly to bring it to life. The venue was stunningly decorated, and the personalized touches added a special touch to the celebration. EventKart\'', '../image1/review.birthday1.jpg', 'Birthday'),
(19, 'Fabiha Akther', 'fabiha@gmail.com', '\"EventKart exceeded my expectations in arranging my wife\'s surprise birthday bash! The team went above and beyond to ensure that every aspect of the event was flawless. The venue was beautifully decorated, the catering was delicious, and the DJ kept the party alive all night long. Our guests couldn\'t stop raving about how much fun they had. Thank y', '../image1/review.birthday3.jpg', 'Birthday'),
(23, 'Sumaya Mahi', 'sumaya369mahi@gmail.com', '\"I recently organized my daughter\'s 10th birthday party through EventKart, and I couldn\'t be happier with the experience! From the initial planning stages to the execution on the day, everything was handled with professionalism and attention to detail. The themed decorations were a hit with the kids.', '../image1/review.birthday2.jpg', 'Birthday'),
(24, 'Sumaya Mahi', 'sumaya369mahi@gmail.com', ': \"We entrusted EventKart with the planning of our dream wedding, and they delivered beyond our wildest expectations! From the picturesque venue selection to the intricate floral arrangements and seamless coordination on the big day, every detail was executed flawlessly. The EventKart team\'s professionalism and dedication made our special day truly', '../image1/wed.review3.jpg', 'Wedding'),
(25, 'Fabiha Akther', 'fabiha@gmail.com', '\"We couldn\'t be happier with our decision to choose EventKart as our wedding planner! From the moment we met with their team, we knew we were in good hands. They listened attentively to our vision and brought it to life with elegance and grace. The venue transformation was breathtaking, and the day-of coordination ensured that everything ran smooth', '../image1/wed.review1.jpg', 'Wedding'),
(26, 'Farhana Akther Munni', 'Farhana@gmail.com', '\"EventKart made our wedding day the most magical experience imaginable! From the initial consultation to the last dance, their team was with us every step of the way, ensuring that every aspect of our celebration was perfect. The venue selection was spot on, the decor was stunning, and the coordination was impeccable. ', '../image1/wed.review2.jpg', 'Wedding'),
(27, 'mahi', 'sumaya369mahi@gmail.com', 'best', '../image1/cpi.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` enum('0','1','','') NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `title`, `description`, `image`, `location`, `status`, `event_date`, `event_type`, `date_created`) VALUES
(20, 'Essential Wedding Planning Tips for Your Dream Day', '\"Plan your dream wedding stress-free with key tips: Set budget and date, choose a perfect venue, design personalized decor, find ideal attire, curate a delicious menu, organize entertainment, invest in professional photography, and manage logistics with a detailed timeline. Your perfect day awaits!\"', 'uploads/WhatsApp Image 2024-02-26 at 7.26.47 PM (3).jpeg', '', '1', '', 'Wedding', '2024-02-26 14:37:18'),
(21, '5 Unique Wedding Themes to Elevate Your Big Day', 'Explore innovative wedding themes for a memorable celebration. From rustic charm to vintage elegance, discover themes like enchanted garden, celestial romance, bohemian chic, and more. Transform your wedding into an unforgettable event with creative décor, attire, and entertainment that reflect your', 'uploads/WhatsApp Image 2024-02-26 at 7.26.47 PM (5).jpeg', '', '0', '', 'Wedding', '2024-02-26 14:35:07'),
(22, '\"Unforgettable Birthday Celebrations with EventKart: Turning Dreams into Reality\"', '\"EventKart specializes in creating magical birthday experiences that leave a lasting impression. From intimate gatherings to extravagant parties, we understand that each birthday is unique and deserves to be celebrated in style. Our team of experts works tirelessly to bring your vision to life, ensu', 'uploads/blog_3.jpg', '', '0', '', 'Birthday', '2024-03-01 11:22:31'),
(23, '\"Make Every Birthday Unforgettable with EventKart\"', '\"Birthdays deserve to be celebrated in style, and EventKart is here to make it happen. From themed parties to intimate gatherings, we specialize in crafting unforgettable birthday experiences tailored to your desires. Let us handle every detail, from decorations to entertainment, ensuring your celeb', 'uploads/blog_4.jpg', '', '0', '', 'Birthday', '2024-03-01 11:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_number` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `conpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(100) NOT NULL,
  `venue_name` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue_name`, `place`, `category`, `image`, `location`) VALUES
(1, 'Kushiara Convention Hall', ' Chondirpul', 'Wedding', 'Venueimage/kusiara.jpg', 'Sylhet'),
(3, 'Meatup', ' Sylhet', 'Birthday', 'Venueimage/meatup.jpg', ' https://www.facebook.com/meatuprestaurant'),
(4, 'Coffee Club', ' Sylhet', 'Birthday', 'Venueimage/cclube.jpg', ' https://www.facebook.com/thecoffeeclubbd/'),
(5, 'Cremo Coffee', ' Sylhet', 'Birthday', 'Venueimage/Cremo.jpg', ' https://www.facebook.com/CremoCoffee.bd'),
(6, 'Sky Dine', ' Sylhet', 'Birthday', 'Venueimage/skydine.jpg', ' https://www.facebook.com/skydinesylhet/'),
(7, 'Unoon', ' Sylhet', 'Birthday', 'Venueimage/unoon.jpg', ' https://www.facebook.com/unoon.eidgah'),
(8, 'Khans Palace & Convention Center', ' Sylhet', 'Wedding', 'Venueimage/khans.jpg', ' https://www.facebook.com/PlatinumLoungeSylhet/'),
(9, 'Amanullah Convention Centre ', 'Arambag,Sylhet', 'Wedding', 'Venueimage/amanullah.jpeg', 'https://aman-ullah-convention-center.business.site/');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_service`
--

CREATE TABLE `wedding_service` (
  `id` int(11) NOT NULL,
  `service_type` varchar(70) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding_service`
--

INSERT INTO `wedding_service` (`id`, `service_type`, `image`, `price`) VALUES
(22, 'Enchanting Unions Packages', 'uploads/WhatsApp Image 2024-03-01 at 2.40.41 PM (2).jpeg', '150000'),
(23, 'Harmony Haven Bundles', 'uploads/WhatsApp Image 2024-03-01 at 2.40.40 PM (2).jpeg', '200000'),
(24, 'Whispering Willows Celebrations', 'uploads/WhatsApp Image 2024-03-01 at 2.40.39 PM.jpeg', '230000'),
(27, 'Radiant Vows Packages', 'uploads/WhatsApp Image 2024-03-01 at 2.40.40 PM.jpeg', '300000'),
(28, 'Timeless Treasures Bundle', 'uploads/WhatsApp Image 2024-02-26 at 7.26.47 PM (4).jpeg', '400000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday_service`
--
ALTER TABLE `birthday_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_check`
--
ALTER TABLE `otp_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rev`
--
ALTER TABLE `rev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding_service`
--
ALTER TABLE `wedding_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birthday_service`
--
ALTER TABLE `birthday_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `calendar_event_master`
--
ALTER TABLE `calendar_event_master`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp_check`
--
ALTER TABLE `otp_check`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rev`
--
ALTER TABLE `rev`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wedding_service`
--
ALTER TABLE `wedding_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
