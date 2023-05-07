-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 11:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betmystro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bundesliga_wk1`
--

CREATE TABLE `bundesliga_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bundesliga_wk1`
--

INSERT INTO `bundesliga_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'FRIDAY 17th', '', '', '', '', ''),
('19:30', 'FC Augsburg', '', '', 'Wolfsburg', 'Over 1.5 goals', '60'),
('', '', '', '', '', '', ''),
('', 'SATURDAY 18th', '', '', '', '', ''),
('14:30', 'Bochum', '', '', 'SC Freiburg', 'Over 1.5 goals', '90'),
('14:30', 'M\'gladbach', '', '', 'Bayern Munich', 'Away Over 0.5', '60'),
('14:30', 'Stuttgart', '', '', 'Cologne', 'Over 1.5', '50'),
('14:30', 'Wolfsburg', '', '', 'RB Leipzig', 'Over 1.5 goals', '55'),
('17:30', 'E. Frankfurt', '', '', 'W. Bremen', '2 or Over 2.5', '50'),
('', '', '', '', '', '', ''),
('', 'SUNDAY 19th', '', '', '', '', ''),
('14:30', 'Union Berlin', '', '', 'Shalke 04', 'X2', '50'),
('16:30', 'B. Dortmund', '', '', 'Hertha Berlin', 'Over 1.5', '90'),
('18:30', 'B. leverkusen', '', '', 'Mainz', 'Over 1.5', '70');

-- --------------------------------------------------------

--
-- Table structure for table `epl_wk1`
--

CREATE TABLE `epl_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `epl_wk1`
--

INSERT INTO `epl_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'Wednesday 15th', '', '', '', '', ''),
('19:30', 'Arsenal', '', '', 'Man City', 'Over 2.5 goals', '70'),
('', '', '', '', '', '', ''),
('', 'Saturday 18th', '', '', '', '', ''),
('12:30', 'Aston Villa', '', '', 'Arsenal', 'X2', '60'),
('15:00', 'Brentford', '', '', 'Crystal Palace', '1X', '50'),
('15:00', 'Brighton', '', '', 'Fulham', 'Over 1.5 goals', '50'),
('15:00', 'Chelsea', '', '', 'Southampton', '1', '50'),
('15:00', 'Everton', '', '', 'Leeds Utd', 'Corner Over 8.5', '80'),
('17:30', 'Nottingham', '', '', 'Man City', 'X2', '50'),
('14:00', 'Wolves', '', '', 'Bournemouth', 'Over 1.5', '70'),
('17:30', 'Newcastle', '', '', 'Liverpool', 'Corner Over 8.5', '90'),
('', '', '', '', '', '', ''),
('', 'Sunday 19th', '', '', '', '', ''),
('14:00', 'Man Utd', '', '', 'Leicester', 'Corner Over 8.5', '80'),
('16:30', 'Tottenham', '', '', 'West Ham', 'Over 1.5 goals', '80');

-- --------------------------------------------------------

--
-- Table structure for table `eredivisie_wk1`
--

CREATE TABLE `eredivisie_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eredivisie_wk1`
--

INSERT INTO `eredivisie_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'FRIDAY 17th', '', '', '', '', ''),
('19:00', 'RKC Waalwijk', '', '', 'Fortuna Sittard', 'Over 1.5 goals', '60'),
('', '', '', '', '', '', ''),
('', 'SATURDAY 18th', '', '', '', '', ''),
('17:45', 'FC Volendam', '', '', 'Vitesse Arnhem', 'Over 1.5 goals', '90'),
('19:00', 'Emmen', '', '', 'Emmen', 'Over 1.5 goals', '60'),
('20:00', 'Feyenoord', '', '', 'AZ Alkmaar', 'Over 1.5 goals', '50'),
('', '', '', '', '', '', ''),
('', 'SUNDAY 19th', '', '', '', '', ''),
('11:15', 'Cambuur', '', '', 'Heerenveen', 'Over 1.5 goals', '50'),
('13:30', 'FC Utretch', '', '', 'PSV Eindhoven', 'Over 1.5 goals', '90'),
('13:00', 'Go Ahead Eagles', '', '', 'FC Twente', 'Over 1.5 goals', '80'),
('15:45', 'Ajax', '', '', 'Sparta Rotterdam', 'Over 1.5 goals', '80'),
('19:00', 'Excelsior', '', '', 'NEC Nijmegen', 'Over 1.5 goals', '55');

-- --------------------------------------------------------

--
-- Table structure for table `laliga_wk1`
--

CREATE TABLE `laliga_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laliga_wk1`
--

INSERT INTO `laliga_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'SUNDAY 19th', '', '', '', '', ''),
('17:00', 'Atletico Madrid', '', '', 'Athletic Bilbao', 'Over 1.5 goals', '50'),
('17:00', 'Barcelona', '', '', 'Cadiz', 'Over 1.5 goals', '90'),
('17:00', 'Elche', '', '', 'Espanyol', 'Over 1.5 goals', '50'),
('17:00', 'Getafe', '', '', 'Valencia', 'Over 1.5 goals', '80'),
('17:00', 'Girona', '', '', 'Almeria', 'Over 1.5 goals', '90'),
('17:00', 'Osasuna', '', '', 'Real Madrid', 'Over 1.5 goals', '60'),
('17:00', 'Rayo Vallecano', '', '', 'Sevilla', 'Over 1.5 goals', '50'),
('17:00', 'Real Betis', '', '', 'Real Valladolid', 'Over 1.5 goals', '50'),
('17:00', 'Real Mallorca', '', '', 'Villarreal', 'Over 1.5 goals', '50'),
('17:00', 'Real Sociedad', '', '', 'Celta Vigo', 'Over 1.5 goals', '50');

