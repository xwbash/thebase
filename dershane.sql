-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Ara 2021, 21:30:53
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dershane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adres`
--

CREATE TABLE `adres` (
  `ID` int(11) NOT NULL,
  `Il` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Ilce` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `AcikAdres` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `adres`
--

INSERT INTO `adres` (`ID`, `Il`, `Ilce`, `AcikAdres`) VALUES
(1, 'Izmir', 'Karabağlar', '5672 Sokak No 27 Kat 2'),
(2, 'Izmir', 'Eserkent', '4861 Sokak Numara 70'),
(3, 'İZMİR', 'Karabağlar Sarıyer Mahall', '5672 Sokak, NO:27 KAT:2'),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, 'İzmir', 'Karabağlar Sarıyer Mahall', 'asdasdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

CREATE TABLE `dersler` (
  `DersID` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `DersAdi` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `AKTS` varchar(7) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`DersID`, `DersAdi`, `AKTS`) VALUES
('MW12', 'Matematik', '2.5'),
('', '', ''),
('', '', ''),
('BP10', 'BilgisayarProg', '2.0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersprogrami`
--

CREATE TABLE `dersprogrami` (
  `SchoolNum` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `DersKodu` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `dersprogrami`
--

INSERT INTO `dersprogrami` (`SchoolNum`, `DersKodu`) VALUES
('', ''),
('12477899', 'MW12'),
('12477899', 'MW12'),
('', ''),
('', ''),
('334455', 'BP10'),
('', ''),
('334455', 'MW12'),
('12477899', 'BP10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `devamsizlik`
--

CREATE TABLE `devamsizlik` (
  `SchoolNum` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `AbsenceDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `devamsizlik`
--

INSERT INTO `devamsizlik` (`SchoolNum`, `AbsenceDate`) VALUES
('200716057', '2021-12-16'),
('', '0000-00-00'),
('12477899', '2021-12-11'),
('', '0000-00-00'),
('12477899', '2021-12-14'),
('12477899', '2021-12-19'),
('', '0000-00-00'),
('334455', '2021-12-16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlar`
--

CREATE TABLE `notlar` (
  `SchoolNum` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Puan` int(3) NOT NULL,
  `DersKodu` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `notlar`
--

INSERT INTO `notlar` (`SchoolNum`, `Puan`, `DersKodu`) VALUES
('', 0, ''),
('12477899', 85, 'MW12'),
('', 0, ''),
('12477899', 42, 'BP10'),
('', 0, ''),
('334455', 56, 'BP10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roller`
--

CREATE TABLE `roller` (
  `ID` int(2) NOT NULL,
  `Isim` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `roller`
--

INSERT INTO `roller` (`ID`, `Isim`) VALUES
(1, 'Admn'),
(2, 'User');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `ID` int(5) NOT NULL,
  `isim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyisim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `şifre` varchar(150) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefonumarasi` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `yetki` int(11) NOT NULL,
  `EklenmeTarihi` datetime DEFAULT NULL,
  `DogumGunu` date DEFAULT NULL,
  `SchoolNum` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `isim`, `soyisim`, `şifre`, `mail`, `telefonumarasi`, `yetki`, `EklenmeTarihi`, `DogumGunu`, `SchoolNum`) VALUES
(1, 'Yiğit', 'Aydın', '1234', 'myintrog@gmail.com', '5554443322', 1, '2021-12-09 19:32:53', '2001-11-29', '200716057'),
(2, 'mahmut', 'emir', '123', 'mahmut@gmail.com', '5553334422', 2, '2021-12-08 19:34:41', '2001-02-08', '12477899'),
(3, 'Yiğithan', 'Aydın', '1234', 'asd@gmail.com', '5524087266', 0, NULL, '2001-11-29', NULL),
(4, '', '', NULL, '', '0', 0, NULL, '0000-00-00', NULL),
(5, 'Yiğithan', 'Aydın', '123', '200716057@ogr.cbu.edu.tr', '5524087266', 2, NULL, '2021-12-23', '334455');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adres`
--
ALTER TABLE `adres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
