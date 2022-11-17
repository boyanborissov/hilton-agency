-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 07:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiltonagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `position` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `fullname` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `description` text COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `image`, `position`, `fullname`, `description`) VALUES
(1, 'images\\Aaron_Kirman.jpg', 'Director', 'Aaron Kirman', 'With over $7 Billion in luxury home sales,  Aaron Kirman represents the finest estates across the globe and was ranked in the top 5 luxury real estate agents in the US by the Wall Street Journal.'),
(2, 'images\\josh-altman.jpg', 'Top Agent', 'Josh Altman', 'Recognized as one of the most dynamic, high performing agents in the luxury home real estate market, Josh Altman consistently shatters records across the globe and ranks in the top 1% of real estate agents throughout the world. Having sold over $5 billion sold over the course of his young career puts him in a league of his own. In 2021, Josh sold a career high of $1.4 Billion in residential sales.?'),
(3, 'images\\josh-flagg.jpg', 'Top Agent', 'Josh Flagg', 'Josh Flagg is one of America\'s most successful and sought after luxury real estate agents, having completed more than two billion dollars in residential real estate sales in the past decade.'),
(4, 'images\\gomez.jpg', 'Top Agent', 'Dalton Gomez', 'More recently, he has represented significant sales including Richard Neutra\'s Tremaine House, Pierre Koenig\'s Case Study #21 and Craig Ellwood\'s Case Study #16. Along with Mr. Kirman, Dalton also represents the only Oscar Niemeyer House in North America and many other notable works by architects such as Rupolph Schindler, John Lautner, A. Quincy Jones, etc.');

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE armscii8_bin DEFAULT NULL,
  `title` varchar(255) COLLATE armscii8_bin DEFAULT NULL,
  `meta_content` varchar(255) COLLATE armscii8_bin DEFAULT NULL,
  `description` longtext COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`id`, `image`, `title`, `meta_content`, `description`) VALUES
(1, 'images\\manor.jpg', 'Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million', 'Posted on January 1, 2022 by Boyan Borisov', 'The last time the Spelling Manor changed hands was in 2019, when it sold to an undisclosed buyer for $119.75 million—the highest recorded residential sale ever for Los Angeles County at the time.Still, the $165-million sticker price ranks as one of the highest in the country for a single-family residence.Prior to the record sale in 2019, the home was owned by Formula One heiress Petra Ecclestone, who had paid $85 million for the place in an all-cash deal.Covering well over an acre of livable space, the home features 27 bathrooms and 14 bedrooms, including the 7,500-square-foot primary suite.In an interview with Forbes last year, Ecclestone’s partner, real estate agent and lifestyle entrepreneur Sam Palmer, revealed that the 123-room, W-shaped mansion requires a staff of 50 people to keep the estate in working order.'),
(2, 'images\\177 million.jpg', 'Billionaire Marc Andreessen buys Malibu mansion for $177 million, a California record', 'Posted on January 1, 2022 by Boyan Borisov', 'In a historic deal, billionaire venture capitalist Marc Andreessen has paid $177 million for a sprawling estate in Malibu. It’s the most ever paid for a home in California, shattering the previous record set by Jeff Bezos last year.The property makes the most of its space, squeezing in multiple guesthouses, guard houses, a swimming pool and box garden. Perched at the edge of the property, the main house designed by Scott Mitchell overlooks the ocean from multiple patios and terraces. A winding path descends to the beach.'),
(3, 'images\\hadid_estate.jpg', 'Mohamed Hadid’s Bel-Air mega-mansion is set for auction, then demolition', 'Posted on January 1, 2022 by Boyan Borisov', '?This house will last forever,? developer Mohamed Hadid once said about his 30,000-square-foot mega-mansion perched in the hills of Bel-Air. ?Bel-Air will fall before this will.?They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.They sued Hadid in 2018, citing construction violations. In December 2019, Los Angeles County Superior Court Judge Craig D. Karlan ordered it to be torn down because of an inadequate foundation.'),
(4, 'images\\kanye-mansion2.jpeg', 'Kanye West Buys House Across the Street From Kim Kardashian', 'Posted on January 1, 2022 by Boyan Borisov', 'Kanye West seems to be acknowledging he can\'t pull his marriage out of the fire, so he\'s reportedly moving a stone\'s throw from his former family home ... presumably, so he can effectively co-parent with Kim.\r\n\r\nKanye bought a $4.5 million home across the street from his estranged wife ... so says the Daily Mail. The home is just over 3,650 square feet, with 5 bedrooms. He reportedly paid $421,000 over asking ... proof the real estate bidding war in SoCal is alive and well.\r\n\r\nAs we reported, Kanye gave Kim his interest in the family home ... a home Kanye designed over a period of years. TMZ broke the story, there are still some property issues that remain unsettled, so Kim has asked the judge to grant her the divorce now, and leave the other issues for later down the road.'),
(5, 'images\\theembassy.jpeg', 'Drake Wants You Inside His Toronto Mega-Mansion, and Hopes You’ll Splurge on Merch While Visiting', 'Posted on January 1, 2022 by Boyan Borisov', 'Get ready for ?MTV Cribs? with a twist. As first reported by BlogTO, music superstar Aubrey ?Drake? Graham is now offering a very intimate glimpse into his personal life via an interactive virtual tour of his extravagant Toronto mansion. Remember that house? That little 50,000-square-foot number that reportedly cost tens of millions to build? Drake is now ready and willing to give you a walk-through of the place, displaying (almost) every inch crafted by Canadian architectural/interior designer Ferris Rafauli.\r\n\r\nWhat’s the catch, you ask? Well, while you’re perusing the palace, Drake’s marketing ploy encourages you to spend some bank on the many consumer products the Canadian-born rapper’s hawking as part of ?The Embassy? tour promoting the 10th anniversary of his Grammy-winning ?Take Care? album.\r\n\r\nTo (virtually) access the mansion, guests enter the Drake Related website and are quickly whisked away to a shot of the massive home’s fa?ade, where the entertainer’s luxe cars are displayed in his spacious motorcourt. An arrow just outside the front door leads inside to the recording studio, lounge and primary bedroom, with each room displaying a handful of items with clickable links — click them, and you too can purchase Drake-approved merch and other goodies. For now, much of the mansion is still restricted from prying eyes, but there are indications that the master closet, garage and full-sized basketball court will also soon be offered on public display, plus other areas of the shopping mall-sized structure.'),
(6, 'images\\bernauld.jpg', 'Did Bernard Arnault Sell an $84 Million Trousdale Estates Mansion… to Himself?', 'Posted on January 1, 2022 by Boyan Borisov', 'Did he or didn’t he? Some databases indicate Bernard Arnault very quietly sold one of his several Los Angeles properties last December — with zero fanfare and for a whopping $84.5 million, despite the house never having been publicly listed for sale.');

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

