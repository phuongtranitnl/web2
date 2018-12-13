-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2018 at 01:11 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Software`
--

-- --------------------------------------------------------

--
-- Table structure for table `Application`
--

CREATE TABLE IF NOT EXISTS `Application` (
  `IdCategory` int(10) unsigned NOT NULL,
  `IdType` int(10) unsigned NOT NULL,
  `IdApplication` int(10) unsigned NOT NULL,
  `NameApp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Developer` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Icon` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Image1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LinkDownload` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumberDownload` int(11) NOT NULL DEFAULT '0',
  `Version` double(8,2) NOT NULL,
  `Size` double(8,2) NOT NULL,
  `SortDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(16) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Application`
--

INSERT INTO `Application` (`IdCategory`, `IdType`, `IdApplication`, `NameApp`, `Developer`, `Description`, `Icon`, `Image1`, `Image2`, `Image3`, `LinkDownload`, `NumberDownload`, `Version`, `Size`, `SortDescription`, `price`) VALUES
(1, 1, 1, 'Microsoft edge', 'Microsoft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'edgeicon.png', 'edge1.jpg', 'edge2.jpg', 'edge3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 5, 1.00, 50.00, 'Lướt web nhanh hơn bao giờ hết', 0),
(1, 1, 4, 'Stick share', 'the verb', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'stickshareicon.png', 'stickshare1.png', 'stickshare2.png', 'stickshare3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 60, 1.00, 50.00, 'Chụp nhanh màn hình', 43600),
(1, 6, 5, 'Recent bar', 'apple', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'recentbaricon.png', 'recentbar1.png', 'recentbar2.png', 'recentbar3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 20, 1.00, 50.00, 'Mở nhanh ứng dụng gần đây', 0),
(1, 3, 6, 'Splashtop', 'Ramus', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'splashtopicon.png', 'volumeslide4.png', 'recentbar4.png', 'edge4.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 15, 1.00, 50.00, 'Biến màn hình điện thoại thành màn hình phụ', 0),
(1, 1, 7, 'Datally', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'datallyicon.png', 'datally1.png', 'datally2.png', 'datally3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 11, 1.00, 50.00, 'Theo dõi lưu lượng sử dụng', 145000),
(1, 1, 8, 'File go', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'filesgoicon.png', 'filego1.png', 'filego2.png', 'filego3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Quan ly file', 23400),
(1, 1, 9, 'Just aline', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'justalineicon.png', 'justaline1.png', 'justaline2.png', 'justaline3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR', 0),
(1, 1, 10, 'Forest', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'floatingbaricon.png', 'forestlive1.png', 'forestlive2.png', 'forestlive3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR', 73400),
(4, 18, 11, 'Halflife', 'Valve Corporat', 'Half-Life is a first-person shooter video game developed by Valve and published by Sierra Studios for Microsoft Windows in 1998. It was Valve''s debut product and the first in the Half-Life series.', '220px-Half-Life_Cover_Art.jpg', 'Half-Life-Cover.jpg', '', '', 'https://store.steampowered.com/app/70/HalfLife/', 0, 2.00, 400.00, 'Half-Life (stylized HλLF-', 0),
(2, 1, 12, 'Amazon Kindle', 'Hon Hai Precisi', 'The Amazon Kindle is a series of e-readers designed and marketed by Amazon. Amazon Kindle devices enable users to browse, buy, download, and read e-books, newspapers, magazines and other digital media via wireless networking to the Kindle Store', '51hrdzXLUHL.jpg', '51hrdzXLUHL.jpg', '', '', 'https://www.amazon.com/kindle-dbs/fd/kcp', 0, 4.00, 20.00, 'The Amazon Kindle is a se', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Banners`
--

CREATE TABLE IF NOT EXISTS `Banners` (
  `IdBanner` int(10) unsigned NOT NULL,
  `ContentBanner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ImageBanner` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Banners`
--

INSERT INTO `Banners` (`IdBanner`, `ContentBanner`, `ImageBanner`) VALUES
(1, 'Nơi đây tổng hợp các phần mềm hoàn toàn miễn phí', 'banner page.jpg'),
(2, 'Những trò chơi hay nhất đang đợi bạn', 'banner 2.jpg'),
(3, 'Hãy chia sẽ trang này cho bạn bè của bạn', 'banner 3.jpg'),
(4, 'Những ứng dụng mang đến trải nghiệm tốt nhất', 'banner 4.jpg'),
(5, 'Notepad ++', 'chameleon.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `itemid` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `appid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`itemid`, `created_at`, `updated_at`, `userid`, `appid`) VALUES
(17, '2018-12-13', NULL, 4, 7),
(18, '2018-12-13', NULL, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `IdCategory` int(10) unsigned NOT NULL,
  `NameCategory` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`IdCategory`, `NameCategory`) VALUES
(1, 'Software'),
(2, 'Book'),
(3, 'Video'),
(4, 'Game');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `imageid` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageid`, `appid`, `image`) VALUES
(1, 1, 'edge1.jpg'),
(2, 1, 'edge2.jpg'),
(3, 1, 'edge3.jpg'),
(4, 4, 'sticksharei'),
(5, 4, 'stickshare1'),
(6, 4, 'sticksharei'),
(7, 4, 'stickshareicon.png'),
(8, 4, 'stickshare1.png'),
(9, 4, 'stickshare2.png'),
(10, 4, 'stickshare3.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
  `reviewid` int(11) NOT NULL,
  `IdApplication` int(10) unsigned NOT NULL,
  `IdUser` int(10) unsigned NOT NULL,
  `ReviewDate` date NOT NULL,
  `ContentReview` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `voting` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`reviewid`, `IdApplication`, `IdUser`, `ReviewDate`, `ContentReview`, `voting`) VALUES
(1, 1, 0, '2018-12-11', 'Chương trình rất hay', 5),
(2, 1, 0, '2018-12-11', 'Cũng tạm ổn', 4),
(3, 12, 0, '2018-12-11', 'Ứng dụng chạy được', 4),
(5, 1, 4, '2018-12-11', 'It''s sound good, but Chrome is better', 2),
(6, 5, 4, '2018-12-12', 'fdsgfdag', 3),
(7, 5, 4, '2018-12-12', 'Miễn phí à?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Types`
--

CREATE TABLE IF NOT EXISTS `Types` (
  `IdType` int(10) unsigned NOT NULL,
  `NameType` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Types`
--

INSERT INTO `Types` (`IdType`, `NameType`) VALUES
(1, 'Năng xuất'),
(2, 'Xã hội'),
(3, 'Tin tức'),
(4, 'Sức khỏe'),
(5, 'Bản đồ'),
(6, 'Cá nhân hóa'),
(7, 'Sách'),
(8, 'Giải trí'),
(9, 'Ảnh'),
(10, 'Video'),
(11, 'Nhạc'),
(12, 'Bảo mật'),
(13, 'Giáo dục'),
(14, 'Thời tiết'),
(15, 'Mua sắm'),
(16, 'Chiến lược'),
(17, 'Thể thao'),
(18, 'Hành động'),
(19, 'Sòng bạc'),
(20, 'Mô phỏng'),
(21, 'Cổ điển'),
(22, 'Phiêu lưu'),
(23, 'Bắn súng'),
(24, 'Đố chữ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(0, 0, 'Guest', '', NULL, '', NULL, NULL, NULL),
(1, 1, 'Cuong Dinh', 'cuongdinh@gmail.com', NULL, '$2y$10$ULynEF5FOol86ftQkLymhuETC2B6QoxZK8ipPkgEUO9Dux29Grboq', 'D8l6gxMbraPfUxs9jnlqB1lMsno1WQDo2cbhsZ0KFMBE2ILXWohwjk82Egjv', '2018-12-07 07:55:41', '2018-12-07 07:55:41'),
(2, 2, 'Dung Le', 'dungle@gmail.com', NULL, '$2y$10$N5DgSIHnvYmKxQZ2c2OuW.4kHLPWQWfnH441qooGWd.edth2.9jKC', 'mhm9mdcfnImlCWK8XhA5Z3xyJx2XEjL06Oz0v4WScdjgoZsmGJKhxnGEAIi2', '2018-12-07 07:56:14', '2018-12-07 07:56:14'),
(3, 2, 'Nguyet Tran', 'nguyettran@gmail.com', NULL, '$2y$10$HLG7cHz1GUWqQqDt.p2RiuEIUmLyPgY8IpH.4CtGpi10fttnmfD0q', 'PmAOFkdtBQUjXhdElqU2oJXKBi2mZMoCA0khXmY8Ou0VrfwWGBH0z8uf1Xyg', '2018-12-07 07:57:05', '2018-12-07 07:57:05'),
(4, 2, 'Phuong Tran', 'phuongtran@gmail.com', NULL, '$2y$10$i7wkpmj7m9mVaIxEbxIj2OcXD4N9zl2zVgR0k1IBExzGm855ZoD/O', 'Cl3KIxfWVarwiXMZEUBNeIdTirRG5ovWKMqlWtkWdAXkfOzB9km0wzFZ5Zdf', '2018-12-07 07:57:26', '2018-12-07 07:57:26'),
(7, 1, 'Quản trị viên', 'admin@mail.com', NULL, '$2y$10$gwtji9F.rqURWgSmP3TQ5uf5oMU95Ns9XWLcngHtXLl/XmnZxaEiC', 'pRri7Pgba1d9dbRJEJn2d1LpUQwF43jG5aTxfcjn20NQXKLTiHFeNSFODHL7', '2018-12-12 10:38:46', '2018-12-12 10:38:46'),
(8, 1, 'admin 2', 'admin2@mail.com', NULL, '123456', NULL, NULL, NULL),
(9, 1, 'Admin 3', 'admin33@mail.com', NULL, '123456', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Application`
--
ALTER TABLE `Application`
  ADD PRIMARY KEY (`IdApplication`);

--
-- Indexes for table `Banners`
--
ALTER TABLE `Banners`
  ADD PRIMARY KEY (`IdBanner`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`IdCategory`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`reviewid`);

--
-- Indexes for table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`IdType`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Application`
--
ALTER TABLE `Application`
  MODIFY `IdApplication` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Banners`
--
ALTER TABLE `Banners`
  MODIFY `IdBanner` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `IdCategory` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Types`
--
ALTER TABLE `Types`
  MODIFY `IdType` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
