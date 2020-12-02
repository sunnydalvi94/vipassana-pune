-- ----------- yogeshwari yawalkar-------- 26/05/2020 1:30 pm-----------
-- ---- Table structure for  table tbl_about

 ALTER TABLE `tbl_about` CHANGE `about_description` `about_description` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

-- shubhangi jagadale 26-05-2020 16:27

 ALTER TABLE `tbl_one_day_course` CHANGE `venue` `venue` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

-- shubhangi jagadale 26-05-2020 17:58

Drop table IF  EXISTS `tbl_faq`;

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `question_name` varchar(255) DEFAULT NULL,
  `answer` varchar(1000) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `display` enum('Y','N') DEFAULT 'Y',
  `in_use` enum('Y','N') DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED DEFAULT NULL,
  `modified_on` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;
