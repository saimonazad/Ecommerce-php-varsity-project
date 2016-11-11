-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 02:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `brand_ID` int(11) NOT NULL,
  `SubCategory_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `reduced_price` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Featured` varchar(255) DEFAULT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `brand_ID`, `SubCategory_ID`, `Quantity`, `price`, `reduced_price`, `Description`, `Featured`, `Image`) VALUES
(1, 15, 6, 10, '9100.99', '789.99', '40.6" screen.This SUHD TV offers 4K picture quality — 4x the resolution of Full HD — and a wide variety of Web options via Smart TV and apps.', 'screen (measured diagonally from corner to corner).A great size for a living room or mid-sized home theater space.', 'p.jpg'),
(2, 16, 2, 11, '655.99', '598.99', '30.6" screen. Enjoy streaming content with a clear picture and bright colors, use your smartphone or tablet as a remote control, or stream PlayStation 3 games to your TV. Plus, the Android TV function lets you download a wide array of apps and games.', 'Provides an immersive experience for everyone in the room.LED TVs perform well in all lighting conditionsThey also deliver plasma-like deep blacks and rich colors.', 'samsung lcd.jpg'),
(3, 17, 3, 19, '899.99', '608.99', '64.6" screen. Discover new programs, stream movies and create a network of connected Samsung devices with this smart TV''s advanced features. Color- and sound-enhancing options help bring your favorite shows and video clips to life..', 'Enjoy greater clarity, color, and contrast with the new 4K Processor.The powerful 4K Processor X1 brings stunning picture quality to whatever you''re watching.Every source is intelligently analyzed and upscaled to our best 4K resolution,from TV broadcasts.', 'sony.jpg'),
(4, 18, 4, 6, '798.99', '698.99', '30.6" screen.A great size for a living room or mid-sized home theater space.LED TVs perform well in all lighting conditions.', 'Enjoy greater clarity, color, and contrast with the new 4K Processor.The powerful 4K Processor X1 brings stunning picture quality to whatever you''re watching.Every source is intelligently analyzed and upscaled to our best 4K resolution,from TV broadcasts.', 'toshibatv.jpg'),
(5, 11, 5, 14, '798.99', '698.99', '54.6" screen.A great size for a living room or mid-sized home theater space.LED TVs perform well in all lighting conditions.', 'Enjoy greater clarity, color, and contrast with the new 4K Processor.The powerful 4K Processor X1 brings stunning picture quality to whatever you''re watching.Every source is intelligently analyzed and upscaled to our best 4K resolution,from TV broadcasts.', 'LG_OLED.jpg'),
(6, 1, 8, 44, '398.99', '00.00', ' Retina display with 2560-by-1600 resolution,Fifth-generation dual-core Intel Core i7 processor', 'With fifth-generation Intel Core processors, the latest graphics, and faster flash storage, the incredibly advanced MacBook Pro with Retina display moves even further ahead in performance and battery life.', 'apple_laptop'),
(7, 1, 10, 23, '798.99', '00.00', ' 4.7-inch (diagonal) Retina HD display with 1334-by-750 resolution ', 'iPhone 6 isn''t just bigger — it''s better in every way. Larger yet thinner. More powerful, yet power efficient. ', 'apple_ipad'),
(8, 1, 12, 39, '498.99', '00.00', 'Retina HD display with 1334-by-750 resolution ', ' 4.7-inch Retina HD display with 3D Touch. 7000 series aluminum and stronger cover glass. An A9 chip with 64-bit desktop-class architecture.', 'apple_iphone'),
(9, 5, 14, 39, '498.99', '00.00', 'Dual-core 1.8GHz and quad-core 1.44GHz processors with 3GB of RAM ', ' this cell phone offers the full ecosystem of Android and its apps to handle all of your business and personal needs. Added security lets you know when your data could be at risk, so you can take action to improve it.', 'blackberry_cellphone'),
(10, 6, 15, 14, '600.99', '00.00', '18.0-megapixel APS-C CMOS sensor ', 'Capture vivid photos and videos with this Canon EOS Rebel T5 DSLR camera that features 18.0-megapixel CMOS sensor that captures up to 5184 x 3456 resolution for high-quality images. ', 'canon dslr'),
(11, 6, 16, 20, '800.99', '00.00', '20.2-megapixel high-sensitivity CMOS sensor.Captures high-resolution images up to 5183 x 3888 pixels ', ' This Canon PowerShot ELPH 350 HS digital camera features a 20.2-megapixel CMOS sensor and optical image stabilization, so you can capture clear photos and video footage. Built-in Wi-Fi lets you share stored files across wireless devices.', 'canon mirrorless'),
(12, 7, 7, 10, '1008.99', '00.00', 'Microsoft Windows 10 operating system.Windows 10 brings back the popular Start Menu from Windows 7 and introduces new features ', 'Enjoy simple touch-screen navigation combined with the power of an all-in-one PC. The 500GB hard drive lets you store your favorite photos, movies, games and other files. ', 'dell desktop'),
(13, 7, 8, 10, '1008.99', '00.00', ' Windows 10 operating system', 'Get a powerful mini tower with the Dell XPS 8900 desktop computer. With its ultra-fast Intel i7 processor, plenty of RAM and discrete graphics card, this computer is designed to handle even the most demanding workflows. Paired with the Windows 10 operatin', 'dell laptop'),
(14, 7, 9, 10, '1008.99', '00.00', ' Ultrafast 6 ms response time (gray to gray)', 'Featuring 1920 x 1080 maximum resolution, this Dell S2415H 3R3XN LED monitor presents stunningly realistic images in clear detail on its 23.8" display. ', 'dell monitor'),
(15, 8, 15, 10, '2008.99', '00.00', 'Capture high-quality 4K video ', 'Capture the world around you in stunning 4K resolution and super slow motion at up to 240 frames per second with the GoPro 4. ', 'gopro digital_camera'),
(16, 8, 15, 10, '2008.99', '00.00', ' Capture high-quality 4K video', 'Capture footage of your adventures in stunning 4K video with the GoPro 4. GoPro''s wearable, mountable design with touch-screen controls makes it easy to capture the action from your unique first-person perspective. ', 'gopro_mirrorless'),
(17, 8, 17, 10, '2008.99', '00.00', ' Capture high-quality video</strong></li><li>With resolutions of 1440p30, 1080p60 and 720p100 for crisp, clear footage.', 'GoPro HERO4 Session HD Waterproof Action Camera: ', 'gopro_pointshoot_camera'),
(18, 9, 9, 10, '2008.99', '00.00', 'Ultrafast 7 ms response timeSupports rapid pixel color changes to help prevent blurring, ghosting and streaking when viewing fast-motion scenes in movies, games and more. ', 'Play games, watch movies and more with this HP Pavilion 23cw 23" LED monitor, which features 1920 x 1080 resolution and IPS technology for clear visuals from a wide variety of vantage points. ', 'hp_monitor'),
(19, 2, 8, 10, '2008.99', '00.00', ' Windows 10 operating system Windows 10 brings back the Start Menu from Windows 7 and introduces new features', ' For work or play, this laptop offers 1TB of storage for digital photos, videos, music and more. The chiclet keyboard and HD display allow easy typing and navigation.', 'asus_laptop'),
(20, 11, 1, 10, '2008.99', '00.00', '54-5/8" screen (measured diagonally from corner to corner) ', ' This TV''s curved screen produces an enhanced sense of depth and immersion, and the 4K resolution displays movies, TV shows and more with 4x the resolution of Full HD. Plus, OLED technology delivers lifelike colors, crisp images and infinite contrast for ', 'lg_led'),
(21, 11, 5, 10, '2008.99', '00.00', '55.3" screen (measured diagonally from corner to corner) ', ' With a curved OLED screen and 3D technology, this HDTV offers an immersive entertainment experience. Plus, webOS 2.0 provides access to popular online media services for extensive viewing options.', 'lg_oled55'),
(22, 13, 19, 10, '2008.99', '00.00', ' Xbox One Limited Edition Halo 5: Guardians Bundle', ' Own the Limited Edition Halo 5: Guardians Bundle, featuring a 1TB custom console and controller, a full game download of Halo 5: Guardians, the Warzone REQ Bundle that includes 14 premium Requisition Packs, FOTUS-class armor and multiplayer emblem. It al', 'xbox_one_headset'),
(23, 13, 19, 10, '2008.99', '00.00', ' The greatest gamepad—now even better', 'Experience the unique intensity, precision and comfort of the Xbox One Wireless Controller. Impulse Triggers deliver fingertip vibration feedback, so you can feel every jolt and crash in high definition. Responsive thumbsticks and an enhanced D-pad provid', 'playstation_4_headset'),
(24, 13, 19, 10, '2008.99', '00.00', ' Improve your performance and fit:', 'unlocks your full potential and adapts to your unique style of play. Experience game-changing accuracy, faster speed, and a tailored feel unlike anything before. ', 'xbox_one_headset1'),
(25, 14, 15, 10, '2008.99', '00.00', 'EF-S 18–55mm f/3.5–5.6 zoom lens provides versatility ', ' Nikon D5300 DSLR Camera with 18–55mm VR lens', 'nikon dslr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `SubCategory_ID` (`SubCategory_ID`),
  ADD KEY `brand_ID` (`brand_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`SubCategory_ID`) REFERENCES `subcategory` (`SubCategory_ID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_ID`) REFERENCES `brand` (`brand_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
