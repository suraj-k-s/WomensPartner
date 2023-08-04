-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(9, 'Menstruation'),
(10, 'Pregnancy'),
(11, 'Self Defence'),
(14, 'Health Care'),
(15, 'Life Style'),
(16, 'Skin Care');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chat_id` int(11) NOT NULL,
  `chat_datetime` varchar(30) NOT NULL,
  `from_doctorid` int(11) NOT NULL DEFAULT 0,
  `to_doctorid` int(11) NOT NULL DEFAULT 0,
  `from_userid` int(11) NOT NULL DEFAULT 0,
  `to_userid` int(11) NOT NULL DEFAULT 0,
  `chat_content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chat_id`, `chat_datetime`, `from_doctorid`, `to_doctorid`, `from_userid`, `to_userid`, `chat_content`) VALUES
(1, '2023-06-06 17:36:36', 0, 13, 2, 0, 'Hi'),
(2, '2023-06-06 17:37:43', 13, 0, 0, 2, 'Yes, How can i help you?'),
(6, '2023-06-06 18:21:05', 0, 13, 2, 0, 'I am not feeling well doctor'),
(7, '2023-06-06 18:48:33', 0, 13, 3, 0, 'HEllo doctor plz help'),
(8, '2023-06-07 10:15:41', 0, 14, 2, 0, 'Hello doc!!'),
(9, '2023-06-07 10:15:54', 0, 14, 2, 0, 'I need your hel['),
(10, '2023-06-07 17:40:55', 0, 0, 2, 1, 'Hi anu... how are you'),
(11, '2023-06-07 17:40:55', 0, 0, 1, 2, 'ARe you okay now'),
(12, '2023-06-08 12:30:13', 14, 0, 0, 2, 'Oh Sure!!!!'),
(13, '2023-06-08 12:30:28', 14, 0, 0, 2, 'Tell me whats going on??'),
(14, '2023-06-08 21:12:12', 0, 0, 2, 1, 'Ya.... all good.. what abt u'),
(15, '2023-06-08 22:25:25', 0, 0, 2, 1, 'Everythings fine'),
(16, '2023-06-13 15:44:19', 0, 0, 2, 1, 'Ettayi.... Coffeee'),
(17, '2023-06-13 15:44:47', 0, 0, 2, 1, 'Enik Coffee bendaa'),
(18, '2023-06-13 16:17:35', 14, 0, 0, 2, 'Are ypu there'),
(19, '2023-06-13 16:34:21', 0, 14, 2, 0, 'Ya.. Now am fine'),
(20, '2023-06-13 18:40:54', 0, 14, 2, 0, 'hiii'),
(21, '2023-06-13 18:41:12', 14, 0, 0, 2, 'helo'),
(22, '2023-06-15 10:24:30', 0, 14, 2, 0, 'I m not feeling well'),
(23, '2023-06-15 10:27:12', 0, 14, 2, 0, 'I am having a severe pain'),
(24, '2023-06-15 10:59:41', 0, 14, 2, 0, 'I will help u'),
(25, '2023-06-15 11:04:15', 0, 14, 1, 0, 'Hello DOctor,'),
(26, '2023-06-15 12:44:13', 0, 0, 2, 1, 'Hyy'),
(27, '2023-06-15 13:56:40', 0, 0, 2, 3, 'Hi'),
(28, '2023-06-24 12:42:20', 0, 0, 7, 2, ''),
(29, '2023-06-24 12:42:33', 0, 0, 7, 2, ''),
(30, '2023-06-24 12:42:45', 0, 0, 7, 2, 'hlooo'),
(31, '2023-06-24 12:42:52', 0, 0, 7, 2, 'good mng'),
(32, '2023-06-24 13:04:38', 0, 0, 2, 8, 'hello'),
(33, '2023-06-24 13:04:48', 0, 0, 2, 8, 'good evening'),
(34, '2023-06-24 13:06:54', 0, 0, 8, 2, 'what you want'),
(35, '2023-06-24 13:07:02', 0, 0, 8, 2, ''),
(36, '2023-06-24 13:07:02', 0, 0, 8, 2, ''),
(37, '2023-06-24 13:56:03', 0, 14, 8, 0, 'hello doctor'),
(38, '2023-06-24 13:57:17', 0, 14, 8, 0, 'good mrng'),
(39, '2023-06-24 14:45:31', 0, 14, 8, 0, 'Hello'),
(40, '2023-06-24 14:47:46', 14, 0, 0, 2, 'Haii'),
(41, '2023-07-13 22:57:02', 0, 15, 2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chatlist`
--

