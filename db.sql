CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_bin NOT NULL,
  `edad` int(2) NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `genero` varchar(9) COLLATE utf8_bin NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nacionalidad` varchar(75) COLLATE utf8_bin NOT NULL,
  `carne` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;