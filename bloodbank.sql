-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 12:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(150) NOT NULL,
  `blog_desc` longtext NOT NULL,
  `blog_image` varchar(350) NOT NULL,
  `blog_date` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_desc`, `blog_image`, `blog_date`, `blog_status`) VALUES
(1, 'What is a Blood Bank', 'A blood bank is a specialized facility that collects, processes, stores, and distributes blood and its components to hospitals and healthcare facilities. These facilities are responsible for screening blood donors, testing donated blood for infectious diseases, and storing blood products under optimal conditions', 'uploader/blood3.jpg', '2024-03-14 16:01:20', ''),
(2, 'Blood Types Decoded: Donor-Recipient Matching', 'Delve into the world of blood types, compatibility, and the importance of matching donors with recipients to ensure successful transfusions and optimal patient outcomes.', 'uploader/blood2.jpg', '2024-03-15 11:17:35', ''),
(3, 'Blood Banks in Crisis: Preparedness and Response', ' Explore the vital role of blood banks during emergencies and disasters, from their proactive preparedness measures to their swift response efforts in mobilizing resources and supporting healthcare providers in times of need.', 'uploader/plan.jpg', '2024-03-15 11:19:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `b_id` int(11) NOT NULL,
  `b_group` varchar(50) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_stock` float NOT NULL,
  `b_time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `b_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`b_id`, `b_group`, `b_desc`, `b_stock`, `b_time`, `b_status`) VALUES
