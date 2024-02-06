-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 23:36:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web-futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ano` int(11) DEFAULT NULL,
  `titulos` int(11) DEFAULT NULL,
  `liga` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `ano`, `titulos`, `liga`, `imagen`) VALUES
(1, 'Deportivo Alavés SAD', 1921, 5, 'La Liga', 'Deportivo_Alaves_SAD.jpg'),
(2, 'Almería', 1989, 2, 'La Liga', 'Almeria.jpg'),
(3, 'Athletic Club', 1898, 33, 'La Liga', 'Athletic_Club.jpg'),
(4, 'Atlético de Madrid', 1903, 33, 'La Liga', 'Atletico_de_Madrid.jpg'),
(5, 'FC Barcelona', 1899, 85, 'La Liga', 'FC_Barcelona.jpg'),
(6, 'Real Betis', 1907, 11, 'La Liga', 'Real_Betis.jpg'),
(7, 'Cádiz', 1910, 1, 'La Liga', 'Cadiz.jpg'),
(8, 'Celta de Vigo', 1923, 3, 'La Liga', 'Celta_de_Vigo.jpg'),
(9, 'Getafe', 1983, 0, 'La Liga', 'Getafe.jpg'),
(10, 'Girona', 1930, 0, 'La Liga', 'Girona.jpg'),
(11, 'Granada', 1931, 4, 'La Liga', 'Granada.jpg'),
(12, 'Las Palmas', 1949, 4, 'La Liga', 'Las_Palmas.jpg'),
(13, 'Real Mallorca', 1916, 5, 'La Liga', 'Real_Mallorca.jpg'),
(14, 'Osasuna', 1920, 4, 'La Liga', 'Osasuna.jpg'),
(15, 'Rayo Vallecano', 1924, 1, 'La Liga', 'Rayo_Vallecano.jpg'),
(16, 'Real Madrid', 1902, 90, 'La Liga', 'Real_Madrid.jpg'),
(17, 'Real Sociedad', 1909, 8, 'La Liga', 'Real_Sociedad.jpg'),
(18, 'Sevilla', 1890, 19, 'La Liga', 'Sevilla.jpg'),
(19, 'Valencia', 1919, 22, 'La Liga', 'Valencia.jpg'),
(20, 'Villarreal', 1923, 1, 'La Liga', 'Villarreal.jpg'),
(21, 'Arsenal', 1886, 13, 'Premier League', 'Arsenal.jpg'),
(22, 'Aston Villa', 1874, 7, 'Premier League', 'Aston_Villa.jpg'),
(23, 'Brentford', 1889, 0, 'Premier League', 'Brentford.jpg'),
(24, 'Brighton & Hove Albion', 1901, 0, 'Premier League', 'Brighton_Hove_Albion.jpg'),
(25, 'Burnley', 1882, 2, 'Premier League', 'Burnley.jpg'),
(26, 'Chelsea', 1905, 6, 'Premier League', 'Chelsea.jpg'),
(27, 'Crystal Palace', 1905, 0, 'Premier League', 'Crystal_Palace.jpg'),
(28, 'Everton', 1878, 9, 'Premier League', 'Everton.jpg'),
(29, 'Bournemouth', 1919, 3, 'Premier League', 'Bournemouth.jpg'),
(30, 'Fulham', 1884, 1, 'Premier League', 'Fulham.jpg'),
(31, 'Liverpool', 1892, 19, 'Premier League', 'Liverpool.jpg'),
(32, 'Manchester City', 1880, 6, 'Premier League', 'Manchester_City.jpg'),
(33, 'Manchester United', 1878, 20, 'Premier League', 'Manchester_United.jpg'),
(34, 'Newcastle United', 1892, 4, 'Premier League', 'Newcastle_United.jpg'),
(35, 'Nottingham Forest', 1902, 0, 'Premier League', 'Nottingham.jpg'),
(36, 'Luton Town', 1885, 0, 'Premier League', 'Luton.jpg'),
(37, 'Tottenham Hotspur', 1882, 2, 'Premier League', 'Tottenham_Hotspur.jpg'),
(38, 'Sheffield Utd', 1881, 0, 'Premier League', 'Sheffield.jpg'),
(39, 'West Ham United', 1895, 0, 'Premier League', 'West_Ham_United.jpg'),
(40, 'Wolverhampton Wanderers', 1877, 3, 'Premier League', 'Wolverhampton_Wanderers.jpg'),
(41, 'FC Bayern Munich', 1900, 31, 'Bundesliga', 'Bayern_Munich.jpg'),
(42, 'Borussia Dortmund', 1909, 8, 'Bundesliga', 'Borussia_Dortmund.jpg'),
(43, 'Bayer 04 Leverkusen', 1904, 0, 'Bundesliga', 'Bayer_Leverkusen.jpg'),
(44, 'RB Leipzig', 2009, 0, 'Bundesliga', 'RB_Leipzig.jpg'),
(45, 'VfL Wolfsburg', 1945, 1, 'Bundesliga', 'Wolfsburg.jpg'),
(46, 'FC Heidenheim', 1904, 7, 'Bundesliga', 'Heidenheim.jpg'),
(47, 'Eintracht Frankfurt', 1899, 1, 'Bundesliga', 'Eintracht_Frankfurt.jpg'),
(48, 'Bochum', 1892, 2, 'Bundesliga', 'Bochum.jpg'),
(49, 'Borussia Mönchengladbach', 1900, 5, 'Bundesliga', 'Monchengladbach.jpg'),
(50, 'VfB Stuttgart', 1893, 3, 'Bundesliga', 'Stuttgart.jpg'),
(51, 'Augsburgo', 1887, 6, 'Bundesliga', 'Augsburgo.jpg'),
(52, 'SV Werder Bremen', 1899, 4, 'Bundesliga', 'Werder_Bremen.jpg'),
(53, '1. FC Köln', 1948, 3, 'Bundesliga', 'FC_Koln.jpg'),
(54, '1. FSV Mainz 05', 1905, 0, 'Bundesliga', 'Mainz_05.jpg'),
(56, 'SC Freiburg', 1904, 0, 'Bundesliga', 'Freiburg.jpg'),
(58, 'FC Union Berlin', 1966, 0, 'Bundesliga', 'Union_Berlin.jpg'),
(75, 'Darmstadt', 1905, 0, 'Bundesliga', 'Darmstadt.jpg'),
(77, 'Paris Saint-Germain', 1970, 10, 'Ligue 1', 'Paris_Saint_Germain.jpg'),
(78, 'Olympique de Marseille', 1899, 9, 'Ligue 1', 'Olympique_de_Marseille.jpg'),
(79, 'AS Monaco', 1924, 8, 'Ligue 1', 'AS_Monaco.jpg'),
(80, 'Lille OSC', 1944, 3, 'Ligue 1', 'Lille_OSC.jpg'),
(81, 'Olympique Lyonnais', 1950, 7, 'Ligue 1', 'Olympique_Lyonnais.jpg'),
(82, 'FC Nantes', 1943, 8, 'Ligue 1', 'FC_Nantes.jpg'),
(83, 'Stade Rennais', 1901, 0, 'Ligue 1', 'Stade_Rennais.jpg'),
(84, 'OGC Nice', 1904, 4, 'Ligue 1', 'OGC_Nice.jpg'),
(85, 'Brest', 1919, 10, 'Ligue 1', 'Brest.jpg'),
(86, 'Montpellier HSC', 1919, 1, 'Ligue 1', 'Montpellier_HSC.jpg'),
(87, 'RC Strasbourg', 1906, 1, 'Ligue 1', 'RC_Strasbourg.jpg'),
(88, 'Toulouse', 1919, 0, 'Ligue 1', 'Toulouse.jpg'),
(89, 'FC Metz', 1932, 0, 'Ligue 1', 'FC_Metz.jpg'),
(91, 'Clermont', 1881, 6, 'Ligue 1', 'Clermont.jpg'),
(92, 'Le Havre', 1998, 0, 'Ligue 1', 'Havre.jpg'),
(93, 'FC Lorient', 1926, 0, 'Ligue 1', 'FC_Lorient.jpg'),
(95, 'RC Lens', 1906, 0, 'Ligue 1', 'RC_Lens.jpg'),
(96, 'Rennes', 1986, 0, 'Ligue 1', 'Rennes.jpg'),
(97, 'Juventus', 1897, 36, 'Serie A', 'Juventus.jpg'),
(98, 'AC Milan', 1899, 18, 'Serie A', 'AC_Milan.jpg'),
(99, 'Inter Milan', 1908, 19, 'Serie A', 'Inter_Milan.jpg'),
(100, 'AS Roma', 1927, 3, 'Serie A', 'AS_Roma.jpg'),
(101, 'SSC Napoli', 1926, 2, 'Serie A', 'Napoli.jpg'),
(102, 'Lazio', 1900, 2, 'Serie A', 'Lazio.jpg'),
(103, 'Fiorentina', 1926, 2, 'Serie A', 'Fiorentina.jpg'),
(104, 'Atalanta', 1907, 0, 'Serie A', 'Atalanta.jpg'),
(105, 'Torino', 1906, 7, 'Serie A', 'Torino.jpg'),
(106, 'Frosinone', 1946, 1, 'Serie A', 'Frosinone.jpg'),
(107, 'Bologna', 1909, 0, 'Serie A', 'Bologna.jpg'),
(108, 'Udinese', 1896, 0, 'Serie A', 'Udinese.jpg'),
(109, 'Cagliari', 1920, 1, 'Serie A', 'Cagliari.jpg'),
(110, 'Monza', 1913, 3, 'Serie A', 'Monza.jpg'),
(111, 'Genoa', 1893, 9, 'Serie A', 'Genoa.jpg'),
(112, 'Sassuolo', 1920, 0, 'Serie A', 'Sassuolo.jpg'),
(113, 'Hellas Verona', 1903, 0, 'Serie A', 'Hellas_Verona.jpg'),
(114, 'Salernitana', 1906, 0, 'Serie A', 'Salernitana.jpg'),
(115, 'Empoli', 1920, 0, 'Serie A', 'Empoli.jpg'),
(116, 'Lecce', 1907, 0, 'Serie A', 'Lecce.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `nacionalidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `equipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `nombre`, `edad`, `nacionalidad`, `imagen`, `equipo`) VALUES
(1, 'Lionel Messi', 34, 'Argentina', 'Messi.jpg', 'FC Barcelona'),
(2, 'Frenkie de Jong', 25, 'Países Bajos', 'De_Jong.jpg', 'FC Barcelona'),
(3, 'Sergio Busquets', 33, 'España', 'Busquets.jpg', 'FC Barcelona'),
(4, 'Ansu Fati', 19, 'España', 'Ansu_Fati.jpg', 'FC Barcelona'),
(5, 'Jordi Alba', 33, 'España', 'Jordi_Alba.jpg', 'FC Barcelona'),
(6, 'Sergi Roberto', 29, 'España', 'Sergi_Roberto.jpg', 'FC Barcelona'),
(7, 'Gerard Piqué', 35, 'España', 'Pique.jpg', 'FC Barcelona'),
(8, 'Pedri', 19, 'España', 'Pedri.jpg', 'FC Barcelona'),
(9, 'Ousmane Dembélé', 24, 'Francia', 'Dembele.jpg', 'FC Barcelona'),
(10, 'Memphis Depay', 27, 'Países Bajos', 'Depay.jpg', 'FC Barcelona'),
(11, 'Marc-André ter Stegen', 29, 'Alemania', 'Ter_Stegen.jpg', 'FC Barcelona'),
(12, 'Valverde', 25, 'Uruguay', 'Valverde.jpg', 'Real Madrid'),
(13, 'Eduardo Camavinga', 19, 'Francia', 'Camavinga.jpg', 'Real Madrid'),
(14, 'Bellingham', 19, 'Inglaterra', 'Bellingham.jpg', 'Real Madrid'),
(15, 'Vinícius Júnior', 21, 'Brasil', 'Vinicius_Junior.jpg', 'Real Madrid'),
(16, 'Toni Kroos', 32, 'Alemania', 'Kroos.jpg', 'Real Madrid'),
(17, 'Luka Modrić', 36, 'Croacia', 'Modric.jpg', 'Real Madrid'),
(18, 'David Alaba', 29, 'Austria', 'Alaba.jpg', 'Real Madrid'),
(19, 'Militao', 26, 'Brasil', 'Militao.jpg', 'Real Madrid'),
(20, 'Ferland Mendy', 26, 'Francia', 'Mendy.jpg', 'Real Madrid'),
(21, 'Rodrygo', 20, 'Brasil', 'Rodrygo.jpg', 'Real Madrid'),
(22, 'Thibaut Courtois', 29, 'Bélgica', 'Courtois.jpg', 'Real Madrid'),
(23, 'Luis Suárez', 35, 'Uruguay', 'Suarez.jpg', 'Atlético de Madrid'),
(24, 'João Félix', 22, 'Portugal', 'Joao_Felix.jpg', 'Atlético de Madrid'),
(25, 'Koke', 30, 'España', 'Koke.jpg', 'Atlético de Madrid'),
(26, 'Saúl Ñíguez', 27, 'España', 'Saul_Niguez.jpg', 'Atlético de Madrid'),
(27, 'Jan Oblak', 29, 'Eslovenia', 'Oblak.jpg', 'Atlético de Madrid'),
(28, 'Stefan Savic', 31, 'Montenegro', 'Savic.jpg', 'Atlético de Madrid'),
(29, 'Ángel Correa', 26, 'Argentina', 'Correa.jpg', 'Atlético de Madrid'),
(30, 'Diego Costa', 33, 'Brasil', 'Diego_Costa.jpg', 'Atlético de Madrid'),
(31, 'Thomas Lemar', 26, 'Francia', 'Lemar.jpg', 'Atlético de Madrid'),
(32, 'Héctor Herrera', 31, 'México', 'Herrera.jpg', 'Atlético de Madrid'),
(33, 'Renan Lodi', 23, 'Brasil', 'Renan_Lodi.jpg', 'Atlético de Madrid'),
(34, 'Yassine Bounou', 30, 'Marruecos', 'Bounou.jpg', 'Sevilla'),
(35, 'Jules Koundé', 23, 'Francia', 'Kounde.jpg', 'Sevilla'),
(36, 'Diego Carlos', 28, 'Brasil', 'Diego_Carlos.jpg', 'Sevilla'),
(37, 'Jesús Navas', 36, 'España', 'Navas.jpg', 'Sevilla'),
(38, 'Marcos Acuña', 30, 'Argentina', 'Acuna.jpg', 'Sevilla'),
(39, 'Joan Jordán', 27, 'España', 'Jordan.jpg', 'Sevilla'),
(40, 'Ivan Rakitić', 33, 'Croacia', 'Rakitic.jpg', 'Sevilla'),
(41, 'Lucas Ocampos', 27, 'Argentina', 'Ocampos.jpg', 'Sevilla'),
(42, 'Papu Gómez', 33, 'Argentina', 'Papu_Gomez.jpg', 'Sevilla'),
(43, 'Erik Lamela', 29, 'Argentina', 'Lamela.jpg', 'Sevilla'),
(44, 'Youssef En-Nesyri', 24, 'Marruecos', 'En_Nesyri.jpg', 'Sevilla'),
(45, 'Unai Simón', 24, 'España', 'Unai_Simon.jpg', 'Athletic Club'),
(46, 'Yeray Álvarez', 27, 'España', 'Yeray_Alvarez.jpg', 'Athletic Club'),
(47, 'Iñigo Martínez', 30, 'España', 'Inigo_Martinez.jpg', 'Athletic Club'),
(48, 'Ander Capa', 29, 'España', 'Ander_Capa.jpg', 'Athletic Club'),
(49, 'Mikel Balenziaga', 33, 'España', 'Balenziaga.jpg', 'Athletic Club'),
(50, 'Dani García', 32, 'España', 'Dani_Garcia.jpg', 'Athletic Club'),
(51, 'Iker Muniain', 29, 'España', 'Muniain.jpg', 'Athletic Club'),
(52, 'Alex Berenguer', 26, 'España', 'Berenguer.jpg', 'Athletic Club'),
(53, 'Iñaki Williams', 27, 'España', 'Inaki_Williams.jpg', 'Athletic Club'),
(54, 'Raúl García', 35, 'España', 'Raul_Garcia.jpg', 'Athletic Club'),
(55, 'Asier Villalibre', 24, 'España', 'Villalibre.jpg', 'Athletic Club'),
(56, 'Jeremias Ledesma', 29, 'Argentina', 'Ledesma.jpg', 'Cádiz'),
(57, 'Filipec Kuscevic', 29, 'Croacia', 'Kuscevic.jpg', 'Cádiz'),
(58, 'Isaac Carcelén', 28, 'España', 'Carcelen.jpg', 'Cádiz'),
(59, 'Juan Cala', 32, 'España', 'Cala.jpg', 'Cádiz'),
(60, 'Alfonso Espino', 29, 'Uruguay', 'Espino.jpg', 'Cádiz'),
(61, 'Jens Jønsson', 29, 'Dinamarca', 'Jonsson.jpg', 'Cádiz'),
(62, 'Bobby Adekanye', 22, 'Nigeria', 'Adekanye.jpg', 'Cádiz'),
(63, 'Álvaro Negredo', 36, 'España', 'Negredo.jpg', 'Cádiz'),
(64, 'Isaac Llorente', 24, 'España', 'Llorente.jpg', 'Cádiz'),
(65, 'Jairo Izquierdo', 28, 'España', 'Jairo.jpg', 'Cádiz'),
(66, 'Anthony Lozano', 28, 'Honduras', 'Lozano.jpg', 'Cádiz'),
(67, 'Fernando Pacheco', 30, 'España', 'Pacheco.jpg', 'Deportivo Alavés'),
(68, 'Ximo Navarro', 31, 'España', 'Navarro.jpg', 'Deportivo Alavés'),
(69, 'Rodrigo Battaglia', 30, 'Argentina', 'Battaglia.jpg', 'Deportivo Alavés'),
(70, 'Luis Rioja', 27, 'España', 'Rioja.jpg', 'Deportivo Alavés'),
(71, 'Rubén Duarte', 26, 'España', 'Duarte.jpg', 'Deportivo Alavés'),
(72, 'Edgar Méndez', 27, 'España', 'Mendez.jpg', 'Deportivo Alavés'),
(73, 'Tachi', 23, 'España', 'Tachi.jpg', 'Deportivo Alavés'),
(74, 'Pere Pons', 28, 'España', 'Pons.jpg', 'Deportivo Alavés'),
(75, 'Jota Peleteiro', 30, 'España', 'Jota.jpg', 'Deportivo Alavés'),
(76, 'Lucas Pérez', 33, 'España', 'Lucas_Perez.jpg', 'Deportivo Alavés'),
(77, 'Joselu', 31, 'España', 'Joselu.jpg', 'Deportivo Alavés'),
(78, 'Gerónimo Rulli', 29, 'Argentina', 'Gerónimo_Rulli.jpg', 'Villarreal'),
(79, 'Mario Gaspar', 31, 'España', 'Mario_Gaspar.jpg', 'Villarreal'),
(80, 'Raúl Albiol', 36, 'España', 'Raúl_Albiol.jpg', 'Villarreal'),
(81, 'Pau Torres', 24, 'España', 'Pau_Torres.jpg', 'Villarreal'),
(82, 'Alfonso Pedraza', 26, 'España', 'Alfonso_Pedraza.jpg', 'Villarreal'),
(83, 'Francis Coquelin', 31, 'Francia', 'Francis_Coquelin.jpg', 'Villarreal'),
(84, 'Dani Parejo', 33, 'España', 'Dani_Parejo.jpg', 'Villarreal'),
(85, 'Manu Trigueros', 30, 'España', 'Manu_Trigueros.jpg', 'Villarreal'),
(86, 'Yeremi Pino', 18, 'España', 'Yeremi_Pino.jpg', 'Villarreal'),
(87, 'Gerard Moreno', 30, 'España', 'Gerard_Moreno.jpg', 'Villarreal'),
(88, 'Boulaye Dia', 25, 'Senegal', 'Boulaye_Dia.jpg', 'Villarreal'),
(89, 'Jaume Doménech', 31, 'España', 'Jaume_Doménech.jpg', 'Valencia'),
(90, 'Thierry Correia', 23, 'Portugal', 'Thierry_Correia.jpg', 'Valencia'),
(91, 'Gabriel Paulista', 31, 'Brasil', 'Gabriel_Paulista.jpg', 'Valencia'),
(92, 'Hugo Guillamón', 22, 'España', 'Hugo_Guillamón.jpg', 'Valencia'),
(93, 'José Luis Gayà', 26, 'España', 'José_Luis Gayà.jpg', 'Valencia'),
(94, 'Uros Racic', 24, 'Serbia', 'Uros_Racic.jpg', 'Valencia'),
(95, 'Carlos Soler', 24, 'España', 'Carlos_Soler.jpg', 'Valencia'),
(96, 'Denis Cheryshev', 31, 'Rusia', 'Denis_Cheryshev.jpg', 'Valencia'),
(97, 'Gonçalo Guedes', 25, 'Portugal', 'Gonçalo_Guedes.jpg', 'Valencia'),
(98, 'Maxi Gómez', 25, 'Uruguay', 'Maxi_Gómez.jpg', 'Valencia'),
(99, 'BerndLeno', 30, 'Alemania', 'BerndLeno.jpg', 'Arsenal'),
(100, 'HectorBellerin', 28, 'España', 'HectorBellerin.jpg', 'Arsenal'),
(101, 'GabrielMagalhaes', 25, 'Brasil', 'GabrielMagalhaes.jpg', 'Arsenal'),
(102, 'BenWhite', 24, 'Inglaterra', 'BenWhite.jpg', 'Arsenal'),
(103, 'KieranTierney', 26, 'Escocia', 'KieranTierney.jpg', 'Arsenal'),
(104, 'ThomasPartey', 30, 'Ghana', 'ThomasPartey.jpg', 'Arsenal'),
(105, 'EmileSmithRowe', 22, 'Inglaterra', 'EmileSmithRowe.jpg', 'Arsenal'),
(106, 'BukayoSaka', 21, 'Inglaterra', 'BukayoSaka.jpg', 'Arsenal'),
(107, 'MartinOdegaard', 24, 'Noruega', 'MartinOdegaard.jpg', 'Arsenal'),
(108, 'PierreEmerickAubameyang', 34, 'Gabón', 'PierreEmerickAubameyang.jpg', 'Arsenal'),
(109, 'AlexandreLacazette', 32, 'Francia', 'AlexandreLacazette.jpg', 'Arsenal'),
(110, 'EmilianoMartinez', 31, 'Argentina', 'EmilianoMartinez.jpg', 'Aston Villa'),
(111, 'MattTargett', 27, 'Inglaterra', 'MattTargett.jpg', 'Aston Villa'),
(112, 'TyroneMings', 29, 'Inglaterra', 'TyroneMings.jpg', 'Aston Villa'),
(113, 'EzriKonsa', 24, 'Inglaterra', 'EzriKonsa.jpg', 'Aston Villa'),
(114, 'MattyCash', 24, 'Inglaterra', 'MattyCash.jpg', 'Aston Villa'),
(115, 'DouglasLuiz', 24, 'Brasil', 'DouglasLuiz.jpg', 'Aston Villa'),
(116, 'JohnMcGinn', 28, 'Escocia', 'JohnMcGinn.jpg', 'Aston Villa'),
(117, 'EmiBuendia', 25, 'Argentina', 'EmiBuendia.jpg', 'Aston Villa'),
(118, 'JackGrealish', 27, 'Inglaterra', 'JackGrealish.jpg', 'Aston Villa'),
(119, 'LeonBailey', 25, 'Jamaica', 'LeonBailey.jpg', 'Aston Villa'),
(120, 'DannyIngs', 29, 'Inglaterra', 'DannyIngs.jpg', 'Aston Villa'),
(121, 'DavidRaya', 27, 'España', 'DavidRaya.jpg', 'Brentford'),
(122, 'KristofferAjer', 24, 'Noruega', 'KristofferAjer.jpg', 'Brentford'),
(123, 'EthanPinnock', 28, 'Inglaterra', 'EthanPinnock.jpg', 'Brentford'),
(124, 'PontusJansson', 31, 'Suecia', 'PontusJansson.jpg', 'Brentford'),
(125, 'RicoHenry', 24, 'Inglaterra', 'RicoHenry.jpg', 'Brentford'),
(126, 'ChristianNorgaard', 27, 'Dinamarca', 'ChristianNorgaard.jpg', 'Brentford'),
(127, 'VitalyJanelt', 23, 'Alemania', 'VitalyJanelt.jpg', 'Brentford'),
(128, 'MathiasJensen', 26, 'Dinamarca', 'MathiasJensen.jpg', 'Brentford'),
(129, 'SergiCanos', 25, 'España', 'SergiCanos.jpg', 'Brentford'),
(130, 'BryanMbeumo', 22, 'Francia', 'BryanMbeumo.jpg', 'Brentford'),
(131, 'IvanToney', 26, 'Inglaterra', 'IvanToney.jpg', 'Brentford'),
(132, 'Robert Lewandowski', 33, 'Polonia', 'Robert_Lewandowski.jpg', 'FC Bayern Munich'),
(133, 'Joshua Kimmich', 27, 'Alemania', 'Joshua_Kimmich.jpg', 'FC Bayern Munich'),
(134, 'Manuel Neuer', 36, 'Alemania', 'Manuel_Neuer.jpg', 'FC Bayern Munich'),
(135, 'Leroy Sané', 25, 'Alemania', 'Leroy_Sane.jpg', 'FC Bayern Munich'),
(136, 'Thomas Müller', 32, 'Alemania', 'Thomas_Muller.jpg', 'FC Bayern Munich'),
(137, 'Alphonso Davies', 21, 'Canadá', 'Alphonso_Davies.jpg', 'FC Bayern Munich'),
(138, 'Leon Goretzka', 26, 'Alemania', 'Leon_Goretzka.jpg', 'FC Bayern Munich'),
(139, 'Serge Gnabry', 26, 'Alemania', 'Serge_Gnabry.jpg', 'FC Bayern Munich'),
(140, 'Dayot Upamecano', 23, 'Francia', 'Dayot_Upamecano.jpg', 'FC Bayern Munich'),
(141, 'Jamal Musiala', 19, 'Alemania', 'Jamal_Musiala.jpg', 'FC Bayern Munich'),
(142, 'Marc Roca', 25, 'España', 'Marc_Roca.jpg', 'FC Bayern Munich'),
(143, 'Erling Haaland', 21, 'Noruega', 'Erling_Haaland.jpg', 'Borussia Dortmund'),
(144, 'Jadon Sancho', 21, 'Inglaterra', 'Jadon_Sancho.jpg', 'Borussia Dortmund'),
(145, 'Marco Reus', 32, 'Alemania', 'Marco_Reus.jpg', 'Borussia Dortmund'),
(146, 'Mats Hummels', 33, 'Alemania', 'Mats_Hummels.jpg', 'Borussia Dortmund'),
(147, 'Giovanni Reyna', 19, 'Estados Unidos', 'Giovanni_Reyna.jpg', 'Borussia Dortmund'),
(148, 'Axel Witsel', 33, 'Bélgica', 'Axel_Witsel.jpg', 'Borussia Dortmund'),
(149, 'Raphael Guerreiro', 27, 'Portugal', 'Raphael_Guerreiro.jpg', 'Borussia Dortmund'),
(150, 'Jude Bellingham', 18, 'Inglaterra', 'Jude_Bellingham.jpg', 'Borussia Dortmund'),
(151, 'Thomas Meunier', 30, 'Bélgica', 'Thomas_Meunier.jpg', 'Borussia Dortmund'),
(152, 'Thorgan Hazard', 28, 'Bélgica', 'Thorgan_Hazard.jpg', 'Borussia Dortmund'),
(153, 'Manuel Akanji', 26, 'Suiza', 'Manuel_Akanji.jpg', 'Borussia Dortmund'),
(154, 'Lionel Messi', 34, 'Argentina', 'Lionel_Messi.jpg', 'Paris Saint-Germain'),
(155, 'Neymar Jr.', 30, 'Brasil', 'Neymar_Jr.jpg', 'Paris Saint-Germain'),
(156, 'Kylian Mbappé', 23, 'Francia', 'Kylian_Mbappe.jpg', 'Paris Saint-Germain'),
(157, 'Achraf Hakimi', 23, 'Marruecos', 'Achraf_Hakimi.jpg', 'Paris Saint-Germain'),
(158, 'Marco Verratti', 29, 'Italia', 'Marco_Verratti.jpg', 'Paris Saint-Germain'),
(159, 'Gianluigi Donnarumma', 22, 'Italia', 'Gianluigi_Donnarumma.jpg', 'Paris Saint-Germain'),
(160, 'Marquinhos', 27, 'Brasil', 'Marquinhos.jpg', 'Paris Saint-Germain'),
(161, 'Angel Di María', 33, 'Argentina', 'Angel_Di_Maria.jpg', 'Paris Saint-Germain'),
(162, 'Georginio Wijnaldum', 31, 'Países Bajos', 'Georginio_Wijnaldum.jpg', 'Paris Saint-Germain'),
(163, 'Presnel Kimpembe', 26, 'Francia', 'Presnel_Kimpembe.jpg', 'Paris Saint-Germain'),
(164, 'Idrissa Gueye', 32, 'Senegal', 'Idrissa_Gueye.jpg', 'Paris Saint-Germain'),
(165, 'Dimitri Payet', 34, 'Francia', 'Dimitri_Payet.jpg', 'Olympique de Marseille'),
(166, 'Arkadiusz Milik', 27, 'Polonia', 'Arkadiusz_Milik.jpg', 'Olympique de Marseille'),
(167, 'Boubacar Kamara', 22, 'Francia', 'Boubacar_Kamara.jpg', 'Olympique de Marseille'),
(168, 'Florian Thauvin', 28, 'Francia', 'Florian_Thauvin.jpg', 'Olympique de Marseille'),
(169, 'Duje Ćaleta-Car', 25, 'Croacia', 'Duje_Caleta_Car.jpg', 'Olympique de Marseille'),
(170, 'Steve Mandanda', 36, 'Francia', 'Steve_Mandanda.jpg', 'Olympique de Marseille'),
(171, 'Jordan Amavi', 28, 'Francia', 'Jordan_Amavi.jpg', 'Olympique de Marseille'),
(172, 'Valentin Rongier', 26, 'Francia', 'Valentin_Rongier.jpg', 'Olympique de Marseille'),
(173, 'Pau López', 27, 'España', 'Pau_Lopez.jpg', 'Olympique de Marseille'),
(174, 'William Saliba', 20, 'Francia', 'William_Saliba.jpg', 'Olympique de Marseille'),
(175, 'Gerson', 24, 'Brasil', 'Gerson.jpg', 'Olympique de Marseille'),
(176, 'Cristiano Ronaldo', 37, 'Portugal', 'Cristiano_Ronaldo.jpg', 'Juventus'),
(177, 'Paulo Dybala', 28, 'Argentina', 'Paulo_Dybala.jpg', 'Juventus'),
(178, 'Giorgio Chiellini', 37, 'Italia', 'Giorgio_Chiellini.jpg', 'Juventus'),
(179, 'Federico Chiesa', 24, 'Italia', 'Federico_Chiesa.jpg', 'Juventus'),
(180, 'Alvaro Morata', 29, 'España', 'Alvaro_Morata.jpg', 'Juventus'),
(181, 'Dejan Kulusevski', 21, 'Suecia', 'Dejan_Kulusevski.jpg', 'Juventus'),
(182, 'Arthur Melo', 25, 'Brasil', 'Arthur_Melo.jpg', 'Juventus'),
(183, 'Danilo', 30, 'Brasil', 'Danilo.jpg', 'Juventus'),
(184, 'Matthijs de Ligt', 22, 'Países Bajos', 'Matthijs_de_Ligt.jpg', 'Juventus'),
(185, 'Weston McKennie', 23, 'Estados Unidos', 'Weston_McKennie.jpg', 'Juventus'),
(186, 'Wojciech Szczęsny', 31, 'Polonia', 'Wojciech_Szczesny.jpg', 'Juventus'),
(187, 'Zlatan Ibrahimović', 40, 'Suecia', 'Zlatan_Ibrahimovic.jpg', 'AC Milan'),
(188, 'Simon Kjaer', 32, 'Dinamarca', 'Simon_Kjaer.jpg', 'AC Milan'),
(189, 'Franck Kessié', 25, 'Costa de Marfil', 'Franck_Kessie.jpg', 'AC Milan'),
(190, 'Gianluigi Donnarumma', 22, 'Italia', 'Gianluigi_Donnarumma.jpg', 'AC Milan'),
(191, 'Olivier Giroud', 35, 'Francia', 'Olivier_Giroud.jpg', 'AC Milan'),
(192, 'Sandro Tonali', 21, 'Italia', 'Sandro_Tonali.jpg', 'AC Milan'),
(193, 'Theo Hernández', 24, 'Francia', 'Theo_Hernandez.jpg', 'AC Milan'),
(194, 'Alessio Romagnoli', 27, 'Italia', 'Alessio_Romagnoli.jpg', 'AC Milan'),
(195, 'Rafael Leão', 22, 'Portugal', 'Rafael_Leao.jpg', 'AC Milan'),
(196, 'Ante Rebić', 28, 'Croacia', 'Ante_Rebic.jpg', 'AC Milan'),
(197, 'Ismael Bennacer', 24, 'Argelia', 'Ismael_Bennacer.jpg', 'AC Milan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liga`
--

