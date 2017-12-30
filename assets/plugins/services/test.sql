DROP TABLE IF EXISTS `services`; 
CREATE TABLE `services` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,`Service_name` varchar(512) NOT NULL,`Duration` varchar(215) NOT NULL,`Retail_Price` varchar(215) NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;