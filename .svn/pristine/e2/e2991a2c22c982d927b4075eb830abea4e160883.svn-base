-- ----------- Mrudul Thite-------- 11/06/2020 7:30 pm-----------
-- ------ Table structure for table `tbl_hearing_speech_impaired_children`


CREATE TABLE IF NOT EXISTS `tbl_hearing_speech_impaired_children` (
  `hearing_speech_impaired_children_id` bigint(21) NOT NULL,
  `hearing_speech_impaired_children_description` varchar(2000) DEFAULT NULL,
  `hearing_speech_impaired_children_date` varchar(250) DEFAULT NULL,
  `hearing_speech_impaired_children_duration` varchar(250) DEFAULT NULL,
  `hearing_speech_impaired_children_location` varchar(250) DEFAULT NULL,
  `hearing_speech_impaired_children_note` varchar(250) DEFAULT NULL,
  `hearing_speech_impaired_children_video_url` varchar(250) DEFAULT NULL,
  `display` enum('Y','N') NOT NULL DEFAULT 'Y',
  `inserted_by` bigint(20) UNSIGNED NOT NULL,
  `inserted_on` datetime NOT NULL,
  `modified_by` bigint(20) UNSIGNED NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `in_use` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`hearing_speech_impaired_children_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

