DROP TABLE IF EXISTS `clients`; 
CREATE TABLE `clients` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,`First_Name` varchar(512) NOT NULL,`Last_Name` varchar(512) NOT NULL,`Mobile_Number` varchar(255) NOT NULL,`Email` varchar(512) NOT NULL,`Send_Notifications_by` varchar(255) NOT NULL,`Client_Notes` text NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;