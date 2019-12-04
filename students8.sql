-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2019 at 11:35 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students7`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `role` text COLLATE utf8mb4_unicode_ci,
  `class` text COLLATE utf8mb4_unicode_ci,
  `Dob` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `status`, `created_at`, `updated_at`, `address`, `role`, `class`, `Dob`, `image`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$v7P8okSh.NfGBGA2op7dJ.kXieKY19KzaX6Nl.2J8w0fGZwKIxXK2', '09785220691', 1, NULL, '2019-09-13 01:59:05', '', '', '', '', ''),
(3, 'Teacher', 'teacher@gmail.com', '$2y$10$gKWcBG7j/QWzZcQ3xVB2jeG34RyUXlxWoVfdXhhcV0R4HuV/xVoU2', '09785220691', 1, '2019-09-10 02:00:28', '2019-09-19 01:01:55', '', '', '', '', ''),
(6, 'kaungkhant', 'kaungkhant@gmail.com', '$2y$10$ZCiy7LjvqilZvSrwk1SNSODggxL4e7D9h6I3RNb647BQxwe14/TgW', 'yangon', 1, '2019-09-20 04:52:44', '2019-09-20 04:52:44', NULL, 'A', 'B', '09/20/2019', 'b8f21d2055e23341bd1dc6651a0787db.jpg'),
(7, 'zinzin', 'zinzin@gmail.com', '$2y$10$foC0xXve.AHx2WxdWuIc4u4C3.YZE1D8upEKjJguriyLBG1xoK5lC', 'asdas', 1, '2019-09-20 05:04:41', '2019-09-20 05:04:41', NULL, 'B', 'B', '09/26/2019', 'b8f21d2055e23341bd1dc6651a0787db.jpg'),
(8, 'winaung', 'dream9446@gmail.com', '$2y$10$sLQZHgD13v/z6NfABysb0.VDRKTCukPulTiPuPoD3yFI87f/TxI2i', '09420076715', 0, '2019-09-21 07:56:51', '2019-09-21 07:56:51', NULL, NULL, NULL, NULL, NULL),
(9, 'apple', 'apple@gmail.com', '$2y$10$JYNMPoglyFk.QvD9biYTp.//hAG.QkMV6u8yIa0KTH0xkKmqpB0Pi', '66666666', 1, '2019-09-30 01:12:29', '2019-09-30 01:12:29', 'yangoaefiaef', 'B', 'B', '10/21/2019', '0d7bf44dfb5a14d42be157a6f924f9a1.png'),
(10, 'swa', 'swa@gmail.com', '$2y$10$NkSTaBL4RNzatRLwTcp3JeXE4si/TS.pYGDHCqlQ2wRgSaS7Ctp5i', '1111111', 1, '2019-09-30 01:21:02', '2019-09-30 01:21:02', 'yangone', 'B', 'B', '09/18/2019', '156005c5baf40ff51a327f1c34f2975b.jpg'),
(11, 'myanmarlinks', 'mml@gmail.com', '$2y$10$4oMkAKs6KYtIyOTZ9.qILOl0uaxsv0pPwb2MmEsiLdtvZDL9cMzO6', '1111111111', 1, '2019-10-02 05:20:08', '2019-10-02 05:20:08', 'yangon', 'C', 'B', '10/11/2019', '2c97ad1dbd45d5bd27c649a20bfeea4e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(7, 1, 1, NULL, NULL),
(9, 3, 2, NULL, NULL),
(10, 7, 2, NULL, NULL),
(11, 8, 3, NULL, NULL),
(12, 9, 1, NULL, NULL),
(13, 10, 1, NULL, NULL),
(14, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `sdob` int(11) NOT NULL,
  `dob` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `name`, `faname`, `maname`, `gender`, `sub`, `year`, `sdob`, `dob`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(7, 'winaung', '', '', 'mandalay', 'a', 2019, 0, 0, 55555, '2865ba9c193b7951740e712ba79b5350.km2', '2019-10-02 03:22:06', '2019-10-02 03:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'master', 'master', '2019-09-01 05:32:50', '2019-09-01 05:32:50'),
(3, 'master2', 'master2', '2019-09-01 05:33:09', '2019-09-01 05:33:09'),
(4, 'Emilie Rutherford', 'aliquid-ut-sequi-ea-rerum-quae', '2019-09-29 23:42:12', '2019-09-29 23:42:12'),
(5, 'Quentin Kuhn', 'amet-quae-totam-vel', '2019-09-29 23:42:12', '2019-09-29 23:42:12'),
(6, 'Miss Leann Gusikowski', 'earum-qui-minus-natus-omnis-ducimus-id-eos', '2019-09-29 23:42:12', '2019-09-29 23:42:12'),
(7, 'Regan Parisian', 'et-repellat-laboriosam-exercitationem-quia-accusamus-quibusdam-sed', '2019-09-29 23:42:12', '2019-09-29 23:42:12'),
(8, 'Lonnie Kirlin', 'quis-quidem-odit-est-suscipit', '2019-09-29 23:42:12', '2019-09-29 23:42:12'),
(9, 'Glen Monahan I', 'aspernatur-iusto-ipsa-modi-nemo-id-vel', '2019-09-29 23:42:12', '2019-09-29 23:42:12'),
(10, 'Sheila Robel III', 'rerum-consequatur-nulla-magnam-totam-illo-qui-reiciendis', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(12, 'Delaney Reichert', 'ut-id-molestias-itaque-tempore-velit-doloribus-quia', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(13, 'Miss Marina Lubowitz DDS', 'repellendus-veritatis-molestiae-quam-provident-numquam-ab', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(14, 'Mrs. Juana Emard', 'non-non-quia-recusandae-voluptate-qui-corporis-ut-et', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(15, 'Miss Gracie Leuschke', 'ex-ea-culpa-quo-sapiente', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(16, 'Mr. Kelley Kirlin', 'architecto-neque-itaque-et-et', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(17, 'Omer Feest', 'et-et-facilis-veniam-repudiandae-minus-natus-officia', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(18, 'Ms. Susan Dickens V', 'ea-minima-dolorum-iusto-iure-eveniet-qui', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(19, 'Chet Halvorson', 'beatae-nobis-distinctio-nisi-voluptas', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(20, 'Dr. Alba Hills DDS', 'quod-nulla-et-vitae-dolores-incidunt-eum', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(21, 'Arlo Larkin', 'ea-qui-et-quia-voluptatem', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(22, 'Felicita Leffler', 'sed-quia-dolorem-quo-totam-quae-amet-voluptas-dolorum', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(23, 'Napoleon Becker', 'odit-tempora-est-quis-est-placeat', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(24, 'Marvin Mills III', 'quia-pariatur-quis-odit-at-tempora', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(25, 'Julio Howe', 'et-architecto-sed-aut-veritatis', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(26, 'Elenor Stark', 'id-ut-tenetur-est-fugit-vitae-deleniti', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(27, 'Miss Nona Considine', 'nam-aut-sed-nemo-molestiae-et', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(28, 'Prof. Desmond Schiller Sr.', 'sunt-beatae-quia-perferendis-aliquam-cum', '2019-09-29 23:42:13', '2019-09-29 23:42:13'),
(29, 'Kay Bergstrom DVM', 'expedita-perferendis-quidem-expedita-aut-aspernatur-sed-natus-molestias', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(30, 'Aracely Heathcote', 'tempore-quia-et-quis-quam-numquam-dolore-voluptate', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(31, 'Samanta Veum', 'maiores-ipsam-ut-voluptates-quasi-consequatur-modi-amet', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(32, 'Vernice Abernathy', 'consectetur-accusantium-pariatur-voluptas-ut-fugiat-et-velit-omnis', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(33, 'Eleanore Lehner', 'dolorem-totam-culpa-dolores-non-autem', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(34, 'Gianni Hand', 'dolorum-excepturi-possimus-praesentium-eveniet-magni-suscipit-neque-provident', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(35, 'Raheem O\'Keefe', 'ipsa-ab-quae-ullam-repudiandae-possimus', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(36, 'Melissa Hirthe', 'quibusdam-ea-quos-laboriosam-dolorum', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(37, 'Mrs. Thea Lubowitz I', 'et-vero-aperiam-iure-molestiae-quis-cumque-expedita-dolores', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(38, 'Mable Ryan', 'alias-maiores-exercitationem-nihil-aut-dolores-ut-id', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(39, 'Dr. Garnett Blick', 'est-ea-assumenda-perspiciatis', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(40, 'Miss Haylee Hyatt IV', 'esse-illo-voluptatem-nam-voluptate', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(41, 'Jed Berge', 'quibusdam-aperiam-iusto-aut-asperiores-at-consectetur-eaque', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(42, 'Leilani Cormier', 'consequatur-corporis-nihil-facere-atque-omnis-labore-nihil', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(43, 'Dax Schmidt DVM', 'libero-nostrum-corrupti-voluptas-non', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(44, 'Estel Botsford', 'alias-quos-id-et-totam-qui', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(45, 'Raven Stokes DVM', 'ut-in-doloremque-ipsum-omnis', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(46, 'Dr. Rylee Rempel', 'illo-adipisci-quia-voluptatem-aperiam-ut-voluptas-expedita-fugiat', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(47, 'Mrs. Yasmeen Beier MD', 'optio-deserunt-sit-similique-distinctio', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(48, 'Leonie Jaskolski', 'dicta-velit-corporis-quasi-laudantium', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(49, 'Miss Gregoria Muller Sr.', 'architecto-ullam-dolores-illo-aut-et-magnam-qui', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(50, 'Kiara Murphy', 'delectus-quia-dolores-dolore-commodi-architecto', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(51, 'Abe Crist', 'officia-eos-enim-sit-quam', '2019-09-29 23:42:14', '2019-09-29 23:42:14'),
(52, 'Karine Bosco', 'ab-impedit-sit-voluptatibus-eaque-eum', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(53, 'Garrison Hegmann', 'laborum-nihil-odit-et-qui-veritatis-quam-officia', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(54, 'Jadon Lynch', 'eos-repellat-voluptates-minima-velit-eos', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(55, 'Helen Cartwright', 'dolor-ea-omnis-quibusdam', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(56, 'Vincent Runte', 'labore-consectetur-et-dolores-ab-et', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(57, 'Berry Orn', 'ipsa-quibusdam-commodi-ut-et-ipsa-amet', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(58, 'Claudine Hayes', 'molestiae-omnis-voluptas-aut-ut-repellat-vel-sunt', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(59, 'Aida Predovic', 'et-modi-distinctio-nam-itaque-dolor-cumque-fugit-expedita', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(60, 'Ms. Melody Grant Sr.', 'suscipit-qui-dolorum-voluptatem-aut-voluptas', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(61, 'Edgar Klein', 'dolorem-quisquam-natus-qui-fugit-sit-iure-temporibus', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(62, 'Prof. Wilfred Larson Sr.', 'nesciunt-et-quas-consequatur-quaerat', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(63, 'Mrs. Margarita Kunze', 'voluptas-quos-impedit-numquam-in-qui-et-itaque-doloribus', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(64, 'Ms. Marisa Glover DVM', 'officia-dolorum-vel-autem-laboriosam-ut', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(65, 'Miss Vicenta Hamill', 'alias-tempora-dolores-non-vel-placeat-quae-minus-nisi', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(66, 'Mrs. Kylee McGlynn PhD', 'a-animi-nesciunt-officiis-voluptas-quaerat-asperiores-qui', '2019-09-29 23:42:15', '2019-09-29 23:42:15'),
(67, 'Wilhelmine Schmeler', 'veniam-quo-totam-quis-sed-neque-qui', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(68, 'Prof. Alejandrin Kohler', 'vel-consequatur-odio-id-doloribus-ad', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(69, 'Tierra Braun', 'quis-mollitia-laboriosam-tenetur-veritatis-quo-facere', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(70, 'Danika Oberbrunner', 'et-perspiciatis-necessitatibus-magnam-eligendi-dolores', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(71, 'Norwood McKenzie', 'ipsa-harum-totam-et-vitae-voluptatem-et', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(72, 'Ressie Leffler', 'doloremque-provident-eaque-eligendi-quos-non-temporibus-sit', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(73, 'Dr. Christ Weissnat DVM', 'sed-aliquid-omnis-et-et-accusantium-et', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(74, 'Prof. Raymundo Reichel', 'consectetur-ut-est-modi-provident', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(75, 'Ms. Amy Kuhn', 'aut-culpa-autem-adipisci-amet-qui', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(76, 'Chaya Kutch', 'qui-labore-ipsa-debitis-voluptatem-accusantium-earum-est', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(77, 'Prof. Peter Padberg', 'quasi-in-ad-voluptatem-nihil-mollitia-quia', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(78, 'Hayley Carter', 'sit-et-velit-non-itaque-facilis-eveniet-harum', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(79, 'Winfield Roberts I', 'et-dolorem-nam-rem-aperiam-quae-cum-voluptas-adipisci', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(80, 'Lyda Halvorson', 'a-rerum-voluptatem-doloribus', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(81, 'Arlo Kling III', 'qui-corrupti-ut-aut-magni-qui-culpa-nam', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(82, 'Kale Stark', 'similique-nam-consequatur-aliquam-animi-saepe-iusto-sed', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(83, 'Cleveland O\'Keefe III', 'ut-consequuntur-beatae-optio-consequuntur-eius-et-eligendi', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(84, 'Elisa Ratke', 'ipsum-distinctio-ea-eveniet-aut', '2019-09-29 23:42:16', '2019-09-29 23:42:16'),
(85, 'Claud Batz', 'maiores-corrupti-praesentium-officiis-qui-repellat-quia', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(86, 'Shanny Jaskolski', 'placeat-asperiores-dolores-sed-dolorem-ipsam-fuga', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(87, 'Bianka Botsford', 'cupiditate-sunt-consequatur-exercitationem-totam-voluptatem-voluptas', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(88, 'Dr. Ethyl Nicolas', 'tempore-dicta-non-similique-minus-et-ut-ut', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(89, 'Anthony Streich I', 'qui-cum-minima-voluptatem-velit-explicabo-praesentium', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(90, 'Madonna White', 'voluptatem-vero-ipsa-ad-non-fugiat-nemo', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(91, 'Rosemary Crona', 'molestiae-doloribus-quasi-quas-eos-voluptatem', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(92, 'Prof. Sierra Wuckert PhD', 'dolor-dolor-rem-qui-minus-recusandae-natus-eligendi', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(93, 'Ms. Bethany Wilkinson', 'sed-quis-quia-in-consequatur-dolores', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(94, 'Celia Lubowitz', 'aliquam-eius-quis-eaque-sit-maiores-est-qui', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(95, 'Clementina Hagenes', 'dolores-sint-maxime-recusandae-suscipit-officia-voluptas-eveniet', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(96, 'Mrs. Sophia Breitenberg', 'totam-suscipit-tempore-incidunt', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(97, 'Alfreda Sporer', 'aut-voluptatem-fugit-quos-dolores-repellat', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(98, 'Randy Hessel', 'dolorem-sed-enim-aut-iure-officia-illum-sint', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(99, 'Fatima Beer', 'officia-quo-a-et-enim', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(100, 'Jarvis Dare', 'officia-cupiditate-accusantium-mollitia-voluptas-nam-dolorem-eum', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(101, 'Naomi Lindgren V', 'amet-corporis-neque-sit-quas-hic-amet-laboriosam-hic', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(102, 'Aliya Rogahn', 'tempore-sed-aut-cumque', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(103, 'Rosa Schoen', 'soluta-maiores-vero-ut-veniam-corrupti', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(104, 'Prof. Lulu Boehm IV', 'aut-eaque-consequatur-repellendus-corporis-esse-alias', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(105, 'Edward Erdman', 'voluptas-vitae-quibusdam-nobis-fuga-optio-quo-nihil', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(106, 'Dr. Lindsey Upton II', 'ratione-aut-velit-voluptas-corporis-vel', '2019-09-29 23:42:17', '2019-09-29 23:42:17'),
(107, 'Prof. Hazle Ullrich', 'dolores-velit-quam-enim-hic-labore-at', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(108, 'Prof. Major Schneider IV', 'neque-ducimus-ipsa-aperiam-ex', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(109, 'Leonard Schulist', 'quibusdam-qui-blanditiis-officiis-quasi', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(110, 'Victoria Swaniawski', 'itaque-harum-corrupti-animi', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(111, 'Kale Smith', 'dolores-tenetur-qui-id-enim-ut-neque-dolore', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(112, 'Arlo Wilkinson', 'adipisci-quam-earum-a', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(113, 'Dr. Howard Emard', 'quod-ut-sunt-dolores-mollitia-voluptatem-cum', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(114, 'Rylee Fritsch', 'error-tempora-necessitatibus-unde-ad-illum', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(115, 'Dr. Alf Moore DVM', 'temporibus-laudantium-aspernatur-voluptatem-soluta-ullam', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(116, 'Raina Harber', 'sed-et-et-hic-corporis-enim-repellat-possimus-dolor', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(117, 'Tyler Metz', 'non-voluptate-nihil-temporibus-rerum-rerum', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(118, 'Jarrell Sawayn PhD', 'consequatur-exercitationem-et-impedit-quisquam', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(119, 'Madie King', 'at-porro-sequi-ea', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(120, 'Dr. Makenzie Veum PhD', 'reprehenderit-et-voluptatem-vel-fuga-dolorem', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(121, 'Prof. Marjolaine Herzog', 'officia-ex-possimus-eos-iure-dolor-odit-hic', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(122, 'Miss Eunice Streich', 'doloremque-aut-itaque-nemo-consequuntur', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(123, 'Yasmin Osinski', 'labore-consequatur-sed-laudantium-autem-assumenda-nulla-quisquam', '2019-09-29 23:42:18', '2019-09-29 23:42:18'),
(124, 'Quinten Wilderman Sr.', 'sit-asperiores-saepe-autem-optio-maiores-explicabo-quisquam-quo', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(125, 'Emilio Fritsch', 'voluptatem-eum-molestias-suscipit-nihil', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(126, 'Jessy Langworth', 'soluta-qui-consequuntur-reprehenderit-quam-voluptatem', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(127, 'Delfina Dickinson', 'occaecati-facere-aut-asperiores-commodi-fugiat-et', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(128, 'Amara Cremin IV', 'pariatur-nesciunt-perferendis-qui-unde-accusamus-voluptatibus', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(129, 'Prof. Chet Schultz Jr.', 'iure-qui-sed-necessitatibus', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(130, 'Dr. Sidney Reichel Jr.', 'voluptatum-aut-et-velit-rerum-possimus-molestias-voluptatum-consequatur', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(131, 'Prof. Amparo Weissnat MD', 'autem-laborum-corrupti-facilis-magni-ut-nobis', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(132, 'Destin Larson', 'aspernatur-ut-quisquam-aut-dolores-corporis-eligendi-eligendi-et', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(133, 'Jeffry Swaniawski', 'in-reprehenderit-similique-expedita-magnam-quibusdam-exercitationem', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(134, 'Agustin Medhurst PhD', 'perferendis-sequi-sed-omnis-est', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(135, 'Aglae Schultz', 'asperiores-consequuntur-laboriosam-sit-expedita-nemo-corporis-corporis', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(136, 'Sebastian Leannon', 'sunt-natus-necessitatibus-laudantium-odio-doloribus-est-suscipit', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(137, 'Cameron Leannon', 'excepturi-veritatis-reiciendis-et-eos', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(138, 'Myra Huels', 'earum-aliquam-sint-quae-tempora-impedit-et', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(139, 'Dale Kulas V', 'rem-laborum-eum-sunt-rem-enim-repellendus', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(140, 'Porter Altenwerth DDS', 'ut-voluptatem-quo-rerum-qui', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(141, 'Mrs. Magdalen Leffler', 'ratione-error-et-qui-vel-veritatis', '2019-09-29 23:42:19', '2019-09-29 23:42:19'),
(142, 'Patsy Jacobson', 'illo-atque-aperiam-nesciunt-unde-molestiae', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(143, 'Ms. Sibyl Kuphal DDS', 'voluptas-suscipit-quidem-placeat', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(144, 'Prof. Lexus Roberts', 'quia-ex-sit-et-libero-dolor-iusto-explicabo', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(145, 'Dr. Mona Jacobs V', 'quia-tempore-pariatur-consequatur', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(146, 'Connor Mann', 'repellendus-suscipit-aspernatur-dolorum', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(147, 'Fae Haag', 'occaecati-sit-architecto-culpa-aliquid-id-a-magnam', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(148, 'Prof. Alfredo Borer', 'sit-maxime-nesciunt-dignissimos-repellat', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(149, 'Dr. Jett Hodkiewicz', 'quisquam-odio-modi-enim-esse-facilis-explicabo', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(150, 'Etha Rogahn', 'aut-iste-dolore-adipisci-facilis', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(151, 'Mr. Quinn McKenzie', 'ex-molestiae-eum-illo-velit-ab-repudiandae-quia-repellendus', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(152, 'Preston Lakin', 'ab-debitis-dignissimos-natus-dolore-aperiam-praesentium-itaque', '2019-09-29 23:42:20', '2019-09-29 23:42:20'),
(153, 'Paige Murphy', 'facere-ipsam-expedita-non-aut-sed-officiis', '2019-09-29 23:42:20', '2019-09-29 23:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 2, NULL, NULL),
(3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `croles`
--

CREATE TABLE `croles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `croles`
--

