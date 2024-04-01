-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 08:53 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_open`
--

CREATE TABLE `acc_open` (
  `acc_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `adhar_no` int(20) NOT NULL,
  `adhar_img` varchar(300) NOT NULL,
  `pincode` int(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_open`
--

INSERT INTO `acc_open` (`acc_id`, `user_id`, `adhar_no`, `adhar_img`, `pincode`, `status`) VALUES
(6, 5, 2147483647, 'post.jpg', 576214, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(50) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `password`, `mail`) VALUES
(1, 'sahana', 'sahana123', 'sahana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `assign_emp`
--

CREATE TABLE `assign_emp` (
  `as_id` int(50) NOT NULL,
  `postid` int(50) NOT NULL,
  `emp_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_emp`
--

INSERT INTO `assign_emp` (`as_id`, `postid`, `emp_id`) VALUES
(7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `a_uploadinfo`
--

CREATE TABLE `a_uploadinfo` (
  `info_id` int(100) NOT NULL,
  `info_name` varchar(200) NOT NULL,
  `info_title` varchar(500) NOT NULL,
  `info_description` varchar(800) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `pincode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `name`, `email`, `complaint`, `latitude`, `longitude`, `uid`, `pincode`) VALUES
(1, 'swathi', 'sdswathi790@gmail.com', 'jhgkdf', '', '', 0, ''),
(2, 'swathi', 'sdswathi790@gmail.com', 'uygoy', '12.8711963', '74.8463789', 0, ''),
(3, 'swathi', 'sdswathi790@gmail.com', 'ytri', '12.8711963', '74.8463789', 5, '576214'),
(4, 'swathi', 'sdswathi790@gmail.com', 'kji', '12.8711963', '74.8463789', 5, '576214'),
(5, 'swathi', 'sdswathi790@gmail.com', 'kji', '12.8711963', '74.8463789', 5, '576214'),
(6, 'swathi', 'sdswathi790@gmail.com', 'ytrei7yt', '12.8712057', '74.8463655', 5, '576214');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_res`
--

CREATE TABLE `complaint_res` (
  `cr_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  `response` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_res`
--

INSERT INTO `complaint_res` (`cr_id`, `c_id`, `lat`, `long`, `u_id`, `response`) VALUES
(4, 3, '12.8713023', '74.8390733', 5, 'rthieur');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_track`
--

