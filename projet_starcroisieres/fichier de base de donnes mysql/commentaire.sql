

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` smallint(5) NOT NULL,
  `commentaire` varchar(200) NOT NULL,
  `date` date NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