(1, 'A+', 'This blood group is similar to blood group A, but with an additional Rh factor (positive). A+ individuals can donate blood to individuals with blood groups A+ and AB+, and they can receive blood from individuals with blood groups A, A+, O, and O+.', 100, '2024-03-13 15:20:13.735541', ''),
(2, 'A-', 'Individuals with blood group A? have red blood cells that carry the A antigen on their surface and no Rh (D) antigen. Their plasma contains anti-B antibodies. They can donate blood to individuals with A?, A+, AB?, and AB+ blood groups. They can receive blood from A? and O? donors only (Rh-negative only).', 0, '2024-03-13 15:20:39.980247', ''),
(3, 'B+', ' Similar to blood group B, but with an additional Rh factor (positive). B+ individuals can donate blood to individuals with blood groups B+ and AB+, and they can receive blood from individuals with blood groups B, B+, O, and O+.', 0, '2024-03-13 15:21:11.834509', ''),
(4, 'B-', 'Individuals with blood group B? have red blood cells that carry the B antigen on their surface and lack the Rh (D) antigen. Their plasma contains anti-A antibodies. They can donate blood to individuals with B?, B+, AB?, and AB+ blood groups. They can receive blood from B? and O? donors only (Rh-negative only).', 0, '2024-03-13 15:21:19.650720', ''),
(5, 'O+', 'Individuals with blood group O have red blood cells that do not carry A or B antigens on their surface but have antibodies against both A and B antigens in their plasma. They are universal donors and can donate blood to individuals with any blood group (A, B, AB, or O)', 0, '2024-03-13 15:21:50.982376', ''),
(6, 'O-', 'Similar to blood group O, but with an additional Rh factor (negative). O- individuals are universal donors and can donate blood to individuals with any blood group (A, B, AB, or O), including those with Rh-negative blood.', 0, '2024-03-13 15:21:58.744389', ''),
(7, 'AB+', ' Similar to blood group AB, but with an additional Rh factor (positive). AB+ individuals are universal recipients and can receive blood from individuals with any blood group (A, B, AB, or O).', 0, '2024-03-13 15:22:12.177378', ''),
(9, 'AB-', ' Similar to blood group AB, but with an additional Rh factor (positive). AB+ individuals are universal recipients and can receive blood from individuals with any blood group (A, B, AB, or O).', 100, '0000-00-00 00:00:00.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `b_request`
--

CREATE TABLE `b_request` (
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `r_request` longtext NOT NULL,
  `rq_date` date NOT NULL,
  `r_date` date NOT NULL DEFAULT current_timestamp(),
  `r_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_request`
--

INSERT INTO `b_request` (`r_id`, `u_id`, `r_name`, `contact`, `r_request`, `rq_date`, `r_date`, `r_status`) VALUES
(1, 6, 'vamshi', 9876543218, 'jkfhjf ajfhkjfh djafijhfi djfhiweh df hriefhr df hierufnfi jrhfiu', '2024-03-28', '2024-03-26', 'accept'),
(2, 6, 'aaaa', 7536427235, ' dasda dsfdskf fsdkfw', '2024-04-10', '2024-04-08', 'accept'),
(3, 6, 'aaaa', 7536427235, ' hsghjf sfjhh', '2024-04-09', '2024-04-08', 'accept'),
(4, 6, '', 0, ' ', '0000-00-00', '2024-04-09', 'reject'),
(5, 3, 'caretaker', 2233445566, ' ksq duhd dduh hdhhd  u h8u  j uw uuwd', '2025-04-30', '2025-04-29', ''),
(6, 8, 'jothi', 2233445566, ' ', '2025-05-02', '2025-04-30', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `l_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `c_desc` text NOT NULL,
  `c_img` varchar(350) NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `c_date` datetime NOT NULL DEFAULT current_timestamp(),
  `c_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`c_id`, `c_name`, `l_id`, `from_date`, `to_date`, `c_desc`, `c_img`, `from_time`, `to_time`, `c_date`, `c_status`) VALUES
(2, 'BloodWave Mangalore', 1, '2024-03-15', '2024-03-20', 'join us at blood camp', 'uploader/blod.png', '09:00:00', '17:00:00', '2024-03-12 12:55:34', 'active'),
(6, 'Crimson Lifesaver', 3, '2024-03-20', '2024-03-30', 'Be a hero and join us at Crimson Lifesaver, the ultimate blood donation camp in Mangalore. Your contribution can help save lives and make a real difference in our community. ', '', '09:00:00', '04:00:00', '2024-03-15 12:30:06', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `do_id` int(11) NOT NULL,
  `do_name` varchar(300) NOT NULL,
  `do_phone` bigint(20) NOT NULL,
  `do_rdate` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `do_desc` longtext NOT NULL,
  `do_date` date NOT NULL DEFAULT current_timestamp(),
  `do_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`do_id`, `do_name`, `do_phone`, `do_rdate`, `u_id`, `b_id`, `do_desc`, `do_date`, `do_status`) VALUES
(1, 'jothi', 2233445566, '2025-05-09', 8, 5, ' ', '2025-04-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `f_name` varchar(400) NOT NULL,
  `f_email` varchar(400) NOT NULL,
  `f_sub` varchar(800) NOT NULL,
  `f_msg` longtext NOT NULL,
  `f_date` date NOT NULL DEFAULT current_timestamp(),
  `f_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `u_id`, `r_id`, `f_name`, `f_email`, `f_sub`, `f_msg`, `f_date`, `f_status`) VALUES
(1, 6, 1, '', '', '', 'shdkhd jnbuhweuc bhwebfu fbewifw hewbhfu', '2024-03-26', ''),
(2, 6, 2, '', '', '', 'nedkjwefhjkw', '2024-04-08', ''),
(3, 6, 3, '', '', '', 'hjf hjfher  fehrfh', '2024-04-08', ''),
(4, 0, 0, 'manoj', 'manoj@gmail.com', 'user', 'kwbduqw', '2025-04-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `im_request`
--

CREATE TABLE `im_request` (
  `im_id` int(11) NOT NULL,
  `u_id_n` int(11) NOT NULL,
  `u_id_d` int(11) NOT NULL,
  `im_date` date NOT NULL DEFAULT current_timestamp(),
  `im_status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `im_request`
--

INSERT INTO `im_request` (`im_id`, `u_id_n`, `u_id_d`, `im_date`, `im_status`) VALUES
(3, 6, 5, '2024-04-09', 'into'),
(4, 6, 5, '2024-04-09', 'into');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `l_date` datetime NOT NULL DEFAULT current_timestamp(),
  `l_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `l_name`, `l_date`, `l_status`) VALUES
(1, 'Manglore', '2024-02-10 00:00:00', ''),
(3, 'Udupi', '2024-02-14 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` bigint(10) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `l_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `u_type` varchar(200) NOT NULL,
  `u_gender` varchar(50) NOT NULL,
  `u_img` varchar(300) NOT NULL,
  `em_msg` varchar(100) NOT NULL,
  `u_date` date NOT NULL,
  `don_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_phone`, `u_password`, `l_id`, `b_id`, `u_type`, `u_gender`, `u_img`, `em_msg`, `u_date`, `don_status`) VALUES
(5, 'donar', 'donar@gmail.com', 123456789, '1234', 1, 6, 'Donar', 'female', 'uploader/qrcode.jpg', 'emergency', '0000-00-00', ''),
(6, 'needy', 'needy@gmail.com', 123456789, '1234', 1, 2, 'Needy', 'male', '', '', '0000-00-00', ''),
(7, 'jothi', 'jothi@gmail.com', 9876543215, '12345', 1, 3, 'Donar', 'female', '', 'emergency', '0000-00-00', ''),
(8, 'abc', 'abc@gmail.com', 1234567892, 'Aa!1Aa!1', 0, 6, '', 'female', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `b_request`
--
ALTER TABLE `b_request`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`do_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `im_request`
--
ALTER TABLE `im_request`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `b_request`
--
ALTER TABLE `b_request`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `do_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `im_request`
--
ALTER TABLE `im_request`
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
