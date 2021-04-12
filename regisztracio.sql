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
-- Tábla szerkezet ehhez a táblához `regisztracio`
--

CREATE TABLE `regisztracio` (
  `id` int(10) NOT NULL,
  `cs_nev` text NOT NULL,
  `u_nev` text NOT NULL,
  `bejelentkezes` text NOT NULL,
  `jelszo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `regisztracio`
--

INSERT INTO `regisztracio` (`id`, `cs_nev`, `u_nev`, `bejelentkezes`, `jelszo`) VALUES
(9, 'Jonas', 'Mihaly', 'Dzsoni', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(10, 'Jo', 'Mi', 'Dzso', 'ec4c8836db96b8aca8381c7c64bb095ba46d5e28');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `regisztracio`
--
ALTER TABLE `regisztracio`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `regisztracio`
--
ALTER TABLE `regisztracio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
