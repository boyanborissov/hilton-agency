-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 08:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `image` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `image`, `position`, `fullname`, `description`) VALUES
(1, 'images\\Aaron_Kirman.jpg', 'Director', 'Aaron Kirman', 'Aaron Kirman is a Los Angeles-based real estate agent and investor who appears regularly on CNBC\'s Secret Lives of the Super Rich and stars on CNBC\'s real estate reality series Listing Impossible.\r\nIn 2018, he was named the fifth highest producing agent in the nation by individual volume according to REAL Trends; in 2019, it named his real estate team No. 10 in the country.'),
(2, 'images\\josh-altman.jpg', 'Top Agent', 'Josh Altman', 'Recognized as one of the most dynamic, high performing agents in the luxury home real estate market, Josh Altman consistently shatters records across the globe and ranks in the top 1% of real estate agents throughout the world. Having sold over $5 billion sold over the course of his young career puts him in a league of his own. In 2021, Josh sold a career high of $1.4 Billion in residential sales.?'),
(3, 'images\\ryan-serhant.jpg', 'Top Agent', 'Ryan Serhant', 'Ryan Serhant is a founder, entrepreneur, producer, public speaker, bestselling author, star of multiple TV shows, and Chief Executive Officer of SERHANT., the rapidly growing tech-forward real estate organization comprised of two core businesses: brokerage and education. Founded in 2020, SERHANT. is a content-to-commerce technology ecosystem revolutionizing the sales industry. '),
(4, 'images\\gomez.jpg', 'Top Agent', 'Dalton Gomez', 'More recently, he has represented significant sales including Richard Neutra\'s Tremaine House, Pierre Koenig\'s Case Study #21 and Craig Ellwood\'s Case Study #16. Along with Mr. Kirman, Dalton also represents the only Oscar Niemeyer House in North America and many other notable works by architects such as Rupolph Schindler, John Lautner, A. Quincy Jones, etc.');

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`id`, `image`, `title`, `date`, `description`) VALUES
(1, 'images\\manor.jpg', 'Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million', 'Posted on May 10, 2022 by Spencer Elliot', '<p class=\"fs-5 mb-4\">The last time the Spelling Manor changed hands was in 2019, when it sold to an undisclosed buyer for $119.75 million—the highest recorded residential sale ever for Los Angeles County at the time.\r\n						Fast-forward three years and the famed estate’s current price of $165 million wouldn’t come close to breaking the new California record set a year ago when venture capitalist Marc Andreessen paid $177 million for a property in Malibu.</p>\r\n<p class=\"fs-5 mb-4\">Still, the $165-million sticker price ranks as one of the highest in the country for a single-family residence.\r\n						Weighing in at more than 56,000 square feet, the French chateau-inspired estate was originally built for late TV producer Aaron Spelling and his widow, Candy Spelling. Sparing no expense, Candy Spelling customized the sprawling residence with a range of personalized amenity rooms, including a flower-cutting room, a film editing area behind the screen of the home’s movie theater and a wine and cheese room outfitted with Parisian-cafe style tables and chairs.\r\n						</p>\r\n<p class=\"fs-5 mb-4\">Prior to the record sale in 2019, the home was owned by Formula One heiress Petra Ecclestone, who had paid $85 million for the place in an all-cash deal.\r\n						During her residency, Ecclestone oversaw sweeping renovations, updating interiors to suit modern tastes and adding a beauty salon, an aquarium and a nightclub.</p>\r\n<h2 class=\"fw-bolder mb-4 mt-5\">About the manor</h2>\r\n<p class=\"fs-5 mb-4\">Covering well over an acre of livable space, the home features 27 bathrooms and 14 bedrooms, including the 7,500-square-foot primary suite.\r\n						Other points of interest include a French-door solarium, a formal dining room and a grand foyer featuring a 30-foot ceiling, as well as a game room, a bowling alley and a tanning room.\r\n						</p>\r\n<p class=\"fs-5 mb-4\">In an interview with Forbes last year, Ecclestone’s partner, real estate agent and lifestyle entrepreneur Sam Palmer, revealed that the 123-room, W-shaped mansion requires a staff of 50 people to keep the estate in working order.\r\n						A team of landscapers tends to grounds featuring rose gardens, citrus orchards and acres of lawn. In addition, the home’s many fountains, the statuary, koi ponds, swimming pool and sports courts all require regular maintenance.</p>'),
(2, 'images\\177million.jpg', 'Billionaire Marc Andreessen buys Malibu mansion for $177 million', 'Posted on October 29, 2021 by Jack Flemming', '<p class=\"fs-5 mb-4\">In a historic deal, billionaire venture capitalist Marc Andreessen has paid $177 million for a sprawling estate in Malibu. It’s the most ever paid for a home in California, shattering the previous record set by Jeff Bezos last year.Records show the seller was Serge Azria, a fashion mogul behind clothing lines such as Joie and Equipment. He bought the seven-acre property for $41 million from late film producer Jerry Weintraub in 2013 and had been quietly shopping it around for $218 million.</p>\r\n<p class=\"fs-5 mb-4\">Kurt Rappaport of Westside Estate Agency, who handled both ends of the deal, couldn’t be reached for comment.\r\nAndreessen is an investor and software engineer who co-founded the Silicon Valley venture capital firm Andreessen Horowitz in 2009 and co-created Mosaic, one of the first web browsers. Forbes pegged Andreesen’s net worth at $1.6 billion at the close of market trading Friday.</p>\r\n<p class=\"fs-5 mb-4\">He also owns a home in Silicon Valley, but his new place is much bigger. Photos are scarce, since the home was never listed on the Multiple Listing Service, but aerial images show that the property sits on a long, slender lot that stretches from Pacific Coast Highway to the ocean about halfway between Paradise Cove and Escondido Beach.</p>\r\n<p class=\"fs-5 mb-4\">The property makes the most of its space, squeezing in multiple guesthouses, guard houses, a swimming pool and box garden. Perched at the edge of the property, the main house designed by Scott Mitchell overlooks the ocean from multiple patios and terraces. A winding path descends to the beach.</p>\r\n<p class=\"fs-5 mb-4\">The house neighbors a massive modern compound owned by the estate of William Bell and Lee Phillip Bell, the late husband and wife who together created the soap operas \'The Young and the Restless\' and \'The Bold and the Beautiful.\' Kevin Garnett’s half-finished house, which he sold over the summer for $16 million, sits across the street.</p>\r\n'),
(3, 'images\\hadid_estate.jpg', 'Mohamed Hadid’s Bel-Air mega-mansion is set for auction, then demolition', 'Posted on December 29, 2021 by Jack Flemming', '<p class=\"fs-5 mb-4\">After a half-decade of court battles, the half-finished mega-mansion of developer Mohamed Hadid has sold at auction for $5 million. Next, it will be destroyed.\r\nHadid, a reality TV regular and father to models Bella and Gigi, bought the property in 2011 and quickly got to work cramming a 30,000-square-foot house onto the 1.22-acre lot, which was both bigger and taller than city rules allowed. At the time, he claimed the house would last forever.</p>\r\n<p class=\"fs-5 mb-4\">Bel-Air neighbors feared the code-violating estate would slide down the hill and crush the homes below and took him to court, where an L.A. County judge declared the hulking structure a \'danger to the public\' and ordered it to be torn down.</p>\r\n<p class=\"fs-5 mb-4\">After a failed attempt to stop the destruction by declaring bankruptcy, the company tied to Hadid was eventually forced to put it on the market for $8.5 million. With no takers, the price was eventually lowered to $5.5 million before it was auctioned off for $5 million by Premiere Estates Auction Co.</p>\r\n<p class=\"fs-5 mb-4\">Records show the buyer is Sahara Construction Co. Proceeds from the sale were originally supposed to fund the property’s demolition, but because the winning bid came in short of the listing price, Sahara agreed to foot the bill.\r\nTodd Wohl, co-founder of Premiere Estates, estimated a complete tear-down will take four months.</p>\r\n\r\n'),
(4, 'images\\kanye-mansion2.jpeg', 'Kanye West Buys House Across the Street From Kim Kardashian', 'Posted on December 26, 2021 by James McClain', '<p class=\"fs-5 mb-4\">When Kanye West is struck by inspiration, he tends to quickly follow through with action. Last month, while donating Thanksgiving meals to the L.A. Mission, West got on the horn for a surprise announcement to the local crowd — saying he planned to \'get his family back together\' and rekindle a relationship with estranged wife Kim Kardashian. The fashion mogul added that if he couldn’t live \'in the house\' with his family, he would buy \'the home right next door\' to Kardashian.</p>\r\n<p class=\"fs-5 mb-4\">Turns out West wasn’t just whistling Dixie. Though he’s already got a new $57.3 million Malibu mansion about 30 minutes (by car) from Kardashian’s vast Hidden Hills estate — and though she apparently has not wavered from wanting a divorce — West wishes to remain closer at hand. And so he’s dropped another $4.5 million on a relatively modest Hidden Hills estate, one that happens to lie directly across the street from the ex-Kimye compound. From here, the 44-year-old will presumably be able to keep a watchful eye on Kardashian’s doings.</p>\r\n<p class=\"fs-5 mb-4\">Astute real estate followers will know that the erstwhile pair spent years and untold millions building their massive Hidden Hills estate, which was featured in Architectural Digest last year. Back in October, Kardashian paid West $23 million to buy out his 50% stake in the multi-acre property.</p>\r\n<p class=\"fs-5 mb-4\">Still, given its age, the property appears well-maintained. The big front lawn was recently replaced with drought-resistant AstroTurf — a good thing for the water bill, given that the San Fernando Valley’s scorching summer temperatures can top 110 degrees. The existing kitchen was remodeled in 2005 and includes a spacious island, granite countertops and some generic-looking white ovens and a white dishwasher. (Blessedly, there are no dreaded white refrigerators on the premises.)</p>\r\n\r\n'),
(5, 'images\\theembassy.jpeg', 'Inside Rapper Drake\'s Manor House in Hometown Toronto\r\n', 'Posted on April 8, 2020 by Mayer Rus', '<p class=\"fs-5 mb-4\">Remember the chintzy, pimped-out McMansions that were a staple of the long-running MTV series Cribs\' The Toronto home of mega recording artist Aubrey Drake Graham is something else altogether. Measuring 50,000 square feet, with amenities such as an NBA regulation-size indoor basketball court crowned by a 21-square-foot pyramidal skylight, Drake’s astonishing domicile certainly qualifies as extravagant. But instead of vast expanses of cheap drywall and mountains of ungainly furniture upholstered with a hot glue gun, stately Drake Manor, as envisioned by Canadian architectural and interior designer Ferris Rafauli, is a marvel of old-world craftsmanship, constructed of limestone, bronze, exotic woods, and other noble materials. Every detail of the sprawling property has been meticulously conceived and executed. And there isn’t a Scarface poster in sight.</p>\r\n<p class=\"fs-5 mb-4\">\'Because I was building it in my hometown, I wanted the structure to stand firm for 100 years. I wanted it to have a monumental scale and feel,\' Drake says of his passion project. \'It will be one of the things I leave behind, so it had to be timeless and strong,\' he adds.</p>\r\n<p class=\"fs-5 mb-4\">Dubbed The Embassy, the house takes its cues from traditional Beaux Arts architecture, distilled and slightly abstracted to imbue the classic idiom with a more contemporary spirit. \'In form, materials, and execution, the structure is a proper 19th-century limestone mansion. But the exterior profiles are more minimal and the lines are a bit cleaner,\' says Rafauli, who heads his own namesake luxury design/build firm based in Ontario. \'This isn’t stucco, paint, and fake gold. That’s not what Drake wanted, and that’s not what I do.\'</p>\r\n<p class=\"fs-5 mb-4\">And the hits keep coming. There’s the world-class recording studio, which Drake likens to \'eccentric 1970s studios mixed with Annabel’s in London\'; the well-used kitchen that features the first stove from Rafauli’s new line for La Cornue; the awards room, which tells the story of Drake from his childhood to his years on the Canadian television show Degrassi: The Next Generation to his reign as a Grammy-winning artist; the hall of sports jerseys displayed in museum-like vitrines; and the indoor swimming pool sheathed in black granite.\r\nSurveying the splendors of his Canadian pleasure palace, Drake takes the long view: \'I think the house shows that I have true faith in myself to take on this task when I was just 27 and see it through,\' says the now 33-year-old superstar. \'I also think the house says that I will forever remain solid in the place I was born.\'</p>\r\n\r\n'),
(6, 'images\\hamptons.jpg', 'The Hamptons’ Massive Sandcastle Estate Has Finally Sold\r\n\r\n', 'Posted on November 4, 2021 by Laura Eueer', '<p class=\"fs-5 mb-4\">For a certain set in the Hamptons, more is more. And nowhere better is this exemplified than in Sandcastle, the huge and hugely pricey Bridgehampton mansion built by local developer Joe Farrell for his own family.</p>\r\n<p class=\"fs-5 mb-4\">Jam-packed with nearly every conceivable luxury amenity, both inside and out, the 11.5-acre spread was originally put up for sale more than a decade ago and at one point the asking price soared to almost $60 million. However, when it was last listed on the open market it carried a greatly discounted and more realistic price of just under $35 million. The deal was handled by Tal Alexander and Sara Goldfarb of Douglas Elliman Real Estate. Tax records don’t yet reflect a change of ownership but Goldfarb announced the sale on Instagram yesterday and word on the local real estate street is the property went for $31 million to an as-yet-unidentified Florida billionaire. </p>\r\n<p class=\"fs-5 mb-4\">Ever since it was completed in 2009, Sandcastle has been on and off both the sales and high-end rental markets. And considering the kinds of numbers we’re talking about — $300K for a week’s rent! — who can blame the Farrells for moving out for a bit while Sandcastle played host to big-spending celebrities such as Jay-Z and Beyonc\', who rented the place for a month in 2012, as well as Justin Bieber, Madonna and Donald Trump. The stars of \'The Real Housewives of New York City\' filmed at the house during their most recent season and last year the estate was rented for the summer season for close to $2 million. (Though now divorced, Farrell and his family certainly had other places to shack up while renting out Sandcastle; He also owns an oceanfront surf shack in Montauk he calls Surfcastle, as well as a ski place in Vermont that is, inevitably, called Snowcastle.)</p>\r\n<p class=\"fs-5 mb-4\">Need to relax\' In 2017, Farrell said, \'When I was in 10th grade, there was this kid I was friends with, and he had this really cool dad who owned 30 Burger Kings. When the parents were away, we used to go to the house, and they had a room off their bedroom that had an in-ground Jacuzzi with a fireplace. It blew my mind. Coming from a normal, middle-class house, I just thought, Oh my God! And I was just realizing that we have that setup here.\' The Farrells’ spa area also sports a steam room and sauna.</p>\r\n<p class=\"fs-5 mb-4\">We’re pretty sure the children and grandchildren of the spendy Florida billionaire are going to have a blast next summer. Or maybe they’ll just rent it out to some A-lister celeb or hedge fund fat cat with a small fortune to burn on a short-term rental.</p>\r\n\r\n'),
(7, 'images/ferris rafauli house.png', 'UKTC', 'Posted on 25 December, 2023 by Dimitar', 'UKTC');

