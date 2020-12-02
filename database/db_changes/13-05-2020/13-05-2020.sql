-- shubhangi jagadale 13-05-2020 11:10

ALTER TABLE `tbl_ten_day_course` CHANGE  `ten_day_course_id` `ten_day_course_id` BIGINT(21) NOT NULL AUTO_INCREMENT;
-- ALTER TABLE `tbl_ten_day_course` CHANGE   `url` `ten_day_course_url` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;


  -- ----------- Yogeshwari Yawalkar-------- 13/05/2020 15:30-----------
-- ------ Table structure for table table tbl_slider
  

-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `about_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `about_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `about_description` varchar(250) CHARACTER SET utf8 NOT NULL,
  `video` varchar(30) CHARACTER SET utf8 NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL,
  `display` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `in_use` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `visibility` enum('hide','show') CHARACTER SET utf8 NOT NULL DEFAULT 'show',
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_our_centers`
--

CREATE TABLE IF NOT EXISTS `tbl_our_centers` (
  `our_center_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `our_center_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(30) CHARACTER SET utf8 NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL,
  `in_use` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `display` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `visibility` enum('hide','show') CHARACTER SET utf8 NOT NULL DEFAULT 'show',
  PRIMARY KEY (`our_center_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(30) CHARACTER SET utf8 NOT NULL,
  `slider_description` varchar(250) CHARACTER SET utf8 NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL,
  `display` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `in_use` enum('Y','N') CHARACTER SET utf8 NOT NULL DEFAULT 'Y',
  `visibility` enum('hide','show') CHARACTER SET utf8 NOT NULL DEFAULT 'show',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
  -- Mrudul thite 13-05-2020 11:57
-- Table structure for table `tbl_teenager_course`
--

CREATE TABLE IF NOT EXISTS `tbl_teenager_course` (
  `teenager_course_id` bigint(21) NOT NULL,
  `teenager_course_name` varchar(100) DEFAULT NULL,
  `teenager_course_url` varchar(200) DEFAULT NULL,
  `teenager_course_address` varchar(255) DEFAULT NULL,
  `teenager_course_duration` varchar(60) DEFAULT NULL,
  `teenager_course_age_limit` varchar(100) DEFAULT NULL,
  `teenager_course_venue` varchar(250) NOT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_teenager_course`
--
ALTER TABLE `tbl_teenager_course`
  ADD PRIMARY KEY (`teenager_course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_teenager_course`
--
ALTER TABLE `tbl_teenager_course`
  MODIFY `teenager_course_id` bigint(21) NOT NULL AUTO_INCREMENT;

-- Table structure for table `tbl_mitra_activity`
--

CREATE TABLE IF NOT EXISTS `tbl_mitra_activity` (
  `mitra_activity_id` bigint(21) NOT NULL,
  `mitra_activity_title` varchar(100) DEFAULT NULL,
  `mitra_activity_cover_image` varchar(255) DEFAULT NULL,
  `mitra_activity_video_url` varchar(250) DEFAULT NULL,
  `visibilty` enum('hide','show') NOT NULL DEFAULT 'show',
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mitra_activity`
--
ALTER TABLE `tbl_mitra_activity`
  ADD PRIMARY KEY (`mitra_activity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mitra_activity`
--
ALTER TABLE `tbl_mitra_activity`
  MODIFY `mitra_activity_id` bigint(21) NOT NULL AUTO_INCREMENT;

-- ----------- Snehal Kulkarni-------- 13/05/2020 4:30 pm-----------
-- ------ Table structure for table table tbl_albumimage

CREATE TABLE IF NOT EXISTS `tbl_album_image` (
  `album_image_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `album_id` bigint(21) NOT NULL,
  `album_image_path` varchar(50) DEFAULT NULL,
  `album_image_description` varchar(100) DEFAULT NULL,
  `album_image_sequence` int(10) NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`album_image_id`),
  KEY `album_id` (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_album_image`
--
ALTER TABLE `tbl_album_image`
  ADD CONSTRAINT `tbl_album_image_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `tbl_album` (`album_id`);
  
-- --------------------------------------------------------

--
-- Table structure for table `tbl_how_to_learn`
--

CREATE TABLE IF NOT EXISTS `tbl_how_to_learn` (
  `how_to_learn_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `how_to_learn_name` varchar(255) DEFAULT NULL,
  `how_to_learn_description` varchar(700) DEFAULT NULL,
  `how_to_learn_image` varchar(100) DEFAULT NULL,
  `visibility` enum('hide','show') DEFAULT 'show',
  `inserted_on` datetime NOT NULL,
  `inserted_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) NOT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`how_to_learn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



-- ---------------------------------------------------------------

--
-- Table structure for table `tbl_group_sitting`
--

CREATE TABLE IF NOT EXISTS `tbl_group_sitting` (
  `group_sitting_id` bigint(21) NOT NULL,
  `area_name` varchar(255) DEFAULT NULL,
  `day` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `group_sitting_address` varchar(255) DEFAULT NULL,
  `contact` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `google_map` varchar(255) NOT NULL,
  `sequence` int(11) NOT NULL,
  `visibilty` enum('0','1') DEFAULT '1' COMMENT '0-hide,1-show',
  `remark` varchar(255) NOT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_group_sitting`
--
ALTER TABLE `tbl_group_sitting`
  ADD PRIMARY KEY (`group_sitting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_group_sitting`
--
ALTER TABLE `tbl_group_sitting`
  MODIFY `group_sitting_id` bigint(21) NOT NULL AUTO_INCREMENT;

  
-- --------------------------------------------------------

--
-- Table structure for table `tbl_one_day_course`
--

CREATE TABLE IF NOT EXISTS `tbl_one_day_course` (
  `one_day_course_id` bigint(21) NOT NULL,
  `one_day_course_area` varchar(255) DEFAULT NULL,
  `day` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `one_day_course_address` varchar(255) DEFAULT NULL,
  `contact_no` int(11) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `google_map` varchar(255) NOT NULL,
  `sequence` int(11) NOT NULL,
  `visibilty` enum('0','1') DEFAULT '1' COMMENT '0-hide,1-show',
  `remark` varchar(255) NOT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_one_day_course`
--
ALTER TABLE `tbl_one_day_course`
  ADD PRIMARY KEY (`one_day_course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_one_day_course`
--
ALTER TABLE `tbl_one_day_course`
  MODIFY `one_day_course_id` bigint(21) NOT NULL AUTO_INCREMENT;


  -- Mrudul thite 13-05-2020 11:57

-- Table structure for table `tbl_donation`
--

CREATE TABLE IF NOT EXISTS `tbl_donation` (
  `donation_id` bigint(21) NOT NULL,
  `payment_id` bigint(21) NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `amount` bigint(100) DEFAULT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `pin_code` varchar(30) DEFAULT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `status` enum('0-pending','1-success','2-fail') NOT NULL DEFAULT '0-pending',
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `donation_id` bigint(21) NOT NULL AUTO_INCREMENT;

  -- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` bigint(21) NOT NULL,
  `amount` bigint(40) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `status` enum('0-pending','1-success','2-fail') NOT NULL DEFAULT '0-pending',
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(21) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tbl_payment` ADD `request` TEXT NULL DEFAULT NULL AFTER `status`, ADD `response` TEXT NULL DEFAULT NULL AFTER `request`;
  

  
-- shubhangi jagadale 13-05-2020 18:45

-- Table structure for table `tbl_one_day_course`
ALTER TABLE `tbl_one_day_course` CHANGE  `contact_no` `contact_no` VARCHAR(20) NOT NULL;