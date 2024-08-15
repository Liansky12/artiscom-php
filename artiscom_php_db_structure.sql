SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liansky_artiscom`
--

-- --------------------------------------------------------

--
-- Table structure for table `muestrario`
--

CREATE TABLE `muestrario` (
  `id` int(11) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `subtype` int(11) NOT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `description` varchar(1050) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subtipo_obras`
--

CREATE TABLE `subtipo_obras` (
  `id` int(11) NOT NULL,
  `subtype_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipos_obras`
--

CREATE TABLE `tipos_obras` (
  `id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL,
  `type_name_plural` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `u_id` int(11) NOT NULL,
  `u_user` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `pwd` varchar(72) NOT NULL,
  `surname1` varchar(100) NOT NULL,
  `surname2` varchar(100) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `u_address` varchar(1050) DEFAULT NULL,
  `postal_code` int(5) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `interests` varchar(1050) DEFAULT NULL,
  `suggestions` varchar(1050) DEFAULT NULL,
  `use_ads` tinyint(1) NOT NULL,
  `creation` datetime NOT NULL,
  `shop_car` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `muestrario`
--
ALTER TABLE `muestrario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`),
  ADD KEY `type` (`type`),
  ADD KEY `subtype` (`subtype`);

--
-- Indexes for table `subtipo_obras`
--
ALTER TABLE `subtipo_obras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipos_obras`
--
ALTER TABLE `tipos_obras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_user` (`u_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `muestrario`
--
ALTER TABLE `muestrario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subtipo_obras`
--
ALTER TABLE `subtipo_obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipos_obras`
--
ALTER TABLE `tipos_obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `muestrario`
--
ALTER TABLE `muestrario`
  ADD CONSTRAINT `muestrario_ibfk_1` FOREIGN KEY (`type`) REFERENCES `tipos_obras` (`id`),
  ADD CONSTRAINT `muestrario_ibfk_2` FOREIGN KEY (`subtype`) REFERENCES `subtipo_obras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
