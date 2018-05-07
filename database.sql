

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `xoolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE IF NOT EXISTS `perfiles` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `perfil`, `description`) VALUES
(1, 'superAdmin', 'administrador del sistema'),
(2, 'admin', 'administrador'),
(3, 'user', 'usuario regular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `lastname_user` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `login_user` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `passwd` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `age_user` int(3) NOT NULL,
  `birthday` date DEFAULT '1950-01-01',
  `perfil` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `avatar_url` varchar(400) COLLATE utf8_spanish2_ci NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `lastname_user`, `login_user`, `passwd`, `email`, `age_user`, `birthday`, `perfil`, `active`, `avatar_url`, `created`) VALUES
(1, 'Jorge', 'Antrax Hernandez', 'JorgeAntrax', 'admin', 'superadmin@xoolar.mx', 23, '1994-12-05', 1, 1, '', '2017-01-29'),
(2, 'Luis', 'Valens', 'luis28', 'luis', 'admin@xoolar.mx', 23, '1994-06-12', 2, 1, '', '2017-01-29'),
(3, 'Gisela', 'Carrillo', 'user', 'user', 'user@xoolar.mx', 24, '1993-10-07', 3, 1, '', '2017-01-29'),
(4, 'Leonardo', 'Quintana Juarez', 'leito94', '123456', 'otrouser@xoolar.mx', 23, '1994-12-06', 3, 1, '', '2018-04-22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