CREATE TABLE `liga` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ano` int(11) NOT NULL,
  `pais` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `informacion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `liga`
--

INSERT INTO `liga` (`id`, `nombre`, `ano`, `pais`, `informacion`, `imagen`) VALUES
(1, 'La Liga (Española)', 1928, 'España', 'Es una asociación deportiva de carácter privado, integrada por los 20 clubes/SAD de fútbol de LALIGA EA SPORTS y los 22 de LALIGA HYPERMOTION, responsable de la organización de las competiciones futbolísticas de carácter profesional y ámbito nacional en España.', 'La_Liga_Imagen.jpg'),
(2, 'Premier League', 1992, 'Inglaterra', 'La Premier League es la máxima categoría del fútbol inglés desde la temporada 1992-93. En ella se les permite la participación a clubes galeses y que integra a los 20 clubes participantes en esta primera división que disputan un total de 760 partidos a lo largo de toda la temporada.', 'Premier_League_Imagen.jpg'),
(3, 'Ligue 1', 1932, 'Francia', 'Comenzó a disputarse en 1932 bajo el nombre de Division nationale, cambiando en 1972 a Division 1 y desde 2002 recibe su nombre actual de Ligue 1. Está formada por dieciocho clubes, que disputan un total de 340 partidos (34 cada club), en cada temporada que se extiende entre los meses de agosto y mayo.', 'Ligue_1_Imagen.jpg'),
(4, 'Bundesliga', 1963, 'Alemania', 'A finales de agosto de 1963 comenzó oficialmente la Bundesliga con 16 equipos seleccionados de las antiguas Oberligas. Los equipos fueron escogidos por diversos criterios como su historia y tradición, salud financiera e importancia geográfica. En la temporada inaugural, la 1963/64, el 1. FC Köln fue el encargado de conquistar por primera vez la Meisterschale o Ensaladera del Campeón.', 'Bundesliga_Imagen.jpg'),
(5, 'Serie A', 1929, 'Italia', 'Comenzó a disputarse en 1929 y desde entonces se viene celebrando sin interrupciones, con la excepción del período entre 1943 y 1945 por la Segunda Guerra Mundial. La competición es sucesora de los Campeonatos Italianos nacionales surgidos en 1898, disputados hasta 1929, en que se crea el vigente formato unificado.', 'Serie_A_Imagen.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(34, 'sergio', '$2y$10$yxUU1mCK3xfNZerBddUo5O8NEPgQ3v9QutWu9YaqmwDKSRoLmWTqu'),
(35, 'david', '$2y$10$Y87AG..EdmT66bgi7KsdLevTDETMsvvgKWVWQKXhpvJ7jUkHMdpcu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT de la tabla `liga`
--
ALTER TABLE `liga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