-- --------------------------------------------------------

--
-- Table structure for table `blog_card`
--

CREATE TABLE `blog_card` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT '',
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `blog_card`
--

INSERT INTO `blog_card` (`id`, `image`, `title`) VALUES
(1, 'images\\manor.jpg', 'Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million'),
(2, 'images\\177million.jpg', 'Billionaire Marc Andreessen buys Malibu mansion for $177 million'),
(3, 'images\\hadid_estate.jpg', 'Mohamed Hadid’s infamous Bel-Air estate is auctioned off for $5 million'),
(4, 'images\\kanye-mansion2.jpeg', 'Kanye West Buys House Across the Street From Kim Kardashian'),
(5, 'images\\theembassy.jpeg', 'Inside Rapper Drake\'s Manor House in Hometown Toronto\r\n'),
(6, 'images\\hamptons.jpg', 'The Hamptons’ Massive Sandcastle Estate Has Finally Sold\r\n\r\n'),
(7, 'images/ferris rafauli house.png', 'UKTC');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`) VALUES
(1, 'Boyan', 'boyborissov@gmail.com', 'Boyanski'),
(2, 'Boyan', 'boyborissov@gmail.com', 'Boyanski 12334324234234'),
(3, 'Boyan', 'boyborissov@gmail.com', 'Hi!');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
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
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `image4` varchar(50) DEFAULT NULL,
  `image5` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `property_article`
--

INSERT INTO `property_article` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'images/birdview.jpg', 'images/Casa-Encantada-3.jpg', 'images/Casa-Encantada-4.jpg', 'images/Casa-Encantada-5.jpg', 'images/Casa-Encantada-7.jpg'),
(2, 'images/manor.jpg', 'images/manor-1.jpg', 'images/manor-2.jpg', 'images/manor-3.jpg', 'images/manor-4.jpg'),
(3, 'images/lafin1.jpg', 'images/lafin2.jpg', 'images/lafin3.jpg', 'images/lafin4.jpg', 'images/lafin5.jpg'),
(4, 'images/the-one1.jpg', 'images/the-one2.jpg', 'images/the-one3.jpg', 'images/the-one-4.jpg', 'images/the-one-5.jpg'),
(5, 'images/bel_air.jpg', 'images/Chartwell-2.jpg', 'images/Chartwell-3.jpg', 'images/Chartwell4.jpg', 'images/Chartwell5.jpg'),
(6, 'images/reserve.jpg', 'images/reserve2.jpg', 'images/reserve3.jpg', 'images/reserve4.jpg', 'images/reserve5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_description`
--

