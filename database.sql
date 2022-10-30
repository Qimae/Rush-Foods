/* user account login */
CREATE TABLE `rush`.`user` (
    `ID` INT(10) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(250) NOT NULL,
    `email` VARCHAR(250) NOT NULL,
    `password` VARCHAR(250) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

/* user profile registration */
CREATE TABLE `rush`.`profreg` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(250) NOT NULL,
    `lastname` VARCHAR(250) NOT NULL,
    `gender` VARCHAR(250) NOT NULL,
    `phone` VARCHAR(14) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

/* user delivery address */
CREATE TABLE `rush`.`delivery` (
    `ID` INT(10) NOT NULL AUTO_INCREMENT,
    `address` VARCHAR(250) NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;