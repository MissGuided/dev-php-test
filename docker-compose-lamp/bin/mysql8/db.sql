SET time_zone = "+00:00";
GRANT ALL ON *.* TO 'db-user'@'%' WITH GRANT OPTION;

--
-- Database: `customer_db`
--
USE customer_db;
-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`first_name`, `last_name`, `email`) VALUES
('Dodie','Starkes','Dodie.Starkes@example.local'),
('Art','Pirtle', 'Art.Pirtle@example.local'),
('Kathey','Candela', 'Kathey.Candela@example.local'),
('Helena','Prow', 'Helena.Prow@example.local'),
('Bunny','Santillo','Bunny.Santillo@example.local'),
('Gracia','Gessner', 'Gracia.Gessner@example.local'),
('Deon','Mosquera', 'Deon.Mosquera@example.local'),
('Stewart','Burnette', 'Stewart.Burnette@example.local'),
('Merideth','Freeland', 'Merideth.Freeland@example.local'),
('Ligia','Brannum', 'Ligia.Brannum@example.local');

COMMIT;

