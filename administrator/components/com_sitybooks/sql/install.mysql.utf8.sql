CREATE TABLE IF NOT EXISTS `#__sitybooks_category` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',

`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`parent_id` INT(11)  NOT NULL ,
`name` VARCHAR(255)  NOT NULL ,
`description` TEXT NOT NULL ,
`frendli_url` VARCHAR(255)  NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT COLLATE=utf8_general_ci;


CREATE TABLE IF NOT EXISTS `#__sitybooks_book` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`created_by` INT(11)  NOT NULL ,
`name` VARCHAR(255)  NOT NULL ,
`author` VARCHAR(255)  NOT NULL ,
`date` DATE NOT NULL DEFAULT '0000-00-00',
`country` VARCHAR(255)  NOT NULL ,
`language` VARCHAR(255)  NOT NULL ,
`description` TEXT NOT NULL ,
`price` VARCHAR(255)  NOT NULL ,
`special_price` VARCHAR(255)  NOT NULL ,
`amount_book` VARCHAR(20)  NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT COLLATE=utf8_general_ci;


