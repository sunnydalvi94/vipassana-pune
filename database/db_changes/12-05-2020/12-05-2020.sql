-- shubhangi jagadale 12-05-2020 12:28
-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `question_name` varchar(255) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `sequence` int(11) NOT NULL,
  `display` enum('Y','N') DEFAULT 'Y',
  `in_use` enum('Y','N') DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED DEFAULT NULL,
  `modified_on` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rest_keys`
--

CREATE TABLE IF NOT EXISTS `tbl_rest_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `display` enum('Y','N') DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rest_keys`
--

INSERT IGNORE INTO  `tbl_rest_keys`  (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `display`, `date_created`) VALUES
(1, 0, '5681648d-91d6-4371-a911-1497734d0016', 0, 0, 0, NULL, 'Y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ten_day_course`
--

CREATE TABLE IF NOT EXISTS `tbl_ten_day_course` (
  `ten_day_course_id` bigint(11) NOT NULL,
  `center_name` varchar(255) NOT NULL,
  `short_decription` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
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
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_rest_keys`
--
ALTER TABLE `tbl_rest_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ten_day_course`
--
ALTER TABLE `tbl_ten_day_course`
  ADD PRIMARY KEY (`ten_day_course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rest_keys`
--
ALTER TABLE `tbl_rest_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ten_day_course`
--
ALTER TABLE `tbl_ten_day_course`
  MODIFY `ten_day_course_id` bigint(11) NOT NULL AUTO_INCREMENT;

