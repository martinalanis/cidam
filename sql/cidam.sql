-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2019 a las 02:16:25
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
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
	`id` int(11) unsigned NOT NULL,
  `codigo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `laboratorio` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `servicio`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`codigo`, `nombre`, `precio`, `laboratorio`) VALUES
('ATI-01', 'Desarrollo de software (a la medida) para campo', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-02', 'Redes de estaciones agroclimáticas', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-03', 'Automatización de procesos en campo', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-04', 'Venta de Drones a la medida', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-05', 'Mantenimiento y reparación de Drones', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-06', 'Capacitación de vuelo de Drones', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-07', 'Vuelo de Drones en campo', 'Variable', 'Laboratorio de AgroCibernética'),
('ATI-08', 'Impresión de prototipos en 3D', '$158.00', 'Laboratorio de AgroCibernética'),
('ATI-09', 'Ensamble y mantenimiento de equipo de cómputo para campo', 'Variable', 'Laboratorio de AgroCibernética'),
('FITO-01', 'Hongos en tejido vegetal y suelo (Convencional y claves taxonómicas)', '$650.00', 'Laboratorio de Fitopatología'),
('FITO-02', 'Hongos en tejido vegetal y suelo (Molecular PCR)', '$950.00', 'Laboratorio de Fitopatología'),
('FITO-03', 'Bacterias en tejido vegetal (Pruebas bioquímicas)', '$700.00', 'Laboratorio de Fitopatología'),
('FITO-04', 'Bacterias en tejido vegetal (Molecular PCR)', '$950.00', 'Laboratorio de Fitopatología'),
('FITO-05', 'Virus en tejido vegetal (Molecular PCR)', '$1,150.00', 'Laboratorio de Fitopatología'),
('FITO-06', 'Fitosanidad y calidad de semillas de hongos, bacterias y virus (% de germinación y vigor; convencion', '$750.00', 'Laboratorio de Fitopatología'),
('FITO-07', 'Fitosanidad y calidad de semillas de hongos, bacterias y virus (Molecular PCR)', '$950.00', 'Laboratorio de Fitopatología'),
('FITO-08', 'Frutos poscosecha (Observación directa medios de cultivo y claves taxonómicas)', '$750.00', 'Laboratorio de Fitopatología'),
('FITO-09', 'Análisis ambiental para la determinación de fitopatógenos en empaques de alimentos', '$850.00', 'Laboratorio de Fitopatología'),
('FITO-10', 'Identificación Agrobacterium tumefaciens por PCR', '$1,000.00', 'Laboratorio de Fitopatología'),
('POSC-01', 'Color', '$150.00', 'Laboratorio de Poscosecha'),
('POSC-02', 'Sólidos solubles', '$150.00', 'Laboratorio de Poscosecha'),
('POSC-03', 'Humedad', '$150.00', 'Laboratorio de Poscosecha'),
('POSC-04', 'Perfil de textura', '$250.00', 'Laboratorio de Poscosecha'),
('POSC-05', 'CO2 y etileno', '$1,100.00', 'Laboratorio de Poscosecha'),
('POSC-06', 'Firmeza', '$250.00', 'Laboratorio de Poscosecha'),
('POSC-07', 'pH', '$120.00', 'Laboratorio de Poscosecha'),
('POSC-08', 'Acidez titulable', '$180.00', 'Laboratorio de Poscosecha'),
('POSC-09', 'Extracto etéreo', '$300.00', 'Laboratorio de Poscosecha'),
('POSC-10', 'Fenoles totales', '$900.00', 'Laboratorio de Poscosecha'),
('POSC-11', 'Flavonoides totales', '$900.00', 'Laboratorio de Poscosecha'),
('POSC-12', 'Antocianinas totales', '$750.00', 'Laboratorio de Poscosecha'),
('POSC-13', 'Carotenoides totales', '$600.00', 'Laboratorio de Poscosecha'),
('POSC-14', 'Capacidad antioxidante TEAC', '$1,000.00', 'Laboratorio de Poscosecha'),
('POSC-15', 'Capacidad antioxidante DPPH', '$1,000.00', 'Laboratorio de Poscosecha'),
('POSC-16', 'B-caroteno', '$3,000.00', 'Laboratorio de Poscosecha'),
('POSC-17', 'Capsaicina', '$2,000.00', 'Laboratorio de Poscosecha'),
('INOM-01', 'Coliformes totales (NMP/g) (NMP/mL), alimentos, agua, hielo y bebidas de consumo humano (Acreditado)', '$450.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-02', 'Coliformes fecales (NMP/g) (NMP/mL), alimentos, agua, hielo y bebidas de consumo humano (Acreditado)', '$490.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-03', 'Escherichia coli (NMP/g) (NMP/mL), alimentos, agua, hielo y bebidas de consumo humano (Acreditado)', '$510.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-04', 'Cuenta de moho y levaduras en alimentos (UFC/g) 5 días de incubación a 25 ± 1°C', '$380.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-05', 'Detección de organismos coliformes, método Petrifilm (Acreditado)', '$520.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-06', 'Listeria spp (/en 25g de muestra) en alimentos frescos, carnes, embutidos, carne de ave y subproduct', '$1,027.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-07', 'Salmonella spp VIP, alimentos frescos y preparados, agua y bebidas de consumo humano (Acreditado)', '$920.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-08', 'Recuento de aerobios mesófilos en muestras de alimentos. Recuento en placa', '$468.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-09', 'Determinación de Salmonella spp., organismos coliformes en superficies vivas e inertes (Acreditado)', '$1,200.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-10', 'Escherichia coli, método Petrifilm, monitoreo ambiental, superficies de procesamiento y manipuladore', '$560.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-11', 'Escherichia coli y organismos coliformes en agua, Método colilert 18 (Acreditado)', '$560.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-12', 'Organismos coliformes en agua, método colilert.', '$460.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-17', 'Detección de Listeria spp en muestras de alimentos frescos, preparador y congelados de origen agrope', '$776.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOM-18', 'Detección de Salmonella spp en muestras de alimentos frescos, preparador y congelados de origen agro', '$789.00', 'Laboratorio de Inocuidad Microbiológica'),
('INOQ-01', 'Análisis multiresidual de plaguicidas en aguacate (Acreditado)', '$2,204.00', 'Laboratorio de Inocuidad Química'),
('UVEM-01', 'Georreferenciación de predio y vivero', '$600.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-02', 'Dictamen de cumplimiento NOM para productor', '$4,500.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-03', 'Dictamen de cumplimiento NOM para envasador', '$4,500.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-04', 'Dictamen de cumplimiento NOM para comercializador', '$4,500.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-05', 'Vigilancia en el traslado de producto', '$500.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-06', 'Muestreo de lote', '$900.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-07', 'Verificación de información (etiqueta para bebida alcohólica)', '$600.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-08', 'Verificación de información comercial (alimentos)', '$600.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-09', 'Certificado de cumplimiento de lote a granel', '$700.00', 'Unidad de Verificación (Acreditada)'),
('UVEM-10', 'Certificado de cumplimiento de lote de envasado', '$700.00', 'Unidad de Verificación (Acreditada)'),
('SSA-1', 'Mapas NDVI (Índice de Vegetación Diferencial Normalizado)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-2', 'MDS (Model Digital de Superficie)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-3', 'MDT (Model Digital de Terreno)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-4', 'Ortomosaicos', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-5', 'Modelos 3D', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-6', 'Mapas topográficos', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-7', 'Uso de suelo y vegetación', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-8', 'Mapas geomorfológicos', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-8', 'Levantamiento de datos espaciales a través de Sistemas Aéreos No tripulados (drones)', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('SSA-9', 'Levantamiento de datos de coordenadas', 'Variable', 'Sistemas de Información Geográfica y Patrimonio Natural'),
('', 'Estudio acelerado de vida de anaquel', 'Variable', 'Servicios especializados'),
('', 'Extensión de vida de anaquel', 'Variable', 'Servicios especializados'),
('', 'Fermentaciones microbianas', 'Variable', 'Servicios especializados'),
('', 'Evaluación de materiales de empaque y embalaje', 'Variable', 'Servicios especializados'),
('', 'Análisis cromatográficos', 'Variable', 'Servicios especializados'),
('', 'Reformulación de alimentos', 'Variable', 'Servicios especializados'),
('', 'Ingeniería de procesos', 'Variable', 'Servicios especializados'),
('', 'Cursos y capacitaciones', 'Variable', 'Servicios especializados');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
