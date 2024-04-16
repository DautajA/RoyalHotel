-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 03:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `selectroom` varchar(50) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date DEFAULT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `selectroom`, `arrival`, `departure`, `adults`, `children`) VALUES
(63, 'Triple Room', '2024-04-18', '2024-04-19', 2, 2),
(64, 'Double Room', '2024-04-20', '2024-04-21', 1, 0),
(65, 'Double Room', '2024-04-20', '2024-04-21', 1, 0),
(66, 'Triple Room', '2024-04-20', '2024-04-22', 2, 1),
(67, 'Triple Room', '2024-04-17', '2024-04-17', 2, 1),
(68, 'Family Room', '2024-04-16', '2024-04-17', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `dhoma_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`dhoma_id`, `title`, `description`, `price`, `img1`, `img2`, `img3`) VALUES
(1, 'Double Room', 'The Double Room is meticulously designed to cater to the needs of two guests, offering a serene and intimate atmosphere. Featuring a spacious double bed, this room provides a cozy retreat for couples or solo travelers seeking a peaceful and comfortable st', '$100', 'room1', 'room5', 'room9'),
(2, 'Triple Room', 'The Triple Room is thoughtfully tailored to accommodate three guests, ensuring a harmonious blend of comfort and convenience. It typically comprises three separate beds, providing flexibility for guests to choose their preferred sleeping arrangements. Alt', '$150', 'room2', 'room6', 'room10'),
(3, 'Quadruple Room', 'The Quadruple Room is designed with a focus on versatility and comfort, accommodating four guests with ease. Whether you prefer four separate beds for individual comfort or a mix of double and single beds for added flexibility, this room type offers vario', '$200', 'room3', 'room7', 'room11'),
(4, 'Family Room', 'The Family Room is specifically curated to cater to the unique needs of families, offering a harmonious blend of comfort and convenience. Featuring a combination of double and single beds, it provides flexibility to accommodate family members of different', '$250', 'room4', 'room8', 'room12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `description`, `img`) VALUES
(1, 'Spa Treatment', 'A serene oasis of relaxation where visitors can indulge in a wide range of body and facial treatments to rejuvenate the body and soul. Includes massages, natural ingredients, and a tranquil atmosphere.', 'services1'),
(2, 'Fitness Classes', 'Offers a diverse range of physical exercise classes to improve health and fitness. From cardiovascular workouts to strength and flexibility training, every individual can find a class suited to their needs.', 'services2'),
(3, 'E La Carte Restaurant', 'A personalized gastronomic experience where visitors can select their favorite dishes from an extensive menu. Food prepared freshly and with careful attention to detail.', 'services3'),
(4, 'Transfer Services', 'Provides convenient transport services for clients, ensuring transportation to and from the airport or their arrival point. May include private cars, vans, or buses, depending on the number of passengers.', 'services4'),
(5, 'Indoor Hotel Pool', 'An indoor environment for enjoying swimming and relaxation, equipped with modern infrastructure and clean water. Offers a suitable choice for light exercises or simply unwinding.', 'services5'),
(6, '24-Hours Front Desk', 'A service that is available to clients at all times, 24 hours a day. Provides immediate information, services, and assistance for any needs or requests visitors may have during their stay.', 'services6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`dhoma_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `dhoma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
