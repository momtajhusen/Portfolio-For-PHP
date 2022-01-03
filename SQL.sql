-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 04:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `img` varchar(200) NOT NULL,
  `About_as` varchar(1000) NOT NULL,
  `you_are` varchar(300) NOT NULL,
  `you_are_as` varchar(300) NOT NULL,
  `Birthday` varchar(100) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `PhEmailone` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Freelance` varchar(20) NOT NULL,
  `Officiis_eligendi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`img`, `About_as`, `you_are`, `you_are_as`, `Birthday`, `Age`, `Website`, `Degree`, `Phone`, `PhEmailone`, `City`, `Freelance`, `Officiis_eligendi`) VALUES
('assets/img/profile-img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'UI/UX Designer & Web Developer.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '21 Sep 1999', '22', 'www.dipakkushwaha.com', 'Diploma', '(+91) 9557158326', 'deepak36884@gmail.com', 'Janakpur Dham', ' Available', 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('', ''),
('', ''),
('', ''),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_as` varchar(300) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Call_No` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_as`, `Location`, `Email`, `Call_No`) VALUES
('Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas. Lorem ipsum dolor sit amet, consectetur adipisc', 'Nagarain Nagarpalika Fhulgama -04', '                                                                       deepak36884@gmail.com sunny58326@gmail.com', '(+91) 9557158326 (+977) 9809636884');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `Facts_As` varchar(400) NOT NULL,
  `happy_clients_no` varchar(5) NOT NULL,
  `happy_clients_text` varchar(100) NOT NULL,
  `projects_no` varchar(5) NOT NULL,
  `projects_text` varchar(100) NOT NULL,
  `hours_support_no` varchar(5) NOT NULL,
  `hours_support_text` varchar(100) NOT NULL,
  `hard_workers_no` varchar(5) NOT NULL,
  `hard_workers_text` varchar(100) NOT NULL,
  `on_off` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`Facts_As`, `happy_clients_no`, `happy_clients_text`, `projects_no`, `projects_text`, `hours_support_no`, `hours_support_text`, `hard_workers_no`, `hard_workers_text`, `on_off`, `display`) VALUES
('Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', '25', 'consequuntur quae', '20', ' adipisci atque cum quia aut', '16', 'aut commodi quaerat', '30', 'rerum asperiores dolor', 'checked', '');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `img` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `i_am` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`img`, `name`, `i_am`, `time`) VALUES
('assets/img/hero-bg.jpg', 'Er.Dipak Kuswah', 'Developer, Photographer, Designer, Freelancer', '2021-12-28 03:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `on_off` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`on_off`, `display`) VALUES
('', 'd-none');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `on_off` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`on_off`, `display`) VALUES
('', 'd-none');

-- --------------------------------------------------------

--
-- Table structure for table `resume_upload`
--

CREATE TABLE `resume_upload` (
  `cv_type` varchar(10) NOT NULL,
  `cv_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_upload`
--

INSERT INTO `resume_upload` (`cv_type`, `cv_path`) VALUES
('RESUME', 'assets/img/resume-cv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `on_off` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`on_off`, `display`) VALUES
('', 'd-none');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_as` varchar(300) NOT NULL,
  `skill_a` varchar(100) NOT NULL,
  `skill_b` varchar(100) NOT NULL,
  `skill_c` varchar(100) NOT NULL,
  `skill_d` varchar(100) NOT NULL,
  `skill_e` varchar(100) NOT NULL,
  `skill_f` varchar(100) NOT NULL,
  `skill_g` varchar(100) NOT NULL,
  `skill_h` varchar(100) NOT NULL,
  `skill_i` varchar(100) NOT NULL,
  `skill_j` varchar(100) NOT NULL,
  `pct_a` varchar(5) NOT NULL,
  `pct_b` varchar(5) NOT NULL,
  `pct_c` varchar(5) NOT NULL,
  `pct_d` varchar(5) NOT NULL,
  `pct_e` varchar(5) NOT NULL,
  `pct_f` varchar(5) NOT NULL,
  `pct_g` varchar(5) NOT NULL,
  `pct_h` varchar(5) NOT NULL,
  `pct_i` varchar(5) NOT NULL,
  `pct_j` varchar(5) NOT NULL,
  `dispaly_a` varchar(10) NOT NULL,
  `dispaly_b` varchar(10) NOT NULL,
  `dispaly_c` varchar(10) NOT NULL,
  `dispaly_d` varchar(10) NOT NULL,
  `dispaly_e` varchar(10) NOT NULL,
  `dispaly_f` varchar(10) NOT NULL,
  `dispaly_g` varchar(10) NOT NULL,
  `dispaly_h` varchar(10) NOT NULL,
  `dispaly_i` varchar(10) NOT NULL,
  `dispaly_j` varchar(10) NOT NULL,
  `btn_a` varchar(10) NOT NULL,
  `btn_b` varchar(10) NOT NULL,
  `btn_c` varchar(10) NOT NULL,
  `btn_d` varchar(10) NOT NULL,
  `btn_e` varchar(10) NOT NULL,
  `btn_f` varchar(10) NOT NULL,
  `btn_g` varchar(10) NOT NULL,
  `btn_h` varchar(10) NOT NULL,
  `btn_i` varchar(10) NOT NULL,
  `btn_j` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_as`, `skill_a`, `skill_b`, `skill_c`, `skill_d`, `skill_e`, `skill_f`, `skill_g`, `skill_h`, `skill_i`, `skill_j`, `pct_a`, `pct_b`, `pct_c`, `pct_d`, `pct_e`, `pct_f`, `pct_g`, `pct_h`, `pct_i`, `pct_j`, `dispaly_a`, `dispaly_b`, `dispaly_c`, `dispaly_d`, `dispaly_e`, `dispaly_f`, `dispaly_g`, `dispaly_h`, `dispaly_i`, `dispaly_j`, `btn_a`, `btn_b`, `btn_c`, `btn_d`, `btn_e`, `btn_f`, `btn_g`, `btn_h`, `btn_i`, `btn_j`) VALUES
('Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'HTML', 'CSS', 'Javascript', 'Jquery', 'Jquery Ui & Mobile', 'Bootstrap', 'SQL', 'PHP', 'Wordpress', 'PYTHON', '10', '50', '40', '60', '10', '90', '80', '9', '12', '88', '', '', '', '', '', '', '', '', '', '', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `select_a` varchar(50) NOT NULL,
  `select_b` varchar(50) NOT NULL,
  `select_c` varchar(50) NOT NULL,
  `select_d` varchar(50) NOT NULL,
  `select_e` varchar(50) NOT NULL,
  `url_a` varchar(200) NOT NULL,
  `url_b` varchar(200) NOT NULL,
  `url_c` varchar(200) NOT NULL,
  `url_d` varchar(200) NOT NULL,
  `url_e` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`select_a`, `select_b`, `select_c`, `select_d`, `select_e`, `url_a`, `url_b`, `url_c`, `url_d`, `url_e`) VALUES
('fa-facebook-f', 'fa-youtube-play', 'none', 'fa-twitter', 'fa-github', 'https://www.youtube.com/channel/UCkPc9eERzmxqbzJi-16Jvmw', 'https://www.facebook.com/', 'https://www.instagram.com/_dipak__singh_/', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `on_off` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`on_off`, `display`) VALUES
('', 'd-none');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `isp` varchar(200) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `os` varchar(50) NOT NULL,
  `device` varchar(50) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `country`, `region`, `city`, `isp`, `ip`, `os`, `device`, `browser`, `time`) VALUES
(117, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows', 'Computer', 'Chrome', '2022-01-01 15:05:03'),
(118, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 14:58:23'),
(119, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 15:20:58'),
(120, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 15:21:00'),
(121, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 15:21:59'),
(122, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 15:22:03'),
(123, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 16:32:11'),
(124, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 17:56:14'),
(125, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 17:56:17'),
(126, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-01 17:56:23'),
(127, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-03 15:26:32'),
(128, 'India', 'Madhya Pradesh', 'Bhopal', 'BHARTI', '::1', 'Windows 10', 'Computer', 'Chrome', '2022-01-03 15:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `visite_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `visite_date`, `ip`) VALUES
(0, '::1', '2021-12-29 18:31:04', ''),
(1, '12:12:12:12', '2021-12-29 18:25:26', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
