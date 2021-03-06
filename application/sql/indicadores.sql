-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema indicadores
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema indicadores
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `indicadores` DEFAULT CHARACTER SET utf8 ;
USE `indicadores` ;

-- -----------------------------------------------------
-- Table `indicadores`.`unidad_fomento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indicadores`.`unidad_fomento` (
  `idUF` INT NOT NULL AUTO_INCREMENT,
  `valorUF` DECIMAL NULL,
  `valorCLP` DECIMAL NULL,
  `fechaUF` VARCHAR(45) NULL DEFAULT 'NOW()',
  PRIMARY KEY (`idUF`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
