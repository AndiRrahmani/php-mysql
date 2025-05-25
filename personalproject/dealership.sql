-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 01:16 AM
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
-- Database: `dealership`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




INSERT INTO `users` (`id`, `emri`, `username`, `email`, `password`, `confirm_password`, `is_admin`) VALUES
(1, 'Andi', 'andiiii', 'andirrahmani28@gmail.com', 'andiandi', 'andiandi', 'true'),
(2, 'Nili', 'Niliiii', 'nilbakija@gmail.com', 'nilinili', 'nilinili', 'true');


CREATE TABLE `cars` (
  `id` int(255) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_desc` varchar(255) NOT NULL,
  `car_price` int(255) NOT NULL,
  `car_image` varchar(255) NOT NULL
)


INSERT INTO `cars` (`id`, `car_name`, `car_desc`, `car_price`, `car_image`) VALUES
(1, 'Golf 8 R ', 'Exterior color: Pure White | Interior color: Titan Black w/Blue Accents | Drivetrain: All-wheel Drive | MPG: – | Fuel type: Gasoline | Transmission: Automatic | Engine: 2L I-4 gasoline direct injection, | VIN: WVWEB7CD9PW202141 | Stock #: T202141 | Mileage: 49,558 mi..', '$38,995',  'Golf8r.png'),
(2, 'Audi A7 2025', 'Exterior color: Mythos Black Metallic | Interior color: Pearl Beige w/Agate Gray | Drivetrain: All-wheel Drive | MPG: – | Fuel type: Gasoline | Transmission: Automatic | Engine: 3L V-6 gasoline direct injection, | VIN: WAUU2BF2XSN014894 | Stock #: SN014894 | Mileage: 10 mi.', '$82,785', 'AudiA7.png');


CREATE TABLE `purchase` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `car_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `is_approved` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
)

INSERT INTO `purchase` (`id`, `user_id`, `car_id`, `date`, `is_approved`, `time`) VALUES
(1, 2, 2, '2022-12-16', 'true', '19:00');