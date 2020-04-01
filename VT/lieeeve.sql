-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Mar 2020, 17:57:21
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `lieeeve`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlik`
--

CREATE TABLE `etkinlik` (
  `etkinlik_adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_tarihi` date NOT NULL,
  `etkinlik_fotograf` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_tanim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_kategori` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `okul` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlikid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `etkinlik`
--

INSERT INTO `etkinlik` (`etkinlik_adi`, `etkinlik_tarihi`, `etkinlik_fotograf`, `etkinlik_tanim`, `etkinlik_kategori`, `okul`, `email`, `etkinlikid`) VALUES
('Kadın İş Derse\'20', '2020-03-04', 'https://pbs.twimg.com/media/ERKb4fJWsAEcPPY?format=jpg&name=large', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare massa eget egestas purus. Nisi est sit amet facilisis. Amet nisl purus in mollis nunc. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Pellentesque dignissim enim sit amet venenatis urna cursus. Turpis in eu mi bibendum neque. Turpis egestas maecenas pharetra convallis posuere morbi. At erat pellentesque adipiscing commodo elit at imperdiet. Vitae proin sagittis nisl rhoncus mattis rhoncus urna.', 'Salon Etkinliği', 'Balıkesir Üniversitesi', 'ieeebaun@ieee.com', 1),
('Hour Of Code', '2020-12-13', 'https://pbs.twimg.com/media/ELgY7kIWkAcbmbU?format=jpg&name=medium', 'IEEE BAUN Öğrenci Topluluğu Computer Society ve Educational Activities ortaklığında Hour of Code etkinliğimizi gerçekleştireceğiz. Etkinliğimiz 13 Aralık Cuma günü saat 14:00’da Gazi İmam Hatip Ortaokulu’nda gerçekleşecektir. Detaylar için: https://forms.gle/NtvxZvnGY7q2cgMcA', 'Workshop', 'Balıkesir Üniversitesi', 'baunhourofcode@ieee.com', 2),
('Teach And Make', '2020-12-11', 'https://pbs.twimg.com/media/ELViiMnWwAAbRG0?format=jpg&name=medium', 'IEEE BAUN Öğrenci Topluluğu Educational Activities olarak dönemin ikinci Teach&Make’ini gerçekleştiriyoruz. Etkinliğimiz 11 Aralık Çarşamba günü saat 12:00’da Mehmet Şerif Eğinlioğlu Ortaokulu’nda gerçekleşecektir. Katılım formu ve detaylar için: https://forms.gle/tVwn2YH7arwNZVQ97', 'Workshop', 'Balıkesir Üniversitesi', 'baunteachandmake@ieee.org', 3),
('Renk Sensörü Workshop', '2020-11-30', 'https://pbs.twimg.com/media/EKc2u6WXUAA5FK2?format=jpg&name=small', 'IEEE BAUN Robotics and Automation Society ve Eğitim Seminer komitemizin ortaklaşa düzenlediği\"Temel elektronik eğitimi ve Renk sensörü workshop\" 30Kasım Cumartesi günü gerçekleşecektir. Herkesi bekliyoruz!\r\nKatılım formumuz için: http://forms.gle/w5Zd8RsXtEeYF8…', 'Workshop', 'Balıkesir üniversitesi', 'baunrasworkshop@ieee.org', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `okullar`
--

CREATE TABLE `okullar` (
  `okulid` int(11) NOT NULL,
  `okul_isim` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `etkinlik`
--
ALTER TABLE `etkinlik`
  ADD PRIMARY KEY (`etkinlikid`);

--
-- Tablo için indeksler `okullar`
--
ALTER TABLE `okullar`
  ADD PRIMARY KEY (`okulid`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`pw`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `etkinlik`
--
ALTER TABLE `etkinlik`
  MODIFY `etkinlikid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `okullar`
--
ALTER TABLE `okullar`
  MODIFY `okulid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
