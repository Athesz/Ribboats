-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Aug 23. 19:49
-- Kiszolgáló verziója: 10.4.20-MariaDB
-- PHP verzió: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `boats`
--
CREATE DATABASE IF NOT EXISTS `boats` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `boats`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `basicconnection`
--

CREATE TABLE `basicconnection` (
  `id` int(11) NOT NULL,
  `modellid` int(11) NOT NULL,
  `basicid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `basicconnection`
--

INSERT INTO `basicconnection` (`id`, `modellid`, `basicid`) VALUES
(1, 1, 14),
(2, 1, 2),
(3, 1, 7),
(4, 1, 32),
(5, 1, 9),
(6, 1, 15),
(7, 1, 13),
(8, 1, 20),
(9, 2, 14),
(10, 2, 2),
(11, 2, 7),
(12, 2, 32),
(13, 2, 9),
(14, 2, 15),
(15, 2, 13),
(16, 2, 20),
(17, 3, 2),
(18, 3, 16),
(19, 3, 34),
(20, 3, 7),
(21, 3, 9),
(22, 3, 21),
(23, 3, 15),
(24, 3, 13),
(25, 3, 20),
(26, 3, 32),
(39, 4, 2),
(40, 4, 7),
(41, 4, 15),
(42, 4, 13),
(43, 4, 20),
(44, 4, 32),
(45, 5, 6),
(46, 5, 4),
(47, 5, 7),
(48, 5, 8),
(49, 5, 33),
(50, 5, 28),
(51, 5, 15),
(52, 5, 13),
(53, 5, 20),
(54, 5, 32),
(55, 6, 7),
(56, 6, 5),
(57, 6, 13),
(58, 6, 20),
(59, 6, 32),
(60, 7, 7),
(61, 7, 1),
(62, 7, 31),
(63, 7, 22),
(64, 7, 32),
(65, 7, 20),
(66, 7, 3),
(67, 7, 17),
(68, 7, 25),
(69, 7, 30),
(70, 7, 26),
(71, 7, 13),
(72, 8, 7),
(73, 8, 13),
(74, 8, 20),
(75, 8, 3),
(76, 8, 16),
(77, 8, 11),
(78, 8, 32),
(79, 9, 1),
(80, 9, 31),
(81, 9, 22),
(82, 9, 10),
(83, 9, 19),
(84, 9, 28),
(85, 9, 12),
(86, 9, 30),
(87, 9, 26),
(88, 9, 32),
(89, 9, 20),
(90, 9, 13),
(91, 10, 1),
(92, 10, 31),
(93, 10, 22),
(94, 10, 10),
(95, 10, 19),
(96, 10, 28),
(97, 10, 30),
(98, 10, 26),
(99, 10, 13),
(100, 10, 20),
(101, 11, 1),
(102, 11, 23),
(103, 11, 5),
(104, 11, 28),
(105, 11, 29),
(106, 11, 27),
(107, 11, 16),
(108, 11, 24),
(109, 11, 32),
(110, 11, 20),
(111, 11, 13),
(112, 7, 11),
(113, 7, 35);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `basiclist`
--

CREATE TABLE `basiclist` (
  `id` int(11) NOT NULL,
  `basicName` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `basiclist`
--

INSERT INTO `basiclist` (`id`, `basicName`) VALUES
(1, '60L beépített üzemanyagtartály			'),
(2, 'Csónak orr párna'),
(3, 'Első és hátsó kabin (ülés, fenékvízszivattyú)'),
(4, 'Elülső kabin és kormánypad párnákkal'),
(5, 'Elülső kabin párnákkal'),
(6, 'Elülső konzol'),
(7, 'Emelőhorog'),
(8, 'Fenékvízszivattyú'),
(9, 'Fogantyúk és puha markolatok'),
(10, 'FRP Horgonytálca'),
(11, 'FRP üvegszálas vagy rozsdamentes acél torony'),
(12, 'Hátsó étkező asztal létrával'),
(13, 'Javítókészlet'),
(14, 'Két alumínium pad (ha nincs konzol)'),
(15, 'Két evező'),
(16, 'Közép konzol üveg szélvédővel'),
(17, 'Középkonzol (elülső üléssel és üveg szélvédővel)'),
(19, 'Középkonzol elülső üléssel'),
(20, 'Láb pumpa'),
(21, 'Mentőkötél'),
(22, 'Műanyag akkumlátor doboz'),
(23, 'Napozóágy párnákkal'),
(24, 'Oldalsó ülés doboz párnákkal'),
(25, 'Összecsukható hátsó ülés'),
(26, 'Párnaszett'),
(27, 'Rozsdamentes acél hátsó létra'),
(28, 'Rozsdamentes acél háttámla'),
(29, 'Rozsdamentes acél vagy üvegszálas torony 3 navigációs fénnyel'),
(30, 'Rozsdamentes torony navigációs fénnyel'),
(31, 'TMC500 gyors fenékvízszivattyú'),
(32, 'Üvegszálas horgonytálca'),
(33, 'Üzemi kapcsoló'),
(34, 'Vezető üléspad párnával'),
(35, 'Napozóágy párnával');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `boatlist`
--

CREATE TABLE `boatlist` (
  `id` int(11) NOT NULL,
  `modell` text COLLATE utf8_hungarian_ci NOT NULL,
  `pvc1` int(11) NOT NULL,
  `pvc2` int(11) NOT NULL,
  `hyp1` int(11) NOT NULL,
  `hyp2` int(11) NOT NULL,
  `fulllength` text COLLATE utf8_hungarian_ci NOT NULL,
  `innerlength` text COLLATE utf8_hungarian_ci NOT NULL,
  `fullwidth` text COLLATE utf8_hungarian_ci NOT NULL,
  `innerwidth` text COLLATE utf8_hungarian_ci NOT NULL,
  `diameter` text COLLATE utf8_hungarian_ci NOT NULL,
  `nettweight` text COLLATE utf8_hungarian_ci NOT NULL,
  `maxweight` text COLLATE utf8_hungarian_ci NOT NULL,
  `maxperson` text COLLATE utf8_hungarian_ci NOT NULL,
  `maxengine` text COLLATE utf8_hungarian_ci NOT NULL,
  `suggestedengine` text COLLATE utf8_hungarian_ci NOT NULL,
  `maxengineweight` text COLLATE utf8_hungarian_ci NOT NULL,
  `feet` text COLLATE utf8_hungarian_ci NOT NULL,
  `airchamber` int(10) NOT NULL,
  `packagesize` text COLLATE utf8_hungarian_ci NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `boatimg` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `boatlist`
--

INSERT INTO `boatlist` (`id`, `modell`, `pvc1`, `pvc2`, `hyp1`, `hyp2`, `fulllength`, `innerlength`, `fullwidth`, `innerwidth`, `diameter`, `nettweight`, `maxweight`, `maxperson`, `maxengine`, `suggestedengine`, `maxengineweight`, `feet`, `airchamber`, `packagesize`, `stock`, `boatimg`) VALUES
(1, 'RIB-330B', 488000, 508000, 894000, 1169000, '330cm', '230cm', '160cm', '76cm', '42cm', '74kg', '550kg', '4 személy', '20 HP/14.5 kW', '15 HP/11 kW', '55kg', '15\"', 3, '280*120*50cm', 1, 'rib330b.jpg'),
(2, 'RIB-360B', 539000, 569000, 996000, 1300000, '360cm', '248cm', '180cm', '85cm', '42cm', '90kg', '700kg', '5 személy', '25 HP/18 kW', '20 HP/14 kW', '80kg', '15\"/20\"', 3, '330*125*55cm', 1, 'rib360b.jpg'),
(3, 'RIB-390C', 1118000, 1220000, 1474000, 1778000, '400cm', '312cm', '182cm', '107cm', '44cm', '110kg', '390kg', '5+1 személy', '40 HP/29 kW', '30 HP/22 kW', '110kg', '15\"/20\"', 3, '360*155*70cm', 1, 'rib390c.jpg'),
(4, 'RIB-430A', 904000, 935000, 1453000, 1809000, '420cm', '328cm', '188cm', '94cm', '47cm', '143kg', '1250kg', '6  személy', '40 HP/29 kW', '30 HP/22 kW', '98kg', '20\"/25\"', 3, '380*150*65cm', 1, 'rib430a.jpg'),
(5, 'RIB-430C', 1382000, 1484000, 1931000, 2286000, '430cm', '405cm', '196cm', '104cm', '46cm', '180kg', '1250kg', '6  személy', '50 HP/36 kW', '30 HP/22 kW', '98kg', '15\"/20\"', 3, '380*150*65cm', 1, 'rib430c.jpg'),
(6, 'RIB-480A-JR', 0, 1728000, 0, 0, '480cm', '410cm', '188cm', '94cm', '48cm', '160kg', '880kg', '6  személy', '60 HP/44.74kW', '50 HP/36.75kW', 'no information', '20\"', 3, '460*150*80cm', 1, 'rib480ajr.jpg'),
(7, 'RIB-480B-JR', 2185000, 2286000, 2927000, 3475000, '480cm', '378cm', '188cm', '94cm', '48cm', '160kg', '880kg', '6  személy', '60 HP/44.74kW', '50 HP/36.75kW', 'no information', '20', 3, '460*150*80cm', 1, 'rib480bjr.jpg'),
(8, 'RIB-480B', 2043000, 2144000, 2703000, 3110000, '480cm', '378cm', '188cm', '94cm', '48cm', '160kg', '880kg', '6  személy', '60 HP/44.74kW', '50 HP/36.75kW', 'no information', '20', 3, '460*150*80cm', 1, 'rib480b.jpg'),
(9, 'RIB-480D-JR', 2744000, 2845000, 3557000, 4024000, '480cm', '378cm', '188cm', '94cm', '48cm', '160kg', '880kg', '6  személy', '60 HP/44.7kW', '50 HP/36.75kW', 'no information', '20', 3, '460*150*80cm', 1, 'rib480djr.jpg'),
(10, ' RIB-480C-JR', 2398000, 2437000, 3131000, 3672000, '480cm', '378cm', '188cm', '94cm', '48cm', '160kg', '880kg', '6  személy', '60 HP/44.74kW', '50 HP/36.75kW', 'no information', '20', 3, '460*150*80cm', 1, 'rib480cjr.jpg'),
(11, 'RIB-480D', 2301000, 2418000, 3120000, 3650000, '480cm', '378cm', '188cm', '94cm', '48cm', '160kg', '880kg', '6  személy', '60 HP/44.74kW', '50 HP/36.75kW', 'no information', '20\"', 3, '460*150*80cm', 0, 'rib480d.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `material` varchar(25) COLLATE utf8_hungarian_ci NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(25) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `colors`
--

INSERT INTO `colors` (`id`, `color`, `material`, `price`, `image`) VALUES
(1, ' Terepmintás 1', 'PVC', 40000, 'pvc1.jpg'),
(2, ' Terepmintás 2', 'PVC', 40000, 'pvc2.jpg'),
(3, ' Ezüst', 'PVC', 30000, 'pvc3.jpg'),
(4, 'Villágos szürke', 'PVC', 30000, 'pvc4.jpg'),
(5, 'Sötét szürke', 'PVC', 30000, 'pvc5.jpg'),
(6, 'Fehér', 'PVC', 30000, 'pvc6.jpg'),
(7, 'Citromsárga', 'PVC', 30000, 'pvc7.jpg'),
(8, 'Égkék', 'PVC', 30000, 'pvc8.jpg'),
(9, 'Királykék', 'PVC', 30000, 'pvc9.jpg'),
(10, 'Sötét kék', 'PVC', 30000, 'pvc10.jpg'),
(11, 'Narancssárga', 'PVC', 30000, 'pvc11.jpg'),
(12, 'Piros', 'PVC', 30000, 'pvc12.jpg'),
(13, 'Fekete', 'PVC', 30000, 'pvc13.jpg'),
(14, 'Zöld', 'PVC', 30000, 'pvc14.jpg'),
(15, 'Világoskék metál', 'Hypalon', 30000, 'hyp1.jpg'),
(16, 'Világoskék', 'Hypalon', 30000, 'hyp2.jpg'),
(17, 'Fekete', 'Hypalon', 30000, 'hyp3.jpg'),
(18, 'Krém', 'Hypalon', 30000, 'hyp4.jpg'),
(19, 'Fehér', 'Hypalon', 30000, 'hyp5.jpg'),
(20, 'Homok', 'Hypalon', 30000, 'hyp6.jpg'),
(21, 'Kávé', 'Hypalon', 30000, 'hyp7.jpg'),
(22, 'Narancssárga', 'Hypalon', 30000, 'hyp8.jpg'),
(23, 'Piros', 'Hypalon', 30000, 'hyp9.jpg'),
(24, 'Bordó', 'Hypalon', 30000, 'hyp10.jpg'),
(25, 'Ezüst', 'Hypalon', 30000, 'hyp11.jpg'),
(26, 'Világos Szürke', 'Hypalon', 30000, 'hyp12.jpg'),
(27, 'Sötét szürke', 'Hypalon', 30000, 'hyp13.jpg'),
(28, 'Világos tengerkék', 'Hypalon', 30000, 'hyp14.jpg'),
(29, ' Tengerkék', 'Hypalon', 30000, 'hyp15.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `extraconnection`
--

CREATE TABLE `extraconnection` (
  `id` int(11) NOT NULL,
  `modellid` int(11) NOT NULL,
  `extraid` int(11) NOT NULL,
  `extraprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `extraconnection`
--

INSERT INTO `extraconnection` (`id`, `modellid`, `extraid`, `extraprice`) VALUES
(1, 1, 1, 132000),
(2, 1, 2, 6000),
(3, 1, 15, 36000),
(4, 1, 19, 8000),
(5, 1, 3, 37000),
(6, 1, 17, 39000),
(7, 1, 4, 66000),
(8, 1, 18, 67000),
(9, 1, 5, 87000),
(10, 1, 23, 63000),
(11, 1, 6, 18000),
(12, 1, 26, 71000),
(13, 2, 1, 132000),
(14, 2, 14, 193000),
(15, 2, 7, 61000),
(16, 2, 2, 6000),
(17, 2, 15, 46000),
(18, 2, 8, 27000),
(19, 2, 21, 81000),
(20, 2, 19, 8000),
(21, 2, 3, 46000),
(22, 2, 17, 39000),
(23, 2, 4, 66000),
(24, 2, 18, 67000),
(25, 2, 5, 86000),
(26, 2, 23, 63000),
(27, 2, 6, 18000),
(28, 2, 26, 92000),
(29, 3, 8, 27000),
(30, 3, 21, 92000),
(31, 3, 7, 61000),
(32, 3, 2, 6000),
(33, 3, 15, 61000),
(34, 3, 19, 8000),
(35, 3, 3, 46000),
(36, 3, 16, 92000),
(37, 3, 26, 112000),
(38, 3, 17, 39000),
(39, 3, 4, 66000),
(40, 3, 18, 67000),
(41, 3, 5, 86000),
(42, 3, 23, 63000),
(43, 3, 6, 18000),
(44, 3, 22, 326000),
(45, 4, 14, 193000),
(46, 4, 27, 285000),
(47, 4, 8, 26000),
(48, 4, 21, 102000),
(49, 4, 7, 61000),
(50, 4, 2, 6000),
(51, 4, 15, 61000),
(52, 4, 19, 8000),
(53, 4, 3, 51000),
(54, 4, 16, 92000),
(55, 4, 17, 39000),
(56, 4, 4, 66000),
(57, 4, 18, 67000),
(58, 4, 5, 86000),
(59, 4, 6, 18000),
(60, 4, 23, 63000),
(61, 4, 22, 325000),
(62, 4, 26, 122000),
(63, 5, 8, 27000),
(64, 5, 21, 102000),
(65, 5, 10, 102000),
(66, 5, 7, 61000),
(67, 5, 2, 6000),
(68, 5, 17, 39000),
(69, 5, 15, 61000),
(70, 5, 19, 8000),
(71, 5, 3, 51000),
(72, 5, 16, 92000),
(73, 5, 4, 66000),
(74, 5, 18, 67000),
(75, 5, 5, 87000),
(76, 5, 23, 63000),
(77, 5, 6, 18000),
(78, 5, 22, 325000),
(79, 5, 26, 132000),
(80, 6, 28, 183000),
(81, 6, 29, 102000),
(82, 6, 21, 132000),
(83, 6, 8, 27000),
(84, 6, 7, 61000),
(85, 6, 2, 6000),
(86, 6, 15, 61000),
(87, 6, 19, 20000),
(88, 6, 3, 61000),
(89, 6, 16, 163000),
(90, 6, 17, 39000),
(91, 6, 4, 66000),
(92, 6, 10, 102000),
(93, 6, 13, 376000),
(94, 6, 18, 67000),
(95, 6, 5, 86000),
(96, 6, 23, 63000),
(97, 6, 6, 18000),
(98, 6, 22, 376000),
(99, 6, 26, 203000),
(100, 7, 7, 61000),
(104, 7, 2, 6000),
(105, 7, 15, 61000),
(106, 7, 19, 20000),
(107, 7, 3, 61000),
(108, 7, 16, 163000),
(109, 7, 17, 39000),
(110, 7, 4, 66000),
(111, 7, 13, 376000),
(112, 7, 18, 67000),
(113, 7, 5, 86000),
(114, 7, 23, 63000),
(115, 7, 6, 18000),
(116, 7, 22, 376000),
(117, 7, 26, 203000),
(118, 8, 7, 61000),
(119, 8, 10, 102000),
(120, 8, 8, 27000),
(121, 8, 2, 6000),
(122, 8, 15, 61000),
(123, 8, 19, 20000),
(124, 8, 3, 61000),
(125, 8, 16, 102000),
(126, 8, 17, 39000),
(127, 8, 4, 66000),
(128, 8, 13, 376000),
(129, 8, 18, 67000),
(130, 8, 5, 87000),
(131, 8, 23, 63000),
(132, 8, 6, 18000),
(133, 8, 22, 376000),
(134, 8, 26, 203000),
(136, 9, 2, 6000),
(139, 9, 15, 61000),
(140, 9, 19, 20000),
(141, 9, 3, 61000),
(142, 9, 16, 163000),
(143, 9, 17, 39000),
(144, 9, 4, 66000),
(145, 9, 13, 376000),
(146, 9, 18, 67000),
(147, 9, 5, 86000),
(148, 9, 23, 63000),
(149, 9, 6, 18000),
(150, 9, 22, 376000),
(151, 9, 26, 203000),
(152, 10, 7, 61000),
(153, 10, 33, 42000),
(154, 10, 34, 48000),
(155, 10, 31, 64000),
(156, 10, 32, 99000),
(157, 10, 2, 6000),
(158, 10, 15, 61000),
(159, 10, 19, 20000),
(160, 10, 3, 61000),
(161, 10, 16, 215000),
(162, 10, 17, 39000),
(163, 10, 4, 64000),
(164, 10, 13, 365000),
(165, 10, 18, 71000),
(166, 10, 5, 87000),
(167, 10, 23, 64000),
(168, 10, 6, 19000),
(169, 10, 22, 365000),
(170, 10, 26, 147000),
(171, 11, 2, 9000),
(172, 11, 15, 117000),
(173, 11, 19, 27000),
(174, 11, 3, 90000),
(175, 11, 16, 144000),
(176, 11, 17, 90000),
(177, 11, 4, 44850),
(178, 11, 13, 484000),
(179, 11, 18, 94000),
(180, 11, 5, 117000),
(181, 11, 23, 82000),
(182, 11, 6, 24000),
(183, 11, 22, 507000),
(184, 11, 26, 226000),
(185, 3, 13, 356000),
(186, 9, 7, 61000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `extralist`
--

CREATE TABLE `extralist` (
  `id` int(11) NOT NULL,
  `extraName` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `extralist`
--

INSERT INTO `extralist` (`id`, `extraName`) VALUES
(1, 'Jockey konzol'),
(2, 'Mentőmellény'),
(3, 'Alumínium vázas bimini tető'),
(4, 'Rozsdamentes acél C alakú létra'),
(5, 'Mechanikus kormánykerék (rozsdamentes acél kerék)'),
(6, 'Mágneses iránytű'),
(7, 'FRP fellépő\r\n'),
(8, 'Navigációs fény'),
(9, 'Akkumlátor biztosítékkal (12V/80A,EU kapcsoló) (akkumlátor dobozzal)'),
(10, '60 literes benzintartály'),
(11, 'Hűtőszekrény doboz(21L, 12V/46W, 45*30.3*42CM, Hőmérséklet: 0°C-12°C)'),
(12, 'Hidraulikus kormányzás\r\n(Legaláb 90HP)'),
(13, 'Tölgyfa padló'),
(14, 'Középkonzol és ülés doboz párnákkal'),
(15, 'Csónak takaró ponyva'),
(16, 'Rozsdamentes acél vázas bimini tető'),
(17, 'Kötél létra'),
(18, 'Mechanikus kormánykerék (műanyag kerék)'),
(19, 'Összecsukható acél horgony '),
(20, 'Duda'),
(21, 'Rozsdamentes acél torony'),
(22, 'Hajó futó, fék nélküli'),
(23, 'Elektromos töltő pumpa akkumlátorral'),
(24, 'Étkezőasztal'),
(25, 'Hidraulikus kormányrúd (2 motorhoz)'),
(26, 'Fa doboz csomagolás'),
(27, 'Középkonzol üléssel és ülés doboz párnákkal'),
(28, 'Középkonzol üveg szélvédővel és 6 pontos kapcsolóval'),
(29, 'Ülés doboz párnákkal'),
(30, 'FRP torony'),
(31, 'Napozóágy párnával'),
(32, 'Elülső rozsdamentes acél korlát FRP bázissal'),
(33, 'Csúszóoszlop, háttámla helyett'),
(34, 'Üvegszálas torony navigációs fénnyel');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `manager` text COLLATE utf8_hungarian_ci NOT NULL,
  `password` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `manager`
--

INSERT INTO `manager` (`id`, `manager`, `password`) VALUES
(3, 'Manager001', '022719ea8f7a5a08f4e0e69f17c0bec883072387');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orderbasic`
--

CREATE TABLE `orderbasic` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `orderedbasicname` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `orderbasic`
--

INSERT INTO `orderbasic` (`id`, `orderid`, `orderedbasicname`) VALUES
(28, 46, 'Emelőhorog'),
(29, 46, '60L beépített üzemanyagtartály			'),
(30, 46, 'TMC500 gyors fenékvízszivattyú'),
(31, 46, 'Műanyag akkumlátor doboz'),
(32, 46, 'Üvegszálas horgonytálca'),
(33, 46, 'Láb pumpa'),
(34, 46, 'Első és hátsó kabin (ülés, fenékvízszivattyú)'),
(35, 46, 'Középkonzol (elülső üléssel és üveg szélvédővel)'),
(36, 46, 'Összecsukható hátsó ülés'),
(37, 46, 'Rozsdamentes torony navigációs fénnyel'),
(38, 46, 'Párnaszett'),
(39, 46, 'Javítókészlet'),
(40, 46, 'FRP üvegszálas vagy rozsdamentes acél torony'),
(41, 46, 'Napozóágy párnával'),
(42, 47, 'Elülső konzol'),
(43, 47, 'Elülső kabin és kormánypad párnákkal'),
(44, 47, 'Emelőhorog'),
(45, 47, 'Fenékvízszivattyú'),
(46, 47, 'Üzemi kapcsoló'),
(47, 47, 'Rozsdamentes acél háttámla'),
(48, 47, 'Két evező'),
(49, 47, 'Javítókészlet'),
(50, 47, 'Láb pumpa'),
(51, 47, 'Üvegszálas horgonytálca');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orderextra`
--

CREATE TABLE `orderextra` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `orderedextraid` int(11) NOT NULL,
  `extraprice` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `orderextra`
--

INSERT INTO `orderextra` (`id`, `orderid`, `orderedextraid`, `extraprice`) VALUES
(5, 11, 5, 58500),
(6, 11, 23, 40950),
(7, 11, 6, 11700),
(8, 11, 23, 40950),
(9, 11, 6, 11700),
(10, 11, 26, 46800),
(11, 15, 7, 39000),
(12, 15, 10, 66300),
(13, 16, 7, 39000),
(14, 16, 10, 66300),
(15, 17, 6, 11700),
(16, 17, 22, 253500),
(17, 17, 26, 113100),
(18, 18, 1, 83850),
(19, 18, 2, 4680),
(20, 18, 15, 23400),
(21, 19, 8, 17550),
(22, 19, 15, 50700),
(23, 19, 4, 42900),
(24, 19, 23, 40950),
(25, 19, 26, 93600),
(26, 20, 1, 83850),
(27, 20, 2, 4680),
(28, 20, 15, 23400),
(29, 20, 19, 5850),
(30, 20, 3, 23400),
(31, 21, 34, 33150),
(32, 21, 2, 4680),
(33, 21, 16, 72150),
(34, 21, 5, 58500),
(35, 21, 26, 113100),
(36, 22, 26, 58500),
(37, 23, 6, 11700),
(38, 23, 26, 58500),
(39, 24, 21, 64350),
(40, 26, 1, 83850),
(41, 27, 26, 46800),
(42, 28, 7, 39000),
(43, 29, 21, 52650),
(44, 30, 19, 5850),
(45, 30, 16, 64350),
(46, 31, 5, 58500),
(47, 32, 18, 46800),
(48, 32, 5, 58500),
(49, 32, 23, 40950),
(50, 32, 6, 11700),
(51, 32, 22, 214500),
(52, 33, 5, 58500),
(53, 33, 23, 40950),
(54, 33, 6, 11700),
(55, 33, 22, 253500),
(56, 33, 26, 113100),
(57, 34, 7, 39000),
(58, 35, 1, 83850),
(59, 35, 3, 23400),
(60, 35, 18, 46800),
(61, 35, 5, 58500),
(62, 36, 7, 39000),
(63, 36, 2, 4680),
(64, 36, 3, 44850),
(65, 36, 13, 241800),
(66, 36, 23, 40950),
(67, 36, 26, 113100),
(68, 37, 2, 4680),
(69, 37, 16, 64350),
(70, 37, 5, 58500),
(71, 37, 22, 226200),
(72, 38, 1, 83850),
(73, 39, 1, 83850),
(74, 39, 3, 23400),
(75, 39, 18, 46800),
(76, 39, 6, 11700),
(77, 40, 1, 83850),
(78, 40, 4, 42900),
(79, 42, 2, 6000),
(80, 43, 7, 61000),
(81, 43, 15, 46000),
(82, 43, 21, 81000),
(83, 43, 3, 46000),
(84, 43, 4, 66000),
(85, 43, 5, 86000),
(86, 43, 6, 18000),
(87, 44, 15, 61000),
(88, 44, 4, 66000),
(89, 44, 6, 18000),
(90, 45, 19, 20000),
(91, 45, 4, 66000),
(92, 45, 6, 18000),
(93, 46, 7, 61000),
(94, 46, 16, 163000),
(95, 46, 5, 86000),
(96, 47, 8, 27000),
(97, 47, 21, 102000),
(98, 47, 10, 102000),
(99, 47, 7, 61000),
(100, 47, 2, 6000),
(101, 47, 17, 39000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ordersum`
--

CREATE TABLE `ordersum` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `buyername` text COLLATE utf8_hungarian_ci NOT NULL,
  `phone` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` text COLLATE utf8_hungarian_ci NOT NULL,
  `boatid` int(11) NOT NULL,
  `colorid` int(11) NOT NULL,
  `material` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `materialprice` int(50) NOT NULL,
  `bodyprice` int(50) NOT NULL,
  `sumprice` int(50) NOT NULL,
  `sumvatprice` double NOT NULL,
  `status` text COLLATE utf8_hungarian_ci DEFAULT 'függőben'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `ordersum`
--

INSERT INTO `ordersum` (`id`, `date`, `buyername`, `phone`, `email`, `boatid`, `colorid`, `material`, `materialprice`, `bodyprice`, `sumprice`, `sumvatprice`, `status`) VALUES
(1, '2021-06-13 17:45:11', 'asd', '301112222', 'asdasdasd', 1, 6, 'PVC', 30000, 0, 500000, 0, 'lezárt'),
(3, '2021-06-21 20:57:42', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 1, 2, 'Array', 0, 327600, 50000, 0, 'függőben'),
(4, '2021-06-21 21:10:53', 'Teszt Vásárló 10', '+36307813344', 'pergati@gmail.com', 1, 3, 'PVC', 30000, 327600, 50000, 0, 'függőben'),
(5, '2021-06-21 21:24:08', 'Teszt Vásárló 3', '307813344', 'pergati@gmail.com', 1, 23, 'Hypalon', 30000, 585000, 50000, 0, 'függőben'),
(6, '2021-06-21 21:24:47', 'Teszt Vásárló4', '307813344', 'pergati@gmail.com', 1, 15, 'Hypalon', 30000, 760500, 50000, 0, 'függőben'),
(7, '2021-06-21 21:25:48', 'Teszt Vásárló 5', '307813344', 'pergati@gmail.com', 1, 18, 'Hypalon', 30000, 585000, 50000, 0, 'függőben'),
(8, '2021-06-22 21:03:00', 'Teszt Vásárló 66', '307813344', 'pergati@gmail.com', 2, 2, 'PVC', 40000, 345150, 552850, 0, 'függőben'),
(9, '2021-06-22 21:04:45', 'Teszt Vásárló 67', '307813344', 'pergati@gmail.com', 2, 15, 'Hypalon', 30000, 834600, 1120050, 0, 'függőben'),
(10, '2021-06-22 21:20:11', 'Teszt Vásárló 10', '307813344', 'pergati@gmail.com', 3, 1, 'PVC', 40000, 721500, 779050, 0, 'függőben'),
(11, '2021-06-23 19:16:58', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 3, 2, 'PVC', 40000, 721500, 761500, 0, 'függőben'),
(12, '2021-06-23 20:49:46', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 4, 1, 'PVC', 40000, 585000, 808300, 0, 'függőben'),
(13, '2021-06-23 21:09:46', 'Teszt Vásárló 66', '307813344', 'pergati@gmail.com', 4, 2, 'PVC', 40000, 624000, 1036450, 0, 'függőben'),
(14, '2021-06-24 20:14:29', 'Teszt Vásárló 66', '307813344', 'pergati@gmail.com', 7, 1, 'PVC', 40000, 1501500, 1695550, 0, 'függőben'),
(15, '2021-06-24 20:41:08', 'Teszt Vásárló 22', '307813344', 'pergati@gmail.com', 8, 5, 'PVC', 30000, 1306500, 1441800, 0, 'függőben'),
(16, '2021-06-24 20:52:58', 'Teszt Vásárló 10', '307813344', 'pergati@gmail.com', 8, 1, 'PVC', 40000, 1306500, 0, 0, 'függőben'),
(17, '2021-06-24 20:57:17', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 8, 15, 'Hypalon', 30000, 1989000, 2019000, 0, 'függőben'),
(18, '2021-06-24 20:59:42', 'Teszt Vásárló 66', '307813344', 'pergati@gmail.com', 1, 29, 'Hypalon', 30000, 585000, 726930, 0, 'függőben'),
(19, '2021-06-24 21:32:04', 'Teszt Vásárló Béla', '06701257894', 'jakab@gmail.com', 5, 18, 'Hypalon', 30000, 930150, 1205850, 0, 'jóváhagyva'),
(20, '2021-06-28 19:36:46', 'Gipsz Jakab', '06307814455', 'jakabdegipsz@gmail.com', 1, 11, 'PVC', 30000, 312000, 483180, 0, 'függőben'),
(21, '2021-07-04 12:25:48', 'Teszt Vásárló 66', '307813344', 'proba@gmail.com', 10, 15, 'Hypalon', 30000, 2008500, 2320080, 0, 'függőben'),
(22, '2021-07-04 12:28:36', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 2, 1, 'PVC', 40000, 345150, 443650, 0, 'függőben'),
(23, '2021-07-04 12:29:00', 'Teszt Vásárló 2', '307813344', 'pergati@gmail.com', 2, 1, 'PVC', 40000, 345150, 455350, 0, 'függőben'),
(24, '2021-07-04 12:35:24', 'Teszt Vásárló 10', '307813344', 'pergati@gmail.com', 5, 1, 'PVC', 40000, 585000, 689350, 0, 'függőben'),
(25, '2021-07-04 12:40:24', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 8, 6, 'PVC', 30000, 1306500, 1336500, 0, 'függőben'),
(26, '2021-07-04 12:44:02', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 1, 1, 'PVC', 40000, 312000, 435850, 0, 'függőben'),
(27, '2021-07-04 16:02:48', 'Teszt Vásárló 64', '307813344', 'pergati@gmail.com', 1, 1, 'PVC', 40000, 312000, 398800, 0, 'függőben'),
(28, '2021-07-04 16:05:11', 'Teszt Vásárló 1', '36307813344', 'pergati@gmail.com', 2, 15, 'Hypalon', 30000, 643500, 712500, 0, 'függőben'),
(29, '2021-07-04 16:06:17', 'Teszt Vásárló 3', '307813344', 'pergati@gmail.com', 2, 3, 'PVC', 30000, 366600, 449250, 0, 'függőben'),
(30, '2021-07-04 16:06:39', 'Teszt Vásárló 5', '307813344', 'pergati@gmail.com', 3, 24, 'Hypalon', 30000, 955500, 1055700, 0, 'függőben'),
(31, '2021-07-04 16:07:18', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 3, 8, 'PVC', 30000, 721500, 810000, 0, 'elutasítva'),
(32, '2021-07-08 18:39:34', 'Teszt Vásárló', '06301112224', 'info@teszt.hu', 3, 1, 'PVC', 40000, 721500, 1133950, 0, 'jóváhagyva'),
(33, '2021-07-19 20:25:05', 'Teszt Vásárló 66', '307813344', 'pergati@gmail.com', 7, 15, 'Hypalon', 30000, 2320500, 2828250, 3591877.5, 'függőben'),
(34, '2021-07-19 20:36:50', 'Teszt Vásárló 1', '307813344', 'pergati@gmail.com', 3, 2, 'PVC', 40000, 780000, 859000, 1090930, 'függőben'),
(35, '2021-07-30 10:40:48', 'Teszt Vásárló', '+36306185889', 'info@gigatrend.hu', 1, 4, 'PVC', 30000, 312000, 554550, 704278.5, 'függőben'),
(36, '2021-07-30 11:35:15', 'Teszt Vásárló22', '301111111', 'tesztvasarlo@gmail.com', 7, 10, 'PVC', 30000, 1501500, 2015880, 2560167.6, 'függőben'),
(37, '2021-07-30 11:35:58', 'Teszt Vásárló23', '+36306185889', 'info@gigatrend.hu', 5, 19, 'Hypalon', 30000, 1158300, 1542030, 1958378.1, 'függőben'),
(38, '2021-08-02 12:46:12', 'Teszt Vásárló55', '301111111', 'tesztvasarlo@gmail.com', 1, 2, 'PVC', 40000, 312000, 435850, 553529.5, 'függőben'),
(39, '2021-08-02 12:54:43', 'Teszt Vásárló', '+36306185889', 'info@gigatrend.hu', 1, 8, 'PVC', 30000, 327600, 523350, 664654.5, 'függőben'),
(40, '2021-08-11 12:32:16', 'Teszt Vásárló', '+36306185889', 'info@gigatrend.hu', 1, 2, 'PVC', 40000, 312000, 478750, 608012.5, 'függőben'),
(41, '2021-08-23 18:39:25', 'Teszt Vásárló 10', '+36307813344', 'pergati@gmail.com', 8, 3, 'PVC', 30000, 2043000, 2323000, 2950210, 'függőben'),
(42, '2021-08-23 18:46:29', 'Teszt Vásárló 1', '+36307813344', 'pergati@gmail.com', 8, 1, 'PVC', 40000, 2144000, 2190000, 2781300, 'függőben'),
(43, '2021-08-23 18:50:59', 'Teszt Vásárló 1', '+36307813344', 'pergati@gmail.com', 2, 15, 'Hypalon', 30000, 996000, 1430000, 1816100, 'függőben'),
(44, '2021-08-23 18:58:48', 'Teszt Vásárló 5', '+36307813344', 'pergati@gmail.com', 9, 2, 'PVC', 40000, 2744000, 2929000, 3719830, 'függőben'),
(45, '2021-08-23 19:07:59', 'Teszt Vásárló 66', '+36307813344', 'pergati@gmail.com', 7, 22, 'Hypalon', 30000, 3475000, 3609000, 4583430, 'függőben'),
(46, '2021-08-23 19:09:58', 'Teszt Vásárló 10', '307813344', 'pergati@gmail.com', 7, 17, 'Hypalon', 30000, 3475000, 3815000, 4845050, 'függőben'),
(47, '2021-08-23 19:13:40', 'Teszt Vásárló 1', '+36307813344', 'pergati@gmail.com', 5, 17, 'Hypalon', 30000, 2286000, 2653000, 3369310, 'függőben');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `basicconnection`
--
ALTER TABLE `basicconnection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modellid` (`modellid`),
  ADD KEY `basicid` (`basicid`);

--
-- A tábla indexei `basiclist`
--
ALTER TABLE `basiclist`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `boatlist`
--
ALTER TABLE `boatlist`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `extraconnection`
--
ALTER TABLE `extraconnection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modellid` (`modellid`),
  ADD KEY `extraid` (`extraid`);

--
-- A tábla indexei `extralist`
--
ALTER TABLE `extralist`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orderbasic`
--
ALTER TABLE `orderbasic`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orderextra`
--
ALTER TABLE `orderextra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `orderedextraid` (`orderedextraid`);

--
-- A tábla indexei `ordersum`
--
ALTER TABLE `ordersum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boatid` (`boatid`),
  ADD KEY `colorid` (`colorid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `basicconnection`
--
ALTER TABLE `basicconnection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT a táblához `basiclist`
--
ALTER TABLE `basiclist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT a táblához `boatlist`
--
ALTER TABLE `boatlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT a táblához `extraconnection`
--
ALTER TABLE `extraconnection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT a táblához `extralist`
--
ALTER TABLE `extralist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `orderbasic`
--
ALTER TABLE `orderbasic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT a táblához `orderextra`
--
ALTER TABLE `orderextra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT a táblához `ordersum`
--
ALTER TABLE `ordersum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `basicconnection`
--
ALTER TABLE `basicconnection`
  ADD CONSTRAINT `basicconnection_ibfk_1` FOREIGN KEY (`modellid`) REFERENCES `boatlist` (`id`),
  ADD CONSTRAINT `basicconnection_ibfk_2` FOREIGN KEY (`basicid`) REFERENCES `basiclist` (`id`);

--
-- Megkötések a táblához `extraconnection`
--
ALTER TABLE `extraconnection`
  ADD CONSTRAINT `extraconnection_ibfk_1` FOREIGN KEY (`modellid`) REFERENCES `boatlist` (`id`),
  ADD CONSTRAINT `extraconnection_ibfk_2` FOREIGN KEY (`extraid`) REFERENCES `extralist` (`id`);

--
-- Megkötések a táblához `orderextra`
--
ALTER TABLE `orderextra`
  ADD CONSTRAINT `orderextra_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `ordersum` (`id`),
  ADD CONSTRAINT `orderextra_ibfk_2` FOREIGN KEY (`orderedextraid`) REFERENCES `extralist` (`id`);

--
-- Megkötések a táblához `ordersum`
--
ALTER TABLE `ordersum`
  ADD CONSTRAINT `ordersum_ibfk_1` FOREIGN KEY (`boatid`) REFERENCES `boatlist` (`id`),
  ADD CONSTRAINT `ordersum_ibfk_2` FOREIGN KEY (`colorid`) REFERENCES `colors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