CREATE TABLE `tbl_chatlist` (
  `chatlist_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `chat_content` varchar(500) NOT NULL,
  `chat_datetime` varchar(50) NOT NULL,
  `chat_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_chatlist`
--

INSERT INTO `tbl_chatlist` (`chatlist_id`, `from_id`, `to_id`, `chat_content`, `chat_datetime`, `chat_type`) VALUES
(4, 2, 14, 'Haii', '2023-06-24 14:47:46', 'DOCTOR'),
(6, 1, 14, 'Hello DOctor,', '2023-06-15 11:04:15', 'DOCTOR'),
(7, 2, 1, 'Hyy', '2023-06-15 12:44:13', 'USER'),
(8, 2, 3, 'Hi', '2023-06-15 13:56:40', 'USER'),
(9, 7, 2, 'good mng', '2023-06-24 12:42:52', 'USER'),
(10, 2, 8, '', '2023-06-24 13:07:02', 'USER'),
(11, 8, 14, 'Hello', '2023-06-24 14:45:31', 'DOCTOR'),
(12, 2, 15, '', '2023-07-13 22:57:02', 'DOCTOR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_content` varchar(200) NOT NULL,
  `comment_datetime` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment_content`, `comment_datetime`, `user_id`, `post_id`, `doctor_id`) VALUES
(21, 'ooh', '2023-05-30 17:39:43', 1, 26, 0),
(22, 'ooh', '2023-05-30 17:39:59', 1, 26, 0),
(23, 'hello', '2023-05-31 08:31:01', 2, 30, 0),
(24, 'nice', '2023-05-31 08:44:45', 2, 31, 0),
(25, 'nice', '2023-06-24 12:41:59', 7, 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_title` varchar(30) NOT NULL,
  `complaint_content` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `complaint_datetime` varchar(30) NOT NULL,
  `complaint_reply` varchar(100) NOT NULL,
  `complaint_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_title`, `complaint_content`, `user_id`, `doctor_id`, `post_id`, `complaint_datetime`, `complaint_reply`, `complaint_status`) VALUES
