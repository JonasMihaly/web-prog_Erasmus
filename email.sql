-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2021. Feb 27. 21:25
-- Kiszolgáló verziója: 5.7.33-log
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `dzsonatan`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `email`
--

CREATE TABLE `email` (
  `id` int(10) NOT NULL,
  `kuldo` text NOT NULL,
  `targy` text NOT NULL,
  `uzenet` text NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `email`
--

INSERT INTO `email` (`id`, `kuldo`, `targy`, `uzenet`, `datum`) VALUES
(3, 'Én', 'Az ám', 'Szuper minden is!', '2021-02-24'),
(4, 'Misi', 'Zsir', '...', '2021-02-24'),
(5, 'Én', 'Tárgy', 'Üzenet', '2021-02-27');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `email`
--
ALTER TABLE `email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
