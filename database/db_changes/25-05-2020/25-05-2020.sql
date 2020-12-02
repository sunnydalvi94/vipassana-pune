-- shubhnagi jagadale 25-05-2020 25:15

ALTER TABLE `tbl_one_day_course` CHANGE `time` `time` VARCHAR(255) NOT NULL;
ALTER TABLE `tbl_one_day_course` CHANGE `one_day_course_address` `one_day_course_address` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `tbl_one_day_course` CHANGE `contact_no` `contact_no` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `tbl_one_day_course` ADD `one_day_course_image` VARCHAR(255) NULL DEFAULT NULL AFTER `one_day_course_area`;

-- Snehal Kulkarni---- 25/05/2020 4:00 pm

CREATE TABLE IF NOT EXISTS `tbl_slider_type` (
  `slider_type_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `slider_type` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `inserted_by` int(11) NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `display` enum('Y','N') NOT NULL,
  `in_use` enum('Y','N') NOT NULL,
  PRIMARY KEY (`slider_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- Snehal Kulkarni---- 25/05/2020 4:00 pm

RENAME TABLE `tbl_slider` TO `tbl_children_slider`;
ALTER TABLE `tbl_children_slider` CHANGE `slider_id` `children_slider_id` BIGINT(21) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tbl_children_slider` ADD `slider_type_id` BIGINT(21) NOT NULL AFTER `children_slider_id`, ADD INDEX (`slider_type_id`) ;

