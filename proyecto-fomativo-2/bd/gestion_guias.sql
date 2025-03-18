-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2025 a las 07:02:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_guias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `idCompetencia` int(11) NOT NULL,
  `fkIdProgramaFormacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia`
--

CREATE TABLE `guia` (
  `idGuia` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `presentacion` text NOT NULL,
  `glosarioTerminos` text NOT NULL,
  `referentesBibliograficos` text NOT NULL,
  `fechaCreacion` datetime DEFAULT current_timestamp(),
  `fechaActualizacion` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `razonCambio` varchar(255) NOT NULL,
  `fkIdInstructor` int(11) NOT NULL,
  `fkIdProgramaFormacion` int(11) NOT NULL,
  `fkIdEspecialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_resultado`
--

CREATE TABLE `guia_resultado` (
  `fkIdGuia` int(11) NOT NULL,
  `fkIdResultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `idInstructor` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fkIdEspecialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `momentogenerado`
--

CREATE TABLE `momentogenerado` (
  `idMomentoGenerado` int(11) NOT NULL,
  `textoGenerado` text NOT NULL,
  `fkIdGuia` int(11) NOT NULL,
  `fkIdMomentosAprendizaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `momentogenerado_tecnicasdidacticas`
--

CREATE TABLE `momentogenerado_tecnicasdidacticas` (
  `fkIdMomentoGenerado` int(11) NOT NULL,
  `fkIdTecnicasDidacticas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `momentosaprendizaje`
--

CREATE TABLE `momentosaprendizaje` (
  `idMomentosAprendizaje` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `momentosaprendizaje_tecnicasdidacticas`
--

CREATE TABLE `momentosaprendizaje_tecnicasdidacticas` (
  `fkIdMomentosAprendizaje` int(11) NOT NULL,
  `fkIdTecnicasDidacticas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programaformacion`
--

CREATE TABLE `programaformacion` (
  `idProgramaFormacion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codProgramaFormacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `idResultado` int(11) NOT NULL,
  `fkIdCompetencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicasdidacticas`
--

CREATE TABLE `tecnicasdidacticas` (
  `idTecnicasDidacticas` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`idCompetencia`),
  ADD KEY `fkIdProgramaFormacion` (`fkIdProgramaFormacion`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `guia`
--
ALTER TABLE `guia`
  ADD PRIMARY KEY (`idGuia`),
  ADD KEY `fkIdInstructor` (`fkIdInstructor`),
  ADD KEY `fkIdProgramaFormacion` (`fkIdProgramaFormacion`),
  ADD KEY `fkIdEspecialidad` (`fkIdEspecialidad`);

--
-- Indices de la tabla `guia_resultado`
--
ALTER TABLE `guia_resultado`
  ADD PRIMARY KEY (`fkIdGuia`,`fkIdResultado`),
  ADD KEY `fkIdResultado` (`fkIdResultado`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`idInstructor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fkIdEspecialidad` (`fkIdEspecialidad`);

--
-- Indices de la tabla `momentogenerado`
--
ALTER TABLE `momentogenerado`
  ADD PRIMARY KEY (`idMomentoGenerado`),
  ADD KEY `fkIdGuia` (`fkIdGuia`),
  ADD KEY `fkIdMomentosAprendizaje` (`fkIdMomentosAprendizaje`);

--
-- Indices de la tabla `momentogenerado_tecnicasdidacticas`
--
ALTER TABLE `momentogenerado_tecnicasdidacticas`
  ADD PRIMARY KEY (`fkIdMomentoGenerado`,`fkIdTecnicasDidacticas`),
  ADD KEY `fkIdTecnicasDidacticas` (`fkIdTecnicasDidacticas`);

--
-- Indices de la tabla `momentosaprendizaje`
--
ALTER TABLE `momentosaprendizaje`
  ADD PRIMARY KEY (`idMomentosAprendizaje`);

--
-- Indices de la tabla `momentosaprendizaje_tecnicasdidacticas`
--
ALTER TABLE `momentosaprendizaje_tecnicasdidacticas`
  ADD PRIMARY KEY (`fkIdMomentosAprendizaje`,`fkIdTecnicasDidacticas`),
  ADD KEY `fkIdTecnicasDidacticas` (`fkIdTecnicasDidacticas`);

--
-- Indices de la tabla `programaformacion`
--
ALTER TABLE `programaformacion`
  ADD PRIMARY KEY (`idProgramaFormacion`),
  ADD UNIQUE KEY `codProgramaFormacion` (`codProgramaFormacion`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idResultado`),
  ADD KEY `fkIdCompetencia` (`fkIdCompetencia`);

--
-- Indices de la tabla `tecnicasdidacticas`
--
ALTER TABLE `tecnicasdidacticas`
  ADD PRIMARY KEY (`idTecnicasDidacticas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `idCompetencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `guia`
--
ALTER TABLE `guia`
  MODIFY `idGuia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `idInstructor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `momentogenerado`
--
ALTER TABLE `momentogenerado`
  MODIFY `idMomentoGenerado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `momentosaprendizaje`
--
ALTER TABLE `momentosaprendizaje`
  MODIFY `idMomentosAprendizaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programaformacion`
--
ALTER TABLE `programaformacion`
  MODIFY `idProgramaFormacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `idResultado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnicasdidacticas`
--
ALTER TABLE `tecnicasdidacticas`
  MODIFY `idTecnicasDidacticas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `competencia_ibfk_1` FOREIGN KEY (`fkIdProgramaFormacion`) REFERENCES `programaformacion` (`idProgramaFormacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `guia`
--
ALTER TABLE `guia`
  ADD CONSTRAINT `guia_ibfk_1` FOREIGN KEY (`fkIdInstructor`) REFERENCES `instructor` (`idInstructor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guia_ibfk_2` FOREIGN KEY (`fkIdProgramaFormacion`) REFERENCES `programaformacion` (`idProgramaFormacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guia_ibfk_3` FOREIGN KEY (`fkIdEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `guia_resultado`
--
ALTER TABLE `guia_resultado`
  ADD CONSTRAINT `guia_resultado_ibfk_1` FOREIGN KEY (`fkIdGuia`) REFERENCES `guia` (`idGuia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guia_resultado_ibfk_2` FOREIGN KEY (`fkIdResultado`) REFERENCES `resultado` (`idResultado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`fkIdEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `momentogenerado`
--
ALTER TABLE `momentogenerado`
  ADD CONSTRAINT `momentogenerado_ibfk_1` FOREIGN KEY (`fkIdGuia`) REFERENCES `guia` (`idGuia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `momentogenerado_ibfk_2` FOREIGN KEY (`fkIdMomentosAprendizaje`) REFERENCES `momentosaprendizaje` (`idMomentosAprendizaje`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `momentogenerado_tecnicasdidacticas`
--
ALTER TABLE `momentogenerado_tecnicasdidacticas`
  ADD CONSTRAINT `momentogenerado_tecnicasdidacticas_ibfk_1` FOREIGN KEY (`fkIdMomentoGenerado`) REFERENCES `momentogenerado` (`idMomentoGenerado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `momentogenerado_tecnicasdidacticas_ibfk_2` FOREIGN KEY (`fkIdTecnicasDidacticas`) REFERENCES `tecnicasdidacticas` (`idTecnicasDidacticas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `momentosaprendizaje_tecnicasdidacticas`
--
ALTER TABLE `momentosaprendizaje_tecnicasdidacticas`
  ADD CONSTRAINT `momentosaprendizaje_tecnicasdidacticas_ibfk_1` FOREIGN KEY (`fkIdMomentosAprendizaje`) REFERENCES `momentosaprendizaje` (`idMomentosAprendizaje`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `momentosaprendizaje_tecnicasdidacticas_ibfk_2` FOREIGN KEY (`fkIdTecnicasDidacticas`) REFERENCES `tecnicasdidacticas` (`idTecnicasDidacticas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`fkIdCompetencia`) REFERENCES `competencia` (`idCompetencia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
