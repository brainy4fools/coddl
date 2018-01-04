DROP TABLE IF EXISTS `textanywhere`; 
CREATE TABLE `textanywhere` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`Password` varchar(255) NOT NULL,`External` varchar(255) NOT NULL,`label` varchar(255) NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;