-- --------------------------------------------------------

--
-- Table structure for table `ligue1_wk1`
--

CREATE TABLE `ligue1_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ligue1_wk1`
--

INSERT INTO `ligue1_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'FRIDAY 17th', '', '', '', '', ''),
('20:00', 'Auxerre', '', '', 'Lyon', 'Over 1.5 goals', '50'),
('', '', '', '', '', '', ''),
('', 'SUNDAY 18th', '', '', '', '', ''),
('16:00', 'Nice', '', '', 'Reims', 'Over 1.5 goals', '50'),
('20:00', 'Strasbourg', '', '', 'Angers', 'Over 1.5 goals', '90'),
('', '', '', '', '', '', ''),
('', 'SUNDAY 19th', '', '', '', '', ''),
('12:00', 'PSG', '', '', 'Lille', 'Over 1.5 goals', '50'),
('14:00', 'Brest', '', '', 'Monaco', 'Over 1.5 goals', '90'),
('14:00', 'Lorient', '', '', 'AC Ajaccio', 'Over 1.5 goals', '50'),
('14:00', 'Rennes', '', '', 'Clermont', 'Over 1.5 goals', '80'),
('14:00', 'Troyes', '', '', 'Montpellier', 'Over 1.5 goals', '90'),
('16:05', 'RC Lens', '', '', 'Nantes', 'Over 1.5 goals', '60'),
('19:45', 'Toulouse', '', '', 'Marseille', 'Over 1.5 goals', '50');

-- --------------------------------------------------------

--
-- Table structure for table `otherlgs_wk1`
--

CREATE TABLE `otherlgs_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otherlgs_wk1`
--

INSERT INTO `otherlgs_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'TUESDAY 14th', '', '', '', '', ''),
('20:00', 'AC Milan', '', '', 'Tottenham Hotspur', 'Over 1.5 goals', '90'),
('20:00', 'Paris Saint-Germain', '', '', 'Bayern Munich', 'Over 1.5 goals', '60'),
('', '', '', '', '', '', ''),
('', 'WEDNESDAY 15th', '', '', '', '', ''),
('20:00', 'Borussia Dortmund', '', '', 'Chelsea', 'Over 1.5 goals', '55'),
('20:00', 'Club Brugge', '', '', 'Benfica', 'Over 1.5 goals', '50'),
('', 'THURSDAY 16th', '', '', '', '', ''),
('17:45', 'Ajax', '', '', 'FC Union Berlin', 'Over 1.5 goals', '90'),
('17:45', 'Barcelona', '', '', 'Manchester Utd', 'Over 1.5 goals', '60'),
('17:45', 'Salzburg', '', '', 'Roma', 'Over 1.5 goals', '50'),
('20:00', 'Shakhtar Donetsk', '', '', 'Rennes', 'Over 1.5 goals', '55'),
('17:30', 'Juventus', '', '', 'Nantes', 'Over 1.5 goals', '50'),
('20:00', 'B. Leverkusen', '', '', 'AS Monaco', 'Over 1.5 goals', '50'),
('20:00', 'Sevilla', '', '', 'PSV Eindhoven', 'Over 1.5 goals', '80'),
('20:00', 'Porting Lisbon', '', '', 'FC Midtjylland', 'Over 1.5 goals', '50'),
('', 'THURSDAY 16th', '', '', '', '', ''),
('17:45', 'Bodo/Glimt', '', '', 'Lech Poznan', 'Over 1.5 goals', '90'),
('17:45', 'Braga', '', '', 'Fiorentina', 'Over 1.5 goals', '60'),
('17:45', 'Qarabag', '', '', 'AA Gent', 'Over 1.5 goals', '50'),
('17:45', 'Trabzonspor', '', '', 'Basel', 'Over 1.5 goals', '55'),
('20:00', 'AEK Larnaca', '', '', 'Dnipro-1', 'Over 1.5 goals', '50'),
('20:00', 'Lazio', '', '', 'Cluj', 'Over 1.5 goals', '50'),
('20:00', 'Ludogorets', '', '', 'Anderlecht', 'Over 1.5 goals', '80'),
('20:00', 'Sheriff Tiraspol', '', '', 'Partizan Belgrade', 'Over 1.5 goals', '50'),
('', 'WEDNESDAY 15TH', '', '', '', '', ''),
('19:45', 'Motherwell', '', '', 'St. Mirren', 'Over 1.5 goals', '50'),
('', '', '', '', '', '', ''),
('', 'SATURDAY 18th', '', '', '', '', ''),
('15:00', 'Celtic', '', '', 'Aberdeen', 'Over 7.5 Corners', '60'),
('15:00', 'Dundee Utd', '', '', 'St. Johnstone', 'Away Corner O-3.5', '60'),
('15:00', 'Hibernian', '', '', 'Kilmarnock', 'Over 1.5', '50'),
('15:00', 'Livingston', '', '', 'Ranger', '1X2 Corner - 1', '55'),
('15:00', 'St Mirren', '', '', 'Ross County', '1X2 Corner - 1', '50'),
('', 'SUNDAY 19th', '', '', '', '', ''),
('12:00', 'Motherwell', '', '', 'Hearts', 'X2', '50'),
('', 'SUNDAY 19th', '', '', '', '', ''),
('14:00', 'Benfica', '', '', 'Boavista', 'Over 1.5 goals', '80'),
('16:30', 'Chaves', '', '', 'Sporting Lisbon', 'Over 1.5', '80'),
('16:30', 'FC Porto', '', '', 'Rio Ave', 'Over 1.5', '80'),
('16:30', 'Sporting Braga', '', '', 'Arouca', 'Over 1.5', '80');

