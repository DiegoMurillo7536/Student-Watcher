-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2021 a las 23:50:30
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudientes`
--

CREATE TABLE `acudientes` (
  `Id_Estudiante` varchar(10) DEFAULT NULL,
  `Identificacion` varchar(10) NOT NULL,
  `Ape1` varchar(15) DEFAULT NULL,
  `Ape2` varchar(15) DEFAULT NULL,
  `Nom1` varchar(15) DEFAULT NULL,
  `Nom2` varchar(15) DEFAULT NULL,
  `Parentezco` varchar(10) DEFAULT NULL,
  `Celular` varchar(10) DEFAULT NULL,
  `Firma` blob DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `Id_Votante` varchar(10) DEFAULT NULL,
  `Id_Cand` varchar(10) NOT NULL,
  `Puesto` varchar(20) DEFAULT NULL,
  `Num_Votos` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaciones`
--

CREATE TABLE `citaciones` (
  `Id_Estudiante` varchar(10) DEFAULT NULL,
  `Codigo_Docente` varchar(10) DEFAULT NULL,
  `Id_Acudiente` varchar(10) DEFAULT NULL,
  `Dia_Hora_Citacion` datetime DEFAULT NULL,
  `Causa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `Id_Estudiante` varchar(10) DEFAULT NULL,
  `Id_Curso` varchar(4) NOT NULL,
  `Jornada` varchar(6) DEFAULT NULL,
  `Max_Estudiantes` varchar(2) DEFAULT NULL,
  `Grado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_basicos_estudiante`
--

CREATE TABLE `datos_basicos_estudiante` (
  `Identificacion` varchar(10) NOT NULL,
  `Ape1` varchar(15) DEFAULT NULL,
  `Ape2` varchar(15) DEFAULT NULL,
  `Nom1` varchar(15) DEFAULT NULL,
  `Nom2` varchar(15) DEFAULT NULL,
  `RH` varchar(3) DEFAULT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `Jornada` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_complementarios_estudiante`
--

CREATE TABLE `datos_complementarios_estudiante` (
  `Id_Estudiante` varchar(10) DEFAULT NULL,
  `Ubicacion` varchar(50) DEFAULT NULL,
  `Fecha_Exp_Doc` date DEFAULT NULL,
  `Ciudad_Nac` varchar(30) DEFAULT NULL,
  `Ruta` varchar(2) DEFAULT NULL,
  `EPS` varchar(15) DEFAULT NULL,
  `Barrio` varchar(20) DEFAULT NULL,
  `Telefono` varchar(7) DEFAULT NULL,
  `Estrato` varchar(1) DEFAULT NULL,
  `Localidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `Codigo_Docente` varchar(10) NOT NULL,
  `Ape1` varchar(15) DEFAULT NULL,
  `Ape2` varchar(15) DEFAULT NULL,
  `Nom1` varchar(15) DEFAULT NULL,
  `Nom2` varchar(15) DEFAULT NULL,
  `Fecha_Nac` date DEFAULT NULL,
  `RH` varchar(3) DEFAULT NULL,
  `Asignatura` varchar(20) DEFAULT NULL,
  `Area` varchar(15) DEFAULT NULL,
  `Jornada` varchar(6) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `Id_Estudiante` varchar(10) DEFAULT NULL,
  `Codigo_Docente` varchar(10) DEFAULT NULL,
  `Num_Anotacion` tinyint(4) DEFAULT NULL,
  `Periodo` tinyint(4) DEFAULT NULL,
  `Inasistencias` tinyint(4) DEFAULT NULL,
  `Valor_Compromiso` text DEFAULT NULL,
  `Asigaturas_Perdidas` tinyint(4) DEFAULT NULL,
  `Compromisos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acudientes`
--
ALTER TABLE `acudientes`
  ADD PRIMARY KEY (`Identificacion`),
  ADD KEY `Id_Estudiante` (`Id_Estudiante`);

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`Id_Cand`),
  ADD KEY `Id_Votante` (`Id_Votante`);

--
-- Indices de la tabla `citaciones`
--
ALTER TABLE `citaciones`
  ADD KEY `Codigo_Docente` (`Codigo_Docente`),
  ADD KEY `Id_Estudiante` (`Id_Estudiante`),
  ADD KEY `Id_Acudiente` (`Id_Acudiente`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Id_Curso`),
  ADD KEY `Id_Estudiante` (`Id_Estudiante`);

--
-- Indices de la tabla `datos_basicos_estudiante`
--
ALTER TABLE `datos_basicos_estudiante`
  ADD PRIMARY KEY (`Identificacion`);

--
-- Indices de la tabla `datos_complementarios_estudiante`
--
ALTER TABLE `datos_complementarios_estudiante`
  ADD KEY `Id_Estudiante` (`Id_Estudiante`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`Codigo_Docente`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD KEY `Id_Estudiante` (`Id_Estudiante`),
  ADD KEY `Codigo_Docente` (`Codigo_Docente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acudientes`
--
ALTER TABLE `acudientes`
  ADD CONSTRAINT `acudientes_ibfk_1` FOREIGN KEY (`Id_Estudiante`) REFERENCES `datos_basicos_estudiante` (`Identificacion`);

--
-- Filtros para la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `candidatos_ibfk_1` FOREIGN KEY (`Id_Votante`) REFERENCES `datos_basicos_estudiante` (`Identificacion`);

--
-- Filtros para la tabla `citaciones`
--
ALTER TABLE `citaciones`
  ADD CONSTRAINT `citaciones_ibfk_1` FOREIGN KEY (`Codigo_Docente`) REFERENCES `docentes` (`Codigo_Docente`),
  ADD CONSTRAINT `citaciones_ibfk_2` FOREIGN KEY (`Id_Estudiante`) REFERENCES `datos_basicos_estudiante` (`Identificacion`),
  ADD CONSTRAINT `citaciones_ibfk_3` FOREIGN KEY (`Id_Acudiente`) REFERENCES `acudientes` (`Identificacion`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`Id_Estudiante`) REFERENCES `datos_basicos_estudiante` (`Identificacion`);

--
-- Filtros para la tabla `datos_complementarios_estudiante`
--
ALTER TABLE `datos_complementarios_estudiante`
  ADD CONSTRAINT `datos_complementarios_estudiante_ibfk_1` FOREIGN KEY (`Id_Estudiante`) REFERENCES `datos_basicos_estudiante` (`Identificacion`);

--
-- Filtros para la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD CONSTRAINT `observaciones_ibfk_1` FOREIGN KEY (`Id_Estudiante`) REFERENCES `datos_basicos_estudiante` (`Identificacion`),
  ADD CONSTRAINT `observaciones_ibfk_2` FOREIGN KEY (`Codigo_Docente`) REFERENCES `docentes` (`Codigo_Docente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
