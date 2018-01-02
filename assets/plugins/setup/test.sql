DROP TABLE IF EXISTS `setup`; 
CREATE TABLE `setup` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NOT NULL,`Enable_Notifications` int(11) NOT NULL,`Send_by` varchar(512) NOT NULL,`Reminder_advance_notice` varchar(512) NOT NULL,`SMS_Template` text NOT NULL,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;