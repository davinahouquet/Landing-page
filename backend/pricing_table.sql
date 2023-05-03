-- Initialisation de la table pricing 03/05/2023

CREATE TABLE `pricing` (
	`id_pricing` INT(10) NOT NULL,
	`name` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`price` DECIMAL(6,2) NOT NULL,
	`bandwidth_gb` INT(10) NOT NULL,
	`onlinespace_mb` INT(10) NOT NULL,
	`support_no` TINYINT(1) NOT NULL,
	`domain` INT(10) NULL DEFAULT NULL,
	`hidden_fees` TINYINT(1) NOT NULL,
	`sale` DECIMAL(4,2) NOT NULL,
	PRIMARY KEY (`id_pricing`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
;


-- Première requête : ajout informations pricing
INSERT INTO pricing VALUES('1', 'Starter', '9', '1', '500', '0', '1', '0', '0')

INSERT INTO pricing VALUES('2', 'Advanced', '19', '2', '1', '1', '3', '0', '20')

INSERT INTO pricing VALUES('3', 'Professional', '29', '3', '2', '1', null, '0', '0')