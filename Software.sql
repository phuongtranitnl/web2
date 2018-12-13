-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2018 at 02:58 PM
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
  `Image1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Image2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Image3` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `LinkDownload` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NumberDownload` int(11) NOT NULL,
  `Version` double(8,2) NOT NULL,
  `Size` double(8,2) NOT NULL,
  `SortDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Application`
--

INSERT INTO `Application` (`IdCategory`, `IdType`, `IdApplication`, `NameApp`, `Developer`, `Description`, `Icon`, `Image1`, `Image2`, `Image3`, `LinkDownload`, `NumberDownload`, `Version`, `Size`, `SortDescription`) VALUES
(1, 1, 1, 'Microsoft edge', 'Microsoft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'edgeicon.png', 'edge1.jpg', 'edge2.jpg', 'edge3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 5, 1.00, 50.00, 'Lướt web nhanh hơn bao giờ hết'),
(1, 1, 2, 'Gesture', 'Oval', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'gestureicon.png', 'gesture1.png', 'gesture2.png', 'gesture3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 10, 1.00, 50.00, 'Điều hướng phong cách iphone x'),
(1, 6, 3, 'Volume slide', 'Maxtine', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'volumeslideicon.png', 'volumeslide1.png', 'volumeslide2.png', 'volumeslide3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 80, 1.00, 50.00, 'Điều chỉnh âm lượng phong cách android 9'),
(1, 1, 4, 'Stick share', 'the verb', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'stickshareicon.png', 'stickshare1.png', 'stickshare2.png', 'stickshare3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 60, 1.00, 50.00, 'Chụp nhanh màn hình'),
(1, 6, 5, 'Recent bar', 'apple', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'recentbaricon.png', 'recentbar1.png', 'recentbar2.png', 'recentbar3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 20, 1.00, 50.00, 'Mở nhanh ứng dụng gần đây'),
(1, 3, 6, 'Splashtop', 'Ramus', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'splashtopicon.png', 'volumeslide4.png', 'recentbar4.png', 'edge4.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 15, 1.00, 50.00, 'Biến màn hình điện thoại thành màn hình phụ'),
(1, 1, 7, 'Datally', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'datallyicon.png', 'datally1.png', 'datally2.png', 'datally3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 11, 1.00, 50.00, 'Theo dõi lưu lượng sử dụng'),
(1, 1, 8, 'File go', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'filesgoicon.png', 'filego1.png', 'filego2.png', 'filego3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Quan ly file'),
(1, 1, 9, 'Just aline', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'justalineicon.png', 'justaline1.png', 'justaline2.png', 'justaline3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(1, 1, 10, 'Forest', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'floatingbaricon.png', 'forestlive1.png', 'forestlive2.png', 'forestlive3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(2, 14, 11, 'Monster', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'monstericon.png', 'monster1.jpg', 'monster2.jpg', 'monster3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 32, 1.00, 50.00, 'Trò chơi nhập vai'),
(2, 18, 12, 'Pokemon quest', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'pokemon1.png', 'pokemon1.png', 'pokemon2.png', 'pokemon3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game giải trí nhẹ nhàng'),
(2, 20, 13, 'Green farm', 'Gameloft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'greenfarmlogo.png', 'greenfarm1.jpg', 'greenfarm2.jpg', 'greenfarm3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game nông trại giải trí'),
(1, 1, 1, 'Microsoft edge', 'Microsoft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'edgeicon.png', 'edge1.jpg', 'edge2.jpg', 'edge3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 5, 1.00, 50.00, 'Lướt web nhanh hơn bao giờ hết'),
(1, 1, 2, 'Gesture', 'Oval', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'gestureicon.png', 'gesture1.png', 'gesture2.png', 'gesture3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 10, 1.00, 50.00, 'Điều hướng phong cách iphone x'),
(1, 6, 3, 'Volume slide', 'Maxtine', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'volumeslideicon.png', 'volumeslide1.png', 'volumeslide2.png', 'volumeslide3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 80, 1.00, 50.00, 'Điều chỉnh âm lượng phong cách android 9'),
(1, 1, 4, 'Stick share', 'the verb', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'stickshareicon.png', 'stickshare1.png', 'stickshare2.png', 'stickshare3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 60, 1.00, 50.00, 'Chụp nhanh màn hình'),
(1, 6, 5, 'Recent bar', 'apple', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'recentbaricon.png', 'recentbar1.png', 'recentbar2.png', 'recentbar3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 20, 1.00, 50.00, 'Mở nhanh ứng dụng gần đây'),
(1, 3, 6, 'Splashtop', 'Ramus', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'splashtopicon.png', 'volumeslide4.png', 'recentbar4.png', 'edge4.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 15, 1.00, 50.00, 'Biến màn hình điện thoại thành màn hình phụ'),
(1, 1, 7, 'Datally', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'datallyicon.png', 'datally1.png', 'datally2.png', 'datally3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 11, 1.00, 50.00, 'Theo dõi lưu lượng sử dụng'),
(1, 1, 8, 'File go', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'filesgoicon.png', 'filego1.png', 'filego2.png', 'filego3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Quan ly file'),
(1, 1, 9, 'Just aline', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'justalineicon.png', 'justaline1.png', 'justaline2.png', 'justaline3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(1, 1, 10, 'Forest', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'floatingbaricon.png', 'forestlive1.png', 'forestlive2.png', 'forestlive3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(2, 14, 11, 'Monster', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'monstericon.png', 'monster1.jpg', 'monster2.jpg', 'monster3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 32, 1.00, 50.00, 'Trò chơi nhập vai'),
(2, 18, 12, 'Pokemon quest', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'pokemon1.png', 'pokemon1.png', 'pokemon2.png', 'pokemon3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game giải trí nhẹ nhàng'),
(2, 20, 13, 'Green farm', 'Gameloft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'greenfarmlogo.png', 'greenfarm1.jpg', 'greenfarm2.jpg', 'greenfarm3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game nông trại giải trí'),
(1, 1, 1, 'Microsoft edge', 'Microsoft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'edgeicon.png', 'edge1.jpg', 'edge2.jpg', 'edge3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 5, 1.00, 50.00, 'Lướt web nhanh hơn bao giờ hết'),
(1, 1, 2, 'Gesture', 'Oval', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'gestureicon.png', 'gesture1.png', 'gesture2.png', 'gesture3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 10, 1.00, 50.00, 'Điều hướng phong cách iphone x'),
(1, 6, 3, 'Volume slide', 'Maxtine', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'volumeslideicon.png', 'volumeslide1.png', 'volumeslide2.png', 'volumeslide3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 80, 1.00, 50.00, 'Điều chỉnh âm lượng phong cách android 9'),
(1, 1, 4, 'Stick share', 'the verb', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'stickshareicon.png', 'stickshare1.png', 'stickshare2.png', 'stickshare3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 60, 1.00, 50.00, 'Chụp nhanh màn hình'),
(1, 6, 5, 'Recent bar', 'apple', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'recentbaricon.png', 'recentbar1.png', 'recentbar2.png', 'recentbar3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 20, 1.00, 50.00, 'Mở nhanh ứng dụng gần đây'),
(1, 3, 6, 'Splashtop', 'Ramus', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'splashtopicon.png', 'volumeslide4.png', 'recentbar4.png', 'edge4.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 15, 1.00, 50.00, 'Biến màn hình điện thoại thành màn hình phụ'),
(1, 1, 7, 'Datally', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'datallyicon.png', 'datally1.png', 'datally2.png', 'datally3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 11, 1.00, 50.00, 'Theo dõi lưu lượng sử dụng'),
(1, 1, 8, 'File go', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'filesgoicon.png', 'filego1.png', 'filego2.png', 'filego3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Quan ly file'),
(1, 1, 9, 'Just aline', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'justalineicon.png', 'justaline1.png', 'justaline2.png', 'justaline3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(1, 1, 10, 'Forest', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'floatingbaricon.png', 'forestlive1.png', 'forestlive2.png', 'forestlive3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(2, 14, 11, 'Monster', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'monstericon.png', 'monster1.jpg', 'monster2.jpg', 'monster3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 32, 1.00, 50.00, 'Trò chơi nhập vai'),
(2, 18, 12, 'Pokemon quest', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'pokemon1.png', 'pokemon1.png', 'pokemon2.png', 'pokemon3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game giải trí nhẹ nhàng'),
(2, 20, 13, 'Green farm', 'Gameloft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'greenfarmlogo.png', 'greenfarm1.jpg', 'greenfarm2.jpg', 'greenfarm3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game nông trại giải trí'),
(1, 1, 1, 'Microsoft edge', 'Microsoft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'edgeicon.png', 'edge1.jpg', 'edge2.jpg', 'edge3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 5, 1.00, 50.00, 'Lướt web nhanh hơn bao giờ hết'),
(1, 1, 2, 'Gesture', 'Oval', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'gestureicon.png', 'gesture1.png', 'gesture2.png', 'gesture3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 10, 1.00, 50.00, 'Điều hướng phong cách iphone x'),
(1, 6, 3, 'Volume slide', 'Maxtine', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'volumeslideicon.png', 'volumeslide1.png', 'volumeslide2.png', 'volumeslide3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 80, 1.00, 50.00, 'Điều chỉnh âm lượng phong cách android 9'),
(1, 1, 4, 'Stick share', 'the verb', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'stickshareicon.png', 'stickshare1.png', 'stickshare2.png', 'stickshare3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 60, 1.00, 50.00, 'Chụp nhanh màn hình'),
(1, 6, 5, 'Recent bar', 'apple', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'recentbaricon.png', 'recentbar1.png', 'recentbar2.png', 'recentbar3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 20, 1.00, 50.00, 'Mở nhanh ứng dụng gần đây'),
(1, 3, 6, 'Splashtop', 'Ramus', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'splashtopicon.png', 'volumeslide4.png', 'recentbar4.png', 'edge4.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 15, 1.00, 50.00, 'Biến màn hình điện thoại thành màn hình phụ'),
(1, 1, 7, 'Datally', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'datallyicon.png', 'datally1.png', 'datally2.png', 'datally3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 11, 1.00, 50.00, 'Theo dõi lưu lượng sử dụng'),
(1, 1, 8, 'File go', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'filesgoicon.png', 'filego1.png', 'filego2.png', 'filego3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Quan ly file'),
(1, 1, 9, 'Just aline', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'justalineicon.png', 'justaline1.png', 'justaline2.png', 'justaline3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(1, 1, 10, 'Forest', 'Google', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'floatingbaricon.png', 'forestlive1.png', 'forestlive2.png', 'forestlive3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 95, 1.00, 50.00, 'Ứng dụng AR'),
(2, 14, 11, 'Monster', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'monstericon.png', 'monster1.jpg', 'monster2.jpg', 'monster3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 32, 1.00, 50.00, 'Trò chơi nhập vai'),
(2, 18, 12, 'Pokemon quest', 'Sigma game', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'pokemon1.png', 'pokemon1.png', 'pokemon2.png', 'pokemon3.png', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game giải trí nhẹ nhàng'),
(2, 20, 13, 'Green farm', 'Gameloft', 'Get rid of your navigation bar and learn to appreciate the benefits of gesture-based navigation. There was never before, a more natural way, to control your smartphone. Let the future begin!', 'greenfarmlogo.png', 'greenfarm1.jpg', 'greenfarm2.jpg', 'greenfarm3.jpg', 'https://www.microsoft.com/vi-vn/p/facebook/9wzdncrfj2wl?cid=msft_web_appsforwindows_chart#activetab=pivot:overviewtab', 65, 1.00, 50.00, 'Game nông trại giải trí');

-- --------------------------------------------------------

--
-- Table structure for table `Banners`
--

CREATE TABLE IF NOT EXISTS `Banners` (
  `IdBanner` int(10) unsigned NOT NULL,
  `ContentBanner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ImageBanner` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Banners`
