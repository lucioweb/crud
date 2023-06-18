    DROP TABLE IF EXISTS `crud_2`;
     CREATE TABLE IF NOT EXISTS `crud_2` (
     `id` int(10) NOT NULL AUTO_INCREMENT,
     `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8mb4_general_ci NOT NULL,
     `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8mb4_general_ci NOT NULL,
     `email` varchar(50) CHARACTER SET utf8 COLLATE utf8mb4_general_ci NOT NULL,
     `gender` varchar(20) CHARACTER SET utf8 COLLATE utf8mb4_general_ci	NOT NULL,
     PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;