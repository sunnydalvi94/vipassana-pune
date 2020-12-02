-- ----------- Snehal Kulkarni-------- 11/05/2020 6:30 pm-----------
-- ------ Table structure for table table tbl_album

CREATE TABLE IF NOT EXISTS `tbl_album` (
  `album_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(50) DEFAULT NULL,
  `sequence` int(10) DEFAULT NULL,
  `album_cover_photo` varchar(50) DEFAULT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- ----------- Mrudul Thite-------- 11/05/2020 7:00 pm-----------
-- Table structure for table `tbl_mitra_school_seva_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_mitra_school_seva_registration` (
  `mitra_school_seva_registration_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `ten_day_course_id` bigint(21) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middel_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `area_of_city` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(30) DEFAULT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`mitra_school_seva_registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


-- Indexes for table `tbl_mitra_school_seva_registration`
--
  
ALTER TABLE  `tbl_mitra_school_seva_registration` ADD KEY IF NOT EXISTS `ten_day_course_id` (`ten_day_course_id`);



-- Table structure for table `tbl_seva_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_seva_registration` (
  `seva_registration_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `ten_day_course_id` bigint(21) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middel_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `area_of_city` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(30) DEFAULT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`seva_registration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


-- Indexes for table `tbl_seva_registration`
--

ALTER TABLE `tbl_seva_registration` ADD KEY IF NOT EXISTS `ten_day_course_id` (`ten_day_course_id`);



