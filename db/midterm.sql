-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 07:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midterm`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_event`
--

CREATE TABLE `my_event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `location` varchar(256) COLLATE utf8_bin NOT NULL,
  `promo_picture` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'path to picture',
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` date NOT NULL,
  `organizer_id` int(11) NOT NULL DEFAULT '0' COMMENT '0=unknown organizer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `my_event`
--

INSERT INTO `my_event` (`id`, `title`, `description`, `start_date`, `start_time`, `end_date`, `end_time`, `location`, `promo_picture`, `create_date`, `deadline`, `organizer_id`) VALUES
(1, 'Printing & Packaging Expo 2019', 'Printing and Packaging Expo 2019 (PT Pack), the 2nd edition of Thailand’s most advanced printing and packaging exhibition, will be held on March 29 to April 1, 2019 at Hall 11-12 of IMPACT Exhibition Center, Muang Thong Thani, Thailand. It offers bigger opportunities to success, embracing wider markets for printing and packaging, and providing excellent services to the industries. Advanced technologies, equipment, processes and services, seminars and workshops in the field of printing and packaging will be showcased in the exhibition. It will also gather larger number of local-international participants and worldwide visitors to increase business deals opportunities at PT Pack 2019.', '2019-03-29', '10:00:00', '2019-04-01', '20:00:00', 'IMPACT Arena, Exhibition and Convention Center, Muang Thong Thani Popular 3 Road Tambon Ban Mai, Nonthaburi 11120', 'promo_picture/printingexpo2019.jpg', '2019-02-06 11:01:16', '2019-03-27', 2),
(2, 'SEA Brew 2019', 'Bringing together brewers, owners, distributors and industry suppliers from across Asia for the latest innovations in ingredients, processes and equipment. Papers and workshops will be presented across 3 tracks (Brewery Operations, Ingredients and Distribution & Marketing) with the Trade Fair running concurrently.\r\n\r\nSEA Brew 2019 is THE networking event for the regions brewing industry and this year incorporates the Asia Beer Championship 2019 Awards Evening.', '2019-04-26', '10:00:00', '2019-04-30', '21:00:00', 'Berkeley Hotel 559 Ratchaprarop Rd, Khwaeng Makkasan, Khet Ratchathewi Krung Thep Maha Nakhon Bangkok, 10400', 'promo_picture/seabrew2019.jpg', '2019-02-06 11:10:17', '2019-04-23', 3),
(3, 'LaunchX Clubs Regional Demo Day - Asia Pacific', 'The Asia Pacific Regional Demo Day is an event hosted by teen entrepreneurs, for teen entrepreneurs. This event is an opportunity to: (1) celebrate the progress that LaunchX Clubs teams have made with their startups and (2) support them as they continue to grow their companies.\r\n\r\nLaunchX Clubs students have been building their startups since September—conducting market research, prototyping, iterating, selling, and developing business operations. At the Regional Demo Day, these innovative and creative teens will come together from across Asia Pacific to showcase their progress, receive feedback from a panel of experienced entrepreneurs, and build connections with their peers.', '2019-03-16', '09:00:00', '2019-03-16', '16:00:00', 'C asean, 10th Floor, CW Tower 90 Ratchadapisek Asia Pacific Bangkok, 10310', 'promo_picture/launchx.jpg', '2019-02-06 11:17:06', '2019-03-08', 4),
(4, 'Traders Fair 2019 - Thailand', 'Series of Fantastic Traders Fairs and Gala Nights (Financial Events) is going to take place in Thailand, Indonesia, Malaysia, Philippines and Singapore attracting the world of traders to one place during in one day. \r\n\r\nYou will have an opportunity to meet the best trading experts as well as the best trading companies, banks, money brokers from all around the world. Top speakers are going to make educational speeches in the Fair seminar halls. The Fair program is going to be full of entertainments, magic shows, lucky draws, fantastic prizes, live performances and music. You can make a reservation on the event webpage and get the access to the incredible world of trading for free.', '2019-02-22', '09:00:00', '2019-02-22', '16:00:00', 'Shangri-La Hotel, Bangkok 89 Soi Wat Suan Plu Khwaeng Bang Rak, Krung Thep Maha Nakhon 10500', 'promo_picture/traderfair2019.jpg', '2019-02-06 11:22:32', '2019-02-20', 2),
(5, 'BISP Seminar: Bangkok Air Quality', 'BISP is hosting the Bangkok Air Quality Seminar on February 13th and featuring a number of experts in the field. Topics discussed will include how to reliably monitor air quality levels, the health impacts of prolonged exposure, and measures schools and parents can take to reduce the impact of air pollution on our children and community members.', '2019-02-13', '10:00:00', '2019-02-13', '14:00:00', 'KU Home, Kasetsart University Chatuchak Bangkok, Thailand', 'promo_picture/airquality.jpg', '2019-02-06 11:25:41', '2019-02-11', 4),
(6, 'American Education Event in Bangkok, Thailand', 'The American Education Expo is the best place to find the perfect U.S. College or University for you. At the Event, you will get the chance to speak face-to-face with admissions officers from some of the top Colleges and Universities and get the answers you need about the admission process, tuition fees, and merit-based scholarship opportunities. The Expo is FREE of charge for students interested in undergraduate, graduate, and English programs. Parents are also encouraged to come and meet the College representatives. You only need one ticket per family.', '2019-03-30', '09:00:00', '2019-03-30', '15:00:00', 'Anantara Siam Bangkok 155 Rajadamri Road Bangkok', 'promo_picture/aedu.jpg', '2019-02-06 11:27:43', '2019-03-25', 4),
(7, 'Serviced Apartment Summit Asia 2019', 'International Hospitality Media is the premier specialist in online publishing; conference, exhibition and events, and advisory services for niche growth sectors of the hospitality industry. The company publishes three leading b2b hospitality websites - BoutiqueHotelNews.com; ServicedApartmentNews.com; and ShortTermRentalz.com which keep their respective sectors up to speed with news,comment and opinion.', '2019-02-21', '14:00:00', '2019-02-22', '17:00:00', 'Amari Watergate Bangkok 847 Phetchaburi Road Makkasan, Krung Thep Maha Nakhon 10400', 'promo_picture/sasummit2019.jpg', '2019-02-06 11:30:09', '2019-02-15', 5),
(8, 'Siam Sinfonietta plays Mahler', 'Thailand\'s acclaimed youth orchestra, the Siam Sinfonietta, is well known around the world, having won five international main awards, including three at festivals in Carnegie Hall. It\'s particularly known for its interpretations of Mahler symphonies, having performed them in the Berlin Konzerthaus, the Musikverein Vienna, the Prinz Regententheater Munich as well as on numerous occasions at the Thailand Cultural Center and Suryadhep Hall.', '2019-02-17', '16:00:00', '2019-02-17', '18:00:00', 'Main Hall Thailand Cultural Center Thanon Wattanatham Bangkok 10310', 'promo_picture/sinfo.jpg', '2019-02-06 11:35:59', '2019-02-13', 1),
(9, 'Sunset Sessions x Clay Feline', 'The Hive Thonglor presents: Sunset Sessions. Join us for a beautiful sunset concert where Clay Feline will be performing on our grass rooftop.\r\n\r\nClay Feline is a music source born in the Blues and Folk, raised on bossa nova and bent to shape by dry humor.', '2019-02-22', '18:00:00', '2019-02-22', '21:00:00', 'The Hive 46/9 Soi Sukhumvit 49 Khwaeng Khlong Tan Nuea, Krung Thep Maha Nakhon 10110', 'promo_picture/sunset.jpg', '2019-02-06 12:31:31', '2019-02-20', 1),
(10, 'SALOME - the Thailand Premiere', 'Thailand\'s first production of a Richard Strauss opera is the exotic and sensual SALOME, starring the amazing Cassandra Black, last seen in Bangkok as a singing statue in the opera \"Sama - the Faithful Son.\"\r\n\r\nCassandra has been in training for six months for this athletic role (which includes performing the infamous Dance of the Seven Veils). Strauss\'s biblical epic set in the sleazy court of Herod Antipas, with words by Oscar Wilde, was considered shocking in its time but is today one of the great classics of the repertoire.\r\n\r\nOne performance only! International opera lovers are already signing up from as far away as Poland, England, and the United States!', '2019-04-28', '17:00:00', '2019-04-28', '20:00:00', 'Main Hall Thailand Cultural Center, Thanon Wattanatham Bangkok 10310', 'promo_picture/salome.jpg', '2019-02-06 12:34:47', '2019-04-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `organization_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(256) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`id`, `first_name`, `last_name`, `organization_name`, `address`, `phone`, `email`, `password`, `register_date`, `activated`) VALUES
(1, 'Paitoon', 'Porntrakoon', 'Opera Siam', '34 Soi Piphat Silom Soi 2 Bangkok 10502', '029633236', 'opera@siam.com', '0000', '2019-02-06 10:58:42', 1),
(2, 'Somchai', 'Jaidee', '121 Creation Co., Ltd.', '981/153 Bangkhuntien-Chaytalay Rd., Bangkhuntien  Bangkok 10150', '0296007956', '121@creation.com', '0000', '2019-02-06 11:07:50', 1),
(3, 'John', 'Adams', 'Organiser Evolve Beverages Pte Ltd', '2535 Sukhumvit 99 Road Thawi Watthana, Krung Thep Maha Nakhon 10170', '0812223345', 'eb@brew.com', '0000', '2019-02-06 11:13:35', 1),
(4, 'Lily', 'Tomlin', 'British International School, Phuket', '59 Moo 2, Thepkrasattri Road T. Koh Kaew, A. Muang Phuket 83000, Thailand', '076835555', 'bisp@school.com', '0000', '2019-02-06 11:20:18', 1),
(5, 'Neil', 'Young', 'International Hospitality Media Limited', '80 Phatanavej 12 Pridi Banomyong 14 Sukhumvit 71 Bangkok, Thailand', '0279017157', 'ihml@hospital.com', '0000', '2019-02-06 11:32:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `my_event_id` int(11) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reference_code` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `first_name`, `last_name`, `email`, `phone`, `my_event_id`, `register_date`, `reference_code`) VALUES
(1, 'Bob', 'Woodward', 'bob@wood.com', '0812345678', 6, '2019-02-06 13:01:09', '1112233'),
(2, 'Lin', 'Yutang', 'lin@yutang.com', '0811223044', 6, '2019-02-06 13:01:09', '1112234'),
(3, 'Zig', 'Ziglar', 'zig@ziglar.com', '0882224411', 7, '2019-02-06 13:02:33', '1220012'),
(4, 'Emile', 'Zola', 'emile@zola.com', '0823014567', 7, '2019-02-06 13:02:33', '1034892'),
(5, 'Jack', 'Vance', 'jack@vance.com', '0856123478', 8, '2019-02-06 13:03:12', '1340168'),
(6, 'Simon', 'Travaglia', 'simon@trav.com', '0874235698', 9, '2019-02-06 13:04:27', '17645201'),
(7, 'Frank', 'Tyger', 'frank@tyger.com', '084659781', 10, '2019-02-06 13:04:27', '34521029'),
(8, 'Lucy', 'Stone', 'lucy@stone.com', '0834567821', 6, '2019-02-06 13:06:14', '86451270'),
(9, 'Allen', 'Sarven', 'allen@sarven.com', '0824567896', 8, '2019-02-06 13:06:14', '56478912'),
(10, 'Richard', 'Rumbold', 'richard@rumbold.com', '094563127', 10, '2019-02-06 13:06:52', '3334578');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_event`
--
ALTER TABLE `my_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_event`
--
ALTER TABLE `my_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