(6, 'bad', 'baad', 2, 0, 26, '2023-06-01 11:58:19', 'Ok', 1),
(7, 'not good', 'not nice', 2, 0, 28, '2023-07-07 03:16:25', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(9, 'psychatry'),
(10, 'gynechology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, ' Thiruvananthapuram'),
(2, ' Kollam'),
(3, ' Pathanamtitta'),
(4, ' Alapuzha'),
(5, ' Kottayam'),
(6, ' Idukki'),
(7, ' Ernakulam'),
(8, ' Thrissur'),
(9, ' Palakkad'),
(10, ' Malappuram'),
(11, ' Kozhikode'),
(12, ' Wayanad'),
(13, ' Kannur'),
(14, ' Kasargode');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `doctor_email` varchar(30) NOT NULL,
  `doctor_password` varchar(30) NOT NULL,
  `doctor_contact` varchar(30) NOT NULL,
  `doctor_photo` varchar(150) NOT NULL,
  `doctor_address` varchar(150) NOT NULL,
  `place_id` int(11) NOT NULL,
  `doctor_vstatus` int(11) NOT NULL DEFAULT 0,
  `department_id` int(11) NOT NULL,
  `doctor_proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doctor_id`, `doctor_name`, `doctor_email`, `doctor_password`, `doctor_contact`, `doctor_photo`, `doctor_address`, `place_id`, `doctor_vstatus`, `department_id`, `doctor_proof`) VALUES
(7, 'anna', 'anna@gmail.com', '987', '1234567891', 'IMG_20210518_154128.jpg', 'erjjkk', 256, 1, 9, 'IMG_20210921_141713.jpg'),
(14, 'Aparna Biju', 'aparnabiju336@gmail.com', 'ammu', '9744125994', 'IMG_20210518_154128.jpg', 'Nellippally', 156, 0, 10, 'IMG_20210518_154128.jpg'),
(15, 'Beneetta Berly', 'beneettaberly@gmail.com', 'beneetta', '7902446934', 'pexels-photo-443446.jpeg', 'Maruthummoottil(H)', 400, 0, 9, 'photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` varchar(30) NOT NULL,
  `feedback_content` varchar(200) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(200) NOT NULL,
  `information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_image`, `information_id`) VALUES
(6, 'IMG_20210921_141713.jpg', 3),
(7, 'IMG_20210518_154128.jpg', 0),
(8, 'IMG_20210921_141713.jpg', 0),
(17, 'IMG_20210518_154128.jpg', 16),
(18, 'IMG_20210921_141713.jpg', 16),
(19, 'IMG_20210518_154128.jpg', 16),
(21, 'a6b351a140188dd5271745ba3d981fc9.jpg', 20),
(22, 'LhyT98X.webp', 20),
(23, '1R.jpeg', 20),
(24, 'OIP (1).jpeg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `information_id` int(11) NOT NULL,
  `information_details` varchar(800) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `information_title` varchar(50) NOT NULL,
  `information_photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_information`
--

INSERT INTO `tbl_information` (`information_id`, `information_details`, `subcategory_id`, `information_title`, `information_photo`) VALUES
(20, 'Be aware of your surroundings “Situational awareness is the key to all of this,” Skiffington says. Looking around and being aware of what is happening near you can help you notice sudden movement or if something seems out of place. ...\r\n', 20, 'Information Title 1', 'Beautiful-pink-flower_-_West_Virginia_-_ForestWander.jpg'),
(21, 'Carry pepper spray. Keep your keys laced between your fingers. Don’t wear headphones at night. \r\n\r\nThere’s a lot of advice about what to do to protect yourself from attack or assault.   \r\n\r\nAssault is never the fault of the person attacked — regardless of what they wear, how much they drink or whether they decide to pop in headphones.  ', 23, 'Information Title 2', 'pink_cosmos_flowers.jpg'),
(22, '1. Know the human body’s weak points. ...\r\n2. Familiarize yourself with some basic self-defense moves, like the groin kick. ...\r\n3. Rotate your wrists to free your hands. ...\r\n4. Drop low if you’re grabbed from behind. ...\r\n5. Focus on the thumbs if you’re being choked. ...', 23, 'Information Title 3', 'R (1).jpeg'),
(23, 'Rape, molestation, kidnapping and murder are the most common forms of crime against women in India. The women in India are also vulnerable to acid attacks and eve-teasing. The mindset of the people, including the victim and the spectator, is to ignore and just let it go. But, what we, as the responsible citizens of an independent country, fail to realise is that these instances of harassment can flare up into other bigger heinous crimes against women. And that is when the importance of learning self-defence techniques for women is felt.', 20, 'Information Title 4', 'R.jpg'),
(24, '1. Safety: The primary importance of self-defense is for women to be able to protect themselves against anything that’s unacceptable in terms of social conduct.\r\n2. Confidence: There is nothing more empowering than having the confidence to analyse a dangerous situation and take actions to overcome them effectively.\r\n3. Empowerment: It empowers women to lead a healthy and fulfilling life by encouraging them to deal with stressful and dangerous situations independently.\r\n4. Discipline: It teaches discipline which transfers over to all other areas of life. It helps women be calmer, understanding, flexible, gain body and mind control, be more responsive than reactive, more observant, and achieve cognitive awareness.\r\n5. Reduces Dependency: Just because you’re a woman, you shouldn’t be asked to', 27, 'Information Title 5', 'spring-flower-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT 1,
  `login_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `user_id`, `login_status`, `login_date`) VALUES
(3, 8, 1, '2023-07-13'),
(4, 2, 1, '2023-07-14'),
(5, 3, 1, '2023-07-13'),
(6, 12, 0, '2023-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(53, ' Alamcode', 1),
(54, 'Attingal', 1),
(55, 'Kaniyapuram', 1),
(56, 'Kattakada', 1),
(57, 'Kilimanoor', 1),
(58, 'Konchiravila', 1),
(59, 'Kurakkanni', 1),
(60, 'Nedumangad', 1),
(61, 'Thiruvananthapuram', 1),
(62, 'Varkala', 1),
(63, 'Adinad', 2),
(64, 'Ampalamkunnu', 2),
(65, 'Ayoor', 2),
(66, 'Chathannoor', 2),
(67, 'Kadakkal', 2),
(68, 'Karunagappalli', 2),
(69, 'Kollam', 2),
(70, 'Kottarakkara', 2),
(71, 'Kottiyam', 2),
(72, 'Kulathupuzha', 2),
(73, 'Kundara', 2),
(74, 'Mukhathala', 2),
(75, 'Mylakkadu', 2),
(76, 'Nedungolam', 2),
(77, 'Nilamel', 2),
(78, 'Oachira', 2),
(80, 'Paravur', 2),
(81, 'Perumpuzha', 2),
(82, 'Pozhikara', 2),
(83, 'Punalur', 2),
(84, 'Punthalathazham', 2),
(85, 'St Thomas Fort', 2),
(86, 'Tangasseri', 2),
(87, 'Valiyode', 2),
(88, 'Vallikavu', 2),
(89, ' Adavi', 3),
(90, ' Adoor', 3),
(91, ' Kadapra', 3),
(92, ' Konni', 3),
(93, ' Kozhencherry', 3),
(94, ' Mallapally', 3),
(95, ' Pandalam', 3),
(96, ' Parumala', 3),
(97, ' Pathanamthitta', 3),
(98, ' Pullad', 3),
(99, ' Ranni', 3),
(100, ' Thiruvalla', 3),
(101, '  Vennikulam', 3),
(102, 'Alappuzha', 4),
(103, 'Ambalappuzha', 4),
(104, 'Arookutty', 4),
(105, 'Aroor', 4),
(106, 'Charummood', 4),
(107, 'Chengannur', 4),
(108, 'Cherthala', 4),
(109, 'Chettikulangara', 4),
(110, 'Haripad', 4),
(111, 'Kanjikuzhi', 4),
(112, 'Kayamkulam', 4),
(113, 'Kokkamangalam', 4),
(114, 'Kokkothamangalam', 4),
(115, 'Komalapuram', 4),
(116, ' Mannar', 4),
(117, ' Mararikulam North', 4),
(118, 'Mavelikkara', 4),
(119, 'Muhamma', 4),
(120, 'Nangiarkulangara', 4),
(121, 'Padanilam', 4),
(122, 'Pallickal', 4),
(123, ' Thumpoly', 4),
(124, ' Thuravoor', 4),
(125, ' Vellakinar', 4),
(126, 'Changanassery', 5),
(127, 'Erattupetta', 5),
(128, 'Ettumanoor', 5),
(129, 'Kanjirappally', 5),
(130, 'Kottayam', 5),
(131, 'Manarcaud', 5),
(132, 'Pala', 5),
(133, 'Pampady', 5),
(134, 'Parathanam', 5),
(135, 'Ponkunnam', 5),
(136, 'Ramapuram', 5),
(137, 'Teekoy', 5),
(138, 'Vaikom', 5),
(139, 'Adimali', 6),
(140, 'Cheruthoni', 6),
(141, ' Idukki', 6),
(142, ' Kattappana', 6),
(143, ' Kumily', 6),
(144, ' Marayur', 6),
(145, ' Munnar', 6),
(146, ' Murickassery', 6),
(147, ' Muthalakodam', 6),
(148, ' Nedumkandam', 6),
(149, ' Painavu', 6),
(150, ' Parathode', 6),
(151, ' Peermade', 6),
(152, ' Thekkady', 6),
(153, ' Thodupuzha', 6),
(154, ' Thopramkudy', 6),
(155, ' Udumbanchola', 6),
(156, ' Vandiperiyar', 6),
(157, 'Allapra', 7),
(158, 'Aluva', 7),
(159, 'Ambalamedu', 7),
(160, 'Ambalamugal', 7),
(161, 'Angamaly', 7),
(162, 'Arakkunnam', 7),
(163, 'Chembarakky', 7),
(164, 'Chendamangalam', 7),
(165, 'Chengamanad', 7),
(166, 'Cheranallur', 7),
(167, 'Cheruvattoor', 7),
(168, 'Choornikkara', 7),
(169, 'Chowwara', 7),
(170, 'Chowwera', 7),
(171, 'Edachira', 7),
(172, 'Edappally', 7),
(173, 'Edathala', 7),
(174, 'Eloor', 7),
(175, 'Ernakulam', 7),
(176, 'Irumpanam', 7),
(177, ' Kadamakkudy', 7),
(178, ' Kadayiruppu', 7),
(179, ' Kadungalloor', 7),
(180, ' Kakkanad', 7),
(181, ' Kalady', 7),
(182, ' Kalamassery', 7),
(183, ' Kanjoor', 7),
(184, ' Kaprikkad', 7),
(185, ' Keezhmad', 7),
(186, ' Kochi', 7),
(187, ' Kolenchery', 7),
(188, ' Koonammavu', 7),
(189, ' Koothattukulam', 7),
(190, ' Kothamangalam', 7),
(191, ' Kottuvally', 7),
(192, ' Kundannoor', 7),
(193, ' Kunnukara', 7),
(194, ' Kureekkad', 7),
(195, ' Malayattoor', 7),
(196, ' Malayidomthuruth', 7),
(197, ' Manjaly', 7),
(198, ' Maradu', 7),
(199, ' Mattoor', 7),
(200, ' Moolampilly', 7),
(201, ' Mulavukad', 7),
(202, ' Muvattupuzha', 7),
(203, ' Nayarambalam', 7),
(204, ' Nedumbassery', 7),
(205, ' Nedungad', 7),
(206, 'North Paravur', 7),
(207, 'Oorakkad', 7),
(208, 'Palliyangadi', 7),
(209, 'Pampakuda', 7),
(210, 'Payyal', 7),
(211, 'Perumbavoor', 7),
(212, 'Perumpadappu', 7),
(213, 'Pezhakkappilly', 7),
(214, 'Piravom', 7),
(215, 'Pizhala', 7),
(216, 'Ponjassery', 7),
(217, 'Pukkattupadi', 7),
(218, 'Puliyanam', 7),
(219, 'Thamarachal', 7),
(220, 'Thiruvankulam', 7),
(221, 'Thottakkattukara', 7),
(222, 'Thrippunithura', 7),
(223, 'Thuruthipilly', 7),
(224, 'Udayamperoor', 7),
(225, 'Varappuzha', 7),
(226, 'Vazhakkala', 7),
(227, 'Vazhakulam', 7),
(228, 'Venduvazhy', 7),
(229, 'Vengoor ', 7),
(230, 'Vyttila', 7),
(231, 'Adat', 8),
(232, 'Akathiyoor', 8),
(233, 'Alagappa Nagar', 8),
(234, 'Annamanada', 8),
(235, 'Arangottukara', 8),
(236, 'Attore North', 8),
(237, 'Attore South', 8),
(238, 'Avinissery', 8),
(239, 'Brahmakulam', 8),
(240, 'Chalakudy', 8),
(241, 'Chavakkad', 8),
(242, 'Chelakkara', 8),
(243, 'Chemmappilly', 8),
(244, 'Chevoor', 8),
(245, 'Guruvayur', 8),
(246, 'Harinagar Poonkunnam', 8),
(247, ' Iringaprom', 8),
(248, ' Irinjalakuda', 8),
(249, ' Kallamkunnu', 8),
(250, ' Kanimangalam', 8),
(251, ' Karuvannoor', 8),
(252, ' Kechery', 8),
(253, ' Kodakara', 8),
(254, ' Kodungallur', 8),
(255, ' Kolazhy', 8),
(256, ' Koratty', 8),
(257, ' Kottappuram', 8),
(258, ' Kottapuram', 8),
(259, ' Kunnamkulam', 8),
(260, ' Kuthiran', 8),
(261, ' Kuttur', 8),
(262, ' Mala', 8),
(263, ' Manaloor', 8),
(264, ' Marathakkara', 8),
(265, ' Methala', 8),
(266, ' Moonupeedika', 8),
(267, ' Mulakunnathukavu', 8),
(268, ' Mupliyam', 8),
(269, ' Nenmanikkara', 8),
(270, ' Palakkal', 8),
(271, ' Palayur', 8),
(272, ' Palissery', 8),
(273, ' Paluvai', 8),
(274, ' Pavaratty', 8),
(275, ' Perakam', 8),
(276, ' Perambra', 8),
(277, ' Peruvamkulangara', 8),
(278, ' Pottore', 8),
(279, ' Puranattukara', 8),
(280, ' Puthukkad', 8),
(281, ' Puzhakkal ', 8),
(282, 'Sangamagrama', 8),
(283, 'Thaikkad', 8),
(284, 'Thalapilly', 8),
(285, 'Thalore', 8),
(286, 'Thiruvalayannur', 8),
(287, 'Thrissur', 8),
(288, 'Triprayar', 8),
(289, 'Vadakkumkara', 8),
(290, 'Vadanappally', 8),
(291, 'Vallachira', 8),
(292, 'Varandarappilly', 8),
(293, 'Vellanikkara', 8),
(294, 'Venmanad', 8),
(295, ' Wadakkancherry', 8),
(296, ' Chandranagar', 9),
(297, ' Chittur-Thathamangalam', 9),
(298, 'Kaikatty', 9),
(299, 'Kakkayur', 9),
(300, 'Kanjikode', 9),
(301, 'Karuvanpadi', 9),
(302, 'Kesavanpara', 9),
(303, 'Kulappully', 9),
(304, 'Kumbidi', 9),
(305, 'Manissery', 9),
(306, 'Mankurussi', 9),
(307, 'Mannarkkad', 9),
(308, 'Marutharode', 9),
(309, 'Olavakkode', 9),
(310, 'Padinjarangadi', 9),
(311, 'Palakkad', 9),
(312, 'Palakkuzhi', 9),
(313, 'Palappuram', 9),
(314, 'Pathirippala', 9),
(315, 'Pattambi', 9),
(316, 'Puthur', 9),
(317, 'Shoranur', 9),
(318, 'Trikkatiri', 9),
(319, ' Vadakkencherry', 9),
(320, ' Vaniyamkulam', 9),
(321, ' Vazhempuram', 9),
(322, ' Walayar', 9),
(323, ' Aikkarappadi', 10),
(324, ' Alamkod', 10),
(325, ' Alattiyur', 10),
(326, ' Ananthavoor', 10),
(327, ' Angadipuram', 10),
(328, ' Areekode', 10),
(329, ' Ariyallur', 10),
(330, ' Athavanad', 10),
(331, ' Changaramkulam', 10),
(332, ' Chemmad', 10),
(333, ' Cheriyamundam', 10),
(334, ' Cherukara', 10),
(335, ' Cherukavu', 10),
(336, ' Chungathara', 10),
(337, 'Edakkara', 10),
(338, 'Edappal', 10),
(339, 'Edarikode', 10),
(340, 'Idimuzhikkal', 10),
(341, 'Irimbiliyam', 10),
(342, ' Kadampuzha', 10),
(343, ' Kakkad', 10),
(344, 'Kalady', 10),
(345, 'Kalikavu', 10),
(346, 'Karinkallathani', 10),
(347, 'Karipur', 10),
(348, 'Kavathikalam', 10),
(349, 'Kodur', 10),
(350, 'Kondotty', 10),
(351, 'Koottilangadi', 10),
(352, 'Kottakkal', 10),
(353, 'Kuttippuram', 10),
(354, 'Malappuram', 10),
(355, 'Mampad', 10),
(356, 'Mangalam', 10),
(357, 'Manjeri', 10),
(358, 'Mankada', 10),
(359, 'Maranchery', 10),
(360, 'Mongam', 10),
(361, 'Naduvattom', 10),
(362, 'Nannambra', 10),
(363, 'Nediyiruppu', 10),
(364, 'Neduva', 10),
(365, 'Nilambur', 10),
(366, 'Niramarutur', 10),
(367, 'Oorakam', 10),
(368, 'Othukkungal', 10),
(369, 'Pallikkal', 10),
(370, 'Pandikkad', 10),
(371, 'Parappanangadi', 10),
(372, 'Parappur', 10),
(373, 'Pattikkad', 10),
(374, 'Perinthalmanna', 10),
(375, 'Perumanna-Klari', 10),
(376, 'Peruvallur', 10),
(377, 'Ponmundam', 10),
(378, 'Ponnani', 10),
(379, 'Pudiyangadi', 10),
(380, 'Purathur', 10),
(381, 'Puthanathani', 10),
(382, 'Tanur', 10),
(383, 'Tenhipalam', 10),
(384, 'Tennala', 10),
(385, 'Thalakkad', 10),
(386, 'Thalappara', 10),
(387, 'Tirur', 10),
(388, 'Tirurangadi', 10),
(389, 'Valambur', 10),
(390, 'Valanchery', 10),
(391, 'Valiyakunnu', 10),
(392, 'Valluvambram Junction', 10),
(393, 'Vaniyambalam', 10),
(394, 'Vazhayur', 10),
(395, 'Veliyankode', 10),
(396, 'Vengara', 10),
(397, 'Wandoor', 10),
(398, 'Balussery', 11),
(399, ' Cheruvannur Nallalam', 11),
(400, 'Feroke', 11),
(401, ' Kinassery', 11),
(402, 'Koduvally', 11),
(403, 'Koodaranji', 11),
(404, 'Koyilandy', 11),
(405, 'Kozhikode', 11),
(406, 'Kunnamangalam', 11),
(407, 'Madappally', 11),
(408, 'Pantheeramkavu', 11),
(409, 'Perambra', 11),
(410, 'Poovaranthode', 11),
(411, 'Ramanattukara', 11),
(412, ' Thamarassery', 11),
(413, ' Thiruvambady', 11),
(414, ' Thottumukkam', 11),
(415, ' Vatakara', 11),
(416, ' Kalpetta', 12),
(417, ' Kayakkunn', 12),
(418, ' Mananthavady', 12),
(419, ' Meenangadi', 12),
(420, 'Padinharethara', 12),
(421, 'Panamaram', 12),
(422, 'Pulpally', 12),
(423, 'Sultan Bathery', 12),
(424, 'Alakode', 13),
(425, 'Anjarakkandy', 13),
(426, 'Anthoor', 13),
(427, 'Azhikode and Azhikkal', 13),
(428, 'Cheleri', 13),
(429, 'Cherukunnu', 13),
(430, 'Cherupuzha', 13),
(431, 'Cheruthazham', 13),
(432, 'Dharmadom', 13),
(433, 'Eranholi', 13),
(434, 'Eruvatti', 13),
(435, 'Ezhome', 13),
(436, 'Irikkur', 13),
(437, 'Iritty', 13),
(438, 'Iriveri', 13),
(439, 'Kadachira', 13),
(440, 'Kadannappalli', 13),
(441, 'Kadirur', 13),
(442, 'Kalliasseri', 13),
(443, 'Kandamkunnu', 13),
(444, 'Kanhirode', 13),
(445, 'Kannadiparamba', 13),
(446, 'Kannapuram', 13),
(447, 'Kannur', 13),
(448, 'Karivellur', 13),
(449, 'Keezhallur', 13),
(450, 'Kolachery', 13),
(451, 'Kolavelloor', 13),
(452, 'Koodali', 13),
(453, 'Kottayam-Malabar', 13),
(454, 'Kunhimangalam', 13),
(455, 'Kurumathur', 13),
(456, 'Kuthuparamba', 13),
(457, 'Kuttiattoor', 13),
(458, 'Madayi', 13),
(459, 'Manantheri', 13),
(460, 'Mangattidam', 13),
(461, 'Maniyoor', 13),
(462, 'Mattanur', 13),
(463, 'Mavilayi', 13),
(464, 'Mayyil', 13),
(465, 'Mokeri', 13),
(466, 'Narath', 13),
(467, 'Paduvilayi', 13),
(468, 'Panniyannur', 13),
(469, 'Panoor', 13),
(470, 'Pappinisseri', 13),
(471, 'Pariyaram', 13),
(472, 'Pathiriyad', 13),
(473, 'Pattiom', 13),
(474, 'Payyanur', 13),
(475, 'Pazhayangadi', 13),
(476, 'Peralasseri', 13),
(477, 'Peravoor', 13),
(478, 'Peringathur', 13),
(479, 'Pilathara', 13),
(480, 'Pinarayi', 13),
(481, 'Sreekandapuram', 13),
(482, 'Taliparamba', 13),
(483, 'Thalassery', 13),
(484, 'Bangramanjeshwar', 14),
(485, 'Bare', 14),
(486, 'Cherkala', 14),
(487, 'Cheruvathur', 14),
(488, 'Hosabettu', 14),
(489, 'Kanhangad', 14),
(490, 'Kasaragod', 14),
(491, 'Kunjathur', 14),
(492, 'Manjeshwar', 14),
(493, 'Nileshwaram', 14),
(494, 'Uppala', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(30) NOT NULL,
  `post_content` varchar(200) NOT NULL,
  `post_datetime` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `post_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_content`, `post_datetime`, `user_id`, `doctor_id`, `post_file`) VALUES
(28, 'Post 3', 'Content of Post 3', '2023-05-30 15:45:46', 1, 0, 'IMG_20210921_141713.jpg'),
(30, 'HAI', 'gd mng', '2023-05-31 08:24:16', 0, 0, 'IMG_20210518_154128.jpg'),
(36, 'SKIN CARE', 'Tips for skin care', '2023-06-24 13:02:16', 8, 0, 'project.jpg'),
(37, 'PCOD', 'women listen...', '2023-06-24 14:09:46', 0, 14, 'sss.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(9, 'mkjnk', 0),
(12, 'ghgj', 0),
(19, 'Awareness', 9),
(20, 'Awareness', 11),
(21, '', 0),
(22, 'Tips', 0),
(23, 'Techniques', 11),
(24, 'Techniques', 0),
(25, '', 0),
(26, '', 0),
(27, 'Relevance', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_contact` varchar(30) NOT NULL,
  `user_photo` varchar(150) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_vstatus` int(11) NOT NULL DEFAULT 2,
  `user_proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `user_photo`, `user_address`, `place_id`, `user_vstatus`, `user_proof`) VALUES
(2, 'Anna', 'anna@gmail.com', '123', '1234567891', 'IMG_20210518_154128.jpg', 'House Munnar', 105, 1, 'IMG_20210921_141713.jpg'),
(3, 'Anu Steji', 'anusteji@gmail.com', '2468', '8281213646', 'IMG_20210921_141713.jpg', 'Enchanattu', 356, 2, 'IMG_20210921_141713.jpg'),
(8, 'Merin Jose', 'mj123@gmail.com', '246', '9605222294', 'photo.jpg', 'mannanam(H)', 222, 2, 'pexels-photo-443446.jpeg'),
(13, 'Reeta', 'reeta@gmail', '345', '1234567890', 'pic1.jpg', 'Illickal', 437, 2, 'pic1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_chatlist`
--
ALTER TABLE `tbl_chatlist`
  ADD PRIMARY KEY (`chatlist_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_chatlist`
--
ALTER TABLE `tbl_chatlist`
  MODIFY `chatlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