CREATE TABLE `property_description` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `main_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `property_description`
--

INSERT INTO `property_description` (`id`, `name`, `location`, `address`, `beds`, `baths`, `size`, `price`, `description`, `main_image`) VALUES
(1, 'Casa Encantada', 'Bel Air', 'BEL AIR', 8, 12, 40000, 200000000, '<p class=\"fs-5 mb-4\">Completed in 1937, this modern Georgian masterpiece is elegantly perched on its own eight plus acre promontory in Bel-Air. \r\n                                Architect James E. Dolena designed the estate in the shape of an H to provide city, ocean and garden views from all 60 of its rooms.</p>\r\n<p class=\"fs-5 mb-4\">Furnishings and interior designs were created by the iconic T.H. Robsjohn- Gibbings, setting a new standard for lavish home design.\r\n                                 With no neighbors and surrounded by the fairways of the Bel-Air Country Club golf course, the compound is expansive, private and secure and is less than ten minutes to Rodeo Drive.\r\n                                </p>\r\n<p class=\"fs-5 mb-4\">Once owned by Conrad Hilton, the hotel magnate hosted some of the most significant social, charitable and political events in the country and over its storied history has been host to several Presidential Dinners. \r\n                                Hilton described the home as an ?object of symmetry and beauty.? As a 30 year resident, it was from Casa Encantada where he grew the brand into the world’s first global hotel chain.</p>\r\n<p class=\"fs-5 mb-4\">With a seemingly impossible intimate feeling, the estate welcomes guests with curved iron gates that swing gracefully from stone bases. \r\n                                The sweeping driveway guides through lush, green surroundings to lead visitors into the warm embrace of the main residence.\r\n                                 The dramatic entry hall leads with 18-foot ceilings that open into a majestic reception hall, dining room, walnut paneled library, living room and family room. \r\n                                The home’s second story features living quarters that perfectly juxtapose the residence’s entertainment-centric first story.</p>\r\n<p class=\"fs-5 mb-4\">An architectural pool house boasts a professional screening room, formal bar, and vistas to the rose gardens and beyond. \r\n                                A north-south lighted tennis court and separately constructed basketball court, full guest house, greenhouses, and house manager’s quarters along with koi ponds and irreplaceable landscaping makes this arguably one of the finest estates in the world.</p>', 'images/Casa-Encantada-3.jpg'),
(2, 'Spelling Manor', 'Holmbly Hills', '594 S Mapleton Dr\r\n', 14, 27, 56000, 165000000, '<p class=\"fs-5 mb-4\">The last time the Spelling Manor changed hands was in 2019, when it sold to an undisclosed buyer for $119.75 million—the highest recorded residential sale ever for Los Angeles County at the time.\r\n						Fast-forward three years and the famed estate’s current price of $165 million wouldn’t come close to breaking the new California record set a year ago when venture capitalist Marc Andreessen paid $177 million for a property in Malibu.</p>\r\n<p class=\"fs-5 mb-4\">Still, the $165-million sticker price ranks as one of the highest in the country for a single-family residence.\r\n						Weighing in at more than 56,000 square feet, the French chateau-inspired estate was originally built for late TV producer Aaron Spelling and his widow, Candy Spelling. Sparing no expense, Candy Spelling customized the sprawling residence with a range of personalized amenity rooms, including a flower-cutting room, a film editing area behind the screen of the home’s movie theater and a wine and cheese room outfitted with Parisian-cafe style tables and chairs.\r\n						</p>\r\n<p class=\"fs-5 mb-4\">Prior to the record sale in 2019, the home was owned by Formula One heiress Petra Ecclestone, who had paid $85 million for the place in an all-cash deal.\r\n						During her residency, Ecclestone oversaw sweeping renovations, updating interiors to suit modern tastes and adding a beauty salon, an aquarium and a nightclub.</p>\r\n<h2 class=\"fw-bolder mb-4 mt-5\">About the manor</h2>\r\n<p class=\"fs-5 mb-4\">Covering well over an acre of livable space, the home features 27 bathrooms and 14 bedrooms, including the 7,500-square-foot primary suite.\r\n						Other points of interest include a French-door solarium, a formal dining room and a grand foyer featuring a 30-foot ceiling, as well as a game room, a bowling alley and a tanning room.\r\n						</p>\r\n<p class=\"fs-5 mb-4\">In an interview with Forbes last year, Ecclestone’s partner, real estate agent and lifestyle entrepreneur Sam Palmer, revealed that the 123-room, W-shaped mansion requires a staff of 50 people to keep the estate in working order.\r\n						A team of landscapers tends to grounds featuring rose gardens, citrus orchards and acres of lawn. In addition, the home’s many fountains, the statuary, koi ponds, swimming pool and sports courts all require regular maintenance.</p>', 'images/manor.jpg'),
(3, 'La Fin', 'Bel Air', '1200 Bel Air Road', 12, 18, 38000, 139000000, '<p class=\"fs-5 mb-4\">In Los Angeles, where luxury comes with the territory, La Fin takes it to the next level. Located at 1200 Bel Air Road in the tony Bel-Air neighborhood, the mega-mansion is now on the market for $139 million.</p>\r\n<p class=\"fs-5 mb-4\">Though LA is filled with glass box-style modern homes, La Fin’s level of opulence feels more apt for Dubai than the US. Shiny marble floors, gold accents, gleaming chandeliers and lacquered wood are just a few design details that are sure to attract a buyer who appreciates the finer things in life. More akin to a private hotel than a home, La Fin is perched high on a hill overlooking Bel-Air, downtown LA and Century City.</p>\r\n<p class=\"fs-5 mb-4\">The spec home was developed and is being sold by real estate investor and physician Joseph Englanoff, who was also a lender for headline-grabbing home the One, which is set to be auctioned in early March for $295 million with no reserve. So it comes as no surprise that his development La Fin feels similar to the no-expense-spared nature of the One—albeit with a slightly lower price tag. Dr. Englanoff named it La Fin, which translates to \'The End’ in French, because it signifies the buyer has reached the end of his search for the perfect home.</p>\r\n<p class=\"fs-5 mb-4\">If your definition of the perfect home is \'over-the-top,\' then the good doctor just might be right. The mansion spans nearly 40,000-square-feet and has 12 bedrooms and 18 bathrooms. It’s hard not to think of the epic parties that could be thrown here when you take a peek inside, with its 23-foot ceilings and large-scale layout. Materials were sourced from around the world, including various types of marble from Italy and throughout Europe.</p>\r\n<p class=\"fs-5 mb-4\">Of course, the home is wrapped in windows which welcome in plenty of natural light and frame views in each room. Throughout the home there are magnificent custom crystal chandeliers; most impressive, however, is the 44-foot chandelier that cascades through the center of the grand spiral staircase connecting the home’s three floors. It’s made of nearly 50,000 crystals.</p>', 'images/lafin1.jpg'),
(4, 'The One', 'Beverly Hills', '944 Airole Way', 21, 42, 105000, 265000000, '<p class=\"fs-5 mb-4\">The 105,000-square-foot Bel Air megamansion, which took well over 10 years to build, has come across its share of logistical and legal problems over the years, but was finally sold at auction on March 3. While the original auction asking price was $295 million—itself a reduction from the $340 million listing price in 2021, and the $500 million price tag before that—the home ended up selling for $126 million. The new owner will actually shell out $141 million, which is the sale price plus the 12% buyer premium to Concierge Auctions.</p>\r\n<p class=\"fs-5 mb-4\">This price is likely a disappointment to the megamansion’s developer, the controversial Nile Niami, and his investors, and it falls short of being the most expensive home sale in California—or even in Bel Air. But the One does now rank as the most expensive home ever sold at auction.</p>\r\n<p class=\"fs-5 mb-4\">Now that sale saga has concluded, we’re revealing a private look at just what $126 million will get you with this video tour of the jaw-dropping residence led by agents Branden and Rayni Williams of the Beverly Hills Estates, who shared the Bel Air listing with Aaron Kirman of Compass:</p>\r\n<p class=\"fs-5 mb-4\">The sprawling mansion is the brainchild of developer and former film producer Niami, who commissioned renowned Los Angeles architect Paul McClean to execute the larger-than-life project. Last October the property filed for Chapter 11 bankruptcy, so instead of listing for $500 million as was originally planned, it ended up hitting the auction block for $295 million.</p>\r\n<p class=\"fs-5 mb-4\">While that price tag may sound outlandish, there’s no denying the home’s bevy of amenities make it unique, even among other jaw-dropping estates in Los Angeles.</p>', 'images/the-one-2.jpg'),
(5, 'The Chartwell Estate', 'Hollmbly Hills', '750 Bel Air Rd', 10, 16, 22000, 195000000, '<p class=\"fs-5 mb-4\">The estate, known as Chartwell, has a storied history. Its exterior was used in the credits of \'The Beverly Hillbillies\' TV series. It was built in the 1930s and later owned by Chicago hotelier Arnold Kirkeby. Perenchio bought it in 1986 for $14 million and over time, added three adjacent parcels of land. In 2016, he acquired the neighboring former home of Ronald and Nancy Reagan, which is also included in the Murdoch sale.</p>\r\n<p class=\"fs-5 mb-4\">The property’s 25,000-square-foot main residence has 11 bedrooms, 18 bathrooms and a limestone facade. If the exterior looks familiar, that’s because it was used in \'The Beverly Hillbillies,\' a TV series that aired from 1962 to 1971, as the Clampetts’ mansion. The original home was designed by Los Angeles architect Sumner Spaulding and completed in 1935.</p>\r\n<p class=\"fs-5 mb-4\">Shortly after acquiring Chartwell in 1986, Perenchio did a complete gut renovation of the interiors that took five years to complete. During that time, he also extended the property’s footprint to more than 10 acres by purchasing and combining three neighboring lots. One of those lots included a home that Perenchio converted into Chartwell’s 5,700-square-foot guest house, a second was demolished to make room for a driveway, and a third was bulldozed to become a grassy helipad.</p>\r\n<p class=\"fs-5 mb-4\">Buried underneath the main residence is a subterranean level that dates to 1935. This lower level is accessible by elevator. It opens into two tunnels that lead to different areas of the estate.\r\nThe late Italian opera singer Luciano Pavarotti, who was a friend and a frequent guest, would often come down to these tunnels to practice because the acoustics were so great, Gold said.\r\nOne of the tunnels leads to the estate’s 75-foot swimming pool and pool house.</p>', 'images/bel_air.jpg'),
(6, 'The Reserve', 'Hollmbly Hills', '107 Delfern Dr', 10, 19, 21000, 85000000, '<p class=\"fs-5 mb-4\">British real estate developer Nick Candy has listed a 21,000-square-foot mid-century estate in Holmby Hills for $85 million.The 2-acre property, known as The Reserve, contains a five-bedroom main house and a newly built guest house in the exclusive West Los Angeles neighborhood, Mansion Global reported.\r\nCandy’s brother, Christian Candy, bought the property for $24 million in 2013, according to representatives for Candy Capital, and in 2018 sold the estate to his brother Nick.</p>\r\n<p class=\"fs-5 mb-4\">Built in 1959, the main house blends modernist architecture with art deco interiors and has been extensively remodeled over the years, according to The Agency, which has listed the property without an address.</p>\r\n<p class=\"fs-5 mb-4\">The 11,000-square-foot home, a gray single-story structure, has 14-foot ceilings, floor-to-ceiling windows and glass doors opening onto terraces. It has an art deco-inspired bar, a French regency-style cinema, study, wine room, children’s playroom, spa and fitness center.\'This home showcases classic 1950s modernist architecture with the finest modern updates throughout the two properties on site,\' Mauricio Umansky, founder and CEO of The Agency, said in a statement.</p>\r\n<p class=\"fs-5 mb-4\">The 10,000-square-foot, three-story guest house mirrors the style and dimensions of its forebear. The Agency lists the property with a total of 10 bedrooms and 17 baths between the two homes.</p>', 'images/reserve.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `users`
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
-- Indexes for table `blog_card`
--
ALTER TABLE `blog_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_card`
--
ALTER TABLE `blog_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
