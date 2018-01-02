DROP TABLE IF EXISTS `company_details`; 
CREATE TABLE `company_details` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,`Bussiness_Name` varchar(512) NOT NULL,`Description` text NOT NULL,`Address` text NOT NULL,`Website` varchar(512) NOT NULL,`Mobile_Number` varchar(255) NOT NULL,`Business_Type` varchar(512) NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;