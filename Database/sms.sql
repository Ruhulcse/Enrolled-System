-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 08:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `dept` varchar(1000) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `mobile` varchar(210) NOT NULL,
  `address` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `dept`, `birth`, `father`, `mother`, `mobile`, `address`) VALUES
('Masrafee', '210091', 'CSE', '01/02/1997', 'Md. Mustofa Kamal', 'Mrs. Sajeda Kamal', '01965206485', 'puraton somaj kollan office,sherpur'),
('Md. Ruhul Amin', '210005', 'CSE', '13/06/1996', 'Md. Abdul Aziz', 'Mrs. Rahima Khatun', '01631317158', 'Fulbaria,mymensingh'),
('Zinnia Akter', '210061', 'CSE', '13/06/1995', 'MD. Rahman', 'Mrs. Sanjida Kamal', '01961356982', 'kalibari, mymensingh'),
('Sajibul Alam', '210019', 'CSE', '01/05/1996', 'Md.Ramjan Ali', 'Jahanara Begum', '01623383570', 'Enayetpur,Fulbaria,Mymensingh'),
('Nasrin', '113005', 'BBA', '13/12/1996', 'Mohinul Alam', 'Fahima akter', '01852236542', 'new market, kesorgong'),
('Al Amin', '210021', 'CSE', '13/05/1996', 'Md. Mustofa Kamal', 'Mrs. Sanjida Kamal', '01965206485', 'nalitabari,Sherpur'),
('Shuvo', '113005', 'BBA', '01/01/1995', 'Mr. Nazrul Islam', 'Mrs. Silpi akter', '0182563241', 'salbahan,Dinajpur'),
('Susanto Paul', '310025', 'ECE', '15/06/1997', 'Suvan paul', 'Trina Paul', '0196236258', 'Dhanbari,Taingail'),
('Asfia Akter', '310024', 'ECE', '24/05/1995', 'Ak Muhid', 'Sila akter', '01569852651', 'Dhanbari,Taingail'),
('Fahad Ahmed', '113006', 'BBA', '05/08/1998', 'Kabir ahmed', 'Sayma khatun', '0186325698', 'Bangapul,Mymensingh'),
('Rafsan Bin Rafiqe', '210007', 'CSE', '26/05/1998', 'Rafiqe Ahamed', 'Nargis akter', '0162365987', 'Hamid Ali road, Mymensingh'),
('Sadia Jahan', '215002', 'CSE', '19/9/1998', 'MD. Rahman', 'Mrs. Rahima Khatun', '01965206485', 'Durgapur,Netrokona'),
('Akib Mahmud', '210009', 'CSE', '03/05/1995', 'Al Imtiaz', 'Aforza akter', '01965206485', 'Enayetpur,Fulbaria,Mymensingh'),
('Monjur Morsed', '115005', 'BBA', '21/05/1998', 'imam sorkar', 'nasrin', '018562314', 'ruppor,manikgonj'),
('Abir Abdulla', '410005', 'EEE', '21/05/1998', 'MD. Rahman', 'Jahanara Begum', '01631317158', 'puraton somaj kollan office,sherpur'),
('Adam Smith', '210012', 'CSE', '21/06/1998', 'MD. Rahman', 'Fahima akter', '+5582135541', 'new island,Australia'),
('New man', '410055', 'EEE', '08/05/1996', 'Md. Mustofa Kamal', 'Mrs. Sanjida Kamal', '01852236542', 'Fulbaria,mymensingh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
