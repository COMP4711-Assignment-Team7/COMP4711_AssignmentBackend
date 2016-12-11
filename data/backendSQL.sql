SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-08:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `proj_back`
--
--
-- Table structure for table `supplies`
--

DROP TABLE IF EXISTS `supply`;
CREATE TABLE `supply` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(12) NULL,
  `src` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Seeding data for table `menu`
--

INSERT INTO `supply` (`id`, `name`, `description`, `price`, `quantity`, `src`, `link`) VALUES
(1, 'Fuel', 'Military Grade Fuel for the F22.', 300, 20000, '', 'product/1'),
(2, 'Oil', 'Oil lubricant to ensure mechanical parts operate smoothly.', 100, 14100, '', 'product/2'),
(3, 'Missles', 'AIM 120C Missles for Air-to-Air combat.', 400000, 680, 'assets/img/AIM-120_1.jpg', 'product/3'),
(4, 'Ammo', '20mm PGU-28A/B SAPHEI rounds for the F-22\'s M61A2 Cannon.', 250, 53070, 'assets/img/PGU-28A_1.jpg', 'product/4'),
(5, 'Rivets', 'Rivets for the inner frame of the F-22.', 350, 542, '', 'product/5'),
(6, 'JDAM', 'A cheap smart bomb for use in use in ground attacks.', 25000, 756, '', 'product/6'),
(7, 'Wheel', 'Wheels for the landing gear. Essential for landing.', 2400, 230, '', 'product/7'),
(8, 'Windshield', 'Specially constructed glass for the cockpit.', 80000, 5, '', 'product/8');

--
-- Indexes for table `menu`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);


