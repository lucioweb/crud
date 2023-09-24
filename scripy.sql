DROP TABLE IF EXISTS `crud_2`;

CREATE TABLE
    IF NOT EXISTS `tbl_user` (
        `id` int(10) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(50) NOT NULL,
        `last_name` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `gender` varchar(20) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 5 DEFAULT CHARSET = utf8mb4;