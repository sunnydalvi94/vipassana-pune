-- ----------Snehal Kulkarni 30-05-2020 2:00 pm

ALTER TABLE `tbl_children_course` CHANGE `date` `date` VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

-- ----------Mrudul Thite 30-05-2020 3:00 pm
DROP INDEX ten_day_course_id ON  `tbl_seva_registration`;
DROP INDEX ten_day_course_id ON  `tbl_mitra_school_seva_registration`;