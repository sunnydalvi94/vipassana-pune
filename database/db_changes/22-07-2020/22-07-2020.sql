-- Mrudul Thite 22-07-2020 12:10pm

ALTER TABLE `tbl_mitra_school_seva_registration`CHANGE `modified_by` `modified_by` BIGINT(20) UNSIGNED NULL DEFAULT NULL;

ALTER TABLE `tbl_seva_registration` CHANGE `inserted_by` `inserted_by` BIGINT(20) UNSIGNED NULL DEFAULT NULL;
ALTER TABLE `tbl_mitra_school_seva_registration` CHANGE `inserted_by` `inserted_by` BIGINT(20) UNSIGNED NULL DEFAULT NULL;
ALTER TABLE `tbl_seva_registration` CHANGE `modified_by` `modified_by` BIGINT(20) UNSIGNED NULL DEFAULT NULL;

ALTER TABLE `tbl_payment` CHANGE `status` `status` ENUM('1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1' COMMENT '\'1-pending\',\'2-success\',';

ALTER TABLE `tbl_donation` CHANGE `email` `email` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;