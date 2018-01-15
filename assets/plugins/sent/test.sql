DROP TABLE IF EXISTS `sent`; 
CREATE TABLE `sent` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,`message_name` varchar(512) NOT NULL,`message` text NOT NULL,`recipient` varchar(255) NOT NULL,`sent_on` datetime NOT NULL,`type` int(11) NOT NULL,`unique_reference` varchar(255) NOT NULL,`status_code` varchar(3) NOT NULL,`status_desc` varchar(255) NOT NULL,`status_update` datetime NOT NULL,`booking_reference` varchar(255) NOT NULL,`staff_name` varchar(255) NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;