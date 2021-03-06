-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 05:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `map` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `company`, `map`) VALUES
(1, 'Seremban - Palm Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3244064800083!2d101.92001661475626!3d2.7196574980186807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cddd62b9887c67%3A0xe3ebddc361b215aa!2sPalm%20Mall!5e0!3m2!1sen!2smy!4v1575892219928!5m2!1sen!2smy'),
(2, 'Kuala Lumpur - Mid Valley Megamall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.912468945913!2d101.67565531425853!3d3.117854997729675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4955bfa65227%3A0x84a374fe8e708294!2sMid%20Valley%20Megamall!5e0!3m2!1sen!2smy!4v1575892289337!5m2!1sen!2smy'),
(3, 'Kuala Lumpur - NU Sentral', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8553494668263!2d101.68438041425854!3d3.132899897718752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c1b5559505%3A0xdf49d38aebb6ae7f!2sNU%20Sentral!5e0!3m2!1sen!2smy!4v1575892320073!5m2!1sen!2smy'),
(4, 'Kuala Lumpur - Berjaya Time Square', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.9099180663732!2d101.70932535789356!3d3.1422175994280046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362881687fbd%3A0xea1831fe06e12221!2sBerjaya%20Times%20Square!5e0!3m2!1sen!2smy!4v1575892381613!5m2!1sen!2smy'),
(5, 'Kuala Lumpur - Quill City Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7522322693853!2d101.69808011425867!3d3.1598790976991844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3628d5255e71%3A0xa04ebf35e90ba917!2sQuill%20City%20Mall%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1575892419995!5m2!1sen!2smy'),
(6, 'Kuala Lumpur - Cheras Leisure Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0142425275985!2d101.74005421475717!3d3.090867197749253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc351d5b08519b%3A0x441eaf4af761bbc6!2sCheras%20LeisureMall!5e0!3m2!1sen!2smy!4v1575893256414!5m2!1sen!2smy'),
(7, 'Kuala Lumpur - EkoCheras Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0054309909688!2d101.73668701425844!3d3.093213097747548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc35832e703509%3A0x2d192963b3f10dc9!2sGSC%20EkoCheras%20Mall!5e0!3m2!1sen!2smy!4v1575893227621!5m2!1sen!2smy'),
(8, 'Kuala Lumpur - MyTown', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8473353363274!2d101.72066831425863!3d3.135004997717248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc363c3c2ba52d%3A0xfd0a2dc38d54cda1!2sGSC%20MyTown%20Shopping%20Centre!5e0!3m2!1sen!2smy!4v1575893183051!5m2!1sen!2smy'),
(9, 'Kuala Lumpur - Melawati', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.5600247453294!2d101.7462294142588!3d3.209562897663153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc384a67b2193f%3A0xb2ee893947d0e6f5!2sGSC%20Melawati%20Mall!5e0!3m2!1sen!2smy!4v1575893151573!5m2!1sen!2smy'),
(10, 'Petaling Jaya - 1 Utama (New Wing)', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.8960314055932!2d101.6145324579257!3d3.1494853494266875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4ed29f2fe42f%3A0xfd81eb3a4d9eb904!2s1%20Utama%20Shopping%20Centre!5e0!3m2!1sen!2smy!4v1575893101322!5m2!1sen!2smy'),
(11, 'Petaling Jaya - 3 Damansara (Tropicana City Mall)', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.864138605508!2d101.62460921425858!3d3.13058959772044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc494877bddf41%3A0xa717bd1365699ceb!2s3%20Damansara!5e0!3m2!1sen!2smy!4v1575893072006!5m2!1sen!2smy'),
(12, 'Petaling Jaya - Paradigm Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.960609648599!2d101.59377411425848!3d3.105118497738909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c18494a930d%3A0x75bc875d06699584!2sParadigm%20Mall!5e0!3m2!1sen!2smy!4v1575892986569!5m2!1sen!2smy'),
(13, 'Puchong - IOI Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.0924011418906!2d101.61762115792564!3d3.045103299445615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4b58546e9f63%3A0x5e60400080208e75!2sGSC%20%40%20IOI%20Mall!5e0!3m2!1sen!2smy!4v1575893028287!5m2!1sen!2smy'),
(14, 'Kuala Lumpur - Pavillion', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.794338414011!2d101.71137161425862!3d3.148890497707159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3629b097d031%3A0x405091383428ead3!2sPavilion%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1575893004185!5m2!1sen!2smy'),
(15, 'Setia Alam - Setia City Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.944175924937!2d101.45802951425851!3d3.1094721977357573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc527fda8cf253%3A0x23b3558089a27274!2sSetia%20City%20Mall!5e0!3m2!1sen!2smy!4v1575892784849!5m2!1sen!2smy'),
(16, 'Klang - Klang Parade', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.1149509329066!2d101.4514240142584!3d3.063928097768789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc536da60e95db%3A0xa54c0fbf269759df!2sKlang%20Parade%2C%20Jalan%20Kelicap%2042%2C%20Kawasan%2017%2C%2041300%20Klang%2C%20Selangor!5e0!3m2!1sen!2smy!4v1575892767415!5m2!1sen!2smy'),
(17, 'Putrajaya - Alamanda', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.568616717161!2d101.70843631425804!3d2.939517797859061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdc9dfc608d945%3A0xf9cebccf83351f06!2sAlamanda%20Shopping%20Centre%2C%20Putrajaya.!5e0!3m2!1sen!2smy!4v1575892740545!5m2!1sen!2smy'),
(18, 'Putrajaya - IOI City Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.459836795548!2d101.71087521425814!3d2.969823497837074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdca0c21c76841%3A0x2c98384480140180!2sIOI%20City%20Mall!5e0!3m2!1sen!2smy!4v1575892665593!5m2!1sen!2smy'),
(19, 'Penang - Gurney Plaza', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.86453983602!2d100.3072976142682!3d5.437534396056513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac30385605d6d%3A0x33c674011f2885aa!2sGurney%20Plaza!5e0!3m2!1sen!2smy!4v1575892646778!5m2!1sen!2smy'),
(20, 'Penang - Queensbay Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5465708706356!2d100.30441971426768!3d5.3331773961312905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac0f6419ddf33%3A0xfad4d772f2c85345!2sQueensbay%20Mall!5e0!3m2!1sen!2smy!4v1575892620817!5m2!1sen!2smy'),
(21, 'Sunway Carnival', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.120172601509!2d100.39602801426788!3d5.3986558960843345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac5cd86f88577%3A0x40225a1f74a9701c!2sSunway%20Carnival%20Mall!5e0!3m2!1sen!2smy!4v1575892571908!5m2!1sen!2smy'),
(22, 'Alor Setar - Aman Central', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0425999251447!2d100.36426851427204!3d6.124969695565124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b44b989a617a5%3A0xf4a1fe629aad4c76!2sAman%20Central!5e0!3m2!1sen!2smy!4v1575892544716!5m2!1sen!2smy'),
(23, 'Sg Petani - Amanjaya Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.2701136873575!2d100.50735411426949!3d5.674034995887187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b299fabc9980d%3A0xe1434c98b573b4d7!2sAmanjaya%20Central!5e0!3m2!1sen!2smy!4v1575892522577!5m2!1sen!2smy'),
(24, 'Ipoh - Ipoh Parade Mall', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9872156414644!2d101.08776536426407!3d4.596312546660854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caec611a9d9c41%3A0xa1f32854c621f2a8!2sGSC%20Cinemas%20(Ipoh%20Parade)!5e0!3m2!1sen!2smy!4v1575892486338!5m2!1sen!2smy'),
(25, 'Melaka - Dataran Pahlawan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.9040106638386!2d102.25029541425614!3d2.190056698403674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1f1e0e79b7485%3A0xb1f4d1ef5e1facc8!2sDataran%20Pahlawan%20Melaka%20Megamall!5e0!3m2!1sen!2smy!4v1575892448845!5m2!1sen!2smy'),
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
(1, 'A', 50),
(2, 'B', 50);

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
  `hall_id` int(5) NOT NULL,
  `reserve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `row`, `hall_id`, `reserve`) VALUES
('A1', 'A', 1, 'yes'),
('A10', 'A', 1, 'yes'),
('A11', 'A', 1, 'yes'),
('A12', 'A', 1, ''),
('A13', 'A', 1, 'yes'),
('A14', 'A', 1, ''),
('A15', 'A', 1, 'yes'),
('A16', 'A', 1, 'yes'),
('A17', 'A', 1, 'yes'),
('A18', 'A', 1, 'yes'),
('A19', 'A', 1, 'yes'),
('A2', 'A', 1, 'yes'),
('A20', 'A', 1, 'yes'),
('A21', 'A', 1, 'yes'),
('A22', 'A', 1, ''),
('A23', 'A', 1, ''),
('A24', 'A', 1, 'yes'),
('A25', 'A', 1, 'yes'),
('A26', 'A', 1, 'yes'),
('A27', 'A', 1, 'yes'),
('A28', 'A', 1, 'yes'),
('A29', 'A', 1, 'yes'),
('A3', 'A', 1, 'yes'),
('A30', 'A', 1, 'yes'),
('A31', 'A', 1, 'yes'),
('A32', '4', 1, 'yes'),
('A33', '4', 1, 'yes'),
('A34', '4', 1, 'yes'),
('A35', '4', 1, 'yes'),
('A36', '4', 1, 'yes'),
('A37', '4', 1, 'yes'),
('A38', '4', 1, 'yes'),
('A39', '4', 1, 'yes'),
('A4', 'A', 1, 'yes'),
('A40', '4', 1, 'yes'),
('A41', '5', 1, 'yes'),
('A42', '5', 1, 'yes'),
('A43', '5', 1, 'yes'),
('A44', '5', 1, 'yes'),
('A45', '5', 1, 'yes'),
('A46', '5', 1, 'yes'),
('A47', '5', 1, 'yes'),
('A48', '5', 1, 'yes'),
('A49', '5', 1, 'yes'),
('A5', 'A', 1, 'yes'),
('A50', '5', 1, 'yes'),
('A6', 'A', 1, 'yes'),
('A7', 'A', 1, 'yes'),
('A8', 'A', 1, 'yes'),
('A9', 'A', 1, 'yes'),
('B1', '1', 2, ''),
('B10', '1', 2, ''),
('B11', '2', 2, ''),
('B12', '2', 2, ''),
('B13', '2', 2, ''),
('B14', '2', 2, ''),
('B15', '2', 2, ''),
('B16', '2', 2, ''),
('B17', '2', 2, ''),
('B18', '2', 2, ''),
('B19', '2', 2, ''),
('B2', '1', 2, ''),
('B20', '2', 2, ''),
('B21', '3', 2, ''),
('B22', '3', 2, ''),
('B23', '3', 2, ''),
('B24', '3', 2, ''),
('B25', '3', 2, ''),
('B26', '3', 2, ''),
('B27', '3', 2, ''),
('B28', '3', 2, ''),
('B29', '3', 2, ''),
('B3', '1', 2, ''),
('B30', '3', 2, ''),
('B31', '4', 2, ''),
('B32', '4', 2, ''),
('B33', '4', 2, ''),
('B34', '4', 2, ''),
('B35', '4', 2, ''),
('B36', '4', 2, ''),
('B37', '4', 2, ''),
('B38', '4', 2, ''),
('B39', '4', 2, ''),
('B4', '1', 2, ''),
('B40', '4', 2, ''),
('B41', '5', 2, ''),
('B42', '5', 2, ''),
('B43', '5', 2, ''),
('B44', '5', 2, ''),
('B45', '5', 2, ''),
('B46', '5', 2, ''),
('B47', '5', 2, ''),
('B48', '5', 2, ''),
('B49', '5', 2, ''),
('B5', '1', 2, ''),
('B50', '5', 2, ''),
('B6', '1', 2, ''),
('B7', '1', 2, ''),
('B8', '1', 2, ''),
('B9', '1', 2, '');

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
(4, '2019-12-06', '12:00 AM', 2, 1, 2),
(5, '2019-12-07', '9:00 PM', 3, 1, 2),
(6, '2019-12-08', '10:30 AM', 2, 2, 17);

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
(1, '15.00', 25, 1);

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
(3, 'pijang97', 'pijang97', '$2y$10$/euZFEs6R.bRv9GHnNgO7OVYkDz2Bni/iVIxFuHeRx2.CJXY./y1e', '0192351520', 'pijang@gmail.com', 'customer'),
(4, 'Hairul', 'Hairul97', '$2y$10$/euZFEs6R.bRv9GHnNgO7OVYkDz2Bni/iVIxFuHeRx2.CJXY./y1e', '013-65431234', 'hairul97@gmail.com', 'users');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
