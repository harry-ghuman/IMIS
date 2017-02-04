-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2016 at 09:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imis_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'harpuneet@test.com', '123', 'harpuneet'),
(4, 'ranjodh@test.com', '123', 'ranjodh'),
(5, 'admin@test.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assign_job`
--

CREATE TABLE `assign_job` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `internship_type` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `job_group` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `job_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_job`
--

INSERT INTO `assign_job` (`id`, `student_id`, `internship_type`, `company_name`, `job_group`, `job_title`, `project_name`, `job_status`) VALUES
(3, '104509784', 'company', 'sutherland global services', 'technical support', 'technical analyst', '', 'paid'),
(4, '104509784', 'company', 'netmon inc', 'networking', 'network junior data scientist', '', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `cms_skills`
--

CREATE TABLE `cms_skills` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `concrete5` varchar(100) NOT NULL,
  `dotnetnuke` varchar(100) NOT NULL,
  `drupal` varchar(100) NOT NULL,
  `joomla` varchar(100) NOT NULL,
  `wordpress` varchar(100) NOT NULL,
  `other_cms_skill_name` varchar(100) NOT NULL,
  `other_cms_skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_skills`
--

INSERT INTO `cms_skills` (`id`, `student_id`, `concrete5`, `dotnetnuke`, `drupal`, `joomla`, `wordpress`, `other_cms_skill_name`, `other_cms_skill`) VALUES
(2, '104509784', 'not at all competent', 'not at all competent', 'not at all competent', 'little competent', 'little competent', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `cp_firstname` varchar(100) NOT NULL,
  `cp_lastname` varchar(100) NOT NULL,
  `cp_position` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `company_name`, `address`, `city`, `postal_code`, `country`, `cp_firstname`, `cp_lastname`, `cp_position`, `telephone`, `email`, `company_website`, `notes`) VALUES
(2, 'sutherland global services', '500 Ouellette Avenue', 'windsor', 'N9A1B3', 'canada', 'michael', 'johnson', 'hr manager', '6479368401', 'johnson@sutherland.com', 'http://www.sutherlandglobal.com/', 'sutherland global is company providing solutions to various clients'),
(3, 'netmon inc', '633 Ouellette Avenue', 'windsor', 'N9A4J4', 'canada', 'samuel', 'jackson', 'manager', '5199448365', 'samuelj@netmon.com', 'http://netmon.com/', 'Netmon is an all-in-one network monitoring software solution for identifying and resolving IT infrastructure and network issues.'),
(4, 'tessonics inc', '597 ouellette avenue', 'windsor', 'N9A4J4', 'canada', 'suman', 'reddy', 'manager', '5127418520', 'suman@gmail.com', 'http://www.tessonics.com/', 'Tessonics provides leading edge products, services, and technologies for industrial and biomedical applications. ');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_students`
--

CREATE TABLE `graduate_students` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `pg_major` varchar(100) NOT NULL,
  `pg_gpa` varchar(100) NOT NULL,
  `pg_university` varchar(100) NOT NULL,
  `pg_country` varchar(100) NOT NULL,
  `pg_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interested_students`
--

CREATE TABLE `interested_students` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_group` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested_students`
--

INSERT INTO `interested_students` (`id`, `student_id`, `job_title`, `job_group`, `company`) VALUES
(1, '104509784', 'android developer', 'mobile development', 'tessonics inc'),
(2, '104509784', 'network junior data scientist', 'networking', 'netmon inc');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `job_group` varchar(100) NOT NULL,
  `job_subgroup` varchar(100) NOT NULL,
  `enter_jobtitle` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `responsibilities` varchar(500) NOT NULL,
  `requirements` varchar(500) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `company_name`, `job_group`, `job_subgroup`, `enter_jobtitle`, `description`, `responsibilities`, `requirements`, `salary`) VALUES
(1, 'sutherland global services', 'technical support', '', 'technical analyst', 'Sutherland Global Services is an established, multi-national, Business Process Outsourcing Company. We provide outstanding service and support to Fortune 500 Companies around the world. We are growing and we want YOU to help us grow! Help us support todayâ€™s leading innovators in cutting edge technology fields.Sutherland is an exciting place to work! We have a fun team environment with lots of support for new employees. We provide FULLâ€“TIME, PAID TRAINING to ensure you have all the tools you ', 'Receiving INBOUND calls to assist customers in troubleshooting devices\r\nIdentifying, researching, and resolving customer issues\r\nCommunicating step by step processes to customers with patience and understanding\r\nAccurately documenting all customer interactions\r\nWork towards performance driven measurements', 'IF YOU ARE :\r\n\r\nAt least 18 years of age or older\r\nLegally eligible to work in Canada\r\nHave open availability\r\nPossess strong written and verbal communication skills\r\nAbility to multi task in a high volume fast paced environment\r\nTake pride in customer service\r\nLooking to advance your career', '12$ /hour'),
(2, 'sutherland global services', 'web development', 'php developer', '', 'This is a virtual/remote position, so you will be required to work from your own home office. We have staff worldwide with hubs of folks across Canada, the USA, and the UK. Do not let the work from home aspect fool you, this is a full-time job with a full-time workload.\r\n\r\nWe are looking for a very strong, full-stack (LAMPhp) software developer that is dedicated to their craft. If this is you, please continue below...', 'Write clean, well-documented code.\r\nFollow industry best practices.\r\nTroubleshoot, test and maintain the core product software to ensure optimization and functionality.\r\nCollaborate with team members to help define and implement software architecture.\r\nWrite safe code (avoid XSS and SQL injection vulnerabilities and the like).\r\nRespond to emergency situations quickly.', 'Strong problem solving skills\r\nStrong with revision control (Git)\r\n5+ years experience in OOP PHP && MVC\r\n5+ years in MySQL database design and performance\r\n5+ years JavaScript/jQuery experience (AJAX, Draggable/Droppable, additional APIs)\r\n5+ years CSS/3 && preprocessors (Sass/SCSS)\r\n5+ years strong UX/UI design practices\r\nStrong experience with command line operations (Linux [Ubuntu flavour])\r\nExperience with MVC frameworks, ie. Symfony2/3, Laravel\r\nExperience with Composer\r\nExperience with Va', '21$ /hour'),
(3, 'netmon inc', 'networking', '', 'network junior data scientist', 'We are defined by the passion of our team members and their belief in our companyâ€™s vast potential.\r\nTo ensure we continue to be recognized as Canadaâ€™s leading communications company, weâ€™re committed to finding and developing the next generation of leaders. This means creating best-in-class career and development opportunities for our employees.', 'Design and implement data models, perform statistical analysis and create predictive analysis models.\r\nIncrease the cyber security effectiveness of mathematical correlation algorithms in a Big Data analytics environment.\r\nProvide thought leadership on data science in a cyber threat intelligence context.\r\nProducing cyber threat intelligence to define the current threat landscape and further the enterprise security risk management strategy.\r\nLeverage analytics involving large datasets to refine an', 'Bachelorâ€™s or Advanced degree in Mathematics, Physics, Engineering or Computer Science or the equivalent.\r\nA deep understanding of statistical and predictive modeling concepts, machine-learning approaches, clustering and classification techniques, and anomaly detection algorithms.\r\nExperience using statistical analysis tools such as R, SPSS, Matlab, or Python.\r\nExperience working with Big Data technologies such as Hadoop, Map/Reduce and Spark\r\nAbility to interpret disparate sources of data and', '25$ /hour'),
(5, 'tessonics inc', 'mobile development', 'android developer', '', 'Weâ€™re a venture backed Advocacy Marketing Platform thatâ€™s seeking top talent to grow our Global SaaS business. We are looking for people who share our passion for Social Media Technologies and Modern Marketing Strategy. This is an amazing opportunity for a developer to work with a highly skilled team and be at the center of the emerging Advocacy market.', 'Design and implement new customer-facing features in the Mobile Banking Platform.\r\nOptimize mobile applications.\r\nDevelop new application and add new features.', 'Minimum qualifications\r\n \r\nBS degree in Computer Science or a similar technical field of study, or equivalent practical experience.\r\n1-5 Software development experience such as Objective-C, Java, HTML, JavaScript, CSS.\r\nWorking proficiency and communication skills in verbal and written English.\r\n \r\nPreferred qualifications:\r\n \r\nExperience with one or more general purpose programming languages including but not limited to: Java, C/C++, C#, Python, JavaScript, or Swift.\r\nKnowledge of the performan', '0');

-- --------------------------------------------------------

--
-- Table structure for table `operating_systems_skills`
--

CREATE TABLE `operating_systems_skills` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `android` varchar(100) NOT NULL,
  `chromeos` varchar(100) NOT NULL,
  `ios` varchar(100) NOT NULL,
  `linux` varchar(100) NOT NULL,
  `macos` varchar(100) NOT NULL,
  `unix` varchar(100) NOT NULL,
  `windows` varchar(100) NOT NULL,
  `other_os_skill_name` varchar(100) NOT NULL,
  `other_os_skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operating_systems_skills`
--

INSERT INTO `operating_systems_skills` (`id`, `student_id`, `android`, `chromeos`, `ios`, `linux`, `macos`, `unix`, `windows`, `other_os_skill_name`, `other_os_skill`) VALUES
(2, '104509784', 'little competent', 'not at all competent', 'not at all competent', 'little competent', 'not at all competent', 'little competent', 'moderately competent', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `other_degrees`
--

CREATE TABLE `other_degrees` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `degree_name` varchar(100) NOT NULL,
  `degree_major` varchar(100) NOT NULL,
  `degree_gpa` varchar(100) NOT NULL,
  `degree_university` varchar(100) NOT NULL,
  `degree_country` varchar(100) NOT NULL,
  `degree_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `semester` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`semester`, `year`, `student_id`, `firstname`, `middlename`, `lastname`, `email`, `telephone`, `status`, `gender`, `country`) VALUES
('Winter', '2016', '104509784', 'harpuneet', 'singh', 'ghuman', 'ghumanharpuneet@gmail.com', '6479368403', 'international student', 'Male', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `project_info`
--

CREATE TABLE `project_info` (
  `id` int(100) NOT NULL,
  `project_type` varchar(100) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_info`
--

INSERT INTO `project_info` (`id`, `project_type`, `project_name`, `project_description`) VALUES
(2, 'mac project', 'internship management information system', 'Skills: PHP/MySQL and JQuery or other framework\r\n'),
(3, 'mac project', 'eLearning for Kids System', 'Skills: PHP/MySQL and JQuery or other framework'),
(4, 'mac project', 'Online Tutorials System ', 'Skills: PHP/MySQL and JQuery or other framework'),
(6, 'mac project', 'Eye-Tracking System', 'Develop an eye-tracking software to allow people with severe motor disabilities to use gaze as an input device for interacting with a computer.\r\nSkills: Python\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student_accounts`
--

CREATE TABLE `student_accounts` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`id`, `student_id`, `username`, `password`) VALUES
(1, '104509784', 'harpuneet', '123');

-- --------------------------------------------------------

--
-- Table structure for table `technical_skills`
--

CREATE TABLE `technical_skills` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `asp` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `cplusplus` varchar(100) NOT NULL,
  `chash` varchar(100) NOT NULL,
  `flex` varchar(100) NOT NULL,
  `java` varchar(100) NOT NULL,
  `javascript` varchar(100) NOT NULL,
  `lisp` varchar(100) NOT NULL,
  `matlab` varchar(100) NOT NULL,
  `mysql` varchar(100) NOT NULL,
  `objectivec` varchar(100) NOT NULL,
  `pascal` varchar(100) NOT NULL,
  `perl` varchar(100) NOT NULL,
  `php` varchar(100) NOT NULL,
  `prolog` varchar(100) NOT NULL,
  `python` varchar(100) NOT NULL,
  `r` varchar(100) NOT NULL,
  `ruby` varchar(100) NOT NULL,
  `sqloracle` varchar(100) NOT NULL,
  `tcl` varchar(100) NOT NULL,
  `tsql` varchar(100) NOT NULL,
  `vb` varchar(100) NOT NULL,
  `other_technical_skill_name` varchar(100) NOT NULL,
  `other_technical_skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_skills`
--

INSERT INTO `technical_skills` (`id`, `student_id`, `asp`, `c`, `cplusplus`, `chash`, `flex`, `java`, `javascript`, `lisp`, `matlab`, `mysql`, `objectivec`, `pascal`, `perl`, `php`, `prolog`, `python`, `r`, `ruby`, `sqloracle`, `tcl`, `tsql`, `vb`, `other_technical_skill_name`, `other_technical_skill`) VALUES
(2, '104509784', 'not at all competent', 'little competent', 'little competent', 'not at all competent', 'not at all competent', 'moderately competent', 'moderately competent', 'not at all competent', 'not at all competent', 'extremely competent', 'not at all competent', 'not at all competent', 'not at all competent', 'extremely competent', 'not at all competent', 'little competent', 'not at all competent', 'not at all competent', 'moderately competent', 'not at all competent', 'not at all competent', 'not at all competent', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `undergraduate_students`
--

CREATE TABLE `undergraduate_students` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `ug_major` varchar(100) NOT NULL,
  `ug_gpa` varchar(100) NOT NULL,
  `ug_university` varchar(100) NOT NULL,
  `ug_country` varchar(100) NOT NULL,
  `ug_year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undergraduate_students`
--

INSERT INTO `undergraduate_students` (`id`, `student_id`, `ug_major`, `ug_gpa`, `ug_university`, `ug_country`, `ug_year`) VALUES
(4, '104509784', 'computer engg', '4', 'guru nanak dev university', 'india', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_startdate` date NOT NULL,
  `company_enddate` date NOT NULL,
  `company_title` varchar(500) NOT NULL,
  `company_duties` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`id`, `student_id`, `company_name`, `company_startdate`, `company_enddate`, `company_title`, `company_duties`) VALUES
(5, '104509784', 'kochhar infotech', '2016-07-01', '2016-07-02', 'title 1', 'duties1'),
(6, '104509784', 'vmm', '2016-07-03', '2016-07-04', 'title 2', 'duties 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_job`
--
ALTER TABLE `assign_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `company_name` (`company_name`);

--
-- Indexes for table `cms_skills`
--
ALTER TABLE `cms_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_name` (`company_name`);

--
-- Indexes for table `graduate_students`
--
ALTER TABLE `graduate_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `interested_students`
--
ALTER TABLE `interested_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `company` (`company`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_name` (`company_name`);

--
-- Indexes for table `operating_systems_skills`
--
ALTER TABLE `operating_systems_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `other_degrees`
--
ALTER TABLE `other_degrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `project_info`
--
ALTER TABLE `project_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `technical_skills`
--
ALTER TABLE `technical_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `undergraduate_students`
--
ALTER TABLE `undergraduate_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assign_job`
--
ALTER TABLE `assign_job`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cms_skills`
--
ALTER TABLE `cms_skills`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `graduate_students`
--
ALTER TABLE `graduate_students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interested_students`
--
ALTER TABLE `interested_students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `operating_systems_skills`
--
ALTER TABLE `operating_systems_skills`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `other_degrees`
--
ALTER TABLE `other_degrees`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_info`
--
ALTER TABLE `project_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student_accounts`
--
ALTER TABLE `student_accounts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `technical_skills`
--
ALTER TABLE `technical_skills`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `undergraduate_students`
--
ALTER TABLE `undergraduate_students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_job`
--
ALTER TABLE `assign_job`
  ADD CONSTRAINT `assign_job_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assign_job_ibfk_2` FOREIGN KEY (`company_name`) REFERENCES `company_info` (`company_name`);

--
-- Constraints for table `cms_skills`
--
ALTER TABLE `cms_skills`
  ADD CONSTRAINT `cms_skills_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `graduate_students`
--
ALTER TABLE `graduate_students`
  ADD CONSTRAINT `graduate_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interested_students`
--
ALTER TABLE `interested_students`
  ADD CONSTRAINT `interested_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interested_students_ibfk_2` FOREIGN KEY (`company`) REFERENCES `company_info` (`company_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company_name`) REFERENCES `company_info` (`company_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operating_systems_skills`
--
ALTER TABLE `operating_systems_skills`
  ADD CONSTRAINT `operating_systems_skills_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_degrees`
--
ALTER TABLE `other_degrees`
  ADD CONSTRAINT `other_degrees_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD CONSTRAINT `student_accounts_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technical_skills`
--
ALTER TABLE `technical_skills`
  ADD CONSTRAINT `technical_skills_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `undergraduate_students`
--
ALTER TABLE `undergraduate_students`
  ADD CONSTRAINT `undergraduate_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