CREATE TABLE `blog_info` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE armscii8_bin NOT NULL DEFAULT '',
  `title` text COLLATE armscii8_bin NOT NULL,
  `description` text COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`id`, `image`, `title`, `description`) VALUES
(1, 'images\\manor.jpg', 'Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million', ''),
(2, 'images\\177 million.jpg', 'Billionaire Marc Andreessen buys Malibu mansion for $177 million, a California record', ''),
(3, 'images\\hadid_estate.jpg', 'Mohamed Hadid’s Bel-Air mega-mansion is set for auction, then demolition', ''),
(4, 'images\\kanye-mansion2.jpeg', 'Kanye West Buys House Across the Street From Kim Kardashian', ''),
(5, 'images\\theembassy.jpeg', 'Drake Wants You Inside His Toronto Mega-Mansion, and Hopes You’ll Splurge on Merch While Visiting', ''),
(6, 'images\\bernauld.jpg', 'Did Bernard Arnault Sell an $84 Million Trousdale Estates Mansion… to Himself?', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `description` text COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `image`, `description`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_article`
--

CREATE TABLE `property_article` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `image2` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `image3` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `image4` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `image5` varchar(50) COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `property_article`
--

INSERT INTO `property_article` (`id`, `image`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'images/birdview.jpg', 'images/Casa-Encantada-3.jpg', 'images/Casa-Encantada-4.jpg', 'images/Casa-Encantada-5.jpg', 'images/Casa-Encantada-7.jpg'),
(2, 'images/manor.jpg', 'images/manor-1.jpg', 'images/manor-2.jpg', 'images/manor-3.jpg', 'images/manor-4.jpg'),
(3, 'images/la-fin-mansion .jpg', 'images/la-fin-2.jpg', 'images/la-fin-3.jpg', 'images/la-fin-4.jpg', 'images/la-fin-5.jpg'),
(4, 'images/the-one-2.jpg', 'images/the-one-1.jpg', 'images/the-one-3.jpg', 'images/the-one-4.jpg', 'images/the-one-5.jpg'),
(5, 'images/bel_air.jpg', 'images/bel-air-2.jpg', 'images/bel-air-3.jpg', 'images/bel-air-4.jpg', 'images/bel-air-5.jpg'),
(6, 'images/hadid-1.jpg', 'images/hadid-2.jpg', 'images/hadid-3.jpg', 'images/hadid-4.jpg', 'images/hadid-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_description`
--

CREATE TABLE `property_description` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `address` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `price` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `description` longtext COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `property_description`
--

INSERT INTO `property_description` (`id`, `name`, `address`, `beds`, `baths`, `size`, `price`, `description`) VALUES
(1, 'Casa Encantada', 'BEL AIR CA 90077', 8, 12, 40000, '200,000,000', '<p class=\"fs-5 mb-4\">Completed in 1937, this modern Georgian masterpiece is elegantly perched on its own eight plus acre promontory in Bel-Air. \r\n                                Architect James E. Dolena designed the estate in the shape of an H to provide city, ocean and garden views from all 60 of its rooms.</p>\r\n<p class=\"fs-5 mb-4\">Furnishings and interior designs were created by the iconic T.H. Robsjohn- Gibbings, setting a new standard for lavish home design.\r\n                                 With no neighbors and surrounded by the fairways of the Bel-Air Country Club golf course, the compound is expansive, private and secure and is less than ten minutes to Rodeo Drive.\r\n                                </p>\r\n<p class=\"fs-5 mb-4\">Once owned by Conrad Hilton, the hotel magnate hosted some of the most significant social, charitable and political events in the country and over its storied history has been host to several Presidential Dinners. \r\n                                Hilton described the home as an ?object of symmetry and beauty.? As a 30 year resident, it was from Casa Encantada where he grew the brand into the world’s first global hotel chain.</p>\r\n<p class=\"fs-5 mb-4\">With a seemingly impossible intimate feeling, the estate welcomes guests with curved iron gates that swing gracefully from stone bases. \r\n                                The sweeping driveway guides through lush, green surroundings to lead visitors into the warm embrace of the main residence.\r\n                                 The dramatic entry hall leads with 18-foot ceilings that open into a majestic reception hall, dining room, walnut paneled library, living room and family room. \r\n                                The home’s second story features living quarters that perfectly juxtapose the residence’s entertainment-centric first story.</p>\r\n<p class=\"fs-5 mb-4\">An architectural pool house boasts a professional screening room, formal bar, and vistas to the rose gardens and beyond. \r\n                                A north-south lighted tennis court and separately constructed basketball court, full guest house, greenhouses, and house manager’s quarters along with koi ponds and irreplaceable landscaping makes this arguably one of the finest estates in the world.</p>'),
(2, 'Spelling Manor', '594 S Mapleton Dr CA 90024', 14, 27, 56000, '165,000,000', NULL),
(3, 'La Fin', '1200 Bel Air Road', 12, 18, 38000, '139,000,000', NULL),
(4, 'The One', '944 Airole Way', 21, 42, 105000, '265,000,000', NULL),
(5, 'The Chartwell Estate', '750 Bel Air Rd', 10, 16, 22000, '195,000,000', NULL),
(6, 'Le Belvedere', '630 Nimes Rd', 10, 14, 40000, '85,000,000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_info`
--

CREATE TABLE `property_info` (
  `id` int(11) NOT NULL,
  `image` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `title` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `description` text COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `property_info`
--

INSERT INTO `property_info` (`id`, `image`, `title`, `description`) VALUES
(1, 'images/Casa-Encantada-3.jpg', 'Casa Encantada', 'Completed in 1937, this modern Georgian masterpiece is elegantly perched on its own eight plus acre promontory in Bel-Air. Architect James E. Dolena designed the estate in the shape of an H to provide city, ocean and garden views from all 60 of its rooms.'),
(2, 'images/manor1.jpg', 'The Spelling Manor', '\"The Manor\" An unparalleled offering, an unrivaled setting, a showplace of the highest caliber. The Manor is undoubtedly one of the finest estates in the World.'),
(3, 'images/la-fin-mansion .jpg', 'La fin', 'In Los Angeles, where luxury comes with the territory, La Fin takes it to the next level. Located at 1200 Bel Air Road in the tony Bel-Air neighborhood, the mega-mansion is now on the market for $139 million. '),
(4, 'images/the-one-2.jpg', 'The One', 'Nigh on ten years later, the property remains unfinished. By early 2021, the long-delayed project was preparing to hit the market with a much-reduced $340 million ask. By the time it actually entered the ring, that figure had been chopped even further, down to $295 million. And at $126 million, the final sale price represents an eye-popping 57% discount off the already hugely reduced list.'),
(5, 'images/bel_air.jpg', 'The Chartwell Estate', 'The $195 million Chartwell Estate is the most expensive U.S. residential listing that\'s on a multiple listing service. The property in the Bel Air neighborhood of Los Angeles was home to billionaire media mogul Jerry Perenchio, one-time Univision chairman and CEO, who died in 2017.'),
(6, 'images/hadid-1.jpg', 'Le Belvedere', 'The Hadids are on the move. The Bel Air mansion developed by Mohamed Hadid, father to Gigi and Bella Hadid and friend to Real Housewife Lisa Vanderpump, has been put on the market for $85 million. While Hadid developed and resides in the luxury residence, he is not its current owner. After finishing work on the mansion, Hadid sold it to international owners for $50 million back in 2010. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `password` varchar(50) COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Test', 'test@mail.bg', '12345678'),
(2, 'Boyan', '18102@uktc-bg.com', '12345678'),
(3, 'Boyanski', 'boyborissov@gmail.com', '123456789'),
(4, 'boyan', 'boyan@gmail.com', '12345678'),
(6, 'nikola', 'nikola@gmail.com', 'nikola1234'),
(7, 'AtanasVassilev', 'vassilevatanas@gmail.com', '123456789'),
(8, 'emko', 'emo@gmail.com', 'asdfghjk'),
(9, 'ickoo', 'ickoo@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_article`
--
ALTER TABLE `property_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_description`
--
ALTER TABLE `property_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_info`
--
ALTER TABLE `property_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_article`
--
ALTER TABLE `property_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_description`
--
ALTER TABLE `property_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_info`
--
ALTER TABLE `property_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
