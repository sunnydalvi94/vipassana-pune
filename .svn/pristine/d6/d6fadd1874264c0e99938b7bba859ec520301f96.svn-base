-- ----------- Mrudul Thite-------- 13/06/2020 1:30 pm-----------

ALTER TABLE `tbl_payment` ADD `donation_id` BIGINT(21) NOT NULL AFTER `payment_id`;
ALTER TABLE `tbl_payment` ADD CONSTRAINT `donation_id_fk` FOREIGN KEY (`donation_id`) REFERENCES `tbl_donation`(`donation_id`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `tbl_donation` DROP INDEX `payment_id`;
ALTER TABLE `tbl_donation` DROP `payment_id`;
