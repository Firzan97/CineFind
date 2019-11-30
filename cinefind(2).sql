-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 05:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinefind`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(5) NOT NULL,
  `company` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `company`, `map`) VALUES
(1, 'Seremban - Palm Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3244064800083!2d101.92001661475626!3d2.7196574980186807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cddd62b9887c67%3A0xe3ebddc361b215aa!2sPalm%20Mall!5e0!3m2!1sen!2smy!4v1575104546474!5m2!1sen!2smy');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `totalseat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `totalseat`) VALUES
(1, 'A', 90),
(2, 'B', 90);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `budget` text NOT NULL,
  `rating` text NOT NULL,
  `description` text NOT NULL,
  `genre` text NOT NULL,
  `length` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `budget`, `rating`, `description`, `genre`, `length`, `image`) VALUES
(2, 'Ejen Ali The Movie', 'RM6.5 Million', '8.8/10', 'Ejen Ali is embracing his role as a MATA spy and the only master of IRIS now. But unknown to Ali, MATA is developing new improved version of IRIS, the IRIS Neo. When IRIS Neo starts being used for all agents, Ali begins to question his usefulness to MATA. He is approached by a mysterious person named Niki who claims to know about his missing parents’ whereabouts. Risking his loyalty to MATA, Ejen Ali will now embark on thrilling chase to unravel those mysterious links.', 'Animation', '2 Hours 15 Minutes', '/img/ejenali.jpg'),
(3, 'Joker', '$55–70 million', '8.7/10', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he\'s part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', 'Drama/Thriller', ' 2h 2m', '/img/joker.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` varchar(5) NOT NULL,
  `row` varchar(5) NOT NULL,
  `hall_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `row`, `hall_id`) VALUES
('A1', 'A', 1),
('A10', 'A', 1),
('A11', 'A', 1),
('A12', 'A', 1),
('A13', 'A', 1),
('A14', 'A', 1),
('A15', 'A', 1),
('A16', 'A', 1),
('A17', 'A', 1),
('A18', 'A', 1),
('A19', 'A', 1),
('A2', 'A', 1),
('A20', 'A', 1),
('A21', 'A', 1),
('A22', 'A', 1),
('A23', 'A', 1),
('A24', 'A', 1),
('A25', 'A', 1),
('A26', 'A', 1),
('A27', 'A', 1),
('A28', 'A', 1),
('A29', 'A', 1),
('A3', 'A', 1),
('A30', 'A', 1),
('A31', 'A', 1),
('A4', 'A', 1),
('A5', 'A', 1),
('A6', 'A', 1),
('A7', 'A', 1),
('A8', 'A', 1),
('A9', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `screentime` text NOT NULL,
  `movie_id` int(20) NOT NULL,
  `hall_id` int(20) NOT NULL,
  `cinema_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`id`, `date`, `screentime`, `movie_id`, `hall_id`, `cinema_id`) VALUES
(1, '2019-12-06', '10:30 AM', 2, 1, 1),
(2, '2019-12-06', '12:00 AM', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(5) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `showtime_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `price`, `quantity`, `showtime_id`) VALUES
(1, '15.00', 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `phone`, `email`, `role`) VALUES
(1, 'delle ali', 'alazwan7@gmail.com', 'abc1234', '0192121', 'alazwan7@yahoo.com', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_seat_hall` (`hall_id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_showtimes_movie` (`movie_id`),
  ADD KEY `fk_showtimes_hall` (`hall_id`),
  ADD KEY `fk_showtimes_cinema` (`cinema_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ticket_showtime` (`showtime_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `fk_seat_hall` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`);

--
-- Constraints for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD CONSTRAINT `fk_showtimes_cinema` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`),
  ADD CONSTRAINT `fk_showtimes_hall` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`),
  ADD CONSTRAINT `fk_showtimes_movie` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_ticket_showtime` FOREIGN KEY (`showtime_id`) REFERENCES `showtimes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