-- --------------------------------------------------------

--
-- Table structure for table `seriea_wk1`
--

CREATE TABLE `seriea_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seriea_wk1`
--

INSERT INTO `seriea_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'MONDAY 13th', '', '', '', '', ''),
('17:30', 'Verona', '', '', 'Salernitana', 'Over 1.5 goals', '90'),
('19:45', 'Sampdoria', '', '', 'Inter Milan', 'Over 1.5 goals', '90'),
('', '', '', '', '', '', ''),
('', 'FRIDAY 17th', '', '', '', '', ''),
('14:00', 'Sassuolo', '', '', 'Napoli', 'Over 1.5 goals', '90'),
('', '', '', '', '', '', ''),
('', 'SATURDAY 18th', '', '', '', '', ''),
('14:00', 'Sampdoria', '', '', 'Bologna', 'Over 1.5 goals', '90'),
('17:00', 'Monza', '', '', 'AC Milan', 'Over 1.5 goals', '60'),
('19:45', 'Inter Milan', '', '', 'Udinese', 'Over 1.5 goals', '50'),
('', '', '', '', '', '', ''),
('', 'SUNDAY 19th', '', '', '', '', ''),
('11:30', 'Atalanta', '', '', 'Lecce', 'Over 1.5 goals', '50'),
('14:00', 'Fiorentina', '', '', 'Empoli', 'Over 1.5 goals', '90'),
('14:00', 'Salernitana', '', '', 'Lazio', 'Over 1.5 goals', '50'),
('17:00', 'Spezia', '', '', 'Juventus', 'Over 1.5 goals', '80'),
('19:45', 'Roma', '', '', 'Verona', 'Over 1.5 goals', '80');

-- --------------------------------------------------------

--
-- Table structure for table `superpick_wk1`
--

CREATE TABLE `superpick_wk1` (
  `time` varchar(6) NOT NULL,
  `h_team` varchar(20) NOT NULL,
  `h_score` varchar(3) NOT NULL,
  `a_score` varchar(3) NOT NULL,
  `a_team` varchar(20) NOT NULL,
  `pick` varchar(20) NOT NULL,
  `probability` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superpick_wk1`
--

INSERT INTO `superpick_wk1` (`time`, `h_team`, `h_score`, `a_score`, `a_team`, `pick`, `probability`) VALUES
('', 'TUESDAY 14th', '', '', '', '', ''),
('20:00', 'Paris Saint-Germain', '', '', 'Bayern Munich', '1 or Over 2.5', '60'),
('', '', '', '', '', '', ''),
('', 'WEDNESDAY 15th', '', '', '', '', ''),
('20:00', 'Borussia Dortmund', '', '', 'Chelsea', 'Over 1.5 goals', '55'),
('20:00', 'Club Brugge', '', '', 'Benfica', 'X2', '50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