--

INSERT INTO `Banners` (`IdBanner`, `ContentBanner`, `ImageBanner`) VALUES
(1, 'Nơi đây tổng hợp các phần mềm hoàn toàn miễn phí', 'banner page.jpg'),
(2, 'Những trò chơi hay nhất đang đợi bạn', 'banner 2.jpg'),
(3, 'Hãy chia sẽ trang này cho bạn bè của bạn', 'banner 3.jpg'),
(4, 'Những ứng dụng mang đến trải nghiệm tốt nhất', 'banner 4.jpg'),
(1, 'Nơi đây tổng hợp các phần mềm hoàn toàn miễn phí', 'banner page.jpg'),
(2, 'Những trò chơi hay nhất đang đợi bạn', 'banner 2.jpg'),
(3, 'Hãy chia sẽ trang này cho bạn bè của bạn', 'banner 3.jpg'),
(4, 'Những ứng dụng mang đến trải nghiệm tốt nhất', 'banner 4.jpg'),
(1, 'Nơi đây tổng hợp các phần mềm hoàn toàn miễn phí', 'banner page.jpg'),
(2, 'Những trò chơi hay nhất đang đợi bạn', 'banner 2.jpg'),
(3, 'Hãy chia sẽ trang này cho bạn bè của bạn', 'banner 3.jpg'),
(4, 'Những ứng dụng mang đến trải nghiệm tốt nhất', 'banner 4.jpg'),
(1, 'Nơi đây tổng hợp các phần mềm hoàn toàn miễn phí', 'banner page.jpg'),
(2, 'Những trò chơi hay nhất đang đợi bạn', 'banner 2.jpg'),
(3, 'Hãy chia sẽ trang này cho bạn bè của bạn', 'banner 3.jpg'),
(4, 'Những ứng dụng mang đến trải nghiệm tốt nhất', 'banner 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `IdCategory` int(10) unsigned NOT NULL,
  `NameCategory` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`IdCategory`, `NameCategory`) VALUES
