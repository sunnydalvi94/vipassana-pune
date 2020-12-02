-- shubhangi jagadale 14-06-2020 14:28

--
-- Table structure for table `tbl_role`
--
Drop table IF  EXISTS `tbl_role`;
CREATE TABLE `tbl_role` (
  `role_id` bigint(21) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `role_desc` varchar(500) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`, `role_desc`, `display`, `inserted_by`, `inserted_on`, `modified_by`, `modified_on`, `in_use`) VALUES
(1, 'user', 'user', 'Y', 2, '2020-06-13 11:37:38', 15, '2020-06-13 10:35:41', 'Y'),
(2, 'user', 'user', 'Y', 2, '2020-06-13 11:45:21', 2, '2020-06-13 06:15:21', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  -- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--
Drop table IF  EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` bigint(21) NOT NULL,
  `role_id` bigint(21) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `pan_no` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `role_id`, `fullname`, `email`, `mobile`, `username`, `password`, `activation_code`, `city`, `pincode`, `pan_no`, `address`, `user_image`, `display`, `inserted_by`, `inserted_on`, `modified_by`, `modified_on`, `in_use`) VALUES
(1, 1, 'Roshan deshmukh', 'rsdroshan@gmail.com', '8983045984', 'Admin', 'd93a5def7511da3d0f2d171d9c344e91', NULL, 'pune', '414105', 'ALWPG5809L', 'pune', 'roshan.png', 'Y', 1, '2020-06-14 14:13:35', 1, '2020-06-14 08:44:46', 'Y'),
(2, 1, 'shubhangi jagadale', 'shubhangijagadale1996@gmail.com', '8805408775', 'Admin12', 'd93a5def7511da3d0f2d171d9c344e91', NULL, 'pune', '414105', 'ALWPG5809L', 'pune', 'shubhangi.png', 'Y', 1, '2020-06-14 14:21:04', 1, '2020-06-14 08:52:48', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` bigint(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;