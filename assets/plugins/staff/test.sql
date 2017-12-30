DROP TABLE IF EXISTS `staff`; 
CREATE TABLE `staff` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,`First_Name` varchar(512) NOT NULL,`Last_Name` varchar(512) NOT NULL,`Mobile_Number` varchar(255) NOT NULL,`Email` varchar(512) NOT NULL,`Notes` text NOT NULL,`Appointment_Colour` varchar(255) NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;