-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2021 at 09:59 AM
-- Server version: 5.5.63-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olwkitjh_vit-feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'admin', '$2y$09$/NvPaLUCttDctdV7b34od.vKICHtaXl5qjFW9ZLlwks3RfA8LilEG');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_branch` varchar(255) NOT NULL,
  `s_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_name`, `s_email`, `s_password`, `s_phone`, `s_branch`, `s_year`) VALUES
(1, 'Krishna Thorat', 'krishna.thorat20@vit.edu', '$2y$09$JLJctgVn1M4TyLs.cY1QyOUN9TmVzeJ2iBqCnuVMnfDgWPUuqmpnO', '8550969625', 'MCA', 'First'),
(4, 'Asawari Aherao', 'asawari.aherao20@vit.edu', '$2y$09$Uzh4ytDpQ5QDaEbWZFKD/uzwURNiX8wsk/Q3irg2qDScMRkG5XLvm', '8446568053', 'MCA', 'First'),
(5, 'Twinkle Gupta', 'twinkle.gupta20@vit.edu', '$2y$09$BiTLyfThM/da6ZP97y66RuFjTHR1YRZifmJDR9q3inkjO3uK/DKo6', '9595680794', 'MCA', 'First'),
(6, 'Payal Bhirud', 'payal.bhirud20@vit.edu', '$2y$09$4EaQ/FPbD9dyS4oyFTgWHOBsjrazVniNEnuB4c9fWKN4iVdsMX1b.', '9834368055', 'MCA', 'First'),
(7, 'Krishna Yangale', 'krishna.yangale20@vit.edu', '$2y$09$TjRUa5rCOlERn7chynHS1eOm78/MARHZgklVwCusyOYN0G28FLdrm', '8169285583', 'MCA', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `f_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `f_comment` text NOT NULL,
  `f_question1` varchar(255) NOT NULL,
  `f_question2` varchar(255) NOT NULL,
  `f_question3` varchar(255) NOT NULL,
  `f_question4` varchar(255) NOT NULL,
  `f_question5` varchar(255) NOT NULL,
  `f_question6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`f_id`, `s_id`, `t_id`, `sub_id`, `f_comment`, `f_question1`, `f_question2`, `f_question3`, `f_question4`, `f_question5`, `f_question6`) VALUES
(14, 4, 5, 4, 'Good teaching', 'Highly Satisfied', 'Neutral', 'Satisfied', 'Highly Satisfied', 'Satisfied', 'Highly Satisfied'),
(15, 1, 5, 4, 'Great', 'Highly Satisfied', 'Satisfied', 'Highly Satisfied', 'Satisfied', 'Satisfied', 'Highly Satisfied'),
(16, 5, 5, 4, 'Satisfied', 'Neutral', 'Neutral', 'Satisfied', 'Satisfied', 'Highly Satisfied', 'Highly Satisfied'),
(17, 6, 5, 4, 'Good', 'Satisfied', 'Neutral', 'Highly Satisfied', 'Neutral', 'Satisfied', 'Highly Satisfied'),
(18, 7, 5, 4, 'Good teaching', 'Highly Satisfied', 'Satisfied', 'Dissatisfied', 'Neutral', 'Satisfied', 'Highly Dissatisfied');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL,
  `t_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_name`, `t_email`, `t_password`, `t_phone`) VALUES
(5, 'Aparna Sawant', 'aparna.mete@vit.edu', '$2y$09$yeSKfjIVyFeHP6AqEdDBOuNh2QTAvCYTTJR1/T51xu7SVM4bWPFVC', '9021155735');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subjects`
--

CREATE TABLE `teacher_subjects` (
  `sub_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sub_year` varchar(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subjects`
--

INSERT INTO `teacher_subjects` (`sub_id`, `t_id`, `branch`, `sub_year`, `sub_name`) VALUES
(4, 5, 'MCA', 'First', 'Web Technology'),
(5, 5, 'MCA', 'Second', 'Advance Web Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `student_feedback_ibfk_1` (`s_id`),
  ADD KEY `student_feedback_ibfk_2` (`t_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD CONSTRAINT `student_feedback_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_feedback_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_feedback_ibfk_3` FOREIGN KEY (`sub_id`) REFERENCES `teacher_subjects` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_subjects`
--
ALTER TABLE `teacher_subjects`
  ADD CONSTRAINT `teacher_subjects_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