(1, 'Software'),
(2, 'Game'),
(3, 'Book'),
(1, 'Software'),
(2, 'Game'),
(3, 'Book'),
(1, 'Software'),
(2, 'Game'),
(3, 'Book'),
(1, 'Software'),
(2, 'Game'),
(3, 'Book');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_20_122613_create_category_table', 1),
(2, '2018_10_20_173759_create_types_table', 1),
(5, '2018_10_20_132909_create_application_table', 2),
(6, '2018_10_20_142433_create_reviews_table', 2),
(7, '2018_10_20_145632_create_banners_table', 2),
(8, '2018_10_20_122613_create_category_table', 1),
(9, '2018_10_20_173759_create_types_table', 1),
(12, '2018_10_20_132909_create_application_table', 2),
(13, '2018_10_20_142433_create_reviews_table', 2),
(14, '2018_10_20_145632_create_banners_table', 2),
(15, '2018_10_20_122613_create_category_table', 1),
(16, '2018_10_20_173759_create_types_table', 1),
(19, '2018_10_20_132909_create_application_table', 2),
(20, '2018_10_20_142433_create_reviews_table', 2),
(21, '2018_10_20_145632_create_banners_table', 2),
(22, '2018_10_20_122613_create_category_table', 1),
(23, '2018_10_20_173759_create_types_table', 1),
(24, '2014_10_12_000000_create_users_table', 2),
(25, '2014_10_12_100000_create_password_resets_table', 2),
(26, '2018_10_20_132909_create_application_table', 2),
(27, '2018_10_20_142433_create_reviews_table', 2),
(28, '2018_10_20_145632_create_banners_table', 2);

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
  `IdApplication` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `ReviewDate` date NOT NULL,
  `ContentReview` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Types`
--

CREATE TABLE IF NOT EXISTS `Types` (
  `IdType` int(10) unsigned NOT NULL,
  `NameType` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(24, 'Đố chữ'),
(25, 'Nhập vai'),
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
(24, 'Đố chữ'),
(25, 'Nhập vai'),
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
(24, 'Đố chữ'),
(25, 'Nhập vai'),
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
(24, 'Đố chữ'),
(25, 'Nhập vai');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cuong Dinh', 'cuongdinh@gmail.com', NULL, '$2y$10$ULynEF5FOol86ftQkLymhuETC2B6QoxZK8ipPkgEUO9Dux29Grboq', '1y033EfEsXn5mhatVcknvme0dXKL8vICBMR650cmBjKvOxd47Q3TL4ZWLyck', '2018-12-07 07:55:41', '2018-12-07 07:55:41'),
(2, 0, 'Dung Le', 'dungle@gmail.com', NULL, '$2y$10$N5DgSIHnvYmKxQZ2c2OuW.4kHLPWQWfnH441qooGWd.edth2.9jKC', 'HFKWPcQO1vq4BDApGCDoPH6TvQTnrtRtHvXjbrohnqbuUx1nxnLjkuJd3WDD', '2018-12-07 07:56:14', '2018-12-07 07:56:14'),
(3, 0, 'Nguyet Tran', 'nguyettran@gmail.com', NULL, '$2y$10$HLG7cHz1GUWqQqDt.p2RiuEIUmLyPgY8IpH.4CtGpi10fttnmfD0q', 'oq1ZV051NtoIeUiMqLu0TCK9E1EGHWZED2VTuANnIkCrA57YDkXX5ckHlcDn', '2018-12-07 07:57:05', '2018-12-07 07:57:05'),
(4, 0, 'Phuong Tran', 'phuongtran@gmail.com', NULL, '$2y$10$i7wkpmj7m9mVaIxEbxIj2OcXD4N9zl2zVgR0k1IBExzGm855ZoD/O', NULL, '2018-12-07 07:57:26', '2018-12-07 07:57:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