CREATE TABLE `complaint_track` (
  `ct_id` int(50) NOT NULL,
  `c_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `track_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_track`
--

INSERT INTO `complaint_track` (`ct_id`, `c_id`, `user_id`, `track_id`) VALUES
(1, 3, 5, 39672),
(2, 4, 5, 26416),
(3, 5, 5, 96323),
(4, 6, 5, 79918);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `deposit_id` int(50) NOT NULL,
  `user_id` int(30) NOT NULL,
  `deposit_amt` int(200) NOT NULL,
  `deposit_branch` varchar(60) NOT NULL,
  `deposit_date` date NOT NULL,
  `acc_no` bigint(60) NOT NULL,
  `ifsc_code` varchar(75) NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `sr_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_managecount`
--

CREATE TABLE `emp_managecount` (
  `post_id` int(100) NOT NULL,
  `post_name` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_managemo`
--

CREATE TABLE `emp_managemo` (
  `m_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `amount` bigint(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_managepay`
--

CREATE TABLE `emp_managepay` (
  `pay_id` int(100) NOT NULL,
  `pay_type` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_registration`
--

CREATE TABLE `emp_registration` (
  `emp_id` int(100) NOT NULL,
  `emp_name` varchar(600) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `ph_no` bigint(60) NOT NULL,
  `address` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_registration`
--

INSERT INTO `emp_registration` (`emp_id`, `emp_name`, `password`, `mail`, `ph_no`, `address`) VALUES
(1, 'kavith', '1234', 'kavith@gmail.com', 8765432125, 'mangalore'),
(2, 'pavithar', '1234', 'pavithra@gmail.com', 9876543457, 'mangalore'),
(3, 'prathvi', '123', 'pratvi@gmail.com', 8765432125, 'mangalore'),
(4, 'pratvi', '123', 'pratvi@gmail.com', 8765432125, 'mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `ins_id` int(50) NOT NULL,
  `ins_name` varchar(50) NOT NULL,
  `ins_interest` int(50) NOT NULL,
  `min_amount` int(50) NOT NULL,
  `period` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `desc` longtext NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`ins_id`, `ins_name`, `ins_interest`, `min_amount`, `period`, `image`, `desc`, `category`) VALUES
(1, 'car insurance', 3, 1000, 3, 'post.jpg', 'We help you discover any protection inclusions that are ideal for you.', 'other'),
(2, 'health insurance', 3, 2000, 2, 'post5.jpg.png', 'Policybazaar is the largest partner for most Health Insurers and a Platinum partner, which means your policy and claims will be treated on a priority', ''),
(3, 'health insurance', 3, 1000, 3, 'post5.jpg.png', 'Good in condition', 'Degree holder'),
(4, 'health insurance', 3, 1000, 3, 'post5.jpg.png', 'Good in condition', 'Degree holder');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_pay`
--

CREATE TABLE `insurance_pay` (
  `inspay_id` int(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_req`
--

CREATE TABLE `insurance_req` (
  `ir_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `ins_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `pincode` int(50) NOT NULL,
  `adhar_no` varchar(80) NOT NULL,
  `birth_certificate` varchar(80) NOT NULL,
  `certificate` varchar(80) NOT NULL,
  `voter_id` varchar(50) NOT NULL,
  `sr_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance_req`
--

INSERT INTO `insurance_req` (`ir_id`, `u_id`, `ins_id`, `date`, `pincode`, `adhar_no`, `birth_certificate`, `certificate`, `voter_id`, `sr_id`) VALUES
(12, 5, 3, '2022-08-23', 576214, '2147483647', 'post4.jpg.jpg', 'post3.jpg.jpg', 'qrcode.jpg', 121),
(13, 5, 3, '2022-08-23', 576214, '2147483647', 'post4.jpg.jpg', 'post3.jpg.jpg', 'qrcode.jpg', 121);

-- --------------------------------------------------------

--
-- Table structure for table `internetbank`
--

CREATE TABLE `internetbank` (
  `internet_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `acc_no` int(30) NOT NULL,
  `ifsc_code` varchar(200) NOT NULL,
  `adhar_no` int(11) NOT NULL,
  `pincode` int(30) NOT NULL,
  `sr_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internetbank`
--

INSERT INTO `internetbank` (`internet_id`, `user_id`, `acc_no`, `ifsc_code`, `adhar_no`, `pincode`, `sr_id`) VALUES
(6, 5, 353513260, 'POST30690', 2147483647, 576214, 123);

-- --------------------------------------------------------

--
-- Table structure for table `main_postoffice`
--

CREATE TABLE `main_postoffice` (
  `mp_id` int(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `location` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_postoffice`
--

INSERT INTO `main_postoffice` (`mp_id`, `district`, `pincode`, `contact`, `location`) VALUES
(1, 'Bagalkot', 587101, 7337613113, 'https://maps.google.com/?cid=4804833797906764263&entry=gps'),
(2, 'Ballary', 583101, 9448595210, 'https://maps.app.goo.gl/EgbcQibsZ6T8ZhN2A'),
(3, 'Belagavi', 577428, 7676609655, 'https://maps.app.goo.gl/nwyCKcjRDn5TeX2c9'),
(4, 'Bengaluru Rural', 562111, 8277403651, 'https://maps.app.goo.gl/mNXYL74da6STGoRQ9'),
(5, 'Bengaluru Urban', 560001, 9980100953, 'https://maps.app.goo.gl/nEDoKCdsFRY3i9bs7'),
(6, 'Bidar', 585401, 9900887766, 'https://maps.app.goo.gl/8Rntn3BKETX6uzVMA'),
(7, 'Chamarajanagar', 571313, 9988776655, 'https://maps.google.com/?cid=5593355808350665270&entry=gps'),
(8, 'Chikballapur', 562101, 8877665544, 'https://maps.app.goo.gl/vRpdGjgBPZdCtaSn8'),
(9, 'Chikkamagaluru', 577101, 9977665544, 'https://maps.app.goo.gl/zDgs62sh9nP88ncK8'),
(10, 'Chitradurga', 577501, 9988007766, 'https://maps.app.goo.gl/WXSAuz6ZAS1LvdPT6'),
(11, 'Dakshina Kannada', 574145, 7766554433, 'https://maps.app.goo.gl/pp1jqQ7my1Qyddf96'),
(12, 'Davangere', 577001, 7700998877, 'https://maps.app.goo.gl/MJA1bm8ukcvCx7pA9'),
(13, 'Dharwad', 580001, 9922334455, 'https://maps.app.goo.gl/uvdvTeDthMB9EVfWA'),
(14, 'Gadag', 582101, 6677889900, 'https://maps.google.com/?cid=2395143472523829533&entry=gps'),
(15, 'Hassan', 573201, 8877665544, 'https://maps.app.goo.gl/3uPJbHqKYwn2rGbP9'),
(16, 'Haveri', 581110, 9900887766, 'https://maps.app.goo.gl/uZLiBWUFk4HfVjxr6'),
(17, ' Gulbarga', 585101, 7766554410, 'https://maps.app.goo.gl/8xBpNutntvLDcrqd8'),
(18, 'Kodagu', 571201, 7711220066, 'https://maps.app.goo.gl/MZB1oFm5w5kKLFQv5'),
(19, 'Kolar', 563101, 9988001155, 'https://maps.app.goo.gl/w3F7bLM7iTN86rF86'),
(20, 'Koppal', 583231, 6677554433, ' https://maps.app.goo.gl/m46PMmX44qHosE5h6'),
(21, 'Mandya', 571401, 6600998811, 'https://maps.app.goo.gl/1m3rJJHWR9HyUBrU8'),
(22, 'Mysore', 570001, 8800665544, 'https://maps.app.goo.gl/9U4CheNwzRDpxPeV9'),
(23, 'Raichur', 584103, 9900112266, 'https://maps.app.goo.gl/fS7ccHZcujcWkmVo6'),
(24, 'Ramanagara', 562159, 6600887766, 'https://maps.app.goo.gl/rMfrzk2sKRKnkTMcA'),
(25, 'Shivamogga', 577201, 9911002233, 'https://maps.app.goo.gl/JbAPcKzckYtjZe7Q6'),
(26, 'Tumakuru', 572101, 6655009988, 'https://maps.app.goo.gl/r837wxLwz1fGEG8g7'),
(27, 'Udupi', 576101, 8877660099, 'https://maps.app.goo.gl/9mboGqh6MwFPbbxMA'),
(28, 'Uttara Kannada(Karwar)', 581301, 8877006677, 'https://maps.app.goo.gl/NbphMs5hWi89U7XWA'),
(29, 'Vijayapura (Bijapur)', 586101, 7799004433, 'https://maps.app.goo.gl/xNDjL8obM3a7W6Tm8'),
(30, 'Yadgir', 585201, 8800991155, 'https://maps.app.goo.gl/5WqQ8wXRqMcxVgTh7');

-- --------------------------------------------------------

--
-- Table structure for table `money_order`
--

CREATE TABLE `money_order` (
  `m_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `acc_no` bigint(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  `to_address` varchar(100) NOT NULL,
  `to_pincode` int(30) NOT NULL,
  `amt` int(100) NOT NULL,
  `sr_id` int(50) NOT NULL,
  `from_pin` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money_order`
--

INSERT INTO `money_order` (`m_id`, `user_id`, `acc_no`, `ifsc_code`, `to_name`, `to_address`, `to_pincode`, `amt`, `sr_id`, `from_pin`) VALUES
(2, 5, 353513260, 'POST30690', 'swathi', '#14 doore no kodiyalbail mangalore', 45678, 20000, 125, 576214),
(3, 5, 353513260, 'POST30690', 'swathi', '#14 doore no kodiyalbail mangalore', 54534, 20000, 125, 576214);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `sreqid` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` varchar(50) NOT NULL,
  `payment_for` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `u_id`, `sreqid`, `date`, `total`, `payment_for`) VALUES
(12, 5, 120, '2022-08-23', '15000', 'POSB Deposit'),
(13, 5, 121, '2022-08-23', '1000', 'PIL online payment'),
(14, 5, 125, '2022-08-23', '20000', 'e-money order'),
(15, 5, 130, '2022-08-24', '15000', 'Deposit');

-- --------------------------------------------------------

--
-- Table structure for table `postagecalculator`
--

CREATE TABLE `postagecalculator` (
  `pc_id` int(50) NOT NULL,
  `fromp` bigint(50) NOT NULL,
  `froma` varchar(50) NOT NULL,
  `fromb` varchar(50) NOT NULL,
  `top` bigint(50) NOT NULL,
  `toa` varchar(50) NOT NULL,
  `tob` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `length` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postagecalculator`
--

INSERT INTO `postagecalculator` (`pc_id`, `fromp`, `froma`, `fromb`, `top`, `toa`, `tob`, `item`, `weight`, `height`, `length`, `width`, `user_id`, `date`) VALUES
(12, 587301, 'Inam Hanchinal Village and Post, Jamakhandi Taluk,', 'Hulyal B. O', 587315, 'Kalhatti Village and Post, Jamkhandi Taluk, Bagalk', 'Terdal S. O', '', '12', '143', '23', '34', 4, '2022-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `postman_details`
--

CREATE TABLE `postman_details` (
  `postman_id` int(30) NOT NULL,
  `post_branch` varchar(30) NOT NULL,
  `pincode` bigint(48) NOT NULL,
  `postman_name` varchar(100) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `landline_no` bigint(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postman_details`
--

INSERT INTO `postman_details` (`postman_id`, `post_branch`, `pincode`, `postman_name`, `phno`, `landline_no`, `email`, `image`) VALUES
(1, 'Bagalkot', 587101, 'Aaditya', 9900887760, 8262271176, 'aaditya@gmail.com', 'postman2.jpg'),
(2, 'Bellary', 583101, 'Ajay', 7766554433, 8267262541, 'ajay@gmail.com', 'postman4.jpg'),
(3, 'Belagavi', 577428, 'Anand', 8899776655, 8268667781, 'anand@gmail.com', 'postman1.jpg'),
(4, 'Bengaluru Rural', 562111, 'Arun', 9900112233, 8262224455, 'arun@gmail.com', 'postman3.jpg'),
(5, 'Bengaluru Urban', 560001, 'Krishna', 8877665544, 8263556677, 'krishna@gmail.com', 'postman5.jpg'),
(6, 'Bidar', 585401, 'Kabira', 9911223344, 8262440077, 'kabira@gmail.com', 'postman6.jpg'),
(7, 'Chamarajanagar', 571313, 'Lakshmana', 8800112233, 8260223344, 'lakshmana@gmail.com', 'postman7.jpg'),
(8, 'Chikballapur', 562101, 'Karthik', 7700991122, 8269334455, 'karthik@gmail.com', 'postman8.jpg'),
(9, 'Chikkamagaluru', 577101, 'Ramnath', 7711223344, 8265009982, 'ramnath@gmail.com', 'postman1.jpg'),
(10, 'Chitradurga', 577501, 'Mohan', 9933445566, 826833001, 'mohan@gmail.com', 'postman2.jpg'),
(11, 'Dakshina Kannada', 574145, 'Kailash', 7733440099, 8260447789, 'kailash@gmail.com', 'postman3.jpg'),
(12, 'Davangere', 577001, 'Neeraj', 6677889900, 8234778891, 'neeraj@gmail.com', 'postman4.jpg'),
(13, 'Dharwad', 580001, 'Moksha', 6677889933, 8234889977, 'moksha@gmail.com', 'postman5.jpg'),
(14, 'Gadag', 582101, 'Nikhil', 7722334455, 8278334410, 'nikhil@gmail.com', 'postman6.jpg'),
(15, 'Hassan', 573201, 'Neeraj', 9876995544, 8271660088, 'neeraj@gmail.com', 'postman7.jpg'),
(16, 'Haveri', 581110, 'Nithin', 8866223391, 8270114422, 'nithin@gmail.com', 'postman8.jpg'),
(17, 'Gulbarga', 585101, 'Milan', 7722036789, 8268228654, 'milan@gmail.com', 'postman1.jpg'),
(18, 'Kodagu', 571201, 'Pavan', 8800993322, 8212556671, 'pavan@gmail.com', 'postman2.jpg'),
(19, 'Kolar', 563101, 'Rajiv', 9911229967, 8237889914, 'rajiv@gmail.com', 'postman3.jpg'),
(20, 'Koppal', 583231, 'Rishi', 8867564321, 8289661234, 'rishi@gmail.com', 'postman4.jpg'),
(21, 'Mandya', 571401, 'Rithvik', 8877664531, 8297447701, 'rithvik@gmail.com', 'postman5.jpg'),
(22, 'Mysore', 570001, 'Riyan', 7788126784, 8274668543, 'riyan@gmail.com', 'postman6.jpg'),
(23, 'Raichur', 584103, 'Rohan', 7722456723, 8254768542, 'rohan@gmail.com', 'postman7.jpg'),
(24, 'Ramanagara', 562159, 'Rudra', 8867543210, 8217879654, 'rudra@gmail.com', 'postman8.jpg'),
(25, 'Shivamogga', 577201, 'Sachin', 9988110239, 8256789432, 'sachin@gmail.com', 'postman2.jpg'),
(26, 'Tumakuru', 572101, 'Samay', 8877665643, 8267897654, 'samay@gmail.com', 'postman3.jpg'),
(27, 'Udupi', 576101, 'Sanjay', 8866123456, 8245776545, 'sanjay@gmail.com', 'postman4.jpg'),
(28, 'Uttara Kannada(Karwar)', 581301, 'Shikhar', 7766897865, 8267983421, 'shikhar@gmail.com', 'postman5.jpg'),
(29, 'Vijayapura (Bijapur)', 586101, 'Vardan', 9977664534, 8265876543, 'vardan@gmail.com', 'postman6.jpg'),
(30, 'Yadgir', 585201, 'Vikram', 8800334519, 8279345678, 'vikram@gmail.com', 'postman8.jpg'),
(31, 'Yadgir', 585000, 'fdfdg', 665533555, 8262334456, 'ananda@gmail.com', 'post.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postoffice`
--

CREATE TABLE `postoffice` (
  `postid` int(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` bigint(50) NOT NULL,
  `postimg` varchar(500) NOT NULL,
  `location` varchar(600) NOT NULL,
  `district` varchar(50) NOT NULL,
  `postbranch` varchar(250) NOT NULL,
  `contact` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postoffice`
--

INSERT INTO `postoffice` (`postid`, `address`, `pincode`, `postimg`, `location`, `district`, `postbranch`, `contact`) VALUES
(1, 'Inam Hanchinal Village and Post, Jamakhandi Taluk, Bagalkot District', 587301, 'post2.jpg.jpg', 'https://maps.app.goo.gl/gxV1efMZ7SxE7ZaA7', 'Bagalkot', 'Hulyal B. O', 9448595210),
(2, 'Takkod Village and Post, Jamkhandi Taluk, Bagalkot District', 587119, 'post.jpg', 'https://maps.app.goo.gl/zbKvLVvxiixg1bJi6', 'Bagalkot', 'Albal', 7337613113),
(3, 'Kalhatti Village and Post, Jamkhandi Taluk, Bagalkot District', 587315, 'post5.jpg.png', 'https://maps.app.goo.gl/EQPyuPjG2vRmb3qR8', 'Bagalkot', 'Terdal S. O', 9448595211),
(4, 'Bandrahal Village and Post, Siruguppa Taluk, Bellary District', 583121, 'post4.jpg.jpg', 'https://maps.app.goo.gl/nSsxrMKMk9WgPzRS6', 'Ballari (Bellary)', 'Vodinala', 9988776655),
(5, 'Ayyanahalli Village and Post, Hadagalli Taluk, Bellary District', 583216, 'post5.jpg.png', 'https://maps.app.goo.gl/gZRPYJCYU77jAxqX7', 'Ballari (Bellary)', 'Makarabbi', 6655778899),
(6, 'Angoor Village and Post, Hadagalli Taluk, Bellary District', 583216, 'post3.jpg.jpg', 'https://maps.app.goo.gl/gZRPYJCYU77jAxqX7', 'Ballari (Bellary)', 'Makarabbi', 7766889900),
(7, 'Gubalgudda Village and Post, Gokak, Belagavi district', 591306, 'post5.jpg.png', 'https://maps.app.goo.gl/DeysSxFkhWXVowVk7', 'Belagavi (Belgaum)', 'Gokak', 8877990066),
(8, 'Ambewadi , Khanpur Taluk, Belagavi district', 591108, 'post1.jpg.jpg', 'https://maps.app.goo.gl/zdTfrN1nofPqu8bp9', 'Belagavi (Belgaum)', 'Ambewadi', 7788662211),
(9, 'Amte, Khanpur Taluk,  Belagavi District', 591345, 'post3.jpg.jpg', 'https://maps.app.goo.gl/A73vxLzGE2RHdKPa7', 'Belagavi (Belgaum)', 'Amte', 9900000441),
(10, 'Agalakuppe, Nelamangala Taluk, Bangalore(R) District', 562123, 'post1.jpg.jpg', 'https://maps.app.goo.gl/T5LNP1DdHppewLJX8', 'Bengaluru (Bangalore) Rural', 'Nelamangala', 9911223340),
(11, 'Aralasandra Village, Nelamangala Taluk, Bangalore(R) District', 562123, 'post2.jpg.jpg', 'https://maps.app.goo.gl/T5LNP1DdHppewLJX8', 'Bengaluru (Bangalore) Rural', 'Nelamangala', 7676609655),
(12, 'Agalakote Village and Post, Devanahalli Taluk, Bangalore(R) district', 562120, 'post3.jpg.jpg', 'https://maps.app.goo.gl/4mLZYit7dLS6wGhZA', 'Bengaluru (Bangalore) Rural', 'Devanahalli', 7777884452),
(13, 'Ajjanahalli Villge and Post, Kengeri Taluk, Bangalore(U) District', 562201, 'post4.jpg.jpg', 'https://maps.app.goo.gl/d6rj1vysyF9LAjfC9', 'Bengaluru (Bangalore) Urban', 'Magadi, Veeregodanadoddi', 7755664321),
(14, 'Agara Village and Post, Kengeri taluk, Bangalore(U) District', 560034, 'post5.jpg.png', 'https://maps.app.goo.gl/i34wnLGvBK8m8pbLA', 'Bengaluru (Bangalore) Urban', 'Koramangala', 9988112230),
(15, 'Bagalur Village and Post, Yelahanka Taluk, Bangalore(U) District', 562149, 'post1.jpg.jpg', 'https://maps.app.goo.gl/64iAfg1HVzZBdiQe6', 'Bengaluru (Bangalore) Urban', 'Bangalore', 6612345678),
(16, 'Alamkeri Village and Post, Bidar Taluk,  Bidar District', 585226, 'post1.jpg.jpg', 'https://maps.app.goo.gl/xc7nJJfgyWuskd9R8', 'Bidar', 'Kamthana', 6222221230),
(17, 'Amlapur Village and Post, Bidar Taluk, Bidar district', 585403, 'post2.jpg.jpg', 'https://maps.app.goo.gl/EKgoUb3cEnPN23kq7', 'Bidar', 'Bidar', 9900012345),
(18, 'Aknapur Village and Post, Aurad Taluk, bidar District', 585326, 'post3.jpg.jpg', 'https://maps.app.goo.gl/BwU7khUhNBcCPTEB6', 'Bidar', 'Chikli', 8899007766),
(19, 'Agathagowdanahalli Village and Post, Gundlupet Taluk, Chamarajnagar District', 571109, 'post4.jpg.jpg', 'https://maps.app.goo.gl/HDq54CscLb41cWR1A', 'Chamarajanagar', 'Gundlupet', 6655110088),
(20, 'Alathur Village and Post, Gundlupet Taluk, Chamarajamnagar District', 571111, 'post5.jpg.png', 'https://maps.app.goo.gl/KEeChaXxR1JWaGs27', 'Chamarajanagar', 'Alathur', 7711112233),
(21, 'Ajjipura Village and Post, Kollegal Taluk, Chamarajanagar District', 571440, 'post5.jpg.png', 'https://maps.app.goo.gl/E3CyuEAfgE5yiNsz5', 'Chamarajanagar', 'Kollegal', 9440054376),
(22, 'Ablodu Village and Post, Sidlgbatta TAluk, Chikballapura District', 562105, 'post3.jpg.jpg', 'https://maps.app.goo.gl/9dFKtScALZMLnQQN9', 'Chikballapur', 'Ablodu', 7012345670),
(23, 'Agalagurki Village and Post, Chikballapura Taluk, Chikkballapura District', 562103, 'post2.jpg.jpg', 'https://maps.app.goo.gl/3zfewRirdFA6KPAW7', 'Chikballapur', 'Chikballapur', 8102345167),
(24, 'Avalagurki Village and Post, ChikballapurTaluk, Chikballapur District', 562101, 'post1.jpg.jpg', 'https://maps.app.goo.gl/kC8U5aaCHx2PeUaW7', 'Chikballapur', 'Chikballapur', 8866550012),
(25, 'Hukkunda Village and Post, Chikkamagaluru Taluk, Chikkamagaluru District', 577101, 'post5.jpg.png', 'https://maps.app.goo.gl/fBsqxtLaaTkshFTv8', 'Chikkamagaluru', 'Chikkamagaluru', 7676609651),
(26, 'Ambinakodige, Mudigere Taluk, Chikkmagaluru District', 577124, 'post2.jpg.jpg', 'https://maps.app.goo.gl/86VjDhBHeT4v2rcA9', 'Chikkamagaluru', 'Kalasa', 9449898538),
(27, 'Addagadde, Sringeri Taluk, Chikkamagaluru District', 577126, 'post3.jpg.jpg', 'https://maps.app.goo.gl/KNQ262YEMqeMyNsx5', 'Chikkamagaluru', 'Addagadde', 9481215211),
(28, 'Badavanahalli Village and Post, Challakere Taluk, Chitradurga District', 577522, 'post5.jpg.png', 'https://maps.app.goo.gl/rfaEhezUVh37HPmY8', 'Chitradurga', 'Kaparahally', 7412121301),
(29, 'Abbinahole, Hiriyur Taluk, Chitradurga District', 577546, 'post4.jpg.jpg', 'https://maps.app.goo.gl/Qv3aJiEDs7h4cXQD6', 'Chitradurga', 'Chitradurga', 900876543),
(30, 'Adivala, Hiriyur Taluk, Chitradurga District', 577511, 'post3.jpg.jpg', 'https://maps.app.goo.gl/zfLvWnC93WGPsXNy8', 'Chitradurga', 'Adivala', 8097614323),
(31, 'Alanakuru, Puttur Taluk, Dakshina Kannada District', 574285, 'post1.jpg.jpg', 'https://maps.google.com/?q=Karnataka+574285&ftid=0x3ba4c00f79efb56f:0x1b74a26d60a0f99d&entry=gps', 'Dakshina Kannada', 'Puttur', 6622113311),
(32, 'Belthangady,  BelthangadyTaluk, Dakshina   Kannada District', 574240, 'post2.jpg.jpg', 'https://maps.app.goo.gl/q3MmvkkDodhTroEK9', 'Dakshina Kannada', 'Karikala', 7766441122),
(33, 'Ujire, Belthangady Taluk, Dakshina Kannada District', 574240, 'post5.jpg.png', 'https://maps.app.goo.gl/q3MmvkkDodhTroEK9', 'Dakshina Kannada', 'Puttur', 9448596210),
(34, 'Bakkapura, Harihar Taluk, Davangere District', 577601, 'post4.jpg.jpg', 'https://maps.app.goo.gl/b2jXFx5oECsJrEzT6', 'Davangere', 'Harihar', 8866112211),
(35, 'Belludi,Harihar Taluk, Davangere District', 577601, 'post1.jpg.jpg', 'https://maps.app.goo.gl/b2jXFx5oECsJrEzT6', 'Davangere', 'Belludi', 9966554411),
(36, 'Alur, Channagiri Taluk, Davangere District', 577512, 'post2.jpg.jpg', 'https://maps.app.goo.gl/hDvvqXpgpoiFyzC66', 'Davangere', 'Alur', 6611229900),
(37, 'Alnavar, Dharwad Taluk, Dharwad District', 581103, 'post3.jpg.jpg', 'https://maps.google.com/?q=Karnataka+581103&ftid=0x3bbf3ab4808838c9:0xd7f0bff3aa96a697&entry=gps', 'Dharwad', 'Dharwad', 9900443310),
(38, 'Ambalikoppa, Dharwad Taluk, Dharwad District', 580028, 'post4.jpg.jpg', 'https://maps.app.goo.gl/UVgeuazG3NdDS9g8A', 'Dharwad', 'Ambalikoppa', 7006543210),
(39, 'Adargunchi, Hubbali Taluk, Dharwad District', 580028, 'post5.jpg.png', 'https://maps.app.goo.gl/UVgeuazG3NdDS9g8A', 'Dharwad', 'Adargunchi', 8866112233),
(40, 'Banahatti, Nargund Taluk, Gadag District', 582207, 'post1.jpg.jpg', 'https://maps.app.goo.gl/hKpdeNUaxat2E9Sz6', 'Gadag', 'Banahatti', 6111122230),
(41, 'Nagavi, Gadag Taluk, Gadag District', 582103, 'post5.jpg.png', 'https://maps.app.goo.gl/deTrd5xSbk82RwqN6', 'Gadag', 'Nagavi', 9977001234),
(42, 'Nagahalli, Gadag Taluk, Gadag District', 582118, 'post2.jpg.jpg', 'https://maps.app.goo.gl/ZsAgSvKtc27dpAZG7', 'Gadag', 'Mundaragi', 7878789090),
(43, 'Attihalli, Sakleshpura Taluk, Hassan district', 573123, 'post3.jpg.jpg', 'https://maps.app.goo.gl/RzADW73oG4ZSkYvb8', 'Hassan', 'Attihalli', 9090906565),
(44, 'Arekere, Sakleshpura Taluk, Hassan District', 573134, 'post1.jpg.jpg', 'https://maps.app.goo.gl/NkC91kchnb6WDVai9', 'Hassan', 'Arekere', 7676545412),
(45, 'Aggunda, Arsikere Taluk, Hassan District', 573103, 'post4.jpg.jpg', 'https://maps.app.goo.gl/7s7AvbMzYksK9jK88', 'Hassan', 'Aggunda', 6651151098),
(46, 'Biralalli, Byadgi Taluk, Haveri District', 581106, 'post1.jpg.jpg', 'https://maps.app.goo.gl/52enQbaWTce9m6Zt6', 'Haveri', 'Biralalli', 8787786556),
(47, 'Attikatti, Byadgi Taluk, Haveri District', 581120, 'post2.jpg.jpg', 'https://maps.app.goo.gl/KjUY4w97gkvSD7AX7', 'Haveri', 'Attikatti', 7667566541),
(48, 'Hangal, Hangal Taluk, Haveri District', 581104, 'post3.jpg.jpg', 'https://maps.app.goo.gl/eg6EhtPbM5AWPHuB6', 'Haveri', 'Hangal', 9009096743),
(49, 'Chincholi, Gulbarga Taluk, Gulbarga District', 585312, 'post1.jpg.jpg', 'https://maps.app.goo.gl/QGFFaHkbw4JqnSiP9', 'Gulbarga', 'Chincholi', 9087654321),
(50, 'Polakpalli, Gaganpalli Taluk, Gulbarga District', 585305, 'post2.jpg.jpg', 'https://maps.app.goo.gl/e5p7FTznAQgu9qHj8', 'Gulbarga', 'Polakpalli', 7766550011),
(51, 'Pangara, Gulbarga Taluk, Gulbarga District', 585313, 'post2.jpg.jpg', 'https://maps.app.goo.gl/psMtnsnP5r17KX8E9', 'Gulbarga', 'Chengta', 6611223344),
(52, 'K. Nidugane, Madikeri taluk, Kodagu District', 571201, 'post4.jpg.jpg', 'https://maps.app.goo.gl/MZB1oFm5w5kKLFQv5', 'Kodagu', 'Madikeri', 9483815211),
(53, 'Ammathi Village and Post, Virajpet Taluk, Kodagu District', 571211, 'post1.jpg.jpg', 'https://maps.app.goo.gl/Xf7a5G2RrdJHXK8C6', 'Kodagu', 'Ammathi', 9448590900),
(54, 'Aigoor Village and Post, Somwarpet Taluk, Kodagu District', 571251, 'post2.jpg.jpg', 'https://maps.app.goo.gl/wR9HYprHVMnuyuGP9', 'Kodagu', 'Aigoor', 8877660012),
(55, 'Bangarpet, Kolar Taluk, Kolar District', 563114, 'post1.jpg.jpg', 'https://maps.app.goo.gl/SZi6Q7QA8cGzvjRq6', 'Kolar', 'Kolar', 7766112209),
(56, 'Avani, Mulabagil Taluk, Kolar District', 563127, 'post2.jpg.jpg', 'https://maps.app.goo.gl/Pj7EcurNqRba4egq7', 'Kolar', 'Avani', 6111234560),
(57, 'Balla Village and Post, Mulabagil Taluk, Kolar District', 563131, 'post3.jpg.jpg', 'https://maps.app.goo.gl/sUhMxedPyBzwAj1g7', 'Kolar', 'Mulabagil', 9900771111),
(58, 'Bhagyanagar, Koppal TAluk, Koppal District', 583238, 'post3.jpg.jpg', '\nhttps://maps.app.goo.gl/HJVZQKE537a3cFzW', 'Koppal', 'Bhanapur', 7613132110),
(59, 'Agoli, Gangavathi Taluk, Koppal Taluk', 583234, 'post1.jpg.jpg', 'https://maps.app.goo.gl/V5URKRphLxq9PkSV9', 'Koppal', 'Agoli', 9012121314),
(60, 'Alghur, Maddur Taluk, Mandya District', 571433, 'post3.jpg.jpg', 'https://maps.app.goo.gl/o5hYtTo7J4vMUt3U6', 'Mandya', 'Alghur', 7123456712),
(61, 'Abalavadi, Maddur Taluk, Mandya District', 571425, 'post4.jpg.jpg', 'https://maps.app.goo.gl/CCL4sRivmLdqf5M5A', 'Mandya', 'Abalavdi', 9898989860),
(62, 'Ballakere, Srirangapatna Taluk, Mandya District', 571426, 'post5.jpg.png', 'https://maps.app.goo.gl/juZx6Qu21NzdD5Km6', 'Mandya', 'K.R. Pete', 9999990088),
(63, 'Chikunda, Hunsur Taluk, Mysore District', 571105, 'post1.jpg.jpg', 'https://maps.app.goo.gl/TY1Q8QACteunV5QEA', 'Mysore', 'Bannikuppe', 7777888890),
(64, 'Chikkeriyur, H. D Kote Taluk, Mysore District', 571125, 'post2.jpg.jpg', 'https://maps.app.goo.gl/qnE3ZmkXzGaEEzn9A', 'Mysore', 'H. D. Kote', 8877665501),
(65, 'Chikkanerale Village and Post, Periyapatna Taluk, Mysore District', 571102, 'post3.jpg.jpg', 'https://maps.app.goo.gl/WnEZ6bHsWqWJukPJ7', 'Mysore', 'Bhuvanahalli', 6655112200),
(66, 'Alkur Village and post, Raichur Taluk, Raichur District', 584140, 'post5.jpg.png', 'https://maps.app.goo.gl/gtGCpCH3Y3LBn8CJ9', 'Raichur', 'Alkur', 8877660000),
(67, 'Anwar Village and Post, Raichur Taluk, Raichur District', 584133, 'post1.jpg.jpg', 'https://maps.app.goo.gl/uiSU6C7QiCMgNmmi8', 'Raichur', 'Kamalapura', 7755441122),
(68, 'Ganekal, Devadurga Taluk, raichur District', 584136, 'post2.jpg.jpg', 'https://maps.app.goo.gl/Fz4epEWAiLbB8aPV8', 'Raichur', 'Ganekal', 9900007766),
(69, 'Abbur Village and Post, Ramanagara Taluk, Ramanagara District', 562108, 'post3.jpg.jpg', 'https://maps.app.goo.gl/YdsEVb4UR2mfjvTL8', 'Ramanagara', 'Abbur', 7766554412),
(70, 'Agalakote, Ramanagara Taluk, Ramanagar District', 562120, 'post5.jpg.png', 'https://maps.app.goo.gl/jhhDSu4y82KYt33ZA', 'Ramanagara', 'Agalakote', 6745453212),
(71, 'Channapatna, Channapatna Taluk, Ramanagara District', 562160, 'post4.jpg.jpg', 'https://maps.app.goo.gl/9MYBbPvYei4fTgRB7', 'Ramanagara', 'Channapatna', 7766550006),
(72, 'Achapura Village and Post, Shivamogga Taluk, Shivamogga District', 577412, 'post5.jpg.png', 'https://maps.app.goo.gl/fsiLFU5U3sGVR1Cu6', 'Shivamogga', 'Achapura', 7676765454),
(73, 'Agaradahalli, Shivamogga Taluk, Shivamogga District', 577227, 'post1.jpg.jpg', 'https://maps.app.goo.gl/PwA5wE9MJeqaLDrG9', 'Shivamogga', 'Agaradahalli', 6767676754),
(74, 'Thirthahalli, Thirthahalli Taluk, Shivamogga District', 577432, 'post2.jpg.jpg', 'https://maps.app.goo.gl/JNGNyLmbU4fSewgn8', 'Shivamogga', 'Basavani', 7766550090),
(75, 'Adagur Village and Post, Gubbi Taluk, Tumkur District', 572216, 'post3.jpg.jpg', 'https://maps.app.goo.gl/1KArxiKLbCMUJFkD7', 'Tumkur', 'Adagur', 7676765432),
(76, 'Adalagere, Gubbi Taluk, Tumkur District', 572223, 'post1.jpg.jpg', 'https://maps.app.goo.gl/LAp8Tm2S5D1ZrHnX6', 'Tumkur', 'Adalagere', 6161612345),
(77, 'Bedathur Village and Post, Madhugiri Taluk, Tumkur District', 572133, 'post1.jpg.jpg', 'https://maps.app.goo.gl/4PuUa5UPpUEYNQP3A', 'Tumkur', 'Bedathur', 7878909065),
(78, 'Admar, Udupi Taluk, Udupi District', 574119, 'post2.jpg.jpg', 'https://maps.app.goo.gl/eLaC4CSFVgVaEHAk6', 'Udupi', 'Admar', 8989090911),
(79, 'Achladi, Udupi taluk, Udupi district', 576225, 'post3.jpg.jpg', 'https://maps.app.goo.gl/T8uLqp8pHmsS9Vxd9', 'Udupi', 'Achladi', 6123456780),
(80, 'Ajrihara, Kundapura Taluk, Udupi District', 576283, 'post4.jpg.jpg', 'https://maps.app.goo.gl/JeDuwER2bdLdYLhq5', 'Udupi', 'Ajrihara', 8989012132),
(81, 'Akheti Village and Post, Sisri taluk, Uttara Kannda district', 581453, 'post1.jpg.jpg', 'https://maps.app.goo.gl/MRPBkY4C6MtC2tTM9', 'Uttara Kannada(Karwar)', 'Akheti', 9448595218),
(82, 'Ajjbal, Sirsi Taluk, Uttara Kannada District', 581340, 'post2.jpg.jpg', 'https://maps.app.goo.gl/Hibpo9YFDEWfCpLGA', 'Uttara Kannada(Karwar)', 'Ajjbal', 7788990011),
(83, 'Achve, Kumta Taluk, Uttara Kannada District', 581344, 'post3.jpg.jpg', 'https://maps.app.goo.gl/aXgELVtzB5gJo9kP9', 'Uttara Kannada(Karwar)', 'Achve', 7700998866),
(84, 'Bagewadi, Bagewadi Taluk, Vijayapura District', 586203, 'post3.jpg.jpg', 'https://maps.app.goo.gl/nM836VAE4y3YriLD7', 'Vijayapura', 'Bagewadi', 8899001122),
(85, 'Sindagi, Sindagi Taluk, Vijayapura District', 586128, 'post1.jpg.jpg', 'https://maps.app.goo.gl/CLZtb4add84Cp4YL6', 'Vijayapura', 'Sindagi', 8800112213),
(86, 'Asantapura, Sindagi Taluk, Vijayapura District', 586128, 'post2.jpg.jpg', 'https://maps.app.goo.gl/CLZtb4add84Cp4YL6', 'Vijayapura', 'Asantpura', 7812313113),
(87, 'Achola, Yadgiri  Taluk, Yadgiri District', 585202, 'post5.jpg.png', 'https://maps.app.goo.gl/Sdya8cRaEo2YzWQS7', 'Yadgiri', 'Achola', 7121213141),
(88, 'Alipura, Yadgiri taluk, Yadgiri District', 585202, 'post4.jpg.jpg', 'https://maps.app.goo.gl/Sdya8cRaEo2YzWQS7', 'Yadgiri', 'Achola', 9010108767),
(89, 'Hunasagi, Shorapur Taluk, Yadgiri District', 585215, 'post3.jpg.jpg', 'https://maps.app.goo.gl/gqyA8PqKMhyKSint6', 'Yadgiri', 'Hunasagi', 8899776650);

-- --------------------------------------------------------

--
-- Table structure for table `posttype`
--

CREATE TABLE `posttype` (
  `pt_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `sr_id` int(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttype`
--

INSERT INTO `posttype` (`pt_id`, `u_id`, `sr_id`, `type`) VALUES
(17, 5, 129, 'speedpost'),
(18, 5, 133, 'RegisterPost'),
(19, 5, 133, 'speedpost'),
(20, 4, 145, 'speedpost');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(50) NOT NULL,
  `service_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `service_name`) VALUES
(4, 'mailbooking'),
(5, 'mail delivary'),
(7, 'Financial services'),
(8, 'e-commerce'),
(10, 'IPPB -other service');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `sr_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` bigint(50) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `subs_ervice` varchar(50) NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `longitude` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`sr_id`, `u_id`, `name`, `email`, `address`, `pincode`, `contact`, `service`, `subs_ervice`, `latitude`, `longitude`, `status`) VALUES
(103, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mail delivary', 'Account Opening', '', '', 0),
(104, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(105, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '12.8760616', '74.8390048', 1),
(106, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(107, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(108, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(109, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(110, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(111, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(112, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(113, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(114, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(115, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'Essential Item', '', '', 0),
(116, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mail delivary', 'medical item', '', '', 0),
(117, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mail delivary', 'Essential Item', '', '', 0),
(118, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'POSB Deposit', '', '', 1),
(119, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'POSB Withdrawal', '', '', 1),
(120, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'POSB Deposit', '', '', 0),
(121, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'PIL online payment', '', '', 1),
(122, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'internet /mobile banking', '', '', 0),
(123, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'internet /mobile banking', '', '', 1),
(124, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'e-money order', '', '', 0),
(125, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'Financial services', 'e-money order', '', '', 0),
(126, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'e-commerce', 'Amazon', '', '', 0),
(127, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(128, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(129, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(130, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'IPPB -other service', 'Deposit', '', '', 0),
(131, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(132, 5, 'swathi', '', 'Kodiyalbail', 0, 0, 'mailbooking', 'medical item', '', '', 0),
(133, 5, 'swathi', 'sdswathi790@gmail.com', 'Kodiyalbail', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(134, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(135, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(136, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(137, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(138, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(139, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(140, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(141, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(142, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account opening', '', '', 0),
(143, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'Financial services', 'Account Opening', '', '', 0),
(144, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 576214, 0, 'mailbooking', 'medical item', '', '', 0),
(145, 4, 'sahana', 'sdswathi790@gmail.com', 'kothur village', 587301, 0, 'mailbooking', 'medical item', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subservice`
--

CREATE TABLE `subservice` (
  `sub_id` int(50) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `subs_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subservice`
--

INSERT INTO `subservice` (`sub_id`, `s_id`, `subs_name`) VALUES
(4, 'mailbooking', 'medical item'),
(5, 'mailbooking', 'Essential Item'),
(6, 'mail delivary', 'medical item'),
(7, 'mail delivary', 'Essential Item'),
(8, 'Financial services', 'POSB Deposit'),
(9, 'Financial services', 'POSB Withdrawal'),
(10, 'Financial services', 'PIL online payment'),
(13, 'IPPB -other service', 'Deposit'),
(14, 'IPPB -other service', 'withdrawal'),
(15, 'IPPB -other service', 'Account Opening'),
(16, 'Financial services', 'internet /mobile banking'),
(17, 'Financial services', 'e-money order'),
(18, 'Financial services', 'Account Opening'),
(19, 'e-commerce', 'Amazon'),
(20, 'e-commerce', 'Flipkart');

-- --------------------------------------------------------

--
-- Table structure for table `trackid`
--

CREATE TABLE `trackid` (
  `track_id` int(50) NOT NULL,
  `tracku_id` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `service_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackid`
--

INSERT INTO `trackid` (`track_id`, `tracku_id`, `uid`, `service_id`) VALUES
(129, 5363249, 5, 103),
(130, 4375426, 5, 104),
(131, 3484220, 5, 104),
(132, 6576589, 5, 105),
(133, 9701397, 5, 112),
(134, 8406902, 5, 113),
(135, 9062090, 5, 114),
(136, 3734487, 5, 115),
(137, 9589937, 5, 116),
(138, 3329880, 5, 117),
(139, 2337653, 5, 118),
(140, 1347564, 5, 119),
(141, 1522767, 5, 120),
(142, 2207432, 5, 121),
(143, 3799927, 5, 122),
(144, 9858659, 5, 123),
(145, 2218409, 5, 125),
(146, 9733157, 5, 126),
(147, 8049083, 5, 127),
(148, 8446216, 5, 128),
(149, 8594491, 5, 129),
(150, 6778475, 5, 129),
(151, 3866174, 5, 129),
(152, 7162368, 5, 129),
(153, 7691467, 5, 130),
(154, 1520521, 5, 133),
(155, 9875932, 4, 134),
(156, 8374165, 4, 134),
(157, 5072604, 4, 134),
(158, 4976089, 4, 134),
(159, 8778750, 4, 135),
(160, 6688695, 4, 136),
(161, 8757936, 4, 136),
(162, 1890589, 4, 137),
(163, 7377467, 4, 137),
(164, 7117547, 4, 137),
(165, 6366013, 4, 138),
(166, 1514539, 4, 139),
(167, 9362205, 4, 139),
(168, 9334633, 4, 139),
(169, 7099474, 4, 139),
(170, 9368983, 4, 140),
(171, 3896036, 4, 140),
(172, 7148471, 4, 141),
(173, 1798575, 4, 142),
(174, 6106309, 4, 143),
(175, 7577624, 4, 144),
(176, 7059007, 4, 145);

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `acc_id` int(50) NOT NULL,
  `acc_no` int(50) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `adhar_no` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`acc_id`, `acc_no`, `ifsc_code`, `pincode`, `user_id`, `adhar_no`) VALUES
(14, 353513260, 'POST30690', 576214, 5, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `feedback_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pincode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`feedback_id`, `user_name`, `feedback`, `email`, `pincode`) VALUES
(3, 'shayana', 'jhgk', 'df@gmail.com', 576214),
(4, 'sharan', 'lksmd', 'sharan@gmail.com', 23445);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(30) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `address` varchar(600) NOT NULL,
  `ph_no` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `user_name`, `password`, `mail`, `address`, `ph_no`) VALUES
(4, 'sahana', 'roshni', 'kous@gmail.com', 'kothur village', 7337613113),
(5, 'swathi', '123', 'sdswathi790@gmail.com', 'Kodiyalbail', 7337613113),
(6, 'kousalya', 'Kousalya12#', 'sdswathi790@gmail.com', 'jxghshaghf', 9900887766),
(7, 'kousalya', 'Kousalya123#', 'kousalyagowda2000@gmail.com', 'chikkamagaluru', 9900887766),
(8, 'Roshini', 'Roshini123#', 'kavitha@gmail.com', 'chikkamagaluru', 9900887766),
(9, 'Roshini', 'Roshini123#', 'kousalyagowda2000@gmail.com', 'chikkamagaluru', 9900887766);

-- --------------------------------------------------------

--
-- Table structure for table `user_viewac`
--

CREATE TABLE `user_viewac` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `address` varchar(600) NOT NULL,
  `acc_no` varchar(600) NOT NULL,
  `send_money` bigint(80) NOT NULL,
  `pay_bill` bigint(60) NOT NULL,
  `upi_id` varchar(200) NOT NULL,
  `post_service` varchar(200) NOT NULL,
  `feedback` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdraw_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `date` date NOT NULL,
  `withdraw_amt` int(100) NOT NULL,
  `acc_no` bigint(100) NOT NULL,
  `ifsc_code` varchar(100) NOT NULL,
  `pincode` int(30) NOT NULL,
  `sr_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`withdraw_id`, `user_id`, `date`, `withdraw_amt`, `acc_no`, `ifsc_code`, `pincode`, `sr_id`) VALUES
(4, 5, '2022-08-23', 15000, 353513260, 'POST30690', 576214, 119);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_open`
--
ALTER TABLE `acc_open`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `assign_emp`
--
ALTER TABLE `assign_emp`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `a_uploadinfo`
--
ALTER TABLE `a_uploadinfo`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `complaint_res`
--
ALTER TABLE `complaint_res`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `complaint_track`
--
ALTER TABLE `complaint_track`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`deposit_id`);

--
-- Indexes for table `emp_managecount`
--
ALTER TABLE `emp_managecount`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `emp_managemo`
--
ALTER TABLE `emp_managemo`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `emp_managepay`
--
ALTER TABLE `emp_managepay`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `emp_registration`
--
ALTER TABLE `emp_registration`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `insurance_pay`
--
ALTER TABLE `insurance_pay`
  ADD PRIMARY KEY (`inspay_id`);

--
-- Indexes for table `insurance_req`
--
ALTER TABLE `insurance_req`
  ADD PRIMARY KEY (`ir_id`);

--
-- Indexes for table `internetbank`
--
ALTER TABLE `internetbank`
  ADD PRIMARY KEY (`internet_id`);

--
-- Indexes for table `main_postoffice`
--
ALTER TABLE `main_postoffice`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `money_order`
--
ALTER TABLE `money_order`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `postagecalculator`
--
ALTER TABLE `postagecalculator`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `postman_details`
--
ALTER TABLE `postman_details`
  ADD PRIMARY KEY (`postman_id`);

--
-- Indexes for table `postoffice`
--
ALTER TABLE `postoffice`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `posttype`
--
ALTER TABLE `posttype`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `subservice`
--
ALTER TABLE `subservice`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `trackid`
--
ALTER TABLE `trackid`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_viewac`
--
ALTER TABLE `user_viewac`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`withdraw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_open`
--
ALTER TABLE `acc_open`
  MODIFY `acc_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_emp`
--
ALTER TABLE `assign_emp`
  MODIFY `as_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `a_uploadinfo`
--
ALTER TABLE `a_uploadinfo`
  MODIFY `info_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complaint_res`
--
ALTER TABLE `complaint_res`
  MODIFY `cr_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaint_track`
--
ALTER TABLE `complaint_track`
  MODIFY `ct_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `deposit_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emp_managecount`
--
ALTER TABLE `emp_managecount`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_managemo`
--
ALTER TABLE `emp_managemo`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_managepay`
--
ALTER TABLE `emp_managepay`
  MODIFY `pay_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_registration`
--
ALTER TABLE `emp_registration`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `ins_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance_pay`
--
ALTER TABLE `insurance_pay`
  MODIFY `inspay_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance_req`
--
ALTER TABLE `insurance_req`
  MODIFY `ir_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `internetbank`
--
ALTER TABLE `internetbank`
  MODIFY `internet_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `main_postoffice`
--
ALTER TABLE `main_postoffice`
  MODIFY `mp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `money_order`
--
ALTER TABLE `money_order`
  MODIFY `m_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `postagecalculator`
--
ALTER TABLE `postagecalculator`
  MODIFY `pc_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `postman_details`
--
ALTER TABLE `postman_details`
  MODIFY `postman_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `postoffice`
--
ALTER TABLE `postoffice`
  MODIFY `postid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `posttype`
--
ALTER TABLE `posttype`
  MODIFY `pt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `sr_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `subservice`
--
ALTER TABLE `subservice`
  MODIFY `sub_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trackid`
--
ALTER TABLE `trackid`
  MODIFY `track_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `acc_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_viewac`
--
ALTER TABLE `user_viewac`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
