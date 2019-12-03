-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 06:33 AM
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
(1, 'Seremban - Palm Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3244064800083!2d101.92001661475626!3d2.7196574980186807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cddd62b9887c67%3A0xe3ebddc361b215aa!2sPalm%20Mall!5e0!3m2!1sen!2smy!4v1575104546474!5m2!1sen!2smy'),
(2, 'Kuala Lumpur - Mid Valley Megamall', ''),
(3, 'Kuala Lumpur - NU Sentral', ''),
(4, 'Kuala Lumpur - Berjaya Time Square', ''),
(5, 'Kuala Lumpur - Quill City Mall', ''),
(6, 'Kuala Lumpur - Cheras Leisure Mall', ''),
(7, 'Kuala Lumpur - EkoCheras Mall', ''),
(8, 'Kuala Lumpur - MyTown', ''),
(9, 'Kuala Lumpur - Melawati', ''),
(10, 'Petaling Jaya - 1 Utama (New Wing)', ''),
(11, 'Petaling Jaya - 3 Damansara (Tropicana City Mall)', ''),
(12, 'Petaling Jaya - Paradigm Mall', ''),
(13, 'Puchong - IOI Mall', ''),
(14, 'Kuala Lumpur - Pavillion', ''),
(15, 'Setia Alam - Setia City Mall', ''),
(16, 'Klang - Klang Parade', ''),
(17, 'Putrajaya - Alamanda', ''),
(18, 'Putrajaya - IOI City Mall', ''),
(19, 'Penang - Gurney Plaza', ''),
(20, 'Penang - Queensbay Mall', ''),
(21, 'Sunway Carnival', ''),
(22, 'Alor Setar - Aman Central', ''),
(23, 'Sg Petani - Amanjaya Mall', ''),
(24, 'Ipoh - Ipoh Parade Mall', ''),
(25, 'Melaka - Dataran Pahlawan', ''),
(26, 'Subang Jaya - Summit USJ', '');

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
(3, 'Joker', '$55–70 million', '8.7/10', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he\'s part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', 'Drama/Thriller', ' 2h 2m', '/img/joker.jpg'),
(4, 'Doctor Sleep ', '$45–55 million', '7.6/10', 'Years following the events of \"The Shining,\" a now-adult Dan Torrance must protect a young girl with similar powers from a cult known as The True Knot, who prey on children with powers to remain immortal.', 'Drama, Fantasy, Horror ', '2 Hours 32 Minutes ', '/img/doctor-sleep.jpg'),
(5, 'Ford vs Ferrari', '$97.6 million', '8.3/10', 'American car designer Carroll Shelby and driver Ken Miles battle corporate interference, the laws of physics and their own personal demons to build a revolutionary race car for Ford and challenge Ferrari at the 24 Hours of Le Mans in 1966.', 'Action, Biography, Drama ', ' 2 Hours 32 minutes', '/img/fordvsferrari.jpg'),
(6, 'Wira', 'RM8 million', '6.6/10', 'After leaving the military, Hassan returns home to help his brother settle a debt, to do so they must team up to fight the organiser\'s sons.', ' Action ', '1 hour 49 minutes', '/img/wira.jpg'),
(7, 'Pusaka', 'RM 2 Million', '8/10', 'Skilled cop Inspector Nuar discovers twins, Balqis and Qistina, mysteriously locked up in an abandoned house. He suddenly starts suffering a series of unexplained hauntings, and individuals linked to the case begin dying one by one. Nuar must now race against time to solve the dark mystery behind the two girls before it\'s too late.', 'Horror', '1 hour 34 minutes', '/img/pusaka.jpg'),
(8, 'Frozen II', '$33 million', '7.3/10', 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.', 'Animation, Adventure, Comedy ', '1 hour 43 minutes ', '/img/frozen2.jpg'),
(9, 'Last Christmas', '30 million USD', '6.6/10', 'Kate is a young woman subscribed to bad decisions. Her last date with disaster? That of having accepted to work as Santa\'s elf for a department store. However, she meets Tom there. Her life takes a new turn. For Kate, it seems too good to be true.', ' Comedy, Drama, Romance ', '1 hour 43 minutes ', '/img/lastchristmas.jpg'),
(10, 'Enai Noki Paayum Thota', 'Rs 2.1 million', '7.1/10', 'An ordinary college student falls in love with an actress and marries her, but things start to change bitter in their life.', ' Action, Drama, Thriller ', '2 hours 33 minutes', '/img/ennai2.jpg'),
(11, 'Charlie\'s Angels', '75 million USD', '3.9/10', 'When a young systems engineer blows the whistle on a dangerous technology, Charlie\'s Angels are called into action, putting their lives on the line to protect us all.', 'Action, Adventure, Comedy ', ' 1 hour 58 minutes', '/img/charangels1.jpg'),
(12, 'Better Days', '2.5 million yuan', '7.5/10', 'A bullied teenage girl forms an unlikely friendship with a mysterious young man who protects her from her assailants, all while she copes with the pressures of her final examinations.', 'Drama, Romance ', '2 hours 15 minutes ', '/img/betterday.jpg'),
(13, 'Knives Out ', '40 million USD', '8.1/10', 'A detective investigates the death of a patriarch of an eccentric, combative family.', 'Comedy, Crime, Drama ', '2 hours 10 minutes ', '/img/knive.jpg'),
(14, 'Gemini Man', '$138 million', '5.7/10', 'An over-the-hill hitman faces off against a younger clone of himself.', 'Action, Drama, Sci-Fi ', '1 hour 57 minutes ', '/img/gemini.jpg'),
(15, 'Maleficent: Mistress of Evil', '185 million USD', '7.0/10', 'Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies, and dark new forces at play.', 'Adventure, Family, Fantasy ', '1 hour 59 minutes ', '/img/malef.jpg'),
(16, 'Return of the Devil\'s Child', 'rp 160 million', '6.6/10', 'Rama, Garin, Farel, Quincy and Celsi survive from the spirit terror at the Ayunan Island resort which harbored a terrible history of the slaughter of a family and resort employees. Rama is frantic: her lover is in a mental hospital, the body of Hana, his sister, and Fira have not been found. Rama returns to Ayunan Island to look for them. But obstacles lay ahead.', 'Horror ', '1 hour 24 minutes', '/img/kembali.jpg'),
(17, 'Midway', '59.5 million USD', '6.9/10', 'The story of the Battle of Midway, told by the leaders and the sailors who fought it.', 'Action, Drama, History ', ' 2 hours 18 minutes', '/img/midway.jpg'),
(18, 'Guilt By Design', '120 million yuan', '6.8/10', 'The film centers around a juror on a high-profile case who is blackmailed into fixing the verdict after his daughter is kidnapped.', 'Action, Crime ', '1 hour 33 minutes ', '/img/guilt.jpg'),
(19, 'One Piece: Stampede', '50 million USD', '8.2/10', 'Pirates from around the world gather at the Pirates Expo to join the hunt for Gol D. Roger\'s lost treasure.', 'Animation, Action, Adventure', '1 hour 41 minutes', '/img/onep.jpg'),
(20, 'Zombieland: Double Tap', '$42–48 million', '7.2/10', 'Columbus, Tallahassee, Wichita, and Little Rock move to the American heartland as they face off against evolved zombies, fellow survivors, and the growing pains of the snarky makeshift family.', 'Action, Comedy, Horror ', '1 hour 39 minutes ', '/img/zombie.jpg'),
(21, 'The Addams Family', '40 million USD', '5.9/10', 'The eccentrically macabre family moves to a bland suburb where Wednesday Addams\' friendship with the daughter of a hostile and conformist local reality show host exacerbates conflict between the families.', 'Animation, Comedy, Family ', '1 hour 26 minutes ', '/img/addams.jpg');

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
(2, '2019-12-06', '12:00 AM', 2, 1, 1),
(3, '2019-12-06', '10:30 AM', 2, 1, 2),
(4, '2019-12-06', '12:00 AM', 2, 1, 2);

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
(2, 'alazwan', 'alazwan97', '$2y$10$2.UkOzzllD52d91NwcLeOuhK4g8ZuiF5Oq2i3JC/P4EfZJhJ.GTAq', '0192351520', 'alazwan@gmail.com', 'customer'),
(3, 'pijang', 'pijang97', '$2y$10$/euZFEs6R.bRv9GHnNgO7OVYkDz2Bni/iVIxFuHeRx2.CJXY./y1e', '0192351520', 'pijang@gmail.com', 'customer');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