INSERT INTO `croles` (`id`, `country`, `state`, `city`, `created_at`, `updated_at`) VALUES
(3, 'Gread1', 'A', '2019', '2019-09-17 03:09:52', '2019-09-17 05:29:05'),
(4, 'Gread1', 'B', '2019', '2019-09-17 03:10:08', '2019-09-17 03:10:08'),
(5, 'Gread1', 'C', '2019', '2019-09-17 03:10:37', '2019-09-17 03:10:37'),
(6, 'Gread2', 'A', '2019', '2019-09-17 03:10:50', '2019-09-17 03:10:50'),
(7, 'Gread2', 'B', '2019', '2019-09-17 03:11:07', '2019-09-17 03:11:07'),
(8, 'Gread1', 'A', '2019', '2019-09-21 06:11:00', '2019-09-21 06:11:00'),
(9, 'Gread1', 'A', '2019', '2019-09-21 23:41:22', '2019-09-21 23:41:22'),
(10, 'Gread1', 'A', '2019', '2019-09-21 23:41:44', '2019-09-21 23:41:44'),
(11, 'Gread1', 'A', '2019', '2019-09-21 23:42:36', '2019-09-21 23:42:36'),
(13, 'Grade2', 'B', '2016', '2019-10-03 07:05:53', '2019-10-03 07:05:53'),
(14, 'Grade3', 'B', '2016', '2019-10-03 07:06:08', '2019-10-03 07:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `faname`, `maname`, `gender`, `section`, `year`, `class`, `dob`, `phone`, `address`, `email`, `created_at`, `updated_at`, `image`, `is_approved`) VALUES
(1, 'sfsdf', 'aefa', 'afea', 'Female', '2', '2018', 'B', '09/12/2019', 425243523, 'aefa', 'afea@gmail.com', '2019-09-24 05:17:57', '2019-09-25 03:46:53', 'f30a202d97fcb737a80ade314ebdb8e0.png', 0),
(2, 'aefaf', 'aefa', 'afa', 'Female', '2', '2018', 'B', '10/15/2019', 63546354, 'aefa', '0afeijaf@gmail.com', '2019-09-24 05:18:37', '2019-09-25 04:03:17', 'f30a202d97fcb737a80ade314ebdb8e0.png', 0),
(4, 'sgesg', 'aefae', 'faefa', 'Female', '2', '2018', 'B', '09/10/2019', 56356, 'aefjaej', 'afijaew@gmail.com', '2019-09-24 05:19:49', '2019-09-25 04:04:16', '0d7bf44dfb5a14d42be157a6f924f9a1.png', 0),
(6, 'winaung', 'U', 'M', 'Female', '2', '2017', 'B', '09/17/2019', 453463456, 'aefae', 'afdae@gmail.com', '2019-09-24 05:21:52', '2019-09-25 04:04:28', 'bca966fd89a69b9f91df5ae65622ecf6.png', 0),
(8, 'gsgsfd', 'sgse', 'sgs', 'Female', '1', '2019', 'A', '09/11/2019', 546346, 'eafef', 'aefaef@gmail.com', '2019-09-24 05:23:33', '2019-09-25 04:04:35', '04006832b75aed71997e744d38957fc5.png', 0),
(9, 'grgrs', 'afgsgf', 'aefsef', 'Female', '2', '2018', 'B', '09/25/2019', 456356, 'AEFAEF', 'aefa@gmail.com', '2019-09-24 05:26:15', '2019-09-25 04:04:50', 'ad433659cffeafc9ed42b029c71a8517.png', 0),
(10, 'jj', 'jj', 'jo', 'Female', '3', '2019', 'B', '09/28/2019', 12312, 'dsfsdfsdfsd', 'jojo@gmail.com', '2019-09-28 01:32:56', '2019-09-28 01:40:10', '397df082724ef48730fcb08b9e575bc2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `read`, `text`, `created_at`, `updated_at`) VALUES
(1, 15, 14, 0, 'Qui accusamus corrupti est enim aut id.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(2, 13, 8, 0, 'Amet delectus pariatur quos et aut occaecati ducimus.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(3, 15, 8, 0, 'Exercitationem ut id suscipit vitae repellendus modi quam itaque.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(4, 7, 1, 0, 'Quia alias odio aut aliquid illum.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(5, 11, 6, 0, 'Magni natus quia assumenda ex.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(6, 8, 5, 0, 'Cupiditate est in fugiat debitis voluptates illo voluptas.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(7, 4, 12, 0, 'Sint iure accusamus eum voluptates nulla.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(8, 2, 9, 0, 'Mollitia minima delectus saepe eveniet ad quo reiciendis.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(9, 14, 6, 0, 'Dignissimos illo voluptatem neque quam ratione pariatur.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(10, 5, 12, 0, 'Id et deserunt ratione itaque consequuntur.', '2019-09-29 22:33:29', '2019-09-29 22:33:29'),
(11, 1, 11, 0, 'Asperiores ut quas corrupti explicabo.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(12, 12, 10, 0, 'Occaecati nobis sint est.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(13, 12, 7, 0, 'Ut repellat recusandae officiis molestias rerum.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(14, 13, 1, 0, 'Eum asperiores enim molestiae cumque incidunt.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(15, 4, 8, 0, 'Esse dolor est excepturi quod earum ex voluptas.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(16, 9, 6, 0, 'Quas distinctio eveniet voluptates modi hic ab magnam.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(17, 6, 15, 0, 'Qui nisi similique quaerat.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(18, 9, 12, 0, 'Deserunt aut sed hic beatae.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(19, 3, 9, 0, 'Assumenda sit necessitatibus laudantium ex totam.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(20, 5, 9, 0, 'Quasi non autem dolores quod odit.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(21, 14, 2, 0, 'Et quidem quisquam repellat nisi fugit.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(22, 8, 5, 0, 'Magni in exercitationem ipsa voluptatem nulla aut qui.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(23, 11, 2, 0, 'Illo omnis delectus consequuntur voluptatum optio tenetur.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(24, 10, 14, 0, 'Asperiores labore suscipit id aut.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(25, 4, 8, 0, 'Laboriosam voluptate quia asperiores repellat esse.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(26, 14, 10, 0, 'Sit architecto illo earum voluptates deserunt voluptate voluptates.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(27, 5, 1, 0, 'Rerum velit dicta qui ut eos sint illo.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(28, 4, 5, 0, 'Maxime velit deserunt et vitae.', '2019-09-29 22:33:30', '2019-09-29 22:33:30'),
(29, 5, 15, 0, 'Sit aut maxime qui quia sed aperiam iure.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(30, 2, 8, 0, 'Exercitationem similique accusamus omnis eos architecto.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(31, 8, 5, 0, 'Doloribus ratione aspernatur iure dolor et.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(32, 8, 2, 0, 'Praesentium rerum qui dolorem voluptates dolores quod laborum accusantium.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(33, 1, 11, 0, 'Beatae hic est itaque provident maiores ab nostrum.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(34, 14, 3, 0, 'Porro architecto expedita quis corrupti et.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(35, 15, 9, 0, 'Itaque dolor distinctio sit.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(36, 2, 9, 0, 'Vel minus omnis debitis explicabo.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(37, 12, 13, 0, 'Aperiam doloremque maxime est vel nulla velit.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(38, 3, 2, 0, 'Nulla dolorem commodi sunt repudiandae ut architecto.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(39, 3, 5, 0, 'Minima ea nobis ad qui architecto.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(40, 7, 15, 0, 'Laudantium repellat vero qui perspiciatis.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(41, 12, 15, 0, 'Ut eos temporibus odit molestias voluptas odio.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(42, 8, 11, 0, 'Qui voluptatem quis ut rerum voluptas amet.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(43, 3, 10, 0, 'Ipsa qui et dolor in incidunt quidem eum.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(44, 1, 6, 0, 'Earum deserunt nisi nobis consequatur.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(45, 9, 12, 0, 'Fugit neque omnis est adipisci est.', '2019-09-29 22:33:31', '2019-09-29 22:33:31'),
(46, 2, 1, 0, 'Omnis atque non ut rerum molestiae perferendis vitae.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(47, 2, 11, 0, 'Amet perferendis quis minima distinctio dolores enim.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(48, 1, 3, 0, 'Consequatur tempora dolores rerum eaque.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(49, 14, 2, 0, 'Aliquid doloribus voluptatem vitae molestias inventore consequuntur qui.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(50, 1, 7, 0, 'Ea nihil sit molestiae laudantium eligendi atque veniam.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(51, 4, 5, 0, 'Iure illo et ipsa provident et aliquid et unde.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(52, 14, 4, 0, 'Id asperiores dolores blanditiis minus at.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(53, 15, 13, 0, 'Aut eveniet ut possimus hic tempore.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(54, 11, 8, 0, 'Quos ea est aliquam nemo minima aut voluptatem.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(55, 6, 12, 0, 'Nemo recusandae velit ut dignissimos sint consequatur.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(56, 6, 14, 0, 'Magni deserunt ut eos consequuntur.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(57, 5, 3, 0, 'Porro aut et et necessitatibus.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(58, 10, 3, 0, 'Laborum recusandae laborum veritatis tempora.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(59, 1, 5, 0, 'Aut et facere dignissimos voluptates maiores architecto.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(60, 5, 15, 0, 'Magnam voluptate aut nisi ut perspiciatis.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(61, 12, 3, 0, 'Sit autem corporis repellendus molestias adipisci vero aliquam.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(62, 15, 7, 0, 'Minus sint autem nam nesciunt.', '2019-09-29 22:33:32', '2019-09-29 22:33:32'),
(63, 12, 4, 0, 'Doloremque neque deserunt aut praesentium deleniti.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(64, 10, 9, 0, 'Animi consequatur et eum qui.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(65, 11, 1, 0, 'Voluptatibus assumenda quasi eaque quas vel.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(66, 10, 13, 0, 'Ea provident soluta voluptatem et nostrum optio suscipit.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(67, 10, 11, 0, 'Vel et pariatur modi facilis sapiente quae.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(68, 12, 9, 0, 'Eum aliquam blanditiis ut ad quibusdam molestiae.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(69, 13, 3, 0, 'Eveniet repudiandae voluptatibus ea explicabo culpa quod ab quasi.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(70, 8, 10, 0, 'Incidunt et earum id odit voluptatum quo fugiat.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(71, 3, 13, 0, 'Quo molestiae amet perferendis dicta officiis dolores nostrum vero.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(72, 10, 14, 0, 'Vel et id ut illum.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(73, 9, 2, 0, 'Dolorem voluptas mollitia id distinctio eos voluptatem velit.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(74, 15, 12, 0, 'Praesentium quaerat voluptatem et et dolorum aliquid.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(75, 2, 8, 0, 'Est fuga voluptate aut quas.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(76, 1, 4, 0, 'Dolor aperiam tenetur aut dolores facere.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(77, 2, 3, 0, 'Nesciunt quam totam temporibus soluta praesentium officia.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(78, 2, 12, 0, 'Est deleniti labore qui voluptatem quo.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(79, 2, 14, 0, 'Tempore tempore eos eum illo ut ipsum.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(80, 3, 14, 0, 'Quis et aperiam et voluptatum necessitatibus dolor.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(81, 15, 13, 0, 'Accusantium quia est aut ut consequuntur maiores cupiditate.', '2019-09-29 22:33:33', '2019-09-29 22:33:33'),
(82, 15, 5, 0, 'Aut dolorum et aut sunt mollitia voluptatem laudantium.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(83, 6, 4, 0, 'Consequuntur iure expedita adipisci est incidunt delectus.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(84, 13, 5, 0, 'Dolorem delectus eum consectetur ratione.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(85, 2, 1, 0, 'Non corrupti non qui incidunt optio.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(86, 15, 10, 0, 'Dolorem architecto at laboriosam odit expedita.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(87, 15, 12, 0, 'Dolor minima quis et est nisi.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(88, 6, 5, 0, 'Ut asperiores voluptate nam distinctio minima.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(89, 15, 9, 0, 'Sed deleniti est qui qui minus rem error.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(90, 6, 2, 0, 'Maiores dignissimos nisi ipsum magnam perferendis.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(91, 8, 1, 0, 'Odit fuga eos inventore velit voluptatem.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(92, 11, 8, 0, 'Illo ut et rerum fugiat.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(93, 13, 7, 0, 'Rerum consequatur magnam eos temporibus pariatur dicta.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(94, 11, 6, 0, 'Et eveniet quas et sapiente eligendi assumenda aut.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(95, 6, 5, 0, 'Ex impedit ut blanditiis blanditiis ipsam.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(96, 4, 3, 0, 'Rerum ex sint modi qui.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(97, 10, 1, 0, 'In dicta id qui quia ipsa vitae dicta.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(98, 2, 11, 0, 'Maiores voluptas hic nobis nulla aut quia ad.', '2019-09-29 22:33:34', '2019-09-29 22:33:34'),
(99, 8, 12, 0, 'Illo cumque alias cum autem qui.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(100, 3, 15, 0, 'Fugit commodi porro est.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(101, 8, 14, 0, 'Similique soluta sit repellat aut iusto alias sit.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(102, 1, 10, 0, 'Officiis voluptatibus ut qui consectetur consequatur.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(103, 3, 15, 0, 'Nihil voluptatem sit voluptate.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(104, 6, 4, 0, 'Consectetur non ullam rerum ex.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(105, 8, 12, 0, 'Eveniet non eligendi facere quisquam consequuntur.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(106, 4, 9, 0, 'Quasi dolorem voluptatibus dolorem qui veniam.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(107, 7, 3, 0, 'Repudiandae veritatis exercitationem eveniet fuga libero.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(108, 6, 13, 0, 'Dignissimos quas tempore quos consequuntur ipsa maxime.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(109, 3, 10, 0, 'Ullam mollitia voluptas quia occaecati sed iste repellendus expedita.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(110, 12, 1, 0, 'Voluptatem magnam eveniet dolor hic itaque.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(111, 1, 11, 0, 'Omnis dolores nihil esse.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(112, 10, 12, 0, 'Perspiciatis ut provident qui et.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(113, 15, 13, 0, 'Qui explicabo quibusdam similique.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(114, 2, 11, 0, 'Vero et fuga qui sed ut.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(115, 11, 13, 0, 'Quia voluptate similique ipsa quia.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(116, 11, 8, 0, 'Aut laboriosam ullam nihil quas quas ea alias.', '2019-09-29 22:33:35', '2019-09-29 22:33:35'),
(117, 5, 8, 0, 'Dolores eligendi eum perspiciatis doloremque delectus sit.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(118, 2, 7, 0, 'Et excepturi ipsa omnis.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(119, 8, 7, 0, 'Omnis saepe corporis ducimus doloremque illo.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(120, 6, 10, 0, 'Distinctio rerum iusto ipsa voluptas rerum sed.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(121, 9, 5, 0, 'Possimus voluptatem deleniti ipsam et aspernatur quibusdam.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(122, 11, 6, 0, 'Possimus in sint modi quo qui.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(123, 8, 4, 0, 'Architecto a consequatur facere unde officia velit.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(124, 15, 3, 0, 'Sunt doloremque rerum est est.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(125, 15, 9, 0, 'Nostrum culpa et ipsam fuga.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(126, 1, 6, 0, 'Neque voluptates ut eos quia.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(127, 8, 5, 0, 'Perspiciatis voluptate laudantium maiores eligendi voluptatem.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(128, 2, 6, 0, 'Ab sit dolores magni officiis velit delectus quos error.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(129, 14, 10, 0, 'Sed enim cupiditate omnis ea fugiat illum.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(130, 11, 14, 0, 'Et fuga id earum quis.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(131, 1, 9, 0, 'Et est ut ex velit.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(132, 3, 7, 0, 'Velit voluptatem quia id nam.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(133, 12, 3, 0, 'Cum quia labore quo maxime quam dicta.', '2019-09-29 22:33:36', '2019-09-29 22:33:36'),
(134, 2, 7, 0, 'Molestiae quia ducimus est itaque.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(135, 15, 9, 0, 'Quo non dignissimos aperiam magnam quidem.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(136, 14, 2, 0, 'Ea consequatur eligendi consequatur.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(137, 13, 3, 0, 'Qui maxime vel cupiditate tenetur.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(138, 14, 2, 0, 'Laborum doloremque iste ipsa qui laborum.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(139, 11, 5, 0, 'Odit ducimus vitae molestias nulla quidem.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(140, 13, 8, 0, 'Dolorum velit quae eaque enim quia.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(141, 1, 5, 0, 'Vel sit aut nemo vel aspernatur.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(142, 14, 9, 0, 'Dolor enim voluptate amet voluptates sapiente quidem.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(143, 13, 1, 0, 'Consequuntur provident quia qui exercitationem placeat.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(144, 6, 5, 0, 'Voluptate quisquam accusamus incidunt repellat quidem.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(145, 15, 14, 0, 'Quis error id et praesentium.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(146, 3, 5, 0, 'Nesciunt enim eum labore numquam qui.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(147, 1, 2, 0, 'Nemo laborum aspernatur voluptatem est eum.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(148, 11, 12, 0, 'Vitae voluptatibus nihil nulla repudiandae possimus.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(149, 10, 12, 0, 'Assumenda ducimus labore doloribus ut enim.', '2019-09-29 22:33:37', '2019-09-29 22:33:37'),
(150, 7, 1, 0, 'Sed recusandae perferendis voluptate.', '2019-09-29 22:33:37', '2019-09-29 22:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_16_112705_create_posts_table', 1),
(4, '2019_08_16_113301_create_tags_table', 1),
(5, '2019_08_16_113752_create_post_tags_table', 1),
(6, '2019_08_16_114017_create_admins_table', 1),
(7, '2019_08_16_114321_create_admin_roles_table', 1),
(8, '2019_08_16_115235_create_roles_table', 1),
(9, '2019_08_29_183258_create_categories_table', 1),
(10, '2019_08_29_183430_create_category_posts_table', 1),
(11, '2019_09_08_113041_create_permessions_table', 2),
(12, '2019_09_15_080950_create_teachers_table', 3),
(13, '2019_09_15_091014_create_classes_table', 4),
(14, '2019_09_15_101321_create_classes_table', 5),
(15, '2019_09_15_102731_create_croles_table', 6),
(16, '2019_09_24_071517_create_registers_table', 7),
(17, '2019_09_24_104906_create_forms_table', 8),
(18, '2019_09_29_125427_create_messages_table', 9),
(19, '2019_09_29_155158_add_read_to_messages', 10),
(20, '2019_09_30_101733_create_events_table', 11),
(21, '2019_10_01_090851_create_assignments_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permessions`
--

CREATE TABLE `permessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permessions`
--

INSERT INTO `permessions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(1, 'Post.Create', 'post', '2019-09-09 00:31:36', '2019-09-09 00:31:36'),
(2, 'Post.Update', 'post', '2019-09-09 00:34:13', '2019-09-09 00:34:13'),
(3, 'Post.Delete', 'post', '2019-09-09 00:36:44', '2019-09-09 00:36:44'),
(4, 'User.Create', 'user', '2019-09-09 00:37:10', '2019-09-09 00:37:10'),
(6, 'User.Update', 'user', '2019-09-09 00:38:12', '2019-09-09 00:38:12'),
(7, 'User.Delete', 'user', '2019-09-09 00:38:36', '2019-09-09 00:38:36'),
(8, 'Post.Publish', 'post', '2019-09-09 00:40:17', '2019-09-09 00:40:17'),
(9, 'Tag.CRUD', 'other', '2019-09-09 00:40:57', '2019-09-09 00:40:57'),
(10, 'Category-CRUD', 'other', '2019-09-09 00:41:28', '2019-09-09 00:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `permession_role`
--

CREATE TABLE `permession_role` (
  `role_id` int(11) NOT NULL,
  `permession_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permession_role`
--

INSERT INTO `permession_role` (`role_id`, `permession_id`) VALUES
(5, 1),
(5, 8),
(5, 10),
(6, 1),
(6, 7),
(6, 10),
(1, 8),
(1, 4),
(1, 6),
(1, 7),
(1, 9),
(1, 10),
(2, 1),
(2, 2),
(2, 3),
(2, 8),
(2, 4),
(2, 6),
(2, 7),
(2, 11),
(2, 9),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `status`, `posted_by`, `image`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 'das', 'asd', 'asd', 'Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.\n\nScience cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.\n\nWhat was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.\n\nA Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help but love and cherish her.\n\nFor those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.', 1, NULL, NULL, NULL, NULL, NULL, '2019-09-01 06:51:26'),
(2, 'post3', 'post3', 'post3', 'Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.\n\nScience cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.\n\nWhat was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.\n\nA Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help but love and cherish her.\n\nFor those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.', 1, NULL, NULL, NULL, NULL, '2019-09-01 06:42:20', '2019-09-01 06:54:17'),
(3, 'post4', 'post4', 'post4', 'post4', NULL, NULL, NULL, NULL, NULL, '2019-09-01 06:45:27', '2019-09-01 06:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 1, NULL, NULL),
(3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adnumber` int(11) NOT NULL,
  `faname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datepicker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-09-06 05:51:41', '2019-09-19 01:00:02'),
(2, 'Teacher', '2019-09-06 11:29:10', '2019-09-19 01:00:25'),
(3, 'Writer', '2019-09-06 11:31:44', '2019-09-06 11:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Edited', 'laravel-edited', '2019-09-01 05:29:54', '2019-09-01 05:29:54'),
(2, 'tag2', 'tag2', '2019-09-01 05:30:18', '2019-09-01 05:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `class`, `roll`, `dob`, `phone`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'cakeshop', '', '', '', '', '', NULL, '2019-09-20 01:47:59', '2019-09-20 01:47:59'),
(2, 'cakeshop', '', '', '', '', '', NULL, '2019-09-20 01:49:06', '2019-09-20 01:49:06'),
(3, 'asdasdasd', 'C', 'D', '09/10/2019', '09 777 466665', 'aefaefa', NULL, '2019-09-20 02:03:30', '2019-09-20 02:03:30'),
(4, 'asdasdasd', 'C', 'D', '09/10/2019', '09 777 466665', 'aefaefa', '16e54bb400b5f3275e10525740458783.jpg', '2019-09-20 02:04:54', '2019-09-20 02:04:54'),
(5, 'winaung', 'C', 'D', '09/25/2019', '09785220691', 'aefaefaef', '16e54bb400b5f3275e10525740458783.jpg', '2019-09-20 02:06:11', '2019-09-20 02:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `adnumber` text COLLATE utf8mb4_unicode_ci,
  `faname` text COLLATE utf8mb4_unicode_ci,
  `maname` text COLLATE utf8mb4_unicode_ci,
  `section` text COLLATE utf8mb4_unicode_ci,
  `year` date DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci,
  `datepicker` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `roll` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `is_approved` tinyint(1) NOT NULL DEFAULT '1',
  `gender` text COLLATE utf8mb4_unicode_ci,
  `dob` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `adnumber`, `faname`, `maname`, `section`, `year`, `class`, `datepicker`, `phone`, `address`, `roll`, `image`, `is_approved`, `gender`, `dob`) VALUES
(1, 'kaungkhant', 'kaungkhant@gmail.com', NULL, '$2y$10$v7P8okSh.NfGBGA2op7dJ.kXieKY19KzaX6Nl.2J8w0fGZwKIxXK2', NULL, '2019-09-03 02:37:29', '2019-10-01 22:41:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, 'kaungkhantzin', 'kaungkhantzin@gmail.com', NULL, '$2y$10$.aBfFmGDdRCk/Wiu./6dh.eCNbop7osrKRhwTQq68BqGapAa9hYsG', NULL, '2019-09-11 05:47:36', '2019-10-01 22:41:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(8, 'winaung', 'kkk@gmail.com', NULL, '$2y$10$v7P8okSh.NfGBGA2op7dJ.kXieKY19KzaX6Nl.2J8w0fGZwKIxXK2', NULL, '2019-09-22 02:50:01', '2019-10-02 01:44:41', 'ap123', 'koko', 'mam', 'a', '2019-10-09', 'A', '2019-10-23', 55555, 'mandalay', '1', '5af7ea3ee6f0fb118d782ff9306d0a47.png', 1, NULL, NULL),
(9, 'sanwinaung', 'dream9446@gmail.com', NULL, '$2y$10$VdC9eZKhQ8gNLdGDol2.lObbnZLbbNCnpvEwtyMjZ03vnmGG20qpe', NULL, '2019-09-28 01:38:05', '2019-10-03 08:45:53', '123', 'Mr', 'Dr', '1', '0000-00-00', 'D', NULL, 12312, NULL, '2', '0d7bf44dfb5a14d42be157a6f924f9a1.png', 0, 'Female', '09/28/2019'),
(10, 'kaungkhantzin', 'esperanza51@example.net', '2019-09-29 22:29:51', '$2y$10$tHxxUy348Io14DpQNReTfO7KIQRhKDJU0gKVPLtCYiaQPtnsVh6uq', 'MeVlp8gmTJ', '2019-09-29 22:29:51', '2019-10-03 07:30:11', '555', 'U', 'M', '2', '2019-10-09', 'C', '2019-10-16', 496619, NULL, '1', 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(11, 'Miss Dorothy Crooks', 'johns.carolyne@example.org', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uBGbXV9sdG', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 612393, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(12, 'Dr. Morris Willms V', 'kavon.mcdermott@example.org', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8x6aYGm3Sj', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(13, 'Stefan Zulauf', 'nils88@example.net', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rQwNS3tx2e', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 552, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(14, 'Camilla Doyle', 'danyka.gislason@example.com', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bcxffYyGQL', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2147483647, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(15, 'Dr. Jaleel McGlynn', 'kathlyn73@example.net', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4Oz9gfrsej', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1841, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(16, 'Elinore Bechtelar DVM', 'antonetta.schumm@example.com', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a37DC6SDVi', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(17, 'Prof. Judah Schulist III', 'vhackett@example.org', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hsHbz1MaCZ', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 386704, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(18, 'Dr. Rachel Trantow Sr.', 'feil.alba@example.net', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WVcvxDJKIt', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(19, 'Prof. Kirk Collins III', 'abbott.laverna@example.org', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'r9iYzyVRsh', '2019-09-29 22:29:51', '2019-09-29 22:29:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(20, 'Audie Tremblay PhD', 'lura.bradtke@example.org', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UgJ5gu1as9', '2019-09-29 22:29:52', '2019-09-29 22:29:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 558, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(21, 'Carmel Grady', 'rau.treva@example.com', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LbfqIyCGSV', '2019-09-29 22:29:52', '2019-09-29 22:29:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(22, 'Berta Runolfsson', 'little.bianka@example.org', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Tw5y3lrRQj', '2019-09-29 22:29:52', '2019-09-29 22:29:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(23, 'Jessie Jakubowski DVM', 'hills.hailie@example.net', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gAg1bx4dI8', '2019-09-29 22:29:52', '2019-09-29 22:29:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'http://via.placeholder.com/150x150', 0, NULL, NULL),
(24, 'Dameon Mertz', 'hbayer@example.com', '2019-09-29 22:29:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rXdHNCyaXR', '2019-09-29 22:29:52', '2019-10-01 23:11:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 325, NULL, NULL, 'http://via.placeholder.com/150x150', 1, NULL, NULL),
(25, 'mml', 'mm@gmail.com', NULL, '$2y$10$VJUUyDzpkT7JCaA0OlQOy.OnNXG9ynnsWrBxUlC5.xj4tml.aYKRm', NULL, '2019-10-02 05:21:06', '2019-10-02 05:21:06', '123', 'm', 'l', 'B', '0000-00-00', '2', NULL, 111111, 'yangon', 'B', 'c90ebcb33e425241f52c221f7b02e392.png', 1, NULL, '10/23/2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_post_id_index` (`post_id`),
  ADD KEY `category_posts_category_id_index` (`category_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `croles`
--
ALTER TABLE `croles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forms_email_unique` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permessions`
--
ALTER TABLE `permessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_post_id_index` (`post_id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registers_email_unique` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `croles`
--
ALTER TABLE `croles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `permessions`
--
ALTER TABLE `permessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
