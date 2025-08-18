-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2025 at 10:18 PM
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
-- Database: `planty`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_plants`
--

CREATE TABLE `my_plants` (
  `ID` int(11) NOT NULL,
  `Plant_Name` varchar(25) NOT NULL,
  `Plant_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_plants`
--

INSERT INTO `my_plants` (`ID`, `Plant_Name`, `Plant_Date`) VALUES
(1, 'Tomatoes', '2025-07-22'),
(2, 'Habanero Pepper', '2025-07-22'),
(3, 'Squash', '2025-07-22'),
(4, 'Watermelon', '2025-07-21'),
(5, 'Hibiscus', '2025-07-24'),
(6, 'Eneldo', '2025-07-24'),
(7, 'Flor De Nube', '2025-07-23'),
(8, 'Eneldo/Dill', '2025-07-27'),
(9, 'Eneldo/Dill', '0000-00-00'),
(10, 'Marigold/Cempasushi', '2025-07-27'),
(11, 'perejil/parsley', '2025-07-27'),
(12, 'Papaya', '2025-07-28'),
(13, 'Manzanilla', '2025-07-28'),
(14, 'Girasol', '2025-07-28'),
(15, 'Flor De Nubes', '2025-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `ID` int(11) NOT NULL,
  `Plant_Name` varchar(35) NOT NULL,
  `Plant_Description` text NOT NULL,
  `Plant_Growth_Info` text NOT NULL,
  `Lights` varchar(10) NOT NULL,
  `Depth` varchar(10) NOT NULL,
  `Germination` varchar(10) NOT NULL,
  `Maturation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`ID`, `Plant_Name`, `Plant_Description`, `Plant_Growth_Info`, `Lights`, `Depth`, `Germination`, `Maturation`) VALUES
(1, 'Gerson', 'Success', '', 'sun', '3cm', '7days', '30days'),
(2, 'Hibiscus (Jamaica)', 'Hibiscus is a medicinal plant often used to make tea', 'Needs regular watering', 'Full Sun', '1CM', '15-20Days', '120 Days'),
(3, 'Marigold/Cempasushi', 'Marigold is a vibrant flower often used for decoration and traditional celebrations.', 'Normal watering', 'Full Sun', '4-6MM', '25-30days', 'Unknown'),
(4, 'Eneldo/Dill', 'Dill is an aromatic herb used in pickling and seasoning', 'Normal watering', 'Full Sun', 'Do Not Cov', '21-28days', '120 days'),
(5, 'Tomillo/Thyme', 'Thyme is a low-growing herb used for seasoning meats and vegetables', 'Normal watering', 'Full Sun', 'Do not Cov', '5-8Days', '60days'),
(6, 'Watermelon / Sandia', 'Watermelon is a sweet and juicy fruit, perfect for hot weather. ', 'Needs a lot of water and heat', 'Full Sun', '4-6CM', '6-8Days', '70-90Days'),
(7, 'Squash / Calabaza', 'Snapdragon is a colorful flower popular in gardens', 'Normal watering', 'Full Sun', '3-4CM', '6-8 Days', '60-70 Days'),
(8, 'Flor De Nube', 'Babyâ€™s Breath is used as a decorative flower in bouquets', 'Normal watering', 'Full Sun', '1-2MM', '20-30Days', ''),
(9, 'Papaya Maradol', 'Tropical fruit, rich in sugar, fiber, and beta-carotenes. Grows best in warm and humid climates.', 'Start in pots or deep seed trays. Transplant when first true leaves appear. Requires consistent watering.', 'Full sun ☀', '5 cm', '20–25 days', '10–12 mont'),
(10, 'Calabaza Redonda (Round Squash)', 'Highly productive, green-dark striped round squash.', 'Sow directly in loose, fertilized soil. 3–4 seeds per hole, keep the strongest plant. Fertilize and water regularly.', 'Full sun', ' 3–4 cm', '6–8 days', '60–70 days'),
(11, 'Manzanilla (Chamomile)', 'Do not cover seeds, needs light to germinate. Transplant when 10 cm tall. Harvest only flowers, dry in shade.', ' Do not cover seeds, needs light to germinate. Transplant when 10 cm tall. Harvest only flowers, dry in shade', 'Full sun ☀', ' Do not co', '10–14 days', '60–90 days'),
(12, 'Girasol Gigante', 'Ornamental with tall stems and large yellow flowers. Good for roasting or bird feed.', 'Sow in germination trays. Transplant when 8–10 cm tall. Fertilize every 2–3 weeks.', 'Full sun', '10–12 mm (', '8–10 days', '45–60 days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_plants`
--
ALTER TABLE `my_plants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Plant_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_plants`
--
ALTER TABLE `my_plants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
