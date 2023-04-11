-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Apr 2023 um 23:14
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `hiltonagency`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `agents`
--

INSERT INTO `agents` (`id`, `image`, `position`, `fullname`, `description`) VALUES
(1, 'images\\Aaron_Kirman.jpg', 'Director', 'Aaron Kirman', 'With over $7 Billion in luxury home sales,  Aaron Kirman represents the finest estates across the globe and was ranked in the top 5 luxury real estate agents in the US by the Wall Street Journal.'),
(2, 'images\\josh-altman.jpg', 'Top Agent', 'Josh Altman', 'Recognized as one of the most dynamic, high performing agents in the luxury home real estate market, Josh Altman consistently shatters records across the globe and ranks in the top 1% of real estate agents throughout the world. Having sold over $5 billion sold over the course of his young career puts him in a league of his own. In 2021, Josh sold a career high of $1.4 Billion in residential sales.?'),
(3, 'images\\josh-flagg.jpg', 'Top Agent', 'Josh Flagg', 'Josh Flagg is one of America\'s most successful and sought after luxury real estate agents, having completed more than two billion dollars in residential real estate sales in the past decade.'),
(4, 'images\\gomez.jpg', 'Top Agent', 'Dalton Gomez', 'More recently, he has represented significant sales including Richard Neutra\'s Tremaine House, Pierre Koenig\'s Case Study #21 and Craig Ellwood\'s Case Study #16. Along with Mr. Kirman, Dalton also represents the only Oscar Niemeyer House in North America and many other notable works by architects such as Rupolph Schindler, John Lautner, A. Quincy Jones, etc.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `blog_article`
--

CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `blog_article`
--

INSERT INTO `blog_article` (`id`, `image`, `title`, `date`, `description`) VALUES
(1, 'images\\manor.jpg', 'Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million', 'Posted on January 1, 2022 by Boyan Borisov', '<p class=\"fs-5 mb-4\">The last time the Spelling Manor changed hands was in 2019, when it sold to an undisclosed buyer for $119.75 million—the highest recorded residential sale ever for Los Angeles County at the time.\r\n						Fast-forward three years and the famed estate’s current price of $165 million wouldn’t come close to breaking the new California record set a year ago when venture capitalist Marc Andreessen paid $177 million for a property in Malibu.</p>\r\n<p class=\"fs-5 mb-4\">Still, the $165-million sticker price ranks as one of the highest in the country for a single-family residence.\r\n						Weighing in at more than 56,000 square feet, the French chateau-inspired estate was originally built for late TV producer Aaron Spelling and his widow, Candy Spelling. Sparing no expense, Candy Spelling customized the sprawling residence with a range of personalized amenity rooms, including a flower-cutting room, a film editing area behind the screen of the home’s movie theater and a wine and cheese room outfitted with Parisian-cafe style tables and chairs.\r\n						</p>\r\n<p class=\"fs-5 mb-4\">Prior to the record sale in 2019, the home was owned by Formula One heiress Petra Ecclestone, who had paid $85 million for the place in an all-cash deal.\r\n						During her residency, Ecclestone oversaw sweeping renovations, updating interiors to suit modern tastes and adding a beauty salon, an aquarium and a nightclub.</p>\r\n<h2 class=\"fw-bolder mb-4 mt-5\">About the manor</h2>\r\n<p class=\"fs-5 mb-4\">Covering well over an acre of livable space, the home features 27 bathrooms and 14 bedrooms, including the 7,500-square-foot primary suite.\r\n						Other points of interest include a French-door solarium, a formal dining room and a grand foyer featuring a 30-foot ceiling, as well as a game room, a bowling alley and a tanning room.\r\n						</p>\r\n<p class=\"fs-5 mb-4\">In an interview with Forbes last year, Ecclestone’s partner, real estate agent and lifestyle entrepreneur Sam Palmer, revealed that the 123-room, W-shaped mansion requires a staff of 50 people to keep the estate in working order.\r\n						A team of landscapers tends to grounds featuring rose gardens, citrus orchards and acres of lawn. In addition, the home’s many fountains, the statuary, koi ponds, swimming pool and sports courts all require regular maintenance.</p>'),
(2, 'images\\177 million.jpg', 'Billionaire Marc Andreessen buys Malibu mansion for $177 million, a California record', 'Posted on January 1, 2022 by Boyan Borisov', 'In a historic deal, billionaire venture capitalist Marc Andreessen has paid $177 million for a sprawling estate in Malibu. It’s the most ever paid for a home in California, shattering the previous record set by Jeff Bezos last year.The property makes the most of its space, squeezing in multiple guesthouses, guard houses, a swimming pool and box garden. Perched at the edge of the property, the main house designed by Scott Mitchell overlooks the ocean from multiple patios and terraces. A winding path descends to the beach.'),
(3, 'images\\hadid_estate.jpg', 'Mohamed Hadid’s Bel-Air mega-mansion is set for auction, then demolition', 'Posted on January 1, 2022 by Boyan Borisov', '?This house will last forever,? developer Mohamed Hadid once said about his 30,000-square-foot mega-mansion perched in the hills of Bel-Air. ?Bel-Air will fall before this will.?They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.'),
(4, 'images\\kanye-mansion2.jpeg', 'Kanye West Buys House Across the Street From Kim Kardashian', 'Posted on January 1, 2022 by Boyan Borisov', 'Kanye West seems to be acknowledging he can\'t pull his marriage out of the fire, so he\'s reportedly moving a stone\'s throw from his former family home ... presumably, so he can effectively co-parent with Kim.\r\n\r\nKanye bought a $4.5 million home across the street from his estranged wife ... so says the Daily Mail. The home is just over 3,650 square feet, with 5 bedrooms. He reportedly paid $421,000 over asking ... proof the real estate bidding war in SoCal is alive and well.\r\n\r\nAs we reported, Kanye gave Kim his interest in the family home ... a home Kanye designed over a period of years. TMZ broke the story, there are still some property issues that remain unsettled, so Kim has asked the judge to grant her the divorce now, and leave the other issues for later down the road.'),
(5, 'images\\theembassy.jpeg', 'Drake Wants You Inside His Toronto Mega-Mansion, and Hopes You’ll Splurge on Merch While Visiting', 'Posted on January 1, 2022 by Boyan Borisov', 'Get ready for ?MTV Cribs? with a twist. As first reported by BlogTO, music superstar Aubrey ?Drake? Graham is now offering a very intimate glimpse into his personal life via an interactive virtual tour of his extravagant Toronto mansion. Remember that house? That little 50,000-square-foot number that reportedly cost tens of millions to build? Drake is now ready and willing to give you a walk-through of the place, displaying (almost) every inch crafted by Canadian architectural/interior designer Ferris Rafauli.\r\n\r\nWhat’s the catch, you ask? Well, while you’re perusing the palace, Drake’s marketing ploy encourages you to spend some bank on the many consumer products the Canadian-born rapper’s hawking as part of ?The Embassy? tour promoting the 10th anniversary of his Grammy-winning ?Take Care? album.\r\n\r\nTo (virtually) access the mansion, guests enter the Drake Related website and are quickly whisked away to a shot of the massive home’s fa?ade, where the entertainer’s luxe cars are displayed in his spacious motorcourt. An arrow just outside the front door leads inside to the recording studio, lounge and primary bedroom, with each room displaying a handful of items with clickable links — click them, and you too can purchase Drake-approved merch and other goodies. For now, much of the mansion is still restricted from prying eyes, but there are indications that the master closet, garage and full-sized basketball court will also soon be offered on public display, plus other areas of the shopping mall-sized structure.'),
(6, 'images\\bernauld.jpg', 'Did Bernard Arnault Sell an $84 Million Trousdale Estates Mansion… to Himself?', 'Posted on January 1, 2022 by Boyan Borisov', 'Did he or didn’t he? Some databases indicate Bernard Arnault very quietly sold one of his several Los Angeles properties last December — with zero fanfare and for a whopping $84.5 million, despite the house never having been publicly listed for sale.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `blog_card`
--

CREATE TABLE `blog_card` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT '',
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `blog_card`
--

INSERT INTO `blog_card` (`id`, `image`, `title`) VALUES
(1, 'images\\manor.jpg', 'Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million'),
(2, 'images\\177 million.jpg', 'Billionaire Marc Andreessen buys Malibu mansion for $177 million, a California record'),
(3, 'images\\hadid_estate.jpg', 'Mohamed Hadid’s Bel-Air mega-mansion is set for auction, then demolition'),
(4, 'images\\kanye-mansion2.jpeg', 'Kanye West Buys House Across the Street From Kim Kardashian'),
(5, 'images\\theembassy.jpeg', 'Drake Wants You Inside His Toronto Mega-Mansion, and Hopes You’ll Splurge on Merch While Visiting'),
(6, 'images\\bernauld.jpg', 'Did Bernard Arnault Sell an $84 Million Trousdale Estates Mansion… to Himself?');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`) VALUES
(1, 'Boyan', 'boyborissov@gmail.com', 'Boyanski'),
(2, 'Boyan', 'boyborissov@gmail.com', 'Boyanski 12334324234234'),
(3, 'Boyan', 'boyborissov@gmail.com', 'Hi!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `home_page`
--

INSERT INTO `home_page` (`id`, `image`, `description`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `property_article`
--

CREATE TABLE `property_article` (
  `id` int(11) NOT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `image4` varchar(50) DEFAULT NULL,
  `image5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `property_article`
--

INSERT INTO `property_article` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'images/birdview.jpg', 'images/Casa-Encantada-3.jpg', 'images/Casa-Encantada-4.jpg', 'images/Casa-Encantada-5.jpg', 'images/Casa-Encantada-7.jpg'),
(2, 'images/manor.jpg', 'images/manor-1.jpg', 'images/manor-2.jpg', 'images/manor-3.jpg', 'images/manor-4.jpg'),
(3, 'images/lafin1.jpg', 'images/lafin2.jpg', 'images/lafin3.jpg', 'images/lafin4.jpg', 'images/lafin5.jpg'),
(4, 'images/the-one-2.jpg', 'images/the-one-1.jpg', 'images/the-one-3.jpg', 'images/the-one-4.jpg', 'images/the-one-5.jpg'),
(5, 'images/bel_air.jpg', 'images/Chartwell2.png', 'images/Chartwell3.jpg', 'images/Chartwell4.jpg', 'images/Chartwell5.jpg'),
(6, 'images/hadid.jpg', 'images/hadid2.jpg', 'images/hadid3.jpg', 'images/hadid4.jpg', 'images/hadid5.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `property_description`
--

CREATE TABLE `property_description` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `main_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `property_description`
--

INSERT INTO `property_description` (`id`, `name`, `location`, `address`, `beds`, `baths`, `size`, `price`, `description`, `main_image`) VALUES
(1, 'Casa Encantada', 'Bel Air', 'BEL AIR', 8, 12, 40000, '200,000,000', '<p class=\"fs-5 mb-4\">Completed in 1937, this modern Georgian masterpiece is elegantly perched on its own eight plus acre promontory in Bel-Air. \r\n                                Architect James E. Dolena designed the estate in the shape of an H to provide city, ocean and garden views from all 60 of its rooms.</p>\r\n<p class=\"fs-5 mb-4\">Furnishings and interior designs were created by the iconic T.H. Robsjohn- Gibbings, setting a new standard for lavish home design.\r\n                                 With no neighbors and surrounded by the fairways of the Bel-Air Country Club golf course, the compound is expansive, private and secure and is less than ten minutes to Rodeo Drive.\r\n                                </p>\r\n<p class=\"fs-5 mb-4\">Once owned by Conrad Hilton, the hotel magnate hosted some of the most significant social, charitable and political events in the country and over its storied history has been host to several Presidential Dinners. \r\n                                Hilton described the home as an ?object of symmetry and beauty.? As a 30 year resident, it was from Casa Encantada where he grew the brand into the world’s first global hotel chain.</p>\r\n<p class=\"fs-5 mb-4\">With a seemingly impossible intimate feeling, the estate welcomes guests with curved iron gates that swing gracefully from stone bases. \r\n                                The sweeping driveway guides through lush, green surroundings to lead visitors into the warm embrace of the main residence.\r\n                                 The dramatic entry hall leads with 18-foot ceilings that open into a majestic reception hall, dining room, walnut paneled library, living room and family room. \r\n                                The home’s second story features living quarters that perfectly juxtapose the residence’s entertainment-centric first story.</p>\r\n<p class=\"fs-5 mb-4\">An architectural pool house boasts a professional screening room, formal bar, and vistas to the rose gardens and beyond. \r\n                                A north-south lighted tennis court and separately constructed basketball court, full guest house, greenhouses, and house manager’s quarters along with koi ponds and irreplaceable landscaping makes this arguably one of the finest estates in the world.</p>', 'images/Casa-Encantada-3.jpg'),
(2, 'Spelling Manor', 'Holmbly Hills', '594 S Mapleton Dr\r\n', 14, 27, 56000, '165,000,000', NULL, 'images/manor.jpg'),
(3, 'La Fin', 'Bel Air', '1200 Bel Air Road', 12, 18, 38000, '139,000,000', NULL, 'images/lafin1.jpg'),
(4, 'The One', 'Beverly Hills', '944 Airole Way', 21, 42, 105000, '265,000,000', NULL, 'images/the-one-2.jpg'),
(5, 'The Chartwell Estate', 'Hollmbly Hills', '750 Bel Air Rd', 10, 16, 22000, '195,000,000', NULL, 'images/bel_air.jpg'),
(6, 'Le Belvedere', 'Beverly Hills', '630 Nimes Rd', 10, 14, 40000, '85,000,000', NULL, 'images/hadid.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Test', 'test@mail.com', '12345678', 'user'),
(2, 'Boyan', '18102@uktc-bg.com', '56', 'admin'),
(3, 'Boyanski', 'boyborissov@gmail.com', '123456789', 'user'),
(4, 'boyan', 'boyan@gmail.com', '12345678', 'user'),
(6, 'nikola', 'nikola@gmail.com', 'nikola1234', 'user'),
(7, 'AtanasVassilev', 'vassilevatanas@gmail.com', '123456789', 'user'),
(8, 'emko', 'emo@gmail.com', 'asdfghjk', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `blog_card`
--
ALTER TABLE `blog_card`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `property_article`
--
ALTER TABLE `property_article`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `property_description`
--
ALTER TABLE `property_description`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `blog_card`
--
ALTER TABLE `blog_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `property_article`
--
ALTER TABLE `property_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `property_description`
--
ALTER TABLE `property_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
