-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 07:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_english_channel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'buWlntYa8BX8EuRqcjiQHSnH43v0D6Iy', 1, '2018-03-13 18:30:00', '2018-03-12 18:30:00', '2018-03-13 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Martin', 'Wangor', 'martin.wangor@gmail.com', '$2y$10$zJyESc8agrziXhtNvLF6J.7c7ewmkFYJi2nFzZ6X2QERTplUiA93i', 1, NULL, '2018-03-20 23:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL,
  `blog_category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written_by` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `remove_date` date DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cover_id`, `blog_category_id`, `title`, `slug`, `summary`, `description`, `meta_title`, `meta_tags`, `meta_description`, `written_by`, `publish_date`, `remove_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 48, 1, 'Nothing is impossible, the word itself says \'I\'m possible\'!', 'nothing-is-impossible-the-word-itself-says-im-possible', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, aliquyam erat, sed diam voluptuased diam nonumy eirmod tempor invidunt ut labore et dolore magna . At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.\r\n\r\nConsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.\r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.', NULL, NULL, NULL, 'Admin', '2019-01-15', NULL, 1, '2019-01-06 05:13:24', '2019-01-06 07:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `cover_id`, `category_name`, `slug`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '12', '12', NULL, 1, '2019-01-06 00:30:07', '2019-01-06 00:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `category_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cover_id`, `category_name`, `slug`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Home Cleaning & Repairs', 'home-cleaning-repairs', NULL, 1, '2018-03-20 06:08:16', '2019-01-05 23:44:45'),
