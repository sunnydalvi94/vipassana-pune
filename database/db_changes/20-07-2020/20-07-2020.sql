-- shubhnagi jagadale 20-07-2020 18:00

ALTER TABLE `tbl_user` ADD `personal_details_id` BIGINT(21) NOT NULL AFTER `role_id`;
ALTER TABLE `tbl_user` ADD INDEX(`personal_details_id`);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal_details`
--

CREATE TABLE `tbl_personal_details` (
  `personal_details_id` bigint(21) NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `pan_no` varchar(30) DEFAULT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `pin_code` varchar(30) DEFAULT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
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
-- Indexes for table `tbl_personal_details`
--
ALTER TABLE `tbl_personal_details`
  ADD PRIMARY KEY (`personal_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_personal_details`
--
ALTER TABLE `tbl_personal_details`
  MODIFY `personal_details_id` bigint(21) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_personal`
--

CREATE TABLE `tbl_user_personal` (
  `user_personal_id` bigint(21) NOT NULL,
  `user_id` bigint(21) NOT NULL,
  `personal_details_id` bigint(21) NOT NULL,
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
-- Indexes for table `tbl_user_personal`
--
ALTER TABLE `tbl_user_personal`
  ADD PRIMARY KEY (`user_personal_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `personal_details_id` (`personal_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_personal`
--
ALTER TABLE `tbl_user_personal`
  MODIFY `user_personal_id` bigint(21) NOT NULL AUTO_INCREMENT;