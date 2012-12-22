CREATE DATABASE yiilab;

CREATE USER yiilab@localhost IDENTIFIED BY 'yiilab';

GRANT SELECT, INSERT, UPDATE, DELETE ON yiilab.* TO yiilab@localhost;

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(50) NOT NULL,
  `password` varchar(36) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nick` (`nick`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tbl_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `categoria_id` int NOT NULL,
  `existencia` int NOT NULL,
  `precio` decimal(16, 2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO tbl_usuario VALUES ('yiilab', '8f381a96b6482f40a2d061dd1ea07d81');