(2, 9, 'Beauty & Spa', 'beauty-spa', NULL, 1, '2018-03-20 06:12:11', '2018-04-04 06:44:09'),
(3, 17, 'Weddings & Events', 'weddings-events', NULL, 1, '2018-03-21 06:49:15', '2018-04-04 06:44:27'),
(4, NULL, 'Business Services', 'business-services', 'Business Services', 1, '2018-04-04 06:44:46', '2018-04-04 06:44:46'),
(5, NULL, 'Personal &  More', 'personal-more', 'Personal &  More', 1, '2018-04-04 06:45:07', '2018-04-04 06:45:07'),
(6, NULL, 'Lessons & Hobbies', 'lessons-hobbies', 'Lessons & Hobbies', 1, '2018-04-04 06:45:21', '2018-04-04 06:45:21'),
(7, 31, 'test', 'test', 'wqeqweqwe', 1, '2018-04-19 01:01:27', '2018-04-19 01:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `cover_id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(3, 49, 'Title 1', 1, '2019-01-06 07:51:20', '2019-01-06 07:51:20'),
(4, 50, 'Title 2', 1, '2019-01-06 07:53:30', '2019-01-06 07:53:30'),
(5, 51, 'Title 3', 1, '2019-01-06 07:53:43', '2019-01-06 07:53:43'),
(6, 52, 'Title 4', 1, '2019-01-06 07:54:12', '2019-01-06 07:54:12'),
(7, 53, 'Title 5', 1, '2019-01-06 07:54:24', '2019-01-06 07:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_forms`
--

CREATE TABLE `inquiry_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry_forms`
--

INSERT INTO `inquiry_forms` (`id`, `first_name`, `last_name`, `email`, `subject`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'first', 'name', 'email', 'subject', 'comments', '2018-04-16 05:47:31', '2018-04-16 05:47:31'),
(7, '00000', NULL, 'bhalani.shani.s@gmail.com', '000000000000000', '000000000000000000000', '2019-01-07 12:10:17', '2019-01-07 12:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `mail_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE MAIL TYPE',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE SUBJECT',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT 'STORE BODY OF MAIL',
  `mail_tags` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE MAIL TAGS',
  `send_to_cc` smallint(6) NOT NULL DEFAULT '0' COMMENT '1 - YES, 0 - NO',
  `cc_list` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE CC MAIL ID',
  `send_to_bcc` smallint(6) NOT NULL DEFAULT '0' COMMENT '1 - YES, 0 - NO',
  `bcc_list` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE BCC MAIL ID',
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `send_to_admin` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-YES,0-NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `mail_type`, `subject`, `description`, `mail_tags`, `send_to_cc`, `cc_list`, `send_to_bcc`, `bcc_list`, `status`, `send_to_admin`, `created_at`, `updated_at`) VALUES
(4, 'trial_ielts_mail_template', 'Trial IELTS Inquiry', 'The English Channel,<br><br>\r\n\r\nName               			     : {full_name}<br><br>\r\nEmail              			     : {email}<br><br>\r\nContact Number     			     : {contact_number}<br><br>\r\nModule             			     : {module}<br><br>\r\nTest Date          			     : {test_date}<br><br>\r\nExposure            			 : {exposure}<br><br>\r\nExam Date           			 : {exam_date}<br><br>\r\nReason for choosing Trial IELTS  : {reason_choosing_ielts_ans}<br><br>\r\nPayment Contact 		         : {payment_detail_contact}<br><br>\r\n', '{full_name},{email}', 0, NULL, 0, NULL, 1, 0, NULL, NULL),
(5, 'contact_mail_template', 'contact us', 'The English Channel,<br><br>\r\n\r\nName            : {name}<br><br>\r\nEmail           : {email}<br><br>\r\nsubject		    : {subject}<br><br>\r\nMessage      	: {comments}<br><br>\r\nThank you for contact with us.', '{name},{email}', 0, NULL, 0, NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `source`, `created_at`, `updated_at`) VALUES
(9, 'uploads/images/categories/7/0/3/9/d/2018-03-20_12-34-09-550ba1dcf0688b10f2e6e5a635e37dfa.jpg', '2018-03-20 07:04:09', '2018-03-20 07:04:09'),
(10, 'uploads/images/categories/a/6/b/3/e/2018-03-20_12-37-48-5159833ba9b86c65e81aeaad1dad76f7.jpg', '2018-03-20 07:07:48', '2018-03-20 07:07:48'),
(15, 'uploads/images/subcategories/8/6/2/4/d/2018-03-20_13-42-42-3bdf16900b86d5e5e4b9890401f507c9.jpg', '2018-03-20 08:12:42', '2018-03-20 08:12:42'),
(16, 'uploads/images/vendors/a/e/9/d/a/2018-03-21_06-29-03-550ba1dcf0688b10f2e6e5a635e37dfa.jpg', '2018-03-21 00:59:04', '2018-03-21 00:59:04'),
(17, 'uploads/images/categories/d/b/2/d/1/2018-03-21_12-19-15-1867baa9d738c56dd7346d3b387fe7be.jpg', '2018-03-21 06:49:15', '2018-03-21 06:49:15'),
(18, 'uploads/images/vendors/6/f/1/9/7/2018-03-22_08-13-22-5159833ba9b86c65e81aeaad1dad76f7.jpg', '2018-03-22 02:43:22', '2018-03-22 02:43:22'),
(19, 'uploads/images/vendors/1/6/1/b/3/2018-04-04_12-55-22-64aa12df62039a9b24dc783023bf12b8.jpg', '2018-04-04 07:25:23', '2018-04-04 07:25:23'),
(20, 'uploads/images/subcategories/e/3/d/a/3/2018-04-05_11-23-21-8772a3217bd0b3b9d5e4443d9646064e.jpg', '2018-04-05 05:53:21', '2018-04-05 05:53:21'),
(21, 'uploads/images/subcategories/d/b/e/3/a/2018-04-05_11-28-04-c4b9e9b2167a230d9d391294a47e9d63.jpg', '2018-04-05 05:58:04', '2018-04-05 05:58:04'),
(22, 'uploads/images/subcategories/e/8/b/a/a/2018-04-05_11-28-15-c3e9f175662f3bf5b65d5e81bde7661b.jpg', '2018-04-05 05:58:15', '2018-04-05 05:58:15'),
(23, 'uploads/images/subcategories/a/6/5/d/d/2018-04-05_11-28-22-3b14f5aa6707bab98c5782aa273469d3.jpg', '2018-04-05 05:58:22', '2018-04-05 05:58:22'),
(24, 'uploads/images/subcategories/2/a/f/5/0/2018-04-05_11-28-28-83cc7752d770f49bef4a7e44ab644989.jpg', '2018-04-05 05:58:28', '2018-04-05 05:58:28'),
(25, 'uploads/images/subcategories/6/f/5/d/0/2018-04-05_11-28-34-42a51bf4db13135dfbb6ebb2d72c415a.jpg', '2018-04-05 05:58:34', '2018-04-05 05:58:34'),
(26, 'uploads/images/subcategories/4/1/f/a/e/2018-04-05_11-28-42-f7f404b3527928ab36464d3fb3369dbd.jpg', '2018-04-05 05:58:42', '2018-04-05 05:58:42'),
(27, 'uploads/images/subcategories/f/7/0/a/e/2018-04-05_11-28-54-2fb0b8b0f9304c91c5810c26d3434ada.jpg', '2018-04-05 05:58:54', '2018-04-05 05:58:54'),
(28, 'uploads/images/subcategories/3/5/1/7/2/2018-04-05_11-29-01-c3e9f175662f3bf5b65d5e81bde7661b.jpg', '2018-04-05 05:59:01', '2018-04-05 05:59:01'),
(29, 'uploads/images/subcategories/4/6/c/2/9/2018-04-05_11-29-07-64aa12df62039a9b24dc783023bf12b8.jpg', '2018-04-05 05:59:07', '2018-04-05 05:59:07'),
(30, 'uploads/images/categories/8/a/3/9/1/2018-04-19_06-31-25-8772a3217bd0b3b9d5e4443d9646064e.jpg', '2018-04-19 01:01:27', '2018-04-19 01:01:27'),
(31, 'uploads/images/categories/0/8/6/8/6/2018-04-19_06-51-22-64aa12df62039a9b24dc783023bf12b8.jpg', '2018-04-19 01:21:23', '2018-04-19 01:21:23'),
(32, 'uploads/images/vendors/b/c/d/2/b/2018-10-25_05-51-49-a938b0170c630dda9de734c9d1f0dea4.png', '2018-10-25 00:21:50', '2018-10-25 00:21:50'),
(33, 'uploads/images/subcategories/0/f/5/0/c/2018-10-25_05-52-12-3bdf16900b86d5e5e4b9890401f507c9.jpg', '2018-10-25 00:22:12', '2018-10-25 00:22:12'),
(34, 'uploads/images/categories/e/7/c/6/c/2019-01-06_05-14-45-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-05 23:44:46', '2019-01-05 23:44:46'),
(35, 'uploads/images/categories/6/5/a/8/1/2019-01-06_05-16-47-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-05 23:46:47', '2019-01-05 23:46:47'),
(36, 'uploads/images/categories/1/2/6/c/7/2019-01-06_05-18-48-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-05 23:48:49', '2019-01-05 23:48:49'),
(37, 'uploads/images/categories/f/1/8/b/f/2019-01-06_05-32-58-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-06 00:02:58', '2019-01-06 00:02:58'),
(38, 'uploads/images/students/e/8/c/0/a/2019-01-06_05-35-16-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-06 00:05:16', '2019-01-06 00:05:16'),
(39, 'uploads/images/galleries/d/c/9/8/3/2019-01-06_07-00-46-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-06 01:30:46', '2019-01-06 01:30:46'),
(40, 'uploads/images/galleries/9/5/0/8/d/2019-01-06_07-03-20-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-06 01:33:20', '2019-01-06 01:33:20'),
(41, 'uploads/images/blogs/0/a/4/3/2/2019-01-06_08-34-04-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-06 03:04:05', '2019-01-06 03:04:05'),
(42, 'uploads/images/blogs/0/d/a/0/6/2019-01-06_08-34-25-f4a71f3e06be8ae75eceee240950e742.jpg', '2019-01-06 03:04:26', '2019-01-06 03:04:26'),
(43, 'uploads/images/students/d/e/5/7/a/2019-01-06_11-13-16-8a50016ce85fd6d77bf497f3281699d1.jpg', '2019-01-06 05:43:17', '2019-01-06 05:43:17'),
(44, 'uploads/images/students/a/8/0/a/d/2019-01-06_11-13-54-88df924135b60c2ff00822618c9a119d.jpg', '2019-01-06 05:43:54', '2019-01-06 05:43:54'),
(45, 'uploads/images/students/e/6/e/e/3/2019-01-06_11-14-27-65c1c6f11a999aa205e092c9bffd24bf.jpg', '2019-01-06 05:44:27', '2019-01-06 05:44:27'),
(46, 'uploads/images/students/9/c/8/2/4/2019-01-06_11-14-59-aac97e48d31d5c37e0285b1ef3ec3fa3.jpg', '2019-01-06 05:45:00', '2019-01-06 05:45:00'),
(47, 'uploads/images/blogs/5/5/5/9/8/2019-01-06_11-56-37-c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-01-06 06:26:37', '2019-01-06 06:26:37'),
(48, 'uploads/images/blogs/5/b/3/4/0/2019-01-06_12-57-27-bb54437ce31e9932dab6a83df604016c.png', '2019-01-06 07:27:27', '2019-01-06 07:27:27'),
(49, 'uploads/images/galleries/1/e/e/3/7/2019-01-06_13-21-19-c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-01-06 07:51:19', '2019-01-06 07:51:19'),
(50, 'uploads/images/galleries/d/a/6/6/5/2019-01-06_13-23-30-c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-01-06 07:53:30', '2019-01-06 07:53:30'),
(51, 'uploads/images/galleries/4/8/2/2/e/2019-01-06_13-23-42-c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-01-06 07:53:43', '2019-01-06 07:53:43'),
(52, 'uploads/images/galleries/7/9/3/b/4/2019-01-06_13-24-12-c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-01-06 07:54:12', '2019-01-06 07:54:12'),
(53, 'uploads/images/galleries/1/3/b/4/b/2019-01-06_13-24-23-c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-01-06 07:54:23', '2019-01-06 07:54:23');

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
(1, '2018_03_11_122927_create_administrators_table', 1),
(2, '2018_03_11_122933_create_settings_table', 1),
(3, '2018_03_11_122940_create_categories_table', 1),
(4, '2018_03_11_122946_create_sub_categories_table', 1),
(5, '2018_03_11_122952_create_vendors_table', 1),
(6, '2018_03_11_122958_create_contact_forms_table', 1),
(7, '2018_03_11_123005_create_inquiry_forms_table', 1),
(8, '2018_03_11_123012_create_service_requests_table', 1),
(9, '2018_03_11_123018_create_subscribers_table', 1),
(10, '2018_03_11_140535_create_medias_table', 1),
(11, '2018_03_11_141009_add_fk_in_administrators_table', 1),
(12, '2018_03_11_141016_add_fk_in_settings_table', 1),
(13, '2018_03_11_141022_add_fk_in_categories_table', 1),
(14, '2018_03_11_141030_add_fk_in_sub_categories_table', 1),
(15, '2018_03_11_141036_add_fk_in_vendors_table', 1),
(16, '2018_03_11_141042_add_fk_in_contact_forms_table', 1),
(17, '2018_03_11_141049_add_fk_in_inquiry_forms_table', 1),
(18, '2018_03_11_141055_add_fk_in_service_requests_table', 1),
(19, '2018_03_11_141102_add_fk_in_subscribers_table', 1),
(20, '2018_03_11_141108_add_fk_in_medias_table', 1),
(21, '2019_01_05_191853_create_students_table', 2),
(22, '2019_01_05_191909_create_galleries_table', 2),
(23, '2019_01_05_191919_create_blog_categories_table', 2),
(24, '2019_01_05_191937_create_blogs_table', 2),
(26, '2019_01_06_140834_create_trial_ielts_forms_table', 3),
(27, '2019_01_07_160210_create_page_contents_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM USERS',
  `update_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM USERS',
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `post_category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM POST CATEGORY',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE TITLE',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE SLUG',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT 'STORE BODY OF PAGE',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE PAGE META TITLE',
  `meta_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE META TAGS OF PAGE',
  `meta_description` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'STORE META DESCRIPTION OF PAGE',
  `newsletter_status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `register_status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `contact_status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `create_by`, `update_by`, `cover_id`, `post_category_id`, `title`, `slug`, `description`, `meta_title`, `meta_tags`, `meta_description`, `newsletter_status`, `register_status`, `contact_status`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 2, 'About Us', 'about-us', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><br></p>', 'qwe qwe were 123123', 'qwe qwe', 'qweqweqwe \r\n qwe \r\n\r\n123', 0, 0, 0, 1, '2018-03-23 07:36:00', '2018-10-12 03:05:15', NULL),
(2, 1, 1, NULL, 2, 'Privacy Policy', 'privacy-policy', '<p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span style=\"font-weight: 700; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\"><br></span></p>', 'test setse', 'tsetet setsetse', 'test s tset set', 1, 1, 1, 1, '2018-05-01 04:19:56', '2018-10-05 23:36:11', NULL),
(3, 1, NULL, NULL, 1, 'Activity', 'activity', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Activity', NULL, NULL, 0, 0, 0, 1, '2018-10-10 07:44:11', '2018-10-10 07:44:11', NULL),
(4, 1, NULL, NULL, 1, 'Discover', 'discover', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Discover', NULL, NULL, 0, 0, 0, 1, '2018-10-10 07:44:47', '2018-10-10 07:44:47', NULL),
(5, 1, NULL, NULL, 2, 'My Portfolio', 'my-portfolio', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-weight: 700; margin: 0px; padding: 0px;\">Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'My Portfolio', NULL, NULL, 0, 0, 0, 1, '2018-10-10 07:45:30', '2018-10-10 07:45:30', NULL),
(6, 1, NULL, NULL, NULL, 'test etst', 'test-etst', '<p>setsetset</p>', 'setsetset', NULL, NULL, 1, 1, 1, 1, '2018-10-12 03:05:29', '2018-10-12 03:14:35', '2018-10-12 03:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_textarea` text COLLATE utf8mb4_unicode_ci,
  `gallery_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactus_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_text_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_text_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_text_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_text_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_detail_text_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_detail_text_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ielts_book_seat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `about_textarea`, `gallery_text`, `contactus_text`, `student_text_1`, `student_text_2`, `blog_text_1`, `blog_text_2`, `blog_detail_text_1`, `blog_detail_text_2`, `ielts_date`, `ielts_time`, `ielts_address`, `ielts_contact_number`, `ielts_contact_email`, `ielts_book_seat`, `created_at`, `updated_at`) VALUES
(1, '<p>When we realised that Indian youth is frantically looking for the right exposure to gain command over English, we knew what we had to do. We turned ourselves into the channel to bridge the gap; you just have to tune in! Today English is one of the most important tools for economic, academic and social growth. This preference for English all over the world is due to many reasons; first one being the ease with which it can be learnt.</p>\r\n\r\n<p>Yet, Indian youth struggles with it because of the numerous myths surrounding the process of learning. Some of these like &lsquo;Grammar before Language&rsquo; or &lsquo;Perfection before Communication&rsquo; are strongly challenged here at The English Channel (TEC). In lieu, we share some of the most efficient ways of getting a hang of the language in our experience. We also recognise that like any other language, English too cannot be taught, only learnt! However, what is needed for learning is the kind of exposure that supports growth and provides enough motivation. We swear by making TEC that space. All TEC campuses have been designed to fulfil this mission- Creating an environment that allows individuals to comfortably gain confidence in the use of English, eventually leading them to achieve all their growth goals We guarantee whoever puts their confidence in TEC is sure to be more confident about their skills in English!</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'We have two campuses here in Ahmedabad. Feel free to contact us.', 'Achievements and student', 'Fusce imperdiet, ex finibus semper ultricies, urna elit semper nibh, in ullamcorper nibh eros tincidunt eros.', 'Blog Standard Single Post', 'Perfection is not attainable, but if we chase perfection we can catch excellence.', 'Blog Standard Single Post', 'Perfection is not attainable, but if we chase perfection we can catch excellence.', 'September 23rd, 2018 and October 7th, 2018', '10.00am to 4.00pm', 'The English Channel, 4th Floor, \"SEWA Building\", Opp Karnavati Hospital, Ellisbridge, Ahmedabad, Gujarat 380006.', '90 811 81 777', 'register@theenglishchannel.in', 'Limited to 20 seats only', NULL, '2019-01-07 12:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'oeHoe3Qnrnq7i6pLhhgibFDQWVwdbkvH', '2018-03-26 01:40:57', '2018-03-26 01:40:57'),
(2, 1, 'MtJWF9nioHHPYz9tiCWV4MaLJqW3c8kG', '2018-03-26 01:41:42', '2018-03-26 01:41:42'),
(3, 1, 'fRt27vjDjJPCAih75bWmKLuRodYazptM', '2018-03-26 06:30:07', '2018-03-26 06:30:07'),
(4, 1, 'b4XVH96D49jrtMf77lqEjGsZLBwPuuAu', '2018-05-01 03:13:45', '2018-05-01 03:13:45'),
(5, 1, 'IEJq8sH1AFhbLOyFhKzyuS67KBfc1myj', '2018-05-02 02:37:17', '2018-05-02 02:37:17'),
(6, 1, 'II2EmamlM4NLVtnNe0M5egP5DtAz92mI', '2018-05-02 02:54:19', '2018-05-02 02:54:19'),
(7, 1, 'RmnDJgRNknHN3bRySocXIUCv2cfU5jPZ', '2018-05-02 02:55:19', '2018-05-02 02:55:19'),
(8, 1, 'RK0uVn8SVBuVwHxyiIgkNNTeV26luzYJ', '2018-05-06 23:15:01', '2018-05-06 23:15:01'),
(9, 1, '4MhWp20Yavqu4hyZg8htt5KR7iuGgP8o', '2018-05-07 02:46:17', '2018-05-07 02:46:17'),
(10, 1, 'j9XQXFQaxqAFQrbBqTe3PHMHFUwuu3H7', '2018-05-08 00:58:37', '2018-05-08 00:58:37'),
(11, 1, 'P8HTGRuBepMt6pm2ZMNtl4cpDBFIXmT7', '2018-05-08 01:55:17', '2018-05-08 01:55:17'),
(12, 1, 'Ij8FPlQbGwn9YbfnTIRa5xYPTVT0FG73', '2018-05-21 00:42:13', '2018-05-21 00:42:13'),
(13, 1, 'Ou15LdmHmfxn1Oz6mZM7hJ6rgov45WRK', '2018-05-24 06:47:23', '2018-05-24 06:47:23'),
(14, 1, '1ad27WJDmaVws708l6RYkqbiqgtQugdB', '2018-05-24 07:12:48', '2018-05-24 07:12:48'),
(15, 1, 'jWmqLH7pu5cqi8AY69V6Cl9WWG9y2cnl', '2018-05-27 23:37:58', '2018-05-27 23:37:58'),
(16, 1, 'zrLcm90USF3mW9gmGieuedxCjTuHuGeH', '2018-08-30 04:43:35', '2018-08-30 04:43:35'),
(17, 1, 'QrBKWjAHIllECvuwpe8xfe0QsIrTDtj1', '2018-09-27 01:16:35', '2018-09-27 01:16:35'),
(18, 1, 'rPdqeIVw8xuD7qxQRP2CHTWwFoSSFfaN', '2018-09-27 01:16:40', '2018-09-27 01:16:40'),
(19, 1, '8zKoQj9b5jytCmGjGoLkKzz59NUFGAXv', '2018-09-27 01:16:55', '2018-09-27 01:16:55'),
(20, 1, 'Pd19th6SDLc0AnvMhIf5GmDqsynMmegi', '2018-09-27 01:17:17', '2018-09-27 01:17:17'),
(21, 1, 'xh1DhvAaJNJcEzBSo5hhHRDpT2RjpcaF', '2018-09-27 01:18:17', '2018-09-27 01:18:17'),
(22, 1, 'aRxTFKS0hLcTkdZ0uABmZqing1hCgeFl', '2018-10-11 00:09:56', '2018-10-11 00:09:56'),
(23, 1, 'OxkwyQvjd2EAxIC3dQw5PbgkKAoT5Wec', '2018-10-11 00:59:55', '2018-10-11 00:59:55'),
(24, 1, '0bsgKHHNXLYNAJjsTHyWzZwYxuqsh4hk', '2018-10-12 02:35:56', '2018-10-12 02:35:56'),
(25, 1, 'g6aRt3nSGekF93AJwc1pIkhvErvpzOOV', '2018-10-16 06:12:29', '2018-10-16 06:12:29'),
(26, 1, 'F2tcItMDh4MAb6HeFdw9RE1Vo8IPvpRJ', '2018-10-17 00:06:18', '2018-10-17 00:06:18'),
(27, 1, 'joLl0MZ6peoeAchlBSelh3tZ4vmYqFzK', '2018-10-25 00:20:15', '2018-10-25 00:20:15'),
(28, 1, 'z2mC8YsrEPTRghvx5BdFlENwpikNCYcL', '2018-10-27 01:58:07', '2018-10-27 01:58:07'),
(29, 1, 'IDqUH8X6DVaI5TnDKB6EuPMdja0CRLyf', '2019-01-05 10:15:01', '2019-01-05 10:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus_url` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `admin_email`, `contact_address`, `contact_phone`, `contact_text`, `facebook_url`, `twitter_url`, `linkedin_url`, `google_plus_url`, `created_at`, `updated_at`) VALUES
(1, 'bhalani.bhavin.s@gmail.com', 'Vastrapur<br> Shop1-2 First floor, satellite shopping center, Mansi circle, Vastrapur, Ahmedabad-15.', '7894562515', 'Find out how to prepare your book for an editor with these 4 writing tips! The editing process can be a wonderful opportunity for writers.', 'https://www.fb.com/', 'https://www.tw.com/', 'https://www.lk.com/', 'https://www.gp.com/', NULL, '2019-01-06 08:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `cover_id`, `first_name`, `last_name`, `slug`, `course`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(5, 43, 'Adam', 'Jordan', 'adamjordan', 'designation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit arcu felis, vel efficitur lectus imperdiet ut.', 1, '2019-01-06 05:43:17', '2019-01-06 05:47:29'),
(6, 44, 'Jade', 'Smith', 'jadesmith', 'designation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit arcu felis, vel efficitur lectus imperdiet ut.', 1, '2019-01-06 05:43:54', '2019-01-06 05:47:41'),
(7, 45, 'Ann', 'Lovefully', 'annlovefully', 'designation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit arcu felis, vel efficitur lectus imperdiet ut.', 1, '2019-01-06 05:44:27', '2019-01-06 05:47:44'),
(8, 46, 'Luisa', 'Smith', 'luisasmith', 'designation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit arcu felis, vel efficitur lectus imperdiet ut.', 1, '2019-01-06 05:45:00', '2019-01-06 05:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM CATEGORIES',
  `sub_category_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cover_id`, `category_id`, `sub_category_name`, `slug`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 1, 'The Spa Book', 'the-spa-book', 'The Spa Book', 1, '2018-03-20 08:12:42', '2018-04-05 05:59:13'),
(2, 20, 1, 'Practical Radiance', 'practical-radiance', 'Practical Radiance', 1, '2018-03-20 08:12:42', '2018-04-05 05:53:21'),
(3, 22, 1, 'Thyroid & Menopause', 'thyroid-menopause', 'Thyroid & Menopause', 0, '2018-03-20 08:12:42', '2018-04-05 05:58:15'),
(4, 23, 1, 'It\'s Not Just', 'its-not-just', 'It\'s Not Just', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:22'),
(5, 24, 2, 'A Practical Wedding', 'a-practical-wedding', 'A Practical Wedding', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:28'),
(6, 25, 5, 'Summer Festival', 'summer-festival', 'Summer Festival', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:34'),
(7, 26, 6, 'The Wedding Planner', 'the-wedding-planner', 'The Wedding Planner', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:42'),
(8, 27, 4, 'The Wedding Planner', 'the-wedding-planner', 'The Wedding Planner', 1, '2018-03-20 08:12:42', '2018-04-05 05:58:54'),
(9, 28, 3, 'A Practical Wedding', 'a-practical-wedding', 'A Practical Wedding', 1, '2018-03-20 08:12:42', '2018-04-05 05:59:02'),
(10, 29, 2, 'Be Our Guest', 'be-our-guest', 'Be Our Guest', 1, '2018-03-20 08:12:42', '2018-04-05 05:59:08'),
(11, 33, 7, '11111', '11111', '111111', 1, '2018-10-25 00:20:58', '2018-10-25 00:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-05-17 05:22:48', '2018-05-17 05:22:48'),
(2, NULL, 'ip', '::1', '2018-05-17 05:22:48', '2018-05-17 05:22:48'),
(3, NULL, 'global', NULL, '2018-05-17 05:32:16', '2018-05-17 05:32:16'),
(4, NULL, 'ip', '::1', '2018-05-17 05:32:16', '2018-05-17 05:32:16'),
(5, NULL, 'global', NULL, '2018-05-17 06:01:47', '2018-05-17 06:01:47'),
(6, NULL, 'ip', '::1', '2018-05-17 06:01:47', '2018-05-17 06:01:47'),
(7, 7, 'user', NULL, '2018-05-17 06:01:47', '2018-05-17 06:01:47'),
(8, NULL, 'global', NULL, '2018-05-17 06:02:06', '2018-05-17 06:02:06'),
(9, NULL, 'ip', '::1', '2018-05-17 06:02:06', '2018-05-17 06:02:06'),
(10, 2, 'user', NULL, '2018-05-17 06:02:07', '2018-05-17 06:02:07'),
(11, NULL, 'global', NULL, '2018-05-17 06:02:16', '2018-05-17 06:02:16'),
(12, NULL, 'ip', '::1', '2018-05-17 06:02:16', '2018-05-17 06:02:16'),
(13, 2, 'user', NULL, '2018-05-17 06:02:16', '2018-05-17 06:02:16'),
(14, NULL, 'global', NULL, '2018-05-17 06:02:56', '2018-05-17 06:02:56'),
(15, NULL, 'ip', '::1', '2018-05-17 06:02:56', '2018-05-17 06:02:56'),
(16, 7, 'user', NULL, '2018-05-17 06:02:56', '2018-05-17 06:02:56'),
(17, NULL, 'global', NULL, '2018-05-17 06:11:35', '2018-05-17 06:11:35'),
(18, NULL, 'ip', '::1', '2018-05-17 06:11:35', '2018-05-17 06:11:35'),
(19, 7, 'user', NULL, '2018-05-17 06:11:35', '2018-05-17 06:11:35'),
(20, NULL, 'global', NULL, '2018-05-17 06:11:42', '2018-05-17 06:11:42'),
(21, NULL, 'ip', '::1', '2018-05-17 06:11:42', '2018-05-17 06:11:42'),
(22, 7, 'user', NULL, '2018-05-17 06:11:42', '2018-05-17 06:11:42'),
(23, NULL, 'global', NULL, '2018-05-17 23:28:28', '2018-05-17 23:28:28'),
(24, NULL, 'ip', '::1', '2018-05-17 23:28:28', '2018-05-17 23:28:28'),
(25, 8, 'user', NULL, '2018-05-17 23:28:28', '2018-05-17 23:28:28'),
(26, NULL, 'global', NULL, '2018-05-21 00:42:06', '2018-05-21 00:42:06'),
(27, NULL, 'ip', '::1', '2018-05-21 00:42:06', '2018-05-21 00:42:06'),
(28, 8, 'user', NULL, '2018-05-21 00:42:07', '2018-05-21 00:42:07'),
(29, NULL, 'global', NULL, '2018-05-24 06:47:18', '2018-05-24 06:47:18'),
(30, NULL, 'ip', '::1', '2018-05-24 06:47:18', '2018-05-24 06:47:18'),
(31, 2, 'user', NULL, '2018-05-24 06:47:18', '2018-05-24 06:47:18'),
(32, NULL, 'global', NULL, '2018-05-27 23:37:54', '2018-05-27 23:37:54'),
(33, NULL, 'ip', '::1', '2018-05-27 23:37:54', '2018-05-27 23:37:54'),
(34, 2, 'user', NULL, '2018-05-27 23:37:54', '2018-05-27 23:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `trial_ielts_forms`
--

CREATE TABLE `trial_ielts_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` smallint(6) NOT NULL DEFAULT '0' COMMENT '0=ACADEMIC, 1=GENERAL-TRAINING',
  `test_date` smallint(6) DEFAULT '0',
  `exposure` smallint(6) NOT NULL DEFAULT '0' COMMENT '0=FRESHER, 1=REPEATER',
  `exam_date` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=23rd-September-2018, 1=7th-October-2018',
  `reason_choosing_ielts_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_detail_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=WHATSAPP,1=CALL, 2=SCHEDULE-A-MEETING, 3=EMAIL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trial_ielts_forms`
--

INSERT INTO `trial_ielts_forms` (`id`, `full_name`, `email`, `contact_number`, `module`, `test_date`, `exposure`, `exam_date`, `reason_choosing_ielts_ans`, `payment_detail_contact`, `created_at`, `updated_at`) VALUES
(1, 'Test 1', 'tetst@gmail.com', '123456', 0, 1, 0, '2019-06-12', 'test ielts', 'WhatsApp###Email', '2019-01-06 12:45:36', '2019-01-06 12:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_id` int(11) DEFAULT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci,
  `my_values` text COLLATE utf8mb4_unicode_ci,
  `my_skills` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `cover_id`, `about_me`, `my_values`, `my_skills`, `status`, `created_at`, `updated_at`) VALUES
(1, 'martin.wangor@gmail.com', '$2y$10$zJyESc8agrziXhtNvLF6J.7c7ewmkFYJi2nFzZ6X2QERTplUiA93i', '1', '2019-01-05 10:15:01', 'Martin', 'Wangor', NULL, 'Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at\r\n                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis\r\n                                facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa\r\n                                vitae lectus placerat ullamcorper pellentesque vel nisl.', 'Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.\r\n                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales,\r\n                                nulla libero ornare dolor.', 'Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.', 1, NULL, '2019-01-05 10:15:01'),
(2, 'admin@codefarm.com', 'a3b4f96ca617223d6b2e8df4fb4e8db5', NULL, NULL, 'Admin', 'Codefarm', NULL, 'Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at\r\n                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis\r\n                                facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa\r\n                                vitae lectus placerat ullamcorper pellentesque vel nisl.', 'Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.\r\n                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales,\r\n                                nulla libero ornare dolor.', 'Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.', 1, NULL, NULL),
(8, '123@gmail.com', 'a3b4f96ca617223d6b2e8df4fb4e8db5', NULL, NULL, 'Taylor 1', 'Leight', 57, 'Nam sit amet massa commodo, tristique metus at, consequat turpis. In vulputate justo at\r\n                                auctor mollis. Aliquam non sagittis tortor. Duis tristique suscipit risus, quis\r\n                                facilisis nisl congue vitae. Nunc varius pellentesque scelerisque. Etiam quis massa\r\n                                vitae lectus placerat ullamcorper pellentesque vel nisl.', 'Sed dignissim scelerisque pretium. Vestibulum vel lacus laoreet nunc fermentum maximus.\r\n                                Proin id sodales sem, at consectetur urna. Proin vestibulum, erat a hendrerit sodales,\r\n                                nulla libero ornare dolor.', 'Praesent pharetra eget ante nec sodales. Sed et orci sit amet justo lobortis luctus. Curabitur sit amet congue purus. Sed arcu lectus, suscipit in finibus id, consequat sagittis arcu.', 1, '2018-05-17 07:03:50', '2018-09-27 01:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM MEDIAS',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM CATEGORIES',
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'STORE ID FROM SUB-CATEGORIES',
  `vendor_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_name` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(145) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '1-ACTIVE,0-INACTIVE',
  `is_slider` smallint(6) DEFAULT '0' COMMENT '1-ACTIVE,0-INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `cover_id`, `category_id`, `sub_category_id`, `vendor_name`, `slug`, `address_1`, `address_2`, `city_name`, `zip_code`, `state_name`, `email`, `mobile_no`, `phone_no`, `summary`, `status`, `is_slider`, `created_at`, `updated_at`) VALUES
(1, 19, 1, 1, 'Home Maintenance For Dummies', 'home-maintenance-for-dummies', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-20 19:29:04', '2018-04-04 20:49:50'),
(2, 19, 1, 1, 'Home Comforts', 'home-comforts', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-20 19:29:04', '2018-04-18 18:51:44'),
(3, 19, 1, 1, 'Homeowner\'s Record Keeper', 'homeowners-record-keeper', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-20 19:29:04', '2018-04-04 21:20:23'),
(4, 19, 1, 1, 'Martha Stewart\'s Homekeeping Handbook', 'martha-stewarts-homekeeping-handbook', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-20 19:29:04', '2018-04-04 21:20:44'),
(5, 19, 1, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-20 19:29:04', '2018-04-04 19:49:45'),
(6, 19, 2, 1, 'Home Maintenance For Dummies 1', 'home-maintenance-for-dummies-1', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-20 19:29:04', '2018-04-04 21:21:09'),
(7, 19, 3, 1, 'Home Maintenance For Dummies 2', 'home-maintenance-for-dummies-2', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-20 19:29:04', '2018-04-04 21:21:09'),
(8, 19, 3, 1, 'Home Maintenance For Dummies 1', 'home-maintenance-for-dummies-1', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 0, '2018-03-20 19:29:04', '2018-04-04 21:21:09'),
(9, 19, 4, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-20 19:29:04', '2018-04-04 19:49:45'),
(10, 19, 5, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-20 19:29:04', '2018-04-04 19:49:45'),
(11, 19, 6, 1, 'The Wedding Planner Checklist', 'festa', 'sadsdasd', 'ddwasdasd', 'ahm', '325478', 'Gujrat', '1@gmail.com', '123123132', '456456456', 'A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.', 1, 1, '2018-03-20 19:29:04', '2018-04-04 19:49:45'),
(12, 32, 7, 11, '111111111111111111111', '111111111111111111111', NULL, NULL, NULL, NULL, NULL, 'admin111111111111@codefarm.com', '11111111111', NULL, NULL, 1, 1, '2018-10-24 18:51:22', '2018-10-24 18:55:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_cover_id_index` (`cover_id`),
  ADD KEY `blogs_blog_category_id_index` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_categories_cover_id_index` (`cover_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_cover_id_index` (`cover_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_cover_id_index` (`cover_id`);

--
-- Indexes for table `inquiry_forms`
--
ALTER TABLE `inquiry_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_create_by_index` (`create_by`),
  ADD KEY `pages_update_by_index` (`update_by`),
  ADD KEY `pages_cover_id_index` (`cover_id`),
  ADD KEY `pages_post_category_id_index` (`post_category_id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_cover_id_index` (`cover_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cover_id_index` (`cover_id`),
  ADD KEY `sub_categories_category_id_index` (`category_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `trial_ielts_forms`
--
ALTER TABLE `trial_ielts_forms`
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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inquiry_forms`
--
ALTER TABLE `inquiry_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `trial_ielts_forms`
--
ALTER TABLE `trial_ielts_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_categories_cover_id_foreign` FOREIGN KEY (`cover_id`) REFERENCES `medias` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
