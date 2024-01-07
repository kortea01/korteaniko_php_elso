-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 07. 18:41
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `beers`
--

CREATE TABLE `beers` (
  `id` int(8) NOT NULL,
  `sor_nev` varchar(30) NOT NULL,
  `tipus` varchar(30) NOT NULL,
  `kiszerelese` double NOT NULL,
  `alkoholfok` double NOT NULL,
  `lejarati_ido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `beers`
--

INSERT INTO `beers` (`id`, `sor_nev`, `tipus`, `kiszerelese`, `alkoholfok`, `lejarati_ido`) VALUES
(1, 'Napkincs', 'IPA', 0.3, 5.1, '2024-01-31'),
(3, 'OGRE', 'pils', 0.5, 4.1, '2024-01-24'),
(5, 'Dreher hideg komlós', 'APA', 0.5, 4.3, '2024-01-17'),
(7, 'Pannonhalmi Witbier', 'fűszeres búza', 0, 5, '2024-02-10');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `beers`
--
ALTER TABLE `beers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
