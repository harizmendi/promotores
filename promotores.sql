

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promotores`
--
  CREATE Database `promotores`;
-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre_marca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` date NOT NULL,
  `datos_de_cliente` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) NOT NULL,
  `last_modified_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre_tienda` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(10) NOT NULL,
  `last_modified_by` int(10) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `geo_location` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` date NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_ip_used` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) NOT NULL,
  `last_modified_by` int(10) NOT NULL,
  `geo_location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(10) NOT NULL,
  `isAdmin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `password`, `date_created`, `last_login`, `last_ip_used`, `created_by`, `last_modified_by`, `geo_location`, `active`, `isAdmin`) VALUES
(1, 'Victor Hugo', 'Arizmendi C.', 'test@test.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-08-26', '2021-09-01 19:40:58', '189.203.96.73', 1, 0, 'latitude: 19.9053 longitude: -99.3439', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiendas`
--
ALTER TABLE `tiendas`
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
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
