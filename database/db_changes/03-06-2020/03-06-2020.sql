
-- ----------- Snehal Kulkarni-------- 03/06/2020 5:15 pm-----------

ALTER TABLE `tbl_slider_type` CHANGE `display` `display` ENUM('Y','N') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Y', CHANGE `in_use` `in_use` ENUM('Y','N') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Y';
