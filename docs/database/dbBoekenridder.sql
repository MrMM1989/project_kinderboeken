-- -----------------------------------------------------
-- Table `avi_level`
-- -----------------------------------------------------
CREATE  TABLE  `avi_level` (
  `avi_level_id` INT NOT NULL AUTO_INCREMENT ,
  `avi_level_name` VARCHAR(100) NULL ,
  `avi_level_description` TEXT NULL ,
  PRIMARY KEY (`avi_level_id`) );



-- -----------------------------------------------------
-- Table `user_role`
-- -----------------------------------------------------
CREATE  TABLE  `user_role` (
  `user_role_id` INT NOT NULL AUTO_INCREMENT ,
  `user_role_name` VARCHAR(50) NULL ,
  `user_role_description` TEXT NULL ,
  PRIMARY KEY (`user_role_id`) );



-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
CREATE  TABLE  `user` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(25) NULL ,
  `user_email` VARCHAR(150) NULL ,
  `user_password` VARCHAR(255) NULL ,
  `user_salt` CHAR(50) NULL ,
  `user_1_active_0_inactive` TINYINT(1) NULL ,
  `user_1_banned_0_unbanned` TINYINT(1) NULL DEFAULT 0 ,
  `user_registration_date` DATETIME NULL ,
  `user_last_login_time` DATETIME NULL ,
  `user_role_id` INT NULL ,
  PRIMARY KEY (`user_id`) ,
  INDEX `fk_ur_user_role_id_idx` (`user_role_id` ASC) ,
  CONSTRAINT `fk_ur_user_role_id`
    FOREIGN KEY (`user_role_id` )
    REFERENCES `user_role` (`user_role_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



-- -----------------------------------------------------
-- Table `book`
-- -----------------------------------------------------
CREATE  TABLE  `book` (
  `book_id` INT NOT NULL AUTO_INCREMENT ,
  `book_title` VARCHAR(150) NULL ,
  `book_image_link` VARCHAR(255) NULL ,
  `book_author` VARCHAR(150) NULL ,
  `book_publisher` VARCHAR(150) NULL ,
  `book_code` CHAR(13) NULL ,
  `book_synopsis` TEXT NULL ,
  `avi_level_id` INT NULL ,
  `user_id` INT NULL ,
  PRIMARY KEY (`book_id`) ,
  INDEX `fk_avi_level_id_idx` (`avi_level_id` ASC) ,
  INDEX `fk_bk_user_id_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_bk_avi_level_id`
    FOREIGN KEY (`avi_level_id` )
    REFERENCES `avi_level` (`avi_level_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_bk_user_id`
    FOREIGN KEY (`user_id` )
    REFERENCES `user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



-- -----------------------------------------------------
-- Table `newsitem`
-- -----------------------------------------------------
CREATE  TABLE  `newsitem` (
  `newsitem_id` INT NOT NULL AUTO_INCREMENT ,
  `newsitem_title` VARCHAR(150) NULL ,
  `newsitem_text` TEXT NULL ,
  `newsitem_creation_date` DATETIME NULL ,
  `newsitem_1_active_0_inactive` TINYINT(1) NULL ,
  `user_id` INT NULL ,
  PRIMARY KEY (`newsitem_id`) ,
  INDEX `fk_nm_user_id_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_nm_user_id`
    FOREIGN KEY (`user_id` )
    REFERENCES `user` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


