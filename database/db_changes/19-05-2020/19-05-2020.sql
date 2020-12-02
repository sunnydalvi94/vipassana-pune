-- ----------- Mrudul Thite-------- 19/05/2020 10:47 pm-----------
-- ------ Table structure for  table tbl_mitra_activity

ALTER TABLE `tbl_mitra_activity` ADD IF NOT EXISTS `mitra_activity_images` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `mitra_activity_cover_image`, ADD `mitra_activity_image_description` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `mitra_activity_images`;

ALTER TABLE `tbl_donation` ADD IF NOT EXISTS `pan_no` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL AFTER `last_name`;

-- ----------- yogeshwari yawalkar-------- 19/05/2020 11:11 pm-----------
-- ------ Table structure for  table tbl_about
ALTER TABLE `tbl_about` CHANGE `about_description` `about_description` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

-- ----------- yogeshwari yawalkar-------- 19/05/2020 11:11 pm-----------
-- ------ Table structure for  table  tbl_group_sitting
ALTER TABLE `tbl_group_sitting` CHANGE `time` `time` VARCHAR(100) NOT NULL;
ALTER TABLE `tbl_group_sitting` CHANGE `contact` `contact` VARCHAR(100) NOT NULL;

-- ----------- Snehal Kulkarni-------- 19/05/2020 11:17 am-----------
-- ------ Alter Query for table tbl_how_to_learn

ALTER TABLE `tbl_how_to_learn` CHANGE `how_to_learn_description` `how_to_learn_description` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `how_to_learn_image` `how_to_learn_video` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;