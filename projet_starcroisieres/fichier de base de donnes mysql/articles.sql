

CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  `content` varchar(100) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

