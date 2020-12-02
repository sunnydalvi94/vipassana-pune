-- ----------- Snehal Kulkarni-------- 15/05/2020 6:30 pm-----------
-- ------ Table structure for table table tbl_children_course

CREATE TABLE IF NOT EXISTS `tbl_children_course` (
  `children_course_id` bigint(21) NOT NULL AUTO_INCREMENT,
  `children_course_title` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `timing` varchar(20) DEFAULT NULL,
  `age_limit` varchar(20) DEFAULT NULL,
  `registration` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) unsigned NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) unsigned NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`children_course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
