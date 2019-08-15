-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2019 a las 20:26:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cidam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio`
--

CREATE TABLE `directorio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `directorio`
--

INSERT INTO `directorio` (`id`, `nombre`, `puesto`, `telefono`) VALUES
(1, 'Dra. Eliza López Loeza', ' Directora Ejecutiva del CIDAM', '(443) 299-0181 y (443) 299-0264 Ext. 554'),
(2, 'Dr. Luis Enrique Serrano Rubio', 'Coordinador de la Unidad de Gestión de la Innovación', '(443) 299-0181 y (443) 299-0264 Ext. 543'),
(3, 'Dra. Rocio Viridiana Pérez Gallardo', ' Responsable del Laboratorio de Inocuidad Química', '(443) 299-0181 y (443) 299-0264Ext. 540'),
(4, 'Dra. Citlali Colin Chavez', ' Responsable del Laboratorio de Poscosecha', '(443) 299-0181 y (443) 299-0264 Ext. 506'),
(5, 'Dr. Miguel Ángel Martínez Téllez', ' Investigador Comisionado del CIAD en el CIDAM', '(443) 299-0181 y (443) 299-0264 Ext. 539'),
(6, 'Dr. José Juan Virgen Ortiz', ' Responsable del Laboratorio de Poscosecha', '(443) 299-0181 y (443) 299-0264 Ext. 544'),
(7, 'Dra. Fabiola Esquivel Chavez', ' Responsable del Laboratorio de Fitopatologia', '(443) 299-0181 y (443) 299-0264 Ext. 526'),
(8, 'Dr. Alfonso Luna Cruz', ' Responsable del Laboratorio de Manejo de Plagas', ' (443) 299-0181 y (443) 299-0264 Ext. 521'),
(9, 'Dra. Norma Susana Pano Farias', ' Investigadora Asociada Laboratorio de Poscosecha', '(443) 299-0181 y (443) 299-0264 Ext. 545'),
(10, 'M.C. Marysol Rubio Landa', ' Investigar Asociado del Laboratorio de Biotecnología', ' (443) 299-0181 y (443) 299-0264 Ext. 549'),
(11, 'M.C. María Guadalupe Panduro Rivera', ' Investigar Asociado del Laboratorio de Plaguicidas', ' Tel: (443) 299-0181 y (443) 299-0264 Ext. 536'),
(12, 'M.C. Lorena Farías Rosales', ' Investigar Asociado del Laboratorio de Biotecnología', '(443) 299-0181 y (443) 299-0264 Ext. 517'),
(13, 'M.C. Alejandro Sosa Sales', ' Responsable del Laboratorio de AgroCibernética', '(443) 299-0181 y (443) 299-0264 Ext. 529'),
(14, 'M.C. Rodolfo Fulgencio Negrete', ' Investigar Asociado del Laboratorio de Biotecnología', '(443) 299-0181 y (443) 299-0264 Ext. 516'),
(15, 'M.C. Cynthia Laura Aguilar Gil', ' Investigar Asociado del Laboratorio de Microbiología', '(443) 299-0181 y (443) 299-0264 Ext. 535'),
(16, 'M.C. Claudio Meléndez Gonzáles', ' Encargado de Vinculación y Proyecto', ' (443) 299-0181 y (443) 299-0264 Ext. 507'),
(17, 'Ing. Miguel Ángel Gómez Romero', ' Investigador Asociado del Laboratorio de AgroCibernética', ' (443) 299-0181 y (443) 299-0264 Ext. 525'),
(18, 'Ing. Otoniel Guzmán Talavera', ' Analista del Laboratorio de Inocuidad Microbiológica', ' (443) 299-0181 y (443) 299-0264 Ext. 550');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `laboratorio` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `codigo`, `nombre`, `precio`, `laboratorio`) VALUES
(1, 'ATI-01', 'Desarrollo de software (a la medida) para campo', 'Variable', 'Laboratorio de AgroCibernética'),
(2, 'ATI-02', 'Redes de estaciones agroclimáticas', 'Variable', 'Laboratorio de AgroCibernética'),
(3, 'ATI-03', 'Automatización de procesos en campo', 'Variable', 'Laboratorio de AgroCibernética'),
(4, 'ATI-04', 'Venta de Drones a la medida', 'Variable', 'Laboratorio de AgroCibernética'),
(5, 'ATI-05', 'Mantenimiento y reparación de Drones', 'Variable', 'Laboratorio de AgroCibernética'),
(6, 'ATI-06', 'Capacitación de vuelo de Drones', 'Variable', 'Laboratorio de AgroCibernética'),
(7, 'ATI-07', 'Vuelo de Drones en campo', 'Variable', 'Laboratorio de AgroCibernética'),
(8, 'ATI-08', 'Impresión de prototipos en 3D', '$158.00', 'Laboratorio de AgroCibernética'),
(9, 'ATI-09', 'Ensamble y mantenimiento de equipo de cómputo para campo', 'Variable', 'Laboratorio de AgroCibernética'),
(10, 'FITO-01', 'Hongos en tejido vegetal y suelo (Convencional y claves taxonómicas)', '$650.00', 'Laboratorio de Fitopatología'),
(11, 'FITO-02', 'Hongos en tejido vegetal y suelo (Molecular PCR)', '$950.00', 'Laboratorio de Fitopatología'),
(12, 'FITO-03', 'Bacterias en tejido vegetal (Pruebas bioquímicas)', '$700.00', 'Laboratorio de Fitopatología'),
(13, 'FITO-04', 'Bacterias en tejido vegetal (Molecular PCR)', '$950.00', 'Laboratorio de Fitopatología'),
(14, 'FITO-05', 'Virus en tejido vegetal (Molecular PCR)', '$1,150.00', 'Laboratorio de Fitopatología'),
(15, 'FITO-06', 'Fitosanidad y calidad de semillas de hongos, bacterias y virus (% de germinación y vigor; convencion', '$750.00', 'Laboratorio de Fitopatología'),
(16, 'FITO-07', 'Fitosanidad y calidad de semillas de hongos, bacterias y virus (Molecular PCR)', '$950.00', 'Laboratorio de Fitopatología'),
(17, 'FITO-08', 'Frutos poscosecha (Observación directa medios de cultivo y claves taxonómicas)', '$750.00', 'Laboratorio de Fitopatología'),
(18, 'FITO-09', 'Análisis ambiental para la determinación de fitopatógenos en empaques de alimentos', '$850.00', 'Laboratorio de Fitopatología'),
(19, 'FITO-10', 'Identificación Agrobacterium tumefaciens por PCR', '$1,000.00', 'Laboratorio de Fitopatología'),
(20, 'POSC-01', 'Color', '$150.00', 'Laboratorio de Poscosecha'),
(21, 'POSC-02', 'Sólidos solubles', '$150.00', 'Laboratorio de Poscosecha'),
(22, 'POSC-03', 'Humedad', '$150.00', 'Laboratorio de Poscosecha'),
(23, 'POSC-04', 'Perfil de textura', '$250.00', 'Laboratorio de Poscosecha'),
(24, 'POSC-05', 'CO2 y etileno', '$1,100.00', 'Laboratorio de Poscosecha'),
(25, 'POSC-06', 'Firmeza', '$250.00', 'Laboratorio de Poscosecha'),
(26, 'POSC-07', 'pH', '$120.00', 'Laboratorio de Poscosecha'),
(27, 'POSC-08', 'Acidez titulable', '$180.00', 'Laboratorio de Poscosecha'),
(28, 'POSC-09', 'Extracto etéreo', '$300.00', 'Laboratorio de Poscosecha'),
(29, 'POSC-10', 'Fenoles totales', '$900.00', 'Laboratorio de Poscosecha'),
(30, 'POSC-11', 'Flavonoides totales', '$900.00', 'Laboratorio de Poscosecha'),
(31, 'POSC-12', 'Antocianinas totales', '$750.00', 'Laboratorio de Poscosecha'),
(32, 'POSC-13', 'Carotenoides totales', '$600.00', 'Laboratorio de Poscosecha'),
(33, 'POSC-14', 'Capacidad antioxidante TEAC', '$1,000.00', 'Laboratorio de Poscosecha'),
(34, 'POSC-15', 'Capacidad antioxidante DPPH', '$1,000.00', 'Laboratorio de Poscosecha'),
(35, 'POSC-16', 'B-caroteno', '$3,000.00', 'Laboratorio de Poscosecha'),
(36, 'POSC-17', 'Capsaicina', '$2,000.00', 'Laboratorio de Poscosecha'),
(37, 'INOM-01', 'Coliformes totales (NMP/g) (NMP/mL), alimentos, agua, hielo y bebidas de consumo humano (Acreditado)', '$450.00', 'Laboratorio de Inocuidad Microbiológica'),
(38, 'INOM-02', 'Coliformes fecales (NMP/g) (NMP/mL), alimentos, agua, hielo y bebidas de consumo humano (Acreditado)', '$490.00', 'Laboratorio de Inocuidad Microbiológica'),
(39, 'INOM-03', 'Escherichia coli (NMP/g) (NMP/mL), alimentos, agua, hielo y bebidas de consumo humano (Acreditado)', '$510.00', 'Laboratorio de Inocuidad Microbiológica'),
(40, 'INOM-04', 'Cuenta de moho y levaduras en alimentos (UFC/g) 5 días de incubación a 25 ± 1°C', '$380.00', 'Laboratorio de Inocuidad Microbiológica'),
(41, 'INOM-05', 'Detección de organismos coliformes, método Petrifilm (Acreditado)', '$520.00', 'Laboratorio de Inocuidad Microbiológica'),
(42, 'INOM-06', 'Listeria spp (/en 25g de muestra) en alimentos frescos, carnes, embutidos, carne de ave y subproduct', '$1,027.00', 'Laboratorio de Inocuidad Microbiológica'),
(43, 'INOM-07', 'Salmonella spp VIP, alimentos frescos y preparados, agua y bebidas de consumo humano (Acreditado)', '$920.00', 'Laboratorio de Inocuidad Microbiológica'),
(44, 'INOM-08', 'Recuento de aerobios mesófilos en muestras de alimentos. Recuento en placa', '$468.00', 'Laboratorio de Inocuidad Microbiológica'),
(45, 'INOM-09', 'Determinación de Salmonella spp., organismos coliformes en superficies vivas e inertes (Acreditado)', '$1,200.00', 'Laboratorio de Inocuidad Microbiológica'),
(46, 'INOM-10', 'Escherichia coli, método Petrifilm, monitoreo ambiental, superficies de procesamiento y manipuladore', '$560.00', 'Laboratorio de Inocuidad Microbiológica'),
(47, 'INOM-11', 'Escherichia coli y organismos coliformes en agua, Método colilert 18 (Acreditado)', '$560.00', 'Laboratorio de Inocuidad Microbiológica'),
(48, 'INOM-12', 'Organismos coliformes en agua, método colilert.', '$460.00', 'Laboratorio de Inocuidad Microbiológica'),
(49, 'INOM-17', 'Detección de Listeria spp en muestras de alimentos frescos, preparador y congelados de origen agrope', '$776.00', 'Laboratorio de Inocuidad Microbiológica'),
(50, 'INOM-18', 'Detección de Salmonella spp en muestras de alimentos frescos, preparador y congelados de origen agro', '$789.00', 'Laboratorio de Inocuidad Microbiológica'),
(51, 'INOQ-01', 'Análisis multiresidual de plaguicidas en aguacate (Acreditado)', '$2,204.00', 'Laboratorio de Inocuidad Química'),
(52, 'UVEM-01', 'Georreferenciación de predio y vivero', '$600.00', 'Unidad de Verificación (Acreditada)'),
(53, 'UVEM-02', 'Dictamen de cumplimiento NOM para productor', '$4,500.00', 'Unidad de Verificación (Acreditada)'),
(54, 'UVEM-03', 'Dictamen de cumplimiento NOM para envasador', '$4,500.00', 'Unidad de Verificación (Acreditada)'),
(55, 'UVEM-04', 'Dictamen de cumplimiento NOM para comercializador', '$4,500.00', 'Unidad de Verificación (Acreditada)'),
(56, 'UVEM-05', 'Vigilancia en el traslado de producto', '$500.00', 'Unidad de Verificación (Acreditada)'),
(57, 'UVEM-06', 'Muestreo de lote', '$900.00', 'Unidad de Verificación (Acreditada)'),
(58, 'UVEM-07', 'Verificación de información (etiqueta para bebida alcohólica)', '$600.00', 'Unidad de Verificación (Acreditada)'),
(59, 'UVEM-08', 'Verificación de información comercial (alimentos)', '$600.00', 'Unidad de Verificación (Acreditada)'),
(60, 'UVEM-09', 'Certificado de cumplimiento de lote a granel', '$700.00', 'Unidad de Verificación (Acreditada)'),
(61, 'UVEM-10', 'Certificado de cumplimiento de lote de envasado', '$700.00', 'Unidad de Verificación (Acreditada)'),
(62, 'SSA-1', 'Mapas NDVI (Índice de Vegetación Diferencial Normalizado)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(63, 'SSA-2', 'MDS (Model Digital de Superficie)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(64, 'SSA-3', 'MDT (Model Digital de Terreno)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(65, 'SSA-4', 'Ortomosaicos', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(66, 'SSA-5', 'Modelos 3D', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(67, 'SSA-6', 'Mapas topográficos', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(68, 'SSA-7', 'Uso de suelo y vegetación', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(69, 'SSA-8', 'Mapas geomorfológicos', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(70, 'SSA-8', 'Levantamiento de datos espaciales a través de Sistemas Aéreos No tripulados (drones)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(71, 'SSA-9', 'Levantamiento de datos de coordenadas', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
(72, '', 'Estudio acelerado de vida de anaquel', 'Variable', 'Servicios especializados'),
(73, '', 'Extensión de vida de anaquel', 'Variable', 'Servicios especializados'),
(74, '', 'Fermentaciones microbianas', 'Variable', 'Servicios especializados'),
(75, '', 'Evaluación de materiales de empaque y embalaje', 'Variable', 'Servicios especializados'),
(76, '', 'Análisis cromatográficos', 'Variable', 'Servicios especializados'),
(77, '', 'Reformulación de alimentos', 'Variable', 'Servicios especializados'),
(78, '', 'Ingeniería de procesos', 'Variable', 'Servicios especializados'),
(79, '', 'Cursos y capacitaciones', 'Variable', 'Servicios especializados');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directorio`
--
ALTER TABLE `directorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directorio`
--
ALTER TABLE `directorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
