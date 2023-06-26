-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema BD_Final
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BD_Final
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BD_Final` DEFAULT CHARACTER SET utf8 ;
USE `BD_Final` ;

-- -----------------------------------------------------
-- Table `BD_Final`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Final`.`User` ;

CREATE TABLE IF NOT EXISTS `BD_Final`.`User` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `LastName` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Final`.`Function`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Final`.`Function` ;

CREATE TABLE IF NOT EXISTS `BD_Final`.`Function` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `function` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Final`.`User_has_Function`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Final`.`User_has_Function` ;

CREATE TABLE IF NOT EXISTS `BD_Final`.`User_has_Function` (
  `User_ID` INT NOT NULL,
  `Function_ID` INT NOT NULL,
  PRIMARY KEY (`User_ID`, `Function_ID`),
  INDEX `fk_User_has_Function_Function1_idx` (`Function_ID` ASC) VISIBLE,
  INDEX `fk_User_has_Function_User_idx` (`User_ID` ASC) VISIBLE,
  CONSTRAINT `fk_User_has_Function_User`
    FOREIGN KEY (`User_ID`)
    REFERENCES `BD_Final`.`User` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Function_Function1`
    FOREIGN KEY (`Function_ID`)
    REFERENCES `BD_Final`.`Function` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
